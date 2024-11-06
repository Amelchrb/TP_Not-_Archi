<?php

namespace App\Entity;

use App\Repository\ActeursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActeursRepository::class)]
class Acteurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_acteur = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom_acteur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_naissance_acteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdActeur(): ?int
    {
        return $this->id_acteur;
    }

    public function setIdActeur(int $id_acteur): static
    {
        $this->id_acteur = $id_acteur;

        return $this;
    }

    public function getNomActeur(): ?string
    {
        return $this->nom_acteur;
    }

    public function setNomActeur(string $nom_acteur): static
    {
        $this->nom_acteur = $nom_acteur;

        return $this;
    }

    public function getPrenomActeur(): ?string
    {
        return $this->prenom_acteur;
    }

    public function setPrenomActeur(string $prenom_acteur): static
    {
        $this->prenom_acteur = $prenom_acteur;

        return $this;
    }

    public function getDateNaissanceActeur(): ?\DateTimeInterface
    {
        return $this->date_naissance_acteur;
    }

    public function setDateNaissanceActeur(?\DateTimeInterface $date_naissance_acteur): static
    {
        $this->date_naissance_acteur = $date_naissance_acteur;

        return $this;
    }
}
