<?php

namespace FP\CMSBundle\Form;

use FP\CMSBundle\Entity\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use FOS\UserBundle\Model\User;

class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username', TextType::class)
        ->add('email')
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('genre', ChoiceType::class, array('choices' => array('Feminin' => 'F', 'Masculin' => 'M')))

        ->add('service', EntityType::class, array(
             'class' => 'FPCMSBundle:Service',
             'choice_label' => 'nomService',
        ))
//        ->add('specialite', EntityType::class, array(
//            'class' => 'FPCMSBundle:Specialite',
//            'choice_label' => 'nomSpecialite',
//        ))
            ->add('type_user', EntityType::class, array(
                'class' => 'FPCMSBundle:TypeUser',
                'choice_label' => 'profil',
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_medecin';
    }


}
