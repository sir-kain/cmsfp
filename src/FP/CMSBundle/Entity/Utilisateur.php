<?php

namespace FP\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use FP\CMSBundle\Entity\Service;
use FP\CMSBundle\Entity\Specialite;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="FP\CMSBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=1, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=true)
     */
    private $tel;

    /**
     * @var bool
     * @ORM\Column(name="first_connexion", type="boolean", nullable=true, options={"default": 0})
     */
    public $firstConnexion;

	/**
     * @var CMSBundle\Entity\service
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @var CMSBundle\Entity\specialite
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\Specialite")
     * @ORM\JoinColumn(nullable=true)
     */
    private $specialite;

    /**
     * @var CMSBundle\Entity\typeuser
     *
     * @ORM\ManyToOne(targetEntity="FP\CMSBundle\Entity\TypeUser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeuser;


    public function __construct()
    {
        parent::__construct();
        
    }


    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Utilisateur
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set firstConnexion
     *
     * @param boolean $firstConnexion
     *
     * @return Utilisateur
     */
    public function setFirstConnexion($firstConnexion)
    {
        $this->firstConnexion = $firstConnexion;

        return $this;
    }

    /**
     * Get firstConnexion
     *
     * @return boolean
     */
    public function getFirstConnexion()
    {
        return $this->firstConnexion;
    }

    /**
     * Set service
     *
     * @param \FP\CMSBundle\Entity\Service $service
     *
     * @return Utilisateur
     */
    public function setService(\FP\CMSBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \FP\CMSBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set specialite
     *
     * @param \FP\CMSBundle\Entity\Specialite $specialite
     *
     * @return Utilisateur
     */
    public function setSpecialite(\FP\CMSBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \FP\CMSBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set typeuser
     *
     * @param \FP\CMSBundle\Entity\TypeUser $typeuser
     *
     * @return Utilisateur
     */
    public function setTypeuser(\FP\CMSBundle\Entity\TypeUser $typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return \FP\CMSBundle\Entity\TypeUser
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }
}
