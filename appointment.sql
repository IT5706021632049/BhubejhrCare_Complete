-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2018 at 05:42 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_id` int(5) NOT NULL,
  `appoint_description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `appoint_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `docter_id` int(3) NOT NULL,
  `hn_id` int(5) NOT NULL,
  `appoint_location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(2) NOT NULL,
  `appoint_status` int(1) NOT NULL,
  `appoint_day` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `appoint_description`, `appoint_time`, `docter_id`, `hn_id`, `appoint_location`, `department_id`, `appoint_status`, `appoint_day`) VALUES
(10001, 'ตรวจเบาหวาน', '10.30 น.', 100, 1457, 'ตึกเฉลิมพระเกียรติฯ ชั้น1', 1, 0, '2018-06-18'),
(10002, 'ตรวจวัดความดันโลหิต', '11.30 น.', 200, 88312, 'ตึกเฉลิมพระเกียรติฯ ชั้น1', 1, 0, '2018-06-19'),
(10003, 'ตรวจไขมนในเลือด', '11.30 น.', 300, 1433, 'ตึกเฉลิมพระเกียรติฯ ชั้น1', 1, 0, '2018-06-20'),
(10004, 'ตรวจไขมันในเลือด', '10.00 น.', 300, 85535, 'ตึกเฉลิมพระเกียรติฯ ชั้น1', 1, 0, '2018-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(2) NOT NULL,
  `department_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department_timeWorking` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department_dayWorking` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_timeWorking`, `department_dayWorking`) VALUES
(1, 'อายุรกรรมทั่วไป', '08.30 - 12.00 น', 'จันทร์ - ศุกร์'),
(2, 'คลินิกประสาทวิทยา', '16.00 - 20.00 น.', 'จันทร์ (นอกเวลา)'),
(3, 'คลินิกประสาทวิทยา', '09.00 - 11.00 น.', 'อังคาร'),
(4, 'คลินิกประสาทวิทยา', '13.00 - 15.00 น.', 'พฤหัสบดี');

-- --------------------------------------------------------

--
-- Table structure for table `docter`
--

CREATE TABLE `docter` (
  `docter_id` int(3) NOT NULL,
  `docter_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(2) NOT NULL,
  `docter_Workingday` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `docter`
--

INSERT INTO `docter` (`docter_id`, `docter_name`, `department_id`, `docter_Workingday`) VALUES
(100, 'ธนวรรธน์ วรรธนะภูติ ', 1, '1,3'),
(200, 'จิรายุ ตันตระกูล', 1, '2,4'),
(300, 'ปรมะ อิ่มอโนทัย', 1, '3,5');

-- --------------------------------------------------------

--
-- Table structure for table `docterworking`
--

CREATE TABLE `docterworking` (
  `docterWorking_id` int(5) NOT NULL,
  `docterWorking_day` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `docter_id` int(3) NOT NULL,
  `docterWorking_1000_1030` int(1) NOT NULL,
  `docterWorking_1030_1100` int(1) NOT NULL,
  `docterWorking_1100_1130` int(1) NOT NULL,
  `docterWorking_1130_1200` int(1) NOT NULL,
  `docterWorking_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `docterworking`
--

INSERT INTO `docterworking` (`docterWorking_id`, `docterWorking_day`, `docter_id`, `docterWorking_1000_1030`, `docterWorking_1030_1100`, `docterWorking_1100_1130`, `docterWorking_1130_1200`, `docterWorking_status`) VALUES
(30001, '2018-06-04', 100, 0, 0, 0, 0, 0),
(30002, '2018-06-11', 100, 0, 0, 0, 0, 0),
(30003, '2018-06-18', 100, 0, 1, 0, 0, 0),
(30004, '2018-06-25', 100, 0, 0, 0, 1, 0),
(30005, '2018-06-06', 100, 0, 0, 0, 0, 0),
(30006, '2018-06-13', 100, 0, 0, 0, 0, 0),
(30007, '2018-06-20', 100, 0, 0, 0, 0, 0),
(30008, '2018-06-27', 100, 1, 0, 0, 0, 0),
(30009, '2018-06-05', 200, 0, 0, 0, 0, 0),
(30010, '2018-06-12', 200, 0, 0, 0, 0, 0),
(30011, '2018-06-19', 200, 0, 0, 0, 1, 0),
(30012, '2018-06-26', 200, 0, 0, 0, 0, 0),
(30013, '2018-06-07', 200, 0, 0, 0, 0, 0),
(30014, '2018-06-14', 200, 0, 0, 0, 0, 0),
(30015, '2018-06-21', 200, 0, 0, 0, 0, 0),
(30016, '2018-06-28', 200, 0, 0, 0, 0, 0),
(30017, '2018-06-06', 300, 0, 0, 0, 0, 0),
(30018, '2018-06-13', 300, 0, 0, 0, 0, 0),
(30019, '2018-06-20', 300, 0, 0, 1, 1, 0),
(30020, '2018-06-27', 300, 0, 0, 0, 0, 0),
(30021, '2018-06-01', 300, 0, 0, 0, 0, 0),
(30022, '2018-06-08', 300, 0, 0, 0, 0, 0),
(30023, '2018-06-15', 300, 0, 0, 0, 0, 0),
(30024, '2018-06-22', 300, 0, 0, 0, 0, 0),
(30025, '2018-06-29', 300, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE `working` (
  `working_id` int(5) NOT NULL,
  `time_start` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time_end` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `docter_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `working`
--

INSERT INTO `working` (`working_id`, `time_start`, `time_end`, `docter_id`) VALUES
(20001, '8.30 น.', '12.00 น.', 100),
(20002, '8.30 น.', '12.00 น.', 200),
(20003, '8.30 น.', '12.00 น.', 300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
