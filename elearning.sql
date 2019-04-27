-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 07:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `availedcourses`
--

CREATE TABLE `availedcourses` (
  `cnt` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `courses` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `comment`) VALUES
('aas', 'a@d.c', 'sddsfg\r\n'),
('abhishek kumar', 'abvhu@gmail.com', 'xcvjkmjhbniuh'),
('dd', 'dd@df', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(60) NOT NULL,
  `coursedetails` varchar(100) NOT NULL,
  `author` varchar(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `coursedetails`, `author`, `date`) VALUES
('artificial_intelligence', 'artificial_intelligence', 'Er. P.B.chakroborty', '2018-04-10'),
('Automata', 'Automata', 'Dr.Rajendar kumar', '2018-04-04'),
('cloud_computing', 'cloud_computing', 'Er. Ray Rapheal', '2018-04-09'),
('Cyber Security', 'Cyber Security', 'Er.Pranab bhose', '2018-04-03'),
('IOT', 'Internet Of Things', 'Er. Indeevar Raj ', '2018-04-07'),
('Java for Beginners', 'Java for Beginners', 'Er. Aakash chauhan', '2018-03-14'),
('Networking Basics', 'Networking Basics', 'Er. Satyam prakash', '2018-03-16'),
('PHP with MYSQL', 'PHP with MYSQL', 'Er. Abhinav Bhatnagar', '2018-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `password`, `name`, `contact`, `address`) VALUES
('bhav@gmail.com', '12345', 'bhav', '123456789', '2345'),
('dnbhk@gmail.com', 'dnbhk@gmail.com', 'Minato', '5555555555', 'acdwhgkv  rehfvvnij jjvv'),
('qwerty@gmail.com', 'qwerty@gmail.com', 'bujuka', '8777973641', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tcourse`
--

CREATE TABLE `tcourse` (
  `cnt` int(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcourse`
--

INSERT INTO `tcourse` (`cnt`, `course`) VALUES
(1, 'Artificial intelligence'),
(2, 'Automata'),
(3, 'Cloud Computing'),
(4, 'Cyber Sequrity'),
(5, 'IOT'),
(6, 'Java for Beginners'),
(7, 'Networking Basics'),
(8, 'PHP with MYsql');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availedcourses`
--
ALTER TABLE `availedcourses`
  ADD PRIMARY KEY (`cnt`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tcourse`
--
ALTER TABLE `tcourse`
  ADD PRIMARY KEY (`cnt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
