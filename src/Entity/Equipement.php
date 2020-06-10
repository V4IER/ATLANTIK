<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
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
    private $idEquip;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libEquip;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLibEquip(): ?string
    {
        return $this->libEquip;
    }

    public function setLibEquip(string $libEquip): self
    {
        $this->libEquip = $libEquip;

        return $this;
    }
}
