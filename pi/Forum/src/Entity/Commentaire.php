<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagec;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionc;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datec;
    /**

     * @Vich\UploadableField(mapping="commentaire_image", fileNameProperty="imagec")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postref;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="commentaires")
     * @Assert\NotBlank
     */
    private $post;








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







}
