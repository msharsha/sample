-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 05:31 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `abcd`
--

CREATE TABLE `abcd` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cartable`
--

CREATE TABLE `cartable` (
  `id` int(32) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartable`
--

INSERT INTO `cartable` (`id`, `name`, `price`, `image`) VALUES
(1, 'dfse', '322222', 0x626d77332e6a7067),
(2, 'sdgsddag', '243', 0x636172322e6a7067),
(3, 'ewewW', '2313', 0x61756469332e6a7067),
(4, 'sdvfsgs', '65445', 0x626d77322e6a7067),
(5, 'kdwjk', '6415', 0x61756469322e6a7067),
(34, 'vcbfss', '435', 0x61756469332e6a7067),
(65, 'jhvhl,bb', '8464143', 0x636172352e6a7067),
(342, '32fdssda', '4243', 0x626d77312e6a7067),
(434, 'dvxc', '233', 0x636172312e6a7067),
(4433, 'scz', '54', 0x626d77322e6a7067),
(5335, 'cfgcvhg', '78', 0x636172352e6a7067),
(6787, 'xazsx', '688', 0x636172322e6a7067),
(7654, 'fewga', '36328', 0x636172312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `name` varchar(50) NOT NULL,
  `comid` varchar(20) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`name`, `comid`, `img`) VALUES
('Audi A3', 'Audi', 0x61756469312e6a7067),
('Audi Q3', 'Audi', 0x61756469322e6a7067),
('Audi A4', 'Audi', 0x61756469332e6a7067),
('BMW X1', 'BMW', 0x626d77312e6a7067),
('BMW X3', 'BMW', 0x626d77322e6a7067),
('BMW X5', 'BMW', 0x626d77332e6a7067),
('E-Class', 'Mercedes', 0x6d65726365646573312e6a7067),
('C-Class', 'Mercedes', 0x6d65726365646573322e6a7067),
('S-Class', 'Mercedes', 0x6d65726365646573332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `address`, `gender`, `language`, `company`, `model`, `email`, `password`, `status`) VALUES
(1, 'manisha', 'bachu', 'jskjajsa', 'Female', 'hin', 'BMW', 'BMW X1,BMW X3', 'bhmew@jgvf.esbku', 'nsbjsasa@3A', 0),
(2, 'manisha', 'bachu', 'df', 'Female', 'hin', 'Audi', 'Audi A3,Audi Q3,Audi A4', 'bhmew@jgvf.esbk', 'nsbjsasa@3A', 1),
(3, 'manisha', 'bachu', 'kewfjsdndfs', 'Male', 'hin', 'Audi', 'Audi A4', 'abcde@gfh.com', 'nsbjsasa@3A', 1),
(29, 'hrfzabfcg', 'dgvsxhbrfs', 'xdhbcgdh', 'Female', 'hin', 'Audi', 'Audi Q3', 'manishabachu2@gmail.com', 'Abdh12@d3', 1),
(30, 'abcd', 'efgh', 'bhfbeksbjuflas', 'Female', 'hin', 'Audi', 'Audi A3,Audi Q3', 'manishabachu3@gmail.com', 'Miniclipi0@', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartable`
--
ALTER TABLE `cartable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartable`
--
ALTER TABLE `cartable`
  MODIFY `id` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7655;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
