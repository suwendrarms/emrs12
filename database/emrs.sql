-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 04:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinical_features_bee_stings`
--

CREATE TABLE `clinical_features_bee_stings` (
  `Index_Of_clinical_features_bee_stings` varchar(100) NOT NULL,
  `Index_Of_Bee_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(10000) DEFAULT NULL,
  `Burning_pain` varchar(100) DEFAULT 'no',
  `Swelling` varchar(100) DEFAULT 'no',
  `Pruntus` varchar(100) DEFAULT 'no',
  `Nauka` varchar(100) DEFAULT 'no',
  `Vomiting` varchar(100) DEFAULT 'no',
  `Hypotenisum` varchar(100) DEFAULT 'no',
  `Bronchospasm` varchar(100) DEFAULT 'no',
  `Oliguna` varchar(100) DEFAULT 'no',
  `Renal_failure` varchar(100) DEFAULT 'no',
  `Diarrhoea` varchar(100) DEFAULT 'no',
  `Tightness_of_chest` varchar(100) DEFAULT 'no',
  `Malaise` varchar(100) DEFAULT 'no',
  `Urticana` varchar(100) DEFAULT 'no',
  `Facial_odema` varchar(100) DEFAULT 'no',
  `Laryngeal_odema` varchar(100) DEFAULT 'no',
  `Seizure` varchar(100) DEFAULT 'no',
  `Rhabdomyolysis` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_features_bee_stings`
--

INSERT INTO `clinical_features_bee_stings` (`Index_Of_clinical_features_bee_stings`, `Index_Of_Bee_Stings`, `Patient_Id`, `Burning_pain`, `Swelling`, `Pruntus`, `Nauka`, `Vomiting`, `Hypotenisum`, `Bronchospasm`, `Oliguna`, `Renal_failure`, `Diarrhoea`, `Tightness_of_chest`, `Malaise`, `Urticana`, `Facial_odema`, `Laryngeal_odema`, `Seizure`, `Rhabdomyolysis`, `Circumstances_Of_Stings`) VALUES
('12334', '12', '1', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', NULL),
('123', '`12', '1', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', NULL),
('222', '122', '2', 'no', '12', '  no', ' no', 'no', 'no', ' no', ' no', 'no', ' no', ' no', ' no', ' no', ' no', 'no', '   fffffffffffff', ' no', '    fffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_features_black_widow_spider`
--

CREATE TABLE `clinical_features_black_widow_spider` (
  `Index_Of_clinical_features_black_widow_spider` varchar(100) NOT NULL,
  `Index_Of_Black_Widow_Spider` varchar(1000) DEFAULT NULL,
  `Patient_Id` varchar(10000) DEFAULT NULL,
  `Abdominal_Pain` varchar(100) DEFAULT 'no',
  `Headache` varchar(100) DEFAULT 'no',
  `Narea` varchar(100) DEFAULT 'no',
  `Pain_In_Large_Mscle_Grop` varchar(100) DEFAULT 'no',
  `Pain_At_The_Site` varchar(100) DEFAULT 'no',
  `Pain_In_The_Extremities_With_Weakness` varchar(100) DEFAULT 'no',
  `Prunts` varchar(100) DEFAULT 'no',
  `Urtecana` varchar(100) DEFAULT 'no',
  `Vomiting` varchar(100) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_features_black_widow_spider`
--

INSERT INTO `clinical_features_black_widow_spider` (`Index_Of_clinical_features_black_widow_spider`, `Index_Of_Black_Widow_Spider`, `Patient_Id`, `Abdominal_Pain`, `Headache`, `Narea`, `Pain_In_Large_Mscle_Grop`, `Pain_At_The_Site`, `Pain_In_The_Extremities_With_Weakness`, `Prunts`, `Urtecana`, `Vomiting`) VALUES
('', NULL, '2', 'no', 'now', '  no', ' no', 'no', 'no', ' no', ' no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_features_hornet_stings`
--

CREATE TABLE `clinical_features_hornet_stings` (
  `Index_Of_clinical_features_hornet_stings` varchar(100) NOT NULL,
  `Index_Of_Hornet_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(10000) DEFAULT NULL,
  `Burning_pain` varchar(100) DEFAULT 'no',
  `Swelling` varchar(100) DEFAULT 'no',
  `Pruntus` varchar(100) DEFAULT 'no',
  `Nauka` varchar(100) DEFAULT 'no',
  `Vomiting` varchar(100) DEFAULT 'no',
  `Hypotenisum` varchar(100) DEFAULT 'no',
  `Bronchospasm` varchar(100) DEFAULT 'no',
  `Oliguna` varchar(100) DEFAULT 'no',
  `Renal_failure` varchar(100) DEFAULT 'no',
  `Diarrhoea` varchar(100) DEFAULT 'no',
  `Tightness_of_chest` varchar(100) DEFAULT 'no',
  `Malaise` varchar(100) DEFAULT 'no',
  `Urticana` varchar(100) DEFAULT 'no',
  `Facial_odema` varchar(100) DEFAULT 'no',
  `Laryngeal_odema` varchar(100) DEFAULT 'no',
  `Seizure` varchar(100) DEFAULT 'no',
  `Rhabdomyolysis` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_features_hornet_stings`
--

INSERT INTO `clinical_features_hornet_stings` (`Index_Of_clinical_features_hornet_stings`, `Index_Of_Hornet_Stings`, `Patient_Id`, `Burning_pain`, `Swelling`, `Pruntus`, `Nauka`, `Vomiting`, `Hypotenisum`, `Bronchospasm`, `Oliguna`, `Renal_failure`, `Diarrhoea`, `Tightness_of_chest`, `Malaise`, `Urticana`, `Facial_odema`, `Laryngeal_odema`, `Seizure`, `Rhabdomyolysis`, `Circumstances_Of_Stings`) VALUES
('', NULL, '2', 'no', '12', '  no', ' no', 'no', 'no', ' no', ' no', 'no', ' no', ' no', ' no', ' no', ' no', 'no', '   fffffffffffff', ' no', '    fffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_features_wasp_stings`
--

CREATE TABLE `clinical_features_wasp_stings` (
  `Index_Of_clinical_features_wasp_stings` varchar(100) NOT NULL,
  `Index_Of_Wasp_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(10000) DEFAULT NULL,
  `Burning_pain` varchar(100) DEFAULT 'no',
  `Swelling` varchar(100) DEFAULT 'no',
  `Pruntus` varchar(100) DEFAULT 'no',
  `Nauka` varchar(100) DEFAULT 'no',
  `Vomiting` varchar(100) DEFAULT 'no',
  `Hypotenisum` varchar(100) DEFAULT 'no',
  `Bronchospasm` varchar(100) DEFAULT 'no',
  `Oliguna` varchar(100) DEFAULT 'no',
  `Renal_failure` varchar(100) DEFAULT 'no',
  `Diarrhoea` varchar(100) DEFAULT 'no',
  `Tightness_of_chest` varchar(100) DEFAULT 'no',
  `Malaise` varchar(100) DEFAULT 'no',
  `Urticana` varchar(100) DEFAULT 'no',
  `Facial_odema` varchar(100) DEFAULT 'no',
  `Laryngeal_odema` varchar(100) DEFAULT 'no',
  `Seizure` varchar(100) DEFAULT 'no',
  `Rhabdomyolysis` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_features_wasp_stings`
--

INSERT INTO `clinical_features_wasp_stings` (`Index_Of_clinical_features_wasp_stings`, `Index_Of_Wasp_Stings`, `Patient_Id`, `Burning_pain`, `Swelling`, `Pruntus`, `Nauka`, `Vomiting`, `Hypotenisum`, `Bronchospasm`, `Oliguna`, `Renal_failure`, `Diarrhoea`, `Tightness_of_chest`, `Malaise`, `Urticana`, `Facial_odema`, `Laryngeal_odema`, `Seizure`, `Rhabdomyolysis`, `Circumstances_Of_Stings`) VALUES
('', NULL, '2', 'no', '12', '    no', '  no', 'no', 'no', '  no', '  yes', 'no', '  no', '  no', '  no', '  no', '  no', 'no', '   fffffffffffff', '  no', '    fffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `details_about_bee_stings`
--

CREATE TABLE `details_about_bee_stings` (
  `index_of_details_about_bee_stings` varchar(100) NOT NULL,
  `Index_Of_bee_Stings` varchar(100) DEFAULT NULL,
  `Patient_Id` varchar(100) DEFAULT NULL,
  `Time_Of_Stings` time DEFAULT NULL,
  `Number_of_stings` int(255) DEFAULT NULL,
  `Place_Of_Stings` varchar(1000) DEFAULT NULL,
  `Head_and_Neck` varchar(100) DEFAULT 'no',
  `Upper_Limb` varchar(100) DEFAULT 'no',
  `Chest` varchar(100) DEFAULT 'no',
  `Abdomen` varchar(100) DEFAULT 'no',
  `Lower_Limb` varchar(100) DEFAULT 'no',
  `other` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_about_bee_stings`
--

INSERT INTO `details_about_bee_stings` (`index_of_details_about_bee_stings`, `Index_Of_bee_Stings`, `Patient_Id`, `Time_Of_Stings`, `Number_of_stings`, `Place_Of_Stings`, `Head_and_Neck`, `Upper_Limb`, `Chest`, `Abdomen`, `Lower_Limb`, `other`, `Circumstances_Of_Stings`) VALUES
('fn-bs1521198705-1', NULL, '1', '111:12:34', 98, 'home', 'yes', 'no', 'no', 'no', 'no', 'no', 'Provoked'),
('fn-bs1521198727-1', NULL, '1', '00:00:00', 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
('fn-bs1521441180-2', NULL, '2', '00:00:00', 122, '        ffffffffff', '    fffffffffffffaa', 'ffffffffff', 'fffffffffffff', '    no', '    no', 'gggg', '    fffffffffffff'),
('fn-bs1521538213-3', NULL, '3', '00:00:00', 22, 'Indoor', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Unprovoked');

-- --------------------------------------------------------

--
-- Table structure for table `details_about_black_widow_spider`
--

CREATE TABLE `details_about_black_widow_spider` (
  `index_of_details_about_black_widow_spider` varchar(100) NOT NULL,
  `Index_Of_Black_Widow_Spider` varchar(100) DEFAULT NULL,
  `Patient_Id` varchar(100) DEFAULT NULL,
  `Time_Of_Stings` time(6) DEFAULT NULL,
  `Number_Of_Stings` int(255) DEFAULT NULL,
  `Place_Of_Stings` varchar(1000) DEFAULT NULL,
  `Head_and_Neck` varchar(100) DEFAULT 'no',
  `Upper_Limb` varchar(100) DEFAULT 'no',
  `Chest` varchar(100) DEFAULT 'no',
  `Abdomen` varchar(100) DEFAULT 'no',
  `Lower_Limb` varchar(100) DEFAULT 'no',
  `other` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_about_black_widow_spider`
--

INSERT INTO `details_about_black_widow_spider` (`index_of_details_about_black_widow_spider`, `Index_Of_Black_Widow_Spider`, `Patient_Id`, `Time_Of_Stings`, `Number_Of_Stings`, `Place_Of_Stings`, `Head_and_Neck`, `Upper_Limb`, `Chest`, `Abdomen`, `Lower_Limb`, `other`, `Circumstances_Of_Stings`) VALUES
('fn-bws1521198835-1', NULL, '1', '00:23:45.000000', 7654, 'road', 'no', 'yes', 'no', 'no', 'no', 'no', 'Unprovoked'),
('fn-bws1521441284-2', NULL, '2', '00:05:55.000000', 111, '  garden', ' no', 'yes', 'no', ' no', ' no', 'no', ' Unprovoked');

-- --------------------------------------------------------

--
-- Table structure for table `details_about_hornet_stings`
--

CREATE TABLE `details_about_hornet_stings` (
  `index_of_details_about_hornet_stings` varchar(100) NOT NULL,
  `Index_Of_hornet_Stings` varchar(100) DEFAULT NULL,
  `Patient_Id` varchar(100) DEFAULT NULL,
  `Time_Of_Stings` time DEFAULT NULL,
  `Number_of_stings` int(255) DEFAULT NULL,
  `Place_Of_Stings` varchar(1000) DEFAULT NULL,
  `Head_and_Neck` varchar(100) DEFAULT 'no',
  `Upper_Limb` varchar(100) DEFAULT 'no',
  `Chest` varchar(100) DEFAULT 'no',
  `Abdomen` varchar(100) DEFAULT 'no',
  `Lower_Limb` varchar(100) DEFAULT 'no',
  `other` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_about_hornet_stings`
--

INSERT INTO `details_about_hornet_stings` (`index_of_details_about_hornet_stings`, `Index_Of_hornet_Stings`, `Patient_Id`, `Time_Of_Stings`, `Number_of_stings`, `Place_Of_Stings`, `Head_and_Neck`, `Upper_Limb`, `Chest`, `Abdomen`, `Lower_Limb`, `other`, `Circumstances_Of_Stings`) VALUES
('fn-hs1521198764-1', NULL, '1', '00:05:43', 2147483647, 'garden', 'yes', 'no', 'no', 'no', 'no', 'no', 'Unprovoked'),
('fn-hs1521441327-2', NULL, '2', '00:00:00', 2, '      ul', '   no', 'yes', 'no', '   no', '   no', 'no', '   Provoked'),
('fn-hs1521538267-3', NULL, '3', '00:00:00', 22222, 'home', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Provoked');

-- --------------------------------------------------------

--
-- Table structure for table `details_about_wasp_stings`
--

CREATE TABLE `details_about_wasp_stings` (
  `index_of_details_about_wasp_stings` varchar(100) NOT NULL,
  `Index_Of_wasp_Stings` varchar(100) DEFAULT NULL,
  `Patient_Id` varchar(100) DEFAULT NULL,
  `Time_Of_Stings` time DEFAULT NULL,
  `Number_of_stings` int(255) DEFAULT NULL,
  `Place_Of_Stings` varchar(1000) DEFAULT NULL,
  `Head_and_Neck` varchar(100) DEFAULT 'no',
  `Upper_Limb` varchar(100) DEFAULT 'no',
  `Chest` varchar(100) DEFAULT 'no',
  `Abdomen` varchar(100) DEFAULT 'no',
  `Lower_Limb` varchar(100) DEFAULT 'no',
  `other` varchar(100) DEFAULT 'no',
  `Circumstances_Of_Stings` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_about_wasp_stings`
--

INSERT INTO `details_about_wasp_stings` (`index_of_details_about_wasp_stings`, `Index_Of_wasp_Stings`, `Patient_Id`, `Time_Of_Stings`, `Number_of_stings`, `Place_Of_Stings`, `Head_and_Neck`, `Upper_Limb`, `Chest`, `Abdomen`, `Lower_Limb`, `other`, `Circumstances_Of_Stings`) VALUES
('fn-ws1521198802-1', NULL, '1', '07:56:54', 345678, 'paddyfield', 'no', 'yes', 'no', 'no', 'no', 'no', 'Provoked'),
('fn-ws1521441314-2', NULL, '2', '00:00:00', 2, '    paddyfield', '  no', 'yes', 'no', '  no', '  no', 'no', '  Unprovoked'),
('fn-ws1521538320-3', NULL, '3', '00:00:00', 111, 'garden', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Provoked'),
('fn-ws1521538370-3', NULL, '3', '00:00:00', 11, 'forest', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Provoked');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_registration`
--

CREATE TABLE `doctor_registration` (
  `Doctor_ID` int(11) NOT NULL,
  `FirstName` varchar(1000) DEFAULT NULL,
  `LastName` varchar(1000) DEFAULT NULL,
  `E_mail` varchar(1000) DEFAULT NULL,
  `Username` varchar(1000) DEFAULT NULL,
  `Password` varchar(1000) DEFAULT NULL,
  `Confirm_Password` varchar(1000) DEFAULT NULL,
  `DateOfBirth` varchar(1000) DEFAULT NULL,
  `Gender` varchar(1000) DEFAULT NULL,
  `Mobile_Number` int(20) DEFAULT NULL,
  `Land_Number` int(20) DEFAULT NULL,
  `Area_Of_Practice` varchar(1000) DEFAULT NULL,
  `Medical_Education` varchar(1000) DEFAULT NULL,
  `Current_Location` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_registration`
--

INSERT INTO `doctor_registration` (`Doctor_ID`, `FirstName`, `LastName`, `E_mail`, `Username`, `Password`, `Confirm_Password`, `DateOfBirth`, `Gender`, `Mobile_Number`, `Land_Number`, `Area_Of_Practice`, `Medical_Education`, `Current_Location`) VALUES
(1, 'suwendra', 'rms', 's@h.v', 'rms', '123', '123', '2018-03-14', 'Female', 2147483647, 2147483647, 'NULL', 'NULL', '11 ,wee ,Ampara.'),
(2, NULL, NULL, NULL, 'rmsss', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fauna`
--

CREATE TABLE `fauna` (
  `Index_Of_Type_Of_Natural_Toxins` varchar(100) NOT NULL,
  `Index_Of_Fauna` varchar(1000) DEFAULT NULL,
  `Types_Of_Fauna` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flora`
--

CREATE TABLE `flora` (
  `Index_Of_Type_Of_Natural_Toxins` varchar(100) NOT NULL,
  `Index_Of_Flora` varchar(1000) DEFAULT NULL,
  `Types_Of_Flora` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fungal_poison`
--

CREATE TABLE `fungal_poison` (
  `Index_Of_Type_Of_Natural_Toxins` varchar(100) NOT NULL,
  `Index_Of_Fungal_Poison` varchar(1000) DEFAULT NULL,
  `Type_Of_Fungal_Poison` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management_of_bee`
--

CREATE TABLE `management_of_bee` (
  `Index_Of_management_Of_Bee` varchar(100) NOT NULL,
  `Index_Of_Bee_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(10000) DEFAULT NULL,
  `Apply_ice_packs` varchar(1000) DEFAULT NULL,
  `Artihistamine` varchar(1000) DEFAULT NULL,
  `Adranaline_IM` varchar(1000) DEFAULT NULL,
  `ICU_care` varchar(1000) DEFAULT NULL,
  `Steroids` varchar(1000) DEFAULT NULL,
  `Need_Renal_Replacement_therapy` varchar(1000) DEFAULT NULL,
  `Need_invasive_ventilation` varchar(1000) DEFAULT NULL,
  `Stinger_scrapped` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management_of_bee`
--

INSERT INTO `management_of_bee` (`Index_Of_management_Of_Bee`, `Index_Of_Bee_Stings`, `Patient_Id`, `Apply_ice_packs`, `Artihistamine`, `Adranaline_IM`, `ICU_care`, `Steroids`, `Need_Renal_Replacement_therapy`, `Need_invasive_ventilation`, `Stinger_scrapped`) VALUES
('', NULL, '2', 'ww', '12', 'no', 'no', ' n', ' y', 'y', ' y');

-- --------------------------------------------------------

--
-- Table structure for table `management_of_black_widow_spider`
--

CREATE TABLE `management_of_black_widow_spider` (
  `Index_Of_management_of_black_widow_spider` varchar(100) NOT NULL,
  `Index_Of_Black_Widow_Spider` varchar(1000) DEFAULT NULL,
  `Patient_Id` varchar(200) DEFAULT NULL,
  `Types_Of_Managements` varchar(1000) DEFAULT NULL,
  `Yes_Or_No` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management_of_black_widow_spider`
--

INSERT INTO `management_of_black_widow_spider` (`Index_Of_management_of_black_widow_spider`, `Index_Of_Black_Widow_Spider`, `Patient_Id`, `Types_Of_Managements`, `Yes_Or_No`) VALUES
('', NULL, '2', 'y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `management_of_hornet`
--

CREATE TABLE `management_of_hornet` (
  `Index_Of_management_Of_Hornet` varchar(100) NOT NULL,
  `Index_Of_Hornet_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(200) DEFAULT NULL,
  `Types_Of_Managements` varchar(1000) DEFAULT NULL,
  `Yes_Or_No` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management_of_hornet`
--

INSERT INTO `management_of_hornet` (`Index_Of_management_Of_Hornet`, `Index_Of_Hornet_Stings`, `Patient_Id`, `Types_Of_Managements`, `Yes_Or_No`) VALUES
('', NULL, '2', 'y', 11);

-- --------------------------------------------------------

--
-- Table structure for table `management_of_wasp`
--

CREATE TABLE `management_of_wasp` (
  `Index_Of_management_Of_Wasp` varchar(100) NOT NULL,
  `Index_Of_Wasp_Stings` varchar(10000) DEFAULT NULL,
  `Patient_Id` varchar(200) DEFAULT NULL,
  `Types_Of_Managements` varchar(1000) DEFAULT NULL,
  `Yes_Or_No` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management_of_wasp`
--

INSERT INTO `management_of_wasp` (`Index_Of_management_Of_Wasp`, `Index_Of_Wasp_Stings`, `Patient_Id`, `Types_Of_Managements`, `Yes_Or_No`) VALUES
('', NULL, '2', 'y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `microbial_poison`
--

CREATE TABLE `microbial_poison` (
  `Index_Of_Type_Of_Natural_Toxins` varchar(100) NOT NULL,
  `Index_Of_Microbial_Poison` varchar(1000) DEFAULT NULL,
  `Type_Of_Microbial_Poison` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `natural_toxins`
--

CREATE TABLE `natural_toxins` (
  `Index_Of_Type_Of_Poison` varchar(100) NOT NULL,
  `Index_Of_Natural_Toxins` varchar(1000) DEFAULT NULL,
  `Type_Of_Natural_Toxins` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `Registration_Number` int(11) NOT NULL,
  `FirstName` varchar(10000) DEFAULT NULL,
  `LastName` varchar(10000) DEFAULT NULL,
  `medical_history` varchar(10000) DEFAULT NULL,
  `patient_NIC` varchar(34) NOT NULL,
  `guardian_name` varchar(120) NOT NULL,
  `guardian_phonenumber` varchar(123) NOT NULL,
  `guardian_address` varchar(123) NOT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Gender` varchar(10000) DEFAULT NULL,
  `mobile_number` varchar(34) NOT NULL,
  `land_number` varchar(34) NOT NULL,
  `address` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`Registration_Number`, `FirstName`, `LastName`, `medical_history`, `patient_NIC`, `guardian_name`, `guardian_phonenumber`, `guardian_address`, `Date_Of_Birth`, `Gender`, `mobile_number`, `land_number`, `address`) VALUES
(1, 'qqw', 'qqq', 'qqqqq', '1123456', 'ggg', 'gg', '', '2018-03-06', 'Female', '234567', '344', '44444444444444 ,gggh ,Ampara.'),
(2, 'ssswwwww', 'ffff', '  fffff', ' 12345', 'ww', 'ww', ' ww', '2018-03-07', 'Female', ' 1234', ' 3456', '555 ,eee ,Ampara.'),
(4, 'wwe', 'nm', 'g', '12344', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Ampara.'),
(5, 'tyui', 'uityu', 'fghjk', '12345', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Matale.'),
(6, 'tyui', 'uityu', 'fghjk', '12345', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Matale.'),
(7, 'er', 'ee', 'ee', '12344', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Ampara.'),
(8, 'tyui', 'nm', 'ee', '12344', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Ampara.'),
(9, 'er', 'ee', 'ee', '12344', 'ff', '111', '', '2018-03-18', 'Female', '1222', '22222222222', '222 ,ff ,Ampara.'),
(10, 'a', 'ee', 'ee', '12344', 'ff', '111', '', '2018-03-18', 'Male', '1222', '22222222222', '222 ,ff ,Ampara.'),
(11, 'a', 'ee', 'ee', '12344', 'ff', '111', '', '2018-03-18', 'Male', '1222', '22222222222', '222 ,ff ,Ampara.');

-- --------------------------------------------------------

--
-- Table structure for table `place_of_stings_bee_stings`
--

CREATE TABLE `place_of_stings_bee_stings` (
  `Index_Of_place_of_stings_Bee_Stings` varchar(100) NOT NULL,
  `Index_Of_Bee_Stings` varchar(1000) DEFAULT NULL,
  `Place` varchar(10000) DEFAULT NULL,
  `Sub_Place` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_of_stings_black_widow_spider`
--

CREATE TABLE `place_of_stings_black_widow_spider` (
  `Index_Of_place_of_stings_black_widow_spider` varchar(100) NOT NULL,
  `Index_Of_Black_Widow_Spider` varchar(1000) DEFAULT NULL,
  `Place` varchar(1000) DEFAULT NULL,
  `Sub_Place` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_of_stings_hornet_stings`
--

CREATE TABLE `place_of_stings_hornet_stings` (
  `Index_Of_place_of_stings_Hornet_Stings` varchar(100) NOT NULL,
  `Index_Of_Hornet_Stings` varchar(1000) DEFAULT NULL,
  `Place` varchar(10000) DEFAULT NULL,
  `Sub_Place` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_of_stings_wasp_stings`
--

CREATE TABLE `place_of_stings_wasp_stings` (
  `Index_Of_place_of_stings_Wasp_Stings` varchar(100) NOT NULL,
  `Index_Of_Wasp_Stings` varchar(1000) DEFAULT NULL,
  `Place` varchar(10000) DEFAULT NULL,
  `Sub_Place` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poison`
--

CREATE TABLE `poison` (
  `Index_Of_Poison` varchar(100) NOT NULL,
  `Type_Of_Poison` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_registration`
--

CREATE TABLE `receptionist_registration` (
  `receptionist_regno` int(11) NOT NULL,
  `FirstName` varchar(10000) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `E_mail` varchar(100) DEFAULT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(34) NOT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Gender` varchar(10000) DEFAULT NULL,
  `Mobile_Number` varchar(34) NOT NULL,
  `Land_Number` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist_registration`
--

INSERT INTO `receptionist_registration` (`receptionist_regno`, `FirstName`, `LastName`, `E_mail`, `Username`, `Password`, `Date_Of_Birth`, `Gender`, `Mobile_Number`, `Land_Number`) VALUES
(1, 'suwendra', 'rmsss', 'ee@gmail.com', 'rmss', '123', '2018-03-28', 'Female', '222', '22'),
(2, 'tyui', 'uityu', 'surendragunawardhana@gmail.com', 'rmsp', '123', '2018-04-03', 'Male', '1222', '22222222222'),
(3, 'tyui', 'nm', 'surendragunawardhana@gmail.com', 'suwendra', '123', '2018-04-04', 'Male', '0712344567', '2021445555');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('rmss', '123'),
('rmss', '123'),
('rmss', '123'),
('rms', '123'),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', ''),
('rmss', '123'),
('rmss', ''),
('rmss', '123'),
('rmss', '123'),
('rmss', '123'),
('rmss', '123'),
('rmss', '123'),
('rms', '123'),
('rms', '123'),
('rms', '123'),
('rms', '123'),
('rms', '123'),
('rmsss', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinical_features_black_widow_spider`
--
ALTER TABLE `clinical_features_black_widow_spider`
  ADD PRIMARY KEY (`Index_Of_clinical_features_black_widow_spider`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Black_Widow_Spider`(767));

--
-- Indexes for table `clinical_features_hornet_stings`
--
ALTER TABLE `clinical_features_hornet_stings`
  ADD PRIMARY KEY (`Index_Of_clinical_features_hornet_stings`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Hornet_Stings`(767));

--
-- Indexes for table `clinical_features_wasp_stings`
--
ALTER TABLE `clinical_features_wasp_stings`
  ADD PRIMARY KEY (`Index_Of_clinical_features_wasp_stings`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Wasp_Stings`(767));

--
-- Indexes for table `details_about_black_widow_spider`
--
ALTER TABLE `details_about_black_widow_spider`
  ADD PRIMARY KEY (`index_of_details_about_black_widow_spider`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Black_Widow_Spider`(76));

--
-- Indexes for table `details_about_hornet_stings`
--
ALTER TABLE `details_about_hornet_stings`
  ADD PRIMARY KEY (`index_of_details_about_hornet_stings`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_hornet_Stings`(76));

--
-- Indexes for table `details_about_wasp_stings`
--
ALTER TABLE `details_about_wasp_stings`
  ADD PRIMARY KEY (`index_of_details_about_wasp_stings`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_wasp_Stings`(76));

--
-- Indexes for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`Index_Of_Type_Of_Natural_Toxins`),
  ADD KEY `FK_Index_Of_Natural_Toxins` (`Index_Of_Fauna`(767));

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`Index_Of_Type_Of_Natural_Toxins`),
  ADD KEY `FK_Index_Of_Natural_Toxins` (`Index_Of_Flora`(767));

--
-- Indexes for table `fungal_poison`
--
ALTER TABLE `fungal_poison`
  ADD PRIMARY KEY (`Index_Of_Type_Of_Natural_Toxins`),
  ADD KEY `FK_Index_Of_Natural_Toxins` (`Index_Of_Fungal_Poison`(767));

--
-- Indexes for table `management_of_black_widow_spider`
--
ALTER TABLE `management_of_black_widow_spider`
  ADD PRIMARY KEY (`Index_Of_management_of_black_widow_spider`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Black_Widow_Spider`(767));

--
-- Indexes for table `management_of_hornet`
--
ALTER TABLE `management_of_hornet`
  ADD PRIMARY KEY (`Index_Of_management_Of_Hornet`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Hornet_Stings`(767));

--
-- Indexes for table `management_of_wasp`
--
ALTER TABLE `management_of_wasp`
  ADD PRIMARY KEY (`Index_Of_management_Of_Wasp`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Wasp_Stings`(767));

--
-- Indexes for table `microbial_poison`
--
ALTER TABLE `microbial_poison`
  ADD PRIMARY KEY (`Index_Of_Type_Of_Natural_Toxins`),
  ADD KEY `FK_Index_Of_Natural_Toxins` (`Index_Of_Microbial_Poison`(767));

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natural_toxins`
--
ALTER TABLE `natural_toxins`
  ADD PRIMARY KEY (`Index_Of_Type_Of_Poison`),
  ADD KEY `FK_Index_Of_Poison` (`Index_Of_Natural_Toxins`(767));

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`Registration_Number`);

--
-- Indexes for table `place_of_stings_bee_stings`
--
ALTER TABLE `place_of_stings_bee_stings`
  ADD PRIMARY KEY (`Index_Of_place_of_stings_Bee_Stings`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Bee_Stings`(767));

--
-- Indexes for table `place_of_stings_black_widow_spider`
--
ALTER TABLE `place_of_stings_black_widow_spider`
  ADD PRIMARY KEY (`Index_Of_place_of_stings_black_widow_spider`),
  ADD KEY `FK_Index_Of_Fauna` (`Index_Of_Black_Widow_Spider`(767));

--
-- Indexes for table `receptionist_registration`
--
ALTER TABLE `receptionist_registration`
  ADD PRIMARY KEY (`receptionist_regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `Registration_Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `receptionist_registration`
--
ALTER TABLE `receptionist_registration`
  MODIFY `receptionist_regno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
