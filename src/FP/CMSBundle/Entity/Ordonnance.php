<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\OrdonnanceRepository")
 */
class Ordonnance
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
     * @ORM\Column(name="indication", type="string", length=200)
     */
    private $indication;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    /**
     * @var int
     *
     * @ORM\Column(name="nombreunite", type="integer")
     */
    private $nombreunite;

    /**
     * @var CMSBundle\Entity\consultation
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Consultation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $consultation;

    /**
     * @var CMSBundle\Entity\medicament
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicament;

    /**
     * @var string
     *
     * @ORM\Column(name="forupdate", type="string", length=5)
     */
    private $forupdateuser;

    /**
     * @var string
     *
     * @ORM\Column(name="forupdatepatient", type="string", length=5)
     */
    private $forupdatepatient;

    /**
     * @return string
     */
    public function getForupdatepatient()
    {
        return $this->forupdatepatient;
    }

    /**
     * @param string $forupdatepatient
     */
    public function setForupdatepatient($forupdatepatient)
    {
        $this->forupdatepatient = $forupdatepatient;
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
     * Set consultation
     *
     * @param \FP\CMSBundle\Entity\Consultation $consultation
     *
     * @return Ordonnance
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
     * Set indication
     *
     * @param string $indication
     *
     * @return Ordonnance
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;

        return $this;
    }

    /**
     * Get indication
     *
     * @return string
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Set medicament
     *
     * @param \FP\CMSBundle\Entity\Medicament $medicament
     *
     * @return Ordonnance
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
     * Set quantite
     *
     * @param \int $quantite
     *
     * @return Ordonnance
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return \int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set forupdate
     *
     * @param string $forupdateuser
     *
     * @return Ordonnance
     */
    public function setForupdateuser($forupdateuser)
    {
        $this->forupdateuser = $forupdateuser;

        return $this;
    }

    /**
     * Get forupdateuser
     *
     * @return string
     */
    public function getForupdateuser()
    {
        return $this->forupdateuser;
    }

    /**
     * Set nombreunite
     *
     * @param integer $nombreunite
     *
     * @return Ordonnance
     */
    public function setNombreunite($nombreunite)
    {
        $this->nombreunite = $nombreunite;

        return $this;
    }

    /**
     * Get nombreunite
     *
     * @return integer
     */
    public function getNombreunite()
    {
        return $this->nombreunite;
    }
}
