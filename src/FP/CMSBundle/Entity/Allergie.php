<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allergie
 *
 * @ORM\Table(name="allergie")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\AllergieRepository")
 */
class Allergie
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
     * @ORM\Column(name="nom_allergie", type="string", length=400)
     */
    private $nomAllergie;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="text")
     */
    private $cause;

    /**
     * @var CMSBundle\Entity\allergiene
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Allergiene")
     * @ORM\JoinColumn(nullable=false)
     */
    private $allergene;

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
     * Set nomAllergie
     *
     * @param string $nomAllergie
     *
     * @return Allergie
     */
    public function setNomAllergie($nomAllergie)
    {
        $this->nomAllergie = $nomAllergie;

        return $this;
    }

    /**
     * Get nomAllergie
     *
     * @return string
     */
    public function getNomAllergie()
    {
        return $this->nomAllergie;
    }

    /**
     * Set cause
     *
     * @param string $cause
     *
     * @return Allergie
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Set allergene
     *
     * @param \FP\CMSBundle\Entity\Allergiene $allergene
     *
     * @return Allergie
     */
    public function setAllergene(\FP\CMSBundle\Entity\Allergiene $allergene)
    {
        $this->allergene = $allergene;

        return $this;
    }

    /**
     * Get allergene
     *
     * @return \FP\CMSBundle\Entity\Allergiene
     */
    public function getAllergene()
    {
        return $this->allergene;
    }
}
