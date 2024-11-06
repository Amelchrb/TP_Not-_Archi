<?php
include './Realise.php';
include './Connexion.php';

class RealiseRepository {

    public function ajouterRealise($realise) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO realise (id_film, id_realisateur) VALUES (:id_film, :id_realisateur)");
        $sth->execute(array(
            ':id_film' => $realise->getIdFilm(),
            ':id_realisateur' => $realise->getIdRealisateur()
        ));
    }

    public function listerRealise() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM realise");
        $rows = $sth->fetchAll();

        $realises = array();
        foreach ($rows as $row) {
            $realise = new Realise();
            $realise->setIdFilm($row['id_film']);
            $realise->setIdRealisateur($row['id_realisateur']);
            array_push($realises, $realise);
        }

        return $realises;
    }

    public function supprimerRealise($id_film, $id_realisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM realise WHERE id_film = ? AND id_realisateur = ?");
        $sth->execute([$id_film, $id_realisateur]);
    }
}
?>
