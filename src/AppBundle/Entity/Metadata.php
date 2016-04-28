<?php
// src/AppBundle/Entity/Metadata.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="metadata")
 */
class Metadata
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $route;
    /**
    * @ORM\Column(type="string", length=250)
    */
    protected $title;
    /**
    * @ORM\Column(type="string", length=500)
    */
    protected $description;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $robots;

    public function __toString()
    {
        return ( $this->route ) ?: '';
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return Metadata
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Metadata
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
     *
     * @return Metadata
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
     * Set robots
     *
     * @param string $robots
     *
     * @return Metadata
     */
    public function setRobots($robots)
    {
        $this->robots = $robots;

        return $this;
    }

    /**
     * Get robots
     *
     * @return string
     */
    public function getRobots()
    {
        return $this->robots;
    }
}
