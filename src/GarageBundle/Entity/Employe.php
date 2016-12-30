<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Employe
 *
 * @ORM\Table(name="employe")
 * @ORM\Entity
 */
class Employe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cinemp", type="bigint", nullable=false)
     */
    private $cinemp;

    /**
     * @var string
     *
     * @ORM\Column(name="nomemp", type="string", length=20, nullable=false)
     */
    private $nomemp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomemp", type="string", length=20, nullable=false)
     */
    private $prenomemp;

    /**
     * @var string
     *
     * @ORM\Column(name="statutsoc", type="string", length=20, nullable=false)
     */
    private $statutsoc;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseemp", type="string", length=100, nullable=false)
     */
    private $adresseemp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissemp", type="date", nullable=false)
     */
    private $datenaissemp;

    /**
     * @var integer
     *
     * @ORM\Column(name="telemp", type="bigint", nullable=false)
     */
    private $telemp;

    /**
     * @var string
     *
     * @ORM\Column(name="typeemp", type="string", length=20, nullable=false)
     */
    private $typeemp;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=false)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="statutemp", type="string", length=10, nullable=true)
     */
    private $statutemp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

/**
   * @ORM\OneToMany(targetEntity="GarageBundle\Entity\Fiche", mappedBy="Employe")
   */
    private $Fiches;


    /**
     * Set cinemp
     *
     * @param integer $cinemp
     *
     * @return Employe
     */
    public function setCinemp($cinemp)
    {
        $this->cinemp = $cinemp;

        return $this;
    }

    /**
     * Get cinemp
     *
     * @return integer
     */
    public function getCinemp()
    {
        return $this->cinemp;
    }

    /**
     * Set nomemp
     *
     * @param string $nomemp
     *
     * @return Employe
     */
    public function setNomemp($nomemp)
    {
        $this->nomemp = $nomemp;

        return $this;
    }

    /**
     * Get nomemp
     *
     * @return string
     */
    public function getNomemp()
    {
        return $this->nomemp;
    }

    /**
     * Set prenomemp
     *
     * @param string $prenomemp
     *
     * @return Employe
     */
    public function setPrenomemp($prenomemp)
    {
        $this->prenomemp = $prenomemp;

        return $this;
    }

    /**
     * Get prenomemp
     *
     * @return string
     */
    public function getPrenomemp()
    {
        return $this->prenomemp;
    }

    /**
     * Set statutsoc
     *
     * @param string $statutsoc
     *
     * @return Employe
     */
    public function setStatutsoc($statutsoc)
    {
        $this->statutsoc = $statutsoc;

        return $this;
    }

    /**
     * Get statutsoc
     *
     * @return string
     */
    public function getStatutsoc()
    {
        return $this->statutsoc;
    }

    /**
     * Set adresseemp
     *
     * @param string $adresseemp
     *
     * @return Employe
     */
    public function setAdresseemp($adresseemp)
    {
        $this->adresseemp = $adresseemp;

        return $this;
    }

    /**
     * Get adresseemp
     *
     * @return string
     */
    public function getAdresseemp()
    {
        return $this->adresseemp;
    }

    /**
     * Set datenaissemp
     *
     * @param \DateTime $datenaissemp
     *
     * @return Employe
     */
    public function setDatenaissemp($datenaissemp)
    {
        $this->datenaissemp = $datenaissemp;

        return $this;
    }

    /**
     * Get datenaissemp
     *
     * @return \DateTime
     */
    public function getDatenaissemp()
    {
        return $this->datenaissemp;
    }

    /**
     * Set telemp
     *
     * @param integer $telemp
     *
     * @return Employe
     */
    public function setTelemp($telemp)
    {
        $this->telemp = $telemp;

        return $this;
    }

    /**
     * Get telemp
     *
     * @return integer
     */
    public function getTelemp()
    {
        return $this->telemp;
    }

    /**
     * Set typeemp
     *
     * @param string $typeemp
     *
     * @return Employe
     */
    public function setTypeemp($typeemp)
    {
        $this->typeemp = $typeemp;

        return $this;
    }

    /**
     * Get typeemp
     *
     * @return string
     */
    public function getTypeemp()
    {
        return $this->typeemp;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     *
     * @return Employe
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set statutemp
     *
     * @param string $statutemp
     *
     * @return Employe
     */
    public function setStatutemp($statutemp)
    {
        $this->statutemp = $statutemp;

        return $this;
    }

    /**
     * Get statutemp
     *
     * @return string
     */
    public function getStatutemp()
    {
        return $this->statutemp;
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
