-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 20 nov. 2017 à 16:11
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mini-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `table article`
--

CREATE TABLE `table_article` (
  `id_article` tinyint(4) NOT NULL,
  `title` varchar(20) NOT NULL,
  `auteur` varchar(20) NOT NULL,
  `text` varchar(50) NOT NULL,
  `data_creation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `data_update` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `preview_image` varchar(500) NOT NULL,
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table categorie`
--

CREATE TABLE `table_categorie` (
  `id_categorie` tinyint(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table categorie`
--

INSERT INTO `table_categorie` (`id_categorie`, `name`) VALUES
(1, '7%'),
(2, '15%'),
(3, '20%'),
(4, '70%'),
(5, '+70%');

-- --------------------------------------------------------

--
-- Structure de la table `table user`
--

CREATE TABLE `table_user` (
  `id_user` tinyint(4) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table user`
--

INSERT INTO `table_user` (`id_user`, `pseudo`, `password`, `mail`) VALUES
(1, 'CLucie', '1b4cc0b0b2a45001d55f12492403d7cb', 'l.combrissson@aformac-vichy.fr'),
(2, 'Nico', '1b4cc0b0b2a45001d55f12492403d7cb', 'n.benoukaci@aformac-vichy.fr'),
(3, 'Aurel', '1b4cc0b0b2a45001d55f12492403d7cb', 'a.lecoq@aformac-vichy.fr'),
(4, 'Fred', '1b4cc0b0b2a45001d55f12492403d7cb', 'f.riesen@aformac-vichy.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `table article`
--
ALTER TABLE `table_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `table categorie`
--
ALTER TABLE `table_categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `table user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `table article`
--
ALTER TABLE `table_article`
  MODIFY `id_article` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `table categorie`
--
ALTER TABLE `table_categorie`
  MODIFY `id_categorie` tinyint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `table user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
