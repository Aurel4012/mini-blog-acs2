-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 nov. 2017 à 16:43
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
-- Structure de la table `table_article`
--

CREATE TABLE `table_article` (
  `id_article` tinyint(4) NOT NULL,
  `title` varchar(20) NOT NULL,
  `auteur` varchar(20) NOT NULL,
  `a_text` varchar(50) NOT NULL,
  `data_creation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `data_update` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `preview_image` varchar(500) NOT NULL,
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_article`
--

INSERT INTO `table_article` (`id_article`, `title`, `auteur`, `a_text`, `data_creation`, `data_update`, `preview_image`, `categorie`) VALUES
(1, 'Test', 'Aurel', 'Mon premier article', '2017-11-22 11:01:09.541990', '0000-00-00 00:00:00.000000', '../public/view/css/img/logo.png', '7%'),
(2, 'Test', 'aurel', 'test mon 1er article', '2017-11-21 12:31:00.000000', '0000-00-00 00:00:00.000000', 'img/test.jpg', '7%'),
(3, 'Nouveau titre', 'aurel', 'Mon troisieme article', '2017-11-22 13:26:26.099770', '2017-11-21 11:00:00.000000', 'img/test.jpg', '7%');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `table_article`
--
ALTER TABLE `table_article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `table_article`
--
ALTER TABLE `table_article`
  MODIFY `id_article` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
