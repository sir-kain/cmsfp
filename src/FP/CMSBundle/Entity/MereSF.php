<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MereSF
 *
 * @ORM\Table(name="mere_s_f")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\MereSFRepository")
 */
class MereSF
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
     * @ORM\Column(name="groupesanguin", type="string", length=255, nullable=true)
     */
    private $groupesanguin;

    /**
     * @var string
     *
     * @ORM\Column(name="tpha", type="string", length=255, nullable=true)
     */
    private $tpha;

    /**
     * @var string
     *
     * @ORM\Column(name="rpr", type="string", length=255, nullable=true)
     */
    private $rpr;

    /**
     * @var string
     *
     * @ORM\Column(name="maladies", type="string", length=255)
     */
    private $maladies;


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
     * Set groupesanguin
     *
     * @param string $groupesanguin
     *
     * @return MereSF
     */
    public function setGroupesanguin($groupesanguin)
    {
        $this->groupesanguin = $groupesanguin;

        return $this;
    }

    /**
     * Get groupesanguin
     *
     * @return string
     */
    public function getGroupesanguin()
    {
        return $this->groupesanguin;
    }

    /**
     * Set tpha
     *
     * @param string $tpha
     *
     * @return MereSF
     */
    public function setTpha($tpha)
    {
        $this->tpha = $tpha;

        return $this;
    }

    /**
     * Get tpha
     *
     * @return string
     */
    public function getTpha()
    {
        return $this->tpha;
    }

    /**
     * Set rpr
     *
     * @param string $rpr
     *
     * @return MereSF
     */
    public function setRpr($rpr)
    {
        $this->rpr = $rpr;

        return $this;
    }

    /**
     * Get rpr
     *
     * @return string
     */
    public function getRpr()
    {
        return $this->rpr;
    }

    /**
     * Set maladies
     *
     * @param string $maladies
     *
     * @return MereSF
     */
    public function setMaladies($maladies)
    {
        $this->maladies = $maladies;

        return $this;
    }

    /**
     * Get maladies
     *
     * @return string
     */
    public function getMaladies()
    {
        return $this->maladies;
    }
}

