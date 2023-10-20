-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2023 pada 08.23
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul_article`, `isi_article`, `cover_article`, `gambar_article`, `created_at`, `updated_at`) VALUES
(1, 'FOMO ARTICLE', '<p class=\"ql-align-justify\"><strong>Prolog:</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dalam konteks interior, FOMO dapat merujuk pada kekhawatiran bahwa anda akan melewatkan tren interior yang sedang popular atau tidak memiliki interior yang cukup menarik untuk dipamerkan kepada tamu.&nbsp;</span></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Namun, penting untuk diingat bahwa interior rumah harus mencerminkan kepribadian dan gaya hidup anda. Bukan hanya untuk memenuhi harapan atau tren social. Berikut adalah beberapa tips untuk mengatasi FOMO interior.&nbsp;</span></p><p><br></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent; color: rgb(0, 0, 0);\">Inti:</strong></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">1.Kenali gaya anda sendiri</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Kenali gaya anda sendiri dan pertimbangkan apa yang membuat anda merasa nyaman dan Bahagia dalam sebuah ruangan. Jangan hanya mengikuti tren tanpa mempertimbangkan apakah itu cocok dengan kepribadian dan gaya hidup anda.&nbsp;</span></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">2.Buatlah ruangan yang multifungsi</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Buatlah ruangan yang dapat digunakan untuk lebih dari satu fungsi. Misalnya, sebuah ruang keluarga dapat menjadi ruang kerja atau tempat tidur tamu.&nbsp;</span></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">3.Pilih furniture yang tahan lama</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Pilih furniture yang tahan lama dan memiliki kualitas yang baik daripada mengikuti tren dengan membeli furniture yang murah tetapi cepat rusak. Kamu dapat custom furniture dan interior di Line Studio dengan beragam pilihan material.</span></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">4.Focus pada kualitas daripada kuantitas</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Lebih baik memiliki beberapa item furniture berkualitas daripada memiliki banyak item yang murah dan tidak tahan lama. Pilihlah item yang berkualitas dan sesuai dengan gaya dan kebutuhan anda.&nbsp;</span></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">5.Jangan terlalu focus pada dekorasi</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dekorasi yang terlalu banyak atau berlebihan dapat membuat ruangan terlihat berantakan dan kacau. Pilihlah dekorasi dengan cermat dan pertimbangkan warna, ukuran, dan proporsi yang tepat.</span></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">6.Cari bantuan professional&nbsp;</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Jika anda merasa kewalahan dengan banyaknya pilihan desain dan tren yang ada, anda bisa mempertimbangkan untuk mencari bantuan dari jasa interior professional. Line Studio dapat membantu anda untuk mewujudkan interior impian,</span></p><p><br></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent; color: rgb(0, 0, 0);\">Penutup:</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dengan mengikuti tips-tips tersebut, anda dapat mengatasi FOMO interior dan menciptakan ruangan yang sesuai dengan gaya dan kebutuhan anda. Ingatlah bahwa interior rumah adalah cerminan dari kepribadian dan gaya hidup anda, bukan hanya untuk mengikuti tren atau harapan social. </span></p><p><br></p><p><br></p>', 'C20231016061701.jpg', 'G20231016061701.png', '2023-10-15 23:17:01', '2023-10-15 23:18:58');

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Apartemen', NULL, NULL),
(2, 'Living Room', NULL, NULL),
(3, 'Bedroom', NULL, NULL),
(4, 'Store & Cafe', NULL, NULL),
(5, 'Kitchen', NULL, NULL);

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_10_05_165450_create_article_table', 2),
(12, '2023_10_07_140755_create_kategori_table', 2);

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
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul_portofolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_portofolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `kategori_id`, `judul_portofolio`, `gambar_portofolio`, `created_at`, `updated_at`) VALUES
(1, 1, 'PARAHYANGAN RESIDENCE MR.MICHAEL 1', '20231016055458.png', '2023-10-15 22:54:58', '2023-10-15 22:54:58'),
(2, 1, 'PARAHYANGAN RESIDENCE MR.MICHAEL 2', '20231016055516.png', '2023-10-15 22:55:16', '2023-10-15 22:55:16'),
(3, 1, 'PARAHYANGAN RESIDENCE MR.MICHAEL 3', '20231016055533.png', '2023-10-15 22:55:33', '2023-10-15 22:55:33'),
(4, 3, 'BEDROOM MR RICKY 1', '20231016055609.png', '2023-10-15 22:56:09', '2023-10-15 22:56:09'),
(5, 3, 'BEDROOM MR RICKY 2', '20231016055629.png', '2023-10-15 22:56:29', '2023-10-15 22:56:29'),
(6, 3, 'BEDROOM MR RICKY 3', '20231016055645.png', '2023-10-15 22:56:45', '2023-10-15 22:56:45'),
(7, 5, 'KITCHEN BU HANY 1', '20231016055724.png', '2023-10-15 22:57:24', '2023-10-15 22:57:24'),
(8, 5, 'KITCHEN BU HANY 2', '20231016055740.png', '2023-10-15 22:57:40', '2023-10-15 22:57:40'),
(9, 5, 'KITCHEN BU HANY 3', '20231016055756.png', '2023-10-15 22:57:56', '2023-10-15 22:57:56'),
(10, 2, 'LIVING ROOM BU HANY 1', '20231016055832.png', '2023-10-15 22:58:32', '2023-10-15 22:58:32'),
(11, 2, 'LIVING ROOM BU HANY 2', '20231016055845.png', '2023-10-15 22:58:45', '2023-10-15 22:58:45'),
(12, 2, 'LIVING ROOM BU HANY 3', '20231016055902.png', '2023-10-15 22:59:02', '2023-10-15 22:59:02'),
(13, 4, 'CAFE BU IMEY 1', '20231016055959.png', '2023-10-15 22:59:59', '2023-10-15 22:59:59'),
(14, 4, 'CAFE BU IMEY 2', '20231016060012.png', '2023-10-15 23:00:12', '2023-10-15 23:00:12'),
(15, 4, 'CAFE BU IMEY 3', '20231016060027.png', '2023-10-15 23:00:27', '2023-10-15 23:00:27');

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
(1, 'LineStudio', 'linezstudio@gmail.com', NULL, '$2y$10$FaLtMHQhIXKco/4Xpi2/Memx2ecC5Jx1ylgryFtGG3FQ4Iv41YkZa', NULL, '2023-10-15 22:51:56', '2023-10-15 22:51:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
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
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
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
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
