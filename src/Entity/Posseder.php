<?php

namespace App\Entity;

use App\Repository\PossederRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PossederRepository::class)
 */
class Posseder
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
    private $idBateau;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idEquip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBateau(): ?int
    {
        return $this->idBateau;
    }

    public function setIdBateau(?int $idBateau): self
    {
        $this->idBateau = $idBateau;

        return $this;
    }

    public function getIdEquip(): ?int
    {
        return $this->idEquip;
    }

    public function setIdEquip(?int $idEquip): self
    {
        $this->idEquip = $idEquip;

        return $this;
    }
}
