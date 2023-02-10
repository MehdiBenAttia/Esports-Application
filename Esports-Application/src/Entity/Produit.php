<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\component\Serializer\Annotation\Groups;




/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 *   @Vich\Uploadable()
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("teste")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups("teste")
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *     min = 1,
     *     max = 20,
     *     minMessage= "le nom  est trop court",
     *     maxMessage="le nom est trop long"
     * )
     * @Groups("teste")
     */
    private $nom;

    /**
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="la marque ne peut pas contenir des lettres "
     * )
     * @ORM\Column(type="string", length=255)
     * @Groups("teste")
     */
    private $marque;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotEqualTo(
     *     value = 0,
     *     message ="le prix d'un article ne peur pas etre 0"
     * )
     * @Groups("teste")
     */
    private $prix;

    /**
     * @Assert\Length(
     *     min = 5,
     *     max = 50,
     *     minMessage= "la description  est trop court",
     *     maxMessage="le description est trop long"
     * )
     * @ORM\Column(type="string", length=255,nullable="true")
     * @Groups("teste")
     */
    private $type;

    /**
     *
     *
     * @Vich\UploadableField(mapping="produit_image", fileNameProperty="image")
     *
     * @var File|null
     */
    private $imageFile;


    /**
     * @ORM\Column(type="string", length=255,nullable=false)
     * @Groups("teste")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits" , fetch="EAGER" )
     * @Groups("teste")
     */

    private $categorie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("teste")
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="produit",cascade={"remove"})
     */
    private $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->nom;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
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

    public function getImageFile(): ?File
    {

        return $this->imageFile;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setProduit($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getProduit() === $this) {
                $review->setProduit(null);
            }
        }

        return $this;
    }

}
