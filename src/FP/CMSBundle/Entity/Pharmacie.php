<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pharmacie
 *
 * @ORM\Table(name="pharmacie")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\PharmacieRepository")
 */
class Pharmacie
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
     * @ORM\Column(name="nom_pharmacie", type="string", length=100)
     */
    private $nomPharmacie;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_pharmacie", type="string", length=200)
     */
    private $adressePharmacie;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_pharmacie", type="string", length=15)
     */
    private $telPharmacie;

    /**
     * @var CMSBundle\Entity\service
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

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
     * Set nomPharmacie
     *
     * @param string $nomPharmacie
     *
     * @return Pharmacie
     */
    public function setNomPharmacie($nomPharmacie)
    {
        $this->nomPharmacie = $nomPharmacie;

        return $this;
    }

    /**
     * Get nomPharmacie
     *
     * @return string
     */
    public function getNomPharmacie()
    {
        return $this->nomPharmacie;
    }

    /**
     * Set adressePharmacie
     *
     * @param string $adressePharmacie
     *
     * @return Pharmacie
     */
    public function setAdressePharmacie($adressePharmacie)
    {
        $this->adressePharmacie = $adressePharmacie;

        return $this;
    }

    /**
     * Get adressePharmacie
     *
     * @return string
     */
    public function getAdressePharmacie()
    {
        return $this->adressePharmacie;
    }

    /**
     * Set telPharmacie
     *
     * @param string $telPharmacie
     *
     * @return Pharmacie
     */
    public function setTelPharmacie($telPharmacie)
    {
        $this->telPharmacie = $telPharmacie;

        return $this;
    }

    /**
     * Get telPharmacie
     *
     * @return string
     */
    public function getTelPharmacie()
    {
        return $this->telPharmacie;
    }

    /**
     * Set service
     *
     * @param \FP\CMSBundle\Entity\Service $service
     *
     * @return Pharmacie
     */
    public function setService(\FP\CMSBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \FP\CMSBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
