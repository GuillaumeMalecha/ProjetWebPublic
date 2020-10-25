<?php

namespace App\Entity;

use App\Repository\InternauteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InternauteRepository::class)
 * @ORM\Table(name="internautes")
 */
class Internaute extends Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newsletter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\ManyToMany(targetEntity=Prestataire::class, inversedBy="favori")
     */
    private $favori;

    /**
     * @ORM\OneToOne(targetEntity=Image::class, inversedBy="avatar", cascade={"persist", "remove"})
     */
    private $avatar;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="rediger")
     */
    private $rediger;

    /**
     * @ORM\OneToMany(targetEntity=Abus::class, mappedBy="prevenir")
     */
    private $prevenir;

    /**
     * @ORM\ManyToMany(targetEntity=Bloc::class, inversedBy="choix")
     */
    private $choix;

    public function __construct()
    {
        $this->favori = new ArrayCollection();
        $this->rediger = new ArrayCollection();
        $this->prevenir = new ArrayCollection();
        $this->choix = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(bool $newsletter): self
    {
        $this->newsletter = $newsletter;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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
     * @return Collection|Prestataire[]
     */
    public function getFavori(): Collection
    {
        return $this->favori;
    }

    public function addFavori(Prestataire $favori): self
    {
        if (!$this->favori->contains($favori)) {
            $this->favori[] = $favori;
        }

        return $this;
    }

    public function removeFavori(Prestataire $favori): self
    {
        if ($this->favori->contains($favori)) {
            $this->favori->removeElement($favori);
        }

        return $this;
    }

    public function getAvatar(): ?Image
    {
        return $this->avatar;
    }

    public function setAvatar(?Image $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getRediger(): Collection
    {
        return $this->rediger;
    }

    public function addRediger(Commentaire $rediger): self
    {
        if (!$this->rediger->contains($rediger)) {
            $this->rediger[] = $rediger;
            $rediger->setRediger($this);
        }

        return $this;
    }

    public function removeRediger(Commentaire $rediger): self
    {
        if ($this->rediger->contains($rediger)) {
            $this->rediger->removeElement($rediger);
            // set the owning side to null (unless already changed)
            if ($rediger->getRediger() === $this) {
                $rediger->setRediger(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Abus[]
     */
    public function getPrevenir(): Collection
    {
        return $this->prevenir;
    }

    public function addPrevenir(Abus $prevenir): self
    {
        if (!$this->prevenir->contains($prevenir)) {
            $this->prevenir[] = $prevenir;
            $prevenir->setPrevenir($this);
        }

        return $this;
    }

    public function removePrevenir(Abus $prevenir): self
    {
        if ($this->prevenir->contains($prevenir)) {
            $this->prevenir->removeElement($prevenir);
            // set the owning side to null (unless already changed)
            if ($prevenir->getPrevenir() === $this) {
                $prevenir->setPrevenir(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Bloc[]
     */
    public function getChoix(): Collection
    {
        return $this->choix;
    }

    public function addChoix(Bloc $choix): self
    {
        if (!$this->choix->contains($choix)) {
            $this->choix[] = $choix;
        }

        return $this;
    }

    public function removeChoix(Bloc $choix): self
    {
        if ($this->choix->contains($choix)) {
            $this->choix->removeElement($choix);
        }

        return $this;
    }
}
