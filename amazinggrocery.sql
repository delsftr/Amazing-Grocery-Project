-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 07:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_desc`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2023-02-08 00:58:02', '2023-02-08 00:58:02'),
(2, 'Female', '2023-02-08 00:58:02', '2023-02-08 00:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_desc`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Brokoli', 'Brokoli merupakan jenis sayuran yang sudah sangat mendunia. Sayuran ini banyak dipakai oleh koki untuk mempercantik makanan karena bentuknya yang cukup unik seperti pohon dalam ukuran kecil. Di samping itu, rasa brokoli juga sangat renyah dan gurih. Kamu bisa jadikan brokoli sebagai menu makanan sehat untuk seluruh anggota keluarga.', 12000, NULL, NULL),
(3, 'Kangkung', 'Kangkung juga menjadi salah satu sayur yang cukup digemari masyarakat. Sayur kangkung digunakan untuk menu gado-gado dan pecel. Konon katanya, jenis sayur ini mampu meningkatkan hormon yang membantu tubuh lebih rileks.', 13000, NULL, NULL),
(4, 'Tauge', 'Jenis sayur yang satu ini pun cukup populer di banyak menu makanan. Kamu bisa menumis atau merebus tauge untuk dapatkan makanan enak yang menyehatkan. Tauge pun bisa dijumpai di menu ketoprak, soto, bakso, dan rawon.', 14000, NULL, NULL),
(5, 'Sawi', 'Jenis sayur hijau yang satu ini punya rasa yang cukup pahit. Namun, penggunaannya malah sangat dibutuhkan dalam beberapa masakan. Rasa pahit dari sawi mampu menetralkan rasa gurih yang berlebihan dalam makanan. Tidak heran jika sawi dipakai di kedai untuk menu mi instan atau bakso.', 15000, NULL, NULL),
(6, 'Seledri', 'Mungkin seledri hanya berfungsi sebagai bahan tambahan dalam makanan. Penggunaanya hanya ditaburkan setelah makanan siap disantap. Namun, daun seledri ini punya khasiat yang cukup banyak untuk tubuh. Manfaatnya bisa membantu menjaga tekanan darah dan mencegah pertumbuhan sel kanker dalam tubuh.', 16000, NULL, NULL),
(7, 'Buncis', 'Buncis merupakan jenis sayuran yang memiliki serat tinggi. Di samping itu, sayur ini juga punya kandungan vitamin yang cukup banyak. Mengonsumsi buncis secara rutin pun bisa menurunkan risiko penyakit jantung, loh. Kamu pun bisa mengolah buncis dengan lebih mudah karena rasa sayur ini terbilang sudah sangat gurih.', 17000, NULL, NULL),
(8, 'Selada', 'Kamu bisa mengonsumsi selada tanpa diolah terlebih dulu. Cukup mencucinya hingga bersih dengan air dingin untuk dapatkan kesegaran dari sayuran ini. Selada bisa disajikan dengan campuran daging ayam dan sapi. Kamu bisa bisa mencocolnya dengan berbagai jenis sambal untuk dapatkan cita rasa yang lezat.', 18000, NULL, NULL),
(9, 'Kemangi', 'Kemangi menjadi salah satu jenis sayur yang menjadi favorit menu lalapan. Daun ini memiliki punya sensasi rasa yang unik di lidah. Kamu pun bisa menjadikan daun kemangi sebagai penambah aroma masakan. Bukan hanya itu, daun kemangi pun bisa dipakai untuk mencuci tangan dan menghilangkan aroma amis setelah makan.', 19000, NULL, NULL),
(10, 'Pakcoi', 'Sayur pakcoi paling sering dijumpai di sajian chinese food. Pakcoi bisa ditumis bersama bawang putih untuk jadi santapan sehat setiap hari. Bagian batang sayur ini sangat renyah dan tidak mudah layu biarpun dimasak.', 20000, NULL, NULL),
(11, 'Pare', 'Pare merupakan salah satu jenis sayur buah yang sangat menyehatkan. Kandungan di dalamnya bisa membantu menurunkan kadar gula darah dan kolesterol. Namun, rasa pare sangat pahit dan mungkin beberapa orang akan tidak suka dengan rasanya. Kamu perlu menambahkan sambal goreng atau sambal kacang untuk menetralkan rasanya.', 21000, NULL, NULL),
(12, 'Kale', 'Kale merupakan jenis sayuran yang paling menyehatkan di seluruh dunia. Kandungan nutrisinya sangat kaya dan manfaatnya pun cukup beragam. Sayur kale biasa dijadikan campuran makanan untuk diet. Kamu pun bisa mencampur kale dengan sayur dan buah-buahan untuk dijadikan jur.', 22000, NULL, NULL),
(13, 'Kol', 'Sayur yang satu ini mirip dengan brokoli. Jika brokoli berwarna hijau, kembang kol memiliki warna putih pada bagian bunganya. Kamu bisa mengolah sayur ini dengan cara direbus dan dicampur ke dalam sup. Tidak ada salahnya juga mencoba resep kembang kol tepung goreng untuk menu camilan kala santai.', 23000, NULL, NULL);

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
(5, '2023_02_07_173253_create_roles_table', 1),
(6, '2023_02_07_173818_create_genders_table', 1),
(7, '2023_02_07_173927_create_orders_table', 1),
(8, '2023_02_07_174111_create_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2023-02-08 00:58:02', '2023-02-08 00:58:02'),
(2, 'Admin', '2023-02-08 00:58:02', '2023-02-08 00:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_picture_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `role_id`, `gender_id`, `email`, `display_picture_link`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Name', 2, 1, 'user@gmail.com', '1675837082.png', '$2y$10$tnFqA0VI2gKhdX2ml46dr.fI06fJJUkChXxqcGCeNQcEYuhMVV1Jq', NULL, '2023-02-07 11:58:16', '2023-02-07 23:18:02');

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
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
