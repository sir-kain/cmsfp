<?php

namespace FP\CMSBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiagnosticType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('pathologie', CollectionType::class, array(
//                // each entry in the array will be an "email" field
//                'entry_type'   => PathologieType::class,
//                // these options are passed to each "email" type
//                'entry_options'  => array(
//                    'attr'      => array('class' => 'selectpicker')
//                )
//            )
//
//            );
            ->add('pathologie', EntityType::class, array(
                'class' => 'FPCMSBundle:Pathologie',
                'choice_label' => 'nomPathologie',
            ));
//            ->add('chronique', CheckboxType::class);
        $builder->get('pathologie')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event){
                dump($event->getForm()->getData());
            }
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Diagnostic'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_diagnostic';
    }


}
