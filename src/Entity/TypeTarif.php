<?php

namespace App\Entity;

use App\Repository\TypeTarifRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeTarifRepository::class)
 */
class TypeTarif
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
    private $idTypeTarif;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelletypeTarif;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTypeTarif(): ?int
    {
        return $this->idTypeTarif;
    }

    public function setIdTypeTarif(?int $idTypeTarif): self
    {
        $this->idTypeTarif = $idTypeTarif;

        return $this;
    }

    public function getLibelletypeTarif(): ?string
    {
        return $this->libelletypeTarif;
    }

    public function setLibelletypeTarif(?string $libelletypeTarif): self
    {
        $this->libelletypeTarif = $libelletypeTarif;

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
