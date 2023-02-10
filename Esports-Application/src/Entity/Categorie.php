<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read1")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read1" , "teste")
     */

    private $nom_categ;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read1" )
     */
    private $nom_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     * @Groups("post:read1")
     */
    private $mail_fournisseur;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="categorie" , cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
public function getNomCateg(): ?string
{
    return $this->nom_categ;
}


    public function setNomCateg(string $nom_categ): self
    {
        $this->nom_categ = $nom_categ;

        return $this;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nom_fournisseur;
    }

    public function setNomFournisseur(string $nom_fournisseur): self
    {
        $this->nom_fournisseur = $nom_fournisseur;

        return $this;
    }

    public function getMailFournisseur(): ?string
    {
        return $this->mail_fournisseur;
    }

    public function setMailFournisseur(string $mail_fournisseur): self
    {
        $this->mail_fournisseur = $mail_fournisseur;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }
}
