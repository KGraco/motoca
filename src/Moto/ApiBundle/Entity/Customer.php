<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 */
class Customer
{
    /**
     * @var integer
     */
    private $cusId;

    /**
     * @var string
     */
    private $cusName;

    /**
     * @var string
     */
    private $cusEmail;

    /**
     * @var string
     */
    private $cusPhone;

    /**
     * @var string
     */
    private $cusPassword;

    /**
     * @var \DateTime
     */
    private $cusCreatedAt;

    /**
     * @var \DateTime
     */
    private $cusUpdatedAt;

    /**
     * @var integer
     */
    private $areId;

    /**
     * @var \Moto\ApiBundle\Entity\CustomerAddress
     */
    private $cua;


    /**
     * Get cusId
     *
     * @return integer 
     */
    public function getCusId()
    {
        return $this->cusId;
    }

    /**
     * Set cusName
     *
     * @param string $cusName
     * @return Customer
     */
    public function setCusName($cusName)
    {
        $this->cusName = $cusName;
    
        return $this;
    }

    /**
     * Get cusName
     *
     * @return string 
     */
    public function getCusName()
    {
        return $this->cusName;
    }

    /**
     * Set cusEmail
     *
     * @param string $cusEmail
     * @return Customer
     */
    public function setCusEmail($cusEmail)
    {
        $this->cusEmail = $cusEmail;
    
        return $this;
    }

    /**
     * Get cusEmail
     *
     * @return string 
     */
    public function getCusEmail()
    {
        return $this->cusEmail;
    }

    /**
     * Set cusPhone
     *
     * @param string $cusPhone
     * @return Customer
     */
    public function setCusPhone($cusPhone)
    {
        $this->cusPhone = $cusPhone;
    
        return $this;
    }

    /**
     * Get cusPhone
     *
     * @return string 
     */
    public function getCusPhone()
    {
        return $this->cusPhone;
    }

    /**
     * Set cusPassword
     *
     * @param string $cusPassword
     * @return Customer
     */
    public function setCusPassword($cusPassword)
    {
        $this->cusPassword = $cusPassword;
    
        return $this;
    }

    /**
     * Get cusPassword
     *
     * @return string 
     */
    public function getCusPassword()
    {
        return $this->cusPassword;
    }

    /**
     * Set cusCreatedAt
     *
     * @param \DateTime $cusCreatedAt
     * @return Customer
     */
    public function setCusCreatedAt($cusCreatedAt)
    {
        $this->cusCreatedAt = $cusCreatedAt;
    
        return $this;
    }

    /**
     * Get cusCreatedAt
     *
     * @return \DateTime 
     */
    public function getCusCreatedAt()
    {
        return $this->cusCreatedAt;
    }

    /**
     * Set cusUpdatedAt
     *
     * @param \DateTime $cusUpdatedAt
     * @return Customer
     */
    public function setCusUpdatedAt($cusUpdatedAt)
    {
        $this->cusUpdatedAt = $cusUpdatedAt;
    
        return $this;
    }

    /**
     * Get cusUpdatedAt
     *
     * @return \DateTime 
     */
    public function getCusUpdatedAt()
    {
        return $this->cusUpdatedAt;
    }

    /**
     * Set areId
     *
     * @param integer $areId
     * @return Customer
     */
    public function setAreId($areId)
    {
        $this->areId = $areId;
    
        return $this;
    }

    /**
     * Get areId
     *
     * @return integer 
     */
    public function getAreId()
    {
        return $this->areId;
    }

    /**
     * Set cua
     *
     * @param \Moto\ApiBundle\Entity\CustomerAddress $cua
     * @return Customer
     */
    public function setCua(\Moto\ApiBundle\Entity\CustomerAddress $cua = null)
    {
        $this->cua = $cua;
    
        return $this;
    }

    /**
     * Get cua
     *
     * @return \Moto\ApiBundle\Entity\CustomerAddress 
     */
    public function getCua()
    {
        return $this->cua;
    }
}
