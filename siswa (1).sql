-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 08:35 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
(123722170, 'Fakhrul', 'Fakhrul123', 'Fakhrul Arifin', 'Laki-laki', 'Islam', 'Jl. Merbau', 'fakhrularifin@yahoo.', 'IPA', 'SMP 10 Medan', NULL, 'Adha Zulkhair', 'Anisa Putri', 'Arsitek', 'Guru', 'Jl. Merbau', 'Jl. Merbau', '081247688798', '081289477592', 'S1 Pendidikan Biologi', 'S1 Arsitektur', 2, '123722170', '2002-03-30', 'Medan', '2017', NULL),
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
