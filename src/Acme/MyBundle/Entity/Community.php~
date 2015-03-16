<?php 
// src/Acme/MyBundle/Entity/Community.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="community")
 */
class Community
{
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $address;
	/**
	 * @ORM\OneToOne(targetEntity="Album")
	 **/
	protected $album;
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
	 * @ORM\ManyToMany(targetEntity="HomeModel", inversedBy="communities")
	 * @ORM\JoinTable(name="communities_home_models")
	 */
	protected $home_models;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\OneToOne(targetEntity="Photo")
	 **/
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
     **/
	protected $schools;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $state;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $zipcode;
	public function __construct()
	{
		$this->home_models = new ArrayCollection();
		$this->schools = new ArrayCollection();
	}

    /**
     * Set city
     *
     * @param string $city
     * @return Community
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Community
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Community
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Community
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set school_district
     *
     * @param string $schoolDistrict
     * @return Community
     */
    public function setSchoolDistrict($schoolDistrict)
    {
        $this->school_district = $schoolDistrict;

        return $this;
    }

    /**
     * Get school_district
     *
     * @return string 
     */
    public function getSchoolDistrict()
    {
        return $this->school_district;
    }

    /**
     * Add schools
     *
     * @param \Acme\MyBundle\Entity\School $schools
     * @return Community
     */
    public function addSchool(\Acme\MyBundle\Entity\School $schools)
    {
        $this->schools[] = $schools;

        return $this;
    }

    /**
     * Remove schools
     *
     * @param \Acme\MyBundle\Entity\School $schools
     */
    public function removeSchool(\Acme\MyBundle\Entity\School $schools)
    {
        $this->schools->removeElement($schools);
    }

    /**
     * Get schools
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSchools()
    {
        return $this->schools;
    }

    /**
     * Set album
     *
     * @param \Acme\MyBundle\Entity\Album $album
     * @return Community
     */
    public function setAlbum(\Acme\MyBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Acme\MyBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Community
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Community
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Community
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Community
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Community
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set map
     *
     * @param \Acme\MyBundle\Entity\Photo $map
     * @return Community
     */
    public function setMap(\Acme\MyBundle\Entity\Photo $map = null)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return \Acme\MyBundle\Entity\Photo 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Add home_models
     *
     * @param \Acme\MyBundle\Entity\HomeModel $homeModels
     * @return Community
     */
    public function addHomeModel(\Acme\MyBundle\Entity\HomeModel $homeModels)
    {
        $this->home_models[] = $homeModels;

        return $this;
    }

    /**
     * Remove home_models
     *
     * @param \Acme\MyBundle\Entity\HomeModel $homeModels
     */
    public function removeHomeModel(\Acme\MyBundle\Entity\HomeModel $homeModels)
    {
        $this->home_models->removeElement($homeModels);
    }

    /**
     * Get home_models
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHomeModels()
    {
        return $this->home_models;
    }

    /**
     * Set builder
     *
     * @param string $builder
     * @return Community
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * Get builder
     *
     * @return string 
     */
    public function getBuilder()
    {
        return $this->builder;
    }
}
