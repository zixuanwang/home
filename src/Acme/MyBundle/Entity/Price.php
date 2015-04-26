<?php
// src/Acme/MyBundle/Entity/Price.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="price")
 */
class Price {
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\ManyToOne(targetEntity="Home", inversedBy="prices")
	 */
	protected $home;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2)
	 */
	protected $price;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $status;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->updated = new \DateTime ();
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
	 * Set price
	 *
	 * @param string $price        	
	 * @return Price
	 */
	public function setPrice($price) {
		$this->price = $price;
		
		return $this;
	}
	
	/**
	 * Get price
	 *
	 * @return string
	 */
	public function getPrice() {
		return $this->price;
	}
	
	/**
	 * Set updated
	 *
	 * @param \DateTime $updated        	
	 * @return Price
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
     * Set home
     *
     * @param \Acme\MyBundle\Entity\Home $home
     * @return Price
     */
    public function setHome(\Acme\MyBundle\Entity\Home $home = null)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return \Acme\MyBundle\Entity\Home 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Price
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
