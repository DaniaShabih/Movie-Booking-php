-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 02:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Id`, `Name`, `Email`, `Address`, `City`, `State`, `Zip`) VALUES
(11, 'Munib', 'MunibShabih@gmail.com', 'abcdedfgkso', 'Karachi', 'Sindh', '1234567'),
(12, 'Munib', 'MunibShabih@gmail.com', 'abcdedfgkso', 'Karachi', 'Sindh', '1234567'),
(13, 'Munib', 'MunibShabih@gmail.com', 'abcdedfgkso', 'Karachi', 'Sindh', '1234567'),
(14, 'Usama', 'usama@gmail.com', '1234455', 'Karachi', 'Pakistan', '121234'),
(15, 'ali', 'princehani2209@gmail.com', 'wsjdhwejkldfw', 'fhwdhfwdf', 'dfwef', 'fwfew'),
(16, 'ali', 'princehani2209@gmail.com', 'wsjdhwejkldfw', 'fhwdhfwdf', 'dfwef', 'fwfew'),
(17, 'ali', 'princehani2209@gmail.com', 'wsjdhwejkldfw', 'fhwdhfwdf', 'dfwef', 'fwfew'),
(18, 'asma', 'gfngn@gmail.com', '213412dwdsad', 'fdcweqr23', '2edwqd', 'dqwd'),
(19, 'dania', 'gfngn@gmail.com', 'nghngh', 'nhgndfh', 'hfjf', 'fjhf'),
(20, 'asma', 'gfngn@gmail.com', '3423r2ef234f', 'ferfgr', 'vfqw', 'wqvwq'),
(21, 'asma', 'princehani2209@gmail.com', 'North Nazimabad', 'Pakistan', 'Sindh', '1090');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Movie` varchar(100) NOT NULL,
  `Genres` varchar(100) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `ChildrenSeat` int(11) NOT NULL,
  `AdultSeat` int(11) NOT NULL,
  `Seats` int(11) NOT NULL,
  `ChildrenAge` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `BookingDate` varchar(100) NOT NULL,
  `TotalPrice` varchar(100) NOT NULL,
  `DiscountPrice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `Name`, `Movie`, `Genres`, `Language`, `Date`, `Time`, `Category`, `ChildrenSeat`, `AdultSeat`, `Seats`, `ChildrenAge`, `Location`, `City`, `BookingDate`, `TotalPrice`, `DiscountPrice`) VALUES
(74, '', 'Inception', 'Documentary', 'English', '2021-03-16', '15:00', 'Platinum', 1, 1, 2, '3 to 12', 'PAF', 'Islamabad', '14-03-2021', '1200', '950'),
(75, '', 'The Godfather', 'Fiction', 'English', '2021-03-16', '15:00', 'Platinum', 1, 1, 2, '3 to 12', 'DHA', 'Islamabad', '14-03-2021', '1200', '950'),
(76, '', 'The Godfather', 'Fiction', 'English', '2021-03-16', '15:00', 'Platinum', 1, 2, 3, '3 to 12', 'DHA', 'Islamabad', '14-03-2021', '1900', '1650'),
(77, '', 'Guardians of the Galaxy', 'Mystery', 'English', '2021-03-16', '15:00', 'Platinum', 1, 1, 2, '3 to 12', 'DHA', 'Islamabad', '14-03-2021', '1200', '950'),
(78, '', 'IT', 'Horror', 'English', '2021-03-16', '15:00', 'Platinum', 2, 4, 6, '3 to 12', 'DHA', 'Islamabad', '14-03-2021', '3800', '3300'),
(79, '', 'SKYFALL: EVIL OF BOSS', 'Romance', 'English', '2021-03-16', '15:00', 'Platinum', 1, 4, 5, '3 to 12', 'DHA', 'Islamabad', '14-03-2021', '3300', '3050'),
(80, '', 'OBLIVION', 'Thriller', 'English', '2021-03-16', '15:00', 'Box', 1, 1, 2, '3 to 12', 'DHA', 'Islamabad', '15-03-2021', '1200', '950'),
(81, '', 'SKYFALL: EVIL OF BOSS', 'Romance', 'English', '2021-03-16', '15:00', 'Platinum', 1, 1, 2, '3 to 12', 'DHA', 'Islamabad', '15-03-2021', '1200', '950'),
(82, 'dania', 'THE FOREST', 'Horror', 'English', '2021-03-16', '15:00', 'Platinum', 1, 2, 3, '3 to 12', 'DHA', 'Islamabad', '15-03-2021', '1900', '1650'),
(83, 'dania', 'THE FOREST', 'Horror', 'English', '2021-03-16', '15:00', 'Platinum', 1, 2, 3, '3 to 12', 'DHA', 'Islamabad', '15-03-2021', '1900', '1650'),
(84, 'dania', 'THE FOREST', 'Horror', 'English', '2021-03-16', '15:00', 'Platinum', 1, 2, 3, '3 to 12', 'DHA', 'Islamabad', '15-03-2021', '1900', '1650');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `CardNo` varchar(100) NOT NULL,
  `ExpMonth` varchar(100) NOT NULL,
  `ExpYear` varchar(100) NOT NULL,
  `Cvv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`Id`, `Name`, `CardNo`, `ExpMonth`, `ExpYear`, `Cvv`) VALUES
(67, 'Dania', '1111111111111', 'october', '11111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Hall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`Id`, `Name`, `City`, `Location`, `Hall`) VALUES
(2, 'Nueplex', 'Islamabad', 'DHA', 37),
(5, 'Cinepax', 'Karachi', 'PAF', 32);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Id` int(11) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`Id`, `Age`, `Discount`) VALUES
(1, '3 to 12', '50%');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Genres` varchar(100) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `ReleaseDate` varchar(100) NOT NULL,
  `Actors` varchar(100) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Trailer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Id`, `Name`, `Genres`, `Language`, `ReleaseDate`, `Actors`, `Director`, `Rating`, `Image`, `Trailer`) VALUES
(9, 'OBLIVION', 'Thriller', 'English', '2021-03-01', 'Katrina Kaif', 'Shah Rukh Khan', '7.8', 'images/mv-it1.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(10, 'In To The Wild', 'Thriller', 'English', '2021-03-03', 'Katrina Kaif', 'Shah Rukh Khan', '8.1', 'images/mv-it2.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(11, 'MULHOLLAND PRIDE', 'Comedy', 'English', '2021-03-18', 'Katrina Kaif', 'Shah Rukh Khan', '7.2', 'images/mv-it3.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(12, 'BLADE RUNNER', 'Drama', 'English', '2021-03-11', 'Katrina Kaif', 'Shoaib', '7.3', 'images/mv-it4.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(13, 'THE FOREST', 'Horror', 'English', '2021-02-11', 'Katrina Kaif', 'Shoaib', '7.4', 'images/mv-it5.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(14, 'SKYFALL: EVIL OF BOSS', 'Romance', 'English', '2021-03-03', 'Katrina Kaif', 'Shoaib', '7.0', 'images/mv-it6.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(15, 'IT', 'Horror', 'English', '2021-01-12', 'Katrina Kaif', 'Shah Rukh Khan', '8.1', 'images/mv-it7.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(16, 'Inception', 'Documentary', 'English', '2020-10-14', 'Katrina Kaif', 'Shah Rukh Khan', '7.5', 'images/mv-it8.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(18, 'Harry Potter', 'Drama', 'English', '2020-08-05', 'Katrina Kaif', 'Shah Rukh Khan', '8.9', 'images/mv-it10.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(19, 'Guardians of the Galaxy', 'Mystery', 'English', '2020-07-15', 'Katrina Kaif', 'Shoaib', '7.7', 'images/mv-it11.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(20, 'The Godfather', 'Fiction', 'English', '2020-03-31', 'Katrina Kaif', 'Shah Rukh Khan', '8.1', 'images/mv-it12.jpg', 'images/TOM & JERRY - Official Trailer.mp4'),
(22, 'Jurassic Park', 'Documentary', 'English', '2021-03-03', 'Katrina Kaif', 'Shah Rukh Khan', '8.1', 'images/mv-it9.jpg', 'images/TOM & JERRY - Official Trailer.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movieshow`
--

CREATE TABLE `movieshow` (
  `Id` int(11) NOT NULL,
  `Movie` varchar(100) NOT NULL,
  `StartTime` varchar(100) NOT NULL,
  `EndTime` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieshow`
--

INSERT INTO `movieshow` (`Id`, `Movie`, `StartTime`, `EndTime`, `Date`) VALUES
(10, 'OBLIVION', '15:00', '18:00', '2021-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `PhoneNumber`, `Role`) VALUES
(1, 'dania', 'dania.shabih@live.com', 'asd', '03014209211', 'Visitor'),
(2, 'farah', 'Farah@gmail.com', 'abc', '03014209211', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `movieshow`
--
ALTER TABLE `movieshow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `movieshow`
--
ALTER TABLE `movieshow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
