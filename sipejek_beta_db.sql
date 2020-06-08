/*
 Navicat Premium Data Transfer

 Source Server         : mysqli_connect
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : sipejek_beta_db

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 07/06/2020 17:56:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2020_03_07_040501_create_project_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_03_07_041645_create_user_x_project_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_03_07_042235_create_prequestion_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_03_07_042610_create_prequestion_x_user_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_03_07_042850_create_phase_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_03_07_043530_create_pro_activity_table', 1);
INSERT INTO `migrations` VALUES (9, '2020_03_07_044244_create_act_assignment_x_user', 1);
INSERT INTO `migrations` VALUES (10, '2020_03_07_044541_create_act_comment', 1);
INSERT INTO `migrations` VALUES (11, '2020_03_07_045410_create_pro_act_quiz_question', 1);
INSERT INTO `migrations` VALUES (12, '2020_03_07_045725_create_pro_act_quiz_choice', 1);
INSERT INTO `migrations` VALUES (13, '2020_03_07_045944_create_pro_act_quiz_x_user', 1);
INSERT INTO `migrations` VALUES (15, '2020_06_01_075759_create_notifications_table', 2);

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `notifications_notifiable_type_notifiable_id_index`(`notifiable_type`, `notifiable_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of notifications
-- ----------------------------
INSERT INTO `notifications` VALUES ('07478c74-7037-4ad4-ac48-080e64ebe8b5', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 09:52:18', '2020-06-07 09:46:56', '2020-06-07 09:52:18');
INSERT INTO `notifications` VALUES ('07ec9dfc-e178-40a7-94e3-670ac2acadc0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 141, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, BZdfyU! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-04 06:15:28', '2020-06-04 06:15:28');
INSERT INTO `notifications` VALUES ('0848e1e8-88d0-418e-a415-371578d6ea33', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 08:47:31', '2020-06-05 08:45:21', '2020-06-05 08:47:31');
INSERT INTO `notifications` VALUES ('09204cb0-9f1d-4487-920f-bf3a6216e231', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 08:47:31', '2020-06-05 08:47:24', '2020-06-05 08:47:31');
INSERT INTO `notifications` VALUES ('0a2c6935-24cf-4529-93ba-86bfa6c79646', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 07:03:49', '2020-06-05 07:03:38', '2020-06-05 07:03:49');
INSERT INTO `notifications` VALUES ('0c53522c-75a7-4a34-ae99-3fc4cf007593', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-346\"}', '2020-06-05 12:38:43', '2020-06-05 11:25:54', '2020-06-05 12:38:43');
INSERT INTO `notifications` VALUES ('17dd9d54-aa87-42b2-9ada-29e284dfc0ba', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/coba-lagi-963\"}', '2020-06-05 08:41:52', '2020-06-05 07:46:24', '2020-06-05 08:41:52');
INSERT INTO `notifications` VALUES ('1b9d7914-fb06-4df2-8f89-f4eb1f909dbe', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Assignment\",\"body\":\"Group 1 Has Turned In The Assignment Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-05 09:16:56', '2020-06-05 09:16:48', '2020-06-05 09:16:56');
INSERT INTO `notifications` VALUES ('1cd277b8-6d20-4b46-a578-fe189eb0fc77', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 142, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, XcwHSd! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-04 06:15:28', '2020-06-04 06:15:28');
INSERT INTO `notifications` VALUES ('1fc1cb7c-186e-485d-87eb-74e74b59df63', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 06:08:38', '2020-06-05 07:06:22', '2020-06-07 06:08:38');
INSERT INTO `notifications` VALUES ('28ef0822-14a6-4d11-9e10-9bb0f907948d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New material\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New material In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 06:42:29', '2020-06-05 06:41:21', '2020-06-05 06:42:29');
INSERT INTO `notifications` VALUES ('2b9e3964-b879-44bb-82a2-78247519d9cb', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-07 06:08:36', '2020-06-05 11:27:06', '2020-06-07 06:08:36');
INSERT INTO `notifications` VALUES ('2f9ecbb5-2615-453f-a51d-3b22dbce6a2d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New material\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New material In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:38', '2020-06-05 06:41:21', '2020-06-07 06:08:38');
INSERT INTO `notifications` VALUES ('3a016609-a665-4db0-98f1-8dd37f593328', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"user\\\":{\\\"id\\\":155,\\\"fullname\\\":\\\"Group 1\\\",\\\"email\\\":\\\"group1_d055@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$K2VwT8mkGxaci6JXmtT4aeTX4XVyVAxmTlIsC4m5gf9s6frvQ6TrW\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:54:43\\\",\\\"updated_at\\\":\\\"2020-06-05 05:49:34\\\"}},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\"}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 07:01:01', '2020-06-05 07:00:50', '2020-06-05 07:01:01');
INSERT INTO `notifications` VALUES ('3c9c29b6-458b-4e46-b1f2-00f64a74bb0d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 2 ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\\/submission\"}', '2020-06-07 10:33:29', '2020-06-07 09:52:42', '2020-06-07 10:33:29');
INSERT INTO `notifications` VALUES ('3ee1d38a-41c7-48b4-94cc-9594ee331c1e', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"user\\\":{\\\"id\\\":155,\\\"fullname\\\":\\\"Group 1\\\",\\\"email\\\":\\\"group1_d055@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$K2VwT8mkGxaci6JXmtT4aeTX4XVyVAxmTlIsC4m5gf9s6frvQ6TrW\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:54:43\\\",\\\"updated_at\\\":\\\"2020-06-05 05:49:34\\\"}},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"user\\\":{\\\"id\\\":156,\\\"fullname\\\":\\\"QUgsMX\\\",\\\"email\\\":\\\"QUgsMX@sipejek.com\\\",\\\"verified\\\":1,\\\"type\\\":1,\\\"password\\\":\\\"$2y$10$lg6wGy3wnQdOzhevDYtZieXIF.0Z45aaoQo0jitjtVBG9avPUGp3K\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 03:55:40\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:40\\\"}}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:38', '2020-06-05 07:00:50', '2020-06-07 06:08:38');
INSERT INTO `notifications` VALUES ('3fd9c499-ac28-4f3f-8fc9-c996620ffb6b', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 3, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, Batman! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-04 06:15:28', '2020-06-04 06:15:28');
INSERT INTO `notifications` VALUES ('52443a23-45a4-4f8a-bf9c-ef5eb31c8903', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 06:08:37', '2020-06-05 08:40:49', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('5795b075-7278-4052-b32d-7a44cd4e5c0a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-05 12:38:43', '2020-06-05 11:27:06', '2020-06-05 12:38:43');
INSERT INTO `notifications` VALUES ('58732e1e-1ab1-4944-8151-349c4804307a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, rqOyvB! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-04 06:30:37', '2020-06-04 06:15:28', '2020-06-04 06:30:37');
INSERT INTO `notifications` VALUES ('588905bf-7a92-438d-ba2d-c6324f5e8422', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 09:52:18', '2020-06-07 09:44:29', '2020-06-07 09:52:18');
INSERT INTO `notifications` VALUES ('5b04278a-8442-497d-afca-34288c535382', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"Late Quiz Submission\",\"body\":\"Hi, Group 2! Your Quiz Has Been Graded\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\\/submission\"}', '2020-06-07 10:36:56', '2020-06-07 10:36:26', '2020-06-07 10:36:56');
INSERT INTO `notifications` VALUES ('658ce9db-615e-479e-9251-0232761261d0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Quiz Submission\",\"body\":\"Group 2 Has Turned In The Quiz Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-07 10:36:32', '2020-06-07 10:34:19', '2020-06-07 10:36:32');
INSERT INTO `notifications` VALUES ('691536d6-b4ba-48a7-8b6f-b621db5b786c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/coba-lagi-963\"}', '2020-06-07 06:08:38', '2020-06-05 07:46:24', '2020-06-07 06:08:38');
INSERT INTO `notifications` VALUES ('73b0144c-1df3-4aaf-821e-fd5090cc5226', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, abDqQm! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-04 06:30:37', '2020-06-04 06:15:28', '2020-06-04 06:30:37');
INSERT INTO `notifications` VALUES ('787754c2-4bbb-4959-a37f-f08c2c8de81f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-07 06:08:37', '2020-06-05 09:58:19', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('7aed369d-5a93-4c40-9b9e-9ed3d204bf0c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-05 08:41:52', '2020-06-05 07:47:54', '2020-06-05 08:41:52');
INSERT INTO `notifications` VALUES ('7c34b16d-d16b-4df7-83a8-5fb0be0dda3f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, dFkCMH! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-04 06:30:37', '2020-06-04 06:15:28', '2020-06-04 06:30:37');
INSERT INTO `notifications` VALUES ('83be7bea-579c-4eab-ac64-77cb4eb7f267', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-07 06:08:37', '2020-06-05 08:47:24', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('89cd80b2-d022-403e-a6c8-88b333defff1', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"Late Assignment\",\"body\":\"Group 1 Has Turned In The Assignment Late\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-lagi-coba-983\"}', '2020-06-05 12:41:04', '2020-06-05 12:40:58', '2020-06-05 12:41:04');
INSERT INTO `notifications` VALUES ('91251d15-d526-4260-80af-f5484c5ec57d', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 10:36:32', '2020-06-07 09:52:42', '2020-06-07 10:36:32');
INSERT INTO `notifications` VALUES ('9988a795-9f61-40a6-ba23-f0e8ef728437', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 1, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, OZchiY! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', '2020-06-04 06:30:38', '2020-06-04 06:15:28', '2020-06-04 06:30:38');
INSERT INTO `notifications` VALUES ('a34dc3d6-6129-4a9d-b222-804ed9288dc3', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/asd-179\"}', '2020-06-07 06:08:37', '2020-06-05 07:47:54', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('a606258f-80c8-4af0-b394-7512626a9f3a', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:37', '2020-06-05 08:41:39', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('ae6f1b8e-2b4a-4b37-a6d4-16489a1657ce', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 08:41:52', '2020-06-05 08:40:48', '2020-06-05 08:41:52');
INSERT INTO `notifications` VALUES ('af87ccff-0a8b-4368-afbf-088fdf84fe2f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 2, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, Ujangs! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-04 06:15:28', '2020-06-04 06:15:28');
INSERT INTO `notifications` VALUES ('b413278a-fed1-4632-b1b5-5f7f6cd241fd', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 08:41:18', '2020-06-05 08:41:07', '2020-06-05 08:41:18');
INSERT INTO `notifications` VALUES ('b74f424e-4975-4b89-852c-f79fd4575a04', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"Assignment Reviewed\",\"body\":\"Your Submission Has Been Reviewed\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 09:52:17', '2020-06-07 09:51:13', '2020-06-07 09:52:17');
INSERT INTO `notifications` VALUES ('c651dd53-1a92-42ec-aaf3-6dd15f4b80d0', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 06:08:37', '2020-06-05 08:37:14', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('ca1b1366-d764-424d-aa26-56df4ad12fb7', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/first-quiz--html-581\"}', '2020-06-05 10:25:20', '2020-06-05 09:58:19', '2020-06-05 10:25:20');
INSERT INTO `notifications` VALUES ('cbff181f-9ee7-49a2-b486-8b4cfb24e085', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-07 06:08:37', '2020-06-05 08:40:32', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('ce95031b-4b92-49d6-a9a6-f60012ec3457', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New assignment\",\"body\":\"Hi, Group 1! Your Teacher Has Posted New assignment In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 07:06:34', '2020-06-05 07:06:22', '2020-06-05 07:06:34');
INSERT INTO `notifications` VALUES ('dcaed3cb-d63f-4b5d-be42-50f5c4c9d3b8', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:37', '2020-06-05 08:45:21', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('e2a2c8f3-76ce-4439-969e-75feea5b8110', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 144, '{\"code\":\"NET200\",\"header\":\"New Assignment\",\"body\":\"Hi, CFRLZP! Your Teacher Has Posted New Assignment In NET200 - Developing Simple Network\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/perkenalan-networking-666\"}', NULL, '2020-06-04 06:15:28', '2020-06-04 06:15:28');
INSERT INTO `notifications` VALUES ('e4a50273-63a9-4543-9957-b5e8b3fe5d29', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 08:41:18', '2020-06-05 08:40:32', '2020-06-05 08:41:18');
INSERT INTO `notifications` VALUES ('e7a774c4-0bb5-4398-a41f-8c1229e6e2ff', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! {\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}->fullname Has Posted New Comment In {\\\"id\\\":6,\\\"title\\\":\\\"HTML : First Module\\\",\\\"slug\\\":\\\"html---first-module-50\\\",\\\"type\\\":\\\"material\\\",\\\"attachment\\\":\\\"\\\\\\/upload\\\\\\/projects\\\\\\/d055\\\\\\/material\\\\\\/454_1805885_DimasAnomPriyayi_UTSLopen.pdf\\\",\\\"maxgrade\\\":0,\\\"timer\\\":0,\\\"desc\\\":\\\"Hai, coba pelajari dulu apa itu HTML yak<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasd<br \\\\\\/>\\\\r\\\\nasdfdsfsfsdg<br \\\\\\/>\\\\r\\\\ndg<br \\\\\\/>\\\\r\\\\ndf<br \\\\\\/>\\\\r\\\\ngdfgdgfdfg\\\",\\\"phase_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 06:41:20\\\",\\\"updated_at\\\":\\\"2020-06-05 06:50:07\\\",\\\"phase\\\":{\\\"id\\\":4,\\\"title\\\":\\\"Belajar HTML\\\",\\\"date_start\\\":\\\"2020-06-05 00:00:00\\\",\\\"date_due\\\":\\\"2020-06-12 23:59:00\\\",\\\"project_id\\\":4,\\\"desc\\\":\\\"w3schools\\\",\\\"created_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"updated_at\\\":\\\"2020-06-05 06:39:05\\\",\\\"project\\\":{\\\"id\\\":4,\\\"code\\\":\\\"d055\\\",\\\"topic\\\":\\\"Ilkom\\\",\\\"title\\\":\\\"Membuat Website Sederhana\\\",\\\"desc\\\":\\\"Website adalah sebuah layanan biar ganteng\\\",\\\"hasPreOk\\\":1,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 06:37:48\\\",\\\"projectuser\\\":[{\\\"id\\\":13,\\\"user_id\\\":153,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"updated_at\\\":\\\"2020-06-05 03:18:01\\\",\\\"user\\\":{\\\"id\\\":153,\\\"fullname\\\":\\\"Dimas Anom Priyayi\\\",\\\"email\\\":\\\"priyayidimas@gmail.com\\\",\\\"verified\\\":1,\\\"type\\\":2,\\\"password\\\":\\\"$2y$10$7MvFG31\\\\\\/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq\\\",\\\"image\\\":\\\"\\\\\\/upload\\\\\\/profile\\\\\\/default.png\\\",\\\"desc\\\":null,\\\"remember_token\\\":null,\\\"created_at\\\":\\\"2020-06-05 02:39:54\\\",\\\"updated_at\\\":\\\"2020-06-05 03:07:41\\\"}},{\\\"id\\\":15,\\\"user_id\\\":155,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:54:44\\\",\\\"updated_at\\\":\\\"2020-06-05 03:54:44\\\"},{\\\"id\\\":16,\\\"user_id\\\":156,\\\"project_id\\\":4,\\\"created_at\\\":\\\"2020-06-05 03:55:41\\\",\\\"updated_at\\\":\\\"2020-06-05 03:55:41\\\"}]}}}->title\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 07:03:11', '2020-06-05 07:00:50', '2020-06-05 07:03:11');
INSERT INTO `notifications` VALUES ('e8c3bd54-6ade-47bc-998f-105bb6a83396', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:38', '2020-06-05 07:03:38', '2020-06-07 06:08:38');
INSERT INTO `notifications` VALUES ('e8e64825-d08a-4a2d-bb63-fc04e8bb168c', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Group 1 Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-07 06:08:37', '2020-06-05 08:41:07', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('f5fcc64a-4f0f-4043-89d4-0851bc888b6b', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New quiz\",\"body\":\"Hi, QUgsMX! Your Teacher Has Posted New Quiz In d055 - Membuat Website Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/cek-346\"}', '2020-06-07 06:08:36', '2020-06-05 11:25:55', '2020-06-07 06:08:36');
INSERT INTO `notifications` VALUES ('f6088f76-e520-4abe-91c8-d22070c39a53', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 153, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Dimas Anom Priyayi ! Group 1 Has Posted New Comment In Membuat Halaman HTML Sederhana\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/membuat-halaman-html-sederhana-4\"}', '2020-06-05 08:41:18', '2020-06-05 08:37:14', '2020-06-05 08:41:18');
INSERT INTO `notifications` VALUES ('f7902c47-ee30-4af7-956d-9fbdc7a6c65f', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 156, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, QUgsMX ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-07 06:08:37', '2020-06-05 08:47:41', '2020-06-07 06:08:37');
INSERT INTO `notifications` VALUES ('fb7c3d97-916e-4d58-8071-e7e6437c8ba2', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\"}', '2020-06-05 08:41:52', '2020-06-05 08:41:39', '2020-06-05 08:41:52');
INSERT INTO `notifications` VALUES ('fea3d58e-6104-46b1-b1ca-c4bd4158ddbf', 'App\\Notifications\\ProjectNotification', 'App\\model\\User', 155, '{\"code\":\"d055\",\"header\":\"New Comment\",\"body\":\"Hi, Group 1 ! Dimas Anom Priyayi Has Posted New Comment In HTML : First Module\",\"link\":\"http:\\/\\/localhost:8000\\/activity\\/detail\\/html---first-module-50\\/submission\"}', '2020-06-05 08:47:49', '2020-06-05 08:47:41', '2020-06-05 08:47:49');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pro_act_assignment_x_user
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_assignment_x_user`;
CREATE TABLE `pro_act_assignment_x_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `score` int(3) NULL DEFAULT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_assignment_x_user_user_id_index`(`user_id`) USING BTREE,
  INDEX `pro_act_assignment_x_user_activity_id_index`(`activity_id`) USING BTREE,
  CONSTRAINT `pro_act_assignment_x_user_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_act_assignment_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_assignment_x_user
-- ----------------------------
INSERT INTO `pro_act_assignment_x_user` VALUES (1, 'Monggo Baca Pak', 'file.txt', NULL, NULL, '', 3, 2, NULL, NULL);
INSERT INTO `pro_act_assignment_x_user` VALUES (3, 'Ini Pak Punten', '/upload/projects/d055/assignment/membuat-halaman-html-sederhana-4/937_ERD RR.png', '937_ERD RR.png', 100, 'Yoi Baguzz', 155, 7, '2020-06-05 08:34:10', '2020-06-07 09:51:13');
INSERT INTO `pro_act_assignment_x_user` VALUES (4, 'AAA', '/upload/projects/d055/assignment/asd-179/738_7071.jpg', '738_7071.jpg', 1, '', 155, 9, '2020-06-05 09:16:48', '2020-06-05 09:16:48');

-- ----------------------------
-- Table structure for pro_act_comment
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_comment`;
CREATE TABLE `pro_act_comment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_comment_activity_id_index`(`activity_id`) USING BTREE,
  INDEX `pro_act_comment_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `pro_act_comment_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_act_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_comment
-- ----------------------------
INSERT INTO `pro_act_comment` VALUES (1, 'Makasih Pak', 4, 1, NULL, NULL);
INSERT INTO `pro_act_comment` VALUES (14, 'Hai bapak', 6, 155, '2020-06-05 08:47:24', '2020-06-05 08:47:24');
INSERT INTO `pro_act_comment` VALUES (15, 'Hai juga', 6, 153, '2020-06-05 08:47:41', '2020-06-05 08:47:41');
INSERT INTO `pro_act_comment` VALUES (16, 'Makasih Pakk', 7, 155, '2020-06-07 09:52:42', '2020-06-07 09:52:42');

-- ----------------------------
-- Table structure for pro_act_quiz_choice
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_quiz_choice`;
CREATE TABLE `pro_act_quiz_choice`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `choice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTrue` tinyint(1) NOT NULL DEFAULT 0,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_quiz_choice_question_id_index`(`question_id`) USING BTREE,
  CONSTRAINT `pro_act_quiz_choice_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `pro_act_quiz_question` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_quiz_choice
-- ----------------------------

-- ----------------------------
-- Table structure for pro_act_quiz_question
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_quiz_question`;
CREATE TABLE `pro_act_quiz_question`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isMultiple` tinyint(1) NOT NULL DEFAULT 0,
  `maxscore` int(3) NOT NULL DEFAULT 0,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_quiz_question_activity_id_index`(`activity_id`) USING BTREE,
  CONSTRAINT `pro_act_quiz_question_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_quiz_question
-- ----------------------------
INSERT INTO `pro_act_quiz_question` VALUES (1, 'Apa itu routing?', 0, 0, '', 5, '2020-06-04 07:36:16', '2020-06-04 07:36:16');
INSERT INTO `pro_act_quiz_question` VALUES (2, 'Jelaskan fungsi routing!', 0, 0, '', 5, '2020-06-04 07:36:16', '2020-06-04 07:36:16');
INSERT INTO `pro_act_quiz_question` VALUES (3, 'Bagaimana cara kerja static routing?', 0, 0, '', 5, '2020-06-04 07:36:16', '2020-06-04 07:36:16');
INSERT INTO `pro_act_quiz_question` VALUES (7, 'Dimana Letak Layer Routing?', 0, 0, '', 5, '2020-06-04 08:27:23', '2020-06-04 08:27:39');
INSERT INTO `pro_act_quiz_question` VALUES (8, 'What is HTML?', 0, 34, '', 10, '2020-06-05 09:58:18', '2020-06-05 11:53:42');
INSERT INTO `pro_act_quiz_question` VALUES (9, 'Who found HTML?', 0, 33, '', 10, '2020-06-05 09:58:18', '2020-06-05 11:53:49');
INSERT INTO `pro_act_quiz_question` VALUES (10, 'What <p> Do?', 0, 33, '', 10, '2020-06-05 09:58:18', '2020-06-05 11:53:55');
INSERT INTO `pro_act_quiz_question` VALUES (11, 'Apasi?', 0, 20, '', 11, '2020-06-05 11:25:54', '2020-06-05 11:25:54');
INSERT INTO `pro_act_quiz_question` VALUES (12, 'Hmm?', 0, 30, '', 11, '2020-06-05 11:25:54', '2020-06-05 11:31:52');
INSERT INTO `pro_act_quiz_question` VALUES (13, 'Apa kamu?', 0, 50, '', 12, '2020-06-05 11:27:06', '2020-06-05 11:27:06');
INSERT INTO `pro_act_quiz_question` VALUES (14, 'Kenapa Sih?', 0, 50, '', 12, '2020-06-05 11:27:06', '2020-06-05 11:27:06');
INSERT INTO `pro_act_quiz_question` VALUES (16, 'Kenapa Ai Kamu', 0, 25, '', 11, '2020-06-05 11:36:39', '2020-06-05 11:36:39');

-- ----------------------------
-- Table structure for pro_act_quiz_x_user
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_quiz_x_user`;
CREATE TABLE `pro_act_quiz_x_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `score` int(3) NULL DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_quiz_x_user_question_id_index`(`question_id`) USING BTREE,
  INDEX `pro_act_quiz_x_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `pro_act_quiz_x_user_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `pro_act_quiz_question` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_act_quiz_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_quiz_x_user
-- ----------------------------
INSERT INTO `pro_act_quiz_x_user` VALUES (1, 'Hyper Text Mark-up Language', 34, 8, 155, '2020-06-05 11:55:06', '2020-06-05 11:55:06');
INSERT INTO `pro_act_quiz_x_user` VALUES (2, 'Me', 33, 9, 155, '2020-06-05 11:55:06', '2020-06-05 11:55:06');
INSERT INTO `pro_act_quiz_x_user` VALUES (3, 'To Make Paragraph', 33, 10, 155, '2020-06-05 11:55:06', '2020-06-05 11:55:06');
INSERT INTO `pro_act_quiz_x_user` VALUES (4, 'Nyolot Lu', NULL, 11, 155, '2020-06-05 11:56:50', '2020-06-05 11:56:50');
INSERT INTO `pro_act_quiz_x_user` VALUES (5, 'kenapa?', NULL, 12, 155, '2020-06-05 11:56:50', '2020-06-05 11:56:50');
INSERT INTO `pro_act_quiz_x_user` VALUES (6, 'Gak kenapa2', NULL, 16, 155, '2020-06-05 11:56:50', '2020-06-05 11:56:50');
INSERT INTO `pro_act_quiz_x_user` VALUES (7, 'Manusia', NULL, 13, 155, '2020-06-05 12:40:57', '2020-06-05 12:40:57');
INSERT INTO `pro_act_quiz_x_user` VALUES (8, 'Gak Napa2', NULL, 14, 155, '2020-06-05 12:40:57', '2020-06-05 12:40:57');
INSERT INTO `pro_act_quiz_x_user` VALUES (9, 'Hyper Text Mark-up Language', 34, 8, 156, '2020-06-07 10:34:19', '2020-06-07 10:36:26');
INSERT INTO `pro_act_quiz_x_user` VALUES (10, 'Your Mother', 0, 9, 156, '2020-06-07 10:34:19', '2020-06-07 10:36:26');
INSERT INTO `pro_act_quiz_x_user` VALUES (11, 'To create some paragraph like this <p>', 11, 10, 156, '2020-06-07 10:34:19', '2020-06-07 10:36:26');

-- ----------------------------
-- Table structure for pro_activity
-- ----------------------------
DROP TABLE IF EXISTS `pro_activity`;
CREATE TABLE `pro_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `maxscore` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `timer` int(11) NOT NULL DEFAULT 0,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `phase_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_activity_phase_id_index`(`phase_id`) USING BTREE,
  CONSTRAINT `pro_activity_phase_id_foreign` FOREIGN KEY (`phase_id`) REFERENCES `pro_phase` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_activity
-- ----------------------------
INSERT INTO `pro_activity` VALUES (2, 'First Assignment', 'b', 'assignment', '/upload/projects/NET200/assignmentb/462_Hasil Lokakarya Mumas Kemakom 2020.pdf', 100, 0, 'Hi! Lets Practice Yok', 1, NULL, '2020-06-04 08:34:57');
INSERT INTO `pro_activity` VALUES (3, 'First Quiz', 'c', 'quiz', NULL, 0, 10, '', 1, NULL, NULL);
INSERT INTO `pro_activity` VALUES (4, 'Perkenalan Networking Awal', 'perkenalan-networking-666', 'material', '/upload/projects/NET200/material/24_Picture (3).jpg', 0, 0, 'Apa <br />\r\nSi<br />\r\nIni', 1, '2020-06-03 07:05:38', '2020-06-03 12:21:26');
INSERT INTO `pro_activity` VALUES (5, 'Quiz 1 Networking Introduction', 'quiz-1-networking-979', 'quiz', NULL, 100, 0, '', 1, '2020-06-04 07:36:16', '2020-06-04 07:48:44');
INSERT INTO `pro_activity` VALUES (6, 'HTML : First Module', 'html---first-module-50', 'material', '/upload/projects/d055/material/454_1805885_DimasAnomPriyayi_UTSLopen.pdf', 0, 0, 'Hai, coba pelajari dulu apa itu HTML yak<br />\r\nasd<br />\r\nasd<br />\r\nasd<br />\r\nasd<br />\r\nasdfdsfsfsdg<br />\r\ndg<br />\r\ndf<br />\r\ngdfgdgfdfg', 4, '2020-06-05 06:41:20', '2020-06-05 06:50:07');
INSERT INTO `pro_activity` VALUES (7, 'Membuat Halaman HTML Sederhana', 'membuat-halaman-html-sederhana-4', 'assignment', '/upload/projects/d055/assignmentmembuat-halaman-html-sederhana-4/765_asdasdsa.png', 100, 0, 'Hai! Berdasarkan modul yang kemaren dikasih, buatlah halaman HTML sederhana dengan menggunakan &lt;p&gt;, &lt;h1&gt;, dan &lt;div&gt;<br />\r\n<br />\r\nSemangat!!', 4, '2020-06-05 07:06:22', '2020-06-05 07:10:51');
INSERT INTO `pro_activity` VALUES (8, 'Coba Lagi', 'coba-lagi-963', 'assignment', '/upload/projects/d055/assignment/coba-lagi-963/762_ERD RR.png', 100, 0, 'asdasd', 4, '2020-06-05 07:46:24', '2020-06-05 07:49:07');
INSERT INTO `pro_activity` VALUES (9, 'asd', 'asd-179', 'assignment', '/upload/projects/d055/assignment/asd-179/602_Hasil Lokakarya Mumas Kemakom 2020.pdf', 100, 0, 'asda', 4, '2020-06-05 07:47:54', '2020-06-05 07:47:54');
INSERT INTO `pro_activity` VALUES (10, 'First Quiz: HTML', 'first-quiz--html-581', 'quiz', NULL, 100, 0, NULL, 4, '2020-06-05 09:58:18', '2020-06-05 11:53:55');
INSERT INTO `pro_activity` VALUES (11, 'Cek', 'cek-346', 'quiz', NULL, 75, 0, NULL, 4, '2020-06-05 11:25:53', '2020-06-05 11:36:39');
INSERT INTO `pro_activity` VALUES (12, 'Cek Lagi Coba', 'cek-lagi-coba-983', 'quiz', NULL, 100, 0, NULL, 4, '2020-06-05 11:27:06', '2020-06-05 11:27:06');

-- ----------------------------
-- Table structure for pro_phase
-- ----------------------------
DROP TABLE IF EXISTS `pro_phase`;
CREATE TABLE `pro_phase`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime(0) NULL DEFAULT NULL,
  `date_due` datetime(0) NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_phase_project_id_index`(`project_id`) USING BTREE,
  CONSTRAINT `pro_phase_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_phase
-- ----------------------------
INSERT INTO `pro_phase` VALUES (1, 'Get-to-know Networking', '2020-03-07 15:59:39', '2020-03-14 15:59:43', 1, NULL, NULL, NULL);
INSERT INTO `pro_phase` VALUES (2, 'Designing a Network', '2020-03-15 16:00:11', '2020-03-20 16:00:16', 1, NULL, NULL, NULL);
INSERT INTO `pro_phase` VALUES (3, 'Building a Network', '2020-03-26 16:00:36', '2020-03-27 16:00:29', 1, NULL, NULL, NULL);
INSERT INTO `pro_phase` VALUES (4, 'Belajar HTML', '2020-06-01 00:00:00', '2020-06-02 23:59:00', 4, 'w3schools', '2020-06-05 06:39:05', '2020-06-05 09:16:24');

-- ----------------------------
-- Table structure for pro_prequestion
-- ----------------------------
DROP TABLE IF EXISTS `pro_prequestion`;
CREATE TABLE `pro_prequestion`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_prequestion_project_id_index`(`project_id`) USING BTREE,
  CONSTRAINT `pro_prequestion_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_prequestion
-- ----------------------------
INSERT INTO `pro_prequestion` VALUES (2, 'What is it made of?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (3, 'How is it made?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (4, 'Have you ever go to cyber cafe?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (5, 'How do you access the internet using the cyber cafe computer?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (6, 'Do you know computer network?', NULL, 1, '2020-03-08 09:55:03', '2020-03-08 09:55:03');
INSERT INTO `pro_prequestion` VALUES (7, 'Apa Sih Website', '', 4, '2020-06-05 03:57:31', '2020-06-05 03:57:31');
INSERT INTO `pro_prequestion` VALUES (8, 'Biar Apa Buat Website?', '', 4, '2020-06-05 04:02:07', '2020-06-05 04:02:07');

-- ----------------------------
-- Table structure for pro_prequestion_x_user
-- ----------------------------
DROP TABLE IF EXISTS `pro_prequestion_x_user`;
CREATE TABLE `pro_prequestion_x_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prequestion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_prequestion_x_user_prequestion_id_index`(`prequestion_id`) USING BTREE,
  INDEX `pro_prequestion_x_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `pro_prequestion_x_user_prequestion_id_foreign` FOREIGN KEY (`prequestion_id`) REFERENCES `pro_prequestion` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_prequestion_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_prequestion_x_user
-- ----------------------------
INSERT INTO `pro_prequestion_x_user` VALUES (2, 'Strings, Polymer, Wools', 2, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (3, 'By Tangling the Strings? I don\'t know', 3, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (4, 'No, I haven\'t', 4, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (5, 'Website adalah sebuah layanan', 7, 155, '2020-06-05 06:27:36', '2020-06-05 06:37:02');
INSERT INTO `pro_prequestion_x_user` VALUES (6, 'Biar Ganteng', 8, 155, '2020-06-05 06:37:15', '2020-06-05 06:37:15');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `hasPreOk` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES (1, 'NET200', 'Networking', 'Developing Simple Network', 'Network adalah.....\r\ncara buatnya gini\r\nbalsaldasl', 1, NULL, '2020-03-23 10:41:17');
INSERT INTO `project` VALUES (2, 'MAT200', 'Mathematics', 'Measuring Volume of Cyllinder', NULL, 0, NULL, NULL);
INSERT INTO `project` VALUES (3, 'BIO100', 'Biology', 'Examining Anatomy of A Dead Frog', NULL, 0, NULL, '2020-03-08 07:29:26');
INSERT INTO `project` VALUES (4, 'd055', 'Ilkom', 'Membuat Website Sederhana', 'Website adalah sebuah layanan biar ganteng', 1, '2020-06-05 03:18:01', '2020-06-05 06:37:48');

-- ----------------------------
-- Table structure for project_x_user
-- ----------------------------
DROP TABLE IF EXISTS `project_x_user`;
CREATE TABLE `project_x_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `project_x_user_user_id_index`(`user_id`) USING BTREE,
  INDEX `project_x_user_project_id_index`(`project_id`) USING BTREE,
  CONSTRAINT `project_x_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `project_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of project_x_user
-- ----------------------------
INSERT INTO `project_x_user` VALUES (1, 2, 1, NULL, NULL);
INSERT INTO `project_x_user` VALUES (2, 2, 2, NULL, NULL);
INSERT INTO `project_x_user` VALUES (13, 153, 4, '2020-06-05 03:18:01', '2020-06-05 03:18:01');
INSERT INTO `project_x_user` VALUES (15, 155, 4, '2020-06-05 03:54:44', '2020-06-05 03:54:44');
INSERT INTO `project_x_user` VALUES (16, 156, 4, '2020-06-05 03:55:41', '2020-06-05 03:55:41');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 1,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/upload/profile/default.png',
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 157 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'admin@sipejek.com', 1, 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/526-182a2284-238b-4edd-8899-62892b9882f1.jpg', NULL, NULL, NULL, '2020-05-28 02:28:56');
INSERT INTO `users` VALUES (2, 'Ujangs', 'ujang@sipejek.com', 1, 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/default.png', NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Batman', 'batman@sipejek.com', 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '/upload/profile/default.png', '- Usep \r\n- Siapa\r\n- Apa\r\n- Dede', NULL, NULL, NULL);
INSERT INTO `users` VALUES (153, 'Dimas Anom Priyayi', 'priyayidimas@gmail.com', 1, 2, '$2y$10$7MvFG31/CCifCMmMMdNFPeFKhBZJpcHbnGFY10EqqLEOv86Kn1FAq', '/upload/profile/744_182a2284-238b-4edd-8899-62892b9882f1.jpg', NULL, NULL, '2020-06-05 02:39:54', '2020-06-07 06:28:32');
INSERT INTO `users` VALUES (155, 'Group 1', 'group1_d055@sipejek.com', 1, 1, '$2y$10$zq/cGzFqdl8PcqUTjYK4nu5TT3kaamk.BfJ73rV0ZbNEGj0atFa5u', '/upload/profile/default.png', NULL, NULL, '2020-06-05 03:54:43', '2020-06-07 06:02:03');
INSERT INTO `users` VALUES (156, 'Group 2', 'group2_d055@sipejek.com', 1, 1, '$2y$10$HTJYCehJAXFoXzahS7PUf.q2.FjN85u7bh0LnFQhNSR2b8s3VqHxe', '/upload/profile/default.png', '- Ade<br />\r\n- Adhi<br />\r\n- Mmuull', NULL, '2020-06-05 03:55:40', '2020-06-07 06:20:55');

SET FOREIGN_KEY_CHECKS = 1;
