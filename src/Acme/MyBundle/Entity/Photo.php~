<?php
// src/Acme/MyBundle/Entity/Photo.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="photo")
 */
class Photo {
	/**
	 * @ORM\ManyToOne(targetEntity="Album", inversedBy="photos")
	 **/
	private $album;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $path;
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
	 * Set album
	 *
	 * @param \Acme\MyBundle\Entity\Album $album        	
	 * @return Photo
	 */
	public function setAlbum(\Acme\MyBundle\Entity\Album $album = null) {
		$this->album = $album;
		
		return $this;
	}
	
	/**
	 * Get album
	 *
	 * @return \Acme\MyBundle\Entity\Album
	 */
	public function getAlbum() {
		return $this->album;
	}

    /**
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}
