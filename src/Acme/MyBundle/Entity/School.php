<?php 
// src/Acme/MyBundle/Entity/School.php
namespace Acme\MyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="school")
 */
class School
{
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $address;
	/**
	 * @ORM\Column(type="string", length=50)
	 */
	protected $city;
	/**
	 * @ORM\Column(type="string", length=1000, nullable=true)
	 */
	protected $description;
	/**
	 * @ORM\Column(type="string", length=50)
	 */
	protected $district;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $enrollment;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $ethnicity_white;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $ethnicity_black;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $ethnicity_hispanic;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $ethnicity_asian;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $ethnicity_other;
	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $grade_range;
	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $gs_id;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $gs_rating;
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
	 */
	protected $latitude;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
	 */
	protected $longitude;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $name;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $parent_rating;
	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $state;
	/**
	 * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
	 */
	protected $student_teacher_ratio;
	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $type;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $url;

    /**
     * Set address
     *
     * @param string $address
     * @return School
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

    /**
     * Set city
     *
     * @param string $city
     * @return School
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return School
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
     * Set district
     *
     * @param string $district
     * @return School
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set enrollment
     *
     * @param integer $enrollment
     * @return School
     */
    public function setEnrollment($enrollment)
    {
        $this->enrollment = $enrollment;

        return $this;
    }

    /**
     * Get enrollment
     *
     * @return integer 
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }

    /**
     * Set ethnicity_white
     *
     * @param string $ethnicityWhite
     * @return School
     */
    public function setEthnicityWhite($ethnicityWhite)
    {
        $this->ethnicity_white = $ethnicityWhite;

        return $this;
    }

    /**
     * Get ethnicity_white
     *
     * @return string 
     */
    public function getEthnicityWhite()
    {
        return $this->ethnicity_white;
    }

    /**
     * Set ethnicity_black
     *
     * @param string $ethnicityBlack
     * @return School
     */
    public function setEthnicityBlack($ethnicityBlack)
    {
        $this->ethnicity_black = $ethnicityBlack;

        return $this;
    }

    /**
     * Get ethnicity_black
     *
     * @return string 
     */
    public function getEthnicityBlack()
    {
        return $this->ethnicity_black;
    }

    /**
     * Set ethnicity_hispanic
     *
     * @param string $ethnicityHispanic
     * @return School
     */
    public function setEthnicityHispanic($ethnicityHispanic)
    {
        $this->ethnicity_hispanic = $ethnicityHispanic;

        return $this;
    }

    /**
     * Get ethnicity_hispanic
     *
     * @return string 
     */
    public function getEthnicityHispanic()
    {
        return $this->ethnicity_hispanic;
    }

    /**
     * Set ethnicity_asian
     *
     * @param string $ethnicityAsian
     * @return School
     */
    public function setEthnicityAsian($ethnicityAsian)
    {
        $this->ethnicity_asian = $ethnicityAsian;

        return $this;
    }

    /**
     * Get ethnicity_asian
     *
     * @return string 
     */
    public function getEthnicityAsian()
    {
        return $this->ethnicity_asian;
    }

    /**
     * Set ethnicity_other
     *
     * @param string $ethnicityOther
     * @return School
     */
    public function setEthnicityOther($ethnicityOther)
    {
        $this->ethnicity_other = $ethnicityOther;

        return $this;
    }

    /**
     * Get ethnicity_other
     *
     * @return string 
     */
    public function getEthnicityOther()
    {
        return $this->ethnicity_other;
    }

    /**
     * Set grade_range
     *
     * @param string $gradeRange
     * @return School
     */
    public function setGradeRange($gradeRange)
    {
        $this->grade_range = $gradeRange;

        return $this;
    }

    /**
     * Get grade_range
     *
     * @return string 
     */
    public function getGradeRange()
    {
        return $this->grade_range;
    }

    /**
     * Set gs_id
     *
     * @param string $gsId
     * @return School
     */
    public function setGsId($gsId)
    {
        $this->gs_id = $gsId;

        return $this;
    }

    /**
     * Get gs_id
     *
     * @return string 
     */
    public function getGsId()
    {
        return $this->gs_id;
    }

    /**
     * Set gs_rating
     *
     * @param integer $gsRating
     * @return School
     */
    public function setGsRating($gsRating)
    {
        $this->gs_rating = $gsRating;

        return $this;
    }

    /**
     * Get gs_rating
     *
     * @return integer 
     */
    public function getGsRating()
    {
        return $this->gs_rating;
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
     * @return School
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
     * @return School
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
     * Set name
     *
     * @param string $name
     * @return School
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
     * Set parent_rating
     *
     * @param integer $parentRating
     * @return School
     */
    public function setParentRating($parentRating)
    {
        $this->parent_rating = $parentRating;

        return $this;
    }

    /**
     * Get parent_rating
     *
     * @return integer 
     */
    public function getParentRating()
    {
        return $this->parent_rating;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return School
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set student_teacher_ratio
     *
     * @param string $studentTeacherRatio
     * @return School
     */
    public function setStudentTeacherRatio($studentTeacherRatio)
    {
        $this->student_teacher_ratio = $studentTeacherRatio;

        return $this;
    }

    /**
     * Get student_teacher_ratio
     *
     * @return string 
     */
    public function getStudentTeacherRatio()
    {
        return $this->student_teacher_ratio;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return School
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

    /**
     * Set url
     *
     * @param string $url
     * @return School
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
