<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pathologie
 *
 * @ORM\Table(name="pathologie")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\PathologieRepository")
 */
class Pathologie
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
     * @ORM\Column(name="nom_pathologie", type="string", length=100)
     */
    private $nomPathologie;

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
     * Set nomPathologie
     *
     * @param string $nomPathologie
     *
     * @return Pathologie
     */
    public function setNomPathologie($nomPathologie)
    {
        $this->nomPathologie = $nomPathologie;

        return $this;
    }

    /**
     * Get nomPathologie
     *
     * @return string
     */
    public function getNomPathologie()
    {
        return $this->nomPathologie;
    }

    /**
     * Set orpheline
     *
     * @param string $orpheline
     *
     * @return Pathologie
     */
    public function setOrpheline($orpheline)
    {
        $this->orpheline = $orpheline;

        return $this;
    }

    /**
     * Get orpheline
     *
     * @return string
     */
    public function getOrpheline()
    {
        return $this->orpheline;
    }

    /**
     * Set currable
     *
     * @param string $currable
     *
     * @return Pathologie
     */
    public function setCurrable($currable)
    {
        $this->currable = $currable;

        return $this;
    }

    /**
     * Get currable
     *
     * @return string
     */
    public function getCurrable()
    {
        return $this->currable;
    }

    /**
     * Set hereditaire
     *
     * @param string $hereditaire
     *
     * @return Pathologie
     */
    public function setHereditaire($hereditaire)
    {
        $this->hereditaire = $hereditaire;

        return $this;
    }

    /**
     * Get hereditaire
     *
     * @return string
     */
    public function getHereditaire()
    {
        return $this->hereditaire;
    }

    /**
     * Set categorie
     *
     * @param \FP\CMSBundle\Entity\Categorie $categorie
     *
     * @return Pathologie
     */
    public function setCategorie(\FP\CMSBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \FP\CMSBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
