<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Entity\TypeExamen;
use FP\CMSBundle\Form\PatientType;
use CMSFP\TagBundle\Form\Type\TypeExamenType;
use CMSFP\TagBundle\Form\Type\TypeexamType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamenNewType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeexamen', EntityType::class, [
                'class' =>  'TagBundle:TypeExamen',
                'placeholder'   =>  'choisissez le type d\'examen'
            ])
//            ->add('resultat')
            ->add('prix')
        ;

    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Examen'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_examen';
    }


}
