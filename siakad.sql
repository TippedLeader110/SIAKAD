-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Des 2018 pada 13.01
-- Versi Server: 10.1.26-MariaDB
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
-- Struktur dari tabel `abs_agustus`
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
-- Struktur dari tabel `abs_april`
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
-- Struktur dari tabel `abs_desember`
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
-- Struktur dari tabel `abs_februari`
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
-- Struktur dari tabel `abs_januari`
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
-- Struktur dari tabel `abs_juli`
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
-- Struktur dari tabel `abs_juni`
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
-- Struktur dari tabel `abs_maret`
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
-- Struktur dari tabel `abs_mei`
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
-- Struktur dari tabel `abs_november`
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
-- Struktur dari tabel `abs_oktober`
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
-- Struktur dari tabel `abs_september`
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
-- Struktur dari tabel `admin`
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
-- Struktur dari tabel `akidah_akhlak`
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
-- Struktur dari tabel `biologi_p`
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
-- Struktur dari tabel `b_arab`
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
-- Struktur dari tabel `b_indo`
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
-- Struktur dari tabel `b_ing`
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
-- Struktur dari tabel `b_jerman_p`
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
-- Struktur dari tabel `ekonomi_p`
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
-- Struktur dari tabel `fikih`
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
-- Struktur dari tabel `fisika_p`
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
-- Struktur dari tabel `geografi`
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
-- Struktur dari tabel `guru`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimia_p`
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
-- Struktur dari tabel `matematika`
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
-- Struktur dari tabel `penjas`
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
-- Struktur dari tabel `pkn`
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
-- Struktur dari tabel `prakarya_kewirausahaan`
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
-- Struktur dari tabel `quran_hadis`
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
-- Struktur dari tabel `sejarah`
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
-- Struktur dari tabel `sejarah_indo`
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
-- Struktur dari tabel `seni_budaya`
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
-- Struktur dari tabel `siswa`
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
  `pict` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ski`
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
-- Struktur dari tabel `sosiologi`
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
-- Indexes for table `kimia_p`
--
ALTER TABLE `kimia_p`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `matematika`
--
ALTER TABLE `matematika`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `abs_agustus`
--
ALTER TABLE `abs_agustus`
  ADD CONSTRAINT `abs_agustus_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_april`
--
ALTER TABLE `abs_april`
  ADD CONSTRAINT `abs_april_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_desember`
--
ALTER TABLE `abs_desember`
  ADD CONSTRAINT `abs_desember_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_februari`
--
ALTER TABLE `abs_februari`
  ADD CONSTRAINT `abs_februari_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_januari`
--
ALTER TABLE `abs_januari`
  ADD CONSTRAINT `abs_januari_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_juli`
--
ALTER TABLE `abs_juli`
  ADD CONSTRAINT `abs_juli_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_juni`
--
ALTER TABLE `abs_juni`
  ADD CONSTRAINT `abs_juni_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_mei`
--
ALTER TABLE `abs_mei`
  ADD CONSTRAINT `abs_mei_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_november`
--
ALTER TABLE `abs_november`
  ADD CONSTRAINT `abs_november_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_oktober`
--
ALTER TABLE `abs_oktober`
  ADD CONSTRAINT `abs_oktober_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `abs_september`
--
ALTER TABLE `abs_september`
  ADD CONSTRAINT `abs_september_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `akidah_akhlak`
--
ALTER TABLE `akidah_akhlak`
  ADD CONSTRAINT `akidah_akhlak_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `biologi_p`
--
ALTER TABLE `biologi_p`
  ADD CONSTRAINT `biologi_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `b_arab`
--
ALTER TABLE `b_arab`
  ADD CONSTRAINT `b_arab_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `b_indo`
--
ALTER TABLE `b_indo`
  ADD CONSTRAINT `b_indo_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `b_ing`
--
ALTER TABLE `b_ing`
  ADD CONSTRAINT `b_ing_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `b_ing_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `b_jerman_p`
--
ALTER TABLE `b_jerman_p`
  ADD CONSTRAINT `b_jerman_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `ekonomi_p`
--
ALTER TABLE `ekonomi_p`
  ADD CONSTRAINT `ekonomi_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `fikih`
--
ALTER TABLE `fikih`
  ADD CONSTRAINT `fikih_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `fisika_p`
--
ALTER TABLE `fisika_p`
  ADD CONSTRAINT `fisika_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `geografi`
--
ALTER TABLE `geografi`
  ADD CONSTRAINT `geografi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kimia_p`
--
ALTER TABLE `kimia_p`
  ADD CONSTRAINT `kimia_p_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `matematika`
--
ALTER TABLE `matematika`
  ADD CONSTRAINT `matematika_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `penjas`
--
ALTER TABLE `penjas`
  ADD CONSTRAINT `penjas_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pkn`
--
ALTER TABLE `pkn`
  ADD CONSTRAINT `pkn_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `pkn_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `prakarya_kewirausahaan`
--
ALTER TABLE `prakarya_kewirausahaan`
  ADD CONSTRAINT `prakarya_kewirausahaan_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `prakarya_kewirausahaan_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `quran_hadis`
--
ALTER TABLE `quran_hadis`
  ADD CONSTRAINT `quran_hadis_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD CONSTRAINT `sejarah_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `sejarah_indo`
--
ALTER TABLE `sejarah_indo`
  ADD CONSTRAINT `sejarah_indo_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `seni_budaya`
--
ALTER TABLE `seni_budaya`
  ADD CONSTRAINT `seni_budaya_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `seni_budaya_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `sejarah_indo` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `ski`
--
ALTER TABLE `ski`
  ADD CONSTRAINT `ski_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ski_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `sosiologi`
--
ALTER TABLE `sosiologi`
  ADD CONSTRAINT `sosiologi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `sosiologi_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `guru` (`kode_mapel`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
