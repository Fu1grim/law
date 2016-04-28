<?php
// src/AppBundle/Admin/NumberAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class NumberAdmin extends Admin
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
            ->addIdentifier('title', NULL, [
                'label' => "Назва"
            ])
            ->add('number', 'number', [
                'label' => "Кількість"
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('number', 'text', [
                'label' => "Кількість"
            ])
            ->add('title', 'text', [
                'label' => "Назва"
            ])
        ;
    }
}
