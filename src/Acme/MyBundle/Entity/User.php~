<?php 
// src/Acme/MyBundle/Entity/User.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $email;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\ManyToMany(targetEntity="Home", inversedBy="users")
	 * @ORM\JoinTable(name="users_homes")
	 **/
	protected $homes;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="string", length=30)
	 */
	protected $phone;
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $type;
	public function __construct() {
		$this->homes = new ArrayCollection();
	}

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * @return User
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
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add homes
     *
     * @param \Acme\MyBundle\Entity\Home $homes
     * @return User
     */
    public function addHome(\Acme\MyBundle\Entity\Home $homes)
    {
        $this->homes[] = $homes;

        return $this;
    }

    /**
     * Remove homes
     *
     * @param \Acme\MyBundle\Entity\Home $homes
     */
    public function removeHome(\Acme\MyBundle\Entity\Home $homes)
    {
        $this->homes->removeElement($homes);
    }

    /**
     * Get homes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHomes()
    {
        return $this->homes;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
