-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mars 2021 à 09:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `perso_forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_cat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_p` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_u` int(10) unsigned NOT NULL,
  `id_t` int(10) unsigned NOT NULL,
  `contenu` text,
  `date_post` datetime DEFAULT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_u` (`id_u`),
  KEY `id_t` (`id_t`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id_t` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `contenu` text,
  `id_cat` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_t`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `date_last_co` datetime DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `pseudo`, `mdp`, `lvl`, `email`, `date_inscription`, `date_last_co`) VALUES
(1, 'Admin95', '4ce5b0a7e9e038c3682d52788e73f7ad56c0a704', 3, 'xavier.delprat95@gmail.com', '2021-03-04 14:16:00', '2021-03-04 14:16:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_t`) REFERENCES `topic` (`id_t`);

--
-- Contraintes pour la table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
