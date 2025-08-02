-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2025 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tallstarterb4blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `user_id`, `post_title`, `post_slug`, `photo`, `post_tags`, `post_description`, `created_at`, `updated_at`) VALUES
(3, 1, 'My first blog', 'my-first-blog', 'uploads/blog/post_1839249102805804.jpeg', 'Dog', '<p><span style=\"color: rgb(236, 240, 241);\">My first bloggidy blog blog</span></p>', '2025-08-01 10:37:10', '2025-08-01 10:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_name`, `user_email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mark Corrigan', 'Markjc@mweb.co.za', 'My first comment', 1, '2025-08-01 10:38:29', '2025-08-01 13:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `service_id`, `description`, `created_at`, `updated_at`) VALUES
(5, 'mark', 'corrigan', 'markjc@mweb.co.za', '-909879078qwr97', 1, 'asdfasdfasdf', '2025-08-01 17:19:10', '2025-08-01 17:19:10');

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
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `linkin_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `YOE` varchar(255) DEFAULT NULL,
  `PC` varchar(255) DEFAULT NULL,
  `HC` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `profession`, `short_description`, `photo`, `resume`, `twitter_url`, `youtube_url`, `linkin_url`, `github_url`, `YOE`, `PC`, `HC`, `created_at`, `updated_at`) VALUES
(2, 'Markus', 'A big man', 'A very big man', 'uploads/hero/Hero-1839249949366959.jpeg', 'uploads/resume/Resume_1839249949412782.docx', NULL, NULL, NULL, NULL, '35', '100ds', 'Happy', '2025-08-01 10:50:38', '2025-08-01 10:50:38'),
(3, 'Fenris', 'Thief catcher', NULL, 'uploads/hero/Hero-1839254531741853.jpeg', 'uploads/resume/Resume_1839254531788677.txt', NULL, NULL, NULL, NULL, '12', '3', 'Me', '2025-08-01 12:03:28', '2025-08-01 12:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_24_190537_create_permission_tables', 1),
(5, '2025_02_25_161844_create_services_table', 1),
(6, '2025_02_28_231218_create_portfolios_table', 1),
(7, '2025_03_01_183145_add_locale_to_users_table', 1),
(8, '2025_03_02_114850_create_resumes_table', 1),
(9, '2025_03_03_131959_create_skills_table', 1),
(10, '2025_03_04_132858_create_testinomials_table', 1),
(11, '2025_03_05_140222_create_blog_posts_table', 1),
(12, '2025_03_08_110457_create_comments_table', 1),
(13, '2025_03_08_213302_create_contacts_table', 1),
(14, '2025_03_09_130441_create_site_settings_table', 1),
(15, '2025_02_24_122652_create_heroes_table', 2),
(16, '2025_08_01_131124_make_service_id_nullable', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'access dashboard', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(2, 'impersonate', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(3, 'view users', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(4, 'create users', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(5, 'update users', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(6, 'delete users', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(7, 'view roles', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(8, 'create roles', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(9, 'update roles', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(10, 'delete roles', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(11, 'view permissions', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(12, 'create permissions', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(13, 'update permissions', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(14, 'delete permissions', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19'),
(16, 'add post', 'web', '2025-08-01 06:16:25', '2025-08-01 06:16:25'),
(17, 'store post', 'web', '2025-08-01 06:16:39', '2025-08-01 06:16:39'),
(18, 'edit post', 'web', '2025-08-01 06:16:49', '2025-08-01 06:16:49'),
(19, 'update post', 'web', '2025-08-01 06:16:59', '2025-08-01 06:16:59'),
(20, 'delete post', 'web', '2025-08-01 06:17:07', '2025-08-01 06:17:07'),
(21, 'edit experience', 'web', '2025-08-01 06:17:21', '2025-08-01 06:17:21'),
(22, 'update experience', 'web', '2025-08-01 06:17:32', '2025-08-01 06:17:32'),
(23, 'delete experience', 'web', '2025-08-01 06:17:47', '2025-08-01 06:17:47'),
(24, 'store experience', 'web', '2025-08-01 06:18:18', '2025-08-01 06:18:18'),
(25, 'all post', 'web', '2025-08-01 06:19:43', '2025-08-01 06:19:43'),
(26, 'my experience', 'web', '2025-08-01 10:09:35', '2025-08-01 10:09:35'),
(27, 'all hero', 'web', '2025-08-02 07:17:39', '2025-08-02 07:17:39'),
(28, 'update hero', 'web', '2025-08-02 07:18:17', '2025-08-02 07:18:17'),
(29, 'all service', 'web', '2025-08-02 07:18:47', '2025-08-02 07:31:39'),
(30, 'add service', 'web', '2025-08-02 07:19:12', '2025-08-02 07:20:44'),
(31, 'store service', 'web', '2025-08-02 07:20:59', '2025-08-02 07:20:59'),
(32, 'edit service', 'web', '2025-08-02 07:21:21', '2025-08-02 07:21:21'),
(33, 'update service', 'web', '2025-08-02 07:21:43', '2025-08-02 07:21:43'),
(34, 'delete service', 'web', '2025-08-02 07:22:33', '2025-08-02 07:22:33'),
(35, 'all work', 'web', '2025-08-02 07:23:10', '2025-08-02 07:31:19'),
(36, 'add work', 'web', '2025-08-02 07:23:38', '2025-08-02 07:23:38'),
(37, 'store work', 'web', '2025-08-02 07:24:12', '2025-08-02 07:24:12'),
(38, 'edit work', 'web', '2025-08-02 07:24:33', '2025-08-02 07:24:33'),
(39, 'update work', 'web', '2025-08-02 07:25:07', '2025-08-02 07:25:07'),
(40, 'delete work', 'web', '2025-08-02 07:25:27', '2025-08-02 07:25:27'),
(41, 'all experience', 'web', '2025-08-02 07:26:08', '2025-08-02 07:26:08'),
(42, 'all education', 'web', '2025-08-02 07:29:41', '2025-08-02 07:29:41'),
(43, 'add skill', 'web', '2025-08-02 07:30:15', '2025-08-02 07:30:15'),
(44, 'store skill', 'web', '2025-08-02 07:30:38', '2025-08-02 07:30:38'),
(45, 'all skill', 'web', '2025-08-02 07:31:00', '2025-08-02 07:31:00'),
(46, 'update skill', 'web', '2025-08-02 07:32:14', '2025-08-02 07:32:14'),
(47, 'edit skill', 'web', '2025-08-02 07:33:13', '2025-08-02 07:33:13'),
(48, 'delete skill', 'web', '2025-08-02 07:34:35', '2025-08-02 07:34:35'),
(49, 'add testimony', 'web', '2025-08-02 07:35:20', '2025-08-02 07:35:20'),
(50, 'store testimony', 'web', '2025-08-02 07:35:43', '2025-08-02 07:35:43'),
(51, 'all testimony', 'web', '2025-08-02 07:36:05', '2025-08-02 07:36:05'),
(52, 'edit testimony', 'web', '2025-08-02 07:36:28', '2025-08-02 07:36:28'),
(53, 'update testimony', 'web', '2025-08-02 07:36:52', '2025-08-02 07:36:52'),
(54, 'delete testimony', 'web', '2025-08-02 07:37:18', '2025-08-02 07:37:18'),
(55, 'all setting', 'web', '2025-08-02 07:39:25', '2025-08-02 07:39:25'),
(56, 'update setting', 'web', '2025-08-02 07:39:36', '2025-08-02 07:39:36'),
(57, 'all contact', 'web', '2025-08-02 07:40:34', '2025-08-02 07:40:34'),
(58, 'delete contact', 'web', '2025-08-02 07:40:45', '2025-08-02 07:40:45'),
(59, 'update comment', 'web', '2025-08-02 07:41:20', '2025-08-02 07:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `service_cat_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resume_cat` varchar(255) NOT NULL,
  `resume_title` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `from_year` varchar(255) NOT NULL,
  `to_year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `resume_cat`, `resume_title`, `institution`, `from_year`, `to_year`, `created_at`, `updated_at`) VALUES
(1, 'education', 'Wizard Degree', 'Hogwarts', '2020', 'present', '2025-08-01 10:04:41', '2025-08-01 10:08:41'),
(2, 'experience', 'Lead Developer', 'The Boom Town Rats', '2020', '2025', '2025-08-01 10:10:39', '2025-08-01 10:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2025-08-01 06:08:19', '2025-08-01 06:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `service_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `created_at`, `updated_at`) VALUES
(1, 'My Service', 'My Service Detail', '2025-08-01 11:30:05', '2025-08-01 11:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eChD3KNLISLse1dHyr7c2RzU90BXUyOwod0FkBdf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiaURIblU4Mm1XN3l2dTViNnlVNXVzNHZ5Q2M3OUdnQWNqbFhWa0JZYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwtdGVzdGltb2llcyI7fXM6MjI6IlBIUERFQlVHQkFSX1NUQUNLX0RBVEEiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxMjoibHczNTA2NjMzNTAwIjtpOjUwO3M6MTE6Imx3ODYyMjA0MTkxIjtpOjEwO3M6MTI6Imx3MzYxNzg4NDkxMCI7aToxMDt9', 1754120555);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `phone`, `email`, `address`, `logo`, `footer_note`, `created_at`, `updated_at`) VALUES
(1, '0828032304', 'markjc@mweb.co.za', '29 Majuba Avenue Quellerina', '', 'PMWay', '2025-08-01 07:57:36', '2025-08-01 07:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `exp_level` varchar(255) NOT NULL,
  `technology_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `icon`, `exp_level`, `technology_name`, `created_at`, `updated_at`) VALUES
(1, 'uploads/skills/tech_1839247796484259.jpeg', '95%', 'PHP', '2025-08-01 10:16:25', '2025-08-01 10:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `testinomials`
--

CREATE TABLE `testinomials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `testimony` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `locale` varchar(255) NOT NULL DEFAULT 'en',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `locale`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'markjc', 'markjc@mweb.co.za', '2025-08-01 06:13:19', '$2y$12$1If5udwPNiR4/gqAovYPu.M4GT6UHILHNtcJGYS8m.Ver2Q2S5odm', 'en', NULL, '2025-08-01 06:09:59', '2025-08-01 06:09:59'),
(2, 'markjon', 'markjoncorrigan@gmail.com', '2025-08-01 06:13:31', '$2y$12$6yih0fLtXDvNZLbfLZ5ifezNHMYmsYfgBFYkwZ0qodi0rVzApuANS', 'en', NULL, '2025-08-01 06:10:36', '2025-08-01 06:10:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomials`
--
ALTER TABLE `testinomials`
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
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testinomials`
--
ALTER TABLE `testinomials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
