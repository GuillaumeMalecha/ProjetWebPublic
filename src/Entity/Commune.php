<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommuneRepository::class)
 */
class Commune
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
    private $commune;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="adresseCommune", orphanRemoval=true)
     */
    private $adresseCommune;

    public function __construct()
    {
        $this->adresseCommune = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getAdresseCommune(): Collection
    {
        return $this->adresseCommune;
    }

    public function addAdresseCommune(Utilisateur $adresseCommune): self
    {
        if (!$this->adresseCommune->contains($adresseCommune)) {
            $this->adresseCommune[] = $adresseCommune;
            $adresseCommune->setAdresseCommune($this);
        }

        return $this;
    }

    public function removeAdresseCommune(Utilisateur $adresseCommune): self
    {
        if ($this->adresseCommune->contains($adresseCommune)) {
            $this->adresseCommune->removeElement($adresseCommune);
            // set the owning side to null (unless already changed)
            if ($adresseCommune->getAdresseCommune() === $this) {
                $adresseCommune->setAdresseCommune(null);
            }
        }

        return $this;
    }
}
