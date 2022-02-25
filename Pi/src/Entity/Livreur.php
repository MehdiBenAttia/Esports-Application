<?php

namespace App\Entity;

use App\Repository\LivreurRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreurRepository::class)
 */
class Livreur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;
    /**
     * @ORM\OneToMany (targetEntity="App\Entity\Commande", mappedBy="idlivreur")
     */
    private    $Livreur;


    /**
     * @param mixed $Livreur
     */
    public function setLivreur($Livreur): void
    {
        $this->Livreur = $Livreur;
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->Tel;
    }

    public function setTel(int $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
    /**
     * @return Collection|Livreur[]
     */
    public function getLivreur(): Collection
    {
        return $this->livreur;
    }

    public function addLivreur(Livreur $livreur): self
    {
        if (!$this->livreur->contains($livreur)) {
            $this->livreur[] = $livreur;
            $livreur->setIdLivreur($this);
        }

        return $this;
    }

    public function removeLivreur(Livreur $livreur): self
    {
        if ($this->livreur->removeElement($livreur)) {
            // set the owning side to null (unless already changed)
            if ($livreur->getIdLivreur() === $this) {
                $livreur->getIdLivreur(null);
            }
        }

        return $this;
    }
}
