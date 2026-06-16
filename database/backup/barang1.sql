-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2026 pada 15.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_25_185552_create_news_table', 1),
(6, '2023_09_26_160311_create_posts_table', 1),
(7, '2023_09_26_171942_create_images_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `nama`, `judul`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'penerimaan peserta didik baru', 'Pengumuman', 'PPDB adalah suatu proses pendaftaran bagi calon peserta didik baru yang telah lulus dari suatu jenjang pendidikan untuk dapat masuk ke suatu lembaga pendidikan jenjang berikutnya, mulai dari PAUD, TK, SD, SMP, hingga SMA/SMK.\r\nDalam pelaksanaannya, proses PPDB menggunakan sistem khusus dengan rancangan satu sumber atau pusat informasi sebagai server atau pengelola seleksi penerimaan peserta didik baru. Sistem PPDB dapat dilakukan secara luring maupun daring, tergantung kemampuan dari tiap sekolah atau daerah.', 'ppdb.jpg', '2023-10-15 20:58:53', '2023-10-15 20:58:54'),
(7, 'Juara 1 Futsal antar  sekolah tingkat kota', 'Berita', 'SMP 26 Pontianak alhamdulillah telah menjuarai kembali lomba non akademik yaitu futsal antar sekolah setingkat kota Pontianak. Total kejuaraan yang telah diraih yaitu 4 juara perlombaan futsal.', 'WhatsApp Image 2023-10-17 at 23.44.43.jpeg', '2023-10-17 09:45:29', '2023-10-17 09:45:29'),
(8, 'kp', 'konsul', 'PPDB adalah suatu proses pendaftaran bagi calon peserta didik baru yang telah lulus dari suatu jenjang pendidikan untuk dapat masuk ke suatu lembaga pendidikan jenjang berikutnya, mulai dari PAUD, TK, SD, SMP, hingga SMA/SMK. Dalam pelaksanaannya, proses PPDB menggunakan sistem khusus dengan rancangan satu sumber atau pusat informasi sebagai server atau pengelola seleksi penerimaan peserta didik baru. Sistem PPDB dapat dilakukan secara luring maupun daring, tergantung kemampuan dari tiap sekolah atau daerah.', 'IMG_1524.JPG', '2023-10-30 20:24:33', '2023-10-30 20:24:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `body`, `cover`, `created_at`, `updated_at`) VALUES
(10, '197001011995122006', 'Sri Januwati, S.Pd', 'Kepala Sekolah', '1697441005_WhatsApp Image 2023-10-16 at 12.38.54.jpeg', '2023-10-16 00:23:25', '2023-10-16 00:23:25'),
(12, '196801071988072001', 'Neny Mulyani,S Pd.I,M.Si', 'Pendidikan Agama Islam', '1697443328_WhatsApp Image 2023-10-16 at 14.44.22.jpeg', '2023-10-16 01:02:08', '2023-10-16 01:02:08'),
(13, '198308232009022004', 'Sri Agustina,S.Pd', 'Prakarya', '1697443374_WhatsApp Image 2023-10-16 at 14.44.23.jpeg', '2023-10-16 01:02:54', '2023-10-16 01:02:54'),
(14, '198209212009032002', 'Salbiani,S.Pd', 'Prakarya', '1697443436_WhatsApp Image 2023-10-16 at 14.44.24.jpeg', '2023-10-16 01:03:56', '2023-10-16 01:03:56'),
(15, '-', 'Kusna, S.Pd.K', 'Agama Kristen', '1697443474_WhatsApp Image 2023-10-16 at 12.38.55.jpeg', '2023-10-16 01:04:34', '2023-10-16 01:04:34'),
(16, '198901282023212015', 'Eligia Herisoni, S.Pd', 'Bahasa Inggris', '1697443569_WhatsApp Image 2023-10-16 at 14.44.24 (1).jpeg', '2023-10-16 01:06:09', '2023-10-16 01:06:09'),
(17, '198405122011012002', 'Darsih Yusmiarti, M.Pd', 'Matematika', '1697443663_WhatsApp Image 2023-10-16 at 14.44.22 (1).jpeg', '2023-10-16 01:07:43', '2023-10-16 01:07:43'),
(18, '199211102019032006', 'Ayu novia annisa, S.Pd', 'Bahasa Indonesia', '1697443805_WhatsApp Image 2023-10-16 at 14.44.19.jpeg', '2023-10-16 01:08:30', '2023-10-16 01:10:05'),
(19, '197303102006042006', 'Erna, S.Pd', 'Bahasa Inggris', '1697448093_WhatsApp Image 2023-10-16 at 14.44.23 (1).jpeg', '2023-10-16 02:21:33', '2023-10-16 02:21:33'),
(20, '-', 'Dwi Jayanti, S.Pd.B', 'Agama Budha', '1697448153_WhatsApp Image 2023-10-16 at 14.44.21.jpeg', '2023-10-16 02:22:33', '2023-10-16 02:22:33'),
(21, '196907051994021002', 'Hormain, A.Md', 'Ilmu Pengetahuan Alam', '1697448204_WhatsApp Image 2023-10-16 at 14.44.20.jpeg', '2023-10-16 02:23:24', '2023-10-16 02:23:24'),
(22, '-', 'Yan Chandra, S.Pd', 'Matematika', '1697448260_WhatsApp Image 2023-10-16 at 14.44.19 (1).jpeg', '2023-10-16 02:24:20', '2023-10-16 02:24:20'),
(23, '199103032015011001', 'Bima Lentera Sukma, S.Pd', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '1697448327_WhatsApp Image 2023-10-16 at 14.44.21 (1).jpeg', '2023-10-16 02:25:27', '2023-10-16 02:25:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Aplikasi', 'admin', 'admin@admin.com', NULL, '$2y$10$liA/9/FTVglZ3viGGbMLZeGovM8jv5AuqtojJQUc2YrwEZEJn2KyO', 'U9lGnbHS1eouqBmSrdOIOGIkiKvXVu5IxrX9Nf7dy98xFdDO2Z1ydVoUKfyN', '2023-09-26 10:24:05', '2023-09-26 10:24:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
