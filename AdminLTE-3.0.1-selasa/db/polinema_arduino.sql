-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 05:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polinema_arduino`
--

-- --------------------------------------------------------

--
-- Table structure for table `lat_user`
--

CREATE TABLE `lat_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lat_user`
--

INSERT INTO `lat_user` (`id_user`, `nama`, `uname`, `pass`, `level`) VALUES
(32, 'Asri Putri', 'asri', '123', 1),
(33, 'Siska Dea', 'siskadea', 'siskadea', 1),
(34, 'siska', 'siska', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lat_user_lvl`
--

CREATE TABLE `lat_user_lvl` (
  `id` int(11) NOT NULL,
  `lvl_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `produksi` (
  `id_produksi` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(107, 1, '2020-01-14 06:07:00'),
(108, 2, '2020-01-20 23:40:00'),
(109, 2, '2020-01-21 02:00:00'),
(110, 2, '2020-01-21 11:00:00'),
(111, 3, '2020-01-21 16:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `lokasi`, `keterangan`) VALUES
(1, 'Pindad', 'Mesin 1'),
(2, 'Produksi', 'Mesin 2'),
(3, 'Dept Produksi', 'Mesin 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lat_user`
--
ALTER TABLE `lat_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `lat_user_lvl`
--
ALTER TABLE `lat_user_lvl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_sensor` (`id_sensor`);

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `lat_user_lvl`
--
ALTER TABLE `lat_user_lvl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
