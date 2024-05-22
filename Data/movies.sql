-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 22 mai 2024 à 17:49
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movies`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_key` varchar(14) DEFAULT NULL,
  `admin_pseudo` varchar(50) DEFAULT NULL,
  `admin_lastname` varchar(50) DEFAULT NULL,
  `admin_firstname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jeu_a_une_note`
--

CREATE TABLE `jeu_a_une_note` (
  `games_id` int NOT NULL,
  `Note_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `list`
--

CREATE TABLE `list` (
  `list_id` int NOT NULL,
  `list_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `momo`
--

CREATE TABLE `momo` (
  `genre_id` int NOT NULL,
  `genre_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int NOT NULL,
  `movie_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movie_release` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movie_synopsis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `studio_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_release`, `movie_synopsis`, `studio_id`) VALUES
(1, NULL, NULL, NULL, NULL),
(1895, NULL, NULL, NULL, NULL),
(40096, NULL, NULL, NULL, NULL),
(438631, NULL, NULL, NULL, NULL),
(634492, NULL, NULL, NULL, NULL),
(653346, NULL, NULL, NULL, NULL),
(786892, NULL, NULL, NULL, NULL),
(823464, NULL, NULL, NULL, NULL),
(1011985, NULL, NULL, NULL, NULL),
(1022789, NULL, NULL, NULL, NULL),
(1062807, NULL, NULL, NULL, NULL),
(1087388, NULL, NULL, NULL, NULL),
(1096197, NULL, NULL, NULL, NULL),
(1105407, NULL, NULL, NULL, NULL),
(1219685, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `Note_id` int NOT NULL,
  `Note_score` varchar(50) DEFAULT NULL,
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`Note_id`, `Note_score`, `user_id`, `movie_id`) VALUES
(1, '1', 1, 0),
(2, '3', 1, 0),
(3, '3', 1, 0),
(4, '5', 1, 0),
(5, '4', 1, 0),
(6, '5', 1, 0),
(7, '4', 1, 0),
(8, '4', 1, 0),
(9, '5', 1, 0),
(10, '3', 1, 0),
(11, '3', 1, 0),
(12, '4', 1, 0),
(13, '5', 1, 0),
(14, '4', 1, 0),
(15, '3', 1, 0),
(16, '3', 1, 0),
(17, '3', 1, 0),
(18, '3', 1, 0),
(19, '3', 1, 0),
(20, '3', 1, 0),
(21, '3', 1, 0),
(22, '2', 1, 0),
(23, '2', 1, 0),
(24, '2', 1, 0),
(25, '3', 1, 0),
(26, '1', 1, 0),
(27, '1', 1, 0),
(28, '2', 1, 0),
(29, '2', 1, 0),
(30, '2', 1, 0),
(31, '2', 1, 0),
(32, '3', 1, 0),
(33, '3', 1, 0),
(34, '3', 1, 0),
(35, '4', 1, 0),
(36, '1', 1, 0),
(37, '5', 1, 0),
(38, '3', 1, 0),
(39, '4!', 1, 0),
(40, '4!', 1, 0),
(41, '4!', 1, 0),
(42, '4!', 1, 0),
(43, '5', 1, 0),
(44, '5', 1, 0),
(45, '3', 5, 0),
(46, '3', 5, 0),
(47, '3', 5, 0),
(48, '3', 5, 0),
(49, '4', 5, 0),
(50, '2', 5, 0),
(51, '5', 1, 0),
(52, '5', 1, 653346),
(53, '(index   1)', 1, 653346),
(54, '3', 1, 653346),
(55, '3', 1, 653346),
(56, '5', 1, 653346),
(57, '4', 1, 653346),
(58, '1', 1, 823464),
(59, '5', 1, 823464),
(60, '3', 1, 823464);

-- --------------------------------------------------------

--
-- Structure de la table `plateformes`
--

CREATE TABLE `plateformes` (
  `plateformes_id` int NOT NULL,
  `plateformes_name` varchar(50) DEFAULT NULL,
  `games_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `review_id` int NOT NULL,
  `review_review` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `studio`
--

CREATE TABLE `studio` (
  `studio_id` int NOT NULL,
  `studio_name` varchar(50) DEFAULT NULL,
  `studio_nationality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `userprofil`
--

CREATE TABLE `userprofil` (
  `user_id` int NOT NULL,
  `user_validate` tinyint(1) NOT NULL,
  `user_pseudo` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_descr` varchar(255) DEFAULT NULL,
  `user_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'default.png',
  `fav_movie_1` int DEFAULT NULL,
  `fav_movie_2` int DEFAULT NULL,
  `fav_movie_3` int DEFAULT NULL,
  `fav_movie_4` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `userprofil`
--

INSERT INTO `userprofil` (`user_id`, `user_validate`, `user_pseudo`, `user_email`, `user_password`, `user_descr`, `user_picture`, `fav_movie_1`, `fav_movie_2`, `fav_movie_3`, `fav_movie_4`) VALUES
(1, 1, 'YOTSUBA', 'azaezae@gmail.com', '$2y$10$BeXs/7Uv/fYWcwZHZAUoJ.ICDGxNi35Rj47Cx2cfTnloVqyxjb/zS', '                                                               my discvoveries of the year dumbass', 'b3adec320cd385cfdedd77f4475e2a1c.webp', 51739, 98631, 330459, 140607),
(2, 1, 'popo', 'popo@gmail.com', '$2y$10$fifCZmmIgW0kq0ro2jbSae/u4Q2gVU99HDM7swzlLTUVaRIgRUFMm', NULL, 'default.png', NULL, NULL, NULL, NULL),
(3, 1, 'momo', 'momo@gmail.com', '$2y$10$79SuPDioCGRs01x0t75.luBA6OjQnxJ2dhPi6GwM4ahh.e1.IiwFC', NULL, 'default.png', NULL, NULL, NULL, NULL),
(4, 1, 'azeaze', 'lolo@gmail.com', '$2y$10$4f6nUkzVyUXs1eleFikUXeHOwXzXn0XsOn729ypxmzq5Ise1KB4UK', NULL, 'default.png', NULL, NULL, NULL, NULL),
(5, 1, 'toto', 'toto@gmail.com', '$2y$10$qyn8cjCr8nMcwa5tIhh7G.zNACW6Hc3MC9ownaRAM2CHi3V18gQKy', NULL, 'default.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_a_une_liste`
--

CREATE TABLE `user_a_une_liste` (
  `user_id` int NOT NULL,
  `list_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_a_un_jeu`
--

CREATE TABLE `user_a_un_jeu` (
  `user_id` int NOT NULL,
  `games_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `jeu_a_une_note`
--
ALTER TABLE `jeu_a_une_note`
  ADD PRIMARY KEY (`games_id`,`Note_id`),
  ADD KEY `Note_id` (`Note_id`);

--
-- Index pour la table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Index pour la table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`genre_id`);

--
-- Index pour la table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`Note_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `plateformes`
--
ALTER TABLE `plateformes`
  ADD PRIMARY KEY (`plateformes_id`),
  ADD KEY `games_id` (`games_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Index pour la table `userprofil`
--
ALTER TABLE `userprofil`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_a_une_liste`
--
ALTER TABLE `user_a_une_liste`
  ADD PRIMARY KEY (`user_id`,`list_id`),
  ADD KEY `list_id` (`list_id`);

--
-- Index pour la table `user_a_un_jeu`
--
ALTER TABLE `user_a_un_jeu`
  ADD PRIMARY KEY (`user_id`,`games_id`),
  ADD KEY `games_id` (`games_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `momo`
--
ALTER TABLE `momo`
  MODIFY `genre_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1219686;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `Note_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `plateformes`
--
ALTER TABLE `plateformes`
  MODIFY `plateformes_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `userprofil`
--
ALTER TABLE `userprofil`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeu_a_une_note`
--
ALTER TABLE `jeu_a_une_note`
  ADD CONSTRAINT `jeu_a_une_note_ibfk_1` FOREIGN KEY (`games_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `jeu_a_une_note_ibfk_2` FOREIGN KEY (`Note_id`) REFERENCES `note` (`Note_id`);

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`);

--
-- Contraintes pour la table `plateformes`
--
ALTER TABLE `plateformes`
  ADD CONSTRAINT `plateformes_ibfk_1` FOREIGN KEY (`games_id`) REFERENCES `movie` (`movie_id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `user_a_une_liste`
--
ALTER TABLE `user_a_une_liste`
  ADD CONSTRAINT `user_a_une_liste_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`),
  ADD CONSTRAINT `user_a_une_liste_ibfk_2` FOREIGN KEY (`list_id`) REFERENCES `list` (`list_id`);

--
-- Contraintes pour la table `user_a_un_jeu`
--
ALTER TABLE `user_a_un_jeu`
  ADD CONSTRAINT `user_a_un_jeu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`),
  ADD CONSTRAINT `user_a_un_jeu_ibfk_2` FOREIGN KEY (`games_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
