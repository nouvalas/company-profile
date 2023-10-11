-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2023 pada 10.47
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
(1, 'aasdas', '<p>L<em><u>orem ipsum dolor sit ame</u></em>tconsectetur adipisicing elit. Provident culpa pariatur tempora alias unde velit voluptatibus perspiciatis, tenetur aperiam obcaecati sint porro quia recusandae laborum fugiat praesentium iste repudiandae minus cum est repellendus. Error, officiis debitis aut ex blanditiis voluptatem voluptate earum quod ea nulla quas unde fuga repellat, quasi sed culpa. Architecto tempore possimus unde debitis! Nemo sequi, iste ea reiciendis facere voluptates tempora saepe earum, corrupti cum id numquam vel, sint explicabo placeat laborum sapiente consectetur a voluptate? Rerum earum inventore sequi magnam eius vitae animi a assumenda saepe molestiae, aliquid deleniti recusandae, cum perspiciatis! Labore odio odit est iusto reiciendis deleniti similique eos ipsum quos ducimus suscipit rerum illum unde iste, dignissimos nisi sed ut facere animi cupiditate assumenda eaque in. Ducimus adipisci sapiente itaque quo dolore labore dolor, accusantium soluta cumque harum dolorem consequatur ullam non at ab sequi nam reiciendis modi? Quisquam vel, necessitatibus consequuntur deleniti enim dolor aliquid expedita eaque temporibus dolore. Dolore ea aut, dignissimos placeat rem voluptate asperiores! Quo libero vitae facilis. Iste eum expedita repudiandae magni sapiente sequi dolor autem aspernatur. Esse aliquam sint cum facilis laborum nesciunt eligendi officiis distinctio ratione consequuntur at maiores, placeat non quia expedita. Quas, dolorem.</p>', 'article-1.jpg', 'article-2.png', '2023-10-09 11:12:22', '2023-10-10 09:05:01'),
(3, 'FOMO INTERIOR', '<p class=\"ql-align-justify\"><strong>Prolog:</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dalam konteks interior, FOMO dapat merujuk pada kekhawatiran bahwa anda akan melewatkan tren interior yang sedang popular atau tidak memiliki interior yang cukup menarik untuk dipamerkan kepada tamu.&nbsp;</span></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Namun, penting untuk diingat bahwa interior rumah harus mencerminkan kepribadian dan gaya hidup anda. Bukan hanya untuk memenuhi harapan atau tren social. Berikut adalah beberapa tips untuk mengatasi FOMO interior.&nbsp;</span></p><p><br></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent; color: rgb(0, 0, 0);\">Inti:</strong></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Kenali gaya anda sendiri</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Kenali gaya anda sendiri dan pertimbangkan apa yang membuat anda merasa nyaman dan Bahagia dalam sebuah ruangan. Jangan hanya mengikuti tren tanpa mempertimbangkan apakah itu cocok dengan kepribadian dan gaya hidup anda.&nbsp;</span></p><p><br></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Buatlah ruangan yang multifungsi</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Buatlah ruangan yang dapat digunakan untuk lebih dari satu fungsi. Misalnya, sebuah ruang keluarga dapat menjadi ruang kerja atau tempat tidur tamu.&nbsp;</span></p><p><br></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Pilih furniture yang tahan lama</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Pilih furniture yang tahan lama dan memiliki kualitas yang baik daripada mengikuti tren dengan membeli furniture yang murah tetapi cepat rusak. Kamu dapat custom furniture dan interior di Line Studio dengan beragam pilihan material.</span></p><p><br></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Focus pada kualitas daripada kuantitas</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Lebih baik memiliki beberapa item furniture berkualitas daripada memiliki banyak item yang murah dan tidak tahan lama. Pilihlah item yang berkualitas dan sesuai dengan gaya dan kebutuhan anda.&nbsp;</span></p><p><br></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Jangan terlalu focus pada dekorasi</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dekorasi yang terlalu banyak atau berlebihan dapat membuat ruangan terlihat berantakan dan kacau. Pilihlah dekorasi dengan cermat dan pertimbangkan warna, ukuran, dan proporsi yang tepat.</span></p><p><br></p><ol><li class=\"ql-align-justify\"><strong style=\"background-color: transparent;\">Cari bantuan professional&nbsp;</strong></li></ol><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Jika anda merasa kewalahan dengan banyaknya pilihan desain dan tren yang ada, anda bisa mempertimbangkan untuk mencari bantuan dari jasa interior professional. Line Studio dapat membantu anda untuk mewujudkan interior impian,</span></p><p><br></p><p class=\"ql-align-justify\"><strong style=\"background-color: transparent; color: rgb(0, 0, 0);\">Penutup:</strong></p><p class=\"ql-align-justify\"><span style=\"background-color: transparent; color: rgb(0, 0, 0);\">Dengan mengikuti tips-tips tersebut, anda dapat mengatasi FOMO interior dan menciptakan ruangan yang sesuai dengan gaya dan kebutuhan anda. Ingatlah bahwa interior rumah adalah cerminan dari kepribadian dan gaya hidup anda, bukan hanya untuk mengikuti tren atau harapan social. </span></p><p><br></p><p class=\"ql-align-justify\"><br></p>', 'article-1.jpg', 'article-2.png', '2023-10-11 00:51:29', '2023-10-11 01:46:02');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_10_01_150053_create_portofolio_table', 2),
(24, '2023_10_05_165450_create_article_table', 2),
(25, '2023_10_07_140755_create_kategori_table', 2),
(27, '2023_10_07_165617_create_portofolio_table', 3);

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
(1, 1, 'Apartemen Kelas Atas', 'apart-1.png', '2023-10-07 10:35:04', '2023-10-07 10:35:04'),
(2, 3, 'Bedroom Kelas Menengah', 'bedroom-3.png', '2023-10-07 10:35:37', '2023-10-07 10:35:37'),
(4, 2, 'Living Room Mewah', 'livingroom-2.png', '2023-10-07 10:37:10', '2023-10-07 10:37:10'),
(5, 1, 'Apartemen Kelas Menengah', 'apart-3.png', '2023-10-07 11:07:32', '2023-10-07 11:07:32'),
(6, 2, 'Living Room Menengah', 'livingroom-2.png', '2023-10-09 08:49:50', '2023-10-09 08:49:50');

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
(1, 'LineStudio', 'linestudio@gmail.com', NULL, '$2y$10$PEHwoifr4XVLKYEa4mb0ae9iCs9edRE2jc6I5yn8h1BgmMy48/Yzu', NULL, '2023-10-07 10:09:45', '2023-10-07 10:09:45');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `portofolio_kategori_id_foreign` (`kategori_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `portofolio_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
