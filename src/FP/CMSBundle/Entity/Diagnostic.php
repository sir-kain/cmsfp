<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnostic
 *
 * @ORM\Table(name="diagnostic")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\DiagnosticRepository")
 */
class Diagnostic
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
     * @var CMSBundle\Entity\pathologie
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Pathologie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pathologie;

    /**
     * @var CMSBundle\Entity\consultation
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Consultation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $consultation;

    /**
     * @var string
     *
     * @ORM\Column(name="forupdate", type="string", length=5, options={"default":0}, nullable=true)
     */
    private $forupdate;

    /**
     * @var string
     *
     * @ORM\Column(name="chronique", type="string", length=5, options={"default":0})
     */
    private $chronique;

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
     * Set pathologie
     *
     * @param \FP\CMSBundle\Entity\Pathologie $pathologie
     *
     * @return Diagnostic
     */
    public function setPathologie(\FP\CMSBundle\Entity\Pathologie $pathologie)
    {
        $this->pathologie = $pathologie;

        return $this;
    }

    /**
     * Get pathologie
     *
     * @return \FP\CMSBundle\Entity\Pathologie
     */
    public function getPathologie()
    {
        return $this->pathologie;
    }

    /**
     * Set consultation
     *
     * @param \FP\CMSBundle\Entity\Consultation $consultation
     *
     * @return Diagnostic
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
     * Set forupdate
     *
     * @param string $forupdate
     *
     * @return Diagnostic
     */
    public function setForupdate($forupdate)
    {
        $this->forupdate = $forupdate;

        return $this;
    }

    /**
     * Get forupdate
     *
     * @return string
     */
    public function getForupdate()
    {
        return $this->forupdate;
    }

    /**
     * Set chronique
     *
     * @param string $chronique
     *
     * @return Diagnostic
     */
    public function setChronique($chronique)
    {
        $this->chronique = $chronique;

        return $this;
    }

    /**
     * Get chronique
     *
     * @return string
     */
    public function getChronique()
    {
        return $this->chronique;
    }
}
