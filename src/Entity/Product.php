<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Delete;

/**
 * Secured resource.
 */
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(security: "is_granted('ROLE_USER')", securityMessage: 'Nécessite une authentification par token'),
        new Put(security: "is_granted('ROLE_USER')", securityMessage: 'Nécessite une authentification par token'),
        new Patch(security: "is_granted('ROLE_USER')", securityMessage: 'Nécessite une authentification par token'),
        new Delete(security: "is_granted('ROLE_USER')", securityMessage: 'Nécessite une authentification par token')
    ]
)]
#[ORM\Table(name:"product")]
#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(name:"nom", type:"string", length: 50, nullable: true)]
    private ?string $nom;

    #[ORM\Column(name:"description", type:"string", length: 1000, nullable: true)]
    private ?string $description;

    #[ORM\Column(name:"prix", type:"float", precision:2, nullable: true)]
    private ?float $prix;

    #[ORM\Column(name:"qte_stock", type:"integer", nullable: true)]
    private ?int $qteStock;

    #[ORM\Column(name:"image", type:"string", length: 500, nullable: true)]
    private ?string $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQteStock(): ?int
    {
        return $this->qteStock;
    }

    public function setQteStock(?int $qteStock): self
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
