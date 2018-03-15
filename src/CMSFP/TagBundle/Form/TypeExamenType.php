<?php

namespace CMSFP\TagBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeExamenType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('supertypeexamen', EntityType::class, [
                'class' => 'FPCMSBundle:Supertypeexamen',
                'choice_label' => 'nom',
                'label' =>  'Nom du type d\'examen'
            ])
            ->add('nomTypeExamen', null, [
                'label' =>  'Examen'
            ])
            ->add('prix')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CMSFP\TagBundle\Entity\TypeExamen'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cmsfp_tagbundle_typeexamen';
    }


}
