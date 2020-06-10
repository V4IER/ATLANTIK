<?php

namespace App\Entity;

use App\Repository\PeriodeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeriodeRepository::class)
 */
class Periode
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
    private $idPeriode;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libellePeriode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(?int $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getLibellePeriode(): ?string
    {
        return $this->libellePeriode;
    }

    public function setLibellePeriode(?string $libellePeriode): self
    {
        $this->libellePeriode = $libellePeriode;

        return $this;
    }
}
