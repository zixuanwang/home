<?php
// src/Acme/MyBundle/Entity/Photo.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="path_idx", columns={"path"}), @ORM\Index(name="url_index", columns={"url"})})
 */
class Photo {
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="string", length=100, nullable=false)
	 */
	protected $path;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $url;
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->updated = new \DateTime ();
	}
	public function __toString() {
		return $this->path;
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
	 * @return Photo
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
	 * Set path
	 *
	 * @param string $path        	
	 * @return Photo
	 */
	public function setPath($path) {
		$this->path = $path;
		
		return $this;
	}
	
	/**
	 * Get path
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
	
	/**
	 * Set url
	 *
	 * @param string $url        	
	 * @return Photo
	 */
	public function setUrl($url) {
		$this->url = $url;
		
		return $this;
	}
	
	/**
	 * Get url
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 * Set updated
	 *
	 * @param \DateTime $updated        	
	 * @return Photo
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
}
