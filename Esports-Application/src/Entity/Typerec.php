<?php

namespace App\Entity;

use App\Repository\TyperecRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=TyperecRepository::class)
 */
class Typerec
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("fares")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups( "fares" , "yeah")
     */
    private $catrec;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("fares")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity=Reclamation::class, mappedBy="categorie")
     *
     */
    private $reclamations;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("fares")
     */
    private $descrip;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("fares")
     */
    private $level;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatrec(): ?string
    {
        return $this->catrec;
    }

    public function setCatrec(string $catrec): self
    {
        $this->catrec = $catrec;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Reclamation[]
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations[] = $reclamation;
            $reclamation->setCategorie($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getCategorie() === $this) {
                $reclamation->setCategorie(null);
            }
        }

        return $this;
    }

    public function getDescrip(): ?string
    {
        return $this->descrip;
    }

    public function setDescrip(string $descrip): self
    {
        $this->descrip = $descrip;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }
}
