<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AntecedentSF
 *
 * @ORM\Table(name="antecedent_s_f")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\AntecedentSFRepository")
 */
class AntecedentSF
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
     * @ORM\Column(name="famille", type="text", nullable=true)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="autresexamens", type="text", nullable=true)
     */
    private $autresexamens;

    /**
     * @var string
     *
     * @ORM\Column(name="traitementsencours", type="text", nullable=true)
     */
    private $traitementsencours;

    /**
     * @var CMSBundle\Entity\pere_s_f
     *
     * @ORM\OneToOne(targetEntity="FP\CMSBundle\Entity\PereSF", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     *
     **/
    private $pere_s_f;

    /**
     * @var CMSBundle\Entity\mere_s_f
     *
     * @ORM\OneToOne(targetEntity="FP\CMSBundle\Entity\MereSF", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     *
     **/
    private $mere_s_f;

    /**
     * @var CMSBundle\Entity\grossessesanterieures
     *
     * @ORM\OneToOne(targetEntity="FP\CMSBundle\Entity\Grossessesanterieures", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     *
     **/
    private $grossessesanterieures;
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
     * Set famille
     *
     * @param string $famille
     *
     * @return AntecedentSF
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set autresexamens
     *
     * @param string $autresexamens
     *
     * @return AntecedentSF
     */
    public function setAutresexamens($autresexamens)
    {
        $this->autresexamens = $autresexamens;

        return $this;
    }

    /**
     * Get autresexamens
     *
     * @return string
     */
    public function getAutresexamens()
    {
        return $this->autresexamens;
    }

    /**
     * Set traitementsencours
     *
     * @param string $traitementsencours
     *
     * @return AntecedentSF
     */
    public function setTraitementsencours($traitementsencours)
    {
        $this->traitementsencours = $traitementsencours;

        return $this;
    }

    /**
     * Get traitementsencours
     *
     * @return string
     */
    public function getTraitementsencours()
    {
        return $this->traitementsencours;
    }

    /**
     * Set pereSF
     *
     * @param \FP\CMSBundle\Entity\PereSF $pereSF
     *
     * @return AntecedentSF
     */
    public function setPereSF(\FP\CMSBundle\Entity\PereSF $pereSF = null)
    {
        $this->pere_s_f = $pereSF;

        return $this;
    }

    /**
     * Get pereSF
     *
     * @return \FP\CMSBundle\Entity\PereSF
     */
    public function getPereSF()
    {
        return $this->pere_s_f;
    }

    /**
     * Set mereSF
     *
     * @param \FP\CMSBundle\Entity\MereSF $mereSF
     *
     * @return AntecedentSF
     */
    public function setMereSF(\FP\CMSBundle\Entity\MereSF $mereSF = null)
    {
        $this->mere_s_f = $mereSF;

        return $this;
    }

    /**
     * Get mereSF
     *
     * @return \FP\CMSBundle\Entity\MereSF
     */
    public function getMereSF()
    {
        return $this->mere_s_f;
    }

    /**
     * Set grossessesanterieures
     *
     * @param \FP\CMSBundle\Entity\Grossessesanterieures $grossessesanterieures
     *
     * @return AntecedentSF
     */
    public function setGrossessesanterieures(\FP\CMSBundle\Entity\Grossessesanterieures $grossessesanterieures = null)
    {
        $this->grossessesanterieures = $grossessesanterieures;

        return $this;
    }

    /**
     * Get grossessesanterieures
     *
     * @return \FP\CMSBundle\Entity\Grossessesanterieures
     */
    public function getGrossessesanterieures()
    {
        return $this->grossessesanterieures;
    }
}
