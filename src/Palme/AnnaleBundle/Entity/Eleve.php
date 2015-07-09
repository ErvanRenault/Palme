<?php
/**
 * Created by PhpStorm.
 * User: Ervan
 * Date: 09/07/2015
 * Time: 13:03
 */

namespace Palme\AnnaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Eleve
 * @package Palme\AnnaleBundle\Entity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Palme\AnnaleBundle\Entity")
 */
class Eleve
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
     * @ORM\Column(name="mail", type="string")
     */
    protected $mail;


    /**
     * @ORM\OnetoMany(targetEntity="Reservation", mappedBy="eleves", cascade={"persist"})
     */
    protected $reservations;



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
     * @return Eleve
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
     * @return Eleve
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
     * @return Eleve
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
     * Set reservations
     *
     * @param \Palme\AnnaleBundle\Entity\Reservation $reservations
     * @return Eleve
     */
    public function setReservations(\Palme\AnnaleBundle\Entity\Reservation $reservations = null)
    {
        $this->reservations = $reservations;

        return $this;
    }

    /**
     * Get reservations
     *
     * @return \Palme\AnnaleBundle\Entity\Reservation 
     */
    public function getReservations()
    {
        return $this->reservations;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservations
     *
     * @param \Palme\AnnaleBundle\Entity\Reservation $reservations
     * @return Eleve
     */
    public function addReservation(\Palme\AnnaleBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \Palme\AnnaleBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\Palme\AnnaleBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }
}
