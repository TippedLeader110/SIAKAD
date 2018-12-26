-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 08:28 AM
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
  `semester` int(11) DEFAULT NULL,
  `kkm` varchar(30) DEFAULT NULL
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
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `tmpt_lahir` varchar(30) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(30) DEFAULT NULL,
  `mapel` varchar(50) DEFAULT NULL,
  `gol` varchar(12) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `wali_kelas` varchar(20) DEFAULT NULL,
  `foto` text,
  `status` varchar(30) DEFAULT NULL,
  `mengajar_dikelas` varchar(30) DEFAULT NULL,
  `agama` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `kode_mapel`, `username`, `password`, `nama`, `tgl_lahir`, `tmpt_lahir`, `jk`, `alamat`, `email`, `mapel`, `gol`, `no_hp`, `wali_kelas`, `foto`, `status`, `mengajar_dikelas`, `agama`) VALUES
(13456, 'bi10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', NULL, 'Laki-laki', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', '', NULL, NULL, NULL),
(15456, 'mm10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', NULL, 'Laki-laki', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', '', NULL, NULL, NULL),
(16756, 's10', 'paksanca', 'pakSanca', 'paksanca', '0000-00-00', NULL, 'Laki-laki', 'Jl Mu no 3', 'Paksanca@gmail.com', 'b_indo', '3A', '08134567123', '11IPA1', '', NULL, NULL, NULL),
(1231313, '12313131', '31321313', '313131231', 'Muhammad Bayhaqi Daulay', '2018-12-17', NULL, 'Laki-laki', 'Jalan Prof.Dr Hamka\r\nNo 56', 'bayhaqi101@gmail.com', '1312313', '12331', '312313', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas` varchar(30) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `jum_siswa` int(11) DEFAULT NULL,
  `wali_kelas` text,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas`, `tingkat`, `jum_siswa`, `wali_kelas`, `jurusan`) VALUES
('A', 1, 0, '', 'IPA'),
('B', 1, 0, '', 'IPA'),
('C', 1, 0, '', 'IPA'),
('A', 2, 0, '', 'IPA'),
('B', 2, 0, '', 'IPA'),
('C', 2, 0, '', 'IPA'),
('A', 3, 0, '', 'IPA'),
('B', 3, 0, '', 'IPA'),
('C', 3, 0, '', 'IPA'),
('A', 1, 0, '', 'IPS'),
('B', 1, 0, '', 'IPS'),
('C', 1, 0, '', 'IPS'),
('A', 2, 0, '', 'IPS'),
('B', 2, 0, '', 'IPS'),
('C', 2, 0, '', 'IPS'),
('A', 3, 0, '', 'IPS'),
('B', 3, 0, '', 'IPS'),
('C', 3, 0, '', 'IPS');

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
-- Table structure for table `matematika_p`
--

CREATE TABLE `matematika_p` (
  `nis` bigint(20) DEFAULT NULL,
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
  `pendidikan_ibu` varchar(30) DEFAULT NULL,
  `pendidikan_ayah` varchar(30) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `pict` text,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `agama`, `alamat`, `email`, `jurusan`, `asal_sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_hp_ayah`, `no_hp_ibu`, `pendidikan_ibu`, `pendidikan_ayah`, `anak_ke`, `pict`, `tanggal_lahir`, `tempat`, `tahun`, `status`) VALUES
(123722001, 'Fatimah', 'fatimah32', 'Fatimah Azzahra', 'Perempuan', 'Islam', 'Jl. Patimura', 'fatimah.azahra@gmail', 'IPA', 'SMP 2 Sabang', 'a', 'Suhartono', 'Azalea', 'Wiraswasta', 'PNS', 'Jl. Patimura', 'Jl. Patimura', '0812365498764', '08523798352', 'SMA', NULL, 3, '001237229', '2002-12-23', 'Medan', '2016', NULL),
(123722002, 'Azhar', 'azhar12', 'M. Azhar', 'Laki-laki', 'Islam', 'Jl. Glugur darat', 'azhar12@gmail.com', 'IPS', 'SMP 2 Medan', 'b', 'fadli', 'erikawati', 'PNS', 'Guru', 'Jl. Glugur darat', 'Jl. Glugur Darat', '082345454421', '082134567765', NULL, NULL, 1, '123722002', '2001-05-29', 'Medan', '2017', NULL),
(123722003, 'Naufal', 'naufal12', 'Naufal Azhari', 'Laki-laki', 'Islam', 'jl. kuningan', 'naufal12@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Ali hidayat', 'siti hajar', 'Designer', 'Dokter gigi', 'Jl. kuningan ', 'Jl. kuningan', '082134346523', '082134348532', NULL, NULL, 2, '123722003', '2000-02-06', 'Padang', '2018', NULL),
(123722004, 'Kenzo', 'enzo123', 'Kenzo julian', 'Laki-laki', 'Islam', 'Jl. malioboro', 'kenzo23@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Rafid', 'Siti namira', 'Pilot', 'pramugari', 'Jl. universitas', 'jl. universitas', '08534223322', '087796782132', NULL, NULL, 3, '123722004', '2002-03-23', 'Aceh', '2016', NULL),
(123722005, 'eka nurmala', 'nurmala23', 'Eka nurmala', 'Perempuan', 'Islam', 'jl. Alumni', 'eka.nurmala@gmail.co', 'IPA', 'SMP 2 Stebing tinggi', 'a', 'Naufal', 'Nurul', 'Wiraswasta', 'IRT', 'jl. gagak hitam', 'jl. gagak hitam', '082345546566', '085344546555', NULL, NULL, 5, '123722005', '2002-03-12', 'Tebing tinggi', '2017', NULL),
(123722006, 'tria12', 'ria32', 'Tria riski', 'Perempuan', 'Islam', 'jl. alumni', 'tria12@gmail.com', 'IPS', 'smp 2 binjai', 'C', 'bayhaqi', 'Lia tusina', 'Guru', 'guru', 'jl. alumni', 'jl. alumni', '082144567688', '081245378766', NULL, NULL, 4, '123722006', '2000-08-05', '', '2016', NULL),
(123722008, 'sulaiman', 'sule12', 'sulaiman', 'Laki-laki', 'Islam', 'jl. hassanuddin', 'sulaiman23@gmail.com', 'IPA', 'mtsn 1 sabang', 'Kelas', 'rahmad', 'fitri', 'guru', 'wiraswasta', 'jl. hassanuddin', 'jl. hassanuddin', '0821345565', '-', NULL, NULL, 2, '123722008', '2001-03-31', 'sabang', '2017', NULL),
(123722009, 'ihsan21', 'sanchan12', 'ihsan maulana', 'Laki-laki', 'Islam', 'jl. tengku hasyim', 'ihsan21@gmail.com', 'IPS', 'smp 1 medan', 'C', 'maulana', 'halimah', 'Guru', 'guru', 'jl. tengku hasyim', 'jl. tengku hasyim', '082345657779', '085324568776', NULL, NULL, 1, '123722009', '2000-06-23', 'jakarta', '2016', NULL),
(123722010, 'haura', 'haura23', 'haura rasyid', 'Perempuan', 'Islam', 'jl. setia budi', 'haura12@gmail.com', 'IPA', 'mtsn 1 medan', 'b', 'rasyid', 'aminah', 'PNS', 'guru', 'jl. setia budi', 'jl. setia budi', '081245433355', '082176543326', NULL, NULL, 5, '123722010', '2000-02-09', 'pekan baru', '2017', NULL),
(123722011, 'allia', 'allia34@gm', 'Allia rania', 'Perempuan', 'Islam', 'jl. setia budi', 'allia43@gmail.com', 'IPS', 'smp helvetia', 'b', 'ihsan', 'nadia', 'dokter', 'dosen', 'jl.setia budi', 'jl. setia budi', '082314567666', '085312456676', NULL, NULL, 4, '123722011', '2001-12-02', 'padang', '2018', NULL),
(123722012, 'nasywa', 'nasy32', 'nasywa', 'Perempuan', 'Islam', 'jl. Universitas', 'nanas12@gmail.com', 'IPS', 'smp 1 rantau prapat', 'b', 'Ali syakib', 'nabila', 'polisi', 'IRT', 'Jl. universitas', 'jl. universitas', '08224543332', '082143567787', NULL, NULL, 3, '123722012', '2001-12-06', 'Medan', '2018', NULL),
(123722013, 'ainiwijaya', 'wijaya12', 'nuraini', 'Perempuan', 'Islam', 'jl. Universitas', 'nuraiinii1999@gmail.', 'IPA', 'mtsn sabang', 'a', 'usna', 'faridah', 'Guru', 'IRT', 'Jl. universitas', 'jl. universitas', '082134556545', '-', NULL, NULL, 3, '123722013', '2000-11-07', 'sabang', '2018', NULL),
(123722014, 'miftah', 'miftah21', 'miftah rafid', 'Laki-laki', 'Islam', 'jl. pembangunan', 'miftah43@gmail.com', 'IPS', 'smp helvetia', 'C', 'hidayat', 'Salimah', 'polisi', 'guru', 'jl. pembagunan', 'jl. pembangunan', '082345655421', '082123458765', NULL, NULL, 3, '123722014', '2001-05-31', 'medan', '2016', NULL),
(123722015, 'tri', 'tri32', 'tri agusti', 'Perempuan', 'Islam', 'jl. pembangunan', 'tri.ningsih12@gmail.', 'IPS', 'smp 6 medan', 'C', 'indra', 'suci', 'PNS', 'polwan', 'jl. pembagunan', 'jl. pembangunan', '082176889865', '087712456677', NULL, NULL, 2, '123722015', '2003-05-09', 'medan', '2018', NULL),
(123722016, 'widya', 'widya21', 'wiyawati', 'Perempuan', 'Islam', 'jl. diponegoro', 'widya234@gmail.com', 'IPS', 'smp 9 medan', 'b', 'M. syafiq', 'Fenny', 'dosen', 'guru', 'jl. diponegoro', 'jl. diponegoro', '082345667632', '08235566543', NULL, NULL, 3, '123722016', '2003-12-06', 'Medan', '2018', NULL),
(123722017, 'winda', 'winda32', 'winda ', 'Jenis Kelami', 'Islam', 'binjai', 'winda54@gmail.com', 'IPA', 'smp 1 binjai', 'a', 'andika', 'riri', 'fotographer', 'wiraswasta', 'binjai', 'binjai', '082354667721', '082134556787', NULL, NULL, 2, '123722017', '2002-02-23', 'binjai', '2017', NULL),
(123722018, 'laila', 'laila23', 'nurlaila', 'Perempuan', 'Islam', 'binjai', 'laila.nur21@gmail.co', 'IPS', 'smp 2 binjai', 'Kelas', 'pratama', 'pratiwi', 'dosen', 'IRT', 'binjai', 'bin', '', '', NULL, NULL, 0, '/gambar/123722018', '', '', '', NULL),
(123722019, 'fajar', 'fajar23', 'M. fajar', 'Laki-laki', 'Islam', 'binjai', 'laila.nur21@gmail.co', 'IPS', 'smp 2 binjai', 'b', 'pratama', 'pratiwi', 'dosen', 'IRT', 'binjai', 'binjai', '082314565887', '0821345576', NULL, NULL, 2, '123722019', '2002-12-13', 'binjai', '2017', NULL),
(123722020, 'Ayu', 'ayu54', 'Ayu laila', 'Perempuan', 'Islam', 'medan', 'ayu21@gmail.com', 'IPA', 'smp 18 medan', 'a', 'suhartono', 'adine', 'TNI', 'IRT', 'medan', 'medan', '082356554565', '082134223454', NULL, NULL, 4, '123722020', '2001-11-24', 'Medan', '2016', NULL),
(123722021, 'ikbal', 'lkbal76', 'Ikbal fajar', 'Laki-laki', 'Islam', 'Jl. Glugur darat', 'ikbal54@gmail.com', 'IPA', 'smp 1 siantar', 'a', 'dani putra', 'siti aminah', 'petani', 'petani', 'siantar', 'siantar', '082123456654', '-', NULL, NULL, 3, '123722021', '2002-08-15', 'siantar', '2017', NULL),
(123722022, 'fahmi12', 'fahmi12', 'fahmi rizal', 'Laki-laki', 'Islam', 'jl. merak jingga', 'fahmi@gmail.com', 'IPS', 'smp 18 medan', 'b', 'Bayhaqi', 'Allia', 'PNS', 'PNS', 'jl. merak jingga', 'l. merak jingga', '082134556765', '082134556776', NULL, NULL, 2, '123722022', '2003-04-25', 'Medan', '2018', NULL),
(123722023, 'farhan', 'farhan23', 'farhan lubis', 'Laki-laki', 'Islam', 'Jl. Glugur darat', 'farhan13@gmail.com', 'IPS', 'smp 18 medan', 'C', 'Fatih lubis', 'delia siregar', 'Guru', 'Guru', 'Jl. Glugur darat', 'Jl. Glugur Darat', '08234456676', '082134567655', NULL, NULL, 1, '123722023', '2001-06-26', 'medan', '2017', NULL),
(123722024, 'fatih', 'fatih32', 'Al fatih', 'Laki-laki', 'Islam', 'deli serdang', 'Fatih@gmail.com', 'IPA', 'smp 9 medan', 'b', 'fahmi', 'riska', 'dosen', 'Dokter gigi', 'deli serdang', 'deli serdang', '082355433212', '082133456787', NULL, NULL, 2, '123722024', '2001-03-21', 'medan', '2017', NULL),
(123722025, 'rasyid', 'rasyid21', 'rasyid alatas', 'Laki-laki', 'Islam', 'medan', 'rasyid@gmail.com', 'IPA', 'smp 9 medan', 'a', 'abdillah', 'rosanna', 'guru', 'irt', 'medan', 'medan', '08235432123', '08213435876', NULL, NULL, 3, '123722025', '2003-03-12', 'medan', '2018', NULL),
(123722026, 'balya', 'balya32', 'balya', 'Laki-laki', 'Islam', 'binjai', 'balya@gmail.com', 'IPS', 'smp 2 binjai', 'b', 'rahmat', 'raihanah', 'PNS', 'PNS', 'binjai', 'binjai', '082134565434', '08134686549', NULL, NULL, 1, '123722026', '2001-08-23', 'binjai', '2018', NULL),
(123722027, 'Annisa', 'nisa23', 'Annisa', 'Perempuan', 'Islam', 'jl. siborong borong', 'annisa@gmail.com', 'IPA', 'smp 18 medan', 'a', 'Abdul jalil', 'suryani', 'petani', 'IRT', 'jl. siborong borong', 'jl. siborong borong', '082134546775', '081387653421', NULL, NULL, 2, '123722027', '2002-02-11', 'si borong borong', '2018', NULL),
(123722028, 'mawar', 'mawar12', 'mawar', 'Perempuan', 'Islam', 'gedong', 'mawar12@gmail.com', 'IPS', 'smp 1 gedong', 'b', 'samsudin', 'maimunah', 'PNS', 'IRT', 'gedong', 'gedong', '08213455653', '081245378787', NULL, NULL, 2, '123722028', '2001-05-10', 'gedung', '2017', NULL),
(123722030, 'kamila', 'kamila12', 'Kamila', 'Perempuan', 'Islam', 'binjai', 'kamila@gmail.com', 'IPA', 'smp 2 binjai', 'C', 'boby', 'yusniah', 'Guru', 'guru', 'binjai', 'binjai', '082144569987', '08534457655', NULL, NULL, 3, '123722030', '2000-12-23', 'binjai', '2016', NULL),
(123722031, 'fitria', 'fitria1', 'Fitria', 'Perempuan', 'Islam', 'jl. setia budi', 'ria@gmail.com', 'IPA', 'SMP 2 Sabang', 'a', 'muhammad', 'rosminah', 'dokter', 'IRT', 'jl.setia budi', 'jl. setia budi', '085342233222', '08523798432', NULL, NULL, 1, '123722031', '2002-11-12', 'sabang', '2018', NULL),
(123722032, 'adelia', 'adelia12', 'Adelia', 'Perempuan', 'Islam', 'jl. pembangunan', 'adel@gmail.com', 'IPS', 'smp helvetia', 'b', 'syamsudin', 'hanna', 'Wiraswasta', 'wiraswasta', 'jl. pembagunan', 'jl. pembangunan', '082144567654', '08523790876', NULL, NULL, 3, '123722032', '2001-12-05', 'medan', '2017', NULL),
(123722033, 'febri', 'febri43', 'febri', 'Perempuan', 'Islam', 'Jl. Glugur darat', 'febri@gmail.com', 'IPS', 'smp helvetia', 'C', 'haikal', 'yani', 'guru', 'wiraswasta', 'Jl. Glugur darat', 'Jl. Glugur Darat', '081236549765', '082134348765', NULL, NULL, 1, '123722033', '2001-04-05', 'padang', '2017', NULL),
(123722034, 'aprillia', 'april54', 'aprillia', 'Jenis Kelami', 'Islam', 'jl. Universitas', 'aprilia@gmail.com', 'IPS', 'smp 2 binjai', 'C', 'ahmad', 'sukiyem', 'pilisi', 'wiraswasta', 'Jl. universitas', 'jl. universitas', '082134344532', '087796776543', NULL, NULL, 3, '123722034', '2000-02-11', 'sabang', '2016', NULL),
(123722035, 'hendra', 'hendra65', 'hendra herlambang', 'Laki-laki', 'Islam', 'deli serdang', 'hendra@gmail.com', 'IPA', 'smp 9 medan', 'a', 'naufal', 'nurul', 'TNI', 'PNS', 'deli serdang', 'deli serdang', '08213542312', '081221346534', NULL, NULL, 4, '/gambar/123722035', '2002-12-23', 'jakarta', '2018', NULL),
(123722036, 'arif', 'arif12', 'arif maulana', 'Laki-laki', 'Islam', 'binjai', 'arif@gmail.com', 'IPS', 'smp 2 binjai', 'a', 'maulana', 'sutini', 'PNS', 'PNS', 'binjai', 'binjai', '082345455423', '087796765763', NULL, NULL, 1, '123722036', '2000-10-28', 'binjai', '2016', NULL),
(123722037, 'arjuna', 'arjuna65', 'Arjuna danu', 'Laki-laki', 'Islam', 'deli serdang', 'arjuna@gmail.com', 'IPA', 'smp 18 medan', 'b', 'Suhartono', 'erikawati', 'dokter', 'Guru', 'deli serdang', 'deli serdang', '08534223987', '082134348765', NULL, NULL, 5, '123722037', '2000-09-27', 'deli serdang', '2016', NULL),
(123722038, 'melati', 'melati43', 'melati ', 'Perempuan', 'Islam', 'jl. Universitas', 'melati@gmail.com', 'IPS', 'smp 9 medan', 'C', 'akram', 'adelia', 'dosen', 'Dokter gigi', 'Jl. universitas', 'jl. universitas', '082345098765', '08213487654', NULL, NULL, 3, '123722038', '2000-11-29', 'siantar', '2016', NULL),
(123722039, 'mayang', 'mayang65', 'Mayang', 'Perempuan', 'Islam', 'jl. simpang pos', 'mayang@gmail.com', 'IPA', 'smp 1 siantar', 'b', 'Rafid', 'lia tusina', 'PNS', 'Guru', 'jl. simpang pos', 'jl. simpang pos', '0821341234', '08779671234', NULL, NULL, 2, '123722039', '2001-02-21', 'siantar', '2018', NULL),
(123722040, 'sandra', 'sandra32', 'Sandra dewi', 'Perempuan', 'Islam', 'jl. marelan', 'sandra@gmail.com', 'IPA', 'smp 1 tebing tinggi', 'C', 'didit wahyudi', 'dewina', 'petani', 'IRT', 'jl. marelan', 'jl. marelan', '082134340099', '085237987554', NULL, NULL, 1, '123722040', '2000-12-22', 'medan', '2017', NULL),
(123722041, 'rafid', 'rafid43', 'rafid miftah', 'Laki-laki', 'Islam', 'jl. marelan', 'rafid@gmail.com', 'IPA', 'smp helvetia', 'b', 'khairil', 'mittahul jannah', 'dosen', 'PNS', 'jl. marelan', 'jl. marelan', '0821345332', '085344522321', NULL, NULL, 2, '123722041', '2003-12-30', 'sidimpuan', '2018', NULL),
(123722042, 'lisa ayu', 'lisa56', 'lisa ayunisngtyas', 'Perempuan', 'Islam', 'Jl. malioboro', 'lisa@gmail.com', 'Jurusan', 'smp 1 medan', 'C', 'firmansyah', 'aisyah', 'Guru', 'guru', 'jl. malioboro', 'jl. malioboro', '082345098876', '087796799451', NULL, NULL, 3, '123722042', '2001-07-19', 'Tebing tinggi', '2017', NULL),
(123722043, 'suci eka', 'suci99', 'suci eka', 'Perempuan', 'Islam', 'jl. kapten patimura', 'suci@gmail.com', 'IPS', 'SMP 2 Medan', 'a', 'faris', 'nadia', 'PNS', 'PNS', 'jl. kapten patimura', 'jl. kapten patimura', '08213444444', '0853445542211', NULL, NULL, 1, '123722043', '2000-07-27', 'Medan', '2016', NULL),
(123722044, 'amilya', 'amilya32', 'amilya ritonga', 'Perempuan', 'Islam', 'jl. jamin ginting', 'amilya@gmail.com', 'IPS', 'smp 1 rantau prapat', 'C', 'susanto', 'rosanti', 'petani', 'petani', 'jl. jamin ginting', 'jl. jamin ginting', '082345499876', '082134349956', NULL, NULL, 5, '123722044', '2003-01-12', 'rantau prapat', '2018', NULL),
(123722045, 'fadil', 'fadil78', 'M. fadil', 'Laki-laki', 'Islam', 'jl. marelan', 'fadil12@gmail.com', 'IPS', 'smp 1 sabang', 'b', 'M. yasin', 'Yusriah', 'PNS', 'perawat', 'jl. marelan', 'jl. marelan', '08534229987', '08523790065', NULL, NULL, 1, '123722045', '2000-12-22', 'sabang', '2016', NULL),
(123722046, 'Azhari', 'Azhari32', 'M. azhari', 'Laki-laki', 'Agama', 'jl. kapten patimura', 'azhari2@gmail.com', 'IPS', 'smp 18 medan', 'b', 'syawal', 'aminah', 'dokter', 'PNS', 'jl. kapten patimura', 'jl. kapten patimura', '082144560098', '085237980097', NULL, NULL, 3, '123722046', '2000-03-02', 'siantar', '2017', NULL),
(123722047, 'Amin', 'Amin90', 'M. Amin', 'Laki-laki', 'Islam', 'jl. setia budi', 'amin@gmail.com', 'IPS', 'smp helvetia', 'C', 'indra', 'indana', 'dosen', 'IRT', 'jl. setia budi', 'jl. setia budi', '081236549876', '08523798376', NULL, NULL, 2, '123722047', '2003-12-13', 'sidimpuan', '2018', NULL),
(123722048, 'Ulwan', 'ulwan10', 'M. Ulwan Azmi', 'Laki-laki', 'Islam', 'binjai', 'ulwan@gmail.com', 'IPA', 'smp 1 binjai', 'C', 'baskoro', 'indah', 'PNS', 'wiraswasta', 'binjai', 'binjai', '08536522114', '085340932178', NULL, NULL, 3, '123722048', '2000-11-23', 'binjai', '2017', NULL),
(123722049, 'rizki', 'rizki12', 'Rizki fatihah', 'Laki-laki', 'Islam', 'jl. dr mansyur', 'rizki@gmail.com', 'IPA', 'smp 1 siantar', 'a', 'Ali syakib', 'nurleli', '', '', 'jl. dr mansyur', 'jl. dr mansyur', '08214455433', '087796780098', NULL, NULL, 7, '123722049', '2000-12-30', 'siantar', '2016', NULL),
(123722050, 'syakir', 'syakir34', 'M.Syakir', 'Laki-laki', 'Islam', 'jl. dr mansyur', 'syakir@gmail.com', 'IPS', 'smp 1 jakarta', 'b', 'zikri', 'siti sarah', 'PNS', 'PNS', 'jl. dr mansyur', 'jl. dr mansyur', '081236549887', '082134348098', NULL, NULL, 4, '123722050', '2003-02-20', 'jakarta', '2018', NULL),
(123722051, 'Dinda', 'dinda123', 'Dinda Meysi', 'Perempuan', 'Islam', 'Jl. Gatot Subroto', 'dindameysi@yahoo.co.', 'IPA', 'SMP 10 Medan', NULL, 'Shafwan Hardy', 'Syacha Memai', 'Dosen', 'Penulis', 'Jl. Gatot Subroto', 'Jl. Gatot Subroto', '081267867976', '085764534988', 'SMA', 'S1 Ilmu Komputer', 2, '123722051', '2001-07-09', 'Medan', '2016', 'Aktif'),
(123722052, 'Kurnia', 'kurnia123', 'Rizky Kurnia Sari', 'Perempuan', 'Islam', 'Jl. Aluminium IV', 'rizkykurnia@yahoo.co', 'IPA', 'SMP 12 Medan', NULL, 'Aulia Fahmi', 'Widya Sari', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Aluminium IV', 'Jl. Aluminium IV', '081257684498', '081287656401', 'S1 Pendidikan Matematika', 'SMA', 3, '123722052', '2002-04-18', 'Aceh', '2017', 'Aktif'),
(123722073, 'Fakhri rizha ananda', 'fakhri12', 'Fakhri riza ananda', 'Laki-laki', 'Islam', 'deli serdang', 'fakhri@gmail.com', 'IPS', 'smp 18 medan', NULL, 'Ananda muharris', 'aminah', 'Designer', 'PNS', 'deli serdang', 'deli serdang', '08123654976', '-', 'D1 pajak', 'SI  teknologi informasi', 3, '123722073', '2001-12-23', 'medan', '2017', NULL),
(123722074, 'faris', 'faris32', 'Faris Zharfan', 'Laki-laki', 'Islam', 'medan', 'faris@gmail.com', 'IPS', 'smp 9 medan', NULL, 'Ibrahim', 'Ardilla', 'Wiraswasta', 'Guru', 'medan', 'medan', '08213454123', '08523799876', 'SI Fkip', 'SMA', 2, '123722074', '2002-02-23', 'Medan', '2017', NULL),
(123722075, 'Firmansyah', 'firman12', 'Firmansyah', 'Laki-laki', 'Islam', 'medan', 'firman@gmail.com', 'IPS', 'smp 1 medan', NULL, 'taufiq hidayat', 'Adelina', 'PNS', 'PNS', 'medan', 'medan', '082345054021', '085344046888', 'D1 pajak', 'SI  teknologi informasi', 2, '123722075', '2002-10-21', 'Medan', '2017', 'Aktif'),
(123722076, 'Azzahra putri', 'zahra32', 'Azzahra putri', 'Perempuan', 'Islam', 'Jl. Glugur darat', 'azzahra@gmail.com', 'IPS', 'smp 1 sidimpuan', NULL, 'miftah rafid', 'roslaili', 'PNS', 'guru', 'Jl. Glugur darat', 'Jl. Glugur Darat', '08214406798', '08212348065', 'SI Fkip', 'SI  teknologi informasi', 4, '123722076', '2000-04-12', 'medan', '2016', NULL),
(123722077, 'Millea', 'millea', 'meillea', 'Perempuan', 'Islam', 'binjai', 'millea@gmail.com', 'IPS', 'smp 2 binjai', NULL, 'Baskoro', 'siska', 'Guru', 'PNS', 'binjai', 'binjai', '08123654987', '08123245869', 'D1 pajak', 'SI  teknologi informasi', 1, '123722077', '2003-12-22', 'binjai', '2018', NULL),
(123722078, 'Zikri daulay', 'zikricakep', 'zikri daulay', 'Laki-laki', 'Islam', 'medan', 'zikri2gmail.com', 'IPA', 'smp 9 medan', NULL, 'abdi daulay', 'sarah', 'PNS', 'PNS', 'medan', 'medan', '082134346765', '082134346534zike', 'D1 pajak', 'SI Manajemen', 3, '123722078', '2001-09-05', 'Medan', '2017', NULL),
(123722079, 'M. syafriansyah', 'safriansya', 'M. syafriansyah', 'Laki-laki', 'Islam', 'medan', 'syafriansyah@gmail.c', 'IPS', 'smp 9 medan', NULL, 'bambang', 'siti sarah', 'PNS', 'PNS', 'medan', 'medan', '082345477654', '08523876654', 'SI teknologi Informasi', 'SI Manajemen', 4, '123722079', '2003-07-31', 'medan', '2018', NULL),
(123722080, 'myudhakwr', 'yudha12', 'M. Yudha Kurniawan', 'Laki-laki', 'Islam', 'Jl. Brengam', 'myudhakurniawan@gmai', 'IPA', 'smp 12 Medan', NULL, 'Indra Aulia', 'Nia Indriani', 'Dosen', 'IRT', 'Jl. Brengam', 'Jl. Brengam', '087834562345', '081235498002', 'SMA', 'S2 Ilmu Komputer', 1, '123722080', '2000-03-17', 'Binjai', '2016', NULL),
(123722081, 'dindasyahfitri', 'dinda123', 'Dinda Syahfitri', 'Perempuan', 'Islam', 'Jl. Yosudarso no. 3 b', 'dindasyahfitri12@gma', 'IPS', 'smp swasta tamansiswa medan', NULL, 'Hagel Nst', 'Indah Sofi', 'Dokter Gigi', 'Psikolog', 'Jl. Yosudarso no. 3 b', 'Jl. Yosudarso no. 3 b', '081578345627', '081234562340', 'S1 Psikologi', 'S2 Dokter Gigi', 3, '123722081', '2001-07-11', 'siantar', '2017', NULL),
(123722082, 'ari.pratama', 'ari12345', 'Adi Pratama', 'Laki-laki', 'Islam', 'jl. jamin ginting', 'adi.pratama@gmail.co', 'IPS', 'smp budi murni mdan', NULL, 'Dimas Prasetyo', 'Anggi Putri', 'Petani', 'IRT', 'jl. jamin ginting', 'jl. jamin ginting', '08123456755', '081367239087', 'SMA', 'S1 Kehutanan', 2, '123722082', '2003-12-03', 'Sibolga', '2018', NULL),
(123722083, 'amelia_salsabila', 'amelia000', 'Amelia Salsabila', 'Perempuan', 'Islam', 'jl. karakatau', 'ameliasalsabila@gmai', 'IPA', 'smp 1 binjai', NULL, 'Teguh Rizal', 'Cahya Fitri', 'Wiraswasta', 'Penjahit', 'Jl. Karakatau', 'Jl. Karakatau', '081290998977', '-', 'SMA', 'SMA', 4, '123722083', '2001-12-03', 'siantar', '2017', NULL),
(123722084, 'sintialeoni.putri', 'sintialeo1', 'Sintia Leoni Putri', 'Perempuan', 'Islam', 'jl. amaliun no. 2 ', 'sintialeoniputri@gma', 'IPS', 'smp 6 medan', NULL, 'Rafli Akbar', 'Nadra Anggraini', 'Guru', 'IRT', 'jl. amaliun no. 2', 'jl. amaliun no. 3', '081389007656', '-', 'SMA', 'S1 Pendidikan fisika', 2, '123722084', '2001-02-12', 'Medan', '2017', NULL),
(123722085, 'nadasyahputra', 'nada12', 'Nada Syahputra', 'Laki-laki', 'Islam', 'jl. adam malik', 'nadasyahputra@gmail.', 'IPS', 'smp 2 medan', NULL, 'Rozzi Nadira', 'Ayu Priyanti', 'Beternak ikan lele', 'Pedagang] pecel lele', 'jl. adam malik', 'jl. adam malik', '081345231700', '085890786654', 'SMA', 'S1 Peternakan', 1, '123722085', '2001-02-23', 'medan', '2016', NULL),
(123722086, 'Hawwariyyun', 'hawwariyun', 'hawwariyyun', 'Laki-laki', 'Islam', 'jl. pembangunan', 'hawwariyyun@gmail.co', 'IPA', 'smp 2 jakarta', NULL, 'abdullah', 'malahayati', 'guru', 'IRT', 'jl. pembagunan', 'jl. pembangunan', '082387664532', '-', 'SMA', 'SI Pdi', 2, '123722086', '2002-05-24', 'Sabang', '2017', NULL),
(123722087, 'aisyah', 'aisyah17', 'Aisyah nabila', 'Jenis Kelami', 'Islam', 'jl. Universitas', 'aisyah@gmail.com', 'IPS', 'smp 18 medan', NULL, 'ahmad adil', 'Mardilla', 'dosen', 'PNS', 'Jl. universitas', 'jl. universitas', '08214450998', '08534098876', 'D1 pajak', 'SI Pdi', 3, '123722087', '2003-09-29', 'Jakarta', '2018', NULL),
(123722088, 'Kayla', 'kayla54', 'Kayla nadira', 'Perempuan', 'Islam', 'jl. alumni', 'kayla.nadi@gmail.com', 'IPS', 'smp 1 jabotabek', NULL, 'Alif syahputra', 'ashanty', 'PNS', 'Psikolog', 'jl. alumni', 'jl. alumni', '082344321234', '0877967998765', 'S1 Psikologi', 'SI  teknologi informasi', 2, '123722088', '2002-03-28', 'Jakarta', '2017', NULL),
(123722089, 'Ahmed', 'ahmed66', 'ahmed zam zam', 'Laki-laki', 'Agama', 'jl. dr mansyur', 'zamzam@gmail.com', 'IPA', 'smp 1 jabotabek', NULL, 'Sohibul ikhlas', 'ruqayyah', 'guru', 'guru ngaji', 'jl. dr mansyur', 'jl. dr mansyur', '082134343212', '08213887645', 'SMA', 'SI Pdi', 1, '123722089', '2003-07-04', 'Padang', '2018', NULL),
(123722090, 'Jelita', 'jelita65', 'Jelita asmara', 'Perempuan', 'Islam', 'binjai', 'jelita@gmail.com', 'IPA', 'smp 2 binjai', NULL, 'syamsul', 'rosmawarni', 'PNS', 'IRT', 'binjai', 'binjai', '0821345509', '-', 'SMA', 'SI Manajemen', 1, '1237220745', '2003-01-17', 'Pekan baru', '2018', NULL),
(123722091, 'Ana altafunnisa', 'ana234', 'ana alta funnisa', 'Perempuan', 'Islam', 'binjai', 'ana.alta@gmail.com', 'IPS', 'smp 1 binjai', NULL, 'abdul ', 'suriati', 'petani', 'guru ngaji', 'binjai', 'binjai', '0823478404421', '087798780132', 'SMA', 'SMA', 3, '123722091', '2000-08-15', 'siantar', '2016', NULL),
(123722092, 'Ayra dewi', 'aira43', 'Ayra dewi', 'Perempuan', 'Islam', '', 'ayradewi@gmail.com', 'IPA', 'smp 1 medan', NULL, 'Erlangga', 'salsabila', 'TNI', 'IRT', 'medan', 'medan', '08213433046523', '08520708052', 'SMA', 'SMA', 2, '123722092', '2002-11-21', 'medan', '2017', NULL),
(123722093, 'Leny aggraini', 'leny65', 'Leny aggraini', 'Perempuan', 'Islam', 'jl. jamin ginting', 'leni@gmail.com', 'IPS', 'smp 9 medan', NULL, 'hasannuddin', 'syarifah', 'PNS', 'wiraswasta', 'jl. jamin ginting', 'jl. jamin ginting', '08213050650', '08530090876', 'D1 pajak', 'S2 Ilmu Komputer', 1, '123722093', '2003-09-26', 'medan', '2018', NULL),
(123722094, 'ahmadi', 'ahmadi34', 'ahmadi', 'Laki-laki', 'Islam', 'binjai', 'ahmadi@gmail.com', 'IPS', 'smp 2 binjai', NULL, 'Surya darma', 'sulastri', 'guru', 'IRT', 'binjai', 'binjai', '082144007688', '-', 'SMA', 'SI Manajemen', 5, '123722094', '2000-09-06', 'medan', '2016', NULL),
(123722095, 'Rauzatul jannah', 'rauza12', 'Rauzatul jannah', 'Perempuan', 'Islam', 'medan', 'rauzah@gmail.com', 'IPS', 'smp 9 medan', NULL, 'herlambang', 'Minda pulungan', 'PNS', 'PNS', 'medan', 'medan', '082345453221', '085344876555', 'SI Ilmu komputer', 'SI Manajemen', 3, '123722095', '2002-11-25', 'Medan', '2017', 'Aktif'),
(123722096, 'M. fadly nasution', 'fadly12', 'M. fadly nasution', 'Laki-laki', 'Islam', 'medan', 'fadly@gmail.com', 'IPS', 'smp 9 medan', NULL, 'firza nasution', 'Ulfi handayani', 'Guru', 'PNS', 'medan', 'medan', '081236509876', '082138768765', 'D1 pajak', 'SI Fkip', 1, '123722096', '2003-11-12', 'Medan', '2018', 'Aktif'),
(123722097, 'Dea amanda', 'dea43', 'Dea amanda', 'Perempuan', 'Islam', 'medan', 'deaamanda@gmail.com', 'IPA', 'smp 18 medan', NULL, 'Tata Mukarram', 'Gistya farhani', 'PNS', 'PNS', 'medan', 'medan', '082134776654', '085343346555', 'SI teknologi Informasi', 'SI  teknologi informasi', 3, '123722097', '2002-03-28', 'Medan', '2017', 'Aktif'),
(123722098, 'Rina ayu', 'rinayu12', 'rina ayu', 'Perempuan', 'Islam', 'binjai', 'rina@gmail.com', 'IPS', 'smp 2 binjai', NULL, 'dedy wahyudi', 'Andini', 'petani', 'PNS', 'binjai', 'binjai', '082355478421', '085344546000', 'SI teknologi Informasi', 'SMA', 2, '123722098', '2000-04-23', 'binjai', '2016', 'Aktif'),
(123722099, 'Agusti ramadhan', 'agusti54', 'Agusti ramadhan', 'Perempuan', 'Islam', 'medan', 'gusti@gmail.com', 'IPA', 'smp 1 medan', NULL, 'Ahmad amin', 'Galuh pramesti', 'dosen', 'Guru', 'medan', 'medan', '08213434456', '085344946805', 'SI Fkip', 'SI Pdi', 2, '123722099', '2002-06-11', 'Medan', '2017', 'Aktif'),
(123722100, 'Geubrina ', 'brina32', 'Geubrina', 'Perempuan', 'Islam', 'medan', 'geubrina@gmail.com', 'IPS', 'smp 1 medan', NULL, 'adi nugraha', 'ernawti', 'Guru', 'dosen', 'medan', 'medan', '081239540087', '082139348700', 'SI Ilmu komputer', 'SI Fkip', 3, '123722100', '2003-12-02', 'Medan', '2018', 'Aktif'),
(123722101, 'Hisyam', 'hisyam123', 'Hisyam', 'Laki-laki', 'Islam', 'Padangsidimpuan', 'hisyam@gmail.com', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Ahmad', 'Adel', 'PNS', 'PNS', 'Padangsidimpuan', 'Padangsidimpuan', '085234987800', '085270114199', 'S1 Kedokteran', 'S1 Kedokteran', 2, '123722101', '1999-01-21', 'Padangsidimpuan', '2018', NULL),
(123722102, 'Qiara', 'qiqi', 'Qiara', 'Perempuan', 'Islam', 'jl dr.Mansyur no 12,Medan', 'qiqicantik@gmail.com', 'IPA', 'MTs N 1 Medan', NULL, 'Rafid Miftah', 'Aminah', 'Pengusaha', 'PNS', 'jl dr.Mansyur no 12,Medan', 'jl dr.Mansyur no 12,Medan', '082134567888', '085270114188', 'S2 Ekonomi', 'S1 Pertanian', 3, '123722102', '2000-01-23', 'Medan', '2018', NULL),
(123722103, 'Cantika', 'akucantika', 'Cantika', 'Perempuan', 'Islam', 'jl ahmad yani no 12,Medan', 'cantika@gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Agustami', 'Rahma', 'PNS', 'Wiraswasta', 'jl ahmad yani no 12,Medan', 'jl ahmad yani no 12,Medan', '082234125678', '082213456299', 'S1 Manajemen', 'S1 Teknologi Informasi', 3, '123722103', '2000-08-14', 'Jakarta', '2018', NULL),
(123722104, 'Gladys', 'gladys', 'Gladys Shafura Halimi Pohan', 'Perempuan', 'Islam', 'Jl H.M.Yamin,Medan', 'gladys@gmail.com', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Fandi', 'Indah Khai', 'PNS', 'PNS', 'Jl H.M.Yamin,Medan', 'Jl H.M.Yamin,Medan', '082234125678', '085823641098', 'S1 Kedokteran', 'S1 Matematika', 1, '123722104', '2002-09-12', 'Padangsidimpuan', '2017', NULL),
(123722105, 'Feby Wijayanti Hadi', 'ebyyy', 'Feby Wijayanti Hadi', 'Perempuan', 'Agama', 'Binjai', 'febyw@gmail.com', 'IPA', 'SMP N 1 Binjai', NULL, 'Hadi', 'Tati', 'PNS', 'PNS', 'Binjai', 'Binjai', '082370886544', '081376390288', 'S1 Kebidanan', 'S2 Manajemen', 2, '123722105', '1999-11-11', 'Jakarta', '2017', NULL),
(123722106, 'Amirullah Aulia', 'aulia', 'Amirullah Aulia', 'Laki-laki', 'Islam', 'Medan', 'aamirullah@gmail.com', 'IPS', 'SMP N 6 Medan', NULL, 'Babang', 'Ainiyah', 'PNS', 'PNS', 'Medan', 'Medan', '087756340981', '085230918765', 'SMA', 'S2 Ilmu Komputer', 4, '123722106', '1998-05-30', 'Medan', '2016', NULL),
(123722107, 'Elma Nesa', 'nesa', 'Elma Nesa', 'Perempuan', 'Islam', 'Binjai', 'nesa@gmail.com', 'IPS', 'SMP 18 Medan', NULL, 'Bagus Pratama', 'Putri Andini', 'Guru', 'IRT', 'Binjai', 'Binjai', '085312709433', '081376543211', 'SMA', 'D3 Kimia', 35, '123722107', '2001-08-17', 'Jakarta', '2016', NULL),
(123722108, 'Adi Habibi', 'habibiadi', 'Adi Habibi', 'Laki-laki', 'Islam', 'Medan', 'habibi@gmail.com', 'IPS', 'SMP N 9 Medan', NULL, 'Ihsan Tanjung', 'Ira Nofriani', 'Apoteker', 'PNS', 'Medan', 'Medan', '081260908065', '085216523200', 'S1 Farmasi', 'S1 Farmasi', 5, '123722108', '2001-11-19', 'Jakarta', '2017', NULL),
(123722109, 'Reza Prasetyo', 'eza', 'Reza Prasetyo', 'Laki-laki', 'Islam', 'Medan', 'reza@gmail.com', 'IPS', 'MTs N 1 Medan', NULL, 'Dika Prasetyo', 'Ayak', 'Pengusaha', 'Perawat', 'Medan', 'Medan', '087745329087', '081276098077', 'S1 Keperawatan', 'S2 Ilmu Komputer', 5, '123722109', '2002-08-19', 'Padangsidimpuan', '2017', NULL),
(123722110, 'Ariel Nugraha', 'aariel', 'Ariel Nugraha', 'Laki-laki', 'Agama', 'Medan', 'aariel@gmail.com', 'IPS', 'SMP N 6 Medan', NULL, 'Muhammad Syahputra', 'Rahmayani', 'Dokter', 'IRT', 'Medan', 'Medan', '085341227654', '08214357800', 'S1 Farmasi', 'S1 Kedokteran', 4, '123722110', '2001-06-23', 'Jakarta', '2017', NULL),
(123722111, 'Umar Lubis', 'umarlubs', 'Umar Lubis', 'Laki-laki', 'Islam', 'Medan', 'umarlbs@gmail.com', 'IPS', 'SMP N 6 Medan', NULL, 'Ahmad Rozi Lubis', 'Khairunnisa', 'PNS', 'Wiraswasta', 'Medan', 'Medan', '085312879800', '082287654321', 'SMA', 'S1 Farmasi', 4, '123722111', '2003-03-18', '1970-01-01', '2018', NULL),
(123722112, 'Elsa Siregar', 'elsacuanti', 'Elsa Siregar', 'Perempuan', 'Islam', 'Medan', 'elsa@gmail.com', 'IPS', 'SMP 1 Medan', NULL, 'Ahmad Rizal', 'Alya', 'Dosen', 'PNS', 'Medan', 'Medan', '082265218990', '082112234567', 'S1 Ekonomi', 'S2 Ilmu Komputer', 2, '123722112', '2003-06-13', '1970-01-01', '2018', NULL),
(123722113, 'Aulia Rizky Ritonga', 'auliar', 'Aulia Rizky Ritonga', 'Laki-laki', 'Islam', 'Medan', 'auliar@gmail.com', 'IPA', 'MTs N 1 Medan', NULL, 'Parlindungan Ritonga', 'Laila Wahyuni', 'Pengusaha', 'PNS', 'Medan', 'Medan', '082278452711', '081209887065', 'S1 Kebidanan', 'S2 Manajemen', 3, '123722113', '2001-09-29', '1970-01-01', '2016', NULL),
(123722114, 'Heru Supriadi', 'Herus', 'Heru Supriadi', 'Laki-laki', 'Islam', 'Medan', 'herusup@gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Muhammad Ali Akbar', 'Mahardiani', 'Dosen', 'Dokter', 'Medan', 'Medan', '082312903980', '081242178906', 'S1 Kedokteran', 'S2 Psiklogi', 4, '123722114', '2001-07-22', '1970-01-01', '2016', NULL),
(123722115, 'Hary Akhmadi', 'akhmadi', 'Hary Akhmadi', 'Laki-laki', 'Islam', 'Medan', 'akhmadih@gmail.com', 'IPA', 'SMP N 1 Jakarta', NULL, 'Sutrisno', 'Fitri Azzahra', 'Dosen', 'PNS', 'Medan', 'Medan', '081209441230', '085311782309', 'S1 Farmasi', 'S2 Teknik Sipil', 1, '123722115', '2001-10-10', '1970-01-01', '2016', NULL),
(123722116, 'Ghaisan Azzam Alfaris', 'azzam', 'Ghaisan Azzam Alfaris', 'Laki-laki', 'Islam', 'Medan', 'g_azzam@gmail.com', 'IPA', 'SMP N 2 Medan', NULL, 'Hariyono', 'Elmi Juliana', 'Polisi', 'Guru', 'Medan', 'Medan', '082168635122', '085823197865', 'S1 Matematika', 'S1 Hukum', 1, '123722116', '2002-09-29', '1970-01-01', '2017', NULL),
(123722117, 'Aulia Ahmad', 'aahmadau', 'Aulia Ahmad', 'Laki-laki', 'Islam', 'Medan', 'aaul@gmail.com', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Rahmad Abadi', 'Adelia Susanti', 'PNS', 'PNS', 'Medan', 'Medan', '082176340321', '081232009976', 'S1 Farmasi', 'S1 Hukum', 2, '123722117', '2002-09-20', '1970-01-01', '2017', NULL),
(123722118, 'M.Yusuf', 'yusuf', 'Muhammad Yusuf', 'Laki-laki', 'Islam', 'Medan', 'yusufm@gmail.com', 'IPA', 'SMP 3 Medsan', NULL, 'Resi Muhammad', 'Issyafira', 'Pengusaha', 'PNS', 'Medan', 'Medan', '082276549022', '082369237521', 'S2 Ekonomi', 'S1 Teknologi Informasi', 2, '123722118', '2001-06-21', '1970-01-01', '2017', NULL),
(123722119, 'Fakhrizal', 'fakhri123', 'Muhammad Fakhrizal', 'Laki-laki', 'Islam', 'Medan', 'mfakhri@gmail.com', 'IPS', 'MTs N 1 Medan', NULL, 'Ahmad yusuf', 'Aisyah Hazalif', 'PNS', 'PNS', 'Medan', 'Medan', '081278239508', '082165228964', 'S1 Kebidanan', 'S1 Pertanian', 1, '123722119', '2002-02-12', '1970-01-01', '2017', NULL),
(123722120, 'Rika', 'rikaa', 'Rika Syahriani', 'Perempuan', 'Islam', 'Jl pancing ,Medan', 'rikasy@gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Suyono', 'SitI Nurhayati', 'Pengusaha', 'IRT', 'Jl pancing ,Medan', 'Jl pancing ,Medan', '081230218823', '082123106922', 'SMA', 'S2 Manajemen', 1, '123722120', '2002-03-30', '1970-01-01', '2017', NULL),
(123722121, 'Alwi', 'alwii', 'Alwi Daffa', 'Laki-laki', 'Islam', 'jl dr.mansyur no 13,Medan', 'alwidaf@gmailcom', 'IPA', 'SMP N 1 Binjai', NULL, 'Hisyam Alif', 'Aini Qanita', 'Apoteker', 'Wiraswasta', 'jl dr.mansyur no 13,Medan', 'jl dr.mansyur no 13,Medan', '082112883028', '081288921362', 'SMA', 'S1 Farmasi', 2, '123722121', '2002-03-17', '1970-01-01', '2017', NULL),
(123722122, 'Hana', 'hana122', 'Hana Annisah', 'Perempuan', 'Islam', 'jl pancing no 13,Medan', 'hanas@gmail.com', 'IPA', 'SMP N 1 Binjai', NULL, 'Aulia Akbar', 'Rara', 'PNS', 'Pengusaha', 'jl pancing no 13,Medan', 'jl pancing no 13,Medan', '081221896832', '081276805621', 'SMA', 'S1 Teknologi Informasi', 1, '123722122', '2001-02-22', '1970-01-01', '2016', NULL),
(123722123, 'Rara', 'tiara123', 'Tiara Anastasya', 'Perempuan', 'Islam', 'jl.Sisimangaraja No 40,Medan', 'rara@gmail.com', 'IPA', 'SMP N 1 Binjai', NULL, 'Rahmad Shadri', ' Amalia Retno Wulandari', 'PNS', 'Wiraswasta', 'jl.Sisimangaraja No 40,Medan', 'jl.Sisimangaraja No 40,Medan', '082367229134', '081270226965', 'SMA', 'S1 Kehutanan', 2, '123722123', '2001-07-28', '1970-01-01', '2016', NULL),
(123722124, 'Dhanie', 'dhanie', 'Dhanie Prananta', 'Laki-laki', 'Islam', 'Jl jamin ginting no 123,Medan', 'dhanie@gmail.com', 'IPS', 'SMP N 6 Medan', NULL, 'Abul Rizal', 'Andini Permata', 'Pengusaha', 'PNS', 'Jl jamin ginting no 123,Medan', 'Jl jamin ginting no 123,Medan', '085230983970', '081288902619', 'S1 Kedokteran', 'S1 Teknologi Informasi', 1, '123722124', '2001-02-10', '1970-01-01', '2016', NULL),
(123722125, 'Fadli', 'adli125', 'Fadli Ibrahim', 'Laki-laki', 'Islam', 'Jl pancing No 16,Medan', '', 'IPA', 'SMP N 6 Medan', NULL, 'Azzam Alfarizi', 'Siti Nurhalizah', 'Dokter', 'PNS', 'Jl pancing No 16,Medan', 'Jl pancing No 16,Medan', '082341746920', '085621887600', 'S1 Farmasi', 'S1 Kedokteran', 2, '123722125', '2003-12-30', '1970-01-01', '2018', NULL),
(123722126, 'Abadi', 'abadi126', 'Putra Abadi', 'Laki-laki', 'Islam', 'jl T.Amir Hamzah No 1,Medan', 'abadi@gmail.com', 'IPS', 'SMP N 3 Medan', NULL, 'Ahmad Rozak', 'Melati Rahmadhani', 'Pengusaha', 'IRT', 'jl T.Amir Hamzah No 1,Medan', 'jl T.Amir Hamzah No 1,Medan', '085812317890', '081254920880', 'SMA', 'SMA', 4, '123722126', '2002-02-12', '1970-01-01', '2017', NULL),
(123722127, 'Afif', 'afif127', 'Afif Maulana', 'Laki-laki', 'Islam', 'jl wahid Hasyim No 12,Medan', 'afif@gmail.com', 'IPA', 'SMP N 2 Medan', NULL, 'Razali', 'Diana', 'Pengusaha', 'Guru', 'jl wahid Hasyim No 12,Medan', 'jl wahid Hasyim No 12,Medan', '082180398512', '08112341876', 'S2 Ekonomi', 'S2 Ilmu Komputer', 3, '123722127', '2003-05-02', '1970-01-01', '2018', NULL),
(123722128, 'Dwi', 'wiwi', 'Dwi Permata', 'Perempuan', 'Islam', 'jl Mawar No 11,Binjai', 'wiwi@gmail.com', 'IPS', 'SMP N 1 Binjai', NULL, 'Donny Abidin', 'Endah Ratnasari', 'PNS', 'Wiraswasta', 'jl Mawar No 11,Binjai', 'jl Mawar No 11,Binjai', '087789301288', '082366519056', 'SMA', 'S1 Hukum', 3, '123722128', '2001-06-08', '1970-01-01', '2016', NULL),
(123722129, 'Feri', 'erikk', 'Feri Afriyanto', 'Laki-laki', 'Islam', 'Jl jamin ginting no 120,Medan', 'feriafriyanto@gmail.', 'IPA', 'SMP N 5 Medan', NULL, 'Imam Kurniawan', 'Intan Rahayu', 'Dosen', 'Dosen', 'Jl jamin ginting no 120,Medan', 'Jl jamin ginting no 120,Medan', '081280427421', '087645912088', 'S2 Ekonomi', 'S2 Manajemen', 6, '123722129', '2001-12-25', '1970-01-01', '2016', NULL),
(123722130, 'Irfan ', 'ifan130', 'Irfan Hidayat', 'Laki-laki', 'Islam', 'jl sei agul no 200,Medan', 'irfanhidayat@gmail.c', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Iskandar Muda', 'Leli', 'PNS', 'Apoteker', 'jl sei agul no 200,Medan', 'jl sei agul no 200,Medan', '082184045598', '082355658097', 'S1 Farmasi', 'S1 Farmasi', 3, '123722130', '2001-04-04', '1970-01-01', '2016', NULL),
(123722131, 'Oji', 'oomji', 'Oji Nur Faozi', 'Laki-laki', 'Islam', 'jl sei agul No 12,Medan', 'oomji@gmail.com', 'IPS', 'SMP N 1 Medan', NULL, 'Ozi Fahrurozi', 'Siti Aisyah', 'Pengusaha', 'Perawat', 'jl sei agul No 12,Medan', 'jl sei agul No 12,Medan', '082378990055', '081223785700', 'S1 Kebidanan', 'S1 Pertanian', 1, '123722131', '2002-07-22', '1970-01-01', '2017', NULL),
(123722132, 'Sri', 'SRIA', 'Sri Wahyuni', 'Perempuan', 'Islam', 'Jl Sutomo Ujung No 123,Medan', 'sriwahyuni@gmail.com', 'IPS', 'MTs N 1 Medan', NULL, 'Abdul Rahman', 'Anataria', 'PNS', 'Wiraswasta', 'Jl Sutomo Ujung No 123,Medan', 'Jl Sutomo Ujung No 123,Medan', '082161890065', '082190348867', 'S1 Manajemen', 'S1 Perpajakan', 3, '123722132', '2001-11-11', 'Palembang', '2016', 'Aktif'),
(123722133, 'Lestari', 'lestari133', 'Lestari Harahap', 'Perempuan', 'Islam', 'Jl H.M.Yamin No 90,Medan', 'lestarihrp@gmail.com', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Benny Hartanto', 'Novita Sari', 'PNS', 'IRT', 'Jl H.M.Yamin No 90,Medan', 'Jl H.M.Yamin No 90,Medan', '081280926711', '082378765152', 'SMA', 'S1 Kimia', 1, '123722133', '2002-07-23', 'Padangsidimpuan', '2017', 'Aktif'),
(123722134, 'Yusra', 'usrausri', 'Yusraini', 'Perempuan', 'Islam', 'jl setia budi ,Medan', 'yusraini@gmail.com', 'IPA', 'SMP N 5 Medan', NULL, 'Adi Akbar', 'Nur Atikah', 'PNS', 'PNS', 'jl setia budi ,Medan', 'jl setia budi ,Medan', '081290216500', '082188762319', 'S1 Teknologi Informasi', 'S1 Arsitektur', 3, '123722134', '2002-09-13', 'Medan', '2017', 'Aktif'),
(123722135, 'Ayu', 'yuyuk', 'Ayu Kartika', 'Perempuan', 'Islam', 'Jl H.M.Yamin No 20,Medan', 'ayukartika@gmail.com', 'IPA', 'SMP N 1 Medan', NULL, 'Solehuddin', 'Adelia Utami', 'wiraswasta', 'PNS', 'Jl H.M.Yamin No 20,Medan', 'Jl H.M.Yamin No 20,Medan', '081278231900', '082134008079', 'S1 Farmasi', 'SMA', 4, '123722135', '2001-01-30', 'Binjai', '2016', 'Aktif'),
(123722136, 'Harist', 'hariss', 'Muhammad Harist', 'Laki-laki', 'Islam', 'jl suparman N0 18,Medan', 'mharist@gmail.com', 'IPA', 'SMP N 4 Medan', NULL, 'Muhammad Syahreza', 'Adinda Putri', 'Pengusaha', 'PNS', 'jl suparman N0 18,Medan', 'jl suparman N0 18,Medan', '081320918729', '082316819032', 'S1 Ekonomi', 'S1 Ekonomi', 4, '123722136', '2002-02-08', 'Medan', '2017', 'Aktif'),
(123722137, 'Gilang', 'lalang', 'Gilang Trio Ramadhan', 'Laki-laki', 'Islam', 'jl pancing no 12,Medan', 'gilang@gmail.com', 'IPA', 'SMP N 1 Binjai', NULL, 'Galuh Permana', 'Ella', 'Dokter', 'Guru', 'Binjai', 'Binjai', '082279814028', '081208117340', 'S1 Ekonomi', 'S1 Kedokteran', 1, '/gambar/123722137', '2003-07-29', 'Binjai', '2018', 'Aktif'),
(123722138, 'Intan', 'antan', 'Intan Rahayu', 'Perempuan', 'Islam', 'jl perintis kemerdekaan No 201,Medan', 'intanra@gmail.com', 'IPA', 'SMP N 6 Medan', NULL, 'Hisyam Maulana', 'Rani Pertiwi', 'PNS', 'Pengusaha', 'jl perintis kemerdekaan No 201,Medan', 'jl perintis kemerdekaan No 201,Medan', '085823660198', '081233097286', '', '', 4, '123722138', NULL, 'Medan', '2017', 'Aktif'),
(123722139, 'Rifal', 'rifale', 'Rifal Ariansyah', 'Laki-laki', 'Islam', 'jl sisimangaraja No 15,Medan', 'rifall@gmail.com', 'IPA', 'SMP N 7 Medan', NULL, 'Toni Faisal', 'Wesi', 'PNS', 'PNS', 'jl sisimangaraja No 15,Medan', 'jl sisimangaraja No 15,Medan', '081298003481', '082278532890', 'S1 Farmasi', 'S1 Pertanian', 3, '123722139', '2001-11-18', 'Medan', '2016', 'Aktif'),
(123722140, 'Zaenal', 'zeyn', 'Zaenal Abdin', 'Laki-laki', 'Islam', 'Jl Denai No 778,Medan', 'zeyn@gmail.com', 'IPS', 'SMP N 4 Medan', NULL, 'Arif Iskandar', 'Sri Hartati', 'PNS', 'Guru', 'Jl Denai No 778,Medan', 'Jl Denai No 778,Medan', '081276913822', '081280231784', 'S1 Matematika', 'S1 Pertanian', 1, '123722140', '2002-06-26', 'Jakarta', '2017', 'Aktif'),
(123722141, 'Alfi', 'alfi141', 'Alfi Pratama', 'Laki-laki', 'Islam', 'jl sisimangaraja No 111,Medan', 'alfipra@gmail.com', 'IPA', 'SMP N 5 Medan', NULL, 'Rinaldi Ekasaputra', 'Santi Susanti', 'PNS', 'PNS', 'jl sisimangaraja No 111,Medan', 'jl sisimangaraja No 111,Medan', '087743918300', '081290452213', 'S1 Kebidanan', 'S1 Peternakan', 3, '123722141', '2002-09-07', 'Medan', '2017', 'Aktif'),
(123722142, 'riri', 'ririi142', 'Riri Riansah', 'Perempuan', 'Islam', 'jl Setia Budi No 190,Medan', 'riririansah@gmail.co', 'IPS', 'MTs N 1 Medan', NULL, 'Muhammad Yunus', 'Nur Fatimah', 'Pengusaha', 'PNS', 'jl Setia Budi No 190,Medan', 'jl Setia Budi No 190,Medan', '082186120080', '082170224390', 'S1 Psikologi', 'S1 Teknik Informatika', 1, '123722142', '2001-05-10', 'Medan', '2016', 'Aktif'),
(123722143, 'Nia', 'niakurniaw', 'Nia Kurniawati', 'Perempuan', 'Islam', 'jl dr.mansyur no 111,Medan', 'niakurniawati@gmail.', 'IPA', 'SMP N 4 Medan', NULL, 'Agung Saputra', 'Rida Himyati Hasna', 'Dosen', 'IRT', 'jl dr.mansyur no 111,Medan', 'jl dr.mansyur no 111,Medan', '082287123022', '081240219800', 'S1 Farmasi', 'S2 Hukum', 2, '123722143', '2003-01-31', 'Medan', '2018', 'Aktif'),
(123722144, 'Wahyu Aji', 'ajiwahyu', 'Wahyu Aji Komara', 'Laki-laki', 'Islam', 'jl dr.mansyur no 120,Medan', 'wahyu@gmail.com', 'IPA', 'SMP Nurul \'Ilmi Padangsidimpua', NULL, 'Komaruddin', 'Rahmawati', 'Guru', 'Wiraswasta', 'jl Imam Bonjol No 123,Padangsisimpuan', 'jl Imam Bonjol No 123,Padangsisimpuan', '081209342210', '081230920711', 'SMA', 'S1 Pertanian', 3, '123722144', '2001-03-14', 'Padangsidimpuan', '2016', 'Aktif'),
(123722145, 'Salma', 'almanur', 'Salma Nur Aisy', 'Perempuan', 'Islam', 'jl suparman N0 22,Medan', 'salmanur@gmail.com', 'IPS', 'SMP 1 Medan', NULL, 'Ari Ramadani', 'Indri Zaqiah', 'Dosen', 'IRT', 'jl suparman N0 22,Medan', 'jl suparman N0 22,Medan', '082219307162', '081210198022', 'SMA', 'S2 Ilmu Komputer', 2, '123722145', '2003-11-11', 'Medan', '2018', 'Aktif'),
(123722146, 'Syahdan ', 'syahdan', 'Syahdan Dwi Cahyo', 'Laki-laki', 'Islam', 'jl H.M. Said No 19,Medan', 'syahdan@gmail.com', 'IPS', 'MTs N 2 Medan', NULL, 'Afgani Maulana', 'Selisa Fatimah', 'Pengusaha', 'Pengusaha', 'jl H.M. Said No 19,Medan', 'jl H.M. Said No 19,Medan', '081249511180', '085270882319', 'S1 Manajemen', 'S1 Farmasi', 2, '123722146', '2003-02-28', 'Medan', '2018', 'Aktif'),
(123722147, 'Nita', 'nitasukmal', 'Nita Sukmala', 'Perempuan', 'Islam', 'jl Karya No 20,Medan', 'nitasukmala@gmail.co', 'IPA', 'SMP N 5 Medan', NULL, 'Adi Darmawan', 'Rina Murni', 'Pengusaha', 'Wiraswasta', 'jl Karya No 20,Medan', 'jl Karya No 20,Medan', '082189775620', '081208772319', 'S1 Manajemen', 'S1 Teknologi Informasi', 2, '123722147', '2001-09-24', 'Medan', '2016', 'Aktif'),
(123722148, 'Adnan', 'adnan', 'Adnan Saefulloh', 'Laki-laki', 'Islam', 'jl K.L.Yos Sudarso No 96,Medan', 'adnann@gmail.com', 'IPA', 'SMP N 1 Medan', NULL, 'Muhammad Itsal', 'Susilawati', 'Pengusaha', 'PNS', 'jl K.L.Yos Sudarso No 96,Medan', 'jl K.L.Yos Sudarso No 96,Medan', '081280223012', '081289709231', 'S1 Kebidanan', 'S1 Pertanian', 2, '123722148', '2003-06-16', 'Binjai', '2018', 'Aktif'),
(123722149, 'Bagus', 'bagus', 'Bagus Rio Prasojo', 'Laki-laki', 'Islam', 'Jl Bambu No 190,Medan', 'bagus@gmail.com', 'IPA', 'MTs N 2 Medan', NULL, 'Raka Gustiana', 'Rani Nuryati', 'Pengusaha', 'PNS', 'Jl Bambu No 190,Medan', 'Jl Bambu No 190,Medan', '082130198022', '081280237219', 'S1 Farmasi', 'S2 Ilmu Komputer', 1, '123722149', '2001-08-12', 'Medan', '2016', 'Aktif'),
(123722150, 'Nurhasanah', 'hasanah', 'Nurhasanah Ritonga', 'Perempuan', 'Islam', 'jl adam malik No 190,Medan', 'hasanah@gmail.com', 'IPS', 'SMP N 5 Medan', NULL, 'Ibrahim', 'Aida', 'PNS', 'Guru', 'jl adam malik No 190,Medan', 'jl adam malik No 190,Medan', '081290227820', '081340281700', 'S1 Manajemen', 'S1 Kedokteran', 1, '123722150', '2002-10-11', 'Medan', '2017', 'Aktif'),
(123722151, 'andara', 'andara123', 'Andara Vasya Mardiah', 'Perempuan', 'Islam', 'Jl. Dr. Mansyur', 'andaravasya@gmail.co', 'IPA', 'MTs N 1 Rantau Prapat', NULL, 'Surya Putra', 'Sri Sediani', 'Wiraswasta', 'Guru', 'Jl. Dr. Mansyur', 'Jl. Dr. Mansyur', '081354621887', '082187652456', 'S1 Pendidikan Matematika', 'S1 Agribisnis', 3, '123722151', '2001-04-22', 'Rantau Prapat', '2016', NULL),
(123722152, 'Tia', 'tiarisdian', 'Tia Risdiana', 'Perempuan', 'Islam', 'Jl. Bukit Barisan II', 'tiarisdiana@gmail.co', 'IPA', 'SMP 7 Medan', NULL, 'Novri Karno', 'Miatri Handayani', 'Wiraswasta', 'Akuntasi', 'Jl. Bukit Barisan II', 'Jl. Bukit Barisan II', '081245786635', '081356243190', 'S1 Pendidikan Matematika', 'S1 Agribisnis', 2, '123722152', '2002-11-05', 'Rantau Prapat', '2017', NULL),
(123722153, 'Lolika', 'lolika123', 'Loilka', 'Perempuan', 'Islam', 'Jl. Adam Malik', 'lolika2gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Irwansyah', 'Retno Laras', 'Wiraswasta', 'Guru', 'Jl.Adam Malik', 'Jl. Adam Malik', '081376231456', '081256427898', 'S1 Pendidikan Kimia', 'S1 Agribisnis', 3, '123722153', '2001-10-27', 'Medan', '2016', NULL),
(123722154, 'aida', 'aida123', 'Aida Fitri Nasution', 'Perempuan', 'Islam', 'Jl. Gatot Subroto', 'aidafitri@gmail.com', 'IPS', 'SMP 7 Medan', NULL, 'Deddy Alamsyah', 'Nur Rizkanti', 'Guru', 'Guru', 'Jl. Gatot Subroto', 'Jl. Gatot Subroto', '082278653457', '081256312345', 'S1 Pendidikan Biologi', 'S1 Pendidikan Kimia', 1, '123722154', '2001-12-31', 'Medan', '2016', NULL),
(123722155, 'Bayu', 'bayu123', 'Bayu Ardiansyah', 'Laki-laki', 'Islam', 'Jl. Aluminium I', 'bayuardiansyah@gmail', 'IPS', 'SMP 3 Medan', NULL, 'Sultan Idris', 'Wiwik Indrayani', 'BUMN', 'Guru', 'Jl. Aluminium I', 'Jl. Aluminium I', '082145632478', '082145678438', 'S1 Pendidikan Fisika', 'S1 Teknik Industri', 3, '123722155', '0002-03-14', 'Aceh', '2017', NULL),
(123722156, 'Bella', 'bella123', 'Bella Annisa', 'Perempuan', 'Islam', 'Jl. Waringin', 'bellaannisa@gmail.co', 'IPS', 'SMP 1 Medan', NULL, 'Ramli Hari', 'Erna Wati', 'Guru ', 'Ibu Rumah Tangga', 'Jl. Waringin', 'Jl. Waringin', '082167543218', '081345216154', 'SMA', 'S1 Pendidikan Bahasa Inggris', 2, '123722156', '2003-12-10', 'Medan', '2018', NULL),
(123722157, 'Husna', 'husna123', 'Husna Nur Aisyah', 'Perempuan', 'Islam', 'Jl. Wahid Hayim', 'husnanur@gmail.com', 'IPS', 'SMP 10 Medan', NULL, 'Hermansyah', 'Dini Sari', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Wahid Hayim', 'Jl. Wahid Hayim', '082156437890', '081345327890', 'SMA', 'SMA', 2, '123722157', '2001-04-06', 'Binjai', '2016', NULL),
(123722158, 'Hizkia', 'hizkia123', 'Hizkia Putra', 'Laki-laki', 'Islam', 'Jl. Durung', 'hizkiaputra@yahoo.co', 'IPS', 'SMP 2 Medan', NULL, 'Budiono', 'Purnawati', 'Wiraswasta', 'Guru', 'Jl. Durung', 'Jl. Durung', '081345765432', '081245673215', 'S1 Pendidikan Matematika', 'S1 Agribisnis', 3, '123722158', '2001-02-08', 'Medan', '2016', NULL),
(123722159, 'Ridho', 'ridho123', 'Muhammad Ridho', 'Laki-laki', 'Islam', 'Jl. Sutomo', 'muhammadridho@gmail.', 'IPS', 'SMP 1 Medan', NULL, 'Edi Subekti', 'Yana Sundari', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Sutomo', 'Jl. Sutomo', '082134678765', '082267543289', 'SMA', 'S1 Ilmu Komputer', 1, '123722159', '0003-04-16', 'Kisaran', '2018', NULL),
(123722160, 'Fakhira', 'fakhira123', 'Fakhira Mentaya', 'Perempuan', 'Islam', 'Jl. Marelan', 'fakhiramentaya@gmail', 'IPA', 'SMP 12 Medan', NULL, 'Hasanuddin', 'Nur Hasanah', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Marelan', 'Jl. Marelan', '082145873256', '082276542121', 'SMA', 'S1 Agribisnis', 2, '123722160', '2002-03-04', 'Medan', '2017', NULL),
(123722161, 'Ilham', 'ilham123', 'Ilham Syahputra', 'Laki-laki', 'Islam', 'Jl.Gunung Krakatau', 'ilhamsyahputra2yahoo', 'IPA', 'SMP 18 Medan', NULL, 'Sawaludin', 'Yuni Sharah', 'Guru', 'Ibu Rumah Tangga', 'Jl.Gunung Krakatau', 'Jl.Gunung Krakatau', '081356876345', '082267432122', 'SMA', 'S1 Ilmu Komputer', 1, '123722161', '2003-07-13', 'Palembang', '2018', NULL),
(123722162, 'Raska', 'raska123', 'Raska Alma Syura', 'Perempuan', 'Islam', 'Jl. Setia Budi', 'raskaalma@yahoo.com', 'IPS', 'SMP 10 Medan', NULL, 'Hadi Tanto', 'Murtini', 'BUMN', 'Bidan', 'Jl. Setia Budi', 'Jl. Setia Budi', '082356718921', '081367983425', 'D3 Kebidanan', 'S1 Teknik Industri', 1, '123722162', '2003-08-24', 'Medan', '2018', NULL),
(123722163, 'Ade', 'ade123', 'Ade Ananda', 'Laki-laki', 'Islam', 'Jl. KH Dewantara', 'adeananda@yahoo.com', 'IPS', 'SMP 12 Medan', NULL, 'Ahmad Yudhi', 'Susiani', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. KH Dewantara', 'Jl. KH Dewantara', '082156893456', '081211789845', 'SMA', 'SMA', 2, '123722163', '2003-12-17', 'Medan', '2018', NULL),
(123722164, 'Aldrin', 'aldrin123', 'Aldrin Sanova', 'Laki-laki', 'Islam', 'Jl. Aluminium IV', 'aldrinsanova@gmail.c', 'IPS', 'SMP 1 Medan', NULL, 'Sulaiman', 'Fitriani', 'Wiraswasta', 'Guru', 'Jl. Aluminium IV', 'Jl. Aluminium IV', '082145679832', '0821345676123', 'S1 Pendidikan Matematika', 'SMA', 1, '123722164', '2002-02-05', 'Medan', '2017', NULL),
(123722165, 'Mawaddah', 'Mawaddah12', 'Nur Mawaddah', 'Perempuan', 'Islam', 'Jl. Sutomo', 'mawaddah@gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Hanafi Siregar', 'Suci Almira', 'Guru', 'Ibu Rumah Tangga', 'Jl. Sutomo', 'Jl. Sutomo', '081276498776', '081254688776', 'SMA', 'S1 Ekonomi', 2, '123722165', '2001-02-04', 'Medan', '2016', NULL),
(123722166, 'Putri', 'Putri123', 'Putri Mentari', 'Perempuan', 'Islam', 'Jl. Abdullah Lubis', 'putrimentari@yahoo.c', 'IPS', 'SMP 7 Medan', NULL, 'Maulana Ichsan', 'Alya Raihan', 'Polisi', 'Ibu Rumah Tangga', 'Jl. Abdullah Lubis', 'Jl. Abdullah Lubis', '081254877695', '081268799456', 'SMA', 'S1 Ilmu Kepolisian', 3, '123722066', '2003-03-18', 'Aceh', '2018', NULL),
(123722167, 'Nabila', 'nabila', 'Nabila Sagita', 'Perempuan', 'Agama', 'Jl. Meranti', 'nabilasagita@yahoo.c', 'IPS', 'SMP 11 Medan', NULL, 'Harianto', 'Fatimah Sari', 'Guru', 'Ibu Rumah Tangga', 'Jl. Meranti', 'Jl. Meranti', '082134562134', '082145673289', 'SMA', 'S1 Pendidikan Biologi', 3, '123722167', '2001-07-05', 'Binjai', '2016', NULL),
(123722168, 'Alvira', 'Alvira123', 'Alvira Nasution', 'Jenis Kelami', 'Islam', 'Jl. Thamrin', 'alviranst@yahoo.co.i', 'IPS', 'SMP 3 Medan', NULL, 'Rezqi Ahmad', 'Dede Nurmaliza', 'Wiraswasta', 'Jurnalis', 'Jl. Thamrin', 'Jl. Thamrin', '081254788695', '085127835647', 'SMA', 'SMA', 2, '123722068', '2002-01-10', 'Kisaran', '2017', NULL),
(123722169, 'Dewi', 'Dewi123', 'Dewi Purnama Sari', 'Perempuan', 'Islam', 'Jl. Yos Sudarso', 'dewipurnama@yahoo.co', 'IPA', 'SMP 12 Medan', NULL, 'Rozy Harahap', 'Nurul Azima', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Yos Sudarso', 'Jl. Yos Sudarso', '081575844901', '081258955094', 'SMA', 'SMA', 1, '123722069', '2002-06-24', 'Sabang', '2017', NULL),
(123722170, 'Fakhrul', 'Fakhrul123', 'Fakhrul Arifin', 'Laki-laki', 'Islam', 'Jl. Merbau', 'fakhrularifin@yahoo.', 'IPA', 'SMP 10 Medan', NULL, 'Adha Zulkhair', 'Anisa Putri', 'Arsitek', 'Guru', 'Jl. Merbau', 'Jl. Merbau', '081247688798', '081289477592', 'S1 Pendidikan Biologi', 'S1 Arsitektur', 2, '123722170', '2002-03-30', 'Medan', '2017', NULL);
INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `agama`, `alamat`, `email`, `jurusan`, `asal_sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_hp_ayah`, `no_hp_ibu`, `pendidikan_ibu`, `pendidikan_ayah`, `anak_ke`, `pict`, `tanggal_lahir`, `tempat`, `tahun`, `status`) VALUES
(123722171, 'Ghinafi', 'Ghinafi123', 'Ghinafi Ilhamsyah', 'Laki-laki', 'Islam', 'Jl. Bogor', 'ghinafilhamsyah', 'IPA', 'SMP 1 Medan', NULL, 'Imam Prakarsa', 'Nurul Hazzah', 'Pengacara', 'Designer', 'Jl. Bogor', 'Jl. Bogor', '081537866541', '085987966583', 'S1 Pertanian', 'S1 Hukum', 4, '123722171', '2001-03-17', 'Medan', '2016', NULL),
(123722172, 'Maudy', 'Maudy123', 'Maudy Dianty', 'Perempuan', 'Islam', 'Jl. Krakatau', 'maudydianty@gmail.co', 'IPA', 'SMP 7 Medan', NULL, 'Delfi Rizky', 'Dinda Cyntia', 'Penulis', 'Ibu Rumah Tangga', 'Jl. Krakatau', 'Jl. Krakatau', '085768894022', '081278799253', 'S1 Pendidikan Biologi', 'SMA', 2, '123722172', '2002-08-19', 'Palembang', '2017', NULL),
(123722173, 'Utami', 'Utami123', 'Utami Putri', 'Perempuan', 'Islam', 'Jl. Marelan', 'utamiputri@yahoo.co.', 'IPA', 'SMP 10 Medan', NULL, 'Gilang Kurnia', 'Syahfira Widya', 'Dokter', 'Penjahit', 'Jl. Marelan', 'Jl. Marelan', '081258799472', '081528967754', 'SMA', 'S1 Pendidikan Kimia', 2, '123722173', '2002-10-03', 'Kisaran', '2017', NULL),
(123722174, 'Arka', 'Arka123', 'Arka Kharisma', 'Laki-laki', 'Islam', 'Jl. Sunggal', 'arkakharisma@yahoo.c', 'IPS', 'SMP 12 Medan', NULL, 'Muhammad Ravie ', 'Silvia Mawarni', 'Pengusaha', 'Ibu Rumah Tangga', 'Jl. Sunggal', 'Jl. Sunggal', '081275487965', '085789022643', 'SMA', 'S1 Agribisnis', 3, '123722174', '2002-05-17', 'Aceh', '2017', NULL),
(123722175, 'Gisti', 'Gisti123', 'Gisti Putri', 'Perempuan', 'Islam', 'Jl. Adam Malik', 'gistiputri@gmail.com', 'IPS', '', NULL, 'Yogi Syahputra', 'Sinta Putri', 'Pengusaha', 'Ibu Rumah Tangga', 'Jl.Adam Malik', 'Jl. Adam Malik', '081258477693', '081254877964', 'S1 Ekonomi', 'S1 Ekonomi', 1, '123722175', '2002-06-14', 'Medan', '2017', NULL),
(123722176, 'Fariz', 'Fariz123', 'Fariz Pratama', 'Laki-laki', 'Islam', 'Jl. Sutomo', 'farizpratama@yahoo.c', 'IPA', 'SMP 7 Medan', NULL, 'Yahya Muharrom', 'Dina Fahira', 'Wiraswasta', 'Penulis', 'Jl. Sutomo', 'Jl. Sutomo', '085273588494', '081254676982', 'SMA', 'SMA', 2, '123722176', '2003-01-01', 'Binjai', '2018', NULL),
(123722177, 'Reza', 'Reza123', 'Reza Fadli', 'Laki-laki', 'Islam', 'Jl. Zainul Arifin', 'rezafadli@gmail.com', 'IPS', 'SMP 2 Medan', NULL, 'Rifqi Muda', 'Viola Manisha', 'Dokter', 'Jurnalis', 'Jl. Zainul Arifin', 'Jl. Zainul Arifin', '081278949352', '081273298754', 'SMA', 'S1 Kedokteran', 2, '123722177', '2003-04-18', 'Medan', '2018', NULL),
(123722178, 'Jihan', 'Jihan123', 'Jihan Camilia', 'Perempuan', 'Islam', 'Jl. Iskandar Muda', 'jihancamilia@yahoo.c', 'IPS', 'SMP 10 Medan', NULL, 'Ade Rizky', 'Novita Dewi', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Iskandar Muda', 'Jl. Iskandar Muda', '085276455398', '08128769854', 'D3 Akuntasi', 'S1 Agribisnis', 2, '123722178', '2001-11-05', 'Medan', '2016', NULL),
(123722179, 'Rizka', 'Rizka123', 'Rizka Fitrisa', 'Perempuan', 'Islam', 'Jl. Simpang Gajahmada', 'rizkafitrisa@yahoo.c', 'IPA', 'SMP 7 Medan', NULL, 'Dwi Yasa', 'Hana Shofiyyah', 'Wiraswasta', 'Guru', 'Jl. Simpang Gajahmada', 'Jl. Simpang Gajahmada', '081287499862', '081298700956', 'S1 Pendidikan Biologi', 'SMA', 3, '123722179', '2002-06-27', 'Kisaran', '2017', NULL),
(123722180, 'Mufti', 'Mufti123', 'Mufti Azizi', 'Laki-laki', 'Islam', 'Jl. Aluminium I', 'muftiazizi@gmail.com', 'IPA', 'SMP 1 Medan', NULL, 'Sutan Thoriq', 'Olivia Lisa', 'Wiraswasta', 'Ibu Rumah Tangga', 'Jl. Aluminium I', 'Jl. Aluminium I', '081268743572', '085897465321', 'SMA', 'S1 Teknik Industri', 1, '123722180', '2003-03-20', 'Medan', '2018', NULL),
(171402067, 'bayhaqi101', 'bayha101', 'Muhammad Bayhaqi Daulay', 'Laki-laki', 'ISLAM', 'adjwkandajda', 'bayhaqi101@gmail.com', 'IPA', 'SMA', NULL, 'dawdad', 'awdadwa', 'dawdadw', 'dawdada', 'awdadad', 'dadadaw', 'adawdad', 'dawdad', NULL, NULL, 0, '171402067', '2018-12-29', 'awdadaw', 'adawdad', NULL),
(9223372036854775807, '', '', '', 'Jenis Kelami', 'Agama', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', '', '', 0, '/gambar/12345678909876543212', '', '', '', NULL);

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `marcing_band`
--
ALTER TABLE `marcing_band`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `paskibra`
--
ALTER TABLE `paskibra`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `pramuka`
--
ALTER TABLE `pramuka`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `terkini`
--
ALTER TABLE `terkini`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
