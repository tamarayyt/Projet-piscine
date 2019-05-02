CREATE TABLE Clients(
	nom varchar(255) NOT NULL,
	prenom varchar(255) NOT NULL,
	adresse varchar(255) NOT NULL,
	email varchar(255) NOT NULL
);

CREATE TABLE Produits(
	code INT PRIMARY KEY NOT NULL,
	vendeur varchar(255),
	categories varchar(255) NOT NULL,
	prix INT
);