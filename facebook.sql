# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.26)
# Database: facebook
# Generation Time: 2020-12-16 09:26:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL DEFAULT '',
  `stream` int(1) NOT NULL DEFAULT '1',
  `oldpass` varchar(255) NOT NULL DEFAULT '',
  `newpass` varchar(255) DEFAULT NULL,
  `typevia` int(1) NOT NULL DEFAULT '1',
  `twofa` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `emailpass` varchar(255) NOT NULL DEFAULT '',
  `cookie` varchar(255) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL,
  `comment` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL COMMENT 'tiêu đề file. Ngầm định là tên gốc của file',
  `file_name` varchar(200) NOT NULL COMMENT 'Tên file không bao gồm đuôi file đã loại bỏ ký tự đặc biệt',
  `extension` varchar(50) NOT NULL COMMENT 'Đuôi file đã loại bỏ dấu chấm VD: doc, xls',
  `content` text COMMENT 'Chú thích cho file',
  `size` bigint(20) NOT NULL COMMENT 'kích thước file tính bằng byte',
  `year` int(11) NOT NULL COMMENT 'Năm upload',
  `month` varchar(2) NOT NULL COMMENT 'Tháng upload',
  `creator_id` int(11) NOT NULL COMMENT 'id user upload file',
  `owner_id` int(11) NOT NULL DEFAULT '0' COMMENT 'id user sở hữu file. Nếu bằng 0 thì ko ai sở hữu file',
  `states` tinyint(4) NOT NULL COMMENT 'trạng thái: 1 là chỉ người upload dc nhìn thấy, 0 thì ai cũng nhìn thấy',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table functions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `functions`;

CREATE TABLE `functions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `route` varchar(191) DEFAULT NULL,
  `controller` varchar(191) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '100',
  `icon` varchar(191) NOT NULL DEFAULT 'glyphicon glyphicon-menu-right',
  `state` tinyint(4) NOT NULL DEFAULT '1',
  `access` tinyint(4) NOT NULL DEFAULT '3',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `functions_route_unique` (`route`),
  UNIQUE KEY `functions_controller_unique` (`controller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `functions` WRITE;
/*!40000 ALTER TABLE `functions` DISABLE KEYS */;

INSERT INTO `functions` (`id`, `parent_id`, `name`, `description`, `route`, `controller`, `ordering`, `icon`, `state`, `access`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,0,'Hệ thống','Quản lý hệ thống',NULL,NULL,1000,'fa fa-cogs',1,1,NULL,'2018-08-06 15:26:27','2018-08-10 08:37:55'),
	(2,1,'Quản lý User','Quản lý user','users','UsersController',1001,'fa fa-users',1,1,NULL,'2018-08-06 15:27:37','2018-08-10 08:38:01'),
	(3,1,'Quản lý chức năng','Quản lý chức năng','functions','FunctionsController',1002,'fa fa-code',1,1,NULL,'2018-08-06 15:28:40','2018-08-10 08:38:07'),
	(4,1,'Quản lý Role','Quản lý roles','roles','RolesController',1003,'fa fa-plug',1,1,NULL,'2018-08-06 15:29:49','2018-08-10 08:38:11'),
	(5,1,'Phân quyền User','Quản lý phân quyền user','roleuser','RoleuserController',1004,'fa fa-key',2,1,NULL,'2018-08-06 15:32:00','2018-08-10 08:38:16'),
	(6,1,'Phân quyền chức năng','Quản lý việc phân quyền','permission','PermissionController',1005,'fa fa-lock',1,1,NULL,'2018-08-06 15:33:07','2018-08-10 08:38:21'),
	(7,1,'Quản lý files','Quản lý files','files','FileController',1006,'fa fa-file',1,1,NULL,'2018-08-08 15:27:43','2018-08-10 08:38:27'),
	(60,0,'Facebook App','Quản lý shop bán hàng',NULL,NULL,100,'fa fa-shopping-bag',1,1,NULL,'2020-02-18 01:51:08','2020-11-06 09:05:44'),
	(65,60,'Nhập data nick','Nhập nick mới vào hệ thống','accounts','AccountController',100,'fa fa-user-times',1,1,NULL,'2020-11-07 04:09:26','2020-11-07 04:09:26'),
	(66,60,'Work','WorkController','work','WorkController',100,'fa fa-wrench',1,1,NULL,'2020-11-14 07:25:10','2020-11-14 07:30:42'),
	(67,60,'Cài đặt','Cài đặt','settings','SettingController',100,'glyphicon glyphicon-menu-right',1,1,NULL,'2020-11-18 14:41:18','2020-11-18 14:41:18'),
	(68,60,'Đăng Ký Lịch','Đăng lý lịch làm việc','schedule','ScheduleController',100,'fa fa-clock-o',1,1,NULL,'2020-12-05 13:05:49','2020-12-05 13:05:49');

/*!40000 ALTER TABLE `functions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2020_01_30_015237_entrust_setup_tables',1),
	(5,'2020_02_18_020042_create_categories_table',2),
	(6,'2020_02_18_031713_create_products_table',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(33,1),
	(62,1),
	(62,2);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(32,'View-60','View 60','Allow View 60','2020-11-07 04:24:01','2020-11-07 04:24:01'),
	(33,'View-65','View 65','Allow View 65','2020-11-07 04:24:03','2020-11-07 04:24:03'),
	(34,'Add-65','Add 65','Allow Add 65','2020-11-07 04:24:05','2020-11-07 04:24:05'),
	(35,'Edit-65','Edit 65','Allow Edit 65','2020-11-07 04:24:06','2020-11-07 04:24:06'),
	(36,'Delete-65','Delete 65','Allow Delete 65','2020-11-07 04:24:08','2020-11-07 04:24:08'),
	(37,'View-1','View 1','Allow View 1','2020-11-07 04:24:10','2020-11-07 04:24:10'),
	(38,'View-2','View 2','Allow View 2','2020-11-07 04:24:11','2020-11-07 04:24:11'),
	(39,'Add-2','Add 2','Allow Add 2','2020-11-07 04:24:12','2020-11-07 04:24:12'),
	(40,'Edit-2','Edit 2','Allow Edit 2','2020-11-07 04:24:12','2020-11-07 04:24:12'),
	(41,'Delete-2','Delete 2','Allow Delete 2','2020-11-07 04:24:13','2020-11-07 04:24:13'),
	(42,'Delete-3','Delete 3','Allow Delete 3','2020-11-07 04:24:14','2020-11-07 04:24:14'),
	(43,'Edit-3','Edit 3','Allow Edit 3','2020-11-07 04:24:15','2020-11-07 04:24:15'),
	(44,'Add-3','Add 3','Allow Add 3','2020-11-07 04:24:15','2020-11-07 04:24:15'),
	(45,'View-3','View 3','Allow View 3','2020-11-07 04:24:16','2020-11-07 04:24:16'),
	(46,'View-4','View 4','Allow View 4','2020-11-07 04:24:18','2020-11-07 04:24:18'),
	(47,'Add-4','Add 4','Allow Add 4','2020-11-07 04:24:18','2020-11-07 04:24:18'),
	(48,'Edit-4','Edit 4','Allow Edit 4','2020-11-07 04:24:19','2020-11-07 04:24:19'),
	(49,'Delete-4','Delete 4','Allow Delete 4','2020-11-07 04:24:20','2020-11-07 04:24:20'),
	(50,'Delete-5','Delete 5','Allow Delete 5','2020-11-07 04:24:21','2020-11-07 04:24:21'),
	(51,'Edit-5','Edit 5','Allow Edit 5','2020-11-07 04:24:21','2020-11-07 04:24:21'),
	(52,'Add-5','Add 5','Allow Add 5','2020-11-07 04:24:22','2020-11-07 04:24:22'),
	(53,'View-5','View 5','Allow View 5','2020-11-07 04:24:23','2020-11-07 04:24:23'),
	(54,'View-6','View 6','Allow View 6','2020-11-07 04:24:24','2020-11-07 04:24:24'),
	(55,'Add-6','Add 6','Allow Add 6','2020-11-07 04:24:24','2020-11-07 04:24:24'),
	(56,'Edit-6','Edit 6','Allow Edit 6','2020-11-07 04:24:25','2020-11-07 04:24:25'),
	(57,'Delete-6','Delete 6','Allow Delete 6','2020-11-07 04:24:26','2020-11-07 04:24:26'),
	(58,'Delete-7','Delete 7','Allow Delete 7','2020-11-07 04:24:27','2020-11-07 04:24:27'),
	(59,'Edit-7','Edit 7','Allow Edit 7','2020-11-07 04:24:27','2020-11-07 04:24:27'),
	(60,'Add-7','Add 7','Allow Add 7','2020-11-07 04:24:28','2020-11-07 04:24:28'),
	(61,'View-7','View 7','Allow View 7','2020-11-07 04:24:29','2020-11-07 04:24:29'),
	(62,'View-69','View 69','Allow View 69','2020-12-10 08:37:23','2020-12-10 08:37:23');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;

INSERT INTO `role_user` (`user_id`, `role_id`)
VALUES
	(1,1),
	(1,2);

/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'admin','Admin','Admin','2020-01-30 06:44:52','2020-01-30 06:44:52',NULL),
	(2,'Owner','Owner','Chủ Website','2020-02-18 01:58:06','2020-11-07 03:10:03',NULL),
	(3,'User','User','User bình thường','2020-11-07 10:12:09','2020-11-07 10:12:09',NULL);

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table schedules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `schedules`;

CREATE TABLE `schedules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `date` date NOT NULL,
  `time` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`)
VALUES
	(1,'message',NULL,NULL,'2020-11-28 11:36:29'),
	(2,'stream','1',NULL,'2020-11-28 03:11:22'),
	(3,'account','1',NULL,'2020-12-10 10:08:09');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `display_name`, `avatar`, `facebook`, `phone`, `password`, `deleted_at`, `email_verified_at`, `remember_token`, `state`, `created_at`, `updated_at`)
VALUES
	(1,'admin','admin@admin.com','Admin',NULL,NULL,1,'$2y$10$bPFfxwmOLkoF6SBy9kNSFO1MqZ1c446FSzhrC43iWFOarm7eqDSbu',NULL,NULL,NULL,1,'2020-01-30 04:40:44','2020-12-16 09:24:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
