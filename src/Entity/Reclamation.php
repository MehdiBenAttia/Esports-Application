<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez remplir ce champ !")
     * @Assert\Length(
     *     min = 3,
     *     max = 50,
     *     minMessage= "Le nom  est trop court",
     *     maxMessage="Le nom est trop long"
     * )
     */
    private $NomUser;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez remplir ce champ !")
     * @Assert\Length(
     *     min = 5,
     *     max=250,
     *     minMessage= "Le message  est trop court",
     *     maxMessage="Le message est trop long")
     */
    private $Message;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\OneToMany(targetEntity=Reponses::class, mappedBy="reclamation", cascade={"remove"})
     */
    private $reponses;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="reclamations")
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rep;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez remplir ce champ !")
     * @Assert\Email(message = "Ce mail '{{ value }}' n'est pas valide.")
     */

    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;





    public function __construct()
    {
        $this->reponses = new ArrayCollection();


    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUser(): ?string
    {
        return $this->NomUser;
    }

    public function setNomUser(string $NomUser): self
    {
        $this->NomUser = $NomUser;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * @return Collection|Reponses[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponses $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setReclamation($this);
        }

        return $this;
    }

    public function removeReponse(Reponses $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getReclamation() === $this) {
                $reponse->setReclamation(null);
            }
        }

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getRep(): ?string
    {
        return $this->rep;
    }

    public function setRep(string $rep): self
    {
        $this->rep = $rep;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }



   }
