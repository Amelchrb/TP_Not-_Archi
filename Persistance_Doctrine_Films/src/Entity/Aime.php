<?php

namespace App\Entity;

use App\Repository\AimeRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Films;
use App\Entity\Utilisateurs;

#[ORM\Entity(repositoryClass: AimeRepository::class)]
class Aime
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $role_favori = null;

    #[ORM\ManyToOne(targetEntity: Films::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Films $film = null;

    #[ORM\ManyToOne(targetEntity: Utilisateurs::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateurs $utilisateur = null;

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleFavori(): ?string
    {
        return $this->role_favori;
    }

    public function setRoleFavori(?string $role_favori): static
    {
        $this->role_favori = $role_favori;

        return $this;
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

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
