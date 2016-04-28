<?php
// src/AppBundle/Entity/ContentService.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_service")
 */
class ContentService
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $mainTitle;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitleSpecializations;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitleService;
    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textService;

    public function __toString()
    {
        return ( $this->mainTitle ) ?: '';
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return ContentService
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
     * Set subTitleSpecializations
     *
     * @param string $subTitleSpecializations
     *
     * @return ContentService
     */
    public function setSubTitleSpecializations($subTitleSpecializations)
    {
        $this->subTitleSpecializations = $subTitleSpecializations;

        return $this;
    }

    /**
     * Get subTitleSpecializations
     *
     * @return string
     */
    public function getSubTitleSpecializations()
    {
        return $this->subTitleSpecializations;
    }

    /**
     * Set subTitleService
     *
     * @param string $subTitleService
     *
     * @return ContentService
     */
    public function setSubTitleService($subTitleService)
    {
        $this->subTitleService = $subTitleService;

        return $this;
    }

    /**
     * Get subTitleService
     *
     * @return string
     */
    public function getSubTitleService()
    {
        return $this->subTitleService;
    }

    /**
     * Set textService
     *
     * @param string $textService
     *
     * @return ContentService
     */
    public function setTextService($textService)
    {
        $this->textService = $textService;

        return $this;
    }

    /**
     * Get textService
     *
     * @return string
     */
    public function getTextService()
    {
        return $this->textService;
    }
}
