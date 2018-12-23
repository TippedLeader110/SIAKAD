-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 08:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` bigint(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(20) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `alamat_ayah` text,
  `alamat_ibu` text,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `pict` text,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `alamat`, `email`, `jurusan`, `asal_sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_hp_ayah`, `no_hp_ibu`, `anak_ke`, `pict`, `tanggal_lahir`, `tempat`, `tahun`) VALUES
(2222, '', '', '', 'Jenis Kelami', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', 0, '/gambar/2222', '', '', ''),
(171402067, 'bayhaqi101', 'bayha101', 'Muhammad Bayhaqi Daulay', 'Laki-laki', 'adjwkandajda', 'bayhaqi101@gmail.com', 'IPA', 'SMA', NULL, 'dawdad', 'awdadwa', 'dawdadw', 'dawdada', 'awdadad', 'dadadaw', 'adawdad', 'dawdad', 0, '171402067', '2018-12-29', 'awdadaw', 'adawdad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
