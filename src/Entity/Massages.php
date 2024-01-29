<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Massages
 *
 * @ORM\Table(name="massages")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\MassagesRepository")
 */
class Massages
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_massage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMassage;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=50, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=false)
     */
    private $duree;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Masseurs", inversedBy="idMassage")
     * @ORM\JoinTable(name="pratique",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_massage", referencedColumnName="Id_massage")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_masseur", referencedColumnName="Id_masseur")
     *   }
     * )
     */
    private $idMasseur = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMasseur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdMassage(): ?int
    {
        return $this->idMassage;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * @return Collection<int, Masseurs>
     */
    public function getIdMasseur(): Collection
    {
        return $this->idMasseur;
    }

    public function addIdMasseur(Masseurs $idMasseur): static
    {
        if (!$this->idMasseur->contains($idMasseur)) {
            $this->idMasseur->add($idMasseur);
        }

        return $this;
    }

    public function removeIdMasseur(Masseurs $idMasseur): static
    {
        $this->idMasseur->removeElement($idMasseur);

        return $this;
    }

}
