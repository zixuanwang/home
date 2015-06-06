<?php
// src/Acme/MyBundle/Entity/HomeModel.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="homemodel", indexes={@ORM\Index(name="area_idx", columns={"area"}), @ORM\Index(name="unique_idx", columns={"name", "builder", "square_feet", "num_baths", "num_beds"})})
 */
class HomeModel {
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $area;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $builder;
	/**
	 * @ORM\Column(type="string", length=1000, nullable=true)
	 */
	protected $description;
	/**
	 * @ORM\ManyToMany(targetEntity="Photo", cascade={"persist"})
	 * @ORM\JoinTable(name="homemodels_facades", joinColumns={@ORM\JoinColumn(name="homemodel_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 */
	protected $facades;
	/**
	 * @ORM\ManyToMany(targetEntity="Photo", cascade={"persist"})
	 * @ORM\JoinTable(name="homemodels_floorplans", joinColumns={@ORM\JoinColumn(name="homemodel_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 */
	protected $floorplans;
	/**
	 * @ORM\Column(type="string", length=5, nullable=true)
	 */
	protected $has_panorama;
	/**
	 * @ORM\OneToMany(targetEntity="Home", mappedBy="home_model")
	 */
	protected $homes;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\ManyToMany(targetEntity="Photo", cascade={"persist"})
	 * @ORM\JoinTable(name="homemodels_images", joinColumns={@ORM\JoinColumn(name="homemodel_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 * @ORM\OrderBy({"updated"="DESC"})
	 */
	protected $images;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="decimal", scale=2)
	 */
	protected $num_baths;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $num_beds;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $num_garages;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $num_stories;
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $square_feet;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->facades = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->floorplans = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->homes = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->images = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->updated = new \DateTime ();
	}
	
	/**
	 * Set builder
	 *
	 * @param string $builder        	
	 * @return HomeModel
	 */
	public function setBuilder($builder) {
		$this->builder = $builder;
		
		return $this;
	}
	
	/**
	 * Get builder
	 *
	 * @return string
	 */
	public function getBuilder() {
		return $this->builder;
	}
	
	/**
	 * Set description
	 *
	 * @param string $description        	
	 * @return HomeModel
	 */
	public function setDescription($description) {
		$this->description = $description;
		
		return $this;
	}
	
	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set name
	 *
	 * @param string $name        	
	 * @return HomeModel
	 */
	public function setName($name) {
		$this->name = $name;
		
		return $this;
	}
	
	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Set num_baths
	 *
	 * @param string $numBaths        	
	 * @return HomeModel
	 */
	public function setNumBaths($numBaths) {
		$this->num_baths = $numBaths;
		
		return $this;
	}
	
	/**
	 * Get num_baths
	 *
	 * @return string
	 */
	public function getNumBaths() {
		return $this->num_baths;
	}
	
	/**
	 * Set num_beds
	 *
	 * @param integer $numBeds        	
	 * @return HomeModel
	 */
	public function setNumBeds($numBeds) {
		$this->num_beds = $numBeds;
		
		return $this;
	}
	
	/**
	 * Get num_beds
	 *
	 * @return integer
	 */
	public function getNumBeds() {
		return $this->num_beds;
	}
	
	/**
	 * Set num_garages
	 *
	 * @param integer $numGarages        	
	 * @return HomeModel
	 */
	public function setNumGarages($numGarages) {
		$this->num_garages = $numGarages;
		
		return $this;
	}
	
	/**
	 * Get num_garages
	 *
	 * @return integer
	 */
	public function getNumGarages() {
		return $this->num_garages;
	}
	
	/**
	 * Set num_stories
	 *
	 * @param integer $numStories        	
	 * @return HomeModel
	 */
	public function setNumStories($numStories) {
		$this->num_stories = $numStories;
		
		return $this;
	}
	
	/**
	 * Get num_stories
	 *
	 * @return integer
	 */
	public function getNumStories() {
		return $this->num_stories;
	}
	
	/**
	 * Set square_feet
	 *
	 * @param string $squareFeet        	
	 * @return HomeModel
	 */
	public function setSquareFeet($squareFeet) {
		$this->square_feet = $squareFeet;
		
		return $this;
	}
	
	/**
	 * Get square_feet
	 *
	 * @return string
	 */
	public function getSquareFeet() {
		return $this->square_feet;
	}
	
	/**
	 * Set updated
	 *
	 * @param \DateTime $updated        	
	 * @return HomeModel
	 */
	public function setUpdated($updated) {
		$this->updated = $updated;
		
		return $this;
	}
	
	/**
	 * Get updated
	 *
	 * @return \DateTime
	 */
	public function getUpdated() {
		return $this->updated;
	}
	
	/**
	 * Add facades
	 *
	 * @param \Acme\MyBundle\Entity\Photo $facades        	
	 * @return HomeModel
	 */
	public function addFacade(\Acme\MyBundle\Entity\Photo $facades) {
		$this->facades [] = $facades;
		
		return $this;
	}
	
	/**
	 * Remove facades
	 *
	 * @param \Acme\MyBundle\Entity\Photo $facades        	
	 */
	public function removeFacade(\Acme\MyBundle\Entity\Photo $facades) {
		$this->facades->removeElement ( $facades );
	}
	
	/**
	 * Get facades
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getFacades() {
		return $this->facades;
	}
	
	/**
	 * Add floorplans
	 *
	 * @param \Acme\MyBundle\Entity\Photo $floorplans        	
	 * @return HomeModel
	 */
	public function addFloorplan(\Acme\MyBundle\Entity\Photo $floorplans) {
		$this->floorplans [] = $floorplans;
		
		return $this;
	}
	
	/**
	 * Remove floorplans
	 *
	 * @param \Acme\MyBundle\Entity\Photo $floorplans        	
	 */
	public function removeFloorplan(\Acme\MyBundle\Entity\Photo $floorplans) {
		$this->floorplans->removeElement ( $floorplans );
	}
	
	/**
	 * Get floorplans
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getFloorplans() {
		return $this->floorplans;
	}
	
	/**
	 * Add homes
	 *
	 * @param \Acme\MyBundle\Entity\Home $homes        	
	 * @return HomeModel
	 */
	public function addHome(\Acme\MyBundle\Entity\Home $homes) {
		$this->homes [] = $homes;
		
		return $this;
	}
	
	/**
	 * Remove homes
	 *
	 * @param \Acme\MyBundle\Entity\Home $homes        	
	 */
	public function removeHome(\Acme\MyBundle\Entity\Home $homes) {
		$this->homes->removeElement ( $homes );
	}
	
	/**
	 * Get homes
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getHomes() {
		return $this->homes;
	}
	
	/**
	 * Add images
	 *
	 * @param \Acme\MyBundle\Entity\Photo $images        	
	 * @return HomeModel
	 */
	public function addImage(\Acme\MyBundle\Entity\Photo $images) {
		$this->images [] = $images;
		
		return $this;
	}
	
	/**
	 * Remove images
	 *
	 * @param \Acme\MyBundle\Entity\Photo $images        	
	 */
	public function removeImage(\Acme\MyBundle\Entity\Photo $images) {
		$this->images->removeElement ( $images );
	}
	
	/**
	 * Get images
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getImages() {
		return $this->images;
	}

    /**
     * Set area
     *
     * @param string $area
     * @return HomeModel
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set has_panorama
     *
     * @param string $hasPanorama
     * @return HomeModel
     */
    public function setHasPanorama($hasPanorama)
    {
        $this->has_panorama = $hasPanorama;

        return $this;
    }

    /**
     * Get has_panorama
     *
     * @return string 
     */
    public function getHasPanorama()
    {
        return $this->has_panorama;
    }
}
