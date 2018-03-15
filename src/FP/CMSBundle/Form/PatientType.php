<?php

namespace FP\CMSBundle\Form;

use FP\CMSBundle\Entity\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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

class PatientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type_patient', EntityType::class, array(
                'class' => 'FPCMSBundle:TypePatient',
                'choice_label' => 'type',
            ))
            ->add('structure', EntityType::class, array(
                'class' => 'FPCMSBundle:Ministere',
                'choice_label' => 'nom',
                'placeholder'   => 'Choisissez le ministère',
                'required'  =>  false
            ))
            ->add('statut', ChoiceType::class, array('choices' => array('Lui-même' => 'Lui-même', 'Conjoint(e)' => 'Conjoint(e)', 'Enfant' => 'Enfant')))
        ->add('matricule', TextType::class)
        ->add('terrainparticulier', TextType::class, [
            'required'  =>  false
        ])
        ->add('nomPatient', TextType::class)
        ->add('prenomPatient', TextType::class)
        ->add('genrePatient', ChoiceType::class, array('choices' => array('Masculin' => 'Masculin', 'Féminin' => 'Féminin')))
        ->add('telPatient', TextType::class, [
            'required'  =>  false
        ])
        ->add('situationFamiliale', ChoiceType::class, array('choices' => array('Célibataire' => 'Celibataire', 'Marié(e)' => 'Marie', 'Divorcé(e)' => 'Divorce', 'Veuf(ve)' => 'Veuf')))
        ->add('adressePatient', TextareaType::class, [
            'required'  => false
        ])
        ->add('email', EmailType::class)
        ->add('groupeSanguin', ChoiceType::class, array(
            'choices' => array('Choisissez le groupe sanguin' => null,'A+' => 'A+', 'B+' => 'B+', 'AB+' => 'AB+', 'O+' => 'O+', 'A-' => 'A-', 'B-' => 'B-', 'AB-' => 'AB-', 'O-' => 'O-'),
            'required' => false
        ))
        ->add('dateNaiss', DateType::class, array('label' => 'Date de naissance',
            'widget' => 'single_text',
            'html5' => true,
            'required' => false,
            'attr' => [
                'class' => 'datepicker',
            ],))
            ->add('tuteur', TuteurType::class, [
                'required' => false,
            ])
            ->add('file', FileType::class, [
                'required' => false,
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Patient'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_patient';
    }


}
