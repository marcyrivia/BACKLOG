-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 14 mai 2024 à 11:25
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
-- Base de données : `games`
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
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int NOT NULL,
  `genre_name` varchar(50) DEFAULT NULL
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
-- Structure de la table `le_jeu_a_un_genre`
--

CREATE TABLE `le_jeu_a_un_genre` (
  `games_id` int NOT NULL,
  `genre_id` int NOT NULL
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
-- Structure de la table `l_user_a_une_review`
--

CREATE TABLE `l_user_a_une_review` (
  `user_id` int NOT NULL,
  `review_id` int NOT NULL
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
  `studio_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `Note_id` int NOT NULL,
  `Note_score` varchar(50) DEFAULT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`Note_id`, `Note_score`, `user_id`) VALUES
(1, '1', 1),
(2, '3', 1),
(3, '3', 1),
(4, '5', 1),
(5, '4', 1),
(6, '5', 1),
(7, '4', 1),
(8, '4', 1),
(9, '5', 1),
(10, '3', 1),
(11, '3', 1),
(12, '4', 1),
(13, '5', 1),
(14, '4', 1),
(15, '3', 1),
(16, '3', 1),
(17, '3', 1),
(18, '3', 1),
(19, '3', 1),
(20, '3', 1),
(21, '3', 1),
(22, '2', 1),
(23, '2', 1),
(24, '2', 1),
(25, '3', 1),
(26, '1', 1),
(27, '1', 1),
(28, '2', 1),
(29, '2', 1),
(30, '2', 1),
(31, '2', 1),
(32, '3', 1),
(33, '3', 1),
(34, '3', 1),
(35, '4', 1),
(36, '1', 1),
(37, '5', 1),
(38, '3', 1),
(39, '4!', 1),
(40, '4!', 1),
(41, '4!', 1),
(42, '4!', 1),
(43, '5', 1),
(44, '5', 1);

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
-- Structure de la table `un_jeu_a_une_review`
--

CREATE TABLE `un_jeu_a_une_review` (
  `games_id` int NOT NULL,
  `review_id` int NOT NULL
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
(1, 1, 'Top', 'azaezae@gmail.com', '$2y$10$BeXs/7Uv/fYWcwZHZAUoJ.ICDGxNi35Rj47Cx2cfTnloVqyxjb/zS', '                                             my discvoveries of the year dumbass', 'Avatar_TheLastAirbender_Cartoon_Series_TophBeifong.jpg', 11, NULL, NULL, NULL),
(2, 1, 'popo', 'popo@gmail.com', '$2y$10$fifCZmmIgW0kq0ro2jbSae/u4Q2gVU99HDM7swzlLTUVaRIgRUFMm', NULL, 'default.png', NULL, NULL, NULL, NULL),
(3, 1, 'momo', 'momo@gmail.com', '$2y$10$79SuPDioCGRs01x0t75.luBA6OjQnxJ2dhPi6GwM4ahh.e1.IiwFC', NULL, 'default.png', NULL, NULL, NULL, NULL);

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
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Index pour la table `jeu_a_une_note`
--
ALTER TABLE `jeu_a_une_note`
  ADD PRIMARY KEY (`games_id`,`Note_id`),
  ADD KEY `Note_id` (`Note_id`);

--
-- Index pour la table `le_jeu_a_un_genre`
--
ALTER TABLE `le_jeu_a_un_genre`
  ADD PRIMARY KEY (`games_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Index pour la table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Index pour la table `l_user_a_une_review`
--
ALTER TABLE `l_user_a_une_review`
  ADD PRIMARY KEY (`user_id`,`review_id`),
  ADD KEY `review_id` (`review_id`);

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
-- Index pour la table `un_jeu_a_une_review`
--
ALTER TABLE `un_jeu_a_une_review`
  ADD PRIMARY KEY (`games_id`,`review_id`),
  ADD KEY `review_id` (`review_id`);

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
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `Note_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Contraintes pour la table `le_jeu_a_un_genre`
--
ALTER TABLE `le_jeu_a_un_genre`
  ADD CONSTRAINT `le_jeu_a_un_genre_ibfk_1` FOREIGN KEY (`games_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `le_jeu_a_un_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Contraintes pour la table `l_user_a_une_review`
--
ALTER TABLE `l_user_a_une_review`
  ADD CONSTRAINT `l_user_a_une_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`),
  ADD CONSTRAINT `l_user_a_une_review_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`);

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
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userprofil` (`user_id`);

--
-- Contraintes pour la table `un_jeu_a_une_review`
--
ALTER TABLE `un_jeu_a_une_review`
  ADD CONSTRAINT `un_jeu_a_une_review_ibfk_1` FOREIGN KEY (`games_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `un_jeu_a_une_review_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`);

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
