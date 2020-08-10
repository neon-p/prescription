-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 08:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`, `admin_email`) VALUES
(1, 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(10) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_email` varchar(50) NOT NULL,
  `doctor_password` varchar(50) NOT NULL,
  `doctor_regno` varchar(50) NOT NULL,
  `doctor_specialized` varchar(50) NOT NULL,
  `doctor_degree` varchar(50) NOT NULL,
  `doctor_chamber` varchar(50) NOT NULL,
  `doctor_start_time` varchar(50) NOT NULL,
  `doctor_finish_time` varchar(50) NOT NULL,
  `doctor_start_day` varchar(50) NOT NULL,
  `doctor_finish_day` varchar(50) NOT NULL,
  `doctor_image` varchar(50) NOT NULL,
  `doctor_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_password`, `doctor_regno`, `doctor_specialized`, `doctor_degree`, `doctor_chamber`, `doctor_start_time`, `doctor_finish_time`, `doctor_start_day`, `doctor_finish_day`, `doctor_image`, `doctor_status`) VALUES
(12, 'Dr. Nusrat Zahan', 'nusrat@gmail.com', '12345', '001', 'OBS-GYNAE', 'MBBS', 'Mount Adhora', '16:00', '19:00', 'Saturday', 'Saturday', 'dr-dr-nusrat-zahan-349692-5acc.jpg', 'approved'),
(13, 'Dr. Zahidul Hasan', 'hasan@gmail.com', '12345', '002', 'medicine', 'MBBS,MSC,DFM', 'Mount Adhora', '17:00', '20:00', 'Monday', 'Tuesday', 'dr-dr-zahidul-hasan-491614-5c7e78ac.jpg', 'approved'),
(14, 'Dr. Muhammad Shoyab', 'dr@gmail.com', '123455', '003', 'Radiology', 'FCPS,MBBS', 'Mount Adhora', '19:00', '21:00', 'Saturday', 'Saturday', 'dr-muhammad-shoyab-393617-5b49da78a64d4.jpg', 'approved'),
(15, 'Dr. Syed Abdul Kader', 'kader@gmail.com', '12345', '004', 'Orthopedics', 'MBBS', 'Mount Adhora', '10:00', '12:00', 'Saturday', 'Saturday', 'dr-syed-abdul-kader-569437-5d4d4e90315.jpg', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `genoric_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_type`, `weight`, `genoric_name`) VALUES
(13, 'Baclobac ', 'Tablet', '10 mg ', 'Baclofen'),
(14, 'Baclobac ', 'Tablet', '5 mg', 'Baclofen'),
(15, 'Baclof ', 'Tablet', '10 mg ', 'Baclofen'),
(16, 'Baclof ', 'Tablet', '10 mg ', 'Baclofen'),
(17, 'Baclofen ', 'Tablet', '5 mg', 'Baclofen'),
(18, 'Bacloflex ', 'Tablet', '10 mg ', 'Baclofen'),
(19, 'Baclomark ', 'Tablet', '10 mg ', 'Baclofen'),
(20, 'Baclomax ', 'Tablet', '10 mg ', 'Baclofen'),
(21, 'Baclon', 'syrup', '1 mg', 'Baclofen'),
(22, 'Baclon', 'Tablet', '10 mg ', 'Baclofen'),
(23, 'Baclon', 'Tablet', '10 mg ', 'Baclofen'),
(24, 'Baclovan ', 'Tablet', '10 mg ', 'Baclofen'),
(25, 'Baclovan ', 'Tablet', '10 mg ', 'Baclofen'),
(26, 'Bacmax ', 'Tablet', '10 mg ', 'Baclofen'),
(27, 'Bacmax ', 'Tablet', '5 mg', 'Baclofen'),
(28, 'Bacmax ', 'Tablet', '10 mg ', 'Baclofen'),
(29, 'Beklo ', 'Tablet', '5 mg', 'Baclofen'),
(30, 'Beklo ', 'syrup', '1 mg ', 'Baclofen'),
(31, 'Beklo ', 'Tablet', '10 mg ', 'Baclofen'),
(32, 'Beklo ', 'Tablet', '25 mg', 'Baclofen'),
(33, 'Flexibac', 'syrup', '1 mg', 'Baclofen'),
(34, 'Flexibac', 'Tablet', '5 mg', 'Baclofen'),
(35, 'Flexibac', 'Tablet', '10 mg ', 'Baclofen'),
(36, 'Flexibac', 'Tablet', '25 mg', 'Baclofen'),
(37, 'Fenobac ', 'Tablet', '10 mg ', 'Baclofen'),
(38, 'Liofen ', 'Tablet', '10 mg ', 'Baclofen'),
(39, 'Liofen ', 'Tablet', '5 mg', 'Baclofen'),
(40, 'Liorel ', 'Tablet', '5 mg ', 'Baclofen'),
(41, 'Liorel ', 'Tablet', '10 mg ', 'Baclofen'),
(42, 'Liorel ', 'Tablet', '25 mg ', 'Baclofen'),
(43, 'Lioresal ', 'Tablet', '10 mg ', 'Baclofen'),
(44, 'Lioresal ', 'Tablet', '25 mg ', 'Baclofen'),
(45, 'Liosal ', 'Tablet', '10 mg ', 'Baclofen'),
(46, 'Liosal ', 'Tablet', '25 mg ', 'Baclofen'),
(47, 'Lospan ', 'Tablet', '10 mg ', 'Baclofen'),
(48, 'Lospan ', 'Tablet', '25 mg ', 'Baclofen'),
(49, 'Muslofen ', 'Tablet', '25 mg ', 'Baclofen'),
(50, 'Anfenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(51, 'Anodyne', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(52, 'Apain ', 'Eye Drop ', '1%', 'Diclofenac Sodium'),
(53, 'C Fenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(54, 'Clofenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(55, 'Diclofen ', 'Eye Drop ', '1%', 'Diclofenac Sodium'),
(56, 'Diclofenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(57, 'Diclon ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(58, 'Dinac ', 'Eye Drop ', '1%', 'Diclofenac Sodium'),
(59, 'Erdon ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(60, 'Ficlon ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(61, 'Genac ', 'Eye Drop ', '1%', 'Diclofenac Sodium'),
(62, 'Intafenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(63, 'Locopain ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(64, 'Mobifen ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(65, 'Naclof ', 'Eye Drop ', '1%', 'Diclofenac Sodium'),
(66, 'Nopain ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(67, 'Profenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(68, 'Reutren ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium'),
(69, 'Cabita ', 'Tablet', '500 mg ', 'Capecitabine'),
(70, 'Captabine ', 'Tablet', '150 mg ', 'Capecitabine'),
(71, 'Captabine ', 'Tablet', '500 mg ', 'Capecitabine'),
(72, 'Tysinor ', 'Tablet', '150 mg ', 'Capecitabine'),
(73, 'Tysinor ', 'Tablet', '500 mg ', 'Capecitabine'),
(74, 'Xelobine ', 'Tablet', '500 mg ', 'Capecitabine'),
(75, 'Xeloda ', 'Tablet', '500 mg ', 'Capecitabine'),
(76, 'Xitabin ', 'Tablet', '150 mg ', 'Capecitabine'),
(77, 'Xitabin ', 'Tablet', '500 mg ', 'Capecitabine'),
(78, 'Argolin ', 'Tablet', '0.5 mg ', 'Cabergoline'),
(79, 'Cabergol ', 'Tablet', '0.5 mg ', 'Cabergoline'),
(80, 'Cabolac ', 'Tablet', '0.5 mg ', 'Cabergoline'),
(81, 'Cabolin ', 'Tablet', '0.5 mg ', 'Cabergoline'),
(82, '3-C ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(83, '3-C ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(84, '3-C ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(85, '3-Geocef ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(86, '3-Geocef ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(87, '3RD Cef ', 'Tablet ', '200 mg ', 'Cefixime Trihydrate '),
(88, '3RD Cef ', 'Tablet ', '400 mg ', 'Cefixime Trihydrate '),
(89, '3RD Cef ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(90, 'Adexim ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(91, 'Adexim ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(92, 'Afix ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(93, 'Afix ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(94, 'Afix ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(95, 'Afix DS ', 'Powder for Suspension ', '200 mg/5 ml ', 'Cefixime Trihydrate '),
(96, 'Afixime ', 'Pediatric Drops ', '25 mg/ml ', 'Cefixime Trihydrate '),
(97, 'Afixime ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(98, 'Afixime ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(99, 'Afixime ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(100, 'Alfixim ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(101, 'Alfixim ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(102, 'Alfixim ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(103, 'Amucef ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(104, 'Amucef ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(105, 'Amucef ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(106, 'Antima ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(107, 'Antima ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(108, 'Antima ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(109, 'AX-3 ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(110, 'AX-3 ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(111, 'Bactazim ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(112, 'Bactazim ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(113, 'Bestcef ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(114, 'Bestcef ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(115, 'Bestcef ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(116, 'Bestcef Forte ', 'Powder for Suspension ', '200 mg/ml ', 'Cefixime Trihydrate '),
(117, 'Bioxim ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(118, 'Bioxim ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(119, 'Bioxim ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(120, 'Bioxim DS ', 'Powder for Suspension ', '200 mg/5 ml ', 'Cefixime Trihydrate '),
(121, 'C-3 ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(122, 'C-3 ', 'Tablet ', '200 mg ', 'Cefixime Trihydrate '),
(123, 'C-3 ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(124, 'Cebex ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(125, 'Cebex ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(126, 'Cebex ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(127, 'Cef-3 ', 'Tablet ', '200 mg ', 'Cefixime Trihydrate '),
(128, 'Cef-3 ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(129, 'Cef-3 ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(130, 'Cef-3 DS ', 'Pediatric Drops ', '25 mg/ml ', 'Cefixime Trihydrate '),
(131, 'Cef-3 DS ', 'Tablet ', '400 mg ', 'Cefixime Trihydrate '),
(132, 'Cef-3 Forte ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(133, 'Cef-Plus ', 'Powder for Suspension ', '200 mg/5 ml ', 'Cefixime Trihydrate '),
(134, 'Cef-Plus ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(135, 'Cefadyl ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(136, 'Cefadyl ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(137, 'Cefatop ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(138, 'Cefatop ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(139, 'Cefcil ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(140, 'Cefcil ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(141, 'Ceferon-3 ', 'Powder for Suspension ', '200 mg/5 ml ', 'Cefixime Trihydrate '),
(142, 'Ceferon-3 ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(143, 'Cefesta ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(144, 'Cefesta ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(145, 'Cefiac ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(146, 'Cefiac ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(147, 'Cefiac ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(148, 'Ceficap ', 'Powder for Suspension ', '100 mg/5 ml ', 'Cefixime Trihydrate '),
(149, 'Ceficap ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(150, 'Ceficap ', 'Capsule ', '400 mg ', 'Cefixime Trihydrate '),
(151, 'Cefiget ', 'Powder for Suspension ', '200 mg/5 ml ', 'Cefixime Trihydrate '),
(152, 'Cefiget ', 'Capsule ', '200 mg ', 'Cefixime Trihydrate '),
(153, 'A Cal ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(154, 'A Cal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(155, 'A Cal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(156, 'Acical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(157, 'Apocal ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(158, 'Aristocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(159, 'Bonacal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(160, 'Boncal ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(161, 'Boni ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(162, 'Bpcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(163, 'Cabonate ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(164, 'Cal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(165, 'Cal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(166, 'Cal Aid ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(167, 'Cal Up ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(168, 'Calbo ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(169, 'Calbo Jr ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(170, 'Calbon ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(171, 'Calbonat ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(172, 'Calcar ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(173, 'Calci D ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(174, 'Calcibo ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(175, 'Calcibost ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(176, 'Calcicar ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(177, 'Calcicar ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(178, 'Calcifil ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(179, 'Calcin ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(180, 'Calciton ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(181, 'Calcium ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(182, 'Calcium ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(183, 'Calcium 500 ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(184, 'Calcium A ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(185, 'Calcium DS ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(186, 'Calcium Sandoz ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(187, 'Calcizen DS ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(188, 'Calcon ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(189, 'Caldical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(190, 'Caldil ', 'Chewable Tablet ', '250 mg ', 'Calcium Carbonate '),
(191, 'Caletal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(192, 'Calfeed ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(193, 'Calfor ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(194, 'Calium ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(195, 'Calmax ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(196, 'Calmet ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(197, 'Calmi ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(198, 'Calos ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(199, 'Calpo ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(200, 'Calsan ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(201, 'Calsil ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(202, 'Calsto ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(203, 'Caltonic ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(204, 'Carben ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(205, 'Carbocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(206, 'Casalt ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(207, 'Cenet ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(208, 'Cinet ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(209, 'Cium ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(210, 'Costin ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(211, 'Costin ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(212, 'Cpcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(213, 'Edical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(214, 'Eurocal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(215, 'Evecal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(216, 'Forbon ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(217, 'Gravite ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(218, 'Hical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(219, 'Indocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(220, 'Ipical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(221, 'Isocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(222, 'Jasocal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(223, 'Jasocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(224, 'Kidcal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(225, 'Maxcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(226, 'Maxical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(227, 'Med Cal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(228, 'Miracal ', 'Chewable Tablet ', '500 mg ', 'Calcium Carbonate '),
(229, 'Miracal J ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(230, 'Monocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(231, 'Mycal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(232, 'Myocal D ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(233, 'Mystocal ', 'Chewable Tablet ', '500 mg ', 'Calcium Carbonate '),
(234, 'Naafcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(235, 'Neocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(236, 'Onecal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(237, 'Oracal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(238, 'Orbical ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(239, 'Orthocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(240, 'Oscal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(241, 'Oscal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(242, 'Ossi ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(243, 'Ostacid ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(244, 'Ostim ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(245, 'Ostimet ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(246, 'Ostocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(247, 'Ostocal JR ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(248, 'Ostocurb ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(249, 'Ostogen ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(250, 'Ostogen JR ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(251, 'Ostoplus ', 'Chewable Tablet ', '500 mg ', 'Calcium Carbonate '),
(252, 'Peocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(253, 'Phoenix Calcium ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(254, 'Precal ', 'Chewable Tablet ', '500 mg ', 'Calcium Carbonate '),
(255, 'Procala ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(256, 'Protebon ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(257, 'Rejuven ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(258, 'Rejuven JR ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(259, 'Rocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(260, 'Saltonate ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(261, 'Sancal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(262, 'Sandocal ', 'Tablet ', '250 mg ', 'Calcium Carbonate '),
(263, 'Sandocal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(264, 'See-Cal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(265, 'Silcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(266, 'Starcal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(267, 'Sucal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(268, 'Suplecal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(269, 'Sycal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(270, 'Tumy ', 'Tablet ', '240 mg ', 'Calcium Carbonate '),
(271, 'Unate ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(272, 'Xcid ', 'Tablet ', '1000 mg ', 'Calcium Carbonate '),
(273, 'Xtracal ', 'Tablet ', '500 mg ', 'Calcium Carbonate '),
(274, 'A-Phenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(275, 'A-Phenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(276, 'Apiclox ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(277, 'Aristophen ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(278, 'Aristophen ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(279, 'Chemophenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(280, 'Chemophenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(281, 'Chloramex ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(282, 'Chloramphenical ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(283, 'Chloramphenicol ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(284, 'Chloramphenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(285, 'Chloramphenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(286, 'Chlorool ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(287, 'Chlorool ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(288, 'Chlorovis ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(289, 'Chlorphen ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(290, 'Chlorphen ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(291, 'Chlorphen ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(292, 'Chlorphen ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(293, 'Cloram ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(294, 'Cloram ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(295, 'E-Col ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(296, 'Edrumycetin ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(297, 'Edrumycetin ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(298, 'Epamycetin ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(299, 'Eyephen ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(300, 'Fionicol ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(301, 'G-Chloramphenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(302, 'G-Chloramphenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(303, 'G-Chloramphenicol ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(304, 'Glophen ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(305, 'I-Guard ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(306, 'Icol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(307, 'Nicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(308, 'Nicol ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(309, 'Nidependiol ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(310, 'Ocubac ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(311, 'Ocubac ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(312, 'Ocuclor ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(313, 'Ocuclor ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(314, 'Ocuram ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(315, 'Ocutrex ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(316, 'Opsomycetin ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(317, 'Opsomycetin ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(318, 'Opsophenicol ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(319, 'Opsophenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(320, 'Optabac ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(321, 'Optaphenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(322, 'Optaphenicol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(323, 'Opthacol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(324, 'Optichlor ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(325, 'Opticol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(326, 'Opticol ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(327, 'Pharmaxin ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(328, 'Pharmaxin ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(329, 'Ramicol ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(330, 'Ramicol ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(331, 'Ramphen ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(332, 'Spersanicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(333, 'SQ-Mycetin ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(334, 'SQ-Mycetin ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(335, 'SQ-Mycetin ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(336, 'SQ-Mycetin ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(337, 'SQ-Mycetin ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(338, 'Staphenicol ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(339, 'Supraphen ', 'Ear Drop ', '5%', 'Chloramphenicol'),
(340, 'Supraphen ', 'Ear Drop ', '10%', 'Chloramphenicol'),
(341, 'Supraphen ', 'Eye Drop ', '0.50%', 'Chloramphenicol'),
(342, 'Supraphen ', 'Eye Ointment ', '1%', 'Chloramphenicol'),
(343, 'Supraphen ', 'Capsule ', '250 mg ', 'Chloramphenicol'),
(344, 'Supraphen ', 'Oral Suspension ', '125 mg/5 ml ', 'Chloramphenicol'),
(345, 'Supraphen ', 'Eye Drop ', '1%', 'Chloramphenicol'),
(346, 'Varen ', 'Eye/Ear Drop ', '0.50%', 'Chloramphenicol'),
(347, 'Abex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(348, 'Antuss ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(349, 'Aquaphen ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(350, 'Codex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(351, 'Codyl ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(352, 'Cofdil ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(353, 'Cofnil ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(354, 'Cofrid ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(355, 'Cofson ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(356, 'Coldex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(357, 'Cophilex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(358, 'Cophyl ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(359, 'E-cof ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(360, 'Exitra ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(361, 'Expoten ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(362, 'GPT ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(363, 'Kofed ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(364, 'Koftex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(365, 'Lurex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(366, 'Phendyl ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(367, 'Smile ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(368, 'Topex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(369, 'Tridex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(370, 'Triex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(371, 'Trinil ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(372, 'Tripec ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(373, 'Triphen ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(374, 'Tusca ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(375, 'Tussin ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(376, 'Tyrex ', 'Syrup ', '(30 mg+100 mg+1.25 mg) / 5 ml ', 'Pseudoephedrine + Guaiphenasine + Triprolidine '),
(377, 'Anfenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(378, 'Anodyne ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(379, 'Apain ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(380, 'C Fenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(381, 'Clofenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(382, 'Diclofen ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(383, 'Diclofenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(384, 'Diclon ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(385, 'Dinac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(386, 'Erdon ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(387, 'Ficlon ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(388, 'Genac ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(389, 'Intafenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(390, 'Locopain ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(391, 'Mobifen ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(392, 'Naclof ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(393, 'Nopain ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(394, 'Profenac ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(395, 'Reutren ', 'Eye Drop ', '0.10%', 'Diclofenac Sodium '),
(396, 'Volt ', 'Eye Drop ', '1%', 'Diclofenac Sodium '),
(397, 'Naafgain ', 'Topical Solution ', '2%', 'Minoxidil'),
(398, 'Naafgain ', 'Topical Solution ', '5%', 'Minoxidil'),
(399, 'Regain ', 'Topical Solution ', '2%', 'Minoxidil'),
(400, 'Regain ', 'Topical Solution ', '5%', 'Minoxidil'),
(401, 'Regrow ', 'Topical Solution ', '5%', 'Minoxidil'),
(402, 'Regrow ', 'Topical Solution ', '2%', 'Minoxidil'),
(403, 'Splendora ', 'Topical Solution ', '2%', 'Minoxidil'),
(404, 'Splendora ', 'Topical Solution ', '5%', 'Minoxidil'),
(405, 'Trugain ', 'Topical Solution ', '2%', 'Minoxidil'),
(406, 'Trugain ', 'Topical Solution ', '5%', 'Minoxidil'),
(407, 'Xenogrow ', 'Topical Solution ', '2%', 'Minoxidil'),
(408, 'Xenogrow ', 'Topical Solution ', '5%', 'Minoxidil'),
(409, 'Intal ', 'Inhaler ', '5 mg/Metered ', ' Sodium Cromoglicate'),
(410, 'Nacromin ', 'Inhaler ', '5 mg/Metered ', ' Sodium Cromoglicate'),
(411, 'Nacromin ', 'Inhaler ', '5 mg/Metered ', ' Sodium Cromoglicate'),
(412, 'Nacromin ', 'Inhaler ', '5 mg/Metered ', ' Sodium Cromoglicate'),
(413, 'A S A ', 'Tablet', '300 mg ', 'Aspirin'),
(414, 'A S A CV ', 'Tablet', '75 mg ', 'Aspirin'),
(415, 'Aciprin CV ', 'Tablet', '75 mg ', 'Aspirin'),
(416, 'Angin ', 'Tablet', '75 mg ', 'Aspirin'),
(417, 'Angiprin ', 'Tablet', '300 mg ', 'Aspirin'),
(418, 'Angiprin ', 'Tablet', '75 mg ', 'Aspirin'),
(419, 'Asorin ', 'Tablet', '75 mg ', 'Aspirin'),
(420, 'Aspin ', 'Tablet', '75 mg ', 'Aspirin'),
(421, 'Aspirin ', 'Tablet', '75 mg ', 'Aspirin'),
(422, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(423, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(424, 'Aspirin ', 'Tablet', '75 mg ', 'Aspirin'),
(425, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(426, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(427, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(428, 'Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(429, 'Aspirin S ', 'Tablet', '300 mg ', 'Aspirin'),
(430, 'Bliss ', 'Tablet', '75 mg ', 'Aspirin'),
(431, 'Caid ', 'Tablet', '75 mg ', 'Aspirin'),
(432, 'Caid ', 'Tablet', '100 mg ', 'Aspirin'),
(433, 'Caid ', 'Tablet', '100 mg ', 'Aspirin'),
(434, 'Caid ', 'Tablet', '75 mg ', 'Aspirin'),
(435, 'Cardoprin ', 'Tablet', '75 mg ', 'Aspirin'),
(436, 'Carva ', 'Tablet', '75 mg ', 'Aspirin'),
(437, 'D Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(438, 'Disprin ', 'Tablet', '300 mg ', 'Aspirin'),
(439, 'Disprin CV ', 'Tablet', '100 mg ', 'Aspirin'),
(440, 'Ecosprin ', 'Tablet', '75 mg ', 'Aspirin'),
(441, 'Ecosprin ', 'Tablet', '300 mg ', 'Aspirin'),
(442, 'Ecosprin ', 'Tablet', '150 mg ', 'Aspirin'),
(443, 'Ecosprin ', 'Tablet', '100 mg ', 'Aspirin'),
(444, 'Ecosprin E/C ', 'Tablet', '150 mg ', 'Aspirin'),
(445, 'Ecosprin L.D. ', 'Tablet', '75 mg ', 'Aspirin'),
(446, 'Encoprin ', 'Tablet', '300 mg ', 'Aspirin'),
(447, 'Encoprin LD ', 'Tablet', '75 mg ', 'Aspirin'),
(448, 'Encopyrin ', 'Tablet', '300 mg ', 'Aspirin'),
(449, 'Eprin ', 'Tablet', '75 mg ', 'Aspirin'),
(450, 'Eras 75 ', 'Tablet', '75 mg ', 'Aspirin'),
(451, 'Erasprin ', 'Tablet', '75 mg ', 'Aspirin'),
(452, 'Erasprin ', 'Tablet', '150 mg ', 'Aspirin'),
(453, 'G-Aspirin ', 'Tablet', '100 mg ', 'Aspirin'),
(454, 'G-Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(455, 'Gacopyrin ', 'Tablet', '300 mg ', 'Aspirin'),
(456, 'Gacopyrin ', 'Tablet', '75 mg ', 'Aspirin'),
(457, 'Gacopyrin ', 'Tablet', '100 mg ', 'Aspirin'),
(458, 'Genasprin ', 'Tablet', '100 mg ', 'Aspirin'),
(459, 'Genasprin ', 'Tablet', '100 mg ', 'Aspirin'),
(460, 'Genasprin S ', 'Tablet', '300 mg ', 'Aspirin'),
(461, 'Genasprin S ', 'Tablet', '75 mg ', 'Aspirin'),
(462, 'Genasprin S ', 'Tablet', '300 mg ', 'Aspirin'),
(463, 'Lodosprin ', 'Tablet', '100 mg ', 'Aspirin'),
(464, 'Lowrin ', 'Tablet', '75 mg ', 'Aspirin'),
(465, 'Monosprin ', 'Tablet', '75 mg ', 'Aspirin'),
(466, 'Mysprin ', 'Tablet', '75 mg ', 'Aspirin'),
(467, 'Neospin ', 'Tablet', '75 mg ', 'Aspirin'),
(468, 'Nibaron ', 'Tablet', '300 mg ', 'Aspirin'),
(469, 'Nosprin ', 'Tablet', '75 mg ', 'Aspirin'),
(470, 'P Aspirin ', 'Tablet', '300 mg ', 'Aspirin'),
(471, 'S-Pirin ', 'Tablet', '100 mg ', 'Aspirin'),
(472, 'Seemapyrin ', 'Tablet', '75 mg ', 'Aspirin'),
(473, 'Solrin ', 'Tablet', '100 mg ', 'Aspirin'),
(474, 'Solrin ', 'Tablet', '300 mg ', 'Aspirin'),
(475, 'Solrin ', 'Tablet', '150 mg ', 'Aspirin'),
(476, 'Solrin ', 'Tablet', '75 mg ', 'Aspirin'),
(477, 'Virin ', 'Tablet', '75 mg ', 'Aspirin'),
(478, 'Durakinase ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(479, 'Eptase ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(480, 'Myokinase ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(481, 'S-Kinase ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(482, 'STK ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(483, 'Streptase ', 'Powder for Injection ', '1.5 million unit ', 'Streptokinase'),
(484, 'Bentol ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(485, 'Burn Free ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(486, 'Burna ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(487, 'Burnaid ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(488, 'Burncare ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(489, 'Burndel ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(490, 'Burnguard ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(491, 'Burnix ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(492, 'Burnless ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(493, 'Burnrid ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(494, 'Burnsil ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(495, 'Dazine ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(496, 'Derban ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(497, 'Dermazin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(498, 'Dersa ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(499, 'Eburn ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(500, 'Flamagin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(501, 'Flamzin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(502, 'G Silver Sulfadiazine ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(503, 'Healburn ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(504, 'Medizen ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(505, 'Neozine ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(506, 'S-Silver Sulfadiazine ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(507, 'Sibalyn ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(508, 'Silburn ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(509, 'Silcream ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(510, 'Silvadazin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(511, 'Silvazin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(512, 'Silvec ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(513, 'Silverax ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(514, 'Silverzine ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(515, 'Silzin ', 'Cream ', '1%', 'Silver Sulfadiazine '),
(516, 'Cinarex ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(517, 'Gentob ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(518, 'Gentob ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(519, 'Intobac ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(520, 'Ocutob ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(521, 'T-Drop ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(522, 'T-Mycin ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(523, 'T-Mycin ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(524, 'T-Ointment ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(525, 'Tobam ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(526, 'Tobi ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(527, 'Tobirax ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(528, 'Tobirax ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(529, 'Tobrabac ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(530, 'Tobracin ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(531, 'Tobracin ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(532, 'Tobramin ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(533, 'Tobrel ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(534, 'Tomycin ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(535, 'Tomycin ', 'Eye Ointment ', '0.30%', 'Tobramycin'),
(536, 'Torcin ', 'Eye Drop ', '0.30%', 'Tobramycin'),
(537, 'Azmacort ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(538, 'Cenolon ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(539, 'Cortefin ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(540, 'Nasacort AQ ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(541, 'T-Cort ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(542, 'Tilon NS ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(543, 'Trialon ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(544, 'Trispray ', 'Nasal Spray ', '55 mcg/actuation ', 'Triamcinolone Acetonide '),
(545, 'Atolimus ', 'Ointment ', '0.03%', 'Tacrolimus'),
(546, 'Dermus ', 'Ointment ', '0.03%', 'Tacrolimus'),
(547, 'Limus ', 'Ointment ', '0.03%', 'Tacrolimus'),
(548, 'Remus ', 'Ointment ', '0.03%', 'Tacrolimus'),
(549, 'Remus ', 'Ointment ', '0.10%', 'Tacrolimus'),
(550, 'Taclor ', 'Ointment ', '0.03%', 'Tacrolimus'),
(551, 'Tacrol ', 'Ointment ', '0.03%', 'Tacrolimus'),
(552, 'Tacrol ', 'Ointment ', '0.10%', 'Tacrolimus'),
(553, 'Tacrolim ', 'Ointment ', '0.03%', 'Tacrolimus'),
(554, 'Tacrolim ', 'Ointment ', '0.10%', 'Tacrolimus'),
(555, 'Vitilimus ', 'Ointment ', '0.10%', 'Tacrolimus'),
(556, 'Vitilimus ', 'Ointment ', '0.03%', 'Tacrolimus'),
(557, 'Activit B ', '', '', 'Vitamin B complex'),
(558, 'Aduvit ', '', '', 'Vitamin B complex'),
(559, 'Aduvit ', '', '', 'Vitamin B complex'),
(560, 'Albaplex ', '', '', 'Vitamin B complex'),
(561, 'Albatab ', '', '', 'Vitamin B complex'),
(562, 'Allbeevit ', '', '', 'Vitamin B complex'),
(563, 'Allbeevit ', '', '', 'Vitamin B complex'),
(564, 'Allbeevit ', '', '', 'Vitamin B complex'),
(565, 'Allbeevit ', '', '', 'Vitamin B complex'),
(566, 'Allbeevit ', '', '', 'Vitamin B complex'),
(567, 'Apevit-B ', '', '', 'Vitamin B complex'),
(568, 'Apevit-B ', '', '', 'Vitamin B complex'),
(569, 'Aplex ', '', '', 'Vitamin B complex'),
(570, 'Aristoplex ', '', '', 'Vitamin B complex'),
(571, 'Aristovit-B ', 'Syrup', 'N/A', 'Vitamin B complex'),
(572, 'Asivit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(573, 'B-50 Forte ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(574, 'B-50 Forte ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(575, 'B-50 Forte ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(576, 'B-50 Forte ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(577, 'B-Plex ', 'Caplet ', 'N/A', 'Vitamin B complex'),
(578, 'B-Plex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(579, 'B-Plus ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(580, 'B-Plus ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(581, 'B-VIT 4 ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(582, 'B-VIT 4 ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(583, 'Beconex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(584, 'Beconex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(585, 'Beconex H/P ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(586, 'Becoson ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(587, 'Becoson ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(588, 'Becosules ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(589, 'Beforte ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(590, 'Beforte ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(591, 'Benvit B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(592, 'Benvit B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(593, 'Bevit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(594, 'Bicom ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(595, 'Biovit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(596, 'Biovit ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(597, 'Biozine-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(598, 'Bpfort ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(599, 'Ciplavit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(600, 'Combivit ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(601, 'Complavit ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(602, 'Complavit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(603, 'Comvit-B ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(604, 'Comvit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(605, 'Convit B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(606, 'Cpvit B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(607, 'Cytaplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(608, 'Cytaplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(609, 'Deplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(610, 'Deplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(611, 'Ediplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(612, 'Ediplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(613, 'Enplex-B ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(614, 'Europlex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(615, 'Europlex ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(616, 'EV Plex B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(617, 'EV Plex B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(618, 'Extravit B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(619, 'Flavit ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(620, 'Flavit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(621, 'G-Vitamin B Complex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(622, 'G-Vitamin B Complex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(623, 'G-Vitamin B Complex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(624, 'Genaplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(625, 'Hexaplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(626, 'Hiposul ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(627, 'Hiposul ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(628, 'Hiposul ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(629, 'Hiposul ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(630, 'Indoplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(631, 'Indoplex B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(632, 'Kvit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(633, 'Kvit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(634, 'Lysovita ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(635, 'Lysovita ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(636, 'Lysovita-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(637, 'M-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(638, 'M-Plex ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(639, 'Medivit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(640, 'Micoplex-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(641, 'Micoplex-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(642, 'Monoplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(643, 'Nipaplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(644, 'Nipaplex ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(645, 'Nutrivit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(646, 'Nutrivit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(647, 'Nutrovita ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(648, 'Opsovit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(649, 'Opsovit ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(650, 'Opsovit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(651, 'Orabex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(652, 'Orabex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(653, 'Orabex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(654, 'Orioplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(655, 'Orioplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(656, 'P-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(657, 'P-Plex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(658, 'Peoplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(659, 'Placent-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(660, 'Placent-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(661, 'Plexivit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(662, 'Plexivit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(663, 'Polyvit B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(664, 'Polyvit B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(665, 'Polyvit B Forte ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(666, 'Provit-B ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(667, 'Provit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(668, 'Rakplex ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(669, 'Ranvit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(670, 'Ranvit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(671, 'Remaplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(672, 'Remaplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(673, 'Reoplex Forte ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(674, 'Reoplex Forte ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(675, 'Restovit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(676, 'Restovit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(677, 'Ribaplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(678, 'Seemaplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(679, 'SG-Plus ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(680, 'Simvit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(681, 'Simvit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(682, 'Sinafort-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(683, 'Sinafort-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(684, 'Sinafort-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(685, 'Solvit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(686, 'Solvitone ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(687, 'Stanoplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(688, 'Stanovit-B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(689, 'Supraplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(690, 'Uniplex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(691, 'Univit-B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(692, 'V-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(693, 'V-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(694, 'V-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(695, 'V-Plex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(696, 'V-Plex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(697, 'V4 ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(698, 'Vicon ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(699, 'Vicon ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(700, 'Vigor B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(701, 'Vigor B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(702, 'Vilet B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(703, 'Vilet B ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(704, 'Vita-S ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(705, 'Vitacare ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(706, 'Vitacon ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(707, 'Vitalex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(708, 'Vitaplex ', 'Capsule ', 'N/A', 'Vitamin B complex'),
(709, 'Vitaplex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(710, 'Vitasil B ', 'Drop ', 'N/A', 'Vitamin B complex'),
(711, 'Vitasil B ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(712, 'Vitatab ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(713, 'Vitazin ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(714, 'Vitex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(715, 'Vitex ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(716, 'Vitex ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(717, 'Viton ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(718, 'Viton B ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(719, 'Vitsa ', 'IM/IV Injection ', 'N/A', 'Vitamin B complex'),
(720, 'Vizinc ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(721, 'Ziskavit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(722, 'Ziskavit ', 'Syrup ', 'N/A', 'Vitamin B complex'),
(723, 'Ziskavit ', 'Tablet ', 'N/A', 'Vitamin B complex'),
(726, 'Napa', 'Tablet', '10g', 'Napa'),
(727, 'Fast', 'Tablet', '500mg', 'Parasitamol'),
(728, 'Ace', 'Tablet', '500mg', 'Parasitamol'),
(729, 'Fast', 'Tablet', '500mg', 'Parasitamol'),
(730, 'Ace', 'Tablet', '10g', 'Napa'),
(731, 'Ace', 'Tablet', '500mg', 'Parasitamol'),
(732, 'Ace', 'Syrup', '5000mg', 'Parasitamol'),
(733, 'Parapyrol', 'Tablet', '500mg', 'Parasitamol'),
(734, 'monas', 'Tablet', '10g', 'montilucus');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_email` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `past_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_email`, `contact`, `sex`, `age`, `weight`, `past_pdf`) VALUES
(5, 'Abcde', 'ashena@gmail.com', 2147483647, 'Female', '24', '44', 'empty'),
(7, 'Azad Karim', 'ash@gmail.com', 0, 'Male', '12', '55', 'Prescription_ash@gmail.com'),
(8, 'Azad Karim', 'ashena22@gmail.com', 12154545, 'Male', '22', '55', 'Prescription_ashena22@gmail.com'),
(9, 'mm', 'm@gmail.com', 111111111, 'Male', '12', '85', 'empty'),
(11, 'Fabiha Rob', 'p@g.com', 12154545, 'Female', '23', '55', 'empty'),
(12, 'Sakin', 's@gmail.com', 12312313, 'Male', '25', '40', 'empty'),
(13, 'parvez', 'j@gmail.com', 1222554, 'Male', '45', '45', 'empty'),
(14, 'koyes ', 'koyes11@gmail.com', 123654789, 'Male', '44', '89', 'Prescription_koyes11@gmail.com'),
(15, 'Fabiha Rob', 'ashena1@gmail.com', 1111111111, 'Female', '20', '45', 'empty'),
(16, 'Fabiha Rob', 'abs@gmail.com', 18, 'Male', '20', '60', 'empty'),
(17, 'Abcde', 'assas@gmail.com', 175662, 'Male', '20', '50', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `serial`
--

CREATE TABLE `serial` (
  `serial_id` int(10) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serial`
--

INSERT INTO `serial` (`serial_id`, `serial_no`, `patient_id`) VALUES
(1, '3', 5),
(2, '2', 7),
(3, '1', 8),
(4, '6', 9),
(5, '4', 11),
(6, '5', 12),
(7, '7', 13),
(8, '8', 14),
(9, 'pending', 15),
(10, 'pending', 16);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(10) NOT NULL,
  `test_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
(4, 'Endoscopy'),
(5, 'Biopsy'),
(6, 'bloodtest'),
(7, 'Ultrasonography');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `patient_id1` (`patient_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `patient_email` (`patient_email`);

--
-- Indexes for table `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`serial_id`),
  ADD KEY `patient_id_f` (`patient_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=735;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `serial`
--
ALTER TABLE `serial`
  MODIFY `serial_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `patient_id1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `serial`
--
ALTER TABLE `serial`
  ADD CONSTRAINT `patient_id_f` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
