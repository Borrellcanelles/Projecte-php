CREATE TABLE Llibres
(
ISBN varchar(13) NOT NULL,
Titol varchar(100) NOT NULL,
Autor varchar(100) NOT NULL,
Stock_actual int,
PVP float NOT NULL,
Any_de_publicacio int,
Editorial varchar(100) NOT NULL,
Tematica varchar(100),
PRIMARY KEY (ISBN));

CREATE TABLE Clients (
DNI varchar(9) NOT NULL,
Nom varchar(100) NOT NULL,
Cognoms varchar(100) NOT NULL,
Adreça varchar(100) NOT NULL,
Telefon int NOT NULL,
Comandes_realitzades int,
PRIMARY KEY (DNI));

CREATE TABLE Ventes (
ID int AUTO_INCREMENT ,
DNI varchar(9),
ISBN varchar(13),
PRIMARY KEY (ID));

