<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grossessesanterieures
 *
 * @ORM\Table(name="grossessesanterieures")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\GrossessesanterieuresRepository")
 */
class Grossessesanterieures
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
     *
     * @ORM\Column(name="dateissue", type="date")
     */
    private $dateissue;

    /**
     * @var string
     *
     * @ORM\Column(name="terme", type="string", length=255)
     */
    private $terme;

    /**
     * @var string
     *
     * @ORM\Column(name="incident", type="string", length=255)
     */
    private $incident;

    /**
     * @var string
     *
     * @ORM\Column(name="vivant", type="string", length=255)
     */
    private $vivant;

    /**
     * @var string
     *
     * @ORM\Column(name="deces", type="string", length=255)
     */
    private $deces;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=15)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="modeaccouchement", type="string", length=255)
     */
    private $modeaccouchement;

    /**
     * @var string
     *
     * @ORM\Column(name="poidsdenaissance", type="string", length=100)
     */
    private $poidsdenaissance;


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
     * Set dateissue
     *
     * @param \DateTime $dateissue
     *
     * @return Grossessesanterieures
     */
    public function setDateissue($dateissue)
    {
        $this->dateissue = $dateissue;

        return $this;
    }

    /**
     * Get dateissue
     *
     * @return \DateTime
     */
    public function getDateissue()
    {
        return $this->dateissue;
    }

    /**
     * Set terme
     *
     * @param string $terme
     *
     * @return Grossessesanterieures
     */
    public function setTerme($terme)
    {
        $this->terme = $terme;

        return $this;
    }

    /**
     * Get terme
     *
     * @return string
     */
    public function getTerme()
    {
        return $this->terme;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Grossessesanterieures
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set modeaccouchement
     *
     * @param string $modeaccouchement
     *
     * @return Grossessesanterieures
     */
    public function setModeaccouchement($modeaccouchement)
    {
        $this->modeaccouchement = $modeaccouchement;

        return $this;
    }

    /**
     * Get modeaccouchement
     *
     * @return string
     */
    public function getModeaccouchement()
    {
        return $this->modeaccouchement;
    }

    /**
     * Set poidsdenaissance
     *
     * @param string $poidsdenaissance
     *
     * @return Grossessesanterieures
     */
    public function setPoidsdenaissance($poidsdenaissance)
    {
        $this->poidsdenaissance = $poidsdenaissance;

        return $this;
    }

    /**
     * Get poidsdenaissance
     *
     * @return string
     */
    public function getPoidsdenaissance()
    {
        return $this->poidsdenaissance;
    }

    /**
     * Set incident
     *
     * @param string $incident
     *
     * @return Grossessesanterieures
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return string
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set vivant
     *
     * @param string $vivant
     *
     * @return Grossessesanterieures
     */
    public function setVivant($vivant)
    {
        $this->vivant = $vivant;

        return $this;
    }

    /**
     * Get vivant
     *
     * @return string
     */
    public function getVivant()
    {
        return $this->vivant;
    }

    /**
     * Set deces
     *
     * @param string $deces
     *
     * @return Grossessesanterieures
     */
    public function setDeces($deces)
    {
        $this->deces = $deces;

        return $this;
    }

    /**
     * Get deces
     *
     * @return string
     */
    public function getDeces()
    {
        return $this->deces;
    }
}
