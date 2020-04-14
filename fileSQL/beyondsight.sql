-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 14 avr. 2020 à 13:16
-- Version du serveur :  8.0.18
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
-- Base de données :  `beyondsight`
--
CREATE DATABASE IF NOT EXISTS `beyondsight` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `beyondsight`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCatégories` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idCatégories`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCatégories`, `sujet`) VALUES
(1, 'Général');

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
CREATE TABLE IF NOT EXISTS `conversations` (
  `idConversation` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `sujet` varchar(100) COLLATE utf8_bin NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idConversation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `conversations`
--

INSERT INTO `conversations` (`idConversation`, `idUtilisateur`, `date`, `idCategorie`, `sujet`, `texte`) VALUES
(1, 1, '2020-04-02 09:27:12', 1, 'Règles du forum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna nunc, eleifend ac lacus ultrices, imperdiet commodo lacus. Aenean vehicula iaculis quam, id ultricies diam suscipit at. Nunc blandit et velit vitae venenatis. Curabitur eu nibh nullam.');

-- --------------------------------------------------------

--
-- Structure de la table `conversationsaverifier`
--

DROP TABLE IF EXISTS `conversationsaverifier`;
CREATE TABLE IF NOT EXISTS `conversationsaverifier` (
  `idConversationsAVerifier` int(11) NOT NULL AUTO_INCREMENT,
  `idAuteur` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `sujet` varchar(100) COLLATE utf8_bin NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idConversationsAVerifier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `idMessages` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `idConversation` int(11) NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idMessages`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `messagesprives`
--

DROP TABLE IF EXISTS `messagesprives`;
CREATE TABLE IF NOT EXISTS `messagesprives` (
  `idMessagesPrives` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `idDestinataire` int(11) NOT NULL,
  PRIMARY KEY (`idMessagesPrives`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE IF NOT EXISTS `resultats` (
  `idResultats` int(11) NOT NULL AUTO_INCREMENT,
  `test` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idResultats`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `idTest` int(11) NOT NULL,
  `capteur` varchar(45) COLLATE utf8_bin NOT NULL,
  `test` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(45) COLLATE utf8_bin NOT NULL,
  `adresseMail` varchar(100) COLLATE utf8_bin NOT NULL,
  `role` varchar(45) COLLATE utf8_bin NOT NULL,
  `motDePasse` varchar(45) COLLATE utf8_bin NOT NULL,
  `numeroDeTelephone` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateurs`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `nom`, `prenom`, `adresseMail`, `role`, `motDePasse`, `numeroDeTelephone`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@exemple.fr', 'Administrateur', 'Azerty123', 635465768);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
