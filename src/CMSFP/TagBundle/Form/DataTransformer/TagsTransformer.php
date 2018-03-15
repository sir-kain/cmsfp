<?php

namespace CMSFP\TagBundle\Form\DataTransformer;

use CMSFP\TagBundle\Entity\Pathologies;
use Doctrine\Common\Persistence\ObjectManager;
use CMSFP\TagBundle\Entity\TypeExamen;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagsTransformer implements DataTransformerInterface
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
        $tags = $this->manager->getRepository('TagBundle:Pathologies')->findBy([
            'nom' => $names
        ]);
        $newNames = array_diff($names, $tags);
        foreach ($newNames as $name) {
            $tag = new Pathologies();
            $tag->setNom($name);
            $tags[] = $tag;
        }
        return $tags;
    }
}
