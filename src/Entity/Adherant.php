<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdherantRepository")
 */
class Adherant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_travail;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel2;





    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\BureauDirecteur", mappedBy="tresorier", cascade={"persist", "remove"})
     */
    private $bureauDirecteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BureauDirecteur", inversedBy="Adherant")
     */
    private $adherant;

    public function __construct()
    {
        $this->idAdhesion = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(?int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getLieuTravail(): ?string
    {
        return $this->lieu_travail;
    }

    public function setLieuTravail(string $lieu_travail): self
    {
        $this->lieu_travail = $lieu_travail;

        return $this;
    }




    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }




    /**
     * @return Collection|Adhesion[]
     */
    public function getIdAdhesion(): Collection
    {
        return $this->idAdhesion;
    }

    public function addIdAdhesion(Adhesion $idAdhesion): self
    {
        if (!$this->idAdhesion->contains($idAdhesion)) {
            $this->idAdhesion[] = $idAdhesion;
            $idAdhesion->setAdherant($this);
        }

        return $this;
    }

    public function removeIdAdhesion(Adhesion $idAdhesion): self
    {
        if ($this->idAdhesion->contains($idAdhesion)) {
            $this->idAdhesion->removeElement($idAdhesion);
            // set the owning side to null (unless already changed)
            if ($idAdhesion->getAdherant() === $this) {
                $idAdhesion->setAdherant(null);
            }
        }

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
    public function __toString()
    {
       return $this->nom;
    }

    public function getBureauDirecteur(): ?BureauDirecteur
    {
        return $this->bureauDirecteur;
    }

    public function setBureauDirecteur(?BureauDirecteur $bureauDirecteur): self
    {
        $this->bureauDirecteur = $bureauDirecteur;

        // set (or unset) the owning side of the relation if necessary
        $newTresorier = null === $bureauDirecteur ? null : $this;
        if ($bureauDirecteur->getTresorier() !== $newTresorier) {
            $bureauDirecteur->setTresorier($newTresorier);
        }

        return $this;
    }

    public function getAdherant(): ?BureauDirecteur
    {
        return $this->adherant;
    }

    public function setAdherant(?BureauDirecteur $adherant): self
    {
        $this->adherant = $adherant;

        return $this;
    }


}
