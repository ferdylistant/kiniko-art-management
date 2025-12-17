-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 09:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiniko_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Kiniko Art Management', 'An art management platform dedicated to sustaining contemporary visual culture.', '<p>\r\n                        Visual art has long been an essential element in shaping human\r\n                        civilization, influencing the development of technology,\r\n                        communication, fashion, and social structures.\r\n                        Indonesia itself possesses a rich visual tradition, whose\r\n                        cultural relics allow us to trace the greatness of past\r\n                        civilizations and their ways of seeing the world.\r\n                    </p>\r\n\r\n                    <p>\r\n                        This visual legacy continues today through contemporary artists\r\n                        who produce outstanding works capable of standing alongside\r\n                        global art practices.\r\n                        The growing number of art institutions has contributed to the\r\n                        increasing emergence of artists each year—an encouraging\r\n                        development that nonetheless requires supportive infrastructure\r\n                        to sustain artistic production and creative ideas.\r\n                    </p>\r\n\r\n                    <p>\r\n                        The vast potential of visual arts represents a promising future\r\n                        for the cultural development of the nation.\r\n                        Artists stand as one of the last guardians of cultural identity.\r\n                        In an era of globalization—where internet technology has created\r\n                        shared cultures and languages that risk eroding local identities—\r\n                        artists respond to these challenges through artistic expression.\r\n                    </p>\r\n\r\n                    <p>\r\n                        In response to this awareness, <strong>Kiniko Art</strong> was\r\n                        established on <strong>18 October 2016</strong> as a platform\r\n                        dedicated to supporting and facilitating artistic activities,\r\n                        providing space for critical discourse, presentation, and\r\n                        appreciation of contemporary visual art.\r\n                    </p>', NULL, '2025-12-16 02:13:09', '2025-12-16 02:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artist_exhibitions`
--

CREATE TABLE `artist_exhibitions` (
  `artist_id` char(36) NOT NULL,
  `exhibition_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` char(36) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist_id` char(36) NOT NULL,
  `exhibition_id` char(36) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` char(36) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT 0,
  `banner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`id`, `name`, `title`, `birth_date`, `birth_place`, `bio`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Jefri Caniago', 'Founder & Art Director', NULL, NULL, '<p>\r\n                        Born in Solo on 22 September 1988, Jefri Caniago is a gallerist and\r\n                        art management practitioner of <strong>Minangkabau descent</strong>,\r\n                        who has long been engaged in the contemporary art ecosystem of\r\n                        Yogyakarta.\r\n                        He completed his higher education in\r\n                        <strong>Business Management at Universitas Terbuka</strong>.\r\n                    </p>\r\n\r\n\r\n                    <p>\r\n                        As the Director of <strong>Kiniko Art Management</strong> and\r\n                        <strong>Kiniko Art</strong> (Art Room), Jefri is widely known\r\n                        among artists across generations.\r\n                        Previously, he also served as Director of\r\n                        <strong>wART a Art Management</strong>,\r\n                        a platform that presented major exhibitions such as\r\n                        <em>Jogja Affordable Art</em>,\r\n                        <em>Warta Exhibition</em>, and\r\n                        <em>Yogya Young Artist</em>.\r\n                    </p>\r\n\r\n                    <p>\r\n                        Through Kiniko Art Management, Jefri has initiated and managed\r\n                        numerous programs dedicated to presenting and archiving\r\n                        artworks from diverse generations and artistic tendencies.\r\n                        These include young artists as well as senior and master artists\r\n                        who play a significant role in the history of Indonesian art,\r\n                        such as <strong>Aming Prayitno</strong>,\r\n                        <strong>Suwaji</strong>, and\r\n                        <strong>Subroto SM</strong>.\r\n                    </p>\r\n\r\n                    <p>\r\n                        Throughout his career, Jefri has been involved in dozens of\r\n                        exhibitions that provide platforms for artists to present\r\n                        their works to wider audiences, while fostering sustainable\r\n                        artistic dialogue and appreciation.\r\n                    </p>\r\n\r\n                    <p>\r\n                        In addition to curatorial and exhibition management practices,\r\n                        Jefri is also active as an <strong>art consultant</strong> and\r\n                        continues to build collaborations with various stakeholders\r\n                        in the field of visual arts. He consistently works to bridge\r\n                        artists—particularly emerging artists—with professional\r\n                        galleries and management, both nationally and internationally.\r\n                    </p>', NULL, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_12_16_090013_create_abouts_table', 1),
(6, '2025_12_16_090137_create_visions_missions_table', 1),
(7, '2025_12_16_090205_create_founders_table', 1),
(8, '2025_12_16_090229_create_quotes_table', 1),
(9, '2025_12_16_090649_create_exhibitions_table', 1);

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
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(100) DEFAULT 'default.jpg',
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `religion` enum('Islam','Katolik','Kristen','Budha','Hindu') DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `branch_id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `organization_id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jobposition_id` char(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ktp` varchar(30) DEFAULT NULL,
  `rekening` varchar(30) DEFAULT NULL,
  `marital_status` enum('Menikah','Belum Menikah','Duda','Janda') DEFAULT NULL,
  `has_children` set('0','1') DEFAULT NULL,
  `number_of_children` varchar(20) DEFAULT NULL,
  `status_account` set('0','1') NOT NULL DEFAULT '1',
  `employment_state` enum('active','resign','break') NOT NULL DEFAULT 'active',
  `employee_id` varchar(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `web_app` set('0','1') NOT NULL DEFAULT '0',
  `mobile_app` set('0','1') NOT NULL DEFAULT '0',
  `administrator` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `birth_date`, `birth_place`, `phone_number`, `address`, `gender`, `religion`, `blood_type`, `branch_id`, `organization_id`, `jobposition_id`, `ktp`, `rekening`, `marital_status`, `has_children`, `number_of_children`, `status_account`, `employment_state`, `employee_id`, `start_date`, `end_date`, `web_app`, `mobile_app`, `administrator`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
('36d18d79-1b44-11f0-bdc6-e89c257adf55', 'Admin', 'admin@gmail.com', NULL, '$2y$12$9BD.twAeHsosWi/kionhteFUOxTbALDpiFwkn/9MrxmtHZAhN6qkm', 'default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'active', NULL, NULL, NULL, '1', '1', 1, 'IWCtDLwIJH34KJLZIJV0pzN8lFCe6fGDOPx4hCFxq6Phif1rWSvKx9u4SlGp', '2025-04-17 04:27:03', '2025-12-08 21:23:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visions_missions`
--

CREATE TABLE `visions_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('vision','mission') NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions_missions`
--

INSERT INTO `visions_missions` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'vision', 'To become a platform that advances and sustains\r\n                        the development of Indonesian visual art.', NULL, NULL),
(2, 'mission', 'Actively initiating, curating, and educating through art\r\n                        programs that aim to explore, examine, and promote\r\n                        Indonesian artworks, both nationally and internationally.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exhibitions_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `organization_id` (`organization_id`),
  ADD KEY `jobposition_id` (`jobposition_id`),
  ADD KEY `name_2` (`name`);
ALTER TABLE `users` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `visions_missions`
--
ALTER TABLE `visions_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visions_missions`
--
ALTER TABLE `visions_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
