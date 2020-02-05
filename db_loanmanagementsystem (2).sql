-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 09:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loanmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `Acc_id` int(44) NOT NULL,
  `Acc_type` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`Acc_id`, `Acc_type`) VALUES
(100, 'kuyku'),
(200, 'fghfghfg'),
(300, 'snnn'),
(400, 'gay');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `Emp_id` int(55) NOT NULL,
  `Acc_id` int(44) NOT NULL,
  `Emp_name` text NOT NULL,
  `Emp_contact` int(77) NOT NULL,
  `Emp_mail` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`Emp_id`, `Acc_id`, `Emp_name`, `Emp_contact`, `Emp_mail`) VALUES
(1, 100, 'mofij', 17777777, '@jhgjh.ug'),
(5345, 200, 'nnn', 1111, '@@@12222');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loan`
--

CREATE TABLE `tb_loan` (
  `sl` int(20) NOT NULL,
  `Acc_id` int(44) NOT NULL,
  `total` int(20) NOT NULL,
  `emi` int(20) NOT NULL,
  `due` int(20) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_loan`
--

INSERT INTO `tb_loan` (`sl`, `Acc_id`, `total`, `emi`, `due`, `date`) VALUES
(1, 100, 10000, 2000, 8000, '12/12/2017'),
(1, 200, 20000, 1000, 19000, '22/12/2017'),
(1, 300, 50000, 5000, 45000, '17/12/2017'),
(1, 400, 1000, 10, 990, '12/12/17'),
(2, 100, 10000, 2000, 6000, '11/12/2017'),
(2, 200, 20000, 1000, 18000, '25/12/2017'),
(2, 300, 50000, 5000, 40000, '20/12/2017'),
(3, 300, 50000, 5000, 35000, '30/12/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `Mem_id` int(33) NOT NULL,
  `Acc_id` int(44) NOT NULL,
  `Mem_name` text NOT NULL,
  `Mem_address` varchar(66) NOT NULL,
  `Mem_contact` int(44) NOT NULL,
  `Mem_mail` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`Mem_id`, `Acc_id`, `Mem_name`, `Mem_address`, `Mem_contact`, `Mem_mail`) VALUES
(123, 300, 'abir', 'utttpra', 1768176261, '@@@@@@@123'),
(456, 400, 'bondon', 'dinnnn', 17555, 'bon#####'),
(2222, 200, 'Hemal', 'Uttara', 121321, '####'),
(11111, 100, 'naim', 'Dhaka', 1111111, '@hdfgsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_organization`
--

CREATE TABLE `tb_organization` (
  `org_id` int(44) NOT NULL,
  `Acc_id` int(44) NOT NULL,
  `org_name` text NOT NULL,
  `org_address` varchar(33) NOT NULL,
  `org_branch` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_organization`
--

INSERT INTO `tb_organization` (`org_id`, `Acc_id`, `org_name`, `org_address`, `org_branch`) VALUES
(11, 100, 'naim loan management system', 'uttara', 'uttara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`Acc_id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`Emp_id`,`Acc_id`);

--
-- Indexes for table `tb_loan`
--
ALTER TABLE `tb_loan`
  ADD PRIMARY KEY (`sl`,`Acc_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`Mem_id`,`Acc_id`);

--
-- Indexes for table `tb_organization`
--
ALTER TABLE `tb_organization`
  ADD PRIMARY KEY (`org_id`,`Acc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
