<?php

namespace EPSI\KMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Content
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text")
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @ORM\ManyToMany(targetEntity="EPSI\KMBundle\Entity\Content", cascade={"persist"})
     */
    private $associated;

    /**
     * @ORM\ManyToMany(targetEntity="EPSI\KMBundle\Entity\User", cascade={"persist"})
     */
    private $users;

    /**
     * @ORM\Column()
     */
    private $statement;


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
     * Set title
     *
     * @param string $title
     * @return Content
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Content
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
     * Set source
     *
     * @param string $source
     * @return Content
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Content
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
     * Set created
     *
     * @param \DateTime $created
     * @return Content
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Content
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->associated = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add associated
     *
     * @param \EPSI\KMBundle\Entity\Content $associated
     * @return Content
     */
    public function addAssociated(\EPSI\KMBundle\Entity\Content $associated)
    {
        $this->associated[] = $associated;
    
        return $this;
    }

    /**
     * Remove associated
     *
     * @param \EPSI\KMBundle\Entity\Content $associated
     */
    public function removeAssociated(\EPSI\KMBundle\Entity\Content $associated)
    {
        $this->associated->removeElement($associated);
    }

    /**
     * Get associated
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssociated()
    {
        return $this->associated;
    }

    /**
     * Set statement
     *
     * @param string $statement
     * @return Content
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
     * Add users
     *
     * @param \EPSI\KMBundle\Entity\User $users
     * @return Content
     */
    public function addUser(\EPSI\KMBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \EPSI\KMBundle\Entity\User $users
     */
    public function removeUser(\EPSI\KMBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}