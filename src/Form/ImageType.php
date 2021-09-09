<?php

namespace App\Form;

use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('url',FileType::class, [
            'label' => 'Votre image',
            'constraints' => [
                new Assert\File([
                    'maxSize' => '4048k',
                    // 'mimeTypes' => [
                    //     'application/png',
                    //     'application/jpg',
                    //     'application/jpeg',
                    // ],
                    // 'mimeTypesMessage' => 'Please upload a valid img document',
                ])
            ],
        ])
            ->add('category',TextType::class)
            ->add('submit', SubmitType::class,[
                'label' =>"Envoyer"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
        ]);
    }
}
