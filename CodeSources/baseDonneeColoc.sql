-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2021 at 06:21 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colocimmob`
--

-- --------------------------------------------------------

--
-- Table structure for table `ann_annonce`
--

CREATE TABLE `ann_annonce` (
  `ann_ref`  INT AUTO_INCREMENT PRIMARY KEY,
  `ann_titre` varchar(255) DEFAULT NULL,
  `ann_description` longtext,
  `ann_dateCreation` datetime(6) DEFAULT NULL,
  `ann_dateModification` datetime(6) DEFAULT NULL,
  `ann_dateValidite` datetime(6) DEFAULT NULL,
  `ann_disponible` datetime(6) DEFAULT NULL,
  `tya_id_annonce` int(11) DEFAULT NULL,
  `ann_anneeConstruction` varchar(255) DEFAULT NULL,
  `ann_surface` decimal(10,3) DEFAULT NULL,
  `ann_numEtage` int(11) DEFAULT NULL,
  `ann_nombrePiece` int(11) DEFAULT NULL,
  `ann_nombreChambre` int(11) DEFAULT NULL,
  `ann_ascenceur` varchar(255) DEFAULT NULL,
  `ann_meuble` varchar(255) DEFAULT NULL,
  `ann_classEnergie` varchar(255) DEFAULT NULL,
  `ann_classGES` varchar(255) DEFAULT NULL,
  `tyb_id_bien` varchar(255) DEFAULT NULL,
  `tyl_id_typelogement` varchar(255) DEFAULT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `ann_address` varchar(255) DEFAULT NULL,
  `img_id_images` varchar(64) NOT NULL,
  `prf_id` int(11) DEFAULT NULL,
  `ann_accessibiliteHandicap` varchar(255) NOT NULL,
  `ann_nbrdOccupant` int(11) DEFAULT NULL,
  `ann_fillesUuniquement` varchar(255) DEFAULT NULL,
  `ann_FumeursAutorises` varchar(255) DEFAULT NULL,
  `ann_AnimauxAutorises` varchar(255) DEFAULT NULL,
  `ann_GarçonsUniquement` varchar(255) DEFAULT NULL,
  `ann_prix` int(11) DEFAULT NULL,
  `ann_charge` int(11) DEFAULT NULL,
  `ann_caution` int(11) DEFAULT NULL,
  `ann_fraisAgence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `ann_annonce`
--

INSERT INTO `ann_annonce` (`ann_ref`, `ann_titre`, `ann_description`, `ann_dateCreation`, `ann_dateModification`, `ann_dateValidite`, `ann_disponible`, `tya_id_annonce`, `ann_anneeConstruction`, `ann_surface`, `ann_numEtage`, `ann_nombrePiece`, `ann_nombreChambre`, `ann_ascenceur`, `ann_meuble`, `ann_classEnergie`, `ann_classGES`, `tyb_id_bien`, `tyl_id_typelogement`, `ville_id`, `pay_id`, `reg_id`, `dep_id`, `ann_address`, `img_id_images`, `prf_id`, `ann_accessibiliteHandicap`, `ann_nbrdOccupant`, `ann_fillesUuniquement`, `ann_FumeursAutorises`, `ann_AnimauxAutorises`, `ann_GarçonsUniquement`, `ann_prix`, `ann_charge`, `ann_caution`, `ann_fraisAgence`) VALUES
(1, 'titre', 'salutation', NULL, NULL, NULL, '2020-01-28 00:00:00.000000', 1, NULL, '1.000', 1, 2, 2, 'Oui', 'Non', 'B', 'B', 'Appartement', 'Location', 2, 5, 17, 16, '57466', 'Capture.PNG', NULL, 'Oui', 2, 'Oui', 'Oui', 'Oui', 'Oui', 11, 54, 45, NULL);
 
-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `dep_departement`
--

CREATE TABLE `dep_departement` (
  `dep_id`  INT AUTO_INCREMENT PRIMARY KEY,
  `reg_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_departement`
--
 
INSERT INTO `dep_departement` (`dep_id`, `reg_id`, `description`) VALUES
(1, 1, 'Abomey-Calavi'),
(2, 1, 'Allada'),
(3, 1, 'Kpomassè'),
(4, 1, 'Ouidah'),
(5, 1, 'Sô-Ava'),
(6, 1, 'Toffo'),
(7, 1, 'Tori'),
(8, 1, 'Zê'),
(9, 2, 'Aude'),
(10, 2, 'Aveyron'),
(11, 16, 'Côtes Amour'),
(12, 16, 'Finistère'),
(13, 16, 'Ille Et Vilaine'),
(14, 16, 'Morbihan'),
(15, 16, 'Pays de la Loire'),
(16, 17, 'Eure-et-Loire'),
(17, 17, 'Indre'),
(18, 17, 'Indre et Loire'),
(19, 17, 'Loir et Cher'),
(20, 17, 'Loiret');
 
-- --------------------------------------------------------

--
-- Table structure for table `img_images`
--

CREATE TABLE `img_images` (
  `img_id_images` INT AUTO_INCREMENT PRIMARY KEY,
  `img_CheminImage` varchar(255) DEFAULT NULL) 
  ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_pays`
--

CREATE TABLE `pay_pays` (
  `pay_id` INT AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_pays`
--
  
INSERT INTO `pay_pays` (`pay_id`, `description`) VALUES
(1, 'les Etats-Unis'),
(2, 'Chine'),
(3, 'Japon'),
(4, 'Allemagne'),
(5, 'France'),
(6, 'Royaume Unis'),
(7, 'Inde'),
(8, 'Italie'),
(9, 'Canada'),
(10, 'Coré du Sud'),
(11, 'Russe'),
(12, 'Espagne');
 
-- --------------------------------------------------------

--
-- Table structure for table `prf_profiles`
--

CREATE TABLE `prf_profiles` (
  `prf_id` INT AUTO_INCREMENT PRIMARY KEY,
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
 
 
 -- --------------------------------------------------------

--
-- Table structure for table `reg_region`
--

CREATE TABLE `reg_region` (
  `reg_id` INT AUTO_INCREMENT PRIMARY KEY,
  `pay_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_region`
--
 
INSERT INTO `reg_region` (`reg_id`, `pay_id`, `description`) VALUES
(1, 1, 'Mi-atlantique'),
(2, 2, 'Níngxià?'),
(3, 2, 'Tibet?'),
(4, 2, 'Chubu'),
(5, 3, 'Chugoku'),
(6, 3, 'Kyushu'),
(7, 3, 'Shikoko'),
(8, 3, 'Hokkaido'),
(9, 3, 'Tohoku'),
(10, 3, 'Kanto'),
(11, 3, 'Kansai'),
(12, 4, 'Rhin romantique'),
(13, 4, 'La vallée de la Moselle (Rhénanie-Palatinat)'),
(14, 4, 'La Route romantique (Bavière)'),
(15, 4, 'La Route allemande des Alpes (Bavière)'),
(16, 5, 'Bretagne'),
(17, 5, 'Centre-Val de Loire'),
(18, 5, 'Corse'),
(19, 5, 'Hauts de France'),
(20, 5, 'Île de France'),
(21, 5, 'Ecosse'),
(22, 6, 'Pays de Galles'),
(23, 6, 'Irlande du Nord'),
(24, 6, 'Pays de la Loire'),
(25, 7, ' Rajasthan '),
(26, 7, 'Kerala'),
(27, 7, 'Mumbai '),
(28, 7, 'Calcutta'),
(29, 8, 'Abruzzes'),
(30, 8, 'Basilicate'),
(31, 8, 'Calabre'),
(32, 8, 'Campanie'),
(33, 8, 'Latium'),
(34, 9, 'provinces de Atlantique'),
(35, 9, 'centre du Canada'),
(36, 9, 'provinces des Prairies'),
(37, 9, 'côte Ouest'),
(38, 9, 'territoires du Nord'),
(39, 10, 'Gangwon-do'),
(40, 10, 'Gyeongsangnam-do'),
(41, 10, 'Jeju-do'),
(42, 10, 'Jeollabuk-do'),
(43, 10, 'Chungcheongnam-do'),
(44, 10, 'Gyeonggi-do et Incheon-Gwangyeok-si'),
(45, 10, 'Chungcheongbuk-do'),
(46, 11, 'Kalmoukie'),
(47, 11, 'Karatchaïévo-Tcherkessie'),
(48, 11, 'Carélie'),
(49, 11, 'Komis'),
(50, 12, 'Moscou'),
(51, 12, 'Saint-Petersbourg'),
(52, 12, 'Carélie'),
(53, 12, 'Sibérie'),
(54, 12, ' Kamtchatka');
 
-- -- ------------------------------------------------------

--
-- Table structure for table `tya_annonce`
--

CREATE TABLE `tya_annonce` (
  `tya_id_annonce` INT AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tya_annonce`
--
 
INSERT INTO `tya_annonce` (`tya_id_annonce`, `description`) VALUES
(1, 'Offre'),
(2, 'Demande');
 
-- --------------------------------------------------------

--
-- Table structure for table `tyb_typebien`
--

CREATE TABLE `tyb_typebien` (
  `tyb_id_bien` INT AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tyl_typelogement`
--

CREATE TABLE `tyl_typelogement` (
  `tyl_id_typeLogement` INT AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_usertype`
--

CREATE TABLE `type_usertype` (
  `id_typeuser` INT AUTO_INCREMENT PRIMARY KEY,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `validated_user`
--

CREATE TABLE `validated_user` (
  `id_validation` INT AUTO_INCREMENT PRIMARY KEY,
  `prf_id` int(11) NOT NULL,
  `codeValidation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vill_ville`
--

CREATE TABLE `vill_ville` (
  `ville_id` INT AUTO_INCREMENT PRIMARY KEY,
  `dep_id` int(11) DEFAULT NULL,
  `Code_postale` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vill_ville`
--
 
INSERT INTO `vill_ville` (`ville_id`, `dep_id`, `Code_postale`, `description`) VALUES
(1, 16, NULL, 'Allineuc'),
(2, 16, NULL, 'Binic'),
(3, 16, NULL, 'Brélidy'),
(4, 16, NULL, 'Callac'),
(5, 16, NULL, 'Bringolo'),
(6, 16, NULL, 'Camlez'),
(7, 17, NULL, 'Aize'),
(8, 17, NULL, 'Anjouin'),
(9, 17, NULL, 'Bommiers'),
(10, 17, NULL, 'Brives');
 

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
