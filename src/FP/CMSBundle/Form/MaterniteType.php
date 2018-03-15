<?php

namespace FP\CMSBundle\Form;

use CMSFP\TagBundle\Entity\Pathologiesh;
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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterniteType extends AbstractType
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
            ->add('dernieresregles', DateType::class, array(
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
            ->add('perimetreabdominal', TextType::class, [
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
            ->add('cpn', ChoiceType::class, array(
                'choices' => array('CPN 1' => 'CPN 1', 'CPN 2' => 'CPN 2', 'CPN 3' => 'CPN 3', 'CPN 4' => 'CPN 4', 'Autres' => 'Autres'),
                'required' => true,
                'placeholder'   =>  'Choisissez le CPN'
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
