<?php

class Realise {
    private $id;
    private $id_film;
    private $id_realisateur;

    public function getId() {
        return $this->id;
    }

    public function getIdFilm() {
        return $this->id_film;
    }

    public function setIdFilm($id_film) {
        $this->id_film = $id_film;
    }

    public function getIdRealisateur() {
        return $this->id_realisateur;
    }

    public function setIdRealisateur($id_realisateur) {
        $this->id_realisateur = $id_realisateur;
    }
}
?>
