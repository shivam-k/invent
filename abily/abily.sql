-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2018 at 08:29 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abily`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankinfo`
--

CREATE TABLE `bankinfo` (
  `id` int(11) NOT NULL,
  `aholder` text NOT NULL,
  `bname` text NOT NULL,
  `anumber` text NOT NULL,
  `ifsc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankinfo`
--

INSERT INTO `bankinfo` (`id`, `aholder`, `bname`, `anumber`, `ifsc`) VALUES
(1, 'Shivam Kumar', 'SBI IIT KGP', '84516496464', 'SBIN0000202'),
(2, 'Shivam Kumar', 'SBI IIT KGP', '84516496464', 'SBIN0000202'),
(3, 'Shivam Kumar', 'SBI IIT KGP', '84516496464', 'SBIN0000202');

-- --------------------------------------------------------

--
-- Table structure for table `docinfo`
--

CREATE TABLE `docinfo` (
  `id` int(11) NOT NULL,
  `dfile` text NOT NULL,
  `pfile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eduinfo`
--

CREATE TABLE `eduinfo` (
  `id` int(100) NOT NULL,
  `tSub` text NOT NULL,
  `tIns` text NOT NULL,
  `tPy` text NOT NULL,
  `tMarks` int(100) NOT NULL,
  `twSub` text NOT NULL,
  `twIns` text NOT NULL,
  `twPy` text NOT NULL,
  `twMarks` int(100) NOT NULL,
  `gSub` text NOT NULL,
  `gIns` text NOT NULL,
  `gPy` text NOT NULL,
  `gMarks` int(100) NOT NULL,
  `pgSub` text NOT NULL,
  `pgIns` text NOT NULL,
  `pgPy` text NOT NULL,
  `pgMarks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduinfo`
--

INSERT INTO `eduinfo` (`id`, `tSub`, `tIns`, `tPy`, `tMarks`, `twSub`, `twIns`, `twPy`, `twMarks`, `gSub`, `gIns`, `gPy`, `gMarks`, `pgSub`, `pgIns`, `pgPy`, `pgMarks`) VALUES
(4, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10),
(5, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10),
(6, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10),
(7, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10),
(8, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10),
(9, '10th', 'IIT KGP', '2018-06', 9, 'Science', 'IIT KGP', '2018-06', 10, 'CS', 'IIT KGP', '2018-06', 9, 'CS', 'IIT KGP', '2018-06', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pinfo`
--

CREATE TABLE `pinfo` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mnumber` text NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `disability` text NOT NULL,
  `aadhar` text NOT NULL,
  `fincome` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinfo`
--

INSERT INTO `pinfo` (`id`, `fname`, `lname`, `mnumber`, `emailid`, `dob`, `disability`, `aadhar`, `fincome`, `gender`, `address`) VALUES
(1, 'Shivam', 'Kumar', '94646464', 'shivam@gmail.com', '23/12/2002', 'Physical', '65666465', '4645', 'Male', 'KGP'),
(2, 'Shivam', 'Kumar', '785664', 'shivam@gmail.com', '1999-12-23', 'Physical Disability', '656664655', '96549646', 'Male', 'didhkafkeggfe'),
(3, 'Shivam', 'Kumar', '56564', 'shivam@gmail.com', '1999-05-23', 'Physical Disability', '94549848', '4884', 'Male', 'huefef'),
(4, 'Shivam', 'Kumar', '56564', 'shivam@gmail.com', '1999-05-23', 'Physical Disability', '494549848', '4884', 'Male', 'huefef'),
(5, 'Adam', 'Emmy', '4545', 'adam@gmail.com', '1999-12-12', 'Physical Disability', '1454654', '6464', 'Male', 'ehfuheuf'),
(6, 'Adam', 'Emmy', '4545', 'adam@gmail.com', '1999-12-12', 'Physical Disability', '145465455', '6464', 'Male', 'ehfuheuf'),
(7, 'Adam', 'Emmy', '4545', 'adam@gmail.com', '1999-12-12', 'Physical Disability', '4414546', '6464', 'Male', 'ehfuheuf'),
(19, 'Shivam', 'Kumar', '7872702422', 'shivam1@gmail.com', '1996-03-12', 'Physical', '876546454861', '5000000', 'Male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankinfo`
--
ALTER TABLE `bankinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docinfo`
--
ALTER TABLE `docinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eduinfo`
--
ALTER TABLE `eduinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinfo`
--
ALTER TABLE `pinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankinfo`
--
ALTER TABLE `bankinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `docinfo`
--
ALTER TABLE `docinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eduinfo`
--
ALTER TABLE `eduinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pinfo`
--
ALTER TABLE `pinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
