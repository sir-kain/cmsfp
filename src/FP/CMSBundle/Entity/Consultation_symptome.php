<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation_symptome
 *
 * @ORM\Table(name="consultation_symptome")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\Consultation_symptomeRepository")
 */
class Consultation_symptome
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
     * @var CMSBundle\Entity\ordonnance
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Ordonnance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordonnance;

        /**
     * @var CMSBundle\Entity\symptome
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Symptome")
     * @ORM\JoinColumn(nullable=false)
     */
    private $symptome;


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
     * Set ordonnance
     *
     * @param \FP\CMSBundle\Entity\Ordonnance $ordonnance
     *
     * @return Consultation_symptome
     */
    public function setOrdonnance(\FP\CMSBundle\Entity\Ordonnance $ordonnance)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \FP\CMSBundle\Entity\Ordonnance
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set symptome
     *
     * @param \FP\CMSBundle\Entity\Symptome $symptome
     *
     * @return Consultation_symptome
     */
    public function setSymptome(\FP\CMSBundle\Entity\Symptome $symptome)
    {
        $this->symptome = $symptome;

        return $this;
    }

    /**
     * Get symptome
     *
     * @return \FP\CMSBundle\Entity\Symptome
     */
    public function getSymptome()
    {
        return $this->symptome;
    }
}
