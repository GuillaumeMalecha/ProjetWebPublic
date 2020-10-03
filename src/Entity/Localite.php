<?php

namespace App\Entity;

use App\Repository\LocaliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocaliteRepository::class)
 */
class Localite
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
    private $Localite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalite(): ?string
    {
        return $this->Localite;
    }

    public function setLocalite(string $Localite): self
    {
        $this->Localite = $Localite;

        return $this;
    }
}
