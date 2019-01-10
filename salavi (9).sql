-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 12:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salavi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_bill`
--

CREATE TABLE `cat_bill` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `c_id` int(11) NOT NULL,
  `discount` float NOT NULL,
  `total` float NOT NULL,
  `advance` double NOT NULL,
  `dues` double NOT NULL,
  `pay_status` varchar(30) NOT NULL,
  `w_totaldues` double NOT NULL,
  `w_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_bill`
--

INSERT INTO `cat_bill` (`id`, `date`, `c_id`, `discount`, `total`, `advance`, `dues`, `pay_status`, `w_totaldues`, `w_total`) VALUES
(31, '2018-12-24', 8, 10, 2000, 500, 0, '', 0, 0),
(32, '2018-12-24', 6, 10, 4320, 2000, 0, 'Full Payment', 0, 0),
(33, '2018-12-24', 8, 0, 3000, 1000, 0, '', 0, 0),
(34, '2018-12-29', 13, 10, 4500, 1000, 0, 'Full Payment', 0, 0),
(35, '2018-12-29', 12, 10, 7830, 1000, 6830, 'Full Payment', 200, 3000),
(36, '2018-12-29', 11, 5, 31825, 5000, 26825, 'No Payment', 300, 3000),
(37, '2018-12-29', 10, 10, 22500, 5000, 17500, 'Full Payment', 0, 0),
(38, '2019-01-02', 18, 10, 2070, 500, 1570, 'Full Payment', 0, 0),
(39, '2019-01-02', 15, 0, 60, 0, 60, 'Full Payment', 1000, 2000),
(40, '2019-01-02', 15, 0, 100, 0, 100, 'Full Payment', 1000, 2000),
(41, '2019-01-02', 15, 0, 0, 0, 0, '', 1000, 2000),
(42, '2019-01-02', 15, 0, 0, 0, 0, '', 1000, 2000),
(43, '2019-01-02', 15, 0, 0, 0, 0, '', 1000, 2000),
(44, '2019-01-02', 15, 0, 0, 0, 0, '', 1000, 2000),
(45, '2019-01-03', 9, 0, 500, 100, 400, 'Full Payment', 0, 0),
(49, '2019-01-04', 19, 10, 1440, 1000, 0, 'Full Payment', 0, 0),
(50, '2019-01-04', 20, 10, 2475, 1000, 475, 'Dues', 0, 3000),
(52, '2019-01-05', 21, 5, 1045, 1000, 0, 'Full Payment', 1000, 4000),
(54, '2019-01-05', 22, 10, 9495, 1000, 0, 'Full Payment', 0, 2000),
(55, '2019-01-08', 25, 10, 0, 1000, -1000, 'Advance Payment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat_dishes`
--

CREATE TABLE `cat_dishes` (
  `id` int(11) NOT NULL,
  `outsource` varchar(20) NOT NULL DEFAULT 'No',
  `d_name` varchar(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_dishes`
--

INSERT INTO `cat_dishes` (`id`, `outsource`, `d_name`, `c_id`, `d_qty`, `d_price`, `total`) VALUES
(1, '', 'Surmai fry', 3, 2, 2, 4),
(2, '', 'Paneer Masala', 3, 3, 3, 9),
(3, '', 'Chicken 65', 4, 2, 30, 60),
(5, '', 'Chicken 65', 5, 2, 50, 100),
(6, '', 'Kanda bhaji', 5, 2, 40, 80),
(7, '', 'Chicken 65', 6, 2, 50, 100),
(8, '', 'Kanda bhaji', 6, 2, 40, 80),
(9, '', 'Surmai fry', 7, 1, 120, 120),
(10, '', 'Kanda bhaji', 7, 2, 120, 240),
(11, '', 'Chicken 65', 8, 2, 50, 100),
(12, '', 'Surmai fry', 8, 3, 55, 165),
(38, 'No', 'Samosa', 8, 100, 20, 2000),
(39, 'No', 'Samosa', 8, 100, 20, 2000),
(40, 'No', 'Samosa', 8, 100, 20, 2000),
(41, 'No', 'Dry Chicken', 6, 30, 50, 1500),
(42, 'No', 'Lollipop 12 Nag', 6, 30, 20, 600),
(43, 'No', 'Kachori', 6, 30, 60, 1800),
(44, 'No', 'Batata Vada', 6, 30, 30, 900),
(45, 'No', 'Veg Birdnest', 8, 5, 50, 250),
(46, 'No', 'Samosa', 13, 50, 10, 500),
(47, 'No', 'Kachori', 13, 50, 10, 500),
(48, 'No', 'Cola Punch', 13, 200, 15, 3000),
(49, 'No', 'Sarbat', 13, 100, 10, 1000),
(50, 'No', 'Kanda Bhaji', 12, 30, 10, 300),
(51, 'No', 'Bundi Raita', 12, 30, 20, 600),
(52, 'No', 'Fried Rice', 12, 50, 50, 2500),
(53, 'No', 'Plain Rice', 12, 70, 40, 2800),
(54, 'No', 'Shira', 12, 50, 10, 500),
(55, 'No', 'Katachi Aamti', 12, 50, 20, 1000),
(56, 'No', 'Daal Tadaka', 12, 50, 20, 1000),
(57, 'No', 'Chicken Biryani', 11, 5, 2000, 10000),
(58, 'No', 'Mutton Biryani', 11, 5, 3000, 15000),
(59, 'No', 'Chicken 65', 11, 5, 1000, 5000),
(60, 'No', 'Anda Masala', 11, 5, 500, 2500),
(61, 'No', 'Chapati/Fulke', 11, 200, 5, 1000),
(62, 'No', 'Paneer Shahi Kurma', 10, 20, 500, 10000),
(63, 'No', 'Kurma Puri', 10, 20, 500, 10000),
(64, 'No', 'Chapati/Fulke', 10, 100, 10, 1000),
(65, 'No', 'Katachi Aamti', 10, 100, 20, 2000),
(66, 'No', 'Jeera Rice', 10, 20, 60, 1200),
(67, 'No', 'Gajar Halwa', 10, 40, 20, 800),
(68, 'No', 'Chapati/Fulke', 18, 10, 10, 100),
(69, 'No', 'Chicken Fry', 18, 2, 100, 200),
(70, 'No', 'Chicken Dum Biryani', 18, 2, 300, 600),
(71, 'No', 'Chicken Masala', 18, 2, 200, 400),
(72, 'Yes', 'Ice cream', 18, 10, 100, 1000),
(75, 'No', 'Chicken 65', 15, 10, 10, 100),
(76, 'No', 'Aalu Corn Tikki', 9, 10, 20, 200),
(77, 'No', 'Veg Birdnest', 9, 10, 20, 200),
(78, 'No', 'Samosa', 9, 10, 10, 100),
(79, 'No', 'Veg Cutlet', 19, 80, 20, 1600),
(80, 'No', 'Batata Vada', 20, 50, 15, 750),
(81, 'No', 'Samosa', 20, 50, 10, 500),
(82, 'No', 'Mirchi Bhaji', 21, 10, 20, 200),
(83, 'No', 'Batata Vada', 21, 50, 18, 900),
(84, 'No', 'Aalu Corn Tikki', 22, 10, 20, 200),
(85, 'No', 'Veg Pattice', 22, 10, 15, 150),
(86, 'No', 'Sarbat', 22, 20, 10, 200),
(87, 'Yes', 'Chairs', 22, 20, 500, 10000),
(88, 'No', 'Veg Cutlet', 25, 0, 0, 0),
(89, 'No', '', 25, 0, 0, 0),
(90, 'No', '', 25, 0, 0, 0),
(91, 'No', '', 25, 0, 0, 0),
(92, 'Yes', '', 25, 0, 0, 0),
(93, 'Yes', '', 25, 0, 0, 0),
(94, 'Yes', '', 25, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat_orders`
--

CREATE TABLE `cat_orders` (
  `id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_orders`
--

INSERT INTO `cat_orders` (`id`, `d_name`, `c_id`) VALUES
(6, 'Batata Vada', 2),
(7, 'Kanda Bhaji', 3),
(8, 'Kanda Bhaji', 3),
(9, 'Aalu Corn Tikki', 3),
(10, 'Aalu Corn Tikki', 4),
(12, 'Dry Chicken', 6),
(13, 'Lollipop 12 Nag', 6),
(18, 'Chicken Manchurian,Chicken 65,Mutton Thali 1', 100),
(21, 'Kachori', 6),
(25, 'Samosa', 8),
(26, 'Batata Vada', 6),
(27, 'Veg Birdnest', 8),
(28, 'Aalu Corn Tikki', 9),
(29, 'Veg Birdnest', 9),
(30, 'Samosa', 9),
(31, 'Paneer Shahi Kurma', 10),
(32, 'Kurma Puri', 10),
(33, 'Chapati/Fulke', 10),
(34, 'Katachi Aamti', 10),
(35, 'Jeera Rice', 10),
(36, 'Gajar Halwa', 10),
(37, 'Chicken Biryani', 11),
(38, 'Mutton Biryani', 11),
(39, 'Chicken 65', 11),
(40, 'Anda Masala', 11),
(41, 'Chapati/Fulke', 11),
(42, 'Kanda Bhaji', 12),
(43, 'Bundi Raita', 12),
(44, 'Fried Rice', 12),
(45, 'Plain Rice', 12),
(46, 'Shira', 12),
(47, 'Katachi Aamti', 12),
(48, 'Daal Tadaka', 12),
(49, 'Samosa', 13),
(50, 'Kachori', 13),
(51, 'Cola Punch', 13),
(52, 'Sarbat', 13),
(53, 'Paneer Shahi Kurma', 14),
(54, 'Paneer Tikka Masala', 14),
(55, 'Paneer Bhurji', 14),
(56, 'Panner Butter Masala', 14),
(57, 'Veg Makhanwala', 14),
(58, 'Mutter Paneer', 14),
(59, 'Palak Paneer', 14),
(60, 'Batata Vada', 14),
(61, 'Aalu Corn Tikki', 14),
(62, 'Samosa', 14),
(63, 'Kanda Bhaji', 14),
(64, 'Palak Bhaji', 14),
(65, 'Sweet Corn Bhaji', 14),
(66, 'Hara-Bhara Kabab', 14),
(67, 'Mix Veg', 14),
(68, 'Bhendi Fry', 14),
(69, 'Rabadi', 14),
(70, 'Mix Salad', 14),
(71, 'Mango Shevaya', 14),
(72, 'Gajar Halwa', 14),
(73, 'Moogachi Khichadi', 14),
(74, 'Chapati/Fulke', 14),
(75, 'Palak Puri', 14),
(76, 'Rumali Roti/Bhakri', 14),
(77, 'Daal Makhani', 14),
(78, 'Chicken 65', 15),
(79, 'Chicken Biryani', 15),
(82, 'Samosa', 16),
(83, 'Kachori', 16),
(84, 'Dry Chicken', 16),
(85, 'Aalu Corn Tikki', 16),
(86, 'Batata Vada', 16),
(87, 'Chicken Thali', 16),
(88, 'Batata Vada', 16),
(89, 'Chicken Thali', 16),
(90, 'Batata Vada', 16),
(91, 'Chicken Thali', 16),
(92, 'Batata Vada', 16),
(93, 'Chicken Thali', 16),
(94, 'Batata Vada', 16),
(95, 'Chicken Thali', 16),
(96, 'Batata Vada', 16),
(97, 'Chicken Thali', 16),
(98, 'Batata Vada', 16),
(99, 'Chicken Thali', 16),
(100, 'Batata Vada', 16),
(101, 'Chicken Thali', 16),
(102, 'Batata Vada', 16),
(103, 'Chicken Thali', 16),
(104, 'Batata Vada', 16),
(105, 'Chicken Thali', 16),
(106, 'Batata Vada', 16),
(107, 'Chicken Thali', 16),
(108, 'Tomato Soup', 16),
(109, 'Chicken Thali', 16),
(110, 'Mutter Karanji', 16),
(111, 'Shrikhand Thali', 16),
(112, 'Mutter Karanji', 16),
(113, 'Shrikhand Thali', 16),
(114, 'Mutter Karanji', 16),
(115, 'Shrikhand Thali', 16),
(117, 'Mutton Kurma', 17),
(118, 'Chapati/Fulke', 18),
(119, 'Chicken Fry', 18),
(120, 'Chicken Dum Biryani', 18),
(121, 'Chicken Masala', 18),
(122, 'Veg Cutlet', 19),
(124, 'Samosa', 20),
(125, 'Batata Vada', 20),
(126, 'Veg Cutlet', 21),
(127, 'Mirchi Bhaji', 21),
(142, 'Batata Vada', 21),
(143, 'Aalu Corn Tikki', 22),
(144, 'Veg Pattice', 22),
(146, 'Cola Punch', 22),
(147, 'Veg Cutlet', 25),
(148, 'Mutter Karanji', 25),
(149, 'Gajar Halwa', 23);

-- --------------------------------------------------------

--
-- Table structure for table `dish_list`
--

CREATE TABLE `dish_list` (
  `d_id` int(11) NOT NULL,
  `dish_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish_list`
--

INSERT INTO `dish_list` (`d_id`, `dish_name`) VALUES
(12, 'Batata Vada'),
(13, 'Aalu Corn Tikki'),
(14, 'Veg Birdnest'),
(15, 'Samosa'),
(16, 'Kachori'),
(17, 'Batata Bhaji'),
(18, 'Kanda Bhaji'),
(19, 'Mini Vada'),
(20, 'Palak Bhaji'),
(21, 'Sweet Corn Bhaji'),
(22, 'Mirchi Bhaji'),
(23, 'Mix Pakoda'),
(24, 'Veg Pattice'),
(25, 'Hara-Bhara Kabab'),
(26, 'Sweet Corn Cutlet'),
(27, 'Gobi Manchurian'),
(28, 'Veg Cutlet'),
(29, 'Mutter Karanji'),
(30, 'Batate Fingerchips'),
(31, 'Tomato Soup'),
(32, 'Veg manchaw Soup'),
(33, 'Sweet Corn Soup'),
(34, 'Upma/Shira'),
(35, 'Idli-Sambhar-Chatani'),
(36, 'Medu-Vada-Sambhar'),
(37, 'Batate Pohe/Kande Pohe'),
(38, 'Paav-Bhaji'),
(39, 'Misal'),
(40, 'Veg/Cheese Sandwich'),
(41, 'Dahi Vada'),
(42, 'Kurma Puri'),
(43, 'Shabu-Khichadi'),
(44, 'Dum Aalu'),
(45, 'Veg Kheema'),
(46, 'Veg Makhanwala'),
(47, 'Paneer Shahi Kurma'),
(48, 'Methi Malai mutter'),
(49, 'Veg Jaipuri'),
(50, 'Veg Kolhapuri'),
(51, 'Mutter Korma'),
(52, 'Mutter Paneer'),
(53, 'Paneer Tikka Masala'),
(54, 'Paneer Bhurji'),
(55, 'Palak Paneer'),
(56, 'Baingan Masala'),
(57, 'Bharla Dodaka'),
(58, 'Akkha Masoor'),
(59, 'Pivala Batata'),
(60, 'Mutter Flower'),
(61, 'Methi Besan'),
(62, 'Aalu Gobi'),
(63, 'Tawa Fry'),
(64, 'Bhendi Masala'),
(65, 'Dhabu Batata Dry'),
(66, 'Mix Veg'),
(67, 'Bhendi Fry'),
(68, 'Matki Usal'),
(69, 'Moogachi Usal'),
(70, 'Akkha Masoor Batata'),
(71, 'Mutter Pivala Batata'),
(72, 'Baingan Bharta'),
(73, 'Stuff Simla'),
(74, 'Kurma'),
(75, 'Koshimbir'),
(76, 'Kakadichi Koshimbir'),
(77, 'Tomato Koshimbir'),
(78, 'Beet Koshimbir'),
(79, 'Gajar Koshimbir'),
(80, 'Flower Koshimbir'),
(81, 'Kobi Koshimbir'),
(82, 'Bundi Raita'),
(83, 'Salad'),
(84, 'Mix Fruit Raita'),
(85, 'Green Salad'),
(86, 'Mix Salad'),
(87, 'Dahi Kanda'),
(88, 'Rabadi'),
(89, 'Shitafal Basundi'),
(90, 'Anjeer Basundi'),
(91, 'Mango Basundi'),
(92, 'Basundi'),
(93, 'Fruit Basundi'),
(94, 'Rasmalai'),
(95, 'Mango Rasmalai'),
(96, 'Shrikhand'),
(97, 'Amrakhand'),
(98, 'Fruit Khand'),
(99, 'Gulab Jaam'),
(100, 'Jilebi'),
(101, 'Pineapple Shira'),
(102, 'Mix Fruit Shira'),
(103, 'Mango Shira'),
(104, 'Shira'),
(105, 'Gajar Halwa'),
(106, 'Dudhi Halwa'),
(107, 'Dry Fruit Shevaya'),
(108, 'Shevaya'),
(109, 'Mango Shevaya'),
(110, 'Tandalache Modak'),
(111, 'Ukadlele Modak'),
(112, 'Talalele Modak'),
(113, 'Plain Rice'),
(114, 'Jeera Rice'),
(115, 'Kaju Mutter Pulao'),
(116, 'Veg Pulao'),
(117, 'Masale Bhaat'),
(118, 'Kala Bhaat'),
(119, 'Veg Biryani'),
(120, 'Fried Rice'),
(121, 'Moogachi Khichadi'),
(122, 'Dahi Butti'),
(123, 'Tomato Rice'),
(124, 'Daal Tadaka'),
(125, 'Daal Fry'),
(126, 'Shevga Aamti'),
(127, 'Matki Rassa'),
(128, 'Masoor  Rassa'),
(129, 'Katachi Aamti'),
(130, 'Tomato Saar'),
(131, 'Golyacha Sambhar'),
(132, 'Kadhi'),
(133, 'Sambhar'),
(134, 'Daal Makhani'),
(135, 'Puri'),
(136, 'Palak Puri'),
(137, 'Chapati/Fulke'),
(138, 'Rumali Roti/Bhakri'),
(139, 'Shengdana Chutni'),
(140, 'Khobryachi  Chutni'),
(141, 'Kortyachi  Chutni'),
(142, 'Tomato  Chutni'),
(143, 'Pudina  Chutni'),
(144, 'Lasoon khobare  Chutni'),
(145, 'Kharda'),
(146, 'Alu Vadi'),
(147, 'Suralichya Vadya'),
(148, 'Thapat Vadi'),
(149, 'Kothimbir Vadi'),
(150, 'Kaju Paneer'),
(151, 'Veg Kadhai'),
(152, 'Panner Butter Masala'),
(153, 'Paneer Makhanwala Masala'),
(154, 'Paneer Shahi'),
(155, 'Navratna Kurma '),
(156, 'Kaju Kurma'),
(157, 'Kaju Green Palak Masala'),
(158, 'Veg Hariyali'),
(159, 'Veg Bhuna '),
(160, 'Chole Masala'),
(161, 'Kaju Mutter Masala'),
(162, 'Mutton Lonche'),
(163, 'Dry Chicken'),
(164, 'Lollipop 12 Nag'),
(165, 'Chicken Manchurian'),
(166, 'Chicken 65'),
(167, 'Boneless 65'),
(168, 'Kolambi Bhaji'),
(169, 'Anda Bhaji'),
(170, 'Egg Cutlet'),
(171, 'Kheema Patties'),
(172, 'Kolambi Rolls'),
(173, 'Kheema Cutlet'),
(174, 'Kheema Samosa'),
(175, 'Mutton Biryani'),
(176, 'Chicken Biryani'),
(177, 'Anda Biryani'),
(178, 'Kheema Goli Pulao'),
(179, 'Mutton Dum Biryani'),
(180, 'Chicken Dum Biryani'),
(181, 'Chicken Fry'),
(182, 'Chicken Curry'),
(183, 'Chicken Masala'),
(184, 'Green Chicken'),
(185, 'Butter Chicken'),
(186, 'Gavraan Chicken'),
(187, 'Anda Curry'),
(188, 'Anda Masala'),
(189, 'Anda Bhurji'),
(190, 'Anda Omelette'),
(191, 'Boiled Eggs 12 Nag'),
(192, 'Orange '),
(193, 'Cola Punch '),
(194, 'Sarbat '),
(195, 'Chai/Coffee'),
(196, 'Dudh/Masala Dudh'),
(197, 'Vada Kombda Plate'),
(198, 'Mutton Kala'),
(199, 'Malvani Mutton'),
(200, 'Mutton Fry'),
(201, 'Mutton Masala'),
(202, 'Mutton Chops'),
(203, 'Mutton Kheema'),
(204, 'Mutton Kurma'),
(205, 'Mundi Rassa'),
(206, 'Mundi Rakti'),
(207, 'Kheema Masala'),
(208, 'Sadhi Thali 1'),
(209, 'Sadhi Thali 2'),
(210, 'Sadhi Thali 3'),
(211, 'Special Veg Thali'),
(212, 'Puran Poli Thali'),
(213, 'Shira Thali'),
(214, 'Jilebi Thali'),
(215, 'Shrikhand Thali'),
(216, 'Gulabjam Thali'),
(217, 'Basundi Thali'),
(218, 'Mutton Thali 1'),
(219, 'Mutton Thali 2'),
(220, 'Mutton Thali 3'),
(221, 'Chicken Thali');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `c_id` int(11) NOT NULL,
  `o_dt` date NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_add` text NOT NULL,
  `cust_phone` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`c_id`, `o_dt`, `event_name`, `date`, `cust_name`, `cust_add`, `cust_phone`, `qty`) VALUES
(6, '2018-12-20', 'House Warming', '2019-01-31', 'Ranjeet', 'Sangli', '9874632112', 30),
(9, '2018-12-26', 'Naming Ceremony', '2018-12-26', 'Nishu', 'Rajarampuri', '9876543210', 200),
(10, '2018-12-29', 'Baby shower', '2018-12-25', 'Rahul Patil', 'Sangli', '9876543210', 100),
(11, '2018-12-29', 'Wedding', '2018-12-30', 'Arshiya Salati', 'Ruikar Colony Kolhapur', '9876543211', 400),
(12, '2018-12-29', 'Naming Ceremony', '2018-12-03', 'Pandurang kadam', 'Rajarampuri', '7778798081', 100),
(13, '2018-12-29', 'Corporate Event', '2018-11-29', 'Ravindra Aawadan', 'Kamala College', '9596979899', 200),
(14, '2018-12-29', 'Wedding', '2018-12-30', 'Satyajeet Patil', 'Rajarampuri', '8390856698', 500),
(15, '2018-12-29', 'Party', '2018-12-31', 'Pruthviraj Mane', 'Shivaji Peth', '9579771517', 50),
(20, '2019-01-04', 'Car ', '2019-01-18', 'Rohit Powar', 'kolhapur', '9890305454', 50),
(21, '2019-01-04', 'Wecome Party', '2019-01-05', 'Rohit Powar', 'Rajarampuri', '9876543210', 50),
(22, '2019-01-05', 'Corporate Event', '2019-01-05', 'Ravindra Aawadan', 'Rajarampuri', '9876543210', 50),
(23, '2019-01-05', 'Sankrant', '2019-01-14', 'Ranjeet Patil', 'Rajarampuri', '8390856981', 50);

-- --------------------------------------------------------

--
-- Table structure for table `event_worker`
--

CREATE TABLE `event_worker` (
  `id` int(11) NOT NULL,
  `w_name` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  `event` varchar(250) NOT NULL,
  `wqty` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `w_dues` float NOT NULL,
  `w_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_worker`
--

INSERT INTO `event_worker` (`id`, `w_name`, `c_id`, `event`, `wqty`, `male`, `female`, `w_dues`, `w_amount`) VALUES
(1, 'Rohit Powar', 20, 'Car', 10, 5, 5, 100, 1000),
(2, 'Nishu Sharma', 20, 'Car', 10, 5, 5, 100, 1000),
(3, 'Ranjeet Patil', 20, 'Car', 10, 5, 5, 200, 1000),
(5, 'Mahesh Mulik', 22, 'Corporate Event', 20, 10, 10, 1000, 2000),
(16, 'Arshiya Salati', 21, 'Wecome Party', 10, 2, 8, 100, 1000),
(19, 'Arshiya Salati', 15, 'Party', 10, 2, 8, 500, 1000),
(20, 'Sajida Mujawar', 12, 'Naming Ceremony', 10, 3, 7, 200, 3000),
(21, 'Nishu Sharma', 11, 'Wedding', 20, 10, 10, 200, 1000),
(22, 'Ranjeet Patil', 11, 'Wedding', 10, 5, 5, 100, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `t_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` float NOT NULL,
  `paid` float NOT NULL,
  `total` float NOT NULL,
  `up_dt` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`t_id`, `date`, `subtotal`, `paid`, `total`, `up_dt`, `status`) VALUES
(3, '2019-01-01', 600, 400, 0, '0000-00-00', 'Full Payment'),
(4, '2019-01-02', 210, 100, 110, '0000-00-00', 'Dues'),
(11, '2019-01-01', 50, 0, 0, '0000-00-00', 'Dues'),
(19, '2019-01-01', 2000, 1000, 1000, '0000-00-00', 'Dues'),
(21, '2019-01-04', 500, 300, 200, '0000-00-00', 'Dues'),
(24, '2019-01-05', 160, 160, 0, '0000-00-00', 'Full Payment'),
(26, '2019-01-05', 200, 150, 0, '2019-01-10', 'Full Payment'),
(44, '2019-01-08', 500, 400, 0, '2019-01-10', 'Full Payment'),
(45, '2019-01-09', 500, 500, 0, '0000-00-00', 'Full Payment'),
(47, '2019-01-10', 650, 500, 150, '0000-00-00', 'Dues');

-- --------------------------------------------------------

--
-- Table structure for table `h_worker_info`
--

CREATE TABLE `h_worker_info` (
  `w_hid` int(11) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_add` text NOT NULL,
  `w_mob` varchar(10) NOT NULL,
  `w_gen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_worker_info`
--

INSERT INTO `h_worker_info` (`w_hid`, `w_name`, `w_add`, `w_mob`, `w_gen`) VALUES
(1, 'Arshiya Salati', 'Kop', '9874563210', 'Female'),
(2, 'Sajida Mujawar', 'shiroli', '9890658368', 'Female'),
(3, 'Ranjeet Patil', 'Rajarampuri', '8390856981', 'male'),
(4, 'Nishu Sharma', 'Rajarampuri', '8390856981', 'male'),
(6, 'Rohit Powar', 'dsad, dsadsa', '9890305454', 'Male'),
(9, 'Mahesh Mulik', 'Shahupuri', '8390856981', 'Male'),
(10, 'Sandesh Pawar', 'Rajarampuri', '9876543210', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_cater`
--

CREATE TABLE `inventory_stock_cater` (
  `i_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_stock_cater`
--

INSERT INTO `inventory_stock_cater` (`i_id`, `t_id`, `date`, `item`, `qty`, `unit`, `price`) VALUES
(3, 0, '2018-11-28', 'तांदूळ', 3, '', 0),
(4, 0, '2018-11-28', 'तेल', 2, '', 0),
(7, 0, '2018-11-29', 'तांदूळ', 2, '', 123),
(8, 0, '2018-11-29', 'गहू पीठ', 130, '', 200),
(13, 0, '2018-11-29', 'काजू', 10, '', 500),
(14, 0, '2018-12-06', 'मटन', 1, 'kg', 400),
(19, 17, '2019-01-04', 'कॉर्न फ्लॉवर', 1, 'kg', 50),
(20, 18, '2019-01-04', 'मोठे मीठ', 2, 'kg', 20),
(21, 20, '2019-01-01', 'रवा', 10, 'kg', 400),
(22, 22, '2019-01-04', 'उडीद डाळ', 2, 'kg', 200),
(23, 23, '2019-01-05', 'तुर डाळ', 5, 'kg', 300),
(24, 25, '2019-01-05', 'टॉमॅटो', 1, 'kg', 40),
(25, 46, '2019-01-09', 'कच्चे शेंगदाणे', 2, 'kg', 160),
(26, 48, '2019-01-10', 'मटण', 5, 'kg', 1000),
(27, 48, '2019-01-10', 'चिकन', 3, 'kg', 600),
(28, 48, '2019-01-10', 'अंडी', 12, 'nag', 72);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_hotel`
--

CREATE TABLE `inventory_stock_hotel` (
  `i_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_stock_hotel`
--

INSERT INTO `inventory_stock_hotel` (`i_id`, `t_id`, `item`, `qty`, `unit`, `price`) VALUES
(56, 45, 'तांदूळ', 10, 'kg', 500),
(57, 47, 'बटाटा', 10, 'kg', 300),
(58, 47, 'कांदा', 10, 'kg', 150),
(59, 47, 'गाजर', 5, 'kg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `id` int(11) NOT NULL,
  `items` varchar(50) CHARACTER SET utf8 NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `items`, `category`) VALUES
(1, ' मटण ', 'non-veg'),
(2, 'चिकन', 'non-veg'),
(3, 'अंडी', 'non-veg'),
(4, 'तांदूळ', 'kirana'),
(5, 'तेल', 'kirana'),
(6, 'डालडा', 'kirana'),
(7, 'तूप', 'kirana'),
(8, 'काजू', 'kirana'),
(9, 'बदाम ', 'kirana'),
(10, 'गहू पीठ', 'kirana'),
(11, 'रवा', 'kirana'),
(12, 'चेरी ', 'kirana'),
(13, 'चारोळे ', 'kirana'),
(14, 'पिस्ता', 'kirana'),
(15, 'काजू कणी', 'kirana'),
(16, 'मगज बी', 'kirana'),
(17, 'टॉमॅटो सौस', 'kirana'),
(18, 'कॉर्न फ्लॉवर', 'kirana'),
(19, 'रेड चिली सौस', 'kirana'),
(20, 'कस्टर्ड', 'kirana'),
(21, 'ग्रीन चिली सौस', 'kirana'),
(22, 'बेकिंग पावडर', 'kirana'),
(23, 'सोया सौस', 'kirana'),
(33, 'जेली', 'kirana'),
(34, 'अजिनो मोटो', 'kirana'),
(35, '\r\nव्हिनेगर', 'kirana'),
(36, 'मैदा', 'kirana'),
(37, '\r\nबारीक मीठ', 'kirana'),
(38, '\r\nमोठे मीठ', 'kirana'),
(39, 'खजूर', 'kirana'),
(40, '\r\nचिंच', 'kirana'),
(41, 'गूळ ', 'kirana'),
(42, 'लवंग', 'kirana'),
(43, 'दालचिनी', 'kirana'),
(44, '\r\nमसाला वेलदोडे', 'kirana'),
(45, 'काळीमिरी', 'kirana'),
(46, '\r\nशहा जिरे', 'kirana'),
(47, '\r\nबदाम फूल', 'kirana'),
(48, 'हिरवे वेलदोडे', 'kirana'),
(49, '\r\nजायफळ', 'kirana'),
(50, '\r\nतमाल पत्री', 'kirana'),
(51, '\r\nजाय पत्री', 'kirana'),
(65, 'राम पत्री', 'kirana'),
(66, 'तीळ', 'kirana'),
(67, 'सुखे खोबरे', 'kirana'),
(68, '\r\nमिरची पूड', 'kirana'),
(69, 'जिरे पूड', 'kirana'),
(70, 'धना पूड', 'kirana'),
(71, 'जिरे ', 'kirana'),
(72, 'खसखस', 'kirana'),
(73, '\r\nमोहरी', 'kirana'),
(74, 'हिंग पूड', 'kirana'),
(75, 'खायचा सोडा', 'kirana'),
(76, 'ओवा', 'kirana'),
(77, 'अखंड धणे', 'kirana'),
(78, 'सुखी मेथी', 'kirana'),
(79, 'कसुरी मेथी', 'kirana'),
(80, 'गरम मसाला', 'kirana'),
(81, 'मसाला चटणी', 'kirana'),
(82, 'गोडा मसाला', 'kirana'),
(83, 'चाट मसाला', 'kirana'),
(84, 'कला मसाला', 'kirana'),
(85, '\r\nकिचन किंग मसाला', 'kirana'),
(86, 'एव्हरेस्ट मटण मसाला', 'kirana'),
(87, 'एव्हरेस्ट चिकण मसाला', 'kirana'),
(88, 'एव्हरेस्ट बिर्याणी मसाला', 'kirana'),
(89, '\r\nओला मसाला', 'kirana'),
(90, 'सब्जी मसाला', 'kirana'),
(91, '\r\nछोले मसाला', 'kirana'),
(92, '\r\nसांबर मसाला', 'kirana'),
(93, 'पांढरे तीळ', 'kirana'),
(94, '\r\nडाळीचे पीठ', 'kirana'),
(95, '\r\nलोणचे', 'kirana'),
(96, 'कच्चे शेंगदाणे', 'kirana'),
(97, '\r\nभाजके शेंगदाणे', 'kirana'),
(98, '\r\nफुटाणे डाळ', 'kirana'),
(99, '\r\nकांदा पोहे', 'kirana'),
(100, 'दूध पॉवडर', 'kirana'),
(101, 'केसरी कलर', 'kirana'),
(102, 'ऑरेंज कलर', 'kirana'),
(103, 'रेड चायनीज', 'kirana'),
(104, 'पिवळा कलर', 'kirana'),
(105, 'अक्खी लाल मिरची', 'kirana'),
(106, 'लिज्जत पापड', 'kirana'),
(107, 'डिस्को पापड', 'kirana'),
(108, 'पनीर ', 'bakery'),
(109, 'नारळ', 'kirana'),
(110, 'उडीद डाळ', 'kirana'),
(111, 'मुग डाळ', 'kirana'),
(112, 'तुर डाळ', 'kirana'),
(113, 'हरबरा डाळ', 'kirana'),
(114, 'क्रीम', 'bakery'),
(115, 'ब्रेड क्रम्ब्स', 'kirana'),
(116, '\r\nमनुके', 'kirana'),
(117, 'काडीपत्ता', 'bhaji'),
(118, 'कांदा', 'bhaji'),
(119, 'बटाटा', 'bhaji'),
(120, 'टॉमॅटो', 'bhaji'),
(121, 'लिंबू', 'bhaji'),
(122, 'आले', 'bhaji'),
(123, 'लसूण', 'bhaji'),
(124, 'कोथिंबीर', 'bhaji'),
(125, 'पुदिना', 'bhaji'),
(126, 'काकडी', 'bhaji'),
(127, 'कोबी', 'bhaji'),
(128, 'मटकी', 'bhaji'),
(129, 'छोले', 'bhaji'),
(130, 'बीट', 'bhaji'),
(131, 'मुळा', 'bhaji'),
(132, 'गाजर', 'bhaji'),
(133, 'फ्लॉवर', 'bhaji'),
(134, 'श्रावणघेवडा', 'bhaji'),
(135, 'ढबूमिरची', 'bhaji'),
(136, 'वांगी', 'bhaji'),
(137, 'दुधीभोपळा', 'bhaji'),
(138, 'दोडका', 'bhaji'),
(139, 'शेवगाशेंगा ', 'bhaji'),
(140, 'मेथी', 'bhaji'),
(141, 'पालक', 'bhaji'),
(142, 'चिकु', 'fruits'),
(143, 'सफ़रचंद', 'fruits'),
(144, 'द्राक्षे', 'fruits'),
(145, 'मॅपको वाटाणा', 'bakery'),
(146, '\r\nहिरवी मिरची', 'bhaji'),
(147, 'कच्चा आंबा', 'bhaji'),
(148, 'दूध', 'bakery'),
(149, 'चहा पूड', 'kirana'),
(150, 'साखर', 'kirana'),
(151, 'दही', 'bakery'),
(152, 'आम्रखंड ', 'bakery'),
(153, 'श्रीखंड', 'bakery'),
(154, 'चक्का', 'bakery'),
(155, 'बासुंदी', 'bakery'),
(156, 'अंगुर', 'fruits'),
(157, 'लोणी', 'bakery'),
(158, 'खवा', 'bakery'),
(159, '\r\nअमुल बटर', 'bakery'),
(160, 'सिलेंडर', 'other'),
(161, 'युज न थ्रो चमचे', 'other'),
(162, 'जुनी फडकी', 'other'),
(163, 'मिक्सर', 'other'),
(164, 'बर्फ', 'other'),
(165, 'निरमा', 'other'),
(166, 'रद्दी पेपर', 'other'),
(167, 'पेपर नॅपकिन', 'other'),
(168, 'माचीस/काडी पेटी', 'other'),
(171, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(17, 'arshu', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_bill`
--
ALTER TABLE `cat_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_dishes`
--
ALTER TABLE `cat_dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_orders`
--
ALTER TABLE `cat_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_list`
--
ALTER TABLE `dish_list`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `event_worker`
--
ALTER TABLE `event_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `h_worker_info`
--
ALTER TABLE `h_worker_info`
  ADD PRIMARY KEY (`w_hid`);

--
-- Indexes for table `inventory_stock_cater`
--
ALTER TABLE `inventory_stock_cater`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `inventory_stock_hotel`
--
ALTER TABLE `inventory_stock_hotel`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_bill`
--
ALTER TABLE `cat_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `cat_dishes`
--
ALTER TABLE `cat_dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `cat_orders`
--
ALTER TABLE `cat_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `dish_list`
--
ALTER TABLE `dish_list`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event_worker`
--
ALTER TABLE `event_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `h_worker_info`
--
ALTER TABLE `h_worker_info`
  MODIFY `w_hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventory_stock_cater`
--
ALTER TABLE `inventory_stock_cater`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inventory_stock_hotel`
--
ALTER TABLE `inventory_stock_hotel`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
