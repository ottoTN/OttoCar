<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Fournisseur
 * @ORM\Entity
 */
class Fournisseur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomfourn", type="string", length=50, nullable=false)
     */
    private $nomfourn;

    /**
     * @var string
     *
     * @ORM\Column(name="adressefourn", type="string", length=100, nullable=false)
     */
    private $adressefourn;

    /**
     * @var string
     *
     * @ORM\Column(name="mailfourn", type="string", length=100, nullable=false)
     */
    private $mailfourn;

    /**
     * @var integer
     *
     * @ORM\Column(name="telfourn", type="bigint", nullable=false)
     */
    private $telfourn;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
   * @ORM\OneToOne(targetEntity="GarageBundle\Entity\Piece", cascade={"persist"})
   * @ORM\JoinColumn(name="Piece", referencedColumnName="id")
   */
    private $Piece;

    /**
     * Set Piece
     *
     * @param Piece $Piece
     *
     * @return Fournisseur
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
     * Set nomfourn
     *
     * @param string $nomfourn
     *
     * @return Fournisseur
     */
    public function setNomfourn($nomfourn)
    {
        $this->nomfourn = $nomfourn;

        return $this;
    }

    /**
     * Get nomfourn
     *
     * @return string
     */
    public function getNomfourn()
    {
        return $this->nomfourn;
    }

    /**
     * Set adressefourn
     *
     * @param string $adressefourn
     *
     * @return Fournisseur
     */
    public function setAdressefourn($adressefourn)
    {
        $this->adressefourn = $adressefourn;

        return $this;
    }

    /**
     * Get adressefourn
     *
     * @return string
     */
    public function getAdressefourn()
    {
        return $this->adressefourn;
    }

    /**
     * Set mailfourn
     *
     * @param string $mailfourn
     *
     * @return Fournisseur
     */
    public function setMailfourn($mailfourn)
    {
        $this->mailfourn = $mailfourn;

        return $this;
    }

    /**
     * Get mailfourn
     *
     * @return string
     */
    public function getMailfourn()
    {
        return $this->mailfourn;
    }

    /**
     * Set telfourn
     *
     * @param integer $telfourn
     *
     * @return Fournisseur
     */
    public function setTelfourn($telfourn)
    {
        $this->telfourn = $telfourn;

        return $this;
    }

    /**
     * Get telfourn
     *
     * @return integer
     */
    public function getTelfourn()
    {
        return $this->telfourn;
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
    
     public function __construct()
    {
        $this->Piece = new ArrayCollection();
    }
}
