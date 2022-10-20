-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 06:20 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_asset`
--

CREATE TABLE IF NOT EXISTS `add_asset` (
  `ASSETNAME` varchar(50) NOT NULL,
  `ASSETCODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_asset`
--

INSERT INTO `add_asset` (`ASSETNAME`, `ASSETCODE`) VALUES
('LED', 'LED-01'),
('PIPE', 'PIPE-012'),
('LIGHT', 'LIGHT-009'),
('WATER-COOLER', 'WC-01'),
('FAN', 'FAN-2017'),
('HEATER', 'HEAT-01'),
('PLATFORMSHEET', 'PS-001');

-- --------------------------------------------------------

--
-- Table structure for table `add_station`
--

CREATE TABLE IF NOT EXISTS `add_station` (
  `STDNAME` text NOT NULL,
  `STDCODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_station`
--

INSERT INTO `add_station` (`STDNAME`, `STDCODE`) VALUES
('Gorakhpur', 'Gkp'),
('DEORIA', 'DEO'),
('MP', 'MP-01'),
('ALLAHABAAD', 'ALLAH'),
('BAHRAICH', 'BRH');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERID` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERID`, `PASSWORD`) VALUES
('aditya', '12345'),
('aditya81', '8181');

-- --------------------------------------------------------

--
-- Table structure for table `allot_asset`
--

CREATE TABLE IF NOT EXISTS `allot_asset` (
  `STATIONNAME` varchar(40) NOT NULL,
  `STATIONCODE` varchar(50) NOT NULL,
  `ASSETNAME` varchar(50) NOT NULL,
  `ASSETCODE` varchar(50) NOT NULL,
  `SERIALNUM` varchar(50) NOT NULL,
  `INITDATE` date NOT NULL,
  `REP` varchar(10) NOT NULL,
  `REPMDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allot_asset`
--

INSERT INTO `allot_asset` (`STATIONNAME`, `STATIONCODE`, `ASSETNAME`, `ASSETCODE`, `SERIALNUM`, `INITDATE`, `REP`, `REPMDATE`) VALUES
('Deoria', 'DEO', 'LED', 'LED-01', 'w3', '2014-11-05', '8', '2017-11-20'),
('Deoria', 'DEO', 'WATER-COOLER', 'WC-01', 'RYU5', '2014-11-26', '2', '2017-11-20'),
('Gauribazar', 'GB', 'LED', 'LED-01', 'd22', '2014-11-22', '6', '2022-11-20'),
('Mumbai Central', 'BCT', 'WATER-COOLER', 'WC-01', 'gh2', '2014-11-19', '6', '2014-11-06'),
('Deoria', 'DEO', 'PIPE', 'PIPE-01', 'sds', '2012-11-01', '4', '2021-11-22'),
('Gauribazar', 'GB', 'FAN', 'FAN-2017', '12345', '2017-11-01', '2', '0000-00-00'),
('Mumbai Central', 'BCT', 'HEATER', 'HEAT-01', '234hx', '2017-11-01', '1', '2017-11-23'),
('Deoria', 'DEO', 'riversteam', 'stream-01', 'ljhc', '2017-12-01', '1', '2018-12-01'),
('MP', 'MP-01', 'TELEVISION', 'TV001', 'TV12', '2016-04-01', '2', '2018-04-01'),
('MP', 'MP-01', 'WATER-COOLER', 'WC-01', 'Wat11', '2018-04-16', '8', '2026-04-14'),
('DEORIA', 'DEO', 'LED', 'LED-01', 'LED00001', '2015-04-01', '3', '2018-03-31'),
('Gorakhpur', 'Gkp', 'FAN', 'FAN-2017', 'FAN0001', '2013-04-03', '4', '2017-04-02'),
('ALLAHABAAD', 'ALLAH', 'PLATFORMSHEET', 'PS-001', 'PS7890', '2014-11-01', '3', '2017-10-31'),
('DEORIA', 'DEO', 'LED', 'LED-01', 'LED09876', '2018-04-01', '3', '2021-03-31'),
('ALLAHABAAD', 'ALLAH', 'HEATER', 'HEAT-01', 'HEAT000', '2018-04-03', '6', '2024-04-01'),
('MP', 'MP-01', 'PIPE', 'PIPE-012', 'PIPE000', '2018-04-03', '3', '2021-04-02'),
('MP', 'MP-01', 'WATER-COOLER', 'WC-01', 'WC-000', '2018-04-25', '9', '2027-04-23'),
('DEORIA', 'DEO', 'LED', 'LED-01', '10', '2018-05-03', '5', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `USERID` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`USERID`, `PASSWORD`) VALUES
('aditya', '12345'),
('aditya81', '8181');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
