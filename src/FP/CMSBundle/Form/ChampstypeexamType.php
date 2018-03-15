<?php

namespace FP\CMSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChampstypeexamType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('libelle')
            ->add('unite')
            ->add('valeurmin', null, [
                'label' => 'Valeur minimale'
            ])
            ->add('valeurmax', null, [
                'label' => 'Valeur maximale'
            ])
            ->add('valeurminf', null, [
                'label' => 'Valeur minimale pour femme'
            ])
            ->add('valeurmaxf', null, [
                'label' => 'Valeur maximale pour femme'
            ])
//            ->add('typeexamen', null, [
//                'label' => 'Type de l\'examen'
//            ])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Champstypeexam'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_champstypeexam';
    }


}
