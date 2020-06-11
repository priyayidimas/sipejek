-- phpMyAdmin SQL Dump
-- version 5.0.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 05:06 AM
-- Server version: 10.3.19-MariaDB-1
-- PHP Version: 7.3.10-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipejek_beta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Dante', 'mendozadante@gmail.com', 'Jelek', 'Gamau tau jelek', '2020-06-11 05:06:01', '2020-06-11 05:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_07_040501_create_project_table', 1),
(4, '2020_03_07_041645_create_user_x_project_table', 1),
(5, '2020_03_07_042235_create_prequestion_table', 1),
(6, '2020_03_07_042610_create_prequestion_x_user_table', 1),
(7, '2020_03_07_042850_create_phase_table', 1),
(8, '2020_03_07_043530_create_pro_activity_table', 1),
(9, '2020_03_07_044244_create_act_assignment_x_user', 1),
(10, '2020_03_07_044541_create_act_comment', 1),
(11, '2020_03_07_045410_create_pro_act_quiz_question', 1),
(12, '2020_03_07_045725_create_pro_act_quiz_choice', 1),
(13, '2020_03_07_045944_create_pro_act_quiz_x_user', 1),
(15, '2020_06_01_075759_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('07478c74-7037-4ad4-ac48-080e64ebe8b5', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 02:52:18', '2020-06-07 02:46:56', '2020-06-07 02:52:18'),
('07ec9dfc-e178-40a7-94e3-670ac2acadc0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 141, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, BZdfyU! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-03 23:15:28', '2020-06-03 23:15:28'),
('0848e1e8-88d0-418e-a415-371578d6ea33', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 01:47:31', '2020-06-05 01:45:21', '2020-06-05 01:47:31'),
('09204cb0-9f1d-4487-920f-bf3a6216e231', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 01:47:31', '2020-06-05 01:47:24', '2020-06-05 01:47:31'),
('0a2c6935-24cf-4529-93ba-86bfa6c79646', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 00:03:49', '2020-06-05 00:03:38', '2020-06-05 00:03:49'),
('0c53522c-75a7-4a34-ae99-3fc4cf007593', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-346\"}', '2020-06-05 05:38:43', '2020-06-05 04:25:54', '2020-06-05 05:38:43'),
('17dd9d54-aa87-42b2-9ada-29e284dfc0ba', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/coba-lagi-963\"}', '2020-06-05 01:41:52', '2020-06-05 00:46:24', '2020-06-05 01:41:52'),
('1b9d7914-fb06-4df2-8f89-f4eb1f909dbe', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Assignment\",\"body\":\"Group 1 Has Turned In The Assignment Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-05 02:16:56', '2020-06-05 02:16:48', '2020-06-05 02:16:56'),
('1cd277b8-6d20-4b46-a578-fe189eb0fc77', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 142, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, XcwHSd! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-03 23:15:28', '2020-06-03 23:15:28'),
('1fc1cb7c-186e-485d-87eb-74e74b59df63', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-06 23:08:38', '2020-06-05 00:06:22', '2020-06-06 23:08:38'),
('28ef0822-14a6-4d11-9e10-9bb0f907948d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New material\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New material In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-04 23:42:29', '2020-06-04 23:41:21', '2020-06-04 23:42:29'),
('2b9e3964-b879-44bb-82a2-78247519d9cb', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-06 23:08:36', '2020-06-05 04:27:06', '2020-06-06 23:08:36'),
('2f7eb1ed-306e-4a96-b8ef-b7c9fa73a0a1', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"NET200\",\"header\":\"New Teacher\",\"body\":\"Dimas Anom Priyayi Joined to Co-Teach A Project!\",\"link\":\"http:\\/\\/localhost:8000\\/projects\\/detail\\/NET200\"}', NULL, '2020-06-11 05:00:07', '2020-06-11 05:00:07'),
('2f9ecbb5-2615-453f-a51d-3b22dbce6a2d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New material\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New material In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:38', '2020-06-04 23:41:21', '2020-06-06 23:08:38'),
('3a016609-a665-4db0-98f1-8dd37f593328', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"user\\\":{\\\"id\\\":155,\\\"fullname\\\":\\\"Group 1\\\",\\\"email\\\":\\\"group1_d055@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$K2VwT8mkGxaci6JXmtT4aeTX4XVyVAxmTlIsC4m5gf9s6frvQ6TrW\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:54:43\\\",\\\"updated_at\\\":\\\"2020-06-05 05:49:34\\\"}},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\"}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 00:01:01', '2020-06-05 00:00:50', '2020-06-05 00:01:01'),
('3c9c29b6-458b-4e46-b1f2-00f64a74bb0d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 2 ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\\/submission\"}', '2020-06-07 03:33:29', '2020-06-07 02:52:42', '2020-06-07 03:33:29'),
('3ee1d38a-41c7-48b4-94cc-9594ee331c1e', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"user\\\":{\\\"id\\\":155,\\\"fullname\\\":\\\"Group 1\\\",\\\"email\\\":\\\"group1_d055@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$K2VwT8mkGxaci6JXmtT4aeTX4XVyVAxmTlIsC4m5gf9s6frvQ6TrW\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:54:43\\\",\\\"updated_at\\\":\\\"2020-06-05 05:49:34\\\"}},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"user\\\":{\\\"id\\\":156,\\\"fullname\\\":\\\"QUgsMX\\\",\\\"email\\\":\\\"QUgsMX@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$lg6wGy3wnQdOzhevDYtZieXIF.0Z45aaoQo0jitjtVBG9avPUGp3K\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:55:40\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:40\\\"}}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:38', '2020-06-05 00:00:50', '2020-06-06 23:08:38'),
('3fd9c499-ac28-4f3f-8fc9-c996620ffb6b', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 3, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, Batman! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-03 23:15:28', '2020-06-03 23:15:28'),
('446f55e6-a8eb-45bb-9d29-3b357ffdf004', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"BIO100\",\"header\":\"New Teacher\",\"body\":\"Dimas Anom Priyayi Joined to Co-Teach A Project!\",\"link\":\"http:\\/\\/localhost:8000\\/projects\\/detail\\/BIO100\"}', '2020-06-11 04:58:11', '2020-06-11 04:58:03', '2020-06-11 04:58:11'),
('52443a23-45a4-4f8a-bf9c-ef5eb31c8903', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-06 23:08:37', '2020-06-05 01:40:49', '2020-06-06 23:08:37'),
('5795b075-7278-4052-b32d-7a44cd4e5c0a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-05 05:38:43', '2020-06-05 04:27:06', '2020-06-05 05:38:43'),
('58732e1e-1ab1-4944-8151-349c4804307a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, rqOyvB! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-03 23:30:37', '2020-06-03 23:15:28', '2020-06-03 23:30:37'),
('588905bf-7a92-438d-ba2d-c6324f5e8422', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 02:52:18', '2020-06-07 02:44:29', '2020-06-07 02:52:18'),
('5b04278a-8442-497d-afca-34288c535382', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"Late Quiz Submission\",\"body\":\"Hi, Group 2! Your Quiz Has Been Graded\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\\/submission\"}', '2020-06-07 03:36:56', '2020-06-07 03:36:26', '2020-06-07 03:36:56'),
('658ce9db-615e-479e-9251-0232761261d0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Quiz Submission\",\"body\":\"Group 2 Has Turned In The Quiz Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-07 03:36:32', '2020-06-07 03:34:19', '2020-06-07 03:36:32'),
('691536d6-b4ba-48a7-8b6f-b621db5b786c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/coba-lagi-963\"}', '2020-06-06 23:08:38', '2020-06-05 00:46:24', '2020-06-06 23:08:38'),
('73b0144c-1df3-4aaf-821e-fd5090cc5226', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, abDqQm! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-03 23:30:37', '2020-06-03 23:15:28', '2020-06-03 23:30:37'),
('787754c2-4bbb-4959-a37f-f08c2c8de81f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-06 23:08:37', '2020-06-05 02:58:19', '2020-06-06 23:08:37'),
('7aed369d-5a93-4c40-9b9e-9ed3d204bf0c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-05 01:41:52', '2020-06-05 00:47:54', '2020-06-05 01:41:52'),
('7c34b16d-d16b-4df7-83a8-5fb0be0dda3f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, dFkCMH! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-03 23:30:37', '2020-06-03 23:15:28', '2020-06-03 23:30:37'),
('83be7bea-579c-4eab-ac64-77cb4eb7f267', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-06 23:08:37', '2020-06-05 01:47:24', '2020-06-06 23:08:37'),
('89cd80b2-d022-403e-a6c8-88b333defff1', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Assignment\",\"body\":\"Group 1 Has Turned In The Assignment Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-05 05:41:04', '2020-06-05 05:40:58', '2020-06-05 05:41:04'),
('91251d15-d526-4260-80af-f5484c5ec57d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 03:36:32', '2020-06-07 02:52:42', '2020-06-07 03:36:32'),
('9579366d-a406-4e34-91d2-4d471c291fce', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"ADMIN\",\"header\":\"New Message\",\"body\":\"You Have New Message!\",\"link\":\"http:\\/\\/localhost:8000\\/messages\"}', '2020-06-11 05:10:48', '2020-06-11 05:06:02', '2020-06-11 05:10:48'),
('9988a795-9f61-40a6-ba23-f0e8ef728437', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, OZchiY! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-03 23:30:38', '2020-06-03 23:15:28', '2020-06-03 23:30:38'),
('a34dc3d6-6129-4a9d-b222-804ed9288dc3', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-06 23:08:37', '2020-06-05 00:47:54', '2020-06-06 23:08:37'),
('a606258f-80c8-4af0-b394-7512626a9f3a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:37', '2020-06-05 01:41:39', '2020-06-06 23:08:37'),
('ae6f1b8e-2b4a-4b37-a6d4-16489a1657ce', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 01:41:52', '2020-06-05 01:40:48', '2020-06-05 01:41:52'),
('af87ccff-0a8b-4368-afbf-088fdf84fe2f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 2, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, Ujangs! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-03 23:15:28', '2020-06-03 23:15:28'),
('b413278a-fed1-4632-b1b5-5f7f6cd241fd', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 01:41:18', '2020-06-05 01:41:07', '2020-06-05 01:41:18'),
('b74f424e-4975-4b89-852c-f79fd4575a04', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 02:52:17', '2020-06-07 02:51:13', '2020-06-07 02:52:17'),
('c651dd53-1a92-42ec-aaf3-6dd15f4b80d0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-06 23:08:37', '2020-06-05 01:37:14', '2020-06-06 23:08:37'),
('ca1b1366-d764-424d-aa26-56df4ad12fb7', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-05 03:25:20', '2020-06-05 02:58:19', '2020-06-05 03:25:20'),
('cbff181f-9ee7-49a2-b486-8b4cfb24e085', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-06 23:08:37', '2020-06-05 01:40:32', '2020-06-06 23:08:37'),
('ce95031b-4b92-49d6-a9a6-f60012ec3457', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 00:06:34', '2020-06-05 00:06:22', '2020-06-05 00:06:34'),
('dcaed3cb-d63f-4b5d-be42-50f5c4c9d3b8', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:37', '2020-06-05 01:45:21', '2020-06-06 23:08:37'),
('e2a2c8f3-76ce-4439-969e-75feea5b8110', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 144, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, CFRLZP! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-03 23:15:28', '2020-06-03 23:15:28'),
('e4a50273-63a9-4543-9957-b5e8b3fe5d29', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 01:41:18', '2020-06-05 01:40:32', '2020-06-05 01:41:18'),
('e7a774c4-0bb5-4398-a41f-8c1229e6e2ff', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\"},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\"}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 00:03:11', '2020-06-05 00:00:50', '2020-06-05 00:03:11'),
('e8c3bd54-6ade-47bc-998f-105bb6a83396', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:38', '2020-06-05 00:03:38', '2020-06-06 23:08:38'),
('e8e64825-d08a-4a2d-bb63-fc04e8bb168c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-06 23:08:37', '2020-06-05 01:41:07', '2020-06-06 23:08:37'),
('ed18f589-1bb5-48dc-95be-f000f759f3bf', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 2, '{\"code\":\"NET200\",\"header\":\"New Teacher\",\"body\":\"Dimas Anom Priyayi Joined to Co-Teach A Project!\",\"link\":\"http:\\/\\/localhost:8000\\/projects\\/detail\\/NET200\"}', NULL, '2020-06-11 05:00:06', '2020-06-11 05:00:06'),
('f5fcc64a-4f0f-4043-89d4-0851bc888b6b', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-346\"}', '2020-06-06 23:08:36', '2020-06-05 04:25:55', '2020-06-06 23:08:36'),
('f6088f76-e520-4abe-91c8-d22070c39a53', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 01:41:18', '2020-06-05 01:37:14', '2020-06-05 01:41:18'),
('f7902c47-ee30-4af7-956d-9fbdc7a6c65f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-06 23:08:37', '2020-06-05 01:47:41', '2020-06-06 23:08:37'),
('fb7c3d97-916e-4d58-8071-e7e6437c8ba2', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 01:41:52', '2020-06-05 01:41:39', '2020-06-05 01:41:52'),
('fea3d58e-6104-46b1-b1ca-c4bd4158ddbf', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-05 01:47:49', '2020-06-05 01:47:41', '2020-06-05 01:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasPreOk` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `code`, `topic`, `title`, `desc`, `hasPreOk`, `created_at`, `updated_at`) VALUES
(1, 'NET200', 'Networking', 'Developing Simple Network', 'Network adalah.....<br />\r\ncara buatnya gini<br />\r\nbalsaldasl<br />\r\n<br />\r\nffggh<br />\r\ndfdf<br />\r\ndf', 1, NULL, '2020-06-11 03:40:06'),
(2, 'MAT200', 'Mathematics', 'Measuring Volume of Cyllinder', NULL, 0, NULL, NULL),
(3, 'BIO100', 'Biology', 'Examining Anatomy of A Dead Frog', NULL, 0, NULL, '2020-03-08 00:29:26'),
(4, 'd055', 'Ilkom', 'Membuat Website Sederhana', 'Website adalah sebuah layanan biar ganteng', 1, '2020-06-04 20:18:01', '2020-06-04 23:37:48'),
(5, 'S010', 'Sejarah', 'Diorama', 'WW2 adalah world war 2', 1, '2020-06-11 03:21:53', '2020-06-11 03:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `project_x_user`
--

CREATE TABLE `project_x_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `project_x_user`
--

INSERT INTO `project_x_user` (`id`, `user_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(13, 153, 4, '2020-06-04 20:18:01', '2020-06-04 20:18:01'),
(15, 155, 4, '2020-06-04 20:54:44', '2020-06-04 20:54:44'),
(16, 156, 4, '2020-06-04 20:55:41', '2020-06-04 20:55:41'),
(17, 153, 5, '2020-06-11 03:21:53', '2020-06-11 03:21:53'),
(18, 157, 5, '2020-06-11 03:22:54', '2020-06-11 03:22:54'),
(19, 158, 5, '2020-06-11 03:22:55', '2020-06-11 03:22:55'),
(20, 153, 2, '2020-06-11 04:57:10', '2020-06-11 04:57:10'),
(21, 153, 3, '2020-06-11 04:58:03', '2020-06-11 04:58:03'),
(22, 153, 1, '2020-06-11 05:00:06', '2020-06-11 05:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `pro_activity`
--

CREATE TABLE `pro_activity` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxscore` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `timer` int(11) NOT NULL DEFAULT 0,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_activity`
--

INSERT INTO `pro_activity` (`id`, `title`, `slug`, `type`, `attachment`, `maxscore`, `timer`, `desc`, `phase_id`, `created_at`, `updated_at`) VALUES
(2, 'First Assignment', 'b', 'assignment', '/upload/projects/NET200/assignmentb/462_Hasil Lokakarya Mumas Kemakom 2020.pdf', 100, 0, 'Hi! Lets Practice Yok', 1, NULL, '2020-06-04 01:34:57'),
(3, 'First Quiz', 'c', 'quiz', NULL, 0, 10, '', 1, NULL, NULL),
(4, 'Perkenalan Networking Awal', 'perkenalan-networking-666', 'material', '/upload/projects/NET200/material/24_Picture (3).jpg', 0, 0, 'Apa <br />\r\nSi<br />\r\nIni', 1, '2020-06-03 00:05:38', '2020-06-03 05:21:26'),
(5, 'Quiz 1 Networking Introduction', 'quiz-1-networking-979', 'quiz', NULL, 100, 0, '', 1, '2020-06-04 00:36:16', '2020-06-04 00:48:44'),
(6, 'HTML : First Module', 'html---first-module-50', 'material', '/upload/projects/d055/material/454_1805885_DimasAnomPriyayi_UTSLopen.pdf', 0, 0, 'Hai, coba pelajari dulu apa itu HTML yak<br />\r\nasd<br />\r\nasd<br />\r\nasd<br />\r\nasd<br />\r\nasdfdsfsfsdg<br />\r\ndg<br />\r\ndf<br />\r\ngdfgdgfdfg', 4, '2020-06-04 23:41:20', '2020-06-04 23:50:07'),
(7, 'Membuat Halaman HTML Sederhana', 'membuat-halaman-html-sederhana-4', 'assignment', '/upload/projects/d055/assignmentmembuat-halaman-html-sederhana-4/765_asdasdsa.png', 100, 0, 'Hai! Berdasarkan modul yang kemaren dikasih, buatlah halaman HTML sederhana dengan menggunakan &lt;p&gt;, &lt;h1&gt;, dan &lt;div&gt;<br />\r\n<br />\r\nSemangat!!', 4, '2020-06-05 00:06:22', '2020-06-05 00:10:51'),
(8, 'Coba Lagi', 'coba-lagi-963', 'assignment', '/upload/projects/d055/assignment/coba-lagi-963/762_ERD RR.png', 100, 0, 'asdasd', 4, '2020-06-05 00:46:24', '2020-06-05 00:49:07'),
(9, 'asd', 'asd-179', 'assignment', '/upload/projects/d055/assignment/asd-179/602_Hasil Lokakarya Mumas Kemakom 2020.pdf', 100, 0, 'asda', 4, '2020-06-05 00:47:54', '2020-06-05 00:47:54'),
(10, 'First Quiz: HTML', 'first-quiz--html-581', 'quiz', NULL, 100, 0, NULL, 4, '2020-06-05 02:58:18', '2020-06-05 04:53:55'),
(11, 'Cek', 'cek-346', 'quiz', NULL, 75, 0, NULL, 4, '2020-06-05 04:25:53', '2020-06-05 04:36:39'),
(12, 'Cek Lagi Coba', 'cek-lagi-coba-983', 'quiz', NULL, 100, 0, NULL, 4, '2020-06-05 04:27:06', '2020-06-05 04:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `pro_act_assignment_x_user`
--

CREATE TABLE `pro_act_assignment_x_user` (
  `id` int(11) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_act_assignment_x_user`
--

INSERT INTO `pro_act_assignment_x_user` (`id`, `desc`, `attachment`, `filename`, `score`, `review`, `user_id`, `activity_id`, `created_at`, `updated_at`) VALUES
(1, 'Monggo Baca Pak', 'file.txt', NULL, NULL, '', 3, 2, NULL, NULL),
(3, 'Ini Pak Punten', '/upload/projects/d055/assignment/membuat-halaman-html-sederhana-4/937_ERD RR.png', '937_ERD RR.png', 100, 'Yoi Baguzz', 155, 7, '2020-06-05 01:34:10', '2020-06-07 02:51:13'),
(4, 'AAA', '/upload/projects/d055/assignment/asd-179/738_7071.jpg', '738_7071.jpg', 1, '', 155, 9, '2020-06-05 02:16:48', '2020-06-05 02:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `pro_act_comment`
--

CREATE TABLE `pro_act_comment` (
  `id` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_act_comment`
--

INSERT INTO `pro_act_comment` (`id`, `message`, `activity_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Makasih Pak', 4, 1, NULL, NULL),
(14, 'Hai bapak', 6, 155, '2020-06-05 01:47:24', '2020-06-05 01:47:24'),
(15, 'Hai juga', 6, 153, '2020-06-05 01:47:41', '2020-06-05 01:47:41'),
(16, 'Makasih Pakk', 7, 155, '2020-06-07 02:52:42', '2020-06-07 02:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `pro_act_quiz_choice`
--

CREATE TABLE `pro_act_quiz_choice` (
  `id` int(11) NOT NULL,
  `choice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTrue` tinyint(1) NOT NULL DEFAULT 0,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pro_act_quiz_question`
--

CREATE TABLE `pro_act_quiz_question` (
  `id` int(11) NOT NULL,
  `question` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isMultiple` tinyint(1) NOT NULL DEFAULT 0,
  `maxscore` int(3) NOT NULL DEFAULT 0,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_act_quiz_question`
--

INSERT INTO `pro_act_quiz_question` (`id`, `question`, `isMultiple`, `maxscore`, `desc`, `activity_id`, `created_at`, `updated_at`) VALUES
(1, 'Apa itu routing?', 0, 0, '', 5, '2020-06-04 00:36:16', '2020-06-04 00:36:16'),
(2, 'Jelaskan fungsi routing!', 0, 0, '', 5, '2020-06-04 00:36:16', '2020-06-04 00:36:16'),
(3, 'Bagaimana cara kerja static routing?', 0, 0, '', 5, '2020-06-04 00:36:16', '2020-06-04 00:36:16'),
(7, 'Dimana Letak Layer Routing?', 0, 0, '', 5, '2020-06-04 01:27:23', '2020-06-04 01:27:39'),
(8, 'What is HTML?', 0, 34, '', 10, '2020-06-05 02:58:18', '2020-06-05 04:53:42'),
(9, 'Who found HTML?', 0, 33, '', 10, '2020-06-05 02:58:18', '2020-06-05 04:53:49'),
(10, 'What <p> Do?', 0, 33, '', 10, '2020-06-05 02:58:18', '2020-06-05 04:53:55'),
(11, 'Apasi?', 0, 20, '', 11, '2020-06-05 04:25:54', '2020-06-05 04:25:54'),
(12, 'Hmm?', 0, 30, '', 11, '2020-06-05 04:25:54', '2020-06-05 04:31:52'),
(13, 'Apa kamu?', 0, 50, '', 12, '2020-06-05 04:27:06', '2020-06-05 04:27:06'),
(14, 'Kenapa Sih?', 0, 50, '', 12, '2020-06-05 04:27:06', '2020-06-05 04:27:06'),
(16, 'Kenapa Ai Kamu', 0, 25, '', 11, '2020-06-05 04:36:39', '2020-06-05 04:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `pro_act_quiz_x_user`
--

CREATE TABLE `pro_act_quiz_x_user` (
  `id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_act_quiz_x_user`
--

INSERT INTO `pro_act_quiz_x_user` (`id`, `answer`, `score`, `question_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hyper Text Mark-up Language', 34, 8, 155, '2020-06-05 04:55:06', '2020-06-05 04:55:06'),
(2, 'Me', 33, 9, 155, '2020-06-05 04:55:06', '2020-06-05 04:55:06'),
(3, 'To Make Paragraph', 33, 10, 155, '2020-06-05 04:55:06', '2020-06-05 04:55:06'),
(4, 'Nyolot Lu', NULL, 11, 155, '2020-06-05 04:56:50', '2020-06-05 04:56:50'),
(5, 'kenapa?', NULL, 12, 155, '2020-06-05 04:56:50', '2020-06-05 04:56:50'),
(6, 'Gak kenapa2', NULL, 16, 155, '2020-06-05 04:56:50', '2020-06-05 04:56:50'),
(7, 'Manusia', NULL, 13, 155, '2020-06-05 05:40:57', '2020-06-05 05:40:57'),
(8, 'Gak Napa2', NULL, 14, 155, '2020-06-05 05:40:57', '2020-06-05 05:40:57'),
(9, 'Hyper Text Mark-up Language', 34, 8, 156, '2020-06-07 03:34:19', '2020-06-07 03:36:26'),
(10, 'Your Mother', 0, 9, 156, '2020-06-07 03:34:19', '2020-06-07 03:36:26'),
(11, 'To create some paragraph like this <p>', 11, 10, 156, '2020-06-07 03:34:19', '2020-06-07 03:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `pro_phase`
--

CREATE TABLE `pro_phase` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_due` datetime DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_phase`
--

INSERT INTO `pro_phase` (`id`, `title`, `date_start`, `date_due`, `project_id`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Get-to-know Networking', '2020-03-07 15:59:39', '2020-03-14 15:59:43', 1, NULL, NULL, NULL),
(2, 'Designing a Network', '2020-03-15 16:00:11', '2020-03-20 16:00:16', 1, NULL, NULL, NULL),
(3, 'Building a Network', '2020-03-26 16:00:36', '2020-03-27 16:00:29', 1, NULL, NULL, NULL),
(4, 'Belajar HTML', '2020-06-01 00:00:00', '2020-06-02 23:59:00', 4, 'w3schools', '2020-06-04 23:39:05', '2020-06-05 02:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `pro_prequestion`
--

CREATE TABLE `pro_prequestion` (
  `id` int(11) NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_prequestion`
--

INSERT INTO `pro_prequestion` (`id`, `question`, `desc`, `project_id`, `created_at`, `updated_at`) VALUES
(2, 'What is it made of?', NULL, 1, NULL, NULL),
(3, 'How is it made?', NULL, 1, NULL, NULL),
(4, 'Have you ever go to cyber cafe?', NULL, 1, NULL, NULL),
(5, 'How do you access the internet using the cyber cafe computer?', NULL, 1, NULL, NULL),
(6, 'Do you know computer network?', NULL, 1, '2020-03-08 02:55:03', '2020-03-08 02:55:03'),
(7, 'Apa Sih Website', '', 4, '2020-06-04 20:57:31', '2020-06-04 20:57:31'),
(8, 'Biar Apa Buat Website?', '', 4, '2020-06-04 21:02:07', '2020-06-04 21:02:07'),
(9, 'Apa itu WW2', 'Siswa menjelaskan pengertian WW2', 5, '2020-06-11 03:24:21', '2020-06-11 03:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `pro_prequestion_x_user`
--

CREATE TABLE `pro_prequestion_x_user` (
  `id` int(11) NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prequestion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pro_prequestion_x_user`
--

INSERT INTO `pro_prequestion_x_user` (`id`, `answer`, `prequestion_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Strings, Polymer, Wools', 2, 3, NULL, NULL),
(3, 'By Tangling the Strings? I don\'t know', 3, 3, NULL, NULL),
(4, 'No, I haven\'t', 4, 3, NULL, NULL),
(5, 'Website adalah sebuah layanan', 7, 155, '2020-06-04 23:27:36', '2020-06-04 23:37:02'),
(6, 'Biar Ganteng', 8, 155, '2020-06-04 23:37:15', '2020-06-04 23:37:15'),
(7, 'World War 2', 9, 157, '2020-06-11 03:25:35', '2020-06-11 03:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 1,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/upload/profile/default.png',
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `verified`, `type`, `password`, `image`, `desc`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@sipejek.com', 1, 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/526-182a2284-238b-4edd-8899-62892b9882f1.jpg', NULL, NULL, NULL, '2020-05-27 19:28:56'),
(2, 'Ujangs', 'ujang@sipejek.com', 1, 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/default.png', NULL, NULL, NULL, NULL),
(3, 'Batman', 'batman@sipejek.com', 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/default.png', '- Usep \r\n- Siapa\r\n- Apa\r\n- Dede', NULL, NULL, NULL),
(153, 'Dimas Anom Priyayi', 'priyayidimas@gmail.com', 1, 2, '$2y$10$7MvFG31/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq', '/upload/profile/744_182a2284-238b-4edd-8899-62892b9882f1.jpg', NULL, NULL, '2020-06-04 19:39:54', '2020-06-06 23:28:32'),
(155, 'Group 1', 'group1_d055@sipejek.com', 1, 1, '$2y$10$zq/cGzFqdl8PcqUTjYK4nu5TT3kaamk.BfJ73rV0ZbNEGj0atFa5u', '/upload/profile/default.png', NULL, NULL, '2020-06-04 20:54:43', '2020-06-06 23:02:03'),
(156, 'Group 2', 'group2_d055@sipejek.com', 1, 1, '$2y$10$HTJYCehJAXFoXzahS7PUf.q2.FjN85u7bh0LnFQhNSR2b8s3VqHxe', '/upload/profile/default.png', '- Ade<br />\r\n- Adhi<br />\r\n- Mmuull', NULL, '2020-06-04 20:55:40', '2020-06-06 23:20:55'),
(157, 'xwhBGY', 'xwhBGY@sipejek.com', 1, 1, '$2y$10$r8QynK8eNoRgshK38p9dWOCoQJzmNfnnYgOgD8ueLRGIJjr6ZVGQO', '/upload/profile/default.png', NULL, NULL, '2020-06-11 03:22:54', '2020-06-11 03:22:54'),
(158, 'kvLOxy', 'kvLOxy@sipejek.com', 1, 1, '$2y$10$7gJWSoe2ZmQsuMNAUs/R2uTsJAOlim1th5bC1wD2zQDpVw8Nc3ffy', '/upload/profile/default.png', NULL, NULL, '2020-06-11 03:22:55', '2020-06-11 03:22:55'),
(159, 'Mendoza Dante', 'mendozadante@gmail.com', 1, 2, '$2y$10$QOsFRkKsL8dQ31tLEvJTYuHhg1Cq61XucqvfGgLCSog6GXHIdEPGC', '/upload/profile/default.png', NULL, NULL, '2020-06-11 03:39:08', '2020-06-11 04:06:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `project_x_user`
--
ALTER TABLE `project_x_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `project_x_user_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `project_x_user_project_id_index` (`project_id`) USING BTREE;

--
-- Indexes for table `pro_activity`
--
ALTER TABLE `pro_activity`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_activity_phase_id_index` (`phase_id`) USING BTREE;

--
-- Indexes for table `pro_act_assignment_x_user`
--
ALTER TABLE `pro_act_assignment_x_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_act_assignment_x_user_user_id_index` (`user_id`) USING BTREE,
  ADD KEY `pro_act_assignment_x_user_activity_id_index` (`activity_id`) USING BTREE;

--
-- Indexes for table `pro_act_comment`
--
ALTER TABLE `pro_act_comment`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_act_comment_activity_id_index` (`activity_id`) USING BTREE,
  ADD KEY `pro_act_comment_user_id_index` (`user_id`) USING BTREE;

--
-- Indexes for table `pro_act_quiz_choice`
--
ALTER TABLE `pro_act_quiz_choice`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_act_quiz_choice_question_id_index` (`question_id`) USING BTREE;

--
-- Indexes for table `pro_act_quiz_question`
--
ALTER TABLE `pro_act_quiz_question`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_act_quiz_question_activity_id_index` (`activity_id`) USING BTREE;

--
-- Indexes for table `pro_act_quiz_x_user`
--
ALTER TABLE `pro_act_quiz_x_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_act_quiz_x_user_question_id_index` (`question_id`) USING BTREE,
  ADD KEY `pro_act_quiz_x_user_user_id_index` (`user_id`) USING BTREE;

--
-- Indexes for table `pro_phase`
--
ALTER TABLE `pro_phase`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_phase_project_id_index` (`project_id`) USING BTREE;

--
-- Indexes for table `pro_prequestion`
--
ALTER TABLE `pro_prequestion`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_prequestion_project_id_index` (`project_id`) USING BTREE;

--
-- Indexes for table `pro_prequestion_x_user`
--
ALTER TABLE `pro_prequestion_x_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pro_prequestion_x_user_prequestion_id_index` (`prequestion_id`) USING BTREE,
  ADD KEY `pro_prequestion_x_user_user_id_index` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_x_user`
--
ALTER TABLE `project_x_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pro_activity`
--
ALTER TABLE `pro_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pro_act_assignment_x_user`
--
ALTER TABLE `pro_act_assignment_x_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pro_act_comment`
--
ALTER TABLE `pro_act_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pro_act_quiz_choice`
--
ALTER TABLE `pro_act_quiz_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_act_quiz_question`
--
ALTER TABLE `pro_act_quiz_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pro_act_quiz_x_user`
--
ALTER TABLE `pro_act_quiz_x_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pro_phase`
--
ALTER TABLE `pro_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pro_prequestion`
--
ALTER TABLE `pro_prequestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pro_prequestion_x_user`
--
ALTER TABLE `pro_prequestion_x_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_x_user`
--
ALTER TABLE `project_x_user`
  ADD CONSTRAINT `project_x_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_activity`
--
ALTER TABLE `pro_activity`
  ADD CONSTRAINT `pro_activity_phase_id_foreign` FOREIGN KEY (`phase_id`) REFERENCES `pro_phase` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_act_assignment_x_user`
--
ALTER TABLE `pro_act_assignment_x_user`
  ADD CONSTRAINT `pro_act_assignment_x_user_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_act_assignment_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_act_comment`
--
ALTER TABLE `pro_act_comment`
  ADD CONSTRAINT `pro_act_comment_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_act_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_act_quiz_choice`
--
ALTER TABLE `pro_act_quiz_choice`
  ADD CONSTRAINT `pro_act_quiz_choice_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `pro_act_quiz_question` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_act_quiz_question`
--
ALTER TABLE `pro_act_quiz_question`
  ADD CONSTRAINT `pro_act_quiz_question_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_act_quiz_x_user`
--
ALTER TABLE `pro_act_quiz_x_user`
  ADD CONSTRAINT `pro_act_quiz_x_user_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `pro_act_quiz_question` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_act_quiz_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_phase`
--
ALTER TABLE `pro_phase`
  ADD CONSTRAINT `pro_phase_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_prequestion`
--
ALTER TABLE `pro_prequestion`
  ADD CONSTRAINT `pro_prequestion_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_prequestion_x_user`
--
ALTER TABLE `pro_prequestion_x_user`
  ADD CONSTRAINT `pro_prequestion_x_user_prequestion_id_foreign` FOREIGN KEY (`prequestion_id`) REFERENCES `pro_prequestion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_prequestion_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

