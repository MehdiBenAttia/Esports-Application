<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Vangrg\ProfanityBundle\Entity\Profanity;
use Zend\Json\Expr;
use ProfanityAssert\ProfanityCheck;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * @Vich\Uploadable
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="le sujet doit comporter que des lettres"
     * )
     * @Groups("post:read")
     */
    private $sujet;

    /**
     * @ORM\Column(type="string", length=255)
    @Assert\Length(
     *     min = 10,
     *     max = 255,
     *     minMessage= "la description  est trop court",
     *     maxMessage="la description est trop long"
     * )
     * @Groups("post:read")

     */
    private $description;

    /**
     * @ORM\Column(type="integer")

     * @Groups("post:read")
     */
    private $nbr_jaime;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $nom_user;



    /**
     * @ORM\Column(type="datetime")
     * @Groups("post:read")
     */
    private $date_p;
    /**

     * @Vich\UploadableField(mapping="post_image", fileNameProperty="image")
     * @Groups("post:read")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
    @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="la communauté doit comporter que des lettres"
     * )
     * @Groups("post:read")
     */
    private $communaute;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="post", cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")

     */
    private $commentaires;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $analysePo;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }













    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNbrJaime(): ?int
    {
        return $this->nbr_jaime;
    }

    public function setNbrJaime(int $nbr_jaime): void
    {
        $this->nbr_jaime = $nbr_jaime;


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

    public function getNomUser(): ?string
    {
        return $this->nom_user;
    }

    public function setNomUser(string $nom_user): self
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    public function getCommunaute(): ?string
    {
        return $this->communaute;
    }

    public function setCommunaute(string $communaute): self
    {
        $this->communaute = $communaute;

        return $this;
    }

    public function getDateP(): ?\DateTimeInterface
    {
        return $this->date_p;
    }

    public function setDateP(\DateTimeInterface $date_p): self
    {
        $this->date_p = $date_p;

        return $this;
    }
    public function setImageFile(?File $imageFile = null): self
    {
        $this->imageFile = $imageFile;

       return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setPost($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPost() === $this) {
                $commentaire->setPost(null);
            }
        }

        return $this;
    }

    public function getAnalysePo(): ?string
    {
        return $this->analysePo;
    }

    public function setAnalysePo(?string $analysePo): self
    {
        $this->analysePo = $analysePo;

        return $this;
    }






}
