<?php

namespace App\Entity;

use App\Repository\TarifsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TarifsRepository::class)
 */
class Tarifs
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
    private $idTarifs;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelleTarifs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tarifsLiaison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTarifs(): ?string
    {
        return $this->idTarifs;
    }

    public function setIdTarifs(?string $idTarifs): self
    {
        $this->idTarifs = $idTarifs;

        return $this;
    }

    public function getLibelleTarifs(): ?string
    {
        return $this->libelleTarifs;
    }

    public function setLibelleTarifs(?string $libelleTarifs): self
    {
        $this->libelleTarifs = $libelleTarifs;

        return $this;
    }

    public function getTarifsLiaison(): ?int
    {
        return $this->tarifsLiaison;
    }

    public function setTarifsLiaison(?int $tarifsLiaison): self
    {
        $this->tarifsLiaison = $tarifsLiaison;

        return $this;
    }
}
