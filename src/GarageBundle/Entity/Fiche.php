<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;


//use Piece;

/**
 * Fiche
 * @ORM\Entity
 */
class Fiche
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefiche", type="datetime", nullable=false)
     */
    private $datefiche;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation", type="string", length=500, nullable=false)
     */
    private $prestation;

     /**
   * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\Compte", inversedBy="Fiches", cascade={"persist"})
  * @ORM\JoinColumn(name="Client", referencedColumnName="id")
   */
    private $Client;

    /**
   * @ORM\ManyToOne(targetEntity="GarageBundle\Entity\Employe",inversedBy="Fiches", cascade={"persist"})
  * @ORM\JoinColumn(name="Emp", referencedColumnName="id")
   */
    private $Emp;

    /**
     * @var string
     *
     * @ORM\Column(name="diagfiche", type="string", length=500, nullable=false)
     */
    private $diagfiche;

    /**
     * @var string
     *
     * @ORM\Column(name="solutionfiche", type="string", length=500, nullable=false)
     */
    private $solutionfiche;

    /**
     * @var string
     *
     * @ORM\Column(name="typereparation", type="string", length=200, nullable=false)
     */
    private $typereparation;

    /**
     * @var string
     *
     * @ORM\Column(name="statutfiche", type="string", length=30, nullable=true)
     */
    private $statutfiche;
    
    /**
     * @ManyToMany(targetEntity="GarageBundle\Entity\Piece")
     * @JoinTable(name="Fiche_Pieces",
     *      joinColumns={@JoinColumn(name="Fiche", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="Pieces", referencedColumnName="id", unique=true,nullable=true)}
     *      )
     */
    private $Pieces;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set datefiche
     *
     * @param \DateTime $datefiche
     *
     * @return Fiche
     */
    public function setDatefiche($datefiche)
    {
        $this->datefiche = $datefiche;

        return $this;
    }

    /**
     * Get datefiche
     *
     * @return \DateTime
     */
    public function getDatefiche()
    {
        return $this->datefiche;
    }

    /**
     * Set prestation
     *
     * @param string $prestation
     *
     * @return Fiche
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;

        return $this;
    }

    /**
     * Get prestation
     *
     * @return string
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * Set Client
     *
     * @param Client $Client
     *
     * @return Fiche
     */
    public function setClient($Client)
    {
        $this->Client = $Client;

        return $this;
    }

    /**
     * Get Client
     *
     * @return integer
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * Set Emp
     *
     * @param Emp $Emp
     *
     * @return Fiche
     */
    public function setEmp($Emp)
    {
        $this->Emp = $Emp;

        return $this;
    }

    /**
     * Get Emp
     *
     * @return integer
     */
    public function getEmp()
    {
        return $this->Emp;
    }

    /**
     * Set diagfiche
     *
     * @param string $diagfiche
     *
     * @return Fiche
     */
    public function setDiagfiche($diagfiche)
    {
        $this->diagfiche = $diagfiche;

        return $this;
    }

    /**
     * Get diagfiche
     *
     * @return string
     */
    public function getDiagfiche()
    {
        return $this->diagfiche;
    }

    /**
     * Set solutionfiche
     *
     * @param string $solutionfiche
     *
     * @return Fiche
     */
    public function setSolutionfiche($solutionfiche)
    {
        $this->solutionfiche = $solutionfiche;

        return $this;
    }

    /**
     * Get solutionfiche
     *
     * @return string
     */
    public function getSolutionfiche()
    {
        return $this->solutionfiche;
    }

    /**
     * Set typereparation
     *
     * @param string $typereparation
     *
     * @return Fiche
     */
    public function setTypereparation($typereparation)
    {
        $this->typereparation = $typereparation;

        return $this;
    }

    /**
     * Get typereparation
     *
     * @return string
     */
    public function getTypereparation()
    {
        return $this->typereparation;
    }

    /**
     * Set statutfiche
     *
     * @param string $statutfiche
     *
     * @return Fiche
     */
    public function setStatutfiche($statutfiche)
    {
        $this->statutfiche = $statutfiche;

        return $this;
    }

    /**
     * Get statutfiche
     *
     * @return string
     */
    public function getStatutfiche()
    {
        return $this->statutfiche;
    }

    
     /**
     * Set Pieces
     *
     * @param Piece $Pieces
     *
     * @return Fiche
     */
    public function setPieces($Pieces)
    {
        $this->Pieces = $Pieces;

        return $this;
    }

    /**
     * Get Pieces
     *
     * @return Piece
     */
    public function getPieces()
    {
        return $this->Pieces;
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
    
    public function _construct(){
        $this->Pieces = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
