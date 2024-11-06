
-- Les titres et années de sortie des films du plus récent au plus ancien
SELECT titre, annee_sortie
FROM films
ORDER BY annee_sortie DESC;

-- La liste des acteurs/actrices principaux pour un film donné
-- Ex: le titre de film = film donnée
SELECT acteur.id_acteur, acteurs.nom_acteur, acteurs.prenom_acteur, joue.role_acteur
FROM films
JOIN joue ON films.id_film = joue.id_film
JOIN acteurs ON joue.id_acteur = acteurs.id_acteur
WHERE (films.titre = 'film donnée');

-- La liste des films pour un acteur/actrice donné 
-- Ex: le nom de l'acteur = nom donné
-- Ex: le prénom de l'acteur = prénom donné
SELECT films.id_film, films.titre, films.annee_sortie
FROM acteurs
JOIN joue ON joue.id_acteur = acteurs.id_acteur
JOIN films ON films.id_film = joue.id_film
WHERE (acteurs.nom_acteur = 'nom donné' ) AND (acteurs.prenom_acteur='prénom donné');

-- Ajouter un film
INSERT INTO films (id_film, titre, duree, annee_sortie)
VALUES (1, 'Avatar', 162, 2009);

-- Ajouter un acteur/actrice
INSERT INTO acteurs (id_acteur, nom_acteur, prenom_acteur, date_naissance_acteur)
VALUES (1, 'Longoria', 'Eva', '1975-03-15');

-- Modifier un film 
UPDATE films
SET duree = 170, annee_sortie = 2010
WHERE id_film = 1;

-- Supprimer un acteur/actrice
DELETE FROM acteurs
WHERE (nom_acteur = 'Longoria') AND (prenom_acteur='Eva');

-- Afficher les 3 derniers acteurs/actrices ajouté(e)s, en imaginant que l'id_acteur soit auto incrémenté. 
SELECT nom_acteur, prenom_acteur
FROM acteurs
ORDER BY id_acteur DESC
LIMIT 3;

-- Afficher le film le plus ancien 
SELECT titre, annee_sortie
FROM films
ORDER BY annee_sortie ASC
LIMIT 1;

-- Afficher l’acteur le plus jeune
SELECT nom_acteur, prenom_acteur, date_naissance_acteur
FROM acteurs
ORDER BY date_naissance_acteur DESC
LIMIT 1;

-- Compter le nombre de films réalisés en 1990
SELECT COUNT(DISTINCT id_film) AS nbr_films
FROM films
WHERE (annee_sortie = 1990);

-- Faire la somme de tous les acteurs ayant joué dans un film
SELECT COUNT(DISTINCT id_acteur) AS nbr_acteurs
FROM joue;
