-- Active: 1737679472715@@127.0.0.1@33066@bdstagiaires
CREATE DATABASE bdStagiaires;

CREATE Table groupe(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL
);
CREATE Table Stagiaire(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    idGroupe INT NOT NULL,
    FOREIGN KEY (idGroupe) REFERENCES groupe(id)
);

insert INTO groupe (nom, description) VALUES
('Groupe 1', 'Description du groupe 1'),
('Groupe 2', 'Description du groupe 2'),
('Groupe 3', 'Description du groupe 3'),
('Groupe 4', 'Description du groupe 4'),
('Groupe 5', 'Description du groupe 5');
insert INTO Stagiaire (nom, prenom, idGroupe) VALUES
('Dupont', 'Jean', 1),
('Martin', 'Sophie', 2),
('Durand', 'Pierre', 3),
('Leroy', 'Marie', 4),
('Moreau', 'Lucie', 5),
('Simon', 'Paul', 1),
('Bernard', 'Claire', 2),
('Petit', 'Julien', 3),
('Garnier', 'Emma', 4),
('Roux', 'Antoine', 5);