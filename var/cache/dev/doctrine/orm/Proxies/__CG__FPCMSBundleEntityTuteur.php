<?php

namespace Proxies\__CG__\FP\CMSBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tuteur extends \FP\CMSBundle\Entity\Tuteur implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'id', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'nomTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'prenomTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'telTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'adresseTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'lienparental'];
        }

        return ['__isInitialized__', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'id', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'nomTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'prenomTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'telTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'adresseTuteur', '' . "\0" . 'FP\\CMSBundle\\Entity\\Tuteur' . "\0" . 'lienparental'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tuteur $proxy) {
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
    public function getLienparental()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLienparental', []);

        return parent::getLienparental();
    }

    /**
     * {@inheritDoc}
     */
    public function setLienparental($lienparental)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLienparental', [$lienparental]);

        return parent::setLienparental($lienparental);
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
    public function setNomTuteur($nomTuteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomTuteur', [$nomTuteur]);

        return parent::setNomTuteur($nomTuteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomTuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomTuteur', []);

        return parent::getNomTuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomTuteur($prenomTuteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomTuteur', [$prenomTuteur]);

        return parent::setPrenomTuteur($prenomTuteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomTuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomTuteur', []);

        return parent::getPrenomTuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelTuteur($telTuteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelTuteur', [$telTuteur]);

        return parent::setTelTuteur($telTuteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelTuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelTuteur', []);

        return parent::getTelTuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseTuteur($adresseTuteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseTuteur', [$adresseTuteur]);

        return parent::setAdresseTuteur($adresseTuteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseTuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseTuteur', []);

        return parent::getAdresseTuteur();
    }

}
