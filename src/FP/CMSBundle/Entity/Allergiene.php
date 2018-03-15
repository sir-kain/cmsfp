<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allergiene
 *
 * @ORM\Table(name="allergiene")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\AllergieneRepository")
 */
class Allergiene
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_allergiene", type="string", length=400)
     */
    private $typeAllergiene;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeAllergiene
     *
     * @param string $typeAllergiene
     *
     * @return Allergiene
     */
    public function setTypeAllergiene($typeAllergiene)
    {
        $this->typeAllergiene = $typeAllergiene;

        return $this;
    }

    /**
     * Get typeAllergiene
     *
     * @return string
     */
    public function getTypeAllergiene()
    {
        return $this->typeAllergiene;
    }
}
