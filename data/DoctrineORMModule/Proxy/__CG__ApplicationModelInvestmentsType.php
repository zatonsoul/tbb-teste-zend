<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InvestmentsType extends \Application\Model\InvestmentsType implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'id', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'name', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'profitability', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'rate', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'application_days', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'created_at', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'updated_at', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'simulations'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'id', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'name', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'profitability', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'rate', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'application_days', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'created_at', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'updated_at', '' . "\0" . 'Application\\Model\\InvestmentsType' . "\0" . 'simulations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InvestmentsType $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfitability()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfitability', []);

        return parent::getProfitability();
    }

    /**
     * {@inheritDoc}
     */
    public function getRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRate', []);

        return parent::getRate();
    }

    /**
     * {@inheritDoc}
     */
    public function getApplicationDays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplicationDays', []);

        return parent::getApplicationDays();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getSimulations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSimulations', []);

        return parent::getSimulations();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setProfitability($profitability)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfitability', [$profitability]);

        return parent::setProfitability($profitability);
    }

    /**
     * {@inheritDoc}
     */
    public function setRate($rate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRate', [$rate]);

        return parent::setRate($rate);
    }

    /**
     * {@inheritDoc}
     */
    public function setApplicationDays($application_days)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApplicationDays', [$application_days]);

        return parent::setApplicationDays($application_days);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($created_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updated_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

}
