-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 12:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petassure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adoptionimage`
--

CREATE TABLE `adoptionimage` (
  `imgid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appNo` int(20) NOT NULL,
  `appoDate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appNo`, `appoDate`, `clientid`, `spid`, `startTime`, `endTime`, `description`) VALUES
(1, '2022-01-02', 1, 1, '00:00:05', '00:00:06', 'hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello ');

-- --------------------------------------------------------

--
-- Table structure for table `boardingimage`
--

CREATE TABLE `boardingimage` (
  `imgId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `fnameClient` varchar(100) NOT NULL,
  `nicClient` varchar(15) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `emailClient` varchar(50) NOT NULL,
  `mobileClient` int(10) NOT NULL,
  `addressClient` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `clientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`fnameClient`, `nicClient`, `uname`, `emailClient`, `mobileClient`, `addressClient`, `password`, `clientid`) VALUES
('Amal', '996587758V', 'amal', 'amal@gmail.com', 711264562, 'katugastota', '1234@Abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `crossing`
--

CREATE TABLE `crossing` (
  `postid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `imgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crossingimage`
--

CREATE TABLE `crossingimage` (
  `imgid` int(11) NOT NULL,
  `image` varchar(75) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(15) NOT NULL,
  `spid` int(15) NOT NULL,
  `clientid` int(5) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `content` text NOT NULL,
  `submit_date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `spid`, `clientid`, `rating`, `content`, `submit_date`, `name`, `page_id`) VALUES
(3, 0, 0, 2, 'dfdfd', '2023-02-06 13:45:27', 'Ishini Ekanayake', 1),
(4, 0, 0, 5, 'xsds', '2023-02-06 13:46:50', 'ishini', 1),
(5, 0, 0, 4, 'hbhvhvbvd', '2023-02-06 14:03:01', 'teek teek', 1),
(6, 0, 0, 5, 'dfgh', '2023-02-06 14:05:00', 'ishini', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groomerimage`
--

CREATE TABLE `groomerimage` (
  `imgId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotelimage`
--

CREATE TABLE `hotelimage` (
  `imgId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotelreview`
--

CREATE TABLE `hotelreview` (
  `hotelname` varchar(100) NOT NULL,
  `reviewID` varchar(15) NOT NULL,
  `rating` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `districts` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `imgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notiId` int(15) NOT NULL,
  `clientid` int(15) NOT NULL,
  `spid` int(15) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `clientid` int(11) NOT NULL,
  `invoiceno` int(11) NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `paymentstatus` tinyint(1) NOT NULL,
  `appNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petsitting`
--

CREATE TABLE `petsitting` (
  `sitterId` int(11) NOT NULL,
  `spId` int(11) NOT NULL,
  `imgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petsittingimages`
--

CREATE TABLE `petsittingimages` (
  `imgId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `posttype` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `datectreated` date NOT NULL,
  `breed` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `postid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  `contactno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellingimage`
--

CREATE TABLE `sellingimage` (
  `imgid` int(11) NOT NULL,
  `image` varchar(75) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `spid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(25) NOT NULL,
  `details` varchar(100) NOT NULL,
  `stype` varchar(25) NOT NULL,
  `proofs` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`spid`, `fname`, `nic`, `uname`, `mobile`, `password`, `address`, `district`, `details`, `stype`, `proofs`, `email`) VALUES
(1, 'Ishini  ekanayake', '995594687V', 'ishini', 714564545, 'ishINI@28', 'Kandy', 'kandy  ', 'hellohellohellohellohellohellohellohellohellohellohellohellohellohellohello    ', 'vet', '', 'ishininuwanthika75@gmail.com    ');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vetid` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `imgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vetimage`
--

CREATE TABLE `vetimage` (
  `imgId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vetimage`
--

INSERT INTO `vetimage` (`imgId`, `name`, `image`) VALUES
(10, 'hello', '63df705f3880c.jpg'),
(11, '', '63df71dcc10b6.jpg'),
(12, '', '63df724276d79.jpg'),
(13, '', '63df726524992.jpg'),
(14, '54', '63df72c0ebc70.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `adoptionimage`
--
ALTER TABLE `adoptionimage`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appNo`),
  ADD KEY `appointment1` (`spid`),
  ADD KEY `appointment2` (`clientid`);

--
-- Indexes for table `boardingimage`
--
ALTER TABLE `boardingimage`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `crossing`
--
ALTER TABLE `crossing`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `imgId` (`imgId`),
  ADD KEY `crossing` (`clientid`);

--
-- Indexes for table `crossingimage`
--
ALTER TABLE `crossingimage`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `feedback` (`clientid`),
  ADD KEY `feedback1` (`spid`);

--
-- Indexes for table `groomerimage`
--
ALTER TABLE `groomerimage`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `hotelimage`
--
ALTER TABLE `hotelimage`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `hotelreview`
--
ALTER TABLE `hotelreview`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `hotelView` (`imgId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notiId`),
  ADD KEY `noti_2` (`clientid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`invoiceno`),
  ADD KEY `payment` (`clientid`),
  ADD KEY `payment1` (`appNo`);

--
-- Indexes for table `petsitting`
--
ALTER TABLE `petsitting`
  ADD PRIMARY KEY (`sitterId`);

--
-- Indexes for table `petsittingimages`
--
ALTER TABLE `petsittingimages`
  ADD PRIMARY KEY (`imgId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `post` (`clientid`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `selling` (`clientid`);

--
-- Indexes for table `sellingimage`
--
ALTER TABLE `sellingimage`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`vetid`),
  ADD KEY `imgId` (`imgId`);

--
-- Indexes for table `vetimage`
--
ALTER TABLE `vetimage`
  ADD PRIMARY KEY (`imgId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boardingimage`
--
ALTER TABLE `boardingimage`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crossing`
--
ALTER TABLE `crossing`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groomerimage`
--
ALTER TABLE `groomerimage`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotelimage`
--
ALTER TABLE `hotelimage`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notiId` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `invoiceno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petsitting`
--
ALTER TABLE `petsitting`
  MODIFY `sitterId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `vetid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vetimage`
--
ALTER TABLE `vetimage`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment1` FOREIGN KEY (`spid`) REFERENCES `serviceprovider` (`spid`),
  ADD CONSTRAINT `appointment2` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);

--
-- Constraints for table `crossing`
--
ALTER TABLE `crossing`
  ADD CONSTRAINT `crossing` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `crossing_ibfk_2` FOREIGN KEY (`imgId`) REFERENCES `crossingimage` (`imgid`);

--
-- Constraints for table `hotelreview`
--
ALTER TABLE `hotelreview`
  ADD CONSTRAINT `hotelView` FOREIGN KEY (`imgId`) REFERENCES `hotelimage` (`imgId`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `noti_2` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `payment1` FOREIGN KEY (`appNo`) REFERENCES `appointment` (`appNo`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);

--
-- Constraints for table `selling`
--
ALTER TABLE `selling`
  ADD CONSTRAINT `selling` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
