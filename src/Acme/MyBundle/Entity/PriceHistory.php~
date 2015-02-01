<?php 
// src/Acme/MyBundle/Entity/PriceHistory.php
namespace Acme\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="price_history")
 */
class PriceHistory
{
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date_changed;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $price;

    /**
     * Set date_changed
     *
     * @param \DateTime $dateChanged
     * @return PriceHistory
     */
    public function setDateChanged($dateChanged)
    {
        $this->date_changed = $dateChanged;

        return $this;
    }

    /**
     * Get date_changed
     *
     * @return \DateTime 
     */
    public function getDateChanged()
    {
        return $this->date_changed;
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
     * Set price
     *
     * @param string $price
     * @return PriceHistory
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
}
