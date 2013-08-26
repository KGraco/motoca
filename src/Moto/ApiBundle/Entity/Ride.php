<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ride
 */
class Ride
{
    /**
     * @var integer
     */
    private $ridId;

    /**
     * @var float
     */
    private $ridTime;

    /**
     * @var \DateTime
     */
    private $ridStartTime;

    /**
     * @var \DateTime
     */
    private $ridFinishiTime;

    /**
     * @var string
     */
    private $ridLatWithdrawal;

    /**
     * @var string
     */
    private $ridLngWithdrawal;

    /**
     * @var string
     */
    private $ridLatDelivery;

    /**
     * @var string
     */
    private $ridLngDelivery;

    /**
     * @var string
     */
    private $ridComents;

    /**
     * @var string
     */
    private $ridInformationCharging;

    /**
     * @var float
     */
    private $ridWeight;

    /**
     * @var float
     */
    private $ridHeight;

    /**
     * @var float
     */
    private $ridWidth;

    /**
     * @var \DateTime
     */
    private $ridMaximumWithdrawalTime;

    /**
     * @var \DateTime
     */
    private $ridMaximumDeliveryTime;

    /**
     * @var float
     */
    private $ridPrice;

    /**
     * @var integer
     */
    private $rideAverageTime;

    /**
     * @var \DateTime
     */
    private $ridDateCreated;

    /**
     * @var \DateTime
     */
    private $ridDateUpdated;

    /**
     * @var boolean
     */
    private $ridIsActive;

    /**
     * @var \Moto\ApiBundle\Entity\RideStatus
     */
    private $ris;

    /**
     * @var \Moto\ApiBundle\Entity\Moto
     */
    private $mot;

    /**
     * @var \Moto\ApiBundle\Entity\Customer
     */
    private $cus;


    /**
     * Get ridId
     *
     * @return integer 
     */
    public function getRidId()
    {
        return $this->ridId;
    }

    /**
     * Set ridTime
     *
     * @param float $ridTime
     * @return Ride
     */
    public function setRidTime($ridTime)
    {
        $this->ridTime = $ridTime;
    
        return $this;
    }

    /**
     * Get ridTime
     *
     * @return float 
     */
    public function getRidTime()
    {
        return $this->ridTime;
    }

    /**
     * Set ridStartTime
     *
     * @param \DateTime $ridStartTime
     * @return Ride
     */
    public function setRidStartTime($ridStartTime)
    {
        $this->ridStartTime = $ridStartTime;
    
        return $this;
    }

    /**
     * Get ridStartTime
     *
     * @return \DateTime 
     */
    public function getRidStartTime()
    {
        return $this->ridStartTime;
    }

    /**
     * Set ridFinishiTime
     *
     * @param \DateTime $ridFinishiTime
     * @return Ride
     */
    public function setRidFinishiTime($ridFinishiTime)
    {
        $this->ridFinishiTime = $ridFinishiTime;
    
        return $this;
    }

    /**
     * Get ridFinishiTime
     *
     * @return \DateTime 
     */
    public function getRidFinishiTime()
    {
        return $this->ridFinishiTime;
    }

    /**
     * Set ridLatWithdrawal
     *
     * @param string $ridLatWithdrawal
     * @return Ride
     */
    public function setRidLatWithdrawal($ridLatWithdrawal)
    {
        $this->ridLatWithdrawal = $ridLatWithdrawal;
    
        return $this;
    }

    /**
     * Get ridLatWithdrawal
     *
     * @return string 
     */
    public function getRidLatWithdrawal()
    {
        return $this->ridLatWithdrawal;
    }

    /**
     * Set ridLngWithdrawal
     *
     * @param string $ridLngWithdrawal
     * @return Ride
     */
    public function setRidLngWithdrawal($ridLngWithdrawal)
    {
        $this->ridLngWithdrawal = $ridLngWithdrawal;
    
        return $this;
    }

    /**
     * Get ridLngWithdrawal
     *
     * @return string 
     */
    public function getRidLngWithdrawal()
    {
        return $this->ridLngWithdrawal;
    }

    /**
     * Set ridLatDelivery
     *
     * @param string $ridLatDelivery
     * @return Ride
     */
    public function setRidLatDelivery($ridLatDelivery)
    {
        $this->ridLatDelivery = $ridLatDelivery;
    
        return $this;
    }

    /**
     * Get ridLatDelivery
     *
     * @return string 
     */
    public function getRidLatDelivery()
    {
        return $this->ridLatDelivery;
    }

    /**
     * Set ridLngDelivery
     *
     * @param string $ridLngDelivery
     * @return Ride
     */
    public function setRidLngDelivery($ridLngDelivery)
    {
        $this->ridLngDelivery = $ridLngDelivery;
    
        return $this;
    }

    /**
     * Get ridLngDelivery
     *
     * @return string 
     */
    public function getRidLngDelivery()
    {
        return $this->ridLngDelivery;
    }

    /**
     * Set ridComents
     *
     * @param string $ridComents
     * @return Ride
     */
    public function setRidComents($ridComents)
    {
        $this->ridComents = $ridComents;
    
        return $this;
    }

    /**
     * Get ridComents
     *
     * @return string 
     */
    public function getRidComents()
    {
        return $this->ridComents;
    }

    /**
     * Set ridInformationCharging
     *
     * @param string $ridInformationCharging
     * @return Ride
     */
    public function setRidInformationCharging($ridInformationCharging)
    {
        $this->ridInformationCharging = $ridInformationCharging;
    
        return $this;
    }

    /**
     * Get ridInformationCharging
     *
     * @return string 
     */
    public function getRidInformationCharging()
    {
        return $this->ridInformationCharging;
    }

    /**
     * Set ridWeight
     *
     * @param float $ridWeight
     * @return Ride
     */
    public function setRidWeight($ridWeight)
    {
        $this->ridWeight = $ridWeight;
    
        return $this;
    }

    /**
     * Get ridWeight
     *
     * @return float 
     */
    public function getRidWeight()
    {
        return $this->ridWeight;
    }

    /**
     * Set ridHeight
     *
     * @param float $ridHeight
     * @return Ride
     */
    public function setRidHeight($ridHeight)
    {
        $this->ridHeight = $ridHeight;
    
        return $this;
    }

    /**
     * Get ridHeight
     *
     * @return float 
     */
    public function getRidHeight()
    {
        return $this->ridHeight;
    }

    /**
     * Set ridWidth
     *
     * @param float $ridWidth
     * @return Ride
     */
    public function setRidWidth($ridWidth)
    {
        $this->ridWidth = $ridWidth;
    
        return $this;
    }

    /**
     * Get ridWidth
     *
     * @return float 
     */
    public function getRidWidth()
    {
        return $this->ridWidth;
    }

    /**
     * Set ridMaximumWithdrawalTime
     *
     * @param \DateTime $ridMaximumWithdrawalTime
     * @return Ride
     */
    public function setRidMaximumWithdrawalTime($ridMaximumWithdrawalTime)
    {
        $this->ridMaximumWithdrawalTime = $ridMaximumWithdrawalTime;
    
        return $this;
    }

    /**
     * Get ridMaximumWithdrawalTime
     *
     * @return \DateTime 
     */
    public function getRidMaximumWithdrawalTime()
    {
        return $this->ridMaximumWithdrawalTime;
    }

    /**
     * Set ridMaximumDeliveryTime
     *
     * @param \DateTime $ridMaximumDeliveryTime
     * @return Ride
     */
    public function setRidMaximumDeliveryTime($ridMaximumDeliveryTime)
    {
        $this->ridMaximumDeliveryTime = $ridMaximumDeliveryTime;
    
        return $this;
    }

    /**
     * Get ridMaximumDeliveryTime
     *
     * @return \DateTime 
     */
    public function getRidMaximumDeliveryTime()
    {
        return $this->ridMaximumDeliveryTime;
    }

    /**
     * Set ridPrice
     *
     * @param float $ridPrice
     * @return Ride
     */
    public function setRidPrice($ridPrice)
    {
        $this->ridPrice = $ridPrice;
    
        return $this;
    }

    /**
     * Get ridPrice
     *
     * @return float 
     */
    public function getRidPrice()
    {
        return $this->ridPrice;
    }

    /**
     * Set rideAverageTime
     *
     * @param integer $rideAverageTime
     * @return Ride
     */
    public function setRideAverageTime($rideAverageTime)
    {
        $this->rideAverageTime = $rideAverageTime;
    
        return $this;
    }

    /**
     * Get rideAverageTime
     *
     * @return integer 
     */
    public function getRideAverageTime()
    {
        return $this->rideAverageTime;
    }

    /**
     * Set ridDateCreated
     *
     * @param \DateTime $ridDateCreated
     * @return Ride
     */
    public function setRidDateCreated($ridDateCreated)
    {
        $this->ridDateCreated = $ridDateCreated;
    
        return $this;
    }

    /**
     * Get ridDateCreated
     *
     * @return \DateTime 
     */
    public function getRidDateCreated()
    {
        return $this->ridDateCreated;
    }

    /**
     * Set ridDateUpdated
     *
     * @param \DateTime $ridDateUpdated
     * @return Ride
     */
    public function setRidDateUpdated($ridDateUpdated)
    {
        $this->ridDateUpdated = $ridDateUpdated;
    
        return $this;
    }

    /**
     * Get ridDateUpdated
     *
     * @return \DateTime 
     */
    public function getRidDateUpdated()
    {
        return $this->ridDateUpdated;
    }

    /**
     * Set ridIsActive
     *
     * @param boolean $ridIsActive
     * @return Ride
     */
    public function setRidIsActive($ridIsActive)
    {
        $this->ridIsActive = $ridIsActive;
    
        return $this;
    }

    /**
     * Get ridIsActive
     *
     * @return boolean 
     */
    public function getRidIsActive()
    {
        return $this->ridIsActive;
    }

    /**
     * Set ris
     *
     * @param \Moto\ApiBundle\Entity\RideStatus $ris
     * @return Ride
     */
    public function setRis(\Moto\ApiBundle\Entity\RideStatus $ris = null)
    {
        $this->ris = $ris;
    
        return $this;
    }

    /**
     * Get ris
     *
     * @return \Moto\ApiBundle\Entity\RideStatus 
     */
    public function getRis()
    {
        return $this->ris;
    }

    /**
     * Set mot
     *
     * @param \Moto\ApiBundle\Entity\Moto $mot
     * @return Ride
     */
    public function setMot(\Moto\ApiBundle\Entity\Moto $mot = null)
    {
        $this->mot = $mot;
    
        return $this;
    }

    /**
     * Get mot
     *
     * @return \Moto\ApiBundle\Entity\Moto 
     */
    public function getMot()
    {
        return $this->mot;
    }

    /**
     * Set cus
     *
     * @param \Moto\ApiBundle\Entity\Customer $cus
     * @return Ride
     */
    public function setCus(\Moto\ApiBundle\Entity\Customer $cus = null)
    {
        $this->cus = $cus;
    
        return $this;
    }

    /**
     * Get cus
     *
     * @return \Moto\ApiBundle\Entity\Customer 
     */
    public function getCus()
    {
        return $this->cus;
    }
}
