<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Form\Type\PathologiesType;
use CMSFP\TagBundle\Form\Type\TypeExamenType;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConsultationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observation', TextareaType::class, [
                'required' => false
            ])
            ->add('debutRP', DateType::class, array(
                'widget' => 'single_text',
                'html5' => true,
                'required' => false,
                'attr' => [
                    'class' => 'datepicker',
                ],))
            ->add('finRP', DateType::class, array(
                'widget' => 'single_text',
                'html5' => true,
                'required' => false,
                'attr' => [
                    'class' => 'datepicker',
                ],))
            ->add('r_d_v', RDVType::class, [
                'required' => false,
            ])
            ->add('notederefernce', TextareaType::class, [
                'required' => false
            ])
            ->add('traitement', TextareaType::class, [
                'required' => false,
            ])
            ->add('poids', TextType::class, [
                'required' => false,
            ])
            ->add('tension', TextType::class, [
                'required' => false,
            ])
            ->add('temperature', TextType::class, [
                'required' => false,
            ])
            ->add('taille', TextType::class, [
                'required' => false,
            ])
            ->add('pathologies', PathologiesType::class)
            ->add('typeexamen', TypeExamenType::class)
            ->add('frequence_cardiaque', TextType::class, [
                'required' => false,
            ])
            ->add('type_consultation', EntityType::class, array(
                'class' => 'FPCMSBundle:Type_consultation',
                'choice_label' => 'nomTypeConsultation',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Consultation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_consultation';
    }


}
