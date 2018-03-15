<?php

namespace CMSFP\TagBundle\Form\DataTransformer;

use CMSFP\TagBundle\Entity\Pathologies;
use CMSFP\TagBundle\Entity\Pathologiesh;
use Doctrine\Common\Persistence\ObjectManager;
use CMSFP\TagBundle\Entity\TypeExamen;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class PathoTransformer implements DataTransformerInterface
{

    /**
     * @var ObjectManager
     */
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function transform($value)
    {
        return implode(',', $value);
    }

    public function reverseTransform($string)
    {
        $names = array_unique(array_filter(array_map('trim', explode(',', $string))));
        $tags = $this->manager->getRepository('TagBundle:Pathologiesh')->findBy([
            'nom' => $names
        ]);
        $newNames = array_diff($names, $tags);
        foreach ($newNames as $name) {
            $tag = new Pathologiesh();
            $tag->setNom($name);
            $tags[] = $tag;
        }
        return $tags;
    }
}
