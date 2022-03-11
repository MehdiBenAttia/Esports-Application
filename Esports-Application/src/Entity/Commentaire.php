<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
  * @Vich\Uploadable
 */
class Commentaire
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
     * @Groups("post:read")
     */
    private $nomuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $imagec;

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
    private $descriptionc;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("post:read")
     */
    private $datec;
    /**

     * @Vich\UploadableField(mapping="commentaire_image", fileNameProperty="imagec")
     * @Groups("post:read")
     *
     * @var File|null
     */
    private $imageFile;



    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="commentaires")
     * @Assert\NotBlank

     */
    private $post;

    /**
     * @ORM\OneToMany(targetEntity=Reply::class, mappedBy="commentaire", orphanRemoval=true)
     */
    private $replies;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $analyseCo;



    public function __construct()
    {
        $this->replycos = new ArrayCollection();
        $this->replies = new ArrayCollection();
    }








    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomuser(): ?string
    {
        return $this->nomuser;
    }

    public function setNomuser(string $nomuser): self
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    public function getImagec(): ?string
    {
        return $this->imagec;
    }

    public function setImagec(?string $imagec): self
    {
        $this->imagec = $imagec;

        return $this;
    }

    public function getDescriptionc(): ?string
    {
        return $this->descriptionc;
    }

    public function setDescriptionc(string $descriptionc): self
    {
        $this->descriptionc = $descriptionc;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;


    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): self
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return Collection<int, Reply>
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(Reply $reply): self
    {
        if (!$this->replies->contains($reply)) {
            $this->replies[] = $reply;
            $reply->setCommentaire($this);
        }

        return $this;
    }

    public function removeReply(Reply $reply): self
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getCommentaire() === $this) {
                $reply->setCommentaire(null);
            }
        }

        return $this;
    }

    public function getAnalyseCo(): ?string
    {
        return $this->analyseCo;
    }

    public function setAnalyseCo(?string $analyseCo): self
    {
        $this->analyseCo = $analyseCo;

        return $this;
    }









}
