<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TarifRepository::class)
 */
class Tarif
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
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $idPeriode;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTypeTarif;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLiaison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(int $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdTypeTarif(): ?int
    {
        return $this->idTypeTarif;
    }

    public function setIdTypeTarif(int $idTypeTarif): self
    {
        $this->idTypeTarif = $idTypeTarif;

        return $this;
    }

    public function getIdLiaison(): ?int
    {
        return $this->idLiaison;
    }

    public function setIdLiaison(int $idLiaison): self
    {
        $this->idLiaison = $idLiaison;

        return $this;
    }
}
