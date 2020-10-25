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
    private $affichageDe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $affichageJusque;

    /**
     * @ORM\Column(type="datetime")
     */
    private $debut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $documentPDF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="offrir")
     */
    private $offrir;

    /**
     * @ORM\ManyToOne(targetEntity=CategoriesDeServices::class, inversedBy="concerner")
     */
    private $concerner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAffichageDe(): ?\DateTimeInterface
    {
        return $this->affichageDe;
    }

    public function setAffichageDe(\DateTimeInterface $affichageDe): self
    {
        $this->affichageDe = $affichageDe;

        return $this;
    }

    public function getAffichageJusque(): ?\DateTimeInterface
    {
        return $this->affichageJusque;
    }

    public function setAffichageJusque(\DateTimeInterface $affichageJusque): self
    {
        $this->affichageJusque = $affichageJusque;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

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

    public function getDocumentPDF()
    {
        return $this->documentPDF;
    }

    public function setDocumentPDF($documentPDF): self
    {
        $this->documentPDF = $documentPDF;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

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

    public function getOffrir(): ?Prestataire
    {
        return $this->offrir;
    }

    public function setOffrir(?Prestataire $offrir): self
    {
        $this->offrir = $offrir;

        return $this;
    }

    public function getConcerner(): ?CategoriesDeServices
    {
        return $this->concerner;
    }

    public function setConcerner(?CategoriesDeServices $concerner): self
    {
        $this->concerner = $concerner;

        return $this;
    }
}
