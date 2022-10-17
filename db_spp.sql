-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'antum', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(76594520, 'Rekayasa Perangkat Lunak'),
(1957794685, 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
(672054852, 'XII RPL 2', 76594520);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(2, 'Rian Batagor', 'Sukabumi', 'Tukang Batagor Keliling'),
(3, 'Farhan Kebab', 'Bogor', 'Tukang Kebab'),
(5, 'Zaki Indomie', 'Cianjur', 'Koki Warmindo'),
(6, 'Rehan Wangsaff', 'Bendungan', 'Montir Motor');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `jumlah_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_siswa`, `id_petugas`, `id_spp`, `tanggal_bayar`, `jumlah_bayar`) VALUES
(65430493, 337564002, 269793717, 2, '2022-10-14', 'Rp150.000');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `level` enum('admin','petugas') DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `gambar`, `level`) VALUES
(269793717, 'antum', '0c909a141f1f2c0a1cb602b0b2d7d050', 'Antum Biadab Sekali', 'Asal-Lo-Tau-Ya-Dek-1024x10241.jpg', NULL),
(1416497648, 'farhan', '105dad91250a07b716d6a714a3e676b8', 'Farhan Kebab', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telepon`, `id_spp`, `gambar`) VALUES
(337564002, '1754583921', '1568390127', 'Fikri Rawon', 672054852, 'Jl. Tamburello, Imola', '+621829182219', 1297103068, 'Asal-Lo-Tau-Ya-Dek-1024x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `tahun_ajaran` varchar(20) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`tahun_ajaran`, `id_spp`, `nominal`) VALUES
('2022/2023', 1, 'Rp250.000'),
('2021/2022', 2, 'Rp150.000'),
('2020/2021', 3, 'Rp150.000'),
('2019/2020', 1297103068, 'Rp200.000'),
('2018/2019', 1924627052, 'Rp200.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `nis` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`nis`, `username`, `password`) VALUES
(290290, 'ana', 'antum'),
(45, 'loli', 'lol'),
(0, 'ad', '$2y$10$S7AddEejzHAWmfJszLjbF.lOatDr8P7KdYveYPSfhFnYov9jKtt36'),
(0, 'sd', '$2y$10$ik8WjcmCqyM/JKq6QewjbeNRqRUcTo/DV7j14pvJhMRwnEJr8wqO6'),
(0, 'aa', '$2y$10$nd75hkwviaB0Fv1YLSQCZ.66wDnxHBb/KakJZ3BdonvMPIlOYLYpe'),
(0, 'sds', '$2y$10$B6fHEp8AMV9HUSV0v1377.ZrVTrN8pUGFEGIaI42EDhmuxxCgREU.'),
(0, 'af', '$2y$10$/jW4g988HeYQ8SDc/SWg1O5KJTbXtrMlLmyTOLYFvtYrl3nHo3x0G'),
(0, 'aaa', '$2y$10$WUfKwBpeB5FLJdLTvGPqr./qiy0IYR3d/eo6KPnMWzZPYeNTnKSEq'),
(0, 'ww', '$2y$10$uTQftvZIh76exiaAOl4g9OQlSrq9YN2psc4MMDvIp2gz18V4PBt36'),
(0, 'rr', '$2y$10$SgqZlvTUuNWTJHJVL0agX.M1ae4cNw11FIQE6QUlnsuyCKZD6d6la'),
(0, 'ee', '$2y$10$lqvfrqDjmWGygKNl5OTy/elMi0Sqh/nm7dKjDhwVSsw2MFynE4nXG'),
(0, 'dd', '$2y$10$Jq.E7vp9EenO4XJDNy3K8OiLSISw9JQj79NoCf4hGyG/c3tCTLI8K'),
(0, 'ff', '$2y$10$f1L4IwiPAyIEhSvvd15QaOoY/.XNCmcWjPljOLO1kk3In8Msun6bq'),
(0, 'gg', '$2y$10$7t9GHjNJ6TF0pFIkrWrwzeHE6PPDb8zjLEqt8DcW76mycAoTPSV7a'),
(0, 'ujang', '$2y$10$/eQmDR7A9EMt9MoY10b75OfMfoCfMX4cOtQ6LovP3SduyXwtn8ygq'),
(0, 'usman', 'usman'),
(122, 'aaaaa', '$2y$10$hSjH9kv/3E9DPrnUP5dTq.myx4m5jpR1KWDkMwJXGHjVndWDrMjQe'),
(234, 'aku', '$2y$10$mb2f8LmgmBPnnTENONs1..NqADzoMlMYZ/DnDp17Kj1/BVUlmyBOK'),
(99, 'gua', 'gua'),
(12333, 'jaja', 'jaja'),
(0, 'uus', 'uus'),
(0, 'kuring', 'kuirng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`) VALUES
(89, 'hliul', 'ujti'),
(12345, 'gibran', 'gunung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `nama_petugas` (`id_petugas`),
  ADD KEY `nisn` (`id_siswa`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE,
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672054853;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65430494;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1416497649;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1924627053;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
