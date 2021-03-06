<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Symptome
 *
 * @ORM\Table(name="symptome")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\SymptomeRepository")
 */
class Symptome
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
     * @ORM\Column(name="details_symptome", type="string", length=200)
     */
    private $detailsSymptome;


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
     * Set detailsSymptome
     *
     * @param string $detailsSymptome
     *
     * @return Symptome
     */
    public function setDetailsSymptome($detailsSymptome)
    {
        $this->detailsSymptome = $detailsSymptome;

        return $this;
    }

    /**
     * Get detailsSymptome
     *
     * @return string
     */
    public function getDetailsSymptome()
    {
        return $this->detailsSymptome;
    }
}
