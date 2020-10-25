<?php

namespace App\Entity;

use App\Repository\LocaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocaliteRepository::class)
 */
class Localite
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
    private $localite;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="adresseLocalite", orphanRemoval=true)
     */
    private $adresseLocalite;

    public function __construct()
    {
        $this->adresseLocalite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getAdresseLocalite(): Collection
    {
        return $this->adresseLocalite;
    }

    public function addAdresseLocalite(Utilisateur $adresseLocalite): self
    {
        if (!$this->adresseLocalite->contains($adresseLocalite)) {
            $this->adresseLocalite[] = $adresseLocalite;
            $adresseLocalite->setAdresseLocalite($this);
        }

        return $this;
    }

    public function removeAdresseLocalite(Utilisateur $adresseLocalite): self
    {
        if ($this->adresseLocalite->contains($adresseLocalite)) {
            $this->adresseLocalite->removeElement($adresseLocalite);
            // set the owning side to null (unless already changed)
            if ($adresseLocalite->getAdresseLocalite() === $this) {
                $adresseLocalite->setAdresseLocalite(null);
            }
        }

        return $this;
    }
}
