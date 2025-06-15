<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Form\ProfileType;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="app_profile")
     */
    public function index(Request $request, EntityManagerInterface $entityManager, NotificationRepository $notificationRepository): Response
    {
        $user = $this->getUser();

        if (!$user->isActif()) {
            $existing = $notificationRepository->findOneBy([
                'user' => $user,
                'type' => 'Compte bloqué',
            ]);

            if (!$existing) {
                $notification = new Notification();
                $notification->setUser($user);
                $notification->setType('Compte bloqué');
                $notification->setLabel('Votre compte a été désactivé le ' . (new \DateTimeImmutable())->format('d/m/Y à H:i'));
                $notification->setCreatedAt(new \DateTimeImmutable());
                $notification->setUpdatedAt(new \DateTimeImmutable());

                $entityManager->persist($notification);
                $entityManager->flush();
            }
        }

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Votre profil a été mis à jour.');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}