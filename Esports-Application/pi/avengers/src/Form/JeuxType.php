<?php

namespace App\Form;

use App\Entity\CategorieC;
use App\Entity\Jeux;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;


class JeuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
//            ->add('image',FileType::class,array(
//                'data_class'=>null,
//                'label'=>'Upload Image',
//                'empty_data' => '')
//            )
            ->add('imageFile',FileType::class,['required'=>false,'label'=>false,'empty_data' => ''])


            ->add('categorie',EntityType::class, [
                'class'=>CategorieC::class,
                'choice_label'=>'nom'
            ])
            ->add('dates')
            ->add('dates', DateType::class,[
                'input' => 'string',
                'widget' => 'single_text',
            ])
            ->add('submit',SubmitType::class)
            ->add('cancel',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jeux::class,
        ]);
    }
}
