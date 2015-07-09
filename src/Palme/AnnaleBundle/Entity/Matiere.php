<?php
/**
 * Created by PhpStorm.
 * User: Ervan
 * Date: 09/07/2015
 * Time: 12:41
 */

namespace Palme\AnnaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Matiere
 * @package Palme\AnnaleBundle\Entity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Palme\AnnaleBundle\Entity")
 */
class Matiere
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nom", type="string")
     */
    protected $nom;

    /**
     * @ORM\ManytoOne(targetEntity="Enseignant", cascade={"persist"})
     */
    protected $enseignant;


    /**
     * @ORM\OneToMany(targetEntity="Annale", mappedBy="enseignant")
     */
    protected $annales;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Matiere
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
     * Set enseignant
     *
     * @param \Palme\AnnaleBundle\Entity\Enseignant $enseignant
     * @return Matiere
     */
    public function setEnseignant(\Palme\AnnaleBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \Palme\AnnaleBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annales = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add annales
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annales
     * @return Matiere
     */
    public function addAnnale(\Palme\AnnaleBundle\Entity\Annale $annales)
    {
        $this->annales[] = $annales;

        return $this;
    }

    /**
     * Remove annales
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annales
     */
    public function removeAnnale(\Palme\AnnaleBundle\Entity\Annale $annales)
    {
        $this->annales->removeElement($annales);
    }

    /**
     * Get annales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnales()
    {
        return $this->annales;
    }
}
