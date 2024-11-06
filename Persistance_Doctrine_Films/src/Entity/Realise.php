<?php

namespace App\Entity;

use App\Repository\RealiseRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Films;
use App\Entity\Realisateurs;

#[ORM\Entity(repositoryClass: RealiseRepository::class)]
class Realise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Films::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Films $film = null;

    #[ORM\ManyToOne(targetEntity: Realisateurs::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Realisateurs $realisateur = null;

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilm(): ?Films
    {
        return $this->film;
    }

    public function setFilm(?Films $film): static
    {
        $this->film = $film;

        return $this;
    }

    public function getRealisateur(): ?Realisateurs
    {
        return $this->realisateur;
    }

    public function setRealisateur(?Realisateurs $realisateur): static
    {
        $this->realisateur = $realisateur;

        return $this;
    }
}
