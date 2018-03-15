<?php

namespace CMSFP\TagBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use FP\CMSBundle\Entity\Medicament;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class MedicamentsTransformer implements DataTransformerInterface
{

    /**
     * @var ObjectManager
     */
    private $manager;

    /**
     * MedicamentsTransformer constructor.
     * @param ObjectManager $manager
     */
    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function transform($value)
    {
//        return implode(',', $value);
        return '';
    }

    public function reverseTransform($string)
    {
//        $names = array_unique(array_filter(array_map('trim', explode(',', $string))));
//        $tags = $this->manager->getRepository('FPCMSBundle:Medicament')->findBy([
//            'nomMedicament' => $names
//        ]);
//        $newNames = array_diff($names, $tags);
//        foreach ($newNames as $name) {
//            $tag = new Medicament();
//            $tag->setNomMedicament($name);
//            $tags[] = $tag;
//        }
//        return $tags;

        $medicament = $string;
        $tags = $this->manager->getRepository('FPCMSBundle:Medicament')->findOneBy([
            'nomMedicament' => $medicament
        ]);
    }
}
