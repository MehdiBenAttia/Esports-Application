<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="Name is required")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="Last Name is required")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="Adress is required")
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="City is required")
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="Email is required")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     *  @Assert\Length(
     *     min = 8,
     *     max = 8,
     *     minMessage= "Le N°tel  est trop court",
     *     maxMessage="Le N°tel est trop long")
     * @Assert\NotBlank (message="Phone  is required")
     */
    private $Tel;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="adresse")
     */
    private $Commande;

    public function __construct()
    {
        $this->Commande = new ArrayCollection();
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

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

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

    public function getTel(): ?int
    {
        return $this->Tel;
    }

    public function setTel(int $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommande(): Collection
    {
        return $this->Commande;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->Commande->contains($commande)) {
            $this->Commande[] = $commande;
            $commande->setAdresse($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->Commande->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getAdresse() === $this) {
                $commande->setAdresse(null);
            }
        }

        return $this;
    }
}
