<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePatient
 *
 * @ORM\Table(name="type_patient")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\TypePatientRepository")
 */
class TypePatient
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
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     *
     * @return TypePatient
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
