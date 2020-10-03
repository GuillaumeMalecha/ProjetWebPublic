<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $AffichageDe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $AffichageJusque;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Debut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $DocumentPDF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffichageDe(): ?\DateTimeInterface
    {
        return $this->AffichageDe;
    }

    public function setAffichageDe(\DateTimeInterface $AffichageDe): self
    {
        $this->AffichageDe = $AffichageDe;

        return $this;
    }

    public function getAffichageJusque(): ?\DateTimeInterface
    {
        return $this->AffichageJusque;
    }

    public function setAffichageJusque(\DateTimeInterface $AffichageJusque): self
    {
        $this->AffichageJusque = $AffichageJusque;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->Debut;
    }

    public function setDebut(\DateTimeInterface $Debut): self
    {
        $this->Debut = $Debut;

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

    public function getDocumentPDF()
    {
        return $this->DocumentPDF;
    }

    public function setDocumentPDF($DocumentPDF): self
    {
        $this->DocumentPDF = $DocumentPDF;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->Fin;
    }

    public function setFin(\DateTimeInterface $Fin): self
    {
        $this->Fin = $Fin;

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
}
