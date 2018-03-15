<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\ExamenRepository")
 */
class Examen
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
     * @ORM\Column(name="resultat", type="text", nullable=false)
     */
    private $resultat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Consultation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $consultation;

    /**
     * @ORM\ManyToOne(targetEntity="CMSFP\TagBundle\Entity\TypeExamen")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeexamen;

    /**
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Champstypeexam")
     * @ORM\JoinColumn(nullable=false)
     */
    private $champstypeexam;

    /**
     * @var CMSBundle\Entity\patient
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Patient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $patient;

    /**
     * @return CMSBundle\Entity\patient
     */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="datetime")
     */
    private $dateAjout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateprelevement", type="datetime", nullable=true)
     */
    private $dateprelevement;

    /**
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \FP\CMSBundle\Entity\Patient $patient
     */
    public function setPatient(\FP\CMSBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;
    }

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
     * Set resultat
     *
     * @param string $resultat
     *
     * @return Examen
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set consultation
     *
     * @param \FP\CMSBundle\Entity\Consultation $consultation
     *
     * @return Examen
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

    /**
     * Set typeexamen
     *
     * @param \CMSFP\TagBundle\Entity\TypeExamen $typeexamen
     *
     * @return Examen
     */
    public function setTypeexamen(\CMSFP\TagBundle\Entity\TypeExamen $typeexamen)
    {
        $this->typeexamen = $typeexamen;

        return $this;
    }

    /**
     * Get typeexamen
     *
     * @return \CMSFP\TagBundle\Entity\TypeExamen
     */
    public function getTypeexamen()
    {
        return $this->typeexamen;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Examen
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set champstypeexam
     *
     * @param \FP\CMSBundle\Entity\Champstypeexam $champstypeexam
     *
     * @return Examen
     */
    public function setChampstypeexam(\FP\CMSBundle\Entity\Champstypeexam $champstypeexam)
    {
        $this->champstypeexam = $champstypeexam;

        return $this;
    }

    /**
     * Get champstypeexam
     *
     * @return \FP\CMSBundle\Entity\Champstypeexam
     */
    public function getChampstypeexam()
    {
        return $this->champstypeexam;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    /**
     * Set dateprelevement
     *
     * @param \DateTime $dateprelevement
     *
     * @return Examen
     */
    public function setDateprelevement($dateprelevement)
    {
        $this->dateprelevement = $dateprelevement;

        return $this;
    }

    /**
     * Get dateprelevement
     *
     * @return \DateTime
     */
    public function getDateprelevement()
    {
        return $this->dateprelevement;
    }


    /**
     * Set utilisateur
     *
     * @param \FP\CMSBundle\Entity\Utilisateur $utilisateur
     *
     * @return Examen
     */
    public function setUtilisateur(\FP\CMSBundle\Entity\Utilisateur $utilisateur = null)
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
