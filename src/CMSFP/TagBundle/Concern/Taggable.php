<?php

namespace CMSFP\TagBundle\Concern;

trait Taggable
{

    /**
     * @var array
     *
     * @ORM\ManyToMany(targetEntity="CMSFP\TagBundle\Entity\Pathologies", cascade={"persist"})
     */
    private $pathologies;

    /**
     * Add pathology
     *
     * @param \CMSFP\TagBundle\Entity\Pathologies $pathology
     *
     * @return Consultation
     */
    public function addPathology(\CMSFP\TagBundle\Entity\Pathologies $pathology)
    {
        $this->pathologies[] = $pathology;

        return $this;
    }

    /**
     * Remove pathology
     *
     * @param \CMSFP\TagBundle\Entity\Pathologies $pathology
     */
    public function removePathology(\CMSFP\TagBundle\Entity\Pathologies $pathology)
    {
        $this->pathologies->removeElement($pathology);
    }

    /**
     * Get pathologies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPathologies()
    {
        return $this->pathologies;
    }


//    ------------------------------pathologies hypothèses----------------------------------
    /**
     * @var array
     *
     * @ORM\ManyToMany(targetEntity="CMSFP\TagBundle\Entity\Pathologiesh", cascade={"persist"})
     */
    private $pathologiesh;

    /**
     * Add pathologyh
     *
     * @param \CMSFP\TagBundle\Entity\Pathologiesh $pathologyh
     *
     * @return Consultation
     */
    public function addPathologyh(\CMSFP\TagBundle\Entity\Pathologiesh $pathologyh)
    {
        $this->pathologiesh[] = $pathologyh;

        return $this;
    }

    /**
     * Remove pathologyh
     *
     * @param \CMSFP\TagBundle\Entity\Pathologiesh $pathologyh
     */
    public function removePathologyh(\CMSFP\TagBundle\Entity\Pathologiesh $pathologyh)
    {
        $this->pathologies->removeElement($pathologyh);
    }

    /**
     * Get pathologiesh
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPathologiesh()
    {
        return $this->pathologiesh;
    }
}