<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="Piece", columns={"Piece"})})
 * @ORM\Entity
 */
class Notification
{
    /**
   * @ORM\OneToOne(targetEntity="GarageBundle\Entity\Piece", cascade={"persist"})
   * @ORM\JoinColumn(name="Piece", referencedColumnName="id")
   */
    private $Piece;

    /**
     * @var string
     *
     * @ORM\Column(name="statutnotif", type="string", length=10, nullable=false)
     */
    private $statutnotif;

    /**
     * @var string
     *
     * @ORM\Column(name="statutcommande", type="string", length=20, nullable=false)
     */
    private $statutcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set Piece
     *
     * @param Piece $Piece
     *
     * @return Notification
     */
    public function setPiece($Piece)
    {
        $this->Piece = $Piece;

        return $this;
    }

    /**
     * Get Piece
     *
     * @return Piece
     */
    public function getPiece()
    {
        return $this->Piece;
    }

    /**
     * Set statutnotif
     *
     * @param string $statutnotif
     *
     * @return Notification
     */
    public function setStatutnotif($statutnotif)
    {
        $this->statutnotif = $statutnotif;

        return $this;
    }

    /**
     * Get statutnotif
     *
     * @return string
     */
    public function getStatutnotif()
    {
        return $this->statutnotif;
    }

    /**
     * Set statutcommande
     *
     * @param string $statutcommande
     *
     * @return Notification
     */
    public function setStatutcommande($statutcommande)
    {
        $this->statutcommande = $statutcommande;

        return $this;
    }

    /**
     * Get statutcommande
     *
     * @return string
     */
    public function getStatutcommande()
    {
        return $this->statutcommande;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
