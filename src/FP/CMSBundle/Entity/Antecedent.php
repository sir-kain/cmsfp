<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedent
 *
 * @ORM\Table(name="antecedent")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\AntecedentRepository")
 */
class Antecedent
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
     * @ORM\Column(name="medicaux", type="text", nullable=true)
     */
    private $medicaux;
    /**
     * @var string
     *
     * @ORM\Column(name="churirgicaux", type="text", nullable=true)
     */
    private $churirgicaux;

    /**
     * @var CMSBundle\Entity\patient
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Patient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

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
     * Set churirgicaux
     *
     * @param string $churirgicaux
     *
     * @return Antecedent
     */
    public function setChurirgicaux($churirgicaux)
    {
        $this->churirgicaux = $churirgicaux;

        return $this;
    }

    /**
     * Get churirgicaux
     *
     * @return string
     */
    public function getChurirgicaux()
    {
        return $this->churirgicaux;
    }

    /**
     * Set patient
     *
     * @param \FP\CMSBundle\Entity\Patient $patient
     *
     * @return Antecedent
     */
    public function setPatient(\FP\CMSBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \FP\CMSBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set medicaux
     *
     * @param string $medicaux
     *
     * @return Antecedent
     */
    public function setMedicaux($medicaux)
    {
        $this->medicaux = $medicaux;

        return $this;
    }

    /**
     * Get medicaux
     *
     * @return string
     */
    public function getMedicaux()
    {
        return $this->medicaux;
    }
}
