<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class info
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $codecis;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $datedebut;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $datdefin;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $afficher;



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
     * Set codecis
     *
     * @param string $codecis
     * @return $this
     */
    public function setCodecis($codecis)
    {
        $this->codecis = $codecis;
        return $this;
    }

    /**
     * Get codecis
     *
     * @return string $codecis
     */
    public function getCodecis()
    {
        return $this->codecis;
    }

    /**
     * Set datedebut
     *
     * @param string $datedebut
     * @return $this
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string $datedebut
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datdefin
     *
     * @param string $datdefin
     * @return $this
     */
    public function setDatdefin($datdefin)
    {
        $this->datdefin = $datdefin;
        return $this;
    }

    /**
     * Get datdefin
     *
     * @return string $datdefin
     */
    public function getDatdefin()
    {
        return $this->datdefin;
    }

    /**
     * Set afficher
     *
     * @param string $afficher
     * @return $this
     */
    public function setAfficher($afficher)
    {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Get afficher
     *
     * @return string $afficher
     */
    public function getAfficher()
    {
        return $this->afficher;
    }
}
