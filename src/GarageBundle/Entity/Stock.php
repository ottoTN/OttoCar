<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * Stock
 * @ORM\Entity
 */
class Stock
{
     /**
     * @var ArrayCollection $comments
   * Many User have Many Phonenumbers.
     * @ManyToMany(targetEntity="Piece")
     * @JoinTable(name="Stock_Pieces",
     *      joinColumns={@JoinColumn(name="Stock", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="Pieces", referencedColumnName="id", unique=true)}
     *      )
   */
    private $Pieces;

    /**
     * @var integer
     *
     
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set Pieces
     *
     * @param integer $Pieces
     *
     * @return Stock
     */
    public function setPieces($Pieces)
    {
        $this->Pieces = $Pieces;

        return $this;
    }

    /**
     * Get Pieces
     *
     * @return integer
     */
    public function getPieces()
    {
        return $this->Pieces;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Stock
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
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
