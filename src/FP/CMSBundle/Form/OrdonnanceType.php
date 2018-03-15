<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Form\Type\MedicamentsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OrdonnanceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//        ->add('medicament', EntityType::class, array(
//            'class' => 'FPCMSBundle:Medicament',
//            'placeholder' => 'Choisissez un medicament',
//            'choice_label' => 'nomMedicament',
//       ))
        ->add('medicament', MedicamentsType::class)
        ->add('quantite')
        ->add('indication', ChoiceType::class, array(
            'choices' => array('Posologie' => null, 'Matin' => 'Matin', 'Midi' => 'Midi', 'Soir' => 'Soir', 'Matin Soir' => 'Matin Soir', 'Matin Midi Soir' => 'Matin Midi Soir', 'Semaine' => 'Semaine'),
            'required' => true
        ))

        ->add('nombreunite');

        // ->add('medicament', CollectionType::class, array(
        //     'entry_type'   => MedicamentType::class,
        //     'entry_options' => array('label' => false),
        //     'allow_add' => true,
            
        // ))

        // ->add('quantite', CollectionType::class, array(
        //     'allow_add' => true,
        //     'allow_delete' => true
        // ))
        // ->add('indication', CollectionType::class, array(
        //     'allow_add' => true,
        //     'allow_delete' => true
        // ));
        // ->add('consultation')
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Ordonnance'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fp_cmsbundle_ordonnance';
    }


}
