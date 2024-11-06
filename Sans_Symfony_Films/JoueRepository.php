<?php
include './Joue.php';
include './Connexion.php';

// Classe d'accès à la table joue
class JoueRepository {

    public function ajouterJoue($joue) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO joue (id_film, id_acteur, role_acteur) VALUES (:id_film, :id_acteur, :role)");
        $sth->execute(array(
            ':id_film' => $joue->getIdFilm(),
            ':id_acteur' => $joue->getIdActeur(),
            ':role' => $joue->getRoleActeur()
        ));
    }

    public function listerJoue() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM joue");
        $rows = $sth->fetchAll();

        $joues = array();
        foreach ($rows as $row) {
            $joue = new Joue();
            $joue->setIdFilm($row['id_film']);
            $joue->setIdActeur($row['id_acteur']);
            $joue->setRoleActeur($row['role_acteur']);
            array_push($joues, $joue);
        }

        return $joues;
    }

    public function supprimerJoue($id_film, $id_acteur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM joue WHERE id_film = ? AND id_acteur = ?");
        $sth->execute([$id_film, $id_acteur]);
    }
}
?>
