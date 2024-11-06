<?php

class Utilisateurs {
    private $id_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $email;
    private $mot_de_passe;

    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    public function getNomUtilisateur() {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur($nom_utilisateur) {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    public function getPrenomUtilisateur() {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur($prenom_utilisateur) {
        $this->prenom_utilisateur = $prenom_utilisateur;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMotDePasse() {
        return $this->mot_de_passe;
    }

    public function setMotDePasse($mot_de_passe) {
        $this->mot_de_passe = $mot_de_passe;
    }
}
?>
