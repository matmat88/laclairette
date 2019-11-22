-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 11 oct. 2019 à 11:04
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clairette`
--

-- --------------------------------------------------------

--
-- Structure de la table `imageplus`
--

CREATE TABLE `imageplus` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `titreImage` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `idMedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `imageplus`
--

INSERT INTO `imageplus` (`id`, `name`, `type`, `titreImage`, `idMedia`) VALUES
(180, 'La Gazette de la Roug n°1 compressée_Page_17.jpg', 'image/jpeg', '', 126),
(181, 'La Gazette de la Roug n°1 compressée_Page_18.jpg', 'image/jpeg', '', 126),
(182, 'La Gazette de la Roug n°1 compressée_Page_19.jpg', 'image/jpeg', '', 126),
(183, 'La Gazette de la Roug n°1 compressée_Page_22.jpg', 'image/jpeg', '', 126),
(184, 'La Gazette de la Roug n°1 compressée_Page_24.jpg', 'image/jpeg', '', 126),
(185, 'La Gazette de la Roug n°1 compressée_Page_25.jpg', 'image/jpeg', '', 126),
(186, 'La Gazette de la Roug n°1 compressée_Page_40.jpg', 'image/jpeg', '', 126),
(187, 'Gazette de la Roug\' n°2compressé_Page_08.jpg', 'image/jpeg', '', 127),
(188, 'Gazette de la Roug\' n°2compressé_Page_12.jpg', 'image/jpeg', '', 127),
(189, 'Gazette de la Roug\' n°2compressé_Page_14.jpg', 'image/jpeg', '', 127),
(190, 'Gazette de la Roug\' n°2compressé_Page_17.jpg', 'image/jpeg', '', 127),
(191, 'Gazette de la Roug\' n°2compressé_Page_40.jpg', 'image/jpeg', '', 127),
(192, 'Le livre dImaje VF light_Page_006.jpg', 'image/jpeg', '', 128),
(193, 'Le livre dImaje VF light_Page_007.jpg', 'image/jpeg', '', 128),
(194, 'Le livre dImaje VF light_Page_008.jpg', 'image/jpeg', '', 128),
(195, 'Le livre dImaje VF light_Page_011.jpg', 'image/jpeg', '', 128),
(196, 'Le livre dImaje VF light_Page_012.jpg', 'image/jpeg', '', 128),
(197, 'Le livre dImaje VF light_Page_013.jpg', 'image/jpeg', '', 128),
(198, 'Le livre dImaje VF light_Page_014.jpg', 'image/jpeg', '', 128),
(199, 'Le livre dImaje VF light_Page_015.jpg', 'image/jpeg', '', 128),
(200, 'Le livre dImaje VF light_Page_024.jpg', 'image/jpeg', '', 128),
(201, 'Le livre dImaje VF light_Page_025.jpg', 'image/jpeg', '', 128),
(202, 'Le livre dImaje VF light_Page_026.jpg', 'image/jpeg', '', 128),
(203, 'Le livre dImaje VF light_Page_027.jpg', 'image/jpeg', '', 128),
(204, 'Le livre dImaje VF light_Page_030.jpg', 'image/jpeg', '', 128),
(205, 'Le livre dImaje VF light_Page_031.jpg', 'image/jpeg', '', 128),
(206, 'Le livre dImaje VF light_Page_075.jpg', 'image/jpeg', '', 128),
(207, 'Le livre dImaje VF light_Page_076.jpg', 'image/jpeg', '', 128),
(208, 'Le livre dImaje VF light_Page_100.jpg', 'image/jpeg', '', 128);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `titreImage` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `name`, `type`, `titreImage`) VALUES
(125, 'Le livre dImaje VF light_Page_026.jpg', 'image/jpeg', 'lorem ipsum'),
(126, 'La Gazette de la Roug n°1 compressée_Page_01.jpg', 'image/jpeg', ''),
(127, 'Gazette de la Roug\' n°2compressé_Page_01.jpg', 'image/jpeg', ''),
(128, 'Le livre dImaje VF light_Page_001.jpg', 'image/jpeg', '');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `textePresentation` text,
  `titrePresentation` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `textePresentation`, `titrePresentation`) VALUES
(2, 'Consequat duis excepteur eu adipisicing minim do ea ex sunt laboris. Pariatur et proident ullamco tempor enim laboris fugiat reprehenderit exercitation pariatur. Esse aliqua velit quis dolor magna incididunt. Incididunt aliqua laboris nulla deserunt. Excepteur aliqua fugiat ex officia occaecat ut qui nisi nulla minim culpa nostrud dolore. Do tempor tempor culpa voluptate laborum ad Lorem consectetur ipsum sunt. Sunt consequat magna eiusmod aliquip minim laboris qui duis ex est mollit excepteur ex.\r\n\r\nNostrud ullamco tempor cupidatat labore sunt occaecat reprehenderit anim pariatur occaecat. Non minim culpa fugiat mollit mollit adipisicing enim sunt. Pariatur qui laboris eiusmod labore nulla. Adipisicing do quis non sit cupidatat et commodo sint do cupidatat. Aute nisi consectetur deserunt est laboris pariatur aliquip nisi velit. Do ullamco cillum eu laborum qui aliqua tempor labore amet pariatur occaecat proident. Tempor fugiat adipisicing ut consequat eiusmod fugiat ad sint consequat quis dolor ex.\r\n\r\nAliquip fugiat eiusmod voluptate laborum culpa sunt ea dolor laborum cillum enim minim. Cupidatat duis consequat qui aliquip laboris irure occaecat minim quis exercitation nulla ut aliqua. Cupidatat laboris eiusmod eiusmod cupidatat cupidatat nulla in ullamco irure amet anim.', 'lorem ipsum');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nameProject` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `nameCommanditaire` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `texteDescription` text CHARACTER SET utf8,
  `lien` varchar(100) DEFAULT NULL,
  `datePublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categories` enum('graphisme','illustration','','') CHARACTER SET utf8 NOT NULL,
  `idMedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `nameProject`, `nameCommanditaire`, `texteDescription`, `lien`, `datePublication`, `categories`, `idMedia`) VALUES
(78, 'La Gazette de la Roug’ Février 2016', 'Le Tamis / Centre social de la Rouguière', 'Création de la maquette et mise en page d’un journal d’habitants du quartier de la Rouguière', NULL, '2019-09-24 19:14:37', 'graphisme', 126),
(79, 'La Gazette de la Roug’ Juillet 2016', 'Le Tamis / Centre social de la Rouguière', 'Création de la maquette et mise en page d’un journal d’habitants du quartier de la Rouguière', NULL, '2019-09-24 19:15:44', 'graphisme', 127),
(80, 'Le livre d’Imaje ', 'Le Tamis / Imaje Santé', 'Création de la maquette de l’ouvrage « Le livre d’Imaje », publié à l’occasion des 20 ans de l’association Imaje Santé', NULL, '2019-09-24 19:17:08', 'graphisme', 128);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(64) CHARACTER SET utf8 NOT NULL,
  `motDePasse` varchar(64) CHARACTER SET utf8 NOT NULL,
  `role` enum('admin','superAdmin','','') CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `mail` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `idMedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `motDePasse`, `role`, `adresse`, `tel`, `mail`, `idMedia`) VALUES
(1, 'mat', '5ert*+', 'superAdmin', NULL, NULL, NULL, NULL),
(2, 'mathilde', '$2y$10$d7kaKW.C1sSFJbJAgbq1e.8Q5ZuQ8BvcFipSxsEsBvJHDZq88NOuG', 'admin', 'tytyzrtytr', 'tytyzytyt', 'yttryrt', 125);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `imageplus`
--
ALTER TABLE `imageplus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMedia` (`idMedia`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idMedia` (`idMedia`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idMedia` (`idMedia`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `imageplus`
--
ALTER TABLE `imageplus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `imageplus`
--
ALTER TABLE `imageplus`
  ADD CONSTRAINT `imageplus_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
