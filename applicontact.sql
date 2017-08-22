-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 22 Juillet 2017 à 13:39
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `applicontact`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `entreprise` varchar(25) NOT NULL,
  `tel` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `fonction`, `entreprise`, `tel`, `image`) VALUES
(34, 'sofav   ', 'modou', 'dkjj', 'ik', 87665444, '716958.jpg'),
(2, 'sophi ', 'diouf', 'architecte', 'doklj', 330982134, '311450.jpg'),
(4, 'bob', 'bobexample', 'bobexamcom', 'bobe.com', 0, ''),
(6, 'bob ', 'bobexample', 'bobexamcom', 'bobe.com', 0, '57736.jpg'),
(7, 'fg', 'tg', 'tg', 'zat', 24355, ''),
(8, 'fatou ', 'diouf', 'admin', 'dg', 186766675, '228220.jpg'),
(21, 'hi ', 'fh', 'gffgh', 'v', 2345687, '405990.jpg'),
(10, 'diop', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(12, 'diouiioo', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(13, 'diop ', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(14, 'diop', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(37, 'jjhh', 'fgg', 'gg', 'ff', 0, ''),
(36, 'jjhh ', 'fgg', 'gg', 'ff', 0, '515744.jpg'),
(18, 'diop', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(19, 'diop', 'mouhamed', 'admin', 'elton', 2147483647, ''),
(20, 'vav', 'rid', 'dkhj', 'dghu', 12456644, ''),
(33, 'FGFG ', 'fghgh', 'fggg', 'fghg', 335, '502848.jpg'),
(38, 'gjhyju', 'bhh', 'hj', 'hh', 579, '653240.'),
(39, 'tojkk', 'fff', 'hty', 'yu', 77657579, '532725.jpg'),
(40, 'tojkk', 'fff', 'hty', 'yu', 77657579, '253859.jpg'),
(41, 'tojkk', 'fff', 'hty', 'yu', 77657579, '916984.jpg'),
(42, 'ghkjkllk', 'njk;', 'vhhkl', 'fhkl', 2147483647, '502634.jpg'),
(43, 'ghkjkllk', 'njk;', 'vhhkl', 'fhkl', 2147483647, '990793.jpg'),
(44, 'ghkjkllk', 'njk;', 'vhhkl', 'fhkl', 2147483647, '511323.jpg'),
(45, 'bily  ', 'njk', 'vhhkl', 'fhkl', 2147483647, ''),
(46, 'fatoutou ', 'diop', 'mari', 'kkj', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
