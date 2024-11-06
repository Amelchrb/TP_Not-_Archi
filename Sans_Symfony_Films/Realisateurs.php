<?php

class Realisateurs {
    private $id_realisateur;
    private $nom_realisateur;
    private $prenom_realisateur;

    public function getIdRealisateur() {
        return $this->id_realisateur;
    }

    public function setIdRealisateur($id_realisateur) {
        $this->id_realisateur = $id_realisateur;
    }

    public function getNomRealisateur() {
        return $this->nom_realisateur;
    }

    public function setNomRealisateur($nom_realisateur) {
        $this->nom_realisateur = $nom_realisateur;
    }

    public function getPrenomRealisateur() {
        return $this->prenom_realisateur;
    }

    public function setPrenomRealisateur($prenom_realisateur) {
        $this->prenom_realisateur = $prenom_realisateur;
    }
}
?>
