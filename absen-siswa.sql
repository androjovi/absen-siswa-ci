-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2017 at 03:45 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen-siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_siswa`
--

CREATE TABLE `absen_siswa` (
  `nis` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `dari_tanggal` varchar(10) NOT NULL,
  `sampai_tanggal` varchar(10) NOT NULL,
  `waktu_submit` time NOT NULL,
  `ais` varchar(10) NOT NULL COMMENT 'a=alpha,s=sakit,i=izin',
  `status` varchar(20) NOT NULL DEFAULT '0' COMMENT '1= TRUE, 0=FALSE',
  `kelas` varchar(200) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `masuk` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_siswa`
--

INSERT INTO `absen_siswa` (`nis`, `nama`, `alasan`, `dari_tanggal`, `sampai_tanggal`, `waktu_submit`, `ais`, `status`, `kelas`, `jurusan`, `masuk`) VALUES
(234234, 'Joviandor nopier marbun', 'Sakit keran', '2017-09-10', '2017-09-10', '19:58:36', 'i', '0', '12', 'RPL', '0'),
(332323, 'Saddil ramdani', 'Main bola', '2017-09-15', '2017-09-17', '20:33:28', 'i', '0', '12', 'TSM', '0'),
(3242343, 'Yiek alfian rifky ananda', 'azz mager', '2017-09-12', '2017-09-14', '20:15:55', 'a', '0', '12', 'RPL', '0'),
(3423432, 'Fahrizal ', 'Masuk angin', '2017-09-06', '2017-09-10', '20:42:27', 's', '0', '12', 'RPL', '0'),
(3432423, 'Kevin hendra wijaya', 'Nenek sakit demam', '2017-09-07', '2017-09-08', '10:55:37', 'i', '0', '12', 'RPL', '0'),
(21321312, 'Fadlawalad zo carli', 'zzzzz', '2017-09-11', '2017-09-15', '11:48:31', 's', '0', '12', 'RPL', '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `posisi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id`, `nama`, `password`, `posisi`) VALUES
(6, 'Joviandro nopier marbun', '3376db48b9ea2d61a65b7b40a8897e8a', 'm'),
(7, 'Fadlawalad dimas zo carli', '960eae42eb6adabf8751ec9460ae03f5', 'a'),
(8, 'Yiek alfian rifki ananda', '6545350732e410313f4c5c71fb553b98', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp_ortu` int(15) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `golongan_dar` varchar(3) NOT NULL,
  `no_telp_siswa` int(15) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `status_absen` varchar(20) NOT NULL DEFAULT 'masuk'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama_lengkap`, `alamat`, `no_telp_ortu`, `kelas`, `tempat_lahir`, `tgl_lahir`, `golongan_dar`, `no_telp_siswa`, `jurusan`, `status_absen`) VALUES
(234234, 'Joviandor nopier marbun', 'adsadsadsadJLAMD', 2444432, '12', 'Bogot', '2017-09-05', 'O', 24444333, 'RPL', 'tidak,verif'),
(332323, 'Saddil ramdani', 'asdsadsad', 24443, '12', 'Bogot', '2017-09-13', 'AB', 333322, 'TSM', 'tidak'),
(3242343, 'Yiek alfian rifky ananda', 'Jl.lengkong wetan', 2222, '12', 'jayapura', '2017-09-13', 'B', 999999, 'RPL', 'tidak'),
(3423432, 'Fahrizal ', 'asdsad', 34234, '12', 'sdfsdfdsfsd', '2017-09-12', 'O', 343543, 'RPL', 'tidak,verif'),
(3432423, 'Kevin hendra wijaya', 'asdasdsa', 21321, '12', 'Bogor', '2017-08-23', 'O', 432432, 'RPL', 'tidak,verif'),
(21321312, 'Fadlawalad zo carli', 'sadasdas', 2423432, '12', 'Tangerang ', '2017-08-10', 'A', 21321321, 'RPL', 'tidak,verif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_siswa`
--
ALTER TABLE `absen_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
