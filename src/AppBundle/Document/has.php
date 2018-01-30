<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;

/**
 * @MongoDB\Document
 */
class has {
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $code;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $dossier;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Motif  ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $date ;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $Valeur ;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $Libelle ;




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
     * Set dossier
     *
     * @param string $dossier
     * @return $this
     */
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Get dossier
     *
     * @return string $dossier
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return $this
     */
    public function setMotif($motif)
    {
        $this->Motif = $motif;
        return $this;
    }

    /**
     * Get motif
     *
     * @return string $motif
     */
    public function getMotif()
    {
        return $this->Motif;
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
     * Set valeur
     *
     * @param string $valeur
     * @return $this
     */
    public function setValeur($valeur)
    {
        $this->Valeur = $valeur;
        return $this;
    }

    /**
     * Get valeur
     *
     * @return string $valeur
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return $this
     */
    public function setLibelle($libelle)
    {
        $this->Libelle = $libelle;
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }
}
