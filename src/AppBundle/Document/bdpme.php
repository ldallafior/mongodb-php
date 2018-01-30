<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;


/**
* @MongoDB\Document
*/
class bdpme
{
    /**
    * @MongoDB\Id
    */
    protected $id;

    /**
    * @MongoDB\Field(type="string") @MongoDB\Index(unique=true, order="asc")
    */
    protected $codecis;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $denominationdumedicament;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Forme;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $voies;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $statut;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $type;

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
    protected $statutBdm;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $numerodelautorisation;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $titulaire;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Surveillance ;



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
     * Set denominationdumedicament
     *
     * @param string $denominationdumedicament
     * @return $this
     */
    public function setDenominationdumedicament($denominationdumedicament)
    {
        $this->denominationdumedicament = $denominationdumedicament;
        return $this;
    }

    /**
     * Get denominationdumedicament
     *
     * @return string $denominationdumedicament
     */
    public function getDenominationdumedicament()
    {
        return $this->denominationdumedicament;
    }

    /**
     * Set forme
     *
     * @param string $forme
     * @return $this
     */
    public function setForme($forme)
    {
        $this->Forme = $forme;
        return $this;
    }

    /**
     * Get forme
     *
     * @return string $forme
     */
    public function getForme()
    {
        return $this->Forme;
    }

    /**
     * Set voies
     *
     * @param string $voies
     * @return $this
     */
    public function setVoies($voies)
    {
        $this->voies = $voies;
        return $this;
    }

    /**
     * Get voies
     *
     * @return string $voies
     */
    public function getVoies()
    {
        return $this->voies;
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
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
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
     * Set statutBdm
     *
     * @param string $statutBdm
     * @return $this
     */
    public function setStatutBdm($statutBdm)
    {
        $this->statutBdm = $statutBdm;
        return $this;
    }

    /**
     * Get statutBdm
     *
     * @return string $statutBdm
     */
    public function getStatutBdm()
    {
        return $this->statutBdm;
    }

    /**
     * Set numerodelautorisation
     *
     * @param string $numerodelautorisation
     * @return $this
     */
    public function setNumerodelautorisation($numerodelautorisation)
    {
        $this->numerodelautorisation = $numerodelautorisation;
        return $this;
    }

    /**
     * Get numerodelautorisation
     *
     * @return string $numerodelautorisation
     */
    public function getNumerodelautorisation()
    {
        return $this->numerodelautorisation;
    }

    /**
     * Set titulaire
     *
     * @param string $titulaire
     * @return $this
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
        return $this;
    }

    /**
     * Get titulaire
     *
     * @return string $titulaire
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set surveillance
     *
     * @param string $surveillance
     * @return $this
     */
    public function setSurveillance($surveillance)
    {
        $this->Surveillance = $surveillance;
        return $this;
    }

    /**
     * Get surveillance
     *
     * @return string $surveillance
     */
    public function getSurveillance()
    {
        return $this->Surveillance;
    }
}
