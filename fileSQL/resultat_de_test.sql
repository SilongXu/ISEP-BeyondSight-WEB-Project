-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 avr. 2020 à 04:22
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
-- Structure de la table `resultat_de_test`
--

DROP TABLE IF EXISTS `resultat_de_test`;
CREATE TABLE IF NOT EXISTS `resultat_de_test` (
  `NumDeUtilisateur` int(16) NOT NULL,
  `NomDeUtilisateur` varchar(32) NOT NULL,
  `ResultatTemperature` float NOT NULL,
  `ResultatFreCardiaque` int(16) NOT NULL,
  `ResultatVisuel` float NOT NULL,
  `ResultatSonore` float NOT NULL,
  `Proposition` text NOT NULL,
  PRIMARY KEY (`NumDeUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat_de_test`
--

INSERT INTO `resultat_de_test` (`NumDeUtilisateur`, `NomDeUtilisateur`, `ResultatTemperature`, `ResultatFreCardiaque`, `ResultatVisuel`, `ResultatSonore`, `Proposition`) VALUES
(1, 'Dupont', 38.6, 72, 2.1, 2.6, 'Aretter de veiller tard');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
