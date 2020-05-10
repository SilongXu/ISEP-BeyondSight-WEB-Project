-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 09 mai 2020 à 08:31
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
CREATE TABLE `categories` (
  `idCatégories` int(11) NOT NULL,
  `sujet` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
CREATE TABLE `conversations` (
  `idConversation` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `sujet` varchar(100) COLLATE utf8_bin NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
CREATE TABLE `conversationsaverifier` (
  `idConversationsAVerifier` int(11) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `sujet` varchar(100) COLLATE utf8_bin NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `idMessages` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idConversation` int(11) NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `messagesprives`
--

DROP TABLE IF EXISTS `messagesprives`;
CREATE TABLE `messagesprives` (
  `idMessagesPrives` int(11) NOT NULL,
  `texte` varchar(1000) COLLATE utf8_bin NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `idDestinataire` int(11) NOT NULL,
  `objet` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE `resultats` (
  `idResultats` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `idTest` int(11) NOT NULL,
  `capteur` varchar(45) COLLATE utf8_bin NOT NULL,
  `test` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`idTest`, `capteur`, `test`) VALUES
(1, 'Capteur cardiaque', 'Fréquence cardiaque'),
(2, 'Micro', 'Reconnaître une fréquence sonore'),
(9, 'Bouton', 'Réflexe à un stimulus sonore');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(45) COLLATE utf8_bin NOT NULL,
  `adresseMail` varchar(100) COLLATE utf8_bin NOT NULL,
  `role` varchar(45) COLLATE utf8_bin NOT NULL,
  `motDePasse` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `numeroDeTelephone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `nom`, `prenom`, `adresseMail`, `role`, `motDePasse`, `numeroDeTelephone`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@exemple.fr', 'Administrateur', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 635465768),
(2, 'Lefever', 'Charles', 'charles.lefever@isep.fr', 'Administrateur', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 646643193),
(4, 'Pruvost', 'Benoît', 'charlotchaton@hotmail.fr', '', '$2y$12$4K4SM0X05dFOyc/mWZ0aXOXLhJwrwatxWVHLfpkkejA0cUkEvb0a6', 648764566),
(5, 'De La Villardière', 'Bernard', 'bb.dlv@example.com', '', '$2y$12$.gNImlgnBCJ6wqiL4tuV/OXxIaOleQyPPppHq0Gie5zG2J55IWIGa', 683848271),
(6, 'Biniou', 'Lio', 'lio@example.com', '', '$2y$12$fDKo7tPd4PWSwJ58L1qn7Oaj2KyxgLqcOJXs9s/H/8nuN.FdG.2sC', 654535454);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCatégories`);

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`idConversation`);

--
-- Index pour la table `conversationsaverifier`
--
ALTER TABLE `conversationsaverifier`
  ADD PRIMARY KEY (`idConversationsAVerifier`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idMessages`);

--
-- Index pour la table `messagesprives`
--
ALTER TABLE `messagesprives`
  ADD PRIMARY KEY (`idMessagesPrives`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`idResultats`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`idTest`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCatégories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `idConversation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `conversationsaverifier`
--
ALTER TABLE `conversationsaverifier`
  MODIFY `idConversationsAVerifier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idMessages` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messagesprives`
--
ALTER TABLE `messagesprives`
  MODIFY `idMessagesPrives` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `idResultats` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `idTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
