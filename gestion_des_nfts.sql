-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 nov. 2022 à 19:25
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_des_nfts`
--

-- --------------------------------------------------------

--
-- Structure de la table `collections`
--

CREATE TABLE `collections` (
  `collection_id` int(11) NOT NULL,
  `collection_nom` varchar(30) NOT NULL,
  `collection_artist` varchar(30) NOT NULL,
  `collection_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collections`
--

INSERT INTO `collections` (`collection_id`, `collection_nom`, `collection_artist`, `collection_image`) VALUES
(24, 'AAAAAAAAAAA', 'BBBBBBBBBBBBB', 'moon-light-shine-through-window-into-islamic-mosque-interior.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `nft_nom` varchar(30) NOT NULL,
  `nft_description` varchar(200) NOT NULL,
  `nft_prix` int(11) NOT NULL,
  `nft_image` varchar(200) NOT NULL,
  `nft_collection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nft`
--

INSERT INTO `nft` (`nft_id`, `nft_nom`, `nft_description`, `nft_prix`, `nft_image`, `nft_collection_id`) VALUES
(44, 'YTREZ', 'AZERTYUZERTZERT ZERTYAZERTYazeaze azertyzert\r\n\r\n', 123, 'moon-light-shine-through-window-into-islamic-mosque-interior.jpg', 24),
(45, '1234', 'AZERTYUZERTZER TZERTYAZERTYaze azertyzert', 1234, 'download.jpg', 24),
(46, 'AZER', 'AZERTYUZERTZERT\r\nZERTYAZERTYazeaze\r\nazertyzert', 123, 'download.jpg', 24);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`collection_id`);

--
-- Index pour la table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nft_id`),
  ADD KEY `nft_relation` (`nft_collection_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `collections`
--
ALTER TABLE `collections`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `nft`
--
ALTER TABLE `nft`
  ADD CONSTRAINT `nft_relation` FOREIGN KEY (`nft_collection_id`) REFERENCES `collections` (`collection_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
