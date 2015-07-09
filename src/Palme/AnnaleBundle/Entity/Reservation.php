<?php
/**
 * Created by PhpStorm.
 * User: Ervan
 * Date: 09/07/2015
 * Time: 13:16
 */

namespace Palme\AnnaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Annale
 * @package Palme\AnnaleBundle\Entity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Palme\AnnaleBundle\Entity")
 */
class Reservation
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="Eleve")
     */
    protected $eleves;


    /**
     * @ORM\ManytoOne(targetEntity="Annale", cascade={"persist"})
     */
    protected $annale;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
        $this->annale = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add eleves
     *
     * @param \Palme\AnnaleBundle\Entity\Eleve $eleves
     * @return Reservation
     */
    public function addElefe(\Palme\AnnaleBundle\Entity\Eleve $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Remove eleves
     *
     * @param \Palme\AnnaleBundle\Entity\Eleve $eleves
     */
    public function removeElefe(\Palme\AnnaleBundle\Entity\Eleve $eleves)
    {
        $this->eleves->removeElement($eleves);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * Add annale
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annale
     * @return Reservation
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

    /**
     * Set annale
     *
     * @param \Palme\AnnaleBundle\Entity\Annale $annale
     * @return Reservation
     */
    public function setAnnale(\Palme\AnnaleBundle\Entity\Annale $annale = null)
    {
        $this->annale = $annale;

        return $this;
    }

    /**
     * Set eleves
     *
     * @param \Palme\AnnaleBundle\Entity\Eleve $eleves
     * @return Reservation
     */
    public function setEleves(\Palme\AnnaleBundle\Entity\Eleve $eleves = null)
    {
        $this->eleves = $eleves;

        return $this;
    }
}
