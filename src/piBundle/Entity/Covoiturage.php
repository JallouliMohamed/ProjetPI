<?php

namespace piBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Covoiturage
 *
 * @ORM\Table(name="covoiturage")
 * @ORM\Entity(repositoryClass="piBundle\Repository\CovoiturageRepository")
 */
class Covoiturage
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
     * @ORM\Column(name="depart", type="string", length=255)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tp_dep", type="datetime")
     */
    private $tpDep;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrplaces", type="integer")
     */
    private $nbrplaces;

    /**
     * @var int
     *
     * @ORM\Column(name="numtel", type="integer")
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;


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
     * Set depart
     *
     * @param string $depart
     *
     * @return Covoiturage
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Covoiturage
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set tpDep
     *
     * @param \DateTime $tpDep
     *
     * @return Covoiturage
     */
    public function setTpDep($tpDep)
    {
        $this->tpDep = $tpDep;

        return $this;
    }

    /**
     * Get tpDep
     *
     * @return \DateTime
     */
    public function getTpDep()
    {
        return $this->tpDep;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Covoiturage
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nbrplaces
     *
     * @param integer $nbrplaces
     *
     * @return Covoiturage
     */
    public function setNbrplaces($nbrplaces)
    {
        $this->nbrplaces = $nbrplaces;

        return $this;
    }

    /**
     * Get nbrplaces
     *
     * @return int
     */
    public function getNbrplaces()
    {
        return $this->nbrplaces;
    }

    /**
     * Set numtel
     *
     * @param integer $numtel
     *
     * @return Covoiturage
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return int
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Covoiturage
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }
}

