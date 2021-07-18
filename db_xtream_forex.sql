-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 01.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xtream_forex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identity_websites`
--

CREATE TABLE `identity_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_sitename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identity_websites`
--

INSERT INTO `identity_websites` (`id`, `name_website`, `logo`, `favicon`, `og_title`, `og_sitename`, `og_image`, `og_description`, `url`, `meta_keyword`, `meta_description`, `email`, `telepon`, `alamat`, `facebook`, `twitter`, `instagram`, `footer`, `title`, `content`, `button`, `created_at`, `updated_at`) VALUES
(1, 'XTream Forex', 'identitywebsite/logo/logo.png', 'identitywebsite/favicon/favicon.png', 'forex', 'forex', 'identitywebsite/og/og_image.png', 'forex', 'https://www.google.com/', 'meta k', 'meta d', 'xtreamforex@gmail.com', '089765432123', 'Perumahan Jatinegara Baru, Jl. Taman Asri I No.1-2, RW.16, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940', 'ngemplak fc', 'twitter', 'diyar.codes', '<p> &copy; Copyright 2021 Tamai| All Rights Reserved.</p>', 'PENYEBARAN KETAT KOMPETITIF', '\n                XtreamForex menawarkan Harga paling Kompetitif di pasar, tidak tertandingi oleh pesaing kami. Pesanan Anda akan diteruskan langsung ke Penyedia Likuiditas kami - oleh karena itu tidak ada Dealing Desk Intervention..', '<a href=\'#\' class=\'tamai-btn\'>learn more</a>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_e_a_s`
--

CREATE TABLE `link_e_a_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_ea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link_e_a_s`
--

INSERT INTO `link_e_a_s` (`id`, `link_ea`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_master_c_t_s`
--

CREATE TABLE `link_master_c_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_master_ct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link_master_c_t_s`
--

INSERT INTO `link_master_c_t_s` (`id`, `link_master_ct`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_referals`
--

CREATE TABLE `link_referals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_referal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link_referals`
--

INSERT INTO `link_referals` (`id`, `link_referal`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/', NULL, NULL);

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
(4, '2021_03_05_164558_create_identity_websites_table', 1),
(5, '2021_03_05_164921_create_link_referals_table', 1),
(6, '2021_03_05_165051_create_link_master_c_t_s_table', 1),
(7, '2021_03_05_165155_create_link_e_a_s_table', 1),
(8, '2021_03_06_134509_create_paket_e_a_s_table', 1),
(9, '2021_03_07_053604_create_trackers_table', 1),
(10, '2021_03_07_161540_create_testimonis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_e_a_s`
--

CREATE TABLE `paket_e_a_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_deposit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` int(11) DEFAULT NULL,
  `low_risk` int(11) NOT NULL,
  `medium_risk` int(11) NOT NULL,
  `high_risk` int(11) NOT NULL,
  `loss_limit` int(11) NOT NULL,
  `max_deposit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket_e_a_s`
--

INSERT INTO `paket_e_a_s` (`id`, `name_deposit`, `deposit`, `low_risk`, `medium_risk`, `high_risk`, `loss_limit`, `max_deposit`, `created_at`, `updated_at`) VALUES
(1, 'Bombastic EA', NULL, 500, 400, 300, 30, 150, NULL, NULL),
(2, 'Fantastic EA', NULL, 1000, 800, 600, 30, 300, NULL, NULL);

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
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `name`, `position`, `photo`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Stalker', 'CEO', 'identitywebsite/testimoni/team-2.jpg', 'wow', NULL, NULL),
(2, 'Jhon Wijk', 'CEO', 'identitywebsite/testimoni/team-3.jpg', 'marveolus', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trackers`
--

CREATE TABLE `trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@xtreamforex.com', NULL, '$2y$10$0P3SmEisJLi0lr4mzsR3VONX2TnIAbMSsiayEWxXJLvzjfifS0gV.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `identity_websites`
--
ALTER TABLE `identity_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link_e_a_s`
--
ALTER TABLE `link_e_a_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link_master_c_t_s`
--
ALTER TABLE `link_master_c_t_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link_referals`
--
ALTER TABLE `link_referals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_e_a_s`
--
ALTER TABLE `paket_e_a_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trackers`
--
ALTER TABLE `trackers`
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
-- AUTO_INCREMENT untuk tabel `identity_websites`
--
ALTER TABLE `identity_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `link_e_a_s`
--
ALTER TABLE `link_e_a_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `link_master_c_t_s`
--
ALTER TABLE `link_master_c_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `link_referals`
--
ALTER TABLE `link_referals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paket_e_a_s`
--
ALTER TABLE `paket_e_a_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `trackers`
--
ALTER TABLE `trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
