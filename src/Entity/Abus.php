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
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $encodage;

    /**
     * @ORM\ManyToOne(targetEntity=Internaute::class, inversedBy="prevenir")
     */
    private $prevenir;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEncodage(): ?\DateTimeInterface
    {
        return $this->encodage;
    }

    public function setEncodage(\DateTimeInterface $encodage): self
    {
        $this->encodage = $encodage;

        return $this;
    }

    public function getPrevenir(): ?Internaute
    {
        return $this->prevenir;
    }

    public function setPrevenir(?Internaute $prevenir): self
    {
        $this->prevenir = $prevenir;

        return $this;
    }
}
