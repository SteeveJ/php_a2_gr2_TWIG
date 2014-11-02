<?php
// src\Newart\NewartUserBundle\Entity\user.php
namespace Newart\NewartUserBundle\Entity;

//use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Newart\NewartUserBundle\Entity\UserRepository")
 * @ORM\Table(name="newart_user")
 */
class User //extends BaseUser
{
    /**
     * @ORM\ID
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="account_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $account_id;

    /**
     * @ORM\Column(name="cover_picture_id", type="integer")
     */
    protected $cover_picture_id;

    /**
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    protected $first_name;

    /**
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    protected $last_name;

    /**
     * @ORM\Column(name="birthday", type="date")
     */
    protected $birthday;

    /**
     * @ORM\Column(name="category", type="string", length=255)
     */
    protected $category;

    /**
     * @ORM\Column(name="biography", type="text")
     */
    protected $biography;

    /**
     * @ORM\Column(name="phone", type="string", length=255)
     */
    protected $phone;

    /**
     * @ORM\Column(name="country", type="string", length=255)
     */
    protected $country;

    /**
     * @ORM\Column(name="featuring_date", type="datetime")
     */
    protected $featuring_date;

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
     * Set account_id
     *
     * @param integer $accountId
     * @return User
     */
    public function setAccountId($accountId)
    {
        $this->account_id = $accountId;

        return $this;
    }

    /**
     * Get account_id
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set cover_picture_id
     *
     * @param integer $coverPictureId
     * @return User
     */
    public function setCoverPictureId($coverPictureId)
    {
        $this->cover_picture_id = $coverPictureId;

        return $this;
    }

    /**
     * Get cover_picture_id
     *
     * @return integer 
     */
    public function getCoverPictureId()
    {
        return $this->cover_picture_id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return User
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set biography
     *
     * @param string $biography
     * @return User
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography
     *
     * @return string 
     */
    public function getBiography()
    {
        return $this->biography;
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
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set featuring_date
     *
     * @param \DateTime $featuringDate
     * @return User
     */
    public function setFeaturingDate($featuringDate)
    {
        $this->featuring_date = $featuringDate;

        return $this;
    }

    /**
     * Get featuring_date
     *
     * @return \DateTime 
     */
    public function getFeaturingDate()
    {
        return $this->featuring_date;
    }
}
