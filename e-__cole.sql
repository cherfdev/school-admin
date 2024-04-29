-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 mars 2024 à 11:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-école`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `ID_administrateur` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse_email` varchar(100) DEFAULT NULL,
  `Mot_de_passe` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_administrateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `ID_classes` int NOT NULL AUTO_INCREMENT,
  `ID_enseignant` int DEFAULT NULL,
  `ID_matières` int DEFAULT NULL,
  `Nom_classes` varchar(100) DEFAULT NULL,
  `Capacite` int DEFAULT NULL,
  PRIMARY KEY (`ID_classes`),
  KEY `ID_enseignant` (`ID_enseignant`),
  KEY `ID_matières` (`ID_matières`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `ID_eleve` int DEFAULT NULL,
  `Nom_matières` varchar(100) DEFAULT NULL,
  `Nom_classes` varchar(100) DEFAULT NULL,
  `Interro` int DEFAULT NULL,
  `Devoir` int DEFAULT NULL,
  KEY `ID_eleve` (`ID_eleve`),
  KEY `Nom_matières` (`Nom_matières`),
  KEY `Nom_classes` (`Nom_classes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `ID_eleve` int NOT NULL AUTO_INCREMENT,
  `ID_enseignant` int DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse_email` varchar(100) DEFAULT NULL,
  `Mot_de_passe` varchar(100) DEFAULT NULL,
  `Nom_classes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_eleve`),
  KEY `ID_enseignant` (`ID_enseignant`),
  KEY `Nom_classes` (`Nom_classes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `ID_enseignant` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse_email` varchar(100) DEFAULT NULL,
  `Mot_de_passe` varchar(100) DEFAULT NULL,
  `Matière` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_enseignant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE IF NOT EXISTS `evaluations` (
  `ID_evaluation` int DEFAULT NULL,
  `ID_matière` int DEFAULT NULL,
  `TypeEvaluation` text,
  `Coefficient` int DEFAULT NULL,
  KEY `ID_matière` (`ID_matière`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matières`
--

DROP TABLE IF EXISTS `matières`;
CREATE TABLE IF NOT EXISTS `matières` (
  `ID_matières` int NOT NULL AUTO_INCREMENT,
  `Nom_matières` varchar(100) DEFAULT NULL,
  `ID_enseignant` int DEFAULT NULL,
  `ID_classes` int DEFAULT NULL,
  `Horaire` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_matières`),
  KEY `ID_enseignant` (`ID_enseignant`),
  KEY `ID_classes` (`ID_classes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `ID_note` int NOT NULL AUTO_INCREMENT,
  `ID_eleve` int DEFAULT NULL,
  `ID_matières` int DEFAULT NULL,
  `Note` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`ID_note`),
  KEY `ID_eleve` (`ID_eleve`),
  KEY `ID_matières` (`ID_matières`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
