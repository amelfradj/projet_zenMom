<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="Id_reservation", columns={"Id_reservation"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_reservation", referencedColumnName="Id_reservation")
     * })
     */
    private $idReservation;

    public function getIdCommentaire(): ?int
    {
        return $this->idCommentaire;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getIdReservation(): ?Reservation
    {
        return $this->idReservation;
    }

    public function setIdReservation(?Reservation $idReservation): static
    {
        $this->idReservation = $idReservation;

        return $this;
    }


}
