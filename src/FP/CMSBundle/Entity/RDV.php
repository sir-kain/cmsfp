<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * RDV
 *
 * @ORM\Table(name="r_d_v")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\RDVRepository")
 */
class RDV
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
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="dateRDV", type="datetime")
     */
    private $dateRDV;


    /**
     * @var CMSBundle\Entity\patient
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Patient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @var CMSBundle\Entity\utilisateur
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateRDV
     *
     * @param \DateTime $dateRDV
     *
     * @return RDV
     */
    public function setDateRDV($dateRDV)
    {
        $this->dateRDV = $dateRDV;

        return $this;
    }

    /**
     * Get dateRDV
     *
     * @return \DateTime
     */
    public function getDateRDV()
    {
        return $this->dateRDV;
    }


    /**
     * Set patient
     *
     * @param \FP\CMSBundle\Entity\Patient $patient
     *
     * @return RDV
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
     * Set utilisateur
     *
     * @param \FP\CMSBundle\Entity\Utilisateur $utilisateur
     *
     * @return RDV
     */
    public function setUtilisateur(\FP\CMSBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \FP\CMSBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
