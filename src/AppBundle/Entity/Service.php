<?php
// src/AppBundle/Entity/Service.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="service")
 */
class Service
{
    use IdMapper;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $title;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $icon;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $image;

    /**
    * @ORM\OneToMany(targetEntity="ServiceItem", mappedBy="service", cascade={"persist", "remove"}, orphanRemoval=true)
    */
    protected $serviceItems;

    /**
     * @ORM\OneToMany(targetEntity="Work", mappedBy="service")
     */
    protected $works;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serviceItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return ( $this->title ) ?: '';
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Service
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
     * Set icon
     *
     * @param string $icon
     *
     * @return Service
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Service
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add serviceItem
     *
     * @param \AppBundle\Entity\ServiceItem $serviceItem
     *
     * @return Service
     */
    public function addServiceItem(\AppBundle\Entity\ServiceItem $serviceItem)
    {
        $serviceItem->setService($this);
        $this->serviceItems[] = $serviceItem;

        return $this;
    }

    /**
     * Remove serviceItem
     *
     * @param \AppBundle\Entity\ServiceItem $serviceItem
     */
    public function removeServiceItem(\AppBundle\Entity\ServiceItem $serviceItem)
    {
        $this->serviceItems->removeElement($serviceItem);
    }

    /**
     * Get serviceItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceItems()
    {
        return $this->serviceItems;
    }
    /**
     * Add work
     *
     * @param \AppBundle\Entity\Work $work
     *
     * @return Service
     */
    public function addWork(\AppBundle\Entity\Work $work)
    {
        $this->works[] = $work;

        return $this;
    }

    /**
     * Remove work
     *
     * @param \AppBundle\Entity\Work $work
     */
    public function removeWork(\AppBundle\Entity\Work $work)
    {
        $this->works->removeElement($work);
    }

    /**
     * Get works
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorks()
    {
        return $this->works;
    }
}
