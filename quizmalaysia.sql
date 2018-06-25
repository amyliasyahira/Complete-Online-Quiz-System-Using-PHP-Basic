-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 07:59 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizmalaysia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password'),
('fadlan', 'lily'),
('admin', 'password'),
('fadlan', 'lily');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `answer1` varchar(1000) NOT NULL,
  `answer2` varchar(1000) NOT NULL,
  `trueAns` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `answer1`, `answer2`, `trueAns`) VALUES
(74, 'What is the tallest building in Malaysia?', 'KLCC  ', 'KL Tower', 'KLCC  '),
(75, 'How Many Stripes are in the Malaysian Flag?', '15  ', '14', '14'),
(76, 'What The Big Holiday in Malaysia?', 'Chinese New Year', 'Eid', 'Eid'),
(77, 'What is the Capital in Malaysia?', 'Kuala Lumpur,KL', 'Putrajaya,PJ', 'Kuala Lumpur,KL'),
(78, 'What is The Second Tallest Building in Malaysia?', 'KL Tower', 'Malaysia City Center  ', 'KL Tower'),
(79, 'What is the gates to Kuala Lumpur,KL?', 'Boarder Gateway', 'Plaza Tol', 'Plaza Tol'),
(81, 'Which country seceded from Malaysia in 1965?', 'Singapore', 'Taiwan', 'Taiwan'),
(82, 'What is the traditional flower in Malaysia?', 'Hibuscus', 'Sun Flower', 'Hibuscus'),
(83, 'What does "and" mean in Malay?', 'Sebab', 'Dengan', 'Dengan'),
(84, 'What does the crescent mean on the flag?', 'Freedom', 'Islam', 'Islam'),
(85, 'How many points are on the star?', '14', '13', '14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
