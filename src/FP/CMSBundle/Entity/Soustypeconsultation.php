<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soustypeconsultation
 *
 * @ORM\Table(name="soustypeconsultation")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\SoustypeconsultationRepository")
 */
class Soustypeconsultation
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
     * @ORM\Column(name="soustype", type="string", length=100)
     */
    private $soustype;

    /**
     * @var CMSBundle\Entity\type_consultation
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Type_consultation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeconsultation;

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
     * Set soustype
     *
     * @param string $soustype
     *
     * @return Soustypeconsultation
     */
    public function setSoustype($soustype)
    {
        $this->soustype = $soustype;

        return $this;
    }

    /**
     * Get soustype
     *
     * @return string
     */
    public function getSoustype()
    {
        return $this->soustype;
    }

    /**
     * Set typeconsultation
     *
     * @param \FP\CMSBundle\Entity\Type_consultation $typeconsultation
     *
     * @return Soustypeconsultation
     */
    public function setTypeconsultation(\FP\CMSBundle\Entity\Type_consultation $typeconsultation = null)
    {
        $this->typeconsultation = $typeconsultation;

        return $this;
    }

    /**
     * Get typeconsultation
     *
     * @return \FP\CMSBundle\Entity\Type_consultation
     */
    public function getTypeconsultation()
    {
        return $this->typeconsultation;
    }

    public function __toString()
    {
        return $this->soustype;
    }
}
