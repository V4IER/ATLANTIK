<?php

namespace App\Entity;

use App\Repository\LiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LiaisonRepository::class)
 */
class Liaison
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
    private $idLiaison;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $distanceLiaison;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $portDepart;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $portArrivee;

    /**
     * @ORM\Column(type="integer")
     */
    private $idSecteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLiaison(): ?int
    {
        return $this->idLiaison;
    }

    public function setIdLiaison(?int $idLiaison): self
    {
        $this->idLiaison = $idLiaison;

        return $this;
    }

    public function getDistanceLiaison(): ?float
    {
        return $this->distanceLiaison;
    }

    public function setDistanceLiaison(?float $distanceLiaison): self
    {
        $this->distanceLiaison = $distanceLiaison;

        return $this;
    }

    public function getPortDepart(): ?string
    {
        return $this->portDepart;
    }

    public function setPortDepart(string $portDepart): self
    {
        $this->portDepart = $portDepart;

        return $this;
    }

    public function getPortArrivee(): ?string
    {
        return $this->portArrivee;
    }

    public function setPortArrivee(string $portArrivee): self
    {
        $this->portArrivee = $portArrivee;

        return $this;
    }

    public function getIdSecteur(): ?int
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(int $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }
}
