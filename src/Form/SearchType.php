<?php

namespace App\Form;

use App\Classe\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('string', ChoiceType::class, [
            'label' => false,
            'required'=>false,
            'empty_data'=>'',
            'choices'  => [
                'Midgard' => 'midgard',
                'Girls' => 'girls',
                'Tutos' => 'tuto',
                'Strips'=>'strip',
            ]
            ])
        
         ->add('submit', SubmitType::class,[
             'label' =>'Filtrer'
         ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET'
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}