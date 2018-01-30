<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class cishassmr
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $codecis ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $codedossierhas;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $motifevaluation;

     /**
      * @MongoDB\Field(type="string")
      */
    protected $transparence ;

     /**
      * @MongoDB\Field(type="string")
      */
    protected $valeursmr ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Libellesmr  ;


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
     * Set codedossierhas
     *
     * @param string $codedossierhas
     * @return $this
     */
    public function setCodedossierhas($codedossierhas)
    {
        $this->codedossierhas = $codedossierhas;
        return $this;
    }

    /**
     * Get codedossierhas
     *
     * @return string $codedossierhas
     */
    public function getCodedossierhas()
    {
        return $this->codedossierhas;
    }

    /**
     * Set motifevaluation
     *
     * @param string $motifevaluation
     * @return $this
     */
    public function setMotifevaluation($motifevaluation)
    {
        $this->motifevaluation = $motifevaluation;
        return $this;
    }

    /**
     * Get motifevaluation
     *
     * @return string $motifevaluation
     */
    public function getMotifevaluation()
    {
        return $this->motifevaluation;
    }

    /**
     * Set transparence
     *
     * @param string $transparence
     * @return $this
     */
    public function setTransparence($transparence)
    {
        $this->transparence = $transparence;
        return $this;
    }

    /**
     * Get transparence
     *
     * @return string $transparence
     */
    public function getTransparence()
    {
        return $this->transparence;
    }

    /**
     * Set valeursmr
     *
     * @param string $valeursmr
     * @return $this
     */
    public function setValeursmr($valeursmr)
    {
        $this->valeursmr = $valeursmr;
        return $this;
    }

    /**
     * Get valeursmr
     *
     * @return string $valeursmr
     */
    public function getValeursmr()
    {
        return $this->valeursmr;
    }

    /**
     * Set libellesmr
     *
     * @param string $libellesmr
     * @return $this
     */
    public function setLibellesmr($libellesmr)
    {
        $this->Libellesmr = $libellesmr;
        return $this;
    }

    /**
     * Get libellesmr
     *
     * @return string $libellesmr
     */
    public function getLibellesmr()
    {
        return $this->Libellesmr;
    }
}
