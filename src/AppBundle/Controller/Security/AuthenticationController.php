<?php
// src/AppBundle/Controller/Security/AuthenticationController.php
namespace AppBundle\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AuthenticationController extends Controller
{
    /**
     * This controller will not be executed, as the route is handled by the Security system
     *
     * @Method({"GET"})
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {}
}
