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


-- Insertion de données

INSERT INTO films (id_film, titre, duree, annee_sortie)
VALUES (1, 'Avatar', 162, 2009),
(2, 'Harry Potter: école des sorciers ', 152, 2001),
(3, 'Interstellar', 162, 2014);

INSERT INTO acteurs (id_acteur, nom_acteur, prenom_acteur, date_naissance_acteur) VALUES
(1, 'Longoria', 'Eva', '1975-03-15'),
(2, 'Worthington', 'Sam', '1976-08-02'),
(3, 'DiCaprio', 'Leonardo', '1974-11-11');

INSERT INTO realisateurs (id_realisateur, nom_realisateur, prenom_realisateur) VALUES
(1, 'Cameron', 'James'),
(2, 'Nolan', 'Christopher'),
(3, 'Anderson', 'Paul');

INSERT INTO utilisateurs (id_utilisateur, nom_utilisateur, prenom_utilisateur, email, mot_de_passe) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@example.com', 'motdepasse1'),
(2, 'Martin', 'Marie', 'marie.martin@example.com', 'motdepasse2'),
(3, 'Durand', 'Paul', 'paul.durand@example.com', 'motdepasse3');

INSERT INTO joue (id_film, id_acteur, role_acteur) VALUES
(2, 2, 'principal'),  
(3, 3, 'principal');   

INSERT INTO realise (id_film, id_realisateur) VALUES
(2, 1), 
(3, 2),  
(1, 3);  

INSERT INTO aime (id_film, id_utilisateur, role_favori) VALUES
(2, 1, 'principal'),  
(3, 2, 'principal'),  
(1, 3, 'principal');      
