-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 07 mai 2024 à 18:05
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
  `ville_cl` varchar(100) NOT NULL,
  `adresse_cl` varchar(300) NOT NULL,
  `tel1_cl` varchar(100) NOT NULL,
  `tel2_cl` varchar(100) NOT NULL,
  `dir_cl` varchar(200) NOT NULL,
  `type_cl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cliniques`
--

INSERT INTO `cliniques` (`id_cl`, `nom_cl`, `ville_cl`, `adresse_cl`, `tel1_cl`, `tel2_cl`, `dir_cl`, `type_cl`) VALUES
(1, 'Clinique la Conception', 'Thiès', 'thies ville', '770000000', '771000000', 'Mme Cristiane', 'Général'),
(2, 'Clinique la Sagesse', 'Thiès', 'Thies 10eme', '770001010', '780002020', 'Habib Saad', 'Général'),
(3, 'Clinique Nour', 'Dakar liberté', 'Dakar 2 voie sacré coeur', '772002020', '332002020', 'Dr Hassan', 'Maternité'),
(4, 'Sen dentiste', 'Dakar Ville', 'Dakar Plateau', '773003030', '333003030', 'Dr Ndiaye', 'Dentiste');

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
  `cl_med` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id_med`, `nom_med`, `prenom_med`, `genre_med`, `ville_med`, `tel1_med`, `tel2_med`, `adresse_med`, `type_med`, `email_med`, `cl_med`) VALUES
(1, 'Ndiaye', 'Mami', 'F', 1, '778880000', '778880001', 'Thies ville', 2, 'mami@gmail.com1', 2);

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
(4, 'Pédiatre'),
(5, 'Maternité');

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
(5, 'Dakar plateau', 'Dakar');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cliniques`
--
ALTER TABLE `cliniques`
  ADD PRIMARY KEY (`id_cl`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id_med`),
  ADD KEY `ville_med` (`ville_med`) USING BTREE,
  ADD KEY `cl_med` (`cl_med`),
  ADD KEY `type_med` (`type_med`);

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
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type-medecin`
--
ALTER TABLE `type-medecin`
  MODIFY `id_tm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_clinique`
--
ALTER TABLE `type_clinique`
  MODIFY `num_tcl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `cliniquemedecin` FOREIGN KEY (`id_med`) REFERENCES `cliniques` (`id_cl`),
  ADD CONSTRAINT `medcintype` FOREIGN KEY (`type_med`) REFERENCES `type-medecin` (`id_tm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vilmed` FOREIGN KEY (`ville_med`) REFERENCES `villes` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;
