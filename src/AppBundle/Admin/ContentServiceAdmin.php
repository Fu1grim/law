<?php
// src/AppBundle/Admin/ContentServiceAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper,
    Sonata\AdminBundle\Route\RouteCollection;

class ContentServiceAdmin extends Admin
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
            ->add('subTitleSpecializations', 'text', [
                'label' => "Підзаголовок \"Спеціалізації\""
            ])
            ->add('subTitleService', 'text', [
                'label' => "Підзаголовок \"Сервіси\""
            ])
            ->add('textService', 'textarea', [
                'label' => "Текст",
                'attr' => ['rows' => '5'],
            ])
        ;
    }
}
