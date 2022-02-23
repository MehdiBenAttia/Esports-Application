<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Reclamation;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomUser')
            ->add('email')
            ->add('Message')
            ->add('categorie',EntityType::class,['class'=>Categorie::class,'choice_label'=>'catrec'])
            ->add('submit',SubmitType::class)
            ->add('cancel',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
