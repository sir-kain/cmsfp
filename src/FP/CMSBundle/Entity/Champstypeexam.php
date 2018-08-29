<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champstypeexam
 *
 * @ORM\Table(name="champstypeexam")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\ChampstypeexamRepository")
 */
class Champstypeexam
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=255, nullable=true)
     */
    private $unite;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurmin", type="float", nullable=true)
     */
    private $valeurmin;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurmax", type="float", nullable=true)
     */
    private $valeurmax;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurminf", type="float", nullable=true)
     */
    private $valeurminf;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurmaxf", type="float", nullable=true)
     */
    private $valeurmaxf;

    /**
     * @ORM\ManyToOne(targetEntity="CMSFP\TagBundle\Entity\TypeExamen")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeexamen;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Champstypeexam
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Champstypeexam
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set valeurmin
     *
     * @param float $valeurmin
     *
     * @return Champstypeexam
     */
    public function setValeurmin($valeurmin)
    {
        $this->valeurmin = $valeurmin;

        return $this;
    }

    /**
     * Get valeurmin
     *
     * @return float
     */
    public function getValeurmin()
    {
        return $this->valeurmin;
    }

    /**
     * Set valeurmax
     *
     * @param float $valeurmax
     *
     * @return Champstypeexam
     */
    public function setValeurmax($valeurmax)
    {
        $this->valeurmax = $valeurmax;

        return $this;
    }

    /**
     * Get valeurmax
     *
     * @return float
     */
    public function getValeurmax()
    {
        return $this->valeurmax;
    }

    /**
     * Set typeexamen
     *
     * @param \CMSFP\TagBundle\Entity\TypeExamen $typeexamen
     *
     * @return Champstypeexam
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
     * Set valeurminf
     *
     * @param float $valeurminf
     *
     * @return Champstypeexam
     */
    public function setValeurminf($valeurminf)
    {
        $this->valeurminf = $valeurminf;

        return $this;
    }

    /**
     * Get valeurminf
     *
     * @return float
     */
    public function getValeurminf()
    {
        return $this->valeurminf;
    }

    /**
     * Set valeurmaxf
     *
     * @param float $valeurmaxf
     *
     * @return Champstypeexam
     */
    public function setValeurmaxf($valeurmaxf)
    {
        $this->valeurmaxf = $valeurmaxf;

        return $this;
    }

    /**
     * Get valeurmaxf
     *
     * @return float
     */
    public function getValeurmaxf()
    {
        return $this->valeurmaxf;
    }
}
