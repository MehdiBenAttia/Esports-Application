<?php

namespace App\Form;

use App\Entity\Typerec;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TyperecType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('catrec')
//            ->add('date')
            ->add('descrip')
            ->add('level', ChoiceType::class, [
                'choices'  => [
                    'high' => 'high',
                    'medium' => 'medium',
                    'low' => 'low',
                ],
            ])
            ->add('submit',SubmitType::class)
            ->add('cancel',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Typerec::class,
        ]);
    }
}
