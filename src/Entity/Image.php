<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Internaute::class, mappedBy="avatar", cascade={"persist", "remove"})
     */
    private $avatar;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="photo")
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="logo")
     */
    private $logo;

    /**
     * @ORM\OneToOne(targetEntity=CategoriesDeServices::class, mappedBy="photo", cascade={"persist", "remove"})
     */
    private $photoServ;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

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

    public function getAvatar(): ?Internaute
    {
        return $this->avatar;
    }

    public function setAvatar(?Internaute $avatar): self
    {
        $this->avatar = $avatar;

        // set (or unset) the owning side of the relation if necessary
        $newAvatar = null === $avatar ? null : $this;
        if ($avatar->getAvatar() !== $newAvatar) {
            $avatar->setAvatar($newAvatar);
        }

        return $this;
    }

    public function getPhoto(): ?Prestataire
    {
        return $this->photo;
    }

    public function setPhoto(?Prestataire $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getLogo(): ?Prestataire
    {
        return $this->logo;
    }

    public function setLogo(?Prestataire $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPhotoServ(): ?CategoriesDeServices
    {
        return $this->photoServ;
    }

    public function setPhotoServ(?CategoriesDeServices $photoServ): self
    {
        $this->photoServ = $photoServ;

        // set (or unset) the owning side of the relation if necessary
        $newPhoto = null === $photoServ ? null : $this;
        if ($photoServ->getPhoto() !== $newPhoto) {
            $photoServ->setPhoto($newPhoto);
        }

        return $this;
    }
}
