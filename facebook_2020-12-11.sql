# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.26)
# Database: facebook
# Generation Time: 2020-12-11 03:30:04 +0000
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

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;

INSERT INTO `accounts` (`id`, `uid`, `stream`, `oldpass`, `newpass`, `typevia`, `twofa`, `email`, `emailpass`, `cookie`, `useragent`, `comment`, `status`, `user_id`, `created_at`, `updated_at`)
VALUES
	(5,'100001616692026',1,'bell1997','asdfg3445',1,NULL,'vladislavpetukhov5na@hotmail.com1','Trong@123','123','SM-A515F Build/UC Browser7.4.354.517/52/723/UCWEB Mobile',NULL,2,1,'2020-11-13 10:02:42','2020-12-10 10:23:26'),
	(9,'100002470178984',1,'versetti83','sdfghfgh546',2,NULL,'maksimsitnikovurv@hotmail.com','Trong@123','1','SM-G955F Build/UC Browser6.3.594.566/98/622/UCWEB Mobil',NULL,7,1,'2020-11-13 10:02:51','2020-12-10 10:18:07'),
	(10,'100002077574961',1,'perkins94','kasdfu12',1,NULL,'artemzakharov1jd@hotmail.com','Trong@123','1','NokiaE72-3/UC Browser5.8.431.628/57/979/UCWEB Mobile',NULL,4,1,'2020-11-13 10:03:49','2020-12-10 10:25:22'),
	(11,'100001616692026',1,'bell1997','asdfg3445',1,NULL,'vladislavpetukhov5na@hotmail.com','Trong@123','1','SM-A515F Build/UC Browser7.4.354.517/52/723/UCWEB Mobile',NULL,2,1,'2020-11-13 10:03:49','2020-12-10 10:25:35'),
	(12,'100002470178984',1,'versetti83','sdfghfgh546',1,NULL,'maksimsitnikovurv@hotmail.com','Trong@123','1','SM-G955F Build/UC Browser6.3.594.566/98/622/UCWEB Mobil',NULL,1,NULL,'2020-11-13 10:03:49','2020-12-10 10:23:04');

/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `title`, `file_name`, `extension`, `content`, `size`, `year`, `month`, `creator_id`, `owner_id`, `states`, `created_at`, `updated_at`)
VALUES
	(1,'digital_01-214x214.jpg','1583597620-digital-01-214x214','jpg',NULL,30414,2020,'03',1,1,1,'2020-03-07 16:13:40','2020-03-07 16:13:40'),
	(2,'digital_01.jpg','1583597620-digital-01','jpg',NULL,79955,2020,'03',1,1,1,'2020-03-07 16:13:40','2020-03-07 16:13:40'),
	(3,'digital_02.jpg','1583597620-digital-02','jpg',NULL,62374,2020,'03',1,1,1,'2020-03-07 16:13:40','2020-03-07 16:13:40'),
	(4,'digital_03.jpg','1583597620-digital-03','jpg',NULL,64279,2020,'03',1,1,1,'2020-03-07 16:13:40','2020-03-07 16:13:40'),
	(5,'digital_04.jpg','1583597620-digital-04','jpg',NULL,73099,2020,'03',1,1,1,'2020-03-07 16:13:40','2020-03-07 16:13:40'),
	(6,'digital_05.jpg','1583597632-digital-05','jpg',NULL,77748,2020,'03',1,1,1,'2020-03-07 16:13:52','2020-03-07 16:13:52'),
	(7,'digital_06.jpg','1583597639-digital-06','jpg',NULL,67230,2020,'03',1,1,1,'2020-03-07 16:13:59','2020-03-07 16:13:59'),
	(8,'digital_07.jpg','1583597639-digital-07','jpg',NULL,65199,2020,'03',1,1,1,'2020-03-07 16:13:59','2020-03-07 16:13:59'),
	(9,'digital_08.jpg','1583597639-digital-08','jpg',NULL,129350,2020,'03',1,1,1,'2020-03-07 16:13:59','2020-03-07 16:13:59'),
	(10,'digital_09.jpg','1583597639-digital-09','jpg',NULL,106773,2020,'03',1,1,1,'2020-03-07 16:13:59','2020-03-07 16:13:59'),
	(11,'digital_10.jpg','1583597639-digital-10','jpg',NULL,56590,2020,'03',1,1,1,'2020-03-07 16:13:59','2020-03-07 16:13:59'),
	(12,'digital_11.jpg','1583597648-digital-11','jpg',NULL,55921,2020,'03',1,1,1,'2020-03-07 16:14:08','2020-03-07 16:14:08'),
	(13,'digital_12.jpg','1583597648-digital-12','jpg',NULL,55685,2020,'03',1,1,1,'2020-03-07 16:14:08','2020-03-07 16:14:08'),
	(14,'digital_13.jpg','1583597648-digital-13','jpg',NULL,52602,2020,'03',1,1,1,'2020-03-07 16:14:08','2020-03-07 16:14:08'),
	(15,'digital_14.jpg','1583597648-digital-14','jpg',NULL,88787,2020,'03',1,1,1,'2020-03-07 16:14:08','2020-03-07 16:14:08'),
	(16,'digital_15.jpg','1583597648-digital-15','jpg',NULL,71810,2020,'03',1,1,1,'2020-03-07 16:14:08','2020-03-07 16:14:08'),
	(17,'digital_16.jpg','1583597656-digital-16','jpg',NULL,72437,2020,'03',1,1,1,'2020-03-07 16:14:16','2020-03-07 16:14:16'),
	(18,'digital_17.jpg','1583597656-digital-17','jpg',NULL,45192,2020,'03',1,1,1,'2020-03-07 16:14:16','2020-03-07 16:14:16'),
	(19,'digital_18.jpg','1583597656-digital-18','jpg',NULL,70165,2020,'03',1,1,1,'2020-03-07 16:14:16','2020-03-07 16:14:16'),
	(20,'digital_19.jpg','1583597656-digital-19','jpg',NULL,100656,2020,'03',1,1,1,'2020-03-07 16:14:16','2020-03-07 16:14:16'),
	(21,'digital_20.jpg','1583597656-digital-20','jpg',NULL,96916,2020,'03',1,1,1,'2020-03-07 16:14:16','2020-03-07 16:14:16'),
	(22,'digital_21.jpg','1583597669-digital-21','jpg',NULL,82146,2020,'03',1,1,1,'2020-03-07 16:14:29','2020-03-07 16:14:29'),
	(23,'digital_22.jpg','1583597669-digital-22','jpg',NULL,60478,2020,'03',1,1,1,'2020-03-07 16:14:29','2020-03-07 16:14:29'),
	(24,'fashion_01.jpg','1583597677-fashion-01','jpg',NULL,93724,2020,'03',1,1,1,'2020-03-07 16:14:37','2020-03-07 16:14:37'),
	(25,'fashion_02.jpg','1583597677-fashion-02','jpg',NULL,95119,2020,'03',1,1,1,'2020-03-07 16:14:37','2020-03-07 16:14:37'),
	(26,'fashion_03.jpg','1583597677-fashion-03','jpg',NULL,141835,2020,'03',1,1,1,'2020-03-07 16:14:37','2020-03-07 16:14:37'),
	(27,'fashion_04.jpg','1583597677-fashion-04','jpg',NULL,89245,2020,'03',1,1,1,'2020-03-07 16:14:37','2020-03-07 16:14:37'),
	(28,'fashion_05.jpg','1583597677-fashion-05','jpg',NULL,69102,2020,'03',1,1,1,'2020-03-07 16:14:37','2020-03-07 16:14:37'),
	(29,'fashion_06.jpg','1583597690-fashion-06','jpg',NULL,106325,2020,'03',1,1,1,'2020-03-07 16:14:50','2020-03-07 16:14:50'),
	(30,'fashion_07.jpg','1583597690-fashion-07','jpg',NULL,72057,2020,'03',1,1,1,'2020-03-07 16:14:50','2020-03-07 16:14:50'),
	(31,'fashion_08.jpg','1583597690-fashion-08','jpg',NULL,94707,2020,'03',1,1,1,'2020-03-07 16:14:50','2020-03-07 16:14:50'),
	(32,'fashion_09.jpg','1583597690-fashion-09','jpg',NULL,73930,2020,'03',1,1,1,'2020-03-07 16:14:50','2020-03-07 16:14:50'),
	(33,'fashion_10.jpg','1583597690-fashion-10','jpg',NULL,23875,2020,'03',1,1,1,'2020-03-07 16:14:50','2020-03-07 16:14:50'),
	(34,'furniture_01.jpg','1583597698-furniture-01','jpg',NULL,104636,2020,'03',1,1,1,'2020-03-07 16:14:58','2020-03-07 16:14:58'),
	(35,'furniture_02.jpg','1583597698-furniture-02','jpg',NULL,62825,2020,'03',1,1,1,'2020-03-07 16:14:58','2020-03-07 16:14:58'),
	(36,'furniture_03.jpg','1583597698-furniture-03','jpg',NULL,79713,2020,'03',1,1,1,'2020-03-07 16:14:58','2020-03-07 16:14:58'),
	(37,'furniture_04.jpg','1583597698-furniture-04','jpg',NULL,72088,2020,'03',1,1,1,'2020-03-07 16:14:58','2020-03-07 16:14:58'),
	(38,'furniture_05.jpg','1583597698-furniture-05','jpg',NULL,102483,2020,'03',1,1,1,'2020-03-07 16:14:58','2020-03-07 16:14:58'),
	(39,'furniture_06.jpg','1583597710-furniture-06','jpg',NULL,82018,2020,'03',1,1,1,'2020-03-07 16:15:10','2020-03-07 16:15:10'),
	(40,'furniture_07.jpg','1583597710-furniture-07','jpg',NULL,54813,2020,'03',1,1,1,'2020-03-07 16:15:10','2020-03-07 16:15:10'),
	(41,'furniture_08.jpg','1583597710-furniture-08','jpg',NULL,93342,2020,'03',1,1,1,'2020-03-07 16:15:10','2020-03-07 16:15:10'),
	(42,'furniture_09.jpg','1583597710-furniture-09','jpg',NULL,78244,2020,'03',1,1,1,'2020-03-07 16:15:10','2020-03-07 16:15:10'),
	(43,'kidtoy_01.jpg','1583597718-kidtoy-01','jpg',NULL,86068,2020,'03',1,1,1,'2020-03-07 16:15:18','2020-03-07 16:15:18'),
	(44,'kidtoy_02.jpg','1583597718-kidtoy-02','jpg',NULL,76088,2020,'03',1,1,1,'2020-03-07 16:15:18','2020-03-07 16:15:18'),
	(45,'kidtoy_03.jpg','1583597718-kidtoy-03','jpg',NULL,78244,2020,'03',1,1,1,'2020-03-07 16:15:18','2020-03-07 16:15:18'),
	(46,'kidtoy_04.jpg','1583597718-kidtoy-04','jpg',NULL,89250,2020,'03',1,1,1,'2020-03-07 16:15:18','2020-03-07 16:15:18'),
	(47,'kidtoy_05.jpg','1583597718-kidtoy-05','jpg',NULL,104210,2020,'03',1,1,1,'2020-03-07 16:15:18','2020-03-07 16:15:18'),
	(48,'kidtoy_06.jpg','1583597732-kidtoy-06','jpg',NULL,114337,2020,'03',1,1,1,'2020-03-07 16:15:32','2020-03-07 16:15:32'),
	(49,'kidtoy_07.jpg','1583597732-kidtoy-07','jpg',NULL,128525,2020,'03',1,1,1,'2020-03-07 16:15:32','2020-03-07 16:15:32'),
	(50,'kidtoy_08.jpg','1583597732-kidtoy-08','jpg',NULL,109535,2020,'03',1,1,1,'2020-03-07 16:15:32','2020-03-07 16:15:32'),
	(51,'kidtoy_09.jpg','1583597732-kidtoy-09','jpg',NULL,95214,2020,'03',1,1,1,'2020-03-07 16:15:32','2020-03-07 16:15:32'),
	(52,'kidtoy_10.jpg','1583597732-kidtoy-10','jpg',NULL,102152,2020,'03',1,1,1,'2020-03-07 16:15:32','2020-03-07 16:15:32'),
	(53,'organics_spa_1.jpg','1583597741-organics-spa-1','jpg',NULL,83699,2020,'03',1,1,1,'2020-03-07 16:15:41','2020-03-07 16:15:41'),
	(54,'organics_spa_2.jpg','1583597741-organics-spa-2','jpg',NULL,123850,2020,'03',1,1,1,'2020-03-07 16:15:41','2020-03-07 16:15:41'),
	(55,'organics_spa_3.jpg','1583597741-organics-spa-3','jpg',NULL,89446,2020,'03',1,1,1,'2020-03-07 16:15:41','2020-03-07 16:15:41'),
	(56,'organics_spa_4.jpg','1583597741-organics-spa-4','jpg',NULL,157590,2020,'03',1,1,1,'2020-03-07 16:15:41','2020-03-07 16:15:41'),
	(57,'organics_spa_5.jpg','1583597741-organics-spa-5','jpg',NULL,55771,2020,'03',1,1,1,'2020-03-07 16:15:41','2020-03-07 16:15:41'),
	(58,'organics_spa_6.jpg','1583597751-organics-spa-6','jpg',NULL,80343,2020,'03',1,1,1,'2020-03-07 16:15:51','2020-03-07 16:15:51'),
	(59,'organics_spa_7.jpg','1583597751-organics-spa-7','jpg',NULL,90948,2020,'03',1,1,1,'2020-03-07 16:15:51','2020-03-07 16:15:51'),
	(60,'organics_spa_8.jpg','1583597751-organics-spa-8','jpg',NULL,108340,2020,'03',1,1,1,'2020-03-07 16:15:51','2020-03-07 16:15:51'),
	(61,'tools_equipment_1.jpg','1583597761-tools-equipment-1','jpg',NULL,81337,2020,'03',1,1,1,'2020-03-07 16:16:01','2020-03-07 16:16:01'),
	(62,'tools_equipment_2.jpg','1583597761-tools-equipment-2','jpg',NULL,82774,2020,'03',1,1,1,'2020-03-07 16:16:01','2020-03-07 16:16:01'),
	(63,'tools_equipment_3.jpg','1583597761-tools-equipment-3','jpg',NULL,100717,2020,'03',1,1,1,'2020-03-07 16:16:01','2020-03-07 16:16:01'),
	(64,'tools_equipment_4.jpg','1583597761-tools-equipment-4','jpg',NULL,95045,2020,'03',1,1,1,'2020-03-07 16:16:01','2020-03-07 16:16:01'),
	(65,'tools_equipment_5.jpg','1583597761-tools-equipment-5','jpg',NULL,95997,2020,'03',1,1,1,'2020-03-07 16:16:01','2020-03-07 16:16:01'),
	(66,'tools_equipment_6.jpg','1583597767-tools-equipment-6','jpg',NULL,86953,2020,'03',1,1,1,'2020-03-07 16:16:07','2020-03-07 16:16:07'),
	(67,'tools_equipment_7.jpg','1583597767-tools-equipment-7','jpg',NULL,112904,2020,'03',1,1,1,'2020-03-07 16:16:07','2020-03-07 16:16:07'),
	(68,'tools_equipment_8.jpg','1583597767-tools-equipment-8','jpg',NULL,88123,2020,'03',1,1,1,'2020-03-07 16:16:07','2020-03-07 16:16:07');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


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
	(68,60,'Đăng Ký Lịch','Đăng lý lịch làm việc','schedule','ScheduleController',100,'fa fa-clock-o',1,1,NULL,'2020-12-05 13:05:49','2020-12-05 13:05:49'),
	(69,60,'Dasboard','Dasboard',NULL,NULL,100,'glyphicon glyphicon-menu-right',1,1,NULL,'2020-12-10 08:30:24','2020-12-10 08:30:24');

/*!40000 ALTER TABLE `functions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `message`, `created_at`, `updated_at`)
VALUES
	(1,NULL,'2020-11-18 15:20:15','2020-11-18 15:26:55');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
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

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;

INSERT INTO `schedules` (`id`, `user_id`, `date`, `time`, `created_at`, `updated_at`)
VALUES
	(1,1,'2020-11-18','[\"1\",\"3\"]','2020-11-18 14:10:31','2020-11-18 14:10:31'),
	(2,1,'2020-11-19','[\"1\"]','2020-11-19 10:15:29','2020-11-19 10:15:29'),
	(3,1,'2020-11-27','[\"1\"]','2020-11-27 03:32:55','2020-11-27 03:32:55'),
	(4,1,'2020-11-28','[\"1\"]','2020-11-28 02:19:37','2020-11-28 02:19:37'),
	(5,1,'2020-12-05',NULL,'2020-12-05 12:41:24','2020-12-05 12:41:24'),
	(6,1,'2020-12-10','[\"1\"]','2020-12-10 08:25:50','2020-12-10 08:25:50');

/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'hoangkien151092','hoangkien151092@gmail.com','Hoàng Kiên',NULL,NULL,1,'$2y$10$xNNf7uBGiw/OsdqYwlA92.VhSxFIaAcQHPfXWPCyQ1z9lzJ3lvwse',NULL,NULL,NULL,1,'2020-01-30 04:40:44','2020-12-10 08:25:46'),
	(2,'kiendaotac','kiendaotac@gmail.com','Kiên Đạo Tặc',NULL,'fb.com/hoangvankien',985108032,'$2y$10$5/fAupjrsNrS6ASa6ym1Ue9EHakVuPqZrrmvyqyyoZVgPhYDYAlMS','2020-11-07 04:13:25',NULL,NULL,1,'2020-11-07 03:08:47','2020-11-07 04:13:25'),
	(3,'12346','123456@gmail.com','123456',NULL,'123456',123456,'$2y$10$shL0CoOUCNZ5iz7ooMCJzuWBSpNJyj2YQtGphUCgod0gvxe1jqObe','2020-11-07 04:13:23',NULL,NULL,1,'2020-11-07 03:14:38','2020-11-07 04:13:23'),
	(4,'kiendaotac1','kiendaotac1@gmail.com','Kiên Đạo Tặc',NULL,NULL,123456789,'$2y$10$R5mCYvko461kn.GE4/.A8OHRhyFSpydiTrL68UulFwLE/MiPT/AE2',NULL,NULL,NULL,0,'2020-12-10 08:27:11','2020-12-10 10:32:12');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
