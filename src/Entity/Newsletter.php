<?php

namespace App\Entity;

use App\Repository\NewsletterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsletterRepository::class)
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $DocumentPDF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Publication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->Publication;
    }

    public function setPublication(\DateTimeInterface $Publication): self
    {
        $this->Publication = $Publication;

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
