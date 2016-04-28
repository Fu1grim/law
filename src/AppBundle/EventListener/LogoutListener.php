<?php
// src/AppBundle/EventListener/LogoutListener.php
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\HttpFoundation\RedirectResponse,
    Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface,
    Symfony\Bundle\FrameworkBundle\Routing\Router;

class LogoutListener implements LogoutSuccessHandlerInterface
{
    private $_router;

    public function setRouter(Router $router)
    {
        $this->_router = $router;
    }

    public function onLogoutSuccess(Request $request)
    {
        $url = $this->_router->generate('home');

        return new Response("<script>window.location = '{$url}';</script>", 401);
    }
}
