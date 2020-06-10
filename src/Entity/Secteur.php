<?php

namespace App\Entity;

use App\Repository\SecteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SecteurRepository::class)
 */
class Secteur
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
    private $idSecteur;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $libelleSecteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSecteur(): ?int
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(?int $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    public function getLibelleSecteur(): ?string
    {
        return $this->libelleSecteur;
    }

    public function setLibelleSecteur(?string $libelleSecteur): self
    {
        $this->libelleSecteur = $libelleSecteur;

        return $this;
    }
}
