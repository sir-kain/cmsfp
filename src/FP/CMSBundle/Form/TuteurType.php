<?php

namespace FP\CMSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TuteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomTuteur')
            ->add('prenomTuteur')
            ->add('telTuteur')
            ->add('adresseTuteur')
            ->add('lienparental', ChoiceType::class, array('choices' => array('Choisir lien de parenté' => null, 'Parent' => 'Parent', 'Conjoint(e)' => 'Conjoint(e)', 'Enfant' => 'Enfant', 'Ami(e)' => 'Ami(e)', 'Autre' => 'Autre')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Tuteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_tuteur';
    }


}
