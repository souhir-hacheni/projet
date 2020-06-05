<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
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
    private $nomEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $participate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebEv;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFinEv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NomResponsableEv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieuEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $DescriptionEv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoEvenement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sponsor", mappedBy="idEvenement", orphanRemoval=true)
     */
    private $sponsors;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Revenu", mappedBy="evenement")
     */
    private $revenu;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Depences", mappedBy="evenement")
     */
    private $depences;

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
        $this->revenu = new ArrayCollection();
        $this->depences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvenement(): ?string
    {
        return $this->nomEvenement;
    }

    public function setNomEvenement(?string $nomEvenement): self
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->typeEvenement;
    }

    public function setTypeEvenement(?string $typeEvenement): self
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    public function getParticipate(): ?string
    {
        return $this->participate;
    }

    public function setParticipate(?string $participate): self
    {
        $this->participate = $participate;

        return $this;
    }

    public function getDateDebEv(): ?\DateTimeInterface
    {
        return $this->dateDebEv;
    }

    public function setDateDebEv(?\DateTimeInterface $dateDebEv): self
    {
        $this->dateDebEv = $dateDebEv;

        return $this;
    }

    public function getDateFinEv(): ?\DateTimeInterface
    {
        return $this->dateFinEv;
    }

    public function setDateFinEv(?\DateTimeInterface $dateFinEv): self
    {
        $this->dateFinEv = $dateFinEv;

        return $this;
    }

    public function getNomResponsableEv(): ?string
    {
        return $this->NomResponsableEv;
    }

    public function setNomResponsableEv(?string $NomResponsableEv): self
    {
        $this->NomResponsableEv = $NomResponsableEv;

        return $this;
    }

    public function getLieuEvenement(): ?string
    {
        return $this->lieuEvenement;
    }

    public function setLieuEvenement(?string $lieuEvenement): self
    {
        $this->lieuEvenement = $lieuEvenement;

        return $this;
    }

    public function getDescriptionEv(): ?string
    {
        return $this->DescriptionEv;
    }

    public function setDescriptionEv(?string $DescriptionEv): self
    {
        $this->DescriptionEv = $DescriptionEv;

        return $this;
    }

    public function getLogoEvenement(): ?string
    {
        return $this->logoEvenement;
    }

    public function setLogoEvenement(?string $logoEvenement): self
    {
        $this->logoEvenement = $logoEvenement;

        return $this;
    }

    /**
     * @return Collection|Sponsor[]
     */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsor $sponsor): self
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors[] = $sponsor;
            $sponsor->setIdEvenement($this);
        }

        return $this;
    }

    public function removeSponsor(Sponsor $sponsor): self
    {
        if ($this->sponsors->contains($sponsor)) {
            $this->sponsors->removeElement($sponsor);
            // set the owning side to null (unless already changed)
            if ($sponsor->getIdEvenement() === $this) {
                $sponsor->setIdEvenement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Revenu[]
     */
    public function getRevenu(): Collection
    {
        return $this->revenu;
    }

    public function addRevenu(Revenu $revenu): self
    {
        if (!$this->revenu->contains($revenu)) {
            $this->revenu[] = $revenu;
            $revenu->setEvenement($this);
        }

        return $this;
    }

    public function removeRevenu(Revenu $revenu): self
    {
        if ($this->revenu->contains($revenu)) {
            $this->revenu->removeElement($revenu);
            // set the owning side to null (unless already changed)
            if ($revenu->getEvenement() === $this) {
                $revenu->setEvenement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Depences[]
     */
    public function getDepences(): Collection
    {
        return $this->depences;
    }

    public function addDepence(Depences $depence): self
    {
        if (!$this->depences->contains($depence)) {
            $this->depences[] = $depence;
            $depence->setEvenement($this);
        }

        return $this;
    }

    public function removeDepence(Depences $depence): self
    {
        if ($this->depences->contains($depence)) {
            $this->depences->removeElement($depence);
            // set the owning side to null (unless already changed)
            if ($depence->getEvenement() === $this) {
                $depence->setEvenement(null);
            }
        }

        return $this;
    }
}
