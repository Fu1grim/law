<?php
// src/AppBundle/Entity/ContentAbout.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper,
    AppBundle\Entity\Utility\Traits\TextFormatter;

/**
 * @ORM\Entity
 * @ORM\Table(name="content_about")
 */
class ContentAbout
{
    use IdMapper, TextFormatter;

    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $mainTitle;

    /**
    * @ORM\Column(type="string", length=200)
    */
    protected $subTitleAbout;

    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textAbout;

    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textSubAbout;

    /**
    * @ORM\Column(type="string", length=1000)
    */
    protected $textAboutFeedback;

    public function __toString()
    {
        return ( $this->mainTitle ) ?: '';
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return ContentAbout
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
     * Set subTitleAbout
     *
     * @param string $subTitleAbout
     *
     * @return ContentAbout
     */
    public function setSubTitleAbout($subTitleAbout)
    {
        $this->subTitleAbout = $subTitleAbout;

        return $this;
    }

    /**
     * Get subTitleAbout
     *
     * @return string
     */
    public function getSubTitleAbout()
    {
        return $this->subTitleAbout;
    }

    /**
     * Set textAbout
     *
     * @param string $textAbout
     *
     * @return ContentAbout
     */
    public function setTextAbout($textAbout)
    {
        $this->textAbout = $textAbout;

        return $this;
    }

    /**
     * Get textAbout
     *
     * @return string
     */
    public function getTextAbout()
    {
        return $this->textAbout;
    }

    public function getTextAboutByNewline()
    {
        return $this->explodeByNewline($this->textAbout);
    }

    /**
     * Set textSubAbout
     *
     * @param string $textSubAbout
     *
     * @return ContentAbout
     */
    public function setTextSubAbout($textSubAbout)
    {
        $this->textSubAbout = $textSubAbout;

        return $this;
    }

    /**
     * Get textSubAbout
     *
     * @return string
     */
    public function getTextSubAbout()
    {
        return $this->textSubAbout;
    }

    public function getTextSubAboutByNewline()
    {
        return $this->explodeByNewline($this->textSubAbout);
    }

    /**
     * Set textAboutFeedback
     *
     * @param string $textAboutFeedback
     *
     * @return ContentAbout
     */
    public function setTextAboutFeedback($textAboutFeedback)
    {
        $this->textAboutFeedback = $textAboutFeedback;

        return $this;
    }

    /**
     * Get textAboutFeedback
     *
     * @return string
     */
    public function getTextAboutFeedback()
    {
        return $this->textAboutFeedback;
    }

    public function getTextAboutFeedbackByNewline()
    {
        return $this->explodeByNewline($this->textAboutFeedback);
    }
}
