<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", uniqueConstraints={@ORM\UniqueConstraint(name="Id_CarteCadeau", columns={"Id_CarteCadeau"})}, indexes={@ORM\Index(name="id_users", columns={"id_users"}), @ORM\Index(name="Id_masseur", columns={"Id_masseur"}), @ORM\Index(name="Id_massage", columns={"Id_massage"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=false)
     */
    private $dateReservation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_reservation", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureReservation = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="huile", type="string", length=20, nullable=false)
     */
    private $huile;

    /**
     * @var int
     *
     * @ORM\Column(name="Statut_reservation", type="integer", nullable=false)
     */
    private $statutReservation;

    /**
     * @var \Massages
     *
     * @ORM\ManyToOne(targetEntity="Massages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_massage", referencedColumnName="Id_massage")
     * })
     */
    private $idMassage;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     * })
     */
    private $idUsers;

    /**
     * @var \Cartecadeau
     *
     * @ORM\ManyToOne(targetEntity="Cartecadeau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_CarteCadeau", referencedColumnName="Id_CarteCadeau")
     * })
     */
    private $idCartecadeau;

    /**
     * @var \Masseurs
     *
     * @ORM\ManyToOne(targetEntity="Masseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_masseur", referencedColumnName="Id_masseur")
     * })
     */
    private $idMasseur;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getHeureReservation(): ?\DateTimeInterface
    {
        return $this->heureReservation;
    }

    public function setHeureReservation(?\DateTimeInterface $heureReservation): static
    {
        $this->heureReservation = $heureReservation;

        return $this;
    }

    public function getHuile(): ?string
    {
        return $this->huile;
    }

    public function setHuile(string $huile): static
    {
        $this->huile = $huile;

        return $this;
    }

    public function getStatutReservation(): ?int
    {
        return $this->statutReservation;
    }

    public function setStatutReservation(int $statutReservation): static
    {
        $this->statutReservation = $statutReservation;

        return $this;
    }

    public function getIdMassage(): ?Massages
    {
        return $this->idMassage;
    }

    public function setIdMassage(?Massages $idMassage): static
    {
        $this->idMassage = $idMassage;

        return $this;
    }

    public function getIdUsers(): ?Utilisateur
    {
        return $this->idUsers;
    }

    public function setIdUsers(?Utilisateur $idUsers): static
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    public function getIdCartecadeau(): ?Cartecadeau
    {
        return $this->idCartecadeau;
    }

    public function setIdCartecadeau(?Cartecadeau $idCartecadeau): static
    {
        $this->idCartecadeau = $idCartecadeau;

        return $this;
    }

    public function getIdMasseur(): ?Masseurs
    {
        return $this->idMasseur;
    }

    public function setIdMasseur(?Masseurs $idMasseur): static
    {
        $this->idMasseur = $idMasseur;

        return $this;
    }


}
