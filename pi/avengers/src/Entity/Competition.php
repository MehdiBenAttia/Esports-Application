<?php

namespace App\Entity;

use App\Repository\CompetitionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;


/**
 * @ORM\Entity(repositoryClass=CompetitionRepository::class)
 * @Vich\Uploadable()
 */
class Competition
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbparticipants;

    /**
     * @ORM\ManyToOne(targetEntity=Jeux::class, inversedBy="competitons")
     */
    private $jeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="competition_image", fileNameProperty="image")
     * @Assert\NotBlank(message="Invalid: vous devez joindre une image")
     * @var File|null
     */
    private $imageFile;


    /**
     * @ORM\Column(type="string", length=255)
     */

    private $dateDeb;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Expression("this.getDateDeb()<this.getDateFin()",message="Invalide: Date doit étre supérieur à la date de début")

     */
    private $dateFin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

//    /**
//     * @ORM\Column (type="string",length=255)
//     */
//
//    private $currentDate;

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

    public function getNbparticipants(): ?int
    {
        return $this->nbparticipants;
    }

    public function setNbparticipants(int $nbparticipants): self
    {
        $this->nbparticipants = $nbparticipants;

        return $this;
    }

    public function getJeux(): ?Jeux
    {
        return $this->jeux;
    }

    public function setJeux(?Jeux $jeux): self
    {
        $this->jeux = $jeux;

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

    public function getDateDeb(): ?string
    {
        return $this->dateDeb;
    }

//    public function getCurrentDate(): ?string
//    {
//        $time = new \Date();
//        $this->currentDate=$time;
//        echo $this->currentDate->format('H:i:s \O\n Y-m-d');
//        return $this->currentDate;
//    }

    public function setDateDeb(string $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
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
}
