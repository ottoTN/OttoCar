<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Compte
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomprop", type="string", length=20, nullable=false)
     */
    private $nomprop;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomprop", type="string", length=20, nullable=false)
     */
    private $prenomprop;

    /**
     * @var integer
     *
     * @ORM\Column(name="telprop", type="bigint", nullable=false)
     */
    private $telprop;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseprop", type="string", length=100, nullable=false)
     */
    private $adresseprop;

    /**
     * @var string
     *
     * @ORM\Column(name="mailprop", type="string", length=50, nullable=false)
     */
    private $mailprop;

    /**
     * @var string
     *
     * @ORM\Column(name="modelevoit", type="string", length=50, nullable=false)
     */
    private $modelevoit;

    /**
     * @var string
     *
     * @ORM\Column(name="marquevoit", type="string", length=50, nullable=false)
     */
    private $marquevoit;

    /**
     * @var string
     *
     * @ORM\Column(name="immatvoit", type="string", length=30, nullable=false)
     */
    private $immatvoit;

    /**
     * @var integer
     *
     * @ORM\Column(name="cinprop", type="bigint", nullable=false)
     */
    private $cinprop;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    
    /**
   * @ORM\OneToMany(targetEntity="GarageBundle\Entity\Fiche", mappedBy="Compte")
   */
    
    private $Fiches;


    /**
     * Set nomprop
     *
     * @param string $nomprop
     *
     * @return Compte
     */
    public function setFiches($Fiches)
    {
        $this->nomprop = $Fiches;

        return $this;
    }

    /**
     * Get nomprop
     *
     * @return string
     */
    public function getFiches()
    {
        return $this->Fiches;
    }
    
        
    /**
     * Set nomprop
     *
     * @param string $nomprop
     *
     * @return Compte
     */
    public function setNomprop($nomprop)
    {
        $this->nomprop = $nomprop;

        return $this;
    }

    /**
     * Get nomprop
     *
     * @return string
     */
    public function getNomprop()
    {
        return $this->nomprop;
    }

    /**
     * Set prenomprop
     *
     * @param string $prenomprop
     *
     * @return Compte
     */
    public function setPrenomprop($prenomprop)
    {
        $this->prenomprop = $prenomprop;

        return $this;
    }

    /**
     * Get prenomprop
     *
     * @return string
     */
    public function getPrenomprop()
    {
        return $this->prenomprop;
    }

    /**
     * Set telprop
     *
     * @param integer $telprop
     *
     * @return Compte
     */
    public function setTelprop($telprop)
    {
        $this->telprop = $telprop;

        return $this;
    }

    /**
     * Get telprop
     *
     * @return integer
     */
    public function getTelprop()
    {
        return $this->telprop;
    }

    /**
     * Set adresseprop
     *
     * @param string $adresseprop
     *
     * @return Compte
     */
    public function setAdresseprop($adresseprop)
    {
        $this->adresseprop = $adresseprop;

        return $this;
    }

    /**
     * Get adresseprop
     *
     * @return string
     */
    public function getAdresseprop()
    {
        return $this->adresseprop;
    }

    /**
     * Set mailprop
     *
     * @param string $mailprop
     *
     * @return Compte
     */
    public function setMailprop($mailprop)
    {
        $this->mailprop = $mailprop;

        return $this;
    }

    /**
     * Get mailprop
     *
     * @return string
     */
    public function getMailprop()
    {
        return $this->mailprop;
    }

    /**
     * Set modelevoit
     *
     * @param string $modelevoit
     *
     * @return Compte
     */
    public function setModelevoit($modelevoit)
    {
        $this->modelevoit = $modelevoit;

        return $this;
    }

    /**
     * Get modelevoit
     *
     * @return string
     */
    public function getModelevoit()
    {
        return $this->modelevoit;
    }

    /**
     * Set marquevoit
     *
     * @param string $marquevoit
     *
     * @return Compte
     */
    public function setMarquevoit($marquevoit)
    {
        $this->marquevoit = $marquevoit;

        return $this;
    }

    /**
     * Get marquevoit
     *
     * @return string
     */
    public function getMarquevoit()
    {
        return $this->marquevoit;
    }

    /**
     * Set immatvoit
     *
     * @param string $immatvoit
     *
     * @return Compte
     */
    public function setImmatvoit($immatvoit)
    {
        $this->immatvoit = $immatvoit;

        return $this;
    }

    /**
     * Get immatvoit
     *
     * @return string
     */
    public function getImmatvoit()
    {
        return $this->immatvoit;
    }

    /**
     * Set cinprop
     *
     * @param integer $cinprop
     *
     * @return Compte
     */
    public function setCinprop($cinprop)
    {
        $this->cinprop = $cinprop;

        return $this;
    }

    /**
     * Get cinprop
     *
     * @return integer
     */
    public function getCinprop()
    {
        return $this->cinprop;
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
