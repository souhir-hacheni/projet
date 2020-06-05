<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SponsorRepository")
 */
class Sponsor
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
    private $NomSponsor;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ModePaient;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Matriculefiscale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoSponsor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienWeb;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenement", inversedBy="sponsors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSponsor(): ?string
    {
        return $this->NomSponsor;
    }

    public function setNomSponsor(?string $NomSponsor): self
    {
        $this->NomSponsor = $NomSponsor;

        return $this;
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

    public function getModePaient(): ?string
    {
        return $this->ModePaient;
    }

    public function setModePaient(?string $ModePaient): self
    {
        $this->ModePaient = $ModePaient;

        return $this;
    }

    public function getMatriculefiscale(): ?int
    {
        return $this->Matriculefiscale;
    }

    public function setMatriculefiscale(?int $Matriculefiscale): self
    {
        $this->Matriculefiscale = $Matriculefiscale;

        return $this;
    }

    public function getLogoSponsor(): ?string
    {
        return $this->logoSponsor;
    }

    public function setLogoSponsor(?string $logoSponsor): self
    {
        $this->logoSponsor = $logoSponsor;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getLienWeb(): ?string
    {
        return $this->lienWeb;
    }

    public function setLienWeb(?string $lienWeb): self
    {
        $this->lienWeb = $lienWeb;

        return $this;
    }

    public function getIdEvenement(): ?Evenement
    {
        return $this->idEvenement;
    }

    public function setIdEvenement(?Evenement $idEvenement): self
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }
}
