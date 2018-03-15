<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Details_ordonnance
 *
 * @ORM\Table(name="details_ordonnance")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\Details_ordonnanceRepository")
 */
class Details_ordonnance
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
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var CMSBundle\Entity\ordonnance
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Ordonnance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordonnance;

    /**
     * @var CMSBundle\Entity\medicament
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicament;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Details_ordonnance
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set ordonnance
     *
     * @param \FP\CMSBundle\Entity\Ordonnance $ordonnance
     *
     * @return Details_ordonnance
     */
    public function setOrdonnance(\FP\CMSBundle\Entity\Ordonnance $ordonnance)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \FP\CMSBundle\Entity\Ordonnance
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set medicament
     *
     * @param \FP\CMSBundle\Entity\Medicament $medicament
     *
     * @return Details_ordonnance
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
}
