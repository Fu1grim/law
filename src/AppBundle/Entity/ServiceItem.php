<?php
// src/AppBundle/Entity/ServiceItem.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="service_item")
 */
class ServiceItem
{
    use IdMapper;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $title;

    /**
    * @ORM\ManyToOne(targetEntity="Service", inversedBy="serviceItems")
    * @ORM\JoinColumn(name="service_id", referencedColumnName="id")
    */
    protected $service;

    public function __toString()
    {
        return ( $this->title ) ?: '';
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ServiceItem
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
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return ServiceItem
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
