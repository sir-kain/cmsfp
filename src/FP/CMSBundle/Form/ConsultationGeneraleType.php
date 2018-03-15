<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Form\Type\PathologieshType;
use CMSFP\TagBundle\Form\Type\PathologiesType;
use CMSFP\TagBundle\Form\Type\TypeExamenType;
use Doctrine\ORM\EntityRepository;
use FP\CMSBundle\Repository\SoustypeconsultationRepository;
use FP\CMSBundle\Repository\UserRepository;
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

class ConsultationGeneraleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user_id = $options['user_id'];
        $builder
            ->add('perimetreabdominal', TextType::class, [
                'required' => false,
            ])
            ->add('observation', TextareaType::class, [
                'required' => false
            ])
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
            ->add('motif', TextType::class, [
                'required' => false,
            ])
            ->add('systole', TextType::class, [
                'required' => false,
            ])
            ->add('diastole', TextType::class, [
                'required' => false,
            ])
            ->add('temperature', TextType::class, [
                'required' => false,
            ])
            ->add('taille', TextType::class, [
                'required' => false,
            ])
            ->add('pathologies', PathologiesType::class)
            ->add('pathologiesh', PathologieshType::class)
            ->add('typeexamen', TypeExamenType::class)
            ->add('frequence_cardiaque', TextType::class, [
                'required' => false,
            ])
//            ->add('type_consultation', EntityType::class, array(
//                'class' => 'FPCMSBundle:Type_consultation',
//                'choice_label' => 'nomTypeConsultation',
//            ))
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

    public function getsoustype() {
        $nbconsultationsbymedecin = $this->_em->createQueryBuilder()
            ->select('s')
            ->from('FPCMSBundle:Soustypeconsultation', 's')
            ->leftJoin('s.typeconsultation', 't')
            ->where('t.id = :typeconsult')
            ->setParameter('typeconsult', 1)
            ->getQuery()
            ->getResult();
        return $nbconsultationsbymedecin;
    }


}
