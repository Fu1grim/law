<?php
// src/AppBundle/Form/Type/FeedbackType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilderInterface,
    Symfony\Component\OptionsResolver\OptionsResolver,
    Symfony\Component\Form\Extension\Core\Type\TextType,
    Symfony\Component\Form\Extension\Core\Type\EmailType,
    Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("name", TextType::class, [
                'label' => "comment.name.label",
                'attr'  => [
                    'placeholder' => "comment.name.placeholder"
                ]
            ])
            ->add("email", EmailType::class, [
                'label' => "comment.email.label",
                'attr'  => [
                    'placeholder' => "comment.email.placeholder"
                ]
            ])
            ->add("phone", TextType::class, [
                'label' => "comment.phone.label",
                'attr'  => [
                    'placeholder' => "comment.phone.placeholder"
                ]
            ])
            ->add("message", TextareaType::class, [
                'label' => "comment.message.label",
                'attr'  => [
                    'placeholder' => "comment.message.placeholder"
                ]
            ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class"         => "AppBundle\Model\Feedback",
            "csrf_protection"    => true,
            "csrf_field_name"    => "_token",
            "translation_domain" => "forms",
            "intention"          => "feedback_item",
        ]);
    }
}
