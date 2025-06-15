<?php

namespace App\Api\Provider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Security\Core\Security;

class ProduitCollectionProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
    private $produitRepository;
    private $security;

    public function __construct(ProduitRepository $produitRepository, Security $security)
    {
        $this->produitRepository = $produitRepository;
        $this->security = $security;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return $resourceClass === Produit::class;
    }

    public function getCollection(string $resourceClass, string $operationName = null, array $context = []): iterable
    {
        $user = $this->security->getUser();
        return $this->produitRepository->findBy(['user' => $user]);
    }
}
