<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Image extends \AppBundle\Entity\Image implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'extension', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'alt', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'trick', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'tempFilename'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'extension', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'alt', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'trick', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Image' . "\0" . 'tempFilename'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Image $proxy) {
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
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getFixturesPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFixturesPath', []);

        return parent::getFixturesPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', []);

        return parent::preUpload();
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
    public function setExtension($extension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtension', [$extension]);

        return parent::setExtension($extension);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', []);

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlt($alt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlt', [$alt]);

        return parent::setAlt($alt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlt', []);

        return parent::getAlt();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrick(\AppBundle\Entity\Trick $trick = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrick', [$trick]);

        return parent::setTrick($trick);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrick()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrick', []);

        return parent::getTrick();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', []);

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadDir', []);

        return parent::getUploadDir();
    }

    /**
     * {@inheritDoc}
     */
    public function preRemoveUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preRemoveUpload', []);

        return parent::preRemoveUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', []);

        return parent::removeUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
