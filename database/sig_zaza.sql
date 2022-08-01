-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 08:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_zaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_30_084448_create_tb_kabupaten_table', 1),
(6, '2022_07_30_084953_create_tb_kecamatan_table', 1),
(7, '2022_07_30_092352_create_tb_data_table', 1),
(8, '2022_07_31_064001_create_tb_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_tanam` double(10,5) NOT NULL,
  `luas_panen` double(10,5) NOT NULL,
  `produktivitas` double(10,5) NOT NULL,
  `produksi` double(10,5) NOT NULL,
  `id_kabupaten` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `tahun`, `luas_tanam`, `luas_panen`, `produktivitas`, `produksi`, `id_kabupaten`, `id_kecamatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2020', 234.34000, 456.60000, 46.57000, 57.57000, 6, 4, '2022-07-31 03:59:22', '2022-07-31 03:59:28', '2022-07-31 03:59:28'),
(2, '2020', 2218.00000, 2187.00000, 77.72000, 12187.08000, 7, 7, '2022-07-31 15:00:56', '2022-07-31 22:37:51', NULL),
(3, '2020', 4234.00000, 4151.00000, 54.16000, 22482.90000, 7, 8, '2022-07-31 15:02:05', '2022-07-31 15:02:05', NULL),
(4, '2020', 3550.00000, 3080.00000, 54.31000, 16725.31000, 7, 9, '2022-07-31 15:02:48', '2022-07-31 15:02:48', NULL),
(5, '2020', 80.00000, 101.00000, 45.42000, 457.83000, 7, 10, '2022-07-31 15:03:24', '2022-07-31 15:03:24', NULL),
(6, '2020', 964.00000, 916.00000, 4637.00000, 4245.64000, 7, 11, '2022-07-31 15:04:10', '2022-07-31 15:04:10', NULL),
(7, '2020', 896.00000, 881.00000, 50.03000, 4407.14000, 7, 12, '2022-07-31 22:17:32', '2022-07-31 22:17:32', NULL),
(8, '2020', 3125.00000, 3005.00000, 50.72000, 15240.35000, 7, 13, '2022-07-31 22:18:19', '2022-07-31 22:39:52', NULL),
(9, '2020', 1159.00000, 1126.00000, 49.55000, 5580.82000, 7, 14, '2022-07-31 22:19:33', '2022-07-31 22:19:33', NULL),
(10, '2020', 2525.00000, 2525.00000, 54.48000, 13754.57000, 7, 15, '2022-07-31 22:21:23', '2022-07-31 22:21:23', NULL),
(11, '2020', 445.00000, 466.00000, 47.63000, 2217.65000, 7, 16, '2022-07-31 22:21:59', '2022-07-31 22:21:59', NULL),
(12, '2020', 3415.00000, 3415.00000, 53.39000, 18234.29000, 7, 33, '2022-07-31 22:22:56', '2022-07-31 22:22:56', NULL),
(13, '2020', 2013.00000, 1817.00000, 55.28000, 10043.82000, 7, 17, '2022-07-31 22:23:37', '2022-07-31 22:23:37', NULL),
(14, '2020', 2498.00000, 2019.00000, 53.22000, 10744.05000, 7, 18, '2022-07-31 22:24:12', '2022-07-31 22:24:12', NULL),
(15, '2020', 758.00000, 605.00000, 50.52000, 3055.95000, 7, 19, '2022-07-31 22:26:28', '2022-07-31 22:26:28', NULL),
(16, '2020', 350.00000, 637.00000, 50.11000, 3190.50000, 7, 20, '2022-07-31 22:27:28', '2022-07-31 22:27:28', NULL),
(17, '2020', 4408.00000, 4250.00000, 55.56000, 23614.67000, 7, 21, '2022-07-31 22:28:05', '2022-07-31 22:28:05', NULL),
(18, '2020', 1243.00000, 1255.00000, 64.44000, 6832.76000, 7, 22, '2022-07-31 22:28:49', '2022-07-31 22:28:49', NULL),
(19, '2020', 2053.00000, 2125.00000, 50.05000, 10633.62000, 7, 23, '2022-07-31 22:29:35', '2022-07-31 22:29:35', NULL),
(20, '2020', 1541.00000, 1733.00000, 50.61000, 8772.23000, 7, 24, '2022-07-31 22:30:20', '2022-07-31 22:30:20', NULL),
(21, '2020', 2638.00000, 2638.00000, 53.58000, 14135.48000, 7, 25, '2022-07-31 22:31:08', '2022-07-31 22:31:08', NULL),
(22, '2020', 9420.00000, 9369.00000, 55.82000, 52297.20000, 7, 26, '2022-07-31 22:32:09', '2022-07-31 22:32:09', NULL),
(23, '2020', 775.00000, 763.00000, 48.41000, 3692.23000, 7, 27, '2022-07-31 22:32:40', '2022-07-31 22:32:40', NULL),
(24, '2020', 9885.00000, 9260.00000, 54.37000, 30347.71000, 7, 28, '2022-07-31 22:33:50', '2022-07-31 22:33:50', NULL),
(25, '2020', 4000.00000, 3996.00000, 52.74000, 21077.01000, 7, 29, '2022-07-31 22:34:26', '2022-07-31 22:34:26', NULL),
(26, '2020', 2888.00000, 2884.00000, 52.65000, 15186.37000, 7, 30, '2022-07-31 22:35:01', '2022-07-31 22:35:01', NULL),
(27, '2020', 5757.00000, 5661.00000, 53.55000, 30315.19000, 7, 31, '2022-07-31 22:35:59', '2022-07-31 22:35:59', NULL),
(28, '2020', 2735.00000, 2690.00000, 52.06000, 14005.18000, 7, 32, '2022-07-31 22:36:33', '2022-07-31 22:36:33', NULL),
(29, '2021', 2187.00000, 2187.00000, 58.72000, 12843.24000, 7, 7, '2022-07-31 22:42:25', '2022-07-31 22:42:25', NULL),
(30, '2021', 4340.00000, 4339.00000, 59.16000, 25667.75000, 7, 8, '2022-07-31 22:42:55', '2022-07-31 22:42:55', NULL),
(31, '2021', 4104.00000, 4067.00000, 56.31000, 22952.52000, 7, 9, '2022-07-31 22:43:32', '2022-07-31 22:43:32', NULL),
(32, '2021', 40.00000, 39.00000, 47.42000, 182.57000, 7, 10, '2022-07-31 22:45:21', '2022-07-31 22:45:21', NULL),
(33, '2021', 1368.00000, 1358.00000, 48.37000, 6569.13000, 7, 11, '2022-07-31 22:47:06', '2022-07-31 22:47:06', NULL),
(34, '2021', 893.00000, 893.00000, 57.03000, 5089.93000, 7, 12, '2022-07-31 22:47:40', '2022-07-31 22:47:40', NULL),
(35, '2021', 3758.00000, 3729.00000, 56.72000, 21150.89000, 7, 13, '2022-07-31 22:49:16', '2022-07-31 22:49:16', NULL),
(36, '2021', 1057.00000, 997.00000, 56.55000, 5640.30000, 7, 14, '2022-07-31 22:49:54', '2022-07-31 22:49:54', NULL),
(37, '2021', 1817.00000, 2087.00000, 54.48000, 12204.78000, 7, 15, '2022-07-31 22:50:24', '2022-07-31 22:50:24', NULL),
(38, '2021', 329.00000, 327.00000, 48.63000, 1590.69000, 7, 16, '2022-07-31 22:51:04', '2022-07-31 22:51:04', NULL),
(39, '2021', 2965.00000, 3065.00000, 75.39000, 17591.18000, 7, 33, '2022-07-31 22:51:48', '2022-07-31 22:51:48', NULL),
(40, '2021', 833.00000, 833.00000, 56.28000, 4687.56000, 7, 17, '2022-07-31 22:52:32', '2022-07-31 22:52:32', NULL),
(41, '2021', 1244.00000, 1248.00000, 56.22000, 7018.50000, 7, 18, '2022-07-31 22:53:00', '2022-07-31 22:53:00', NULL),
(42, '2021', 623.00000, 597.00000, 55.52000, 3316.21000, 7, 19, '2022-07-31 22:53:42', '2022-07-31 22:53:42', NULL),
(43, '2021', 672.00000, 672.00000, 55.11000, 3704.49000, 7, 20, '2022-07-31 22:54:25', '2022-07-31 22:54:25', NULL),
(44, '2021', 2455.00000, 2440.00000, 57.56000, 14044.06000, 7, 21, '2022-07-31 22:54:57', '2022-07-31 22:54:57', NULL),
(45, '2021', 820.00000, 819.00000, 56.67000, 4643.54000, 7, 22, '2022-07-31 22:55:52', '2022-07-31 22:55:52', NULL),
(46, '2021', 2147.00000, 1976.00000, 57.05000, 11270.23000, 7, 23, '2022-07-31 22:56:27', '2022-07-31 22:56:27', NULL),
(47, '2021', 1240.00000, 1240.00000, 53.61000, 6647.10000, 7, 24, '2022-07-31 22:57:08', '2022-07-31 22:57:08', NULL),
(48, '2021', 2528.00000, 2528.00000, 56.58000, 14301.16000, 7, 25, '2022-07-31 22:57:48', '2022-07-31 22:57:48', NULL),
(49, '2021', 6449.00000, 6449.00000, 47.82000, 37287.54000, 7, 26, '2022-07-31 22:58:30', '2022-07-31 22:58:30', NULL),
(50, '2021', 942.00000, 909.00000, 54.75000, 4975.64000, 7, 27, '2022-07-31 22:59:03', '2022-07-31 22:59:03', NULL),
(51, '2021', 9574.00000, 8521.00000, 58.37000, 49734.74000, 7, 28, '2022-07-31 22:59:43', '2022-07-31 22:59:43', NULL),
(52, '2021', 3878.00000, 2922.00000, 56.74000, 16578.86000, 7, 29, '2022-07-31 23:00:30', '2022-07-31 23:00:30', NULL),
(53, '2021', 2319.00000, 3236.00000, 57.65000, 18657.27000, 7, 30, '2022-07-31 23:01:20', '2022-07-31 23:01:20', NULL),
(54, '2021', 5463.00000, 3559.00000, 57.55000, 31993.77000, 7, 31, '2022-07-31 23:01:55', '2022-07-31 23:01:55', NULL),
(55, '2021', 1325.00000, 1323.00000, 58.06000, 7678.44000, 7, 32, '2022-07-31 23:02:27', '2022-07-31 23:02:27', NULL),
(56, '2020', 709.00000, 509.00000, 54.72000, 1834.58000, 6, 3, '2022-07-31 23:03:39', '2022-07-31 23:03:39', NULL),
(57, '2020', 0.00000, 0.00000, 0.00000, 0.00000, 6, 4, '2022-07-31 23:03:59', '2022-07-31 23:03:59', NULL),
(58, '2020', 301.00000, 172.00000, 51.40000, 586.33000, 6, 5, '2022-07-31 23:04:41', '2022-07-31 23:04:41', NULL),
(59, '2020', 1347.00000, 1147.00000, 56.83000, 8545.09000, 6, 6, '2022-07-31 23:05:20', '2022-07-31 23:05:20', NULL),
(60, '2022', 341.88000, 341.88000, 54.41000, 3.50000, 6, 3, '2022-07-31 23:06:01', '2022-07-31 23:06:33', NULL),
(61, '2021', 0.00000, 0.00000, 0.00000, 0.00000, 6, 4, '2022-07-31 23:07:54', '2022-07-31 23:07:54', NULL),
(62, '2021', 110.46000, 110.46000, 53.62000, 1.50000, 6, 5, '2022-07-31 23:09:02', '2022-07-31 23:09:02', NULL),
(63, '2021', 630.80000, 630.80000, 56.41000, 6.00000, 6, 6, '2022-07-31 23:09:36', '2022-07-31 23:09:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `nama`, `ket`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Kota Lhokseumawe', '-', '2022-07-31 00:58:22', '2022-07-31 00:58:22', NULL),
(7, 'Aceh Utara', '-', '2022-07-31 00:58:49', '2022-07-31 00:58:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `id_kabupaten`, `nama`, `ket`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 6, 'Muara Satu', '-', '2022-07-31 00:59:54', '2022-07-31 00:59:54', NULL),
(4, 6, 'Banda Sakti', '-', '2022-07-31 02:54:18', '2022-07-31 02:54:18', NULL),
(5, 6, 'Muara Dua', '-', '2022-07-31 02:54:39', '2022-07-31 02:54:39', NULL),
(6, 6, 'Blang Mangat', '-', '2022-07-31 02:55:10', '2022-07-31 02:55:10', NULL),
(7, 7, 'Muara Batu', '-', '2022-07-31 03:04:19', '2022-07-31 03:04:19', NULL),
(8, 7, 'Sawang', '-', '2022-07-31 03:05:04', '2022-07-31 03:05:04', NULL),
(9, 7, 'Nisam', '-', '2022-07-31 03:05:15', '2022-07-31 03:05:15', NULL),
(10, 7, 'Nisam Antara', '-', '2022-07-31 03:05:42', '2022-07-31 03:05:42', NULL),
(11, 7, 'Banda Baro', '-', '2022-07-31 03:09:20', '2022-07-31 03:09:20', NULL),
(12, 7, 'Dewantara', '-', '2022-07-31 03:09:37', '2022-07-31 03:09:37', NULL),
(13, 7, 'Kuta Makmur', '-', '2022-07-31 03:10:07', '2022-07-31 03:10:07', NULL),
(14, 7, 'Simpang Kramat', '-', '2022-07-31 03:10:32', '2022-07-31 03:10:32', NULL),
(15, 7, 'Syamtalira Bayu', '-', '2022-07-31 03:10:55', '2022-07-31 03:10:55', NULL),
(16, 7, 'Geredong Pase', '-', '2022-07-31 03:11:35', '2022-07-31 03:11:35', NULL),
(17, 7, 'Samudra', '-', '2022-07-31 03:11:51', '2022-07-31 03:11:51', NULL),
(18, 7, 'Syamtalira Aron', '-', '2022-07-31 03:12:16', '2022-07-31 03:12:16', NULL),
(19, 7, 'Tanah Pasir', '-', '2022-07-31 03:12:40', '2022-07-31 03:12:40', NULL),
(20, 7, 'Lapang', '-', '2022-07-31 03:12:55', '2022-07-31 03:12:55', NULL),
(21, 7, 'Tanah Luas', '-', '2022-07-31 03:13:19', '2022-07-31 03:13:19', NULL),
(22, 7, 'Nibong', '-', '2022-07-31 03:13:32', '2022-07-31 03:13:32', NULL),
(23, 7, 'Matang Kuli', '-', '2022-07-31 03:13:52', '2022-07-31 03:13:52', NULL),
(24, 7, 'Pirak Timu', '-', '2022-07-31 03:14:28', '2022-07-31 03:14:28', NULL),
(25, 7, 'Paya Bakong', '-', '2022-07-31 03:14:39', '2022-07-31 03:14:39', NULL),
(26, 7, 'Lhoksukon', '-', '2022-07-31 03:14:57', '2022-07-31 03:14:57', NULL),
(27, 7, 'Cot Girek', '-', '2022-07-31 03:15:16', '2022-07-31 03:15:16', NULL),
(28, 7, 'Baktiya', '-', '2022-07-31 03:15:31', '2022-07-31 03:15:31', NULL),
(29, 7, 'Baktiya Barat', '-', '2022-07-31 03:15:46', '2022-07-31 03:15:46', NULL),
(30, 7, 'Seunudon', '-', '2022-07-31 03:16:04', '2022-07-31 03:16:04', NULL),
(31, 7, 'Tanah Jambo Aye', '-', '2022-07-31 03:16:35', '2022-07-31 03:16:35', NULL),
(32, 7, 'Langkahan', '-', '2022-07-31 03:16:45', '2022-07-31 03:16:45', NULL),
(33, 7, 'Meurah Mulia', '-', '2022-07-31 03:18:53', '2022-07-31 03:18:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$khYGOdrcVMjm8hISbzypn.Tl.DssUTjmb.I60Hvb4Da1UI39B5Ua2', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_data_id_kabupaten_foreign` (`id_kabupaten`),
  ADD KEY `tb_data_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_kecamatan_id_kabupaten_foreign` (`id_kabupaten`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_users_username_unique` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD CONSTRAINT `tb_data_id_kabupaten_foreign` FOREIGN KEY (`id_kabupaten`) REFERENCES `tb_kabupaten` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD CONSTRAINT `tb_kecamatan_id_kabupaten_foreign` FOREIGN KEY (`id_kabupaten`) REFERENCES `tb_kabupaten` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
