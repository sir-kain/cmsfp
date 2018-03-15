<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variables
 *
 * @ORM\Table(name="variables")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\VariablesRepository")
 */
class Variables
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
     * @var int
     *
     * @ORM\Column(name="poids_variable", type="integer")
     */
    private $poidsVariable;

    /**
     * @var int
     *
     * @ORM\Column(name="tension_variable", type="integer")
     */
    private $tensionVariable;

    /**
     * @var int
     *
     * @ORM\Column(name="temperature_variable", type="integer")
     */
    private $temperatureVariable;

    /**
     * @var int
     *
     * @ORM\Column(name="taille_variable", type="integer")
     */
    private $tailleVariable;

    /**
     * @var CMSBundle\Entity\consultation
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Consultation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $consultation;

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
     * Set poidsVariable
     *
     * @param integer $poidsVariable
     *
     * @return Variables
     */
    public function setPoidsVariable($poidsVariable)
    {
        $this->poidsVariable = $poidsVariable;

        return $this;
    }

    /**
     * Get poidsVariable
     *
     * @return int
     */
    public function getPoidsVariable()
    {
        return $this->poidsVariable;
    }

    /**
     * Set tensionVariable
     *
     * @param integer $tensionVariable
     *
     * @return Variables
     */
    public function setTensionVariable($tensionVariable)
    {
        $this->tensionVariable = $tensionVariable;

        return $this;
    }

    /**
     * Get tensionVariable
     *
     * @return int
     */
    public function getTensionVariable()
    {
        return $this->tensionVariable;
    }

    /**
     * Set temperatureVariable
     *
     * @param integer $temperatureVariable
     *
     * @return Variables
     */
    public function setTemperatureVariable($temperatureVariable)
    {
        $this->temperatureVariable = $temperatureVariable;

        return $this;
    }

    /**
     * Get temperatureVariable
     *
     * @return int
     */
    public function getTemperatureVariable()
    {
        return $this->temperatureVariable;
    }

    /**
     * Set tailleVariable
     *
     * @param integer $tailleVariable
     *
     * @return Variables
     */
    public function setTailleVariable($tailleVariable)
    {
        $this->tailleVariable = $tailleVariable;

        return $this;
    }

    /**
     * Get tailleVariable
     *
     * @return int
     */
    public function getTailleVariable()
    {
        return $this->tailleVariable;
    }

    /**
     * Set consultation
     *
     * @param \FP\CMSBundle\Entity\Consultation $consultation
     *
     * @return Variables
     */
    public function setConsultation(\FP\CMSBundle\Entity\Consultation $consultation)
    {
        $this->consultation = $consultation;

        return $this;
    }

    /**
     * Get consultation
     *
     * @return \FP\CMSBundle\Entity\Consultation
     */
    public function getConsultation()
    {
        return $this->consultation;
    }
}
