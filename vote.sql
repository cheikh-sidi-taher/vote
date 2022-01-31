-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 10 Janvier 2015 à 01:55
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `vote`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `idCandidat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idPoste` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idCandidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=19 ;

--
-- Contenu de la table `candidat`
--

INSERT INTO `candidat` (`idCandidat`, `nom`, `idPoste`) VALUES
(1, 'Neutre', '1'),
(2, 'Neutre', '2'),
(3, 'Neziha Mint Mohamed Said', '1'),
(4, 'Ebeti', '2'),
(5, 'Mina', '3'),
(6, 'Neutre', '4'),
(7, 'Neutre', '5'),
(8, 'Neutre', '6'),
(9, 'Neutre', '7'),
(10, 'Neutre2', '8'),
(13, 'Neutre', '3'),
(14, 'Neutre', '4'),
(15, 'Neutre', '5'),
(16, 'Neutre', '6'),
(17, 'Neutre', '7'),
(18, 'Neutre', '8');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE IF NOT EXISTS `poste` (
  `idPoste` int(11) NOT NULL AUTO_INCREMENT,
  `libPoste` varchar(50) NOT NULL,
  PRIMARY KEY (`idPoste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `poste`
--

INSERT INTO `poste` (`idPoste`, `libPoste`) VALUES
(1, 'Secretaire General'),
(2, 'Vice Secretaire General'),
(3, 'Communication'),
(4, 'Culture'),
(5, 'Finance'),
(6, 'Predication'),
(7, 'relalation exrt'),
(8, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `motpasse` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`identifiant`, `motpasse`, `type`, `login`) VALUES
(1, 'admin2015', 0, 'admin'),
(2, 'vote2015', 1, 'vote');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `idVote` int(11) NOT NULL AUTO_INCREMENT,
  `idCandidat` int(11) NOT NULL,
  PRIMARY KEY (`idVote`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `vote`
--

