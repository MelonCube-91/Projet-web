DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;


CREATE TABLE utilisateur (
  id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  motdepasse VARCHAR(255) NOT NULL
);

CREATE TABLE chambre (
  id_chambre INT AUTO_INCREMENT PRIMARY KEY,
  type VARCHAR(50) NOT NULL,
  prix DECIMAL(10,2) NOT NULL,
  description TEXT,
  disponibilité BOOLEAN NOT NULL,
  nombre_total INT NOT NULL
);

CREATE TABLE réservation (
  id_réservation INT AUTO_INCREMENT PRIMARY KEY,
  id_utilisateur INT,
  id_chambre INT,
  date_arrivée DATE NOT NULL,
  date_départ DATE NOT NULL,
  statut VARCHAR(20) NOT NULL,
  prix_total DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
  FOREIGN KEY (id_chambre) REFERENCES chambre(id_chambre)
);

CREATE TABLE avis (
  id_avis INT AUTO_INCREMENT PRIMARY KEY,
  id_utilisateur INT,
  id_chambre INT,
  note INT CHECK (note >= 1 AND note <= 5),
  commentaire TEXT,
  date_avis DATETIME NOT NULL,
  FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
  FOREIGN KEY (id_chambre) REFERENCES chambre(id_chambre)
);

CREATE TABLE massage (
  id_massage INT AUTO_INCREMENT PRIMARY KEY,
  type VARCHAR(100) NOT NULL,
  description TEXT,
  prix DECIMAL(10,2) NOT NULL
);

CREATE TABLE contact (
  id_contact INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prénom VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  date_contact DATETIME NOT NULL
);

CREATE TABLE administrateur (
  id_admin INT AUTO_INCREMENT PRIMARY KEY,
  pseudo VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  mot_de_passe VARCHAR(255) NOT NULL
);
