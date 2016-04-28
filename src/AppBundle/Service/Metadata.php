<?php
// src/AppBundle/Service/Metadata.php
namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\RequestStack;

use Doctrine\ORM\EntityManager;

class Metadata
{
    protected $_manager;
    protected $_requestStack;

    public function setManager(EntityManager $manager)
    {
        $this->_manager = $manager;
    }

    public function setRequestStack(RequestStack $requestStack)
    {
        $this->_requestStack = $requestStack;
    }

    private function getMetadata($routeName)
    {
        $metadata = $this->_manager->getRepository('AppBundle:Metadata')->findOneBy(['route' => $routeName]);

        return $metadata;
    }

    private function getRouteName()
    {
        $masterRequest = $this->_requestStack->getMasterRequest();

        return ( $masterRequest )
            ? $masterRequest->attributes->get('_route')
            : NULL
        ;
    }

    public function provideMetadata()
    {
        $routeName = $this->getRouteName();

        $metadata = ( $routeName )
            ? $this->getMetadata($routeName)
            : NULL
        ;

        return $metadata;
    }
}
