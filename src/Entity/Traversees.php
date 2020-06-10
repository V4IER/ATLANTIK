<?php

namespace App\Entity;

use App\Repository\TraverseesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraverseesRepository::class)
 */
class Traversees
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
    private $idTraversees;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureDepart;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLiaison;

    /**
     * @ORM\Column(type="integer")
     */
    private $idBateau;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTraversees(): ?int
    {
        return $this->idTraversees;
    }

    public function setIdTraversees(?int $idTraversees): self
    {
        $this->idTraversees = $idTraversees;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(?\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(?\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

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

    public function getIdBateau(): ?int
    {
        return $this->idBateau;
    }

    public function setIdBateau(int $idBateau): self
    {
        $this->idBateau = $idBateau;

        return $this;
    }
}
