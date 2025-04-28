-- Active: 1737679472715@@127.0.0.1@33066@php
CREATE DATABASE php;

CREATE Table stagiaire(
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(40),
    prenom VARCHAR(40)
);

INSERT INTO stagiaire (nom, prenom) VALUES ('Dupont', 'Jean');
INSERT INTO stagiaire (nom, prenom) VALUES ('Durand', 'Marie'); 
INSERT INTO stagiaire (nom, prenom) VALUES ('Martin', 'Paul');
INSERT INTO stagiaire (nom, prenom) VALUES ('Bernard', 'Luc');
INSERT INTO stagiaire (nom, prenom) VALUES ('Petit', 'Sophie');
INSERT INTO stagiaire (nom, prenom) VALUES ('Leroy', 'Claire');

select * from stagiaire;