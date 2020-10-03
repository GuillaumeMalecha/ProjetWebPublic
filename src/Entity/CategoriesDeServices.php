<?php

namespace App\Entity;

use App\Repository\CategoriesDeServicesRepository;
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
    private $Description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $EnAvant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Valide;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEnAvant(): ?bool
    {
        return $this->EnAvant;
    }

    public function setEnAvant(bool $EnAvant): self
    {
        $this->EnAvant = $EnAvant;

        return $this;
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

    public function getValide(): ?bool
    {
        return $this->Valide;
    }

    public function setValide(bool $Valide): self
    {
        $this->Valide = $Valide;

        return $this;
    }
}
