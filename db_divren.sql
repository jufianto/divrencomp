-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2017 at 03:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_divren`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `no_nota` varchar(25) NOT NULL,
  `kerusakan` text NOT NULL,
  `harga` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `no_nota`, `kerusakan`, `harga`) VALUES
(10, '1705051', 'mati total', 0),
(11, '17050513', 'dfgd', 0),
(12, '17050514', 'Blank On', 800000),
(13, '17050515', 'asda', 0),
(14, '17050516', 'asdas', 0),
(15, '17050517', 'adsas', 0),
(16, '17050518', 'adsas', 0),
(17, '17050519', 'asdasda', 0),
(18, '17050520', 'asdas', 0),
(19, '17051118', 'asda', 0),
(20, '17051119', 'dsf', 0),
(21, '17051120', 'asda', 0),
(22, '17051121', 'sfsdfds', 0),
(23, '17051122', 'asfa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Laptop'),
(2, 'CPU'),
(3, 'Monitor'),
(4, 'Printer'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `jenis_pelanggan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `jenis_pelanggan`) VALUES
(1, 'Umum'),
(2, 'Toko');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id_servis` int(11) NOT NULL,
  `no_nota` varchar(15) NOT NULL,
  `id_pelanggan` int(11) NOT NULL DEFAULT '1',
  `tgl_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_pelanggan` varchar(50) NOT NULL,
  `tipe` varchar(24) NOT NULL,
  `kategori` varchar(24) NOT NULL,
  `kontak` varchar(25) NOT NULL,
  `kelengkapan` varchar(244) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id_servis`, `no_nota`, `id_pelanggan`, `tgl_order`, `nama_pelanggan`, `tipe`, `kategori`, `kontak`, `kelengkapan`, `status`) VALUES
(14, '17050514', 1, '2017-05-05 17:25:15', 'Jufi', 'asd', '1', '80800', 'dsada', 1),
(16, '17050516', 1, '2017-05-05 17:27:33', 'asd', 'asd', '4', 'da', 'dasd', 0),
(17, '17050517', 1, '2017-05-05 17:28:28', 'asdfds', 'asdasd', '4', 'asfdas', 'asdasda', 4),
(18, '17051118', 1, '2017-05-11 10:17:59', 'TITO', 'sad', '1', 'as', 'sad', 4),
(19, '17051119', 1, '2017-05-11 10:24:33', 'asf', 'fasdfk', '1', 'das', 'fadsk', 0),
(20, '17051120', 1, '2017-05-11 10:24:39', 'asd', 'da', '1', 'das', 'dsad', 0),
(21, '17051121', 1, '2017-05-11 10:25:06', 'asdsdf', 'sdfds', '1', 'sdfs', 'sdfs', 0),
(22, '17051122', 1, '2017-05-11 10:27:01', 'afsasf', 'dasf', '1', 'adsf', 'fadf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` int(3) NOT NULL,
  `tgl_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_sparepart` varchar(40) NOT NULL,
  `harga_sparepart` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `tgl_order`, `nama_sparepart`, `harga_sparepart`) VALUES
(1, '2017-05-11 09:13:45', 'RAM', 400000),
(2, '2017-05-11 11:20:24', 'asd', 0),
(3, '2017-05-11 11:20:29', 'sad', 0),
(4, '2017-05-11 11:23:36', 'dasdas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin1', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_sparepart` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
