-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 08:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_ti1d_enzinaufalfaiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(12,2) NOT NULL,
  `jenis_pembayaran` enum('Mandiri','Bidikmisi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(12,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembayaran`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Ahmad Fauzan', '23110001', 2, '3500000.00', 'Mandiri', 'UKT 3', 'Budi Santoso', NULL, NULL, NULL, NULL),
(2, 'Dina Permata', '23110002', 4, '4500000.00', 'Mandiri', 'UKT 5', 'Slamet Riyadi', NULL, NULL, NULL, NULL),
(3, 'Rizki Ramadhan', '23110003', 6, '5000000.00', 'Mandiri', 'UKT 6', 'Andi Wijaya', NULL, NULL, NULL, NULL),
(4, 'Siti Aisyah', '23110004', 2, '3000000.00', 'Mandiri', 'UKT 2', 'Ahmad Hidayat', NULL, NULL, NULL, NULL),
(5, 'Fajar Nugroho', '23110005', 8, '5500000.00', 'Mandiri', 'UKT 7', 'Joko Susilo', NULL, NULL, NULL, NULL),
(6, 'Nabila Putri', '23110006', 4, '4000000.00', 'Mandiri', 'UKT 4', 'Rudi Hartono', NULL, NULL, NULL, NULL),
(7, 'Yoga Pratama', '23110007', 6, '3500000.00', 'Mandiri', 'UKT 3', 'Dedi Saputra', NULL, NULL, NULL, NULL),
(8, 'Tiara Lestari', '23110008', 2, '2500000.00', 'Mandiri', 'UKT 1', 'Eko Prasetyo', NULL, NULL, NULL, NULL),
(9, 'Aulia Rahman', '23110009', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024001', '800000.00', NULL, NULL),
(10, 'Maya Sari', '23110010', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024002', '850000.00', NULL, NULL),
(11, 'Rian Saputra', '23110011', 6, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024003', '900000.00', NULL, NULL),
(12, 'Nur Azizah', '23110012', 2, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024004', '750000.00', NULL, NULL),
(13, 'Galih Prakoso', '23110013', 4, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024005', '800000.00', NULL, NULL),
(14, 'Lina Oktavia', '23110014', 8, '0.00', 'Bidikmisi', NULL, NULL, 'KIP2024006', '950000.00', NULL, NULL),
(15, 'Kevin Aditya', '23110015', 2, '1000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Indonesia', '3.50'),
(16, 'Putri Maharani', '23110016', 4, '1200000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Djarum Foundation', '3.60'),
(17, 'Muhammad Iqbal', '23110017', 6, '1000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Pertamina Foundation', '3.40'),
(18, 'Sarah Amalia', '23110018', 2, '1500000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Yayasan Pendidikan Nasional', '3.75'),
(19, 'Aditia Saputra', '23110019', 4, '1000000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Syariah Indonesia', '3.50'),
(20, 'Citra Lestari', '23110020', 8, '800000.00', 'Prestasi', NULL, NULL, NULL, NULL, 'Tanoto Foundation', '3.70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
