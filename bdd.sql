CREATE TABLE Acheteur(
	email_a varchar(255) PRIMARY KEY NOT NULL,
	nom varchar(255) NOT NULL,
	prenom varchar(255) NOT NULL,
	adresse varchar(255) NOT NULL,
	panier varchar(255) NOT NULL,
	infos_banq varchar(255) NOT NULL
);

CREATE TABLE Vendeur(
	email_v varchar(255) PRIMARY KEY NOT NULL,
	pseudo varchar(255) NOT NULL,
	nom varchar(255) NOT NULL,
	photo varchar(255) NOT NULL,
	image varchar(255) NOT NULL,
	item varchar(255) NOT NULL
);

CREATE TABLE Panier(
	id_panier INT PRIMARY KEY NOT NULL,
	jour date NOT NULL,
	email_a varchar(255) NOT NULL,
	total INT NOT NULL
);

CREATE TABLE Admin()
	email_ece varchar(255) PRIMARY KEY NOT NULL,
	pseudo varchar(255) NOT NULL,
	nom varchar(255) NOT NULL
);

CREATE TABLE Item(
	id_item varchar(255) PRIMARY KEY NOT NULL,
	nom varchar(255) NOT NULL,
	description varchar(255) NOT NULL,
	videos varchar(255) NOT NULL,
	prix INT NOT NULL,
	categorie varchar(255) NOT NULL,
	couleur varchar(255) NOT NULL,
	taille INT NOT NULL
);

CREATE TABLE Ligne_commande(
	id_panier varchar(255) PRIMARY KEY NOT NULL,
	id_item varchar(255) NOT NULL,
	quantite INT NOT NULL,
	prix INT NOT NULL,
	couleur varchar(255) NOT NULL,
	taille INT NOT NULL
);

