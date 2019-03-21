<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {

    /**
     * @var int|null
     */
    private $maxPrice;

    public function getMaxPrice(): ?int
    {
		  return $this->maxPrice;
	  }

    public function setMaxPrice(int $maxPrice): PropertySearch
    {
      $this->maxPrice = $maxPrice;
      return $this;
    }

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;

    public function getMinSurface(): ?int
    {
      return $this->minSurface;
    }

    public function setMinSurface(int $minSurface): PropertySearch
    {
      $this->minSurface = $minSurface;
      return $this;
    }


    

}