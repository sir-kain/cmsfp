<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_consultation
 *
 * @ORM\Table(name="type_consultation")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\Type_consultationRepository")
 */
class Type_consultation
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
     * @ORM\Column(name="nom_type_consultation", type="text")
     */
    private $nomTypeConsultation;


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
     * Set nomTypeConsultation
     *
     * @param string $nomTypeConsultation
     *
     * @return Type_consultation
     */
    public function setNomTypeConsultation($nomTypeConsultation)
    {
        $this->nomTypeConsultation = $nomTypeConsultation;

        return $this;
    }

    /**
     * Get nomTypeConsultation
     *
     * @return string
     */
    public function getNomTypeConsultation()
    {
        return $this->nomTypeConsultation;
    }
}
