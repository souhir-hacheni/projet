<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BureauDirecteurRepository")
 */
class BureauDirecteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateDebutMondat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateFinMondat;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\adherant", cascade={"persist", "remove"})
     */
    private $president;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\adherant", cascade={"persist", "remove"})
     */
    private $vicePresident;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\adherant", inversedBy="bureauDirecteur", cascade={"persist", "remove"})
     */
    private $tresorier;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\adherant", cascade={"persist", "remove"})
     */
    private $secretaireGeneral;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Adherant", mappedBy="adherant")
     */
    private $Adherant;

    public function __construct()
    {
        $this->Adherant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebutMondat(): ?\DateTimeInterface
    {
        return $this->DateDebutMondat;
    }

    public function setDateDebutMondat(?\DateTimeInterface $DateDebutMondat): self
    {
        $this->DateDebutMondat = $DateDebutMondat;

        return $this;
    }

    public function getDateFinMondat(): ?\DateTimeInterface
    {
        return $this->DateFinMondat;
    }

    public function setDateFinMondat(?\DateTimeInterface $DateFinMondat): self
    {
        $this->DateFinMondat = $DateFinMondat;

        return $this;
    }

    public function getPresident(): ?adherant
    {
        return $this->president;
    }

    public function setPresident(?adherant $president): self
    {
        $this->president = $president;

        return $this;
    }

    public function getVicePresident(): ?adherant
    {
        return $this->vicePresident;
    }

    public function setVicePresident(?adherant $vicePresident): self
    {
        $this->vicePresident = $vicePresident;

        return $this;
    }

    public function getTresorier(): ?adherant
    {
        return $this->tresorier;
    }

    public function setTresorier(?adherant $tresorier): self
    {
        $this->tresorier = $tresorier;

        return $this;
    }

    public function getSecretaireGeneral(): ?adherant
    {
        return $this->secretaireGeneral;
    }

    public function setSecretaireGeneral(?adherant $secretaireGeneral): self
    {
        $this->secretaireGeneral = $secretaireGeneral;

        return $this;
    }

    /**
     * @return Collection|Adherant[]
     */
    public function getAdherant(): Collection
    {
        return $this->Adherant;
    }

    public function addAdherant(Adherant $adherant): self
    {
        if (!$this->Adherant->contains($adherant)) {
            $this->Adherant[] = $adherant;
            $adherant->setAdherant($this);
        }

        return $this;
    }

    public function removeAdherant(Adherant $adherant): self
    {
        if ($this->Adherant->contains($adherant)) {
            $this->Adherant->removeElement($adherant);
            // set the owning side to null (unless already changed)
            if ($adherant->getAdherant() === $this) {
                $adherant->setAdherant(null);
            }
        }

        return $this;
    }
}
