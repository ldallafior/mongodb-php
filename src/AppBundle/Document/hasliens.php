<?php

namespace  AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;

/**
  * @MongoDB\Document
 */

class hasliens
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
    protected $Lienpagesavis;



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
     * Set lienpagesavis
     *
     * @param string $lienpagesavis
     * @return $this
     */
    public function setLienpagesavis($lienpagesavis)
    {
        $this->Lienpagesavis = $lienpagesavis;
        return $this;
    }

    /**
     * Get lienpagesavis
     *
     * @return string $lienpagesavis
     */
    public function getLienpagesavis()
    {
        return $this->Lienpagesavis;
    }
}
