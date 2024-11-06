<?php
namespace App\DataFixtures;

use App\Entity\Films;
use App\Entity\Acteurs;
use App\Entity\Realisateurs;
use App\Entity\Utilisateurs;
use App\Entity\Joue;
use App\Entity\Realise;
use App\Entity\Aime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Remplissage de la table Films
        $film1 = new Films();
        $film1->setTitre("Avatar")
              ->setDuree(162)
              ->setAnneSortie(2009);
        $manager->persist($film1);

        $film2 = new Films();
        $film2->setTitre("Harry Potter: école des sorciers")
              ->setDuree(152)
              ->setAnneSortie(2001);
        $manager->persist($film2);

        $film3 = new Films();
        $film3->setTitre("Interstellar")
              ->setDuree(162)
              ->setAnneSortie(2014);
        $manager->persist($film3);

        // Remplissage de la table Acteurs
        $acteur1 = new Acteurs();
        $acteur1->setNomActeur("Longoria")
                ->setPrenomActeur("Eva")
                ->setDateNaissanceActeur(new \DateTime('1975-03-15'));
        $manager->persist($acteur1);

        $acteur2 = new Acteurs();
        $acteur2->setNomActeur("Worthington")
                ->setPrenomActeur("Sam")
                ->setDateNaissanceActeur(new \DateTime('1976-08-02'));
        $manager->persist($acteur2);

        $acteur3 = new Acteurs();
        $acteur3->setNomActeur("DiCaprio")
                ->setPrenomActeur("Leonardo")
                ->setDateNaissanceActeur(new \DateTime('1974-11-11'));
        $manager->persist($acteur3);

        // Remplissage de la table Réalisateurs
        $realisateur1 = new Realisateurs();
        $realisateur1->setNomRealisateur("Cameron")
                     ->setPrenomRealisateur("James");
        $manager->persist($realisateur1);

        $realisateur2 = new Realisateurs();
        $realisateur2->setNomRealisateur("Nolan")
                     ->setPrenomRealisateur("Christopher");
        $manager->persist($realisateur2);

        $realisateur3 = new Realisateurs();
        $realisateur3->setNomRealisateur("Anderson")
                     ->setPrenomRealisateur("Paul");
        $manager->persist($realisateur3);

        // Remplissage de la table Utilisateurs
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setNomUtilisateur("Dupont")
                     ->setPrenomUtilisateur("Jean")
                     ->setEmail("jean.dupont@example.com")
                     ->setMotDePasse("motdepasse1");
        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setNomUtilisateur("Martin")
                     ->setPrenomUtilisateur("Marie")
                     ->setEmail("marie.martin@example.com")
                     ->setMotDePasse("motdepasse2");
        $manager->persist($utilisateur2);

        $utilisateur3 = new Utilisateurs();
        $utilisateur3->setNomUtilisateur("Durand")
                     ->setPrenomUtilisateur("Paul")
                     ->setEmail("paul.durand@example.com")
                     ->setMotDePasse("motdepasse3");
        $manager->persist($utilisateur3);

        // Remplissage de la table Joue
        $joue1 = new Joue();
        $joue1->setFilm($film2)
              ->setActeur($acteur2)
              ->setRoleActeur("principal");
        $manager->persist($joue1);

        $joue2 = new Joue();
        $joue2->setFilm($film3)
              ->setActeur($acteur3)
              ->setRoleActeur("principal");
        $manager->persist($joue2);

        // Remplissage de la table Réalise
        $realise1 = new Realise();
        $realise1->setFilm($film2)
                 ->setRealisateur($realisateur1);
        $manager->persist($realise1);

        $realise2 = new Realise();
        $realise2->setFilm($film3)
                 ->setRealisateur($realisateur2);
        $manager->persist($realise2);

        $realise3 = new Realise();
        $realise3->setFilm($film1)
                 ->setRealisateur($realisateur3);
        $manager->persist($realise3);

        // Remplissage de la table Aime
        $aime1 = new Aime();
        $aime1->setFilm($film2)
              ->setUtilisateur($utilisateur1)
              ->setRoleFavori("principal");
        $manager->persist($aime1);

        $aime2 = new Aime();
        $aime2->setFilm($film3)
              ->setUtilisateur($utilisateur2)
              ->setRoleFavori("principal");
        $manager->persist($aime2);

        $aime3 = new Aime();
        $aime3->setFilm($film1)
              ->setUtilisateur($utilisateur3)
              ->setRoleFavori("principal");
        $manager->persist($aime3);

        $manager->flush();
    }
}

