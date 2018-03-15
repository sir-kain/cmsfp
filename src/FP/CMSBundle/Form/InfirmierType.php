<?php

namespace FP\CMSBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfirmierType extends AbstractType
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

            ->add('soustypeconsultation', EntityType::class, array(
                'class' => 'FPCMSBundle:Soustypeconsultation',
//                'choice_label' => 'soustype',
                'query_builder' => function(EntityRepository $repository) use ($user_id) {
                    $qb = $repository->createQueryBuilder('s');
                    // the function returns a QueryBuilder object
                    return $qb
//                        ->leftJoin('s.typeconsultation', 't')
                        ->leftJoin('s.typeconsultation', 't')
                        ->where('t.id = :typeconsult')
                        ->setParameter('typeconsult', $user_id)
                        // find all users where 'deleted' is NOT '1'
//                        ->where($qb->expr()->neq('u.deleted', '?1'))
//                        ->setParameter('1', '1')
//                        ->orderBy('u.username', 'ASC')
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
