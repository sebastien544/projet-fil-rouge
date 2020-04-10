# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.5.5-10.4.11-MariaDB)
# Base de données: save_them
# Temps de génération: 2020-04-10 08:27:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table Adresse
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Adresse`;

CREATE TABLE `Adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(100) NOT NULL DEFAULT '',
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `Adresse` WRITE;
/*!40000 ALTER TABLE `Adresse` DISABLE KEYS */;

INSERT INTO `Adresse` (`id_adresse`, `adresse`, `code_postal`, `ville`, `pays`, `Region`)
VALUES
	(17,'59 Avenue Roger Salengro','59170','Croix','France','Hauts de France');

/*!40000 ALTER TABLE `Adresse` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table Animal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Animal`;

CREATE TABLE `Animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `type_animal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `Animal` WRITE;
/*!40000 ALTER TABLE `Animal` DISABLE KEYS */;

INSERT INTO `Animal` (`id_animal`, `type_animal`)
VALUES
	(1,'gorilla'),
	(2,'elephant'),
	(3,'tiger'),
	(4,'chimpanze'),
	(5,'giraffe');

/*!40000 ALTER TABLE `Animal` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table categorie
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;

INSERT INTO `categorie` (`id_categorie`, `categorie`)
VALUES
	(1,'goodies'),
	(2,'stuffed_toys');

/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table client
# ------------------------------------------------------------

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL DEFAULT '',
  `mail` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT '',
  `date` date NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `Client_utlisateur0_AK` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`, `mail`, `password`, `date`, `id_utilisateur`, `id_adresse`)
VALUES
	(9,'sz','ant','','ad@deb.com',NULL,'2020-04-07',3,17);

/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table commande
# ------------------------------------------------------------

DROP TABLE IF EXISTS `commande`;

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commande`,`id_produit`),
  KEY `commande_Client0_FK` (`id_client`),
  CONSTRAINT `commande_Client0_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;

INSERT INTO `commande` (`id_commande`, `date_commande`, `id_client`, `id_produit`, `quantity`)
VALUES
	(6,'2020-04-07',9,7,1),
	(6,'2020-04-07',9,8,2),
	(6,'2020-04-07',9,9,3);

/*!40000 ALTER TABLE `commande` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table compte
# ------------------------------------------------------------

DROP TABLE IF EXISTS `compte`;

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `quantite_point` varchar(50) NOT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `compte` WRITE;
/*!40000 ALTER TABLE `compte` DISABLE KEYS */;

INSERT INTO `compte` (`id_compte`, `quantite_point`)
VALUES
	(1,'10000'),
	(2,'10000'),
	(3,'10000'),
	(4,'10000');

/*!40000 ALTER TABLE `compte` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table don
# ------------------------------------------------------------

DROP TABLE IF EXISTS `don`;

CREATE TABLE `don` (
  `id_don` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  PRIMARY KEY (`id_don`),
  KEY `don_Animal0_FK` (`id_animal`),
  CONSTRAINT `don_Animal0_FK` FOREIGN KEY (`id_animal`) REFERENCES `Animal` (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Affichage de la table Effectuer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Effectuer`;

CREATE TABLE `Effectuer` (
  `id_don` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  `montant_don` int(11) NOT NULL,
  `frequency_don` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_don`,`id_utilisateur`),
  CONSTRAINT `Effectuer_don0_FK` FOREIGN KEY (`id_don`) REFERENCES `don` (`id_don`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Affichage de la table panier
# ------------------------------------------------------------

DROP TABLE IF EXISTS `panier`;

CREATE TABLE `panier` (
  `id_utilisateur` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Affichage de la table petition
# ------------------------------------------------------------

DROP TABLE IF EXISTS `petition`;

CREATE TABLE `petition` (
  `id_petition` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  PRIMARY KEY (`id_petition`),
  KEY `id_animal` (`id_animal`),
  CONSTRAINT `petition_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `Animal` (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `petition` WRITE;
/*!40000 ALTER TABLE `petition` DISABLE KEYS */;

INSERT INTO `petition` (`id_petition`, `id_animal`)
VALUES
	(1,1),
	(3,4),
	(2,5);

/*!40000 ALTER TABLE `petition` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table produit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `produit`;

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `prix` decimal(15,3) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `Produit_stock0_FK` (`id_stock`),
  KEY `Produit_categorie1_FK` (`id_categorie`),
  CONSTRAINT `Produit_categorie1_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  CONSTRAINT `Produit_stock0_FK` FOREIGN KEY (`id_stock`) REFERENCES `stock` (`id_stock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;

INSERT INTO `produit` (`id_produit`, `designation`, `prix`, `id_stock`, `id_categorie`)
VALUES
	(1,'stuffed toy giraffe',45.990,1,2),
	(2,'stuffed toy small chimp',29.990,2,2),
	(3,'stuffed toy Robert',24.990,3,2),
	(4,'stuffed toy hedgehog',19.990,4,2),
	(5,'stuffed toy monkey',24.990,5,2),
	(6,'stuffed toy dog',29.990,6,2),
	(7,'goodie mug',12.990,7,1),
	(8,'goodie blocnote',19.990,8,1),
	(9,'goodie toothbrush',4.990,9,1),
	(10,'goodie woodmap',45.990,10,1),
	(11,'goodie antistresscube',12.990,11,1),
	(12,'goodie tote bag',9.990,12,1);

/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table promotions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `promotions`;

CREATE TABLE `promotions` (
  `id_promotion` int(10) NOT NULL AUTO_INCREMENT,
  `code_promo` varchar(50) DEFAULT NULL,
  `reduction` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;

INSERT INTO `promotions` (`id_promotion`, `code_promo`, `reduction`)
VALUES
	(1,'CHAMP25',25);

/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Affichage de la table Signe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Signe`;

CREATE TABLE `Signe` (
  `id_petition` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_signature` date NOT NULL,
  PRIMARY KEY (`id_petition`,`id_utilisateur`),
  CONSTRAINT `Signe_petition0_FK` FOREIGN KEY (`id_petition`) REFERENCES `petition` (`id_petition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `Signe` WRITE;
/*!40000 ALTER TABLE `Signe` DISABLE KEYS */;

INSERT INTO `Signe` (`id_petition`, `id_utilisateur`, `date_signature`)
VALUES
	(1,1,'2020-03-31'),
	(1,2,'2020-03-31'),
	(1,3,'2020-03-31'),
	(1,4,'2020-03-31'),
	(2,1,'2020-03-31'),
	(2,2,'2020-04-02'),
	(2,3,'2020-03-31'),
	(2,4,'2020-03-31'),
	(3,1,'2020-03-31'),
	(3,2,'2020-03-31'),
	(3,3,'2020-03-31');

/*!40000 ALTER TABLE `Signe` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table stock
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL AUTO_INCREMENT,
  `stock_produit` varchar(50) NOT NULL,
  `date_stock` date NOT NULL,
  PRIMARY KEY (`id_stock`,`stock_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;

INSERT INTO `stock` (`id_stock`, `stock_produit`, `date_stock`)
VALUES
	(1,'99','2020-03-31'),
	(2,'99','2020-03-31'),
	(3,'99','2020-03-31'),
	(4,'99','2020-03-31'),
	(5,'99','2020-03-31'),
	(6,'99','2020-03-31'),
	(7,'99','2020-03-31'),
	(8,'97','2020-04-07'),
	(8,'99','2020-03-31'),
	(9,'96','2020-04-07'),
	(9,'99','2020-03-31'),
	(10,'99','2020-03-31'),
	(11,'99','2020-03-31'),
	(12,'99','2020-03-31');

/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table utilisateur
# ------------------------------------------------------------

DROP TABLE IF EXISTS `utilisateur`;

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;

INSERT INTO `utilisateur` (`id_utilisateur`, `prenom`, `nom`, `mail`, `password`, `id_role`, `id_compte`)
VALUES
	(1,'le peut','mayom','db@save.com','$2y$10$KzkBIcIiwAsTFphDZ6gKdu/pqZBqNDANGELuadaGumlXCkdy5CJbK',NULL,1),
	(2,'ant','sz','ad@deb.com','$2y$10$jvsfxsbTOk.9/yH48upADekSs51FHxuI.Z0PpCqbFuk.CT15hcd.O',NULL,2),
	(3,'cdeecexs','cdcd','az@az.com','$2y$10$UW4pc6/8k0CEhzEU7wR.IO3XQ6.kp0z3tTxtitrZ6dp2sS0XUVNrS',NULL,3),
	(4,'asddd','as','qs@qs.com','$2y$10$Az7mc5bLDQLU5DGmNzbBPO44SM72OJXMEgEN49ia5629G66BmBiZS',NULL,4);

/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
