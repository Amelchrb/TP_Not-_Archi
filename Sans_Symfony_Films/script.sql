DROP TABLE IF EXISTS aime;
DROP TABLE IF EXISTS joue;
DROP TABLE IF EXISTS realise;
DROP TABLE IF EXISTS films;
DROP TABLE IF EXISTS utilisateurs;
DROP TABLE IF EXISTS acteurs;
DROP TABLE IF EXISTS realisateurs;

CREATE TABLE films (
    id_film INT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    duree INT,
    annee_sortie INT
);

CREATE TABLE acteurs (
    id_acteur INT PRIMARY KEY,
    nom_acteur VARCHAR(50),
    prenom_acteur VARCHAR(50),
    date_naissance_acteur DATE
);

CREATE TABLE realisateurs (
    id_realisateur INT PRIMARY KEY,
    nom_realisateur VARCHAR(50),
    prenom_realisateur VARCHAR(50)
);

CREATE TABLE utilisateurs (
    id_utilisateur INT PRIMARY KEY,
    nom_utilisateur VARCHAR(50),
    prenom_utilisateur VARCHAR(50),
    email VARCHAR(50),
    mot_de_passe VARCHAR(50)
);

CREATE TABLE joue (
    id_film INT,
    id_acteur INT,
    role_acteur VARCHAR(50),
    PRIMARY KEY (id_film, id_acteur),
    FOREIGN KEY (id_film) REFERENCES films(id_film),
    FOREIGN KEY (id_acteur) REFERENCES acteurs(id_acteur)
);

CREATE TABLE aime (
    id_film INT,
    id_utilisateur INT,
    role_favori VARCHAR(50),
    PRIMARY KEY (id_film, id_utilisateur),
    FOREIGN KEY (id_film) REFERENCES films(id_film),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
);

CREATE TABLE realise (
    id_film INT,
    id_realisateur INT,
    PRIMARY KEY (id_film, id_realisateur),
    FOREIGN KEY (id_film) REFERENCES films(id_film),
    FOREIGN KEY (id_realisateur) REFERENCES realisateurs(id_realisateur)
);