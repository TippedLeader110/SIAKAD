-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 07:58 AM
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
(2222, '', '', '', 'Jenis Kelami', '', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, 0, '/gambar/2222', '', '', '', NULL),
(123722001, 'Fatimah', 'fatimah32', 'Fatimah Azzahra', 'Perempuan', 'Islam', 'Jl. Patimura', 'fatimah.azahra@gmail', 'IPA', 'SMP 2 Sabang', 'a', 'Suhartono', 'Azalea', 'Wiraswasta', 'PNS', 'Jl. Patimura', 'Jl. Patimura', '0812365498764', '08523798352', NULL, NULL, 3, '001237229', '2002-12-23', 'Medan', '2016', NULL),
(123722002, 'Azhar', 'azhar12', 'M. Azhar', 'Laki-laki', 'Islam', 'Jl. Glugur darat', 'azhar12@gmail.com', 'IPS', 'SMP 2 Medan', 'b', 'fadli', 'erikawati', 'PNS', 'Guru', 'Jl. Glugur darat', 'Jl. Glugur Darat', '082345454421', '082134567765', NULL, NULL, 1, '123722002', '2001-05-29', 'Medan', '2017', NULL),
(123722003, 'Naufal', 'naufal12', 'Naufal Azhari', 'Laki-laki', 'Islam', 'jl. kuningan', 'naufal12@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Ali hidayat', 'siti hajar', 'Designer', 'Dokter gigi', 'Jl. kuningan ', 'Jl. kuningan', '082134346523', '082134348532', NULL, NULL, 2, '123722003', '2000-02-06', 'Padang', '2018', NULL),
(123722004, 'Kenzo', 'enzo123', 'Kenzo julian', 'Laki-laki', 'Islam', 'Jl. malioboro', 'kenzo23@gmail.com', 'IPS', 'smp 1 binjai', 'C', 'Rafid', 'Siti namira', 'Pilot', 'pramugari', 'Jl. universitas', 'jl. universitas', '08534223322', '087796782132', NULL, NULL, 3, '123722004', '2002-03-23', 'Aceh', '2016', NULL),
(123722005, 'eka nurmala', 'nurmala23', 'Eka nurmala', 'Perempuan', 'Islam', 'jl. Alumni', 'eka.nurmala@gmail.co', 'IPA', 'SMP 2 Stebing tinggi', 'a', 'Naufal', 'Nurul', 'Wiraswasta', 'IRT', 'jl. gagak hitam', 'jl. gagak hitam', '082345546566', '085344546555', NULL, NULL, 5, '123722005', '2002-03-12', 'Tebing tinggi', '2017', NULL),
(123722006, 'tria12', 'ria32', 'Tria riski', 'Perempuan', 'Islam', 'jl. alumni', 'tria12@gmail.com', 'IPS', 'smp 2 binjai', 'C', 'bayhaqi', 'Lia tusina', 'Guru', 'guru', 'jl. alumni', 'jl. alumni', '082144567688', '081245378766', NULL, NULL, 4, '123722006', '2000-08-05', '', '2016', NULL),
(123722008, 'sulaiman', 'sule12', 'sulaiman', 'Laki-laki', 'Islam', 'jl. hassanuddin', 'sulaiman23@gmail.com', 'IPA', 'mtsn 1 sabang', 'Kelas', 'rahmad', 'fitri', 'guru', 'wiraswasta', 'jl. hassanuddin', 'jl. hassanuddin', '0821345565', '-', NULL, NULL, 2, '123722008', '2001-03-31', 'sabang', '2017', NULL),
(123722009, 'ihsan21', 'sanchan12', 'ihsan maulana', 'Laki-laki', 'Islam', 'jl. tengku hasyim', 'ihsan21@gmail.com', 'IPS', 'smp 1 medan', 'C', 'maulana', 'halimah', 'Guru', 'guru', 'jl. tengku hasyim', 'jl. tengku hasyim', '082345657779', '085324568776', NULL, NULL, 1, '123722009', '2000-06-23', 'jakarta', '2016', NULL),
(123722010, 'haura', 'haura23', 'haura rasyid', 'Perempuan', 'Islam', 'jl. setia budi', 'haura12@gmail.com', 'IPA', 'mtsn 1 medan', 'b', 'rasyid', 'aminah', 'PNS', 'guru', 'jl. setia budi', 'jl. setia budi', '081245433355', '082176543326', NULL, NULL, 5, '123722010', '2000-02-09', 'pekan baru', '2017', NULL),
(123722011, 'allia', 'allia34@gm', 'Allia rania', 'Perempuan', 'Islam', 'jl. setia budi', 'allia43@gmail.com', 'Jurusan', 'smp helvetia', 'b', 'ihsan', 'nadia', 'dokter', 'dosen', 'jl.setia budi', 'jl. setia budi', '082314567666', '085312456676', NULL, NULL, 4, '123722011', '2001-12-02', 'padang', '2018', NULL),
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
(171402067, 'bayhaqi101', 'bayha101', 'Muhammad Bayhaqi Daulay', 'Laki-laki', 'ISLAM', 'adjwkandajda', 'bayhaqi101@gmail.com', 'IPA', 'SMA', NULL, 'dawdad', 'awdadwa', 'dawdadw', 'dawdada', 'awdadad', 'dadadaw', 'adawdad', 'dawdad', NULL, NULL, 0, '171402067', '2018-12-29', 'awdadaw', 'adawdad', NULL);

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
