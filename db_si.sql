-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 05:01 PM
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
-- Database: `db_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `id_barang`, `nama_barang`, `kategori`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'T72930', 'Samsung tv', 'TV', 'TV 4K UHD', 7500000, '2023-06-02 19:01:04', '2023-06-03 13:28:43'),
(2, 'T121PO', 'Politron', 'TV', 'TV 4K UHD', 7000000, '2023-06-02 19:01:18', '2023-06-02 20:20:00'),
(3, 'B001', 'Samsung', 'Kulkas', 'Kulkas 2 pintu', 4500000, '2023-06-02 20:21:09', '2023-06-02 20:21:09'),
(5, 'KP022S', 'LG', 'Kipas', 'Kipas dengan 5 Speed', 1500000, '2023-06-05 05:35:17', '2023-06-05 05:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `id_rute` bigint(20) UNSIGNED NOT NULL,
  `id_supir` bigint(20) UNSIGNED NOT NULL,
  `id_truk` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_pengiriman` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` varchar(255) NOT NULL,
  `nama_gudang` varchar(255) NOT NULL,
  `alamat_gudang` varchar(255) NOT NULL,
  `kapasitas` bigint(20) NOT NULL,
  `jumlah_barang` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`id`, `id_barang`, `id_gudang`, `nama_gudang`, `alamat_gudang`, `kapasitas`, `jumlah_barang`, `created_at`, `updated_at`) VALUES
(1, 1, 'G001', 'Madjoe Djaya', 'Cikarang Barat', 500, 100, '2023-06-02 19:02:20', '2023-06-03 08:41:13'),
(2, 2, 'G002', 'Mindaha', 'Waikabubak', 3900, 1000, '2023-06-02 19:05:00', '2023-06-02 20:22:30'),
(4, 2, 'G003', 'Soeka Madjoe', 'Cikarang Barat', 3900, 250, '2023-06-05 03:44:10', '2023-06-05 03:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rute` bigint(20) UNSIGNED NOT NULL,
  `id_supir` bigint(20) UNSIGNED NOT NULL,
  `id_truk` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `id_rute`, `id_supir`, `id_truk`, `id_jadwal`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'JD0A1', '2020-01-02', '2023-06-03 02:46:01', '2023-06-03 02:51:51'),
(2, 1, 2, 1, 'JD0A2', '2020-01-03', '2023-06-03 13:19:17', '2023-06-03 13:19:17'),
(4, 5, 3, 2, 'JD0A3', '2020-02-03', '2023-06-04 06:46:40', '2023-06-04 06:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_09_093234_create_barangs_table', 1),
(3, '2023_06_01_052146_create_outlets_table', 1),
(4, '2023_06_01_052352_create_supirs_table', 1),
(5, '2023_06_01_052408_create_truks_table', 1),
(6, '2023_06_01_052502_create_users_table', 1),
(7, '2023_06_03_015821_create_gudangs_table', 2),
(8, '2023_06_01_052240_create_pegawais_table', 3),
(9, '2023_06_01_052328_create_rutes_table', 3),
(10, '2023_06_02_101146_create_jadwals_table', 4),
(11, '2023_06_03_102722_create_pengirimen_table', 5),
(12, '2023_06_05_094409_create_dashboards_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` varchar(255) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`id`, `id_outlet`, `nama_outlet`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'OT001', 'Sumba\'s Outlet', 'Waikabubak', '089124536670', '2023-06-02 19:18:25', '2023-06-02 20:37:31'),
(2, 'OT002', 'Bali\'s Outlet', 'Denpasar', '081299706555', '2023-06-03 08:52:59', '2023-06-03 08:52:59'),
(4, 'OT003', 'Jabar Outlet', 'Jakarta', '089124536670', '2023-06-05 03:15:57', '2023-06-05 03:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `id_user`, `id_gudang`, `id_pegawai`, `nama_pegawai`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'P001', 'Cornelia Boro', 'Waikabubak', '089124536670', 'JYouth0@gmail.com', '2023-06-03 00:24:34', '2023-06-03 12:11:16'),
(2, 2, 2, 'P002', 'Andi Yutaka', 'Bekasi', '081299706555', 'andi.yutaka21@gmail.com', '2023-06-03 12:09:21', '2023-06-03 12:37:50'),
(4, 4, 1, 'P003', 'Panjoel Sutoyo', 'Denpasar', '089124536675', '4', '2023-06-03 12:37:38', '2023-06-05 03:18:46'),
(5, 6, 4, 'P004', 'Adi Julia', 'Malang', '081266567832', '6', '2023-06-05 05:32:52', '2023-06-05 05:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `pengirimen`
--

CREATE TABLE `pengirimen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `estimasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengirimen`
--

INSERT INTO `pengirimen` (`id`, `id_jadwal`, `estimasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-01-03', 'Dalam Perjalanan', '2023-06-03 03:43:42', '2023-06-04 06:44:29'),
(3, 2, '2020-01-05', 'Menunggu', '2023-06-03 13:27:14', '2023-06-03 13:27:14'),
(4, 4, '2020-03-05', 'Terlambat', '2023-06-04 06:46:58', '2023-06-04 06:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rutes`
--

CREATE TABLE `rutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `id_rute` varchar(255) NOT NULL,
  `jarak` varchar(255) NOT NULL,
  `waktu_tempuh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rutes`
--

INSERT INTO `rutes` (`id`, `id_gudang`, `id_outlet`, `id_rute`, `jarak`, `waktu_tempuh`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'RT001', '80KM', '3 Jam', '2023-06-03 01:07:29', '2023-06-03 01:07:29'),
(2, 1, 2, 'RT002', '25KM', '2 Jam', '2023-06-03 12:40:45', '2023-06-03 12:40:45'),
(5, 1, 2, 'RT003', '100KM', '7 Jam', '2023-06-03 13:33:22', '2023-06-03 13:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `supirs`
--

CREATE TABLE `supirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_supir` varchar(255) NOT NULL,
  `nama_supir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supirs`
--

INSERT INTO `supirs` (`id`, `id_supir`, `nama_supir`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'SP01', 'Andi', 'Bekasi', '081299706555', '2023-06-03 01:15:32', '2023-06-03 01:15:32'),
(2, 'SP02', 'Naufal', 'Jakarta Timur', '089124536897', '2023-06-03 12:52:39', '2023-06-03 12:53:49'),
(3, 'SP03', 'Jono', 'Purbolinggo', '081200706555', '2023-06-03 12:54:20', '2023-06-03 12:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `truks`
--

CREATE TABLE `truks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_truk` varchar(255) NOT NULL,
  `plat_no` varchar(255) NOT NULL,
  `jenis_truk` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truks`
--

INSERT INTO `truks` (`id`, `id_truk`, `plat_no`, `jenis_truk`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 'TR01', 'ED 1106 CLT', 'Truk Kontainer', '300', '2023-06-03 02:18:14', '2023-06-03 02:18:14'),
(2, 'TR02', 'AE 1266 KZL', 'Truk Box CDE', '200', '2023-06-03 12:56:06', '2023-06-03 12:56:06'),
(5, 'TR05', 'B 1221 EZZ', 'Truk Box CDE', '500', '2023-06-05 07:03:48', '2023-06-05 07:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_user`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'U001', 'Mindaha', '2118060', 'lia06@gmail.com', '2023-06-03 00:24:12', '2023-06-05 03:18:18'),
(2, 'U002', 'Yutaka', '2118041', 'andi.yutaka99@gmail.com', '2023-06-03 12:06:21', '2023-06-03 12:06:46'),
(4, 'U003', 'pp123', '12345', 'JYouth100@gmail.com', '2023-06-03 12:15:39', '2023-06-03 12:15:39'),
(5, 'U004', 'Masput', '12345', 'Putra21@gmail.com', '2023-06-05 05:26:03', '2023-06-05 05:26:03'),
(6, 'U005', 'AdiJs', 'qwerty123', 'AdiJ01@gmail.com', '2023-06-05 05:32:06', '2023-06-05 05:32:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dashboards_id_barang_foreign` (`id_barang`),
  ADD KEY `dashboards_id_gudang_foreign` (`id_gudang`),
  ADD KEY `dashboards_id_outlet_foreign` (`id_outlet`),
  ADD KEY `dashboards_id_rute_foreign` (`id_rute`),
  ADD KEY `dashboards_id_supir_foreign` (`id_supir`),
  ADD KEY `dashboards_id_truk_foreign` (`id_truk`),
  ADD KEY `dashboards_id_user_foreign` (`id_user`),
  ADD KEY `dashboards_id_pegawai_foreign` (`id_pegawai`),
  ADD KEY `dashboards_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `dashboards_id_pengiriman_foreign` (`id_pengiriman`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gudangs_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_id_rute_foreign` (`id_rute`),
  ADD KEY `jadwals_id_supir_foreign` (`id_supir`),
  ADD KEY `jadwals_id_truk_foreign` (`id_truk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawais_id_gudang_foreign` (`id_gudang`),
  ADD KEY `pegawais_id_user_foreign` (`id_user`);

--
-- Indexes for table `pengirimen`
--
ALTER TABLE `pengirimen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengirimen_id_jadwal_foreign` (`id_jadwal`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rutes`
--
ALTER TABLE `rutes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rutes_id_gudang_foreign` (`id_gudang`),
  ADD KEY `rutes_id_outlet_foreign` (`id_outlet`);

--
-- Indexes for table `supirs`
--
ALTER TABLE `supirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truks`
--
ALTER TABLE `truks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengirimen`
--
ALTER TABLE `pengirimen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rutes`
--
ALTER TABLE `rutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supirs`
--
ALTER TABLE `supirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `truks`
--
ALTER TABLE `truks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD CONSTRAINT `dashboards_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`),
  ADD CONSTRAINT `dashboards_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudangs` (`id`),
  ADD CONSTRAINT `dashboards_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`),
  ADD CONSTRAINT `dashboards_id_outlet_foreign` FOREIGN KEY (`id_outlet`) REFERENCES `outlets` (`id`),
  ADD CONSTRAINT `dashboards_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`),
  ADD CONSTRAINT `dashboards_id_pengiriman_foreign` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengirimen` (`id`),
  ADD CONSTRAINT `dashboards_id_rute_foreign` FOREIGN KEY (`id_rute`) REFERENCES `rutes` (`id`),
  ADD CONSTRAINT `dashboards_id_supir_foreign` FOREIGN KEY (`id_supir`) REFERENCES `supirs` (`id`),
  ADD CONSTRAINT `dashboards_id_truk_foreign` FOREIGN KEY (`id_truk`) REFERENCES `truks` (`id`),
  ADD CONSTRAINT `dashboards_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD CONSTRAINT `gudangs_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_id_rute_foreign` FOREIGN KEY (`id_rute`) REFERENCES `rutes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwals_id_supir_foreign` FOREIGN KEY (`id_supir`) REFERENCES `supirs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwals_id_truk_foreign` FOREIGN KEY (`id_truk`) REFERENCES `truks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengirimen`
--
ALTER TABLE `pengirimen`
  ADD CONSTRAINT `pengirimen_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rutes`
--
ALTER TABLE `rutes`
  ADD CONSTRAINT `rutes_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rutes_id_outlet_foreign` FOREIGN KEY (`id_outlet`) REFERENCES `outlets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
