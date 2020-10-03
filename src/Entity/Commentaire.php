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
    private $Contenu;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cote;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Encodage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getCote(): ?int
    {
        return $this->Cote;
    }

    public function setCote(int $Cote): self
    {
        $this->Cote = $Cote;

        return $this;
    }

    public function getEncodage(): ?\DateTimeInterface
    {
        return $this->Encodage;
    }

    public function setEncodage(\DateTimeInterface $Encodage): self
    {
        $this->Encodage = $Encodage;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }
}
