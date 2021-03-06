<?php

namespace CMSFP\TagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * TypeExamen
 *
 * @ORM\Table(name="type_examen")
 * @ORM\Entity(repositoryClass="CMSFP\TagBundle\Repository\TypeExamenRepository")
 */
class TypeExamen
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
     * @ORM\Column(name="nomTypeExamen", type="string", length=100)
     */
    private $nomTypeExamen;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var CMSBundle\Entity\supertypeexamen
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Supertypeexamen")
     * @ORM\JoinColumn(nullable=true)
     */
    private $supertypeexamen;

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
     * Set nomTypeExamen
     *
     * @param string $nomTypeExamen
     *
     * @return TypeExamen
     */
    public function setNomTypeExamen($nomTypeExamen)
    {
        $this->nomTypeExamen = $nomTypeExamen;

        return $this;
    }

    /**
     * Get nomTypeExamen
     * @Groups({"type"})
     *
     * @return string
     */
    public function getNomTypeExamen()
    {
        return $this->nomTypeExamen;
    }

    public function __toString()
    {
        return $this->nomTypeExamen;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return TypeExamen
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set supertypeexamen
     *
     * @param \FP\CMSBundle\Entity\Supertypeexamen $supertypeexamen
     *
     * @return TypeExamen
     */
    public function setSupertypeexamen(\FP\CMSBundle\Entity\Supertypeexamen $supertypeexamen = null)
    {
        $this->supertypeexamen = $supertypeexamen;

        return $this;
    }

    /**
     * Get supertypeexamen
     *
     * @return \FP\CMSBundle\Entity\Supertypeexamen
     */
    public function getSupertypeexamen()
    {
        return $this->supertypeexamen;
    }
}
