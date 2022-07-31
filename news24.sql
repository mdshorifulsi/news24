-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 11:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news24`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'খেলা', '', 'storage/images/category\\51629.jpg', '2020-08-05 07:16:59', '2020-08-05 07:16:59'),
(3, 'বিনোদন', '', 'storage/images/category\\27983.jpg', '2020-08-05 07:17:16', '2020-08-05 07:17:16'),
(4, 'ফিচার', '', 'storage/images/category\\34920.jpg', '2020-08-05 07:17:37', '2020-08-05 07:17:37'),
(5, 'শিক্ষা', '', 'storage/images/category\\93181.jpg', '2020-08-05 07:17:51', '2020-08-05 07:17:51'),
(6, 'আন্তর্জাতিক', '', 'storage/images/category\\95198.jpg', '2020-08-05 07:18:05', '2020-08-05 07:18:05'),
(7, 'বাংলাদেশ', '', 'storage/images/category\\41366.jpg', '2020-08-05 07:18:21', '2020-08-05 07:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 2, 4, '2020-08-05 07:25:24', '2020-08-05 07:25:24'),
(3, 3, 3, '2020-08-05 07:27:46', '2020-08-05 07:27:46'),
(4, 4, 3, '2020-08-05 07:30:43', '2020-08-05 07:30:43'),
(5, 5, 7, '2020-08-05 07:34:56', '2020-08-05 07:34:56'),
(6, 6, 2, '2020-08-05 07:38:29', '2020-08-05 07:38:29'),
(7, 7, 6, '2020-08-05 20:30:38', '2020-08-05 20:30:38'),
(8, 9, 6, '2020-08-05 20:33:21', '2020-08-05 20:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_15_082520_create_roles_table', 1),
(4, '2020_07_15_113707_create_tags_table', 1),
(5, '2020_07_16_110902_create_categories_table', 1),
(6, '2020_07_16_181324_create_posts_table', 1),
(7, '2020_07_16_181506_create_category_post_table', 1),
(8, '2020_07_16_181557_create_post_tag_table', 1),
(9, '2020_08_04_132654_create_topposts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `image_title`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(2, 2, 'এবার একটু হালকা খান', '', 'storage/images\\46875.webp', 'ঈদে একটানা ভারী খাবারের পর নিজেকে সুস্থ রাখতে এখন হালকা খাবার খেতে হবে। মডেল: সারাকা, ছবি: সুমন ইউসুফ ঈদে একটানা ভারী খাবারের পর নিজেকে সুস্থ রাখতে এখন হালকা খাবার খেতে হবে। মডেল: সারাকা', 'এই তো কদিন আগেই চলে গেল ঈদুল আজহা। ভারী খা বারের ছড়াছড়ি গেল এই কদিন। এই ঈদে খাবারের মূল আয়োজনে থাকে বিভিন্ন রকমের মাংস। গরু, খাসি, মহিষ, এমনকি উটও কোরবানি করেন অনেকে। না চাইলেও তাই এক-দুই টুকরা করে বেশ খানিকটা খাওয়া হয়ে যায়। তাই এখন খাদ্যসচেতনতা বেশি জরুরি। এখন খাবারের বিষয়ে চাই পরিমিতি জ্ঞান ও স্বাস্থ্যসচেতনতা।\r\n\r\nসমস্যা হলো তাঁদের, যাঁরা অনেক দিন ধরে বিভিন্ন রোগে ভুগছেন। যেমন যাঁদের পেটের সমস্যা, উচ্চ রক্তচাপ, ডায়াবেটিস বা হৃদ্‌রোগ, কিডনি বা লিভারের রোগ আছে কিংবা এসব রোগের প্রাথমিক লক্ষণ আছে। ঈদ উপলক্ষে সবার বাসায় কমবেশি নানা ধরনের মুখরোচক খাবারের আয়োজন ছিল। তাই এখন নজর দেওয়া দরকার আমরা কী খাচ্ছি, কতটুকু খাচ্ছি, বিভিন্ন খাবারের প্রতিক্রিয়া কী, সেসবের ওপর।', 0, 1, 1, '2020-08-05 07:25:23', '2020-08-05 07:25:23'),
(3, 2, 'বেস্টসেলার বই বড় পর্দায় আনছেন রিজ', '', 'storage/images\\57912.webp', 'রিজ উইদারস্পুন', 'রিজ উইদারস্পুন কি বইপাগল? এই প্রশ্নের উত্তরে অনেকেই মাথা কাত করবেন, মানে ‘হ্যাঁ’। হলিউড এই অভিনেত্রীর ইনস্টাগ্রাম অ্যাকাউন্ট থেকে ঘুরে এলে অবশ্য এর সত্যতা মেলে। তাঁর ইনস্টাগ্রামের বেশ কিছু পোস্টই থাকে বই নিয়ে। কোনোটা ছোটগল্প তো কোনোটা থাকে উপন্যাস নিয়ে। আছে বুক ক্লাবও। এবার নেমেছেন নতুন ছবির প্রযোজনায়। আর সেখানেও থাকছে বেস্টসেলার একটি বই।\r\n\r\nডালিয়া ওয়েনের প্রথম উপন্যাস দ্য ক্রড্যাডস সিং অবলম্বনে তৈরি হচ্ছে ছবিটি। পরিচালনা করবেন নেটফ্লিক্সের প্রযোজনা ফার্স্ট ম্যাচ–এর লেখক ও পরিচালক অলিভিয়া নিউম্যান। এই খবর জানিয়েছে মার্কিন সাময়িকী দ্য হলিউড রিপোর্টার।', 0, 1, 1, '2020-08-05 07:27:46', '2020-08-05 07:27:46'),
(4, 2, 'অবন্তীর সঙ্গে আট বছরের প্রেমের গল্প শোনাবেন সিয়াম', '', 'storage/images\\41803.webp', 'সিয়াম ও তাঁর স্ত্রী অবন্তী', 'শাকিব খান, আরিফিন শুভ থেকে শুরু করে চলচ্চিত্রের অনেক তারকারই নিজস্ব ইউটিউব চ্যানেল আছে। সেই তালিকায় এবার যুক্ত হলেন আরেক চলচ্চিত্র তারকা সিয়াম আহমেদ। পবিত্র ঈদুল আজহার দিন রাতে ‘সিয়াম আহমেদ’ নামে তাঁর নিজস্ব ইউটিউব চ্যানেলের যাত্রা শুরু হয়।\r\n\r\nসিয়াম বলেন, ‘করোনাভাইরাসের প্রকোপের আগেই ভক্তদের কাছে ইউটিউব চ্যানেলের চাহিদা ছিল। মহামারির সময় সে আগ্রহ আরও বেশি দেখা গেছে। আমার ব্যক্তিজীবন, কাজের পেছনের গল্পসহ নানা বিষয় নিয়ে ভক্তরা জানতে চান। কিন্তু সময়ের অভাবে কাজটি করা হচ্ছিল না। করোনাকালে দীর্ঘ সময় হাতে পেয়েছি। সুযোগটা কাজে লাগালাম।’', 0, 1, 1, '2020-08-05 07:30:43', '2020-08-05 07:30:43'),
(5, 5, 'করোনাকালে নিয়তিবাদ আমাদের কী শেখায়?', '', 'storage/images\\19518.webp', 'করোনার সময়ে বাজারে মানুষের ভিড়', 'মহামারির সঙ্গে নিয়তি কিংবা অদৃষ্টের ওপর নির্ভর করার প্রবণতা বিশ্বজুড়ে অনেক আগে থেকেই লক্ষণীয়। সাধারণ অর্থে মানুষ যখন তার জীবনের কোনো ঘটনাকে এমন কোনো বিষয় দ্বারা পরিচালিত হতে দেখে, যেখানে তার কোনো নিয়ন্ত্রণ থাকে না, বিশেষত সেই অবস্থায় ব্যক্তি যখন বৃহত্তর শক্তির ওপর আস্থা রাখে, তাকে অদৃষ্টবাদ বা নিয়তিবাদ বলা হয়।\r\n\r\nপ্রাচ্যের সমাজব্যবস্থার সঙ্গে মধ্যযুগের ইউরোপের বিভিন্ন সমাজেও মহামারির সময়ে মানুষের মধ্যে অদৃষ্টের ওপর বিশ্বাস করার ব্যাপক প্রবণতা ছিল। সে সময়ে মহামারিকে বিভিন্নভাবে ব্যাখ্যা এবং বিশ্লেষণ করা হতো। এর মধ্যে একটি অন্যতম ব্যাখ্যা ছিল, মহামারিকে কৃতকর্মের শাস্তি হিসেবে দেখা। পাশাপাশি যারা এই মহামারির শিকার হতো, তাদের দেখা হতো সমাজের ঘৃণিত বা নিকৃষ্ট মানুষ হিসেবে। এ ধরনের আচরণ নানাবিধ সংক্রামক ব্যাধির ক্ষেত্রে অধিক হারে দেখা যেত। এ ক্ষেত্রে আমরা প্লেগ, স্প্যানিশ ফ্লু কিংবা আমাদের এই অঞ্চলের কলেরা রোগের কথা উল্লেখ করতে পারি। যেসব সংক্রামক ব্যাধির দীর্ঘ সময় ধরে কোনো চিকিৎসাব্যবস্থা ছিল না, সেসব ক্ষেত্রেই মানুষের মধ্যে অদৃষ্টের বা ভাগ্যের ওপর অধিক হারে নির্ভর করার প্রবণতা ছিল।', 0, 1, 1, '2020-08-05 07:34:55', '2020-08-05 07:35:13'),
(6, 5, 'আইপিএল আয়োজনে এবার কেবল ক্ষতিই', '', 'storage/images\\47066.webp', 'আইপিএল', 'অবশেষে অনেক সমালোচনা আর বিতর্কের পর আইপিএল থেকে সরে দাঁড়াচ্ছে চীনা মোবাইল ফোন প্রস্তুতকারী প্রতিষ্ঠান—ভিভো। গালোয়ান সংঘর্ষের পর ভারত-চীন কূটনৈতিক সম্পর্কের যে অবনতি আর তার ফলশ্রুতিতে গোটা ভারতজুড়ে যে চীনবিরোধী মনোভাব, তারই জেরে সরে যেতে হচ্ছে ভিভোকে। আপাতত চীনের এই প্রতিষ্ঠান সরে যাওয়ায় ভারতজুড়ে স্বস্তির হাওয়া থাকলেও এটি আইপিএলকে বড় ধরনের ক্ষতির মুখে ফেলছে।\r\n\r\n২০১৮ সালে ভিভোর সঙ্গে ভারতীয় ক্রিকেট বোর্ডের (বিসিসিআই) চুক্তি হয়। সে চুক্তি অনুযায়ী বিশ্বের সবচেয়ে বড় ও অর্থকরী ফ্র্যাঞ্চাইজি টি-টোয়েন্টি টুর্নামেন্টের টাইটেল স্পনসর হয় তারা। পাঁচ বছরের চুক্তিটি ছিল ২ হাজার ১৯৯ কোটি রুপির। করোনার এ সময়ে সংযুক্ত আরব আমিরাতে অনুষ্ঠেয় আইপিএল থেকে ভিভো সরে দাঁড়ানোয় এ বছরের জন্য নির্দিষ্ট অর্থটা পাচ্ছে না বিসিসিআই, ফলে এতে কেবল বিসিসিআইয়ের কোষাগারেই টান পড়ছে না, ক্ষতির মুখে পড়ছে আইপিএলে অংশগ্রহণকারী ফ্র্যাঞ্চাইজিগুলোও। ভিভো চলে যাওয়ায় ফ্র্যাঞ্চাইজিগুলোও যে লাভের ভাগ পাচ্ছে না।', 0, 1, 1, '2020-08-05 07:38:29', '2020-08-05 07:38:44'),
(7, 3, 'আগামী বছরের আগে টিকা নয়: ডব্লিউএইচও', '', 'storage/images\\44604.webp', 'টিকা', 'বিশ্বজুড়ে করোনাভাইরাস মহামারি পরিস্থিতি দিনে দিনে আরও খারাপ হচ্ছে। এখন সবার প্রত্যাশা একটি কার্যকর টিকা। এ জন্য চিকিৎসাবিজ্ঞানীরা কাজ করছেন দিন–রাত। অগ্রগতিও বেশ ভালো। বেশ কিছু টিকা পরীক্ষা–নিরীক্ষার প্রায় শেষ পর্যায়ে পৌঁছে গেছে। আগামী দু–তিন মাসের মধ্যে টিকা মানুষের হাতে তুলে দেওয়া সম্ভব হতে পারে বলে ঘোষণা দিয়েছে দু–তিনটি কোম্পানি। কিন্তু এরপরও সতর্ক বিশ্ব স্বাস্থ্য সংস্থা (ডব্লিউএইচও)। সংস্থাটি বলেছে, আগামী বছরের শুরুর দিকেই হয়তো কোনো টিকা ব্যবহারের উপযোগী হতে পারে। তার আগে এমন প্রত্যাশা না করাই ভালো।\r\n\r\nসুইজারল্যান্ডের জেনেভায় গত বুধবার বিশ্ব স্বাস্থ্য সংস্থার জরুরি পরিষেবা কর্মসূচির প্রধান মাইক রায়ান এমন সতর্কতার কথা বলেন। এ সময় তিনি আরও বলেন, করোনাভাইরাসের নিরাপদ ও কার্যকর টিকা উদ্ভাবনের পর তা সমহারে বণ্টন নিশ্চিত করতে বিশ্ব স্বাস্থ্য সংস্থা কাজ করে যাচ্ছে। তবে সেই টিকা আসার আগ পর্যন্ত সবচেয়ে জরুরি কাজ হলো ভাইরাসের সংক্রমণের লাগাম টেনে ধরা।', 0, 1, 1, '2020-08-05 20:30:38', '2020-08-05 20:30:38'),
(9, 3, 'মানচিত্র এবার জাতিসংঘ ও গুগলকে পাঠাচ্ছে নেপাল', '', 'storage/images\\40564.webp', 'নেপালের প্রধানমন্ত্রী কেপি শর্মা ওলি।', 'ভারত ও নেপালের মধ্যকার সম্পর্কে তিক্ততা দিনকে দিন বাড়ছে। সেই তিক্ততা সহজে মিটছে না। কারণ কালাপানি, লিপুলেখ ও লিম্পিয়াধুরাকে নিজেদের দাবি করে যে মানচিত্র প্রকাশ করেছিল নেপাল, সেটির ইংরেজি সংস্করণ জাতিসংঘ ও গুগলের কাছে পাঠাচ্ছে দেশটি।\r\n\r\nনেপালের স্থানীয় সংবাদমাধ্যমের বরাত দিয়ে ভারতের ‘ইন্ডিয়া টুডে’র খবরে এসব কথা বলা হয়েছে।', 0, 1, 1, '2020-08-05 20:33:21', '2020-08-05 20:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 2, 4, '2020-08-05 07:25:24', '2020-08-05 07:25:24'),
(3, 3, 3, '2020-08-05 07:27:46', '2020-08-05 07:27:46'),
(4, 4, 3, '2020-08-05 07:30:43', '2020-08-05 07:30:43'),
(5, 5, 7, '2020-08-05 07:34:56', '2020-08-05 07:34:56'),
(6, 6, 2, '2020-08-05 07:38:30', '2020-08-05 07:38:30'),
(7, 7, 6, '2020-08-05 20:30:38', '2020-08-05 20:30:38'),
(8, 9, 6, '2020-08-05 20:33:21', '2020-08-05 20:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL),
(2, 'author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'খেলা', '', '2020-08-05 07:09:10', '2020-08-05 07:09:10'),
(3, 'বিনোদন', '', '2020-08-05 07:09:29', '2020-08-05 07:09:29'),
(4, 'ফিচার', '', '2020-08-05 07:10:41', '2020-08-05 07:10:41'),
(5, 'শিক্ষা', '', '2020-08-05 07:11:31', '2020-08-05 07:11:31'),
(6, 'আন্তর্জাতিক', '', '2020-08-05 07:11:51', '2020-08-05 07:11:51'),
(7, 'বাংলাদেশ', '', '2020-08-05 07:12:06', '2020-08-05 07:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `topposts`
--

CREATE TABLE `topposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topposts`
--

INSERT INTO `topposts` (`id`, `user_id`, `tag_id`, `category_id`, `title`, `slug`, `image`, `image_title`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(8, 2, 2, 2, 'মেসিকে কেনা এত কঠিন ইন্টারের জন্য', '', 'storage/images\\27910.webp', 'মেসি', 'দুজনের বয়স হয়েছে। তবু বিষয়টি ভাবতেই কেমন রোমাঞ্চ জাগে। আবার মাঠের লড়াইয়ে ক্রিস্টিয়ানো রোনালদোর মুখোমুখি লিওনেল মেসি। স্পেনে দীর্ঘ সময় এ দ্বৈরথে দেখা গেছে দুজনকে। ইতালিতেও কি দেখা যাবে?\r\n\r\nইন্টার মিলান কোচ আন্তনিও কন্তে আগেও একবার সম্ভাবনাটা উড়িয়ে দিয়েছেন। আরও একবার বাস্তবতা বোঝালেন কন্তে। তাঁর মতে, বার্সেলোনা থেকে মেসিকে ইন্টারে উড়িয়ে আনা মিলানের ডুয়োমো গির্জা স্থানান্তরের চেয়েও কঠিন কাজ!', 0, 1, 1, '2020-08-05 07:42:35', '2020-08-05 07:42:35'),
(9, 2, 3, 3, 'যুক্তরাষ্ট্রে দৃশ্যায়ন হয়েছে তনিমার গানের', '', 'storage/images\\11767.webp', 'তনিমা হাদী।', '‘পথের সাথী’ শিরোনামে রোমান্টিক ঘরানার একটি গান গেয়েছেন জনপ্রিয় কণ্ঠশিল্পী সৈয়দ আব্দুল হাদীর মেয়ে তনিমা হাদী। সেই গানের ভিডিওতে মডেল হয়েছেন তাঁরই স্বামী রাকিব হোসেন। যুক্তরাষ্ট্রের নিউ জার্সির বিভিন্ন জায়গায় বেশ কয়েকটি মনোরম লোকেশনে গানটির ভিডিও ধারণ করা হয়েছে।\r\n\r\nস্বামীর সঙ্গে যুক্তরাষ্ট্রের নিউইয়র্কে থাকেন তনিমা হাদী। গান ও গানটির ভিডিও প্রসঙ্গে প্রথম আলোকে তিনি বলেন, ‘আমি প্রতিবছরই একবার বাংলাদেশে যাই। বছর দুয়েক আগে বাংলাদেশে থাকা অবস্থায় গানটিতে কণ্ঠ দিয়েছিলাম। এরপর গত বছর অক্টোবর মাসের দিকে নিউ জার্সির সুন্দর সুন্দর জায়গায় গানটির ভিডিওটি ধারণ করা হয়েছে।’', 0, 1, 1, '2020-08-05 07:44:26', '2020-08-05 07:44:26'),
(10, 2, 7, 7, 'লড়াকু পাখি কালিম', '', 'storage/images\\32069.webp', 'মাথা উঁচু করে দাপটের সঙ্গে হাঁটছে কালিম।', '১৫ জুলাই নরসিংদীর সরওয়ার পাঠান মুঠোফোনে জানালেন, চার–পাঁচটি বুনো কালিম চরে বেড়াচ্ছে ডুমরি ঝিলে। চমৎকার ওই ঝিলে বেশ আমি কয়েকবারই গিয়েছি। ঝিলটা পড়েছে নরসিংদীর পলাশ ইউনিয়নের একটি গ্রামে। সরওয়ার বাংলাদেশ ওয়াইল্ড লাইফ ক্লাবের একজন সদস্য। এককালে ওয়াইল্ড লাইফ ফটোগ্রাফার ছিলেন। তাঁর তোলা বহু ছবি আমার বিভিন্ন বইয়ে ছেপেছি। তাঁর সঙ্গে শিবপুরে গিয়ে গৃহপালিত কালিমও দেখেছি। ছানাপোনাসমেত কালিম। পুরুষ ও স্ত্রী পাখি ছানাদের নিয়ে দিব্যি চরে বেড়াচ্ছে। দেশের আরও ১০–১২টি জেলায় আমার চোখে পড়েছে গৃহপালিত কালিম। আশ্চর্য! এমন দাপুটে লড়াকু পাখি পোষ মেনে গেল!\r\n\r\nকালিম মূলত জলাভূমি, বিলঝিল আর হাওরের পাখি। দলে চলে, দলে চরে। বিপদের গন্ধ পেলে জলজ আগাছা, নলখাগড়া আর ঝোপঝাড়ে লুকিয়ে যায়। প্রয়োজনে ঊর্ধ্বলাফে ৯–১০ ফুট পর্যন্ত উঁচুতে উঠে যেতে পারে। অল্প পানিতে দাপটের সঙ্গে হাঁটে। বুকভরা সাহস এদের, চোখভরা রোষ। কোয়াক কোয়াক শব্দে ডাকাডাকি করে। লড়াইয়ের সময় এদের হাঁকাহাঁকি প্রবল।', 0, 1, 1, '2020-08-05 07:47:01', '2020-08-05 07:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md.admin', 'admin@gmail.com', NULL, '$2y$10$VvZL9iIhZk0OIZBMMPclPeJPDZz4CY1.XGwjv4MyeIKc4sEkQsapG', 'default.png', NULL, NULL, NULL),
(2, 1, 'Md.shoriful', 'shoriful@gmail.com', NULL, '$2y$10$P/8ENT19qKQDA9fpyHg6oOSpgvQPXEZoin6HcflPOVh1o9gQ9bYI.', 'default.png', NULL, NULL, NULL),
(3, 1, 'Md.Shojib', 'shojib@gmail.com', NULL, '$2y$10$7WIV/n9Azt6Io83hsj91xOQJltrR74UUru0WRK7SH.m1VDYvuZAKi', 'default.png', NULL, NULL, NULL),
(4, 1, 'Md.Tamanna', 'tamanna@gmail.com', NULL, '$2y$10$6.TrA6Sm2X8zNYw9O3M9PuIf4yGYtR8C7A0OoGnOpF9iKZXeuOQ7q', 'default.png', NULL, NULL, NULL),
(5, 2, 'Md.author', 'author@gmail.com', NULL, '$2y$10$MA11CQuxjTXXM0KdiAoVLOoZIF7r717gk4roPCBW5VspUqomU0E3m', 'default.png', NULL, NULL, NULL),
(6, 2, 'Md.robin', 'robin@gmail.com', NULL, '$2y$10$RQe/CpFq2fluyefhNrR/J.qyCVkzRMHGW9a694R19BjTPc6RERFXi', 'default.png', NULL, NULL, NULL),
(7, 2, 'Md.rony', 'rony@gmail.com', NULL, '$2y$10$5/gL6yXaWP3aI043Mc8CGu4bQpt18r4e5SL1X.0HT/sAhnIq8VMxe', 'default.png', NULL, NULL, NULL),
(8, 2, 'Md.rocky', 'rocky@gmail.com', NULL, '$2y$10$9N2eLsoBeDsIfg7Far68luxe.8qYTkj5QYIc/SDoUZIHPL/RIXiHe', 'default.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topposts`
--
ALTER TABLE `topposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topposts_user_id_foreign` (`user_id`),
  ADD KEY `topposts_tag_id_foreign` (`tag_id`),
  ADD KEY `topposts_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `topposts`
--
ALTER TABLE `topposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topposts`
--
ALTER TABLE `topposts`
  ADD CONSTRAINT `topposts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topposts_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topposts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
