<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moto
 */
class Moto
{
    /**
     * @var integer
     */
    private $motId;

    /**
     * @var string
     */
    private $motCpf;

    /**
     * @var string
     */
    private $motPlaque;

    /**
     * @var string
     */
    private $motMark;

    /**
     * @var string
     */
    private $motOwner;

    /**
     * @var \DateTime
     */
    private $motDateCreated;

    /**
     * @var \DateTime
     */
    private $motDateUpdated;

    /**
     * @var boolean
     */
    private $motIsActive;

    /**
     * @var \Moto\ApiBundle\Entity\Company
     */
    private $com;


    /**
     * Get motId
     *
     * @return integer 
     */
    public function getMotId()
    {
        return $this->motId;
    }

    /**
     * Set motCpf
     *
     * @param string $motCpf
     * @return Moto
     */
    public function setMotCpf($motCpf)
    {
        $this->motCpf = $motCpf;
    
        return $this;
    }

    /**
     * Get motCpf
     *
     * @return string 
     */
    public function getMotCpf()
    {
        return $this->motCpf;
    }

    /**
     * Set motPlaque
     *
     * @param string $motPlaque
     * @return Moto
     */
    public function setMotPlaque($motPlaque)
    {
        $this->motPlaque = $motPlaque;
    
        return $this;
    }

    /**
     * Get motPlaque
     *
     * @return string 
     */
    public function getMotPlaque()
    {
        return $this->motPlaque;
    }

    /**
     * Set motMark
     *
     * @param string $motMark
     * @return Moto
     */
    public function setMotMark($motMark)
    {
        $this->motMark = $motMark;
    
        return $this;
    }

    /**
     * Get motMark
     *
     * @return string 
     */
    public function getMotMark()
    {
        return $this->motMark;
    }

    /**
     * Set motOwner
     *
     * @param string $motOwner
     * @return Moto
     */
    public function setMotOwner($motOwner)
    {
        $this->motOwner = $motOwner;
    
        return $this;
    }

    /**
     * Get motOwner
     *
     * @return string 
     */
    public function getMotOwner()
    {
        return $this->motOwner;
    }

    /**
     * Set motDateCreated
     *
     * @param \DateTime $motDateCreated
     * @return Moto
     */
    public function setMotDateCreated($motDateCreated)
    {
        $this->motDateCreated = $motDateCreated;
    
        return $this;
    }

    /**
     * Get motDateCreated
     *
     * @return \DateTime 
     */
    public function getMotDateCreated()
    {
        return $this->motDateCreated;
    }

    /**
     * Set motDateUpdated
     *
     * @param \DateTime $motDateUpdated
     * @return Moto
     */
    public function setMotDateUpdated($motDateUpdated)
    {
        $this->motDateUpdated = $motDateUpdated;
    
        return $this;
    }

    /**
     * Get motDateUpdated
     *
     * @return \DateTime 
     */
    public function getMotDateUpdated()
    {
        return $this->motDateUpdated;
    }

    /**
     * Set motIsActive
     *
     * @param boolean $motIsActive
     * @return Moto
     */
    public function setMotIsActive($motIsActive)
    {
        $this->motIsActive = $motIsActive;
    
        return $this;
    }

    /**
     * Get motIsActive
     *
     * @return boolean 
     */
    public function getMotIsActive()
    {
        return $this->motIsActive;
    }

    /**
     * Set com
     *
     * @param \Moto\ApiBundle\Entity\Company $com
     * @return Moto
     */
    public function setCom(\Moto\ApiBundle\Entity\Company $com = null)
    {
        $this->com = $com;
    
        return $this;
    }

    /**
     * Get com
     *
     * @return \Moto\ApiBundle\Entity\Company 
     */
    public function getCom()
    {
        return $this->com;
    }
}
