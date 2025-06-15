<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Notification;
use App\Repository\ProduitRepository;
use App\Service\PanierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="app_panier")
     */
    public function index(Request $request, ProduitRepository $produitRepository): Response
    {
        $panier = $request->getSession()->get('panier', []);
        $produits = $produitRepository->findBy(['id' => $panier]);

        $total = array_reduce($produits, fn($sum, $p) => $sum + $p->getPrix(), 0);

        return $this->render('panier/index.html.twig', [
            'produits' => $produits,
            'total' => $total
        ]);
    }

    /**
     * @Route("/panier/ajouter/{id}", name="app_panier_ajouter")
     */
    public function ajouter(Request $request, Produit $produit): RedirectResponse
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        if (!in_array($produit->getId(), $panier)) {
            $panier[] = $produit->getId();
            $session->set('panier', $panier);
        }

        return $this->redirectToRoute('app_home');
    }

    /**
     * @Route("/panier/supprimer/{id}", name="app_panier_supprimer")
     */
    public function supprimer(Request $request, int $id): RedirectResponse
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        if (($key = array_search($id, $panier)) !== false) {
            unset($panier[$key]);
            $session->set('panier', array_values($panier));
        }

        return $this->redirectToRoute('app_panier');
    }

    /**
     * @Route("/panier/valider", name="app_panier_valider")
     */
    public function valider(PanierService $panierService, ProduitRepository $produitRepository, EntityManagerInterface $em, Security $security): Response
    {
        $user = $security->getUser();
        $panier = $panierService->getPanier();
        $total = $panierService->getTotal();

        if (!$user || !$user->isActif() || $user->getPoints() < $total) {
            $this->addFlash('error', 'Vous ne pouvez pas valider cet achat.');
            return $this->redirectToRoute('app_panier');
        }

        $user->setPoints($user->getPoints() - $total);

        $notification = new Notification();
        $notification->setUser($user);
        $notification->setType('Achat');
        $notification->setLabel("Achat effectué par {$user->getNom()} pour un total de {$total} points le " . (new \DateTimeImmutable())->format('d/m/Y à H:i'));
        $notification->setCreatedAt(new \DateTimeImmutable());
        $notification->setUpdatedAt(new \DateTimeImmutable());
        $em->persist($notification);

        $panierService->vider();

        $em->flush();

        $this->addFlash('success', 'Achat validé avec succès !');
        return $this->redirectToRoute('app_home');
    }
}