<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=JeuxRepository::class)
 * @Vich\Uploadable()
 */
class Jeux
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("test")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champ nom est obligatoire")
     * @Groups("test")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable="false")
     * @Groups("test")

     */
    private $image;

    /**
     *
     * @Vich\UploadableField(mapping="jeux_image", fileNameProperty="image")
     * @Assert\NotBlank(message="Invalid: vous devez joindre une image")
     * @var File|null
     * @Groups("test")
     */
    private $imageFile;



    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     * @Groups("test")
     */
    private $dates;

    /**
     * @ORM\OneToMany(targetEntity=Competition::class, mappedBy="jeux",cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     *
     */
    private $competitons;


    /**
     * @ORM\Column(type="datetime")
     * @Groups("test")
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieC::class, inversedBy="games" , fetch="EAGER")
     * @Groups("test")
     */
    private $categorie;



    public function __construct()
    {
        $this->competitons = new ArrayCollection();
    }



    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


    public function setImageFile(?File $imageFile = null): self
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile)
        {
            $this->updated_at = new \DateTime('now');
        }
        return $this;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }


    public function getDates(): ?string
    {
        return $this->dates;
    }

    public function setDates(string $dates): self
    {
        $this->dates = $dates;

        return $this;
    }

    /**
     * @return Collection|Competition[]
     */
    public function getCompetitons(): Collection
    {
        return $this->competitons;
    }

    public function addCompetiton(Competition $competiton): self
    {
        if (!$this->competitons->contains($competiton)) {
            $this->competitons[] = $competiton;
            $competiton->setJeux($this);
        }
        return $this;
    }

    public function removeCompetiton(Competition $competiton): self
    {
        if ($this->competitons->removeElement($competiton)) {
            // set the owning side to null (unless already changed)
            if ($competiton->getJeux() === $this) {
                $competiton->setJeux(null);
            }
        }

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getCategorie(): ?CategorieC
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieC $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }




}
