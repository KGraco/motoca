<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyAddress
 */
class CompanyAddress
{
    /**
     * @var integer
     */
    private $coaId;

    /**
     * @var string
     */
    private $coaCountry;

    /**
     * @var string
     */
    private $coaStreet;

    /**
     * @var string
     */
    private $coaNeighborhood;

    /**
     * @var boolean
     */
    private $coaNumber;

    /**
     * @var boolean
     */
    private $coaZipcode;

    /**
     * @var string
     */
    private $coaCity;

    /**
     * @var string
     */
    private $coaLat;

    /**
     * @var string
     */
    private $coaLng;

    /**
     * @var string
     */
    private $coaGeohash;


    /**
     * Get coaId
     *
     * @return integer 
     */
    public function getCoaId()
    {
        return $this->coaId;
    }

    /**
     * Set coaCountry
     *
     * @param string $coaCountry
     * @return CompanyAddress
     */
    public function setCoaCountry($coaCountry)
    {
        $this->coaCountry = $coaCountry;
    
        return $this;
    }

    /**
     * Get coaCountry
     *
     * @return string 
     */
    public function getCoaCountry()
    {
        return $this->coaCountry;
    }

    /**
     * Set coaStreet
     *
     * @param string $coaStreet
     * @return CompanyAddress
     */
    public function setCoaStreet($coaStreet)
    {
        $this->coaStreet = $coaStreet;
    
        return $this;
    }

    /**
     * Get coaStreet
     *
     * @return string 
     */
    public function getCoaStreet()
    {
        return $this->coaStreet;
    }

    /**
     * Set coaNeighborhood
     *
     * @param string $coaNeighborhood
     * @return CompanyAddress
     */
    public function setCoaNeighborhood($coaNeighborhood)
    {
        $this->coaNeighborhood = $coaNeighborhood;
    
        return $this;
    }

    /**
     * Get coaNeighborhood
     *
     * @return string 
     */
    public function getCoaNeighborhood()
    {
        return $this->coaNeighborhood;
    }

    /**
     * Set coaNumber
     *
     * @param boolean $coaNumber
     * @return CompanyAddress
     */
    public function setCoaNumber($coaNumber)
    {
        $this->coaNumber = $coaNumber;
    
        return $this;
    }

    /**
     * Get coaNumber
     *
     * @return boolean 
     */
    public function getCoaNumber()
    {
        return $this->coaNumber;
    }

    /**
     * Set coaZipcode
     *
     * @param boolean $coaZipcode
     * @return CompanyAddress
     */
    public function setCoaZipcode($coaZipcode)
    {
        $this->coaZipcode = $coaZipcode;
    
        return $this;
    }

    /**
     * Get coaZipcode
     *
     * @return boolean 
     */
    public function getCoaZipcode()
    {
        return $this->coaZipcode;
    }

    /**
     * Set coaCity
     *
     * @param string $coaCity
     * @return CompanyAddress
     */
    public function setCoaCity($coaCity)
    {
        $this->coaCity = $coaCity;
    
        return $this;
    }

    /**
     * Get coaCity
     *
     * @return string 
     */
    public function getCoaCity()
    {
        return $this->coaCity;
    }

    /**
     * Set coaLat
     *
     * @param string $coaLat
     * @return CompanyAddress
     */
    public function setCoaLat($coaLat)
    {
        $this->coaLat = $coaLat;
    
        return $this;
    }

    /**
     * Get coaLat
     *
     * @return string 
     */
    public function getCoaLat()
    {
        return $this->coaLat;
    }

    /**
     * Set coaLng
     *
     * @param string $coaLng
     * @return CompanyAddress
     */
    public function setCoaLng($coaLng)
    {
        $this->coaLng = $coaLng;
    
        return $this;
    }

    /**
     * Get coaLng
     *
     * @return string 
     */
    public function getCoaLng()
    {
        return $this->coaLng;
    }

    /**
     * Set coaGeohash
     *
     * @param string $coaGeohash
     * @return CompanyAddress
     */
    public function setCoaGeohash($coaGeohash)
    {
        $this->coaGeohash = $coaGeohash;
    
        return $this;
    }

    /**
     * Get coaGeohash
     *
     * @return string 
     */
    public function getCoaGeohash()
    {
        return $this->coaGeohash;
    }
}
