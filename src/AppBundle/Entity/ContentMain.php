<?php
// src/AppBundle/Entity/ContentMain.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_main")
 */
class ContentMain
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $mainTitle;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitle;
    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textMain;

    public function __toString()
    {
        return ( $this->mainTitle ) ?: '';
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return ContentMain
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
     * Set subTitle
     *
     * @param string $subTitle
     *
     * @return ContentMain
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Get subTitle
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set textMain
     *
     * @param string $textMain
     *
     * @return ContentMain
     */
    public function setTextMain($textMain)
    {
        $this->textMain = $textMain;

        return $this;
    }

    /**
     * Get textMain
     *
     * @return string
     */
    public function getTextMain()
    {
        return $this->textMain;
    }
}
