<?php
// src/AppBundle/Entity/Specialization.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
* @ORM\Entity
* @ORM\Table(name="specialization")
*/
class Specialization
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
     * @ORM\OneToMany(targetEntity="Work", mappedBy="specialization")
     */
    protected $works;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isMajor;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->works = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isMajor = FALSE;
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
     * @return Specialization
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
     * @return Specialization
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
     * Add work
     *
     * @param \AppBundle\Entity\Work $work
     *
     * @return Specialization
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

    /**
     * Set isMajor
     *
     * @param boolean $isMajor
     *
     * @return Specialization
     */
    public function setIsMajor($isMajor)
    {
        $this->isMajor = $isMajor;

        return $this;
    }

    /**
     * Get isMajor
     *
     * @return boolean
     */
    public function getIsMajor()
    {
        return $this->isMajor;
    }
}
