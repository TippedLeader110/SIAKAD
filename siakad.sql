-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 09:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nis` bigint(20) NOT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `hadir` int(11) DEFAULT NULL,
  `alpha` int(11) DEFAULT NULL,
  `izin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nip` bigint(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nip`, `username`, `password`, `nama`, `email`, `foto`) VALUES
(171402067, 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akidah_akhlak`
--

CREATE TABLE `akidah_akhlak` (
  `nis` bigint(20) NOT NULL,
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
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_arab`
--

CREATE TABLE `b_arab` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_indo`
--

CREATE TABLE `b_indo` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_ing`
--

CREATE TABLE `b_ing` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b_jerman_p`
--

CREATE TABLE `b_jerman_p` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_p`
--

CREATE TABLE `ekonomi_p` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fikih`
--

CREATE TABLE `fikih` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fisika_p`
--

CREATE TABLE `fisika_p` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `geografi`
--

CREATE TABLE `geografi` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` bigint(20) NOT NULL,
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
(16756, 's10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', 'Laki-laki', 'islam', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', ''),
(1231313, '12313131', '31321313', '313131231', 'Muhammad Bayhaqi Daulay', '2018-12-17', 'Laki-laki', '3131231', 'Jalan Prof.Dr Hamka\r\nNo 56', 'bayhaqi101@gmail.com', '1312313', '12331', '312313', NULL, NULL);

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
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marcing_band`
--

CREATE TABLE `marcing_band` (
  `nis` bigint(20) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matematika`
--

CREATE TABLE `matematika` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paskibra`
--

CREATE TABLE `paskibra` (
  `nis` bigint(20) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjas`
--

CREATE TABLE `penjas` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pkn`
--

CREATE TABLE `pkn` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prakarya_kewirausahaan`
--

CREATE TABLE `prakarya_kewirausahaan` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pramuka`
--

CREATE TABLE `pramuka` (
  `nis` bigint(20) NOT NULL,
  `jum_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quran_hadis`
--

CREATE TABLE `quran_hadis` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_indo`
--

CREATE TABLE `sejarah_indo` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seni_budaya`
--

CREATE TABLE `seni_budaya` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `agama`, `alamat`, `email`, `jurusan`, `asal_sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_hp_ayah`, `no_hp_ibu`, `anak_ke`, `pict`, `tanggal_lahir`, `tempat`, `tahun`) VALUES
(2222, '', '', '', 'Jenis Kelami', '', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', 0, '/gambar/2222', '', '', ''),
(123722001, 'Fatimah', 'fatimah32', 'Fatimah Azzahra', 'Perempuan', 'Islam', 'Jl. Patimura', 'fatimah.azahra@gmail', 'IPA', 'SMP 2 Sabang', 'a', 'Suhartono', 'Azalea', 'Wiraswasta', 'PNS', 'Jl. Patimura', 'Jl. Patimura', '0812365498764', '08523798352', 3, '001237229', '2002-12-23', 'Medan', '2016'),
(123722002, 'Azhar', 'azhar12', 'M. Azhar', 'Laki-laki', 'Islam', 'Jl. Glugur darat', 'azhar12@gmail.com', 'IPS', 'SMP 2 Medan', 'b', 'fadli', 'erikawati', 'PNS', 'Guru', 'Jl. Glugur darat', 'Jl. Glugur Darat', '082345454421', '082134567765', 1, '123722002', '2001-05-29', 'Medan', '2017'),
(123722003, 'Naufal', 'naufal12', 'Naufal Azhari', 'Laki-laki', 'Islam', '', 'naufal12@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Ali hidayat', 'siti hajar', 'Designer', 'Dokter gigi', 'Jl. kuningan ', 'Jl. kuningan', '082134346523', '082134348532', 2, '123722003', '2000-02-06', 'Padang', '2018'),
(123722004, 'Kenzo', 'enzo123', 'Kenzo julian', 'Laki-laki', 'Islam', 'Jl. malioboro', 'kenzo23@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Rafid', 'Siti namira', 'Pilot', 'pramugari', 'Jl. universitas', 'jl. universitas', '08534223322', '087796782132', 3, '123722004', '2002-03-23', 'Aceh', '2016'),
(123722005, 'eka nurmala', 'nurmala23', 'Eka nurmala', 'Perempuan', 'Islam', 'jl. Alumni', 'eka.nurmala@gmail.co', 'IPA', 'SMP 2 Stebing tinggi', 'a', 'Naufal', 'Nurul', 'Wiraswasta', 'IRT', 'jl. gagak hitam', 'jl. gagak hitam', '082345546566', '085344546555', 5, '123722005', '2002-03-12', 'Tebing tinggi', '2017'),
(171402067, 'bayhaqi101', 'bayha101', 'Muhammad Bayhaqi Daulay', 'Laki-laki', 'ISLAM', 'adjwkandajda', 'bayhaqi101@gmail.com', 'IPA', 'SMA', NULL, 'dawdad', 'awdadwa', 'dawdadw', 'dawdada', 'awdadad', 'dadadaw', 'adawdad', 'dawdad', 0, '171402067', '2018-12-29', 'awdadaw', 'adawdad');

-- --------------------------------------------------------

--
-- Table structure for table `ski`
--

CREATE TABLE `ski` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sosiologi`
--

CREATE TABLE `sosiologi` (
  `nis` bigint(20) NOT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `rata_rata` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(10) DEFAULT NULL
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
  `penulis` varchar(50) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terkini`
--

INSERT INTO `terkini` (`id`, `judul`, `waktu`, `isi`, `penulis`, `img`) VALUES
(1, 'awdbawdjkawnbdwbdnwk', '2018/12/17', NULL, NULL, ''),
(2, 'awdbawdjkawnbdwbdnwk', '2018/12/17', '<p>kjamnknjadwnjkadnjadwnjadjnawdadawdadaw</p>\r\n', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
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
  ADD PRIMARY KEY (`nis`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `terkini`
--
ALTER TABLE `terkini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

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
