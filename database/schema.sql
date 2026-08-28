CREATE DATABASE if not exists touche_pas_au_klaxon
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE touche_pas_au_klaxon;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(150) NOT NULL,
    nom VARCHAR(150) NOT NULL,
    prenom VARCHAR(150) NOT NULL,
    telephone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL
);

CREATE TABLE agence (
    id INT AUTO_INCREMENT PRIMARY KEY,
     ville VARCHAR(150) NOT NULL UNIQUE
);

CREATE TABLE trajet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_depart DATETIME NOT NULL,
    date_arrivee DATETIME NOT NULL,
    places_total INT NOT NULL,
    places_dispo INT NOT NULL,
    id_user INT NOT NULL,
    id_agence_depart INT NOT NULL,
    id_agence_arrivee INT NOT NULL,

    CONSTRAINT fk_trajet_user
    FOREIGN KEY (id_user)
    REFERENCES users(id),

    CONSTRAINT fk_trajet_agence_depart
    FOREIGN KEY (id_agence_depart)
    REFERENCES agence(id),

    CONSTRAINT fk_trajet_agence_arrivee
    FOREIGN KEY (id_agence_arrivee)
    REFERENCES agence(id)
);

