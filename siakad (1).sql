-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 08:43 AM
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
-- Table structure for table `abs_agustus`
--

CREATE TABLE `abs_agustus` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_april`
--

CREATE TABLE `abs_april` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_desember`
--

CREATE TABLE `abs_desember` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_februari`
--

CREATE TABLE `abs_februari` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_januari`
--

CREATE TABLE `abs_januari` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_juli`
--

CREATE TABLE `abs_juli` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_juni`
--

CREATE TABLE `abs_juni` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_maret`
--

CREATE TABLE `abs_maret` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_mei`
--

CREATE TABLE `abs_mei` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_november`
--

CREATE TABLE `abs_november` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_oktober`
--

CREATE TABLE `abs_oktober` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abs_september`
--

CREATE TABLE `abs_september` (
  `nis` int(11) NOT NULL,
  `alpa` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nip` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `akidah_akhlak`
--

CREATE TABLE `akidah_akhlak` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biologi_p`
--

CREATE TABLE `biologi_p` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_arab`
--

CREATE TABLE `b_arab` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_indo`
--

CREATE TABLE `b_indo` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_ing`
--

CREATE TABLE `b_ing` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_jerman_p`
--

CREATE TABLE `b_jerman_p` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_p`
--

CREATE TABLE `ekonomi_p` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fikih`
--

CREATE TABLE `fikih` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fisika_p`
--

CREATE TABLE `fisika_p` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `geografi`
--

CREATE TABLE `geografi` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` text,
  `email` varchar(30) DEFAULT NULL,
  `mapel` varchar(50) DEFAULT NULL,
  `gol` varchar(12) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `wali_kelas` varchar(20) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `kode_mapel`, `username`, `password`, `nama`, `tanggal`, `jk`, `agama`, `alamat`, `email`, `mapel`, `gol`, `no_hp`, `wali_kelas`, `foto`) VALUES
(13456, 'bi10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', 'Laki-laki', 'islam', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', ''),
(15456, 'mm10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', 'Laki-laki', 'islam', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', ''),
(16756, 's10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', 'Laki-laki', 'islam', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas` varchar(50) NOT NULL,
  `tingkat` varchar(60) DEFAULT NULL,
  `jum_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kimia_p`
--

CREATE TABLE `kimia_p` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marcing_band`
--

CREATE TABLE `marcing_band` (
  `nis` int(11) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matematika`
--

CREATE TABLE `matematika` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paskibra`
--

CREATE TABLE `paskibra` (
  `nis` int(11) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjas`
--

CREATE TABLE `penjas` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pkn`
--

CREATE TABLE `pkn` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prakarya_kewirausahaan`
--

CREATE TABLE `prakarya_kewirausahaan` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pramuka`
--

CREATE TABLE `pramuka` (
  `nis` int(11) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quran_hadis`
--

CREATE TABLE `quran_hadis` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_indo`
--

CREATE TABLE `sejarah_indo` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seni_budaya`
--

CREATE TABLE `seni_budaya` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
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
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ski`
--

CREATE TABLE `ski` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sosiologi`
--

CREATE TABLE `sosiologi` (
  `nis` int(11) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terkini`
--

CREATE TABLE `terkini` (
  `id` int(11) NOT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `isi` text,
  `penulis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abs_agustus`
--
ALTER TABLE `abs_agustus`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_april`
--
ALTER TABLE `abs_april`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_desember`
--
ALTER TABLE `abs_desember`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_februari`
--
ALTER TABLE `abs_februari`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_januari`
--
ALTER TABLE `abs_januari`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_juli`
--
ALTER TABLE `abs_juli`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_juni`
--
ALTER TABLE `abs_juni`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_maret`
--
ALTER TABLE `abs_maret`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_mei`
--
ALTER TABLE `abs_mei`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_november`
--
ALTER TABLE `abs_november`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_oktober`
--
ALTER TABLE `abs_oktober`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `abs_september`
--
ALTER TABLE `abs_september`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `akidah_akhlak`
--
ALTER TABLE `akidah_akhlak`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `biologi_p`
--
ALTER TABLE `biologi_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `b_arab`
--
ALTER TABLE `b_arab`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `b_indo`
--
ALTER TABLE `b_indo`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `b_ing`
--
ALTER TABLE `b_ing`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `b_jerman_p`
--
ALTER TABLE `b_jerman_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `ekonomi_p`
--
ALTER TABLE `ekonomi_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `fikih`
--
ALTER TABLE `fikih`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `fisika_p`
--
ALTER TABLE `fisika_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `geografi`
--
ALTER TABLE `geografi`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas`);

--
-- Indexes for table `kimia_p`
--
ALTER TABLE `kimia_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `marcing_band`
--
ALTER TABLE `marcing_band`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `matematika`
--
ALTER TABLE `matematika`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `paskibra`
--
ALTER TABLE `paskibra`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `penjas`
--
ALTER TABLE `penjas`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `pkn`
--
ALTER TABLE `pkn`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `prakarya_kewirausahaan`
--
ALTER TABLE `prakarya_kewirausahaan`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `pramuka`
--
ALTER TABLE `pramuka`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `quran_hadis`
--
ALTER TABLE `quran_hadis`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `sejarah_indo`
--
ALTER TABLE `sejarah_indo`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `seni_budaya`
--
ALTER TABLE `seni_budaya`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kelas` (`kelas`);

--
-- Indexes for table `ski`
--
ALTER TABLE `ski`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `sosiologi`
--
ALTER TABLE `sosiologi`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `terkini`
--
ALTER TABLE `terkini`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abs_agustus`
--
ALTER TABLE `abs_agustus`
  ADD CONSTRAINT `abs_agustus_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_april`
--
ALTER TABLE `abs_april`
  ADD CONSTRAINT `abs_april_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_desember`
--
ALTER TABLE `abs_desember`
  ADD CONSTRAINT `abs_desember_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_februari`
--
ALTER TABLE `abs_februari`
  ADD CONSTRAINT `abs_februari_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_januari`
--
ALTER TABLE `abs_januari`
  ADD CONSTRAINT `abs_januari_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_juli`
--
ALTER TABLE `abs_juli`
  ADD CONSTRAINT `abs_juli_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_juni`
--
ALTER TABLE `abs_juni`
  ADD CONSTRAINT `abs_juni_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_mei`
--
ALTER TABLE `abs_mei`
  ADD CONSTRAINT `abs_mei_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_november`
--
ALTER TABLE `abs_november`
  ADD CONSTRAINT `abs_november_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_oktober`
--
ALTER TABLE `abs_oktober`
  ADD CONSTRAINT `abs_oktober_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `abs_september`
--
ALTER TABLE `abs_september`
  ADD CONSTRAINT `abs_september_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `akidah_akhlak`
--
ALTER TABLE `akidah_akhlak`
  ADD CONSTRAINT `akidah_akhlak_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `biologi_p`
--
ALTER TABLE `biologi_p`
  ADD CONSTRAINT `biologi_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `b_arab`
--
ALTER TABLE `b_arab`
  ADD CONSTRAINT `b_arab_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `b_indo`
--
ALTER TABLE `b_indo`
  ADD CONSTRAINT `b_indo_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `b_ing`
--
ALTER TABLE `b_ing`
  ADD CONSTRAINT `b_ing_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `b_ing_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `b_jerman_p`
--
ALTER TABLE `b_jerman_p`
  ADD CONSTRAINT `b_jerman_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ekonomi_p`
--
ALTER TABLE `ekonomi_p`
  ADD CONSTRAINT `ekonomi_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `fikih`
--
ALTER TABLE `fikih`
  ADD CONSTRAINT `fikih_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `fisika_p`
--
ALTER TABLE `fisika_p`
  ADD CONSTRAINT `fisika_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `geografi`
--
ALTER TABLE `geografi`
  ADD CONSTRAINT `geografi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `siswa` (`kelas`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kimia_p`
--
ALTER TABLE `kimia_p`
  ADD CONSTRAINT `kimia_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `matematika`
--
ALTER TABLE `matematika`
  ADD CONSTRAINT `matematika_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `penjas`
--
ALTER TABLE `penjas`
  ADD CONSTRAINT `penjas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `pkn`
--
ALTER TABLE `pkn`
  ADD CONSTRAINT `pkn_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `pkn_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `prakarya_kewirausahaan`
--
ALTER TABLE `prakarya_kewirausahaan`
  ADD CONSTRAINT `prakarya_kewirausahaan_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `prakarya_kewirausahaan_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quran_hadis`
--
ALTER TABLE `quran_hadis`
  ADD CONSTRAINT `quran_hadis_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD CONSTRAINT `sejarah_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `seni_budaya`
--
ALTER TABLE `seni_budaya`
  ADD CONSTRAINT `seni_budaya_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `seni_budaya_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ski`
--
ALTER TABLE `ski`
  ADD CONSTRAINT `ski_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ski_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sosiologi`
--
ALTER TABLE `sosiologi`
  ADD CONSTRAINT `sosiologi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sosiologi_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
