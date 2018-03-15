<?php

namespace FP\CMSBundle\Entity;

use CMSFP\TagBundle\Concern\Taggable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\ConsultationRepository")
 */
class Consultation
{
    use Taggable;
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
     * @Assert\NotBlank()
     * @ORM\Column(name="observation", type="text", nullable=false)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="cpn", type="string", length=20, nullable=true)
     */
    private $cpn;

    /**
     * @var \Date
     * @Assert\Date()
     *
     * @ORM\Column(name="dernieresregles", type="date", nullable=true)
     */
    private $dernieresregles;

    /**
     * @var \Date
     * @Assert\Date()
     *
     * @ORM\Column(name="debutRP", type="date", nullable=true)
     */
    private $debutRP;


    /**
     * @var \Date
     *@Assert\Date()
     *
     * @ORM\Column(name="finRP", type="date", nullable=true)
     */
    private $finRP;

    /**
     * @var string
     *
     * @ORM\Column(name="notederefernce", type="string", length=200, nullable=true)
     */
    private $notederefernce;

    /**
     * @var string
     *
     * @ORM\Column(name="traitement", type="string", length=200, nullable=true)
     */
    private $traitement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_consultation", type="datetime", nullable=true)
     */
    private $dateConsultation;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=true)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="systole", type="float", nullable=true)
     */
    private $systole;

    /**
     * @var float
     *
     * @ORM\Column(name="diastole", type="float", nullable=true)
     */
    private $diastole;

    /**
     * @var float
     *
     * @ORM\Column(name="perimetreabdominal", type="float", nullable=true)
     */
    private $perimetreabdominal;

    /**
     * @var float
     *
     * @ORM\Column(name="frequence_cardiaque", type="float", nullable=true)
     */
    private $frequence_cardiaque;

    /**
     * @var float
     *
     *
     * @ORM\Column(name="temperature", type="float", nullable=true)
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", nullable=true)
     */
    private $taille;


    /**
     * @var CMSBundle\Entity\utilisateur
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @var CMSBundle\Entity\patient
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Patient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @var CMSBundle\Entity\soustypeconsultation
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Soustypeconsultation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $soustypeconsultation;

    /**
     * @var CMSBundle\Entity\r_d_v
     *
     * @ORM\OneToOne(targetEntity="FP\CMSBundle\Entity\RDV", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     *
     **/
    private $r_d_v;


    /**
     * @var array
     *
     * @ORM\ManyToMany(targetEntity="CMSFP\TagBundle\Entity\TypeExamen", cascade={"persist"})
     */
    private $typeexamen;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroconsultation", type="string", length=100, nullable=true)
     */
    private $numeroconsultation;

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
     * Set observation
     *
     * @param string $observation
     *
     * @return Consultation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set debutRP
     *
     * @param \DateTime $debutRP
     *
     * @return Consultation
     */
    public function setDebutRP($debutRP)
    {
        $this->debutRP = $debutRP;

        return $this;
    }

    /**
     * Get debutRP
     *
     * @return \DateTime
     */
    public function getDebutRP()
    {
        return $this->debutRP;
    }

    /**
     * Set finRP
     *
     * @param \DateTime $finRP
     *
     * @return Consultation
     */
    public function setFinRP($finRP)
    {
        $this->finRP = $finRP;

        return $this;
    }

    /**
     * Get finRP
     *
     * @return \DateTime
     */
    public function getFinRP()
    {
        return $this->finRP;
    }

    /**
     * Set notederefernce
     *
     * @param string $notederefernce
     *
     * @return Consultation
     */
    public function setNotederefernce($notederefernce)
    {
        $this->notederefernce = $notederefernce;

        return $this;
    }

    /**
     * Get notederefernce
     *
     * @return string
     */
    public function getNotederefernce()
    {
        return $this->notederefernce;
    }

    /**
     * Set traitement
     *
     * @param string $traitement
     *
     * @return Consultation
     */
    public function setTraitement($traitement)
    {
        $this->traitement = $traitement;

        return $this;
    }

    /**
     * Get traitement
     *
     * @return string
     */
    public function getTraitement()
    {
        return $this->traitement;
    }

    /**
     * Set dateConsultation
     *
     * @param \DateTime $dateConsultation
     *
     * @return Consultation
     */
    public function setDateConsultation($dateConsultation)
    {
        $this->dateConsultation = $dateConsultation;

        return $this;
    }

    /**
     * Get dateConsultation
     *
     * @return \DateTime
     */
    public function getDateConsultation()
    {
        return $this->dateConsultation;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Consultation
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Consultation
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set taille
     *
     * @param float $taille
     *
     * @return Consultation
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set utilisateur
     *
     * @param \FP\CMSBundle\Entity\Utilisateur $utilisateur
     *
     * @return Consultation
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

    /**
     * Set patient
     *
     * @param \FP\CMSBundle\Entity\Patient $patient
     *
     * @return Consultation
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
     * @return float
     */
    public function getFrequenceCardiaque()
    {
        return $this->frequence_cardiaque;
    }

    /**
     * @param float $frequence_cardiaque
     */
    public function setFrequenceCardiaque($frequence_cardiaque)
    {
        $this->frequence_cardiaque = $frequence_cardiaque;
    }


    /**
     * Add typeexaman
     *
     * @param \CMSFP\TagBundle\Entity\TypeExamen $typeexaman
     *
     * @return Consultation
     */
    public function addTypeexaman(\CMSFP\TagBundle\Entity\TypeExamen $typeexaman)
    {
        $this->typeexamen[] = $typeexaman;

        return $this;
    }

    /**
     * Remove typeexaman
     *
     * @param \CMSFP\TagBundle\Entity\TypeExamen $typeexaman
     */
    public function removeTypeexaman(\CMSFP\TagBundle\Entity\TypeExamen $typeexaman)
    {
        $this->typeexamen->removeElement($typeexaman);
    }

    /**
     * Get typeexamen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeexamen()
    {
        return $this->typeexamen;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pathologies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pathologiesh = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeexamen = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set soustypeconsultation
     *
     * @param \FP\CMSBundle\Entity\Soustypeconsultation $soustypeconsultation
     *
     * @return Consultation
     */
    public function setSoustypeconsultation(\FP\CMSBundle\Entity\Soustypeconsultation $soustypeconsultation)
    {
        $this->soustypeconsultation = $soustypeconsultation;

        return $this;
    }

    /**
     * Get soustypeconsultation
     *
     * @return \FP\CMSBundle\Entity\Soustypeconsultation
     */
    public function getSoustypeconsultation()
    {
        return $this->soustypeconsultation;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Consultation
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set dernieresregles
     *
     * @param \DateTime $dernieresregles
     *
     * @return Consultation
     */
    public function setDernieresregles($dernieresregles)
    {
        $this->dernieresregles = $dernieresregles;

        return $this;
    }

    /**
     * Get dernieresregles
     *
     * @return \DateTime
     */
    public function getDernieresregles()
    {
        return $this->dernieresregles;
    }

    /**
     * Set perimetreabdominal
     *
     * @param float $perimetreabdominal
     *
     * @return Consultation
     */
    public function setPerimetreabdominal($perimetreabdominal)
    {
        $this->perimetreabdominal = $perimetreabdominal;

        return $this;
    }

    /**
     * Get perimetreabdominal
     *
     * @return float
     */
    public function getPerimetreabdominal()
    {
        return $this->perimetreabdominal;
    }

    /**
     * Add pathologiesh
     *
     * @param \CMSFP\TagBundle\Entity\Pathologiesh $pathologiesh
     *
     * @return Consultation
     */
    public function addPathologiesh(\CMSFP\TagBundle\Entity\Pathologiesh $pathologiesh)
    {
        $this->pathologiesh[] = $pathologiesh;

        return $this;
    }

    /**
     * Remove pathologiesh
     *
     * @param \CMSFP\TagBundle\Entity\Pathologiesh $pathologiesh
     */
    public function removePathologiesh(\CMSFP\TagBundle\Entity\Pathologiesh $pathologiesh)
    {
        $this->pathologiesh->removeElement($pathologiesh);
    }

    /**
     * Set rDV
     *
     * @param \FP\CMSBundle\Entity\RDV $rDV
     *
     * @return Consultation
     */
    public function setRDV(\FP\CMSBundle\Entity\RDV $rDV = null)
    {
        $this->r_d_v = $rDV;

        return $this;
    }

    /**
     * Get rDV
     *
     * @return \FP\CMSBundle\Entity\RDV
     */
    public function getRDV()
    {
        return $this->r_d_v;
    }


    /**
     * Set numeroconsultation
     *
     * @param string $numeroconsultation
     *
     * @return Consultation
     */
    public function setNumeroconsultation($numeroconsultation)
    {
        $this->numeroconsultation = $numeroconsultation;

        return $this;
    }

    /**
     * Get numeroconsultation
     *
     * @return string
     */
    public function getNumeroconsultation()
    {
        return $this->numeroconsultation;
    }

    public function __toString()
    {
        return $this->numeroconsultation;
    }

    /**
     * Set systole
     *
     * @param float $systole
     *
     * @return Consultation
     */
    public function setSystole($systole)
    {
        $this->systole = $systole;

        return $this;
    }

    /**
     * Get systole
     *
     * @return float
     */
    public function getSystole()
    {
        return $this->systole;
    }

    /**
     * Set diastole
     *
     * @param float $diastole
     *
     * @return Consultation
     */
    public function setDiastole($diastole)
    {
        $this->diastole = $diastole;

        return $this;
    }

    /**
     * Get diastole
     *
     * @return float
     */
    public function getDiastole()
    {
        return $this->diastole;
    }

    /**
     * Set cpn
     *
     * @param string $cpn
     *
     * @return Consultation
     */
    public function setCpn($cpn)
    {
        $this->cpn = $cpn;

        return $this;
    }

    /**
     * Get cpn
     *
     * @return string
     */
    public function getCpn()
    {
        return $this->cpn;
    }
}
