<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VillesRepository")
 */
class Villes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $VillesId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomVilles;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codePostal;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sortie", mappedBy="ville"))
     */
    private $sorties;

    /**
     * @return mixed
     */
    public function getVillesId()
    {
        return $this->VillesId;
    }

    /**
     * @param mixed $VillesId
     */
    public function setVillesId($VillesId): void
    {
        $this->VillesId = $VillesId;
    }

    /**
     * @return mixed
     */
    public function getNomVilles()
    {
        return $this->nomVilles;
    }

    /**
     * @param mixed $nomVilles
     */
    public function setNomVilles($nomVilles): void
    {
        $this->nomVilles = $nomVilles;
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
