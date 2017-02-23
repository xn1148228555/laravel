-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-23 11:09:57
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l54`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '12@12.com', '$2y$10$3CKZTLMPUP2GG2ykvDi9L.9x2M5Pxs0/DdaWKxrf8/HEJnS1Mt/wi', 'nkaAmQSEBZPxJc2RAhKbMNy2fQcz6Mn1ha6VMfMCbqpn34qnaPH58OhHBrpy', NULL, NULL),
(2, '324', '123@123.com', '$2y$10$gkQS/B0T/lWINOJmoVWa8.ddjog.jeB8873Fj/YAWP.zKmq0eElam', NULL, '2017-02-11 06:03:53', '2017-02-11 06:03:53');

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(11, 'Title 3', 'Body 3', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(18, 'Title 10', 'Body 10', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(19, 'Title 11', 'Body 11', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(20, 'Title 12', 'Body 12', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(21, 'Title 13', 'Body 13', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(22, 'Title 14', 'Body 14', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(23, 'Title 15', 'Body 15', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(24, 'Title 16', 'Body 16', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(25, 'Title 17', 'Body 17', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(26, 'Title 18', 'Body 18', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(27, 'Title 19', 'Body 19', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(28, 'Title 20', 'Body 20', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(29, 'Title 21', 'Body 21', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(30, 'Title 22', 'Body 22', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(31, 'Title 23', 'Body 23', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(32, 'Title 24', 'Body 24', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(33, 'Title 25', 'Body 25', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(34, 'Title 26', 'Body 26', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(35, 'Title 27', 'Body 27', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(36, 'Title 28', 'Body 28', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(37, 'Title 29', 'Body 29', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(38, 'Title 30', 'Body 30', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(39, 'Title 31', 'Body 31', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(40, 'Title 32', 'Body 32', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(41, 'Title 33', 'Body 33', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(42, 'Title 34', 'Body 34', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(43, 'Title 35', 'Body 35', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(44, 'Title 36', 'Body 36', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(45, 'Title 37', 'Body 37', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(46, 'Title 38', 'Body 38', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(47, 'Title 39', 'Body 39', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(48, 'Title 40', 'Body 40', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(49, 'Title 41', 'Body 41', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(50, 'Title 42', 'Body 42', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(51, 'Title 43', 'Body 43', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(52, 'Title 44', 'Body 44', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(53, 'Title 45', 'Body 45', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(56, 'Title 48', 'Body 48', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(57, 'Title 49', 'Body 49', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(58, 'Title 50', 'Body 50', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(59, 'Title 51', 'Body 51', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(60, 'Title 52', 'Body 52', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(61, 'Title 53', 'Body 53', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(62, 'Title 54', 'Body 54', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(63, 'Title 55', 'Body 55', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(64, 'Title 56', 'Body 56', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(65, 'Title 57', 'Body 57', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(66, 'Title 58', 'Body 58', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(67, 'Title 59', 'Body 59', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(68, 'Title 60', 'Body 60', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(69, 'Title 61', 'Body 61', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(70, 'Title 62', 'Body 62', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(71, 'Title 63', 'Body 63', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(72, 'Title 64', 'Body 64', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19'),
(73, 'Title 65', 'Body 65', 1, 1, '2017-02-10 05:36:19', '2017-02-10 05:36:19');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_view` int(11) NOT NULL DEFAULT '0',
  `cate_order` int(11) NOT NULL,
  `cate_pid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_title`, `cate_keywords`, `cate_description`, `cate_view`, `cate_order`, `cate_pid`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', 0, 1, 0, NULL, NULL),
(2, '222', '11', '11', '11', 0, 2, 1, NULL, NULL),
(3, '3', '2', '2', '2', 0, 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`id`, `nickname`, `email`, `website`, `content`, `article_id`, `created_at`, `updated_at`) VALUES
(2, '2343', '363694485@qq.com', NULL, '@2343 retertert', 8, '2017-02-06 21:44:07', '2017-02-06 21:44:07');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(12, '2017_02_07_043032_create_article_table', 5),
(9, '2017_02_07_053343_create_comment_table', 3),
(11, '2017_02_07_061020_create_category_table', 4),
(13, '2017_02_09_070259_create_admins_table', 6),
(15, '2015_01_15_105324_create_roles_table', 7),
(16, '2015_01_15_114412_create_role_user_table', 7),
(17, '2015_01_26_115212_create_permissions_table', 7),
(18, '2015_01_26_115523_create_permission_role_table', 7),
(19, '2015_02_09_132439_create_permission_user_table', 7),
(20, '2015_11_27_155528_create_settings_table', 8);

-- --------------------------------------------------------

--
-- 表的结构 `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('f33621a32caf4993085b97088fa18708b11840a0b202c0d9f84148769b48a97a73462c86130e3eac', 2, 2, NULL, '[]', 0, '2017-02-05 23:46:38', '2017-02-05 23:46:38', '2018-02-06 07:46:38'),
('0a2e58e61872d48ff25c8d8789de2cafed2d37c3a9d609db13fa3fa6184b8a8baabb65dc10c91a5b', 1, 2, NULL, '[]', 0, '2017-02-05 23:50:54', '2017-02-05 23:50:54', '2018-02-06 07:50:54'),
('eebc15889ac2a689ff41c6d7a6e8f94187529507e52157b40e346c935da2b61a8662cba7c0ca4e43', 1, 2, NULL, '[]', 0, '2017-02-06 00:25:26', '2017-02-06 00:25:26', '2018-02-06 08:25:26'),
('df718cf35238ea8fe834e8753d6bb0a6826cbaa7fdf4fdcdd60e2be3267ce7a39b3bae48ff666d79', 2, 2, NULL, '[]', 0, '2017-02-07 04:07:25', '2017-02-07 04:07:25', '2018-02-07 12:07:25'),
('5fabb702c13d25ff6ab90278904177f82a4d506cda68170914c72b05f683e4ff2dcaba361bb9a2d6', 2, 2, NULL, '[]', 0, '2017-02-07 04:10:19', '2017-02-07 04:10:19', '2018-02-07 12:10:19');

-- --------------------------------------------------------

--
-- 表的结构 `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel Personal Access Client', 'cikOHIm9atjrOEK7e6vrWBoJRLoEgZdOnpRW1OmH', 'http://localhost', 1, 0, 0, '2017-02-05 16:31:29', '2017-02-05 16:31:29'),
(2, 2, 'Laravel Password Grant Client', 'AerhcKUPl1j2uyhJ6YCa3OATa1DNMQsOuYEO7keh', 'http://localhost', 0, 1, 0, '2017-02-05 16:31:29', '2017-02-05 16:31:29'),
(3, 2, '123', 'ecnsRql2aKW0taPBaQflk8wUDSMZHrPTUn0PqmH8', 'http://localhost/auth/callback', 0, 0, 0, '2017-02-05 19:03:45', '2017-02-05 19:03:45');

-- --------------------------------------------------------

--
-- 表的结构 `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-02-05 16:31:29', '2017-02-05 16:31:29');

-- --------------------------------------------------------

--
-- 表的结构 `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('6f368ae8dcbf38bca40ddfb9b7691d590e9b78683dbbb2d908baf0308e51ae2d60e4b96d2639f414', 'f33621a32caf4993085b97088fa18708b11840a0b202c0d9f84148769b48a97a73462c86130e3eac', 0, '2018-02-06 07:46:38'),
('a1d4ff9ee1589de9090d2f30d3bf74b668a3e4ba622972d7bc9e5f27a374f92b350b8478dfdce6f3', '0a2e58e61872d48ff25c8d8789de2cafed2d37c3a9d609db13fa3fa6184b8a8baabb65dc10c91a5b', 0, '2018-02-06 07:50:54'),
('22c223bd31773e1ee06a7e19e33b5ed796f84be7367b9ea0f0c6d6da39c884635ee9d48aa541feb7', 'eebc15889ac2a689ff41c6d7a6e8f94187529507e52157b40e346c935da2b61a8662cba7c0ca4e43', 0, '2018-02-06 08:25:26'),
('66cf7414f031a21a3d285d563934af209110fff22a816748328a1f8024a6e41fd0baf2877bf19c7f', 'df718cf35238ea8fe834e8753d6bb0a6826cbaa7fdf4fdcdd60e2be3267ce7a39b3bae48ff666d79', 0, '2018-02-07 12:07:25'),
('7d0e9f3e9af2c9b6765cee6c03e7f1ba79a6ab04ceea20c4570dda3a8ee06fa974b610a791f49ee7', '5fabb702c13d25ff6ab90278904177f82a4d506cda68170914c72b05f683e4ff2dcaba361bb9a2d6', 0, '2018-02-07 12:10:19');

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
(1, '666', '12434', '12', '12', '2017-02-13 01:33:36', '2017-02-13 03:34:57');

-- --------------------------------------------------------

--
-- 表的结构 `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '123', 1, '2017-02-13 04:04:19', '2017-02-13 04:04:19');

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--

CREATE TABLE `settings` (
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('website_name', '666');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aicow', '363694485@qq.com', '$2y$10$3CKZTLMPUP2GG2ykvDi9L.9x2M5Pxs0/DdaWKxrf8/HEJnS1Mt/wi', 'F0A3jO1eMYIuId7i97ELThWkXbl2JCT3NOAnCbnTFbZIPOlAVs7Pi0ZIGYV6', '2017-02-05 17:08:07', '2017-02-05 17:08:07'),
(2, 'user1', '1233444@123.com', '$2y$10$6wAFf/1ImMKcX94OIVvkRejm4wvDBBoNzDolggFSxi/NqNVfJJyHu', 'vZyUwGXOtEmfMoMRwssRjHtfzfSboiW8gnBnCXqBU5LOrzgg1SdObth6cq5K', '2017-02-05 18:08:15', '2017-02-16 19:01:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
