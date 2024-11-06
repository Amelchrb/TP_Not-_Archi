<?php
include './Utilisateurs.php';
include './Connexion.php';


class UtilisateursRepository {

    public function ajouterUtilisateur($utilisateur) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("INSERT INTO utilisateurs (nom_utilisateur, prenom_utilisateur, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mdp)");
        $sth->execute(array(
            ':nom' => $utilisateur->getNomUtilisateur(),
            ':prenom' => $utilisateur->getPrenomUtilisateur(),
            ':email' => $utilisateur->getEmail(),
            ':mdp' => $utilisateur->getMotDePasse()
        ));
    }

    public function listerUtilisateurs() {
        $conn = new Connexion();
        $sth = $conn->getConn()->query("SELECT * FROM utilisateurs");
        $rows = $sth->fetchAll();

        $utilisateurs = array();
        foreach ($rows as $row) {
            $utilisateur = new Utilisateur();
            $utilisateur->setIdUtilisateur($row['id_utilisateur']);
            $utilisateur->setNomUtilisateur($row['nom_utilisateur']);
            $utilisateur->setPrenomUtilisateur($row['prenom_utilisateur']);
            $utilisateur->setEmail($row['email']);
            $utilisateur->setMotDePasse($row['mot_de_passe']);
            array_push($utilisateurs, $utilisateur);
        }

        return $utilisateurs;
    }

    public function supprimerUtilisateur($id) {
        $conn = new Connexion();
        $sth = $conn->getConn()->prepare("DELETE FROM utilisateurs WHERE id_utilisateur = ?");
        $sth->execute([$id]);
    }
}
?>
