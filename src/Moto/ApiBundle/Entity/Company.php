<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 */
class Company
{
    /**
     * @var integer
     */
    private $comId;

    /**
     * @var string
     */
    private $comName;

    /**
     * @var string
     */
    private $comCnpj;

    /**
     * @var string
     */
    private $comPhone;

    /**
     * @var \DateTime
     */
    private $comDateCreated;

    /**
     * @var \DateTime
     */
    private $comDateUpdated;

    /**
     * @var boolean
     */
    private $comIsActive;

    /**
     * @var \Moto\ApiBundle\Entity\CompanyAddress
     */
    private $coa;


    /**
     * Get comId
     *
     * @return integer 
     */
    public function getComId()
    {
        return $this->comId;
    }

    /**
     * Set comName
     *
     * @param string $comName
     * @return Company
     */
    public function setComName($comName)
    {
        $this->comName = $comName;
    
        return $this;
    }

    /**
     * Get comName
     *
     * @return string 
     */
    public function getComName()
    {
        return $this->comName;
    }

    /**
     * Set comCnpj
     *
     * @param string $comCnpj
     * @return Company
     */
    public function setComCnpj($comCnpj)
    {
        $this->comCnpj = $comCnpj;
    
        return $this;
    }

    /**
     * Get comCnpj
     *
     * @return string 
     */
    public function getComCnpj()
    {
        return $this->comCnpj;
    }

    /**
     * Set comPhone
     *
     * @param string $comPhone
     * @return Company
     */
    public function setComPhone($comPhone)
    {
        $this->comPhone = $comPhone;
    
        return $this;
    }

    /**
     * Get comPhone
     *
     * @return string 
     */
    public function getComPhone()
    {
        return $this->comPhone;
    }

    /**
     * Set comDateCreated
     *
     * @param \DateTime $comDateCreated
     * @return Company
     */
    public function setComDateCreated($comDateCreated)
    {
        $this->comDateCreated = $comDateCreated;
    
        return $this;
    }

    /**
     * Get comDateCreated
     *
     * @return \DateTime 
     */
    public function getComDateCreated()
    {
        return $this->comDateCreated;
    }

    /**
     * Set comDateUpdated
     *
     * @param \DateTime $comDateUpdated
     * @return Company
     */
    public function setComDateUpdated($comDateUpdated)
    {
        $this->comDateUpdated = $comDateUpdated;
    
        return $this;
    }

    /**
     * Get comDateUpdated
     *
     * @return \DateTime 
     */
    public function getComDateUpdated()
    {
        return $this->comDateUpdated;
    }

    /**
     * Set comIsActive
     *
     * @param boolean $comIsActive
     * @return Company
     */
    public function setComIsActive($comIsActive)
    {
        $this->comIsActive = $comIsActive;
    
        return $this;
    }

    /**
     * Get comIsActive
     *
     * @return boolean 
     */
    public function getComIsActive()
    {
        return $this->comIsActive;
    }

    /**
     * Set coa
     *
     * @param \Moto\ApiBundle\Entity\CompanyAddress $coa
     * @return Company
     */
    public function setCoa(\Moto\ApiBundle\Entity\CompanyAddress $coa = null)
    {
        $this->coa = $coa;
    
        return $this;
    }

    /**
     * Get coa
     *
     * @return \Moto\ApiBundle\Entity\CompanyAddress 
     */
    public function getCoa()
    {
        return $this->coa;
    }
}
