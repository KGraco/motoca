<?php

namespace Moto\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAddress
 */
class CustomerAddress
{
    /**
     * @var integer
     */
    private $cuaId;

    /**
     * @var string
     */
    private $cuaCountry;

    /**
     * @var string
     */
    private $cuaStreet;

    /**
     * @var string
     */
    private $cuaNeighborhood;

    /**
     * @var boolean
     */
    private $cuaNumber;

    /**
     * @var boolean
     */
    private $cuaZipcode;

    /**
     * @var string
     */
    private $cuaCity;

    /**
     * @var string
     */
    private $cuaLat;

    /**
     * @var string
     */
    private $cuaLng;

    /**
     * @var string
     */
    private $cuaGeohash;


    /**
     * Get cuaId
     *
     * @return integer 
     */
    public function getCuaId()
    {
        return $this->cuaId;
    }

    /**
     * Set cuaCountry
     *
     * @param string $cuaCountry
     * @return CustomerAddress
     */
    public function setCuaCountry($cuaCountry)
    {
        $this->cuaCountry = $cuaCountry;
    
        return $this;
    }

    /**
     * Get cuaCountry
     *
     * @return string 
     */
    public function getCuaCountry()
    {
        return $this->cuaCountry;
    }

    /**
     * Set cuaStreet
     *
     * @param string $cuaStreet
     * @return CustomerAddress
     */
    public function setCuaStreet($cuaStreet)
    {
        $this->cuaStreet = $cuaStreet;
    
        return $this;
    }

    /**
     * Get cuaStreet
     *
     * @return string 
     */
    public function getCuaStreet()
    {
        return $this->cuaStreet;
    }

    /**
     * Set cuaNeighborhood
     *
     * @param string $cuaNeighborhood
     * @return CustomerAddress
     */
    public function setCuaNeighborhood($cuaNeighborhood)
    {
        $this->cuaNeighborhood = $cuaNeighborhood;
    
        return $this;
    }

    /**
     * Get cuaNeighborhood
     *
     * @return string 
     */
    public function getCuaNeighborhood()
    {
        return $this->cuaNeighborhood;
    }

    /**
     * Set cuaNumber
     *
     * @param boolean $cuaNumber
     * @return CustomerAddress
     */
    public function setCuaNumber($cuaNumber)
    {
        $this->cuaNumber = $cuaNumber;
    
        return $this;
    }

    /**
     * Get cuaNumber
     *
     * @return boolean 
     */
    public function getCuaNumber()
    {
        return $this->cuaNumber;
    }

    /**
     * Set cuaZipcode
     *
     * @param boolean $cuaZipcode
     * @return CustomerAddress
     */
    public function setCuaZipcode($cuaZipcode)
    {
        $this->cuaZipcode = $cuaZipcode;
    
        return $this;
    }

    /**
     * Get cuaZipcode
     *
     * @return boolean 
     */
    public function getCuaZipcode()
    {
        return $this->cuaZipcode;
    }

    /**
     * Set cuaCity
     *
     * @param string $cuaCity
     * @return CustomerAddress
     */
    public function setCuaCity($cuaCity)
    {
        $this->cuaCity = $cuaCity;
    
        return $this;
    }

    /**
     * Get cuaCity
     *
     * @return string 
     */
    public function getCuaCity()
    {
        return $this->cuaCity;
    }

    /**
     * Set cuaLat
     *
     * @param string $cuaLat
     * @return CustomerAddress
     */
    public function setCuaLat($cuaLat)
    {
        $this->cuaLat = $cuaLat;
    
        return $this;
    }

    /**
     * Get cuaLat
     *
     * @return string 
     */
    public function getCuaLat()
    {
        return $this->cuaLat;
    }

    /**
     * Set cuaLng
     *
     * @param string $cuaLng
     * @return CustomerAddress
     */
    public function setCuaLng($cuaLng)
    {
        $this->cuaLng = $cuaLng;
    
        return $this;
    }

    /**
     * Get cuaLng
     *
     * @return string 
     */
    public function getCuaLng()
    {
        return $this->cuaLng;
    }

    /**
     * Set cuaGeohash
     *
     * @param string $cuaGeohash
     * @return CustomerAddress
     */
    public function setCuaGeohash($cuaGeohash)
    {
        $this->cuaGeohash = $cuaGeohash;
    
        return $this;
    }

    /**
     * Get cuaGeohash
     *
     * @return string 
     */
    public function getCuaGeohash()
    {
        return $this->cuaGeohash;
    }
}
