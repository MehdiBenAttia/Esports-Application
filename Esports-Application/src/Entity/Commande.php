<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Adresse;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("bawez")

     */
    private $idcommande;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livreur", inversedBy="Livreur")
     * @Groups("bawez")

     */
    private    $idlivreur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="product is required")
     * @Groups("bawez")

     */
    private $Produit;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Quantity is required")
     * @Groups("bawez")

     */
    private $Quantite;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Total is required")
     * @Groups("bawez")

     */
    private $Total;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Date is required")
     * @Groups("bawez")

     */
    protected $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Adresse", inversedBy="Commande")
     * @Groups("bawez")

     */
    private $adresse;



    public function __construct()
    {
        $this->date = new \DateTime('now');
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->adresse;
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
     * @return Adresse
     */
    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    /**

     * @return $this
     */
    public function setAdresse(Adresse $adresse): self
    {
        $this->adresse = $adresse;

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
