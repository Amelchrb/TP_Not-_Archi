<?php

class Joue {
    private $id;
    private $id_film;
    private $id_acteur;
    private $role_acteur;

    public function getId() {
        return $this->id;
    }

    public function getIdFilm() {
        return $this->id_film;
    }

    public function setIdFilm($id_film) {
        $this->id_film = $id_film;
    }

    public function getIdActeur() {
        return $this->id_acteur;
    }

    public function setIdActeur($id_acteur) {
        $this->id_acteur = $id_acteur;
    }

    public function getRoleActeur() {
        return $this->role_acteur;
    }

    public function setRoleActeur($role_acteur) {
        $this->role_acteur = $role_acteur;
    }
}
?>
