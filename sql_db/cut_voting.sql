-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cut_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `regnum` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`regnum`, `password`) VALUES
('1242353', 'qweqwe'),
('tinashe', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cand_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `position` varchar(80) NOT NULL,
  `part` varchar(20) NOT NULL,
  `level` varchar(3) NOT NULL,
  `program` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `name`, `position`, `part`, `level`, `program`, `message`, `pic`) VALUES
(1001, 'Joe Mutarisi', 'President', 'ZINASU', '4.1', 'Information Technology', 'I promise to One of the ways slogans work in political campaigns is through the appeals they make. Slogans can be used to appeal to the values and emotions that a particular society is keen on.\\n\r\n\r\nI promise to One of the ways slogans work in political campaigns is through the appeals they make. Slogans can be used to appeal to the values and emotions that a particular society is keen on.\r\n\r\nI promise to One of the ways slogans work in political campaigns is through the appeals they make. Sloga', 'iStock-509916803.jpg'),
(1002, 'Matthew Mats', 'Secretary', 'INDIPENDENT', '2.1', 'Supply Chain', 'I promise to One of the ways slogans work in political campaigns is through the appeals they make. Slogans can be used to appeal to the values and emotions that a particular society is keen on.', '1000_F_560002450_oxu1G9y76P4vVPNugw0KMOrYi954v6XL.jpg'),
(1004, 'Mary Moyo', 'Treasurer', 'ZICOSU', '2.1', 'Accounting', 'I promise to One of the ways slogans work in political campaigns is through the appeals they make. Slogans can be used to appeal to the values and emotions that a particular society is keen on.', '71304804-smiling-young-black-female-student-in-university-foyer.jpg'),
(1005, 'George Mats', 'President', 'ZICOSU', '3.1', 'Mechatronics', 'I promise to One of the ways slogans work in political campaigns is through the appeals they make. Slogans can be used to appeal to the values and emotions that a particular society is keen on.', 'istockphoto-1353041652-612x612.jpg'),
(1006, 'Ayanda Ndlovu', 'Treasurer', 'ZINASU', '4.1', 'Bio-Tech', 'GHVDhvweafjwedjhvfekjlvr', 'maxresdefault.jpg'),
(1030, 'Sarah Guya', 'Secretary', 'ZINASU', '1.2', 'Supply Chain', 'wFHKHWAJFIHGRhilrILHGRIUL', 'jkkk.png'),
(1032, 'Docars Moyo', 'President', 'INDIPENDEDNT', '4.1', 'Business Enterprise', 'jkwr;w cqhnetr hewnt cler tkrjeat jke rkjeqr kjtrkj gretkj rkhjrih trhj', 'face-student-portrait-black-woman-600nw-2248535229.png'),
(1033, 'Ronny Mota', 'Treasurer', 'INDIPENDEDNT\n', '2.2', 'Information Technology', 'qewkjewg gqe t erg rey 54 yt5 f df 4 t43 r 34 tr43 t5 4y 45', 'istockphoto-1201405182-612x612-1.jpg'),
(1035, 'Gerurya', 'Secretary', 'Tinny', '3.1', 'Mathematics', 'W3GWEFEWGRGERA W QGFWEG  EAG g g    AW D WD WQD WE FF E', 'shutterstock_763464100-623x438.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pop`
--

CREATE TABLE `pop` (
  `regnum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pop`
--

INSERT INTO `pop` (`regnum`) VALUES
(1001),
(1004),
(1008),
(2144),
(31343);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `cand_id` int(11) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`cand_id`, `votes`) VALUES
(1001, 2),
(1002, 3),
(1004, 2),
(1005, 2),
(1006, 1),
(1030, 1),
(1032, 0),
(1033, 1),
(1034, 0),
(1035, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `v_state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`v_state`) VALUES
('end');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `regnum` varchar(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  `dpt` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `level_yr` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`regnum`, `password`, `dpt`, `gender`, `level_yr`) VALUES
('1009', '4545', 'bzns', 'female', 1),
('2140', '9etr', 'arts', 'male', 2),
('244142', '1234', 'bzns', 'male', 2),
('313213', '124dqse', 'eng', 'male', 2),
('31343', '2324', 'arts', 'male', 2),
('76413264', 'qwe123', 'arts', 'male', 2),
('7641466', 'qwe123', 'arts', 'male', 2),
('C22149075Q', '1234', 'eng', 'male', 2),
('tinashe', '1234', 'arts', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `regnum` varchar(10) NOT NULL,
  `cand_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`regnum`, `cand_id`, `position`) VALUES
('1009', 1001, 'President'),
('1009', 1002, 'Secretary'),
('1009', 1033, 'Treasurer'),
('244142', 1001, 'President'),
('244142', 1030, 'Secretary'),
('244142', 1004, 'Treasurer'),
('31343', 1005, 'President'),
('31343', 1002, 'Secretary'),
('31343', 1004, 'Treasurer'),
('313213', 1005, 'President'),
('313213', 1002, 'Secretary'),
('313213', 1006, 'Treasurer');

-- --------------------------------------------------------

--
-- Table structure for table `yourtable`
--

CREATE TABLE `yourtable` (
  `id` int(11) NOT NULL,
  `key_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `pop`
--
ALTER TABLE `pop`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`cand_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`v_state`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `yourtable`
--
ALTER TABLE `yourtable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_key_value` (`key_value`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
