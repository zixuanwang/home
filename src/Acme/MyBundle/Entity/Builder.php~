<?php
// src/Acme/MyBundle/Entity/Builder.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="builder")
 */
class Builder {
	/**
	 * @ORM\OneToOne(targetEntity="Album")
	 */
	protected $album;
	/**
	 * @ORM\OneToMany(targetEntity="Community", mappedBy="builder")
	 */
	protected $communities;
	/**
	 * @ORM\Column(type="string", length=10000)
	 */
	protected $description;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\OneToOne(targetEntity="Photo")
	 */
	protected $logo;
	/**
	 * @ORM\Column(type="string", length=50)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $website;
	public function __construct() {
		$this->communities = new ArrayCollection ();
	}
	
	/**
	 * Set description
	 *
	 * @param string $description        	
	 * @return Builder
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
	 * Set website
	 *
	 * @param string $website        	
	 * @return Builder
	 */
	public function setWebsite($website) {
		$this->website = $website;
		
		return $this;
	}
	
	/**
	 * Get website
	 *
	 * @return string
	 */
	public function getWebsite() {
		return $this->website;
	}
	
	/**
	 * Add communities
	 *
	 * @param \Acme\MyBundle\Entity\Community $communities        	
	 * @return Builder
	 */
	public function addCommunity(\Acme\MyBundle\Entity\Community $communities) {
		$this->communities [] = $communities;
		
		return $this;
	}
	
	/**
	 * Remove communities
	 *
	 * @param \Acme\MyBundle\Entity\Community $communities        	
	 */
	public function removeCommunity(\Acme\MyBundle\Entity\Community $communities) {
		$this->communities->removeElement ( $communities );
	}
	
	/**
	 * Get communities
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getCommunities() {
		return $this->communities;
	}
	
	/**
	 * Set name
	 *
	 * @param string $name        	
	 * @return Builder
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
	 * Set logo
	 *
	 * @param \Acme\MyBundle\Entity\Photo $logo        	
	 * @return Builder
	 */
	public function setLogo(\Acme\MyBundle\Entity\Photo $logo = null) {
		$this->logo = $logo;
		
		return $this;
	}
	
	/**
	 * Get logo
	 *
	 * @return \Acme\MyBundle\Entity\Photo
	 */
	public function getLogo() {
		return $this->logo;
	}

    /**
     * Set album
     *
     * @param \Acme\MyBundle\Entity\Album $album
     * @return Builder
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
