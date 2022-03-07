<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 * @UniqueEntity(
 *     fields={"nom"},
 *     errorPath="nom",
 *     message="Cette catégorie existe déja."
 * )
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**

     * @ORM\Column(type="string", length=255,unique=true)
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Jeux::class, mappedBy="categorie",cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Groups("post:read")
     */
    private $games;


    public function __construct()
    {
        $this->games = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Jeux[]
     */
    public function getGames(): Collection
    {
        return $this->games;
    }

    public function addGame(Jeux $game): self
    {
        if (!$this->games->contains($game)) {
            $this->games[] = $game;
            $game->setCategorieId($this);
        }

        return $this;
    }

    public function removeGame(Jeux $game): self
    {
        if ($this->games->removeElement($game)) {
            // set the owning side to null (unless already changed)
            if ($game->getCategorieId() === $this) {
                $game->setCategorieId(null);
            }
        }

        return $this;
    }
}
