<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RevenuRepository")
 */
class Revenu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Designation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $PrixUnitaire;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Quantite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateAction;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenement", inversedBy="revenu")
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->Designation;
    }

    public function setDesignation(?string $Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->PrixUnitaire;
    }

    public function setPrixUnitaire(?float $PrixUnitaire): self
    {
        $this->PrixUnitaire = $PrixUnitaire;

        return $this;
    }

    public function getQuantite(): ?float
    {
        return $this->Quantite;
    }

    public function setQuantite(?float $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getDateAction(): ?\DateTimeInterface
    {
        return $this->DateAction;
    }

    public function setDateAction(?\DateTimeInterface $DateAction): self
    {
        $this->DateAction = $DateAction;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
