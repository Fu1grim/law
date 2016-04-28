<?php
// src/AppBundle/Admin/ContactAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class ContactAdmin extends Admin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('delete')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $this->setListMode('list');

        $listMapper
            ->addIdentifier('email', NULL, [
                'label' => "E-mail"
            ])
            ->add('phone', 'text', [
                'label' => "Телефон"
            ])
            ->add('link', 'text', [
                'label' => "Свідоцтво"
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email', 'text', [
                'label' => "E-mail"
            ])
            ->add('phone', 'text', [
                'label' => "Телефон"
            ])
            ->add('link', 'text', [
                'label' => "Свідоцтво"
            ])
        ;
    }
}
