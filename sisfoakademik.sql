-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 02:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfoakademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuns`
--

CREATE TABLE `akuns` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akuns`
--

INSERT INTO `akuns` (`id`, `username`, `password`, `role`) VALUES
(15, 'dodoirwan', 'dodoirwan', 'Dosen'),
(16, 'fsthevanie', 'fsthevanie', 'Dosen'),
(17, 'sprabowo', 'sprabowo', 'Dosen'),
(18, 'yunitarp', 'yunitarp', 'Mahasiswa'),
(19, 'ranggi', 'ranggi', 'Mahasiswa'),
(20, 'melatisp', 'melatisp', 'Mahasiswa'),
(21, 'fnabilah', 'fnabilah', 'Mahasiswa'),
(22, 'giaseptiana', 'giaseptiana', 'Dosen'),
(23, 'nselviandro', 'nselviandro', 'Dosen'),
(24, 'admin', 'admin', 'Admin'),
(25, 'testing', 'testing', 'LAAK'),
(26, 'dhidayatuloh', 'dhidayatuloh', 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kode_dosen` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `akun_id`, `prodi_id`, `nip`, `nama`, `kode_dosen`) VALUES
(4, 15, 3, '1102544819', 'Dodo Irwan', 'DIA'),
(5, 16, 3, '1102544719', 'Febryanti Sthevanie', 'FSV'),
(6, 17, 3, '1102644819', 'Sidik Prabowo', 'SP'),
(7, 22, 3, '1102644819', 'Gia Septiana Wulandari', 'GIA'),
(8, 23, 3, '110258877', 'Nungki Selviandro', 'NKS'),
(9, 26, 3, '18976354', 'Dani Hidayatuloh', 'DAT');

-- --------------------------------------------------------

--
-- Table structure for table `gedungs`
--

CREATE TABLE `gedungs` (
  `id` int(11) NOT NULL,
  `kode_gedung` varchar(5) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedungs`
--

INSERT INTO `gedungs` (`id`, `kode_gedung`, `nama_gedung`) VALUES
(3, 'R1', 'Gedung Bangkit'),
(4, 'R2', 'Gedung Lingian'),
(5, 'R3', 'Gedung Panehan'),
(6, 'FTE1', 'Gedung Barung'),
(7, 'FTE2', 'Gedung Ararkula'),
(8, 'FTE3', 'Gedung Deli'),
(9, 'FRI1', 'Gedung Karang'),
(10, 'FRI2', 'Gedung Mangudu'),
(11, 'FIF1', 'Gedung Panambulai'),
(12, 'FIF2', 'Gedung Kultubai Utara'),
(13, 'FIF3', 'Gedung Kultbai Selatan'),
(14, 'KU1', 'Grha Wiyata Cacuk Sudarijanto-A'),
(15, 'KU2', 'Grha Wiyata Cacuk Sudarijanto-B'),
(16, 'KU3', 'Gedung Tokong Nanas');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam` int(2) NOT NULL,
  `menit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `matakuliah_id`, `ruangan_id`, `dosen_id`, `kelas_id`, `hari`, `jam`, `menit`) VALUES
(2, 1, 14, 7, 4, 'SENIN', 6, 30),
(3, 2, 19, 5, 4, 'SENIN', 10, 30),
(4, 6, 19, 8, 4, 'KAMIS', 13, 30);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kode_kelas` varchar(8) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kapasitas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `prodi_id`, `kode_kelas`, `nama_kelas`, `kapasitas`) VALUES
(4, 3, 'IF-38-03', 'S1 Teknik Informatika 38 03', 40),
(5, 3, 'IF-38-01', 'S1 Teknik Informatika 38 01', 40),
(6, 3, 'IF-38-02', 'S1 Teknik Informatika 38 02', 40),
(7, 3, 'IF-38-04', 'S1 Teknik Informatika 38 04', 40),
(8, 3, 'IF-38-05', 'S1 Teknik Informatika 38 05', 40),
(9, 3, 'IF-38-06', 'S1 Teknik Informatika 38 06', 40),
(10, 3, 'IF-38-07', 'S1 Teknik Informatika 38 07', 40),
(11, 3, 'IF-38-08', 'S1 Teknik Informatika 38 08', 40),
(12, 4, 'IK-38-01', 'S1 Ilmu Komputasi 38 01', 40),
(13, 4, 'IK-38-02', 'S1 Ilmu Komputasi 38 02', 40),
(14, 4, 'IK-38-03', 'S1 Ilmu Komputasi 38 03', 40),
(15, 5, 'TT3801', 'S1 Teknik Telekomunikasi', 40);

-- --------------------------------------------------------

--
-- Table structure for table `laaks`
--

CREATE TABLE `laaks` (
  `id` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laaks`
--

INSERT INTO `laaks` (`id`, `akun_id`, `nip`, `nama`) VALUES
(1, 11, '987654321', 'Suwandi'),
(2, 25, '132212', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `akun_id`, `kelas_id`, `prodi_id`, `nim`, `nama`) VALUES
(3, 18, 4, 3, '1301141193', 'Yunita Rachma Pradiawati'),
(4, 19, 4, 3, '1301144293', 'Rahajeng Anggi Puspita'),
(5, 20, 4, 3, '1301144363', 'Melati Suci Pratiwi'),
(6, 21, 4, 3, '1301144423', 'Farah Nabilah M');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahs`
--

CREATE TABLE `matakuliahs` (
  `id` int(11) NOT NULL,
  `kode_matakuliah` varchar(8) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(1) NOT NULL,
  `tingkat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliahs`
--

INSERT INTO `matakuliahs` (`id`, `kode_matakuliah`, `nama_matakuliah`, `sks`, `tingkat`) VALUES
(1, 'CSH3G3', 'Logika Matematika', 3, 2),
(2, 'CSG2A3', 'Algoritma dan Struktur Data', 3, 2),
(3, 'MUG2B3', 'Logika Matematika', 3, 2),
(4, 'CSG2C3', 'Interaksi Manusia dan Komputer', 3, 2),
(5, 'MUG1E3', 'Aljabar Linier', 3, 2),
(6, ' CSG2D3', 'Basis Data Relasional', 3, 2),
(7, 'CSG2F3', 'Sistem dan Logika Digital', 3, 2),
(8, 'CSG2G3', 'Organisasi dan Arsitektur Komputer', 3, 2),
(9, 'CSG2H3', 'Pemrograman Berorientasi Objek', 4, 2),
(10, 'CSG2J3', 'Rekayasa Perangkat Lunak', 3, 2),
(11, 'MUG2A3', 'Matematika Diskret', 3, 2),
(12, 'HUG2A2 ', 'Geladi', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `uts` double NOT NULL DEFAULT '0',
  `uas` double NOT NULL DEFAULT '0',
  `tubes` double NOT NULL DEFAULT '0',
  `kuis` double NOT NULL DEFAULT '0',
  `tugas` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `mahasiswa_id`, `matakuliah_id`, `uts`, `uas`, `tubes`, `kuis`, `tugas`) VALUES
(1, 3, 1, 100, 100, 100, 100, 100),
(2, 4, 1, 0, 0, 0, 0, 0),
(3, 5, 1, 90, 100, 100, 100, 100),
(4, 6, 1, 0, 0, 0, 0, 0),
(5, 3, 2, 100, 100, 100, 100, 100),
(6, 5, 2, 0, 0, 0, 0, 0),
(7, 4, 2, 0, 0, 0, 0, 0),
(8, 6, 2, 0, 0, 0, 0, 0),
(9, 0, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `presensis`
--

CREATE TABLE `presensis` (
  `id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensis`
--

INSERT INTO `presensis` (`id`, `jadwal_id`, `mahasiswa_id`, `tanggal`, `status`) VALUES
(1, 1, 1, '2016-12-07', 'hadir'),
(2, 1, 2, '2016-12-07', 'sakit'),
(3, 2, 3, '2016-12-10', 'hadir'),
(4, 2, 4, '2016-12-10', 'hadir'),
(5, 2, 5, '2016-12-10', 'hadir'),
(6, 2, 6, '2016-12-10', 'hadir'),
(7, 2, 3, '2016-12-10', 'hadir'),
(8, 2, 4, '2016-12-10', 'hadir'),
(9, 2, 5, '2016-12-10', 'hadir'),
(10, 2, 6, '2016-12-10', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` int(11) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `kode_prodi`, `nama_prodi`) VALUES
(3, '13011', 'S1 Teknik Informatika'),
(4, '13012', 'S1 Ilmu Komputasi'),
(5, '11011', 'S1 Teknik Telekomunikasi'),
(6, '11012', 'S1 Teknik Fisika'),
(7, '11013', 'S1 Teknik Elektro'),
(8, '12011', 'S1 Teknik Industri'),
(9, '12012', 'S1 Sistem Informasi'),
(10, '670', 'D3 Teknik Telekomunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` int(11) NOT NULL,
  `gedung_id` int(11) NOT NULL,
  `kode_ruangan` varchar(20) NOT NULL,
  `nama_ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `gedung_id`, `kode_ruangan`, `nama_ruangan`) VALUES
(3, 14, 'KU1.01.01', 'A101'),
(4, 14, 'KU1.01.02', 'A102'),
(5, 14, 'KU1.01.03', 'A103'),
(6, 14, 'KU1.01.04', 'A104'),
(7, 14, 'KU1.01.05', 'A105'),
(8, 14, 'KU1.01.06', 'A106'),
(9, 14, 'KU1.01.07', 'A107'),
(10, 14, 'KU1.01.08', 'A108'),
(11, 14, 'KU1.01.09', 'A109'),
(12, 14, 'KU1.01.10', 'A110'),
(13, 14, 'KU1.02.01', 'A201'),
(14, 14, 'KU1.02.02', 'A202'),
(15, 14, 'KU1.02.03', 'A203'),
(16, 14, 'KU1.02.04', 'A204'),
(17, 14, 'KU1.02.05', 'A205'),
(18, 14, 'KU1.02.06', 'A206'),
(19, 14, 'KU1.02.07', 'A207'),
(20, 14, 'KU1.02.08', 'A208'),
(21, 14, 'KU1.02.09', 'A209'),
(22, 14, 'KU1.02.10', 'A210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuns`
--
ALTER TABLE `akuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laaks`
--
ALTER TABLE `laaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensis`
--
ALTER TABLE `presensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuns`
--
ALTER TABLE `akuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `laaks`
--
ALTER TABLE `laaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `presensis`
--
ALTER TABLE `presensis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
