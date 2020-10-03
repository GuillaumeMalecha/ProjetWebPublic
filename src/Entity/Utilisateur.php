<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
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
    private $AdresseNum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AdresseRue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Banni;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eMail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $InscriptConf;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Inscription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MotDePasse;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbEssaisInfructueux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeUtilisateur;

    /**
     * @ORM\OneToOne(targetEntity=Prestataire::class, mappedBy="Utilisateur", cascade={"persist", "remove"})
     */
    private $Prestataire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseNum(): ?string
    {
        return $this->AdresseNum;
    }

    public function setAdresseNum(string $AdresseNum): self
    {
        $this->AdresseNum = $AdresseNum;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->AdresseRue;
    }

    public function setAdresseRue(string $AdresseRue): self
    {
        $this->AdresseRue = $AdresseRue;

        return $this;
    }

    public function getBanni(): ?bool
    {
        return $this->Banni;
    }

    public function setBanni(bool $Banni): self
    {
        $this->Banni = $Banni;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->eMail;
    }

    public function setEMail(?string $eMail): self
    {
        $this->eMail = $eMail;

        return $this;
    }

    public function getInscriptConf(): ?bool
    {
        return $this->InscriptConf;
    }

    public function setInscriptConf(bool $InscriptConf): self
    {
        $this->InscriptConf = $InscriptConf;

        return $this;
    }

    public function getInscription(): ?\DateTimeInterface
    {
        return $this->Inscription;
    }

    public function setInscription(\DateTimeInterface $Inscription): self
    {
        $this->Inscription = $Inscription;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->MotDePasse;
    }

    public function setMotDePasse(string $MotDePasse): self
    {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

    public function getNbEssaisInfructueux(): ?int
    {
        return $this->NbEssaisInfructueux;
    }

    public function setNbEssaisInfructueux(int $NbEssaisInfructueux): self
    {
        $this->NbEssaisInfructueux = $NbEssaisInfructueux;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->TypeUtilisateur;
    }

    public function setTypeUtilisateur(string $TypeUtilisateur): self
    {
        $this->TypeUtilisateur = $TypeUtilisateur;

        return $this;
    }

    public function getPrestataire(): ?Prestataire
    {
        return $this->Prestataire;
    }

    public function setPrestataire(?Prestataire $Prestataire): self
    {
        $this->Prestataire = $Prestataire;

        // set (or unset) the owning side of the relation if necessary
        $newUtilisateur = null === $Prestataire ? null : $this;
        if ($Prestataire->getUtilisateur() !== $newUtilisateur) {
            $Prestataire->setUtilisateur($newUtilisateur);
        }

        return $this;
    }
}
