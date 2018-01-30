<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class ciscpd

{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string") @MongoDB\Index(unique=true, order="asc")
     */
    protected $CodeCIS;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $prescription;



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
     * Set codeCIS
     *
     * @param string $codeCIS
     * @return $this
     */
    public function setCodeCIS($codeCIS)
    {
        $this->CodeCIS = $codeCIS;
        return $this;
    }

    /**
     * Get codeCIS
     *
     * @return string $codeCIS
     */
    public function getCodeCIS()
    {
        return $this->CodeCIS;
    }

    /**
     * Set prescription
     *
     * @param string $prescription
     * @return $this
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Get prescription
     *
     * @return string $prescription
     */
    public function getPrescription()
    {
        return $this->prescription;
    }
}
