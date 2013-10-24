<?php

namespace EPSI\KMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contractNumber", type="string", length=255)
     */
    private $contractNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="statement", type="string", length=255)
     */
    private $statement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started", type="datetime")
     */
    private $started;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ended", type="datetime")
     */
    private $ended;

    /**
     * @ORM\ManyToMany(targetEntity="EPSI\KMBundle\Entity\Content", cascade={"persist"})
     */
    private $contents;


    /**
     * Get contractNumber
     *
     * @return integer 
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set statement
     *
     * @param string $statement
     * @return User
     */
    public function setStatement($statement)
    {
        $this->statement = $statement;
    
        return $this;
    }

    /**
     * Get statement
     *
     * @return string 
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * Set started
     *
     * @param \DateTime $started
     * @return User
     */
    public function setStarted($started)
    {
        $this->started = $started;
    
        return $this;
    }

    /**
     * Get started
     *
     * @return \DateTime 
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Set ended
     *
     * @param \DateTime $ended
     * @return User
     */
    public function setEnded($ended)
    {
        $this->ended = $ended;
    
        return $this;
    }

    /**
     * Get ended
     *
     * @return \DateTime 
     */
    public function getEnded()
    {
        return $this->ended;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set contractNumber
     *
     * @param string $contractNumber
     * @return User
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
    
        return $this;
    }

    /**
     * Add contents
     *
     * @param \EPSI\KMBundle\Entity\Content $contents
     * @return User
     */
    public function addContent(\EPSI\KMBundle\Entity\Content $contents)
    {
        $this->contents[] = $contents;
    
        return $this;
    }

    /**
     * Remove contents
     *
     * @param \EPSI\KMBundle\Entity\Content $contents
     */
    public function removeContent(\EPSI\KMBundle\Entity\Content $contents)
    {
        $this->contents->removeElement($contents);
    }

    /**
     * Get contents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContents()
    {
        return $this->contents;
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
}