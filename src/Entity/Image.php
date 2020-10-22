<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\OneToOne(targetEntity=Internaute::class, mappedBy="Avatar", cascade={"persist", "remove"})
     */
    private $Avatar;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="Photo")
     */
    private $Photo;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="Logo")
     */
    private $Logo;

    /**
     * @ORM\OneToOne(targetEntity=CategoriesDeServices::class, mappedBy="Photo", cascade={"persist", "remove"})
     */
    private $PhotoServ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

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
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAvatar(): ?Internaute
    {
        return $this->Avatar;
    }

    public function setAvatar(?Internaute $Avatar): self
    {
        $this->Avatar = $Avatar;

        // set (or unset) the owning side of the relation if necessary
        $newAvatar = null === $Avatar ? null : $this;
        if ($Avatar->getAvatar() !== $newAvatar) {
            $Avatar->setAvatar($newAvatar);
        }

        return $this;
    }

    public function getPhoto(): ?Prestataire
    {
        return $this->Photo;
    }

    public function setPhoto(?Prestataire $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getLogo(): ?Prestataire
    {
        return $this->Logo;
    }

    public function setLogo(?Prestataire $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }

    public function getPhotoServ(): ?CategoriesDeServices
    {
        return $this->PhotoServ;
    }

    public function setPhotoServ(?CategoriesDeServices $PhotoServ): self
    {
        $this->PhotoServ = $PhotoServ;

        // set (or unset) the owning side of the relation if necessary
        $newPhoto = null === $PhotoServ ? null : $this;
        if ($PhotoServ->getPhoto() !== $newPhoto) {
            $PhotoServ->setPhoto($newPhoto);
        }

        return $this;
    }
}
