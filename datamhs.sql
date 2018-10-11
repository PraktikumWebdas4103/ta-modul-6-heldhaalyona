-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 06:29 PM
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
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhsiswa`
--

CREATE TABLE `mhsiswa` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhsiswa`
--

INSERT INTO `mhsiswa` (`nim`, `password`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('6701170013', 'c5b2cebf15b205503560c4e8e6d1ea', 'Yulia', 'MI41-02', 'Perempuan', 'Menggambar', 'Ekonomi dan Bisnis', 'Sukabirus, no.80 Bandung'),
('6701170116', '37693cfc748049e45d87b8c7d8b9aa', 'faiz', 'MI41-01', 'Laki-Laki', 'Basket', 'Ilmu Terapan', 'Busan, no. 1 South Korea'),
('6701174028', '5ec829debe54b19a5f78d9a65b900a', 'Heldha Alyona Nathasya', 'MI41-03', 'Perempuan', 'Menari', 'Ilmu Terapan', 'jl.bandung sukapura');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `judul` varchar(30) NOT NULL,
  `cerita` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`judul`, `cerita`, `foto`, `nim`) VALUES
('saya suka kodingan', 'Saya tahu saya bisa, karena saya ingin menjadi programmer maka dari itu saya jatuh cinta dengan kodingan walapun saya banyak kekurangan dan selalu banyak kesalahan dalam kodingan. Maka dari itu, saya optimis saya pasti bisa dalam menghadapai ini walaupun saya  tidak bisa. Karena saya selalu didukung dan dibantu oleh orang-orang terdekat saya walaupun mereka juga sesibuk seperti saya.', '4-Sekolah-Dasar-di-Deiyai-Papua-Terancam-Ditutup.jpg', '6701174028'),
('Saya suka pohon', 'dahulu kala saat saya masih kecil sekitar umur 7 tahunan, saya suka sekali bermain dengan teman-teman terutama dengan teman laki-laki karena saya tomboi. Jadi saat pulang sekolah saya selalu manjat pohon karena suka ambil buah tetangga. Jadi, pada suatu hari saat hujan dan lembab saya pulang sekolah tetapi saya berhenti untun manjat pohon, saat itu saya berani jadi saya manjat pohon dengan senang. Namun, saat saya mau turun tiba-tiba tergelincir dan jatuh dari pohon dengan kaki yang berdarah tetapi saat itu saya tidak merasakan sakit dan nangis malahan saya merasakan senang sekali. Karena berhasil mendapatkan buah yang saya ambil. Dan akhirnya saya pulang dengan kaki berdarah sambil membawa buah, tapi yang terjadi saya dimarahi oleh orang tua saya dan dihukum untuk tidak boleh manjat pohon lagi. Saat itu, saya merasakan kecewa dan sedih karena saya tidak bisa manjat pohon lagi. Namun saya bisa bermain dengan teman-teman lainnya. Itulah cerita saya Terima Kasih.Semoga cerita dapat dinikmati oleh pembaca dan dapat hidayah dari cerita tersebut.', 'bt21-animation-2017-billboard-1548.jpg', '6701170013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsiswa`
--
ALTER TABLE `mhsiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`judul`),
  ADD KEY `nim` (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mhsiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
