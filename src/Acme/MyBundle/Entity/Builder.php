<?php 
// src/Acme/MyBundle/Entity/Builder.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="builder")
 */
class Builder
{
	/**
	 * @ORM\OneToMany(targetEntity="Community", mappedBy="builder")
	 */
	protected $communities;
	/**
	 * @ORM\Column(type="string", length=1000)
	 */
	protected $description;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $website;
	public function __construct()
	{
		$this->communities = new ArrayCollection();
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
     * Add communities
     *
     * @param \Acme\MyBundle\Entity\Community $communities
     * @return Builder
     */
    public function addCommunity(\Acme\MyBundle\Entity\Community $communities)
    {
        $this->communities[] = $communities;

        return $this;
    }

    /**
     * Remove communities
     *
     * @param \Acme\MyBundle\Entity\Community $communities
     */
    public function removeCommunity(\Acme\MyBundle\Entity\Community $communities)
    {
        $this->communities->removeElement($communities);
    }

    /**
     * Get communities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunities()
    {
        return $this->communities;
    }
}
