<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/** 
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
	const GENDER_MAN = 'male';
	const GENDER_WOMAN = 'female';
	
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="id", type="string")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="username", type="string")
     */
    protected $username;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $gender;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="user")
     */
    protected $photos;
	
	/**	 
     * @ORM\OneToOne(targetEntity="Profile", mappedBy="user")
     */
    protected $profile;
	
	/**
	 * @var string
     * @ORM\Column(type="string")
	 */
	protected $region;

    public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();
        $this->photos = new ArrayCollection();        
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Collection $photos
     */
    public function setPhotos(Collection $photos)
    {
        $this->photos = $photos;
    }
	
	/**
     * Set profile
     *
     * @param Profile $profile
     *
     * @return User
     */
    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
	
	/**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
}