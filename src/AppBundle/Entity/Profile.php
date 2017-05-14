<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * Profile
 *
 * @ORM\Entity()
 * @ORM\Table(name="profile") 
 */
class Profile
{
	const SEARCHING_MEN = 'men';
	const SEARCHING_WOMEN = 'women';
	const SEARCHING_BOTH = 'both';
	
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;

	/**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $description;
	
	/**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $searching;

	/**     
     * @ORM\OneToOne(targetEntity="User", inversedBy="profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */    
    private $user;
	
	/**
	 * @var array
     * @ORM\Column(type="simple_array")
	 */
	protected $criteria = [
		'searching' => null,
		'age_min' => 18,
		'age_max' => 99,		
	];
	
	/**
	 * @var array
     * @ORM\Column(type="simple_array")
	 */
	protected $profileData = [
        'weight' => null,
        'size' => null,
		'eyes_color' => null,
		'hair_color' => null,
    ];
	
	/**
	 * @var array
     * @ORM\Column(type="simple_array")
	 */
	protected $profileLikes = [
		'music' => null,
		'cinema' => null,
		'books' => null,
		'hobbies' => null,
		'traveling' => null,
		'television' => null,
		'sports' => null,
	];
	
	/**
	 * @var array
     * @ORM\Column(type="simple_array")
	 */
	protected $questions = [
		'proudest_of' => null,
		'dream_life' => null,		
	];
		
	public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();             
    }
	
    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
	
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSearching()
    {
        return $this->searching;
    }

    /**
     * @param string $searching
     */
    public function setSearching(string $searching)
    {
        $this->searching = $searching;
    }	

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Profile
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
		
	public function getCriteria()
	{
		return $this->criteria;
	}
	
	public function setCriteria($key, $value)
	{
		$this->criteria[$key] = $value;
	}
	
	public function getProfileData()
	{
		return $this->profileData;
	}
	
    public function setProfileData($key, $value)
    {
        $this->profileData[$key] = $value;
    }
	
	public function getProfilesLikes()
	{
		return $this->profileLikes;
	}
	
	public function setProfileLikes($key, $value)
    {
        $this->profileLikes[$key] = $value;
    }
	
	public function getQuestions()
	{
		return $this->questions;
	}
	
	public function setQuestions($key, $value)
    {
        $this->questions[$key] = $value;
    }
}
