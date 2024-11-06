<?php
include './Realisateurs.php';
include './Connexion.php';


class RealisateursRepository {

    public function ajouterRealisateur($realisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO realisateurs (nom_realisateur, prenom_realisateur) VALUES (:nom, :prenom)");
        $sth->execute(array(
            ':nom' => $realisateur->getNomRealisateur(),
            ':prenom' => $realisateur->getPrenomRealisateur()
        ));
    }

    public function listerRealisateurs() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM realisateurs");
        $rows = $sth->fetchAll();

        $realisateurs = array();
        foreach ($rows as $row) {
            $realisateur = new Realisateur();
            $realisateur->setIdRealisateur($row['id_realisateur']);
            $realisateur->setNomRealisateur($row['nom_realisateur']);
            $realisateur->setPrenomRealisateur($row['prenom_realisateur']);
            array_push($realisateurs, $realisateur);
        }

        return $realisateurs;
    }

    public function supprimerRealisateur($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM realisateurs WHERE id_realisateur = ?");
        $sth->execute([$id]);
    }
}
?>
