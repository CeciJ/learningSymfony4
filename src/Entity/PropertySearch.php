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
}