<?php
// src/AppBundle/Admin/ServiceItemAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper;

class ServiceItemAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $this->setListMode('list');

        $listMapper->addIdentifier('title');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', [
                'label' => "Назва"
            ])
        ;
    }
}
