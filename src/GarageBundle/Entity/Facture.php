<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var float
     *
     * @ORM\Column(name="tariffacture", type="float", precision=10, scale=0, nullable=false)
     */
    private $tariffacture;

    /**
     * @var string
     *
     * @ORM\Column(name="statutfacture", type="string", length=10, nullable=false)
     */
    private $statutfacture;


 /**
     *
     * @ORM\Column(name="datefacture", type="date", nullable=false)
     */
    private $datefacture;

    /**
   * @ORM\OneToOne(targetEntity="GarageBundle\Entity\Fiche", cascade={"persist"})
   * @ORM\JoinColumn(name="Fiche", referencedColumnName="id")

   */
    
    private $Fiche;

     /**
   * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\Rapport", cascade={"persist"})
   * @ORM\JoinColumn(name="Rapport", referencedColumnName="id")
   */
    private $Rapport;

     /**
   * @ORM\OneToMany(targetEntity="GarageBundle\Entity\Piece", cascade={"persist"},mappedBy="Facture")
   * @ORM\Column(name="Piece")
   */
    private $Piece;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



/**
     * Set datefacture
     *
     * @param float $datefacture
     *
     * @return Facture
     */
    public function setDatefacture($datefacture)
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    /**
     * Get datefacture
     *
     * @return date
     */
    public function getDatefacture()
    {
        return $this->datefacture;
    }


    /**
     * Set tariffacture
     *
     * @param float $tariffacture
     *
     * @return Facture
     */
    public function setTariffacture($tariffacture)
    {
        $this->tariffacture = $tariffacture;

        return $this;
    }

    /**
     * Get tariffacture
     *
     * @return float
     */
    public function getTariffacture()
    {
        return $this->tariffacture;
    }

    /**
     * Set statutfacture
     *
     * @param string $statutfacture
     *
     * @return Facture
     */
    public function setStatutfacture($statutfacture)
    {
        $this->statutfacture = $statutfacture;

        return $this;
    }

    /**
     * Get statutfacture
     *
     * @return string
     */
    public function getStatutfacture()
    {
        return $this->statutfacture;
    }

    /**
     * Set Fiche
     *
     * @param integer $Fiche
     *
     * @return Facture
     */
    public function setFiche($Fiche)
    {
        $this->fiche = $Fiche;

        return $this;
    }

    /**
     * Get Fiche
     *
     * @return integer
     */
    public function getFiche()
    {
        return $this->Fiche;
    }

    /**
     * Set Rapport
     *
     * @param integer $Rapport
     *
     * @return Facture
     */
    public function setRapport($Rapport)
    {
        $this->Rapport = $Rapport;

        return $this;
    }

    /**
     * Get Rapport
     *
     * @return integer
     */
    public function getRapport()
    {
        return $this->Rapport;
    }
    
    
    /**
     * Set Piece
     *
     * @param integer $Piece
     *
     * @return Facture
     */
    public function setPiece($Piece)
    {
        $this->Piece = $Piece;

        return $this;
    }

    /**
     * Get Piece
     *
     * @return integer
     */
    public function getPiece()
    {
        return $this->Piece;
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
