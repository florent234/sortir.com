<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampusRepository")
 */
class Campus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $CampusId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomCampus;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sortie", mappedBy="campus"))
     */
    private $sorties;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Utilisateur", mappedBy="campus"))
     */
    private $utilisateurs;

    /**
     * @return mixed
     */
    public function getCampusId()
    {
        return $this->CampusId;
    }

    /**
     * @return mixed
     */
    public function getNomCampus()
    {
        return $this->nomCampus;
    }

    /**
     * @param mixed $nomCampus
     */
    public function setNomCampus($nomCampus): void
    {
        $this->nomCampus = $nomCampus;
    }

    /**
     * @return mixed
     */
    public function getSorties()
    {
        return $this->sorties;
    }

    /**
     * @param mixed $sorties
     */
    public function setSorties($sorties): void
    {
        $this->sorties = $sorties;
    }

}
