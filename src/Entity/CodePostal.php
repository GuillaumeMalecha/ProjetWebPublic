<?php

namespace App\Entity;

use App\Repository\CodePostalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CodePostalRepository::class)
 */
class CodePostal
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
    private $cp;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="adresseCP", orphanRemoval=true)
     */
    private $adresseCp;

    public function __construct()
    {
        $this->adresseCp = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getAdresseCp(): Collection
    {
        return $this->adresseCp;
    }

    public function addAdresseCP(Utilisateur $adresseCP): self
    {
        if (!$this->adresseCp->contains($adresseCP)) {
            $this->adresseCp[] = $adresseCP;
            $adresseCP->setAdresseCP($this);
        }

        return $this;
    }

    public function removeAdresseCP(Utilisateur $adresseCP): self
    {
        if ($this->adresseCp->contains($adresseCP)) {
            $this->adresseCp->removeElement($adresseCP);
            // set the owning side to null (unless already changed)
            if ($adresseCP->getAdresseCP() === $this) {
                $adresseCP->setAdresseCP(null);
            }
        }

        return $this;
    }
}
