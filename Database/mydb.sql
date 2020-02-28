-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 28 fév. 2020 à 15:12
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
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorieproduit`
--

DROP TABLE IF EXISTS `categorieproduit`;
CREATE TABLE IF NOT EXISTS `categorieproduit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_UNIQUE` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorieproduit`
--

INSERT INTO `categorieproduit` (`id`, `nom`) VALUES
(1, 'cat 1'),
(2, 'cat 2'),
(3, 'cat 3'),
(5, 'chaussures'),
(6, 'vetements');

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

DROP TABLE IF EXISTS `chaussures`;
CREATE TABLE IF NOT EXISTS `chaussures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `pointure` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idArticle` (`idArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chaussures`
--

INSERT INTO `chaussures` (`id`, `idArticle`, `pointure`) VALUES
(1, 20, 38),
(2, 20, 39),
(3, 20, 40),
(4, 20, 41),
(5, 20, 42),
(6, 20, 43),
(7, 20, 44),
(8, 20, 45),
(9, 20, 46),
(10, 21, 38),
(11, 21, 39),
(12, 21, 40),
(13, 21, 41),
(14, 21, 42),
(15, 21, 43),
(16, 21, 44),
(17, 21, 45),
(18, 21, 46),
(19, 22, 38),
(20, 22, 39),
(21, 22, 40),
(22, 22, 41),
(23, 22, 42),
(24, 22, 43),
(25, 22, 44),
(26, 22, 45),
(27, 22, 46);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` int(11) UNSIGNED NOT NULL,
  `ville` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`, `cp`, `ville`) VALUES
(1, 'Norris', 'Chuck', 'adresse de chuck norris', 38000, 'Grenoble'),
(2, 'Theron', 'Charlize', 'adresse de charlize theron', 38000, 'Grenoble'),
(5, 'Gosling', 'Ryan', 'adresse ryan gosling', 38000, 'Grenoble'),
(27, 'Bourgeois', 'Alexis', '253 rue henry ding', 38000, 'Grenoble'),
(28, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(33, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(34, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(35, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(36, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(37, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(38, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(39, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(40, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles'),
(41, 'Bourgeois', 'Alexis', '253 rue henry ding', 38000, 'Grenoble'),
(42, 'Bourgeois', 'Alexis', '253 rue henry ding', 38000, 'Grenoble'),
(43, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(44, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(45, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(46, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(47, 'Soltobaeva', 'Sabina', '253 rue henry ding', 38000, 'Grenoble'),
(48, 'Inebria', 'Florent', 'Adresse', 38000, 'Grenoble'),
(49, 'Aouane', 'Malik', 'Une adresse', 38130, 'Echirolles');

-- --------------------------------------------------------

--
-- Structure de la table `cmdproduit`
--

DROP TABLE IF EXISTS `cmdproduit`;
CREATE TABLE IF NOT EXISTS `cmdproduit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(10) UNSIGNED NOT NULL,
  `idProduit` int(10) UNSIGNED NOT NULL,
  `idCommande` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cmdProduit_produit_idx` (`idProduit`),
  KEY `fk_cmdProduit_commande_idx` (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cmdproduit`
--

INSERT INTO `cmdproduit` (`id`, `quantite`, `idProduit`, `idCommande`) VALUES
(1, 1, 1, 1),
(2, 2, 4, 1),
(3, 1, 11, 2),
(4, 2, 10, 2),
(5, 1, 1, 3),
(6, 1, 9, 3),
(7, 1, 11, 4),
(8, 2, 4, 4),
(9, 1, 1, 5),
(10, 1, 13, 5),
(20, 1, 12, 6),
(22, 1, 10, 6),
(23, 1, 2, 6),
(70, 1, 1, 31),
(71, 4, 2, 31),
(72, 1, 3, 31),
(73, 1, 4, 31),
(74, 1, 5, 31),
(75, 1, 1, 32),
(76, 4, 2, 32),
(77, 1, 3, 32),
(78, 1, 4, 32),
(79, 1, 5, 32),
(80, 1, 1, 33),
(81, 4, 2, 33),
(82, 1, 3, 33),
(83, 1, 4, 33),
(84, 1, 5, 33),
(85, 1, 1, 34),
(86, 4, 2, 34),
(87, 1, 3, 34),
(88, 1, 4, 34),
(89, 1, 5, 34),
(90, 1, 1, 35),
(91, 4, 2, 35),
(92, 1, 3, 35),
(93, 1, 4, 35),
(94, 1, 5, 35),
(95, 1, 1, 36),
(96, 4, 2, 36),
(97, 1, 3, 36),
(98, 1, 4, 36),
(99, 1, 5, 36),
(105, 1, 1, 38),
(106, 4, 2, 38),
(107, 1, 3, 38),
(108, 1, 4, 38),
(109, 1, 5, 38),
(110, 1, 1, 39),
(111, 4, 2, 39),
(112, 1, 3, 39),
(113, 1, 4, 39),
(114, 1, 5, 39),
(115, 1, 2, 40),
(116, 1, 5, 40),
(117, 1, 9, 40),
(118, 1, 12, 40),
(119, 1, 23, 40),
(120, 1, 2, 41),
(121, 1, 5, 41),
(122, 1, 9, 41),
(123, 1, 12, 41),
(124, 1, 23, 41),
(125, 1, 2, 42),
(126, 8, 5, 42),
(127, 1, 9, 42),
(128, 4, 12, 42),
(129, 1, 23, 42),
(130, 1, 2, 43),
(131, 8, 5, 43),
(132, 1, 9, 43),
(133, 4, 12, 43),
(134, 1, 23, 43),
(135, 1, 2, 44),
(136, 8, 5, 44),
(137, 1, 9, 44),
(138, 4, 12, 44),
(139, 1, 23, 44),
(140, 1, 2, 45),
(141, 8, 5, 45),
(142, 1, 9, 45),
(143, 4, 12, 45),
(144, 1, 23, 45),
(145, 4, 2, 46),
(146, 11, 5, 46),
(147, 4, 9, 46),
(148, 4, 12, 46),
(149, 1, 23, 46),
(150, 3, 1, 46),
(151, 3, 4, 46),
(152, 3, 6, 46),
(153, 3, 8, 46),
(154, 3, 13, 46),
(155, 3, 21, 46),
(156, 3, 22, 46),
(157, 3, 25, 46),
(158, 5, 1, 47),
(159, 35, 2, 47),
(160, 5, 3, 47),
(161, 8, 6, 47),
(162, 5, 1, 48),
(163, 5, 3, 48),
(164, 5, 4, 48),
(165, 5, 10, 48),
(166, 5, 11, 48),
(167, 5, 20, 48);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `montant` int(10) UNSIGNED NOT NULL,
  `idClient` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `commande` (`commande`) USING BTREE,
  KEY `fk_commande_client1_idx` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `commande`, `date`, `montant`, `idClient`) VALUES
(1, '123456789a', '2020-02-14', 12000, 1),
(2, '123456789b', '2020-02-12', 60000, 1),
(3, '123456789c', '2019-12-08', 15000, 2),
(4, '123456789d', '2020-02-12', 52000, 2),
(5, '123456789e', '2020-02-14', 60000, 2),
(6, '123456879f', '2020-02-14', 65000, 5),
(27, '045c8e697f', '2020-02-19', 160000, 27),
(31, '12065fbd22', '2020-02-25', 53000, 33),
(32, 'f38a959d0f', '2020-02-25', 53000, 34),
(33, 'ffdbb2ec19', '2020-02-25', 53000, 35),
(34, '57fdede9b6', '2020-02-25', 53000, 36),
(35, 'b2dbda3c4c', '2020-02-25', 53000, 37),
(36, 'fa293045a1', '2020-02-25', 53000, 38),
(38, '0170386d6f', '2020-02-25', 53000, 39),
(39, '55daede88d', '2020-02-25', 53000, 40),
(40, '3e6bf85914', '2020-02-25', 71000, 41),
(41, '47baa2903e', '2020-02-25', 71000, 42),
(42, 'bdf6bfe710', '2020-02-25', 228000, 43),
(43, '32698cebdb', '2020-02-25', 228000, 44),
(44, '02844dee44', '2020-02-25', 228000, 45),
(45, '32dd67693a', '2020-02-25', 228000, 46),
(46, 'c02699e3ac', '2020-02-25', 558900, 47),
(47, 'a6f81f2c75', '2020-02-25', 413000, 48),
(48, 'e998a0f3ba', '2020-02-25', 385000, 49);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `nomImage` varchar(45) DEFAULT NULL,
  `poids` int(10) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `dispo` tinyint(1) NOT NULL,
  `prix` int(10) UNSIGNED NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produit_categorieProduit1_idx` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `nomImage`, `poids`, `stock`, `dispo`, `prix`, `idCategorie`) VALUES
(1, 'articleA1', 'description article A 1', 'articleA1.jpg', 1000, 0, 1, 10000, 1),
(2, 'articleA2', 'description article A 2', 'articleA2.jpg', 1000, 0, 1, 10000, 1),
(3, 'articleB1', 'description article B 1', 'articleB1.jpg', 500, 0, 1, 1000, 1),
(4, 'articleB2', 'description article B 2', 'articleB2.jpg', 500, 84, 1, 1000, 1),
(5, 'articleC1', 'description article C 1', 'articleC1.jpg', 500, 0, 0, 1000, 1),
(6, 'articleC2', 'description article C 2', 'articleC2.jpg', 500, 0, 0, 1000, 1),
(7, 'articleD1', 'description article D 1', 'articleD1.jpg', 500, 0, 1, 1300, 2),
(8, 'articleD2', 'description article D 2', 'articleD2.jpg', 500, 0, 1, 1300, 2),
(9, 'articleE1', 'description article E 1', 'articleE1.jpg', 1200, 0, 1, 5000, 2),
(10, 'articleE2', 'description article E 2', 'articleE2.jpg', 1200, 0, 1, 5000, 2),
(11, 'articleF1', 'description article F 1', 'articleF1.jpg', 1200, 0, 1, 50000, 3),
(12, 'articleF2', 'description article F 2', 'articleF2.jpg', 1200, 0, 1, 50000, 3),
(13, 'articleF3', 'description article F 3', 'articleF3.jpg', 1200, 0, 1, 50000, 3),
(20, 'Nike', 'Chaussures Nike', 'nike.jpg', 500, 5, 1, 10000, 5),
(21, 'Adidas', 'Chaussures Adidas', 'adidas.jpg', 500, 2, 1, 10000, 5),
(22, 'Timberland', 'Chaussures Timberland', 'timberland.jpg', 800, 5, 1, 15000, 5),
(23, 'Tshirt', 'Un t-shirt', 't-shirt.jpg', 100, 16, 1, 5000, 6),
(24, 'Pull', 'Un pull', 'pull.jpg', 200, 10, 1, 7500, 6),
(25, 'Pantalon', 'Un pantalon', 'pantalon.jpg', 450, 5, 1, 6000, 6);

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

DROP TABLE IF EXISTS `vetements`;
CREATE TABLE IF NOT EXISTS `vetements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `taille` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produit` (`idArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vetements`
--

INSERT INTO `vetements` (`id`, `idArticle`, `taille`) VALUES
(1, 23, 'xs'),
(2, 23, 's'),
(3, 23, 'm'),
(4, 23, 'l'),
(5, 23, 'xl'),
(6, 24, 'xs'),
(7, 24, 's'),
(8, 24, 'm'),
(9, 24, 'l'),
(10, 24, 'xl'),
(11, 25, 'xs'),
(12, 25, 's'),
(13, 25, 'm'),
(14, 25, 'l'),
(15, 25, 'xl');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cmdproduit`
--
ALTER TABLE `cmdproduit`
  ADD CONSTRAINT `fk_cmdProduit_commande_idx` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cmdProduit_produit` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_commande_client1` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_produit_categorieProduit1` FOREIGN KEY (`idCategorie`) REFERENCES `categorieproduit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
