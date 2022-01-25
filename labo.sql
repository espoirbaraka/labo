-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 06:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labo`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_adaptateur`
--

CREATE TABLE `t_adaptateur` (
  `CodeAdaptateur` int(11) NOT NULL,
  `PuissanceAdaptateur` varchar(10) NOT NULL,
  `TensionAdaptateur` varchar(10) NOT NULL,
  `Etiquette` varchar(200) NOT NULL,
  `DateAcquisition` date NOT NULL,
  `Created_on` date NOT NULL,
  `Modified_on` datetime NOT NULL,
  `CodeMarqueAdaptateur` int(11) NOT NULL,
  `CodeAffectation` int(11) NOT NULL,
  `CodeEtatMateriel` int(11) NOT NULL,
  `Observation` text DEFAULT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_adaptateur`
--

INSERT INTO `t_adaptateur` (`CodeAdaptateur`, `PuissanceAdaptateur`, `TensionAdaptateur`, `Etiquette`, `DateAcquisition`, `Created_on`, `Modified_on`, `CodeMarqueAdaptateur`, `CodeAffectation`, `CodeEtatMateriel`, `Observation`, `CodeService`) VALUES
(8, '18.5 V', '3.5 A', 'AD-001', '2015-01-01', '2021-04-06', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(9, '18.5 V', '3.5 A', 'AD-002', '2015-01-01', '2021-04-06', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(10, '19.5 V', '3.33 A', 'AD-003', '2015-01-01', '2021-04-06', '2021-07-09 00:00:00', 1, 3, 1, 'Modifie avec un adaptateur endommage', 1),
(11, '19.5V', '3.33A', 'AD-004', '2015-01-01', '2021-04-06', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(12, '18.5 V', '3.5 A', 'AD-005', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(13, '18.5 V', '3.5 A', 'AD-006', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(14, '20 V', '4.5 A', 'AD-007', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 3, 1, 1, NULL, 1),
(15, '19  V', '4.74 A', 'AD-008', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(16, '19.5 V', '3.33 A', 'AD-009', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(17, '19.5 V', '3.33 A', 'AD-010', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(18, '18.5 V', '3.5 A', 'AD-011', '2015-01-01', '2021-04-07', '2021-08-16 00:00:00', 2, 1, 2, 'Adapt + Alimentation en panne', 1),
(19, '18.5 V', '3.5 A', 'AD-012', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 2, NULL, 1),
(20, '18.5 V', '3.5 A', 'AD-013', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(21, '18.5 V', '3.5 A', 'AD-014', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(22, '18.5 V', '3.5 A', 'AD-015', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(23, '18.5 V', '3.5 A', 'AD-017', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(24, '18.5 V', '3.5 A', 'AD-018', '2015-01-01', '2021-04-07', '2021-08-16 00:00:00', 2, 1, 2, 'Il faut allonger', 1),
(25, '18.5 V', '3.5 A', 'AD-019', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(26, '18.5 V', '3.5 A', 'AD-020', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(28, '18.5 V', '3.5 A', 'AD-021', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(29, '18.5 V', '3.5 A', 'AD-022', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(30, '19.5 V', '2.31 A', 'AD-023', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(31, '19 V', '4.74 A', 'AD-024', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(32, '19 V', '4.74 A', 'AD-026', '2015-01-01', '2021-04-07', '2021-08-09 00:00:00', 1, 1, 8, 'ECHANGER AVEC 2 ADAPTATEUR HP MINCE CHEZ L\'AMI DE PAPA AMANI', 1),
(33, '15 V', '5 A', 'AD-016', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 7, 1, 2, NULL, 1),
(34, '15 V', '5 A', 'AD-027', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 7, 1, 1, NULL, 1),
(35, '18.5 V', '3.5 A', 'AD-028', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(36, '19 V', '3.42 A', 'AD-029', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 7, 1, 1, NULL, 1),
(37, '19.5 V', '3.33 A', 'AD-030', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(38, '19.5 V', '2.31 A', 'AD-031', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(39, '19.5 V', '2.31 A', 'AD-032', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(40, '19.5 V', '2.31 A', 'AD-033', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(41, '19.5 V', '2.31 A', 'AD-034', '2015-01-01', '2021-04-07', '2021-08-13 00:00:00', 2, 11, 1, 'Changé avec un adaptateur endommagé', 1),
(42, '19.5 V', '2.31 A', 'AD-036', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(43, '19.5 V', '2.31 A', 'AD-035', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(44, '19.5 V', '2.31 A', 'AD-037', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(45, '19.5 V', '2.31 A', 'AD-038', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(46, '19.5 V', '2.31 A', 'AD-039', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(47, '19.5 V', '2.31 A', 'AD-040', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(48, '19.5 V', '2.31 A', 'AD-041', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(49, '19.5 V', '2.31 A', 'AD-042', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(50, '19.5 V', '3.33 A', 'AD-043', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(51, '18.5 V', '3.5 A', 'AD-044', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(52, '19 V', '1.7 A', 'AD-045', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(53, '18.5 V', '3.5 A', 'AD-046', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(54, '18.5 V', '3.5 A', 'AD-047', '2015-01-01', '2021-04-07', '2021-07-07 00:00:00', 1, 1, 1, '', 1),
(55, '19 V', '4.74 A', 'AD-048', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 2, NULL, 1),
(56, '19 V', '4.74 A', 'AD-049', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(57, '18.5 V', '3.5 A', 'AD-050', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(58, '19.5 V', '3.33 A', 'AD-052', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(59, '19 V', '4.74 A', 'AD-051', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(60, '19 V', '4.74 A', 'AD-054', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 2, NULL, 1),
(61, '19 V', '4.74 A', 'AD-055', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(62, '18.5 V', '3.5 A', 'AD-056', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(63, '19 V', '4.74 A', 'AD-057', '2015-01-01', '2021-04-07', '2021-07-09 00:00:00', 1, 13, 1, 'Changé avec un adaptateur endommagé', 1),
(64, '18.5 V', '3.5 A', 'AD-058', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(65, '18.5 A', '3.5 A', 'AD-059', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(66, '18.5 V', '3.5 A', 'AD-060', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(67, '19.5 V', '3.33 A', 'AD-061', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(68, '19.5 V', '3.33 A', 'AD-062', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(69, '19.5 V', '3.33 A', 'AD-063', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(70, '19.5 V', '2.31 A', 'AD-064', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(71, '19.5 V', '3.33 A', 'AD-065', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(72, '19.5 V', '2.31 A', 'AD-066', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(73, '19.5 V', '3.33 A', 'AD-067', '2015-01-01', '2021-04-07', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(74, '19V', '4.74A', 'AD-053', '2015-01-01', '2021-04-11', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(75, '19.5V', '2.05A', 'AD-069', '2015-01-01', '2021-06-18', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(76, '2.31 A', '19.5 V', 'AD-071', '2021-01-01', '2021-08-20', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(77, '3.5 A', '18.5 V', 'AD-068', '2021-01-01', '2021-08-20', '0000-00-00 00:00:00', 1, 1, 1, NULL, 1),
(78, '3.33 A', '19.5 V', 'AD-072', '2021-01-01', '2021-08-20', '0000-00-00 00:00:00', 2, 1, 1, NULL, 1),
(79, '2.31 A', '19.5 V', 'AD-070', '2021-01-01', '2021-08-20', '2021-08-20 00:00:00', 2, 1, 1, 'Non affecte', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_affectation`
--

CREATE TABLE `t_affectation` (
  `CodeAffectation` int(11) NOT NULL,
  `Affectation` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_affectation`
--

INSERT INTO `t_affectation` (`CodeAffectation`, `Affectation`, `Created_on`) VALUES
(1, 'LABO 1', '2021-03-18'),
(2, 'DIRECTION DU SYSTEME D\'INFORMATION', '2021-03-18'),
(3, 'BIBLIOTHEQUE', '2021-03-18'),
(4, 'SECTION', '2021-03-18'),
(5, 'SECRETARIAT', '2021-03-18'),
(6, 'COMPTABILITE', '2021-03-18'),
(7, 'APPARITORAT', '2021-03-18'),
(8, 'SALLE CISCO', '2021-03-18'),
(9, 'CAVE', '2021-03-18'),
(10, 'LOGISTICIEN', '0000-00-00'),
(11, 'DG', '2021-05-19'),
(12, 'CYBER', '2021-05-21'),
(13, 'Ass JOSUE', '2021-07-09'),
(14, 'LABO 2', '2021-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `t_auditoire`
--

CREATE TABLE `t_auditoire` (
  `CodeAuditoire` int(11) NOT NULL,
  `CodePromotion` int(11) NOT NULL,
  `CodeOption` int(11) NOT NULL,
  `Created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_auditoire`
--

INSERT INTO `t_auditoire` (`CodeAuditoire`, `CodePromotion`, `CodeOption`, `Created_on`) VALUES
(1, 1, 1, '2021-04-16 00:00:00'),
(2, 2, 1, '2021-04-16 00:00:00'),
(3, 3, 1, '2021-04-16 00:00:00'),
(4, 4, 1, '2021-04-16 00:00:00'),
(5, 5, 1, '2021-04-16 00:00:00'),
(6, 1, 2, '2021-04-16 00:00:00'),
(7, 2, 2, '2021-04-16 00:00:00'),
(8, 3, 2, '2021-04-16 00:00:00'),
(9, 4, 2, '2021-04-16 00:00:00'),
(10, 5, 2, '2021-04-16 00:00:00'),
(11, 4, 6, '2021-04-16 00:00:00'),
(12, 5, 6, '2021-04-16 00:00:00'),
(13, 4, 7, '2021-04-16 00:00:00'),
(14, 5, 7, '2021-04-16 00:00:00'),
(15, 3, 3, '2021-05-22 00:00:00'),
(16, 1, 3, '2021-07-07 00:00:00'),
(17, 1, 9, '2021-08-27 00:00:00'),
(18, 1, 4, '2021-08-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_capacite_hdd`
--

CREATE TABLE `t_capacite_hdd` (
  `CodeCapaciteHDD` int(11) NOT NULL,
  `Valeur` varchar(100) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_capacite_hdd`
--

INSERT INTO `t_capacite_hdd` (`CodeCapaciteHDD`, `Valeur`, `Created_on`) VALUES
(1, '120 Giga', '2021-03-18'),
(2, '250 Giga', '2021-03-18'),
(3, '320 Giga', '2021-03-18'),
(4, '500 Giga', '2021-03-18'),
(5, '750 Giga', '2021-03-18'),
(6, '1 Tera', '2021-03-18'),
(7, '2 Tera', '2021-03-18'),
(8, '4 Tera', '2021-03-18'),
(9, '37 Giga', '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `t_categorie_frequantant`
--

CREATE TABLE `t_categorie_frequantant` (
  `CodeCategorieFrequantant` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_categorie_frequantant`
--

INSERT INTO `t_categorie_frequantant` (`CodeCategorieFrequantant`, `Valeur`, `Created_on`) VALUES
(1, 'Etudiant', '2021-03-18'),
(2, 'Promotion', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_categorie_materiel`
--

CREATE TABLE `t_categorie_materiel` (
  `CodeCategorie` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Created_on` date NOT NULL,
  `Status` int(11) NOT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_categorie_materiel`
--

INSERT INTO `t_categorie_materiel` (`CodeCategorie`, `Designation`, `Created_on`, `Status`, `CodeService`) VALUES
(1, 'Ordinateur', '2021-03-18', 1, 1),
(2, 'Routeur', '2021-03-18', 1, 1),
(3, 'Switch', '2021-03-18', 1, 1),
(4, 'Acces Point', '2021-03-18', 1, 1),
(5, 'Cable', '2021-03-18', 1, 1),
(6, 'Rallonge', '2021-03-18', 1, 1),
(7, 'Reader', '2021-03-18', 1, 1),
(8, 'Imprimante', '2021-03-18', 1, 1),
(9, 'Ecran Desktop', '2021-03-18', 1, 1),
(10, 'Materiel d\'essaie', '2021-08-30', 0, 1),
(11, 'essai 23', '2021-08-30', 0, 1),
(12, 'ORDINATEUR', '2021-08-30', 1, 2),
(13, 'CARTE ARDUINO', '2021-08-30', 0, 1),
(14, 'SWITCH', '2021-08-31', 1, 2),
(15, 'RALLONGE', '2021-08-31', 1, 2),
(16, 'ROUTEUR', '2021-09-01', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_couleur`
--

CREATE TABLE `t_couleur` (
  `CodeCouleur` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_couleur`
--

INSERT INTO `t_couleur` (`CodeCouleur`, `Valeur`, `Created_on`) VALUES
(1, 'Noir', '2021-03-18'),
(2, 'Blanche', '2021-03-18'),
(3, 'Bleu', '2021-03-18'),
(4, 'Orange', '2021-03-18'),
(5, 'Grise', '2021-03-18'),
(6, 'Gris-noir', '2021-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `t_cours`
--

CREATE TABLE `t_cours` (
  `CodeCours` int(11) NOT NULL,
  `Enseignant` varchar(200) NOT NULL,
  `DesignationCours` text NOT NULL,
  `CodeAuditoire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_cours`
--

INSERT INTO `t_cours` (`CodeCours`, `Enseignant`, `DesignationCours`, `CodeAuditoire`) VALUES
(1, 'CT AMANI HAGUMA JOSEPH', 'LABORATOIRE INFORMATIQUE', 1),
(2, '', 'ADMINISTRATION RESEAUX SOUS LUNIX', 12),
(3, '', 'RECHERCHE', 0),
(4, 'CT KASAVUBU JEAN-CLAUDE', 'INFORMATIQUE DE GESTION', 6),
(5, 'CT KILUKA', 'ASSEMBLEUR', 4),
(6, 'Dr ALAIN', 'INTELLIGENCE ARTIFICIELLE', 4),
(7, 'Ass. SERGE KIKOBYA', 'PROGRAMMATION WEB', 4),
(8, 'Ass. PONYO', 'SPSS', 10),
(9, 'PASSY', 'JAVA', 4),
(10, 'CT AMANI & Ass GLODY', 'SYSTEME EMBARQUE', 4),
(11, 'Ass. SERGE', 'INFORMATIQUE', 6),
(12, 'Ass. JOSUE', 'GENIE LOGICIEL', 4),
(13, 'CT AMANI', 'SQL SERVER 1', 2),
(14, 'Ass. GULAIN', 'SPSS & SMART-PLS', 0),
(15, '', 'LOGICIEL SAGE', 13);

-- --------------------------------------------------------

--
-- Table structure for table `t_equipement_externe`
--

CREATE TABLE `t_equipement_externe` (
  `CodeEquipement` int(11) NOT NULL,
  `CodeCategorieMateriel` int(11) NOT NULL,
  `CodeMarqueOrdinateur` int(11) DEFAULT NULL,
  `CodeMarqueRallonge` int(11) DEFAULT NULL,
  `CodeModele` int(11) DEFAULT NULL,
  `CodeCouleur` int(11) NOT NULL,
  `CodeTypeOrdinateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_etat_batterie`
--

CREATE TABLE `t_etat_batterie` (
  `CodeEtatBatterie` int(11) NOT NULL,
  `Valeur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_etat_materiel`
--

CREATE TABLE `t_etat_materiel` (
  `CodeEtat` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_etat_materiel`
--

INSERT INTO `t_etat_materiel` (`CodeEtat`, `Valeur`, `Created_on`) VALUES
(1, 'Bon', '2021-03-18'),
(2, 'En panne', '2021-03-18'),
(3, 'Hors service', '2021-03-18'),
(4, 'Obsolète', '2021-03-18'),
(5, 'Volé', '2021-03-18'),
(6, 'Inconnue', '2021-03-18'),
(7, 'Vendu', '2021-03-22'),
(8, 'Declassé', '2021-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `t_fournisseur`
--

CREATE TABLE `t_fournisseur` (
  `CodeFournisseur` int(11) NOT NULL,
  `NomFournisseur` text NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_fournisseur`
--

INSERT INTO `t_fournisseur` (`CodeFournisseur`, `NomFournisseur`, `Created_on`) VALUES
(1, 'Inconnu', '2021-03-19'),
(2, 'LENOVO', '2021-03-19'),
(3, 'AMAZON', '2021-03-19'),
(4, 'ALI-BABA', '2021-03-19'),
(5, 'TOSHIBA', '2021-03-19'),
(6, 'DELL', '2021-03-19'),
(8, 'HP', '2021-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `t_frequantant`
--

CREATE TABLE `t_frequantant` (
  `CodeFrequantant` int(11) NOT NULL,
  `CodeCategorieFrequantant` int(11) NOT NULL,
  `CodePromotion` int(11) DEFAULT NULL,
  `CodeOption` int(11) DEFAULT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Postnom` varchar(100) DEFAULT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `Matricule` varchar(100) DEFAULT NULL,
  `Qrcode` text NOT NULL,
  `DesignationPromotion` text DEFAULT NULL,
  `DesignationAutreFrequantant` text DEFAULT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_frequantant`
--

INSERT INTO `t_frequantant` (`CodeFrequantant`, `CodeCategorieFrequantant`, `CodePromotion`, `CodeOption`, `Nom`, `Postnom`, `Prenom`, `Matricule`, `Qrcode`, `DesignationPromotion`, `DesignationAutreFrequantant`, `Created_on`) VALUES
(13, 1, 4, 1, 'MUPENDA', 'BYALAHIRE', 'PAUL', '17IGGJ007454', '', NULL, NULL, '0000-00-00'),
(14, 1, 5, 3, 'MBAFUMOJA', 'ALUMIKA', 'ALUMIKA', '20SPLS009207', '', NULL, NULL, '0000-00-00'),
(15, 1, 5, 3, 'NYAGAHAMA', 'NENA', 'ALAIN', '20SPLS009310', '', NULL, NULL, '0000-00-00'),
(16, 1, 2, 2, 'RACHID', 'SWEDI', 'GUILAIN', '20IGGJ008663', '', NULL, NULL, '0000-00-00'),
(18, 1, 4, 1, 'BARAKA', 'BIGEGA', 'ESPOIR', '18IGGJ007672', '', NULL, NULL, '0000-00-00'),
(19, 1, 1, 1, 'MUGISHA', 'GACHONDO', 'MARCELIN', '21IGGJ299745', '', NULL, NULL, '0000-00-00'),
(20, 1, 1, 1, 'MBAYO', 'LUCIEN', '', '21IGGJ559944', '', NULL, NULL, '0000-00-00'),
(21, 1, 1, 1, 'KAHINDO', 'TSONGO', 'CHARLINE', '21IGGJ489904', '', NULL, NULL, '0000-00-00'),
(22, 1, 1, 1, 'BAHEMUKA', 'NETANYAU', 'BENJAMIN', '21IGGJ109416', '', NULL, NULL, '0000-00-00'),
(23, 1, 1, 1, 'KABONGO', 'BITU', 'SAMUEL', '21IGGJ349800', '', NULL, NULL, '0000-00-00'),
(24, 1, 4, 1, 'FEZA', 'FATAKI', 'SARAH', '18IGGJ007695', '', NULL, NULL, '0000-00-00'),
(25, 1, 3, 1, 'LOKA', 'LODI', 'CHRISPIN', '19IGGJ008411', '', NULL, NULL, '0000-00-00'),
(26, 1, 3, 1, ' BARAKA', 'SEFUKO', 'PRINCE', '19IGGJ008201', '', NULL, NULL, '0000-00-00'),
(27, 1, 1, 1, 'NDAKALA', 'SOMBOLIZI', '', '21IGGJ299721', '', NULL, NULL, '0000-00-00'),
(28, 1, 1, 1, 'JOSEPH', 'BUGOYE', '', '21IGGJ159622', '', NULL, NULL, '0000-00-00'),
(29, 1, 1, 1, 'KASAZA', 'SAMUEL', 'SYLVIN', '21IGGJ289723', '', NULL, NULL, '0000-00-00'),
(30, 1, 1, 1, 'SAMUEL', 'MIZABA', 'MAKISA', '21IGGJ159626', '', NULL, NULL, '0000-00-00'),
(31, 1, 1, 1, 'ABEDI', 'BALEHO', '', '21IGGJ319780', '', NULL, NULL, '0000-00-00'),
(32, 1, 1, 1, 'KATEMBO', 'BWEYA', 'OSEE', '21IGGJ529939', '', NULL, NULL, '0000-00-00'),
(33, 1, 1, 1, 'MBONGEZA', 'MULIRO', 'STEVE', '21IGGJ139527', '', NULL, NULL, '0000-00-00'),
(34, 1, 1, 1, 'NGALO', 'MUHIGIRWA', 'ELISEE', '21IGGJ039357', '', NULL, NULL, '0000-00-00'),
(35, 1, 1, 1, 'SHUKURU', 'BIRINDWA', 'ELIE', '21IGGJ099401', '', NULL, NULL, '0000-00-00'),
(36, 1, 1, 1, 'MUTULA', 'RUGOHEZA', 'MERCI', '21IGGJ529940', '', NULL, NULL, '0000-00-00'),
(37, 1, 1, 1, 'RUHEKA', 'NTAYOBERWA', 'PLAISIR', '21IGGJ359855', '', NULL, NULL, '0000-00-00'),
(38, 1, 1, 1, 'KAKIRA', 'CHIKURU', 'CHRISTOPHE', '21IGGJ339798', '', NULL, NULL, '0000-00-00'),
(39, 1, 1, 1, 'MOISE', 'LUKUNDU', '', '21IGGJ499912', '', NULL, NULL, '0000-00-00'),
(40, 1, 1, 1, 'KODOLOGBANZO', 'MOMBOLE', 'ADRIEN', '21IGGJ149554', '', NULL, NULL, '0000-00-00'),
(41, 1, 1, 1, 'KASEREKA', 'STIVE', 'FAUSTIN', '21IGGJ119449', '', NULL, NULL, '0000-00-00'),
(42, 1, 1, 1, 'MUNGO', 'KAURWA', 'RACHEL', '21IGGJ339786', '', NULL, NULL, '0000-00-00'),
(43, 1, 1, 1, 'AWULE', 'BAY', 'FISTON', '21IGGJ029345', '', NULL, NULL, '0000-00-00'),
(44, 1, 1, 1, 'TUMAINI ', 'BIGIRIMANA ', 'JUSTINE', '21IGGJ029341', '', NULL, NULL, '0000-00-00'),
(45, 1, 1, 1, 'AKILI', 'MWENEMBELE', 'LUCK', '21IGGJ199687', '', NULL, NULL, '0000-00-00'),
(46, 1, 1, 1, 'LUMBULUMBU', 'JUSLAIN', 'JUSLAIN', '18IGGJ219701', '', NULL, NULL, '0000-00-00'),
(47, 1, 1, 1, 'DIEUME', 'MUSSA', 'FISTON', '21IGGJ439879', '', NULL, NULL, '0000-00-00'),
(48, 1, 1, 1, 'BATACHOKA', 'STEPHANO', 'PAUL', '21IGGJ359851', '', NULL, NULL, '0000-00-00'),
(49, 1, 1, 1, 'AKIDA', 'MWINYI', 'SHABANI', '20IGGJ009279', '', NULL, NULL, '0000-00-00'),
(50, 1, 1, 1, 'KANDULWE', 'MANDA', 'HERBBY PAULBY', '21IGGJ029349', '', NULL, NULL, '0000-00-00'),
(51, 1, 1, 1, 'JONATHAN', 'NTAGARA', 'ISHARA', '21IGGJ349801', '', NULL, NULL, '0000-00-00'),
(52, 1, 1, 1, 'MURISHO', 'KASONGO', 'BERNARD', '21IGGJ459886', '', NULL, NULL, '0000-00-00'),
(53, 1, 1, 1, 'KAMBALE', 'KALENDI', 'RICHARD', '21IGGJ059364', '', NULL, NULL, '0000-00-00'),
(54, 1, 1, 1, 'SYAUSWA', 'TSONGO', 'STENLEY', '21IGGJ029348', '', NULL, NULL, '0000-00-00'),
(55, 1, 4, 1, 'HABAMUNGU', 'BAHINZA', 'JOSPIN', '21IGLS019334', '', NULL, NULL, '0000-00-00'),
(56, 1, 1, 1, 'KENGE', 'BUPANGA', 'DENECKER', '21IGGJ0069380', '', NULL, NULL, '0000-00-00'),
(57, 1, 1, 1, 'MUGUME', 'KISEMBO', 'JOSPIN', '21IGGJ119445', '', NULL, NULL, '0000-00-00'),
(58, 1, 1, 1, 'MWAMINI', 'MASAKA', 'DESANGES', '21IGGJ119423', '', NULL, NULL, '0000-00-00'),
(59, 1, 1, 1, 'MIGISHO', 'NKUBIRI', 'JOSUE', '21IGGJ149585', '', NULL, NULL, '0000-00-00'),
(60, 1, 1, 1, 'MUHINDO', 'BALUME', 'MOISE', '21IGGJ089387', '', NULL, NULL, '0000-00-00'),
(61, 1, 1, 1, 'SAMITAMBA', 'MWATI', 'FRANCOIS', '21IGGJ359849', '', NULL, NULL, '0000-00-00'),
(62, 1, 1, 1, 'KASONGO', 'NKUBA', 'JONATHAN', '21IGGJ359843', '', NULL, NULL, '0000-00-00'),
(63, 1, 1, 1, 'MUMBERE', 'MBAVUMOJA', 'LUC', '21IGGJ119470', '', NULL, NULL, '0000-00-00'),
(64, 1, 1, 1, 'MUTOMBO', 'KITENGE', 'RAPHAEL', '21IGGJ129487', '', NULL, NULL, '0000-00-00'),
(65, 1, 1, 1, 'THOMAS', 'KIGUNGU', 'MAPENZI', '21IGGJ119431', '', NULL, NULL, '0000-00-00'),
(66, 1, 1, 1, 'KAMBALE', 'KANGITSI', 'MIKE', '21IGGJ539942', '', NULL, NULL, '0000-00-00'),
(67, 1, 1, 1, 'MATIKULI', 'SABONA', 'MARCEL', '21IGGJ029351', '', NULL, NULL, '0000-00-00'),
(68, 1, 1, 1, 'MBONYIMBUGA', 'PROMESSE', 'DORCAS', '21IGGJ149531', '', NULL, NULL, '0000-00-00'),
(69, 1, 1, 1, 'NDUWAYO', 'BAZIMENYERA', 'STEVEN', '21IGGJ099411', '', NULL, NULL, '0000-00-00'),
(70, 1, 1, 1, 'NIYONGABO', 'NDISABIYE', 'GLOIRE', '21IGGJ339789', '', NULL, NULL, '0000-00-00'),
(71, 1, 1, 1, 'LUGALA', 'TABAY', 'JANVIER', '21IGGJ219696', '', NULL, NULL, '0000-00-00'),
(72, 1, 1, 1, 'KAYOLA', 'KASONGA', 'MARC', '21IGGJ189677', '', NULL, NULL, '0000-00-00'),
(73, 1, 1, 1, 'MUHINDO', 'NGUNZA', 'RODRIGUE', '21IGGJ119467', '', NULL, NULL, '0000-00-00'),
(74, 1, 1, 1, 'KOKO', 'KATORO', 'MOISE', '21IGGJ119450', '', NULL, NULL, '0000-00-00'),
(75, 1, 1, 1, 'BAMULEKE', 'MULYAMA', 'LILIANE', '21IGGJ299732', '', NULL, NULL, '0000-00-00'),
(76, 1, 4, 1, 'AMBIKA', 'CHIZUNGU', 'ISRAEL', '18IGGJ007662', '', NULL, NULL, '0000-00-00'),
(77, 1, 1, 1, 'EKUMBAKI', 'IMBA', 'CLEMENT', '21IGGJ149562', '', NULL, NULL, '0000-00-00'),
(78, 1, 1, 1, 'AMANI', 'BARIYANGA', 'GRACE', '21IGGJ159659', '', NULL, NULL, '0000-00-00'),
(79, 1, 1, 1, 'CELESTIN', 'RUSHIGIRA', '', '21IGGJ119426', '', NULL, NULL, '0000-00-00'),
(80, 1, 3, 1, 'HABAMUNGU', 'CIRHUZA', 'DIEUDONNE', '19IGGJ008081', '', NULL, NULL, '0000-00-00'),
(81, 1, 3, 2, 'FABELA', 'NDAWELE', 'MERLIN', '17GDGJ006981', '', NULL, NULL, '0000-00-00'),
(82, 1, 1, 1, 'KITANDO', 'LUKOZI', 'BIENFAIT', '21IGGJ114119', '', NULL, NULL, '0000-00-00'),
(83, 1, 1, 1, 'ETANDA', 'SHAKO', 'MERVEILLE', '21IGGJ119430', '', NULL, NULL, '0000-00-00'),
(84, 1, 5, 6, 'KANYATSI', 'MUHAWE', 'FABRICE', '12IGGJ001029', '', NULL, NULL, '0000-00-00'),
(85, 1, 1, 1, 'KIKEJE', 'MUKULIMA', 'MESCHACK', '21IGGJ359845', '', NULL, NULL, '0000-00-00'),
(86, 1, 1, 1, 'CALEB BIN', 'SANGO', 'KHALED', '21IGGJ169672', '', NULL, NULL, '0000-00-00'),
(87, 1, 1, 1, 'KAMATE', 'KIVALYANDI', 'DAN', '21IGGJ139523', '', NULL, NULL, '0000-00-00'),
(88, 1, 5, 3, 'KAHINDO', 'MAKOMA', 'NADIA', '17SPGJ007163', '', NULL, NULL, '0000-00-00'),
(89, 1, 2, 1, 'MWANJALE', 'BALISHA', 'NORBERT', '19IGGJ008485', '', NULL, NULL, '0000-00-00'),
(90, 1, 2, 1, 'BULAKALI', 'BABUNGA', 'PATRICK', '21IGGJ609957', '', NULL, NULL, '0000-00-00'),
(91, 1, 1, 1, 'MASIKA', 'MAKASI', 'LAURENE', '21IGGJ099399', '', NULL, NULL, '0000-00-00'),
(92, 1, 2, 1, 'KAKURU', 'BARABARA', 'GLORIA', '20IGGJ008732', '', NULL, NULL, '0000-00-00'),
(93, 1, 1, 1, 'MUPENDA', 'YEMBA', 'OBED', '21IGGJ149560', '', NULL, NULL, '0000-00-00'),
(94, 1, 5, 2, 'PILIPILI', 'GRACE', 'CECILE', '17GDGJ006849', '', NULL, NULL, '0000-00-00'),
(95, 1, 1, 1, 'FAZILI', 'NSHIZIRUNGU', 'ELIE', '21IGGJ169661', '', NULL, NULL, '0000-00-00'),
(96, 1, 1, 1, 'SAFARI', 'BAGUMA', 'EDMOND', '21IGGJ119429', '', NULL, NULL, '0000-00-00'),
(97, 1, 3, 3, 'MELI', 'KIBENGO', 'MELISSA', '20SPGJ009244', '', NULL, NULL, '0000-00-00'),
(98, 1, 3, 3, 'MAGAMBO', 'ELYSEE', 'MEDINE', '19SPGJ008377', '', NULL, NULL, '0000-00-00'),
(99, 1, 3, 3, 'BAHATI', 'PEKEMOJA', 'CYNTHIA', '19SPGJ008410', '', NULL, NULL, '0000-00-00'),
(100, 1, 3, 2, 'BANYWESIZE', 'NYOTA', 'PATRICIA', '19GDGJ008520', '', NULL, NULL, '0000-00-00'),
(101, 1, 3, 2, 'BAKANGANA', 'BINEZA', 'JOSPIN', '19GDGJ008223', '', NULL, NULL, '0000-00-00'),
(102, 1, 4, 2, 'DJUMAMOSI', 'ISSIAKA', 'MARTIN', '21GDLS379874', '', NULL, NULL, '0000-00-00'),
(103, 1, 5, 1, 'CHIRIMWAMI', 'MABURUKI', 'BONHEUR', '17IGGJ006817', '', NULL, NULL, '0000-00-00'),
(104, 1, 4, 6, 'BAGUMA', 'MUSAFIRI', 'ESPOIR', '17IGGJ007271', '', NULL, NULL, '0000-00-00'),
(105, 1, 4, 1, 'AKILIMALI', 'CIZUNGU', 'INNONCENT', '17IGGJ006996', '', NULL, NULL, '0000-00-00'),
(106, 1, 4, 1, 'SIWA', 'MUMBERE', 'CARIN', '17IGGJ006836', '', NULL, NULL, '0000-00-00'),
(107, 1, 4, 1, 'MUDERHWA', 'SAFARI', 'ANDRE', '18IGGJ007632', '', NULL, NULL, '0000-00-00'),
(108, 1, 5, 7, 'CHIZA', 'NSIMIRE', 'SANDRA', '16IGGJ006649', '', NULL, NULL, '0000-00-00'),
(109, 1, 4, 7, 'FURAHA', 'MANGALA', 'PRINCE', '18IGGJ007606', '', NULL, NULL, '0000-00-00'),
(110, 1, 4, 7, 'BOFIO', 'HOALI', 'MADELEINE', '21GIMFsLS239702', '', NULL, NULL, '0000-00-00'),
(111, 1, 4, 7, 'FATUMA', 'MPALA', '', '13IGGJ003462', '', NULL, NULL, '0000-00-00'),
(112, 1, 4, 7, 'MUTANGANA', 'MAREGANE', 'REGIS', '18IGGJ007568', '', NULL, NULL, '0000-00-00'),
(113, 1, 1, 1, 'PILIPILI', 'BALEHANA', 'STANISLAS', '21IGGJ0089395', '', NULL, NULL, '0000-00-00'),
(114, 1, 4, 7, 'FRANCIS', 'NGILI', 'DANIEL', '17IGGJ007377', '', NULL, NULL, '0000-00-00'),
(115, 1, 1, 1, 'DIENZE', 'NZAU', 'TRESOR', '21IGGJ299746', '', NULL, NULL, '0000-00-00'),
(116, 1, 1, 1, 'VILLA', 'AMSINI', 'YANICK', '21IGGJ319794', '', NULL, NULL, '0000-00-00'),
(117, 1, 1, 1, 'TUMSIFU', 'BAKENGULA', 'PATRICK', '21IGGJ289718', '', NULL, NULL, '0000-00-00'),
(118, 1, 1, 1, 'NDAKALA', 'SOMBOLOZI', 'ESPOIR', '21IGGJ99721', '', NULL, NULL, '0000-00-00'),
(119, 1, 1, 1, 'MASUKU', 'EECHA', 'HENRY', '21IGGJ139513', '', NULL, NULL, '0000-00-00'),
(120, 1, 1, 1, 'KAMBALE', 'SIVIHOLYA', 'JEREMIE', '21IGGJ199691', '', NULL, NULL, '0000-00-00'),
(121, 1, 1, 1, 'KAHAYA', 'BANYWESIZE', 'KEVIN', '21IGGJ039352', '', NULL, NULL, '0000-00-00'),
(122, 1, 2, 2, 'AHADI', 'MUNDIMYA', 'PITIE', '20GDGJ009016', '', NULL, NULL, '0000-00-00'),
(123, 1, 2, 2, 'ADAD', 'MANENGU', 'DANADEN', '20GDGJ008723', '', NULL, NULL, '0000-00-00'),
(124, 1, 2, 2, 'AMIRI', 'KALUMBI', 'RADJABU', '20GDGJ008907', '', NULL, NULL, '0000-00-00'),
(125, 1, 1, 1, 'ALINGISUGHO', 'ISESIVANZIRE', 'SAGE', '21IGGJ079380', '', NULL, NULL, '0000-00-00'),
(126, 1, 4, 6, 'MUMBERE', 'WASIMUNDU', 'WESLEY', '18IGGJ007832', '', NULL, NULL, '0000-00-00'),
(127, 1, 1, 1, 'NDIZIHIWE', 'NSENGIYUNVA', 'ISAAC', '21IGGJ119461', '', NULL, NULL, '0000-00-00'),
(128, 1, 1, 1, 'KAKULE', 'KITIMA', 'CLOVIS', '21IGGJ079383', '', NULL, NULL, '0000-00-00'),
(129, 1, 1, 1, 'MBIKAMBOLI', 'KALANGA', 'SAMUEL', '21IGGJ019339', '', NULL, NULL, '0000-00-00'),
(130, 1, 4, 1, 'CUBAKA', 'MULUME', 'ALPHA', '21IGLS499922', '', NULL, NULL, '0000-00-00'),
(131, 1, 1, 1, 'OMARI', 'KYAZIMA', 'CELESTIN', '21IGGJ169669', '', NULL, NULL, '0000-00-00'),
(132, 1, 1, 1, 'CISHIBANJI', 'NKALIRWA', 'DAVID', '21IGGJ139516', '', NULL, NULL, '0000-00-00'),
(133, 1, 1, 1, 'MAOMBI', 'ZAGABE', 'CHRISTION', '21IGGJ089401', '', NULL, NULL, '0000-00-00'),
(134, 1, 1, 1, 'MUHINDO', 'LUHALA', 'SYLVAIN', '21IGGJ129497', '', NULL, NULL, '0000-00-00'),
(135, 1, 1, 1, 'ISENGE', 'BENEDICTION', '', '21IGGJ149612', '', NULL, NULL, '0000-00-00'),
(136, 1, 1, 1, 'KIJI', 'RICHARD', 'JOHNSON', '21IGGJ149593', '', NULL, NULL, '0000-00-00'),
(137, 1, 1, 1, 'BAZUNGU', 'NTALE', 'EMMANUEL', '21IGGJ459904', '', NULL, NULL, '0000-00-00'),
(138, 1, 1, 1, 'muheyo', 'busima', 'samuel', '21IGGJ139514', '', NULL, NULL, '0000-00-00'),
(139, 1, 4, 1, 'SUMAILI', 'SHABANI', 'ROGER', '18IGGJ007916', '', NULL, NULL, '0000-00-00'),
(140, 1, 1, 1, 'MUNGUIKO', 'BANTURIYE', '', '21IGGJ459885', '', NULL, NULL, '0000-00-00'),
(141, 1, 4, 1, 'KATEMBO', 'KIKWAYA', 'ARSENE', '17IGGJ007093', '', NULL, NULL, '0000-00-00'),
(142, 1, 3, 1, 'JEAN', 'KUMBA', 'MICHAEL', '21IGGJ008318', '', NULL, NULL, '0000-00-00'),
(143, 1, 5, 1, 'NTURUBIKA', 'MOISE', '', '17IGGJ007015', '', NULL, NULL, '0000-00-00'),
(144, 1, 4, 1, 'ABIO', 'BAMONGOYO', '', '21IGLS019330', '', NULL, NULL, '0000-00-00'),
(145, 1, 4, 1, 'TUMSIFU', 'NGANGO', 'MOISE', '17IGGJ007394', '', NULL, NULL, '0000-00-00'),
(146, 1, 1, 1, 'MATAMDIKO', 'JOSUE', 'KALAMO', '21IGGJ459896', '', NULL, NULL, '0000-00-00'),
(147, 1, 4, 1, 'AKETI', 'COMPANYI', 'GABRIEL', '18IGGJ007994', '', NULL, NULL, '0000-00-00'),
(148, 1, 4, 1, 'KAKULE', 'WASYALYA', 'HERITIER', '18IGGJ007914', '', NULL, NULL, '0000-00-00'),
(149, 1, 5, 1, 'KAVIRA', 'KATALIKO', 'CELINE', '17IGGJ006830', '', NULL, NULL, '0000-00-00'),
(150, 1, 3, 1, 'SYAHETERA', 'MASIKA', 'NANCY', '20IGGJ009218', '', NULL, NULL, '0000-00-00'),
(151, 1, 1, 1, 'MULEKYA', 'MULIVANDA', 'MUGHOLE', '20IGGJ149570', '', NULL, NULL, '0000-00-00'),
(152, 1, 2, 2, 'NGOYI', 'MBUBA', 'JOSEPH', '20GDGJ009153', '', NULL, NULL, '0000-00-00'),
(153, 1, 3, 2, 'MOENGA', 'SIMUKE', 'GODELIVE', '19GDGJ008546', '', NULL, NULL, '0000-00-00'),
(154, 1, 1, 1, 'KATYA', 'MULOHU', 'JOACKIM', '21IGGJ319792', '', NULL, NULL, '0000-00-00'),
(155, 1, 5, 6, 'MUGISHO', 'VITAL', 'TAKA', '17IGGJ007436', '', NULL, NULL, '0000-00-00'),
(156, 1, 5, 1, 'VALDANO', 'BISHWEKA', 'WABISHWEKA', '17IGGJ006796', '', NULL, NULL, '0000-00-00'),
(157, 1, 1, 1, 'BANYENE', 'BULOMPFU', 'DANY', '21IGGJ379871', '', NULL, NULL, '0000-00-00'),
(158, 1, 4, 6, 'NTAMBWE', 'SAIDI', '', '21IGLS509935', '', NULL, NULL, '0000-00-00'),
(159, 1, 4, 6, 'TAMBWE', 'ALBERT', '', '21RTELLS509934', '', NULL, NULL, '0000-00-00'),
(160, 1, 1, 1, 'KILINGO', 'KIKWAYABO', 'JEAN PAUL', '21IGGJ119457', '', NULL, NULL, '0000-00-00'),
(161, 1, 5, 3, 'AMINA', 'MURHEBWA', 'MARIE', '17SPGJ006906', '', NULL, NULL, '0000-00-00'),
(162, 1, 5, 2, 'KIBWE', 'SYLVIE', '', '17GDGJ007182', '', NULL, NULL, '0000-00-00'),
(163, 1, 5, 1, 'MUHINDO', 'MULWAHALI', 'RUBEN', '18IGGJ008041', '', NULL, NULL, '0000-00-00'),
(164, 1, 5, 6, 'MUHIMIZI', 'NDEKO', 'ERIC', '17IGGJ006991', '', NULL, NULL, '0000-00-00'),
(165, 1, 5, 1, 'KAHINDO', 'KIBABI', 'JOELLE', '20IGLS009222', '', NULL, NULL, '0000-00-00'),
(166, 1, 5, 1, 'BUTHEKI', 'BINTI', 'MWANGA', 'JOSELINE', '', NULL, NULL, '0000-00-00'),
(167, 1, 1, 2, 'CHIZA', 'KASANANE', 'CHRISTIAN', '21GDGJ379858', '', NULL, NULL, '0000-00-00'),
(168, 1, 1, 2, 'MURHULA', 'KALABA', 'JAMES', '21GDGJ149571', '', NULL, NULL, '0000-00-00'),
(169, 1, 1, 3, 'KINJA', 'BITANA', 'SARAH', '21SPGJ149605', '', NULL, NULL, '0000-00-00'),
(170, 1, 1, 3, 'SARAH', 'NGOY', '', '21SPGJ489905', '', NULL, NULL, '0000-00-00'),
(171, 1, 1, 9, 'KASUKU', 'KALABA', 'OLIVIER', '21GRHGJ149572', '', NULL, NULL, '0000-00-00'),
(172, 1, 1, 9, 'KANANE', 'BANYWENE', 'MICHEL', '21GRHGJ359822', '', NULL, NULL, '0000-00-00'),
(173, 1, 1, 9, 'CHRISON', 'USHINDI', 'CHARITE', '21GRHGJ339787', '', NULL, NULL, '0000-00-00'),
(174, 1, 1, 9, 'PALUKU', 'VAHWERE', 'MICHEL', '21GRHGJ159633', '', NULL, NULL, '0000-00-00'),
(175, 1, 1, 9, 'WASOBITA', 'MODESTE', 'THIERRY', '21GRHGJ299741', '', NULL, NULL, '0000-00-00'),
(176, 1, 1, 9, 'ANITE', 'WAY', 'URSULE', '21GRHHJ459891', '', NULL, NULL, '0000-00-00'),
(177, 1, 5, 6, 'MIRENGE', 'MATHUMO', 'STYVE', '17IGGJ007051', '', NULL, NULL, '0000-00-00'),
(178, 1, 1, 1, 'NZANZU', 'KAKULE', 'MICHEL', '21IGGJ299719', '', NULL, NULL, '0000-00-00'),
(179, 1, 1, 9, 'ISSA', 'PANGA', 'CALVIN', '21GRHGJ599948', '', NULL, NULL, '0000-00-00'),
(180, 1, 1, 9, 'WASOBITA', 'MODESTE', 'THIERRY', '21GRHJ299741', '', NULL, NULL, '0000-00-00'),
(181, 1, 4, 2, 'AMANI', 'BYATERANYA', 'ELYSEE', '18GDGJ007711', '', NULL, NULL, '0000-00-00'),
(182, 1, 2, 1, 'KILASI', 'MISABANDA', 'MOISE', '20IGGJ009078', '', NULL, NULL, '0000-00-00'),
(183, 1, 5, 6, 'ZIHALIRWA', 'MAGANA', 'YOSHUA', '17IGGJ006989', '', NULL, NULL, '0000-00-00'),
(184, 1, 2, 1, 'MBUSA', 'WA MBUSA', 'JOSUE', '20IGGJ008718', '', NULL, NULL, '0000-00-00'),
(185, 1, 2, 1, 'OTSHANGE', 'TUSUMBA', 'VICKY', '20IGGJ008881', '', NULL, NULL, '0000-00-00'),
(186, 1, 2, 1, 'USHINDI', 'DUNIA', '', '20IGGJ009042', '', NULL, NULL, '0000-00-00'),
(187, 1, 2, 1, 'BILUGE', 'BANYWESIZE', 'ALLIANCE', '20IGGJ009169', '', NULL, NULL, '0000-00-00'),
(188, 1, 2, 1, 'ZAINABO', 'ABDOUL', 'ANNAH', '20IGGJ009309', '', NULL, NULL, '0000-00-00'),
(189, 1, 5, 1, 'LOKALE', 'KINKUMBA', 'EUGE', '18IGGJ008023', '', NULL, NULL, '0000-00-00'),
(190, 1, 1, 2, 'BASUBI', 'WAKILONGO', 'ALFRED', '21GDGJ139541', '', NULL, NULL, '0000-00-00'),
(191, 1, 1, 2, 'WESTHY', 'KAYUMBA', 'SEBASTIEN', '21GDGJ005960', '', NULL, NULL, '0000-00-00'),
(192, 1, 1, 2, 'KAHINDO', 'MATHINA', 'REGINA', '21GDGJ159647', '', NULL, NULL, '0000-00-00'),
(193, 1, 1, 1, 'BUKASA', 'MULUMBA', 'HENRI', '21IGGJ359830', '', NULL, NULL, '0000-00-00'),
(194, 1, 1, 1, 'BARAKA', 'MASINDA', 'RAISONNE', '21IGGJ389876', '', NULL, NULL, '0000-00-00'),
(195, 1, 3, 1, 'MUGISHO', 'BASHONGA', 'JEREMIE', '18IGGJ007882', '', NULL, NULL, '0000-00-00'),
(196, 1, 3, 2, 'MUGISHO', 'MATESO', 'ESPOIR', '19GDGJ008327', '', NULL, NULL, '0000-00-00'),
(197, 1, 1, 3, 'RUYANGE', 'DUSABE', 'DAFROSE', '21SOGJ159612', '', NULL, NULL, '0000-00-00'),
(198, 1, 1, 2, 'AMAHORO', 'NTAWIHERA', 'ESPOIR', '21GDGJ499918', '', NULL, NULL, '0000-00-00'),
(199, 1, 1, 2, 'BAENI', 'BONANE', 'LANDRY', '21GDGJ459889', '', NULL, NULL, '0000-00-00'),
(200, 1, 1, 2, 'ARIHO', 'TONDO', 'AUTORITE', '21GDGJ149596', '', NULL, NULL, '0000-00-00'),
(201, 1, 1, 2, 'KAMBALE', 'KATENDE', 'CHRISTIAN', '21GDGJ099406', '', NULL, NULL, '0000-00-00'),
(202, 1, 2, 1, 'KULU', 'PASSAGER', 'JOSEPH', '20IGGJ008924', '', NULL, NULL, '0000-00-00'),
(203, 1, 2, 1, 'MWAHIDI', 'OMARI', 'SARAH', '20IGGJ008917', '', NULL, NULL, '0000-00-00'),
(204, 1, 2, 1, 'MUPENDA', 'MUGOGO', 'GLOIRE', '20IGGJ008687', '', NULL, NULL, '0000-00-00'),
(205, 1, 4, 6, 'PIERRE', 'LUPEMBE', '', '19IGGJ008404', '', NULL, NULL, '0000-00-00'),
(206, 1, 1, 2, 'FRANCIS', 'LUNANGA', '', '19GDGJ008599', '', NULL, NULL, '0000-00-00'),
(207, 1, 3, 3, 'MARHEGEKO', 'BACHIDOSE', 'ALAIN', '20SPGJ009135', '', NULL, NULL, '0000-00-00'),
(208, 1, 4, 6, 'SHUKURU', 'NDABULA', '', '15IGGJ005498', '', NULL, NULL, '0000-00-00'),
(209, 1, 3, 1, 'TONDO', 'LUZOLO', 'CALEB', '19IGGJ008256', '', NULL, NULL, '0000-00-00'),
(210, 1, 1, 9, 'BONDELE', 'FAIDA', 'GRACIA', '21GRHGJ509936', '', NULL, NULL, '0000-00-00'),
(211, 1, 1, 1, 'KASEREKA', 'AHADI', '', '21IGGJ429876', '', NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_frequantation`
--

CREATE TABLE `t_frequantation` (
  `CodeFrequantation` int(11) NOT NULL,
  `CodeCategorieFrequantant` int(11) DEFAULT NULL,
  `CodeFrequantant` int(11) NOT NULL,
  `CodeMateriel` int(11) DEFAULT NULL,
  `CodeType` int(11) DEFAULT NULL,
  `CodeMarque` int(11) DEFAULT NULL,
  `CodeCouleur` int(11) DEFAULT NULL,
  `CodeSiege` int(11) DEFAULT NULL,
  `CodeAuditoire` int(11) DEFAULT NULL,
  `CodeCours` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `HeureArrive` time NOT NULL,
  `HeureDepart` time NOT NULL,
  `Motif` text DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_frequantation`
--

INSERT INTO `t_frequantation` (`CodeFrequantation`, `CodeCategorieFrequantant`, `CodeFrequantant`, `CodeMateriel`, `CodeType`, `CodeMarque`, `CodeCouleur`, `CodeSiege`, `CodeAuditoire`, `CodeCours`, `Date`, `HeureArrive`, `HeureDepart`, `Motif`, `Status`, `CodeService`) VALUES
(25, 1, 13, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-13', '10:51:24', '13:10:54', NULL, 0, 1),
(26, 1, 15, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-13', '12:17:56', '13:12:12', NULL, 0, 1),
(27, 1, 14, 113, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-13', '12:18:13', '13:12:06', NULL, 0, 1),
(28, 1, 16, 65, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-13', '12:33:44', '13:10:31', NULL, 0, 1),
(29, 1, 23, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '10:44:15', '10:57:14', NULL, 0, 1),
(30, 1, 22, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '10:44:40', '10:57:05', NULL, 0, 1),
(31, 1, 21, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '10:45:07', '10:57:08', NULL, 0, 1),
(32, 1, 20, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '10:45:37', '10:57:01', NULL, 0, 1),
(33, 1, 19, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '10:46:01', '10:57:11', NULL, 0, 1),
(34, 1, 16, 58, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '11:29:09', '13:07:57', NULL, 0, 1),
(35, 1, 25, 101, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '11:44:05', '13:07:54', NULL, 0, 1),
(36, 1, 26, 84, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-14', '12:19:53', '13:08:00', NULL, 0, 1),
(37, 1, 16, 57, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '10:15:50', '13:11:01', NULL, 0, 1),
(38, 1, 24, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '10:24:30', '11:21:24', NULL, 0, 1),
(39, 1, 26, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '10:36:48', '10:41:15', NULL, 0, 1),
(40, 1, 30, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:43:58', '12:46:11', NULL, 0, 1),
(41, 1, 31, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:44:22', '12:46:32', NULL, 0, 1),
(42, 1, 27, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:44:38', '12:50:28', NULL, 0, 1),
(43, 1, 28, 95, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:44:56', '12:47:16', NULL, 0, 1),
(44, 1, 29, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:45:10', '12:41:51', NULL, 0, 1),
(45, 1, 33, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:46:16', '12:47:02', NULL, 0, 1),
(46, 1, 40, 75, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:48:09', '12:42:16', NULL, 0, 1),
(47, 1, 48, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:48:34', '13:05:03', NULL, 0, 1),
(48, 1, 45, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:48:50', '13:06:01', NULL, 0, 1),
(49, 1, 47, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:49:07', '13:05:48', NULL, 0, 1),
(50, 1, 46, 116, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:49:23', '12:41:23', NULL, 0, 1),
(51, 1, 34, 96, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:49:47', '12:42:57', NULL, 0, 1),
(52, 1, 39, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:50:03', '13:10:52', NULL, 0, 1),
(53, 1, 41, 73, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:50:21', '12:45:08', NULL, 0, 1),
(54, 1, 32, 105, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:54:19', '12:38:21', NULL, 0, 1),
(55, 1, 37, 50, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:54:39', '13:10:42', NULL, 0, 1),
(56, 1, 38, 51, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:54:53', '13:10:30', NULL, 0, 1),
(57, 1, 36, 104, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:55:10', '12:38:43', NULL, 0, 1),
(58, 1, 43, 65, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:55:24', '12:44:54', NULL, 0, 1),
(59, 1, 44, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:55:38', '12:44:41', NULL, 0, 1),
(60, 1, 19, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:55:59', '12:36:06', NULL, 0, 1),
(61, 1, 49, 52, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:56:13', '13:09:54', NULL, 0, 1),
(62, 1, 35, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:56:34', '12:21:29', NULL, 0, 1),
(63, 1, 42, 61, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '11:56:54', '12:44:28', NULL, 0, 1),
(64, 1, 51, 67, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:01:56', '13:08:58', NULL, 0, 1),
(65, 1, 50, 68, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:02:26', '13:08:34', NULL, 0, 1),
(66, 1, 52, 65, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:03:19', '13:10:13', NULL, 0, 1),
(67, 1, 53, 61, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:31:10', '12:59:49', NULL, 0, 1),
(68, 1, 54, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:31:28', '12:59:25', NULL, 0, 1),
(69, 1, 26, 105, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-15', '12:45:38', '13:09:38', NULL, 0, 1),
(73, 1, 24, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '10:16:35', '13:26:21', NULL, 0, 1),
(75, 1, 14, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '11:34:36', '13:17:41', NULL, 0, 1),
(80, 1, 27, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:04:36', '13:24:38', NULL, 0, 1),
(81, 1, 45, 105, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:07:54', '13:26:12', NULL, 0, 1),
(82, 1, 56, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:16:12', '13:08:51', NULL, 0, 1),
(83, 1, 57, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:17:23', '13:07:15', NULL, 0, 1),
(84, 1, 68, 75, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:32:46', '13:22:24', NULL, 0, 1),
(85, 1, 67, 99, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:33:15', '13:14:54', NULL, 0, 1),
(86, 1, 66, 79, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:33:27', '13:03:48', NULL, 0, 1),
(87, 1, 37, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:33:53', '13:17:58', NULL, 0, 1),
(88, 1, 19, 84, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:34:06', '13:10:37', NULL, 0, 1),
(89, 1, 65, 101, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:34:18', '13:21:38', NULL, 0, 1),
(90, 1, 64, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:35:09', '13:23:48', NULL, 0, 1),
(91, 1, 63, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:35:25', '13:25:06', NULL, 0, 1),
(92, 1, 48, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:36:02', '13:24:09', NULL, 0, 1),
(93, 1, 62, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:36:15', '13:24:20', NULL, 0, 1),
(94, 1, 20, 57, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:36:34', '13:22:47', NULL, 0, 1),
(95, 1, 61, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:36:44', '13:13:30', NULL, 0, 1),
(96, 1, 41, 54, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:36:53', '13:24:00', NULL, 0, 1),
(97, 1, 35, 116, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:37:04', '13:26:56', NULL, 0, 1),
(98, 1, 60, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:37:17', '13:26:47', NULL, 0, 1),
(99, 1, 30, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:37:40', '13:23:08', NULL, 0, 1),
(100, 1, 28, 108, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:37:58', '13:22:06', NULL, 0, 1),
(101, 1, 31, 110, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:38:15', '13:23:00', NULL, 0, 1),
(102, 1, 39, 74, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:38:33', '13:21:48', NULL, 0, 1),
(103, 1, 40, 58, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:38:50', '13:21:22', NULL, 0, 1),
(104, 1, 59, 65, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:39:10', '13:07:38', NULL, 0, 1),
(105, 1, 58, 95, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:39:29', '13:15:54', NULL, 0, 1),
(106, 1, 65, 101, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:39:51', '13:21:32', NULL, 0, 1),
(107, 1, 69, 67, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:45:37', '13:20:48', NULL, 0, 1),
(108, 1, 70, 70, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:46:54', '13:21:04', NULL, 0, 1),
(109, 1, 71, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:48:05', '13:10:16', NULL, 0, 1),
(110, 1, 22, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:50:51', '13:08:25', NULL, 0, 1),
(111, 1, 73, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:53:00', '13:17:19', NULL, 0, 1),
(112, 1, 47, 104, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:53:15', '13:26:36', NULL, 0, 1),
(113, 1, 74, 73, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '12:54:34', '13:16:54', NULL, 0, 1),
(114, 1, 75, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-16', '13:04:54', '13:10:55', NULL, 0, 1),
(117, NULL, 76, NULL, 2, 3, 1, 14, NULL, NULL, '2021-04-17', '10:18:34', '11:47:54', NULL, 0, 1),
(119, 1, 77, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:11:28', '08:52:30', NULL, 0, 1),
(120, 1, 37, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:11:42', '08:52:07', NULL, 0, 1),
(121, 1, 38, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:14:08', '08:52:56', NULL, 0, 1),
(122, 1, 49, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:14:25', '08:52:18', NULL, 0, 1),
(123, 1, 78, 84, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:16:04', '08:52:48', NULL, 0, 1),
(124, 1, 64, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-21', '08:16:19', '08:52:40', NULL, 0, 1),
(125, 1, 79, 95, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-26', '14:53:58', '15:52:51', NULL, 0, 1),
(126, 1, 25, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-04-26', '14:56:57', '16:16:16', NULL, 0, 1),
(133, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-27', '12:27:25', '17:28:44', NULL, 0, 1),
(134, NULL, 55, NULL, 2, 1, 6, 14, NULL, NULL, '2021-04-28', '12:33:04', '12:55:46', NULL, 0, 1),
(135, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-28', '12:33:27', '12:59:52', NULL, 0, 1),
(136, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-29', '08:39:44', '12:59:55', NULL, 0, 1),
(137, 1, 81, 95, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-01', '12:59:35', '13:50:05', NULL, 0, 1),
(138, 1, 74, 76, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-03', '10:12:53', '10:34:06', NULL, 0, 1),
(139, 1, 73, 77, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-03', '10:13:26', '10:35:08', NULL, 0, 1),
(140, 1, 82, 60, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-03', '10:25:22', '10:48:13', NULL, 0, 1),
(141, 1, 83, 114, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-03', '10:34:42', '11:08:19', NULL, 0, 1),
(142, NULL, 84, NULL, 2, 1, 2, 25, NULL, NULL, '2021-05-03', '11:22:12', '11:40:41', NULL, 0, 1),
(143, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-05-03', '12:16:56', '16:40:42', NULL, 0, 1),
(144, 1, 85, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-04', '08:04:03', '08:08:47', NULL, 0, 1),
(145, 1, 86, 77, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-07', '11:00:33', '12:00:22', NULL, 0, 1),
(146, 1, 87, 78, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-07', '11:01:28', '12:00:06', NULL, 0, 1),
(147, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-05-07', '12:23:01', '16:38:36', NULL, 0, 1),
(148, NULL, 88, NULL, 2, 3, 6, 14, NULL, NULL, '2021-05-07', '12:39:31', '13:29:37', NULL, 0, 1),
(149, 2, 0, NULL, NULL, NULL, NULL, NULL, 12, 2, '2021-05-08', '10:04:07', '13:29:21', NULL, 0, 1),
(150, 1, 89, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-11', '10:03:34', '11:08:21', NULL, 0, 1),
(151, NULL, 90, NULL, 2, 1, 1, 14, NULL, NULL, '2021-05-11', '10:07:27', '12:28:10', NULL, 0, 1),
(152, 1, 91, 69, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-11', '10:57:05', '13:20:24', NULL, 0, 1),
(153, NULL, 92, NULL, 2, 1, 1, 14, NULL, NULL, '2021-05-11', '11:06:39', '11:50:18', NULL, 0, 1),
(154, 1, 92, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-11', '11:50:44', '12:07:49', NULL, 0, 1),
(155, 1, 74, 76, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-11', '12:42:20', '13:20:40', NULL, 0, 1),
(156, 1, 73, 77, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-11', '12:42:38', '13:20:32', NULL, 0, 1),
(157, 2, 0, NULL, NULL, NULL, NULL, NULL, 8, 4, '2021-05-12', '08:41:13', '13:17:10', NULL, 0, 1),
(158, 2, 0, NULL, NULL, NULL, NULL, NULL, 8, 4, '2021-05-13', '08:07:47', '16:54:19', NULL, 0, 1),
(159, 2, 0, NULL, NULL, NULL, NULL, NULL, 8, 4, '2021-05-14', '10:25:37', '16:54:24', NULL, 0, 1),
(160, 2, 0, NULL, NULL, NULL, NULL, NULL, 8, 4, '2021-05-15', '09:04:05', '16:54:30', NULL, 0, 1),
(161, 1, 74, 77, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '08:35:25', '08:54:18', NULL, 0, 1),
(162, 1, 51, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '08:35:51', '08:54:34', NULL, 0, 1),
(163, 1, 93, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '08:36:44', '08:54:43', NULL, 0, 1),
(164, 1, 94, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '09:26:05', '11:50:26', NULL, 0, 1),
(165, 1, 48, 102, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '09:29:05', '11:16:44', NULL, 0, 1),
(166, 1, 38, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '10:44:30', '11:09:00', NULL, 0, 1),
(167, 1, 95, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '10:50:29', '11:09:30', NULL, 0, 1),
(168, 1, 96, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-17', '10:50:43', '11:09:45', NULL, 0, 1),
(169, 2, 0, NULL, NULL, NULL, NULL, NULL, 8, 4, '2021-05-18', '08:08:11', '14:01:37', NULL, 0, 1),
(170, 2, 0, NULL, NULL, NULL, NULL, NULL, 3, 4, '2021-05-19', '08:09:14', '14:55:26', NULL, 0, 1),
(171, 1, 97, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-21', '10:27:45', '11:41:21', NULL, 0, 1),
(172, 1, 98, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-21', '10:28:51', '11:41:13', NULL, 0, 1),
(173, 1, 99, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-21', '10:48:29', '11:41:27', NULL, 0, 1),
(174, 1, 97, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-22', '08:13:57', '11:38:22', NULL, 0, 1),
(175, 1, 100, 107, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-22', '08:15:42', '08:18:42', NULL, 0, 1),
(176, 1, 101, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-22', '08:20:05', '08:22:05', NULL, 0, 1),
(177, 2, 0, NULL, NULL, NULL, NULL, NULL, 15, 3, '2021-05-22', '08:43:32', '11:46:58', NULL, 0, 1),
(178, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 5, '2021-06-16', '09:33:34', '14:06:58', NULL, 0, 1),
(179, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 5, '2021-06-17', '09:51:36', '14:07:08', NULL, 0, 1),
(180, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 5, '2021-06-18', '09:33:27', '15:07:20', NULL, 0, 1),
(181, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 5, '2021-06-19', '09:25:31', '15:07:33', NULL, 0, 1),
(182, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 5, '2021-06-20', '11:43:08', '15:07:39', NULL, 0, 1),
(183, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-06-29', '09:45:44', '12:44:05', NULL, 0, 1),
(184, 1, 102, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-01', '08:54:06', '12:21:06', NULL, 0, 1),
(185, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-07-01', '08:54:37', '10:35:08', NULL, 0, 1),
(186, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-01', '09:58:15', '14:29:25', NULL, 0, 1),
(187, 1, 13, 106, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-01', '10:55:36', '14:29:33', NULL, 0, 1),
(188, NULL, 103, NULL, 2, 3, 1, 30, NULL, NULL, '2021-07-02', '08:53:32', '09:43:07', NULL, 0, 1),
(189, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-02', '09:27:24', '12:40:52', NULL, 0, 1),
(190, 1, 102, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-02', '09:48:28', '12:40:46', NULL, 0, 1),
(191, 1, 104, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-02', '11:46:30', '12:40:40', NULL, 0, 1),
(192, 2, 0, NULL, NULL, NULL, NULL, NULL, 11, 3, '2021-07-02', '11:46:50', '12:41:28', NULL, 0, 1),
(193, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-07-02', '11:47:13', '12:41:33', NULL, 0, 1),
(194, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 3, '2021-07-02', '12:03:44', '12:41:23', NULL, 0, 1),
(195, NULL, 105, NULL, 2, 3, 1, 30, NULL, NULL, '2021-07-06', '09:23:01', '10:38:10', NULL, 0, 1),
(196, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-06', '10:11:14', '12:34:11', NULL, 0, 1),
(197, NULL, 106, NULL, 2, 3, 1, 14, NULL, NULL, '2021-07-07', '10:37:23', '12:41:13', NULL, 0, 1),
(198, 1, 107, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-07', '11:21:32', '11:38:51', NULL, 0, 1),
(199, NULL, 108, NULL, 2, 1, 2, 27, NULL, NULL, '2021-07-07', '11:45:09', '12:41:03', NULL, 0, 1),
(200, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-07', '13:02:39', '13:34:47', NULL, 0, 1),
(201, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-07', '15:42:11', '16:20:17', NULL, 0, 1),
(202, NULL, 106, NULL, 2, 3, 1, 15, NULL, NULL, '2021-07-08', '09:59:29', '12:52:23', NULL, 0, 1),
(203, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-08', '10:22:22', '12:51:55', NULL, 0, 1),
(204, 1, 109, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-08', '10:28:02', '12:51:44', NULL, 0, 1),
(205, 1, 110, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-08', '10:29:38', '12:51:50', NULL, 0, 1),
(206, NULL, 111, NULL, 2, 3, 1, 24, NULL, NULL, '2021-07-08', '10:31:13', '12:52:15', NULL, 0, 1),
(207, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-08', '15:39:30', '16:20:13', NULL, 0, 1),
(208, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-08', '15:39:32', '16:20:06', NULL, 0, 1),
(209, NULL, 73, NULL, 2, 3, 1, 15, NULL, NULL, '2021-07-09', '09:29:53', '13:25:42', NULL, 0, 1),
(210, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-09', '10:21:59', '13:34:28', NULL, 0, 1),
(211, NULL, 112, NULL, 2, 2, 1, 28, NULL, NULL, '2021-07-09', '10:22:46', '13:34:08', NULL, 0, 1),
(212, 1, 110, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-09', '10:22:58', '13:34:18', NULL, 0, 1),
(213, 1, 113, 70, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-09', '10:42:05', '10:50:35', NULL, 0, 1),
(214, NULL, 114, NULL, 2, 3, 1, 27, NULL, NULL, '2021-07-09', '10:57:27', '13:35:33', NULL, 0, 1),
(215, NULL, 111, NULL, 2, 3, 1, 25, NULL, NULL, '2021-07-09', '11:08:27', '13:35:07', NULL, 0, 1),
(216, NULL, 108, NULL, 2, 1, 6, 26, NULL, NULL, '2021-07-09', '11:19:25', '13:35:24', NULL, 0, 1),
(217, NULL, 55, NULL, 2, 1, 6, 15, NULL, NULL, '2021-07-09', '12:34:30', '13:35:18', NULL, 0, 1),
(218, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-09', '13:56:57', '15:41:45', NULL, 0, 1),
(219, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '09:10:33', '12:41:08', NULL, 0, 1),
(220, 1, 115, 69, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '10:38:19', '11:02:27', NULL, 0, 1),
(221, 1, 116, 70, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '10:39:14', '11:02:20', NULL, 0, 1),
(222, 1, 86, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '10:51:28', '11:24:29', NULL, 0, 1),
(223, 1, 80, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '11:09:45', '12:40:59', NULL, 0, 1),
(224, 1, 110, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '11:18:27', '16:19:55', NULL, 0, 1),
(225, NULL, 111, NULL, 2, 3, 1, 25, NULL, NULL, '2021-07-10', '12:10:13', '16:19:37', NULL, 0, 1),
(226, 1, 47, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '13:06:23', '14:32:53', NULL, 0, 1),
(227, 1, 117, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-10', '14:02:31', '15:41:30', NULL, 0, 1),
(228, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-12', '09:37:40', '13:32:08', NULL, 0, 1),
(229, 1, 118, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-12', '10:04:02', '10:25:29', NULL, 0, 1),
(230, NULL, 73, NULL, 2, 3, 1, 27, NULL, NULL, '2021-07-12', '10:34:19', '13:36:05', NULL, 0, 1),
(231, 1, 119, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-12', '11:08:55', '12:55:55', NULL, 0, 1),
(232, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-12', '14:24:41', '22:26:05', NULL, 0, 1),
(233, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '09:37:01', '12:36:07', NULL, 0, 1),
(234, 1, 120, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '11:04:45', '12:36:40', NULL, 0, 1),
(235, NULL, 119, NULL, 2, 1, 6, 27, NULL, NULL, '2021-07-13', '11:05:19', '12:37:03', NULL, 0, 1),
(236, NULL, 73, NULL, 2, 3, 1, 15, NULL, NULL, '2021-07-13', '11:29:36', '12:36:54', NULL, 0, 1),
(237, 1, 72, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '11:32:10', '12:36:46', NULL, 0, 1),
(238, 1, 121, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '11:33:26', '12:36:00', NULL, 0, 1),
(239, 1, 30, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '11:43:32', '12:36:11', NULL, 0, 1),
(240, 1, 28, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-13', '11:43:49', '12:36:30', NULL, 0, 1),
(241, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-14', '09:23:55', '12:38:48', NULL, 0, 1),
(242, NULL, 73, NULL, 2, 3, 1, 16, NULL, NULL, '2021-07-14', '10:45:24', '12:07:19', NULL, 0, 1),
(243, 1, 72, 69, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-14', '11:56:32', '12:38:59', NULL, 0, 1),
(244, 1, 122, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-14', '12:41:51', '13:54:32', NULL, 0, 1),
(245, 1, 123, 116, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-14', '12:43:00', '13:03:27', NULL, 0, 1),
(246, 1, 124, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-14', '12:44:14', '13:54:25', NULL, 0, 1),
(247, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-14', '13:29:47', '22:25:58', NULL, 0, 1),
(248, 1, 86, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-15', '09:27:37', '10:43:02', NULL, 0, 1),
(249, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-15', '09:33:07', '12:15:34', NULL, 0, 1),
(250, NULL, 125, NULL, 2, 5, 1, 27, NULL, NULL, '2021-07-15', '11:05:05', '12:16:32', NULL, 0, 1),
(251, NULL, 120, NULL, 2, 1, 1, 27, NULL, NULL, '2021-07-15', '11:05:17', '12:16:14', NULL, 0, 1),
(252, NULL, 13, NULL, 2, 1, 6, 22, NULL, NULL, '2021-07-15', '11:24:49', '12:15:42', NULL, 0, 1),
(253, NULL, 126, NULL, 2, 1, 1, 22, NULL, NULL, '2021-07-15', '11:25:05', '12:15:56', NULL, 0, 1),
(254, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-16', '09:53:03', '13:01:18', NULL, 0, 1),
(255, NULL, 120, NULL, 2, 1, 6, 27, NULL, NULL, '2021-07-16', '11:04:45', '14:18:09', NULL, 0, 1),
(256, NULL, 119, NULL, 2, 5, 1, 27, NULL, NULL, '2021-07-16', '11:05:06', '13:48:55', NULL, 0, 1),
(257, 1, 72, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-16', '11:43:09', '13:06:09', NULL, 0, 1),
(258, NULL, 119, NULL, 2, 1, 1, 14, NULL, NULL, '2021-07-17', '08:10:54', '22:25:42', NULL, 0, 1),
(259, 1, 127, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-17', '08:33:28', '08:40:31', NULL, 0, 1),
(260, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-17', '08:59:46', '22:25:31', NULL, 0, 1),
(261, 2, 0, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-07-17', '10:59:59', '12:25:39', NULL, 0, 1),
(262, 1, 128, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-19', '11:14:59', '12:49:09', NULL, 0, 1),
(263, NULL, 117, NULL, 2, 1, 6, 26, NULL, NULL, '2021-07-19', '11:15:27', '12:48:54', NULL, 0, 1),
(264, 1, 129, 97, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-19', '13:05:13', '13:08:11', NULL, 0, 1),
(265, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 6, '2021-07-19', '15:46:17', '22:25:51', NULL, 0, 1),
(266, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-20', '10:42:44', '11:02:26', NULL, 0, 1),
(267, NULL, 13, NULL, 2, 1, 6, 14, NULL, NULL, '2021-07-21', '12:52:59', '17:06:00', NULL, 0, 1),
(268, NULL, 24, NULL, 2, 3, 1, 14, NULL, NULL, '2021-07-21', '12:53:23', '17:06:07', NULL, 0, 1),
(269, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 7, '2021-07-21', '16:18:02', '17:05:34', NULL, 0, 1),
(270, NULL, 130, NULL, 2, 5, 1, 15, NULL, NULL, '2021-07-22', '10:38:01', '17:05:50', NULL, 0, 1),
(271, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 7, '2021-07-22', '14:31:51', '17:05:22', NULL, 0, 1),
(272, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:15:36', '11:15:11', NULL, 0, 1),
(273, NULL, 119, NULL, 2, 1, 6, 15, NULL, NULL, '2021-07-23', '08:16:36', '11:14:41', NULL, 0, 1),
(274, 1, 31, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:17:05', '09:11:57', NULL, 0, 1),
(275, NULL, 125, NULL, 2, 5, 1, 15, NULL, NULL, '2021-07-23', '08:17:43', '09:32:44', NULL, 0, 1),
(276, 1, 131, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:19:24', '09:31:41', NULL, 0, 1),
(277, 1, 128, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:24:26', '08:48:31', NULL, 0, 1),
(278, 1, 95, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:27:32', '09:29:33', NULL, 0, 1),
(279, 1, 37, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:27:44', '10:18:11', NULL, 0, 1),
(280, 1, 38, 116, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:28:05', '11:22:22', NULL, 0, 1),
(281, 1, 132, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:38:57', '09:12:08', NULL, 0, 1),
(282, NULL, 73, NULL, 2, 3, 1, 30, NULL, NULL, '2021-07-23', '08:41:19', '10:45:33', NULL, 0, 1),
(283, 1, 45, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:48:58', '11:14:59', NULL, 0, 1),
(284, 1, 47, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:49:16', '11:14:24', NULL, 0, 1),
(285, 1, 86, 113, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:49:41', '09:43:41', NULL, 0, 1),
(286, 1, 133, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '08:59:13', '11:22:09', NULL, 0, 1),
(287, NULL, 127, NULL, 2, 1, 1, 14, NULL, NULL, '2021-07-23', '08:59:35', '09:54:16', NULL, 0, 1),
(288, NULL, 49, NULL, 2, 3, 1, 30, NULL, NULL, '2021-07-23', '09:01:46', '09:51:23', NULL, 0, 1),
(289, NULL, 134, NULL, 2, 1, 1, 30, NULL, NULL, '2021-07-23', '09:02:43', '09:49:43', NULL, 0, 1),
(290, 1, 117, 95, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '09:08:04', '10:56:53', NULL, 0, 1),
(291, 1, 121, 51, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '09:14:30', '10:38:24', NULL, 0, 1),
(292, 1, 72, 52, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '09:14:41', '10:38:35', NULL, 0, 1),
(293, 1, 87, 50, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '09:30:51', '10:23:55', NULL, 0, 1),
(294, 1, 59, 50, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '10:01:21', '10:38:50', NULL, 0, 1),
(295, 1, 79, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-23', '10:05:20', '10:20:43', NULL, 0, 1),
(296, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 7, '2021-07-23', '14:53:17', '22:31:44', NULL, 0, 1),
(297, NULL, 107, NULL, 2, 1, 6, 15, NULL, NULL, '2021-07-26', '09:29:19', '22:31:35', NULL, 0, 1),
(298, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 7, '2021-07-26', '15:53:39', '22:31:49', NULL, 0, 1),
(299, 1, 14, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-27', '08:59:27', '12:17:00', NULL, 0, 1),
(300, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 7, '2021-07-27', '13:57:57', '22:31:53', NULL, 0, 1),
(301, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-07-28', '09:36:04', '22:31:58', NULL, 0, 1),
(302, NULL, 119, NULL, 2, 1, 6, 15, NULL, NULL, '2021-07-29', '08:15:49', '08:43:19', NULL, 0, 1),
(303, 1, 14, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-07-29', '08:40:45', '10:30:57', NULL, 0, 1),
(304, NULL, 117, NULL, 2, 1, 6, 27, NULL, NULL, '2021-07-29', '09:17:16', '12:04:11', NULL, 0, 1),
(305, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-07-29', '10:12:46', '14:02:10', NULL, 0, 1),
(306, 1, 128, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-02', '10:43:10', '11:04:10', NULL, 0, 1),
(307, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-08-02', '10:43:26', '13:33:59', NULL, 0, 1),
(308, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 3, '2021-08-02', '10:43:42', '13:33:54', NULL, 0, 1),
(309, NULL, 137, NULL, 2, 1, 1, 27, NULL, NULL, '2021-08-02', '12:10:18', '13:10:56', NULL, 0, 1),
(310, 1, 129, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-02', '12:45:50', '12:51:50', NULL, 0, 1),
(311, 1, 129, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-02', '14:56:04', '16:27:11', NULL, 0, 1),
(312, 1, 14, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-03', '10:07:26', '13:01:16', NULL, 0, 1),
(313, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-08-03', '10:17:58', '13:06:07', NULL, 0, 1),
(314, 1, 51, 60, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-03', '13:02:35', '14:39:16', NULL, 0, 1),
(315, 1, 138, 61, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-03', '13:04:51', '14:40:22', NULL, 0, 1),
(316, NULL, 139, NULL, 2, 1, 6, 24, NULL, NULL, '2021-08-04', '08:57:53', '16:58:13', NULL, 0, 1),
(317, 1, 140, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '08:59:05', '10:35:23', NULL, 0, 1),
(318, NULL, 141, NULL, 2, 1, 1, 14, NULL, NULL, '2021-08-04', '09:09:19', '16:57:38', NULL, 0, 1),
(319, NULL, 142, NULL, 2, 1, 1, 27, NULL, NULL, '2021-08-04', '10:16:49', '16:58:43', NULL, 0, 1),
(320, NULL, 143, NULL, 2, 3, 1, 14, NULL, NULL, '2021-08-04', '10:17:53', '16:57:15', NULL, 0, 1),
(321, NULL, 107, NULL, 2, 1, 6, 14, NULL, NULL, '2021-08-04', '10:18:11', '16:57:55', NULL, 0, 1),
(322, NULL, 144, NULL, 2, 1, 6, 14, NULL, NULL, '2021-08-04', '11:07:20', '11:47:14', NULL, 0, 1),
(323, NULL, 24, NULL, 2, 3, 1, 26, NULL, NULL, '2021-08-04', '11:39:32', '16:58:34', NULL, 0, 1),
(324, NULL, 145, NULL, 2, 3, 1, 23, NULL, NULL, '2021-08-04', '11:45:22', '16:58:23', NULL, 0, 1),
(325, 1, 51, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '13:05:34', '15:06:56', NULL, 0, 1),
(326, 1, 146, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '13:07:10', '13:45:04', NULL, 0, 1),
(327, 1, 138, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '13:08:12', '14:42:50', NULL, 0, 1),
(328, 1, 41, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '13:08:47', '15:32:40', NULL, 0, 1),
(329, 1, 82, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-04', '13:10:14', '15:07:06', NULL, 0, 1),
(330, NULL, 55, NULL, 2, 1, 1, 15, NULL, NULL, '2021-08-05', '08:17:21', '12:11:30', NULL, 0, 1),
(331, NULL, 107, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-05', '08:17:53', '13:05:05', NULL, 0, 1),
(332, NULL, 126, NULL, 2, 1, 6, 14, NULL, NULL, '2021-08-05', '08:31:35', '13:00:47', NULL, 0, 1),
(333, NULL, 106, NULL, 2, 3, 1, 13, NULL, NULL, '2021-08-05', '08:32:04', '13:05:11', NULL, 0, 1),
(334, NULL, 147, NULL, 2, 6, 2, 14, NULL, NULL, '2021-08-05', '09:08:59', '13:05:17', NULL, 0, 1),
(335, NULL, 139, NULL, 2, 1, 6, 23, NULL, NULL, '2021-08-05', '09:09:13', '13:05:23', NULL, 0, 1),
(336, NULL, 148, NULL, 2, 1, 6, 23, NULL, NULL, '2021-08-05', '09:10:06', '13:08:17', NULL, 0, 1),
(337, NULL, 144, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-05', '09:24:42', '11:45:13', NULL, 0, 1),
(338, NULL, 145, NULL, 2, 3, 1, 22, NULL, NULL, '2021-08-05', '10:02:57', '13:04:14', NULL, 0, 1),
(339, NULL, 149, NULL, 2, 1, 1, 22, NULL, NULL, '2021-08-05', '10:12:34', '13:01:11', NULL, 0, 1),
(340, NULL, 143, NULL, 2, 1, 1, 14, NULL, NULL, '2021-08-05', '10:12:50', '13:04:27', NULL, 0, 1),
(341, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-08-05', '11:44:45', '13:06:17', NULL, 0, 1),
(342, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-05', '14:24:58', '16:17:26', NULL, 0, 1),
(343, NULL, 150, NULL, 2, 3, 1, 23, NULL, NULL, '2021-08-07', '08:45:13', '12:59:27', NULL, 0, 1),
(344, NULL, 107, NULL, 2, 1, 1, 23, NULL, NULL, '2021-08-07', '08:52:28', '12:58:09', NULL, 0, 1),
(345, NULL, 141, NULL, 2, 1, 6, 27, NULL, NULL, '2021-08-07', '09:43:15', '12:58:54', NULL, 0, 1),
(346, NULL, 147, NULL, 2, 1, 1, 15, NULL, NULL, '2021-08-07', '09:43:35', '13:05:35', NULL, 0, 1),
(347, NULL, 55, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-07', '09:57:27', '13:05:30', NULL, 0, 1),
(348, NULL, 139, NULL, 2, 1, 6, 26, NULL, NULL, '2021-08-07', '11:28:45', '13:00:58', NULL, 0, 1),
(349, 1, 32, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-07', '11:29:09', '12:58:29', NULL, 0, 1),
(350, 1, 151, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-07', '11:30:10', '12:58:17', NULL, 0, 1),
(351, NULL, 122, NULL, 2, 1, 6, 22, NULL, NULL, '2021-08-07', '11:47:14', '12:59:17', NULL, 0, 1),
(352, NULL, 153, NULL, 2, 3, 1, 20, NULL, NULL, '2021-08-07', '11:48:27', '13:00:16', NULL, 0, 1),
(353, NULL, 152, NULL, 2, 1, 6, 23, NULL, NULL, '2021-08-07', '11:49:00', '12:59:40', NULL, 0, 1),
(354, 1, 38, 84, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-07', '11:51:48', '12:58:23', NULL, 0, 1),
(355, NULL, 134, NULL, 2, 1, 6, 30, NULL, NULL, '2021-08-07', '11:52:10', '12:59:05', NULL, 0, 1),
(356, 1, 129, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-07', '11:59:45', '12:58:37', NULL, 0, 1),
(357, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-07', '14:17:11', '16:17:17', NULL, 0, 1),
(358, NULL, 139, NULL, 2, 1, 6, 23, NULL, NULL, '2021-08-09', '08:57:45', '15:49:15', NULL, 0, 1),
(359, 1, 62, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-09', '09:13:22', '12:32:53', NULL, 0, 1),
(360, NULL, 155, NULL, 2, 3, 1, 15, NULL, NULL, '2021-08-09', '09:33:28', '14:29:25', NULL, 0, 1),
(361, 1, 157, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-09', '10:30:05', '12:59:14', NULL, 0, 1),
(362, NULL, 149, NULL, 2, 1, 6, 23, NULL, NULL, '2021-08-09', '10:50:26', '15:16:01', NULL, 0, 1),
(363, NULL, 144, NULL, 2, 1, 6, 16, NULL, NULL, '2021-08-09', '11:11:10', '15:16:18', NULL, 0, 1),
(364, NULL, 148, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-09', '11:13:30', '15:49:09', NULL, 0, 1),
(365, NULL, 158, NULL, 2, 1, 6, 27, NULL, NULL, '2021-08-09', '11:21:25', '11:27:16', NULL, 0, 1),
(366, 1, 14, 79, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-09', '11:38:51', '14:38:33', NULL, 0, 1),
(367, 1, 117, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-09', '12:38:37', '13:15:59', NULL, 0, 1),
(368, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-09', '14:37:54', '15:15:47', NULL, 0, 1),
(369, NULL, 160, NULL, 2, 3, 1, 30, NULL, NULL, '2021-08-09', '15:10:40', '15:15:38', NULL, 0, 1),
(370, 1, 160, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-09', '15:15:22', '15:26:34', NULL, 0, 1),
(371, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-10', '14:31:59', '15:43:06', NULL, 0, 1),
(372, NULL, 155, NULL, 2, 3, 1, 17, NULL, NULL, '2021-08-11', '08:11:44', '15:48:43', NULL, 0, 1),
(373, 1, 38, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-11', '08:49:31', '13:42:28', NULL, 0, 1),
(374, 1, 121, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-11', '09:14:32', '09:34:44', NULL, 0, 1),
(375, 1, 28, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-11', '09:14:49', '09:34:33', NULL, 0, 1),
(376, 1, 162, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-11', '11:52:04', '15:50:18', NULL, 0, 1),
(377, 1, 129, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-11', '12:09:19', '12:31:09', NULL, 0, 1),
(378, NULL, 147, NULL, 2, 3, 1, 17, NULL, NULL, '2021-08-12', '09:30:38', '15:48:51', NULL, 0, 1),
(379, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 3, '2021-08-12', '11:55:00', '15:43:13', NULL, 0, 1),
(380, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 3, '2021-08-12', '11:55:29', '15:43:17', NULL, 0, 1),
(381, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-12', '14:43:39', '15:43:22', NULL, 0, 1),
(382, 1, 149, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-12', '16:32:25', '16:32:43', NULL, 0, 1),
(383, NULL, 150, NULL, 2, 3, 1, 23, NULL, NULL, '2021-08-13', '09:21:54', '15:49:22', NULL, 0, 1),
(384, NULL, 159, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-13', '09:49:14', '10:41:14', NULL, 0, 1),
(385, NULL, 105, NULL, 2, 3, 1, 15, NULL, NULL, '2021-08-13', '10:00:15', '15:49:39', NULL, 0, 1),
(386, NULL, 55, NULL, 2, 1, 1, 28, NULL, NULL, '2021-08-13', '10:15:27', '15:49:02', NULL, 0, 1),
(387, NULL, 141, NULL, 2, 1, 1, 27, NULL, NULL, '2021-08-13', '10:15:40', '15:49:58', NULL, 0, 1),
(388, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-13', '10:16:52', '10:46:06', NULL, 0, 1),
(389, NULL, 155, NULL, 2, 3, 1, 23, NULL, NULL, '2021-08-13', '10:17:19', '15:49:45', NULL, 0, 1),
(390, NULL, 164, NULL, 2, 3, 1, 15, NULL, NULL, '2021-08-13', '10:18:40', '15:49:33', NULL, 0, 1),
(391, NULL, 149, NULL, 2, 1, 1, 15, NULL, NULL, '2021-08-13', '11:42:05', '15:49:27', NULL, 0, 1),
(392, NULL, 165, NULL, 2, 1, 6, 14, NULL, NULL, '2021-08-13', '11:48:44', '15:49:51', NULL, 0, 1),
(393, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 9, '2021-08-13', '15:42:43', '16:44:17', NULL, 0, 1),
(394, 2, 0, NULL, NULL, NULL, NULL, NULL, 2, 9, '2021-08-14', '08:12:57', '16:44:21', NULL, 0, 1),
(395, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-16', '13:41:15', '16:44:10', NULL, 0, 1),
(396, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-16', '13:41:38', '16:44:03', NULL, 0, 1),
(397, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-17', '13:44:50', '16:43:58', NULL, 0, 1),
(398, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-17', '13:45:14', '16:43:47', NULL, 0, 1),
(399, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 11, '2021-08-18', '10:40:09', '12:11:00', NULL, 0, 1),
(400, 2, 0, NULL, NULL, NULL, NULL, NULL, 16, 11, '2021-08-18', '10:40:52', '12:11:06', NULL, 0, 1),
(401, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 11, '2021-08-19', '11:14:27', '12:11:13', NULL, 0, 1),
(402, 2, 0, NULL, NULL, NULL, NULL, NULL, 16, 11, '2021-08-19', '11:14:38', '12:11:19', NULL, 0, 1),
(403, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-19', '13:07:42', '17:18:01', NULL, 0, 1),
(404, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-19', '13:07:59', '17:18:07', NULL, 0, 1),
(405, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 11, '2021-08-20', '10:11:05', '12:10:51', NULL, 0, 1),
(406, 2, 0, NULL, NULL, NULL, NULL, NULL, 16, 11, '2021-08-20', '10:11:20', '12:10:43', NULL, 0, 1),
(407, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-20', '15:04:26', '17:37:07', NULL, 0, 1),
(408, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-20', '15:04:39', '17:37:10', NULL, 0, 1),
(409, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 11, '2021-08-21', '10:47:24', '17:37:14', NULL, 0, 1),
(410, 2, 0, NULL, NULL, NULL, NULL, NULL, 16, 11, '2021-08-21', '10:48:09', '17:37:17', NULL, 0, 1),
(411, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 11, '2021-08-22', '08:17:42', '17:37:20', NULL, 0, 1),
(412, 2, 0, NULL, NULL, NULL, NULL, NULL, 16, 11, '2021-08-22', '08:17:53', '17:37:24', NULL, 0, 1),
(413, 1, 167, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '08:56:20', '11:38:38', NULL, 0, 1),
(414, 1, 168, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:26:52', '11:39:28', NULL, 0, 1),
(415, 1, 169, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:40:05', '11:39:10', NULL, 0, 1),
(416, 1, 170, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:41:01', '11:39:15', NULL, 0, 1),
(417, 1, 171, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:50:33', '11:39:37', NULL, 0, 1),
(418, 1, 173, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:51:01', '11:39:33', NULL, 0, 1),
(419, 1, 172, 87, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:51:19', '11:39:24', NULL, 0, 1),
(420, 1, 174, 84, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-23', '09:52:07', '11:39:19', NULL, 0, 1),
(421, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-23', '15:48:50', '17:37:27', NULL, 0, 1),
(422, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-23', '15:49:41', '17:37:30', NULL, 0, 1),
(423, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-24', '08:38:38', '11:39:02', NULL, 0, 1),
(424, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-25', '08:30:21', '11:38:49', NULL, 0, 1),
(425, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-25', '08:41:40', '11:38:54', NULL, 0, 1),
(426, 1, 94, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-25', '08:57:54', '11:38:29', NULL, 0, 1),
(427, 1, 171, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-25', '09:20:55', '11:38:44', NULL, 0, 1),
(428, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 3, '2021-08-25', '11:18:17', '17:37:35', NULL, 0, 1),
(429, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 10, '2021-08-25', '13:17:22', '17:37:38', NULL, 0, 1),
(430, 2, 0, NULL, NULL, NULL, NULL, NULL, 5, 10, '2021-08-25', '13:17:39', '17:37:41', NULL, 0, 1),
(431, 1, 104, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '08:16:54', '10:38:22', NULL, 0, 1),
(432, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '08:40:22', '12:04:53', NULL, 0, 1),
(433, 1, 140, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '08:53:29', '13:43:09', NULL, 0, 1),
(434, 1, 175, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '08:56:07', '10:39:58', NULL, 0, 1),
(435, 1, 171, 87, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '09:40:22', '10:56:02', NULL, 0, 1),
(436, 1, 176, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '10:00:04', '13:41:04', NULL, 0, 1),
(437, NULL, 177, NULL, 2, 1, 6, 27, NULL, NULL, '2021-08-26', '10:03:06', '13:46:40', NULL, 0, 1),
(438, NULL, 178, NULL, 2, 1, 1, 26, NULL, NULL, '2021-08-26', '10:04:42', '12:52:26', NULL, 0, 1),
(439, 1, 167, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-26', '10:06:22', '13:43:14', NULL, 0, 1),
(440, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 12, '2021-08-26', '15:40:23', '17:37:44', NULL, 0, 1),
(441, 2, 0, NULL, NULL, NULL, NULL, NULL, 17, 3, '2021-08-27', '11:22:06', '15:06:00', NULL, 0, 1),
(442, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 12, '2021-08-27', '15:06:22', '17:24:09', NULL, 0, 1),
(443, 2, 0, NULL, NULL, NULL, NULL, NULL, 2, 13, '2021-08-28', '08:08:26', '15:54:00', NULL, 0, 1),
(444, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-28', '08:59:09', '08:51:45', NULL, 0, 1),
(450, 1, 24, 102, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-28', '11:48:34', '08:51:20', NULL, 0, 1),
(452, 1, 174, 81, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '08:49:54', '12:47:27', NULL, 0, 1),
(453, NULL, 0, NULL, 2, 3, 1, 27, NULL, NULL, '2021-08-30', '09:12:22', '00:00:00', NULL, 1, 1),
(454, NULL, 103, NULL, 2, 3, 1, 27, NULL, NULL, '2021-08-30', '09:16:42', '13:18:37', NULL, 0, 1),
(456, 1, 179, 75, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '09:29:51', '12:42:01', NULL, 0, 1),
(457, 1, 180, 80, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '09:30:11', '14:45:11', NULL, 0, 1),
(458, 1, 171, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '09:30:30', '15:53:29', NULL, 0, 1),
(459, 1, 104, 110, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '09:39:57', '13:03:02', NULL, 0, 1),
(460, NULL, 159, NULL, 2, 1, 6, 16, NULL, NULL, '2021-08-30', '09:43:15', '11:05:03', NULL, 0, 1),
(461, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '10:37:56', '11:04:15', NULL, 0, 1),
(462, 1, 181, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '11:03:07', '14:19:25', NULL, 0, 1),
(463, 1, 182, 64, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '12:50:36', '15:10:20', NULL, 0, 1),
(464, 1, 94, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '13:20:57', '14:27:50', NULL, 0, 1),
(465, 1, 133, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '13:26:00', '15:11:49', NULL, 0, 1),
(466, 1, 184, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '13:32:21', '15:53:37', NULL, 0, 1),
(467, 1, 185, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '14:04:48', '14:41:47', NULL, 0, 1),
(468, 1, 186, 112, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '14:05:36', '14:41:57', NULL, 0, 1),
(469, 1, 187, 113, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '14:06:31', '14:42:04', NULL, 0, 1),
(470, 1, 188, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-30', '14:09:09', '15:53:48', NULL, 0, 1),
(471, NULL, 189, NULL, 2, 1, 6, 27, NULL, NULL, '2021-08-31', '08:27:13', '16:02:31', NULL, 0, 1),
(472, 1, 104, 110, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '08:27:23', '23:37:41', NULL, 0, 1),
(473, 1, 94, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '08:31:51', '10:33:55', NULL, 0, 1),
(474, NULL, 159, NULL, 2, 1, 6, 15, NULL, NULL, '2021-08-31', '09:13:25', '16:02:37', NULL, 0, 1),
(475, 1, 47, 72, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:15:32', '10:55:26', NULL, 0, 1),
(476, 1, 171, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:17:55', '16:02:04', NULL, 0, 1),
(477, NULL, 103, NULL, 2, 3, 1, 16, NULL, NULL, '2021-08-31', '09:21:27', '16:02:21', NULL, 0, 1),
(478, 1, 65, 73, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:24:27', '10:56:36', NULL, 0, 1),
(479, 1, 190, 68, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:31:08', '10:30:24', NULL, 0, 1),
(480, 1, 174, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:47:26', '10:55:35', NULL, 0, 1),
(481, 1, 179, 75, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '09:52:04', '11:53:16', NULL, 0, 1),
(482, 1, 191, 50, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '10:14:39', '10:36:30', NULL, 0, 1),
(483, 1, 192, 51, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '10:16:01', '10:36:20', NULL, 0, 1),
(484, 2, 0, NULL, NULL, NULL, NULL, NULL, 6, 3, '2021-08-31', '10:17:27', '16:03:03', NULL, 0, 1),
(485, 1, 14, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-08-31', '10:53:23', '23:37:32', NULL, 0, 1),
(487, NULL, 103, NULL, 2, 3, 1, 15, NULL, NULL, '2021-09-01', '08:48:38', '11:49:44', NULL, 0, 1),
(488, 1, 1, 49, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-01', '09:06:30', '00:00:00', NULL, 1, 1),
(489, 1, 1, 50, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-01', '09:07:01', '00:00:00', NULL, 1, 1),
(497, NULL, 94, NULL, 2, 1, 1, 27, NULL, NULL, '2021-09-01', '10:20:36', '16:02:43', NULL, 0, 1),
(498, 1, 26, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-01', '11:12:43', '16:02:09', NULL, 0, 1),
(499, 1, 94, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '08:26:56', '09:30:48', NULL, 0, 1),
(500, 1, 193, 94, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '08:57:21', '09:36:04', NULL, 0, 1),
(501, 1, 194, 93, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '08:58:17', '09:36:15', NULL, 0, 1),
(502, 1, 61, 75, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '09:22:20', '09:35:51', NULL, 0, 1),
(503, NULL, 103, NULL, 2, 3, 1, 15, NULL, NULL, '2021-09-02', '09:56:35', '16:02:50', NULL, 0, 1),
(504, NULL, 177, NULL, 2, 1, 6, 26, NULL, NULL, '2021-09-02', '10:02:12', '11:35:49', NULL, 0, 1),
(505, 1, 98, 105, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '10:14:02', '16:02:00', NULL, 0, 1),
(506, 1, 97, 106, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-02', '10:15:44', '16:02:14', NULL, 0, 1),
(507, NULL, 195, NULL, 2, 3, 1, 27, NULL, NULL, '2021-09-02', '11:54:57', '15:08:25', NULL, 0, 1),
(508, NULL, 103, NULL, 2, 3, 1, 30, NULL, NULL, '2021-09-03', '09:28:40', '16:02:55', NULL, 0, 1),
(509, 1, 196, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-04', '08:23:54', '09:01:56', NULL, 0, 1),
(510, 1, 197, 91, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-04', '09:38:49', '16:01:33', NULL, 0, 1),
(511, 1, 170, 90, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-04', '09:47:40', '16:01:27', NULL, 0, 1),
(512, 1, 169, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-04', '09:47:55', '16:01:53', NULL, 0, 1),
(513, 1, 198, 86, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-04', '09:50:30', '16:01:44', NULL, 0, 1),
(514, NULL, 103, NULL, 2, 3, 1, 30, NULL, NULL, '2021-09-06', '09:13:09', '00:00:00', NULL, 1, 1),
(515, 1, 199, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:15:08', '09:17:45', NULL, 0, 1),
(516, 1, 200, 89, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:16:02', '09:17:41', NULL, 0, 1),
(517, 1, 140, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:20:06', '11:41:41', NULL, 0, 1),
(518, 1, 97, 106, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:31:52', '12:22:49', NULL, 0, 1),
(519, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:34:18', '11:56:49', NULL, 0, 1),
(520, 1, 61, 76, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:44:22', '11:41:22', NULL, 0, 1),
(521, 1, 29, 77, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:45:14', '11:42:10', NULL, 0, 1),
(522, 1, 203, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:47:48', '12:50:45', NULL, 0, 1),
(523, 1, 202, 116, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:48:02', '12:45:14', NULL, 0, 1),
(524, NULL, 204, NULL, 2, 1, 1, 25, NULL, NULL, '2021-09-06', '09:48:56', '12:50:26', NULL, 0, 1),
(525, 1, 182, 63, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '09:52:48', '11:30:13', NULL, 0, 1),
(526, NULL, 52, NULL, 2, 3, 1, 27, NULL, NULL, '2021-09-06', '09:57:18', '11:22:59', NULL, 0, 1),
(527, 1, 190, 64, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-06', '10:04:21', '10:42:25', NULL, 0, 1),
(528, 2, 0, NULL, NULL, NULL, NULL, NULL, 14, 14, '2021-09-06', '14:55:23', '00:00:00', NULL, 1, 1),
(529, 1, 110, 111, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-07', '11:27:54', '08:57:13', NULL, 0, 1),
(530, NULL, 88, NULL, 2, 3, 1, 27, NULL, NULL, '2021-09-07', '11:40:05', '00:00:00', NULL, 1, 1),
(531, 1, 205, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-07', '11:52:47', '11:56:11', NULL, 0, 1),
(532, 2, 0, NULL, NULL, NULL, NULL, NULL, 4, 12, '2021-09-08', '08:16:52', '00:00:00', NULL, 1, 1),
(535, NULL, 18, NULL, 2, NULL, NULL, 31, NULL, NULL, '2021-09-08', '12:38:45', '12:38:52', NULL, 0, 3),
(536, 1, 181, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-10', '08:15:20', '11:29:32', NULL, 0, 1),
(537, 1, 104, 110, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-10', '11:44:54', '14:20:46', NULL, 0, 1),
(538, 1, 206, 68, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-10', '11:46:36', '13:53:09', NULL, 0, 1),
(539, 1, 190, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-10', '11:46:55', '14:20:55', NULL, 0, 1),
(540, 1, 198, 70, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-10', '11:47:17', '14:20:51', NULL, 0, 1),
(541, 1, 74, 71, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-13', '09:23:30', '00:00:00', NULL, 1, 1),
(542, NULL, 195, NULL, 2, 3, 1, 28, NULL, NULL, '2021-09-13', '09:23:47', '00:00:00', NULL, 1, 1),
(543, 2, 0, NULL, NULL, NULL, NULL, NULL, 13, 15, '2021-09-13', '14:44:50', '00:00:00', NULL, 1, 1),
(544, NULL, 159, NULL, 2, 1, 6, 28, NULL, NULL, '2021-09-20', '09:07:05', '00:00:00', NULL, 1, 1),
(545, 1, 146, 109, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-20', '09:49:47', '00:00:00', NULL, 1, 1),
(546, 1, 207, 83, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-20', '09:51:16', '00:00:00', NULL, 1, 1),
(547, NULL, 155, NULL, 2, 3, 1, 29, NULL, NULL, '2021-09-20', '09:59:11', '00:00:00', NULL, 1, 1),
(548, NULL, 149, NULL, 2, 1, 1, 17, NULL, NULL, '2021-09-20', '10:00:35', '00:00:00', NULL, 1, 1),
(549, 1, 208, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-23', '08:58:29', '00:00:00', NULL, 1, 1),
(550, 1, 104, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-23', '08:58:43', '00:00:00', NULL, 1, 1),
(551, NULL, 13, NULL, 2, 1, 6, 16, NULL, NULL, '2021-09-25', '09:13:51', '00:00:00', NULL, 1, 1),
(552, 1, 157, 73, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-25', '09:18:04', '00:00:00', NULL, 1, 1),
(553, 1, 133, 74, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-25', '09:18:20', '00:00:00', NULL, 1, 1),
(554, 1, 38, 115, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-25', '11:19:56', '00:00:00', NULL, 1, 1),
(555, 1, 181, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-28', '09:51:01', '00:00:00', NULL, 1, 1),
(556, 1, 94, 117, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-28', '10:07:41', '00:00:00', NULL, 1, 1),
(557, NULL, 155, NULL, 2, 3, 1, 15, NULL, NULL, '2021-09-28', '10:26:22', '00:00:00', NULL, 1, 1),
(558, 1, 14, 85, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-30', '09:09:45', '00:00:00', NULL, 1, 1),
(559, 1, 26, 118, 1, NULL, NULL, NULL, NULL, NULL, '2021-09-30', '09:10:06', '00:00:00', NULL, 1, 1),
(560, 1, 209, 88, 1, NULL, NULL, NULL, NULL, NULL, '2021-10-01', '10:50:55', '00:00:00', NULL, 1, 1),
(561, 1, 210, 73, 1, NULL, NULL, NULL, NULL, NULL, '2021-11-01', '08:37:01', '00:00:00', NULL, 1, 1),
(562, 1, 128, 92, 1, NULL, NULL, NULL, NULL, NULL, '2021-11-15', '07:19:46', '07:26:01', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_frequantation_externe`
--

CREATE TABLE `t_frequantation_externe` (
  `CodeFrequantation` int(11) NOT NULL,
  `CodeFrequantant` int(11) NOT NULL,
  `CodeEquipement` int(11) NOT NULL,
  `Date` date NOT NULL,
  `HeureArrive` time NOT NULL,
  `HeureDepart` time NOT NULL,
  `Motif` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_garantie`
--

CREATE TABLE `t_garantie` (
  `CodeGarantie` int(11) NOT NULL,
  `Valeur` float NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_garantie`
--

INSERT INTO `t_garantie` (`CodeGarantie`, `Valeur`, `Created_on`) VALUES
(1, 1, '2021-03-18'),
(2, 2, '2021-03-18'),
(3, 3, '2021-03-18'),
(4, 4, '2021-03-18'),
(5, 5, '2021-03-18'),
(6, 6, '2021-03-18'),
(7, 7, '2021-03-18'),
(8, 8, '2021-03-18'),
(9, 9, '2021-03-18'),
(10, 10, '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_accesspoint`
--

CREATE TABLE `t_marque_accesspoint` (
  `CodeMarqueAccessPoint` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_accesspoint`
--

INSERT INTO `t_marque_accesspoint` (`CodeMarqueAccessPoint`, `Value`, `Created_on`) VALUES
(1, 'D-Link', '2021-03-18'),
(2, 'Huawei', '2021-03-18'),
(3, 'Cisco', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_adaptateur`
--

CREATE TABLE `t_marque_adaptateur` (
  `CodeMarqueAdaptateur` int(11) NOT NULL,
  `Valeur` text NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_adaptateur`
--

INSERT INTO `t_marque_adaptateur` (`CodeMarqueAdaptateur`, `Valeur`, `Created_on`) VALUES
(1, 'HP GROS', '2021-03-18'),
(2, 'HP MINCE', '2021-03-18'),
(3, 'LENOVO rond', '2021-03-18'),
(4, 'LENOVO rectangle', '2021-03-18'),
(5, 'ACER', '2021-03-18'),
(6, 'SAMSUNG', '2021-03-18'),
(7, 'TOSHIBA', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_cable`
--

CREATE TABLE `t_marque_cable` (
  `CodeMarqueCable` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_cable`
--

INSERT INTO `t_marque_cable` (`CodeMarqueCable`, `Valeur`, `Created_on`) VALUES
(1, 'Cable reseau', '2021-03-18'),
(2, 'Cable coaxial', '2021-03-18'),
(3, 'Cable Electrique', '2021-03-18'),
(4, 'Cable VGA', '2021-03-18'),
(5, 'Cable HDMI', '2021-03-18'),
(6, 'Cable USB', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_cadenat`
--

CREATE TABLE `t_marque_cadenat` (
  `CodeMarqueCadenat` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_cadenat`
--

INSERT INTO `t_marque_cadenat` (`CodeMarqueCadenat`, `Valeur`, `Created_on`) VALUES
(1, 'Avec cle d\'ouverture', '2021-03-18'),
(2, 'Avec Code', '2021-03-18'),
(3, 'Sans cadenat', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_ecran`
--

CREATE TABLE `t_marque_ecran` (
  `CodeMarqueEcran` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_ecran`
--

INSERT INTO `t_marque_ecran` (`CodeMarqueEcran`, `Valeur`, `Created_on`) VALUES
(1, 'HP', '2021-03-18'),
(2, 'LENOVO', '2021-03-18'),
(3, 'SAMSUNG', '2021-03-18'),
(4, 'DELL', '2021-03-18'),
(5, 'MAC', '2021-03-18'),
(6, 'STA LION', '2021-05-21'),
(7, 'COMPAC', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_imprimante`
--

CREATE TABLE `t_marque_imprimante` (
  `CodeMarqueImprimante` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_imprimante`
--

INSERT INTO `t_marque_imprimante` (`CodeMarqueImprimante`, `Valeur`, `Created_on`) VALUES
(1, 'EPSON', '2021-03-18'),
(3, 'CAN0N', '2021-03-18'),
(4, 'HP', '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_ordinateur`
--

CREATE TABLE `t_marque_ordinateur` (
  `CodeMarque` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL,
  `CodeCategorieMateriel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_ordinateur`
--

INSERT INTO `t_marque_ordinateur` (`CodeMarque`, `Valeur`, `Created_on`, `CodeCategorieMateriel`) VALUES
(1, 'HP', '2021-03-18', 1),
(2, 'DELL', '2021-03-18', 1),
(3, 'LENOVO', '2021-03-18', 1),
(4, 'SAMSUNG', '2021-03-18', 1),
(5, 'TOSHIBA', '2021-03-18', 1),
(6, 'MACBOOK', '2021-08-05', 1),
(11, 'CISCO', '2021-08-30', 2),
(12, 'HP', '2021-08-30', 12),
(13, 'BLUE CARD', '2021-08-30', 13),
(14, 'EPSON', '2021-08-31', 8),
(15, 'CISCO', '2021-08-31', 14),
(16, 'CISCO', '2021-08-31', 3),
(17, 'HP', '2021-08-31', 9),
(18, 'SAMSUNG', '2021-08-31', 9),
(19, 'LENOVO', '2021-09-01', 12);

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_rallonge`
--

CREATE TABLE `t_marque_rallonge` (
  `CodeMarqueRallonge` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_rallonge`
--

INSERT INTO `t_marque_rallonge` (`CodeMarqueRallonge`, `Valeur`, `Created_on`) VALUES
(1, 'KADRIS', '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_routeur`
--

CREATE TABLE `t_marque_routeur` (
  `CodeMarqueRouteur` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_routeur`
--

INSERT INTO `t_marque_routeur` (`CodeMarqueRouteur`, `Valeur`, `Created_on`) VALUES
(1, 'CISCO', '2021-03-18'),
(2, 'D-LINK', '2021-03-18'),
(3, 'HUAWEI', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_marque_switch`
--

CREATE TABLE `t_marque_switch` (
  `CodeMarqueSwitch` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_marque_switch`
--

INSERT INTO `t_marque_switch` (`CodeMarqueSwitch`, `Valeur`, `Created_on`) VALUES
(1, 'CISCO', '2021-03-18'),
(2, 'D-LINK', '2021-03-18'),
(3, 'HUAWEI', '2021-03-18'),
(4, 'ALLIED TELESIS', '2021-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `t_materiel`
--

CREATE TABLE `t_materiel` (
  `CodeMateriel` int(11) NOT NULL,
  `CodeCategorieMateriel` int(11) NOT NULL,
  `CodeGarantie` int(11) DEFAULT NULL,
  `CodeMarque` int(11) DEFAULT NULL,
  `CodeModele` int(11) DEFAULT NULL,
  `CodeCouleur` int(11) NOT NULL,
  `CodeEtatMateriel` int(11) NOT NULL,
  `CodeTypeOrdinateur` int(11) DEFAULT NULL,
  `CodeTypeClavier` int(11) DEFAULT NULL,
  `CodeOS` int(11) DEFAULT NULL,
  `CodeTypeHDD` int(11) DEFAULT NULL,
  `CodeNombreHDD` int(11) DEFAULT NULL,
  `CodeCapaciteHDD` int(11) DEFAULT NULL,
  `CodeTailleEcran` int(11) DEFAULT NULL,
  `CodeTypePortProjecteur` int(11) DEFAULT NULL,
  `CodeTensionBatterie` int(11) DEFAULT NULL,
  `CodeMarqueImprimante` int(11) DEFAULT NULL,
  `NumeroImprimante` varchar(255) DEFAULT NULL,
  `CodePuissanceImprimante` int(11) DEFAULT NULL,
  `CodeMarqueRouteur` int(11) DEFAULT NULL,
  `CodeTypeIOS` int(11) DEFAULT NULL,
  `CodeMarqueSwitch` int(11) DEFAULT NULL,
  `CodeMarqueCable` int(11) DEFAULT NULL,
  `CodeMarqueAccessPoint` int(11) DEFAULT NULL,
  `CodeMarqueRallonge` int(11) DEFAULT NULL,
  `CodeMarqueEcran` int(11) DEFAULT NULL,
  `CodeMarqueReader` int(11) DEFAULT NULL,
  `CodeMarqueCadenat` int(11) DEFAULT NULL,
  `CodeAffectation` int(11) NOT NULL,
  `NumeroCle` int(11) DEFAULT NULL,
  `QrCode` text NOT NULL,
  `DateAcquisition` date DEFAULT NULL,
  `Created_on` date NOT NULL,
  `Modified_on` date DEFAULT NULL,
  `Poids` decimal(10,0) DEFAULT NULL,
  `Photo1` text NOT NULL,
  `Photo2` text DEFAULT NULL,
  `Photo3` text DEFAULT NULL,
  `Etiquette` varchar(150) DEFAULT NULL,
  `User` varchar(100) DEFAULT NULL,
  `MacLAN` text DEFAULT NULL,
  `MacWIFI` text DEFAULT NULL,
  `Observation` text NOT NULL,
  `Code_User_created` int(11) NOT NULL,
  `CapaciteRAM` double DEFAULT NULL,
  `CodeTypeRAM` int(11) DEFAULT NULL,
  `CodeEtatBatterie` int(11) DEFAULT NULL,
  `CapaciteProcesseur` varchar(100) DEFAULT NULL,
  `NombreCoeurProcesseur` int(11) DEFAULT NULL,
  `TensionBatterie` varchar(100) DEFAULT NULL,
  `CodeFournisseur` int(11) DEFAULT NULL,
  `NombrePortSwitch` int(11) DEFAULT NULL,
  `LongueurCable` float DEFAULT NULL,
  `NombrePortAccessPoint` int(11) DEFAULT NULL,
  `NombrePort` int(11) NOT NULL,
  `NombrePortRouteur` int(11) DEFAULT NULL,
  `NombrePriseRallonge` int(11) DEFAULT NULL,
  `CodeAdaptateur` int(11) DEFAULT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_materiel`
--

INSERT INTO `t_materiel` (`CodeMateriel`, `CodeCategorieMateriel`, `CodeGarantie`, `CodeMarque`, `CodeModele`, `CodeCouleur`, `CodeEtatMateriel`, `CodeTypeOrdinateur`, `CodeTypeClavier`, `CodeOS`, `CodeTypeHDD`, `CodeNombreHDD`, `CodeCapaciteHDD`, `CodeTailleEcran`, `CodeTypePortProjecteur`, `CodeTensionBatterie`, `CodeMarqueImprimante`, `NumeroImprimante`, `CodePuissanceImprimante`, `CodeMarqueRouteur`, `CodeTypeIOS`, `CodeMarqueSwitch`, `CodeMarqueCable`, `CodeMarqueAccessPoint`, `CodeMarqueRallonge`, `CodeMarqueEcran`, `CodeMarqueReader`, `CodeMarqueCadenat`, `CodeAffectation`, `NumeroCle`, `QrCode`, `DateAcquisition`, `Created_on`, `Modified_on`, `Poids`, `Photo1`, `Photo2`, `Photo3`, `Etiquette`, `User`, `MacLAN`, `MacWIFI`, `Observation`, `Code_User_created`, `CapaciteRAM`, `CodeTypeRAM`, `CodeEtatBatterie`, `CapaciteProcesseur`, `NombreCoeurProcesseur`, `TensionBatterie`, `CodeFournisseur`, `NombrePortSwitch`, `LongueurCable`, `NombrePortAccessPoint`, `NombrePort`, `NombrePortRouteur`, `NombrePriseRallonge`, `CodeAdaptateur`, `CodeService`) VALUES
(1, 1, 5, 1, 3, 6, 1, 1, 1, 4, 1, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '2015-01-01', '2021-08-16', '2021-08-16', NULL, 'hp 650 notebook.png', '', '', 'PC-072', 'SECTION-PC', '', '', 'Probleme de carte reseau ethernet & batterie', 1, 4, 2, NULL, '1.80 Ghz', 4, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 31, 1),
(49, 1, 5, 1, 3, 6, 2, 1, 1, 3, 2, 1, 4, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-08-30', NULL, 'hp 650 notebook.png', '', '', 'PC-001', '', '', '', 'Probleme d\'alimentation', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(50, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-07-08', NULL, 'hp 650 notebook.png', '', '', 'PC-002', 'ILABO10-PC', '', '', 'Batterie endomagée', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 8, 1),
(51, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-003', 'ILABO47-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 9, 1),
(52, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-08-16', NULL, 'hp 650 notebook.png', '', '', 'PC-004', 'ILABO12-PC', '', '', 'Adaptateur à la bibliothèque', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(53, 1, 5, 1, 3, 6, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-005', 'GDGIMFS', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 13, 1),
(54, 1, 5, 1, 3, 6, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-006', 'PC', '', '', 'Batterie endomagee', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 74, 1),
(55, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-007', 'ILABO07-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 12, 1),
(56, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-008', 'ILABO46-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 11, 1),
(57, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-010', 'ISIG-LABO35-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 15, 1),
(58, 1, 5, 3, 5, 1, 1, 1, 1, 4, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 64, '', '0000-00-00', '2021-04-11', '2021-08-16', NULL, 'laptop_lenovo_thinkpad_l4207829br1.jpg', '', '', 'PC-009', 'PC', '', '', 'Carte réseau sans fils endommagé', 1, 2, 2, 0, '2.30Ghz', 4, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 14, 1),
(59, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-11', '2021-04-24', NULL, 'hp 650 notebook.png', '', '', 'PC-011', 'ISIG-LABO001-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 16, 1),
(60, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-11', '2021-07-13', NULL, 'hp 650 notebook.png', '', '', 'PC-012', 'ISIG-LABO19-PC', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 17, 1),
(61, 1, 5, 1, 6, 1, 1, 1, 2, 3, 2, 1, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, '925051954s.jpg', '', '', 'PC-013', 'ILABO_HPUSER-PC', '', '', 'Ruban', 1, 512, 1, 0, '1.73Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 20, 1),
(62, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-014', 'LABO15-PC', '', '', 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 18, 1),
(63, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-06-15', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-016', 'ILABO01-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, 'n/a', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 24, 1),
(64, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-06-15', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-015', 'ILABO027-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 21, 1),
(65, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-017', 'ISIG-LABO18-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 22, 1),
(66, 1, 5, 1, 3, 6, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-13', NULL, 'hp 650 notebook.png', '', '', 'PC-018', 'ILPC055', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 23, 1),
(67, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-019', 'ISIG-LABO10-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 25, 1),
(68, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-020', 'ISIG-LABO45-PC', NULL, NULL, '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(69, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-08-16', NULL, 'hp 650 notebook.png', '', '', 'PC-021', 'ILABO003-PC', '', '', 'Echange avec le PC N 072', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(70, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', NULL, NULL, 'hp 650 notebook.png', '', '', 'PC-022', 'ISIG-LABO43-PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(71, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-023', 'ILABO09-PC', NULL, NULL, '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 28, 1),
(72, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-024', 'ISIG-LABO40-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 29, 1),
(73, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-025', 'ILABO085', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 30, 1),
(74, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'hp 650 notebook.png', '', '', 'PC-026', 'ISIGLABO3-PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(75, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-08-20', NULL, 'hp 650 notebook.png', '', '', 'PC-027', 'ISIG-LABO41-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 77, 1),
(76, 1, 5, 1, 9, 1, 1, 1, 1, 3, 3, 1, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, 'unnamed.jpg', '', '', 'PC-030', 'ADMIN-PC', '', '', '', 1, 1, 1, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 35, 1),
(77, 1, 5, 5, 10, 1, 1, 1, 1, 3, 2, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, 'hri_satellite_pro_l40_ch16180.jpg', '', '', 'PC-031', 'ADMIN-PC', '', '', 'Batterie endomagee', 1, 1, 1, 0, '1.86Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 36, 1),
(78, 1, 5, 5, 11, 1, 1, 1, 1, 1, 3, 1, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, 'toshiba-logo-vector-01.png', '', '', 'PC-028', 'ISIG-LABO', '', '', '', 1, 1, 1, 0, '2.19Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 34, 1),
(79, 1, 5, 1, 8, 1, 1, 1, 2, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 80, '', '0000-00-00', '2021-04-12', '2021-07-09', NULL, 'HP-250-G5.jpg', '', '', 'PC-035', 'ILABO080', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 40, 1),
(80, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 60, '', '0000-00-00', '2021-04-12', '2021-07-09', NULL, 'HP-250-G5.jpg', '', '', 'PC-034', 'ILABO079', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 39, 1),
(81, 1, 5, 1, 8, 1, 1, 1, 1, 4, 1, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 85, '', '0000-00-00', '2021-04-12', '2021-08-20', NULL, 'HP-250-G5.jpg', '', '', 'PC-032', 'ILABO077', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 78, 1),
(82, 1, 5, 5, 11, 2, 2, 1, 1, 1, 3, 1, 9, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-07-07', NULL, 'toshiba-logo-vector-01.png', '', '', 'PC-029', '', '', '', 'Ne s\'allume pas', 1, 0, 1, 0, '', 0, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(83, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP-250-G5.jpg', '', '', 'PC-033', 'ILABO078', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 38, 1),
(84, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-08-20', NULL, 'HP-250-G5.jpg', '', '', 'PC-036', 'ILABO085', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 42, 1),
(85, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-08-20', NULL, 'HP-250-G5.jpg', '', '', 'PC-037', 'ILABO083', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 76, 1),
(86, 1, 5, 1, 8, 1, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP-250-G5.jpg', '', '', 'PC-038', 'ILABO082', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 43, 1),
(87, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-12', '2021-04-12', NULL, 'HP-250-G5.jpg', '', '', 'PC-039', 'ILABO081', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 44, 1),
(88, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 58, '', '0000-00-00', '2021-04-13', '2021-07-09', NULL, 'HP-250-G5.jpg', '', '', 'PC-040', 'PC', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 46, 1),
(89, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-041', 'ILABO071', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 48, 1),
(90, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-042', 'ILABO070', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 45, 1),
(91, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-07-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-043', 'ILABO069', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 47, 1),
(92, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-07-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-044', 'PC', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 49, 1),
(93, 1, 5, 1, 3, 6, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-045', 'ILABO045PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 50, 1),
(94, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-046', 'ILABO074-PC', NULL, NULL, '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 51, 1),
(95, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 73, '', '0000-00-00', '2021-04-13', '2021-07-09', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-047', 'ILABO073-PC', '', '', '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 52, 1),
(96, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 68, '', '0000-00-00', '2021-04-13', '2021-10-01', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-048', 'ISIG-LABO08-PC', '', '', 'Batterie endommage', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 53, 1),
(97, 1, 5, 1, 3, 6, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-09-24', NULL, 'hp 650 notebook.png', '', '', 'PC-049', 'LABOISIG', '', '', '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(98, 1, 1, 1, 12, 6, 1, 1, 1, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 66, '', '0000-00-00', '2021-04-13', '2021-08-16', NULL, '$_57.jpg', '', '', 'PC-050', 'ISIG-LABO04-PC', '', '', '', 1, 2, 2, 0, '2.00Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 55, 1),
(99, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-051', 'ISIG-LABO-PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 56, 1),
(100, 1, 5, 1, 3, 1, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-052', 'ILABO061-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 57, 1),
(101, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-053', 'ILABO046-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 58, 1),
(102, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-054', 'ISIG-LABO01-PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 59, 1),
(103, 1, 5, 1, 3, 6, 2, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', NULL, NULL, 'hp 650 notebook.png', '', '', 'PC-055', '', NULL, NULL, 'Ne s\'allume plus', 1, 0, 2, 0, '', 0, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(104, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-056', 'ILABO013-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 62, 1),
(105, 1, 1, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-057', 'ILABO005-PC', NULL, NULL, '', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 61, 1),
(106, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-05-11', NULL, 'hp 650 notebook.png', '', '', 'PC-058', 'ILABO012-PC', NULL, NULL, '', 1, 0, 2, 0, '', 0, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(107, 1, 5, 1, 3, 6, 1, 1, 1, 3, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-06-29', NULL, 'hp 650 notebook.png', '', '', 'PC-059', 'ILABO001-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '1.80Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 75, 1),
(108, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-060', 'ISIG-LABO09-PC', NULL, NULL, 'Batterie endomagee', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 64, 1),
(109, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-061', 'ILABO032-PC', NULL, NULL, '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 65, 1),
(110, 1, 5, 1, 7, 6, 1, 1, 2, 3, 2, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP 620 Notebook (1).jpg', '', '', 'PC-062', 'ILABO015-PC', NULL, NULL, '', 1, 2, 2, 0, '2.30Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 66, 1),
(111, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-06-15', NULL, 'HP-250-G5.jpg', '', '', 'PC-063', 'LABOL057', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 73, 1),
(112, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-064', 'ILABO058', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 67, 1),
(113, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-065', 'ILABO059', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 1, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 68, 1),
(114, 1, 5, 1, 3, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'hp 650 notebook.png', '', '', 'PC-066', 'ILABO060', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 69, 1),
(115, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 67, '', '0000-00-00', '2021-04-13', '2021-07-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-067', 'ISIG-LABO', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 37, 1),
(116, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 63, '', '0000-00-00', '2021-04-13', '2021-08-10', NULL, 'HP-250-G5.jpg', '', '', 'PC-068', 'ILABO063', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 72, 1),
(117, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '', '0000-00-00', '2021-04-13', '2021-04-13', NULL, 'HP-250-G5.jpg', '', '', 'PC-069', 'ILABO062', NULL, NULL, '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 71, 1),
(118, 1, 5, 1, 8, 1, 1, 1, 1, 4, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 61, '', '0000-00-00', '2021-04-13', '2021-07-09', NULL, 'HP-250-G5.jpg', '', '', 'PC-070', 'ILABO061', '', '', '', 1, 4, 2, 0, '1.60Ghz', 2, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(119, 8, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'LaserJet M1132 MFP', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '', '2015-01-01', '2021-04-13', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(120, 8, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'L210', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '', '2015-01-01', '2021-04-13', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(121, 3, NULL, NULL, NULL, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '', '2015-01-01', '2021-05-14', NULL, NULL, '', NULL, NULL, 'SWITCH-01', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(122, 9, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-01', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(123, 9, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-02', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(124, 9, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-03', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(125, 9, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-04', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(126, 9, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-05', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(127, 9, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, 12, NULL, '', '2015-01-01', '2021-05-21', NULL, NULL, '', NULL, NULL, 'ECR-06', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(128, 1, 5, 1, 8, 1, 1, 1, 1, 5, 2, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, 0, '', '2015-01-01', '2021-07-09', NULL, NULL, 'HP-250-G5.jpg', '', '', 'PC-071', 'BIBLIOTHEQUE', NULL, NULL, '', 1, 4, 2, NULL, '1.60Ghz', 4, NULL, 2, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1),
(142, 2, NULL, 11, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '', '0000-00-00', '2021-09-01', NULL, NULL, '', NULL, NULL, 'ROUT-001', NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_materiel_siege`
--

CREATE TABLE `t_materiel_siege` (
  `CodeMaterielSiege` int(11) NOT NULL,
  `CodeMateriel` int(11) NOT NULL,
  `CodeSiege` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_modele`
--

CREATE TABLE `t_modele` (
  `CodeModele` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL,
  `CodeCategorieMateriel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_modele`
--

INSERT INTO `t_modele` (`CodeModele`, `Valeur`, `Created_on`, `CodeCategorieMateriel`) VALUES
(1, 'SAMSUNG', '2021-08-30', 9),
(3, '650 Notebook', '2021-03-18', 1),
(4, 'Thinkpad', '2021-03-18', 1),
(5, '7829BR8', '2021-04-11', 1),
(6, 'Compaq nx6110', '2021-04-12', 1),
(7, '620', '2021-04-12', 1),
(8, '250 G5 Notebook', '2021-04-12', 1),
(9, 'Pavillon dv 4000', '2021-04-12', 1),
(10, 'Satellite pro L40', '2021-04-12', 1),
(11, 'toshiba', '2021-04-12', 1),
(12, '630 Notebook', '2021-04-13', 1),
(15, 'Elitebook', '2021-08-30', 12),
(16, 'ARDUINO FOR USA', '2021-08-30', 13),
(17, 'Modeleswitch', '2021-08-31', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_modele_reader`
--

CREATE TABLE `t_modele_reader` (
  `CodeMarqueReader` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_modele_reader`
--

INSERT INTO `t_modele_reader` (`CodeMarqueReader`, `Valeur`, `Created_on`) VALUES
(1, 'HF2D SCANNER', '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `t_nombre_hdd`
--

CREATE TABLE `t_nombre_hdd` (
  `CodeNombreHDD` int(11) NOT NULL,
  `Valeur` int(11) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_nombre_hdd`
--

INSERT INTO `t_nombre_hdd` (`CodeNombreHDD`, `Valeur`, `Created_on`) VALUES
(1, 1, '2021-03-18'),
(2, 2, '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_option`
--

CREATE TABLE `t_option` (
  `CodeOption` int(11) NOT NULL,
  `Valeur` text NOT NULL,
  `Code` varchar(15) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_option`
--

INSERT INTO `t_option` (`CodeOption`, `Valeur`, `Code`, `Created_on`) VALUES
(1, 'INFORMATIQUE DE GESTION', 'IG', '2021-03-18'),
(2, 'GESTION DE DEVELOPPEMENT', 'GD', '2021-03-18'),
(3, 'SANTE PUBLIQUE', 'SP', '2021-03-18'),
(4, 'SECRETARIAT DE DIRECTION', 'SD', '2021-03-18'),
(5, 'MARKETING', 'MARK', '2021-03-18'),
(6, 'RESEAU ET TELECOMMUNICATION', 'RTEL', '2021-03-18'),
(7, 'MICRO-FINANCE', 'GIMF', '2021-03-18'),
(9, 'GESTION DES RESSOURCES HUMAINES', 'GRH', '2021-08-23'),
(10, 'SCIENCES COMMERCIALES', 'SC', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `t_os`
--

CREATE TABLE `t_os` (
  `CodeOS` int(11) NOT NULL,
  `Valeur` text NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_os`
--

INSERT INTO `t_os` (`CodeOS`, `Valeur`, `Created_on`) VALUES
(1, 'WINDOWS XP', '2021-03-18'),
(2, 'WINDOWS VISTA', '2021-03-18'),
(3, 'WINDOWS 7', '2021-03-18'),
(4, 'WINDOWS 8', '2021-03-18'),
(5, 'WINDOWS 10', '2021-03-18'),
(6, 'UBUNTU', '2021-03-18'),
(7, 'KALI-LINUX', '2021-03-18'),
(8, 'WINDOWS SERVER', '2021-03-18'),
(9, 'WINDOWS 11', '2021-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `t_promotion`
--

CREATE TABLE `t_promotion` (
  `CodePromotion` int(11) NOT NULL,
  `Valeur` varchar(10) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_promotion`
--

INSERT INTO `t_promotion` (`CodePromotion`, `Valeur`, `Created_on`) VALUES
(1, 'G1', '2021-03-18'),
(2, 'G2', '2021-03-18'),
(3, 'G3', '2021-03-18'),
(4, 'L1', '2021-03-18'),
(5, 'L2', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_puissance_imprimante`
--

CREATE TABLE `t_puissance_imprimante` (
  `CodePuissanceImprimante` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_puissance_imprimante`
--

INSERT INTO `t_puissance_imprimante` (`CodePuissanceImprimante`, `Valeur`, `Created_on`) VALUES
(3, '220-240 V', '2021-04-13'),
(4, '100-240 V', '2021-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `t_service`
--

CREATE TABLE `t_service` (
  `CodeService` int(11) NOT NULL,
  `Service` varchar(200) NOT NULL,
  `Abbrev` varchar(15) NOT NULL,
  `ResponsableService` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_service`
--

INSERT INTO `t_service` (`CodeService`, `Service`, `Abbrev`, `ResponsableService`) VALUES
(1, 'LABORATOIRE INFORMATIQUE 1', 'Labo 1', 'BARAKA BIGEGA ESPOIR'),
(2, 'LABORATOIRE INFORMATIQUE 2', 'Labo 2', 'Ass. GLODY'),
(3, 'CYBER CAFE', 'Cyber', 'HAKIZIMANA CLAUDE');

-- --------------------------------------------------------

--
-- Table structure for table `t_siege`
--

CREATE TABLE `t_siege` (
  `CodeSiege` int(11) NOT NULL,
  `EtiquetteSiege` varchar(100) NOT NULL,
  `Detail` varchar(150) NOT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_siege`
--

INSERT INTO `t_siege` (`CodeSiege`, `EtiquetteSiege`, `Detail`, `CodeService`) VALUES
(1, 'SIEGE-01', 'Longue chaise + Longue table', 1),
(2, 'SIEGE-02', 'Longue chaise + Longue table', 1),
(3, 'SIEGE-03', 'Longue chaise + Longue table', 1),
(4, 'SIEGE-04', 'Longue chaise + Longue table', 1),
(5, 'SIEGE-05', 'Longue chaise + Longue table', 1),
(6, 'SIEGE-06', 'Longue chaise + Longue table', 1),
(7, 'SIEGE-07', 'Longue chaise + Longue table', 1),
(8, 'SIEGE-08', 'Longue chaise + Longue table', 1),
(9, 'SIEGE-09', 'Longue chaise + Longue table', 1),
(10, 'SIEGE-10', 'Longue chaise + Longue table', 1),
(11, 'SIEGE-11', 'Longue chaise + Longue table', 1),
(12, 'SIEGE-12', 'Longue chaise + Longue table', 1),
(13, 'SIEGE-13', 'Longue chaise + Longue table', 1),
(14, 'SIEGE-14', 'Longue chaise + Longue table', 1),
(15, 'SIEGE-15', 'Longue chaise + Longue table', 1),
(16, 'SIEGE-16', 'Longue chaise + Longue table', 1),
(17, 'SIEGE-17', 'Longue chaise + Longue table', 1),
(18, 'SIEGE-17', 'Longue chaise + Longue table', 1),
(19, 'SIEGE-19', 'Longue chaise + Longue table', 1),
(20, 'SIEGE-20', 'Longue chaise + Longue table', 1),
(21, 'SIEGE-21', 'Longue chaise + Longue table', 1),
(22, 'SIEGE-22', 'Longue chaise + Longue table', 1),
(23, 'SIEGE-23', 'Longue chaise + Longue table', 1),
(24, 'SIEGE-24', 'Longue chaise + Longue table', 1),
(25, 'SIEGE-25', 'Longue chaise + Longue table', 1),
(26, 'SIEGE-26', 'Longue chaise + Longue table', 1),
(27, 'SIEGE-27', 'Longue chaise + Longue table', 1),
(28, 'SIEGE-28', 'Longue chaise + Longue table', 1),
(29, 'SIEGE-29', 'Longue chaise + Longue table', 1),
(30, 'SIEGE-30', 'Longue chaise + Longue table', 1),
(31, 'SIEGE-01', 'Table roulante', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_taille_ecran`
--

CREATE TABLE `t_taille_ecran` (
  `CodeTailleEcran` int(11) NOT NULL,
  `Valeur` int(11) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_taille_ecran`
--

INSERT INTO `t_taille_ecran` (`CodeTailleEcran`, `Valeur`, `Created_on`) VALUES
(1, 14, '2021-03-18'),
(2, 21, '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_tension_batterie`
--

CREATE TABLE `t_tension_batterie` (
  `CodeTensionBatterie` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tension_batterie`
--

INSERT INTO `t_tension_batterie` (`CodeTensionBatterie`, `Value`, `Created_on`) VALUES
(1, '10.8', '2021-03-19'),
(2, '12', '2021-03-19'),
(3, '14', '2021-03-19'),
(4, '11.1', '2021-03-19'),
(5, '14.4', '2021-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_clavier`
--

CREATE TABLE `t_type_clavier` (
  `CodeTypeClavier` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_clavier`
--

INSERT INTO `t_type_clavier` (`CodeTypeClavier`, `Valeur`, `Created_on`) VALUES
(1, 'QWERTY', '2021-03-18'),
(2, 'AZERTY', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_frequantation`
--

CREATE TABLE `t_type_frequantation` (
  `CodeType` int(11) NOT NULL,
  `Valeur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_frequantation`
--

INSERT INTO `t_type_frequantation` (`CodeType`, `Valeur`) VALUES
(1, 'Ordinateur du labo'),
(2, 'Ordinateur de l\'étudiant');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_hdd`
--

CREATE TABLE `t_type_hdd` (
  `CodeTypeHDD` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_hdd`
--

INSERT INTO `t_type_hdd` (`CodeTypeHDD`, `Valeur`, `Created_on`) VALUES
(1, 'SSD', '2021-03-18'),
(2, 'SATA', '2021-03-18'),
(3, 'IDE', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_ios`
--

CREATE TABLE `t_type_ios` (
  `CodeTypeIOS` int(11) NOT NULL,
  `Valeur` text NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_type_ordinateur`
--

CREATE TABLE `t_type_ordinateur` (
  `CodeTypeOrdinateur` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_ordinateur`
--

INSERT INTO `t_type_ordinateur` (`CodeTypeOrdinateur`, `Valeur`, `Created_on`) VALUES
(1, 'LAPTOP', '2021-03-18'),
(2, 'DESKTOP', '2021-03-18'),
(3, 'SERVEUR', '2021-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_port_projecteur`
--

CREATE TABLE `t_type_port_projecteur` (
  `CodeTypePortProjecteur` int(11) NOT NULL,
  `Valeur` varchar(255) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_port_projecteur`
--

INSERT INTO `t_type_port_projecteur` (`CodeTypePortProjecteur`, `Valeur`, `Created_on`) VALUES
(1, 'VGA', '2021-03-18'),
(2, 'HDMI', '2021-03-18'),
(3, 'USB', '2021-03-18'),
(4, 'HDMI et VGA', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `t_type_ram`
--

CREATE TABLE `t_type_ram` (
  `CodeTypeRAM` int(11) NOT NULL,
  `Valeur` varchar(50) NOT NULL,
  `Created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_type_ram`
--

INSERT INTO `t_type_ram` (`CodeTypeRAM`, `Valeur`, `Created_on`) VALUES
(1, 'DDR2', '2021-03-18'),
(2, 'DDR3', '2021-03-18'),
(3, 'DDR4', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `CodeUser` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` text NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Postnom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Photo` text DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `Created_on` date NOT NULL,
  `CodeService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`CodeUser`, `Username`, `Email`, `Password`, `Nom`, `Postnom`, `Prenom`, `Photo`, `Status`, `Created_on`, `CodeService`) VALUES
(1, 'espoir', 'esbarakabigega@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Baraka', 'Bigega', 'Bigega', 'IMG_20210107_181859101.jpg', 1, '2021-03-18', 1),
(2, 'Glodi', 'glodimaley@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Glodi', 'Maley', 'Maley', '', 1, '2021-08-27', 2),
(3, 'ratis', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Hakizimana', 'Claude', 'Bienfait', '', 1, '2021-08-27', 3),
(6, 'es', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', '', '', NULL, 1, '0000-00-00', 0),
(9, 'esb', 'esbarakabigega@gmail', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Baraka', 'Bigega', 'Bigega', '243991286881_status_884e809371244c45bb33fe15cbaf3e51.jpg', 1, '2021-08-27', 1),
(10, 'esbaraka', 'es@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Baraka', 'Bigega', 'Espoir', '', 1, '2021-09-28', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_adaptateur`
--
ALTER TABLE `t_adaptateur`
  ADD PRIMARY KEY (`CodeAdaptateur`),
  ADD KEY `fk_adaptateur_marque` (`CodeMarqueAdaptateur`),
  ADD KEY `fk_adaptateur_affectation` (`CodeAffectation`),
  ADD KEY `fk_adaptateur_etat` (`CodeEtatMateriel`);

--
-- Indexes for table `t_affectation`
--
ALTER TABLE `t_affectation`
  ADD PRIMARY KEY (`CodeAffectation`);

--
-- Indexes for table `t_auditoire`
--
ALTER TABLE `t_auditoire`
  ADD PRIMARY KEY (`CodeAuditoire`),
  ADD KEY `fk_auditoire_promotion` (`CodePromotion`),
  ADD KEY `fk_auditoire_option` (`CodeOption`);

--
-- Indexes for table `t_capacite_hdd`
--
ALTER TABLE `t_capacite_hdd`
  ADD PRIMARY KEY (`CodeCapaciteHDD`);

--
-- Indexes for table `t_categorie_frequantant`
--
ALTER TABLE `t_categorie_frequantant`
  ADD PRIMARY KEY (`CodeCategorieFrequantant`);

--
-- Indexes for table `t_categorie_materiel`
--
ALTER TABLE `t_categorie_materiel`
  ADD PRIMARY KEY (`CodeCategorie`);

--
-- Indexes for table `t_couleur`
--
ALTER TABLE `t_couleur`
  ADD PRIMARY KEY (`CodeCouleur`);

--
-- Indexes for table `t_cours`
--
ALTER TABLE `t_cours`
  ADD PRIMARY KEY (`CodeCours`);

--
-- Indexes for table `t_equipement_externe`
--
ALTER TABLE `t_equipement_externe`
  ADD PRIMARY KEY (`CodeEquipement`),
  ADD KEY `fk_equipement_categorie` (`CodeCategorieMateriel`),
  ADD KEY `fk_equipement_marque_ordinateur` (`CodeMarqueOrdinateur`),
  ADD KEY `fk_equipement_marque_rallonge` (`CodeMarqueRallonge`),
  ADD KEY `fk_equipement_modele` (`CodeModele`),
  ADD KEY `fk_equipement_couleur` (`CodeCouleur`);

--
-- Indexes for table `t_etat_batterie`
--
ALTER TABLE `t_etat_batterie`
  ADD PRIMARY KEY (`CodeEtatBatterie`);

--
-- Indexes for table `t_etat_materiel`
--
ALTER TABLE `t_etat_materiel`
  ADD PRIMARY KEY (`CodeEtat`);

--
-- Indexes for table `t_fournisseur`
--
ALTER TABLE `t_fournisseur`
  ADD PRIMARY KEY (`CodeFournisseur`);

--
-- Indexes for table `t_frequantant`
--
ALTER TABLE `t_frequantant`
  ADD PRIMARY KEY (`CodeFrequantant`),
  ADD KEY `fk_frequantant_categorie` (`CodeCategorieFrequantant`),
  ADD KEY `fk_frequantant_promotion` (`CodePromotion`),
  ADD KEY `fk_frequantant_option` (`CodeOption`);

--
-- Indexes for table `t_frequantation`
--
ALTER TABLE `t_frequantation`
  ADD PRIMARY KEY (`CodeFrequantation`),
  ADD KEY `fk_frequantantion_frequantant` (`CodeFrequantant`),
  ADD KEY `fk_frequantantion_materiel` (`CodeMateriel`),
  ADD KEY `fk_type_frequantation` (`CodeType`),
  ADD KEY `fk_frequantation_marque` (`CodeMarque`),
  ADD KEY `fk_frequantation_couleur` (`CodeCouleur`),
  ADD KEY `fk_frequantation_siege` (`CodeSiege`),
  ADD KEY `fk_frequantantion_categorie` (`CodeCategorieFrequantant`),
  ADD KEY `fk_frequantantion_auditoire` (`CodeAuditoire`),
  ADD KEY `fk_frequantation_cours` (`CodeCours`);

--
-- Indexes for table `t_frequantation_externe`
--
ALTER TABLE `t_frequantation_externe`
  ADD PRIMARY KEY (`CodeFrequantation`),
  ADD KEY `fk_externe_equipement` (`CodeEquipement`),
  ADD KEY `fk_externe_frequantant` (`CodeFrequantant`);

--
-- Indexes for table `t_garantie`
--
ALTER TABLE `t_garantie`
  ADD PRIMARY KEY (`CodeGarantie`);

--
-- Indexes for table `t_marque_accesspoint`
--
ALTER TABLE `t_marque_accesspoint`
  ADD PRIMARY KEY (`CodeMarqueAccessPoint`);

--
-- Indexes for table `t_marque_adaptateur`
--
ALTER TABLE `t_marque_adaptateur`
  ADD PRIMARY KEY (`CodeMarqueAdaptateur`);

--
-- Indexes for table `t_marque_cable`
--
ALTER TABLE `t_marque_cable`
  ADD PRIMARY KEY (`CodeMarqueCable`);

--
-- Indexes for table `t_marque_cadenat`
--
ALTER TABLE `t_marque_cadenat`
  ADD PRIMARY KEY (`CodeMarqueCadenat`);

--
-- Indexes for table `t_marque_ecran`
--
ALTER TABLE `t_marque_ecran`
  ADD PRIMARY KEY (`CodeMarqueEcran`);

--
-- Indexes for table `t_marque_imprimante`
--
ALTER TABLE `t_marque_imprimante`
  ADD PRIMARY KEY (`CodeMarqueImprimante`);

--
-- Indexes for table `t_marque_ordinateur`
--
ALTER TABLE `t_marque_ordinateur`
  ADD PRIMARY KEY (`CodeMarque`);

--
-- Indexes for table `t_marque_rallonge`
--
ALTER TABLE `t_marque_rallonge`
  ADD PRIMARY KEY (`CodeMarqueRallonge`);

--
-- Indexes for table `t_marque_routeur`
--
ALTER TABLE `t_marque_routeur`
  ADD PRIMARY KEY (`CodeMarqueRouteur`);

--
-- Indexes for table `t_marque_switch`
--
ALTER TABLE `t_marque_switch`
  ADD PRIMARY KEY (`CodeMarqueSwitch`);

--
-- Indexes for table `t_materiel`
--
ALTER TABLE `t_materiel`
  ADD PRIMARY KEY (`CodeMateriel`),
  ADD UNIQUE KEY `un_adaptateur` (`CodeAdaptateur`),
  ADD KEY `fk_materiel_categorie` (`CodeCategorieMateriel`),
  ADD KEY `fk_materiel_garantie` (`CodeGarantie`),
  ADD KEY `fk_materiel_marque` (`CodeMarque`),
  ADD KEY `fk_materiel_modele` (`CodeModele`),
  ADD KEY `fk_materiel_couleur` (`CodeCouleur`),
  ADD KEY `fk_materiel_etat` (`CodeEtatMateriel`),
  ADD KEY `fk_materiel_typeordinateur` (`CodeTypeOrdinateur`),
  ADD KEY `fk_materiel_typeclavier` (`CodeTypeClavier`),
  ADD KEY `fk_materiel_os` (`CodeOS`),
  ADD KEY `fk_materiel_typeHDD` (`CodeTypeHDD`),
  ADD KEY `fk_materiel_nombreHDD` (`CodeNombreHDD`),
  ADD KEY `fk_materiel_capaciteHDD` (`CodeCapaciteHDD`),
  ADD KEY `fk_materiel_tailleEcran` (`CodeTailleEcran`),
  ADD KEY `fk_materiel_typeportprojecteur` (`CodeTypePortProjecteur`),
  ADD KEY `fk_materiel_tensionbatterie` (`CodeTensionBatterie`),
  ADD KEY `fk_materiel_marqueimprimante` (`CodeMarqueImprimante`),
  ADD KEY `fk_materiel_puissanceimprimante` (`CodePuissanceImprimante`),
  ADD KEY `fk_materiel_marquerouteur` (`CodeMarqueRouteur`),
  ADD KEY `fk_materiel_typeIOS` (`CodeTypeIOS`),
  ADD KEY `fk_materiel_marqueswitch` (`CodeMarqueSwitch`),
  ADD KEY `fk_materiel_marquecable` (`CodeMarqueCable`),
  ADD KEY `fk_materiel_marqueaccesspoint` (`CodeMarqueAccessPoint`),
  ADD KEY `fk_materiel_marqueaccessrallonge` (`CodeMarqueRallonge`),
  ADD KEY `fk_materiel_marqueecran` (`CodeMarqueEcran`),
  ADD KEY `fk_materiel_marquereader` (`CodeMarqueReader`),
  ADD KEY `fk_materiel_marquecadenat` (`CodeMarqueCadenat`),
  ADD KEY `fk_materiel_fournisseur` (`CodeFournisseur`),
  ADD KEY `fk_materiel_affectation` (`CodeAffectation`),
  ADD KEY `fk_materiel_ram` (`CodeTypeRAM`);

--
-- Indexes for table `t_materiel_siege`
--
ALTER TABLE `t_materiel_siege`
  ADD PRIMARY KEY (`CodeMaterielSiege`),
  ADD KEY `fk_materiel_siege_materiel` (`CodeMateriel`),
  ADD KEY `fk_materiel_siege_siege` (`CodeSiege`);

--
-- Indexes for table `t_modele`
--
ALTER TABLE `t_modele`
  ADD PRIMARY KEY (`CodeModele`);

--
-- Indexes for table `t_modele_reader`
--
ALTER TABLE `t_modele_reader`
  ADD PRIMARY KEY (`CodeMarqueReader`);

--
-- Indexes for table `t_nombre_hdd`
--
ALTER TABLE `t_nombre_hdd`
  ADD PRIMARY KEY (`CodeNombreHDD`);

--
-- Indexes for table `t_option`
--
ALTER TABLE `t_option`
  ADD PRIMARY KEY (`CodeOption`);

--
-- Indexes for table `t_os`
--
ALTER TABLE `t_os`
  ADD PRIMARY KEY (`CodeOS`);

--
-- Indexes for table `t_promotion`
--
ALTER TABLE `t_promotion`
  ADD PRIMARY KEY (`CodePromotion`);

--
-- Indexes for table `t_puissance_imprimante`
--
ALTER TABLE `t_puissance_imprimante`
  ADD PRIMARY KEY (`CodePuissanceImprimante`);

--
-- Indexes for table `t_service`
--
ALTER TABLE `t_service`
  ADD PRIMARY KEY (`CodeService`);

--
-- Indexes for table `t_siege`
--
ALTER TABLE `t_siege`
  ADD PRIMARY KEY (`CodeSiege`);

--
-- Indexes for table `t_taille_ecran`
--
ALTER TABLE `t_taille_ecran`
  ADD PRIMARY KEY (`CodeTailleEcran`);

--
-- Indexes for table `t_tension_batterie`
--
ALTER TABLE `t_tension_batterie`
  ADD PRIMARY KEY (`CodeTensionBatterie`);

--
-- Indexes for table `t_type_clavier`
--
ALTER TABLE `t_type_clavier`
  ADD PRIMARY KEY (`CodeTypeClavier`);

--
-- Indexes for table `t_type_frequantation`
--
ALTER TABLE `t_type_frequantation`
  ADD PRIMARY KEY (`CodeType`);

--
-- Indexes for table `t_type_hdd`
--
ALTER TABLE `t_type_hdd`
  ADD PRIMARY KEY (`CodeTypeHDD`);

--
-- Indexes for table `t_type_ios`
--
ALTER TABLE `t_type_ios`
  ADD PRIMARY KEY (`CodeTypeIOS`);

--
-- Indexes for table `t_type_ordinateur`
--
ALTER TABLE `t_type_ordinateur`
  ADD PRIMARY KEY (`CodeTypeOrdinateur`);

--
-- Indexes for table `t_type_port_projecteur`
--
ALTER TABLE `t_type_port_projecteur`
  ADD PRIMARY KEY (`CodeTypePortProjecteur`);

--
-- Indexes for table `t_type_ram`
--
ALTER TABLE `t_type_ram`
  ADD PRIMARY KEY (`CodeTypeRAM`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`CodeUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_adaptateur`
--
ALTER TABLE `t_adaptateur`
  MODIFY `CodeAdaptateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `t_affectation`
--
ALTER TABLE `t_affectation`
  MODIFY `CodeAffectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_auditoire`
--
ALTER TABLE `t_auditoire`
  MODIFY `CodeAuditoire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_capacite_hdd`
--
ALTER TABLE `t_capacite_hdd`
  MODIFY `CodeCapaciteHDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_categorie_frequantant`
--
ALTER TABLE `t_categorie_frequantant`
  MODIFY `CodeCategorieFrequantant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_categorie_materiel`
--
ALTER TABLE `t_categorie_materiel`
  MODIFY `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_couleur`
--
ALTER TABLE `t_couleur`
  MODIFY `CodeCouleur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_cours`
--
ALTER TABLE `t_cours`
  MODIFY `CodeCours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_equipement_externe`
--
ALTER TABLE `t_equipement_externe`
  MODIFY `CodeEquipement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_etat_batterie`
--
ALTER TABLE `t_etat_batterie`
  MODIFY `CodeEtatBatterie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_etat_materiel`
--
ALTER TABLE `t_etat_materiel`
  MODIFY `CodeEtat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_fournisseur`
--
ALTER TABLE `t_fournisseur`
  MODIFY `CodeFournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_frequantant`
--
ALTER TABLE `t_frequantant`
  MODIFY `CodeFrequantant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `t_frequantation`
--
ALTER TABLE `t_frequantation`
  MODIFY `CodeFrequantation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563;

--
-- AUTO_INCREMENT for table `t_frequantation_externe`
--
ALTER TABLE `t_frequantation_externe`
  MODIFY `CodeFrequantation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_garantie`
--
ALTER TABLE `t_garantie`
  MODIFY `CodeGarantie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_marque_accesspoint`
--
ALTER TABLE `t_marque_accesspoint`
  MODIFY `CodeMarqueAccessPoint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_marque_adaptateur`
--
ALTER TABLE `t_marque_adaptateur`
  MODIFY `CodeMarqueAdaptateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_marque_cable`
--
ALTER TABLE `t_marque_cable`
  MODIFY `CodeMarqueCable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_marque_cadenat`
--
ALTER TABLE `t_marque_cadenat`
  MODIFY `CodeMarqueCadenat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_marque_ecran`
--
ALTER TABLE `t_marque_ecran`
  MODIFY `CodeMarqueEcran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_marque_ordinateur`
--
ALTER TABLE `t_marque_ordinateur`
  MODIFY `CodeMarque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_materiel`
--
ALTER TABLE `t_materiel`
  MODIFY `CodeMateriel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `t_modele`
--
ALTER TABLE `t_modele`
  MODIFY `CodeModele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_service`
--
ALTER TABLE `t_service`
  MODIFY `CodeService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_siege`
--
ALTER TABLE `t_siege`
  MODIFY `CodeSiege` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_type_ordinateur`
--
ALTER TABLE `t_type_ordinateur`
  MODIFY `CodeTypeOrdinateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_type_port_projecteur`
--
ALTER TABLE `t_type_port_projecteur`
  MODIFY `CodeTypePortProjecteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `CodeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
