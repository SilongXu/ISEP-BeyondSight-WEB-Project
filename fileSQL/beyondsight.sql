-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 26 mai 2020 à 13:14
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
-- Base de données :  `beyondsight`
--

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
  `objet` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idMessagesPrives`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `messagesprives`
--

INSERT INTO `messagesprives` (`idMessagesPrives`, `texte`, `idAuteur`, `idDestinataire`, `objet`) VALUES
(1, 'df', 6, 5, 'dfd'),
(2, 'Texte', 8, 7, 'Object'),
(3, 'Texte', 9, 8, 'object');

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
  `idTest` int(11) NOT NULL AUTO_INCREMENT,
  `capteur` varchar(45) COLLATE utf8_bin NOT NULL,
  `test` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`idTest`, `capteur`, `test`) VALUES
(13, 'capteur visuel', 'visuel'),
(14, 'capteur visuel', 'visuel'),
(9, 'Bouton', 'Réflexe à un stimulus sonore'),
(12, 'cateur visuel', 'visuel');

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
  `role` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `motDePasse` varchar(255) COLLATE utf8_bin NOT NULL,
  `numeroDeTelephone` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateurs`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `nom`, `prenom`, `adresseMail`, `role`, `motDePasse`, `numeroDeTelephone`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@exemple.fr', 'Administrateur', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 635465768),
(2, 'Lefever', 'Charles', 'charles.lefever@isep.fr', 'Administrateur', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 646643193),
(4, 'Pruvost', 'Benoît', 'charlotchaton@hotmail.fr', '', '$2y$12$4K4SM0X05dFOyc/mWZ0aXOXLhJwrwatxWVHLfpkkejA0cUkEvb0a6', 648764566),
(5, 'De La Villardière', 'Bernard', 'bb.dlv@example.com', '', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 683848271),
(6, 'Biniou', 'Lio', 'lio@example.com', '', '$2y$12$fDKo7tPd4PWSwJ58L1qn7Oaj2KyxgLqcOJXs9s/H/8nuN.FdG.2sC', 654535454),
(7, 'long', 'long', '645645@qq.com', NULL, '1234', 654124544),
(8, 'Wu', 'Max', 'max.wu@isep.fr', NULL, '1234', 545454545),
(9, 'louis', 'pierre', '94125131@qq.com', NULL, '1234', 75451254);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
