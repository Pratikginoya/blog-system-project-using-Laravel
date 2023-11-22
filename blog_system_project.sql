-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_system_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'start@123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `s_details` varchar(255) NOT NULL,
  `f_details` varchar(1500) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image_main` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending for Admin Approval',
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`blog_id`, `user_id`, `title`, `s_details`, `f_details`, `slogan`, `tag`, `image_main`, `image_2`, `image_3`, `status`, `likes`, `created_at`, `updated_at`) VALUES
(3, 7, 'Hello', 'hello', 'hello', 'hello', 'Sports', '09112023_222307_01-big-blog.jpg', '09112023_222307_01-blog.jpg', '09112023_222307_02-blog.jpg', 'Live', 0, '2023-11-09 16:53:07', '2023-11-10 08:49:13'),
(4, 7, 'hello', 'hello', 'hello', 'hello', 'Travel', '09112023_224257_01-portfolio.jpg', '09112023_224257_02-big-blog.jpg', '09112023_224257_04-blog.jpg', 'Live', 0, '2023-11-09 17:12:57', '2023-11-10 07:16:08'),
(5, 7, 'hello', 'hello', 'hello', 'hello', 'Case Study', '09112023_230905_01-portfolio.jpg', '09112023_230905_01-big-blog.jpg', '09112023_230905_06-portfolio.jpg', 'Rejected due to Unsubjected content', 0, '2023-11-09 17:39:05', '2023-11-10 07:17:36'),
(6, 6, 'Earn money', 'hello', 'hello', 'hello', 'Business', '11112023_191622_25.jpg', '11112023_191622_17.jpg', '', 'Live', 0, '2023-11-11 13:46:22', '2023-11-11 08:20:05'),
(7, 6, 'Most Popular Blog Examples', 'A blog is a website or page that is a part of a larger website. Typically, it features articles written in a conversational style with accompanying pictures or videos.', 'Blogging has gained immense popularity due to its enjoyable and adaptable nature, allowing for self-expression and social connections. In addition, it serves as a platform for enhancing writing skills and promoting businesses.\r\n\r\nFurthermore, a professional blogger can even make money from blogging in various ways, such as Google ads and Amazon affiliate links. Successful blogs can cover any topic. No matter what subject you can think of, there’s likely already a profitable blog dedicated to it.\r\n\r\nIf there is none, this is where you come in. New bloggers who can find a unique niche to create content about have a higher chance of surviving in the competitive blogging world.', 'We will include five of the best blog examples for each type, discuss each blog example briefly, and highlight what we can learn from the blog. We will also include the info on how it is build, for example, whether a CMS like WordPress was used or a', 'Blogging', '11112023_191827_15.jpg', '11112023_191827_22.jpg', '11112023_191827_35.jpg', 'Live', 0, '2023-11-11 13:48:27', '2023-11-11 08:20:11'),
(8, 6, 'Build your website with HubSpot\'s Free CMS Softwar', 'A brief history — in 1994, Swarthmore College student Justin Hall is credited with the creation of the first blog, Links.net. At the time, however, it wasn\'t considered a blog … just a personal homepage.', 'In 1997, Jorn Barger, blogger for Robot Wisdom, coined the term “weblog”, which was meant to describe his process for “logging the web” as he surfed the internet. The term “weblog” was shortened to “blog” in 1999, by programmer Peter Merholz.\r\n\r\nIn the early stages, a blog was a personal web log or journal in which someone could share information or their opinion on a variety of topics. The information was posted reverse chronologically, so the most recent post would appear first.\r\n\r\nNowadays, a blog is a regularly updated website or web page, and can either be used for personal use or to fulfill a business need.', 'If a personal blog is successful enough, the writer can also make money off of it via sponsorships or advertisements. Take a look at 5 Strategies to Monetize a Blog to learn more.', 'Sports', '11112023_191918_26.jpg', '11112023_191918_20.jpg', '', 'Live', 0, '2023-11-11 13:49:18', '2023-11-11 08:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment_blog`
--

CREATE TABLE `comment_blog` (
  `cmt_id` int(10) UNSIGNED NOT NULL,
  `user_cmt_id` tinyint(4) NOT NULL,
  `blog_cmt_id` tinyint(4) NOT NULL,
  `cmt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_blog`
--

INSERT INTO `comment_blog` (`cmt_id`, `user_cmt_id`, `blog_cmt_id`, `cmt`, `created_at`, `updated_at`) VALUES
(27, 7, 3, 'Nice Topic...', '2023-11-21 10:44:03', '2023-11-21 10:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `message` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `status`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Pratik R G', 'pratikginoya194@gmail.com', '9789879874', 0, 'Hello', '2023-11-10 04:38:32', '2023-11-10 13:10:19'),
(3, 'Pratik R G', 'pratikginoya194@gmail.com', '9789879874', 0, 'asdfasdf', '2023-11-10 07:35:44', '2023-11-10 07:39:16'),
(4, 'Pratik', 'pratikg@g.com', '7887987987', 0, 'asdfasdfasf', '2023-11-10 07:39:34', '2023-11-10 07:39:54');

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
-- Table structure for table `like_blog`
--

CREATE TABLE `like_blog` (
  `like_id` int(10) UNSIGNED NOT NULL,
  `user_like_id` tinyint(4) NOT NULL,
  `blog_like_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_blog`
--

INSERT INTO `like_blog` (`like_id`, `user_like_id`, `blog_like_id`, `created_at`, `updated_at`) VALUES
(36, 7, 3, '2023-11-10 02:06:09', '2023-11-10 02:06:09'),
(37, 7, 4, '2023-11-10 02:27:46', '2023-11-10 02:27:46'),
(38, 6, 6, '2023-11-11 08:30:02', '2023-11-11 08:30:02'),
(39, 6, 3, '2023-11-11 08:30:10', '2023-11-11 08:30:10'),
(40, 7, 8, '2023-11-21 10:46:36', '2023-11-21 10:46:36');

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
(5, '2023_11_09_122217_create_user_register_table', 2),
(6, '2023_11_09_155536_create_blog_details_table', 3),
(7, '2023_11_10_060352_create_like_blog_table', 4),
(8, '2023_11_10_061149_create_like_blog_table', 5),
(9, '2023_11_10_082203_create_comment_blog_table', 6),
(10, '2023_11_10_093745_create_admin_login_table', 7),
(11, '2023_11_10_100022_create_contact_us_table', 8),
(12, '2023_11_10_103240_create_website_heading_table', 9);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `about_you` varchar(250) NOT NULL,
  `profile_pic` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`, `mobile`, `about_you`, `profile_pic`, `created_at`, `updated_at`) VALUES
(6, 'Pratik Kumar', 'pratikg@g.com', 'Admin@123', '8787654651', 'Hello', '09112023_210553_01-team.jpg', '2023-11-09 15:35:53', '2023-11-21 15:40:32'),
(7, 'Admin', 'pratikginoya194@gmail.com', 'admin@123', '4654654654', 'Not share by the user...', '01.jpg', '2023-11-09 10:11:07', '2023-11-21 15:40:40'),
(8, 'Pratik R G', 'admiassdfn@gmail.com', 'admin@123', '5465465465', 'Not share by the user...', '01.jpg', '2023-11-09 10:11:51', '2023-11-09 10:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `website_heading`
--

CREATE TABLE `website_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_heading`
--

INSERT INTO `website_heading` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Add Your Blog Now...', 'asdfasdf Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus rhoncus rutrum. Integer et ornare mauris.', '10112023_164939_03-big-portfolio.jpg', NULL, '2023-11-21 10:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `like_blog`
--
ALTER TABLE `like_blog`
  ADD PRIMARY KEY (`like_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_heading`
--
ALTER TABLE `website_heading`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `blog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `cmt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like_blog`
--
ALTER TABLE `like_blog`
  MODIFY `like_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `website_heading`
--
ALTER TABLE `website_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
