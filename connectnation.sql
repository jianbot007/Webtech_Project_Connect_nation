-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 09:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connectnation`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlist`
--

CREATE TABLE `adlist` (
  `adid` varchar(5) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `image` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adlist`
--

INSERT INTO `adlist` (`adid`, `accountname`, `productname`, `Date`, `image`, `status`, `payment`) VALUES
('1', 'JohnDoe', 'Laptop', '2025-01-01', 'laptop.jpg', 'Pending', 'Bkash'),
('3', 'MikeBrown', 'Tablet', '2025-01-03', 'tablet.jpg', 'Pending', 'Bank'),
('4', 'AliceWhite', 'Headphones', '2025-01-04', 'headphones.jpg', 'Pending', 'Bkash'),
('5', 'RobertGreen', 'Smartwatch', '2025-01-05', 'smartwatch.jpg', 'Pending', 'Nogod'),
('6', 'EmilyBlack', 'Camera', '2025-01-06', 'camera.jpg', 'Pending', 'Bank'),
('7', 'ChrisBlue', 'Speaker', '2025-01-07', 'speaker.jpg', 'Pending', 'Bkash'),
('8', 'SophiaGray', 'Keyboard', '2025-01-08', 'keyboard.jpg', 'Active', 'Nogod'),
('9', 'DavidYellow', 'Mouse', '2025-01-09', 'mouse.jpg', 'Active', 'Bank'),
('10', 'MarkBrown', 'Gaming Laptop', '2025-01-10', 'gaming_laptop.jpg', 'Active', 'Bkash'),
('11', 'AnnaGreen', 'DSLR Camera', '2025-01-11', 'dslr_camera.jpg', 'Active', 'Nogod'),
('12', 'TomBlack', 'Smart TV', '2025-01-12', 'smart_tv.jpg', 'Request', 'Bank'),
('13', 'LauraWhite', 'Wireless Earbuds', '2025-01-13', 'wireless_earbuds.jpg', 'Pending', 'Bkash'),
('14', 'KevinGray', 'Gaming Chair', '2025-01-14', 'gaming_chair.jpg', 'Active', 'Nogod'),
('15', 'SaraBlue', 'External Hard Drive', '2025-01-15', 'external_hard_drive.jpg', 'Request', 'Bank'),
('testI', 'testname', 'CodeLab', '2025-01-21', 'https//test.com', 'Active', 'Bank');

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `ID` varchar(5) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `mobileno` varchar(11) DEFAULT NULL,
  `fullname` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`ID`, `username`, `password`, `email`, `dob`, `gender`, `mobileno`, `fullname`) VALUES
('1', 'mahfuz1', '1', 'kaai@gmail.com', '2025-01-18', 'Male', '01990947348', 'Kazi Mahfuzur Rahman'),
('10', 'mahfuz5', '55555555', 'kaai@gmail.com', '2025-01-16', 'male', '01990947348', 'Kazi Mahfuzur Rahman'),
('2', 'mahfuz2', '2222222', '2@gmail.com', '2025-01-01', 'male', '054 002 183', 'Kazi Mahfuzur Rahman'),
('6', 'mahfuz6', '6666666', 'kaai@gmail.com', '2025-01-18', 'male', '0540021830', 'Kazi Mahfuzur Rahman'),
('11', 'mahfuz11', '11111111', 'kaai@gmail.com', '2025-01-28', 'male', '0540021830', 'Kazi Mahfuzur Rahman'),
('20', 'test1', '11111111', 'kaai@gmail.com', '2025-01-18', 'male', '0540021830', 'Kazi Mahfuzur Rahman'),
('21', 'test2', '1111111', 'kaai@gmail.com', '2025-01-18', 'male', '01400218301', 'Kazi Mahfuzur Rahman'),
('22', 'test3', '33333333', 'kaai@gmail.com', '2025-01-30', 'male', '01990947348', 'Kazi Mahfuzur Rahman'),
('23', 'test4', '44444444', 'kaai@gmail.com', '2024-12-30', 'male', '01990947348', 'Kazi Mahfuzur Rahman'),
('test5', 'Mr.Test', 'testtest', 'test@gmail.com', '2025-01-12', 'Male', '01990947348', 'Kazi Mahfuzur Rahman'),
('50', 'Kazi Mahfuzur Rahman1', '5555555', '50@gmail.com', '2025-01-22', 'male', '01990947348', 'Kazi Mahfuzur Rahman'),
('55', 'TEST55', '1111111111111', 'iju0933@gmail.com', '2025-01-26', 'male', '01990947340', 'Kazi Mahfuzur Rahman'),
('56', 'TEST56', '1111111111111', 'test122@gmail.com', '2025-01-22', 'male', '01990947349', 'Kazi Mahfuzur Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `bannedlist`
--

CREATE TABLE `bannedlist` (
  `accountid` varchar(5) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `bannedtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannedlist`
--

INSERT INTO `bannedlist` (`accountid`, `accountname`, `reason`, `bannedtime`) VALUES
('202', 'jane_s', 'Inappropriate', '7th January 2025'),
('204', 'emily_w', 'Inappropriate', '7th January 2025'),
('205', 'chris_g', 'Misleading Content', '7th January 2025');

-- --------------------------------------------------------

--
-- Table structure for table `boastpost`
--

CREATE TABLE `boastpost` (
  `postid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `postdetails` varchar(50) NOT NULL,
  `postType` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boastpost`
--

INSERT INTO `boastpost` (`postid`, `userid`, `postdetails`, `postType`, `Status`, `Username`) VALUES
('P002', 'U002', 'A thought for the day: Stay positive!', 'text', 'Deactive', 'JaneSmith'),
('P003', 'U003', 'Captured this amazing sunset today!', 'image', 'Deactive', 'MikeBrown'),
('P004', 'U004', 'How to stay productive while working remotely.', 'text', 'Deactive', 'EmilyClark'),
('P005', 'U005', 'My recent travel experience to the mountains.', 'image', 'Deactive', 'AliceGreen'),
('P006', 'U006', 'Best workout tips to stay in shape!', 'text', 'Deactive', 'BobWhite'),
('P007', 'U007', 'Check out this delicious recipe I tried.', 'image', 'Active', 'ClaraBlue'),
('P008', 'U008', 'Just finished reading a great book on leadership.', 'text', 'Deactive', 'DanielYellow'),
('P009', 'U009', 'Amazing view from the top of the skyscraper.', 'image', 'Active', 'EvaRed'),
('P010', 'U010', 'Weekend plans: Hiking with friends.', 'text', 'Active', 'FrankPurple');

-- --------------------------------------------------------

--
-- Table structure for table `complainbox`
--

CREATE TABLE `complainbox` (
  `complaintname` varchar(50) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `postdetails` varchar(1000) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `accountid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainbox`
--

INSERT INTO `complainbox` (`complaintname`, `accountname`, `postdetails`, `complaint`, `postid`, `accountid`) VALUES
('Sophia Gray', 'sophia_g', 'Post with suspicious links', 'Spam', '106', '206');

-- --------------------------------------------------------

--
-- Table structure for table `deletedpost`
--

CREATE TABLE `deletedpost` (
  `postid` varchar(5) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `deletedtime` varchar(50) NOT NULL,
  `posttime` varchar(50) NOT NULL,
  `postdetails` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deletedpost`
--

INSERT INTO `deletedpost` (`postid`, `accountname`, `deletedtime`, `posttime`, `postdetails`) VALUES
('1', 'iju ijaj', '23 feb 2024', '23 march 2024', 'Sheikh hasi came back'),
('2', 'kazi ', '25 feb 2024', '26 feb 2026', 'dr. unus dies'),
('204', 'emily_w', '7th January 2025', '1st January 2025', 'Post about street lights'),
('201', 'john_d', '7th January 2025', '1st January 2025', 'Post about product promotion'),
('203', 'mike_b', '7th January 2025', '1st January 2025', 'Repeated posting of the same content');

-- --------------------------------------------------------

--
-- Table structure for table `premiumaccountrequest`
--

CREATE TABLE `premiumaccountrequest` (
  `username` varchar(50) NOT NULL,
  `Paccountname` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `websitename` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `enddate` date NOT NULL,
  `remDays` int(5) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premiumaccountrequest`
--

INSERT INTO `premiumaccountrequest` (`username`, `Paccountname`, `url`, `websitename`, `type`, `enddate`, `remDays`, `Active`) VALUES
('test', 'Somoy TV', 'https://example.com', 'Somoy', 'Media Channel', '2025-01-31', -26, 1),
('john_doe', 'BBC News', 'https://bbc.com', 'BBC Official', 'Online Portal', '2025-01-31', -25, 1),
('jane_smith', 'The Times', 'https://thetimes.co.uk', 'The Times UK', 'Newspaper', '2025-02-15', -40, 1),
('mike_brown', 'CNN', 'https://cnn.com', 'CNN Media', 'Media Channel', '2025-03-01', -54, 0),
('emily_white', 'TechCrunch', 'https://techcrunch.com', 'TechCrunch Portal', 'Online Portal', '2025-01-20', -14, 0),
('chris_green', 'The Guardian', 'https://theguardian.com', 'Guardian News', 'Newspaper', '2025-02-05', -30, 0),
('sophia_gray', 'Fox News', 'https://foxnews.com', 'Fox Media', 'Media Channel', '2025-03-10', -63, 0),
('test', 'Jamuna News', 'https://JamunaTv.com', 'JamunaTV', 'Media Channel', '2024-12-29', 19, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannedlist`
--
ALTER TABLE `bannedlist`
  ADD PRIMARY KEY (`accountid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
