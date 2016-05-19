<?php
// src/AppBundle/Entity/Number.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="number")
 */
class Number
{
    use IdMapper;
    /**
    * @ORM\Column(type="integer")
    */
    protected $number;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $title;

    public function __toString()
    {
        return ( $this->title ) ?: '';
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Numbers
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Numbers
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
}
