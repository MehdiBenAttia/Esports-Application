<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idcommande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livreur", inversedBy="Livreur")
     */
    private    $idlivreur;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $Total;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    public function __construct()
    {
        $this->date = new \DateTime('now');
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }



    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->idcommande;
    }

    /**
     * @param mixed $idcommande
     */
    public function setIdCommande($idcommande): void
    {
        $this->idcommande = $idcommande;

    }

    /**
     * @return mixed
     */
    public function getIdLivreur():?Livreur
    {
        return $this->idlivreur;
    }

    /**
     * @param mixed $idlivreur
     */
    public function setIdLivreur(?livreur $idlivreur): self
    {
        $this->idlivreur = $idlivreur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->Produit;
    }

    /**
     * @param mixed $Produit
     */
    public function setProduit($Produit): void
    {
        $this->Produit = $Produit;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->Quantite;
    }

    /**
     * @param mixed $Quantite
     */
    public function setQuantite($Quantite): void
    {
        $this->Quantite = $Quantite;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param mixed $Total
     */
    public function setTotal($Total): void
    {
        $this->Total = $Total;
    }



}
