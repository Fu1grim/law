<?php
// src/AppBundle/Admin/ContentMainAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class ContentMainAdmin extends Admin
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

        $listMapper->addIdentifier('mainTitle', NULL, [
            'label' => "Назва"
        ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('mainTitle', 'text', [
                'label' => "Заголовок"
            ])
            ->add('subTitle', 'text', [
                'label' => "Підзаголовок"
            ])
            ->add('textMain', 'textarea', [
                'label' => "Текст",
                'attr' => ['rows' => '5'],
            ])
        ;
    }
}
