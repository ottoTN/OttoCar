<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="Emp", columns={"Emp"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50, nullable=false)
     */
    private $mdp;

     /**
   * @ORM\OneToOne(targetEntity="GarageBundle\Entity\Employe", cascade={"persist"})
   * @ORM\JoinColumn(name="Emp", referencedColumnName="id")
   */
    private $Emp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set Emp
     *
     * @param integer $Emp
     *
     * @return Utilisateur
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
