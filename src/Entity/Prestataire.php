<?php

namespace App\Entity;

use App\Repository\PrestataireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrestataireRepository::class)
 */
class Prestataire
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
    private $eMailContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numTVA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siteInternet;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateur::class, inversedBy="profil", cascade={"persist", "remove"})
     */
    private $profil;

    /**
     * @ORM\ManyToMany(targetEntity=Internaute::class, mappedBy="favori")
     */
    private $favori;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="concerner")
     */
    private $concerner;

    /**
     * @ORM\OneToMany(targetEntity=Promotion::class, mappedBy="offrir")
     */
    private $offrir;

    /**
     * @ORM\OneToMany(targetEntity=Stage::class, mappedBy="organiser")
     */
    private $organiser;

    /**
     * @ORM\ManyToMany(targetEntity=CategoriesDeServices::class, inversedBy="proposer")
     */
    private $proposer;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="photo")
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="logo")
     */
    private $logo;

    public function __construct()
    {
        $this->favori = new ArrayCollection();
        $this->concerner = new ArrayCollection();
        $this->offrir = new ArrayCollection();
        $this->organiser = new ArrayCollection();
        $this->proposer = new ArrayCollection();
        $this->photo = new ArrayCollection();
        $this->logo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEMailContact(): ?string
    {
        return $this->eMailContact;
    }

    public function setEMailContact(string $eMailContact): self
    {
        $this->eMailContact = $eMailContact;

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

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getNumTVA(): ?string
    {
        return $this->numTVA;
    }

    public function setNumTVA(string $numTVA): self
    {
        $this->numTVA = $numTVA;

        return $this;
    }

    public function getSiteInternet(): ?string
    {
        return $this->siteInternet;
    }

    public function setSiteInternet(string $siteInternet): self
    {
        $this->siteInternet = $siteInternet;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur(?Utilisateur $Utilisateur): self
    {
        $this->Utilisateur = $Utilisateur;

        return $this;
    }

    /**
     * @return Collection|Internaute[]
     */
    public function getFavori(): Collection
    {
        return $this->favori;
    }

    public function addFavori(Internaute $favori): self
    {
        if (!$this->favori->contains($favori)) {
            $this->favori[] = $favori;
            $favori->addFavori($this);
        }

        return $this;
    }

    public function removeFavori(Internaute $favori): self
    {
        if ($this->favori->contains($favori)) {
            $this->favori->removeElement($favori);
            $favori->removeFavori($this);
        }

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getConcerner(): Collection
    {
        return $this->concerner;
    }

    public function addConcerner(Commentaire $concerner): self
    {
        if (!$this->concerner->contains($concerner)) {
            $this->concerner[] = $concerner;
            $concerner->setConcerner($this);
        }

        return $this;
    }

    public function removeConcerner(Commentaire $concerner): self
    {
        if ($this->concerner->contains($concerner)) {
            $this->concerner->removeElement($concerner);
            // set the owning side to null (unless already changed)
            if ($concerner->getConcerner() === $this) {
                $concerner->setConcerner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Promotion[]
     */
    public function getOffrir(): Collection
    {
        return $this->offrir;
    }

    public function addOffrir(Promotion $offrir): self
    {
        if (!$this->offrir->contains($offrir)) {
            $this->offrir[] = $offrir;
            $offrir->setOffrir($this);
        }

        return $this;
    }

    public function removeOffrir(Promotion $offrir): self
    {
        if ($this->offrir->contains($offrir)) {
            $this->offrir->removeElement($offrir);
            // set the owning side to null (unless already changed)
            if ($offrir->getOffrir() === $this) {
                $offrir->setOffrir(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Stage[]
     */
    public function getOrganiser(): Collection
    {
        return $this->organiser;
    }

    public function addOrganiser(Stage $organiser): self
    {
        if (!$this->organiser->contains($organiser)) {
            $this->organiser[] = $organiser;
            $organiser->setOrganiser($this);
        }

        return $this;
    }

    public function removeOrganiser(Stage $organiser): self
    {
        if ($this->organiser->contains($organiser)) {
            $this->organiser->removeElement($organiser);
            // set the owning side to null (unless already changed)
            if ($organiser->getOrganiser() === $this) {
                $organiser->setOrganiser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CategoriesDeServices[]
     */
    public function getProposer(): Collection
    {
        return $this->proposer;
    }

    public function addProposer(CategoriesDeServices $proposer): self
    {
        if (!$this->proposer->contains($proposer)) {
            $this->proposer[] = $proposer;
        }

        return $this;
    }

    public function removeProposer(CategoriesDeServices $proposer): self
    {
        if ($this->proposer->contains($proposer)) {
            $this->proposer->removeElement($proposer);
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getPhoto(): Collection
    {
        return $this->photo;
    }

    public function addPhoto(Image $photo): self
    {
        if (!$this->photo->contains($photo)) {
            $this->photo[] = $photo;
            $photo->setPhoto($this);
        }

        return $this;
    }

    public function removePhoto(Image $photo): self
    {
        if ($this->photo->contains($photo)) {
            $this->photo->removeElement($photo);
            // set the owning side to null (unless already changed)
            if ($photo->getPhoto() === $this) {
                $photo->setPhoto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getLogo(): Collection
    {
        return $this->logo;
    }

    public function addLogo(Image $logo): self
    {
        if (!$this->logo->contains($logo)) {
            $this->logo[] = $logo;
            $logo->setLogo($this);
        }

        return $this;
    }

    public function removeLogo(Image $logo): self
    {
        if ($this->logo->contains($logo)) {
            $this->logo->removeElement($logo);
            // set the owning side to null (unless already changed)
            if ($logo->getLogo() === $this) {
                $logo->setLogo(null);
            }
        }

        return $this;
    }
}
