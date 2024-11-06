<?php

class Acteurs {
    private $id_acteur;
    private $nom_acteur;
    private $prenom_acteur;
    private $date_naissance_acteur;

    public function getIdActeur() {
        return $this->id_acteur;
    }

    public function setIdActeur($id_acteur) {
        $this->id_acteur = $id_acteur;
    }

    public function getNomActeur() {
        return $this->nom_acteur;
    }

    public function setNomActeur($nom_acteur) {
        $this->nom_acteur = $nom_acteur;
    }

    public function getPrenomActeur() {
        return $this->prenom_acteur;
    }

    public function setPrenomActeur($prenom_acteur) {
        $this->prenom_acteur = $prenom_acteur;
    }

    public function getDateNaissanceActeur() {
        return $this->date_naissance_acteur;
    }

    public function setDateNaissanceActeur($date_naissance_acteur) {
        $this->date_naissance_acteur = $date_naissance_acteur;
    }
}
?>
