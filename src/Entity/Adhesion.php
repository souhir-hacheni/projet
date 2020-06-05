<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdhesionRepository")
 */
class Adhesion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montant;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAdhesion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $anneeAdhesion;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $paiement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateAdhesion(): ?\DateTimeInterface
    {
        return $this->dateAdhesion;
    }

    public function setDateAdhesion(?\DateTimeInterface $dateAdhesion): self
    {
        $this->dateAdhesion = $dateAdhesion;

        return $this;
    }

    public function getAnneeAdhesion(): ?\DateTimeInterface
    {
        return $this->anneeAdhesion;
    }

    public function setAnneeAdhesion(?\DateTimeInterface $anneeAdhesion): self
    {
        $this->anneeAdhesion = $anneeAdhesion;

        return $this;
    }

    public function getPaiement(): ?bool
    {
        return $this->paiement;
    }

    public function setPaiement(?bool $paiement): self
    {
        $this->paiement = $paiement;

        return $this;
    }
}
