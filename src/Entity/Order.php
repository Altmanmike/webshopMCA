<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:"date", type:"datetime_immutable", nullable: true)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(name:"produits", type:"array", nullable: true)]
    private ?array $produits = [];

    #[ORM\Column(name:"nom_client", type:"string", length: 50)]
    private ?string $nomClient;

    #[ORM\Column(name:"prenom_client", type:"string", length: 50)]
    private ?string $prenomClient;

    #[ORM\Column(name:"adresse_client", type:"string", length: 500)]
    private ?string $adresseClient;

    #[ORM\Column(name:"tel_client", type:"string", length: 20)]
    private ?string $telClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
    
    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getProduits(): array
    {
        return $this->produits;  
    }

    public function setProduits(?array $produits): self
    {
        $this->produits = $produits;

        return $this;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresseClient;
    }

    public function setAdresseClient(string $adresseClient): self
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->telClient;
    }

    public function setTelClient(string $telClient): self
    {
        $this->telClient = $telClient;

        return $this;
    }
}
