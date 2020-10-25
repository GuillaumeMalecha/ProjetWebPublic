<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
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
    private $contenu;

    /**
     * @ORM\Column(type="integer")
     */
    private $cote;

    /**
     * @ORM\Column(type="datetime")
     */
    private $encodage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity=Internaute::class, inversedBy="rediger")
     */
    private $rediger;

    /**
     * @ORM\ManyToOne(targetEntity=Prestataire::class, inversedBy="concerner")
     */
    private $concerner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCote(): ?int
    {
        return $this->cote;
    }

    public function setCote(int $cote): self
    {
        $this->cote = $cote;

        return $this;
    }

    public function getEncodage(): ?\DateTimeInterface
    {
        return $this->encodage;
    }

    public function setEncodage(\DateTimeInterface $encodage): self
    {
        $this->encodage = $encodage;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getRediger(): ?Internaute
    {
        return $this->rediger;
    }

    public function setRediger(?Internaute $rediger): self
    {
        $this->rediger = $rediger;

        return $this;
    }

    public function getConcerner(): ?Prestataire
    {
        return $this->concerner;
    }

    public function setConcerner(?Prestataire $concerner): self
    {
        $this->concerner = $concerner;

        return $this;
    }
}
