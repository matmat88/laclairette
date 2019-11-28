-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 nov. 2019 à 15:58
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
-- Structure de la table `actu`
--

CREATE TABLE `actu` (
  `id` int(11) NOT NULL,
  `lienActu` text,
  `texteActu` text,
  `titreActu` varchar(64) DEFAULT NULL,
  `idMedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actu`
--

INSERT INTO `actu` (`id`, `lienActu`, `texteActu`, `titreActu`, `idMedia`) VALUES
(9, 'https://fr.wikipedia.org/wiki/Wiki', 'Nostrud in occaecat commodo voluptate est enim id nostrud consectetur incididunt. Mollit ea amet pariatur sit culpa ea consequat. Deserunt ex nostrud est fugiat occaecat do nostrud non excepteur dolore mollit. Deserunt incididunt culpa anim ut non. Exercitation dolore ea velit sunt Lorem ut dolore veniam ea aliquip ipsum minim officia dolore. Adipisicing nisi excepteur ipsum velit laborum nostrud cillum elit.', 'lorem ipsum', 180);

-- --------------------------------------------------------

--
-- Structure de la table `imageplus`
--

CREATE TABLE `imageplus` (
  `id` int(11) NOT NULL,
  `nameplus` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `titreImageplus` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `idMedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `imageplus`
--

INSERT INTO `imageplus` (`id`, `nameplus`, `type`, `titreImageplus`, `idMedia`) VALUES
(277, 'Le livre dImaje VF light_Page_006.jpg', 'image/jpeg', '', 140),
(278, 'Le livre dImaje VF light_Page_007.jpg', 'image/jpeg', '', 140),
(279, 'Le livre dImaje VF light_Page_008.jpg', 'image/jpeg', '', 140),
(280, 'Le livre dImaje VF light_Page_011.jpg', 'image/jpeg', '', 140),
(281, 'Le livre dImaje VF light_Page_012.jpg', 'image/jpeg', '', 140),
(282, 'Le livre dImaje VF light_Page_013.jpg', 'image/jpeg', '', 140),
(283, 'Le livre dImaje VF light_Page_014.jpg', 'image/jpeg', '', 140),
(284, 'Le livre dImaje VF light_Page_015.jpg', 'image/jpeg', '', 140),
(285, 'Le livre dImaje VF light_Page_024.jpg', 'image/jpeg', '', 140),
(286, 'Le livre dImaje VF light_Page_025.jpg', 'image/jpeg', '', 140),
(287, 'Le livre dImaje VF light_Page_026.jpg', 'image/jpeg', '', 140),
(288, 'Le livre dImaje VF light_Page_027.jpg', 'image/jpeg', '', 140),
(289, 'Le livre dImaje VF light_Page_030.jpg', 'image/jpeg', '', 140),
(290, 'Le livre dImaje VF light_Page_031.jpg', 'image/jpeg', '', 140),
(291, 'Le livre dImaje VF light_Page_075.jpg', 'image/jpeg', '', 140),
(292, 'Le livre dImaje VF light_Page_076.jpg', 'image/jpeg', '', 140),
(293, 'Le livre dImaje VF light_Page_100.jpg', 'image/jpeg', '', 140),
(314, 'Gazette de la Roug\' n°2compressé_Page_08.jpg', 'image/jpeg', '', 145),
(315, 'Gazette de la Roug\' n°2compressé_Page_12.jpg', 'image/jpeg', '', 145),
(316, 'Gazette de la Roug\' n°2compressé_Page_14.jpg', 'image/jpeg', '', 145),
(317, 'Gazette de la Roug\' n°2compressé_Page_17.jpg', 'image/jpeg', '', 145),
(318, 'Gazette de la Roug\' n°2compressé_Page_40.jpg', 'image/jpeg', '', 145),
(319, 'La Gazette de la Roug n°1 compressée_Page_17.jpg', 'image/jpeg', '', 146),
(320, 'La Gazette de la Roug n°1 compressée_Page_18.jpg', 'image/jpeg', '', 146),
(321, 'La Gazette de la Roug n°1 compressée_Page_19.jpg', 'image/jpeg', '', 146),
(322, 'La Gazette de la Roug n°1 compressée_Page_22.jpg', 'image/jpeg', '', 146),
(323, 'La Gazette de la Roug n°1 compressée_Page_24.jpg', 'image/jpeg', '', 146),
(324, 'La Gazette de la Roug n°1 compressée_Page_25.jpg', 'image/jpeg', '', 146),
(325, 'La Gazette de la Roug n°1 compressée_Page_40.jpg', 'image/jpeg', '', 146),
(333, 'CQFD 169 - oct 2018 - dans les rue de Naples.jpg', 'image/jpeg', 'Il vasto mondo degli ambulanti, paru dans CQFD n°169', 151),
(334, '3 10x15.jpg', 'image/jpeg', '', 152),
(335, '4 10x15.jpg', 'image/jpeg', '', 152),
(336, 'Ariane a 1 an 3_Page_04.jpg', 'image/jpeg', '', 152),
(337, 'Ariane a 1 an 3_Page_05.jpg', 'image/jpeg', '', 152),
(338, 'Ariane a 1 an 3_Page_06.jpg', 'image/jpeg', '', 152),
(339, 'Ariane a 1 an 3_Page_07.jpg', 'image/jpeg', '', 152),
(340, 'Ariane a 1 an 3_Page_08.jpg', 'image/jpeg', '', 152),
(354, 'cigogne vol village nb.jpg', 'image/jpeg', '', 156),
(355, 'Arianne.jpg', 'image/jpeg', '', 171),
(356, 'CARTE2.jpg', 'image/jpeg', '', 171),
(357, 'HECTOR.jpg', 'image/jpeg', '', 171),
(358, 'NABIL.jpg', 'image/jpeg', '', 171),
(359, 'PAUL.jpg', 'image/jpeg', '', 171),
(365, 'Faire part JULES recto.jpg', 'image/jpeg', '', 173),
(366, 'faire part robin 1.jpg', 'image/jpeg', '', 174),
(367, 'Mariage 2.jpg', 'image/jpeg', '', 175),
(370, 'migrations site antiatlas.jpg', 'image/jpeg', '', 177),
(371, 'migrations site hypothese tamis.jpg', 'image/jpeg', '', 177),
(372, 'BAI_Page_11.jpg', 'image/jpeg', '', 182),
(373, 'BAI_Page_19.jpg', 'image/jpeg', '', 182),
(374, 'BAI_Page_20.jpg', 'image/jpeg', '', 182),
(375, 'BAI_Page_25.jpg', 'image/jpeg', '', 182),
(376, 'BAI_Page_27.jpg', 'image/jpeg', '', 182),
(377, 'BAI_Page_41.jpg', 'image/jpeg', '', 182);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `titreImage` varchar(64) DEFAULT NULL,
  `lienImage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `name`, `type`, `titreImage`, `lienImage`) VALUES
(140, 'Le livre dImaje VF light_Page_001.jpg', 'image/jpeg', '', NULL),
(145, 'Gazette de la Roug\' n°2compressé_Page_01.jpg', 'image/jpeg', '', NULL),
(146, 'La Gazette de la Roug n°1 compressée_Page_01.jpg', 'image/jpeg', '', NULL),
(151, 'CQFD 159 nov 2017 - Justice pour Jules.jpg', 'image/jpeg', 'Justice pour Jules, paru dans CQFD n°159', NULL),
(152, 'Ariane a 1 an 3_Page_01.jpg', 'image/jpeg', '', NULL),
(156, 'cigognes nid montagne nb.jpg', 'image/jpeg', '', NULL),
(170, 'Sans titre-§ copie.JPG', 'image/jpeg', '', NULL),
(171, 'Aimé.jpg', 'image/jpeg', '', NULL),
(173, 'Faire part JULES verso.jpg', 'image/jpeg', '', NULL),
(174, 'faire part robin 2.jpg', 'image/jpeg', '', NULL),
(175, 'Mariage 1.jpg', 'image/jpeg', '', NULL),
(177, 'AMIN 3.jpg', 'image/jpeg', '', NULL),
(178, 'i.jpg', 'image/jpeg', '', NULL),
(180, 'Sans titre-§ copie.JPG', 'image/jpeg', 'lorem ipsum', 'https://fr.wikipedia.org/wiki/Wiki'),
(181, 'cigognes nid montagne nb.jpg', 'image/jpeg', '', NULL),
(182, 'BAI_Page_09.jpg', 'image/jpeg', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `textePresentation` text,
  `titrePresentation` varchar(64) NOT NULL,
  `adresse` varchar(64) DEFAULT NULL,
  `tel` varchar(64) DEFAULT NULL,
  `mail` varchar(64) DEFAULT NULL,
  `idMedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `textePresentation`, `titrePresentation`, `adresse`, `tel`, `mail`, `idMedia`) VALUES
(3, 'Sit velit sint exercitation ullamco dolore amet proident consequat exercitation et. Laborum aliqua nulla occaecat eiusmod laborum nulla officia nulla proident enim officia excepteur dolore ad. Reprehenderit et excepteur ullamco mollit duis occaecat exercitation pariatur voluptate voluptate occaecat laborum laboris. Minim pariatur reprehenderit nostrud id esse ut occaecat in incididunt irure mollit cupidatat. Dolore deserunt tempor cupidatat est magna voluptate adipisicing elit anim Lorem do. Minim elit laboris eu exercitation incididunt ipsum nisi pariatur velit tempor qui.\r\n\r\nSit tempor labore aliquip magna eu. Anim aliquip consectetur fugiat et labore aute sunt fugiat cillum. Consectetur ex velit adipisicing commodo ea officia aute aliqua minim id deserunt. Ullamco sint consequat tempor minim amet elit labore aliquip labore aliquip cupidatat.\r\n\r\nLaboris do aliqua cillum dolor fugiat irure non. Ea nulla eiusmod adipisicing sint esse est exercitation nulla duis qui magna labore et. Laborum amet do dolor est. Consequat exercitation sit et pariatur aute aliqua excepteur sint. Ut aliquip consectetur dolor in duis nostrud exercitation irure ea magna dolor laborum dolor sint. Elit consequat sit magna dolor quis ad sunt dolor culpa nostrud laboris nostrud reprehenderit commodo. Consequat pariatur proident consectetur minim ut.', 'Lorem Ipsum', 'Charlotte Amalie St Thomas 00802 Îles Vierges des États-Unis', '+1 340-772-0357', 'fgggg@hhdthhg.com', 181);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nameProject` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `nameCommanditaire` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `texteDescription` text CHARACTER SET utf8,
  `lien` text CHARACTER SET utf8,
  `datePublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categories` enum('graphisme','illustration','','') CHARACTER SET utf8 NOT NULL,
  `idMedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `nameProject`, `nameCommanditaire`, `texteDescription`, `lien`, `datePublication`, `categories`, `idMedia`) VALUES
(92, 'Le livre d\'Imaje', 'Le Tamis / Imaje Santé', 'Création de la maquette de l’ouvrage « Le livre d’Imaje », publié à l’occasion des 20 ans de l’association Imaje Santé', NULL, '2019-11-04 17:46:49', 'graphisme', 140),
(97, 'La Gazette de la Roug’ Juillet 2016', 'Le Tamis / Centre social de la Rouguière', 'Création de la maquette et mise en page d’un journal d’habitants du quartier de la Rouguière', 'http://www.letamis.org/travaux/fabrique-2/', '2019-11-05 18:11:38', 'graphisme', 145),
(98, 'La Gazette de la Roug’ Février 2016', 'Le Tamis / Centre social de la Rouguière', 'Création de la maquette et mise en page d’un journal d’habitants du quartier de la Rouguière', 'http://www.letamis.org/travaux/fabrique-2/', '2019-11-05 18:30:20', 'graphisme', 146),
(102, 'Illustrations d’articles de presse', 'Presse', '', '', '2019-11-06 13:48:14', 'illustration', 151),
(103, 'Ariane a un an', 'LIVRE', 'Livre pour une enfant', '', '2019-11-06 14:40:38', 'illustration', 152),
(107, 'Vol de Cigogne', '', '', '', '2019-11-06 14:52:01', 'illustration', 156),
(110, '*2', '', '', '', '2019-11-06 15:39:38', 'illustration', 170),
(111, 'La main devant le soleil', 'Le Tamis / Aides ', 'Illustrations et phrases manuscrites pour un ouvrage de récits', 'http://www.letamis.org/la-main-devant-le-soleil/', '2019-11-07 13:30:08', 'illustration', 171),
(113, 'Naissance de Jules', 'Faire part', '', '', '2019-11-07 13:35:27', 'illustration', 173),
(114, 'Naissance de Robin', 'Faire part', '', '', '2019-11-07 13:36:16', 'illustration', 174),
(115, 'Mariage de Sylvain & Juliette', 'Faire part', '', '', '2019-11-07 13:37:42', 'illustration', 175),
(117, 'Rencontres « Migrations, nos voix nos chemins de traverse »', '', '', ' https://traverses.hypotheses.org/premiere-rencontre', '2019-11-07 13:41:21', 'illustration', 177),
(118, '*1', '', '', '', '2019-11-07 13:42:32', 'illustration', 178),
(119, 'Action contre la faim', '', 'Création d’une « boîte à images » pour des ateliers sur les thématiques hygiène, nutrition et malnutrition', '', '2019-11-16 11:32:50', 'illustration', 182);

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
-- Index pour la table `actu`
--
ALTER TABLE `actu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idMedia` (`idMedia`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idMedia` (`idMedia`);

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
-- AUTO_INCREMENT pour la table `actu`
--
ALTER TABLE `actu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `imageplus`
--
ALTER TABLE `imageplus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actu`
--
ALTER TABLE `actu`
  ADD CONSTRAINT `actu_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `imageplus`
--
ALTER TABLE `imageplus`
  ADD CONSTRAINT `imageplus_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD CONSTRAINT `presentation_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`idMedia`) REFERENCES `media` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
