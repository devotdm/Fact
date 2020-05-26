-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_facture`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`) VALUES
(1, 'service'),
(2, 'produit');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `codep` int(11) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `tele` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `mot_cle` varchar(255) DEFAULT NULL,
  `societe_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `email`, `prenom`, `nom`, `fonction`, `adresse`, `codep`, `ville`, `pays`, `tele`, `site`, `mot_cle`, `societe_id`, `created_at`, `updated_at`) VALUES
(5, 'john-doe@gmail.com', 'john', 'doe', 'gerant', NULL, NULL, NULL, NULL, '+2126374885653', NULL, NULL, 2, '2020-04-11 18:15:09', '2020-04-19 23:58:41'),
(6, 'dsfa@asd.vbu', 'david', 'fsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 18:16:56', '2020-04-11 18:16:56'),
(17, NULL, 'fdggdf', 'dgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-04-14 02:17:53', '2020-04-14 02:17:53'),
(19, NULL, 'client', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-18 00:37:05', '2020-04-18 00:37:05'),
(20, NULL, 'eqadw', 'qart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2020-04-18 02:55:42', '2020-04-18 02:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

CREATE TABLE `devis` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `duree` int(11) DEFAULT NULL,
  `devise` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT 'provisoire',
  `date_finalise` timestamp NULL DEFAULT NULL,
  `date_signe` date DEFAULT NULL,
  `id_num` varchar(255) DEFAULT NULL,
  `total_ht` double DEFAULT 0,
  `remise` double DEFAULT 0,
  `total_tva` double DEFAULT 0,
  `total_ttc` double DEFAULT 0,
  `cond_reg` varchar(255) DEFAULT 'a reception',
  `mode_reg` varchar(255) DEFAULT 'cheque',
  `intr_retard` varchar(255) DEFAULT NULL,
  `mot_cle` varchar(255) DEFAULT NULL,
  `devi_id` int(11) DEFAULT NULL,
  `facture_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devis`
--

INSERT INTO `devis` (`id`, `client_id`, `duree`, `devise`, `statut`, `date_finalise`, `date_signe`, `id_num`, `total_ht`, `remise`, `total_tva`, `total_ttc`, `cond_reg`, `mode_reg`, `intr_retard`, `mot_cle`, `devi_id`, `facture_id`, `created_at`, `updated_at`) VALUES
(25, 20, NULL, 'Dirham marocain', 'finalisé', '2020-04-19 23:41:14', '2020-04-26', 'D200025', 770, 0, 154, 924, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-18 05:55:28', '2020-05-23 07:43:06'),
(36, 5, NULL, 'Dirham marocain', 'finalisé', '2020-04-21 02:42:19', '2020-04-21', 'D200036', 200, 0, 40, 240, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-21 02:00:16', '2020-04-23 22:45:33'),
(38, 19, NULL, 'Dirham marocain', 'finalisé', '2020-04-21 03:14:19', NULL, 'D200038', 300, 0, 60, 360, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-21 03:14:05', '2020-04-21 03:34:24'),
(42, 19, NULL, 'Dirham marocain', 'finalisé', '2020-05-03 04:52:31', '2020-05-03', 'D200042', 1160, 0, 232, 1392, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-25 05:29:21', '2020-05-03 04:55:29'),
(43, 17, NULL, 'Dirham marocain', 'provisoire', NULL, NULL, NULL, 3939, 0, 787.8, 4726.8, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-25 05:30:01', '2020-04-25 05:30:01');

--
-- Triggers `devis`
--
DELIMITER $$
CREATE TRIGGER `numerotation_devis` BEFORE UPDATE ON `devis` FOR EACH ROW BEGIN
IF(new.statut = 'finalisé') THEN
SET new.id_num = CONCAT('D2000' , CAST(new.id as varchar(255)) );
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `statut_devis` BEFORE UPDATE ON `devis` FOR EACH ROW BEGIN
IF(new.statut != old.statut) THEN
IF(new.statut = 'finalisé' and old.date_finalise IS null) THEN
SET new.date_finalise = CURRENT_TIMESTAMP();
ELSEIF(new.statut = 'signé') THEN
SET new.date_signe = NOW();
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `devise` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT 'provisoire',
  `date_finalise` timestamp NULL DEFAULT NULL,
  `date_payee` timestamp NULL DEFAULT NULL,
  `id_num` varchar(255) DEFAULT NULL,
  `total_ht` double DEFAULT 0,
  `remise` double DEFAULT 0,
  `total_tva` double DEFAULT 0,
  `total_ttc` double DEFAULT 0,
  `cond_reg` varchar(255) DEFAULT 'a reception',
  `mode_reg` varchar(255) DEFAULT 'cheque',
  `intr_retard` varchar(255) DEFAULT NULL,
  `mot_cle` varchar(255) DEFAULT NULL,
  `facture_id` int(11) DEFAULT NULL,
  `devi_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `factures`
--

INSERT INTO `factures` (`id`, `client_id`, `devise`, `statut`, `date_finalise`, `date_payee`, `id_num`, `total_ht`, `remise`, `total_tva`, `total_ttc`, `cond_reg`, `mode_reg`, `intr_retard`, `mot_cle`, `facture_id`, `devi_id`, `created_at`, `updated_at`) VALUES
(3, 6, NULL, 'finalisé', '2020-05-25 06:45:53', NULL, 'F20003', 0, 0, 0, 0, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-25 04:52:36', '2020-05-25 07:40:45'),
(4, 20, NULL, 'finalisé', '2020-05-25 07:38:44', NULL, 'F20004', 0, 0, 0, 0, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-25 05:07:10', '2020-05-25 07:54:49'),
(5, 6, NULL, 'provisoire', NULL, NULL, NULL, 0, 0, 0, 0, 'A réception', 'Chèque', NULL, NULL, NULL, NULL, '2020-04-26 06:26:04', '2020-04-26 06:26:04');

--
-- Triggers `factures`
--
DELIMITER $$
CREATE TRIGGER `num_facture` BEFORE UPDATE ON `factures` FOR EACH ROW BEGIN
IF(new.statut = 'finalisé') THEN
SET new.id_num = CONCAT('F2000' , CAST(new.id as varchar(255)) );
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `statut_facture` BEFORE UPDATE ON `factures` FOR EACH ROW BEGIN
IF(new.statut != old.statut) THEN
IF(new.statut = 'finalisé' and old.date_finalise IS null) THEN
SET new.date_finalise = CURRENT_TIMESTAMP();
ELSEIF(new.statut = 'payée') THEN
SET new.date_payee = NOW();
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lignes`
--

CREATE TABLE `lignes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT 'service',
  `quantity` int(11) DEFAULT 0,
  `prix` double DEFAULT 0,
  `tva` double DEFAULT 0,
  `reduction` double DEFAULT 0,
  `total` double DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `devi_id` int(11) DEFAULT NULL,
  `facture_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lignes`
--

INSERT INTO `lignes` (`id`, `type`, `quantity`, `prix`, `tva`, `reduction`, `total`, `description`, `devi_id`, `facture_id`) VALUES
(4, 'produit', 5, 150, 20, 0, 900, 'produit t', 25, NULL),
(13, 'service', 1, 200, 20, 0, 240, 'gdfgtgtrrhrr', 36, NULL),
(15, 'service', 2, 150, 20, 0, 360, 'efrrefr hytyht', 38, NULL),
(17, 'service', 2, 120, 20, 0, 288, 'ewfwef fdvv', 43, NULL),
(18, 'produit', 3, 1233, 20, 0, 4438.8, 'sdffffffffkl fdsk;lsfd', 43, NULL);

--
-- Triggers `lignes`
--
DELIMITER $$
CREATE TRIGGER `perso_ligne` BEFORE INSERT ON `lignes` FOR EACH ROW BEGIN
IF(new.facture_id IS NOT NULL) THEN
SET new.devi_id = NULL;
ELSEIF(new.devi_id IS NOT NULL) THEN
SET new.facture_id = NULL;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `societes`
--

CREATE TABLE `societes` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tva` int(11) DEFAULT NULL,
  `code_ice` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `codep` int(11) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `tele` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `mot_cle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `societes`
--

INSERT INTO `societes` (`id`, `nom`, `tva`, `code_ice`, `adresse`, `codep`, `ville`, `pays`, `tele`, `site`, `mot_cle`, `created_at`, `updated_at`) VALUES
(2, 'oursoft', 20, '002993884614421', NULL, 43543, 'safi', NULL, '+212537940098', NULL, NULL, '2020-04-05 15:55:21', '2020-04-15 00:31:07'),
(7, 'test company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-18 02:55:11', '2020-04-18 02:55:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_ibfk_1` (`societe_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `devis_ibfk_2` (`facture_id`),
  ADD KEY `devis_ibfk_3` (`devi_id`);

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `factures_ibfk_2` (`devi_id`),
  ADD KEY `factures_ibfk_3` (`facture_id`);

--
-- Indexes for table `lignes`
--
ALTER TABLE `lignes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `devi_id` (`devi_id`),
  ADD KEY `facture_id` (`facture_id`);

--
-- Indexes for table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lignes`
--
ALTER TABLE `lignes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `societes`
--
ALTER TABLE `societes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`societe_id`) REFERENCES `societes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `devis_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `devis_ibfk_2` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `devis_ibfk_3` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `factures_ibfk_3` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `lignes`
--
ALTER TABLE `lignes`
  ADD CONSTRAINT `lignes_ibfk_1` FOREIGN KEY (`devi_id`) REFERENCES `devis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lignes_ibfk_2` FOREIGN KEY (`facture_id`) REFERENCES `factures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
