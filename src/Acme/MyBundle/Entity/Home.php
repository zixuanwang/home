<?php 
// src/Acme/MyBundle/Entity/Home.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="home")
 */
class Home
{
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $address;
	/**
	 * @ORM\ManyToOne(targetEntity="Community", inversedBy="homes")
	 */
	protected $community;
	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $direction;
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $hoa;
	/**
	 * @ORM\ManyToOne(targetEntity="HomeModel", inversedBy="homes")
	 */
	protected $home_model;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="decimal", scale=8)
	 */
	protected $latitude;
	/**
	 * @ORM\Column(type="decimal", scale=8)
	 */
	protected $longitude;
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $lot_size;
	/**
	 * @ORM\Column(type="decimal")
	 */
    protected $price;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $price_per_foot;
    /**
     * @ORM\Column(type="string", length=30)
     */
	protected $status;
	/**
	 * @ORM\Column(type="integer")
	 */
    protected $year_built;
    

    /**
     * Set direction
     *
     * @param string $direction
     * @return Home
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set hoa
     *
     * @param string $hoa
     * @return Home
     */
    public function setHoa($hoa)
    {
        $this->hoa = $hoa;

        return $this;
    }

    /**
     * Get hoa
     *
     * @return string 
     */
    public function getHoa()
    {
        return $this->hoa;
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
     * Set latitude
     *
     * @param string $latitude
     * @return Home
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
     * @return Home
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
     * Set lot_size
     *
     * @param string $lotSize
     * @return Home
     */
    public function setLotSize($lotSize)
    {
        $this->lot_size = $lotSize;

        return $this;
    }

    /**
     * Get lot_size
     *
     * @return string 
     */
    public function getLotSize()
    {
        return $this->lot_size;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Home
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price_per_foot
     *
     * @param string $pricePerFoot
     * @return Home
     */
    public function setPricePerFoot($pricePerFoot)
    {
        $this->price_per_foot = $pricePerFoot;

        return $this;
    }

    /**
     * Get price_per_foot
     *
     * @return string 
     */
    public function getPricePerFoot()
    {
        return $this->price_per_foot;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Home
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

    /**
     * Set year_built
     *
     * @param integer $yearBuilt
     * @return Home
     */
    public function setYearBuilt($yearBuilt)
    {
        $this->year_built = $yearBuilt;

        return $this;
    }

    /**
     * Get year_built
     *
     * @return integer 
     */
    public function getYearBuilt()
    {
        return $this->year_built;
    }

    /**
     * Set community
     *
     * @param \Acme\MyBundle\Entity\Community $community
     * @return Home
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
     * @return Home
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
     * Set address
     *
     * @param string $address
     * @return Home
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
}
