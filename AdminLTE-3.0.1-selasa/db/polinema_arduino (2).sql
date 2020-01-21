-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 01:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polinema_arduino`
--

-- --------------------------------------------------------

--
-- Table structure for table `lat_user`
--

CREATE TABLE IF NOT EXISTS `lat_user` (
`id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lat_user`
--

INSERT INTO `lat_user` (`id`, `nama`, `uname`, `pass`, `level`) VALUES
(32, 'a', 'a', '1', 1),
(33, 'Siska Dea', 'siskadea__', 'siskadea', 1),
(34, 'a', 'a', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lat_user_lvl`
--

CREATE TABLE IF NOT EXISTS `lat_user_lvl` (
`id` int(11) NOT NULL,
  `lvl_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lat_user_lvl`
--

INSERT INTO `lat_user_lvl` (`id`, `lvl_name`) VALUES
(1, 'Admin'),
(2, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE IF NOT EXISTS `produksi` (
`id_produksi` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_sensor`, `waktu`) VALUES
(3, 1, '2020-01-09 03:08:07'),
(5, 1, '2020-01-09 03:08:09'),
(45, 1, '2020-01-09 03:08:11'),
(46, 1, '2020-01-09 03:08:13'),
(82, 1, '2020-01-09 03:08:18'),
(89, 1, '2020-01-09 10:12:49'),
(90, 1, '2020-01-09 10:12:58'),
(91, 1, '2020-01-09 10:13:00'),
(93, 1, '2020-01-10 03:08:13'),
(96, 1, '2020-01-10 20:12:14'),
(97, 1, '2020-01-10 23:27:00'),
(98, 1, '2020-01-10 09:06:00'),
(99, 1, '2020-01-10 23:59:59'),
(101, 1, '2020-01-11 03:08:07'),
(102, 1, '2020-02-24 06:16:00'),
(103, 1, '2019-12-27 23:14:00'),
(104, 1, '2020-01-13 04:05:01'),
(105, 1, '2020-01-14 02:00:00'),
(106, 1, '2020-01-13 23:59:59'),
(107, 1, '2020-01-14 06:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE IF NOT EXISTS `sensor` (
`id_sensor` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `lokasi`, `keterangan`) VALUES
(1, 'pindad', 'mesin 1\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lat_user`
--
ALTER TABLE `lat_user`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`);

--
-- Indexes for table `lat_user_lvl`
--
ALTER TABLE `lat_user_lvl`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
 ADD PRIMARY KEY (`id_produksi`), ADD KEY `id_sensor` (`id_sensor`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
 ADD PRIMARY KEY (`id_sensor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lat_user`
--
ALTER TABLE `lat_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `lat_user_lvl`
--
ALTER TABLE `lat_user_lvl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lat_user`
--
ALTER TABLE `lat_user`
ADD CONSTRAINT `lat_user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `lat_user_lvl` (`id`);

--
-- Constraints for table `produksi`
--
ALTER TABLE `produksi`
ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`id_sensor`) REFERENCES `sensor` (`id_sensor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
