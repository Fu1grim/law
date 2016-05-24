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
            ->add('code', 'text', [
                'label' => "Номер Справи"
            ])
            ->add("specialization", NULL, [
                "label" => "Спеціалізація",
                "required" => TRUE,
                "placeholder" => "Оберіть спеціалізацію",
                "class" => 'AppBundle\Entity\Specialization',
                "query_builder" => function($er) {
                    $qb = $er->createQueryBuilder('p');
                    return $qb;
                 }
            ], [
                'edit' => 'standard'
            ])
            ->add("service", NULL, [
                "label" => "Послуги",
                "required" => TRUE,
                "placeholder" => "Оберіть послугу",
                "class" => 'AppBundle\Entity\Service',
                "query_builder" => function($er) {
                    $qb = $er->createQueryBuilder('p');
                    return $qb;
                 }
            ], [
                'edit' => 'standard'
            ])
            ->add('imageFile', VichFileType::class, [
                'label'         => "Зображення (1920х1080)",
                'required'      => $imageRequired,
                'allow_delete'  => FALSE,
                'download_link' => FALSE,
                'help'          => $imageHelpOption
            ])
            ->add('description', 'textarea', [
                'label' => "Опис",
                'attr' => ['rows' => '5'],
            ])
            ->add('pointText', 'textarea', [
                'label' => "Суть",
                'attr' => ['rows' => '10'],
            ])
            ->add('resolveText', 'textarea', [
                'label' => "Розв’язання",
                'attr' => ['rows' => '10'],
            ])
            ->add('resultText', 'textarea', [
                'label' => "Висновок",
                'attr' => ['rows' => '10'],
            ])
            ->add('created', 'sonata_type_date_picker', [
                'label'  => "Створено"
            ])
        ;
    }
}
