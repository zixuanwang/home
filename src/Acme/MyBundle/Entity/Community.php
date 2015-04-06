<?php
// src/Acme/MyBundle/Entity/Community.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="community", indexes={@ORM\Index(name="area_idx", columns={"area"})})
 */
class Community {
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $address;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $area;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $builder;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $city;
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	protected $county;
	/**
	 * @ORM\Column(type="string", length=1000, nullable=true)
	 */
	protected $description;
	/**
	 * @ORM\ManyToMany(targetEntity="Photo", cascade={"persist"})
	 * @ORM\JoinTable(name="communities_facades", joinColumns={@ORM\JoinColumn(name="community_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 */
	protected $facades;
	/**
	 * @ORM\OneToMany(targetEntity="Home", mappedBy="community")
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
	 * @ORM\JoinTable(name="communities_images", joinColumns={@ORM\JoinColumn(name="community_id", referencedColumnName="id")},
	 * inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 */
	protected $images;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
	 */
	protected $latitude;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
	 */
	protected $longitude;
	/**
	 * @ORM\OneToOne(targetEntity="Photo")
	 */
	protected $map;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	protected $school_district;
	/**
	 * @ORM\ManyToMany(targetEntity="School", inversedBy="communities")
	 * @ORM\JoinTable(name="communities_schools")
	 */
	protected $schools;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $state;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $zipcode;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->facades = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->homes = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->images = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->schools = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->updated = new \DateTime ();
	}
	
	/**
	 * Set address
	 *
	 * @param string $address        	
	 * @return Community
	 */
	public function setAddress($address) {
		$this->address = $address;
		
		return $this;
	}
	
	/**
	 * Get address
	 *
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * Set builder
	 *
	 * @param string $builder        	
	 * @return Community
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
	 * Set city
	 *
	 * @param string $city        	
	 * @return Community
	 */
	public function setCity($city) {
		$this->city = $city;
		
		return $this;
	}
	
	/**
	 * Get city
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * Set county
	 *
	 * @param string $county        	
	 * @return Community
	 */
	public function setCounty($county) {
		$this->county = $county;
		
		return $this;
	}
	
	/**
	 * Get county
	 *
	 * @return string
	 */
	public function getCounty() {
		return $this->county;
	}
	
	/**
	 * Set description
	 *
	 * @param string $description        	
	 * @return Community
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
	 * Set latitude
	 *
	 * @param string $latitude        	
	 * @return Community
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		
		return $this;
	}
	
	/**
	 * Get latitude
	 *
	 * @return string
	 */
	public function getLatitude() {
		return $this->latitude;
	}
	
	/**
	 * Set longitude
	 *
	 * @param string $longitude        	
	 * @return Community
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		
		return $this;
	}
	
	/**
	 * Get longitude
	 *
	 * @return string
	 */
	public function getLongitude() {
		return $this->longitude;
	}
	
	/**
	 * Set name
	 *
	 * @param string $name        	
	 * @return Community
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
	 * Set school_district
	 *
	 * @param string $schoolDistrict        	
	 * @return Community
	 */
	public function setSchoolDistrict($schoolDistrict) {
		$this->school_district = $schoolDistrict;
		
		return $this;
	}
	
	/**
	 * Get school_district
	 *
	 * @return string
	 */
	public function getSchoolDistrict() {
		return $this->school_district;
	}
	
	/**
	 * Set state
	 *
	 * @param string $state        	
	 * @return Community
	 */
	public function setState($state) {
		$this->state = $state;
		
		return $this;
	}
	
	/**
	 * Get state
	 *
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * Set updated
	 *
	 * @param \DateTime $updated        	
	 * @return Community
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
	 * Set zipcode
	 *
	 * @param string $zipcode        	
	 * @return Community
	 */
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
		
		return $this;
	}
	
	/**
	 * Get zipcode
	 *
	 * @return string
	 */
	public function getZipcode() {
		return $this->zipcode;
	}
	
	/**
	 * Add facades
	 *
	 * @param \Acme\MyBundle\Entity\Photo $facades        	
	 * @return Community
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
	 * Add homes
	 *
	 * @param \Acme\MyBundle\Entity\Home $homes        	
	 * @return Community
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
	 * @return Community
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
	 * Set map
	 *
	 * @param \Acme\MyBundle\Entity\Photo $map        	
	 * @return Community
	 */
	public function setMap(\Acme\MyBundle\Entity\Photo $map = null) {
		$this->map = $map;
		
		return $this;
	}
	
	/**
	 * Get map
	 *
	 * @return \Acme\MyBundle\Entity\Photo
	 */
	public function getMap() {
		return $this->map;
	}
	
	/**
	 * Add schools
	 *
	 * @param \Acme\MyBundle\Entity\School $schools        	
	 * @return Community
	 */
	public function addSchool(\Acme\MyBundle\Entity\School $schools) {
		$this->schools [] = $schools;
		
		return $this;
	}
	
	/**
	 * Remove schools
	 *
	 * @param \Acme\MyBundle\Entity\School $schools        	
	 */
	public function removeSchool(\Acme\MyBundle\Entity\School $schools) {
		$this->schools->removeElement ( $schools );
	}
	
	/**
	 * Get schools
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getSchools() {
		return $this->schools;
	}

    /**
     * Set area
     *
     * @param string $area
     * @return Community
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
}
