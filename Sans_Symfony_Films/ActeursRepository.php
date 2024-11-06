<?php
include './Acteurs.php';
include './Connexion.php';


class ActeursRepository {

    // Méthode d'ajout d'un acteur
    public function ajouterActeur($acteur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO acteurs (nom_acteur, prenom_acteur, date_naissance_acteur) VALUES (:nom, :prenom, :date_naissance)");
        $sth->execute(array(
            ':nom' => $acteur->getNomActeur(),
            ':prenom' => $acteur->getPrenomActeur(),
            ':date_naissance' => $acteur->getDateNaissanceActeur()
        ));
    }

    // Méthode de récupération de tous les acteurs
    public function listerActeurs() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM acteurs");
        $rows = $sth->fetchAll();

        $acteurs = array();
        foreach ($rows as $row) {
            $acteur = new Acteur();
            $acteur->setIdActeur($row['id_acteur']);
            $acteur->setNomActeur($row['nom_acteur']);
            $acteur->setPrenomActeur($row['prenom_acteur']);
            $acteur->setDateNaissanceActeur($row['date_naissance_acteur']);
            array_push($acteurs, $acteur);
        }

        return $acteurs;
    }

    // Méthode de récupération d'un acteur
    public function recupererActeur($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("SELECT * FROM acteurs WHERE id_acteur = ?");
        $sth->execute([$id]);
        $data = $sth->fetch();

        if ($data) {
            $acteur = new Acteur();
            $acteur->setIdActeur($data['id_acteur']);
            $acteur->setNomActeur($data['nom_acteur']);
            $acteur->setPrenomActeur($data['prenom_acteur']);
            $acteur->setDateNaissanceActeur($data['date_naissance_acteur']);
            return $acteur;
        }

        return null;
    }

    // Méthode de suppression d'un acteur
    public function supprimerActeur($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM acteurs WHERE id_acteur = ?");
        $sth->execute([$id]);
    }
}
?>
