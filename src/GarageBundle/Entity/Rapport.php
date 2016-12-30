<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;


/**
 * Rapport
 *
 * @ORM\Table(name="rapport")
 * @ORM\Entity
 */
class Rapport
{
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterapport", type="datetime", nullable=false)
     */
    private $daterapport;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalrapport", type="integer", nullable=false)
     */
    private $totalrapport;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
        /**
  * @ManyToMany(targetEntity="Facture")
     * @JoinTable(name="Rapport_Factures",
     *      joinColumns={@JoinColumn(name="Rapport", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="Facture", referencedColumnName="id", unique=true)}
     *      )
   */
    private $Factures;



    /**
     * Set daterapport
     *
     * @param \DateTime $daterapport
     *
     * @return Rapport
     */
    public function setDaterapport($daterapport)
    {
        $this->daterapport = $daterapport;

        return $this;
    }

    /**
     * Get daterapport
     *
     * @return /DateTime
     */
    public function getDaterapport()
    {
        return $this->daterapport;
    }

    /**
     * Set totalrapport
     *
     * @param integer $totalrapport
     *
     * @return Rapport
     */
    public function setTotalrapport($totalrapport)
    {
        $this->totalrapport = $totalrapport;

        return $this;
    }

    /**
     * Get totalrapport
     *
     * @return integer
     */
    public function getTotalrapport()
    {
        return $this->totalrapport;
    }

    /**
     * Set Factures
     *
     * @param integer Factures
     *
     * @return Rapport
     */
    public function setFactures($Factures)
    {
        $this->Factures = $Factures;

        return $this;
    }

    /**
     * Get Factures
     *
     * @return integer
     */
    public function getFactures()
    {
        return $this->Factures;
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
        $this->Factures = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
