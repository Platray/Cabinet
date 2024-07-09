-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 juil. 2024 à 17:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rdv_cabinet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `availabilities`
--

CREATE TABLE `availabilities` (
  `id` int(11) NOT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `availability_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `title`, `content`, `image`, `updated_at`) VALUES
(19, 29, 'kkkkkkkk', 'ooooooo', 'sydney4.jpg', '2024-07-08 11:46:35'),
(20, 29, 'aaazzz', 'e', NULL, '2024-07-08 11:52:48'),
(21, 29, 'arrr', 'aze', NULL, '2024-07-08 11:52:57'),
(22, 29, 'aaa', 'zzzrrr', NULL, '2024-07-08 14:23:04'),
(23, 29, 'aé\"\'', 'rr', NULL, '2024-07-08 14:23:11'),
(25, 29, 'Mon article présentation', 'Mon article présentation description', 'libre.jpeg', '2024-07-09 17:12:47');

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `book_email` varchar(30) NOT NULL,
  `date_book` datetime NOT NULL,
  `isConfirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `service_id`, `book_email`, `date_book`, `isConfirm`) VALUES
(1, 1, 'riquteste.william@gmail.com', '2024-07-09 12:00:00', 0),
(5, 2, 'riquteste.william@gmail.com', '2024-07-02 14:19:00', 1),
(25, 2, 'riquteste.william@gmail.com', '2024-07-17 11:00:00', 0),
(26, 1, 'riquteste.william@gmail.com', '2024-07-02 09:00:00', 0),
(27, 2, 'riquteste.william@gmail.com', '2024-07-02 09:00:00', 0),
(28, 6, 'riquteste.william@gmail.com', '2024-07-04 09:30:00', 0),
(29, 6, 'riquteste.william@gmail.com', '2024-07-05 09:30:00', 1),
(30, 1, 'riquteste.william@gmail.com', '2024-07-05 09:30:00', 0),
(31, 6, 'riquefinal@gmail.com', '2024-07-02 15:00:00', 1),
(33, 7, 'riquteste.william@gmail.com', '2024-07-02 10:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `open`
--

CREATE TABLE `open` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL,
  `isOpen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `open`
--

INSERT INTO `open` (`id`, `day`, `open`, `close`, `isOpen`) VALUES
(1, 'lundi', '09:00:00', '18:00:00', 0),
(2, 'mardi', '09:00:00', '17:00:00', 1),
(3, 'mercredi', '10:00:00', '18:00:00', 1),
(4, 'jeudi', '09:00:00', '18:00:00', 1),
(5, 'vendredi', '09:00:00', '18:00:00', 1),
(6, 'samedi', '09:00:00', '18:00:00', 0),
(7, 'dimanche', '09:00:00', '18:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`service_id`, `title`, `description`) VALUES
(1, 'Général', 'Médecine générale2'),
(2, 'Bactériologique', 'Analyse de sang, prise de sang, tests PCR'),
(6, 'Dents', 'Soins dentaire'),
(7, 'Chirurgie', 'Chirurgie et autres');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `birthday`, `password`, `isAdmin`, `createdAt`) VALUES
(29, 'Rique', 'William', 'rique.william@gmail.com', '1996-08-03', '$2y$10$faHKBAUvXpWLC7GUqWZ0weJOBHirsb0GE9tFpwI84qv/y1no7Qk3a', 1, '2024-07-05 14:33:45'),
(30, 'RiqueTest', 'WilliamTest', 'riquteste.william@gmail.com', '2012-01-01', '$2y$10$4CsU5kwvL3LNrA.gBZEaSONnoOp2Rd3ft6Mb0UJe08vZcc9xh77r6', 0, '2024-07-05 14:33:59'),
(32, 'riquevideo', 'Williamvideo', 'riquevideo@gmail.com', '2001-12-01', '$2y$10$q4kYxPlSU8nmaUFhiIpVgubjgPIUZdI4/DxoV6Ou6F0xRq27C8mJa', 1, '2024-07-09 17:09:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Index pour la table `open`
--
ALTER TABLE `open`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `open`
--
ALTER TABLE `open`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
