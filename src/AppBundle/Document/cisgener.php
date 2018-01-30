<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class cisgener

{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $princeps ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $generique ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $numero  ;



    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set princeps
     *
     * @param string $princeps
     * @return $this
     */
    public function setPrinceps($princeps)
    {
        $this->princeps = $princeps;
        return $this;
    }

    /**
     * Get princeps
     *
     * @return string $princeps
     */
    public function getPrinceps()
    {
        return $this->princeps;
    }

    /**
     * Set generique
     *
     * @param string $generique
     * @return $this
     */
    public function setGenerique($generique)
    {
        $this->generique = $generique;
        return $this;
    }

    /**
     * Get generique
     *
     * @return string $generique
     */
    public function getGenerique()
    {
        return $this->generique;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get numero
     *
     * @return string $numero
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
