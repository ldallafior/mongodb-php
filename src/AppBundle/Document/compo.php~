<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class compo {

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string") @MongoDB\Index(unique=true, order="asc")
     */
    protected $code;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $designation;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $substance ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $dosage ;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $Reference ;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $nature ;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $numero ;



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
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return $this
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Get designation
     *
     * @return string $designation
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set substance
     *
     * @param string $substance
     * @return $this
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Get substance
     *
     * @return string $substance
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Set dosage
     *
     * @param string $dosage
     * @return $this
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Get dosage
     *
     * @return string $dosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->Reference = $reference;
        return $this;
    }

    /**
     * Get reference
     *
     * @return string $reference
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return $this
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Get nature
     *
     * @return string $nature
     */
    public function getNature()
    {
        return $this->nature;
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
