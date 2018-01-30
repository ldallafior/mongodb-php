<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
 * @MongoDB\Document
 */
class ciscip

{
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
    protected $libelle;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $statut;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $commercialisation;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $date;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $cipp13;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $collectivite;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $remboursement;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $prix;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $presentant;




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
     * Set libelle
     *
     * @param string $libelle
     * @return $this
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return $this
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * Get statut
     *
     * @return string $statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set cipp13
     *
     * @param string $cipp13
     * @return $this
     */
    public function setCipp13($cipp13)
    {
        $this->cipp13 = $cipp13;
        return $this;
    }

    /**
     * Get cipp13
     *
     * @return string $cipp13
     */
    public function getCipp13()
    {
        return $this->cipp13;
    }

    /**
     * Set collectivite
     *
     * @param string $collectivite
     * @return $this
     */
    public function setCollectivite($collectivite)
    {
        $this->collectivite = $collectivite;
        return $this;
    }

    /**
     * Get collectivite
     *
     * @return string $collectivite
     */
    public function getCollectivite()
    {
        return $this->collectivite;
    }

    /**
     * Set remboursement
     *
     * @param string $remboursement
     * @return $this
     */
    public function setRemboursement($remboursement)
    {
        $this->remboursement = $remboursement;
        return $this;
    }

    /**
     * Get remboursement
     *
     * @return string $remboursement
     */
    public function getRemboursement()
    {
        return $this->remboursement;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return $this
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get prix
     *
     * @return string $prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set presentant
     *
     * @param string $presentant
     * @return $this
     */
    public function setPresentant($presentant)
    {
        $this->presentant = $presentant;
        return $this;
    }

    /**
     * Get presentant
     *
     * @return string $presentant
     */
    public function getPresentant()
    {
        return $this->presentant;
    }

    /**
     * Set commercialisation
     *
     * @param string $commercialisation
     * @return $this
     */
    public function setCommercialisation($commercialisation)
    {
        $this->commercialisation = $commercialisation;
        return $this;
    }

    /**
     * Get commercialisation
     *
     * @return string $commercialisation
     */
    public function getCommercialisation()
    {
        return $this->commercialisation;
    }
}

