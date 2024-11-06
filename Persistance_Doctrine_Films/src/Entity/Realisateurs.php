<?php

namespace App\Entity;

use App\Repository\RealisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RealisateursRepository::class)]
class Realisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_realisateur = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom_realisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRealisateur(): ?int
    {
        return $this->id_realisateur;
    }

    public function setIdRealisateur(int $id_realisateur): static
    {
        $this->id_realisateur = $id_realisateur;

        return $this;
    }

    public function getNomRealisateur(): ?string
    {
        return $this->nom_realisateur;
    }

    public function setNomRealisateur(string $nom_realisateur): static
    {
        $this->nom_realisateur = $nom_realisateur;

        return $this;
    }

    public function getPrenomRealisateur(): ?string
    {
        return $this->prenom_realisateur;
    }

    public function setPrenomRealisateur(string $prenom_realisateur): static
    {
        $this->prenom_realisateur = $prenom_realisateur;

        return $this;
    }
}
