-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2022 at 08:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igiveafrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE Database `igiveafrica`;
USE `igiveafrica`;

CREATE TABLE `adverts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(6, 'istockphoto-1336071300-170667a.jpg', 'GET COVID-19 VACCINE', '2022-03-09 15:26:02', '2022-03-09 15:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content1` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `page`, `section`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(9, 'home', 'intro', 'RAISE DOUBLE YOUR NORMAL FUNDS THIS YEAR', 'Hang in there !!!\r\nFundraising is tough don`t give up, we got you covered.\r\n\r\nThe world remains beset by so much suffering and deprivation. It is your hands to make our world a better one for all, especially the poor, vulnerable and maginalised.', 'igive-diff.jpg', '2022-03-09 15:13:52', '2022-03-09 15:28:43'),
(10, 'home', 'bottom', 'ELEMENTARY, STRAIGNTFORWARD SOFTWARE FOR NONPROFIT ORGANIZATIONS', 'Grassroot fundraising strategy is made easy with igiveafrica. Improve fundraising standards and build a public trust through our all-in-one software.', 'igive-enroll.jpg', '2022-03-09 15:22:21', '2022-03-09 15:40:42'),
(11, 'home', 'donor', 'WELCOME TO OUR DONORS COMMUNITY', 'Your #1 Platform to discover, connect and support community nonprofit organizations impacting lives in Africa.\r\n\r\njoin our community to discover connect and support various community initiatives that are dear to you and deserve your support to do good.', 'igive-give.jpg', '2022-03-09 15:31:47', '2022-03-09 15:31:47'),
(12, 'home', 'bottom', 'RAISE DONATIONS TRHOUGH CHARITY ONLINE SHOPPING', 'Igiveafrica is africa`s first choice charity shoping site. Its very simple and safe to use. We help you raise fund through selling your organisation branded products online. We help thousands of good projects turn everyday shoping into free donations.', 'igive-charity.jpg', '2022-03-09 15:36:16', '2022-03-09 15:36:16'),
(13, 'home', 'intro', 'EXPLORE OUR FEATURES', 'Beautiful Donation pages,    Powerful intergrations,    Self-service donor dashboards,    Customizable donation forms ,   Peer to peer fundraising,    Recuring donations,    Mobile Responsiveness,    Friendly Customer Support.', 'igive-benefits.jpg', '2022-03-09 15:39:53', '2022-03-09 15:39:53'),
(14, 'home', 'donor', 'LOOKING FOR FUNDRAISING ASSISTANCE??', 'We know that fundraising can be complicated, and so we are here to help. We are grateful to offer you the best assistance and help to start and manage all your online fundraising activities in one place. We put everything you need to fundraise at your disposal.', 'igive-fundraising.jpg', '2022-03-09 15:44:33', '2022-03-09 15:45:03'),
(15, 'home', 'bottom', 'VETTING STARNDARDS', 'Every Project on igiveafrica is led by an non-profit organization or an individual in need that has passed our stringet vetting standards and undergoes ongoing evaluation.', 'igive-std.jpg', '2022-03-09 15:47:18', '2022-03-09 15:47:18'),
(16, 'home', 'intro', 'START A FUNDRAISING IN MINUTES WITHOUT FILLING ANY PAPER', 'If you’re starting a charity, you should start with igiveafrica.You’ll never have to do any paperwork or any filing. Seriously, setting up a fundraising campaign is a nightmare. There’s nothing easy about it, and completing the task is a long, long process. Instead of wasting time on admin, or spending $$$$ to get it done, now there’s no need to worry about it.', 'igive-comp.jpg', '2022-03-09 17:23:49', '2022-03-09 17:26:55'),
(17, 'why', 'intro', 'WE`RE FOR SOCIAL CAUSES', 'We exist for non-profits, social enterprises, community groups, activists, politicians and individual citizens that are making the world better, that are helping others, that believe we have a responsibility to each other and to future generations. On igiveafrica.org, your project won\'t get lost amongst tech gadgets and design projects.', 'igive-growth.jpg', '2022-03-09 17:40:54', '2022-03-09 17:40:54'),
(18, 'why', 'bottom', 'WE`RE FOR YOU KEEPING 100% OF WHAT YOU RAISE', 'General charity appeals for organisations aren’t really our thing. If you’ve got a project, or can cut your organizational costs into project, then we’d love to have you.', NULL, '2022-03-09 17:44:09', '2022-03-09 17:44:57'),
(19, 'why', 'donor', 'WE`RE FOR FEE TRANSPARENCY', 'Campaigners pay no setup, monthly or platform fees. Donors pay 2.0% + 2.9% payment processing fees on top of their donation which goes to our payment processors. We let donors choose if they want to give to us by adding an optional tip to us on top of their donation - it\'s entirely optional and completely transparent when they donate.', 'igive-enroll.jpg', '2022-03-09 17:49:53', '2022-03-09 17:49:53'),
(20, 'team', 'bottom', 'ZACHARY MWORIA, CEO', 'Zachary dreams about a world where the smartest kids in school choose to join non-profits and social enterprises instead of management consulting and law firms.  He believes that there’s room to integrate social action directly into our culture, whilst also making it fun! After completing a Media Studies degree, he started searching for ways to see how he could help others with his newfound skills. He has spent over 3 years working in the charity sector before establishing igiveafrica.', 'istockphoto-1285743620-612x612.jpg', '2022-03-09 17:55:36', '2022-03-09 17:56:13'),
(21, 'team', 'donor', 'EMMANUEL NYAMAWI, SOFTWARE DEVELOPER.', 'Emmanuel  is a polyglot software engineer and has a passion for technology since his childhood. He constantly explores new technologies and always tinkering. With an enthusiasm for best practises and challenging the status quo, he has now joined the igiveafrica.org team to support the voices of those people who want to make the world a better place.', 'istockphoto-1343341510-612x612.jpg', '2022-03-09 18:00:50', '2022-03-09 18:00:50'),
(22, 'why', 'bottom', 'WE`RE HONEST', 'One of the guiding principles of igiveafrica.org has always been transparency. Our model is built off \'optional donations\' because we wanted to make the costs associated with donating online transparent to donors.', 'istockphoto-1252314445-612x612.jpg', '2022-03-09 18:07:58', '2022-03-09 18:09:17');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2022_03_03_143209_create_blogs_table', 1),
(24, '2022_03_03_143230_create_adverts_table', 1),
(25, '2022_03_03_143519_create_contents_table', 1),
(26, '2022_03_03_143545_create_galleries_table', 1),
(27, '2022_03_03_143555_create_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `created_at`, `updated_at`) VALUES
(13, 'home', '2022-03-06 09:59:44', '2022-03-06 09:59:44'),
(14, 'why', '2022-03-09 17:38:23', '2022-03-09 17:38:23'),
(15, 'team', '2022-03-09 17:55:49', '2022-03-09 17:55:49');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
