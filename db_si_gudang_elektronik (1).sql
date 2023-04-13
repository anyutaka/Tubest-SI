-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 02:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_si_gudang_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `ID_Barang` varchar(10) NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `ID_Kategori` varchar(10) NOT NULL,
  `Deskripsi` varchar(40) NOT NULL,
  `Harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `ID_Barang` varchar(10) NOT NULL,
  `ID_Gudang` varchar(10) NOT NULL,
  `Jumlah` varchar(5) NOT NULL,
  `Alamat_Gudang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_pengiriman`
--

CREATE TABLE `tb_jadwal_pengiriman` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `ID_Gudang` varchar(10) NOT NULL,
  `ID_Truk` varchar(10) NOT NULL,
  `ID_Supir` varchar(10) NOT NULL,
  `Tanggal_Pengiriman` datetime NOT NULL,
  `Status_Pengiriman` varchar(20) NOT NULL,
  `ID_Rute` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_barang`
--

CREATE TABLE `tb_kategori_barang` (
  `ID_Kategori` varchar(10) NOT NULL,
  `Nama_Kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `ID_Outlet` varchar(10) NOT NULL,
  `Nama_Outlet` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `ID_Pegawai` varchar(10) NOT NULL,
  `Nama_Pegawai` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Telepon` varchar(20) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `Gaji` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `ID_Pengiriman` varchar(10) NOT NULL,
  `ID_Truk` varchar(10) NOT NULL,
  `ID_Supir` varchar(10) NOT NULL,
  `ID_Outlet_Asal` varchar(10) NOT NULL,
  `ID_Outlet_Tujuan` varchar(10) NOT NULL,
  `Tanggal_Pengiriman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rute`
--

CREATE TABLE `tb_rute` (
  `ID_Rute` varchar(10) NOT NULL,
  `ID_Gudang_Asal` varchar(10) NOT NULL,
  `ID_Gudang_Tujuan` varchar(10) NOT NULL,
  `Jarak` varchar(10) NOT NULL,
  `Waktu_Tempuh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `ID_Barang` varchar(10) NOT NULL,
  `ID_Gudang` varchar(10) NOT NULL,
  `Jumlah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_supir`
--

CREATE TABLE `tb_supir` (
  `ID_Supir` varchar(10) NOT NULL,
  `Nama_Supir` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_truk`
--

CREATE TABLE `tb_truk` (
  `ID_Truk` varchar(10) NOT NULL,
  `No_Plat` varchar(20) NOT NULL,
  `Jenis_Truk` varchar(20) NOT NULL,
  `Kapasitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_Pengguna` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ID_Pegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`ID_Barang`),
  ADD KEY `ID_Kategori` (`ID_Kategori`);

--
-- Indexes for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`ID_Gudang`),
  ADD KEY `ID_Barang` (`ID_Barang`);

--
-- Indexes for table `tb_jadwal_pengiriman`
--
ALTER TABLE `tb_jadwal_pengiriman`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_Gudang` (`ID_Gudang`),
  ADD KEY `ID_Truk` (`ID_Truk`),
  ADD KEY `ID_Supir` (`ID_Supir`),
  ADD KEY `ID_Rute` (`ID_Rute`);

--
-- Indexes for table `tb_kategori_barang`
--
ALTER TABLE `tb_kategori_barang`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`ID_Outlet`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`ID_Pegawai`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`ID_Pengiriman`),
  ADD KEY `ID_Truk` (`ID_Truk`),
  ADD KEY `ID_Supir` (`ID_Supir`),
  ADD KEY `ID_Outlet_Asal` (`ID_Outlet_Asal`),
  ADD KEY `ID_Outlet_Tujuan` (`ID_Outlet_Tujuan`);

--
-- Indexes for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`ID_Rute`),
  ADD KEY `ID_Gudang_Asal` (`ID_Gudang_Asal`),
  ADD KEY `ID_Gudang_Tujuan` (`ID_Gudang_Tujuan`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`ID_Barang`),
  ADD KEY `tb_stok_ibfk_2` (`ID_Gudang`);

--
-- Indexes for table `tb_supir`
--
ALTER TABLE `tb_supir`
  ADD PRIMARY KEY (`ID_Supir`);

--
-- Indexes for table `tb_truk`
--
ALTER TABLE `tb_truk`
  ADD PRIMARY KEY (`ID_Truk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_Pengguna`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`ID_Kategori`) REFERENCES `tb_kategori_barang` (`ID_Kategori`);

--
-- Constraints for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD CONSTRAINT `tb_gudang_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `tb_stok` (`ID_Barang`);

--
-- Constraints for table `tb_jadwal_pengiriman`
--
ALTER TABLE `tb_jadwal_pengiriman`
  ADD CONSTRAINT `tb_jadwal_pengiriman_ibfk_1` FOREIGN KEY (`ID_Gudang`) REFERENCES `tb_gudang` (`ID_Gudang`),
  ADD CONSTRAINT `tb_jadwal_pengiriman_ibfk_2` FOREIGN KEY (`ID_Truk`) REFERENCES `tb_truk` (`ID_Truk`),
  ADD CONSTRAINT `tb_jadwal_pengiriman_ibfk_3` FOREIGN KEY (`ID_Supir`) REFERENCES `tb_supir` (`ID_Supir`),
  ADD CONSTRAINT `tb_jadwal_pengiriman_ibfk_4` FOREIGN KEY (`ID_Rute`) REFERENCES `tb_rute` (`ID_Rute`);

--
-- Constraints for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD CONSTRAINT `tb_pengiriman_ibfk_1` FOREIGN KEY (`ID_Truk`) REFERENCES `tb_truk` (`ID_Truk`),
  ADD CONSTRAINT `tb_pengiriman_ibfk_2` FOREIGN KEY (`ID_Supir`) REFERENCES `tb_supir` (`ID_Supir`),
  ADD CONSTRAINT `tb_pengiriman_ibfk_3` FOREIGN KEY (`ID_Outlet_Asal`) REFERENCES `tb_outlet` (`ID_Outlet`),
  ADD CONSTRAINT `tb_pengiriman_ibfk_4` FOREIGN KEY (`ID_Outlet_Tujuan`) REFERENCES `tb_outlet` (`ID_Outlet`);

--
-- Constraints for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD CONSTRAINT `tb_rute_ibfk_1` FOREIGN KEY (`ID_Gudang_Asal`) REFERENCES `tb_gudang` (`ID_Gudang`),
  ADD CONSTRAINT `tb_rute_ibfk_2` FOREIGN KEY (`ID_Gudang_Tujuan`) REFERENCES `tb_gudang` (`ID_Gudang`);

--
-- Constraints for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD CONSTRAINT `tb_stok_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `tb_barang` (`ID_Barang`),
  ADD CONSTRAINT `tb_stok_ibfk_2` FOREIGN KEY (`ID_Gudang`) REFERENCES `tb_gudang` (`ID_Gudang`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`ID_Pegawai`) REFERENCES `tb_pegawai` (`ID_Pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
