-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 08:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `party` varchar(50) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `position` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `name`, `party`, `passport`, `position`, `vote`) VALUES
(1, 'Aishat Abdulfatah', '3', 'aishat.png', 1, 12),
(2, 'Felix Michael', '1', '20180710_160335.jpg', 1, 15),
(3, 'Bukola Aina', '2', 'BeautyPlus_20171227111102_fast.jpg', 2, 6),
(4, 'John Daniel', '1', 'user2.png', 3, 6),
(5, 'Ola Femi', '3', 'user3.png', 3, 11),
(7, 'Jimoh Abdul', '6', 'user1.jpeg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `party_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `name`) VALUES
(1, 'PDP'),
(2, 'SDP'),
(3, 'ANPP'),
(6, 'APC');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `position_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'President'),
(2, 'Governor'),
(3, 'Senator');

-- --------------------------------------------------------

--
-- Table structure for table `voters_data`
--

CREATE TABLE `voters_data` (
  `id` int(11) NOT NULL,
  `other_name` text NOT NULL,
  `surname` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` text NOT NULL,
  `lga` text NOT NULL,
  `gender` text NOT NULL,
  `phoneNo` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `voterId` varchar(50) NOT NULL,
  `natid` varchar(50) NOT NULL,
  `ward` text NOT NULL,
  `town` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_data`
--

INSERT INTO `voters_data` (`id`, `other_name`, `surname`, `dob`, `email`, `state`, `lga`, `gender`, `phoneNo`, `address`, `passport`, `voterId`, `natid`, `ward`, `town`) VALUES
(1, 'olaoluwa', 'michael', '2018-06-27', 'olagabriel@gmail.com', 'ekiti', 'ise', 'male', '07087178942', 'afolu,ise-ekiti', 'IMG_20161213_093450.jpg', 'VO315TER', '0', 'Orun', 'ise'),
(2, 'Grace', 'Akingboye', '1995-08-11', 'falana@gmail.com', 'Osun', 'Obokun', 'male', '08067345324', 'tanke', '', 'VO2313330TER', '0', 'Imesi-ile', 'Imesi-ile'),
(4, 'oluwadamilare', 'michael', '2000-11-08', 'darefelix95@gmail.com', 'kwara', 'ekiti', 'male', '08134603858', 'iledu tanke', 'Passport.jpg', 'VO98684693TER', 'N123456789G', 'opin', 'isare-opin'),
(5, 'Abiodun', 'Falana', '2018-08-27', 'darefelix95@gmail.com', 'Ekiti', 'Ise/Orun', 'male', '08161887047', 'Oke-Odo', '20180510_091255.jpg', 'VO67959626TER', 'N123456780G', 'ise', 'Imesi-ile'),
(6, 'Ajumah', 'Ameh', '2018-08-28', 'rachel@gmail.com', 'Benue', 'Otukpo', 'female', '09034571234', 'port harcourt', '1524641_463164037143240_1863773872_n.jpg', 'VO13082972TER', 'N987654321G', 'Otukpo west', 'Otukpo'),
(7, 'Ayomide', 'Ayeni', '2018-08-27', 'ayomide@gmail.com', 'kwara', 'Isanlu', 'male', '08161887047', 'Unilorin', 'IMG-20150929-WA0001.jpg', 'VO94720464TER', 'N674532922G', 'isin', 'isanlu isin'),
(8, 'kayode', 'john', '2018-07-10', 'john@gmail.com', 'ekiti', 'ise', 'male', '09093456782', 'ise', 'IMG_20161213_093450.jpg', 'VO45694024TER', 'N234567890G', 'ise/orun', 'ise');

-- --------------------------------------------------------

--
-- Table structure for table `voters_natid`
--

CREATE TABLE `voters_natid` (
  `id` int(11) NOT NULL,
  `natId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_natid`
--

INSERT INTO `voters_natid` (`id`, `natId`) VALUES
(1, 'N123456780G'),
(2, 'N987654321G'),
(3, 'N234567890G'),
(4, 'N674532922G'),
(5, 'N123456789G'),
(6, 'N003456782G'),
(7, 'N123456777G'),
(8, 'N123456733G'),
(9, 'N123456745G'),
(10, 'N123456714G');

-- --------------------------------------------------------

--
-- Table structure for table `voters_status`
--

CREATE TABLE `voters_status` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(50) NOT NULL,
  `position_id` int(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_status`
--

INSERT INTO `voters_status` (`id`, `voters_id`, `position_id`, `status`) VALUES
(1, 'VO45694024TER', 1, 'voted'),
(2, 'VO45694024TER', 2, 'voted'),
(3, 'VO45694024TER', 3, 'voted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`party_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `voters_data`
--
ALTER TABLE `voters_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters_natid`
--
ALTER TABLE `voters_natid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters_status`
--
ALTER TABLE `voters_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `party_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voters_data`
--
ALTER TABLE `voters_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `voters_natid`
--
ALTER TABLE `voters_natid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `voters_status`
--
ALTER TABLE `voters_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
