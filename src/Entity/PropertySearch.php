<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class PropertySearch {

    /**
     * @var ArrayCollection
     */
    private $options;

    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;

    /**
     * @var integer|null
     */
    private $distance;

    /**
     * @var float|null
     */
    private $lat;

    /**
     * @var float|null
     */
    private $lng;

    /**
     * @var string|null
     */
    private $address;

    public function __construct()
    {
      $this->options = new ArrayCollection();
    }

    public function getMaxPrice(): ?int
    {
		  return $this->maxPrice;
	  }

    public function setMaxPrice(int $maxPrice): PropertySearch
    {
      $this->maxPrice = $maxPrice;
      return $this;
    }

    public function getMinSurface(): ?int
    {
      return $this->minSurface;
    }

    public function setMinSurface(int $minSurface): PropertySearch
    {
      $this->minSurface = $minSurface;
      return $this;
    }

    public function getOptions(): ArrayCollection
    {
      return $this->options;
    }

    public function setOptions(ArrayCollection $options)
    {
      $this->options = $options;
    }

    /**
     * @return integer|null
     */
    public function getDistance() 
    {
      return $this->distance;
    }

    /**
     * @param float|null $distance
     * @return PropertySearch
     */
    public function setDistance($distance) 
    {
      $this->distance = $distance;
      return $this;
    }

    /**
     * @return float|null
     */
    public function getLat() 
    {
      return $this->lat;
    }
  
    /**
     * @param float|null $lat
     * @return PropertySearch
     */
    public function setLat($lat) 
    {
      $this->lat = $lat;
      return $this;
    }

    /**
     * @return float|null
     */
    public function getLng() 
    {
      return $this->lng;
    }
  
    /**
     * @param float|null $lng
     * @return PropertySearch
     */
    public function setLng($lng) 
    {
      $this->lng = $lng;
      return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress() 
    {
      return $this->address;
    }

    /**
     * @param string|null $address
     * @return PropertySearch
     */
    public function setAddress($address) 
    {
      $this->address = $address;
      return $this;
    }
}