<?php

namespace App\Entity;

use App\Repository\ReservationEnLigneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationEnLigneRepository::class)
 */
class ReservationEnLigne
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
    private $idReservationEnLigne;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelleReservationEnLigne;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $nomReservation;

    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $adresseReservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTraversees;

    /**
     * @ORM\Column(type="integer")
     */
    private $idTarifs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReservationEnLigne(): ?int
    {
        return $this->idReservationEnLigne;
    }

    public function setIdReservationEnLigne(?int $idReservationEnLigne): self
    {
        $this->idReservationEnLigne = $idReservationEnLigne;

        return $this;
    }

    public function getLibelleReservationEnLigne(): ?string
    {
        return $this->libelleReservationEnLigne;
    }

    public function setLibelleReservationEnLigne(?string $libelleReservationEnLigne): self
    {
        $this->libelleReservationEnLigne = $libelleReservationEnLigne;

        return $this;
    }

    public function getNomReservation(): ?string
    {
        return $this->nomReservation;
    }

    public function setNomReservation(?string $nomReservation): self
    {
        $this->nomReservation = $nomReservation;

        return $this;
    }

    public function getAdresseReservation(): ?string
    {
        return $this->adresseReservation;
    }

    public function setAdresseReservation(?string $adresseReservation): self
    {
        $this->adresseReservation = $adresseReservation;

        return $this;
    }

    public function getIdTraversees(): ?int
    {
        return $this->idTraversees;
    }

    public function setIdTraversees(int $idTraversees): self
    {
        $this->idTraversees = $idTraversees;

        return $this;
    }

    public function getIdTarifs(): ?int
    {
        return $this->idTarifs;
    }

    public function setIdTarifs(int $idTarifs): self
    {
        $this->idTarifs = $idTarifs;

        return $this;
    }
}
