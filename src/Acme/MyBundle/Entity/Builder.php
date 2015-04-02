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
// 	/**
// 	 * @ORM\OneToMany(targetEntity="Community", mappedBy="builder")
// 	 */
// 	protected $communities;
	/**
	 * @ORM\Column(type="string", length=10000)
	 */
	protected $description;
// 	/**
// 	 * @ORM\OneToMany(targetEntity="HomeModel", mappedBy="builder")
// 	 */
// 	protected $home_models;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\ManyToMany(targetEntity="Photo")
	 * @ORM\JoinTable(name="builders_images", joinColumns={@ORM\JoinColumn(name="builder_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="photo_id", referencedColumnName="id")})
	 */
	protected $images;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Builder
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
     * @return Builder
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
     * Set website
     *
     * @param string $website
     * @return Builder
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Add images
     *
     * @param \Acme\MyBundle\Entity\Photo $images
     * @return Builder
     */
    public function addImage(\Acme\MyBundle\Entity\Photo $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Acme\MyBundle\Entity\Photo $images
     */
    public function removeImage(\Acme\MyBundle\Entity\Photo $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set logo
     *
     * @param \Acme\MyBundle\Entity\Photo $logo
     * @return Builder
     */
    public function setLogo(\Acme\MyBundle\Entity\Photo $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Acme\MyBundle\Entity\Photo 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
