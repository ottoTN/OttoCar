<?php

namespace Proxies\__CG__\GarageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Fiche extends \GarageBundle\Entity\Fiche implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'datefiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'prestation', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Client', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Emp', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'diagfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'solutionfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'typereparation', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'statutfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Pieces', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'id'];
        }

        return ['__isInitialized__', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'datefiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'prestation', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Client', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Emp', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'diagfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'solutionfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'typereparation', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'statutfiche', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'Pieces', '' . "\0" . 'GarageBundle\\Entity\\Fiche' . "\0" . 'id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Fiche $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setDatefiche($datefiche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefiche', [$datefiche]);

        return parent::setDatefiche($datefiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefiche', []);

        return parent::getDatefiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrestation($prestation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrestation', [$prestation]);

        return parent::setPrestation($prestation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrestation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrestation', []);

        return parent::getPrestation();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient($Client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', [$Client]);

        return parent::setClient($Client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmp($Emp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmp', [$Emp]);

        return parent::setEmp($Emp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmp', []);

        return parent::getEmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiagfiche($diagfiche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiagfiche', [$diagfiche]);

        return parent::setDiagfiche($diagfiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiagfiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiagfiche', []);

        return parent::getDiagfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolutionfiche($solutionfiche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolutionfiche', [$solutionfiche]);

        return parent::setSolutionfiche($solutionfiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolutionfiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolutionfiche', []);

        return parent::getSolutionfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypereparation($typereparation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypereparation', [$typereparation]);

        return parent::setTypereparation($typereparation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypereparation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypereparation', []);

        return parent::getTypereparation();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutfiche($statutfiche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutfiche', [$statutfiche]);

        return parent::setStatutfiche($statutfiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutfiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutfiche', []);

        return parent::getStatutfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setPieces($Pieces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPieces', [$Pieces]);

        return parent::setPieces($Pieces);
    }

    /**
     * {@inheritDoc}
     */
    public function getPieces()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPieces', []);

        return parent::getPieces();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function _construct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_construct', []);

        return parent::_construct();
    }

}
