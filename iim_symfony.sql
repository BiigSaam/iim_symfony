-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 juin 2025 à 21:28
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iim_symfony`
--
CREATE DATABASE IF NOT EXISTS `iim_symfony` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `iim_symfony`;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250611101635', '2025-06-11 10:17:03', 301),
('DoctrineMigrations\\Version20250611181458', '2025-06-11 18:15:07', 184);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(150) NOT NULL,
  `label` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_BF5476CAA76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `type`, `label`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Compte bloqué', 'Votre compte a été désactivé le 14/06/2025 à 20:40', 2, '2025-06-14 20:40:13', '2025-06-14 20:40:13'),
(2, 'Achat', 'Achat effectué par Angel pour un total de 65 points.', 3, '2025-06-14 21:12:49', '2025-06-14 21:12:49'),
(3, 'Modification produit', 'Modification du produit : Toupie Beyblade - Fang Leone', 1, '2025-06-14 22:04:59', '2025-06-14 22:04:59');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` int NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` longtext,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC27A76ED395` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `category`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Test entretien', 265, 'entretien', 'Produit à tester avant de vendre ! Attention car produit pour entretien de la maison !', 1, '2025-06-12 20:14:48', '2025-06-12 20:14:48'),
(2, 'Toupie Beyblade - Fang Leone', 100, 'Jouet', 'Toupie Beybla Metal Fury Fang Leone, appartenant à Kyoya', 1, '2025-06-14 12:40:36', '2025-06-14 22:04:59');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` json NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `points` int NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `nom`, `prenom`, `points`, `actif`, `created_at`, `updated_at`) VALUES
(1, 'absamad938@gmail.com', '$2y$13$x3eOeI5R.rChy2l0txyDPuDqswb/qWiK6Eiipmrr7UmF/.H7ACitG', '[\"ROLE_ADMIN\"]', 'Abdul', 'Samad', 1670, 1, '2025-06-12 20:11:53', '2025-06-14 19:59:45'),
(2, 'jean.dujardinerie@gmail.com', '$2y$13$rE3kDRX9EfPpp9Nt1g4kduXH9ndgTHgARffIqLWPThEejupo5Umme', '[\"ROLE_USER\"]', 'Dujardin', 'Jean', 500, 0, '2025-06-13 15:56:39', '2025-06-14 19:29:20'),
(3, 'michael.angel@yahoo.fr', '$2y$13$loCj4VhHMgW6TgV8o2gYgeELPBIMvgmlauTEgdbuS6kZutXgiS2m.', '[\"ROLE_ADMIN\"]', 'Angel', 'Michael', 935, 1, '2025-06-14 21:04:51', '2025-06-14 21:12:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
