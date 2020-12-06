-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 05:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `symptomp` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `state`, `symptomp`, `message`) VALUES
(13, 'Sagiruddin AKHTAR', 'sagir.akhtar387@gmail.com', '0970862501', 'Telangana', 'Fever,', 'i am fyn'),
(14, '19mcmc28', 'kpmca120@gmail.com', '9708625015', 'Mizoram', 'Fever,', 'ok'),
(15, 'rozy Akhtar', 'SAGIR.AKHTAR387@GMAIL.COM', '9708625015', 'Telangana', 'Fever,Breath,', 'ya i am ok'),
(16, 'shamsher siddiqui', 'kpmca120@gmail.com', '9708625015', 'Bihar', 'Cold,Fever,', 'i am ok'),
(20, 'rozy Akhtar', 'kpmca120@gmail.com', '9708625015', 'Telangana', 'Fever,Breath,', 'littlebit cough');

-- --------------------------------------------------------

--
-- Table structure for table `itlabexercise`
--

CREATE TABLE `itlabexercise` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(40) NOT NULL,
  `phonenumber` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itlabexercise`
--

INSERT INTO `itlabexercise` (`id`, `username`, `password`, `phonenumber`, `reg_date`) VALUES
(1, 'sagir', 'de698d0b91b7601a71496f2996923493', '9708625015', '2020-12-03 05:19:08'),
(2, 'rozy', '621ab1fb51d165ef84985f91b797f156', '9708625015', '2020-12-02 14:48:02'),
(3, 'neeraj', 'e73efee274e35cd0f133624774d16006', '9708625015', '2020-12-03 15:59:23'),
(4, 'sham', '37244e6b9600999782d80637b433aad7', '9708625015', '2020-12-04 16:19:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itlabexercise`
--
ALTER TABLE `itlabexercise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `itlabexercise`
--
ALTER TABLE `itlabexercise`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
