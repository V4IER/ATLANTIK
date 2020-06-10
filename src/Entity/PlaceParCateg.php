<?php

namespace App\Entity;

use App\Repository\PlaceParCategRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlaceParCategRepository::class)
 */
class PlaceParCateg
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idBateau;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBateau(): ?int
    {
        return $this->idBateau;
    }

    public function setIdBateau(int $idBateau): self
    {
        $this->idBateau = $idBateau;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }
}
