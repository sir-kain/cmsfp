<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Form\Type\PathologieshType;
use CMSFP\TagBundle\Form\Type\PathologiesType;
use CMSFP\TagBundle\Form\Type\TypeExamenType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DentisteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user_id = $options['user_id'];
        $builder
            ->add('observation', TextareaType::class, [
                'required' => false
            ])

            ->add('motif', TextType::class, [
                'required' => false,
            ])

            ->add('r_d_v', RDVType::class, [
                'required' => false,
            ])
            ->add('notederefernce', TextareaType::class, [
                'required' => false,
                'label' =>  'Réferer pour une consultation spécialisée'
            ])
            ->add('traitement', TextareaType::class, [
                'required' => false,
            ])

            ->add('pathologies', PathologiesType::class)
            ->add('pathologiesh', PathologieshType::class)
            ->add('typeexamen', TypeExamenType::class)

            ->add('soustypeconsultation', EntityType::class, array(
                'class' => 'FPCMSBundle:Soustypeconsultation',
//                'choice_label' => 'soustype',
                'query_builder' => function(EntityRepository $repository) use ($user_id) {
                    $qb = $repository->createQueryBuilder('s');
                    return $qb
                        ->leftJoin('s.typeconsultation', 't')
                        ->where('t.id = :typeconsult')
                        ->setParameter('typeconsult', $user_id)
                        ;
                },
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FP\CMSBundle\Entity\Consultation',
            'user_id' => null
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
