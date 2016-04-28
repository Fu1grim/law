<?php
// src/AppBundle/Admin/MetadataAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class MetadataAdmin extends Admin
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
            ->addIdentifier('route', NULL, [
                'label' => "Роут"
            ])
            ->add('title', NULL, [
                'label' => "Назва"
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('route', 'text', [
                'disabled' => TRUE,
                'label' => "Роут"
            ])
            ->add('title', 'text', [
                'label' => "Назва"
            ])
            ->add('description', 'text', [
                'label' => "Опис"
            ])
            ->add('robots', 'text', [
                'label' => "Робот"
            ])
        ;
    }
}
