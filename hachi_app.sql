-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 07:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hachi_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kucing` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kucing` bigint(20) UNSIGNED DEFAULT NULL,
  `id_layanan` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kondisi_kesehatan` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_kucing` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kondisi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jenis` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan_kamar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_13_205307_create_roles_table', 1),
(7, '2023_12_13_205458_add_id_role_to_users_table', 1),
(8, '2023_12_14_182159_create_kamar_table', 2),
(9, '2023_12_14_182231_create_grooming_table', 2),
(10, '2023_12_14_182321_create_reservasi_table', 2),
(11, '2023_12_14_182338_create_pesan_table', 2),
(12, '2023_12_14_182354_create_kucing_table', 2),
(13, '2023_12_14_182407_create_kondisi_table', 2),
(14, '2023_12_14_182415_create_jenis_table', 2),
(15, '2023_12_14_183038_create_layanan_table', 2),
(16, '2023_12_14_183231_add_id_kucing_to_kamar_table', 2),
(17, '2023_12_14_183250_add_id_kucing_to_grooming_table', 2),
(18, '2023_12_14_183349_add_id_kondisi_to_kucing_table', 2),
(19, '2023_12_14_183406_add_id_jenis_to_kucing_table', 2),
(20, '2023_12_14_183459_add_id_customer_to_reservasi_table', 2),
(21, '2023_12_14_183513_add_id_customer_to_pesan_table', 2),
(22, '2023_12_14_183548_add_id_kucing_to_reservasi_table', 2),
(23, '2023_12_14_183601_add_id_kucing_to_pesan_table', 2),
(24, '2023_12_14_183703_add_id_layanan_to_kamar_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_customer` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kucing` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_customer` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kucing` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-12-13 14:01:45', '2023-12-13 14:01:45'),
(2, 'customer', 'Customer', '2023-12-13 14:01:45', '2023-12-13 14:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$nyHGRIuGAP2.6DbCTSwBuej6rH8CAeHX.7G5rsOGQsffsMMdJnRca', NULL, '2023-12-13 14:18:43', '2023-12-13 14:18:43', 1),
(3, 'anu', 'anu@gmail.com', NULL, '$2y$12$mBc1FHkH1Ki7VWGwdZEHFu7pl/NeJUHX4oiY5zkMdBRJOfqC0RvMW', NULL, '2023-12-13 14:30:12', '2023-12-13 14:30:12', 2),
(4, 'iya', 'iya@gmail.com', NULL, '$2y$12$8oj0K6gakAGmPxpk53s3G.LMVSj71BbN4XxKQC2hjJEv5u85pDEEy', NULL, '2023-12-13 14:31:08', '2023-12-13 14:31:08', 2),
(5, 'apa', 'apa@gmail.com', NULL, '$2y$12$gBi7q/XBxJUPyx4nK6xZo.aEKzvCWCZstAg53H4Ei/9PQvMU3pJw2', NULL, '2023-12-13 14:34:41', '2023-12-13 14:34:41', 2),
(6, 'udin', 'udin@gmail.com', NULL, '$2y$12$jFjCNp7YE4QOm5oy12MAFeBKN4y45QWAo/GTmk0V7uRyHT1.5qjKW', NULL, '2023-12-13 19:33:46', '2023-12-13 19:33:46', 2),
(7, 'ani', 'ani@gmail.com', NULL, '$2y$12$8h1Uf0veo.zPci5Gte8zUOkJ268HGwER3xUZADUrLkovwQFCxpV52', NULL, '2023-12-13 19:35:21', '2023-12-13 19:35:21', 2),
(8, 'una', 'una@gmail.com', NULL, '$2y$12$fuMGZlFtZmjwpsC/HsmOFOjqsiBCtdU5i.G30853xsHW7D6zg5Uo6', NULL, '2023-12-13 19:56:38', '2023-12-13 19:56:38', 2),
(9, 'aji', 'aji@gmail.com', NULL, '$2y$12$TapwGNpo5XUYI8kjr2dl2uixmbeJzwthDvVgjpBaoPjlNdRSSWB3m', NULL, '2023-12-13 20:02:12', '2023-12-13 20:02:12', 2),
(10, 'anu2', 'anu2@gmail.com', NULL, '$2y$12$EiSGgPE3Nmzm4qblGLcjJeeDuArstNexo8G5oU5NxjXMhd36HxZmm', NULL, '2023-12-13 20:06:00', '2023-12-13 20:06:00', 2),
(11, 'ani1', 'ani1@gmail.com', NULL, '$2y$12$lv.CXRrUupv7x9vszH/Xt.HFQQi89G.BCnG7dPcwfB4Hr.XfLHN5O', NULL, '2023-12-13 20:21:30', '2023-12-13 20:21:30', 2),
(12, 'toni', 'toni@gmail.com', NULL, '$2y$12$f1/o7us4ktW9DHCGBYZnXu7IR6tn1kliXX5dwhQHLwL1o0G882O2u', NULL, '2023-12-13 20:24:03', '2023-12-13 20:24:03', 2),
(13, 'puja', 'puja@gmail.com', NULL, '$2y$12$9TswZHa6q.B0boJ/Ttkf5uY4zj7qtL1W6E3xD4Rv2YUCJsxxHk.Xu', NULL, '2023-12-13 20:26:38', '2023-12-13 20:26:38', 2);

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
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grooming_id_kucing_foreign` (`id_kucing`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_jenis_nama_unique` (`jenis_nama`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id_kucing_foreign` (`id_kucing`),
  ADD KEY `kamar_id_layanan_foreign` (`id_layanan`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kondisi_kondisi_kesehatan_unique` (`kondisi_kesehatan`);

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kucing_id_kondisi_foreign` (`id_kondisi`),
  ADD KEY `kucing_id_jenis_foreign` (`id_jenis`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `layanan_layanan_kamar_unique` (`layanan_kamar`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_id_customer_foreign` (`id_customer`),
  ADD KEY `pesan_id_kucing_foreign` (`id_kucing`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservasi_id_customer_foreign` (`id_customer`),
  ADD KEY `reservasi_id_kucing_foreign` (`id_kucing`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grooming`
--
ALTER TABLE `grooming`
  ADD CONSTRAINT `grooming_id_kucing_foreign` FOREIGN KEY (`id_kucing`) REFERENCES `kucing` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_id_kucing_foreign` FOREIGN KEY (`id_kucing`) REFERENCES `kucing` (`id`),
  ADD CONSTRAINT `kamar_id_layanan_foreign` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id`);

--
-- Constraints for table `kucing`
--
ALTER TABLE `kucing`
  ADD CONSTRAINT `kucing_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`),
  ADD CONSTRAINT `kucing_id_kondisi_foreign` FOREIGN KEY (`id_kondisi`) REFERENCES `kondisi` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pesan_id_kucing_foreign` FOREIGN KEY (`id_kucing`) REFERENCES `kucing` (`id`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservasi_id_kucing_foreign` FOREIGN KEY (`id_kucing`) REFERENCES `kucing` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
