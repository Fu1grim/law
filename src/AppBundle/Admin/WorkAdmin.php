<?php
// src/AppBundle/Admin/WorkAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin,
    Sonata\AdminBundle\Datagrid\ListMapper,
    Sonata\AdminBundle\Datagrid\DatagridMapper,
    Sonata\AdminBundle\Form\FormMapper;

use Vich\UploaderBundle\Form\Type\VichFileType;

class WorkAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $this->setListMode('list');

        $listMapper
            ->add('id', 'number', [
                'label' => "ID"
            ])
            ->addIdentifier('title', NULL, [
                'label' => "Назва"
            ])
            ->add('created', NULL, [
                'label' => "Створено"
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        if( $work = $this->getSubject() )
        {
            $imageRequired = ( $work->getImageName() ) ? FALSE : TRUE;

            $imageHelpOption = ( $imagePath = $work->getImagePath() )
                ? '<img src="'.$imagePath.'" style="width: 500px;">'
                : FALSE;
        } else {
            $imageRequired   = TRUE;
            $imageHelpOption = FALSE;
        }

        $formMapper
            ->add('title', 'text', [
                'label' => "Назва"
            ])
            ->add("specialization", NULL, [
                "label" => "Категорія",
                "required" => TRUE,
                "placeholder" => "Spec!",
                "class" => 'AppBundle\Entity\Specialization',
                "query_builder" => function($er) {
                    $qb = $er->createQueryBuilder('p');
                    return $qb;
                 }
            ], [
                'edit' => 'standard'
            ])
            ->add('imageFile', VichFileType::class, [
                'label'         => "Зображення",
                'required'      => $imageRequired,
                'allow_delete'  => FALSE,
                'download_link' => FALSE,
                'help'          => $imageHelpOption
            ])
            ->add('description', 'textarea', [
                'label' => "Опис"
            ])
            ->add('pointText', 'text', [
                'label' => "Суть"
            ])
            ->add('resolveText', 'text', [
                'label' => "Розв’язання"
            ])
            ->add('resultText', 'text', [
                'label' => "Висновок"
            ])
            ->add('created', 'date', [
                'label'  => "Створено",
                'format' => 'yMd'
            ])
        ;
    }
}
