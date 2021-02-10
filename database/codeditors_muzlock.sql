-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 12:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeditors_muzlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'Admin', 'admin@example.com', '$2y$10$cMOb2YbCEjatZ5wIdpmCj.70sQ1WoQfuyEyq8MHSscqdGw3bgAMjG');

-- --------------------------------------------------------

--
-- Table structure for table `blocked`
--

CREATE TABLE `blocked` (
  `block_id` int(11) NOT NULL,
  `block_by` int(11) NOT NULL,
  `user_blocked` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocked`
--

INSERT INTO `blocked` (`block_id`, `block_by`, `user_blocked`) VALUES
(1, 15, 4),
(2, 15, 2),
(3, 15, 6),
(4, 1, 10),
(5, 1, 2),
(6, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `fav_id` int(11) NOT NULL,
  `fav_by` int(11) NOT NULL,
  `user_fav` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`fav_id`, `fav_by`, `user_fav`) VALUES
(15, 1, 4),
(20, 1, 13),
(19, 1, 6),
(18, 19, 19),
(5, 1, 2),
(17, 18, 18),
(16, 15, 15),
(21, 1, 7),
(22, 1, 32),
(23, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `like_id` int(11) NOT NULL,
  `like_by` int(11) NOT NULL,
  `user_like` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`like_id`, `like_by`, `user_like`) VALUES
(1, 1, 2),
(2, 15, 12),
(3, 15, 1),
(4, 15, 2),
(5, 15, 8),
(6, 15, 5),
(7, 15, 16),
(8, 15, 13),
(9, 15, 14),
(10, 15, 9),
(11, 15, 4),
(12, 15, 3),
(13, 15, 10),
(14, 15, 7),
(15, 15, 6),
(16, 15, 11),
(17, 15, 0),
(18, 1, 7),
(19, 1, 16),
(20, 1, 15),
(21, 1, 3),
(22, 1, 14),
(23, 15, 15),
(24, 18, 9),
(25, 18, 2),
(26, 19, 2),
(27, 19, 17),
(28, 19, 10),
(29, 29, 17),
(30, 1, 10),
(31, 1, 19),
(32, 1, 9),
(33, 1, 6),
(34, 1, 12),
(35, 1, 18),
(36, 32, 9),
(37, 32, 10),
(38, 32, 12),
(39, 32, 5),
(40, 32, 15),
(41, 1, 29),
(42, 15, 29),
(43, 15, 18),
(44, 15, 30),
(45, 15, 31),
(46, 15, 19),
(47, 1, 13),
(48, 1, 31),
(49, 1, 4),
(50, 1, 5),
(51, 1, 17),
(52, 1, 8),
(53, 1, 32),
(54, 1, 1),
(55, 15, 17);

-- --------------------------------------------------------

--
-- Table structure for table `unliked`
--

CREATE TABLE `unliked` (
  `unlike_id` int(11) NOT NULL,
  `unlike_by` int(11) NOT NULL,
  `user_unlike` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unliked`
--

INSERT INTO `unliked` (`unlike_id`, `unlike_by`, `user_unlike`) VALUES
(12, 19, 3),
(11, 19, 7),
(10, 18, 4),
(9, 18, 6),
(8, 15, 7),
(7, 15, 15),
(13, 19, 6),
(14, 29, 12),
(15, 1, 19),
(16, 1, 4),
(17, 1, 15),
(18, 1, 7),
(19, 1, 8),
(20, 1, 5),
(21, 1, 1),
(22, 1, 31),
(23, 1, 12),
(24, 1, 6),
(25, 1, 2),
(26, 1, 11),
(27, 1, 16),
(28, 1, 9),
(29, 1, 30),
(30, 1, 14),
(31, 15, 5),
(32, 15, 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_age` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_sect` varchar(255) NOT NULL,
  `user_revert` varchar(255) NOT NULL,
  `user_religion` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_lang` varchar(255) NOT NULL,
  `user_origin` varchar(255) NOT NULL,
  `user_smoke` varchar(255) NOT NULL,
  `user_jobTitle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_email`, `user_pass`, `user_name`, `user_img`, `user_age`, `user_country`, `user_sect`, `user_revert`, `user_religion`, `user_phone`, `user_gender`, `user_dob`, `user_lang`, `user_origin`, `user_smoke`, `user_jobTitle`) VALUES
(1, 'demo@gmail.com', '111', 'Demo Check', 'https://firebasestorage.googleapis.com/v0/b/trybelocker.appspot.com/o/rn_image_picker_lib_temp_1fff97ba-0580-4a7d-aba8-17ffca7ad0c2.jpg?alt=media', '33', 'Pakistan', 'Shia', 'No', 'Moderately', 'not specfied', 'not specfied', 'not specfied', 'English', 'United States', 'Yes', 'Free consultation'),
(2, 'check@gmail.com', '111', 'Check Account', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhJf7pFtfzhyHnrId1-RNhaAt72Uvmb5NmCw&usqp=CAU', '25', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(3, 'sameershk819@gmail.com', 'passcode1212', 'Sameer', 'https://picsum.photos/200', '26', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(4, 'sameershk819@gmail.com', 'passcode1212', 'Sameer chun', 'https://ali2ksa.files.wordpress.com/2015/01/wpid-dashing-boys-wallpapers-jpg.jpeg', '26', 'Sindh', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(5, 'aaa@gmail.com', '111', 'Ahsan Ali Jafri', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(6, 'aba@gmail.com', '111', 'Ahsan', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(7, 'aleem@gmail.com', '111', 'aleem', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Bengali', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(8, 'king@gmail.com', '111', 'king', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '03153795418', 'Male', 'Wed Mar 17 1976 21:46:00 GMT 0500 (Pakistan Standard Time)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(9, 'abba@gmail.com', '111', 'Ahsan', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(10, 'democheck123@gmail.com', '111', 'demo123@gmail.com', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '03153795418', 'Female', 'Tue Jun 08 1965 22:02:00 GMT 0500 (Pakistan Standard Time)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(11, 'aaaaa@gmail.com', '111', 'Ahsan', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(12, 'aba@gmail.co', '111', 'Ahsan', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(13, 'aba@gmail.c', '111', 'Ahsan', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(14, 'jaf@gmail.com', '111', 'jaff', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '123456789', 'Female', 'Tue May 14 2024 22:45:00 GMT 0500 (Pakistan Standard Time)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(15, 'demo1@gmail.com', '111', 'Demo1', 'https://firebasestorage.googleapis.com/v0/b/trybelocker.appspot.com/o/rn_image_picker_lib_temp_2fefbf32-7f98-4e76-bd70-9b1cada0ba90.jpg?alt=media', '', 'Pakistan', 'Other', 'not specfied', 'Practising', '1234567', 'Female', 'Thu Jan 14 2021 22:49:41 GMT 0500 (Pakistan Standard Time)', 'English,Russian,Hindi', 'Belgium', 'Yes', 'Engineer'),
(16, 'sameershk@gmail.com', 'pass', 'sameershk', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '03321348707', 'Male', 'Thu Jul 09 1992 15:54:00 GMT 0500 (PKT)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(17, 'lion@gmail.com', '111', 'lion', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', '', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(18, 'liam@gmail.com', '111', 'Liam', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '12345', 'Female', 'Thu Jan 21 2021 21:14:29 GMT 0500 (Pakistan Standard Time)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(19, 'alee@gmail.com', '111', 'Ali', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specfied', 'not specfied', 'not specfied', '123456', 'Female', 'Thu Jan 21 2021 21:26:55 GMT 0500 (Pakistan Standard Time)', 'not specfied', 'not specfied', 'not specfied', 'not specfied'),
(32, 'lol@gmail.com', '111', 'Lalor', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specified', 'not specified', 'not specified', '1122334455', 'Female', 'Sat Jan 23 2016 13:01:00 GMT 0500 (Pakistan Standard Time)', 'not specified', 'not specified', 'not specified', 'not specified'),
(31, 'raza@gmail.com', '111', 'raza', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'not specified', 'not specified', 'not specified', 'not specified', '12345', 'Male', 'Thu Apr 23 2015 12:59:00 GMT 0500 (Pakistan Standard Time)', 'not specified', 'not specified', 'not specified', 'not specified'),
(30, 'ism@gmail.com', '111', 'Ismeil', 'https://www.kindpng.com/picc/m/77-777209_silhouetteimagesb-male-profile-pic-empty-hd-png-download.png', '', 'Pakistan', 'not specified', 'not specified', 'not specified', '111111', 'Female', 'Sat Jan 23 2021 12:42:58 GMT 0500 (Pakistan Standard Time)', 'not specified', 'not specified', 'not specified', 'not specified'),
(29, 'aaaa@gmail.com', '111', 'Jaffer', 'https://firebasestorage.googleapis.com/v0/b/trybelocker.appspot.com/o/rn_image_picker_lib_temp_26fa0597-3e7d-4c32-a73b-c0b87cf4f0c7.jpg?alt=media', '', 'Pakistan', 'Shia', 'not specified', 'Moderately', '123456', 'Female', 'Tue Jan 22 2002 21:13:00 GMT 0500 (Pakistan Standard Time)', 'Urdu,Punjabi', 'Belgium', 'No', 'Front -End Developer'),
(40, 'test2@email.com', 'pass2', 'Ahmed Salim', 'https://picsum.photos/200', '32', 'Pakistan', 'Sunni', 'No', 'Islam', '9876543210', 'Male', '2222-05-04', 'Urdu', 'Pakistan', 'No', 'Intern'),
(39, 'test@email.com', 'pass', 'Test User', 'https://picsum.photos/200', '12', 'Pakistan', 'Sunni', 'No', 'Islam', '9876543210', 'Male', '1990-12-12', 'Urdu', 'Pakistan', 'No', 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `user_inform`
--

CREATE TABLE `user_inform` (
  `inform_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_tall` varchar(255) NOT NULL,
  `user_halal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_inform`
--

INSERT INTO `user_inform` (`inform_id`, `user_id`, `user_status`, `user_tall`, `user_halal`) VALUES
(1, 15, 'Hello There Dude', '16Inch', 'yes'),
(10, 3, 'not specified', 'not specified', 'not specified'),
(9, 2, 'not specified', 'not specified', 'not specified'),
(8, 1, 'Status of marriage', 'not specified', 'not specified'),
(4, 29, 'Hello world', 'not specified', 'No'),
(5, 30, 'not specified', 'not specified', 'not specified'),
(6, 31, 'not specified', 'not specified', 'not specified'),
(7, 32, 'not specified', 'not specified', 'not specified'),
(11, 4, 'not specified', 'not specified', 'not specified'),
(12, 5, 'not specified', 'not specified', 'not specified'),
(13, 6, 'not specified', 'not specified', 'not specified'),
(14, 7, 'not specified', 'not specified', 'not specified'),
(15, 8, 'not specified', 'not specified', 'not specified'),
(16, 9, 'not specified', 'not specified', 'not specified'),
(17, 10, 'not specified', 'not specified', 'not specified'),
(18, 11, 'not specified', 'not specified', 'not specified'),
(19, 12, 'not specified', 'not specified', 'not specified'),
(20, 13, 'not specified', 'not specified', 'not specified'),
(21, 14, 'not specified', 'not specified', 'not specified'),
(22, 16, 'not specified', 'not specified', 'not specified'),
(23, 17, 'not specified', 'not specified', 'not specified'),
(24, 18, 'not specified', 'not specified', 'not specified'),
(25, 19, 'not specified', 'not specified', 'not specified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blocked`
--
ALTER TABLE `blocked`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `unliked`
--
ALTER TABLE `unliked`
  ADD PRIMARY KEY (`unlike_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_inform`
--
ALTER TABLE `user_inform`
  ADD PRIMARY KEY (`inform_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blocked`
--
ALTER TABLE `blocked`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `unliked`
--
ALTER TABLE `unliked`
  MODIFY `unlike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_inform`
--
ALTER TABLE `user_inform`
  MODIFY `inform_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
