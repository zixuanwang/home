<?php
// src/Acme/MyBundle/Entity/Home.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="home")
 */
class Home {
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $address;
	/**
	 * @ORM\ManyToOne(targetEntity="Community", inversedBy="homes")
	 */
	protected $community;
	/**
	 * @ORM\Column(type="string", length=1000, nullable=true)
	 */
	protected $description;
	/**
	 * @ORM\Column(type="string", length=20, nullable=true)
	 */
	protected $direction;
	/**
	 * @ORM\Column(type="decimal", nullable=true)
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
	 * @ORM\Column(type="decimal", scale=10, nullable=true)
	 */
	protected $latitude;
	/**
	 * @ORM\Column(type="decimal", scale=10, nullable=true)
	 */
	protected $longitude;
	/**
	 * @ORM\Column(type="decimal", nullable=true)
	 */
	protected $lot_size;
	/**
	 * @ORM\OneToMany(targetEntity="Price", mappedBy="home")
	 * @ORM\OrderBy({"updated"="DESC"})
	 */
	protected $prices;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2)
	 */
	protected $price_per_foot;
	/**
	 * @ORM\Column(type="string", length=30, nullable=true)
	 */
	protected $status;
	// ...
	/**
	 * @ORM\ManyToMany(targetEntity="User", mappedBy="homes")
	 */
	private $users;
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $year_built;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $zipcode;
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->prices = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->users = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->updated = new \DateTime ();
	}
	
	/**
	 * Set address
	 *
	 * @param string $address        	
	 * @return Home
	 */
	public function setAddress($address) {
		$this->address = $address;
		
		return $this;
	}
	
	/**
	 * Get address
	 *
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}
	
	/**
	 * Set description
	 *
	 * @param string $description        	
	 * @return Home
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
	 * Set direction
	 *
	 * @param string $direction        	
	 * @return Home
	 */
	public function setDirection($direction) {
		$this->direction = $direction;
		
		return $this;
	}
	
	/**
	 * Get direction
	 *
	 * @return string
	 */
	public function getDirection() {
		return $this->direction;
	}
	
	/**
	 * Set hoa
	 *
	 * @param string $hoa        	
	 * @return Home
	 */
	public function setHoa($hoa) {
		$this->hoa = $hoa;
		
		return $this;
	}
	
	/**
	 * Get hoa
	 *
	 * @return string
	 */
	public function getHoa() {
		return $this->hoa;
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
	 * Set latitude
	 *
	 * @param string $latitude        	
	 * @return Home
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
		
		return $this;
	}
	
	/**
	 * Get latitude
	 *
	 * @return string
	 */
	public function getLatitude() {
		return $this->latitude;
	}
	
	/**
	 * Set longitude
	 *
	 * @param string $longitude        	
	 * @return Home
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
		
		return $this;
	}
	
	/**
	 * Get longitude
	 *
	 * @return string
	 */
	public function getLongitude() {
		return $this->longitude;
	}
	
	/**
	 * Set lot_size
	 *
	 * @param string $lotSize        	
	 * @return Home
	 */
	public function setLotSize($lotSize) {
		$this->lot_size = $lotSize;
		
		return $this;
	}
	
	/**
	 * Get lot_size
	 *
	 * @return string
	 */
	public function getLotSize() {
		return $this->lot_size;
	}
	
	/**
	 * Set price_per_foot
	 *
	 * @param string $pricePerFoot        	
	 * @return Home
	 */
	public function setPricePerFoot($pricePerFoot) {
		$this->price_per_foot = $pricePerFoot;
		
		return $this;
	}
	
	/**
	 * Get price_per_foot
	 *
	 * @return string
	 */
	public function getPricePerFoot() {
		return $this->price_per_foot;
	}
	
	/**
	 * Set status
	 *
	 * @param string $status        	
	 * @return Home
	 */
	public function setStatus($status) {
		$this->status = $status;
		
		return $this;
	}
	
	/**
	 * Get status
	 *
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Set year_built
	 *
	 * @param integer $yearBuilt        	
	 * @return Home
	 */
	public function setYearBuilt($yearBuilt) {
		$this->year_built = $yearBuilt;
		
		return $this;
	}
	
	/**
	 * Get year_built
	 *
	 * @return integer
	 */
	public function getYearBuilt() {
		return $this->year_built;
	}
	
	/**
	 * Set updated
	 *
	 * @param \DateTime $updated        	
	 * @return Home
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
	 * Set zipcode
	 *
	 * @param string $zipcode        	
	 * @return Home
	 */
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
		
		return $this;
	}
	
	/**
	 * Get zipcode
	 *
	 * @return string
	 */
	public function getZipcode() {
		return $this->zipcode;
	}
	
	/**
	 * Set community
	 *
	 * @param \Acme\MyBundle\Entity\Community $community        	
	 * @return Home
	 */
	public function setCommunity(\Acme\MyBundle\Entity\Community $community = null) {
		$this->community = $community;
		
		return $this;
	}
	
	/**
	 * Get community
	 *
	 * @return \Acme\MyBundle\Entity\Community
	 */
	public function getCommunity() {
		return $this->community;
	}
	
	/**
	 * Set home_model
	 *
	 * @param \Acme\MyBundle\Entity\HomeModel $homeModel        	
	 * @return Home
	 */
	public function setHomeModel(\Acme\MyBundle\Entity\HomeModel $homeModel = null) {
		$this->home_model = $homeModel;
		
		return $this;
	}
	
	/**
	 * Get home_model
	 *
	 * @return \Acme\MyBundle\Entity\HomeModel
	 */
	public function getHomeModel() {
		return $this->home_model;
	}
	
	/**
	 * Add prices
	 *
	 * @param \Acme\MyBundle\Entity\Price $prices        	
	 * @return Home
	 */
	public function addPrice(\Acme\MyBundle\Entity\Price $prices) {
		$this->prices [] = $prices;
		
		return $this;
	}
	
	/**
	 * Remove prices
	 *
	 * @param \Acme\MyBundle\Entity\Price $prices        	
	 */
	public function removePrice(\Acme\MyBundle\Entity\Price $prices) {
		$this->prices->removeElement ( $prices );
	}
	
	/**
	 * Get prices
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getPrices() {
		return $this->prices;
	}
	
	/**
	 * Add users
	 *
	 * @param \Acme\MyBundle\Entity\User $users        	
	 * @return Home
	 */
	public function addUser(\Acme\MyBundle\Entity\User $users) {
		$this->users [] = $users;
		
		return $this;
	}
	
	/**
	 * Remove users
	 *
	 * @param \Acme\MyBundle\Entity\User $users        	
	 */
	public function removeUser(\Acme\MyBundle\Entity\User $users) {
		$this->users->removeElement ( $users );
	}
	
	/**
	 * Get users
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getUsers() {
		return $this->users;
	}
}
