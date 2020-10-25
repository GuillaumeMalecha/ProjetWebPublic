<?php

namespace App\Entity;

use App\Repository\CategoriesDeServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesDeServicesRepository::class)
 */
class CategoriesDeServices
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
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enAvant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $valide;

    /**
     * @ORM\ManyToMany(targetEntity=Prestataire::class, mappedBy="proposer")
     */
    private $proposer;

    /**
     * @ORM\OneToOne(targetEntity=Image::class, inversedBy="photoServ", cascade={"persist", "remove"})
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity=Promotion::class, mappedBy="concerner")
     */
    private $concerner;

    public function __construct()
    {
        $this->proposer = new ArrayCollection();
        $this->concerner = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEnAvant(): ?bool
    {
        return $this->enAvant;
    }

    public function setEnAvant(bool $enAvant): self
    {
        $this->enAvant = $enAvant;

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

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * @return Collection|Prestataire[]
     */
    public function getProposer(): Collection
    {
        return $this->proposer;
    }

    public function addProposer(Prestataire $proposer): self
    {
        if (!$this->proposer->contains($proposer)) {
            $this->proposer[] = $proposer;
            $proposer->addProposer($this);
        }

        return $this;
    }

    public function removeProposer(Prestataire $proposer): self
    {
        if ($this->proposer->contains($proposer)) {
            $this->proposer->removeElement($proposer);
            $proposer->removeProposer($this);
        }

        return $this;
    }

    public function getPhoto(): ?Image
    {
        return $this->photo;
    }

    public function setPhoto(?Image $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|Promotion[]
     */
    public function getConcerner(): Collection
    {
        return $this->concerner;
    }

    public function addConcerner(Promotion $concerner): self
    {
        if (!$this->concerner->contains($concerner)) {
            $this->concerner[] = $concerner;
            $concerner->setConcerner($this);
        }

        return $this;
    }

    public function removeConcerner(Promotion $concerner): self
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
}
