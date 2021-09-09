<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Ton email Arthur',
                'attr' => [
                    'placeholder' =>"ici"
                ]
            ])
            ->add('password', RepeatedType::class,[
                'type' => PasswordType::class,
                'constraints'=> new Length([
                'min' => 8,
                'max' => 17]),
                'invalid_message'=> 'Le message et la confirmation doivent etre identiques',
                'required'=> true,
                'first_options'=>['label'=>'Mot de passe(minimum 8 caracteres)'],
                'second_options'=>['label'=>'Confirmez le mot de passe'],
                'attr' => [
                    'placeholder' => 'Mot de passe'
                ]
            ])
          
            ->add('submit', SubmitType::class,[
                'label' =>"S'inscrire"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
