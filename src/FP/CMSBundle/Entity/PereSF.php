<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PereSF
 *
 * @ORM\Table(name="pere_s_f")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\PereSFRepository")
 */
class PereSF
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
     * @ORM\Column(name="autresexamens", type="text", nullable=true)
     */
    private $autresexamens;

    /**
     * @var string
     *
     * @ORM\Column(name="maladies", type="text", nullable=true)
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
     * @return PereSF
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
     * Set autresexamens
     *
     * @param string $autresexamens
     *
     * @return PereSF
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
     * Set maladies
     *
     * @param string $maladies
     *
     * @return PereSF
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

