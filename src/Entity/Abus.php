<?php

namespace App\Entity;

use App\Repository\AbusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbusRepository::class)
 */
class Abus
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
     * @ORM\Column(type="datetime")
     */
    private $Encodage;

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

    public function getEncodage(): ?\DateTimeInterface
    {
        return $this->Encodage;
    }

    public function setEncodage(\DateTimeInterface $Encodage): self
    {
        $this->Encodage = $Encodage;

        return $this;
    }
}
