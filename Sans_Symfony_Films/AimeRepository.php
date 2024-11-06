<?php
include './Aime.php';
include './Connexion.php';

class AimeRepository {

    public function ajouterAime($aime) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO aime (id_film, id_utilisateur, role_favori) VALUES (:id_film, :id_utilisateur, :role)");
        $sth->execute(array(
            ':id_film' => $aime->getIdFilm(),
            ':id_utilisateur' => $aime->getIdUtilisateur(),
            ':role' => $aime->getRoleFavori()
        ));
    }

    public function listerAime() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM aime");
        $rows = $sth->fetchAll();

        $aimes = array();
        foreach ($rows as $row) {
            $aime = new Aime();
            $aime->setIdFilm($row['id_film']);
            $aime->setIdUtilisateur($row['id_utilisateur']);
            $aime->setRoleFavori($row['role_favori']);
            array_push($aimes, $aime);
        }

        return $aimes;
    }

    public function supprimerAime($id_film, $id_utilisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM aime WHERE id_film = ? AND id_utilisateur = ?");
        $sth->execute([$id_film, $id_utilisateur]);
    }
}
?>
