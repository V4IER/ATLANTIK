<?php

namespace App\Entity;

use App\Repository\DetailReservRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetailReservRepository::class)
 */
class DetailReserv
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
    private $qteReserve;

    /**
     * @ORM\Column(type="integer")
     */
    private $idReservationEnLigne;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTypeTarif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQteReserve(): ?int
    {
        return $this->qteReserve;
    }

    public function setQteReserve(?int $qteReserve): self
    {
        $this->qteReserve = $qteReserve;

        return $this;
    }

    public function getIdReservationEnLigne(): ?int
    {
        return $this->idReservationEnLigne;
    }

    public function setIdReservationEnLigne(int $idReservationEnLigne): self
    {
        $this->idReservationEnLigne = $idReservationEnLigne;

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
}
