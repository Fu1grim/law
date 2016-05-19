<?php
// src/AppBundle/Entity/Contact.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use AppBundle\Entity\Utility\Traits\IdMapper;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    use IdMapper;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $email;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $phone;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $link;

    public function __toString()
    {
        return ( $this->email ) ?: '';
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Contact
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
