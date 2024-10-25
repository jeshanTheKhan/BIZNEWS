-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 05:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `add_id` bigint(20) UNSIGNED NOT NULL,
  `add_link` varchar(255) NOT NULL,
  `add_image` varchar(255) NOT NULL,
  `add_status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`add_id`, `add_link`, `add_image`, `add_status`, `created_at`, `updated_at`) VALUES
(4, 'https://www.bracbank.com/link/astha_smart/', 'K-83380.png', '1', '2024-10-24 10:00:56', '2024-10-24 10:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `breakingnews`
--

CREATE TABLE `breakingnews` (
  `breakingnews_id` bigint(20) UNSIGNED NOT NULL,
  `english_news` varchar(255) DEFAULT NULL,
  `bangla_news` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakingnews`
--

INSERT INTO `breakingnews` (`breakingnews_id`, `english_news`, `bangla_news`, `status`, `created_at`, `updated_at`) VALUES
(6, '‘Dana’ turns into a strong cyclone, heavy rains predicted in coastal areas.', 'শক্তিশালী ঘূর্ণিঝড়ে পরিণত হলো ‘দানা’, উপকূলীয় এলাকায় ভারী বৃষ্টির পূর্বাভাস।', 1, '2024-10-23 21:19:38', '2024-10-23 21:26:30'),
(7, 'Tk 180m gaming platform shut down in just 2 years', 'মাত্র 2 বছরে 180m গেমিং প্ল্যাটফর্ম বন্ধ হয়ে গেছে', 1, '2024-10-24 09:59:56', '2024-10-24 10:00:06');

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL,
  `bangla_cat_name` mediumtext NOT NULL,
  `bangla_cat_slug` mediumtext NOT NULL,
  `date` mediumtext NOT NULL,
  `cat_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_slug`, `bangla_cat_name`, `bangla_cat_slug`, `date`, `cat_status`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'business', 'ব্যবসা', 'ব্যবসা', '23-10-2024', 1, '2024-10-23 01:06:12', '2024-10-23 21:13:21'),
(2, 'Politics', 'politics', 'রাজনীতি', 'রাজনীতি', '23-10-2024', 1, '2024-10-23 01:06:38', '2024-10-23 01:06:38'),
(3, 'Sports', 'sports', 'খেলাধুলা', 'খেলাধুলা', '23-10-2024', 1, '2024-10-23 01:06:41', '2024-10-23 01:06:41'),
(5, 'Education', 'education', 'শিক্ষা', 'শিক্ষা', '24-10-2024', 1, '2024-10-24 10:01:55', '2024-10-24 10:01:55');

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
(4, '2024_10_10_004559_create_categories_table', 2),
(6, '2024_10_11_105359_create_breakingnews_table', 3),
(7, '2024_10_12_071722_create_adds_table', 4),
(10, '2024_10_13_082525_create_news_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `bangla_title` varchar(255) NOT NULL,
  `news_cat` mediumtext NOT NULL,
  `english_title_slug` mediumtext NOT NULL,
  `bangla_title_slug` varchar(2000) NOT NULL,
  `date` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `english_body` text NOT NULL,
  `bangla_body` text NOT NULL,
  `hero` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `feather` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `english_title`, `bangla_title`, `news_cat`, `english_title_slug`, `bangla_title_slug`, `date`, `image`, `english_body`, `bangla_body`, `hero`, `category`, `feather`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Zaker\'s dismissal broke the record pair of 138 runs', 'জাকেরের আউটে ১৩৮ রানের রেকর্ড জুটি ভেঙে যায়', '3', 'zakers-dismissal-broke-the-record-pair-of-138-runs', 'জাকেরের-আউটে-১৩৮-রানের-রেকর্ড-জুটি-ভেঙে-যায়', '23-10-2024', 'N-59432.jpg', '<h2>Zaker returned</h2><p>Maharaj\'s arm delivery on middle-leg stump by Zaker. Maharaj was quite sure. Did not apply much. Zaker takes a review, but the ball hits the leg stump. Zaker returned with 58 runs.</p><p>Bangladesh\'s lead is 50 runs. The new batsman Naeem Hasan was also given lbw by the umpire in that over. But Naeem survived with the review.</p>', '<p><strong>জাকের ফিরলেন</strong>\r\n</p><p>\r\nজাকের মিডল-লেগ স্টাম্পে মহারাজের আর্ম ডেলিভারি। মহারাজ বেশ নিশ্চিত ছিলেন। খুব একটা প্রয়োগ করেননি। জাকের রিভিউ নেন, কিন্তু বল লেগে যায় লেগ স্টাম্পে। ৫৮ রান করে ফেরেন জাকের।\r\n\r\nবাংলাদেশের লিড ৫০ রান। ওই ওভারে নতুন ব্যাটসম্যান নাঈম হাসানকেও এলবিডব্লিউ দেন আম্পায়ার। কিন্তু রিভিউ নিয়ে বেঁচে যান নাঈম।</p>', 1, 1, 1, 1, '2024-10-23 02:30:06', '2024-10-24 02:42:06'),
(3, 'Tk 180m gaming platform shut down in just 2 years', 'মাত্র 2 বছরে 180m গেমিং প্ল্যাটফর্ম বন্ধ হয়ে গেছে', '5', 'tk-180m-gaming-platform-shut-down-in-just-2-years', 'মাত্র-2-বছরে-180m-গেমিং-প্ল্যাটফর্ম-বন্ধ-হয়ে-গেছে', '24-10-2024', 'O-66149.webp', '<p>The gaming platform named “Hasina and Friends”, which was created for children and adolescents at the cost Tk 183.5 million, disappeared from the internet within just two years.</p><p>Multiple sources said more than six times the budget was spent solely on the web portal.</p><p>The Information and Communication Technology (ICT) Division floated separate tenders for the web portal and 12 interactive gaming applications.</p><p>On the birthday of then prime minister Sheikh Hasina, the platform was launched at a lavish ceremony on 28 September 2022.</p><p>Sources at the ICT Division said a tender for the project “Skill Development for Mobile Games and Applications (2nd Revision)” for developing “Hasina and Friends” (12 games) was issued on 3 March 2021.</p>', '<p>183.5 মিলিয়ন টাকা ব্যয়ে শিশু-কিশোরদের জন্য তৈরি করা “হাসিনা অ্যান্ড ফ্রেন্ডস” নামের গেমিং প্ল্যাটফর্মটি মাত্র দুই বছরের মধ্যে ইন্টারনেট থেকে অদৃশ্য হয়ে গেছে।\r\n\r\nএকাধিক সূত্র জানিয়েছে, শুধু ওয়েব পোর্টালেই বাজেটের ছয় গুণের বেশি খরচ হয়েছে।\r\n\r\nতথ্য ও যোগাযোগ প্রযুক্তি (আইসিটি) বিভাগ ওয়েব পোর্টাল এবং 12টি ইন্টারেক্টিভ গেমিং অ্যাপ্লিকেশনের জন্য পৃথক দরপত্র প্রেরণ করেছে।\r\n\r\nতৎকালীন প্রধানমন্ত্রী শেখ হাসিনার জন্মদিনে, 28 সেপ্টেম্বর 2022-এ একটি জমকালো অনুষ্ঠানে প্ল্যাটফর্মটি চালু করা হয়েছিল।\r\n\r\nআইসিটি বিভাগের সূত্র জানায়, \"হাসিনা অ্যান্ড ফ্রেন্ডস\" (12 গেম) বিকাশের জন্য \"মোবাইল গেমস এবং অ্যাপ্লিকেশনের জন্য দক্ষতা উন্নয়ন (২য় সংশোধন)\" প্রকল্পের একটি দরপত্র 3 মার্চ 2021-এ জারি করা হয়েছিল।</p>', 1, NULL, 1, 1, '2024-10-24 10:04:08', '2024-10-24 10:04:08');

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
('f5AgSDAQxzu9O12VE7CfZZsOvLJALcUsdxkROe9s', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0FvbWNHVDhNcXF6ODFMNVgyWXdneWV4cmtPR2dyQzVOUVBCNXJwciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3QvQklaTkVXUyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1729788165);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(2000) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(2000) DEFAULT NULL,
  `zipCode` varchar(2000) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedln` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `image`, `address`, `state`, `zipCode`, `number`, `twitter`, `facebook`, `linkedln`, `instagram`, `youtube`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jeshan', 'Khan', NULL, 'Silver Village', 'Sylhet', '3100', '01607906754', 'https://x.com/ProthomAlo', 'https://www.facebook.com/DailyProthomAlo', 'https://www.linkedin.com/in/jeshanthekhan/', 'https://www.instagram.com/prothomalo', 'https://www.youtube.com/c/ProthomAlo', 'jeshan@gmail.com', '2024-10-09 09:20:21', '$2y$12$VcOUiSgWNL4nLdJjAC1dQ.fRftMEpaOr5LnLaO3.hCp/Q0MOvQJfq', 'k8rpQYvFv3uP1v3SHNzE7ou2axaWVq0Dx2QKDVl5FspkctBVQLdJ4iMtRqkS', '2024-10-09 09:20:21', '2024-10-24 09:57:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `breakingnews`
--
ALTER TABLE `breakingnews`
  ADD PRIMARY KEY (`breakingnews_id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `add_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `breakingnews`
--
ALTER TABLE `breakingnews`
  MODIFY `breakingnews_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
