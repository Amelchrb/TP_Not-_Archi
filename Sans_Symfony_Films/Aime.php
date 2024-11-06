<?php

// Pour la table Aime
class Aime {
    private $id;
    private $id_film;
    private $id_utilisateur;
    private $role_favori;

    public function getId() {
        return $this->id;
    }

    public function getIdFilm() {
        return $this->id_film;
    }

    public function setIdFilm($id_film) {
        $this->id_film = $id_film;
    }

    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    public function getRoleFavori() {
        return $this->role_favori;
    }

    public function setRoleFavori($role_favori) {
        $this->role_favori = $role_favori;
    }
}
?>
