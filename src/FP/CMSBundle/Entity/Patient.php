<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Upload\UploadBundle\Annotation\Uploadable;
use Upload\UploadBundle\Annotation\UploadableField;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\PatientRepository")
 * @Uploadable()
 */
class Patient
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
     * @ORM\Column(name="matricule", type="string", length=100)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_patient", type="string", length=100)
     */
    private $nomPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_patient", type="string", length=100)
     */
    private $prenomPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_patient", type="string", length=10)
     */
    private $genrePatient;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_patient", type="string", length=15)
     */
    private $telPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="terrainparticulier", type="string", length=255, nullable=true)
     */
    private $terrainparticulier;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var File
     * @UploadableField(filename="filename", path="uploads")
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_familiale", type="string", length=50)
     */
    private $situationFamiliale;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="adresse_patient", type="string", length=200)
     */
    private $adressePatient;

    /**
     * @var string
     *
     * @ORM\Column(name="numerodossier", type="string", length=100)
     */
    private $numerodossier;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe_sanguin", type="string", length=3, nullable=true)
     */
    private $groupeSanguin;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=100, nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="date_naiss", type="date")
     */
    private $dateNaiss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="datetime")
     */
    private $dateAjout;

    /**
     * @var CMSBundle\Entity\type_patient
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\TypePatient")
     */
    private $type_patient;

    /**
     * @var CMSBundle\Entity\structure
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Ministere")
     * @ORM\JoinColumn(nullable=true)
     */
    private $structure;


    /**
     * @var CMSBundle\Entity\tuteur
     *
     * @ORM\OneToOne(targetEntity="FP\CMSBundle\Entity\Tuteur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $tuteur;


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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Patient
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nomPatient
     *
     * @param string $nomPatient
     *
     * @return Patient
     */
    public function setNomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    /**
     * Get nomPatient
     *
     * @return string
     */
    public function getNomPatient()
    {
        return $this->nomPatient;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     *
     * @return Patient
     */
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    /**
     * Get prenomPatient
     *
     * @return string
     */
    public function getPrenomPatient()
    {
        return $this->prenomPatient;
    }

    /**
     * Set genrePatient
     *
     * @param string $genrePatient
     *
     * @return Patient
     */
    public function setGenrePatient($genrePatient)
    {
        $this->genrePatient = $genrePatient;

        return $this;
    }

    /**
     * Get genrePatient
     *
     * @return string
     */
    public function getGenrePatient()
    {
        return $this->genrePatient;
    }

    /**
     * Set telPatient
     *
     * @param string $telPatient
     *
     * @return Patient
     */
    public function setTelPatient($telPatient)
    {
        $this->telPatient = $telPatient;

        return $this;
    }

    /**
     * Get telPatient
     *
     * @return string
     */
    public function getTelPatient()
    {
        return $this->telPatient;
    }

    /**
     * Set situationFamiliale
     *
     * @param string $situationFamiliale
     *
     * @return Patient
     */
    public function setSituationFamiliale($situationFamiliale)
    {
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    /**
     * Get situationFamiliale
     *
     * @return string
     */
    public function getSituationFamiliale()
    {
        return $this->situationFamiliale;
    }

    /**
     * Set adressePatient
     *
     * @param string $adressePatient
     *
     * @return Patient
     */
    public function setAdressePatient($adressePatient)
    {
        $this->adressePatient = $adressePatient;

        return $this;
    }

    /**
     * Get adressePatient
     *
     * @return string
     */
    public function getAdressePatient()
    {
        return $this->adressePatient;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Patient
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getNumerodossier()
    {
        return $this->numerodossier;
    }

    /**
     * @param string $numerodossier
     */
    public function setNumerodossier($numerodossier)
    {
        $this->numerodossier = $numerodossier;
    }


    /**
     * Set groupeSanguin
     *
     * @param string $groupeSanguin
     *
     * @return Patient
     */
    public function setGroupeSanguin($groupeSanguin)
    {
        $this->groupeSanguin = $groupeSanguin;

        return $this;
    }

    /**
     * Get groupeSanguin
     *
     * @return string
     */
    public function getGroupeSanguin()
    {
        return $this->groupeSanguin;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return Patient
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Patient
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
     * Set typePatient
     *
     * @param \FP\CMSBundle\Entity\TypePatient $typePatient
     *
     * @return Patient
     */
    public function setTypePatient(\FP\CMSBundle\Entity\TypePatient $typePatient = null)
    {
        $this->type_patient = $typePatient;

        return $this;
    }

    /**
     * Get typePatient
     *
     * @return \FP\CMSBundle\Entity\TypePatient
     */
    public function getTypePatient()
    {
        return $this->type_patient;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Patient
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set tuteur
     *
     * @param \FP\CMSBundle\Entity\Tuteur $tuteur
     *
     * @return Patient
     */
    public function setTuteur(\FP\CMSBundle\Entity\Tuteur $tuteur = null)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \FP\CMSBundle\Entity\Tuteur
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set terrainparticulier
     *
     * @param string $terrainparticulier
     *
     * @return Patient
     */
    public function setTerrainparticulier($terrainparticulier)
    {
        $this->terrainparticulier = $terrainparticulier;

        return $this;
    }

    /**
     * Get terrainparticulier
     *
     * @return string
     */
    public function getTerrainparticulier()
    {
        return $this->terrainparticulier;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return File/null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file/null
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * Set structure
     *
     * @param \FP\CMSBundle\Entity\Ministere $structure
     *
     * @return Patient
     */
    public function setStructure(\FP\CMSBundle\Entity\Ministere $structure = null)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return \FP\CMSBundle\Entity\Ministere
     */
    public function getStructure()
    {
        return $this->structure;
    }
}
