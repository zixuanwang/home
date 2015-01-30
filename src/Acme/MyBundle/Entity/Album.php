<?php 
// src/Acme/MyBundle/Entity/Album.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="album")
 */
class Album
{
	/**
	 * @ORM\OneToOne(targetEntity="Community", inversedBy="album")
	 **/
	protected $community;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\OneToOne(targetEntity="HomeModel", inversedBy="album")
	 **/
	protected $home_model;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $name;
	/**
	 * @ORM\OneToMany(targetEntity="Photo", mappedBy="album")
	 */
	protected $photos;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $title;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new ArrayCollection();
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
     * @return Album
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
     * Set title
     *
     * @param string $title
     * @return Album
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set community
     *
     * @param \Acme\MyBundle\Entity\Community $community
     * @return Album
     */
    public function setCommunity(\Acme\MyBundle\Entity\Community $community = null)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return \Acme\MyBundle\Entity\Community 
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Set home_model
     *
     * @param \Acme\MyBundle\Entity\HomeModel $homeModel
     * @return Album
     */
    public function setHomeModel(\Acme\MyBundle\Entity\HomeModel $homeModel = null)
    {
        $this->home_model = $homeModel;

        return $this;
    }

    /**
     * Get home_model
     *
     * @return \Acme\MyBundle\Entity\HomeModel 
     */
    public function getHomeModel()
    {
        return $this->home_model;
    }

    /**
     * Add photos
     *
     * @param \Acme\MyBundle\Entity\Photo $photos
     * @return Album
     */
    public function addPhoto(\Acme\MyBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \Acme\MyBundle\Entity\Photo $photos
     */
    public function removePhoto(\Acme\MyBundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }
}
