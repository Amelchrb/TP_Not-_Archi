<?php
include './Films.php';
include './Connexion.php';


class FilmsRepository {

    // Méthode d'ajout d'un film
    public function ajouterFilm($film) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO films (titre, duree, annee_sortie) VALUES (:titre, :duree, :annee_sortie)");
        $sth->execute(array(
            ':titre' => $film->getTitre(),
            ':duree' => $film->getDuree(),
            ':annee_sortie' => $film->getAnneeSortie()
        ));
    }

    // Méthode de récupération de tous les films
    public function listerFilms() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM films");
        $rows = $sth->fetchAll();

        $films = array();
        foreach ($rows as $row) {
            $film = new Film();
            $film->setIdFilm($row['id_film']);
            $film->setTitre($row['titre']);
            $film->setDuree($row['duree']);
            $film->setAnneeSortie($row['annee_sortie']);
            array_push($films, $film);
        }

        return $films;
    }

    // Méthode de récupération d'un film
    public function recupererFilm($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("SELECT * FROM films WHERE id_film = ?");
        $sth->execute([$id]);
        $data = $sth->fetch();

        if ($data) {
            $film = new Film();
            $film->setIdFilm($data['id_film']);
            $film->setTitre($data['titre']);
            $film->setDuree($data['duree']);
            $film->setAnneeSortie($data['annee_sortie']);
            return $film;
        }

        return null;
    }

    // Méthode de modification d'un film
    public function modifierFilm($film) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("UPDATE films SET titre = :titre, duree = :duree, annee_sortie = :annee_sortie WHERE id_film = :id");
        $sth->execute(array(
            ':id' => $film->getIdFilm(),
            ':titre' => $film->getTitre(),
            ':duree' => $film->getDuree(),
            ':annee_sortie' => $film->getAnneeSortie()
        ));
    }

    // Méthode de suppression d'un film
    public function supprimerFilm($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM films WHERE id_film = ?");
        $sth->execute([$id]);
    }
}
?>
