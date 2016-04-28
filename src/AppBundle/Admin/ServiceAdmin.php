<?php
// src/AppBundle/Admin/ServiceAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class ServiceAdmin extends Admin
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
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', [
                'label' => "Назва"
            ])
            ->add('serviceItems', "sonata_type_collection", [
                'by_reference' => FALSE,
                "label" => FALSE,
                "btn_add" => "Додати пункт списку"
            ], [
                'edit' => 'inline',
                'inline' => 'table'
            ])
        ;
    }
}
