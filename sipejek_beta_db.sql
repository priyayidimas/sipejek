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

 Date: 08/03/2020 19:41:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
CREATE DATABASE sipejek_beta_db;
USE sipejek_beta_db;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

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
  `grade` int(3) NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_assignment_x_user_user_id_index`(`user_id`) USING BTREE,
  INDEX `pro_act_assignment_x_user_activity_id_index`(`activity_id`) USING BTREE,
  CONSTRAINT `pro_act_assignment_x_user_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_act_assignment_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_assignment_x_user
-- ----------------------------
INSERT INTO `pro_act_assignment_x_user` VALUES (1, 'Monggo Baca Pak', 'file.txt', NULL, 3, 2, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_comment
-- ----------------------------
INSERT INTO `pro_act_comment` VALUES (1, 'Makasih Pak', 1, 3, NULL, NULL);

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
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_quiz_question_activity_id_index`(`activity_id`) USING BTREE,
  CONSTRAINT `pro_act_quiz_question_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `pro_activity` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_quiz_question
-- ----------------------------

-- ----------------------------
-- Table structure for pro_act_quiz_x_user
-- ----------------------------
DROP TABLE IF EXISTS `pro_act_quiz_x_user`;
CREATE TABLE `pro_act_quiz_x_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_act_quiz_x_user_question_id_index`(`question_id`) USING BTREE,
  INDEX `pro_act_quiz_x_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `pro_act_quiz_x_user_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `pro_act_quiz_question` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pro_act_quiz_x_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_act_quiz_x_user
-- ----------------------------

-- ----------------------------
-- Table structure for pro_activity
-- ----------------------------
DROP TABLE IF EXISTS `pro_activity`;
CREATE TABLE `pro_activity`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `timer` int(11) NOT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_activity_phase_id_index`(`phase_id`) USING BTREE,
  CONSTRAINT `pro_activity_phase_id_foreign` FOREIGN KEY (`phase_id`) REFERENCES `pro_phase` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_activity
-- ----------------------------
INSERT INTO `pro_activity` VALUES (1, 'First Module', 'material', 'file.txt', 0, '', 1, NULL, NULL);
INSERT INTO `pro_activity` VALUES (2, 'First Assignment', 'assignment', NULL, 0, '', 1, NULL, NULL);
INSERT INTO `pro_activity` VALUES (3, 'First Quiz', 'quiz', NULL, 10, '', 1, NULL, NULL);

-- ----------------------------
-- Table structure for pro_phase
-- ----------------------------
DROP TABLE IF EXISTS `pro_phase`;
CREATE TABLE `pro_phase`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` timestamp(0) NULL DEFAULT NULL,
  `date_due` timestamp(0) NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_phase_project_id_index`(`project_id`) USING BTREE,
  CONSTRAINT `pro_phase_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_phase
-- ----------------------------
INSERT INTO `pro_phase` VALUES (1, 'Get-to-know Networking', '2020-03-07 15:59:39', '2020-03-14 15:59:43', 1, NULL, NULL, NULL);
INSERT INTO `pro_phase` VALUES (2, 'Designing a Network', '2020-03-15 16:00:11', '2020-03-20 16:00:16', 1, NULL, NULL, NULL);
INSERT INTO `pro_phase` VALUES (3, 'Building a Network', '2020-03-26 16:00:36', '2020-03-27 16:00:29', 1, NULL, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_prequestion
-- ----------------------------
INSERT INTO `pro_prequestion` VALUES (1, 'Do you know a net?', NULL, 1, NULL, '2020-03-08 09:37:13');
INSERT INTO `pro_prequestion` VALUES (2, 'What is it made of?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (3, 'How is it made?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (4, 'Have you ever go to cyber cafe?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (5, 'How do you access the internet using the cyber cafe computer?', NULL, 1, NULL, NULL);
INSERT INTO `pro_prequestion` VALUES (6, 'Do you know computer network?', NULL, 1, '2020-03-08 09:55:03', '2020-03-08 09:55:03');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pro_prequestion_x_user
-- ----------------------------
INSERT INTO `pro_prequestion_x_user` VALUES (1, 'Yes, I do', 1, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (2, 'Strings, Polymer, Wools', 2, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (3, 'By Tangling the Strings? I don\'t know', 3, 3, NULL, NULL);
INSERT INTO `pro_prequestion_x_user` VALUES (4, 'No, I haven\'t', 4, 3, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES (1, 'NET200', 'Networking', 'Developing Simple Network', NULL, 0, NULL, NULL);
INSERT INTO `project` VALUES (2, 'MAT200', 'Mathematics', 'Measuring Volume of Cyllinder', NULL, 0, NULL, NULL);
INSERT INTO `project` VALUES (3, 'BIO100', 'Biology', 'Examining Anatomy of A Dead Frog', NULL, 0, NULL, '2020-03-08 07:29:26');

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of project_x_user
-- ----------------------------
INSERT INTO `project_x_user` VALUES (1, 2, 1, NULL, NULL);
INSERT INTO `project_x_user` VALUES (2, 2, 2, NULL, NULL);
INSERT INTO `project_x_user` VALUES (3, 2, 3, NULL, NULL);
INSERT INTO `project_x_user` VALUES (4, 3, 1, NULL, NULL);
INSERT INTO `project_x_user` VALUES (5, 3, 2, NULL, NULL);
INSERT INTO `project_x_user` VALUES (6, 136, 1, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `project_x_user` VALUES (7, 137, 1, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `project_x_user` VALUES (8, 138, 1, '2020-03-08 10:52:35', '2020-03-08 10:52:35');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 141 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'admin@sipejek.com', 3, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '708-Foto_Anom.jpg', NULL, NULL, NULL, '2020-03-08 06:22:16');
INSERT INTO `users` VALUES (2, 'Ujangs', 'ujang@sipejek.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Batman', 'batman@sipejek.com', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', '- Usep \r\n- Siapa\r\n- Apa\r\n- Dede', NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'Dimas Anom Priyayi', 'dimas@pejek.com', 2, '$2y$10$8Obyosz9EatG8HH5HrMqBOOeW9j3BgJAR3OOrPF.mSXz1sg7VegjC', 'default.png', NULL, NULL, '2020-03-07 11:25:04', '2020-03-07 11:25:04');
INSERT INTO `users` VALUES (5, 'Willa Homenick', 'chayes@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'eQ5YJPO7PS', '2020-03-08 06:34:49', '2020-03-08 06:34:49');
INSERT INTO `users` VALUES (6, 'Roberto Lang', 'fhahn@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ZP8WjPSM7W', '2020-03-08 06:34:49', '2020-03-08 06:34:49');
INSERT INTO `users` VALUES (7, 'Delfina Doyle', 'amos.mcclure@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'pgvwQObV30', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (8, 'Althea Balistreri', 'gail08@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '4ehuji2Aqo', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (9, 'Dr. Lavina Monahan I', 'fkuhlman@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'p9BUONYXa4', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (10, 'Cathryn Bergnaum MD', 'billie.blick@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ZjsHuEis4C', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (11, 'Jacynthe King', 'powlowski.victoria@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'qU1ynfXKik', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (12, 'Mr. Regan Hickle IV', 'haag.river@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'i4opbKtM67', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (13, 'Mauricio Mills', 'moen.omari@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'xyiOPtAFpG', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (14, 'Maryjane Nolan', 'istehr@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'dXW2Zc6cUm', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (15, 'Paxton Wisozk', 'gordon89@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'wyRVLwaF5C', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (16, 'Muhammad Buckridge', 'qkunde@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'WY1uZw27Ta', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (17, 'Edmund Sipes', 'dianna.langosh@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ZR3zVcJ2FJ', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (18, 'Mrs. Lela Heathcote', 'cecil63@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'O18Lw9NaQ2', '2020-03-08 06:34:50', '2020-03-08 06:34:50');
INSERT INTO `users` VALUES (19, 'Kathryne Jerde', 'edwin.ebert@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'akAOMGDgrh', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (20, 'Mrs. Noelia Lueilwitz Sr.', 'lkoepp@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'DzHou41f3S', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (21, 'Malachi VonRueden', 'evelyn90@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '0e3GhtAXDQ', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (22, 'Owen Simonis', 'tarmstrong@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'yqncVuR4m6', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (23, 'Adell Pfeffer', 'dalton79@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'JiXCgElcOW', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (24, 'Maximus Renner', 'noemie35@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'iupkRLKIIq', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (25, 'Mr. Wilfred Hammes', 'ostark@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'MY4KmveSNH', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (26, 'Freda Mayer', 'kheathcote@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ya5LmBveqi', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (27, 'Ms. Nikita Toy', 'rod.funk@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'DTwvsu2qCg', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (28, 'Reginald Will', 'grant.stark@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'eKJl7tWInq', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (29, 'Myra Emard', 'marina98@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '0AskMTsAsC', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (30, 'Deborah Kautzer', 'akeem.okeefe@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'K1sYksG5vJ', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (31, 'Garnett Cremin', 'cmarks@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'pESTEi6tuu', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (32, 'Ansel Wolf', 'freddy.bradtke@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'bGJAQyYZCr', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (33, 'Alexandre Ondricka', 'lilyan.jerde@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'DGhN1sXcRM', '2020-03-08 06:34:51', '2020-03-08 06:34:51');
INSERT INTO `users` VALUES (34, 'Dena Heidenreich', 'weimann.onie@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '6w6rd6SjA2', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (35, 'Mr. Payton Monahan', 'feil.jayda@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'KhpgfqwFdi', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (36, 'Carlo Reichel', 'sipes.cali@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'cVGgvpo05S', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (37, 'Mafalda Mante', 'bogan.kenya@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Nc90VSN90c', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (38, 'Morgan Casper', 'wintheiser.ewald@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'UmRJwYwbET', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (39, 'Prof. Parker Hermiston', 'mohammad86@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'w15Gr5GJ5W', '2020-03-08 06:36:04', '2020-03-08 06:36:04');
INSERT INTO `users` VALUES (40, 'Miss Samantha Lehner III', 'deshaun.kutch@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'k22CtchnOW', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (41, 'Fernando Nader', 'marta33@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'OWFlvvovej', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (42, 'Charley Senger', 'willard.paucek@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'FOL2XnZ16V', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (43, 'Norwood Bode', 'brianne99@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'b86v8XjnWq', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (44, 'Dr. Georgette Tremblay', 'aliya77@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'aWiDgSdzQ1', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (45, 'Mr. Robb Gaylord Jr.', 'kara.steuber@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'iZvFS1n0Hw', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (46, 'Chase Corwin Jr.', 'djohnson@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '9tpnxiw2r5', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (47, 'Dr. Florian Pagac', 'haltenwerth@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'AQkeQWMxt8', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (48, 'Lloyd Kemmer Sr.', 'ukunde@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'LdByf4awR1', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (49, 'Margarete Hauck', 'keebler.ned@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Zw73ZcblEL', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (50, 'Prof. Noelia Stark Jr.', 'kennedy52@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'vX2vzGI86K', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (51, 'Ida Wolff', 'maddison.dicki@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ZAIvOQ4dcI', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (52, 'Anika Huels', 'felipe.greenholt@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'FRUwDVcHAg', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (53, 'Christa Dooley', 'hessel.eric@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '0dUwqBcHsq', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (54, 'Cristobal Erdman', 'ithompson@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'cLup4bWRjc', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (55, 'Colleen Lemke DVM', 'george76@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'kri7llMkhQ', '2020-03-08 06:36:05', '2020-03-08 06:36:05');
INSERT INTO `users` VALUES (56, 'Zane Kerluke MD', 'rglover@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'BxLm1pgExF', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (57, 'Mr. Henry Von', 'aurelia.fritsch@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'UacBhsRf5R', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (58, 'Javier Hegmann Jr.', 'marian.strosin@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'fi3f8KdZb9', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (59, 'Dandre Rath II', 'homenick.norene@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'tW2YCmztYB', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (60, 'Karina Douglas', 'galtenwerth@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'BAGY8Zo1VK', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (61, 'Prof. Dovie Hoeger', 'dach.nicolette@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'h9BQHamtCX', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (62, 'Ora Wolf', 'koepp.ramiro@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'QfQ7hCv6bj', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (63, 'Prof. Kacey Lowe MD', 'bmarquardt@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '5D8HhZGsuX', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (64, 'Mrs. Dolores Torphy', 'ernie.dicki@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'VsnpX4Agi1', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (65, 'Mrs. Berneice Rutherford V', 'davion.trantow@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'TuG0S5KF67', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (66, 'Isabelle Rath', 'ohara.princess@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'amnfjGLZ8H', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (67, 'Prof. Rosemary Ondricka II', 'raina.feil@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'gcmDkm4K0l', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (68, 'Michale Block', 'thiel.cali@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'CMsTDLIgXP', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (69, 'Dwight Heidenreich', 'mraz.ford@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'lQZtGNg0Co', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (70, 'Miss Kathleen Ward PhD', 'bgoldner@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'dkBnBx1OU7', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (71, 'Andre Hoppe', 'jratke@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'lYoNWPS2p7', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (72, 'Tyrell Ondricka Sr.', 'legros.dwight@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'zBI2gIPCwe', '2020-03-08 06:36:06', '2020-03-08 06:36:06');
INSERT INTO `users` VALUES (73, 'Walton Schinner', 'lexie04@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '8uS39WdDic', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (74, 'Kobe O\'Keefe', 'charley.smitham@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'b6SK44Ixpt', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (75, 'Ms. Thalia Stamm II', 'boyer.jaqueline@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'vKZoEG9EeL', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (76, 'Dr. Cathryn Mayer', 'tremayne.corkery@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '1JfdnTao5X', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (77, 'Ms. Mozell Rolfson', 'austen.hills@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'llyGomSA2s', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (78, 'Prof. Murphy Gutmann', 'dallin.bogisich@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '28FCYcZToa', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (79, 'Miss Pat White', 'wanda.bernhard@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'c6WIJq1tr9', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (80, 'Ms. Camille Kuvalis II', 'tkunze@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'BUH8VAuoPf', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (81, 'Dr. Joany Moen', 'concepcion.gutmann@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'sWD7a2Ej43', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (82, 'Jacquelyn Krajcik Sr.', 'caleb12@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'eUX1mfMANR', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (83, 'Jacey Fay', 'akeem11@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'OUVriqlxfZ', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (84, 'Laney Bahringer', 'metz.chelsie@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'GSTYPVU4Yn', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (85, 'Mr. Myron Thiel DDS', 'schumm.alfreda@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'gFWOtqCbZt', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (86, 'Roma Senger', 'jacklyn89@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '3PUmbjohLX', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (87, 'Angelo Pouros', 'egottlieb@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'HYruz5Hyjt', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (88, 'Candice Yundt', 'cody63@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'UVkoA5tELa', '2020-03-08 06:36:07', '2020-03-08 06:36:07');
INSERT INTO `users` VALUES (89, 'Dr. Holden Greenholt', 'florencio.sipes@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'mE32ge5YOl', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (90, 'Dr. Beverly Wolff', 'torphy.jaylan@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'W4hkfYkfZB', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (91, 'Burdette Corkery MD', 'denesik.brooklyn@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '2PaFP3eEnC', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (92, 'Lorna Stehr MD', 'reggie.auer@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'gy99iO7MZi', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (93, 'Yasmine Waelchi', 'hahn.benton@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'qUuw3SJutE', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (94, 'Ayana Gerlach Sr.', 'fwintheiser@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Mo7rmQ9FXi', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (95, 'Candace Rice III', 'miller92@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 't8IuoWHQXk', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (96, 'Hortense Walker', 'yleannon@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'IfD9BbvebX', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (97, 'Jessika DuBuque', 'zschaden@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '8D88xBvQ4z', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (98, 'Mr. Clifford Blanda', 'murray.schulist@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '0OP0eyEsh1', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (99, 'Verdie Green', 'mario.nienow@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'TiVvUXNibh', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (100, 'Neva Lakin', 'henri.beier@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Lx8O62duDw', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (101, 'Silas Block', 'ines76@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Yxate1QUdZ', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (102, 'Kenyatta Jacobson', 'melody48@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'A9f5vyMP2L', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (103, 'Mrs. Guadalupe Grady V', 'slesch@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'pNKX4jozvg', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (104, 'Lonie Romaguera Sr.', 'daisha12@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'u7vA7tjF2r', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (105, 'Janae Strosin DDS', 'rgusikowski@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'HJv2JdLGey', '2020-03-08 06:36:08', '2020-03-08 06:36:08');
INSERT INTO `users` VALUES (106, 'Miss Kaya Orn MD', 'iflatley@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'o001jjAVFq', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (107, 'Judge Reichert', 'collins.edward@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'oBcyT0cTfc', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (108, 'Dr. Agustina Bogan MD', 'alice.johns@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'YGfappdVMH', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (109, 'Kenton Sanford', 'roob.colleen@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'DghQUtidf1', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (110, 'Carolyn Hansen Jr.', 'vidal.watsica@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'qiTvSR6Fxr', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (111, 'Gussie Jerde', 'mmertz@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'uRkZMHWPxm', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (112, 'Mrs. Camille Howe', 'krajcik.winston@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '3z1xXdOdoz', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (113, 'Horacio Bashirian I', 'lroberts@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Cll2CJBhce', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (114, 'Guadalupe Runte PhD', 'brooke.tremblay@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'jyKDtj9N4u', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (115, 'Anais Rosenbaum V', 'kkemmer@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'l0XUW9CFct', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (116, 'Leonard Lang', 'braun.otilia@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '1Th08RWSU6', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (117, 'Nick Ernser', 'sweber@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'CbCAOXXqT2', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (118, 'Cullen Hahn', 'zwolff@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'q8c6dWNZPf', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (119, 'Rowland Quigley', 'royce24@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'COcoVtg4Qf', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (120, 'Miss Asia McCullough III', 'arnold.bernier@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'hHdFv1fnRN', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (121, 'Malika Kuvalis', 'aiden33@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'iqBdsQdz8G', '2020-03-08 06:36:09', '2020-03-08 06:36:09');
INSERT INTO `users` VALUES (122, 'Ms. Aglae Goldner', 'paucek.keara@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'w66CuACYQL', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (123, 'Prof. Carlotta Greenfelder II', 'wfunk@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '6P706CNTOu', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (124, 'Dr. Ulices Hettinger IV', 'homenick.queen@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'Nen1rHrExu', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (125, 'Etha Predovic Sr.', 'ygoodwin@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '3K1TevBPLr', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (126, 'Dr. Maximo Haag', 'isac.will@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'rQ51Tx97Ep', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (127, 'Mrs. Ciara VonRueden Sr.', 'bogan.mavis@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'DCjj220MbV', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (128, 'Marques Durgan IV', 'thompson.alfred@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'pphp3np19u', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (129, 'Natalia Walsh', 'littel.jett@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, '0JSfilOG2D', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (130, 'Magnus Blanda', 'wcrist@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'mFmaRTVWwV', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (131, 'Dulce Lubowitz Sr.', 'stiedemann.garnett@example.com', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'ITCboeJRQI', '2020-03-08 06:36:10', '2020-03-08 06:36:10');
INSERT INTO `users` VALUES (132, 'Shirley Nikolaus', 'kadin42@example.org', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'B3DjZfpluU', '2020-03-08 06:36:11', '2020-03-08 06:36:11');
INSERT INTO `users` VALUES (133, 'Hipolito Rau', 'merlin20@example.net', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.png', NULL, 'MoHRDJQoFH', '2020-03-08 06:36:11', '2020-03-08 06:36:11');
INSERT INTO `users` VALUES (134, 'hyzWMu', 'hyzWMu@sipejek.com', 1, '$2y$10$ufCNh4FQg4B9Js0fBtCpe.XkCCpzL2ZhASSINJHQ33HuzpV6MYZVm', 'default.png', NULL, NULL, '2020-03-08 10:51:21', '2020-03-08 10:51:21');
INSERT INTO `users` VALUES (135, 'gSSanV', 'gSSanV@sipejek.com', 1, '$2y$10$CdaJVAkb6n3/YI4pkC0cSeFbmoNEbx0loBIU25/nN4p//6fmm4lL.', 'default.png', NULL, NULL, '2020-03-08 10:51:21', '2020-03-08 10:51:21');
INSERT INTO `users` VALUES (136, 'abDqQm', 'abDqQm@sipejek.com', 1, '$2y$10$3QjuEEc0beIkRJnxqrZIG.k9wKR3iTDoAbTzU51PU57kaYliXtOz6', 'default.png', NULL, NULL, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `users` VALUES (137, 'dFkCMH', 'dFkCMH@sipejek.com', 1, '$2y$10$npmzQaGUFWJHzTtKklyj2uzSKzVMH6f7I.AeW7vEHpZk4CyOSHmQS', 'default.png', NULL, NULL, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `users` VALUES (138, 'OZchiY', 'OZchiY@sipejek.com', 1, '$2y$10$L.ghB6D4xo5w3NRqJtd05.dm1r/jDnRJ4rZ.xYJwNZrXJY5PXT2Ty', 'default.png', NULL, NULL, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `users` VALUES (139, 'xbUrzV', 'xbUrzV@sipejek.com', 1, '$2y$10$EzNXUe6/79zXDbBBDOnFv.q8xeeByg5HG7f8iZi/A0Qt4Md9E0tcu', 'default.png', NULL, NULL, '2020-03-08 10:52:35', '2020-03-08 10:52:35');
INSERT INTO `users` VALUES (140, 'CPXUdC', 'CPXUdC@sipejek.com', 1, '$2y$10$DMzUNli729FHJq/PYfWlJOy6ofqoM4KmvGJCZpHIzXslPsHUndjtu', 'default.png', NULL, NULL, '2020-03-08 10:52:36', '2020-03-08 10:52:36');

SET FOREIGN_KEY_CHECKS = 1;
