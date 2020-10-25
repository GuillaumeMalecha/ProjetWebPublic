<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"utilisateur"="Utilisateur", "internaute"="Internaute"})
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
    private $adresseNum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseRue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $banni;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eMail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $inscriptConf;

    /**
     * @ORM\Column(type="datetime")
     */
    private $inscription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbEssaisInfructueux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeUtilisateur;

    /**
     * @ORM\OneToOne(targetEntity=Internaute::class, mappedBy="favori", cascade={"persist", "remove"})
     */
    private $favori;

    /**
     * @ORM\ManyToOne(targetEntity=CodePostal::class, inversedBy="adresseCP")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresseCP;

    /**
     * @ORM\ManyToOne(targetEntity=Localite::class, inversedBy="adresseLocalite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresseLocalite;

    /**
     * @ORM\ManyToOne(targetEntity=Commune::class, inversedBy="adresseCommune")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresseCommune;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseNum(): ?string
    {
        return $this->adresseNum;
    }

    public function setAdresseNum(string $adresseNum): self
    {
        $this->adresseNum = $adresseNum;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(string $adresseRue): self
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getBanni(): ?bool
    {
        return $this->banni;
    }

    public function setBanni(bool $banni): self
    {
        $this->banni = $banni;

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
        return $this->inscriptConf;
    }

    public function setInscriptConf(bool $inscriptConf): self
    {
        $this->inscriptConf = $inscriptConf;

        return $this;
    }

    public function getInscription(): ?\DateTimeInterface
    {
        return $this->inscription;
    }

    public function setInscription(\DateTimeInterface $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getNbEssaisInfructueux(): ?int
    {
        return $this->nbEssaisInfructueux;
    }

    public function setNbEssaisInfructueux(int $nbEssaisInfructueux): self
    {
        $this->nbEssaisInfructueux = $nbEssaisInfructueux;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->typeUtilisateur;
    }

    public function setTypeUtilisateur(string $typeUtilisateur): self
    {
        $this->typeUtilisateur = $typeUtilisateur;

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

    public function getInternaute(): ?Internaute
    {
        return $this->Internaute;
    }

    public function setInternaute(?Internaute $Internaute): self
    {
        $this->Internaute = $Internaute;

        // set (or unset) the owning side of the relation if necessary
        $newUtilisateur = null === $Internaute ? null : $this;
        if ($Internaute->getUtilisateur() !== $newUtilisateur) {
            $Internaute->setUtilisateur($newUtilisateur);
        }

        return $this;
    }

    public function getAdresseCP(): ?CodePostal
    {
        return $this->adresseCP;
    }

    public function setAdresseCP(?CodePostal $adresseCP): self
    {
        $this->adresseCP = $adresseCP;

        return $this;
    }

    public function getAdresseLocalite(): ?Localite
    {
        return $this->adresseLocalite;
    }

    public function setAdresseLocalite(?Localite $adresseLocalite): self
    {
        $this->adresseLocalite = $adresseLocalite;

        return $this;
    }

    public function getAdresseCommune(): ?Commune
    {
        return $this->adresseCommune;
    }

    public function setAdresseCommune(?Commune $adresseCommune): self
    {
        $this->adresseCommune = $adresseCommune;

        return $this;
    }
}
