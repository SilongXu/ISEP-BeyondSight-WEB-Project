-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 avr. 2020 à 04:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `capteur`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `NumDeCapteur` int(30) NOT NULL,
  `NomDeCapteur` varchar(64) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`NumDeCapteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tous les capteurs mesurant l''etat de utilisateur';

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`NumDeCapteur`, `NomDeCapteur`, `Description`) VALUES
(1, 'Capteur De Visuel', 'Pour tester la reaction visuel d\'utilisateur'),
(2, 'Capteur Sonore', 'Pour tester la reaction Sonore d\'utilisateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
