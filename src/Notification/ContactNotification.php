<?php

namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;


class ContactNotification{

    private $mailer;

    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
    public function notify(Contact $contact)
    {
        $message = (new \Swift_Message('Agence : ' . $contact->getProperty()->getTitle()))
            ->setFrom($contact->getMail())
            ->setTo('cec.jourdan@gmail.com')
            ->setReplyTo($contact->getMail())
            ->setBody(
                $this->renderer->render(
                    'emails/contact.html.twig',
                    ['contact' => $contact]
                ),
                'text/html'
            );
            $this->mailer->send($message);
    }
}