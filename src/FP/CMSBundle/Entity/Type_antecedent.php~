<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_antecedent
 *
 * @ORM\Table(name="type_antecedent")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\Type_antecedentRepository")
 */
class Type_antecedent
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
     * @ORM\Column(name="nomtype", type="string", length=100)
     */
    private $nomtype;


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
     * Set nomtype
     *
     * @param string $nomtype
     *
     * @return Type_antecedent
     */
    public function setNomtype($nomtype)
    {
        $this->nomtype = $nomtype;

        return $this;
    }

    /**
     * Get nomtype
     *
     * @return string
     */
    public function getNomtype()
    {
        return $this->nomtype;
    }
}
