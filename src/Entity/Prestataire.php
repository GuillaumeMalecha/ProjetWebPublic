<?php

namespace App\Entity;

use App\Repository\PrestataireRepository;
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumTel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumTVA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SiteInternet;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateur::class, inversedBy="Prestataire", cascade={"persist", "remove"})
     */
    private $Utilisateur;

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
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->NumTel;
    }

    public function setNumTel(string $NumTel): self
    {
        $this->NumTel = $NumTel;

        return $this;
    }

    public function getNumTVA(): ?string
    {
        return $this->NumTVA;
    }

    public function setNumTVA(string $NumTVA): self
    {
        $this->NumTVA = $NumTVA;

        return $this;
    }

    public function getSiteInternet(): ?string
    {
        return $this->SiteInternet;
    }

    public function setSiteInternet(string $SiteInternet): self
    {
        $this->SiteInternet = $SiteInternet;

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
}
