<?php
// src/AppBundle/Entity/ContentWork.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_work")
 */
class ContentWork
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $mainTitle;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitleWork;

    public function __toString()
    {
        return ( $this->mainTitle ) ?: '';
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return ContentWork
     */
    public function setMainTitle($mainTitle)
    {
        $this->mainTitle = $mainTitle;

        return $this;
    }

    /**
     * Get mainTitle
     *
     * @return string
     */
    public function getMainTitle()
    {
        return $this->mainTitle;
    }

    /**
     * Set subTitleWork
     *
     * @param string $subTitleWork
     *
     * @return ContentWork
     */
    public function setSubTitleWork($subTitleWork)
    {
        $this->subTitleWork = $subTitleWork;

        return $this;
    }

    /**
     * Get subTitleWork
     *
     * @return string
     */
    public function getSubTitleWork()
    {
        return $this->subTitleWork;
    }
}
