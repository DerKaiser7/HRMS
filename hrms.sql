-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 02:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'nicky2steve@gmail.com', 'mcsteve100', '$2y$10$48LOsKATPtAvuLt/TzjU7uawliRs.BzpBlK.dTqJR7gNDWWyVTrp2');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(128) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `region_id`) VALUES
(1, 'Nigeria', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `manager_id` int(11) NOT NULL,
  `managername` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `deptname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`manager_id`, `managername`, `dept_id`, `deptname`) VALUES
(1, 'Ifeoluwa Ogundipe', 1, 'HR & Admin'),
(2, 'Femi Oluwaniran', 2, 'Projects & Technology'),
(3, 'Ibukun Tunde Oni', 3, 'Health, Safety and Security'),
(4, 'Dami Olugbemi', 4, 'Legal & Planning'),
(5, 'Adewunmi Adebayo', 5, 'Logistics'),
(6, 'Seyi Ogunleye', 6, 'Finance & Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `street` text NOT NULL,
  `postalcode` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `street`, `postalcode`, `city`, `state`, `country_id`) VALUES
(1, '19, Dr Ezukuse close off admiralty way, lekki phase one.', '127889', 'Lekki', 'Lagos', 1);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--
-- Error reading structure for table hrms.managers: #1932 - Table 'hrms.managers' doesn't exist in engine
-- Error reading data for table hrms.managers: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hrms`.`managers`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Africa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` text NOT NULL,
  `hire_date` date NOT NULL,
  `dept_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `commission` int(11) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `jobrole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`employee_id`, `firstname`, `lastname`, `email`, `phone_no`, `hire_date`, `dept_id`, `manager_id`, `commission`, `salary`, `jobrole`) VALUES
(1, 'Victor', 'Olure', 'Vico@gmail.com', '09023456789', '2019-01-01', 6, 6, 12500, 200000, 'Financial Adviser'),
(2, 'Stephen', 'Abimbola', 'johnsonstephen0706@yahoo.com', '08023456789', '2019-02-02', 2, 2, 15000, 250000, 'Developer'),
(3, 'Blessing', 'Bowman', 'bb@hotmail.com', '08102345678', '2017-05-01', 4, 4, 18000, 300000, 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `fk` (`region_id`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fk_country` (`country_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `fk_vendor` (`dept_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hods`
--
ALTER TABLE `hods`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_country` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
