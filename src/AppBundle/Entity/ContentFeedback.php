<?php
// src/AppBundle/Entity/ContentFeedback.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_feedback")
 */
class ContentFeedback
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $mainTitle;
    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitleFeedback;
    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textFeedback;

    public function __toString()
    {
        return ( $this->mainTitle ) ?: '';
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return ContentFeedback
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
     * Set subTitleFeedback
     *
     * @param string $subTitleFeedback
     *
     * @return ContentFeedback
     */
    public function setSubTitleFeedback($subTitleFeedback)
    {
        $this->subTitleFeedback = $subTitleFeedback;

        return $this;
    }

    /**
     * Get subTitleFeedback
     *
     * @return string
     */
    public function getSubTitleFeedback()
    {
        return $this->subTitleFeedback;
    }

    /**
     * Set textFeedback
     *
     * @param string $textFeedback
     *
     * @return ContentFeedback
     */
    public function setTextFeedback($textFeedback)
    {
        $this->textFeedback = $textFeedback;

        return $this;
    }

    /**
     * Get textFeedback
     *
     * @return string
     */
    public function getTextFeedback()
    {
        return $this->textFeedback;
    }
}
