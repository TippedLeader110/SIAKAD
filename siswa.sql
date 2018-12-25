-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 08:33 AM
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
(123722100, 'Geubrina ', 'brina32', 'Geubrina', 'Perempuan', 'Islam', 'medan', 'geubrina@gmail.com', 'IPS', 'smp 1 medan', NULL, 'adi nugraha', 'ernawti', 'Guru', 'dosen', 'medan', 'medan', '081239540087', '082139348700', 'SI Ilmu komputer', 'SI Fkip', 3, '123722100', '2003-12-02', 'Medan', '2018', 'Aktif');

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
