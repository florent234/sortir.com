<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @ORM\Table(name="sortie")
 * @ORM\Entity(repositoryClass="App\Repository\SortieRepository")
 */
class Sortie extends AbstractController
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $SortieId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomSortie;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $etat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateHeure;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateLimiteInscription;

    /**
     * @ORM\Column(type="string", length=10000, nullable=true)
     */
    private $inscrie;

    /**
     * @ORM\Column(type="string", precision=3)
     */
    private $nbplaces;

    /**
     * @ORM\Column(type="integer", precision=3)
     */
    private $duree;

    /**
     * @ORM\Column(type="text")
     */
    private $description;


    /**
     * @var Sortie
     * @ORM\ManyToOne(targetEntity="App\Entity\Villes", inversedBy="sorties")
     * @ORM\JoinColumn(nullable=true, name="Villes", referencedColumnName="villes_id")
     */
    private $ville;

    /**
     * @var Sortie
     * @ORM\ManyToOne(targetEntity="App\Entity\Campus", inversedBy="sorties")
     * @ORM\JoinColumn(nullable=true, name="Campus", referencedColumnName="campus_id")
     */
    private $campus;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codePostal;

    /**
     * @var Utilisateur
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="sorties")
     * @ORM\JoinColumn(nullable=true, name="organisateur", referencedColumnName="user_id")
     */
    private $organisateur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $motifAnnulation;

    /**
     * @return mixed
     */
    public function getSortieId()
    {
        return $this->SortieId;
    }

    /**
     * @param mixed $SortieId
     */
    public function setSortieId($SortieId): void
    {
        $this->SortieId = $SortieId;
    }

    /**
     * @return mixed
     */
    public function getNomSortie()
    {
        return $this->nomSortie;
    }

    /**
     * @param mixed $nomSortie
     */
    public function setNomSortie($nomSortie): void
    {
        $this->nomSortie = $nomSortie;
    }

    /**
     * @return mixed
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * @param mixed $dateHeure
     */
    public function setDateHeure($dateHeure): void
    {
        $this->dateHeure = $dateHeure;
    }

    /**
     * @return mixed
     */
    public function getDateLimiteInscription()
    {
        return $this->dateLimiteInscription;
    }

    /**
     * @param mixed $dateLimiteInscription
     */
    public function setDateLimiteInscription($dateLimiteInscription): void
    {
        $this->dateLimiteInscription = $dateLimiteInscription;
    }

    /**
     * @return mixed
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * @param mixed $nbplaces
     */
    public function setNbplaces($nbplaces): void
    {
        $this->nbplaces = $nbplaces;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree): void
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $rue
     */
    public function setRue($rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * @param Sortie $organisateur
     */
    public function setOrganisateur(Utilisateur $organisateur): void
    {
        $this->organisateur = $organisateur;
    }

    /**
     * @return mixed
     */
    public function getInscrie()
    {
        return $this->inscrie;
    }

    /**
     * @param mixed $inscrie
     */
    public function setInscrie($inscrie): void
    {
        $this->inscrie = $inscrie;
    }

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param mixed $campus
     */
    public function setCampus($campus): void
    {
        $this->campus = $campus;
    }

    /**
     * @return mixed
     */
    public function getMotifAnnulation()
    {
        return $this->motifAnnulation;
    }

    /**
     * @param mixed $motifAnnulation
     */
    public function setMotifAnnulation($motifAnnulation): void
    {
        $this->motifAnnulation = $motifAnnulation;
    }

}
