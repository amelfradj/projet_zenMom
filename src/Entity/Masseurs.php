<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Masseurs
 *
 * @ORM\Table(name="masseurs")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MasseursRepository")
 */
class Masseurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_masseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMasseur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photos", type="string", length=50, nullable=false)
     */
    private $photos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="disponibilite", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $disponibilite = 'NULL';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Massages", mappedBy="idMasseur")
     */
    private $idMassage = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMassage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdMasseur(): ?int
    {
        return $this->idMasseur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos): static
    {
        $this->photos = $photos;

        return $this;
    }

    public function getDisponibilite(): ?\DateTimeInterface
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?\DateTimeInterface $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * @return Collection<int, Massages>
     */
    public function getIdMassage(): Collection
    {
        return $this->idMassage;
    }

    public function addIdMassage(Massages $idMassage): static
    {
        if (!$this->idMassage->contains($idMassage)) {
            $this->idMassage->add($idMassage);
            $idMassage->addIdMasseur($this);
        }

        return $this;
    }

    public function removeIdMassage(Massages $idMassage): static
    {
        if ($this->idMassage->removeElement($idMassage)) {
            $idMassage->removeIdMasseur($this);
        }

        return $this;
    }

}
