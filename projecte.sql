CREATE TABLE Llibres
(
ISBN varchar(13),
Titol varchar(100),
Autor varchar(100),
Stock_actual int,
PVP float,
Any_de_publicacio int,
Editorial varchar(100),
Tematica varchar(100)
); 

CREATE TABLE Clients (
DNI varchar(9),
Nom varchar(100),
Cognoms varchar(100),
Adreça varchar(100),
Telefon int,
Comandes_realitzades int  );

CREATE TABLE Ventes (
ID int,
DNI varchar(9),
ISBN varchar(13));

