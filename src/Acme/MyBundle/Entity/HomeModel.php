<?php 
// src/Acme/MyBundle/Entity/HomeModel.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="homemodel")
 */
class HomeModel
{
	/**
	 * @ORM\OneToOne(targetEntity="Album", mappedBy="home_model")
	 **/
	protected $album;
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
	 * @ORM\Column(type="string", length=30)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="decimal")
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
    public function __construct()
    {
    	$this->homes = new ArrayCollection();
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
     * Set album
     *
     * @param \Acme\MyBundle\Entity\Album $album
     * @return HomeModel
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
}
