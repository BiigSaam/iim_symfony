<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource(
 *    normalizationContext={"groups"={"produit:read"}},
 *    denormalizationContext={"groups"={"produit:write"}},
 *    collectionOperations={
 *         "get"={
 *             "security"="is_granted('ROLE_ADMIN')",
 *             "provider"=App\Api\Provider\ProduitCollectionProvider::class
 *         }
 *     },
 *     itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"produit:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"produit:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"produit:read"})
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Groups({"produit:read"})
     */
    private $category;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"produit:read"})
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"produit:read"})
     */
    private $user;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Groups({"produit:read"})
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Groups({"produit:read"})
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
