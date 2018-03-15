<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="nom_service", type="string", length=50)
     */
    private $nomService;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_service", type="string", length=255)
     */
    private $adresseService;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_service", type="string", length=15)
     */
    private $telService;


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
     * Set nomService
     *
     * @param string $nomService
     *
     * @return Service
     */
    public function setNomService($nomService)
    {
        $this->nomService = $nomService;

        return $this;
    }

    /**
     * Get nomService
     *
     * @return string
     */
    public function getNomService()
    {
        return $this->nomService;
    }

    /**
     * Set adresseService
     *
     * @param string $adresseService
     *
     * @return Service
     */
    public function setAdresseService($adresseService)
    {
        $this->adresseService = $adresseService;

        return $this;
    }

    /**
     * Get adresseService
     *
     * @return string
     */
    public function getAdresseService()
    {
        return $this->adresseService;
    }

    /**
     * Set telService
     *
     * @param string $telService
     *
     * @return Service
     */
    public function setTelService($telService)
    {
        $this->telService = $telService;

        return $this;
    }

    /**
     * Get telService
     *
     * @return string
     */
    public function getTelService()
    {
        return $this->telService;
    }
}

