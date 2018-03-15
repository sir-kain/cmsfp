<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\LaboratoireRepository")
 */
class Laboratoire
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
     * @ORM\Column(name="nom_laboratoire", type="string", length=100)
     */
    private $nomLaboratoire;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_laboratoire", type="string", length=15)
     */
    private $telLaboratoire;

    /**
     * @var CMSBundle\Entity\service
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

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
     * Set nomLaboratoire
     *
     * @param string $nomLaboratoire
     *
     * @return Laboratoire
     */
    public function setNomLaboratoire($nomLaboratoire)
    {
        $this->nomLaboratoire = $nomLaboratoire;

        return $this;
    }

    /**
     * Get nomLaboratoire
     *
     * @return string
     */
    public function getNomLaboratoire()
    {
        return $this->nomLaboratoire;
    }

    /**
     * Set telLaboratoire
     *
     * @param string $telLaboratoire
     *
     * @return Laboratoire
     */
    public function setTelLaboratoire($telLaboratoire)
    {
        $this->telLaboratoire = $telLaboratoire;

        return $this;
    }

    /**
     * Get telLaboratoire
     *
     * @return string
     */
    public function getTelLaboratoire()
    {
        return $this->telLaboratoire;
    }

    /**
     * Set service
     *
     * @param \FP\CMSBundle\Entity\Service $service
     *
     * @return Laboratoire
     */
    public function setService(\FP\CMSBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \FP\CMSBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
