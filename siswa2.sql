-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2018 pada 08.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

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
-- Struktur dari tabel `siswa`
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
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `nama`, `jk`, `agama`, `alamat`, `email`, `jurusan`, `asal_sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ayah`, `alamat_ibu`, `no_hp_ayah`, `no_hp_ibu`, `pendidikan_ibu`, `pendidikan_ayah`, `anak_ke`, `pict`, `tanggal_lahir`, `tempat`, `tahun`, `status`) VALUES
(12, '', '', '', 'Jenis Kelami', 'Agama', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', '', '', 0, '/gambar/12', '', '', '', NULL),
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
(171402067, 'bayhaqi101', 'bayha101', 'Muhammad Bayhaqi Daulay', 'Laki-laki', 'ISLAM', 'adjwkandajda', 'bayhaqi101@gmail.com', 'IPA', 'SMA', NULL, 'dawdad', 'awdadwa', 'dawdadw', 'dawdada', 'awdadad', 'dadadaw', 'adawdad', 'dawdad', NULL, NULL, 0, '171402067', '2018-12-29', 'awdadaw', 'adawdad', NULL),
(9223372036854775807, '', '', '', 'Jenis Kelami', 'Agama', '', '', 'Jurusan', '', NULL, '', '', '', '', '', '', '', '', '', '', 0, '/gambar/12345678909876543212', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
