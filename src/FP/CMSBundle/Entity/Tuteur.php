<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuteur
 *
 * @ORM\Table(name="tuteur")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\TuteurRepository")
 */
class Tuteur
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
     * @ORM\Column(name="nomTuteur", type="string", length=100, nullable=true)
     */
    private $nomTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomTuteur", type="string", length=100, nullable=true)
     */
    private $prenomTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="telTuteur", type="string", length=15, nullable=true)
     */
    private $telTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseTuteur", type="string", length=255, nullable=true)
     */
    private $adresseTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="lienparental", type="string", length=255, nullable=true)
     */
    private $lienparental;

    /**
     * @return string
     */
    public function getLienparental()
    {
        return $this->lienparental;
    }

    /**
     * @param string $lienparental
     */
    public function setLienparental($lienparental)
    {
        $this->lienparental = $lienparental;
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
     * Set nomTuteur
     *
     * @param string $nomTuteur
     *
     * @return Tuteur
     */
    public function setNomTuteur($nomTuteur)
    {
        $this->nomTuteur = $nomTuteur;

        return $this;
    }

    /**
     * Get nomTuteur
     *
     * @return string
     */
    public function getNomTuteur()
    {
        return $this->nomTuteur;
    }

    /**
     * Set prenomTuteur
     *
     * @param string $prenomTuteur
     *
     * @return Tuteur
     */
    public function setPrenomTuteur($prenomTuteur)
    {
        $this->prenomTuteur = $prenomTuteur;

        return $this;
    }

    /**
     * Get prenomTuteur
     *
     * @return string
     */
    public function getPrenomTuteur()
    {
        return $this->prenomTuteur;
    }

    /**
     * Set telTuteur
     *
     * @param string $telTuteur
     *
     * @return Tuteur
     */
    public function setTelTuteur($telTuteur)
    {
        $this->telTuteur = $telTuteur;

        return $this;
    }

    /**
     * Get telTuteur
     *
     * @return string
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * Set adresseTuteur
     *
     * @param string $adresseTuteur
     *
     * @return Tuteur
     */
    public function setAdresseTuteur($adresseTuteur)
    {
        $this->adresseTuteur = $adresseTuteur;

        return $this;
    }

    /**
     * Get adresseTuteur
     *
     * @return string
     */
    public function getAdresseTuteur()
    {
        return $this->adresseTuteur;
    }
}

