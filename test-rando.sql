-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 juil. 2021 à 01:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test-rando`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_880E0D76E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `roles`, `password`) VALUES
(4, 'b.sahouli@hotmail.fr', '[]', '$2y$13$VXUxyvQ/6lFgwkfY1BShiul.DaqjtIB5TDgi4Hzz5fcPHOxVoO0Lm');

-- --------------------------------------------------------

--
-- Structure de la table `crossing_points`
--

DROP TABLE IF EXISTS `crossing_points`;
CREATE TABLE IF NOT EXISTS `crossing_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` decimal(12,8) NOT NULL,
  `lon` decimal(12,10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `difficulty`
--

DROP TABLE IF EXISTS `difficulty`;
CREATE TABLE IF NOT EXISTS `difficulty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `difficulty`
--

INSERT INTO `difficulty` (`id`, `level`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `district`
--

INSERT INTO `district` (`id`, `name_district`) VALUES
(1, 'Rhone-Alpes');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210713212333', '2021-07-13 21:25:04', 81),
('DoctrineMigrations\\Version20210713231912', '2021-07-13 23:19:43', 72),
('DoctrineMigrations\\Version20210714001802', '2021-07-14 00:18:45', 60),
('DoctrineMigrations\\Version20210714002332', '2021-07-14 00:23:52', 71),
('DoctrineMigrations\\Version20210714002810', '2021-07-14 00:28:51', 84),
('DoctrineMigrations\\Version20210714003227', '2021-07-14 00:32:39', 55),
('DoctrineMigrations\\Version20210714003532', '2021-07-14 00:35:42', 52),
('DoctrineMigrations\\Version20210714004004', '2021-07-14 00:40:32', 173),
('DoctrineMigrations\\Version20210714005050', '2021-07-14 00:51:10', 363);

-- --------------------------------------------------------

--
-- Structure de la table `start`
--

DROP TABLE IF EXISTS `start`;
CREATE TABLE IF NOT EXISTS `start` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_position` decimal(12,8) NOT NULL,
  `sec_position` decimal(12,8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `town`
--

DROP TABLE IF EXISTS `town`;
CREATE TABLE IF NOT EXISTS `town` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `town`
--

INSERT INTO `town` (`id`, `name_town`) VALUES
(1, 'Mont-d\'or');

-- --------------------------------------------------------

--
-- Structure de la table `trekking`
--

DROP TABLE IF EXISTS `trekking`;
CREATE TABLE IF NOT EXISTS `trekking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` time NOT NULL,
  `distance` decimal(6,3) NOT NULL,
  `positive_elevation` int(11) NOT NULL,
  `high_point` int(11) NOT NULL,
  `low_point` int(11) NOT NULL,
  `return_start_point` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longblob NOT NULL,
  `creator_id` int(11) NOT NULL,
  `difficulty_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `start_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39D6BCB61220EA6` (`creator_id`),
  KEY `IDX_39D6BCBFCFA9DAE` (`difficulty_id`),
  KEY `IDX_39D6BCBC54C8C93` (`type_id`),
  KEY `IDX_39D6BCBB08FA272` (`district_id`),
  KEY `IDX_39D6BCB75E23604` (`town_id`),
  KEY `IDX_39D6BCB623DF99B` (`start_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trekking_crossing_points`
--

DROP TABLE IF EXISTS `trekking_crossing_points`;
CREATE TABLE IF NOT EXISTS `trekking_crossing_points` (
  `trekking_id` int(11) NOT NULL,
  `crossing_points_id` int(11) NOT NULL,
  PRIMARY KEY (`trekking_id`,`crossing_points_id`),
  KEY `IDX_9426A2ABF30CE107` (`trekking_id`),
  KEY `IDX_9426A2ABACCF3A62` (`crossing_points_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shifting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `shifting`) VALUES
(1, 'A vélo'),
(2, 'A pied');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `trekking`
--
ALTER TABLE `trekking`
  ADD CONSTRAINT `FK_39D6BCB61220EA6` FOREIGN KEY (`creator_id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `FK_39D6BCB623DF99B` FOREIGN KEY (`start_id`) REFERENCES `start` (`id`),
  ADD CONSTRAINT `FK_39D6BCB75E23604` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`),
  ADD CONSTRAINT `FK_39D6BCBB08FA272` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `FK_39D6BCBC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `FK_39D6BCBFCFA9DAE` FOREIGN KEY (`difficulty_id`) REFERENCES `difficulty` (`id`);

--
-- Contraintes pour la table `trekking_crossing_points`
--
ALTER TABLE `trekking_crossing_points`
  ADD CONSTRAINT `FK_9426A2ABACCF3A62` FOREIGN KEY (`crossing_points_id`) REFERENCES `crossing_points` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9426A2ABF30CE107` FOREIGN KEY (`trekking_id`) REFERENCES `trekking` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
