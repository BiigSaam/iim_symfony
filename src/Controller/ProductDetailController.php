<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class ProductDetailController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function index(Produit $produit): Response
    {
        return $this->render('product/index.html.twig', [
            'produit' => $produit,
        ]);
    }
}
