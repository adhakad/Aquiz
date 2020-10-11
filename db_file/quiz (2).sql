-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 01:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `q_sn` int(11) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `eid`, `q_sn`, `ansid`) VALUES
(174, 147, 1, 770),
(175, 147, 2, 776),
(176, 147, 3, 779),
(177, 147, 4, 784),
(178, 147, 5, 787),
(179, 148, 1, 791),
(180, 148, 2, 796),
(181, 148, 3, 798),
(182, 149, 1, 803),
(183, 149, 2, 807),
(184, 149, 3, 811),
(185, 150, 1, 815),
(186, 150, 2, 819),
(187, 150, 3, 825),
(188, 150, 4, 828),
(189, 151, 1, 830),
(190, 151, 2, 835),
(191, 151, 3, 838),
(192, 151, 4, 844),
(193, 151, 5, 849),
(194, 151, 6, 851),
(195, 151, 7, 856),
(196, 151, 8, 859),
(197, 151, 9, 862),
(198, 151, 10, 868),
(199, 152, 1, 870),
(200, 152, 2, 875),
(201, 152, 3, 879),
(202, 152, 4, 884),
(203, 152, 5, 889),
(204, 152, 6, 891),
(205, 152, 7, 896),
(206, 152, 8, 899),
(207, 152, 9, 902),
(208, 152, 10, 908),
(209, 153, 1, 910),
(210, 153, 2, 915),
(211, 153, 3, 919),
(212, 153, 4, 925),
(213, 153, 5, 928),
(214, 153, 6, 931),
(215, 153, 7, 936),
(216, 153, 8, 939),
(217, 153, 9, 942),
(218, 153, 10, 948),
(219, 154, 1, 951),
(220, 155, 1, 957);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`) VALUES
(33, 'Class 12th'),
(34, 'Class 11th');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(11) NOT NULL,
  `q_sn` int(11) NOT NULL,
  `select_answer` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `username`, `subject`, `feedback`, `date`, `time`) VALUES
('5b86784504039', 'pravin', 'fyvgh@vgyvy.in', 'ytiu', 'yty', '2018-08-29', '03:41:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `optionid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `q_sn` int(11) NOT NULL,
  `option` varchar(5000) CHARACTER SET utf8mb4 NOT NULL,
  `uniq_optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`optionid`, `eid`, `qid`, `q_sn`, `option`, `uniq_optionid`) VALUES
(770, 147, 184, 1, 'hdthd', '5f0ef88fbfd49'),
(771, 147, 184, 1, 'dry', '5f0ef88fbfd54'),
(772, 147, 184, 1, 'jyyt', '5f0ef88fbfd56'),
(773, 147, 184, 1, 'ht', '5f0ef88fbfd58'),
(774, 147, 185, 2, 'yhy', '5f0ef8901a68d'),
(775, 147, 185, 2, 'ytuytu', '5f0ef8901a698'),
(776, 147, 185, 2, 'tyt', '5f0ef8901a69a'),
(777, 147, 185, 2, 'jyt', '5f0ef8901a69c'),
(778, 147, 186, 3, 'yrty', '5f0ef89072792'),
(779, 147, 186, 3, 'ryr', '5f0ef8907279e'),
(780, 147, 186, 3, 'rtu', '5f0ef890727a0'),
(781, 147, 186, 3, 'grty', '5f0ef890727a2'),
(782, 147, 187, 4, 'ht', '5f0ef890d27d2'),
(783, 147, 187, 4, 'hf', '5f0ef890d27de'),
(784, 147, 187, 4, 'yty', '5f0ef890d27e1'),
(785, 147, 187, 4, 'hty', '5f0ef890d27e3'),
(786, 147, 188, 5, 'ysry', '5f0ef89122106'),
(787, 147, 188, 5, 'rsyr', '5f0ef89122112'),
(788, 147, 188, 5, 'hyuw', '5f0ef89122114'),
(789, 147, 188, 5, 'ysyaytt', '5f0ef89122116'),
(790, 148, 189, 1, 'tetr', '5f131723c7def'),
(791, 148, 189, 1, 'ty', '5f131723c7df9'),
(792, 148, 189, 1, 'erst', '5f131723c7dfb'),
(793, 148, 189, 1, 'hye', '5f131723c7dfd'),
(794, 148, 190, 2, 'hf', '5f1317245a11a'),
(795, 148, 190, 2, 'fgh', '5f1317245a125'),
(796, 148, 190, 2, 'gyu', '5f1317245a127'),
(797, 148, 190, 2, 'gkg', '5f1317245a129'),
(798, 148, 191, 3, 'kgjhg', '5f131724d83ad'),
(799, 148, 191, 3, 'fhfhg', '5f131724d83b8'),
(800, 148, 191, 3, 'uyk', '5f131724d83ba'),
(801, 148, 191, 3, 'gjhj', '5f131724d83bc'),
(802, 149, 192, 1, 'jmjh', '5f1317937ea91'),
(803, 149, 192, 1, 'jhgk', '5f1317937ea98'),
(804, 149, 192, 1, 'jhj', '5f1317937ea99'),
(805, 149, 192, 1, 'fgf', '5f1317937ea9b'),
(806, 149, 193, 2, 'gmv', '5f131793e21b8'),
(807, 149, 193, 2, 'mv', '5f131793e21c2'),
(808, 149, 193, 2, 'fgjh', '5f131793e21c4'),
(809, 149, 193, 2, 'mgh', '5f131793e21c6'),
(810, 149, 194, 3, 'nc', '5f1317945c0a8'),
(811, 149, 194, 3, 'ghf', '5f1317945c0b3'),
(812, 149, 194, 3, 'mhj', '5f1317945c0b5'),
(813, 149, 194, 3, 'fj', '5f1317945c0b7'),
(814, 150, 195, 1, 'fh', '5f1318137d93b'),
(815, 150, 195, 1, 'vmv', '5f1318137d94f'),
(816, 150, 195, 1, 'gjjh', '5f1318137d953'),
(817, 150, 195, 1, 'uykfy', '5f1318137d956'),
(818, 150, 196, 2, 'ghg', '5f131814118ae'),
(819, 150, 196, 2, 'gch', '5f131814118bd'),
(820, 150, 196, 2, 'hgvh', '5f131814118bf'),
(821, 150, 196, 2, 'fjh', '5f131814118c1'),
(822, 150, 197, 3, 'hhg', '5f1318147a1d2'),
(823, 150, 197, 3, 'gh', '5f1318147a1dd'),
(824, 150, 197, 3, 'ghfh', '5f1318147a1df'),
(825, 150, 197, 3, 'gfj', '5f1318147a1e1'),
(826, 150, 198, 4, 'hgvhmg', '5f131814bd9b4'),
(827, 150, 198, 4, 'bvmb', '5f131814bd9ba'),
(828, 150, 198, 4, 'jvm', '5f131814bd9bb'),
(829, 150, 198, 4, 'hch', '5f131814bd9bc'),
(830, 151, 199, 1, 'उपचयन', '5f140160e103f'),
(831, 151, 199, 1, 'संयोजन', '5f140160e104a'),
(832, 151, 199, 1, 'अपचयन', '5f140160e104c'),
(833, 151, 199, 1, 'ऊष्माशोषी', '5f140160e104f'),
(834, 151, 200, 2, 'श्वेत', '5f1401615d369'),
(835, 151, 200, 2, 'हरा', '5f1401615d374'),
(836, 151, 200, 2, 'लाल', '5f1401615d377'),
(837, 151, 200, 2, 'भूरा', '5f1401615d379'),
(838, 151, 201, 3, 'ऊष्माशोषी', '5f140161c3f7f'),
(839, 151, 201, 3, 'ऊष्माक्षेपी', '5f140161c3f8b'),
(840, 151, 201, 3, 'उभयगामी', '5f140161c3f8d'),
(841, 151, 201, 3, 'प्रतिस्थापन', '5f140161c3f8f'),
(842, 151, 202, 4, 'FeO', '5f1401623553d'),
(843, 151, 202, 4, 'Fe2O3', '5f14016235543'),
(844, 151, 202, 4, 'Fe3O4', '5f14016235544'),
(845, 151, 202, 4, 'FeS', '5f14016235545'),
(846, 151, 203, 5, 'Na2ZnO +H2', '5f1401627ecff'),
(847, 151, 203, 5, 'NaZnO2 + H2', '5f1401627ed0a'),
(848, 151, 203, 5, 'NaOZn2 + H2', '5f1401627ed0c'),
(849, 151, 203, 5, 'Na2ZnO2 + H2', '5f1401627ed0e'),
(850, 151, 204, 6, 'भौतिक', '5f140162c4faf'),
(851, 151, 204, 6, 'रासायनिक', '5f140162c4fb8'),
(852, 151, 204, 6, 'दोनों भौतिक और रासायनिक', '5f140162c4fba'),
(853, 151, 204, 6, 'इनमें से कोई नहीं', '5f140162c4fbb'),
(854, 151, 205, 7, 'मोमबत्ती', '5f140163275f3'),
(855, 151, 205, 7, 'किरोसिन', '5f140163275fd'),
(856, 151, 205, 7, 'कोयला', '5f140163275ff'),
(857, 151, 205, 7, 'मेथेन गैस', '5f14016327601'),
(858, 151, 206, 8, 'ऑक्सीजन', '5f14016365dd3'),
(859, 151, 206, 8, 'नाइट्रोजन', '5f14016365dde'),
(860, 151, 206, 8, 'हीलियम', '5f14016365de0'),
(861, 151, 206, 8, 'मिथेन', '5f14016365de2'),
(862, 151, 207, 9, 'श्वेत', '5f1401639edfc'),
(863, 151, 207, 9, 'हरा', '5f1401639ee09'),
(864, 151, 207, 9, 'लाल', '5f1401639ee0c'),
(865, 151, 207, 9, 'भूरा', '5f1401639ee0e'),
(866, 151, 208, 10, 'पीली', '5f140163ea97d'),
(867, 151, 208, 10, 'नीली', '5f140163ea988'),
(868, 151, 208, 10, 'चमकीला ऊजला', '5f140163ea98a'),
(869, 151, 208, 10, 'लाल', '5f140163ea98c'),
(870, 152, 209, 1, 'ऊष्माक्षेपी', '5f1d0f9281c2b'),
(871, 152, 209, 1, 'संयोजन', '5f1d0f9281c36'),
(872, 152, 209, 1, 'अपचयन', '5f1d0f9281c38'),
(873, 152, 209, 1, 'ऊष्माशोषी', '5f1d0f9281c3a'),
(874, 152, 210, 2, 'श्वेत', '5f1d0f92c034c'),
(875, 152, 210, 2, 'हरा', '5f1d0f92c0358'),
(876, 152, 210, 2, 'लाल', '5f1d0f92c035b'),
(877, 152, 210, 2, 'भूरा', '5f1d0f92c035c'),
(878, 152, 211, 3, 'ऊष्माशोषी', '5f1d0f93050ed'),
(879, 152, 211, 3, 'ऊष्माक्षेपी', '5f1d0f93050ff'),
(880, 152, 211, 3, 'उभयगामी', '5f1d0f9305103'),
(881, 152, 211, 3, 'प्रतिस्थापन', '5f1d0f9305105'),
(882, 152, 212, 4, 'FeO', '5f1d0f9340b65'),
(883, 152, 212, 4, 'Fe2O3', '5f1d0f9340b71'),
(884, 152, 212, 4, 'Fe3O4', '5f1d0f9340b73'),
(885, 152, 212, 4, 'FeS', '5f1d0f9340b75'),
(886, 152, 213, 5, 'Na2ZnO +H2', '5f1d0f93963bb'),
(887, 152, 213, 5, 'NaZnO2 + H2', '5f1d0f93963c1'),
(888, 152, 213, 5, 'NaOZn2 + H2', '5f1d0f93963c3'),
(889, 152, 213, 5, 'Na2ZnO2 + H2', '5f1d0f93963c4'),
(890, 152, 214, 6, 'भौतिक', '5f1d0f93d8bff'),
(891, 152, 214, 6, 'रासायनिक', '5f1d0f93d8c06'),
(892, 152, 214, 6, 'दोनों भौतिक और रासायनिक', '5f1d0f93d8c07'),
(893, 152, 214, 6, 'इनमें से कोई नहीं', '5f1d0f93d8c08'),
(894, 152, 215, 7, 'मोमबत्ती', '5f1d0f941af2d'),
(895, 152, 215, 7, 'किरोसिन', '5f1d0f941af39'),
(896, 152, 215, 7, 'कोयला', '5f1d0f941af3b'),
(897, 152, 215, 7, 'मेथेन गैस', '5f1d0f941af3d'),
(898, 152, 216, 8, 'ऑक्सीजन', '5f1d0f9454167'),
(899, 152, 216, 8, 'नाइट्रोजन', '5f1d0f9454178'),
(900, 152, 216, 8, 'हीलियम', '5f1d0f9454181'),
(901, 152, 216, 8, 'मिथेन', '5f1d0f945418a'),
(902, 152, 217, 9, 'श्वेत', '5f1d0f94a4222'),
(903, 152, 217, 9, 'हरा', '5f1d0f94a4244'),
(904, 152, 217, 9, 'लाल', '5f1d0f94a4247'),
(905, 152, 217, 9, 'भूरा', '5f1d0f94a424a'),
(906, 152, 218, 10, 'पीली', '5f1d0f94e5340'),
(907, 152, 218, 10, 'नीली', '5f1d0f94e534c'),
(908, 152, 218, 10, 'चमकीला ऊजला', '5f1d0f94e534f'),
(909, 152, 218, 10, 'लाल', '5f1d0f94e5351'),
(910, 153, 219, 1, 'ऊष्माक्षेपी', '5f1d9c66979c7'),
(911, 153, 219, 1, 'संयोजन', '5f1d9c66979d1'),
(912, 153, 219, 1, 'अपचयन', '5f1d9c66979d4'),
(913, 153, 219, 1, 'ऊष्माशोषी', '5f1d9c66979d6'),
(914, 153, 220, 2, 'श्वेत', '5f1d9c66d22ee'),
(915, 153, 220, 2, 'हरा', '5f1d9c66d22f5'),
(916, 153, 220, 2, 'लाल', '5f1d9c66d22f7'),
(917, 153, 220, 2, 'भूरा', '5f1d9c66d22f8'),
(918, 153, 221, 3, 'ऊष्माशोषी', '5f1d9c6727012'),
(919, 153, 221, 3, 'ऊष्माक्षेपी', '5f1d9c672701d'),
(920, 153, 221, 3, 'उभयगामी', '5f1d9c6727020'),
(921, 153, 221, 3, 'प्रतिस्थापन', '5f1d9c6727021'),
(922, 153, 222, 4, 'Na2ZnO +H2', '5f1d9c67677ac'),
(923, 153, 222, 4, 'NaZnO2 + H2', '5f1d9c67677b4'),
(924, 153, 222, 4, 'NaOZn2 + H2', '5f1d9c67677b5'),
(925, 153, 222, 4, 'Na2ZnO2 + H2', '5f1d9c67677b6'),
(926, 153, 223, 5, 'FeO', '5f1d9c67a21ed'),
(927, 153, 223, 5, 'Fe2O3', '5f1d9c67a21f8'),
(928, 153, 223, 5, 'Fe3O4', '5f1d9c67a21fb'),
(929, 153, 223, 5, 'FeS', '5f1d9c67a21fd'),
(930, 153, 224, 6, 'भौतिक', '5f1d9c6839e0c'),
(931, 153, 224, 6, 'रासायनिक', '5f1d9c6839e13'),
(932, 153, 224, 6, 'दोनों भौतिक और रासायनिक', '5f1d9c6839e14'),
(933, 153, 224, 6, 'इनमें से कोई नहीं', '5f1d9c6839e15'),
(934, 153, 225, 7, 'मोमबत्ती', '5f1d9c68849d8'),
(935, 153, 225, 7, 'किरोसिन', '5f1d9c68849df'),
(936, 153, 225, 7, 'कोयला', '5f1d9c68849e0'),
(937, 153, 225, 7, 'मेथेन गैस', '5f1d9c68849e1'),
(938, 153, 226, 8, 'ऑक्सीजन', '5f1d9c68cfe17'),
(939, 153, 226, 8, 'नाइट्रोजन', '5f1d9c68cfe22'),
(940, 153, 226, 8, 'हीलियम', '5f1d9c68cfe25'),
(941, 153, 226, 8, 'मिथेन', '5f1d9c68cfe27'),
(942, 153, 227, 9, 'श्वेत', '5f1d9c6924335'),
(943, 153, 227, 9, 'हरा', '5f1d9c6924340'),
(944, 153, 227, 9, 'लाल', '5f1d9c6924342'),
(945, 153, 227, 9, 'भूरा', '5f1d9c6924344'),
(946, 153, 228, 10, 'पीली', '5f1d9c6980f9d'),
(947, 153, 228, 10, 'नीली', '5f1d9c6980fa4'),
(948, 153, 228, 10, 'चमकीला ऊजला', '5f1d9c6980fa5'),
(949, 153, 228, 10, 'लाल', '5f1d9c6980fa6'),
(950, 154, 229, 1, 'fbgfn', '5f476d198d5d7'),
(951, 154, 229, 1, 'gfgb', '5f476d198d5e3'),
(952, 154, 229, 1, 'fnh', '5f476d198d5e5'),
(953, 154, 229, 1, 'gfnh', '5f476d198d5e7'),
(954, 155, 230, 1, 'buy', '5f5e2d6c7e4b7'),
(955, 155, 230, 1, 'giy', '5f5e2d6c7e4c2'),
(956, 155, 230, 1, 'vyi', '5f5e2d6c7e4c4'),
(957, 155, 230, 1, 'vkgyv', '5f5e2d6c7e4c6');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `qns` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(5) NOT NULL,
  `uniq_qid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `eid`, `qns`, `choice`, `sn`, `uniq_qid`) VALUES
(184, 147, 'yfjgjk', 4, 1, '5f0ef88fa1d82'),
(185, 147, 'tyuty', 4, 2, '5f0ef89013adc'),
(186, 147, 'eyy', 4, 3, '5f0ef8905a1e2'),
(187, 147, 'yry', 4, 4, '5f0ef890c90bb'),
(188, 147, 'duty', 4, 5, '5f0ef89118a80'),
(189, 148, 'ghggk', 4, 1, '5f131723a8406'),
(190, 148, 'fhhf', 4, 2, '5f131724472dc'),
(191, 148, 'fkyu', 4, 3, '5f131724c81c0'),
(192, 149, 'jvmb,', 4, 1, '5f131793474a7'),
(193, 149, 'hgf', 4, 2, '5f131793cc9e7'),
(194, 149, 'hghh', 4, 3, '5f1317944be7d'),
(195, 150, 'hfhng', 4, 1, '5f13181358c9d'),
(196, 150, 'hdhfhg', 4, 2, '5f13181407584'),
(197, 150, 'chg', 4, 3, '5f13181461e5b'),
(198, 150, 'nc', 4, 4, '5f131814aa524'),
(199, 151, 'श्वसन किस प्रकार की अभिक्रिया है ?', 4, 1, '5f140160c7397'),
(200, 151, 'फेरस सल्फेट क्रिस्टल का रंग होता है', 4, 2, '5f14016150dfa'),
(201, 151, 'शाक-सब्जियों को विघटित होकर कम्पोस्ट बनना किस अभिक्रिया का उदाहरण है ?', 4, 3, '5f140161ae40f'),
(202, 151, 'लाल तप्त आयरन पर जलवाष्प प्रवाहित करने पर कौन-सा यौगिक प्राप्त होता है?', 4, 4, '5f140162225c7'),
(203, 151, 'जब सोडियम हाइड्रोक्साइड जिंक से अभिक्रिया करता है, तो कौन सा उत्पाद बनता है?', 4, 5, '5f140162755b2'),
(204, 151, 'दूध से दही बनना कैसा परिवर्तन है?', 4, 6, '5f140162b39b0'),
(205, 151, 'निम्नलिखित में कौन-सा पदार्थ बिना ज्वाला के जलता है?', 4, 7, '5f1401631dfc5'),
(206, 151, 'आलू चिप्स की थैली में कौन-सी गैस भरी रहती है?', 4, 8, '5f1401635705a'),
(207, 151, 'सिल्वर क्लोराइड (AgCl) का रंग क्या है?', 4, 9, '5f14016392c9d'),
(208, 151, 'जब मैग्नीशियम फीता को जलाया जाता है, तो उत्पन्न आग की लौ होती है ?', 4, 10, '5f140163de8f1'),
(209, 152, 'श्वसन किस प्रकार की अभिक्रिया है ?', 4, 1, '5f1d0f927432d'),
(210, 152, 'फेरस सल्फेट क्रिस्टल का रंग होता है', 4, 2, '5f1d0f92b6c47'),
(211, 152, 'शाक-सब्जियों को विघटित होकर कम्पोस्ट बनना किस अभिक्रिया का उदाहरण है ?', 4, 3, '5f1d0f92efc49'),
(212, 152, 'लाल तप्त आयरन पर जलवाष्प प्रवाहित करने पर कौन-सा यौगिक प्राप्त होता है?', 4, 4, '5f1d0f9331e4a'),
(213, 152, 'जब सोडियम हाइड्रोक्साइड जिंक से अभिक्रिया करता है, तो कौन सा उत्पाद बनता है?', 4, 5, '5f1d0f938605d'),
(214, 152, 'दूध से दही बनना कैसा परिवर्तन है?', 4, 6, '5f1d0f93cf458'),
(215, 152, 'निम्नलिखित में कौन-सा पदार्थ बिना ज्वाला के जलता है?', 4, 7, '5f1d0f940ecad'),
(216, 152, 'आलू चिप्स की थैली में कौन-सी गैस भरी रहती है?', 4, 8, '5f1d0f944a806'),
(217, 152, 'सिल्वर क्लोराइड (AgCl) का रंग क्या है?', 4, 9, '5f1d0f949a88f'),
(218, 152, ' जब मैग्नीशियम फीता को जलाया जाता है, तो उत्पन्न आग की लौ होती है ?', 4, 10, '5f1d0f94db87f'),
(219, 153, ' श्वसन किस प्रकार की अभिक्रिया है ?', 4, 1, '5f1d9c6662d57'),
(220, 153, 'फेरस सल्फेट क्रिस्टल का रंग होता है', 4, 2, '5f1d9c66c7fd0'),
(221, 153, 'शाक-सब्जियों को विघटित होकर कम्पोस्ट बनना किस अभिक्रिया का उदाहरण है ?', 4, 3, '5f1d9c671e760'),
(222, 153, ' जब सोडियम हाइड्रोक्साइड जिंक से अभिक्रिया करता है, तो कौन सा उत्पाद बनता है?', 4, 4, '5f1d9c675edfb'),
(223, 153, ' लाल तप्त आयरन पर जलवाष्प प्रवाहित करने पर कौन-सा यौगिक प्राप्त होता है?', 4, 5, '5f1d9c6797ce1'),
(224, 153, 'दूध से दही बनना कैसा परिवर्तन है?', 4, 6, '5f1d9c681c60b'),
(225, 153, 'निम्नलिखित में कौन-सा पदार्थ बिना ज्वाला के जलता है?', 4, 7, '5f1d9c687a5ee'),
(226, 153, 'आलू चिप्स की थैली में कौन-सी गैस भरी रहती है?', 4, 8, '5f1d9c68c59c2'),
(227, 153, 'सिल्वर क्लोराइड (AgCl) का रंग क्या है?', 4, 9, '5f1d9c690f242'),
(228, 153, 'जब मैग्नीशियम फीता को जलाया जाता है, तो उत्पन्न आग की लौ होती है ?', 4, 10, '5f1d9c6967b07'),
(229, 154, 'fdgfh', 4, 1, '5f476d197d21e'),
(230, 155, 'ghfhg', 4, 1, '5f5e2d6c5fc2b');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `uniq_eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `subject_id`, `uniq_eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(151, 24, '5f1d9952173c5', 'रासायनिक अभिक्रियाएं एवं समीकरण', 1, 0, 10, 1, '2020-08-23 14:14:49', 'enabled'),
(154, 24, '5f476d08ec057', 'sfdhg', 1, 1, 1, 1, '2020-08-27 08:21:48', 'enabled'),
(155, 24, '5f5e2d5264101', 'kmklml', 1, 1, 1, 1, '2020-09-13 14:31:46', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(1, 'pravin', 3, '2018-08-29 10:37:59'),
(2, 'mugunth', 11, '2018-08-29 10:39:42'),
(3, 'admin', 3, '2020-07-12 08:28:53'),
(4, 'abhishek', 0, '2020-06-14 13:49:10'),
(5, 'abhishek@gmail.com', 0, '2020-06-14 13:31:59'),
(6, 'adhakad123@yahoo.com', 0, '2020-07-06 08:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `save_result`
--

CREATE TABLE `save_result` (
  `id` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `attempt_question` int(11) NOT NULL,
  `right_answer` int(11) NOT NULL,
  `wrong_answer` int(11) NOT NULL,
  `no_answer` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `c_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `category_id`, `title`, `c_title`) VALUES
(24, 33, 'Hindi', '12th'),
(25, 33, 'English', '12th');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`) VALUES
(8, 'Abhishek Dhakad', '12345', 'CSE', 'M', 'abhishek@gmail.com', 12345, '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Abhishek Dhakad', '12345', 'CSE', 'M', 'adhakad123@yahoo.com', 12345, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Abhishek Dhakad', '12345', 'CSE', 'M', 'admin', 12345, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optionid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_result`
--
ALTER TABLE `save_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `optionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=958;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `save_result`
--
ALTER TABLE `save_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
