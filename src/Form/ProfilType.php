<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, ['label' => 'Pseudo'])
            ->add('prenom', TextType::class, ['label' => 'Prenom'])
            ->add('nom', TextType::class, ['label' => 'Nom'])
            ->add('telephone', TextType::class, ['label' => 'Téléphone'])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('password', RepeatedType::class, ['type'=>PasswordType::class,
                'invalid_message' => 'les mots de passes ne correspondent pas',
                'required'=>true,
                'first_options'=>array('label'=>'Mot de passe'),
                'second_options'=>array('label'=>'Répéter Mot de passe')])
            ->add('administrateur', ChoiceType::class, ['choices'=> ['Oui'=>true, 'Non'=>false]])
            ->add('actif', ChoiceType::class, ['choices'=> ['Oui'=>true, 'Non'=>false]])
            ->add('campus', EntityType::class, ['class' => 'App\Entity\Campus', 'choice_label'=> 'nomCampus','label' => 'Campus :', 'required'=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Utilisateur::class
        ]);
    }
}
