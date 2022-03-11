<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Reclamation;
use App\Entity\Typerec;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        //    ->add('NomUser', TextType::class, [
              //  'required' => true
         //   ])
         //   ->add('email', EmailType::class)
            ->add('Message', TextType::class)
            ->add('categorie', EntityType::class, ['class' => Typerec::class, 'choice_label' => 'catrec',
                'placeholder' => 'Choisir une option'])

            ->add('submit', SubmitType::class)
            ->add('cancel', ResetType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
