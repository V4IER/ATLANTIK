<?php

namespace App\Entity;

use App\Repository\BateauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BateauRepository::class)
 */
class Bateau
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
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelleBateau;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longueur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $largeur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vitesse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type;

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

    public function getLibelleBateau(): ?string
    {
        return $this->libelleBateau;
    }

    public function setLibelleBateau(?string $libelleBateau): self
    {
        $this->libelleBateau = $libelleBateau;

        return $this;
    }

    public function getLongueur(): ?float
    {
        return $this->longueur;
    }

    public function setLongueur(?float $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur(): ?float
    {
        return $this->largeur;
    }

    public function setLargeur(?float $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(?int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
