<?php

namespace App\Entity;

use App\Repository\PortRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PortRepository::class)
 */
class Port
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idPort;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libellePort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPort(): ?int
    {
        return $this->idPort;
    }

    public function setIdPort(?int $idPort): self
    {
        $this->idPort = $idPort;

        return $this;
    }

    public function getLibellePort(): ?string
    {
        return $this->libellePort;
    }

    public function setLibellePort(?string $libellePort): self
    {
        $this->libellePort = $libellePort;

        return $this;
    }
}
