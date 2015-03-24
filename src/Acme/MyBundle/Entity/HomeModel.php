<?php 
// src/Acme/MyBundle/Entity/HomeModel.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Doctrine\Common\Collections;
/**
 * @ORM\Entity
 * @ORM\Table(name="homemodel")
 */
class HomeModel
{
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $builder;
	/**
	 * @ORM\Column(type="string", length=1000, nullable=true)
	 */
	protected $description;
	/**
	 * @ORM\OneToOne(targetEntity="Photo")
	 **/
	protected $facade;
	/**
	 * @ORM\OneToOne(targetEntity="Album")
	 **/
	protected $floorplans;
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
	 * @ORM\OneToOne(targetEntity="Album")
	 **/
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
    public function __construct()
    {
    	$this->homes = new ArrayCollection();
    	$this->updated = new \DateTime();
    }  

    /**
     * Set builder
     *
     * @param string $builder
     * @return HomeModel
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

    /**
     * Set description
     *
     * @param string $description
     * @return HomeModel
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
     * @return HomeModel
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
     * Set num_baths
     *
     * @param string $numBaths
     * @return HomeModel
     */
    public function setNumBaths($numBaths)
    {
        $this->num_baths = $numBaths;

        return $this;
    }

    /**
     * Get num_baths
     *
     * @return string 
     */
    public function getNumBaths()
    {
        return $this->num_baths;
    }

    /**
     * Set num_beds
     *
     * @param integer $numBeds
     * @return HomeModel
     */
    public function setNumBeds($numBeds)
    {
        $this->num_beds = $numBeds;

        return $this;
    }

    /**
     * Get num_beds
     *
     * @return integer 
     */
    public function getNumBeds()
    {
        return $this->num_beds;
    }

    /**
     * Set num_garages
     *
     * @param integer $numGarages
     * @return HomeModel
     */
    public function setNumGarages($numGarages)
    {
        $this->num_garages = $numGarages;

        return $this;
    }

    /**
     * Get num_garages
     *
     * @return integer 
     */
    public function getNumGarages()
    {
        return $this->num_garages;
    }

    /**
     * Set num_stories
     *
     * @param integer $numStories
     * @return HomeModel
     */
    public function setNumStories($numStories)
    {
        $this->num_stories = $numStories;

        return $this;
    }

    /**
     * Get num_stories
     *
     * @return integer 
     */
    public function getNumStories()
    {
        return $this->num_stories;
    }

    /**
     * Set square_feet
     *
     * @param string $squareFeet
     * @return HomeModel
     */
    public function setSquareFeet($squareFeet)
    {
        $this->square_feet = $squareFeet;

        return $this;
    }

    /**
     * Get square_feet
     *
     * @return string 
     */
    public function getSquareFeet()
    {
        return $this->square_feet;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return HomeModel
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set facade
     *
     * @param \Acme\MyBundle\Entity\Photo $facade
     * @return HomeModel
     */
    public function setFacade(\Acme\MyBundle\Entity\Photo $facade = null)
    {
        $this->facade = $facade;

        return $this;
    }

    /**
     * Get facade
     *
     * @return \Acme\MyBundle\Entity\Photo 
     */
    public function getFacade()
    {
        return $this->facade;
    }

    /**
     * Set floorplans
     *
     * @param \Acme\MyBundle\Entity\Album $floorplans
     * @return HomeModel
     */
    public function setFloorplans(\Acme\MyBundle\Entity\Album $floorplans = null)
    {
        $this->floorplans = $floorplans;

        return $this;
    }

    /**
     * Get floorplans
     *
     * @return \Acme\MyBundle\Entity\Album 
     */
    public function getFloorplans()
    {
        return $this->floorplans;
    }

    /**
     * Add homes
     *
     * @param \Acme\MyBundle\Entity\Home $homes
     * @return HomeModel
     */
    public function addHome(\Acme\MyBundle\Entity\Home $homes)
    {
        $this->homes[] = $homes;

        return $this;
    }

    /**
     * Remove homes
     *
     * @param \Acme\MyBundle\Entity\Home $homes
     */
    public function removeHome(\Acme\MyBundle\Entity\Home $homes)
    {
        $this->homes->removeElement($homes);
    }

    /**
     * Get homes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHomes()
    {
        return $this->homes;
    }

    /**
     * Set images
     *
     * @param \Acme\MyBundle\Entity\Album $images
     * @return HomeModel
     */
    public function setImages(\Acme\MyBundle\Entity\Album $images = null)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return \Acme\MyBundle\Entity\Album 
     */
    public function getImages()
    {
        return $this->images;
    }
}
