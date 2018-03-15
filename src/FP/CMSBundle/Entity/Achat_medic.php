<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat_medic
 *
 * @ORM\Table(name="achat_medic")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\Achat_medicRepository")
 */
class Achat_medic
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
     * @var float
     *
     * @ORM\Column(name="prix_medicament", type="float")
     */
    private $prixMedicament;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_achat", type="integer")
     */
    private $quantiteAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="datetime")
     */
    private $dateAchat;

    /**
     * @var CMSBundle\Entity\medicament
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicament;

    /**
     * @var CMSBundle\Entity\pharmacie
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Pharmacie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pharmacie;


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
     * Set prixMedicament
     *
     * @param float $prixMedicament
     *
     * @return Achat_medic
     */
    public function setPrixMedicament($prixMedicament)
    {
        $this->prixMedicament = $prixMedicament;

        return $this;
    }

    /**
     * Get prixMedicament
     *
     * @return float
     */
    public function getPrixMedicament()
    {
        return $this->prixMedicament;
    }

    /**
     * Set quantiteAchat
     *
     * @param integer $quantiteAchat
     *
     * @return Achat_medic
     */
    public function setQuantiteAchat($quantiteAchat)
    {
        $this->quantiteAchat = $quantiteAchat;

        return $this;
    }

    /**
     * Get quantiteAchat
     *
     * @return int
     */
    public function getQuantiteAchat()
    {
        return $this->quantiteAchat;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Achat_medic
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set medicament
     *
     * @param \FP\CMSBundle\Entity\Medicament $medicament
     *
     * @return Achat_medic
     */
    public function setMedicament(\FP\CMSBundle\Entity\Medicament $medicament)
    {
        $this->medicament = $medicament;

        return $this;
    }

    /**
     * Get medicament
     *
     * @return \FP\CMSBundle\Entity\Medicament
     */
    public function getMedicament()
    {
        return $this->medicament;
    }

    /**
     * Set pharmacie
     *
     * @param \FP\CMSBundle\Entity\Pharmacie $pharmacie
     *
     * @return Achat_medic
     */
    public function setPharmacie(\FP\CMSBundle\Entity\Pharmacie $pharmacie)
    {
        $this->pharmacie = $pharmacie;

        return $this;
    }

    /**
     * Get pharmacie
     *
     * @return \FP\CMSBundle\Entity\Pharmacie
     */
    public function getPharmacie()
    {
        return $this->pharmacie;
    }
}
