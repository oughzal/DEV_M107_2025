-- Active: 1737679472715@@127.0.0.1@33066@entreprise
CREATE DATABASE entreprise;

CREATE table services (
    id INT PRIMARY KEY AUTO_INCREMENT,
    intitulé VARCHAR(30) NOT NULL
   
);

INSERT into services (intitulé) VALUES
('Développement'),
('Ressources humaines'),
('Comptabilité'),
('Marketing'),
('Ventes');

CREATE table employés (
    id INT PRIMARY KEY AUTO_INCREMENT,
    CIN VARCHAR(30) NOT NULL,
    nomComplet VARCHAR(30) NOT NULL,
    dateNaissance DATE NOT NULL,
    dateEmbouche DATE NOT NULL,
    salaire FLOAT NOT NULL,
    service_id INT,
    FOREIGN KEY (service_id) REFERENCES services(id)
);
INSERT into employés (CIN, nomComplet, dateNaissance, dateEmbouche, salaire, service_id) VALUES
('12345678', 'John Doe', '1990-01-01', '2020-01-01', 50000, 1),
('87654321', 'Jane Smith', '1985-05-15', '2018-03-15', 60000, 2),
('11223344', 'Alice Johnson', '1992-07-20', '2019-06-20', 55000, 3),
('44332211', 'Bob Brown', '1988-11-30', '2021-02-28', 70000, 4);

select * from employés;