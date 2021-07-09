<?php

namespace App\Entity;

use App\Repository\GambleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GambleRepository::class)
 */
class Gamble
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $idScore;

    /**
     * @ORM\Column(type="integer")
     */
    private $scoreDomicile;

    /**
     * @ORM\Column(type="integer")
     */
    private $scoreExterieur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdScore(): ?int
    {
        return $this->idScore;
    }

    public function setIdScore(int $idScore): self
    {
        $this->idScore = $idScore;

        return $this;
    }

    public function getScoreDomicile(): ?int
    {
        return $this->scoreDomicile;
    }

    public function setScoreDomicile(int $scoreDomicile): self
    {
        $this->scoreDomicile = $scoreDomicile;

        return $this;
    }

    public function getScoreExterieur(): ?int
    {
        return $this->scoreExterieur;
    }

    public function setScoreExterieur(int $scoreExterieur): self
    {
        $this->scoreExterieur = $scoreExterieur;

        return $this;
    }
}
