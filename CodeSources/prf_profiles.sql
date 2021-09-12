-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 sep. 2021 à 19:09
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `colocimmob`
--

-- --------------------------------------------------------

--
-- Structure de la table `prf_profiles`
--

CREATE TABLE `prf_profiles` (
  `prf_id` int(11) UNSIGNED NOT NULL,
  `prf_first_name` varchar(50) NOT NULL,
  `prf_last_name` varchar(50) NOT NULL,
  `prf_email` varchar(30) DEFAULT NULL,
  `prf_password` varchar(70) DEFAULT NULL,
  `id_typeuser` varchar(255) NOT NULL,
  `prf_logo` varchar(70) DEFAULT NULL,
  `prf_phone` varchar(20) DEFAULT NULL,
  `prf_adress` varchar(50) DEFAULT NULL,
  `id_ville` int(20) DEFAULT NULL,
  `prf_isValidated` int(11) DEFAULT NULL,
  `prf_date_naissance` datetime DEFAULT NULL,
  `prf_sexe` varchar(10) DEFAULT NULL,
  `prf_NumSIRN` varchar(40) DEFAULT NULL,
  `prf_nameofcompany` varchar(70) DEFAULT NULL,
  `prf_siteweb` varchar(70) DEFAULT NULL,
  `prf_activity` varchar(20) DEFAULT NULL,
  `prf_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prf_profiles`
--

INSERT INTO `prf_profiles` (`prf_id`, `prf_first_name`, `prf_last_name`, `prf_email`, `prf_password`, `id_typeuser`, `prf_logo`, `prf_phone`, `prf_adress`, `id_ville`, `prf_isValidated`, `prf_date_naissance`, `prf_sexe`, `prf_NumSIRN`, `prf_nameofcompany`, `prf_siteweb`, `prf_activity`, `prf_statut`) VALUES
(1, 'souzane', 'janson', 'souzane@gmail.com', 'souzane', 'Particulier', '\r\n', '+216 95478126', 'paris', 0, NULL, '2021-09-09 00:00:00', 'femme', NULL, NULL, NULL, 'étudiante', 0),
(2, 'test1', 'testeur1', 'test@test.com', 'test', 'Particulier', '\r\n', '+216 95478126', 'paris', 0, NULL, '2021-09-29 00:00:00', 'homme', NULL, NULL, NULL, 'étudiante', 0),
(3, 'testeur1', 'test1', 'test1@test.com', 'test1', 'Agence', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `prf_profiles`
--
ALTER TABLE `prf_profiles`
  ADD PRIMARY KEY (`prf_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `prf_profiles`
--
ALTER TABLE `prf_profiles`
  MODIFY `prf_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
