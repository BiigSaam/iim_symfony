<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Repository\ProduitRepository;

class PanierService
{
    private $session;
    private $produitRepository;

    public function __construct(RequestStack $requestStack, ProduitRepository $produitRepository)
    {
        $this->session = $requestStack->getSession();
        $this->produitRepository = $produitRepository;
    }

    public function getPanier(): array
    {
        return $this->session->get('panier', []);
    }

    public function getProduits(): array
    {
        return $this->produitRepository->findBy(['id' => $this->getPanier()]);
    }

    public function getTotal(): int
    {
        return array_reduce($this->getProduits(), fn($total, $p) => $total + $p->getPrix(), 0);
    }

    public function vider(): void
    {
        $this->session->remove('panier');
    }
}