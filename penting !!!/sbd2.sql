-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 06:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manga` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `chapter_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `manga`, `order`, `chapter_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Chapter 1', NULL, '2023-05-22 13:53:23'),
(2, 2, 1, 'Chapter 1', NULL, '2023-05-05 15:16:27'),
(3, 1, 2, 'Chapter 2', NULL, '2023-05-23 03:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `manga` bigint(20) UNSIGNED NOT NULL,
  `chapter` bigint(20) UNSIGNED NOT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `manga` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mangas`
--

CREATE TABLE `mangas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mangas`
--

INSERT INTO `mangas` (`id`, `title`, `sinopsis`, `author`, `cover`, `bahasa`, `count`, `created_at`, `updated_at`) VALUES
(1, 'kaguya sama', 'Kaguya-sama: Love Is War -Ultra Romantic- mengisahkan tentang Miyuki (diisi suara oleh Makoto Furukawa) yang merupakan seorang ketua siswa akademi di sekolahnya dan juga merupakan seorang anak dari keluarga kaya, memiliki peringkat yang terbaik membuat Miyuki menjadi seorang siswa yang sangat dihormati.', 'Aka Azaka', 'Kcover.jpg', 'indonesia', 88, NULL, '2023-05-28 05:33:19'),
(2, 'The Breaker', 'Tentang dunia pendekar Korea di zaman modern dimana koalisinya telah dikuasai oleh pendekar culas yang mementingkan ambisi pribadinya. Lalu kehidupan sekolah Shi Woon yang selalu di gencet namun perlahan berubah menjadi kuat. Guru baru yang sifatnya mesum namun memiliki ilmu beladiri yang tinggi. Kelucuan-kelucuan yang disebabkan oleh Chun Woo yang senang merayu guru perempuan namun sering gagal. Diselipkan juga fan services untuk menyegarkan mata. Ada juga bagian yang menyentuh ketika Shi Woon menyadari apa yang dilakukan gurunya selama ini bertujuan untuk melindungi dirinya. Yang kedua karena gambarnya yang bagus sekali. Pertarungan bela diri digambarkan dengan apiknya, gerak-gerak jurus yang begitu detail dan luwes. Penguasaan tenaga dalam, gerakan menghindar, menyerang dan impact terkena pukulan pun terlihat terasa sekali.', 'Jeon Keuk Jin', 'Bcover.jpg', 'indonesia', 10, NULL, '2023-05-22 10:19:39'),
(3, 'Vinland Saga', 'Ini adalah kisah Thorfinn yang hendak melakukan balas dendam kepada Askeladd yang telah membunuh ayahnya. Tetapi seiring berjalannya cerita, Thorfinn menyadari bahwa ada tujuan lebih besar yang harus ia capai selain balas dendam.', 'Makoto Yukimura', 'Vcover.jpg', 'indonesia', 1, NULL, NULL),
(4, 'Oshi no Ko', 'Ai yang baru berusia 16 tahun datang dalam keadaan hamil anak kembar. Untuk menyembunyikan kehamilannya, Ai mengumumkan kepada publik bahwa dirinya akan mengambil hiatus selama beberapa waktu. Di tengah kebingungannya, Gorou berjanji akan menjaga dan membantu Ai sampai kelahiran kedua anaknya.', 'AKA AZAKA', 'Ocover.jpg', 'indonesia', 1, NULL, NULL),
(5, 'Mushoku Tensei ', 'Mengisahkan tentang seorang pria pengangguran dan putus asa yang bereinkarnasi ke dunia fantasi sambil mempertahankan ingatannya, ia bertekad untuk menjalani kehidupan barunya tanpa penyesalan. Seri ini awalnya diterbitkan di situs web berisi novel karya penggunanya Shōsetsuka ni Narō pada tanggal 22 November 2012.', 'RIFUJIN NA MAGONOTE', 'Mcover.jpg', 'indonesia', 0, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_051411_create_mangas_table', 1),
(6, '2023_05_12_074029_chapters', 1),
(7, '2023_05_16_170236_pages', 1),
(8, '2023_05_16_171038_genre', 1),
(9, '2023_05_16_171221_favorites', 1),
(10, '2023_05_16_171516_comments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `chapter_id`, `order`, `path`) VALUES
(1, 1, 1, 'storage/mangas/100/chapter_01/01.jpg'),
(2, 1, 2, 'storage/mangas/100/chapter_01/02.jpg'),
(3, 1, 3, 'storage/mangas/100/chapter_01/03.jpg'),
(4, 1, 4, 'storage/mangas/100/chapter_01/04.jpg'),
(5, 1, 5, 'storage/mangas/100/chapter_01/05.jpg'),
(6, 1, 6, 'storage/mangas/100/chapter_01/06.jpg'),
(7, 1, 7, 'storage/mangas/100/chapter_01/07.jpg'),
(8, 1, 8, 'storage/mangas/100/chapter_01/08.jpg'),
(9, 1, 9, 'storage/mangas/100/chapter_01/09.jpg'),
(10, 1, 10, 'storage/mangas/100/chapter_01/10.jpg'),
(11, 1, 11, 'storage/mangas/100/chapter_01/11.jpg'),
(12, 1, 12, 'storage/mangas/100/chapter_01/12.jpg'),
(13, 1, 13, 'storage/mangas/100/chapter_01/13.jpg'),
(14, 1, 14, 'storage/mangas/100/chapter_01/14.jpg'),
(15, 1, 15, 'storage/mangas/100/chapter_01/15.jpg'),
(16, 1, 16, 'storage/mangas/100/chapter_01/16.jpg'),
(17, 1, 17, 'storage/mangas/100/chapter_01/17.jpg'),
(18, 1, 18, 'storage/mangas/100/chapter_01/18.jpg'),
(19, 1, 19, 'storage/mangas/100/chapter_01/19.jpg'),
(20, 1, 20, 'storage/mangas/100/chapter_01/20.jpg'),
(21, 1, 21, 'storage/mangas/100/chapter_01/21.jpg'),
(22, 1, 22, 'storage/mangas/100/chapter_01/22.jpg'),
(23, 1, 23, 'storage/mangas/100/chapter_01/23.jpg'),
(24, 2, 1, 'storage/mangas/101/The_Breaker_Chapter_01/001.jpg'),
(25, 2, 2, 'storage/mangas/101/The_Breaker_Chapter_01/002.jpg'),
(26, 2, 3, 'storage/mangas/101/The_Breaker_Chapter_01/003.jpg'),
(27, 2, 4, 'storage/mangas/101/The_Breaker_Chapter_01/004.jpg'),
(28, 2, 5, 'storage/mangas/101/The_Breaker_Chapter_01/005.jpg'),
(29, 2, 6, 'storage/mangas/101/The_Breaker_Chapter_01/006.jpg'),
(30, 2, 7, 'storage/mangas/101/The_Breaker_Chapter_01/007.jpg'),
(31, 2, 8, 'storage/mangas/101/The_Breaker_Chapter_01/008.jpg'),
(32, 2, 9, 'storage/mangas/101/The_Breaker_Chapter_01/009.jpg'),
(33, 2, 10, 'storage/mangas/101/The_Breaker_Chapter_01/010.jpg'),
(34, 2, 11, 'storage/mangas/101/The_Breaker_Chapter_01/011.jpg'),
(35, 2, 12, 'storage/mangas/101/The_Breaker_Chapter_01/012.jpg'),
(36, 2, 13, 'storage/mangas/101/The_Breaker_Chapter_01/013.jpg'),
(37, 2, 14, 'storage/mangas/101/The_Breaker_Chapter_01/014.jpg'),
(38, 2, 15, 'storage/mangas/101/The_Breaker_Chapter_01/015.jpg'),
(39, 2, 16, 'storage/mangas/101/The_Breaker_Chapter_01/016.jpg'),
(40, 2, 17, 'storage/mangas/101/The_Breaker_Chapter_01/017.jpg'),
(41, 2, 18, 'storage/mangas/101/The_Breaker_Chapter_01/018.jpg'),
(42, 2, 19, 'storage/mangas/101/The_Breaker_Chapter_01/019.jpg'),
(43, 2, 20, 'storage/mangas/101/The_Breaker_Chapter_01/020.jpg'),
(44, 2, 21, 'storage/mangas/101/The_Breaker_Chapter_01/021.jpg'),
(45, 2, 22, 'storage/mangas/101/The_Breaker_Chapter_01/022.jpg'),
(46, 2, 23, 'storage/mangas/101/The_Breaker_Chapter_01/023.jpg'),
(47, 2, 24, 'storage/mangas/101/The_Breaker_Chapter_01/024.jpg'),
(48, 2, 25, 'storage/mangas/101/The_Breaker_Chapter_01/025.jpg'),
(49, 2, 26, 'storage/mangas/101/The_Breaker_Chapter_01/026.jpg'),
(50, 2, 27, 'storage/mangas/101/The_Breaker_Chapter_01/027.jpg'),
(51, 2, 28, 'storage/mangas/101/The_Breaker_Chapter_01/028.jpg'),
(52, 2, 29, 'storage/mangas/101/The_Breaker_Chapter_01/029.jpg'),
(53, 2, 30, 'storage/mangas/101/The_Breaker_Chapter_01/030.jpg'),
(54, 2, 31, 'storage/mangas/101/The_Breaker_Chapter_01/031.jpg'),
(55, 2, 32, 'storage/mangas/101/The_Breaker_Chapter_01/032.jpg'),
(56, 2, 33, 'storage/mangas/101/The_Breaker_Chapter_01/033.jpg'),
(57, 2, 34, 'storage/mangas/101/The_Breaker_Chapter_01/034.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` enum('admin','author') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Diana Keeling Sr.', 'jerrell.macejkovic@hotmail.com', 'author', '1995-03-13 18:40:10', '}j\\6\\Q', NULL, NULL, NULL),
(2, 'Candida Bayer', 'ydaniel@johns.org', 'admin', '2007-01-23 20:34:34', 'i,ZU1>^RjR0F7*', NULL, NULL, NULL),
(3, 'Mrs. Alison Ledner PhD', 'pansy.okon@carroll.com', 'author', '2019-03-23 21:01:30', '^a9aQfVl~+2t21+D\'a8', NULL, NULL, NULL),
(4, 'Hadley Thiel Jr.', 'hlowe@yahoo.com', 'admin', '2016-11-27 08:48:45', ']@J%nJ5meerH.j,396m}', NULL, NULL, NULL),
(5, 'Marion Kris', 'vanessa79@schaefer.org', 'admin', '1970-12-24 21:51:56', ',:yK=pvhQq8tArLETU\\x', NULL, NULL, NULL),
(6, 'Dr. Dawson D\'Amore Jr.', 'obailey@yahoo.com', 'author', '2019-08-25 20:30:08', 'I=iF^98(kZcL%,Z%', NULL, NULL, NULL),
(7, 'Tyler Robel', 'jones.maye@yahoo.com', 'author', '2013-09-28 17:06:37', '<Z`KjU>$T*_Ujt', NULL, NULL, NULL),
(8, 'Josianne Tillman', 'qsteuber@stracke.com', 'author', '1988-12-01 22:37:47', 'R~;9eH5C6\'&WKh', NULL, NULL, NULL),
(9, 'Rocio Renner', 'kmayert@wolff.com', 'author', '2021-12-15 07:43:45', 'lxzTNS)&y$y', NULL, NULL, NULL),
(10, 'Verna Dooley DVM', 'reyes34@parker.biz', 'author', '1994-01-29 22:02:03', '0gs-yOWR{E)`+yd', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_manga_foreign` (`manga`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_foreign` (`user`),
  ADD KEY `comments_manga_foreign` (`manga`),
  ADD KEY `comments_chapter_foreign` (`chapter`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_foreign` (`user`),
  ADD KEY `favorites_manga_foreign` (`manga`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_chapter_id_foreign` (`chapter_id`);

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
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_manga_foreign` FOREIGN KEY (`manga`) REFERENCES `mangas` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_chapter_foreign` FOREIGN KEY (`chapter`) REFERENCES `chapters` (`id`),
  ADD CONSTRAINT `comments_manga_foreign` FOREIGN KEY (`manga`) REFERENCES `mangas` (`id`),
  ADD CONSTRAINT `comments_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_manga_foreign` FOREIGN KEY (`manga`) REFERENCES `mangas` (`id`),
  ADD CONSTRAINT `favorites_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
