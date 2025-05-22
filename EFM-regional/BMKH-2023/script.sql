-- Active: 1737679472715@@127.0.0.1@33066@db_pc
create DATABASE db_PC;

CREATE table Vendeur(
    idVendeur INT NOT NULL AUTO_INCREMENT PRIMARY key,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    psw VARCHAR(15) NOT NULL
);
CREATE table PC(
    idPC INT NOT NULL AUTO_INCREMENT PRIMARY key,
    marque VARCHAR(50) NOT NULL,
    Ram INT NOT NULL,
    stockage INT NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    image VARCHAR(100) NOT NULL,
    idVendeur INT NOT NULL,
    FOREIGN KEY (idVendeur) REFERENCES Vendeur(idVendeur)
);
drop Table pc;

insert into Vendeur (nom, prenom, email, psw) values
('Dupont', 'Jean', 'test@g.c"om', 'azerty'),
('Martin', 'Pierre', 'test2@g.c"om', 'azerty'),
('Durand', 'Marie', 'test3@g.c"om', 'azerty'),
('Leroy', 'Luc', 'test4@g.c"om', 'azerty'),
('Moreau', 'Sophie', 'test5@g.c"om', 'azerty'),
('Simon', 'Paul', 'test6@g.c"om', 'azerty'),
('Michel', 'Claire', 'test7@g.c"om', 'azerty'),
('Bernard', 'Julien', 'test8@g.c"om', 'azerty'),
('Roux', 'Camille', 'test9@g.c"om', 'azerty'),
('Garnier', 'Lucas', 'test10@g.c"om', 'azerty');

insert into PC (marque, Ram, stockage, prix, image, idVendeur) values
('Dell', 8, 512, 799.99, 'image1.jpg', 1),
('HP', 16, 1024, 999.99, 'image2.jpg', 2),
('Lenovo', 8, 256, 599.99, 'image3.jpg', 3),
('Asus', 32, 2048, 1299.99, 'image4.jpg', 4),
('Acer', 16, 512, 849.99, 'image5.jpg', 5),
('MSI', 32, 1024, 1399.99, 'image6.jpg', 6),
('Apple', 16, 512, 1999.99, 'image7.jpg', 7),
('Razer', 32, 2048, 2499.99, 'image8.jpg', 8),
('Toshiba', 8, 256, 499.99, 'image9.jpg', 9),
('Samsung', 16, 1024, 1099.99, 'image10.jpg',10);