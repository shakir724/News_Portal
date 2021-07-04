-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 04, 2021 at 11:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapynews_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat`) VALUES
(31, 'अन्तर्राष्ट्रीय'),
(32, 'राष्ट्रीय'),
(33, 'राज्य'),
(34, 'क्षेत्रीय'),
(35, 'राजनीति'),
(36, 'सेहत'),
(37, 'जीवन शैली'),
(38, 'धर्म'),
(39, 'राशिफल'),
(40, 'खेल जगत'),
(41, 'मनोरंजन'),
(42, 'टेक्नलॉजी'),
(43, 'जुर्म'),
(44, 'कारोबार'),
(45, 'वाहन'),
(46, 'शिक्षा- कैरियर'),
(47, 'खाना खजाना'),
(48, 'पर्यटन'),
(49, 'व्यंग'),
(50, 'नारी'),
(51, 'न्यूज़ चेक'),
(52, 'बाल गोपाल'),
(53, 'कल्पना लोक'),
(54, 'उद्यम मित्र'),
(55, 'लाइफ एंड साइंस'),
(56, 'कृषि'),
(57, 'न्याय व्यवस्था');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city`, `state_id`, `district_id`) VALUES
(1509, 'Agra', 33, 540),
(1510, 'Aligarh', 33, 541),
(1511, 'Allahabad', 33, 542),
(1512, 'Ambedkar Nagar', 33, 543),
(1513, 'Auraiya', 33, 544),
(1514, 'Azamgarh', 33, 545),
(1515, 'Bagpat', 33, 546),
(1516, 'Bahraich', 33, 547),
(1517, 'Ballia', 33, 548),
(1518, 'Balrampur', 33, 549),
(1519, 'Banda', 33, 550),
(1520, 'Barabanki', 33, 551),
(1521, 'Bareilly', 33, 552),
(1522, 'Basti', 33, 553),
(1523, 'Bijnor', 33, 554),
(1524, 'Budaun', 33, 555),
(1525, 'Bulandshahr', 33, 556),
(1526, 'Chandauli', 33, 557),
(1527, 'Chhatrapati Shahuji Maharaj Nagar', 33, 558),
(1528, 'Chitrakoot', 33, 559),
(1529, 'Deoria', 33, 560),
(1530, 'Etah', 33, 561),
(1531, 'Etawah', 33, 562),
(1532, 'Faizabad', 33, 563),
(1533, 'Farrukhabad', 33, 564),
(1534, 'Fatehpur', 33, 565),
(1535, 'Firozabad', 33, 566),
(1536, 'Gautam Buddh Nagar', 33, 567),
(1537, 'Ghaziabad', 33, 568),
(1538, 'Ghazipur', 33, 569),
(1539, 'Gonda', 33, 570),
(1540, 'Gorakhpur', 33, 571),
(1541, 'Hamirpur', 33, 572),
(1542, 'Hardoi', 33, 573),
(1543, 'Hathras', 33, 574),
(1544, 'Jalaun', 33, 575),
(1545, 'Jaunpur', 33, 576),
(1546, 'Jhansi', 33, 577),
(1547, 'Jyotiba Phule Nagar', 33, 578),
(1548, 'Kannauj', 33, 579),
(1549, 'Kanpur', 33, 580),
(1550, 'Kanshi Ram Nagar', 33, 581),
(1551, 'Kaushambi', 33, 582),
(1552, 'Kushinagar', 33, 583),
(1553, 'Lakhimpur Kheri', 33, 584),
(1554, 'Lalitpur', 33, 585),
(1555, 'Lucknow', 33, 586),
(1556, 'Maharajganj', 33, 587),
(1557, 'Mahoba', 33, 588),
(1558, 'Mainpuri', 33, 589),
(1559, 'Mathura', 33, 590),
(1560, 'Mau', 33, 591),
(1561, 'Meerut', 33, 592),
(1562, 'Mirzapur', 33, 593),
(1563, 'Moradabad', 33, 594),
(1564, 'Muzaffarnagar', 33, 595),
(1565, 'Panchsheel Nagar district (Hapur)', 33, 596),
(1566, 'Pilibhit', 33, 597),
(1567, 'Pratapgarh', 33, 598),
(1568, 'Raebareli', 33, 599),
(1569, 'Ramabai Nagar (Kanpur Dehat)', 33, 600),
(1570, 'Rampur', 33, 601),
(1571, 'Saharanpur', 33, 602),
(1572, 'Sant Kabir Nagar', 33, 603),
(1573, 'Sant Ravidas Nagar', 33, 604),
(1574, 'Shahjahanpur', 33, 605),
(1575, 'Shamli', 33, 606),
(1576, 'Shravasti', 33, 607),
(1577, 'Siddharthnagar', 33, 608),
(1578, 'Sitapur', 33, 609),
(1579, 'Sonbhadra', 33, 610),
(1580, 'Sultanpur', 33, 611),
(1581, 'Unnao', 33, 612),
(1582, 'Varanasi', 33, 613),
(1583, 'Almora', 34, 614),
(1584, 'Bageshwar', 34, 615),
(1585, 'Chamoli', 34, 616),
(1586, 'Champawat', 34, 617),
(1587, 'Dehradun', 34, 618),
(1588, 'Haridwar', 34, 619),
(1589, 'Nainital', 34, 620),
(1590, 'Pauri Garhwal', 34, 621),
(1591, 'Pithoragarh', 34, 622),
(1592, 'Rudraprayag', 34, 623),
(1593, 'Tehri Garhwal', 34, 624),
(1594, 'Udham Singh Nagar', 34, 625),
(1595, 'Uttarkashi', 34, 626),
(1596, 'Lucknow', 33, 647);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `user_id`, `post_id`, `comment`, `flag`) VALUES
(4, 0, 16, 'omkar', 0),
(5, 1, 16, 'omkar', 1),
(6, 2, 16, 'mukesh', 1),
(7, 2, 16, 'muke', 1),
(8, 2, 16, 'm', 0),
(9, 1, 16, 'om', 0),
(12, 1, 2, 'HELLO', 0),
(13, 1, 16, 'omkar', 0),
(14, 2, 18, 'om', 0),
(27, 2, 2, 'omkar', 1),
(28, 2, 2, 'shu', 0),
(29, 2, 2, 'nee', 0),
(30, 22, 2, '', 0),
(31, 22, 2, '', 0),
(32, 22, 16, '', 0),
(33, 22, 19, '', 0),
(34, 22, 20, '', 0),
(35, 22, 19, '', 0),
(36, 22, 2, '', 0),
(37, 22, 16, '', 0),
(38, 22, 2, '', 0),
(39, 31, 20, '', 0),
(40, 31, 20, '', 0),
(41, 31, 20, '', 0),
(42, 31, 20, '', 0),
(43, 31, 20, '', 0),
(44, 31, 20, '', 0),
(45, 31, 20, '', 0),
(46, 31, 20, '', 0),
(47, 31, 20, '', 0),
(48, 31, 20, '', 0),
(49, 31, 20, '', 0),
(50, 31, 20, '', 0),
(51, 31, 20, '', 0),
(52, 31, 20, '', 0),
(53, 31, 20, '', 0),
(54, 34, 2, 'Hello', 0),
(55, 34, 2, '', 0),
(56, 34, 2, 'Follow', 0),
(57, 36, 34, 'bj', 0),
(58, 36, 34, 'huh', 0),
(59, 36, 2, 'ujh', 0),
(60, 36, 16, 'fb', 0),
(61, 36, 19, 'b', 0),
(62, 41, 31, 'buh', 1),
(63, 43, 44, 'Wow great', 0);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district` text NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district`, `state_id`) VALUES
(1, 'North Andaman', 1),
(2, 'South Andaman', 1),
(3, 'Nicobar', 1),
(4, 'Adilabad', 2),
(5, 'Anantapur', 2),
(6, 'Chittoor', 2),
(7, 'East Godavari', 2),
(8, 'Guntur', 2),
(9, 'Hyderabad', 2),
(10, 'Karimnagar', 2),
(11, 'Khammam', 2),
(12, 'Krishna', 2),
(13, 'Kurnool', 2),
(14, 'Mahbubnagar', 2),
(15, 'Medak', 2),
(16, 'Nalgonda', 2),
(17, 'Nizamabad', 2),
(18, 'Prakasam', 2),
(19, 'Ranga Reddy', 2),
(20, 'Srikakulam', 2),
(21, 'Sri Potti Sri Ramulu Nellore', 2),
(22, 'Vishakhapatnam', 2),
(23, 'Vizianagaram', 2),
(24, 'Warangal', 2),
(25, 'West Godavari', 2),
(26, 'Cudappah', 2),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Siang', 3),
(30, 'East Kameng', 3),
(31, 'Kurung Kumey', 3),
(32, 'Lohit', 3),
(33, 'Lower Dibang Valley', 3),
(34, 'Lower Subansiri', 3),
(35, 'Papum Pare', 3),
(36, 'Tawang', 3),
(37, 'Tirap', 3),
(38, 'Dibang Valley', 3),
(39, 'Upper Siang', 3),
(40, 'Upper Subansiri', 3),
(41, 'West Kameng', 3),
(42, 'West Siang', 3),
(43, 'Baksa', 4),
(44, 'Barpeta', 4),
(45, 'Bongaigaon', 4),
(46, 'Cachar', 4),
(47, 'Chirang', 4),
(48, 'Darrang', 4),
(49, 'Dhemaji', 4),
(50, 'Dima Hasao', 4),
(51, 'Dhubri', 4),
(52, 'Dibrugarh', 4),
(53, 'Goalpara', 4),
(54, 'Golaghat', 4),
(55, 'Hailakandi', 4),
(56, 'Jorhat', 4),
(57, 'Kamrup', 4),
(58, 'Kamrup Metropolitan', 4),
(59, 'Karbi Anglong', 4),
(60, 'Karimganj', 4),
(61, 'Kokrajhar', 4),
(62, 'Lakhimpur', 4),
(63, 'Morigaon', 4),
(64, 'Nagaon', 4),
(65, 'Nalbari', 4),
(66, 'Sivasagar', 4),
(67, 'Sonitpur', 4),
(68, 'Tinsukia', 4),
(69, 'Udalguri', 4),
(70, 'Araria', 5),
(71, 'Arwal', 5),
(72, 'Aurangabad', 5),
(73, 'Banka', 5),
(74, 'Begusarai', 5),
(75, 'Bhagalpur', 5),
(76, 'Bhojpur', 5),
(77, 'Buxar', 5),
(78, 'Darbhanga', 5),
(79, 'East Champaran', 5),
(80, 'Gaya', 5),
(81, 'Gopalganj', 5),
(82, 'Jamui', 5),
(83, 'Jehanabad', 5),
(84, 'Kaimur', 5),
(85, 'Katihar', 5),
(86, 'Khagaria', 5),
(87, 'Kishanganj', 5),
(88, 'Lakhisarai', 5),
(89, 'Madhepura', 5),
(90, 'Madhubani', 5),
(91, 'Munger', 5),
(92, 'Muzaffarpur', 5),
(93, 'Nalanda', 5),
(94, 'Nawada', 5),
(95, 'Patna', 5),
(96, 'Purnia', 5),
(97, 'Rohtas', 5),
(98, 'Saharsa', 5),
(99, 'Samastipur', 5),
(100, 'Saran', 5),
(101, 'Sheikhpura', 5),
(102, 'Sheohar', 5),
(103, 'Sitamarhi', 5),
(104, 'Siwan', 5),
(105, 'Supaul', 5),
(106, 'Chandigarh', 6),
(107, 'Bastar', 7),
(108, 'Bijapur', 7),
(109, 'Bilaspur', 7),
(110, 'Dantewada', 7),
(111, 'Dhamtari', 7),
(112, 'Durg', 7),
(113, 'Jashpur', 7),
(114, 'Janjgir-Champa', 7),
(115, 'Korba', 7),
(116, 'Koriya', 7),
(117, 'Kanker', 7),
(118, 'Kabirdham (formerly Kawardha)', 7),
(119, 'Mahasamund', 7),
(120, 'Narayanpur', 7),
(121, 'Raigarh', 7),
(122, 'Rajnandgaon', 7),
(123, 'Raipur', 7),
(124, 'Surguja', 7),
(125, 'Dadra and Nagar Haveli', 8),
(126, 'Daman', 9),
(127, 'Diu', 9),
(128, 'Central Delhi', 10),
(129, 'East Delhi', 10),
(130, 'New Delhi', 10),
(131, 'North Delhi', 10),
(132, 'North East Delhi', 10),
(133, 'North West Delhi', 10),
(134, 'South Delhi', 10),
(135, 'South West Delhi', 10),
(136, 'West Delhi', 10),
(137, 'North Goa', 11),
(138, 'South Goa', 11),
(139, 'Ahmedabad', 12),
(140, 'Amreli district', 12),
(141, 'Anand', 12),
(142, 'Banaskantha', 12),
(143, 'Bharuch', 12),
(144, 'Bhavnagar', 12),
(145, 'Dahod', 12),
(146, 'The Dangs', 12),
(147, 'Gandhinagar', 12),
(148, 'Jamnagar', 12),
(149, 'Junagadh', 12),
(150, 'Kutch', 12),
(151, 'Kheda', 12),
(152, 'Mehsana', 12),
(153, 'Narmada', 12),
(154, 'Navsari', 12),
(155, 'Patan', 12),
(156, 'Panchmahal', 12),
(157, 'Porbandar', 12),
(158, 'Rajkot', 12),
(159, 'Sabarkantha', 12),
(160, 'Surendranagar', 12),
(161, 'Surat', 12),
(162, 'Tapi', 12),
(163, 'Vadodara', 12),
(164, 'Valsad', 12),
(165, 'Ambala', 13),
(166, 'Bhiwani', 13),
(167, 'Faridabad', 13),
(168, 'Fatehabad', 13),
(169, 'Gurgaon', 13),
(170, 'Hissar', 13),
(171, 'Jhajjar', 13),
(172, 'Jind', 13),
(173, 'Karnal', 13),
(174, 'Kaithal', 13),
(175, 'Kurukshetra', 13),
(176, 'Mahendragarh', 13),
(177, 'Mewat', 13),
(178, 'Palwal', 13),
(179, 'Panchkula', 13),
(180, 'Panipat', 13),
(181, 'Rewari', 13),
(182, 'Rohtak', 13),
(183, 'Sirsa', 13),
(184, 'Sonipat', 13),
(185, 'Yamuna Nagar', 13),
(186, 'Bilaspur', 14),
(187, 'Chamba', 14),
(188, 'Hamirpur', 14),
(189, 'Kangra', 14),
(190, 'Kinnaur', 14),
(191, 'Kullu', 14),
(192, 'Lahaul and Spiti', 14),
(193, 'Mandi', 14),
(194, 'Shimla', 14),
(195, 'Sirmaur', 14),
(196, 'Solan', 14),
(197, 'Una', 14),
(198, 'Anantnag', 15),
(199, 'Badgam', 15),
(200, 'Bandipora', 15),
(201, 'Baramulla', 15),
(202, 'Doda', 15),
(203, 'Ganderbal', 15),
(204, 'Jammu', 15),
(205, 'Kargil', 15),
(206, 'Kathua', 15),
(207, 'Kishtwar', 15),
(208, 'Kupwara', 15),
(209, 'Kulgam', 15),
(210, 'Leh', 15),
(211, 'Poonch', 15),
(212, 'Pulwama', 15),
(213, 'Rajouri', 15),
(214, 'Ramban', 15),
(215, 'Reasi', 15),
(216, 'Samba', 15),
(217, 'Shopian', 15),
(218, 'Srinagar', 15),
(219, 'Udhampur', 15),
(220, 'Bokaro', 16),
(221, 'Chatra', 16),
(222, 'Deoghar', 16),
(223, 'Dhanbad', 16),
(224, 'Dumka', 16),
(225, 'East Singhbhum', 16),
(226, 'Garhwa', 16),
(227, 'Giridih', 16),
(228, 'Godda', 16),
(229, 'Gumla', 16),
(230, 'Hazaribag', 16),
(231, 'Jamtara', 16),
(232, 'Khunti', 16),
(233, 'Koderma', 16),
(234, 'Latehar', 16),
(235, 'Lohardaga', 16),
(236, 'Pakur', 16),
(237, 'Palamu', 16),
(238, 'Ramgarh', 16),
(239, 'Ranchi', 16),
(240, 'Sahibganj', 16),
(241, 'Seraikela Kharsawan', 16),
(242, 'Simdega', 16),
(243, 'West Singhbhum', 16),
(244, 'Bagalkot', 17),
(245, 'Bangalore Rural', 17),
(246, 'Bangalore Urban', 17),
(247, 'Belgaum', 17),
(248, 'Bellary', 17),
(249, 'Bidar', 17),
(250, 'Bijapur', 17),
(251, 'Chamarajnagar', 17),
(252, 'Chikkamagaluru', 17),
(253, 'Chikkaballapur', 17),
(254, 'Chitradurga', 17),
(255, 'Davanagere', 17),
(256, 'Dharwad', 17),
(257, 'Dakshina Kannada', 17),
(258, 'Gadag', 17),
(259, 'Gulbarga', 17),
(260, 'Hassan', 17),
(261, 'Haveri district', 17),
(262, 'Kodagu', 17),
(263, 'Kolar', 17),
(264, 'Koppal', 17),
(265, 'Mandya', 17),
(266, 'Mysore', 17),
(267, 'Raichur', 17),
(268, 'Shimoga', 17),
(269, 'Tumkur', 17),
(270, 'Udupi', 17),
(271, 'Uttara Kannada', 17),
(272, 'Ramanagara', 17),
(273, 'Yadgir', 17),
(274, 'Alappuzha', 18),
(275, 'Ernakulam', 18),
(276, 'Idukki', 18),
(277, 'Kannur', 18),
(278, 'Kasaragod', 18),
(279, 'Kollam', 18),
(280, 'Kottayam', 18),
(281, 'Kozhikode', 18),
(282, 'Malappuram', 18),
(283, 'Palakkad', 18),
(284, 'Pathanamthitta', 18),
(285, 'Thrissur', 18),
(286, 'Thiruvananthapuram', 18),
(287, 'Wayanad', 18),
(288, 'Lakshadweep', 19),
(289, 'Agar', 20),
(290, 'Alirajpur', 20),
(291, 'Anuppur', 20),
(292, 'Ashok Nagar', 20),
(293, 'Balaghat', 20),
(294, 'Barwani', 20),
(295, 'Betul', 20),
(296, 'Bhind', 20),
(297, 'Bhopal', 20),
(298, 'Burhanpur', 20),
(299, 'Chhatarpur', 20),
(300, 'Chhindwara', 20),
(301, 'Damoh', 20),
(302, 'Datia', 20),
(303, 'Dewas', 20),
(304, 'Dhar', 20),
(305, 'Dindori', 20),
(306, 'Guna', 20),
(307, 'Gwalior', 20),
(308, 'Harda', 20),
(309, 'Hoshangabad', 20),
(310, 'Indore', 20),
(311, 'Jabalpur', 20),
(312, 'Jhabua', 20),
(313, 'Katni', 20),
(314, 'Khandwa (East Nimar)', 20),
(315, 'Khargone (West Nimar)', 20),
(316, 'Mandla', 20),
(317, 'Mandsaur', 20),
(318, 'Morena', 20),
(319, 'Narsinghpur', 20),
(320, 'Neemuch', 20),
(321, 'Panna', 20),
(322, 'Raisen', 20),
(323, 'Rajgarh', 20),
(324, 'Ratlam', 20),
(325, 'Rewa', 20),
(326, 'Sagar', 20),
(327, 'Satna', 20),
(328, 'Sehore', 20),
(329, 'Seoni', 20),
(330, 'Shahdol', 20),
(331, 'Shajapur', 20),
(332, 'Sheopur', 20),
(333, 'Shivpuri', 20),
(334, 'Sidhi', 20),
(335, 'Singrauli', 20),
(336, 'Tikamgarh', 20),
(337, 'Ujjain', 20),
(338, 'Umaria', 20),
(339, 'Vidisha', 20),
(340, 'Ahmednagar', 21),
(341, 'Akola', 21),
(342, 'Amravati', 21),
(343, 'Aurangabad', 21),
(344, 'Beed', 21),
(345, 'Bhandara', 21),
(346, 'Buldhana', 21),
(347, 'Chandrapur', 21),
(348, 'Dhule', 21),
(349, 'Gadchiroli', 21),
(350, 'Gondia', 21),
(351, 'Hingoli', 21),
(352, 'Jalgaon', 21),
(353, 'Jalna', 21),
(354, 'Kolhapur', 21),
(355, 'Latur', 21),
(356, 'Mumbai City', 21),
(357, 'Mumbai suburban', 21),
(358, 'Nanded', 21),
(359, 'Nandurbar', 21),
(360, 'Nagpur', 21),
(361, 'Nashik', 21),
(362, 'Osmanabad', 21),
(363, 'Parbhani', 21),
(364, 'Pune', 21),
(365, 'Raigad', 21),
(366, 'Ratnagiri', 21),
(367, 'Sangli', 21),
(368, 'Satara', 21),
(369, 'Sindhudurg', 21),
(370, 'Solapur', 21),
(371, 'Thane', 21),
(372, 'Wardha', 21),
(373, 'Washim', 21),
(374, 'Yavatmal', 21),
(375, 'Bishnupur', 22),
(376, 'Churachandpur', 22),
(377, 'Chandel', 22),
(378, 'Imphal East', 22),
(379, 'Senapati', 22),
(380, 'Tamenglong', 22),
(381, 'Thoubal', 22),
(382, 'Ukhrul', 22),
(383, 'Imphal West', 22),
(384, 'East Garo Hills', 23),
(385, 'East Khasi Hills', 23),
(386, 'Jaintia Hills', 23),
(387, 'Ri Bhoi', 23),
(388, 'South Garo Hills', 23),
(389, 'West Garo Hills', 23),
(390, 'West Khasi Hills', 23),
(391, 'Aizawl', 24),
(392, 'Champhai', 24),
(393, 'Kolasib', 24),
(394, 'Lawngtlai', 24),
(395, 'Lunglei', 24),
(396, 'Mamit', 24),
(397, 'Saiha', 24),
(398, 'Serchhip', 24),
(399, 'Dimapur', 25),
(400, 'Kiphire', 25),
(401, 'Kohima', 25),
(402, 'Longleng', 25),
(403, 'Mokokchung', 25),
(404, 'Mon', 25),
(405, 'Peren', 25),
(406, 'Phek', 25),
(407, 'Tuensang', 25),
(408, 'Wokha', 25),
(409, 'Zunheboto', 25),
(410, 'Angul', 26),
(411, 'Boudh (Bauda)', 26),
(412, 'Bhadrak', 26),
(413, 'Balangir', 26),
(414, 'Bargarh (Baragarh)', 26),
(415, 'Balasore', 26),
(416, 'Cuttack', 26),
(417, 'Debagarh (Deogarh)', 26),
(418, 'Dhenkanal', 26),
(419, 'Ganjam', 26),
(420, 'Gajapati', 26),
(421, 'Jharsuguda', 26),
(422, 'Jajpur', 26),
(423, 'Jagatsinghpur', 26),
(424, 'Khordha', 26),
(425, 'Kendujhar (Keonjhar)', 26),
(426, 'Kalahandi', 26),
(427, 'Kandhamal', 26),
(428, 'Koraput', 26),
(429, 'Kendrapara', 26),
(430, 'Malkangiri', 26),
(431, 'Mayurbhanj', 26),
(432, 'Nabarangpur', 26),
(433, 'Nuapada', 26),
(434, 'Nayagarh', 26),
(435, 'Puri', 26),
(436, 'Rayagada', 26),
(437, 'Sambalpur', 26),
(438, 'Subarnapur (Sonepur)', 26),
(439, 'Sundergarh', 26),
(440, 'Karaikal', 27),
(441, 'Mahe', 27),
(442, 'Pondicherry', 27),
(443, 'Yanam', 27),
(444, 'Amritsar', 28),
(445, 'Barnala', 28),
(446, 'Bathinda', 28),
(447, 'Firozpur', 28),
(448, 'Faridkot', 28),
(449, 'Fatehgarh Sahib', 28),
(450, 'Fazilka[6]', 28),
(451, 'Gurdaspur', 28),
(452, 'Hoshiarpur', 28),
(453, 'Jalandhar', 28),
(454, 'Kapurthala', 28),
(455, 'Ludhiana', 28),
(456, 'Mansa', 28),
(457, 'Moga', 28),
(458, 'Sri Muktsar Sahib', 28),
(459, 'Pathankot', 28),
(460, 'Patiala', 28),
(461, 'Rupnagar', 28),
(462, 'Ajitgarh (Mohali)', 28),
(463, 'Sangrur', 28),
(464, 'Shahid Bhagat Singh Nagar', 28),
(465, 'Tarn Taran', 28),
(466, 'Ajmer', 29),
(467, 'Alwar', 29),
(468, 'Bikaner', 29),
(469, 'Barmer', 29),
(470, 'Banswara', 29),
(471, 'Bharatpur', 29),
(472, 'Baran', 29),
(473, 'Bundi', 29),
(474, 'Bhilwara', 29),
(475, 'Churu', 29),
(476, 'Chittorgarh', 29),
(477, 'Dausa', 29),
(478, 'Dholpur', 29),
(479, 'Dungapur', 29),
(480, 'Ganganagar', 29),
(481, 'Hanumangarh', 29),
(482, 'Jhunjhunu', 29),
(483, 'Jalore', 29),
(484, 'Jodhpur', 29),
(485, 'Jaipur', 29),
(486, 'Jaisalmer', 29),
(487, 'Jhalawar', 29),
(488, 'Karauli', 29),
(489, 'Kota', 29),
(490, 'Nagaur', 29),
(491, 'Pali', 29),
(492, 'Pratapgarh', 29),
(493, 'Rajsamand', 29),
(494, 'Sikar', 29),
(495, 'Sawai Madhopur', 29),
(496, 'Sirohi', 29),
(497, 'Tonk', 29),
(498, 'Udaipur', 29),
(499, 'East Sikkim', 30),
(500, 'North Sikkim', 30),
(501, 'South Sikkim', 30),
(502, 'West Sikkim', 30),
(503, 'Ariyalur', 31),
(504, 'Chennai', 31),
(505, 'Coimbatore', 31),
(506, 'Cuddalore', 31),
(507, 'Dharmapuri', 31),
(508, 'Dindigul', 31),
(509, 'Erode', 31),
(510, 'Kanchipuram', 31),
(511, 'Kanyakumari', 31),
(512, 'Karur', 31),
(513, 'Krishnagiri', 31),
(514, 'Madurai', 31),
(515, 'Nagapattinam', 31),
(516, 'Nilgiris', 31),
(517, 'Namakkal', 31),
(518, 'Perambalur', 31),
(519, 'Pudukkottai', 31),
(520, 'Ramanathapuram', 31),
(521, 'Salem', 31),
(522, 'Sivaganga', 31),
(523, 'Tirupur', 31),
(524, 'Tiruchirappalli', 31),
(525, 'Theni', 31),
(526, 'Tirunelveli', 31),
(527, 'Thanjavur', 31),
(528, 'Thoothukudi', 31),
(529, 'Tiruvallur', 31),
(530, 'Tiruvarur', 31),
(531, 'Tiruvannamalai', 31),
(532, 'Vellore', 31),
(533, 'Viluppuram', 31),
(534, 'Virudhunagar', 31),
(535, 'Dhalai', 32),
(536, 'North Tripura', 32),
(537, 'South Tripura', 32),
(538, 'Khowai[7]', 32),
(539, 'West Tripura', 32),
(540, 'Agra', 33),
(541, 'Aligarh', 33),
(542, 'Allahabad', 33),
(543, 'Ambedkar Nagar', 33),
(544, 'Auraiya', 33),
(545, 'Azamgarh', 33),
(546, 'Bagpat', 33),
(547, 'Bahraich', 33),
(548, 'Ballia', 33),
(549, 'Balrampur', 33),
(550, 'Banda', 33),
(551, 'Barabanki', 33),
(552, 'Bareilly', 33),
(553, 'Basti', 33),
(554, 'Bijnor', 33),
(555, 'Budaun', 33),
(556, 'Bulandshahr', 33),
(557, 'Chandauli', 33),
(558, 'Chhatrapati Shahuji Maharaj Nagar[8]', 33),
(559, 'Chitrakoot', 33),
(560, 'Deoria', 33),
(561, 'Etah', 33),
(562, 'Etawah', 33),
(563, 'Faizabad', 33),
(564, 'Farrukhabad', 33),
(565, 'Fatehpur', 33),
(566, 'Firozabad', 33),
(567, 'Gautam Buddh Nagar', 33),
(568, 'Ghaziabad', 33),
(569, 'Ghazipur', 33),
(570, 'Gonda', 33),
(571, 'Gorakhpur', 33),
(572, 'Hamirpur', 33),
(573, 'Hardoi', 33),
(574, 'Hathras', 33),
(575, 'Jalaun', 33),
(576, 'Jaunpur district', 33),
(577, 'Jhansi', 33),
(578, 'Jyotiba Phule Nagar', 33),
(579, 'Kannauj', 33),
(580, 'Kanpur', 33),
(581, 'Kanshi Ram Nagar', 33),
(582, 'Kaushambi', 33),
(583, 'Kushinagar', 33),
(584, 'Lakhimpur Kheri', 33),
(585, 'Lalitpur', 33),
(586, 'Lucknow', 33),
(587, 'Maharajganj', 33),
(588, 'Mahoba', 33),
(589, 'Mainpuri', 33),
(590, 'Mathura', 33),
(591, 'Mau', 33),
(592, 'Meerut', 33),
(593, 'Mirzapur', 33),
(594, 'Moradabad', 33),
(595, 'Muzaffarnagar', 33),
(596, 'Panchsheel Nagar district (Hapur)', 33),
(597, 'Pilibhit', 33),
(598, 'Pratapgarh', 33),
(599, 'Raebareli', 33),
(600, 'Ramabai Nagar (Kanpur Dehat)', 33),
(601, 'Rampur', 33),
(602, 'Saharanpur', 33),
(603, 'Sant Kabir Nagar', 33),
(604, 'Sant Ravidas Nagar', 33),
(605, 'Shahjahanpur', 33),
(606, 'Shamli[9]', 33),
(607, 'Shravasti', 33),
(608, 'Siddharthnagar', 33),
(609, 'Sitapur', 33),
(610, 'Sonbhadra', 33),
(611, 'Sultanpur', 33),
(612, 'Unnao', 33),
(613, 'Varanasi', 33),
(614, 'Almora', 34),
(615, 'Bageshwar', 34),
(616, 'Chamoli', 34),
(617, 'Champawat', 34),
(618, 'Dehradun', 34),
(619, 'Haridwar', 34),
(620, 'Nainital', 34),
(621, 'Pauri Garhwal', 34),
(622, 'Pithoragarh', 34),
(623, 'Rudraprayag', 34),
(624, 'Tehri Garhwal', 34),
(625, 'Udham Singh Nagar', 34),
(626, 'Uttarkashi', 34),
(627, 'Bankura', 35),
(628, 'Bardhaman', 35),
(629, 'Birbhum', 35),
(630, 'Cooch Behar', 35),
(631, 'Dakshin Dinajpur', 35),
(632, 'Darjeeling', 35),
(633, 'Hooghly', 35),
(634, 'Howrah', 35),
(635, 'Jalpaiguri', 35),
(636, 'Kolkata', 35),
(637, 'Maldah', 35),
(638, 'Murshidabad', 35),
(639, 'Nadia', 35),
(640, 'North 24 Parganas', 35),
(641, 'Paschim Medinipur', 35),
(642, 'Purba Medinipur', 35),
(643, 'Purulia', 35),
(644, 'South 24 Parganas', 35),
(645, 'Uttar Dinajpur', 35),
(646, 'Hardoi', 33),
(647, 'Lucknow', 33);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follow_id`, `user_id`, `follower_id`) VALUES
(6, 2, 2),
(13, 0, 2),
(15, 2, 22),
(16, 1, 22),
(19, 43, 43),
(22, 0, 1),
(25, 41, 36),
(28, 41, 1),
(29, 36, 1),
(30, 22, 2),
(32, 41, 47);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `post_id`) VALUES
(13, 1, 18),
(16, 1, 16),
(18, 2, 20),
(25, 2, 16),
(27, 22, 16),
(28, 22, 2),
(30, 22, 41),
(34, 36, 0),
(40, 1, 75),
(46, 36, 78),
(47, 36, 79),
(48, 36, 77),
(49, 36, 41),
(50, 1, 73),
(51, 37, 78),
(52, 37, 79),
(53, 1, 79),
(55, 1, 78),
(56, 36, 87),
(58, 47, 117);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'omkar', 'omkar', 'omkar@gmail.com'),
(2, 'mukesh', 'mukesh', 'mukeshgmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `keywords` text NOT NULL,
  `date` date NOT NULL,
  `cat_id` text NOT NULL,
  `sub_id` int(11) NOT NULL,
  `state_id` text NOT NULL,
  `city_id` text NOT NULL,
  `district_id` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0,
  `status` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `filename`, `url`, `keywords`, `date`, `cat_id`, `sub_id`, `state_id`, `city_id`, `district_id`, `user_id`, `views`, `flag`, `status`) VALUES
(2, 'title', 'description', '', 'url', 'keyword', '0000-00-00', '1', 4, '15', '11', '5', 0, 0, 1, 0),
(15, 'title', 'description', '', 'url', 'keyword', '0000-00-00', '2', 3, '15', '11', '6', 1, 0, 2, 0),
(16, 'omkar', 'omkar description one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten one two three four five six even eight nine ten', '', 'url', 'keyword keyword keyword', '0000-00-00', '1', 6, '4', '3', '4', 1, 0, 1, 0),
(17, 'mukesh', 'mukesh', '', 'url', 'keyword', '0000-00-00', '1', 5, '4', '3', '4', 2, 0, 2, 0),
(18, 'mukesh', 'mukesh', '', 'url', 'keyword', '0000-00-00', '1', 5, '4', '3', '4', 2, 0, 1, 0),
(19, 'ad', 'ad', '', 'ad', 'ad', '0000-00-00', '2', 3, '15', '11', '5', 0, 9, 1, 0),
(20, 'title', 'one two three four five six seven eight nine ten', '', 'url', 'one two three four five', '2021-01-05', '1', 4, '15', '11', '5', 1, 1, 1, 0),
(21, 'T', 'T', '', 'T', 'T', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(22, 'Q', 'Q', '', 'Q', 'Q', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(23, 'W', 'W', 'Desert.jpg', 'W', 'W', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(24, 'A', 'A', 'Chrysanthemum.jpg', 'A', 'A', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(25, 'z', 'z', 'Desert.jpg', 'z', 'z', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(26, 's', 's', 'Desert.jpg', 's', 's', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(27, 'e', 'e', 'Chrysanthemum.jpg', 'e', 'e', '2021-01-10', '2', 3, '15', '11', '5', 22, 0, 2, 0),
(28, 'Title', 'Title', '', 'Url', 'Keyword', '2021-01-12', '31', 0, '34', '0', '0', 31, 0, 2, 0),
(29, 'title', 'title', 'Desert.jpg', 'url', 'ke ', '2021-01-12', '31', 0, '34', '8', '1508', 22, 0, 2, 0),
(30, 'titiiti', 'tiitit', 'Jellyfish.jpg', 'ww', 'ww', '2021-01-12', '53', 0, '34', '8', '1508', 22, 0, 2, 0),
(31, 'oo', 'o', 'Koala.jpg', 'oo', 'oo', '2021-01-12', '53', 0, '34', '8', '1508', 22, 19, 1, 0),
(32, 'h', 'h', 'Hydrangeas.jpg', 'u', 'h', '2021-01-12', '44', 0, '34', '8', '1508', 22, 0, 2, 0),
(33, 'tty', 'ui', 'Tulips.jpg', 'ooo', 'pppp', '2021-01-12', '54', 0, '34', '8', '1508', 22, 0, 2, 0),
(34, 'ooioi', 'ioo', 'Chrysanthemum.jpg', 'jmkl', ',..', '2021-01-12', '44', 0, '34', '8', '1508', 22, 9, 1, 0),
(35, 'dddj', 'JJJJ', 'Koala.jpg', 'ssss', 'ssss', '2021-01-12', '31', 0, '34', '8', '1508', 33, 0, 1, 0),
(36, 'gyg', 'huh', 'WhatsApp Image 2021-01-12 at 11.13.38 AM.jpeg', 'http://4cf2c016.ngrok.io/courseera/guess.php?guess=102', 'hihij', '2021-01-22', '44,56,34', 0, '33', '556', '1525', 41, 4, 1, 0),
(37, 'ititit', 'irririri', 'Desert.jpg', 'url', 'lglgl', '2021-01-22', '32,55', 0, '33', '540', '1509', 22, 0, 2, 0),
(38, 'hghg', 'hfhfh', 'Desert.jpg', 'ddss', 'ddf', '2021-01-22', '44,56', 0, '33', '540', '1509', 22, 0, 2, 0),
(39, 'hghg', 'hfhfh', 'Jellyfish.jpg', 'ddss', 'ddf', '2021-01-22', '44,56', 0, '33', '0', '0', 22, 0, 2, 0),
(40, 'hghg', 'hfhfh', 'Penguins.jpg', 'ddss', 'ddf', '2021-01-22', '44,56', 0, '33', '0', '0', 22, 0, 2, 0),
(41, 'hghg', 'hfhfh', 'Penguins.jpg', 'ddss', 'ddf', '2021-01-22', '44,56', 0, '33', '0', '0', 22, 2, 1, 0),
(42, 'Test test', 'Test test test ', 'IMG-20210122-WA0016.jpg', 'Shh.com', 'Test', '2021-01-22', '31,53', 0, '33', '613', '1582', 41, 0, 0, 0),
(43, 'Test test', 'Test test test ', 'IMG-20210122-WA0016.jpg', 'Shh.com', 'Test', '2021-01-22', '31,53', 0, '33', '613', '1582', 41, 1, 1, 0),
(44, 'à¤†à¤œ à¤•à¥€ à¤¤à¤¾à¤œà¤¾ à¤–à¤¬à¤°', 'à¤–à¤¬à¤° à¤¬à¤¸ à¤¯à¤¹ à¤¹à¥ˆ à¤•à¤¿ à¤¯à¤¹ à¤¤à¤¾à¤œà¤¾ à¤¹à¥ˆ', 'IMG_20210123_223345_DRO.jpg', 'Vapynews.com', 'à¤¨à¥ˆà¤¨à¥€à¤¤à¤¾à¤²', '2021-01-24', '37,52,41', 0, '34', '620', '1589', 43, 15, 1, 0),
(45, 'php', 'scripting language', 'keyskills.php', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 0, 0, 2, 0),
(46, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 0, 0, 2, 0),
(47, 'php', '.nljkgfaukgdiky', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 0, 0, 2, 0),
(48, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 0, 0, 2, 0),
(50, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 0, 0, 2, 0),
(51, 'vdv', 'vssvvs', 'class.png', '', 'vs,aa,dds', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(52, 'segs', 'sgse', 'class.png', '', 'ssbd,dhd,jdjd', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(53, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(54, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(55, 'php', 'script', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(56, 'php', 'script', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(57, 'php', 'scripting language', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-28', '', 0, '', '', '', 36, 0, 2, 0),
(58, 'dv', 'vsdvd', 'activity.png', '', 'vs,aa,dds', '2021-01-29', '', 0, '', '', '', 36, 0, 2, 0),
(59, 'dvv', 'vdvsd', 'activity.png', '', 'dsv', '2021-01-29', '', 0, '', '', '', 36, 0, 2, 0),
(60, 'dvv', 'vdvsd', 'activity.png', '', 'dsv', '2021-01-29', '', 0, '', '', '', 36, 0, 2, 0),
(61, 'svsdv', 'svsdv', 'activity.png', '', 'vs,aa,dds', '2021-01-29', 'à¤•à¤¾à¤°à¥‹à¤¬à¤¾à¤°, à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¥€à¤¯', 0, '', '', '', 36, 0, 2, 0),
(62, 'svsdv', 'svsdv', 'activity.png', '', 'vs,aa,dds', '2021-01-29', '', 0, '', '', '', 36, 0, 2, 0),
(63, 'svsdv', 'svsdv', 'activity.png', '', 'vs,aa,dds', '2021-01-29', '', 0, '', '', '', 36, 0, 2, 0),
(64, 'svsdv', 'svsdv', 'activity.png', '', 'vs,aa,dds', '2021-01-29', '44, 34', 0, '', '', '', 36, 0, 2, 0),
(65, 'vds', 'svdsdv', 'activity.png', '', 'vs', '2021-01-29', '38, 50', 0, '', '', '', 36, 0, 2, 0),
(66, 'vds', 'svdsdv', 'activity.png', '', 'vs', '2021-01-29', '38, 50', 0, '', '', '', 36, 0, 2, 0),
(67, 'vds', 'svdsdv', 'activity.png', '', 'vs', '2021-01-29', '38, 50', 0, '', '', '', 36, 0, 2, 0),
(68, 'c', 'vsdvds', 'activity.png', '', 'vsds', '2021-01-29', '56, 34', 0, '20', '', '', 36, 0, 2, 0),
(69, 'c', 'vsdvds', 'activity.png', '', 'vsds', '2021-01-29', '56, 34', 0, '20', '', '', 36, 0, 2, 0),
(70, 'dvs', 'vssd', 'activity.png', '', 'vsd', '2021-01-29', '56, 34', 0, '33,33,33', '550,557,551', '1519,1526,1520', 36, 0, 2, 0),
(71, 'dvs', 'vssd', 'activity.png', '', 'vsd', '2021-01-29', '56, 34, 47', 0, '20', '', '', 36, 0, 2, 0),
(72, 'php demo1236544', 'scripts', 'abc.txt', 'https://www.youtube.com/embed/Hqd8dZrw5bg?autoplay=1&enablejsapi=1', 'php,web ', '2021-01-29', '31, 53', 0, '21', '', '', 36, 15, 2, 0),
(73, 'TEST POST NEWS', 'TESTTING 123 123 ', 'Homepage.JPG', '', 'tag 1 , tag 2 , tag 3', '2021-01-29', '31, 53, 34', 0, '33', '613', '1582', 41, 25, 1, 0),
(74, 'php', 'scripting', 'abc.txt', '', 'php,web ', '2021-01-29', '31, 42', 0, '21', '', '', 36, 0, 2, 0),
(75, 'new test again', 'new test agian ', 'KAIMS Assets-24.jpg', '', 'te , fdf f, ', '2021-01-29', '54, 53, 47, 40', 0, '', '', '', 41, 25, 1, 0),
(76, 'Testing', 'Testing TestingTestingTestingTesting\r\nTesting TestingTestingTestingTesting\r\nTesting TestingTestingTestingTesting', 'IMG-20210128-WA0006.jpg', '', 'Lucknow', '2021-01-29', '34, 47, 37, 38, 57', 0, '34', '', '', 0, 2, 1, 0),
(77, 'Test', '[22/01, 18:55] yogendraju: http://vapy.news\r\n[22/01, 18:55] yogendraju: http://vapy.news/join-reporter/', 'IMG-20210129-WA0011.jpg', '', 'Lucknow', '2021-01-29', '53, 56, 37', 0, '34', '', '', 43, 7, 1, 0),
(78, 'hello', 'hello', '2.jpg', '', 'vs,aa,dds', '2021-02-01', '56, 34, 47', 0, '33', '554', '1523', 36, 14, 1, 0),
(79, 'sdc', 'cscdc', '2.jpg', '', 'vsd', '2021-02-01', '47, 40', 0, '33', '1523', '554', 36, 1, 1, 0),
(80, 'new', 'qqqqqq', 'pizzza.jpg', '', 'sss', '2021-02-02', '36', 0, '21', '', '', 36, 0, 2, 0),
(82, '', '', '', '', '', '2021-02-07', '', 0, '', '', '', 36, 0, 2, 0),
(83, 'sdsgeeee', 'asdfghjklmnbvcxzqwertyuiop', '3.jpg', '', 'sddsdd', '2021-02-07', '31', 0, '21', '', '', 36, 0, 2, 0),
(84, 'sdsg', 'hjvufyrf678oygi', '2.jpg', '', 'ghtd567yhyjgfi', '2021-02-07', '54, 53', 0, '21', '', '', 36, 0, 1, 0),
(85, '', '', '', '', '', '2021-02-07', '', 0, '', '', '', 36, 0, 2, 0),
(86, '', '', '', '', '', '2021-02-08', '', 0, '', '', '', 36, 0, 2, 0),
(87, '', '', '', '', '', '2021-02-08', '', 0, '', '', '', 36, 17, 1, 0),
(88, 'asdfgk', 'zxcvmnlaksjdhfg', '1.jpg', '', 'dd', '2021-02-08', '31', 0, '21', '', '', 36, 6, 1, 0),
(89, 'hello', '<p>dsnfjuijfo;ksoi ndsi vyuijokc puf8</p>', '1.jpg', '', 'nszkuh', '2021-02-08', '53', 0, '21', '', '', 36, 0, 0, 0),
(90, 'mjkdhia', '<p>zmxnckijODKA</p>', '3.jpg', '', 'MSZNIXo', '2021-02-08', '34, 40', 0, '', '', '', 36, 0, 1, 0),
(106, 'demo 555', '<p>h<b>ello</b></p>', '1.jpg', '', 'jshi', '2021-02-08', '53, 44', 0, '21', '', '', 36, 0, 0, 0),
(107, 'demo 555', '<p>h<b>ello</b></p>', '2.jpg', '', 'jshi', '2021-02-08', '53, 44', 0, '21', '', '', 36, 0, 0, 0),
(108, 'demo 555', '<p>h<b>ello</b></p>', '3.jpg', '', 'jshi', '2021-02-08', '53, 44', 0, '21', '', '', 36, 0, 0, 0),
(109, 'demo 555', '<p>h<b>ello</b></p>', '4.jpg', '', 'jshi', '2021-02-08', '53, 44', 0, '21', '', '', 36, 0, 0, 0),
(110, 'demo 555', '<p>h<b>ello</b></p>', '', '', 'jshi', '2021-02-08', '53, 44', 0, '21', '', '', 36, 0, 0, 0),
(111, 'sjjis', '<p>sjjiid</p>', '1.jpg', '', 'skjck', '2021-02-08', '56', 0, '21', '', '', 36, 0, 0, 0),
(112, 'sjjis', '<p>sjjiid</p>', '2.jpg', '', 'skjck', '2021-02-08', '56', 0, '21', '', '', 36, 0, 2, 0),
(113, 'sjjis', '<p>sjjiid</p>', '3.jpg', '', 'skjck', '2021-02-08', '56', 0, '21', '', '', 36, 0, 0, 0),
(114, 'skjosko', '<p>jdbvhishvjdo</p>', '4.jpg', '', 'snznoj', '2021-02-08', '31', 0, '21', '', '', 36, 0, 0, 0),
(115, 'asdf', '<p>sdfdscfd</p>', '2.jpg', '', 'ssss', '2021-02-09', '56, 34, 47, 40, 37', 0, '', '', '', 36, 0, 0, 0),
(116, 'hello', 'hello', '2.jpg', '', 'ge ', '2021-03-06', '31, 54', 0, '', '', '', 36, 2, 1, 0),
(117, 'dsds', 'ssd', '1.jpg', '', 'zdf', '2021-03-18', 'Select a Category, 31, 54, 53', 0, '', '', '', 47, 5, 1, 0),
(118, 'BRAKING NEWS', 'HELLO HELLO', 's.png', '', 'JSNI', '2021-03-25', 'Select a Category, 31, 54', 0, '', '', '', 47, 0, 0, 0),
(119, 'RDGSFG', 'WETG', 'Untitled.png', '', 'ARGG', '2021-03-25', '31', 0, '', '', '', 47, 0, 0, 0),
(120, 'B HJKJ', 'KJBOOLJ', 'Untitled.png', '', ' JB', '2021-03-25', '31, 54, 53, 44', 0, '', '', '', 47, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `cat` text NOT NULL,
  `paid` int(11) NOT NULL,
  `referral_used` text NOT NULL,
  `referral` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `password`, `address`, `mobile`, `cat`, `paid`, `referral_used`, `referral`, `state_id`, `city_id`, `district_id`) VALUES
(37, 'ALI', '', 'n', 'nivi@gmail.com', '1234', 'gfgb', 8595648575, '54,53,44,56,34', 1, '', 'u6VpbZ', 34, 1508, 8),
(41, 'test1', '', 'user', 'test1@gmail.com', 'test1', 'svsd', 8958748597, '53,56,34,47,39', 1, '', 'DGOjNP', 33, 1518, 549),
(47, 'shakir', 'ali', 'id', 'as@gmail.com', '123', 'asqw', 7977101197, '31,53,56,34,47', 1, '', '03vVfW', 18, 1583, 636),
(48, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 0, 'admin', 1, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state`) VALUES
(1, 'Andaman & Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttarakhand'),
(35, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `subcat` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `subcat`, `cat_id`) VALUES
(3, 'Bharatnatyam', 2),
(4, 'Bollywood', 1),
(5, 'Hollywood', 1),
(6, 'Tollywood', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1597;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=648;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
