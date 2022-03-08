<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $noteProduit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avis;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="reviews")
     */
    private $produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoteProduit(): ?int
    {
        return $this->noteProduit;
    }

    public function setNoteProduit(int $noteProduit): self
    {
        $this->noteProduit = $noteProduit;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}
