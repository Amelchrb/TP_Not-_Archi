<?php

namespace App\Entity;

use App\Repository\JoueRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Films;
use App\Entity\Acteurs;

#[ORM\Entity(repositoryClass: JoueRepository::class)]
class Joue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $role_acteur = null;

    #[ORM\ManyToOne(targetEntity: Films::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Films $film = null;

    #[ORM\ManyToOne(targetEntity: Acteurs::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Acteurs $acteur = null;

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleActeur(): ?string
    {
        return $this->role_acteur;
    }

    public function setRoleActeur(string $role_acteur): static
    {
        $this->role_acteur = $role_acteur;

        return $this;
    }

    public function getFilm(): ?Film
    {
        return $this->film;
    }

    public function setFilm(?Films $film): static
    {
        $this->film = $film;

        return $this;
    }

    public function getActeur(): ?Acteurs
    {
        return $this->acteur;
    }

    public function setActeur(?Acteurs $acteur): static
    {
        $this->acteur = $acteur;

        return $this;
    }
}
