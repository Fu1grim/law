<?php
// src/AppBundle/Entity/Model/Feedback.php
namespace AppBundle\Model;

use Symfony\Component\Validator\Mapping\ClassMetadata,
    Symfony\Component\Validator\Constraints as Assert;

class Feedback
{
    /**
     * @Assert\NotBlank(
     *     message = "feedback.errors.not_blank"
     * )
     * @Assert\Length(
     *      min=2,
     *      max=200,
     *      minMessage="feedback.errors.name.length.min",
     *      maxMessage="feedback.errors.name.length.max"
     * )
     */
    protected $name;

    /**
     * @Assert\NotBlank(
     *     message = "feedback.errors.not_blank"
     * )
     * @Assert\Email(
     *     message = "feedback.errors.email",
     *     checkMX = true
     * )
     */
    protected $email;

    /**
     * @Assert\NotBlank(
     *     message = "feedback.errors.not_blank"
     *)
     */
    protected $phone;

    /**
     * @Assert\NotBlank(
     *     message = "feedback.errors.not_blank"
     * )
     * @Assert\Length(
     *      max=4000,
     *      maxMessage="feedback.errors.message.length.max",
     * )
     */
    protected $message;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
