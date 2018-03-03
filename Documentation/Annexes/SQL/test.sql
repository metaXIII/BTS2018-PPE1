-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 03 mars 2018 à 15:16
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `astuce`
--

DROP TABLE IF EXISTS `astuce`;
CREATE TABLE IF NOT EXISTS `astuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accroche` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `nombreVisite` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` text NOT NULL,
  `typeProduit` tinyint(4) NOT NULL,
  `accroche` text NOT NULL,
  `contenu` text NOT NULL,
  `misEnAvant` tinyint(4) NOT NULL DEFAULT '1',
  `ingredient1` varchar(60) NOT NULL,
  `ingredient2` varchar(60) DEFAULT NULL,
  `ingredient3` varchar(60) DEFAULT NULL,
  `ingredient4` varchar(60) DEFAULT NULL,
  `ingredient5` varchar(60) DEFAULT NULL,
  `ingredient6` varchar(60) DEFAULT NULL,
  `ingredient7` varchar(60) DEFAULT NULL,
  `ingredient8` varchar(60) DEFAULT NULL,
  `ingredient9` varchar(60) DEFAULT NULL,
  `ingredient10` varchar(60) DEFAULT NULL,
  `ingredient11` varchar(60) DEFAULT NULL,
  `ingredient12` varchar(60) DEFAULT NULL,
  `ingredient13` varchar(60) DEFAULT NULL,
  `ingredient14` varchar(60) DEFAULT NULL,
  `ingredient15` varchar(60) DEFAULT NULL,
  `ingredient16` varchar(60) DEFAULT NULL,
  `ingredient17` varchar(60) DEFAULT NULL,
  `ingredient18` varchar(60) DEFAULT NULL,
  `ingredient19` varchar(60) DEFAULT NULL,
  `ingredient20` varchar(60) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `actif` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `favori` text NOT NULL,
  `bloque` tinyint(4) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
