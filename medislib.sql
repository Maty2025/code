-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 14 mai 2024 à 18:00
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `medislib`
--

-- --------------------------------------------------------

--
-- Structure de la table `cliniques`
--

CREATE TABLE `cliniques` (
  `id_cl` int(11) NOT NULL,
  `nom_cl` varchar(100) NOT NULL,
  `ville_cl` int(11) NOT NULL,
  `adresse_cl` varchar(300) NOT NULL,
  `tel1_cl` varchar(100) NOT NULL,
  `tel2_cl` varchar(100) NOT NULL,
  `dir_cl` varchar(200) NOT NULL,
  `type_cl` int(11) NOT NULL,
  `img_cl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cliniques`
--

INSERT INTO `cliniques` (`id_cl`, `nom_cl`, `ville_cl`, `adresse_cl`, `tel1_cl`, `tel2_cl`, `dir_cl`, `type_cl`, `img_cl`) VALUES
(1, 'Clinique la Conception', 1, 'thies ville', '770000000', '771000000', 'Mme Cristiane', 2, 'popular-destination2_thumb_main-4.jpg'),
(2, 'Clinique la Sagesse', 1, 'Thies 10eme', '770001010', '780002020', 'Habib Saad', 1, ''),
(3, 'Clinique Nour', 4, 'Dakar 2 voie sacré coeur', '772002020', '332002020', 'Dr Hassan', 3, 'nour.png'),
(4, 'Sen dentiste', 4, 'Dakar Plateau', '773003030', '333003030', 'Dr Ndiaye', 2, ''),
(5, 'Clinique Dr Habiba Touré', 3, 'villa18 face Thion Seck, Dakar', '778009809', '338009809', 'Habiba Touré', 2, 'cliniquedrhabibatoure.jpg'),
(6, 'Clinique Hospitaliere Assiya', 5, 'en face Hôpital Principal, Rue Mandela, Dakar', '778890976', '338890976', 'Dr assiya BA', 2, ''),
(7, 'Clinique Yakar - Partenaire AfriDoctor', 4, 'lot 250, CICES Sud foire, Dakar', '760970000', '330970000', 'Dr Oumar Séne', 4, ''),
(8, 'Nouvelle Clinique De l\'Amitié', 4, 'PGJV+J82, Dakar', '338696490', '33 869 64 90', 'dr Assane', 1, 'lesmariste2.jpg'),
(9, 'URGENCES 24 SALY', 3, '79E Rte de Saly, Saly', '339574747', '', 'Dr Orland', 6, 'urgence24saly.jpg'),
(10, 'Clinique de la Madeleine', 5, 'MH56+WP7, Av. des Diambars, Dakar 99000', '338899470', '', 'dr jean', 2, 'laMadeleine.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id_med` int(11) NOT NULL,
  `nom_med` varchar(100) NOT NULL,
  `prenom_med` varchar(100) NOT NULL,
  `genre_med` varchar(100) NOT NULL,
  `ville_med` int(11) NOT NULL,
  `tel1_med` varchar(100) NOT NULL,
  `tel2_med` varchar(100) NOT NULL,
  `adresse_med` varchar(100) NOT NULL,
  `type_med` int(11) NOT NULL,
  `email_med` varchar(100) NOT NULL,
  `cl_med` int(11) NOT NULL,
  `img_med` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id_med`, `nom_med`, `prenom_med`, `genre_med`, `ville_med`, `tel1_med`, `tel2_med`, `adresse_med`, `type_med`, `email_med`, `cl_med`, `img_med`) VALUES
(1, 'Ndiaye', 'Mami', 'F', 1, '778880000', '778880001', 'Thies ville', 2, 'mami@gmail.com1', 2, 'testimonial2.2.jpg'),
(2, 'Mané', 'Sokhna', 'F', 4, '776804524', '330008754', 'dakar libert6 en face Samu', 5, '', 3, 'booknow.png'),
(3, 'Sonko', 'Ibrahima', 'Homme', 5, '780258421', '330258421', 'dakar apres le marché tilene', 5, 'ibra123@gmail.com', 4, 'testimonial2.2.jpg'),
(4, 'Sarr', 'Oumy', 'F', 4, '77890890', '33890890', 'liberté 6', 1, 'oumysarr@gmail.com', 1, 'oum.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `type-medecin`
--

CREATE TABLE `type-medecin` (
  `id_tm` int(11) NOT NULL,
  `nom_tm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type-medecin`
--

INSERT INTO `type-medecin` (`id_tm`, `nom_tm`) VALUES
(1, 'Généraliste'),
(2, 'Ophtalmologue'),
(3, 'Dentiste'),
(4, 'Pédiatre'),
(5, 'Gynécologue'),
(6, 'Dermatologue'),
(7, 'Runologue');

-- --------------------------------------------------------

--
-- Structure de la table `type_clinique`
--

CREATE TABLE `type_clinique` (
  `num_tcl` int(11) NOT NULL,
  `nom_tcl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_clinique`
--

INSERT INTO `type_clinique` (`num_tcl`, `nom_tcl`) VALUES
(1, 'Généraliste'),
(2, 'Ophtalmologie'),
(3, 'Dentiste'),
(4, 'Pédiatrie'),
(5, 'Maternité'),
(6, 'URGENCE');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id_ville`, `nom_ville`, `region`) VALUES
(1, 'Thiès', 'Thiès'),
(2, 'Mbour', 'Thiès'),
(3, 'Saly', 'Thiès'),
(4, 'Dakar liberté', 'Dakar'),
(5, 'Dakar plateau', 'Dakar'),
(6, 'Diamniadio', 'Dakar'),
(7, 'Yoff', 'Dakar');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD PRIMARY KEY (`id_cl`),
  ADD KEY `type_cl` (`type_cl`),
  ADD KEY `ville_cl` (`ville_cl`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id_med`),
  ADD KEY `ville_med` (`ville_med`) USING BTREE,
  ADD KEY `type_med` (`type_med`),
  ADD KEY `cliniquemedecin` (`cl_med`);

--
-- Index pour la table `type-medecin`
--
ALTER TABLE `type-medecin`
  ADD PRIMARY KEY (`id_tm`);

--
-- Index pour la table `type_clinique`
--
ALTER TABLE `type_clinique`
  ADD PRIMARY KEY (`num_tcl`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cliniques`
--
ALTER TABLE `cliniques`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type-medecin`
--
ALTER TABLE `type-medecin`
  MODIFY `id_tm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_clinique`
--
ALTER TABLE `type_clinique`
  MODIFY `num_tcl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD CONSTRAINT `typeclinique` FOREIGN KEY (`type_cl`) REFERENCES `type_clinique` (`num_tcl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `villeclinique` FOREIGN KEY (`ville_cl`) REFERENCES `villes` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `cliniquemedecin` FOREIGN KEY (`cl_med`) REFERENCES `cliniques` (`id_cl`),
  ADD CONSTRAINT `medcintype` FOREIGN KEY (`type_med`) REFERENCES `type-medecin` (`id_tm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vilmed` FOREIGN KEY (`ville_med`) REFERENCES `villes` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;
