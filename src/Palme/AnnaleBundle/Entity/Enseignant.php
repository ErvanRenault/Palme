<?php

namespace Palme\AnnaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Created by PhpStorm.
 * User: Ervan
 * Date: 09/07/2015
 * Time: 12:16
 */

/**
 * Class Enseignant
 * @package Palme\AnnaleBundle\Entity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Palme\AnnaleBundle\Entity")
 */
class Enseignant
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
     * @ORM\Column(name="prenom", type="string")
     */
    protected $prenom;

    /**
     * @ORM\Column(name="string", type="string")
     */
    protected $mail;

    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="enseignant")
     */
    protected $matieres;

    /**
     * @ORM\OneToMany(targetEntity="Annale", mappedBy="enseignant")
     */
    protected $annale;




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
     * @return Enseignant
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
     * Set prenom
     *
     * @param string $prenom
     * @return Enseignant
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
     * Set mail
     *
     * @param string $mail
     * @return Enseignant
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add matieres
     *
     * @param \Palme\AnnaleBundle\Entity\Matiere $matieres
     * @return Enseignant
     */
    public function addMatiere(\Palme\AnnaleBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;

        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \Palme\AnnaleBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\Palme\AnnaleBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Add annale
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annale
     * @return Enseignant
     */
    public function addAnnale(\Palme\AnnaleBundle\Entity\Annale $annale)
    {
        $this->annale[] = $annale;

        return $this;
    }

    /**
     * Remove annale
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annale
     */
    public function removeAnnale(\Palme\AnnaleBundle\Entity\Annale $annale)
    {
        $this->annale->removeElement($annale);
    }

    /**
     * Get annale
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnale()
    {
        return $this->annale;
    }
}
