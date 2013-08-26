<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RideStatus
 */
class RideStatus
{
    /**
     * @var integer
     */
    private $risId;

    /**
     * @var string
     */
    private $risName;

    /**
     * @var string
     */
    private $risDescription;


    /**
     * Get risId
     *
     * @return integer 
     */
    public function getRisId()
    {
        return $this->risId;
    }

    /**
     * Set risName
     *
     * @param string $risName
     * @return RideStatus
     */
    public function setRisName($risName)
    {
        $this->risName = $risName;
    
        return $this;
    }

    /**
     * Get risName
     *
     * @return string 
     */
    public function getRisName()
    {
        return $this->risName;
    }

    /**
     * Set risDescription
     *
     * @param string $risDescription
     * @return RideStatus
     */
    public function setRisDescription($risDescription)
    {
        $this->risDescription = $risDescription;
    
        return $this;
    }

    /**
     * Get risDescription
     *
     * @return string 
     */
    public function getRisDescription()
    {
        return $this->risDescription;
    }
}
