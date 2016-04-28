<?php
// src/AppBundle/Service/Mailer.php
namespace AppBundle\Service;

use Swift_Message;

use AppBundle\Model\Feedback;

class Mailer
{
    const FEEDBACK_EMAIL_FROM = "no-reply@hnatenko.com";
    const FEEDBACK_EMAIL_TO   = "office@hnatenko.com";

    protected $_mailer;
    protected $_translator;

    public function setMailer($mailer)
    {
        $this->_mailer = $mailer;
    }

    public function setTranslator($translator)
    {
        $this->_translator = $translator;
    }

    public function sendFeedback(Feedback $feedback, $feedbackView)
    {
        $subject = $this->_translator->trans('emails.feedback.subject');

        $message = Swift_Message::newInstance()
            ->setFrom(self::FEEDBACK_EMAIL_FROM)
            ->setTo(self::FEEDBACK_EMAIL_TO)
            ->setSubject($subject)
            ->setBody($feedbackView, "text/html")
        ;

        return $this->_mailer->send($message);
    }
}
