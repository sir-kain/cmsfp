<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\MedicamentRepository")
 */
class Medicament
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
     * @ORM\Column(name="nom_medicament", type="string", length=100, nullable=false)
     */
    private $nomMedicament;

    /**
     * @var string
     *
     * @ORM\Column(name="posologie", type="text", nullable=true)
     */
    private $posologie;

    /**
     * @var string
     *
     * @ORM\Column(name="action_therapeutique", type="text", nullable=true)
     */
    private $actionTherapeutique;

    /**
     * @var CMSBundle\Entity\type_medicament
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Type_medicament")
     * @ORM\JoinColumn(nullable=true)
     */
    private $type_medicament;


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
     * Set nomMedicament
     *
     * @param string $nomMedicament
     *
     * @return Medicament
     */
    public function setNomMedicament($nomMedicament)
    {
        $this->nomMedicament = $nomMedicament;

        return $this;
    }

    /**
     * Get nomMedicament
     *@Groups({"medic"})
     *
     * @return string
     */
    public function getNomMedicament()
    {
        return $this->nomMedicament;
    }

    /**
     * Set posologie
     *
     * @param string $posologie
     *
     * @return Medicament
     */
    public function setPosologie($posologie)
    {
        $this->posologie = $posologie;

        return $this;
    }

    /**
     * Get posologie
     *
     * @return string
     */
    public function getPosologie()
    {
        return $this->posologie;
    }

    /**
     * Set actionTherapeutique
     *
     * @param string $actionTherapeutique
     *
     * @return Medicament
     */
    public function setActionTherapeutique($actionTherapeutique)
    {
        $this->actionTherapeutique = $actionTherapeutique;

        return $this;
    }

    /**
     * Get actionTherapeutique
     *
     * @return string
     */
    public function getActionTherapeutique()
    {
        return $this->actionTherapeutique;
    }

    /**
     * Set typeMedicament
     *
     * @param \FP\CMSBundle\Entity\Type_medicament $typeMedicament
     *
     * @return Medicament
     */
    public function setTypeMedicament(\FP\CMSBundle\Entity\Type_medicament $typeMedicament)
    {
        $this->type_medicament = $typeMedicament;

        return $this;
    }

    /**
     * Get typeMedicament
     *
     * @return \FP\CMSBundle\Entity\Type_medicament
     */
    public function getTypeMedicament()
    {
        return $this->type_medicament;
    }

    public function __toString()
    {
        return $this->nomMedicament;
    }
}
