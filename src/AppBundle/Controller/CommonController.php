<?php
// src/AppBundle/Controller/CommonController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommonController extends Controller
{
    public function headerContactsAction()
    {
        $_manager = $this->getDoctrine()->getManager();

        $contact = $_manager->getRepository('AppBundle:Contact')->findOneBy([], [], 1);

        if( !$contact )
            throw $this->createNotFoundException('No contacts!');

        return $this->render('AppBundle:Common:header_contacts.html.twig', [
            'contact' => $contact
        ]);
    }
}
