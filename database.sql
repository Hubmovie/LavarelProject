-- MySQL dump 10.13  Distrib 8.0.31, for macos12.6 (arm64)
--
-- Host: localhost    Database: nest
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `code` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activations_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES (1,1,'FVXjdiE55THLOEt5geuRQDqDW0HY1ttu',1,'2022-12-12 17:35:05','2022-12-12 17:35:05','2022-12-12 17:35:05');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_at` datetime DEFAULT NULL,
  `location` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicked` bigint NOT NULL DEFAULT '0',
  `order` int DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ads_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (1,'Everyday Fresh','2027-12-13 00:00:00','not_set','IZ6WU8KUALYD','promotion/1.png','/products',0,1,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(2,'Make your Breakfast','2027-12-13 00:00:00','not_set','ILSFJVYFGCPZ','promotion/2.png','/products',0,2,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(3,'The best Organic','2027-12-13 00:00:00','not_set','ILSDKVYFGXPH','promotion/3.png','/products',0,3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(4,'Bring nature into your home','2027-12-13 00:00:00','not_set','IZ6WU8KUALYG','promotion/4.png','/products',0,4,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(5,'Delivered to your home','2027-12-13 00:00:00','banner-big','IZ6WU8KUALYH','promotion/5.png','/products',0,5,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(6,'Save 17% on Oganic Juice','2027-12-13 00:00:00','no_set','IZ6WU8KUALYI','promotion/6.png','/products',0,6,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(7,'Everyday Fresh & Clean with Our Products','2027-12-13 00:00:00','item-style-4','IZ6WU8KUALYJ','promotion/7.png','/products',0,7,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(8,'The best Organic Products Online','2027-12-13 00:00:00','item-style-5','IZ6WU8KUALYK','promotion/8.png','/products',0,8,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(9,'Everyday Fresh with Our Products','2027-12-13 00:00:00','item-style-2','IZ6WU8KUALYL','promotion/9.png',NULL,0,9,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(10,'100% guaranteed all Fresh items','2027-12-13 00:00:00','item-style-2','IZ6WU8KUALYM','promotion/10.png',NULL,0,10,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(11,'Special grocery sale off this month','2027-12-13 00:00:00','item-style-2','IZ6WU8KUALYN','promotion/11.png',NULL,0,11,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(12,'Enjoy 15% OFF for all vegetable and fruit','2027-12-13 00:00:00','item-style-2','IZ6WU8KUALYO','promotion/12.png',NULL,0,12,'published','2022-12-12 17:35:06','2022-12-12 17:35:06');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads_translations`
--

DROP TABLE IF EXISTS `ads_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads_translations`
--

LOCK TABLES `ads_translations` WRITE;
/*!40000 ALTER TABLE `ads_translations` DISABLE KEYS */;
INSERT INTO `ads_translations` VALUES ('vi',1,'Tươi mỗi ngày','promotion/1.png','/vi/products'),('vi',2,'Nấu bữa sáng của bạn','promotion/2.png','/vi/products'),('vi',3,'Hữu cơ tốt nhất','promotion/3.png','/vi/products'),('vi',4,'Mang thiên nhiên vào ngôi nhà của bạn','promotion/4.png','/vi/products'),('vi',5,'Giao tận nhà','promotion/5.png','/vi/products'),('vi',6,'Tiết kiệm 17% khi mua nước ép hữu cơ','promotion/6.png','/vi/products'),('vi',7,'Tươi và Sạch hàng ngày với các sản phẩm của chúng tôi','promotion/7.png','/vi/products'),('vi',8,'Các sản phẩm hữu cơ tốt nhất trực tuyến','promotion/8.png','/vi/products'),('vi',9,'Tươi mới mỗi ngày với các sản phẩm của chúng tôi','promotion/9.png','/vi/products'),('vi',10,'100% đảm bảo tất cả các mặt hàng tươi','promotion/10.png','/vi/products'),('vi',11,'Giảm giá hàng tạp hóa đặc biệt trong tháng này','promotion/11.png','/vi/products'),('vi',12,'GIẢM GIÁ 15% cho tất cả rau và trái cây','promotion/12.png','/vi/products');
/*!40000 ALTER TABLE `ads_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_histories`
--

DROP TABLE IF EXISTS `audit_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audit_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `module` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request` text COLLATE utf8mb4_unicode_ci,
  `action` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_user` int unsigned NOT NULL,
  `reference_id` int unsigned NOT NULL,
  `reference_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit_histories_user_id_index` (`user_id`),
  KEY `audit_histories_module_index` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_histories`
--

LOCK TABLES `audit_histories` WRITE;
/*!40000 ALTER TABLE `audit_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int unsigned NOT NULL DEFAULT '0',
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `author_id` int NOT NULL,
  `author_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Botble\\ACL\\Models\\User',
  `icon` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `is_featured` tinyint NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Ecommerce',0,'Alias laboriosam eaque rerum aspernatur aliquam ea. Corrupti omnis voluptate quia et earum eaque. Nam eveniet temporibus cumque molestiae doloribus. Consequuntur ut sed debitis sint.','published',1,'Botble\\ACL\\Models\\User',NULL,0,0,1,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(2,'Fashion',0,'Assumenda et quis quas sit culpa labore. Aut quo sunt sed. Et numquam dicta recusandae a nulla aut facere. Id suscipit sint delectus ipsa voluptatem minus.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(3,'Electronic',0,'Cupiditate est culpa est consequatur eum aut. Quas fuga officiis autem non. Omnis enim quis placeat eum iste quia doloribus. Nihil ullam hic veniam tempore totam labore placeat.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(4,'Commercial',0,'Voluptates sit cupiditate debitis illo reiciendis. Rerum odit at veniam quia. Accusamus voluptatem quia nostrum temporibus aut sed eligendi. Quia voluptate quisquam odio tempore eum.','published',1,'Botble\\ACL\\Models\\User',NULL,0,1,0,'2022-12-12 17:35:04','2022-12-12 17:35:04');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_translations`
--

DROP TABLE IF EXISTS `categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_translations`
--

LOCK TABLES `categories_translations` WRITE;
/*!40000 ALTER TABLE `categories_translations` DISABLE KEYS */;
INSERT INTO `categories_translations` VALUES ('vi',1,'Thương mại điện tử',NULL),('vi',2,'Thời trang',NULL),('vi',3,'Điện tử',NULL),('vi',4,'Thương mại',NULL);
/*!40000 ALTER TABLE `categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int unsigned NOT NULL,
  `country_id` int unsigned DEFAULT NULL,
  `record_id` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities_translations`
--

DROP TABLE IF EXISTS `cities_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cities_id` int NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`cities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities_translations`
--

LOCK TABLES `cities_translations` WRITE;
/*!40000 ALTER TABLE `cities_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_replies`
--

DROP TABLE IF EXISTS `contact_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_replies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_replies`
--

LOCK TABLES `contact_replies` WRITE;
/*!40000 ALTER TABLE `contact_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries_translations`
--

DROP TABLE IF EXISTS `countries_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_id` int NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`countries_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries_translations`
--

LOCK TABLES `countries_translations` WRITE;
/*!40000 ALTER TABLE `countries_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboard_widget_settings`
--

DROP TABLE IF EXISTS `dashboard_widget_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dashboard_widget_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `user_id` int unsigned NOT NULL,
  `widget_id` int unsigned NOT NULL,
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dashboard_widget_settings_user_id_index` (`user_id`),
  KEY `dashboard_widget_settings_widget_id_index` (`widget_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboard_widget_settings`
--

LOCK TABLES `dashboard_widget_settings` WRITE;
/*!40000 ALTER TABLE `dashboard_widget_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `dashboard_widget_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboard_widgets`
--

DROP TABLE IF EXISTS `dashboard_widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dashboard_widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboard_widgets`
--

LOCK TABLES `dashboard_widgets` WRITE;
/*!40000 ALTER TABLE `dashboard_widgets` DISABLE KEYS */;
/*!40000 ALTER TABLE `dashboard_widgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_brands`
--

DROP TABLE IF EXISTS `ec_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_brands`
--

LOCK TABLES `ec_brands` WRITE;
/*!40000 ALTER TABLE `ec_brands` DISABLE KEYS */;
INSERT INTO `ec_brands` VALUES (1,'Perxsion',NULL,NULL,NULL,'published',0,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(2,'Hiching',NULL,NULL,NULL,'published',1,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(3,'Kepslo',NULL,NULL,NULL,'published',2,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(4,'Groneba',NULL,NULL,NULL,'published',3,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(5,'Babian',NULL,NULL,NULL,'published',4,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(6,'Valorant',NULL,NULL,NULL,'published',5,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(7,'Pure',NULL,NULL,NULL,'published',6,1,'2022-12-12 17:34:49','2022-12-12 17:34:49');
/*!40000 ALTER TABLE `ec_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_brands_translations`
--

DROP TABLE IF EXISTS `ec_brands_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_brands_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_brands_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_brands_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_brands_translations`
--

LOCK TABLES `ec_brands_translations` WRITE;
/*!40000 ALTER TABLE `ec_brands_translations` DISABLE KEYS */;
INSERT INTO `ec_brands_translations` VALUES ('vi',1,'Perxsion',NULL),('vi',2,'Hiching',NULL),('vi',3,'Kepslo',NULL),('vi',4,'Groneba',NULL),('vi',5,'Babian',NULL),('vi',6,'Valorant',NULL),('vi',7,'Pure',NULL);
/*!40000 ALTER TABLE `ec_brands_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_cart`
--

DROP TABLE IF EXISTS `ec_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_cart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_cart`
--

LOCK TABLES `ec_cart` WRITE;
/*!40000 ALTER TABLE `ec_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_currencies`
--

DROP TABLE IF EXISTS `ec_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_prefix_symbol` tinyint unsigned NOT NULL DEFAULT '0',
  `decimals` tinyint unsigned DEFAULT '0',
  `order` int unsigned DEFAULT '0',
  `is_default` tinyint NOT NULL DEFAULT '0',
  `exchange_rate` double NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_currencies`
--

LOCK TABLES `ec_currencies` WRITE;
/*!40000 ALTER TABLE `ec_currencies` DISABLE KEYS */;
INSERT INTO `ec_currencies` VALUES (1,'USD','$',1,2,0,1,1,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(2,'EUR','€',0,2,1,0,0.84,'2022-12-12 17:34:49','2022-12-12 17:34:49'),(3,'VND','₫',0,0,2,0,23203,'2022-12-12 17:34:49','2022-12-12 17:34:49');
/*!40000 ALTER TABLE `ec_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_customer_addresses`
--

DROP TABLE IF EXISTS `ec_customer_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_customer_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int unsigned NOT NULL,
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_customer_addresses`
--

LOCK TABLES `ec_customer_addresses` WRITE;
/*!40000 ALTER TABLE `ec_customer_addresses` DISABLE KEYS */;
INSERT INTO `ec_customer_addresses` VALUES (1,'Dr. Belle Hand','customer@botble.com','+17136133950','VG','Virginia','Jacobimouth','586 Jacobi Parkways',1,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','86272'),(2,'Dr. Belle Hand','customer@botble.com','+12817270401','NE','Connecticut','North Violet','25917 Zakary Villages Apt. 608',1,0,'2022-12-12 17:34:59','2022-12-12 17:34:59','40762'),(3,'Garry Rutherford MD','vendor@botble.com','+14198654583','QA','Alabama','Reedchester','6901 Ryley Mountains',2,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','11674-1811'),(4,'Garry Rutherford MD','vendor@botble.com','+17696974921','AL','Maine','East Austen','383 Chris Islands',2,0,'2022-12-12 17:34:59','2022-12-12 17:34:59','72557-2505'),(5,'Prof. Vanessa Torp I','lewis41@example.com','+13648268542','FI','North Carolina','East Iliana','64534 Zboncak Summit Apt. 889',3,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','27795-4218'),(6,'Priscilla Ferry','destinee11@example.com','+14044979575','PS','Maryland','Urieltown','671 Ebert Stream',4,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','78689-8316'),(7,'Clotilde Hartmann','sydni.barrows@example.net','+19064420287','PF','Wyoming','New Bonitaborough','4532 Mueller Wall Suite 214',5,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','00957'),(8,'Tina Haag','blake.metz@example.net','+12723907095','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',6,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','23302'),(9,'Noble Lubowitz','jaskolski.janiya@example.com','+14343442120','PH','Tennessee','Johnsmouth','434 Batz Plaza Suite 162',7,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','62936'),(10,'Shanie Jacobson','gerlach.ian@example.org','+15756094094','PW','Idaho','Herzogberg','51735 Corwin Falls',8,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','05839'),(11,'Terrance Schmitt','santa85@example.com','+14324790971','GL','Montana','Carolanneborough','2539 Jessika Mission',9,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','01112-5886'),(12,'Britney Hackett','broderick61@example.org','+19597729872','TC','Montana','Port Felipa','431 Miller Forge Suite 409',10,1,'2022-12-12 17:34:59','2022-12-12 17:34:59','09957');
/*!40000 ALTER TABLE `ec_customer_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_customer_password_resets`
--

DROP TABLE IF EXISTS `ec_customer_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_customer_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `ec_customer_password_resets_email_index` (`email`),
  KEY `ec_customer_password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_customer_password_resets`
--

LOCK TABLES `ec_customer_password_resets` WRITE;
/*!40000 ALTER TABLE `ec_customer_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_customer_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_customer_recently_viewed_products`
--

DROP TABLE IF EXISTS `ec_customer_recently_viewed_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_customer_recently_viewed_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_customer_recently_viewed_products`
--

LOCK TABLES `ec_customer_recently_viewed_products` WRITE;
/*!40000 ALTER TABLE `ec_customer_recently_viewed_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_customer_recently_viewed_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_customers`
--

DROP TABLE IF EXISTS `ec_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `email_verify_token` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activated',
  `is_vendor` tinyint(1) NOT NULL DEFAULT '0',
  `vendor_verified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ec_customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_customers`
--

LOCK TABLES `ec_customers` WRITE;
/*!40000 ALTER TABLE `ec_customers` DISABLE KEYS */;
INSERT INTO `ec_customers` VALUES (1,'Dr. Belle Hand','customer@botble.com','$2y$10$mnDjKrDxpl58f8JIA1tPtOknPqAShdhb8DtuIWAJwcNP3AbH42oC.','customers/7.jpg','1983-11-15','+15172029561',NULL,'2022-12-12 17:34:59','2022-12-12 17:34:59','2022-12-13 00:34:59',NULL,'activated',0,NULL),(2,'Garry Rutherford MD','vendor@botble.com','$2y$10$Lm40s8LROy99MNU7uaGmP.Mc0qEis8TWMAWspjL5zZoj2X05ohL3W','customers/2.jpg','1983-12-03','+17636698385',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(3,'Prof. Vanessa Torp I','lewis41@example.com','$2y$10$8gQGfZyQWn2fRyjuQqCdyedbt5qvd4zMqAMouWXMIhpJ8KKNPnccm','customers/1.jpg','1975-11-23','+12054026419',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(4,'Priscilla Ferry','destinee11@example.com','$2y$10$5As09dyw6r6Q3kF5eq/JfeLIpwnpG5CA7ai0HtKma0pYcnF1njAU2','customers/2.jpg','1998-11-16','+18328037293',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(5,'Clotilde Hartmann','sydni.barrows@example.net','$2y$10$gpjfnlJMvam6hnSxEsAMQuo.tMIxH9vxteYY9RAKvidzeWObhDOcC','customers/3.jpg','1995-12-01','+12797483102',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(6,'Tina Haag','blake.metz@example.net','$2y$10$29tT1fRI5D8FHYb/MDnb1um0M5lF/eb/iBsdglSqL/8uWHGBQ9zJe','customers/4.jpg','1999-11-30','+16573579893',NULL,'2022-12-12 17:34:59','2022-12-12 17:34:59','2022-12-13 00:34:59',NULL,'activated',0,NULL),(7,'Noble Lubowitz','jaskolski.janiya@example.com','$2y$10$T4WHW8Hy2Oed47mi6fjZvue8Pv/BNKfFNLrUzxrUb9gaKeyQyYG/O','customers/5.jpg','1981-11-22','+17152099032',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(8,'Shanie Jacobson','gerlach.ian@example.org','$2y$10$9LQzBGz6o0GY72FS3cOgZ.Is4s7hINJ7vnI/srXN4hvOabSyO5BrO','customers/6.jpg','1991-12-06','+13463102750',NULL,'2022-12-12 17:34:59','2022-12-12 17:35:10','2022-12-13 00:34:59',NULL,'activated',1,'2022-12-13 00:35:10'),(9,'Terrance Schmitt','santa85@example.com','$2y$10$XRSLnQ5qxR.wOGJJoi6zvOAjw.c5cd6qiJOJSFTOs/.0pPrU9GqBm','customers/7.jpg','1983-11-15','+12347844176',NULL,'2022-12-12 17:34:59','2022-12-12 17:34:59','2022-12-13 00:34:59',NULL,'activated',0,NULL),(10,'Britney Hackett','broderick61@example.org','$2y$10$NXV9O2fNCWeMYY28FKkedOrxxRJb/9BUGlg.Q0NMrTk/iVbvD9Hc.','customers/8.jpg','2001-11-24','+16694904793',NULL,'2022-12-12 17:34:59','2022-12-12 17:34:59','2022-12-13 00:34:59',NULL,'activated',0,NULL);
/*!40000 ALTER TABLE `ec_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_discount_customers`
--

DROP TABLE IF EXISTS `ec_discount_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_discount_customers` (
  `discount_id` int unsigned NOT NULL,
  `customer_id` int unsigned NOT NULL,
  PRIMARY KEY (`discount_id`,`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_discount_customers`
--

LOCK TABLES `ec_discount_customers` WRITE;
/*!40000 ALTER TABLE `ec_discount_customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_discount_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_discount_product_collections`
--

DROP TABLE IF EXISTS `ec_discount_product_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_discount_product_collections` (
  `discount_id` int unsigned NOT NULL,
  `product_collection_id` int unsigned NOT NULL,
  PRIMARY KEY (`discount_id`,`product_collection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_discount_product_collections`
--

LOCK TABLES `ec_discount_product_collections` WRITE;
/*!40000 ALTER TABLE `ec_discount_product_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_discount_product_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_discount_products`
--

DROP TABLE IF EXISTS `ec_discount_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_discount_products` (
  `discount_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`discount_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_discount_products`
--

LOCK TABLES `ec_discount_products` WRITE;
/*!40000 ALTER TABLE `ec_discount_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_discount_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_discounts`
--

DROP TABLE IF EXISTS `ec_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `total_used` int unsigned NOT NULL DEFAULT '0',
  `value` double DEFAULT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT 'coupon',
  `can_use_with_promotion` tinyint(1) NOT NULL DEFAULT '0',
  `discount_on` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int unsigned DEFAULT NULL,
  `type_option` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'amount',
  `target` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'all-orders',
  `min_order_price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ec_discounts_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_discounts`
--

LOCK TABLES `ec_discounts` WRITE;
/*!40000 ALTER TABLE `ec_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_flash_sale_products`
--

DROP TABLE IF EXISTS `ec_flash_sale_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_flash_sale_products` (
  `flash_sale_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `price` double unsigned DEFAULT NULL,
  `quantity` int unsigned DEFAULT NULL,
  `sold` int unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_flash_sale_products`
--

LOCK TABLES `ec_flash_sale_products` WRITE;
/*!40000 ALTER TABLE `ec_flash_sale_products` DISABLE KEYS */;
INSERT INTO `ec_flash_sale_products` VALUES (1,15,102.96,10,4),(2,6,41.08,6,4),(3,18,36.63,14,5),(4,1,295.02,6,1),(5,1,344.19,6,4),(6,1,268.2,17,1),(6,2,214.2,13,3),(6,3,229,9,3),(6,4,31.2576,19,3),(6,5,38.54,19,1),(6,6,43.68,7,4),(6,7,93.15,19,5),(6,8,47.61,20,1),(6,9,74.1,12,3),(6,10,163.2,9,1),(6,11,99.45,15,4),(6,12,37.2198,10,2),(6,13,107.1,18,5),(6,14,100.62,13,5),(6,15,50.31,17,5),(6,16,43.9824,8,5),(6,17,98.56,18,3),(6,18,96.57,19,4),(6,19,96.6,11,4),(6,20,36.504,20,4);
/*!40000 ALTER TABLE `ec_flash_sale_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_flash_sales`
--

DROP TABLE IF EXISTS `ec_flash_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_flash_sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` datetime NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_flash_sales`
--

LOCK TABLES `ec_flash_sales` WRITE;
/*!40000 ALTER TABLE `ec_flash_sales` DISABLE KEYS */;
INSERT INTO `ec_flash_sales` VALUES (1,'Deal of the Day','2022-12-29 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01'),(2,'Flash sale 2','2023-01-24 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01'),(3,'Flash sale 3','2023-01-24 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01'),(4,'Flash sale 4','2023-01-07 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01'),(5,'Flash sale 5','2023-01-25 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01'),(6,'Daily Best Sales','2023-01-12 00:00:00','published','2022-12-12 17:35:01','2022-12-12 17:35:01');
/*!40000 ALTER TABLE `ec_flash_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_flash_sales_translations`
--

DROP TABLE IF EXISTS `ec_flash_sales_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_flash_sales_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_flash_sales_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_flash_sales_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_flash_sales_translations`
--

LOCK TABLES `ec_flash_sales_translations` WRITE;
/*!40000 ALTER TABLE `ec_flash_sales_translations` DISABLE KEYS */;
INSERT INTO `ec_flash_sales_translations` VALUES ('vi',1,'Ưu đãi trong ngày'),('vi',2,'Khuyến mãi 2'),('vi',3,'Khuyến mãi 3'),('vi',4,'Khuyến mãi 4'),('vi',5,'Khuyến mãi 5'),('vi',6,'Bán tốt nhất hàng ngày');
/*!40000 ALTER TABLE `ec_flash_sales_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_global_option_value`
--

DROP TABLE IF EXISTS `ec_global_option_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_global_option_value` (
  `option_id` bigint NOT NULL COMMENT 'option id',
  `option_value` tinytext COLLATE utf8mb4_unicode_ci COMMENT 'option value',
  `affect_price` double DEFAULT NULL COMMENT 'value of price of this option affect',
  `order` int NOT NULL DEFAULT '9999',
  `affect_type` tinyint NOT NULL DEFAULT '0' COMMENT '0. fixed 1. percent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_global_option_value`
--

LOCK TABLES `ec_global_option_value` WRITE;
/*!40000 ALTER TABLE `ec_global_option_value` DISABLE KEYS */;
INSERT INTO `ec_global_option_value` VALUES (1,'1 Year',0,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(1,'2 Year',10,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(1,'3 Year',20,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(2,'4GB',0,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(2,'8GB',10,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(2,'16GB',20,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(3,'Core i5',0,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(3,'Core i7',10,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(3,'Core i9',20,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(4,'128GB',0,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(4,'256GB',10,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(4,'512GB',20,9999,0,'2022-12-12 17:35:08','2022-12-12 17:35:08');
/*!40000 ALTER TABLE `ec_global_option_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_global_options`
--

DROP TABLE IF EXISTS `ec_global_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_global_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name of options',
  `option_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'option type',
  `required` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Checked if this option is required',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_global_options`
--

LOCK TABLES `ec_global_options` WRITE;
/*!40000 ALTER TABLE `ec_global_options` DISABLE KEYS */;
INSERT INTO `ec_global_options` VALUES (1,'Warranty','Botble\\Ecommerce\\Option\\OptionType\\RadioButton',1,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(2,'RAM','Botble\\Ecommerce\\Option\\OptionType\\RadioButton',1,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(3,'CPU','Botble\\Ecommerce\\Option\\OptionType\\RadioButton',1,'2022-12-12 17:35:08','2022-12-12 17:35:08'),(4,'HDD','Botble\\Ecommerce\\Option\\OptionType\\Dropdown',0,'2022-12-12 17:35:08','2022-12-12 17:35:08');
/*!40000 ALTER TABLE `ec_global_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_grouped_products`
--

DROP TABLE IF EXISTS `ec_grouped_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_grouped_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_product_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `fixed_qty` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_grouped_products`
--

LOCK TABLES `ec_grouped_products` WRITE;
/*!40000 ALTER TABLE `ec_grouped_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_grouped_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_invoice_items`
--

DROP TABLE IF EXISTS `ec_invoice_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_invoice_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint unsigned NOT NULL,
  `reference_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int unsigned NOT NULL,
  `sub_total` decimal(15,2) unsigned NOT NULL,
  `tax_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `amount` decimal(15,2) unsigned NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_invoice_items_reference_type_reference_id_index` (`reference_type`,`reference_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_invoice_items`
--

LOCK TABLES `ec_invoice_items` WRITE;
/*!40000 ALTER TABLE `ec_invoice_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_invoice_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_invoices`
--

DROP TABLE IF EXISTS `ec_invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `reference_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` bigint unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_tax_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` decimal(15,2) unsigned NOT NULL,
  `tax_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `shipping_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(15,2) unsigned NOT NULL DEFAULT '0.00',
  `shipping_option` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `coupon_code` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(15,2) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `payment_id` int unsigned DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `paid_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ec_invoices_code_unique` (`code`),
  KEY `ec_invoices_reference_type_reference_id_index` (`reference_type`,`reference_id`),
  KEY `ec_invoices_payment_id_index` (`payment_id`),
  KEY `ec_invoices_status_index` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_invoices`
--

LOCK TABLES `ec_invoices` WRITE;
/*!40000 ALTER TABLE `ec_invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_option_value`
--

DROP TABLE IF EXISTS `ec_option_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_option_value` (
  `option_id` bigint NOT NULL COMMENT 'option id',
  `option_value` tinytext COLLATE utf8mb4_unicode_ci COMMENT 'option value',
  `affect_price` double DEFAULT NULL COMMENT 'value of price of this option affect',
  `order` int NOT NULL DEFAULT '9999',
  `affect_type` tinyint NOT NULL DEFAULT '0' COMMENT '0. fixed 1. percent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_option_value`
--

LOCK TABLES `ec_option_value` WRITE;
/*!40000 ALTER TABLE `ec_option_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_option_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_options`
--

DROP TABLE IF EXISTS `ec_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name of options',
  `option_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'option type',
  `product_id` bigint NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '9999',
  `required` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Checked if this option is required',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_options`
--

LOCK TABLES `ec_options` WRITE;
/*!40000 ALTER TABLE `ec_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_addresses`
--

DROP TABLE IF EXISTS `ec_order_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int unsigned NOT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'shipping_address',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_addresses`
--

LOCK TABLES `ec_order_addresses` WRITE;
/*!40000 ALTER TABLE `ec_order_addresses` DISABLE KEYS */;
INSERT INTO `ec_order_addresses` VALUES (1,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',1,'86272','shipping_address'),(2,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',2,'86272','shipping_address'),(3,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',3,'86272','shipping_address'),(4,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',4,'09957','shipping_address'),(5,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',5,'09957','shipping_address'),(6,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',6,'09957','shipping_address'),(7,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',7,'09957','shipping_address'),(8,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',8,'01112-5886','shipping_address'),(9,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',9,'01112-5886','shipping_address'),(10,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',10,'01112-5886','shipping_address'),(11,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',11,'23302','shipping_address'),(12,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',12,'23302','shipping_address'),(13,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',13,'23302','shipping_address'),(14,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',14,'86272','shipping_address'),(15,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',15,'86272','shipping_address'),(16,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',16,'86272','shipping_address'),(17,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',17,'01112-5886','shipping_address'),(18,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',18,'01112-5886','shipping_address'),(19,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',19,'86272','shipping_address'),(20,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',20,'86272','shipping_address'),(21,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',21,'09957','shipping_address'),(22,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',22,'09957','shipping_address'),(23,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',23,'09957','shipping_address'),(24,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',24,'09957','shipping_address'),(25,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',25,'01112-5886','shipping_address'),(26,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',26,'01112-5886','shipping_address'),(27,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',27,'01112-5886','shipping_address'),(28,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',28,'23302','shipping_address'),(29,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',29,'23302','shipping_address'),(30,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',30,'23302','shipping_address'),(31,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',31,'23302','shipping_address'),(32,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',32,'23302','shipping_address'),(33,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',33,'23302','shipping_address'),(34,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',34,'23302','shipping_address'),(35,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',35,'86272','shipping_address'),(36,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',36,'01112-5886','shipping_address'),(37,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',37,'01112-5886','shipping_address'),(38,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',38,'23302','shipping_address'),(39,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',39,'23302','shipping_address'),(40,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',40,'23302','shipping_address'),(41,'Tina Haag','+12723907095','blake.metz@example.net','RU','Arkansas','North Darienhaven','973 Earline Views Apt. 850',41,'23302','shipping_address'),(42,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',42,'86272','shipping_address'),(43,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',43,'86272','shipping_address'),(44,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',44,'09957','shipping_address'),(45,'Britney Hackett','+19597729872','broderick61@example.org','TC','Montana','Port Felipa','431 Miller Forge Suite 409',45,'09957','shipping_address'),(46,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',46,'86272','shipping_address'),(47,'Dr. Belle Hand','+17136133950','customer@botble.com','VG','Virginia','Jacobimouth','586 Jacobi Parkways',47,'86272','shipping_address'),(48,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',48,'01112-5886','shipping_address'),(49,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',49,'01112-5886','shipping_address'),(50,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',50,'01112-5886','shipping_address'),(51,'Terrance Schmitt','+14324790971','santa85@example.com','GL','Montana','Carolanneborough','2539 Jessika Mission',51,'01112-5886','shipping_address');
/*!40000 ALTER TABLE `ec_order_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_histories`
--

DROP TABLE IF EXISTS `ec_order_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `action` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `order_id` int unsigned NOT NULL,
  `extras` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_histories`
--

LOCK TABLES `ec_order_histories` WRITE;
/*!40000 ALTER TABLE `ec_order_histories` DISABLE KEYS */;
INSERT INTO `ec_order_histories` VALUES (1,'create_order_from_seeder','Order is created from the checkout page',NULL,1,NULL,'2022-11-27 17:35:10','2022-11-27 17:35:10'),(2,'confirm_order','Order was verified by %user_name%',0,1,NULL,'2022-11-27 17:35:10','2022-11-27 17:35:10'),(3,'confirm_payment','Payment was confirmed (amount $340.00) by %user_name%',0,1,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(4,'create_shipment','Created shipment for order',0,1,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(5,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,1,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(6,'create_order_from_seeder','Order is created from the checkout page',NULL,2,NULL,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(7,'confirm_order','Order was verified by %user_name%',0,2,NULL,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(8,'confirm_payment','Payment was confirmed (amount $720.00) by %user_name%',0,2,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(9,'create_shipment','Created shipment for order',0,2,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(10,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,2,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(11,'create_order_from_seeder','Order is created from the checkout page',NULL,3,NULL,'2022-11-26 01:35:11','2022-11-26 01:35:11'),(12,'confirm_order','Order was verified by %user_name%',0,3,NULL,'2022-11-26 01:35:11','2022-11-26 01:35:11'),(13,'create_shipment','Created shipment for order',0,3,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(14,'create_order_from_seeder','Order is created from the checkout page',NULL,4,NULL,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(15,'confirm_order','Order was verified by %user_name%',0,4,NULL,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(16,'create_shipment','Created shipment for order',0,4,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(17,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,4,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(18,'create_order_from_seeder','Order is created from the checkout page',NULL,5,NULL,'2022-11-28 11:35:11','2022-11-28 11:35:11'),(19,'confirm_order','Order was verified by %user_name%',0,5,NULL,'2022-11-28 11:35:11','2022-11-28 11:35:11'),(20,'confirm_payment','Payment was confirmed (amount $234.00) by %user_name%',0,5,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(21,'create_shipment','Created shipment for order',0,5,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(22,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,5,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(23,'create_order_from_seeder','Order is created from the checkout page',NULL,6,NULL,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(24,'confirm_order','Order was verified by %user_name%',0,6,NULL,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(25,'create_shipment','Created shipment for order',0,6,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(26,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,6,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(27,'create_order_from_seeder','Order is created from the checkout page',NULL,7,NULL,'2022-11-26 21:35:11','2022-11-26 21:35:11'),(28,'confirm_order','Order was verified by %user_name%',0,7,NULL,'2022-11-26 21:35:11','2022-11-26 21:35:11'),(29,'confirm_payment','Payment was confirmed (amount $115.00) by %user_name%',0,7,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(30,'create_shipment','Created shipment for order',0,7,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(31,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,7,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(32,'create_order_from_seeder','Order is created from the checkout page',NULL,8,NULL,'2022-12-09 17:35:11','2022-12-09 17:35:11'),(33,'confirm_order','Order was verified by %user_name%',0,8,NULL,'2022-12-09 17:35:11','2022-12-09 17:35:11'),(34,'confirm_payment','Payment was confirmed (amount $222.00) by %user_name%',0,8,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(35,'create_shipment','Created shipment for order',0,8,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(36,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,8,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(37,'create_order_from_seeder','Order is created from the checkout page',NULL,9,NULL,'2022-11-29 05:35:11','2022-11-29 05:35:11'),(38,'confirm_order','Order was verified by %user_name%',0,9,NULL,'2022-11-29 05:35:11','2022-11-29 05:35:11'),(39,'confirm_payment','Payment was confirmed (amount $115.00) by %user_name%',0,9,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(40,'create_shipment','Created shipment for order',0,9,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(41,'create_order_from_seeder','Order is created from the checkout page',NULL,10,NULL,'2022-12-11 05:35:11','2022-12-11 05:35:11'),(42,'confirm_order','Order was verified by %user_name%',0,10,NULL,'2022-12-11 05:35:11','2022-12-11 05:35:11'),(43,'confirm_payment','Payment was confirmed (amount $351.00) by %user_name%',0,10,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(44,'create_shipment','Created shipment for order',0,10,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(45,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,10,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(46,'create_order_from_seeder','Order is created from the checkout page',NULL,11,NULL,'2022-12-04 05:35:11','2022-12-04 05:35:11'),(47,'confirm_order','Order was verified by %user_name%',0,11,NULL,'2022-12-04 05:35:11','2022-12-04 05:35:11'),(48,'confirm_payment','Payment was confirmed (amount $296.00) by %user_name%',0,11,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(49,'create_shipment','Created shipment for order',0,11,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(50,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,11,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(51,'create_order_from_seeder','Order is created from the checkout page',NULL,12,NULL,'2022-11-28 13:35:11','2022-11-28 13:35:11'),(52,'confirm_order','Order was verified by %user_name%',0,12,NULL,'2022-11-28 13:35:11','2022-11-28 13:35:11'),(53,'confirm_payment','Payment was confirmed (amount $230.00) by %user_name%',0,12,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(54,'create_shipment','Created shipment for order',0,12,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(55,'create_order_from_seeder','Order is created from the checkout page',NULL,13,NULL,'2022-12-01 09:35:11','2022-12-01 09:35:11'),(56,'confirm_order','Order was verified by %user_name%',0,13,NULL,'2022-12-01 09:35:11','2022-12-01 09:35:11'),(57,'confirm_payment','Payment was confirmed (amount $387.00) by %user_name%',0,13,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(58,'create_shipment','Created shipment for order',0,13,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(59,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,13,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(60,'create_order_from_seeder','Order is created from the checkout page',NULL,14,NULL,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(61,'confirm_order','Order was verified by %user_name%',0,14,NULL,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(62,'confirm_payment','Payment was confirmed (amount $345.00) by %user_name%',0,14,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(63,'create_shipment','Created shipment for order',0,14,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(64,'create_order_from_seeder','Order is created from the checkout page',NULL,15,NULL,'2022-12-06 01:35:11','2022-12-06 01:35:11'),(65,'confirm_order','Order was verified by %user_name%',0,15,NULL,'2022-12-06 01:35:11','2022-12-06 01:35:11'),(66,'confirm_payment','Payment was confirmed (amount $470.00) by %user_name%',0,15,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(67,'create_shipment','Created shipment for order',0,15,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(68,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,15,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(69,'create_order_from_seeder','Order is created from the checkout page',NULL,16,NULL,'2022-12-03 09:35:11','2022-12-03 09:35:11'),(70,'confirm_order','Order was verified by %user_name%',0,16,NULL,'2022-12-03 09:35:11','2022-12-03 09:35:11'),(71,'confirm_payment','Payment was confirmed (amount $220.00) by %user_name%',0,16,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(72,'create_shipment','Created shipment for order',0,16,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(73,'create_order_from_seeder','Order is created from the checkout page',NULL,17,NULL,'2022-12-06 11:35:11','2022-12-06 11:35:11'),(74,'confirm_order','Order was verified by %user_name%',0,17,NULL,'2022-12-06 11:35:11','2022-12-06 11:35:11'),(75,'confirm_payment','Payment was confirmed (amount $1,491.00) by %user_name%',0,17,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(76,'create_shipment','Created shipment for order',0,17,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(77,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,17,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(78,'create_order_from_seeder','Order is created from the checkout page',NULL,18,NULL,'2022-12-10 05:35:11','2022-12-10 05:35:11'),(79,'confirm_order','Order was verified by %user_name%',0,18,NULL,'2022-12-10 05:35:11','2022-12-10 05:35:11'),(80,'create_shipment','Created shipment for order',0,18,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(81,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,18,NULL,'2022-12-12 17:35:12','2022-12-12 17:35:12'),(82,'create_order_from_seeder','Order is created from the checkout page',NULL,19,NULL,'2022-12-09 05:35:14','2022-12-09 05:35:14'),(83,'confirm_order','Order was verified by %user_name%',0,19,NULL,'2022-12-09 05:35:14','2022-12-09 05:35:14'),(84,'confirm_payment','Payment was confirmed (amount $394.00) by %user_name%',0,19,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(85,'create_shipment','Created shipment for order',0,19,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(86,'create_order_from_seeder','Order is created from the checkout page',NULL,20,NULL,'2022-12-02 05:35:14','2022-12-02 05:35:14'),(87,'confirm_order','Order was verified by %user_name%',0,20,NULL,'2022-12-02 05:35:14','2022-12-02 05:35:14'),(88,'confirm_payment','Payment was confirmed (amount $345.00) by %user_name%',0,20,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(89,'create_shipment','Created shipment for order',0,20,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(90,'create_order_from_seeder','Order is created from the checkout page',NULL,21,NULL,'2022-12-04 01:35:14','2022-12-04 01:35:14'),(91,'confirm_order','Order was verified by %user_name%',0,21,NULL,'2022-12-04 01:35:14','2022-12-04 01:35:14'),(92,'confirm_payment','Payment was confirmed (amount $458.00) by %user_name%',0,21,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(93,'create_shipment','Created shipment for order',0,21,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(94,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,21,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(95,'create_order_from_seeder','Order is created from the checkout page',NULL,22,NULL,'2022-12-09 11:35:14','2022-12-09 11:35:14'),(96,'confirm_order','Order was verified by %user_name%',0,22,NULL,'2022-12-09 11:35:14','2022-12-09 11:35:14'),(97,'confirm_payment','Payment was confirmed (amount $115.00) by %user_name%',0,22,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(98,'create_shipment','Created shipment for order',0,22,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(99,'create_order_from_seeder','Order is created from the checkout page',NULL,23,NULL,'2022-12-07 07:35:14','2022-12-07 07:35:14'),(100,'confirm_order','Order was verified by %user_name%',0,23,NULL,'2022-12-07 07:35:14','2022-12-07 07:35:14'),(101,'confirm_payment','Payment was confirmed (amount $357.00) by %user_name%',0,23,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(102,'create_shipment','Created shipment for order',0,23,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(103,'create_order_from_seeder','Order is created from the checkout page',NULL,24,NULL,'2022-12-01 21:35:14','2022-12-01 21:35:14'),(104,'confirm_order','Order was verified by %user_name%',0,24,NULL,'2022-12-01 21:35:14','2022-12-01 21:35:14'),(105,'create_shipment','Created shipment for order',0,24,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(106,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,24,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(107,'create_order_from_seeder','Order is created from the checkout page',NULL,25,NULL,'2022-12-03 17:35:14','2022-12-03 17:35:14'),(108,'confirm_order','Order was verified by %user_name%',0,25,NULL,'2022-12-03 17:35:14','2022-12-03 17:35:14'),(109,'create_shipment','Created shipment for order',0,25,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(110,'create_order_from_seeder','Order is created from the checkout page',NULL,26,NULL,'2022-12-07 17:35:14','2022-12-07 17:35:14'),(111,'confirm_order','Order was verified by %user_name%',0,26,NULL,'2022-12-07 17:35:14','2022-12-07 17:35:14'),(112,'confirm_payment','Payment was confirmed (amount $115.00) by %user_name%',0,26,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(113,'create_shipment','Created shipment for order',0,26,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(114,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,26,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(115,'create_order_from_seeder','Order is created from the checkout page',NULL,27,NULL,'2022-12-05 17:35:15','2022-12-05 17:35:15'),(116,'confirm_order','Order was verified by %user_name%',0,27,NULL,'2022-12-05 17:35:15','2022-12-05 17:35:15'),(117,'confirm_payment','Payment was confirmed (amount $230.00) by %user_name%',0,27,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(118,'create_shipment','Created shipment for order',0,27,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(119,'create_order_from_seeder','Order is created from the checkout page',NULL,28,NULL,'2022-12-09 01:35:15','2022-12-09 01:35:15'),(120,'confirm_order','Order was verified by %user_name%',0,28,NULL,'2022-12-09 01:35:15','2022-12-09 01:35:15'),(121,'confirm_payment','Payment was confirmed (amount $197.00) by %user_name%',0,28,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(122,'create_shipment','Created shipment for order',0,28,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(123,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,28,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(124,'create_order_from_seeder','Order is created from the checkout page',NULL,29,NULL,'2022-12-04 11:35:15','2022-12-04 11:35:15'),(125,'confirm_order','Order was verified by %user_name%',0,29,NULL,'2022-12-04 11:35:15','2022-12-04 11:35:15'),(126,'create_shipment','Created shipment for order',0,29,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(127,'create_order_from_seeder','Order is created from the checkout page',NULL,30,NULL,'2022-12-03 13:35:15','2022-12-03 13:35:15'),(128,'confirm_order','Order was verified by %user_name%',0,30,NULL,'2022-12-03 13:35:15','2022-12-03 13:35:15'),(129,'create_shipment','Created shipment for order',0,30,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(130,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,30,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(131,'create_order_from_seeder','Order is created from the checkout page',NULL,31,NULL,'2022-12-11 01:35:15','2022-12-11 01:35:15'),(132,'confirm_order','Order was verified by %user_name%',0,31,NULL,'2022-12-11 01:35:15','2022-12-11 01:35:15'),(133,'confirm_payment','Payment was confirmed (amount $1,677.00) by %user_name%',0,31,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(134,'create_shipment','Created shipment for order',0,31,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(135,'create_order_from_seeder','Order is created from the checkout page',NULL,32,NULL,'2022-12-09 09:35:15','2022-12-09 09:35:15'),(136,'confirm_order','Order was verified by %user_name%',0,32,NULL,'2022-12-09 09:35:15','2022-12-09 09:35:15'),(137,'create_shipment','Created shipment for order',0,32,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(138,'create_order_from_seeder','Order is created from the checkout page',NULL,33,NULL,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(139,'confirm_order','Order was verified by %user_name%',0,33,NULL,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(140,'create_shipment','Created shipment for order',0,33,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(141,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,33,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(142,'create_order_from_seeder','Order is created from the checkout page',NULL,34,NULL,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(143,'confirm_order','Order was verified by %user_name%',0,34,NULL,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(144,'confirm_payment','Payment was confirmed (amount $351.00) by %user_name%',0,34,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(145,'create_shipment','Created shipment for order',0,34,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(146,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,34,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(147,'create_order_from_seeder','Order is created from the checkout page',NULL,35,NULL,'2022-12-06 17:35:15','2022-12-06 17:35:15'),(148,'confirm_order','Order was verified by %user_name%',0,35,NULL,'2022-12-06 17:35:15','2022-12-06 17:35:15'),(149,'confirm_payment','Payment was confirmed (amount $960.00) by %user_name%',0,35,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(150,'create_shipment','Created shipment for order',0,35,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(151,'create_order_from_seeder','Order is created from the checkout page',NULL,36,NULL,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(152,'confirm_order','Order was verified by %user_name%',0,36,NULL,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(153,'confirm_payment','Payment was confirmed (amount $369.00) by %user_name%',0,36,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(154,'create_shipment','Created shipment for order',0,36,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(155,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,36,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(156,'create_order_from_seeder','Order is created from the checkout page',NULL,37,NULL,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(157,'confirm_order','Order was verified by %user_name%',0,37,NULL,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(158,'confirm_payment','Payment was confirmed (amount $224.00) by %user_name%',0,37,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(159,'create_shipment','Created shipment for order',0,37,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(160,'create_order_from_seeder','Order is created from the checkout page',NULL,38,NULL,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(161,'confirm_order','Order was verified by %user_name%',0,38,NULL,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(162,'confirm_payment','Payment was confirmed (amount $234.00) by %user_name%',0,38,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(163,'create_shipment','Created shipment for order',0,38,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(164,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,38,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(165,'create_order_from_seeder','Order is created from the checkout page',NULL,39,NULL,'2022-12-08 05:35:15','2022-12-08 05:35:15'),(166,'confirm_order','Order was verified by %user_name%',0,39,NULL,'2022-12-08 05:35:15','2022-12-08 05:35:15'),(167,'confirm_payment','Payment was confirmed (amount $258.00) by %user_name%',0,39,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(168,'create_shipment','Created shipment for order',0,39,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(169,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,39,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(170,'create_order_from_seeder','Order is created from the checkout page',NULL,40,NULL,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(171,'confirm_order','Order was verified by %user_name%',0,40,NULL,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(172,'confirm_payment','Payment was confirmed (amount $234.00) by %user_name%',0,40,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(173,'create_shipment','Created shipment for order',0,40,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(174,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,40,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(175,'create_order_from_seeder','Order is created from the checkout page',NULL,41,NULL,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(176,'confirm_order','Order was verified by %user_name%',0,41,NULL,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(177,'confirm_payment','Payment was confirmed (amount $234.00) by %user_name%',0,41,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(178,'create_shipment','Created shipment for order',0,41,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(179,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,41,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(180,'create_order_from_seeder','Order is created from the checkout page',NULL,42,NULL,'2022-12-08 13:35:15','2022-12-08 13:35:15'),(181,'confirm_order','Order was verified by %user_name%',0,42,NULL,'2022-12-08 13:35:15','2022-12-08 13:35:15'),(182,'create_shipment','Created shipment for order',0,42,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(183,'create_order_from_seeder','Order is created from the checkout page',NULL,43,NULL,'2022-12-08 23:35:15','2022-12-08 23:35:15'),(184,'confirm_order','Order was verified by %user_name%',0,43,NULL,'2022-12-08 23:35:15','2022-12-08 23:35:15'),(185,'confirm_payment','Payment was confirmed (amount $230.00) by %user_name%',0,43,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(186,'create_shipment','Created shipment for order',0,43,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(187,'create_order_from_seeder','Order is created from the checkout page',NULL,44,NULL,'2022-12-11 17:35:15','2022-12-11 17:35:15'),(188,'confirm_order','Order was verified by %user_name%',0,44,NULL,'2022-12-11 17:35:15','2022-12-11 17:35:15'),(189,'confirm_payment','Payment was confirmed (amount $916.00) by %user_name%',0,44,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(190,'create_shipment','Created shipment for order',0,44,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(191,'create_order_from_seeder','Order is created from the checkout page',NULL,45,NULL,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(192,'confirm_order','Order was verified by %user_name%',0,45,NULL,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(193,'confirm_payment','Payment was confirmed (amount $222.00) by %user_name%',0,45,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(194,'create_shipment','Created shipment for order',0,45,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(195,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,45,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(196,'create_order_from_seeder','Order is created from the checkout page',NULL,46,NULL,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(197,'confirm_order','Order was verified by %user_name%',0,46,NULL,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(198,'confirm_payment','Payment was confirmed (amount $238.00) by %user_name%',0,46,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(199,'create_shipment','Created shipment for order',0,46,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(200,'create_order_from_seeder','Order is created from the checkout page',NULL,47,NULL,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(201,'confirm_order','Order was verified by %user_name%',0,47,NULL,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(202,'confirm_payment','Payment was confirmed (amount $351.00) by %user_name%',0,47,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(203,'create_shipment','Created shipment for order',0,47,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(204,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,47,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(205,'create_order_from_seeder','Order is created from the checkout page',NULL,48,NULL,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(206,'confirm_order','Order was verified by %user_name%',0,48,NULL,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(207,'create_shipment','Created shipment for order',0,48,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(208,'create_order_from_seeder','Order is created from the checkout page',NULL,49,NULL,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(209,'confirm_order','Order was verified by %user_name%',0,49,NULL,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(210,'create_shipment','Created shipment for order',0,49,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(211,'create_order_from_seeder','Order is created from the checkout page',NULL,50,NULL,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(212,'confirm_order','Order was verified by %user_name%',0,50,NULL,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(213,'confirm_payment','Payment was confirmed (amount $222.00) by %user_name%',0,50,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(214,'create_shipment','Created shipment for order',0,50,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(215,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,50,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(216,'create_order_from_seeder','Order is created from the checkout page',NULL,51,NULL,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(217,'confirm_order','Order was verified by %user_name%',0,51,NULL,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(218,'confirm_payment','Payment was confirmed (amount $579.00) by %user_name%',0,51,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(219,'create_shipment','Created shipment for order',0,51,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(220,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,51,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(221,'update_status','Order confirmed by %user_name%',0,1,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(222,'update_status','Order confirmed by %user_name%',0,2,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(223,'update_status','Order confirmed by %user_name%',0,5,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(224,'update_status','Order confirmed by %user_name%',0,7,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(225,'update_status','Order confirmed by %user_name%',0,8,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(226,'update_status','Order confirmed by %user_name%',0,10,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(227,'update_status','Order confirmed by %user_name%',0,11,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(228,'update_status','Order confirmed by %user_name%',0,13,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(229,'update_status','Order confirmed by %user_name%',0,15,NULL,'2022-12-12 17:35:16','2022-12-12 17:35:16'),(230,'update_status','Order confirmed by %user_name%',0,17,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(231,'update_status','Order confirmed by %user_name%',0,21,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(232,'update_status','Order confirmed by %user_name%',0,26,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(233,'update_status','Order confirmed by %user_name%',0,28,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(234,'update_status','Order confirmed by %user_name%',0,34,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(235,'update_status','Order confirmed by %user_name%',0,36,NULL,'2022-12-12 17:35:17','2022-12-12 17:35:17'),(236,'update_status','Order confirmed by %user_name%',0,38,NULL,'2022-12-12 17:35:18','2022-12-12 17:35:18'),(237,'update_status','Order confirmed by %user_name%',0,39,NULL,'2022-12-12 17:35:18','2022-12-12 17:35:18'),(238,'update_status','Order confirmed by %user_name%',0,40,NULL,'2022-12-12 17:35:18','2022-12-12 17:35:18'),(239,'update_status','Order confirmed by %user_name%',0,41,NULL,'2022-12-12 17:35:18','2022-12-12 17:35:18'),(240,'update_status','Order confirmed by %user_name%',0,45,NULL,'2022-12-12 17:35:18','2022-12-12 17:35:18'),(241,'update_status','Order confirmed by %user_name%',0,47,NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19'),(242,'update_status','Order confirmed by %user_name%',0,50,NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19'),(243,'update_status','Order confirmed by %user_name%',0,51,NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19');
/*!40000 ALTER TABLE `ec_order_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_product`
--

DROP TABLE IF EXISTS `ec_order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `qty` int NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `tax_amount` decimal(15,2) NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `product_options` text COLLATE utf8mb4_unicode_ci COMMENT 'product option data',
  `product_id` int unsigned DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double(8,2) DEFAULT '0.00',
  `restock_quantity` int unsigned DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'physical',
  `times_downloaded` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_product`
--

LOCK TABLES `ec_order_product` WRITE;
/*!40000 ALTER TABLE `ec_order_product` DISABLE KEYS */;
INSERT INTO `ec_order_product` VALUES (1,1,1,340.00,0.00,'[]',NULL,28,'All Natural Italian-Style Chicken Meatballs',NULL,524.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(2,2,2,240.00,0.00,'[]',NULL,51,'Haagen-Dazs Caramel Cone Ice Cream',NULL,1288.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(3,2,1,240.00,0.00,'[]',NULL,54,'Haagen-Dazs Caramel Cone Ice Cream',NULL,644.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(4,3,1,123.00,0.00,'[]',NULL,57,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,874.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(5,4,2,52.00,0.00,'[]',NULL,41,'Chobani Complete Vanilla Greek',NULL,1106.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(6,5,2,117.00,0.00,'[]',NULL,63,'Oroweat Country Buttermilk Bread',NULL,1754.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(7,6,2,119.00,0.00,'[]',NULL,66,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,1792.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(8,7,1,115.00,0.00,'[]',NULL,73,'Simply Lemonade with Raspberry Juice',NULL,859.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(9,8,2,111.00,0.00,'[]',NULL,70,'All Natural Italian-Style Chicken Meatballs',NULL,1278.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(10,9,1,115.00,0.00,'[]',NULL,72,'Simply Lemonade with Raspberry Juice',NULL,859.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(11,10,3,117.00,0.00,'[]',NULL,75,'Perdue Simply Smart Organics Gluten Free',NULL,1611.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(12,11,1,74.00,0.00,'[]',NULL,36,'Foster Farms Takeout Crispy Classic',NULL,605.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(13,11,3,74.00,0.00,'[]',NULL,37,'Foster Farms Takeout Crispy Classic',NULL,1815.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(14,12,2,115.00,0.00,'[]',NULL,42,'Canada Dry Ginger Ale – 2 L Bottle',NULL,1342.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(15,13,3,129.00,0.00,'[]',NULL,62,'Organic Frozen Triple Berry Blend',NULL,2643.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(16,14,3,115.00,0.00,'[]',NULL,47,'Encore Seafoods Stuffed Alaskan',NULL,2133.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(17,15,1,240.00,0.00,'[]',NULL,53,'Haagen-Dazs Caramel Cone Ice Cream',NULL,644.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(18,15,2,115.00,0.00,'[]',NULL,73,'Simply Lemonade with Raspberry Juice',NULL,1718.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(19,16,2,110.00,0.00,'[]',NULL,83,'Signature Wood-Fired Mushroom and Caramelized',NULL,1208.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(20,17,3,458.00,0.00,'[]',NULL,32,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,2157.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(21,17,1,117.00,0.00,'[]',NULL,78,'Organic Cage-Free Grade A Large Brown Eggs',NULL,540.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(22,18,2,74.00,0.00,'[]',NULL,36,'Foster Farms Takeout Crispy Classic',NULL,1210.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','physical',0),(23,19,2,74.00,0.00,'[]',NULL,37,'Foster Farms Takeout Crispy Classic',NULL,1210.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(24,19,2,123.00,0.00,'[]',NULL,59,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,1748.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(25,20,3,115.00,0.00,'[]',NULL,45,'Canada Dry Ginger Ale – 2 L Bottle',NULL,2013.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(26,21,1,458.00,0.00,'[]',NULL,32,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,719.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(27,22,1,115.00,0.00,'[]',NULL,48,'Encore Seafoods Stuffed Alaskan',NULL,711.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(28,23,3,119.00,0.00,'[]',NULL,61,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)',NULL,2271.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(29,24,1,111.00,0.00,'[]',NULL,70,'All Natural Italian-Style Chicken Meatballs',NULL,639.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(30,25,2,458.00,0.00,'[]',NULL,30,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,1438.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(31,25,2,458.00,0.00,'[]',NULL,33,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,1438.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(32,26,1,115.00,0.00,'[]',NULL,46,'Canada Dry Ginger Ale – 2 L Bottle',NULL,671.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','physical',0),(33,27,2,115.00,0.00,'[]',NULL,72,'Simply Lemonade with Raspberry Juice',NULL,1718.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(34,28,1,74.00,0.00,'[]',NULL,35,'Foster Farms Takeout Crispy Classic',NULL,605.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(35,28,1,123.00,0.00,'[]',NULL,59,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,874.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(36,29,3,117.00,0.00,'[]',NULL,76,'Chen Watermelon (Digital)',NULL,2043.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(37,30,1,111.00,0.00,'[]',NULL,81,'Colorful Banana',NULL,814.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(38,31,3,447.00,0.00,'[]',NULL,26,'Seeds of Change Organic Quinoe (Digital)',NULL,1842.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(39,31,3,112.00,0.00,'[]',NULL,69,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)',NULL,2457.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(40,32,3,74.00,0.00,'[]',NULL,35,'Foster Farms Takeout Crispy Classic',NULL,1815.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(41,33,1,123.00,0.00,'[]',NULL,59,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,874.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(42,33,3,117.00,0.00,'[]',NULL,64,'Oroweat Country Buttermilk Bread',NULL,2631.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(43,34,3,117.00,0.00,'[]',NULL,75,'Perdue Simply Smart Organics Gluten Free',NULL,1611.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(44,35,1,240.00,0.00,'[]',NULL,51,'Haagen-Dazs Caramel Cone Ice Cream',NULL,644.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(45,35,3,240.00,0.00,'[]',NULL,53,'Haagen-Dazs Caramel Cone Ice Cream',NULL,1932.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(46,36,3,123.00,0.00,'[]',NULL,59,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,2622.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(47,37,2,112.00,0.00,'[]',NULL,67,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)',NULL,1638.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(48,38,2,117.00,0.00,'[]',NULL,55,'Nestle Original Coffee-Mate Coffee Creamer',NULL,1424.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(49,39,2,129.00,0.00,'[]',NULL,62,'Organic Frozen Triple Berry Blend',NULL,1762.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(50,40,2,117.00,0.00,'[]',NULL,76,'Chen Watermelon (Digital)',NULL,1362.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(51,41,2,117.00,0.00,'[]',NULL,79,'Organic Cage-Free Grade A Large Brown Eggs',NULL,1080.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(52,42,3,123.00,0.00,'[]',NULL,57,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,2622.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(53,43,2,115.00,0.00,'[]',NULL,72,'Simply Lemonade with Raspberry Juice',NULL,1718.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(54,44,2,458.00,0.00,'[]',NULL,31,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,1438.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(55,45,3,74.00,0.00,'[]',NULL,35,'Foster Farms Takeout Crispy Classic',NULL,1815.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(56,46,2,119.00,0.00,'[]',NULL,60,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)',NULL,1514.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(57,47,3,117.00,0.00,'[]',NULL,78,'Organic Cage-Free Grade A Large Brown Eggs',NULL,1620.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(58,48,2,115.00,0.00,'[]',NULL,42,'Canada Dry Ginger Ale – 2 L Bottle',NULL,1342.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(59,49,3,119.00,0.00,'[]',NULL,61,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)',NULL,2271.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(60,50,3,74.00,0.00,'[]',NULL,36,'Foster Farms Takeout Crispy Classic',NULL,1815.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(61,51,2,117.00,0.00,'[]',NULL,56,'Nestle Original Coffee-Mate Coffee Creamer',NULL,1424.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0),(62,51,3,115.00,0.00,'[]',NULL,72,'Simply Lemonade with Raspberry Juice',NULL,2577.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','physical',0);
/*!40000 ALTER TABLE `ec_order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_referrals`
--

DROP TABLE IF EXISTS `ec_order_referrals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_referrals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing_params` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gclid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fclid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer_url` text COLLATE utf8mb4_unicode_ci,
  `referrer_domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_order_referrals_order_id_index` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_referrals`
--

LOCK TABLES `ec_order_referrals` WRITE;
/*!40000 ALTER TABLE `ec_order_referrals` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_order_referrals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_return_items`
--

DROP TABLE IF EXISTS `ec_order_return_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_return_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_return_id` int unsigned NOT NULL COMMENT 'Order return id',
  `order_product_id` int unsigned NOT NULL COMMENT 'Order product id',
  `product_id` int unsigned NOT NULL COMMENT 'Product id',
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int NOT NULL COMMENT 'Quantity return',
  `price` decimal(15,2) NOT NULL COMMENT 'Price Product',
  `reason` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_return_items`
--

LOCK TABLES `ec_order_return_items` WRITE;
/*!40000 ALTER TABLE `ec_order_return_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_order_return_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_order_returns`
--

DROP TABLE IF EXISTS `ec_order_returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_order_returns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int unsigned NOT NULL COMMENT 'Order ID',
  `store_id` int unsigned DEFAULT NULL COMMENT 'Store ID',
  `user_id` int unsigned NOT NULL COMMENT 'Customer ID',
  `reason` text COLLATE utf8mb4_unicode_ci COMMENT 'Reason return order',
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Order current status',
  `return_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Return status',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ec_order_returns_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_order_returns`
--

LOCK TABLES `ec_order_returns` WRITE;
/*!40000 ALTER TABLE `ec_order_returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_order_returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_orders`
--

DROP TABLE IF EXISTS `ec_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `shipping_option` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `status` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `amount` decimal(15,2) NOT NULL,
  `tax_amount` decimal(15,2) DEFAULT NULL,
  `shipping_amount` decimal(15,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `coupon_code` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` decimal(15,2) DEFAULT NULL,
  `sub_total` decimal(15,2) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_finished` tinyint(1) DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ec_orders_code_unique` (`code`),
  KEY `ec_orders_user_id_status_created_at_index` (`user_id`,`status`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_orders`
--

LOCK TABLES `ec_orders` WRITE;
/*!40000 ALTER TABLE `ec_orders` DISABLE KEYS */;
INSERT INTO `ec_orders` VALUES (1,'#10000001',1,'1','default','completed',340.00,0.00,0.00,NULL,NULL,0.00,340.00,1,NULL,1,'2022-12-12 17:35:15','guopcjWO8jiCJr7G6rXaFXMsBrZna',1,'2022-11-27 17:35:10','2022-12-12 17:35:15',1),(2,'#10000002',1,'1','default','completed',720.00,0.00,0.00,NULL,NULL,0.00,720.00,1,NULL,1,'2022-12-12 17:35:15','p49HGomL8kksciIRehMKoTQWEZlkf',2,'2022-11-29 09:35:11','2022-12-12 17:35:15',4),(3,'#10000003',1,'1','default','pending',123.00,0.00,0.00,NULL,NULL,0.00,123.00,1,NULL,1,NULL,'kpKsR1r248c3oKTHQBayjT3TfJABe',3,'2022-11-26 01:35:11','2022-12-12 17:35:11',5),(4,'#10000004',10,'1','default','completed',104.00,0.00,0.00,NULL,NULL,0.00,104.00,1,NULL,1,'2022-12-12 17:35:11','W1JOck2wXC0AngUuIEmyb2uHnMW72',4,'2022-12-06 09:35:11','2022-12-12 17:35:11',2),(5,'#10000005',10,'1','default','completed',234.00,0.00,0.00,NULL,NULL,0.00,234.00,1,NULL,1,'2022-12-12 17:35:15','H0PkZUjarUNDZvMKh6KPihcXdDvtD',5,'2022-11-28 11:35:11','2022-12-12 17:35:15',5),(6,'#10000006',10,'1','default','completed',238.00,0.00,0.00,NULL,NULL,0.00,238.00,1,NULL,1,'2022-12-12 17:35:11','hISj0KLPwV49qQOtKTve6Ou2zClyr',6,'2022-12-06 09:35:11','2022-12-12 17:35:11',1),(7,'#10000007',10,'1','default','completed',115.00,0.00,0.00,NULL,NULL,0.00,115.00,1,NULL,1,'2022-12-12 17:35:16','zMO01EJi9JnSN28Z6cNRMm1lvaq7F',7,'2022-11-26 21:35:11','2022-12-12 17:35:16',4),(8,'#10000008',9,'1','default','completed',222.00,0.00,0.00,NULL,NULL,0.00,222.00,1,NULL,1,'2022-12-12 17:35:16','lTT8ZPTreFlBApLvEallHAtNUgGWu',8,'2022-12-09 17:35:11','2022-12-12 17:35:16',3),(9,'#10000009',9,'1','default','pending',115.00,0.00,0.00,NULL,NULL,0.00,115.00,1,NULL,1,NULL,'dQ4Dk9iIgHIU31OWvU7rSPFuiZNbc',9,'2022-11-29 05:35:11','2022-12-12 17:35:11',4),(10,'#10000010',9,'1','default','completed',351.00,0.00,0.00,NULL,NULL,0.00,351.00,1,NULL,1,'2022-12-12 17:35:16','AH4uKtTSTtbkz7ENqzdquTrFdDVG1',10,'2022-12-11 05:35:11','2022-12-12 17:35:16',1),(11,'#10000011',6,'1','default','completed',296.00,0.00,0.00,NULL,NULL,0.00,296.00,1,NULL,1,'2022-12-12 17:35:16','wh2afAm9PkXQCYQjoc0QuQDwAZ7hP',11,'2022-12-04 05:35:11','2022-12-12 17:35:16',5),(12,'#10000012',6,'1','default','pending',230.00,0.00,0.00,NULL,NULL,0.00,230.00,1,NULL,1,NULL,'R9JIpLBVY2RJHfmvKEBbiIPOZ5SEi',12,'2022-11-28 13:35:11','2022-12-12 17:35:11',3),(13,'#10000013',6,'1','default','completed',387.00,0.00,0.00,NULL,NULL,0.00,387.00,1,NULL,1,'2022-12-12 17:35:16','ciwIrAqe1wrchOt39wfjcoWTuiQXQ',13,'2022-12-01 09:35:11','2022-12-12 17:35:16',6),(14,'#10000014',1,'1','default','pending',345.00,0.00,0.00,NULL,NULL,0.00,345.00,1,NULL,1,NULL,'erR13b44xvEGirXtVx5d4AHQxOxEw',14,'2022-11-29 09:35:11','2022-12-12 17:35:11',6),(15,'#10000015',1,'1','default','completed',470.00,0.00,0.00,NULL,NULL,0.00,470.00,1,NULL,1,'2022-12-12 17:35:16','gL2y8Sb80MISz9VYGsEzSLMXY4sek',15,'2022-12-06 01:35:11','2022-12-12 17:35:16',4),(16,'#10000016',1,'1','default','pending',220.00,0.00,0.00,NULL,NULL,0.00,220.00,1,NULL,1,NULL,'aMUsGnDrn3pTq2OVLNmRVaoCsoBI5',16,'2022-12-03 09:35:11','2022-12-12 17:35:11',1),(17,'#10000017',9,'1','default','completed',1491.00,0.00,0.00,NULL,NULL,0.00,1491.00,1,NULL,1,'2022-12-12 17:35:17','EFb55yUV3HXmUpceuBawo8o1d9ICU',17,'2022-12-06 11:35:11','2022-12-12 17:35:17',1),(18,'#10000018',9,'1','default','completed',148.00,0.00,0.00,NULL,NULL,0.00,148.00,1,NULL,1,'2022-12-12 17:35:12','c6n7pNBQt7pZ9Pa0PGYxjPBa0jIW4',18,'2022-12-10 05:35:11','2022-12-12 17:35:12',5),(19,'#10000019',1,'1','default','pending',394.00,0.00,0.00,NULL,NULL,0.00,394.00,1,NULL,1,NULL,'tUrsMX7Cjs03aq2EdxkA6KBCjQTsT',19,'2022-12-09 05:35:14','2022-12-12 17:35:14',5),(20,'#10000020',1,'1','default','pending',345.00,0.00,0.00,NULL,NULL,0.00,345.00,1,NULL,1,NULL,'JWuVcuioBBVs10INbDDEyfI9dula5',20,'2022-12-02 05:35:14','2022-12-12 17:35:14',3),(21,'#10000021',10,'1','default','completed',458.00,0.00,0.00,NULL,NULL,0.00,458.00,1,NULL,1,'2022-12-12 17:35:17','3Ye7f2gqk07UH1pwrI8PwGSEdorCe',21,'2022-12-04 01:35:14','2022-12-12 17:35:17',1),(22,'#10000022',10,'1','default','pending',115.00,0.00,0.00,NULL,NULL,0.00,115.00,1,NULL,1,NULL,'ZpL0UsdJk2w057iJaXT5ZDhvfOceF',22,'2022-12-09 11:35:14','2022-12-12 17:35:14',6),(23,'#10000023',10,'1','default','pending',357.00,0.00,0.00,NULL,NULL,0.00,357.00,1,NULL,1,NULL,'MnLi7UlSAvdKjrPBElktfY7ry3eMy',23,'2022-12-07 07:35:14','2022-12-12 17:35:14',5),(24,'#10000024',10,'1','default','completed',111.00,0.00,0.00,NULL,NULL,0.00,111.00,1,NULL,1,'2022-12-12 17:35:14','0uOQNQJwQLgdjRScbex3uu1FXreoh',24,'2022-12-01 21:35:14','2022-12-12 17:35:14',3),(25,'#10000025',9,'1','default','pending',1832.00,0.00,0.00,NULL,NULL,0.00,1832.00,1,NULL,1,NULL,'HuTrjoTFPBRIojSPyTjZrs5HKkabk',25,'2022-12-03 17:35:14','2022-12-12 17:35:14',1),(26,'#10000026',9,'1','default','completed',115.00,0.00,0.00,NULL,NULL,0.00,115.00,1,NULL,1,'2022-12-12 17:35:17','DHCOsbKMKcY7JQNlJnOp78VIfDKCn',26,'2022-12-07 17:35:14','2022-12-12 17:35:17',3),(27,'#10000027',9,'1','default','pending',230.00,0.00,0.00,NULL,NULL,0.00,230.00,1,NULL,1,NULL,'cZPQePepM4rql3wwp4FJm2vAzJIl6',27,'2022-12-05 17:35:15','2022-12-12 17:35:15',4),(28,'#10000028',6,'1','default','completed',197.00,0.00,0.00,NULL,NULL,0.00,197.00,1,NULL,1,'2022-12-12 17:35:17','mRPZlY0Q75G8BZPCjNWzIqzCnXkyo',28,'2022-12-09 01:35:15','2022-12-12 17:35:17',5),(29,'#10000029',6,'1','default','pending',351.00,0.00,0.00,NULL,NULL,0.00,351.00,1,NULL,1,NULL,'osWwWnQnJj0rqbz2ARR9QPTyPKdEa',29,'2022-12-04 11:35:15','2022-12-12 17:35:15',3),(30,'#10000030',6,'1','default','completed',111.00,0.00,0.00,NULL,NULL,0.00,111.00,1,NULL,1,'2022-12-12 17:35:15','QzNy8pJxWcmCCkqeN2l1lPIRP6pm5',30,'2022-12-03 13:35:15','2022-12-12 17:35:15',2),(31,'#10000031',6,'1','default','pending',1677.00,0.00,0.00,NULL,NULL,0.00,1677.00,1,NULL,1,NULL,'35xMjEbdLHYwBBXEEpWu4M11gBG3H',31,'2022-12-11 01:35:15','2022-12-12 17:35:15',2),(32,'#10000032',6,'1','default','pending',222.00,0.00,0.00,NULL,NULL,0.00,222.00,1,NULL,1,NULL,'OYCGPJkSXOvG3pO2EQkcenuMfvRaU',32,'2022-12-09 09:35:15','2022-12-12 17:35:15',5),(33,'#10000033',6,'1','default','completed',474.00,0.00,0.00,NULL,NULL,0.00,474.00,1,NULL,1,'2022-12-12 17:35:15','xoXg3EjOOvJutG4LTCT3APVjPV4QU',33,'2022-12-11 23:35:15','2022-12-12 17:35:15',5),(34,'#10000034',6,'1','default','completed',351.00,0.00,0.00,NULL,NULL,0.00,351.00,1,NULL,1,'2022-12-12 17:35:17','yJdDazj17xYD70UpxGn3F2sZNY9Md',34,'2022-12-11 05:35:15','2022-12-12 17:35:17',1),(35,'#10000035',1,'1','default','pending',960.00,0.00,0.00,NULL,NULL,0.00,960.00,1,NULL,1,NULL,'Tvsih7pF7zwWRABOWHJo1qiU6Dvv8',35,'2022-12-06 17:35:15','2022-12-12 17:35:15',4),(36,'#10000036',9,'1','default','completed',369.00,0.00,0.00,NULL,NULL,0.00,369.00,1,NULL,1,'2022-12-12 17:35:17','x6trS1q3aXynDuAQt5EXRTxTmV8qt',36,'2022-12-12 03:35:15','2022-12-12 17:35:17',5),(37,'#10000037',9,'1','default','pending',224.00,0.00,0.00,NULL,NULL,0.00,224.00,1,NULL,1,NULL,'vnQxRUAVgP6XjxwCIAiUkEDjabA0O',37,'2022-12-12 03:35:15','2022-12-12 17:35:15',2),(38,'#10000038',6,'1','default','completed',234.00,0.00,0.00,NULL,NULL,0.00,234.00,1,NULL,1,'2022-12-12 17:35:18','e5Anp5YOyUuo0bC5lQevjYSmoOc08',38,'2022-12-11 05:35:15','2022-12-12 17:35:18',4),(39,'#10000039',6,'1','default','completed',258.00,0.00,0.00,NULL,NULL,0.00,258.00,1,NULL,1,'2022-12-12 17:35:18','BTYU9afwj7jB9Drr2aKwvo4pr0Yrm',39,'2022-12-08 05:35:15','2022-12-12 17:35:18',6),(40,'#10000040',6,'1','default','completed',234.00,0.00,0.00,NULL,NULL,0.00,234.00,1,NULL,1,'2022-12-12 17:35:18','irb5ZovjzQ01UGs4YQr1khyTgTMVQ',40,'2022-12-09 17:35:15','2022-12-12 17:35:18',3),(41,'#10000041',6,'1','default','completed',234.00,0.00,0.00,NULL,NULL,0.00,234.00,1,NULL,1,'2022-12-12 17:35:18','p79OE38BPGhD0AhUHZWAUBauKhbp6',41,'2022-12-09 17:35:15','2022-12-12 17:35:18',1),(42,'#10000042',1,'1','default','pending',369.00,0.00,0.00,NULL,NULL,0.00,369.00,1,NULL,1,NULL,'xSedRuG3nPejdV5Rt84jpmKBhlPbz',42,'2022-12-08 13:35:15','2022-12-12 17:35:15',5),(43,'#10000043',1,'1','default','pending',230.00,0.00,0.00,NULL,NULL,0.00,230.00,1,NULL,1,NULL,'Wgf8DNpJQ0ERG3AX1Pxb6XXPmiurZ',43,'2022-12-08 23:35:15','2022-12-12 17:35:15',4),(44,'#10000044',10,'1','default','pending',916.00,0.00,0.00,NULL,NULL,0.00,916.00,1,NULL,1,NULL,'SssTx0AquOnmE00t3XIIOz4LRWzAW',44,'2022-12-11 17:35:15','2022-12-12 17:35:15',1),(45,'#10000045',10,'1','default','completed',222.00,0.00,0.00,NULL,NULL,0.00,222.00,1,NULL,1,'2022-12-12 17:35:18','q5GkxMdKhTkpL8dcbqMabDR3cdLtX',45,'2022-12-12 09:35:15','2022-12-12 17:35:18',5),(46,'#10000046',1,'1','default','pending',238.00,0.00,0.00,NULL,NULL,0.00,238.00,1,NULL,1,NULL,'uc1QyC2IkqnyjaRq2qZTdh8OeHKP3',46,'2022-12-12 11:35:15','2022-12-12 17:35:15',5),(47,'#10000047',1,'1','default','completed',351.00,0.00,0.00,NULL,NULL,0.00,351.00,1,NULL,1,'2022-12-12 17:35:19','UPSXBV9FTOuBcWR5GzDWa9mernTSE',47,'2022-12-12 11:35:15','2022-12-12 17:35:19',1),(48,'#10000048',9,'1','default','pending',230.00,0.00,0.00,NULL,NULL,0.00,230.00,1,NULL,1,NULL,'3qmUSaDOyBBTARDkTwrCopNTqJJg0',48,'2022-12-12 09:35:15','2022-12-12 17:35:15',3),(49,'#10000049',9,'1','default','pending',357.00,0.00,0.00,NULL,NULL,0.00,357.00,1,NULL,1,NULL,'ichYJvfnEsDxoLx0LijuCHD5kOEqj',49,'2022-12-11 21:35:15','2022-12-12 17:35:15',5),(50,'#10000050',9,'1','default','completed',222.00,0.00,0.00,NULL,NULL,0.00,222.00,1,NULL,1,'2022-12-12 17:35:19','sOtXgBmiNXY3QwRiYzCVzgdEBzsJc',50,'2022-12-11 23:35:15','2022-12-12 17:35:19',5),(51,'#10000051',9,'1','default','completed',579.00,0.00,0.00,NULL,NULL,0.00,579.00,1,NULL,1,'2022-12-12 17:35:19','F2xmtcfmI1pC0mlTbsWOxtLVCGRSI',51,'2022-12-11 21:35:15','2022-12-12 17:35:19',4);
/*!40000 ALTER TABLE `ec_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_attribute_sets`
--

DROP TABLE IF EXISTS `ec_product_attribute_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_attribute_sets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_layout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'swatch_dropdown',
  `is_searchable` tinyint unsigned NOT NULL DEFAULT '1',
  `is_comparable` tinyint unsigned NOT NULL DEFAULT '1',
  `is_use_in_product_listing` tinyint unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `use_image_from_product_variation` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_attribute_sets`
--

LOCK TABLES `ec_product_attribute_sets` WRITE;
/*!40000 ALTER TABLE `ec_product_attribute_sets` DISABLE KEYS */;
INSERT INTO `ec_product_attribute_sets` VALUES (1,'Weight','weight','text',1,1,1,'published',0,'2022-12-12 17:34:52','2022-12-12 17:34:52',0),(2,'Boxes','boxes','text',1,1,1,'published',1,'2022-12-12 17:34:52','2022-12-12 17:34:52',0);
/*!40000 ALTER TABLE `ec_product_attribute_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_attribute_sets_translations`
--

DROP TABLE IF EXISTS `ec_product_attribute_sets_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_attribute_sets_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_attribute_sets_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_product_attribute_sets_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_attribute_sets_translations`
--

LOCK TABLES `ec_product_attribute_sets_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_attribute_sets_translations` DISABLE KEYS */;
INSERT INTO `ec_product_attribute_sets_translations` VALUES ('vi',1,'Cân nặng'),('vi',2,'Số hộp');
/*!40000 ALTER TABLE `ec_product_attribute_sets_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_attributes`
--

DROP TABLE IF EXISTS `ec_product_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attribute_set_id` int unsigned NOT NULL,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_attributes_attribute_set_id_status_index` (`attribute_set_id`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_attributes`
--

LOCK TABLES `ec_product_attributes` WRITE;
/*!40000 ALTER TABLE `ec_product_attributes` DISABLE KEYS */;
INSERT INTO `ec_product_attributes` VALUES (1,1,'1KG','1kg',NULL,NULL,1,1,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(2,1,'2KG','2kg',NULL,NULL,0,2,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(3,1,'3KG','3kg',NULL,NULL,0,3,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(4,1,'4KG','4kg',NULL,NULL,0,4,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(5,1,'5KG','5kg',NULL,NULL,0,5,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(6,2,'1 Box','1box',NULL,NULL,1,1,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(7,2,'2 Boxes','2boxes',NULL,NULL,0,2,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(8,2,'3 Boxes','3boxes',NULL,NULL,0,3,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(9,2,'4 Boxes','4boxes',NULL,NULL,0,4,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(10,2,'5 Boxes','5boxes',NULL,NULL,0,5,'published','2022-12-12 17:34:52','2022-12-12 17:34:52');
/*!40000 ALTER TABLE `ec_product_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_attributes_translations`
--

DROP TABLE IF EXISTS `ec_product_attributes_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_attributes_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_attributes_id` int NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_product_attributes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_attributes_translations`
--

LOCK TABLES `ec_product_attributes_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_attributes_translations` DISABLE KEYS */;
INSERT INTO `ec_product_attributes_translations` VALUES ('vi',1,'1KG'),('vi',2,'2KG'),('vi',3,'3KG'),('vi',4,'4KG'),('vi',5,'5KG'),('vi',6,'1 Hộp'),('vi',7,'2 Hộp'),('vi',8,'3 Hộp'),('vi',9,'4 Hộp'),('vi',10,'5 Hộp');
/*!40000 ALTER TABLE `ec_product_attributes_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_categories`
--

DROP TABLE IF EXISTS `ec_product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int unsigned NOT NULL DEFAULT '0',
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `order` int unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_categories_parent_id_status_created_at_index` (`parent_id`,`status`,`created_at`),
  KEY `ec_product_categories_parent_id_status_index` (`parent_id`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_categories`
--

LOCK TABLES `ec_product_categories` WRITE;
/*!40000 ALTER TABLE `ec_product_categories` DISABLE KEYS */;
INSERT INTO `ec_product_categories` VALUES (1,'Milks and Dairies',0,NULL,'published',0,'product-categories/image-1.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(2,'Clothing & beauty',0,NULL,'published',1,'product-categories/image-2.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(3,'Pet Toy',0,NULL,'published',2,'product-categories/image-3.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(4,'Baking material',0,NULL,'published',3,'product-categories/image-4.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(5,'Fresh Fruit',0,NULL,'published',4,'product-categories/image-5.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(6,'Wines & Drinks',0,NULL,'published',5,'product-categories/image-6.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(7,'Fresh Seafood',0,NULL,'published',6,'product-categories/image-7.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(8,'Fast food',0,NULL,'published',7,'product-categories/image-8.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(9,'Vegetables',0,NULL,'published',8,'product-categories/image-9.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(10,'Bread and Juice',0,NULL,'published',9,'product-categories/image-10.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(11,'Cake & Milk',0,NULL,'published',10,'product-categories/image-11.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(12,'Coffee & Teas',0,NULL,'published',11,'product-categories/image-12.png',1,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(13,'Pet Foods',0,NULL,'published',12,'product-categories/image-13.png',0,'2022-12-12 17:34:51','2022-12-12 17:34:51'),(14,'Diet Foods',0,NULL,'published',13,'product-categories/image-14.png',0,'2022-12-12 17:34:51','2022-12-12 17:34:51');
/*!40000 ALTER TABLE `ec_product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_categories_translations`
--

DROP TABLE IF EXISTS `ec_product_categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_categories_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_categories_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`ec_product_categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_categories_translations`
--

LOCK TABLES `ec_product_categories_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_categories_translations` DISABLE KEYS */;
INSERT INTO `ec_product_categories_translations` VALUES ('vi',1,'Sữa',NULL),('vi',2,'Quần áo và làm đẹp',NULL),('vi',3,'Đồ chơi thú cưng',NULL),('vi',4,'Nguyên liệu làm bánh',NULL),('vi',5,'Trái cây tươi',NULL),('vi',6,'Rượu & Đồ uống',NULL),('vi',7,'Hải sản tươi sống',NULL),('vi',8,'Đồ ăn nhanh',NULL),('vi',9,'Rau',NULL),('vi',10,'Bánh và đồ uống',NULL),('vi',11,'Bánh và sữa',NULL),('vi',12,'Cà phê và trà',NULL),('vi',13,'Đồ ăn thú nuôi',NULL),('vi',14,'Đồ ăn kiêng',NULL);
/*!40000 ALTER TABLE `ec_product_categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_category_product`
--

DROP TABLE IF EXISTS `ec_product_category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_category_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_category_product_category_id_index` (`category_id`),
  KEY `ec_product_category_product_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_category_product`
--

LOCK TABLES `ec_product_category_product` WRITE;
/*!40000 ALTER TABLE `ec_product_category_product` DISABLE KEYS */;
INSERT INTO `ec_product_category_product` VALUES (1,11,1),(2,11,2),(3,11,3),(4,14,4),(5,5,5),(6,9,6),(7,1,7),(8,10,8),(9,11,9),(10,13,10),(11,9,11),(12,4,12),(13,10,13),(14,2,14),(15,2,15),(16,7,16),(17,13,17),(18,3,18),(19,9,19),(20,3,20),(21,12,21),(22,1,22),(23,4,23),(24,8,24);
/*!40000 ALTER TABLE `ec_product_category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_collection_products`
--

DROP TABLE IF EXISTS `ec_product_collection_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_collection_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_collection_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_collection_products_product_collection_id_index` (`product_collection_id`),
  KEY `ec_product_collection_products_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_collection_products`
--

LOCK TABLES `ec_product_collection_products` WRITE;
/*!40000 ALTER TABLE `ec_product_collection_products` DISABLE KEYS */;
INSERT INTO `ec_product_collection_products` VALUES (1,3,1),(2,1,2),(3,2,3),(4,3,4),(5,1,5),(6,2,6),(7,3,7),(8,1,8),(9,1,9),(10,3,10),(11,2,11),(12,1,12),(13,1,13),(14,3,14),(15,2,15),(16,3,16),(17,3,17),(18,2,18),(19,3,19),(20,1,20),(21,3,21),(22,2,22),(23,2,23),(24,2,24);
/*!40000 ALTER TABLE `ec_product_collection_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_collections`
--

DROP TABLE IF EXISTS `ec_product_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_collections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_collections`
--

LOCK TABLES `ec_product_collections` WRITE;
/*!40000 ALTER TABLE `ec_product_collections` DISABLE KEYS */;
INSERT INTO `ec_product_collections` VALUES (1,'New Arrival','new-arrival',NULL,NULL,'published','2022-12-12 17:34:51','2022-12-12 17:34:51',0),(2,'Best Sellers','best-sellers',NULL,NULL,'published','2022-12-12 17:34:51','2022-12-12 17:34:51',0),(3,'Special Offer','special-offer',NULL,NULL,'published','2022-12-12 17:34:51','2022-12-12 17:34:51',0);
/*!40000 ALTER TABLE `ec_product_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_collections_translations`
--

DROP TABLE IF EXISTS `ec_product_collections_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_collections_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_collections_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_product_collections_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_collections_translations`
--

LOCK TABLES `ec_product_collections_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_collections_translations` DISABLE KEYS */;
INSERT INTO `ec_product_collections_translations` VALUES ('vi',1,'Hàng mới về',NULL),('vi',2,'Bán chạy nhất',NULL),('vi',3,'Khuyến mãi đặc biệt',NULL);
/*!40000 ALTER TABLE `ec_product_collections_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_cross_sale_relations`
--

DROP TABLE IF EXISTS `ec_product_cross_sale_relations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_cross_sale_relations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_product_id` int unsigned NOT NULL,
  `to_product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_cross_sale_relations_from_product_id_index` (`from_product_id`),
  KEY `ec_product_cross_sale_relations_to_product_id_index` (`to_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_cross_sale_relations`
--

LOCK TABLES `ec_product_cross_sale_relations` WRITE;
/*!40000 ALTER TABLE `ec_product_cross_sale_relations` DISABLE KEYS */;
INSERT INTO `ec_product_cross_sale_relations` VALUES (1,1,21),(2,1,10),(3,1,3),(4,1,18),(5,2,7),(6,2,16),(7,2,19),(8,2,18),(9,3,17),(10,3,23),(11,3,24),(12,3,4),(13,4,8),(14,4,15),(15,4,19),(16,4,11),(17,5,10),(18,5,18),(19,5,2),(20,5,16),(21,6,9),(22,6,19),(23,6,5),(24,6,7),(25,7,1),(26,7,5),(27,7,15),(28,7,19),(29,8,19),(30,8,17),(31,8,16),(32,9,17),(33,9,12),(34,10,16),(35,10,9),(36,10,21),(37,10,1),(38,11,8),(39,11,19),(40,11,7),(41,11,1),(42,12,17),(43,12,15),(44,12,6),(45,12,18),(46,13,4),(47,13,1),(48,13,10),(49,13,20),(50,14,17),(51,14,24),(52,14,2),(53,15,8),(54,15,20),(55,15,1),(56,15,19),(57,16,17),(58,16,5),(59,16,8),(60,16,14),(61,17,18),(62,17,13),(63,17,16),(64,17,4),(65,18,14),(66,18,24),(67,18,15),(68,18,10),(69,19,13),(70,19,18),(71,19,21),(72,20,19),(73,20,10),(74,21,6),(75,21,10),(76,21,8),(77,22,11),(78,22,24),(79,22,13),(80,22,1),(81,23,16),(82,23,17),(83,23,14),(84,24,13),(85,24,16),(86,24,1),(87,24,10);
/*!40000 ALTER TABLE `ec_product_cross_sale_relations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_files`
--

DROP TABLE IF EXISTS `ec_product_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `url` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extras` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_files_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_files`
--

LOCK TABLES `ec_product_files` WRITE;
/*!40000 ALTER TABLE `ec_product_files` DISABLE KEYS */;
INSERT INTO `ec_product_files` VALUES (1,25,'product-files/1.jpg','{\"filename\":\"1.jpg\",\"url\":\"product-files\\/1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(2,25,'product-files/1-1.jpg','{\"filename\":\"1-1.jpg\",\"url\":\"product-files\\/1-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"1-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(3,26,'product-files/1.jpg','{\"filename\":\"1.jpg\",\"url\":\"product-files\\/1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(4,26,'product-files/1-1.jpg','{\"filename\":\"1-1.jpg\",\"url\":\"product-files\\/1-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"1-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(5,38,'product-files/5.jpg','{\"filename\":\"5.jpg\",\"url\":\"product-files\\/5.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"5\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(6,38,'product-files/5-1.jpg','{\"filename\":\"5-1.jpg\",\"url\":\"product-files\\/5-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"5-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(7,39,'product-files/5.jpg','{\"filename\":\"5.jpg\",\"url\":\"product-files\\/5.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"5\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(8,39,'product-files/5-1.jpg','{\"filename\":\"5-1.jpg\",\"url\":\"product-files\\/5-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"5-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(9,50,'product-files/9.jpg','{\"filename\":\"9.jpg\",\"url\":\"product-files\\/9.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"9\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(10,50,'product-files/9-1.jpg','{\"filename\":\"9-1.jpg\",\"url\":\"product-files\\/9-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"9-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(11,60,'product-files/13.jpg','{\"filename\":\"13.jpg\",\"url\":\"product-files\\/13.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"13\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(12,60,'product-files/13-1.jpg','{\"filename\":\"13-1.jpg\",\"url\":\"product-files\\/13-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"13-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(13,61,'product-files/13.jpg','{\"filename\":\"13.jpg\",\"url\":\"product-files\\/13.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"13\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(14,61,'product-files/13-1.jpg','{\"filename\":\"13-1.jpg\",\"url\":\"product-files\\/13-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"13-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(15,67,'product-files/17.jpg','{\"filename\":\"17.jpg\",\"url\":\"product-files\\/17.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(16,67,'product-files/17-1.jpg','{\"filename\":\"17-1.jpg\",\"url\":\"product-files\\/17-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(17,68,'product-files/17.jpg','{\"filename\":\"17.jpg\",\"url\":\"product-files\\/17.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(18,68,'product-files/17-1.jpg','{\"filename\":\"17-1.jpg\",\"url\":\"product-files\\/17-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(19,69,'product-files/17.jpg','{\"filename\":\"17.jpg\",\"url\":\"product-files\\/17.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(20,69,'product-files/17-1.jpg','{\"filename\":\"17-1.jpg\",\"url\":\"product-files\\/17-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:57\",\"name\":\"17-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:57','2022-12-12 17:34:57'),(21,76,'product-files/21.jpg','{\"filename\":\"21.jpg\",\"url\":\"product-files\\/21.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:58\",\"name\":\"21\",\"extension\":\"jpg\"}','2022-12-12 17:34:58','2022-12-12 17:34:58'),(22,76,'product-files/21-1.jpg','{\"filename\":\"21-1.jpg\",\"url\":\"product-files\\/21-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:58\",\"name\":\"21-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:58','2022-12-12 17:34:58'),(23,77,'product-files/21.jpg','{\"filename\":\"21.jpg\",\"url\":\"product-files\\/21.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:58\",\"name\":\"21\",\"extension\":\"jpg\"}','2022-12-12 17:34:58','2022-12-12 17:34:58'),(24,77,'product-files/21-1.jpg','{\"filename\":\"21-1.jpg\",\"url\":\"product-files\\/21-1.jpg\",\"mime_type\":\"image\\/jpeg\",\"size\":2165,\"modified\":\"2022-12-13 00:34:58\",\"name\":\"21-1\",\"extension\":\"jpg\"}','2022-12-12 17:34:58','2022-12-12 17:34:58');
/*!40000 ALTER TABLE `ec_product_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_label_products`
--

DROP TABLE IF EXISTS `ec_product_label_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_label_products` (
  `product_label_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`product_label_id`,`product_id`),
  KEY `ec_product_label_products_product_label_id_index` (`product_label_id`),
  KEY `ec_product_label_products_product_id_index` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_label_products`
--

LOCK TABLES `ec_product_label_products` WRITE;
/*!40000 ALTER TABLE `ec_product_label_products` DISABLE KEYS */;
INSERT INTO `ec_product_label_products` VALUES (1,7),(3,14),(3,21);
/*!40000 ALTER TABLE `ec_product_label_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_labels`
--

DROP TABLE IF EXISTS `ec_product_labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_labels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_labels`
--

LOCK TABLES `ec_product_labels` WRITE;
/*!40000 ALTER TABLE `ec_product_labels` DISABLE KEYS */;
INSERT INTO `ec_product_labels` VALUES (1,'Hot','#ec2434','published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(2,'New','#00c9a7','published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(3,'Sale','#fe9931','published','2022-12-12 17:34:52','2022-12-12 17:34:52');
/*!40000 ALTER TABLE `ec_product_labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_labels_translations`
--

DROP TABLE IF EXISTS `ec_product_labels_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_labels_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_labels_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_product_labels_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_labels_translations`
--

LOCK TABLES `ec_product_labels_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_labels_translations` DISABLE KEYS */;
INSERT INTO `ec_product_labels_translations` VALUES ('vi',1,'Nổi bật',NULL),('vi',2,'Mới',NULL),('vi',3,'Giảm giá',NULL);
/*!40000 ALTER TABLE `ec_product_labels_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_related_relations`
--

DROP TABLE IF EXISTS `ec_product_related_relations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_related_relations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_product_id` int unsigned NOT NULL,
  `to_product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_related_relations_from_product_id_index` (`from_product_id`),
  KEY `ec_product_related_relations_to_product_id_index` (`to_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_related_relations`
--

LOCK TABLES `ec_product_related_relations` WRITE;
/*!40000 ALTER TABLE `ec_product_related_relations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_product_related_relations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_tag_product`
--

DROP TABLE IF EXISTS `ec_product_tag_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_tag_product` (
  `product_id` int unsigned NOT NULL,
  `tag_id` int unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`tag_id`),
  KEY `ec_product_tag_product_product_id_index` (`product_id`),
  KEY `ec_product_tag_product_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_tag_product`
--

LOCK TABLES `ec_product_tag_product` WRITE;
/*!40000 ALTER TABLE `ec_product_tag_product` DISABLE KEYS */;
INSERT INTO `ec_product_tag_product` VALUES (1,3),(1,4),(1,5),(2,2),(2,4),(2,5),(3,5),(3,6),(4,1),(4,3),(4,5),(5,2),(5,3),(5,4),(6,2),(6,5),(6,6),(7,1),(7,2),(8,2),(8,3),(9,1),(9,3),(10,1),(10,2),(10,3),(11,1),(11,4),(11,5),(12,1),(12,3),(12,6),(13,1),(13,5),(13,6),(14,2),(14,3),(14,4),(15,1),(15,3),(15,5),(16,2),(16,3),(16,4),(17,1),(17,3),(18,1),(18,2),(18,4),(19,5),(19,6),(20,3),(20,5),(20,6),(21,2),(21,5),(22,5),(22,6),(23,2),(23,6),(24,4),(24,5);
/*!40000 ALTER TABLE `ec_product_tag_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_tags`
--

DROP TABLE IF EXISTS `ec_product_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_tags`
--

LOCK TABLES `ec_product_tags` WRITE;
/*!40000 ALTER TABLE `ec_product_tags` DISABLE KEYS */;
INSERT INTO `ec_product_tags` VALUES (1,'Wallet',NULL,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(2,'Bags',NULL,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(3,'Shoes',NULL,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(4,'Clothes',NULL,'published','2022-12-12 17:34:52','2022-12-12 17:34:52'),(5,'Hand bag',NULL,'published','2022-12-12 17:34:52','2022-12-12 17:34:52');
/*!40000 ALTER TABLE `ec_product_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_tags_translations`
--

DROP TABLE IF EXISTS `ec_product_tags_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_tags_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_product_tags_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`ec_product_tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_tags_translations`
--

LOCK TABLES `ec_product_tags_translations` WRITE;
/*!40000 ALTER TABLE `ec_product_tags_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_product_tags_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_up_sale_relations`
--

DROP TABLE IF EXISTS `ec_product_up_sale_relations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_up_sale_relations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_product_id` int unsigned NOT NULL,
  `to_product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_up_sale_relations_from_product_id_index` (`from_product_id`),
  KEY `ec_product_up_sale_relations_to_product_id_index` (`to_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_up_sale_relations`
--

LOCK TABLES `ec_product_up_sale_relations` WRITE;
/*!40000 ALTER TABLE `ec_product_up_sale_relations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_product_up_sale_relations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_variation_items`
--

DROP TABLE IF EXISTS `ec_product_variation_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_variation_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` int unsigned NOT NULL,
  `variation_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_product_variation_items_attribute_id_variation_id_index` (`attribute_id`,`variation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_variation_items`
--

LOCK TABLES `ec_product_variation_items` WRITE;
/*!40000 ALTER TABLE `ec_product_variation_items` DISABLE KEYS */;
INSERT INTO `ec_product_variation_items` VALUES (7,1,4),(13,1,7),(19,1,10),(27,1,14),(33,1,17),(43,1,22),(49,1,25),(55,1,28),(57,1,29),(75,1,38),(79,1,40),(83,1,42),(99,1,50),(107,1,54),(109,1,55),(111,1,56),(113,1,57),(5,2,3),(37,2,19),(39,2,20),(51,2,26),(61,2,31),(65,2,33),(87,2,44),(89,2,45),(91,2,46),(103,2,52),(115,2,58),(1,3,1),(3,3,2),(11,3,6),(21,3,11),(35,3,18),(41,3,21),(47,3,24),(73,3,37),(77,3,39),(81,3,41),(93,3,47),(101,3,51),(23,4,12),(25,4,13),(29,4,15),(45,4,23),(59,4,30),(63,4,32),(69,4,35),(85,4,43),(95,4,48),(117,4,59),(9,5,5),(15,5,8),(17,5,9),(31,5,16),(53,5,27),(67,5,34),(71,5,36),(97,5,49),(105,5,53),(14,6,7),(16,6,8),(22,6,11),(24,6,12),(30,6,15),(34,6,17),(38,6,19),(50,6,25),(58,6,29),(64,6,32),(66,6,33),(72,6,36),(76,6,38),(78,6,39),(110,6,55),(116,6,58),(6,7,3),(12,7,6),(20,7,10),(26,7,13),(28,7,14),(32,7,16),(36,7,18),(42,7,21),(52,7,26),(56,7,28),(96,7,48),(104,7,52),(118,7,59),(2,8,1),(4,8,2),(10,8,5),(48,8,24),(60,8,30),(70,8,35),(80,8,40),(82,8,41),(92,8,46),(94,8,47),(98,8,49),(100,8,50),(108,8,54),(114,8,57),(8,9,4),(40,9,20),(54,9,27),(62,9,31),(68,9,34),(74,9,37),(86,9,43),(88,9,44),(102,9,51),(112,9,56),(18,10,9),(44,10,22),(46,10,23),(84,10,42),(90,10,45),(106,10,53);
/*!40000 ALTER TABLE `ec_product_variation_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_variations`
--

DROP TABLE IF EXISTS `ec_product_variations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_variations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned DEFAULT NULL,
  `configurable_product_id` int unsigned NOT NULL,
  `is_default` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ec_product_variations_product_id_configurable_product_id_index` (`product_id`,`configurable_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_variations`
--

LOCK TABLES `ec_product_variations` WRITE;
/*!40000 ALTER TABLE `ec_product_variations` DISABLE KEYS */;
INSERT INTO `ec_product_variations` VALUES (1,25,1,1),(2,26,1,0),(3,27,2,1),(4,28,2,0),(5,29,2,0),(6,30,3,1),(7,31,3,0),(8,32,3,0),(9,33,3,0),(10,34,4,1),(11,35,4,0),(12,36,4,0),(13,37,4,0),(14,38,5,1),(15,39,5,0),(16,40,6,1),(17,41,6,0),(18,42,7,1),(19,43,7,0),(20,44,7,0),(21,45,7,0),(22,46,7,0),(23,47,8,1),(24,48,8,0),(25,49,8,0),(26,50,9,1),(27,51,10,1),(28,52,10,0),(29,53,10,0),(30,54,10,0),(31,55,11,1),(32,56,11,0),(33,57,12,1),(34,58,12,0),(35,59,12,0),(36,60,13,1),(37,61,13,0),(38,62,14,1),(39,63,15,1),(40,64,15,0),(41,65,16,1),(42,66,16,0),(43,67,17,1),(44,68,17,0),(45,69,17,0),(46,70,18,1),(47,71,18,0),(48,72,19,1),(49,73,19,0),(50,74,20,1),(51,75,20,0),(52,76,21,1),(53,77,21,0),(54,78,22,1),(55,79,22,0),(56,80,23,1),(57,81,23,0),(58,82,24,1),(59,83,24,0);
/*!40000 ALTER TABLE `ec_product_variations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_product_with_attribute_set`
--

DROP TABLE IF EXISTS `ec_product_with_attribute_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_product_with_attribute_set` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attribute_set_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `order` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_product_with_attribute_set`
--

LOCK TABLES `ec_product_with_attribute_set` WRITE;
/*!40000 ALTER TABLE `ec_product_with_attribute_set` DISABLE KEYS */;
INSERT INTO `ec_product_with_attribute_set` VALUES (1,1,1,0),(2,2,1,0),(3,1,2,0),(4,2,2,0),(5,1,3,0),(6,2,3,0),(7,1,4,0),(8,2,4,0),(9,1,5,0),(10,2,5,0),(11,1,6,0),(12,2,6,0),(13,1,7,0),(14,2,7,0),(15,1,8,0),(16,2,8,0),(17,1,9,0),(18,2,9,0),(19,1,10,0),(20,2,10,0),(21,1,11,0),(22,2,11,0),(23,1,12,0),(24,2,12,0),(25,1,13,0),(26,2,13,0),(27,1,14,0),(28,2,14,0),(29,1,15,0),(30,2,15,0),(31,1,16,0),(32,2,16,0),(33,1,17,0),(34,2,17,0),(35,1,18,0),(36,2,18,0),(37,1,19,0),(38,2,19,0),(39,1,20,0),(40,2,20,0),(41,1,21,0),(42,2,21,0),(43,1,22,0),(44,2,22,0),(45,1,23,0),(46,2,23,0),(47,1,24,0),(48,2,24,0);
/*!40000 ALTER TABLE `ec_product_with_attribute_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_products`
--

DROP TABLE IF EXISTS `ec_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `images` text COLLATE utf8mb4_unicode_ci,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int unsigned NOT NULL DEFAULT '0',
  `quantity` int unsigned DEFAULT NULL,
  `allow_checkout_when_out_of_stock` tinyint unsigned NOT NULL DEFAULT '0',
  `with_storehouse_management` tinyint unsigned NOT NULL DEFAULT '0',
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `brand_id` int unsigned DEFAULT NULL,
  `is_variation` tinyint NOT NULL DEFAULT '0',
  `sale_type` tinyint NOT NULL DEFAULT '0',
  `price` double unsigned DEFAULT NULL,
  `sale_price` double unsigned DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `length` double(8,2) DEFAULT NULL,
  `wide` double(8,2) DEFAULT NULL,
  `height` double(8,2) DEFAULT NULL,
  `weight` double(8,2) DEFAULT NULL,
  `tax_id` int unsigned DEFAULT NULL,
  `views` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stock_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'in_stock',
  `created_by_id` int DEFAULT '0',
  `created_by_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Botble\\ACL\\Models\\User',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT 'physical',
  `store_id` int unsigned DEFAULT NULL,
  `approved_by` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ec_products_brand_id_status_is_variation_created_at_index` (`brand_id`,`status`,`is_variation`,`created_at`),
  KEY `ec_products_sale_type_index` (`sale_type`),
  KEY `ec_products_start_date_index` (`start_date`),
  KEY `ec_products_end_date_index` (`end_date`),
  KEY `ec_products_sale_price_index` (`sale_price`),
  KEY `ec_products_is_variation_index` (`is_variation`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_products`
--

LOCK TABLES `ec_products` WRITE;
/*!40000 ALTER TABLE `ec_products` DISABLE KEYS */;
INSERT INTO `ec_products` VALUES (1,'Seeds of Change Organic Quinoe (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/1.jpg\",\"products\\/1-1.jpg\"]','HS-151-A0',0,17,0,1,1,7,0,0,447,NULL,NULL,NULL,20.00,10.00,11.00,614.00,NULL,92458,'2022-12-12 17:34:56','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',2,0),(2,'All Natural Italian-Style Chicken Meatballs','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/2.jpg\",\"products\\/2-1.jpg\"]','HS-105-A0',0,15,0,1,1,7,0,0,340,NULL,NULL,NULL,18.00,14.00,14.00,524.00,NULL,130726,'2022-12-12 17:34:56','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(3,'Angie’s Boomchickapop Sweet & Salty Kettle Corn','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/3.jpg\",\"products\\/3-1.jpg\"]','HS-167-A0',0,14,0,1,1,3,0,0,458,NULL,NULL,NULL,13.00,14.00,18.00,719.00,NULL,104778,'2022-12-12 17:34:56','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(4,'Foster Farms Takeout Crispy Classic','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/4.jpg\",\"products\\/4-1.jpg\"]','HS-148-A0',0,19,0,1,1,1,0,0,74,65.12,NULL,NULL,12.00,11.00,19.00,605.00,NULL,164711,'2022-12-12 17:34:56','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',5,0),(5,'Blue Diamond Almonds Lightly (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/5.jpg\",\"products\\/5-1.jpg\"]','HS-101-A0',0,19,0,1,1,5,0,0,47,NULL,NULL,NULL,18.00,13.00,15.00,751.00,NULL,57411,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',2,0),(6,'Chobani Complete Vanilla Greek','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/6.jpg\",\"products\\/6-1.jpg\"]','HS-129-A0',0,15,0,1,1,5,0,0,52,NULL,NULL,NULL,11.00,10.00,18.00,553.00,NULL,21364,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',2,0),(7,'Canada Dry Ginger Ale – 2 L Bottle','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/7.jpg\",\"products\\/7-1.jpg\"]','HS-103-A0',0,15,0,1,1,6,0,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,88187,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',3,0),(8,'Encore Seafoods Stuffed Alaskan','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/8.jpg\",\"products\\/8-1.jpg\"]','HS-153-A0',0,19,0,1,1,4,0,0,115,103.5,NULL,NULL,12.00,11.00,18.00,711.00,NULL,193646,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',6,0),(9,'Gorton’s Beer Battered Fish Fillets (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/9.jpg\",\"products\\/9-1.jpg\"]','HS-165-A0',0,11,0,1,1,3,0,0,114,NULL,NULL,NULL,17.00,12.00,13.00,660.00,NULL,119122,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',6,0),(10,'Haagen-Dazs Caramel Cone Ice Cream','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/10.jpg\",\"products\\/10-1.jpg\"]','HS-111-A0',0,13,0,1,1,7,0,0,240,NULL,NULL,NULL,18.00,10.00,20.00,644.00,NULL,74985,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',4,0),(11,'Nestle Original Coffee-Mate Coffee Creamer','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/11.jpg\",\"products\\/11-1.jpg\"]','HS-123-A0',0,16,0,1,1,7,0,0,117,NULL,NULL,NULL,16.00,15.00,13.00,712.00,NULL,136233,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',4,0),(12,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/12.jpg\",\"products\\/12-1.jpg\"]','HS-200-A0',0,13,0,1,1,6,0,0,123,109.47,NULL,NULL,13.00,11.00,20.00,874.00,NULL,7518,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',5,0),(13,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/13.jpg\",\"products\\/13-1.jpg\"]','HS-146-A0',0,14,0,1,1,1,0,0,119,NULL,NULL,NULL,14.00,15.00,15.00,757.00,NULL,197264,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',5,0),(14,'Organic Frozen Triple Berry Blend','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/14.jpg\",\"products\\/14-1.jpg\"]','HS-185-A0',0,10,0,1,1,4,0,0,129,NULL,NULL,NULL,18.00,10.00,17.00,881.00,NULL,181623,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',6,0),(15,'Oroweat Country Buttermilk Bread','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/15.jpg\",\"products\\/15-1.jpg\"]','HS-200-A0',0,15,0,1,1,2,0,0,117,NULL,NULL,NULL,10.00,20.00,13.00,877.00,NULL,64958,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',5,0),(16,'Foster Farms Takeout Crispy Classic Buffalo Wings','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/16.jpg\",\"products\\/16-1.jpg\",\"products\\/16-2.jpg\",\"products\\/16-3.jpg\",\"products\\/16-4.jpg\",\"products\\/16-5.jpg\",\"products\\/16-6.jpg\"]','HS-165-A0',0,17,0,1,1,1,0,0,119,99.96,NULL,NULL,19.00,18.00,10.00,896.00,NULL,34895,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(17,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/17.jpg\",\"products\\/17-1.jpg\"]','HS-165-A0',0,18,0,1,1,7,0,0,112,NULL,NULL,NULL,15.00,10.00,12.00,819.00,NULL,51862,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',2,0),(18,'All Natural Italian-Style Chicken Meatballs','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/18.jpg\",\"products\\/18-1.jpg\"]','HS-137-A0',0,20,0,1,1,6,0,0,111,NULL,NULL,NULL,14.00,16.00,12.00,639.00,NULL,176460,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',3,0),(19,'Simply Lemonade with Raspberry Juice','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/19.jpg\",\"products\\/19-1.jpg\"]','HS-166-A0',0,13,0,1,1,5,0,0,115,NULL,NULL,NULL,17.00,14.00,15.00,859.00,NULL,53698,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',4,0),(20,'Perdue Simply Smart Organics Gluten Free','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/20.jpg\",\"products\\/20-1.jpg\"]','HS-189-A0',0,16,0,1,1,7,0,0,117,91.26,NULL,NULL,14.00,19.00,11.00,537.00,NULL,92098,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(21,'Chen Watermelon (Digital)','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/21.jpg\",\"products\\/21-1.jpg\"]','HS-133-A0',0,15,0,1,1,6,0,0,117,NULL,NULL,NULL,20.00,15.00,12.00,681.00,NULL,78072,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',3,0),(22,'Organic Cage-Free Grade A Large Brown Eggs','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/22.jpg\",\"products\\/22-1.jpg\"]','HS-197-A0',0,11,0,1,1,1,0,0,117,NULL,NULL,NULL,12.00,17.00,18.00,540.00,NULL,163599,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(23,'Colorful Banana','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/23.jpg\",\"products\\/23-1.jpg\"]','HS-186-A0',0,18,0,1,1,2,0,0,111,NULL,NULL,NULL,19.00,18.00,15.00,814.00,NULL,13810,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',2,0),(24,'Signature Wood-Fired Mushroom and Caramelized','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327819_a31bd967f3_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp;&nbsp; 1 Year AL Jazeera Brand Warranty</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425495800_97e79701b2_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> &nbsp; 30 Day Return Policy</p>\n<p><img src=\"https://farm66.staticflickr.com/65535/52425327779_367e302b1e_b.jpg\" alt=\"icon\" style=\"height: 15px;\" /> Cash on Delivery available</p>\n','<p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string\n    detail along the hemline. The style is completed with a drawstring hood, featuring Rains&rsquo; signature built-in\n    cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic\n    silhouette and utilitarian design details.</p>\n<p>- Casual unisex fit</p>\n\n<p>- 64% polyester, 36% polyurethane</p>\n\n<p>- Water column pressure: 4000 mm</p>\n\n<p>- Model is 187cm tall and wearing a size S / M</p>\n\n<p>- Unisex fit</p>\n\n<p>- Drawstring hood with built-in cap</p>\n\n<p>- Front placket with snap buttons</p>\n\n<p>- Ventilation under armpit</p>\n\n<p>- Adjustable cuffs</p>\n\n<p>- Double welted front pockets</p>\n\n<p>- Adjustable elastic string at hempen</p>\n\n<p>- Ultrasonically welded seams</p>\n\n<p>This is a unisex item, please check our clothing &amp; footwear sizing guide for specific Rains jacket sizing\n    information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean\n    and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising\n    from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody-\n    but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy\n    days, issuing an invitation to explore even in the most mercurial weather.</p>\n','published','[\"products\\/24.jpg\",\"products\\/24-1.jpg\"]','HS-179-A0',0,11,0,1,1,1,0,0,110,85.8,NULL,NULL,12.00,13.00,10.00,604.00,NULL,56453,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',1,0),(25,'Seeds of Change Organic Quinoe (Digital)',NULL,NULL,'published','[\"products\\/1.jpg\"]','HS-151-A0',0,17,0,1,0,7,1,0,447,NULL,NULL,NULL,20.00,10.00,11.00,614.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(26,'Seeds of Change Organic Quinoe (Digital)',NULL,NULL,'published','[\"products\\/1-1.jpg\"]','HS-151-A0-A1',0,17,0,1,0,7,1,0,447,NULL,NULL,NULL,20.00,10.00,11.00,614.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(27,'All Natural Italian-Style Chicken Meatballs',NULL,NULL,'published','[\"products\\/2.jpg\"]','HS-105-A0',0,15,0,1,0,7,1,0,340,NULL,NULL,NULL,18.00,14.00,14.00,524.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(28,'All Natural Italian-Style Chicken Meatballs',NULL,NULL,'published','[\"products\\/2-1.jpg\"]','HS-105-A0-A1',0,15,0,1,0,7,1,0,340,NULL,NULL,NULL,18.00,14.00,14.00,524.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(29,'All Natural Italian-Style Chicken Meatballs',NULL,NULL,'published','[\"products\\/2.jpg\"]','HS-105-A0-A2',0,15,0,1,0,7,1,0,340,NULL,NULL,NULL,18.00,14.00,14.00,524.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(30,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,NULL,'published','[\"products\\/3.jpg\"]','HS-167-A0',0,14,0,1,0,3,1,0,458,NULL,NULL,NULL,13.00,14.00,18.00,719.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(31,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,NULL,'published','[\"products\\/3-1.jpg\"]','HS-167-A0-A1',0,14,0,1,0,3,1,0,458,NULL,NULL,NULL,13.00,14.00,18.00,719.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(32,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,NULL,'published','[\"products\\/3.jpg\"]','HS-167-A0-A2',0,14,0,1,0,3,1,0,458,NULL,NULL,NULL,13.00,14.00,18.00,719.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(33,'Angie’s Boomchickapop Sweet & Salty Kettle Corn',NULL,NULL,'published','[\"products\\/3.jpg\"]','HS-167-A0-A3',0,14,0,1,0,3,1,0,458,NULL,NULL,NULL,13.00,14.00,18.00,719.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(34,'Foster Farms Takeout Crispy Classic',NULL,NULL,'published','[\"products\\/4.jpg\"]','HS-148-A0',0,19,0,1,0,1,1,0,74,65.12,NULL,NULL,12.00,11.00,19.00,605.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(35,'Foster Farms Takeout Crispy Classic',NULL,NULL,'published','[\"products\\/4-1.jpg\"]','HS-148-A0-A1',0,19,0,1,0,1,1,0,74,63.64,NULL,NULL,12.00,11.00,19.00,605.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(36,'Foster Farms Takeout Crispy Classic',NULL,NULL,'published','[\"products\\/4.jpg\"]','HS-148-A0-A2',0,19,0,1,0,1,1,0,74,59.2,NULL,NULL,12.00,11.00,19.00,605.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(37,'Foster Farms Takeout Crispy Classic',NULL,NULL,'published','[\"products\\/4.jpg\"]','HS-148-A0-A3',0,19,0,1,0,1,1,0,74,59.94,NULL,NULL,12.00,11.00,19.00,605.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(38,'Blue Diamond Almonds Lightly (Digital)',NULL,NULL,'published','[\"products\\/5.jpg\"]','HS-101-A0',0,19,0,1,0,5,1,0,47,NULL,NULL,NULL,18.00,13.00,15.00,751.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(39,'Blue Diamond Almonds Lightly (Digital)',NULL,NULL,'published','[\"products\\/5-1.jpg\"]','HS-101-A0-A1',0,19,0,1,0,5,1,0,47,NULL,NULL,NULL,18.00,13.00,15.00,751.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(40,'Chobani Complete Vanilla Greek',NULL,NULL,'published','[\"products\\/6.jpg\"]','HS-129-A0',0,15,0,1,0,5,1,0,52,NULL,NULL,NULL,11.00,10.00,18.00,553.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(41,'Chobani Complete Vanilla Greek',NULL,NULL,'published','[\"products\\/6-1.jpg\"]','HS-129-A0-A1',0,15,0,1,0,5,1,0,52,NULL,NULL,NULL,11.00,10.00,18.00,553.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(42,'Canada Dry Ginger Ale – 2 L Bottle',NULL,NULL,'published','[\"products\\/7.jpg\"]','HS-103-A0',0,15,0,1,0,6,1,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(43,'Canada Dry Ginger Ale – 2 L Bottle',NULL,NULL,'published','[\"products\\/7-1.jpg\"]','HS-103-A0-A1',0,15,0,1,0,6,1,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(44,'Canada Dry Ginger Ale – 2 L Bottle',NULL,NULL,'published','[\"products\\/7.jpg\"]','HS-103-A0-A2',0,15,0,1,0,6,1,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(45,'Canada Dry Ginger Ale – 2 L Bottle',NULL,NULL,'published','[\"products\\/7.jpg\"]','HS-103-A0-A3',0,15,0,1,0,6,1,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(46,'Canada Dry Ginger Ale – 2 L Bottle',NULL,NULL,'published','[\"products\\/7.jpg\"]','HS-103-A0-A4',0,15,0,1,0,6,1,0,115,NULL,NULL,NULL,12.00,18.00,19.00,671.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(47,'Encore Seafoods Stuffed Alaskan',NULL,NULL,'published','[\"products\\/8.jpg\"]','HS-153-A0',0,19,0,1,0,4,1,0,115,103.5,NULL,NULL,12.00,11.00,18.00,711.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(48,'Encore Seafoods Stuffed Alaskan',NULL,NULL,'published','[\"products\\/8-1.jpg\"]','HS-153-A0-A1',0,19,0,1,0,4,1,0,115,89.7,NULL,NULL,12.00,11.00,18.00,711.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(49,'Encore Seafoods Stuffed Alaskan',NULL,NULL,'published','[\"products\\/8.jpg\"]','HS-153-A0-A2',0,19,0,1,0,4,1,0,115,103.5,NULL,NULL,12.00,11.00,18.00,711.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(50,'Gorton’s Beer Battered Fish Fillets (Digital)',NULL,NULL,'published','[\"products\\/9.jpg\"]','HS-165-A0',0,11,0,1,0,3,1,0,114,NULL,NULL,NULL,17.00,12.00,13.00,660.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(51,'Haagen-Dazs Caramel Cone Ice Cream',NULL,NULL,'published','[\"products\\/10.jpg\"]','HS-111-A0',0,13,0,1,0,7,1,0,240,NULL,NULL,NULL,18.00,10.00,20.00,644.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(52,'Haagen-Dazs Caramel Cone Ice Cream',NULL,NULL,'published','[\"products\\/10-1.jpg\"]','HS-111-A0-A1',0,13,0,1,0,7,1,0,240,NULL,NULL,NULL,18.00,10.00,20.00,644.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(53,'Haagen-Dazs Caramel Cone Ice Cream',NULL,NULL,'published','[\"products\\/10.jpg\"]','HS-111-A0-A2',0,13,0,1,0,7,1,0,240,NULL,NULL,NULL,18.00,10.00,20.00,644.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(54,'Haagen-Dazs Caramel Cone Ice Cream',NULL,NULL,'published','[\"products\\/10.jpg\"]','HS-111-A0-A3',0,13,0,1,0,7,1,0,240,NULL,NULL,NULL,18.00,10.00,20.00,644.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(55,'Nestle Original Coffee-Mate Coffee Creamer',NULL,NULL,'published','[\"products\\/11.jpg\"]','HS-123-A0',0,16,0,1,0,7,1,0,117,NULL,NULL,NULL,16.00,15.00,13.00,712.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(56,'Nestle Original Coffee-Mate Coffee Creamer',NULL,NULL,'published','[\"products\\/11-1.jpg\"]','HS-123-A0-A1',0,16,0,1,0,7,1,0,117,NULL,NULL,NULL,16.00,15.00,13.00,712.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(57,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,NULL,'published','[\"products\\/12.jpg\"]','HS-200-A0',0,13,0,1,0,6,1,0,123,109.47,NULL,NULL,13.00,11.00,20.00,874.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(58,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,NULL,'published','[\"products\\/12-1.jpg\"]','HS-200-A0-A1',0,13,0,1,0,6,1,0,123,107.01,NULL,NULL,13.00,11.00,20.00,874.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(59,'Naturally Flavored Cinnamon Vanilla Light Roast Coffee',NULL,NULL,'published','[\"products\\/12.jpg\"]','HS-200-A0-A2',0,13,0,1,0,6,1,0,123,88.56,NULL,NULL,13.00,11.00,20.00,874.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(60,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)',NULL,NULL,'published','[\"products\\/13.jpg\"]','HS-146-A0',0,14,0,1,0,1,1,0,119,NULL,NULL,NULL,14.00,15.00,15.00,757.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(61,'Pepperidge Farm Farmhouse Hearty White Bread (Digital)',NULL,NULL,'published','[\"products\\/13-1.jpg\"]','HS-146-A0-A1',0,14,0,1,0,1,1,0,119,NULL,NULL,NULL,14.00,15.00,15.00,757.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(62,'Organic Frozen Triple Berry Blend',NULL,NULL,'published','[\"products\\/14.jpg\"]','HS-185-A0',0,10,0,1,0,4,1,0,129,NULL,NULL,NULL,18.00,10.00,17.00,881.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(63,'Oroweat Country Buttermilk Bread',NULL,NULL,'published','[\"products\\/15.jpg\"]','HS-200-A0',0,15,0,1,0,2,1,0,117,NULL,NULL,NULL,10.00,20.00,13.00,877.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(64,'Oroweat Country Buttermilk Bread',NULL,NULL,'published','[\"products\\/15-1.jpg\"]','HS-200-A0-A1',0,15,0,1,0,2,1,0,117,NULL,NULL,NULL,10.00,20.00,13.00,877.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(65,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,NULL,'published','[\"products\\/16.jpg\"]','HS-165-A0',0,17,0,1,0,1,1,0,119,99.96,NULL,NULL,19.00,18.00,10.00,896.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(66,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,NULL,'published','[\"products\\/16-1.jpg\"]','HS-165-A0-A1',0,17,0,1,0,1,1,0,119,85.68,NULL,NULL,19.00,18.00,10.00,896.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(67,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)',NULL,NULL,'published','[\"products\\/17.jpg\"]','HS-165-A0',0,18,0,1,0,7,1,0,112,NULL,NULL,NULL,15.00,10.00,12.00,819.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(68,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)',NULL,NULL,'published','[\"products\\/17-1.jpg\"]','HS-165-A0-A1',0,18,0,1,0,7,1,0,112,NULL,NULL,NULL,15.00,10.00,12.00,819.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(69,'Angie’s Boomchickapop Sweet & Salty Kettle Corn (Digital)',NULL,NULL,'published','[\"products\\/17.jpg\"]','HS-165-A0-A2',0,18,0,1,0,7,1,0,112,NULL,NULL,NULL,15.00,10.00,12.00,819.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(70,'All Natural Italian-Style Chicken Meatballs',NULL,NULL,'published','[\"products\\/18.jpg\"]','HS-137-A0',0,20,0,1,0,6,1,0,111,NULL,NULL,NULL,14.00,16.00,12.00,639.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(71,'All Natural Italian-Style Chicken Meatballs',NULL,NULL,'published','[\"products\\/18-1.jpg\"]','HS-137-A0-A1',0,20,0,1,0,6,1,0,111,NULL,NULL,NULL,14.00,16.00,12.00,639.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(72,'Simply Lemonade with Raspberry Juice',NULL,NULL,'published','[\"products\\/19.jpg\"]','HS-166-A0',0,13,0,1,0,5,1,0,115,NULL,NULL,NULL,17.00,14.00,15.00,859.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(73,'Simply Lemonade with Raspberry Juice',NULL,NULL,'published','[\"products\\/19-1.jpg\"]','HS-166-A0-A1',0,13,0,1,0,5,1,0,115,NULL,NULL,NULL,17.00,14.00,15.00,859.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(74,'Perdue Simply Smart Organics Gluten Free',NULL,NULL,'published','[\"products\\/20.jpg\"]','HS-189-A0',0,16,0,1,0,7,1,0,117,91.26,NULL,NULL,14.00,19.00,11.00,537.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(75,'Perdue Simply Smart Organics Gluten Free',NULL,NULL,'published','[\"products\\/20-1.jpg\"]','HS-189-A0-A1',0,16,0,1,0,7,1,0,117,83.07,NULL,NULL,14.00,19.00,11.00,537.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(76,'Chen Watermelon (Digital)',NULL,NULL,'published','[\"products\\/21.jpg\"]','HS-133-A0',0,15,0,1,0,6,1,0,117,NULL,NULL,NULL,20.00,15.00,12.00,681.00,NULL,0,'2022-12-12 17:34:57','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(77,'Chen Watermelon (Digital)',NULL,NULL,'published','[\"products\\/21-1.jpg\"]','HS-133-A0-A1',0,15,0,1,0,6,1,0,117,NULL,NULL,NULL,20.00,15.00,12.00,681.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'digital',NULL,0),(78,'Organic Cage-Free Grade A Large Brown Eggs',NULL,NULL,'published','[\"products\\/22.jpg\"]','HS-197-A0',0,11,0,1,0,1,1,0,117,NULL,NULL,NULL,12.00,17.00,18.00,540.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(79,'Organic Cage-Free Grade A Large Brown Eggs',NULL,NULL,'published','[\"products\\/22-1.jpg\"]','HS-197-A0-A1',0,11,0,1,0,1,1,0,117,NULL,NULL,NULL,12.00,17.00,18.00,540.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(80,'Colorful Banana',NULL,NULL,'published','[\"products\\/23.jpg\"]','HS-186-A0',0,18,0,1,0,2,1,0,111,NULL,NULL,NULL,19.00,18.00,15.00,814.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(81,'Colorful Banana',NULL,NULL,'published','[\"products\\/23-1.jpg\"]','HS-186-A0-A1',0,18,0,1,0,2,1,0,111,NULL,NULL,NULL,19.00,18.00,15.00,814.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(82,'Signature Wood-Fired Mushroom and Caramelized',NULL,NULL,'published','[\"products\\/24.jpg\"]','HS-179-A0',0,11,0,1,0,1,1,0,110,85.8,NULL,NULL,12.00,13.00,10.00,604.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0),(83,'Signature Wood-Fired Mushroom and Caramelized',NULL,NULL,'published','[\"products\\/24-1.jpg\"]','HS-179-A0-A1',0,11,0,1,0,1,1,0,110,93.5,NULL,NULL,12.00,13.00,10.00,604.00,NULL,0,'2022-12-12 17:34:58','2022-12-12 17:35:10','in_stock',0,'Botble\\ACL\\Models\\User',NULL,'physical',NULL,0);
/*!40000 ALTER TABLE `ec_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_products_translations`
--

DROP TABLE IF EXISTS `ec_products_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_products_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ec_products_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`ec_products_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_products_translations`
--

LOCK TABLES `ec_products_translations` WRITE;
/*!40000 ALTER TABLE `ec_products_translations` DISABLE KEYS */;
INSERT INTO `ec_products_translations` VALUES ('vi',1,'Hạt Quinoa hữu cơ',NULL,NULL),('vi',2,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',3,'Angie’s Boomchickapop Sweet & Salty',NULL,NULL),('vi',4,'Foster Farms Takeout Crispy Classic',NULL,NULL),('vi',5,'Diamond Almonds xanh nhạt',NULL,NULL),('vi',6,'Chobani vani Hy Lạp',NULL,NULL),('vi',7,'Gừng khô Canada',NULL,NULL),('vi',8,'Hải sản Alaska',NULL,NULL),('vi',9,'Cá phi lê tẩm Gorton',NULL,NULL),('vi',10,'Kem Haagen-Dazs Caramel Cone',NULL,NULL),('vi',11,'Máy làm kem cà phê nguyên bản của Nestle',NULL,NULL),('vi',12,'Cà phê rang nhẹ hương vị quế vani tự nhiên',NULL,NULL),('vi',13,'Pepperidge Farm Farmhouse Hearty White Bread',NULL,NULL),('vi',14,'Hỗn hợp ba quả mọng đông lạnh hữu cơ',NULL,NULL),('vi',15,'Bánh mì bơ sữa đồng quê Oroweat',NULL,NULL),('vi',16,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,NULL),('vi',17,'Ngô Angie’s boomchickapop ngọt và mặn',NULL,NULL),('vi',18,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',19,'Nước ép chanh và mâm xôi',NULL,NULL),('vi',20,'Perdue hữu cơ không chứa Gluten',NULL,NULL),('vi',21,'Dưa hấu chen',NULL,NULL),('vi',22,'Trứng loại A lớn hữu cơ',NULL,NULL),('vi',23,'Chuối đầy màu sắc',NULL,NULL),('vi',24,'Nấm đặc trưng và caramel',NULL,NULL),('vi',25,'Hạt Quinoa hữu cơ',NULL,NULL),('vi',26,'Hạt Quinoa hữu cơ',NULL,NULL),('vi',27,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',28,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',29,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',30,'Angie’s Boomchickapop Sweet & Salty',NULL,NULL),('vi',31,'Angie’s Boomchickapop Sweet & Salty',NULL,NULL),('vi',32,'Angie’s Boomchickapop Sweet & Salty',NULL,NULL),('vi',33,'Angie’s Boomchickapop Sweet & Salty',NULL,NULL),('vi',34,'Foster Farms Takeout Crispy Classic',NULL,NULL),('vi',35,'Foster Farms Takeout Crispy Classic',NULL,NULL),('vi',36,'Foster Farms Takeout Crispy Classic',NULL,NULL),('vi',37,'Foster Farms Takeout Crispy Classic',NULL,NULL),('vi',38,'Diamond Almonds xanh nhạt',NULL,NULL),('vi',39,'Diamond Almonds xanh nhạt',NULL,NULL),('vi',40,'Chobani vani Hy Lạp',NULL,NULL),('vi',41,'Chobani vani Hy Lạp',NULL,NULL),('vi',42,'Gừng khô Canada',NULL,NULL),('vi',43,'Gừng khô Canada',NULL,NULL),('vi',44,'Gừng khô Canada',NULL,NULL),('vi',45,'Gừng khô Canada',NULL,NULL),('vi',46,'Gừng khô Canada',NULL,NULL),('vi',47,'Hải sản Alaska',NULL,NULL),('vi',48,'Hải sản Alaska',NULL,NULL),('vi',49,'Hải sản Alaska',NULL,NULL),('vi',50,'Cá phi lê tẩm Gorton',NULL,NULL),('vi',51,'Kem Haagen-Dazs Caramel Cone',NULL,NULL),('vi',52,'Kem Haagen-Dazs Caramel Cone',NULL,NULL),('vi',53,'Kem Haagen-Dazs Caramel Cone',NULL,NULL),('vi',54,'Kem Haagen-Dazs Caramel Cone',NULL,NULL),('vi',55,'Máy làm kem cà phê nguyên bản của Nestle',NULL,NULL),('vi',56,'Máy làm kem cà phê nguyên bản của Nestle',NULL,NULL),('vi',57,'Cà phê rang nhẹ hương vị quế vani tự nhiên',NULL,NULL),('vi',58,'Cà phê rang nhẹ hương vị quế vani tự nhiên',NULL,NULL),('vi',59,'Cà phê rang nhẹ hương vị quế vani tự nhiên',NULL,NULL),('vi',60,'Pepperidge Farm Farmhouse Hearty White Bread',NULL,NULL),('vi',61,'Pepperidge Farm Farmhouse Hearty White Bread',NULL,NULL),('vi',62,'Hỗn hợp ba quả mọng đông lạnh hữu cơ',NULL,NULL),('vi',63,'Bánh mì bơ sữa đồng quê Oroweat',NULL,NULL),('vi',64,'Bánh mì bơ sữa đồng quê Oroweat',NULL,NULL),('vi',65,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,NULL),('vi',66,'Foster Farms Takeout Crispy Classic Buffalo Wings',NULL,NULL),('vi',67,'Ngô Angie’s boomchickapop ngọt và mặn',NULL,NULL),('vi',68,'Ngô Angie’s boomchickapop ngọt và mặn',NULL,NULL),('vi',69,'Ngô Angie’s boomchickapop ngọt và mặn',NULL,NULL),('vi',70,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',71,'Thịt gà viên kiểu Ý tự nhiên',NULL,NULL),('vi',72,'Nước ép chanh và mâm xôi',NULL,NULL),('vi',73,'Nước ép chanh và mâm xôi',NULL,NULL),('vi',74,'Perdue hữu cơ không chứa Gluten',NULL,NULL),('vi',75,'Perdue hữu cơ không chứa Gluten',NULL,NULL),('vi',76,'Dưa hấu chen',NULL,NULL),('vi',77,'Dưa hấu chen',NULL,NULL),('vi',78,'Trứng loại A lớn hữu cơ',NULL,NULL),('vi',79,'Trứng loại A lớn hữu cơ',NULL,NULL),('vi',80,'Chuối đầy màu sắc',NULL,NULL),('vi',81,'Chuối đầy màu sắc',NULL,NULL),('vi',82,'Nấm đặc trưng và caramel',NULL,NULL),('vi',83,'Nấm đặc trưng và caramel',NULL,NULL);
/*!40000 ALTER TABLE `ec_products_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_reviews`
--

DROP TABLE IF EXISTS `ec_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `star` double(8,2) NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `ec_reviews_product_id_customer_id_status_created_at_index` (`product_id`,`customer_id`,`status`,`created_at`),
  KEY `ec_reviews_product_id_customer_id_status_index` (`product_id`,`customer_id`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_reviews`
--

LOCK TABLES `ec_reviews` WRITE;
/*!40000 ALTER TABLE `ec_reviews` DISABLE KEYS */;
INSERT INTO `ec_reviews` VALUES (1,4,8,2.00,'Great system, great support, good job Botble. I\'m looking forward to more great functional plugins.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\",\"products\\/6.jpg\",\"products\\/23.jpg\"]'),(2,5,14,3.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/1.jpg\",\"products\\/6.jpg\"]'),(3,4,8,2.00,'I Love this Script. I also found how to add other fees. Now I just wait the BIG update for the Marketplace with the Bulk Import. Just do not forget to make it to be Multi-language for us the Botble Fans.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','{\"0\":\"products\\/3.jpg\",\"2\":\"products\\/15.jpg\"}'),(4,7,14,2.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/4.jpg\",\"products\\/6.jpg\"]'),(5,8,3,4.00,'This web app is really good in design, code quality & features. Besides, the customer support provided by the Botble team was really fast & helpful. You guys are awesome!','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(6,8,3,2.00,'I Love this Script. I also found how to add other fees. Now I just wait the BIG update for the Marketplace with the Bulk Import. Just do not forget to make it to be Multi-language for us the Botble Fans.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\",\"products\\/7.jpg\"]'),(7,10,17,5.00,'Very enthusiastic support! Excellent code is written. It\'s a true pleasure working with.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(8,6,22,3.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\",\"products\\/6.jpg\"]'),(9,4,1,5.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/1.jpg\",\"products\\/6.jpg\"]'),(10,8,5,5.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\"]'),(11,6,21,5.00,'Solution is too robust for our purpose so we didn\'t use it at the end. But I appreciate customer support during initial configuration.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','{\"0\":\"products\\/1.jpg\",\"2\":\"products\\/8.jpg\"}'),(12,3,13,4.00,'We have received brilliant service support and will be expanding the features with the developer. Nice product!','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\"]'),(13,8,16,1.00,'These guys are amazing! Responses immediately, amazing support and help... I immediately feel at ease after Purchasing..','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\"]'),(14,1,6,4.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(15,3,12,2.00,'Great E-commerce system. And much more : Wonderful Customer Support.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(16,9,15,2.00,'Best ecommerce CMS online store!','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(17,1,18,2.00,'For me the best eCommerce script on Envato at this moment: modern, clean code, a lot of great features. The customer support is great too: I always get an answer within hours!','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/4.jpg\"]'),(18,3,23,1.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\"]'),(19,7,22,3.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\"]'),(20,7,6,5.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/2.jpg\",\"products\\/6.jpg\",\"products\\/18.jpg\"]'),(21,10,11,3.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\"]'),(22,7,12,2.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:34:59','2022-12-12 17:34:59','{\"0\":\"products\\/1.jpg\",\"2\":\"products\\/20.jpg\"}'),(23,6,6,1.00,'We have received brilliant service support and will be expanding the features with the developer. Nice product!','published','2022-12-12 17:34:59','2022-12-12 17:34:59','[\"products\\/3.jpg\",\"products\\/5.jpg\",\"products\\/24.jpg\"]'),(24,2,17,1.00,'Good app, good backup service and support. Good documentation.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/2.jpg\",\"2\":\"products\\/13.jpg\"}'),(25,9,10,4.00,'Very enthusiastic support! Excellent code is written. It\'s a true pleasure working with.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/4.jpg\",\"2\":\"products\\/14.jpg\"}'),(26,9,24,3.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\",\"products\\/20.jpg\"]'),(27,1,3,4.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/4.jpg\",\"2\":\"products\\/20.jpg\"}'),(28,5,19,2.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\",\"products\\/22.jpg\"]'),(29,3,11,1.00,'It\'s not my first experience here on Codecanyon and I can honestly tell you all that Botble puts a LOT of effort into the support. They answer so fast, they helped me tons of times. REALLY by far THE BEST EXPERIENCE on Codecanyon. Those guys at Botble are so good that they deserve 5 stars. I recommend them, I trust them and I can\'t wait to see what they will sell in a near future. Thank you Botble :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\"]'),(30,8,23,1.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/7.jpg\"]'),(31,5,11,4.00,'Perfect +++++++++ i love it really also i get to fast ticket answers... Thanks Lot BOTBLE Teams','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(32,3,6,3.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/3.jpg\",\"2\":\"products\\/9.jpg\"}'),(33,1,23,1.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(34,1,12,5.00,'For me the best eCommerce script on Envato at this moment: modern, clean code, a lot of great features. The customer support is great too: I always get an answer within hours!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/5.jpg\"]'),(35,3,5,1.00,'Great E-commerce system. And much more : Wonderful Customer Support.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\"]'),(36,4,9,5.00,'The best store template! Excellent coding! Very good support! Thank you so much for all the help, I really appreciated.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\"]'),(37,3,16,3.00,'Great system, great support, good job Botble. I\'m looking forward to more great functional plugins.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/1.jpg\",\"2\":\"products\\/12.jpg\"}'),(38,5,24,2.00,'This web app is really good in design, code quality & features. Besides, the customer support provided by the Botble team was really fast & helpful. You guys are awesome!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/5.jpg\"]'),(39,7,14,1.00,'Second or third time that I buy a Botble product, happy with the products and support. You guys do a good job :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\"]'),(40,8,24,2.00,'Very enthusiastic support! Excellent code is written. It\'s a true pleasure working with.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(41,9,11,2.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\",\"products\\/12.jpg\"]'),(42,4,8,4.00,'Great system, great support, good job Botble. I\'m looking forward to more great functional plugins.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(43,4,5,3.00,'Customer Support are grade (A*), however the code is a way too over engineered for it\'s purpose.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(44,4,2,4.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(45,6,9,3.00,'Very enthusiastic support! Excellent code is written. It\'s a true pleasure working with.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/5.jpg\"]'),(46,1,12,3.00,'Good app, good backup service and support. Good documentation.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(47,3,23,3.00,'I Love this Script. I also found how to add other fees. Now I just wait the BIG update for the Marketplace with the Bulk Import. Just do not forget to make it to be Multi-language for us the Botble Fans.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/7.jpg\"]'),(48,4,20,2.00,'Clean & perfect source code','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(49,1,16,2.00,'Best ecommerce CMS online store!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/7.jpg\"]'),(50,6,22,5.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/6.jpg\",\"products\\/8.jpg\"]'),(51,6,18,5.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(52,9,5,5.00,'For me the best eCommerce script on Envato at this moment: modern, clean code, a lot of great features. The customer support is great too: I always get an answer within hours!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(53,7,23,4.00,'Ok good product. I have some issues in customizations. But its not correct to blame the developer. The product is good. Good luck for your business.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/2.jpg\",\"2\":\"products\\/23.jpg\"}'),(54,10,24,3.00,'Customer Support are grade (A*), however the code is a way too over engineered for it\'s purpose.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\"]'),(55,7,5,3.00,'Best ecommerce CMS online store!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(56,3,24,5.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(57,7,22,5.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(58,8,5,3.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(59,5,12,4.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(60,10,16,3.00,'Second or third time that I buy a Botble product, happy with the products and support. You guys do a good job :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/5.jpg\",\"products\\/23.jpg\"]'),(61,3,16,5.00,'Clean & perfect source code','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(62,10,13,4.00,'Perfect +++++++++ i love it really also i get to fast ticket answers... Thanks Lot BOTBLE Teams','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(63,9,21,4.00,'Best ecommerce CMS online store!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(64,3,5,5.00,'Second or third time that I buy a Botble product, happy with the products and support. You guys do a good job :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\"]'),(65,1,17,3.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\"]'),(66,10,19,5.00,'Great system, great support, good job Botble. I\'m looking forward to more great functional plugins.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/7.jpg\",\"products\\/9.jpg\"]'),(67,6,4,2.00,'Customer Support are grade (A*), however the code is a way too over engineered for it\'s purpose.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/6.jpg\"]'),(68,3,13,1.00,'Clean & perfect source code','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(69,6,24,5.00,'Perfect +++++++++ i love it really also i get to fast ticket answers... Thanks Lot BOTBLE Teams','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/6.jpg\"]'),(70,10,17,4.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(71,10,10,3.00,'Ok good product. I have some issues in customizations. But its not correct to blame the developer. The product is good. Good luck for your business.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/5.jpg\"]'),(72,3,23,2.00,'The code is good, in general, if you like it, can you give it 5 stars?','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/5.jpg\",\"products\\/22.jpg\"]'),(73,9,11,4.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(74,1,21,4.00,'Ok good product. I have some issues in customizations. But its not correct to blame the developer. The product is good. Good luck for your business.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\"]'),(75,4,13,1.00,'This web app is really good in design, code quality & features. Besides, the customer support provided by the Botble team was really fast & helpful. You guys are awesome!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\",\"products\\/20.jpg\"]'),(76,4,23,3.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(77,6,16,5.00,'This script is well coded and is super fast. The support is pretty quick. Very patient and helpful team. I strongly recommend it and they deserve more than 5 stars.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/7.jpg\"]'),(78,8,5,4.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(79,3,3,4.00,'It\'s not my first experience here on Codecanyon and I can honestly tell you all that Botble puts a LOT of effort into the support. They answer so fast, they helped me tons of times. REALLY by far THE BEST EXPERIENCE on Codecanyon. Those guys at Botble are so good that they deserve 5 stars. I recommend them, I trust them and I can\'t wait to see what they will sell in a near future. Thank you Botble :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\",\"products\\/18.jpg\"]'),(80,7,3,1.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\",\"products\\/14.jpg\"]'),(81,4,11,2.00,'It\'s not my first experience here on Codecanyon and I can honestly tell you all that Botble puts a LOT of effort into the support. They answer so fast, they helped me tons of times. REALLY by far THE BEST EXPERIENCE on Codecanyon. Those guys at Botble are so good that they deserve 5 stars. I recommend them, I trust them and I can\'t wait to see what they will sell in a near future. Thank you Botble :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/6.jpg\",\"products\\/19.jpg\"]'),(82,7,21,3.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/7.jpg\"]'),(83,9,9,1.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(84,8,11,3.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/5.jpg\"]'),(85,2,4,2.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\"]'),(86,5,15,4.00,'Second or third time that I buy a Botble product, happy with the products and support. You guys do a good job :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/5.jpg\",\"products\\/10.jpg\"]'),(87,1,21,1.00,'Great E-commerce system. And much more : Wonderful Customer Support.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\",\"products\\/5.jpg\"]'),(88,7,3,5.00,'Ok good product. I have some issues in customizations. But its not correct to blame the developer. The product is good. Good luck for your business.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/6.jpg\",\"products\\/14.jpg\"]'),(89,3,22,1.00,'Second or third time that I buy a Botble product, happy with the products and support. You guys do a good job :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(90,10,23,2.00,'We have received brilliant service support and will be expanding the features with the developer. Nice product!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/4.jpg\",\"2\":\"products\\/24.jpg\"}'),(91,1,20,5.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/4.jpg\",\"2\":\"products\\/15.jpg\"}'),(92,3,23,3.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\"]'),(93,6,11,3.00,'For me the best eCommerce script on Envato at this moment: modern, clean code, a lot of great features. The customer support is great too: I always get an answer within hours!','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\"]'),(94,5,9,1.00,'Those guys now what they are doing, the release such a good product that it\'s a pleasure to work with ! Even when I was stuck on the project, I created a ticket and the next day it was replied by the team. GOOD JOB guys. I love working with them :)','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/5.jpg\"]'),(95,8,7,2.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\"]'),(96,8,20,4.00,'As a developer I reviewed this script. This is really awesome ecommerce script. I have convinced when I noticed that it\'s built on fully WordPress concept.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/3.jpg\"]'),(97,3,6,4.00,'The script is the best of its class, fast, easy to implement and work with , and the most important thing is the great support team , Recommend with no doubt.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/4.jpg\",\"products\\/7.jpg\"]'),(98,9,24,5.00,'Great E-commerce system. And much more : Wonderful Customer Support.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/1.jpg\",\"products\\/7.jpg\",\"products\\/23.jpg\"]'),(99,5,9,4.00,'The best ecommerce CMS! Excellent coding! best support service! Thank you so much..... I really like your hard work.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','[\"products\\/2.jpg\",\"products\\/6.jpg\",\"products\\/19.jpg\"]'),(100,1,9,3.00,'Cool template. Excellent code quality. The support responds very quickly, which is very rare on themeforest and codecanyon.net, I buy a lot of templates, and everyone will have a response from technical support for two or three days. Thanks to tech support. I recommend to buy.','published','2022-12-12 17:35:00','2022-12-12 17:35:00','{\"0\":\"products\\/1.jpg\",\"2\":\"products\\/20.jpg\"}');
/*!40000 ALTER TABLE `ec_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_shipment_histories`
--

DROP TABLE IF EXISTS `ec_shipment_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_shipment_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `action` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `shipment_id` int unsigned NOT NULL,
  `order_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_shipment_histories`
--

LOCK TABLES `ec_shipment_histories` WRITE;
/*!40000 ALTER TABLE `ec_shipment_histories` DISABLE KEYS */;
INSERT INTO `ec_shipment_histories` VALUES (1,'create_from_order','Shipping was created from order %order_id%',0,1,1,'2022-11-27 17:35:10','2022-11-27 17:35:10'),(2,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,1,1,'2022-12-11 01:35:11','2022-12-12 17:35:11'),(3,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,1,1,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(4,'create_from_order','Shipping was created from order %order_id%',0,2,2,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(5,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,2,2,'2022-12-11 01:35:11','2022-12-12 17:35:11'),(6,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,2,2,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(7,'create_from_order','Shipping was created from order %order_id%',0,3,3,'2022-11-26 01:35:11','2022-11-26 01:35:11'),(8,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,3,3,'2022-12-11 01:35:11','2022-12-12 17:35:11'),(9,'create_from_order','Shipping was created from order %order_id%',0,4,4,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(10,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,4,4,'2022-12-11 03:35:11','2022-12-12 17:35:11'),(11,'update_cod_status','Updated COD status to Completed . Updated by: %user_name%',0,4,4,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(12,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,4,4,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(13,'create_from_order','Shipping was created from order %order_id%',0,5,5,'2022-11-28 11:35:11','2022-11-28 11:35:11'),(14,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,5,5,'2022-12-11 03:35:11','2022-12-12 17:35:11'),(15,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,5,5,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(16,'create_from_order','Shipping was created from order %order_id%',0,6,6,'2022-12-06 09:35:11','2022-12-06 09:35:11'),(17,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,6,6,'2022-12-11 03:35:11','2022-12-12 17:35:11'),(18,'update_cod_status','Updated COD status to Completed . Updated by: %user_name%',0,6,6,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(19,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,6,6,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(20,'create_from_order','Shipping was created from order %order_id%',0,7,7,'2022-11-26 21:35:11','2022-11-26 21:35:11'),(21,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,7,7,'2022-12-11 03:35:11','2022-12-12 17:35:11'),(22,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,7,7,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(23,'create_from_order','Shipping was created from order %order_id%',0,8,8,'2022-12-09 17:35:11','2022-12-09 17:35:11'),(24,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,8,8,'2022-12-11 05:35:11','2022-12-12 17:35:11'),(25,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,8,8,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(26,'create_from_order','Shipping was created from order %order_id%',0,9,9,'2022-11-29 05:35:11','2022-11-29 05:35:11'),(27,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,9,9,'2022-12-11 05:35:11','2022-12-12 17:35:11'),(28,'create_from_order','Shipping was created from order %order_id%',0,10,10,'2022-12-11 05:35:11','2022-12-11 05:35:11'),(29,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,10,10,'2022-12-11 05:35:11','2022-12-12 17:35:11'),(30,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,10,10,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(31,'create_from_order','Shipping was created from order %order_id%',0,11,11,'2022-12-04 05:35:11','2022-12-04 05:35:11'),(32,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,11,11,'2022-12-11 07:35:11','2022-12-12 17:35:11'),(33,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,11,11,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(34,'create_from_order','Shipping was created from order %order_id%',0,12,12,'2022-11-28 13:35:11','2022-11-28 13:35:11'),(35,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,12,12,'2022-12-11 07:35:11','2022-12-12 17:35:11'),(36,'create_from_order','Shipping was created from order %order_id%',0,13,13,'2022-12-01 09:35:11','2022-12-01 09:35:11'),(37,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,13,13,'2022-12-11 07:35:11','2022-12-12 17:35:11'),(38,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,13,13,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(39,'create_from_order','Shipping was created from order %order_id%',0,14,14,'2022-11-29 09:35:11','2022-11-29 09:35:11'),(40,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,14,14,'2022-12-11 09:35:11','2022-12-12 17:35:11'),(41,'create_from_order','Shipping was created from order %order_id%',0,15,15,'2022-12-06 01:35:11','2022-12-06 01:35:11'),(42,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,15,15,'2022-12-11 09:35:11','2022-12-12 17:35:11'),(43,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,15,15,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(44,'create_from_order','Shipping was created from order %order_id%',0,16,16,'2022-12-03 09:35:11','2022-12-03 09:35:11'),(45,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,16,16,'2022-12-11 09:35:11','2022-12-12 17:35:11'),(46,'create_from_order','Shipping was created from order %order_id%',0,17,17,'2022-12-06 11:35:11','2022-12-06 11:35:11'),(47,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,17,17,'2022-12-11 11:35:11','2022-12-12 17:35:11'),(48,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,17,17,'2022-12-12 17:35:11','2022-12-12 17:35:11'),(49,'create_from_order','Shipping was created from order %order_id%',0,18,18,'2022-12-10 05:35:11','2022-12-10 05:35:11'),(50,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,18,18,'2022-12-11 11:35:12','2022-12-12 17:35:12'),(51,'update_cod_status','Updated COD status to Completed . Updated by: %user_name%',0,18,18,'2022-12-12 17:35:13','2022-12-12 17:35:13'),(52,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,18,18,'2022-12-12 17:35:13','2022-12-12 17:35:13'),(53,'create_from_order','Shipping was created from order %order_id%',0,19,19,'2022-12-09 05:35:14','2022-12-09 05:35:14'),(54,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,19,19,'2022-12-11 13:35:14','2022-12-12 17:35:14'),(55,'create_from_order','Shipping was created from order %order_id%',0,20,20,'2022-12-02 05:35:14','2022-12-02 05:35:14'),(56,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,20,20,'2022-12-11 13:35:14','2022-12-12 17:35:14'),(57,'create_from_order','Shipping was created from order %order_id%',0,21,21,'2022-12-04 01:35:14','2022-12-04 01:35:14'),(58,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,21,21,'2022-12-11 15:35:14','2022-12-12 17:35:14'),(59,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,21,21,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(60,'create_from_order','Shipping was created from order %order_id%',0,22,22,'2022-12-09 11:35:14','2022-12-09 11:35:14'),(61,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,22,22,'2022-12-11 15:35:14','2022-12-12 17:35:14'),(62,'create_from_order','Shipping was created from order %order_id%',0,23,23,'2022-12-07 07:35:14','2022-12-07 07:35:14'),(63,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,23,23,'2022-12-11 15:35:14','2022-12-12 17:35:14'),(64,'create_from_order','Shipping was created from order %order_id%',0,24,24,'2022-12-01 21:35:14','2022-12-01 21:35:14'),(65,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,24,24,'2022-12-11 15:35:14','2022-12-12 17:35:14'),(66,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,24,24,'2022-12-12 17:35:14','2022-12-12 17:35:14'),(67,'create_from_order','Shipping was created from order %order_id%',0,25,25,'2022-12-03 17:35:14','2022-12-03 17:35:14'),(68,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,25,25,'2022-12-11 17:35:14','2022-12-12 17:35:14'),(69,'create_from_order','Shipping was created from order %order_id%',0,26,26,'2022-12-07 17:35:14','2022-12-07 17:35:14'),(70,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,26,26,'2022-12-11 17:35:15','2022-12-12 17:35:15'),(71,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,26,26,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(72,'create_from_order','Shipping was created from order %order_id%',0,27,27,'2022-12-05 17:35:15','2022-12-05 17:35:15'),(73,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,27,27,'2022-12-11 17:35:15','2022-12-12 17:35:15'),(74,'create_from_order','Shipping was created from order %order_id%',0,28,28,'2022-12-09 01:35:15','2022-12-09 01:35:15'),(75,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,28,28,'2022-12-11 19:35:15','2022-12-12 17:35:15'),(76,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,28,28,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(77,'create_from_order','Shipping was created from order %order_id%',0,29,29,'2022-12-04 11:35:15','2022-12-04 11:35:15'),(78,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,29,29,'2022-12-11 19:35:15','2022-12-12 17:35:15'),(79,'create_from_order','Shipping was created from order %order_id%',0,30,30,'2022-12-03 13:35:15','2022-12-03 13:35:15'),(80,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,30,30,'2022-12-11 19:35:15','2022-12-12 17:35:15'),(81,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,30,30,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(82,'create_from_order','Shipping was created from order %order_id%',0,31,31,'2022-12-11 01:35:15','2022-12-11 01:35:15'),(83,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,31,31,'2022-12-11 21:35:15','2022-12-12 17:35:15'),(84,'create_from_order','Shipping was created from order %order_id%',0,32,32,'2022-12-09 09:35:15','2022-12-09 09:35:15'),(85,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,32,32,'2022-12-11 21:35:15','2022-12-12 17:35:15'),(86,'create_from_order','Shipping was created from order %order_id%',0,33,33,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(87,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,33,33,'2022-12-11 23:35:15','2022-12-12 17:35:15'),(88,'update_cod_status','Updated COD status to Completed . Updated by: %user_name%',0,33,33,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(89,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,33,33,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(90,'create_from_order','Shipping was created from order %order_id%',0,34,34,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(91,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,34,34,'2022-12-11 23:35:15','2022-12-12 17:35:15'),(92,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,34,34,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(93,'create_from_order','Shipping was created from order %order_id%',0,35,35,'2022-12-06 17:35:15','2022-12-06 17:35:15'),(94,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,35,35,'2022-12-12 01:35:15','2022-12-12 17:35:15'),(95,'create_from_order','Shipping was created from order %order_id%',0,36,36,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(96,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,36,36,'2022-12-12 03:35:15','2022-12-12 17:35:15'),(97,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,36,36,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(98,'create_from_order','Shipping was created from order %order_id%',0,37,37,'2022-12-12 03:35:15','2022-12-12 03:35:15'),(99,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,37,37,'2022-12-12 03:35:15','2022-12-12 17:35:15'),(100,'create_from_order','Shipping was created from order %order_id%',0,38,38,'2022-12-11 05:35:15','2022-12-11 05:35:15'),(101,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,38,38,'2022-12-12 05:35:15','2022-12-12 17:35:15'),(102,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,38,38,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(103,'create_from_order','Shipping was created from order %order_id%',0,39,39,'2022-12-08 05:35:15','2022-12-08 05:35:15'),(104,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,39,39,'2022-12-12 05:35:15','2022-12-12 17:35:15'),(105,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,39,39,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(106,'create_from_order','Shipping was created from order %order_id%',0,40,40,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(107,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,40,40,'2022-12-12 05:35:15','2022-12-12 17:35:15'),(108,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,40,40,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(109,'create_from_order','Shipping was created from order %order_id%',0,41,41,'2022-12-09 17:35:15','2022-12-09 17:35:15'),(110,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,41,41,'2022-12-12 05:35:15','2022-12-12 17:35:15'),(111,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,41,41,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(112,'create_from_order','Shipping was created from order %order_id%',0,42,42,'2022-12-08 13:35:15','2022-12-08 13:35:15'),(113,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,42,42,'2022-12-12 07:35:15','2022-12-12 17:35:15'),(114,'create_from_order','Shipping was created from order %order_id%',0,43,43,'2022-12-08 23:35:15','2022-12-08 23:35:15'),(115,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,43,43,'2022-12-12 07:35:15','2022-12-12 17:35:15'),(116,'create_from_order','Shipping was created from order %order_id%',0,44,44,'2022-12-11 17:35:15','2022-12-11 17:35:15'),(117,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,44,44,'2022-12-12 09:35:15','2022-12-12 17:35:15'),(118,'create_from_order','Shipping was created from order %order_id%',0,45,45,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(119,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,45,45,'2022-12-12 09:35:15','2022-12-12 17:35:15'),(120,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,45,45,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(121,'create_from_order','Shipping was created from order %order_id%',0,46,46,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(122,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,46,46,'2022-12-12 11:35:15','2022-12-12 17:35:15'),(123,'create_from_order','Shipping was created from order %order_id%',0,47,47,'2022-12-12 11:35:15','2022-12-12 11:35:15'),(124,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,47,47,'2022-12-12 11:35:15','2022-12-12 17:35:15'),(125,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,47,47,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(126,'create_from_order','Shipping was created from order %order_id%',0,48,48,'2022-12-12 09:35:15','2022-12-12 09:35:15'),(127,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,48,48,'2022-12-12 13:35:15','2022-12-12 17:35:15'),(128,'create_from_order','Shipping was created from order %order_id%',0,49,49,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(129,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,49,49,'2022-12-12 13:35:15','2022-12-12 17:35:15'),(130,'create_from_order','Shipping was created from order %order_id%',0,50,50,'2022-12-11 23:35:15','2022-12-11 23:35:15'),(131,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,50,50,'2022-12-12 15:35:15','2022-12-12 17:35:15'),(132,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,50,50,'2022-12-12 17:35:15','2022-12-12 17:35:15'),(133,'create_from_order','Shipping was created from order %order_id%',0,51,51,'2022-12-11 21:35:15','2022-12-11 21:35:15'),(134,'update_status','Changed status of shipping to: Approved. Updated by: %user_name%',0,51,51,'2022-12-12 15:35:15','2022-12-12 17:35:15'),(135,'update_status','Changed status of shipping to: Delivered. Updated by: %user_name%',0,51,51,'2022-12-12 17:35:15','2022-12-12 17:35:15');
/*!40000 ALTER TABLE `ec_shipment_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_shipments`
--

DROP TABLE IF EXISTS `ec_shipments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_shipments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `weight` double(8,2) DEFAULT '0.00',
  `shipment_id` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_id` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `cod_amount` decimal(15,2) DEFAULT '0.00',
  `cod_status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `cross_checking_status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `price` decimal(15,2) DEFAULT '0.00',
  `store_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracking_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_date_shipped` datetime DEFAULT NULL,
  `date_shipped` datetime DEFAULT NULL,
  `label_url` text COLLATE utf8mb4_unicode_ci,
  `metadata` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_shipments`
--

LOCK TABLES `ec_shipments` WRITE;
/*!40000 ALTER TABLE `ec_shipments` DISABLE KEYS */;
INSERT INTO `ec_shipments` VALUES (1,1,NULL,524.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0049354710','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-19 00:35:11','2022-12-13 00:35:11',NULL,NULL),(2,2,NULL,1932.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0098374032','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-18 00:35:11','2022-12-13 00:35:11',NULL,NULL),(3,3,NULL,874.00,NULL,NULL,'','approved',123.00,'pending','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0011826967','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:11',NULL,NULL,NULL),(4,4,NULL,1106.00,NULL,NULL,'','delivered',104.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0065997072','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:11','2022-12-13 00:35:11',NULL,NULL),(5,5,NULL,1754.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0048425327','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:11','2022-12-13 00:35:11',NULL,NULL),(6,6,NULL,1792.00,NULL,NULL,'','delivered',238.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0039494257','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:11','2022-12-13 00:35:11',NULL,NULL),(7,7,NULL,859.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD004200221','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:11','2022-12-13 00:35:11',NULL,NULL),(8,8,NULL,1278.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0046425199','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:11','2022-12-13 00:35:11',NULL,NULL),(9,9,NULL,859.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0085253411','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:11',NULL,NULL,NULL),(10,10,NULL,1611.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0017922223','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:11','2022-12-13 00:35:11',NULL,NULL),(11,11,NULL,2420.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD008536094','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-18 00:35:11','2022-12-13 00:35:11',NULL,NULL),(12,12,NULL,1342.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0076329740','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-14 00:35:11',NULL,NULL,NULL),(13,13,NULL,2643.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0067475046','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-20 00:35:11','2022-12-13 00:35:11',NULL,NULL),(14,14,NULL,2133.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0046592338','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:11',NULL,NULL,NULL),(15,15,NULL,2362.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0093803866','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-14 00:35:11','2022-12-13 00:35:11',NULL,NULL),(16,16,NULL,1208.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0095920991','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:11',NULL,NULL,NULL),(17,17,NULL,2697.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:11','JJD0038977014','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-14 00:35:11','2022-12-13 00:35:11',NULL,NULL),(18,18,NULL,1210.00,NULL,NULL,'','delivered',148.00,'completed','pending',0.00,0,'2022-12-12 17:35:11','2022-12-12 17:35:13','JJD0091690043','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:11','2022-12-13 00:35:11',NULL,NULL),(19,19,NULL,2958.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0035218132','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:14',NULL,NULL,NULL),(20,20,NULL,2013.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0028901972','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-18 00:35:14',NULL,NULL,NULL),(21,21,NULL,719.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0044594963','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-18 00:35:14','2022-12-13 00:35:14',NULL,NULL),(22,22,NULL,711.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0014391186','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:14',NULL,NULL,NULL),(23,23,NULL,2271.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0027202269','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:14',NULL,NULL,NULL),(24,24,NULL,639.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0066738305','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-19 00:35:14','2022-12-13 00:35:14',NULL,NULL),(25,25,NULL,2876.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:14','2022-12-12 17:35:14','JJD0059716298','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:14',NULL,NULL,NULL),(26,26,NULL,671.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0054033787','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-14 00:35:15','2022-12-13 00:35:15',NULL,NULL),(27,27,NULL,1718.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0041158183','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:15',NULL,NULL,NULL),(28,28,NULL,1479.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0018382967','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:15','2022-12-13 00:35:15',NULL,NULL),(29,29,NULL,2043.00,NULL,NULL,'','approved',351.00,'pending','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0088240116','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:15',NULL,NULL,NULL),(30,30,NULL,814.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD002994524','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:15','2022-12-13 00:35:15',NULL,NULL),(31,31,NULL,4299.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0016738404','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-18 00:35:15',NULL,NULL,NULL),(32,32,NULL,1815.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0024849292','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:15',NULL,NULL,NULL),(33,33,NULL,3505.00,NULL,NULL,'','delivered',474.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0090785939','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:15','2022-12-13 00:35:15',NULL,NULL),(34,34,NULL,1611.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0019664100','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-23 00:35:15','2022-12-13 00:35:15',NULL,NULL),(35,35,NULL,2576.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0020946241','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-14 00:35:15',NULL,NULL,NULL),(36,36,NULL,2622.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0019827034','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:15','2022-12-13 00:35:15',NULL,NULL),(37,37,NULL,1638.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0014659099','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-20 00:35:15',NULL,NULL,NULL),(38,38,NULL,1424.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0044894049','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:15','2022-12-13 00:35:15',NULL,NULL),(39,39,NULL,1762.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0035665426','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:15','2022-12-13 00:35:15',NULL,NULL),(40,40,NULL,1362.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0068597772','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-16 00:35:15','2022-12-13 00:35:15',NULL,NULL),(41,41,NULL,1080.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0074526801','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-23 00:35:15','2022-12-13 00:35:15',NULL,NULL),(42,42,NULL,2622.00,NULL,NULL,'','approved',369.00,'pending','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0073511563','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-23 00:35:15',NULL,NULL,NULL),(43,43,NULL,1718.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0088234339','GHN','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-20 00:35:15',NULL,NULL,NULL),(44,44,NULL,1438.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0029641616','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-21 00:35:15',NULL,NULL,NULL),(45,45,NULL,1815.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0058739040','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:15','2022-12-13 00:35:15',NULL,NULL),(46,46,NULL,1514.00,NULL,NULL,'','approved',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0036222710','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-22 00:35:15',NULL,NULL,NULL),(47,47,NULL,1620.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0065940627','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-17 00:35:15','2022-12-13 00:35:15',NULL,NULL),(48,48,NULL,1342.00,NULL,NULL,'','approved',230.00,'pending','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD002669157','AliExpress','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-20 00:35:15',NULL,NULL,NULL),(49,49,NULL,2271.00,NULL,NULL,'','approved',357.00,'pending','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0075970667','FastShipping','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:15',NULL,NULL,NULL),(50,50,NULL,1815.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0024387469','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:15','2022-12-13 00:35:15',NULL,NULL),(51,51,NULL,4001.00,NULL,NULL,'','delivered',0.00,'completed','pending',0.00,0,'2022-12-12 17:35:15','2022-12-12 17:35:15','JJD0076659343','DHL','https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference','2022-12-15 00:35:15','2022-12-13 00:35:15',NULL,NULL);
/*!40000 ALTER TABLE `ec_shipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_shipping`
--

DROP TABLE IF EXISTS `ec_shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_shipping` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_shipping`
--

LOCK TABLES `ec_shipping` WRITE;
/*!40000 ALTER TABLE `ec_shipping` DISABLE KEYS */;
INSERT INTO `ec_shipping` VALUES (1,'All',NULL,'2022-12-12 17:35:00','2022-12-12 17:35:00');
/*!40000 ALTER TABLE `ec_shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_shipping_rule_items`
--

DROP TABLE IF EXISTS `ec_shipping_rule_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_shipping_rule_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `shipping_rule_id` int unsigned NOT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adjustment_price` decimal(15,2) DEFAULT '0.00',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_shipping_rule_items`
--

LOCK TABLES `ec_shipping_rule_items` WRITE;
/*!40000 ALTER TABLE `ec_shipping_rule_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_shipping_rule_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_shipping_rules`
--

DROP TABLE IF EXISTS `ec_shipping_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_shipping_rules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_id` int unsigned NOT NULL,
  `type` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'based_on_price',
  `from` decimal(15,2) DEFAULT '0.00',
  `to` decimal(15,2) DEFAULT '0.00',
  `price` decimal(15,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_shipping_rules`
--

LOCK TABLES `ec_shipping_rules` WRITE;
/*!40000 ALTER TABLE `ec_shipping_rules` DISABLE KEYS */;
INSERT INTO `ec_shipping_rules` VALUES (1,'Free delivery',1,'based_on_price',0.00,NULL,0.00,'2022-12-12 17:35:00','2022-12-12 17:35:00');
/*!40000 ALTER TABLE `ec_shipping_rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_store_locators`
--

DROP TABLE IF EXISTS `ec_store_locators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_store_locators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) DEFAULT '0',
  `is_shipping_location` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_store_locators`
--

LOCK TABLES `ec_store_locators` WRITE;
/*!40000 ALTER TABLE `ec_store_locators` DISABLE KEYS */;
INSERT INTO `ec_store_locators` VALUES (1,'Nest','sales@botble.com','18006268','North Link Building, 10 Admiralty Street','SG','Singapore','Singapore',1,1,'2022-12-12 17:35:00','2022-12-12 17:35:00');
/*!40000 ALTER TABLE `ec_store_locators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_tax_products`
--

DROP TABLE IF EXISTS `ec_tax_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_tax_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_tax_products_tax_id_index` (`tax_id`),
  KEY `ec_tax_products_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_tax_products`
--

LOCK TABLES `ec_tax_products` WRITE;
/*!40000 ALTER TABLE `ec_tax_products` DISABLE KEYS */;
INSERT INTO `ec_tax_products` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17),(18,1,18),(19,1,19),(20,1,20),(21,1,21),(22,1,22),(23,1,23),(24,1,24);
/*!40000 ALTER TABLE `ec_tax_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_taxes`
--

DROP TABLE IF EXISTS `ec_taxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_taxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` double(8,6) DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_taxes`
--

LOCK TABLES `ec_taxes` WRITE;
/*!40000 ALTER TABLE `ec_taxes` DISABLE KEYS */;
INSERT INTO `ec_taxes` VALUES (1,'VAT',10.000000,1,'published','2022-12-12 17:34:58','2022-12-12 17:34:58'),(2,'None',0.000000,2,'published','2022-12-12 17:34:58','2022-12-12 17:34:58'),(3,'Import Tax',15.000000,3,'published','2022-12-12 17:34:58','2022-12-12 17:34:58');
/*!40000 ALTER TABLE `ec_taxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ec_wish_lists`
--

DROP TABLE IF EXISTS `ec_wish_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ec_wish_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ec_wish_lists_product_id_customer_id_index` (`product_id`,`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ec_wish_lists`
--

LOCK TABLES `ec_wish_lists` WRITE;
/*!40000 ALTER TABLE `ec_wish_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `ec_wish_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_categories`
--

DROP TABLE IF EXISTS `faq_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_categories`
--

LOCK TABLES `faq_categories` WRITE;
/*!40000 ALTER TABLE `faq_categories` DISABLE KEYS */;
INSERT INTO `faq_categories` VALUES (1,'Shipping',0,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(2,'Payment',1,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(3,'Order & Returns',2,'published','2022-12-12 17:35:06','2022-12-12 17:35:06');
/*!40000 ALTER TABLE `faq_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_categories_translations`
--

DROP TABLE IF EXISTS `faq_categories_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_categories_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_categories_id` int NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`faq_categories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_categories_translations`
--

LOCK TABLES `faq_categories_translations` WRITE;
/*!40000 ALTER TABLE `faq_categories_translations` DISABLE KEYS */;
INSERT INTO `faq_categories_translations` VALUES ('vi',1,'VẬN CHUYỂN'),('vi',2,'THANH TOÁN'),('vi',3,'ĐƠN HÀNG & HOÀN TRẢ');
/*!40000 ALTER TABLE `faq_categories_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'What Shipping Methods Are Available?','Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.',1,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(2,'Do You Ship Internationally?','Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.',1,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(3,'How Long Will It Take To Get My Package?','Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.',1,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(4,'What Payment Methods Are Accepted?','Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.',2,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(5,'Is Buying On-Line Safe?','Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.',2,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(6,'How do I place an Order?','Keytar cray slow-carb, Godard banh mi salvia pour-over. Slow-carb Odd Future seitan normcore. Master cleanse American Apparel gentrify flexitarian beard slow-carb next level. Raw denim polaroid paleo farm-to-table, put a bird on it lo-fi tattooed Wes Anderson Pinterest letterpress. Fingerstache McSweeney’s pour-over, letterpress Schlitz photo booth master cleanse bespoke hashtag chillwave gentrify.',3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(7,'How Can I Cancel Or Change My Order?','Plaid letterpress leggings craft beer meh ethical Pinterest. Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth.',3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(8,'Do I need an account to place an order?','Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY. Cray ugh 3 wolf moon fap, fashion axe irony butcher cornhole typewriter chambray VHS banjo street art.',3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(9,'How Do I Track My Order?','Keytar cray slow-carb, Godard banh mi salvia pour-over. Slow-carb @Odd Future seitan normcore. Master cleanse American Apparel gentrify flexitarian beard slow-carb next level.',3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06'),(10,'How Can I Return a Product?','Kale chips Truffaut Williamsburg, hashtag fixie Pinterest raw denim c hambray drinking vinegar Carles street art Bushwick gastropub. Wolf Tumblr paleo church-key. Plaid food truck Echo Park YOLO bitters hella, direct trade Thundercats leggings quinoa before they sold out. You probably haven’t heard of them wayfarers authentic umami drinking vinegar Pinterest Cosby sweater, fingerstache fap High Life.',3,'published','2022-12-12 17:35:06','2022-12-12 17:35:06');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs_translations`
--

DROP TABLE IF EXISTS `faqs_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faqs_id` int NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`faqs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs_translations`
--

LOCK TABLES `faqs_translations` WRITE;
/*!40000 ALTER TABLE `faqs_translations` DISABLE KEYS */;
INSERT INTO `faqs_translations` VALUES ('vi',1,'Có những phương thức vận chuyển nào?','Ex Portland Pitchfork irure ria mép. Eutra fap trước khi họ bán hết theo đúng nghĩa đen. Aliquip ugh quyền xe đạp thực sự mlkshk, rượu bia thủ công mực seitan. '),('vi',2,'Bạn có giao hàng quốc tế không?','Áo hoodie túi tote Tofu mixtape. Quần đùi jean đánh chữ Wolf quinoa, túi messenger hữu cơ freegan cray. '),('vi',3,'Mất bao lâu để nhận được gói hàng của tôi?','Bữa nửa buổi ăn sáng bằng bụng heo quay từ máy đánh chữ VHS, cà phê có nguồn gốc đơn Paleo, Wes Anderson. Khoan Pitchfork linh hoạt, theo nghĩa đen là đổ qua fap theo nghĩa đen. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray bền vững slow-carb raw denim Church-key fap chillwave Etsy. +1 bộ dụng cụ đánh máy, đậu phụ Banksy Vice của American Apparel. '),('vi',4,'Phương thức thanh toán nào được chấp nhận?','Fashion Axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Quầy ảnh Voluptate fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur ria mép. Twee chia gian hàng chụp ảnh xe bán đồ ăn sẵn, bữa tiệc trên mái áo hoodie swag keytar PBR DIY. '),('vi',5,'Mua trực tuyến có an toàn không?','Bữa tiệc nghệ thuật đích thực freegan semiotics jean shorts chia credit. Tiệc trên mái nhà Neutra Austin Brooklyn, Thundercats swag synth gian hàng ảnh 8-bit. Xà cạp letterpress kẻ sọc thủ công bia meh đạo đức Pinterest. '),('vi',6,'Làm cách nào để đặt hàng?','Keytar cray slow-carb, Godard banh mi salvia pour-over. Slow-carb Odd Định mức seitan trong tương lai. Master làm sạch American Apparel nhẹ nhàng làm sạch râu linh hoạt chậm carb cấp độ tiếp theo. Vải thô denim polaroid nhạt từ trang trại đến bàn, đặt một con chim trên đó hình xăm lo-fi Wes Anderson Pinterest letterpress. Bậc thầy gian hàng ảnh Schlitz của Fingerstache McSweeney đang làm sạch thẻ bắt đầu bằng hashtag theo yêu cầu riêng, chillwave gentrify. '),('vi',7,'Làm cách nào để tôi có thể hủy hoặc thay đổi đơn hàng của mình?','Xà cạp letterpress kẻ sọc thủ công bia meh đạo đức Pinterest. Bữa tiệc nghệ thuật đích thực freegan semiotics jean shorts chia tín. Tiệc trên mái nhà Neutra Austin ở Brooklyn, synth Thundercats có gian hàng ảnh 8-bit. '),('vi',8,'Tôi có cần tài khoản để đặt hàng không?','Thundercats làm lung lay gian hàng ảnh 8-bit. Xà cạp letterpress kẻ sọc thủ công bia meh đạo đức Pinterest. Twee chia ảnh gian hàng xe bán thức ăn làm sẵn, bữa tiệc trên mái áo hoodie swag keytar PBR DIY. Cray ugh 3 wolf moon fap, rìu thời trang mỉa mai người bán thịt máy đánh chữ chambray VHS banjo nghệ thuật đường phố. '),('vi',9,'Làm cách nào để theo dõi đơn hàng của tôi?','Keytar cray slow-carb, Godard banh mi salvia pour-over. Slow-carb @Odd Định mức seitan trong tương lai. Bậc thầy làm sạch American Apparel nhẹ nhàng làm sạch râu linh hoạt theo kiểu chậm carb cấp độ tiếp theo. '),('vi',10,'Làm cách nào để trả lại sản phẩm?','Kale chips Truffaut Williamsburg, fixie hashtag Pinterest raw denim c hambray uống giấm Carles street art Bushwick gastropub. Chìa khóa nhà thờ Wolf Tumblr. Xe tải thực phẩm kẻ sọc Echo Park YOLO cắn hella, giao dịch trực tiếp Thundercats legging quinoa trước khi bán hết. Có thể bạn chưa từng nghe nói về họ những người truyền bá vị umami đích thực uống giấm Pinterest Áo len Cosby, fingerstache fap High Life. ');
/*!40000 ALTER TABLE `faqs_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_meta`
--

DROP TABLE IF EXISTS `language_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `language_meta` (
  `lang_meta_id` int unsigned NOT NULL AUTO_INCREMENT,
  `lang_meta_code` text COLLATE utf8mb4_unicode_ci,
  `lang_meta_origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` int unsigned NOT NULL,
  `reference_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`lang_meta_id`),
  KEY `language_meta_reference_id_index` (`reference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_meta`
--

LOCK TABLES `language_meta` WRITE;
/*!40000 ALTER TABLE `language_meta` DISABLE KEYS */;
INSERT INTO `language_meta` VALUES (1,'en_US','a1f2ae01d7143b8f6ee2140a3054a396',1,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(2,'en_US','2dc28a3a4398de0ad960bc71d03ab4ff',2,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(3,'en_US','7c5146f6873dbd026f7e1c8122abd853',3,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(4,'en_US','117fdebf2944b28efe48f426e303d321',4,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(5,'en_US','58b5feafd6694239a958079d91ad805e',5,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(6,'en_US','6751d1ad4cdb7a38b200787fe11f69b8',6,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(7,'en_US','4e819496b7cde35cc200edaa8845f285',7,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(8,'vi','a1f2ae01d7143b8f6ee2140a3054a396',8,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(9,'vi','2dc28a3a4398de0ad960bc71d03ab4ff',9,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(10,'vi','7c5146f6873dbd026f7e1c8122abd853',10,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(11,'vi','117fdebf2944b28efe48f426e303d321',11,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(12,'vi','58b5feafd6694239a958079d91ad805e',12,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(13,'vi','6751d1ad4cdb7a38b200787fe11f69b8',13,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(14,'vi','4e819496b7cde35cc200edaa8845f285',14,'Botble\\SimpleSlider\\Models\\SimpleSlider'),(15,'en_US','8044a85081cbe053c4bb162a534c90d4',1,'Botble\\Menu\\Models\\MenuLocation'),(16,'en_US','49c39ba4e34a07c68255b27dbf65f1f9',1,'Botble\\Menu\\Models\\Menu'),(17,'en_US','a88bf82b311dc71a922fda7ed4a8481d',2,'Botble\\Menu\\Models\\MenuLocation'),(18,'en_US','05eb43112c3be2ab798a8c64f1aba565',2,'Botble\\Menu\\Models\\Menu'),(19,'en_US','22da57c7f06fe8b2f32e32945aab45f6',3,'Botble\\Menu\\Models\\Menu'),(20,'en_US','6050b0d24db158b7bb2e4b10eb9b7936',4,'Botble\\Menu\\Models\\Menu'),(21,'en_US','99b899726a92de5fad4298a1fe93e826',5,'Botble\\Menu\\Models\\Menu'),(22,'vi','86a6f1060d29b509769c68c87ad661c5',3,'Botble\\Menu\\Models\\MenuLocation'),(23,'vi','49c39ba4e34a07c68255b27dbf65f1f9',6,'Botble\\Menu\\Models\\Menu'),(24,'vi','20173a91b155dc348d0d3b8752a3e387',4,'Botble\\Menu\\Models\\MenuLocation'),(25,'vi','05eb43112c3be2ab798a8c64f1aba565',7,'Botble\\Menu\\Models\\Menu'),(26,'vi','22da57c7f06fe8b2f32e32945aab45f6',8,'Botble\\Menu\\Models\\Menu'),(27,'vi','6050b0d24db158b7bb2e4b10eb9b7936',9,'Botble\\Menu\\Models\\Menu'),(28,'vi','99b899726a92de5fad4298a1fe93e826',10,'Botble\\Menu\\Models\\Menu');
/*!40000 ALTER TABLE `language_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `lang_id` int unsigned NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_locale` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_flag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `lang_order` int NOT NULL DEFAULT '0',
  `lang_is_rtl` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en','en_US','us',1,0,0),(2,'Tiếng Việt','vi','vi','vn',0,0,0);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_files`
--

DROP TABLE IF EXISTS `media_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_id` int unsigned NOT NULL DEFAULT '0',
  `mime_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_files_user_id_index` (`user_id`),
  KEY `media_files_index` (`folder_id`,`user_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_files`
--

LOCK TABLES `media_files` WRITE;
/*!40000 ALTER TABLE `media_files` DISABLE KEYS */;
INSERT INTO `media_files` VALUES (1,0,'icon-1',1,'image/png',1307,'product-categories/icon-1.png','[]','2022-12-12 17:34:49','2022-12-12 17:34:49',NULL),(2,0,'icon-10',1,'image/png',1307,'product-categories/icon-10.png','[]','2022-12-12 17:34:49','2022-12-12 17:34:49',NULL),(3,0,'icon-11',1,'image/png',1307,'product-categories/icon-11.png','[]','2022-12-12 17:34:49','2022-12-12 17:34:49',NULL),(4,0,'icon-12',1,'image/png',1307,'product-categories/icon-12.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(5,0,'icon-13',1,'image/png',1307,'product-categories/icon-13.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(6,0,'icon-14',1,'image/png',1307,'product-categories/icon-14.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(7,0,'icon-2',1,'image/png',1307,'product-categories/icon-2.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(8,0,'icon-3',1,'image/png',1307,'product-categories/icon-3.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(9,0,'icon-4',1,'image/png',1307,'product-categories/icon-4.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(10,0,'icon-5',1,'image/png',1307,'product-categories/icon-5.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(11,0,'icon-6',1,'image/png',1307,'product-categories/icon-6.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(12,0,'icon-7',1,'image/png',1307,'product-categories/icon-7.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(13,0,'icon-8',1,'image/png',1307,'product-categories/icon-8.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(14,0,'icon-9',1,'image/png',1307,'product-categories/icon-9.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(15,0,'image-1',1,'image/png',1307,'product-categories/image-1.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(16,0,'image-10',1,'image/png',1307,'product-categories/image-10.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(17,0,'image-11',1,'image/png',1307,'product-categories/image-11.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(18,0,'image-12',1,'image/png',1307,'product-categories/image-12.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(19,0,'image-13',1,'image/png',1307,'product-categories/image-13.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(20,0,'image-14',1,'image/png',1307,'product-categories/image-14.png','[]','2022-12-12 17:34:50','2022-12-12 17:34:50',NULL),(21,0,'image-15',1,'image/png',1307,'product-categories/image-15.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(22,0,'image-2',1,'image/png',1307,'product-categories/image-2.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(23,0,'image-3',1,'image/png',1307,'product-categories/image-3.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(24,0,'image-4',1,'image/png',1307,'product-categories/image-4.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(25,0,'image-5',1,'image/png',1307,'product-categories/image-5.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(26,0,'image-6',1,'image/png',1307,'product-categories/image-6.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(27,0,'image-7',1,'image/png',1307,'product-categories/image-7.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(28,0,'image-8',1,'image/png',1307,'product-categories/image-8.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(29,0,'image-9',1,'image/png',1307,'product-categories/image-9.png','[]','2022-12-12 17:34:51','2022-12-12 17:34:51',NULL),(30,0,'1-1',2,'image/jpeg',2165,'products/1-1.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(31,0,'1',2,'image/jpeg',2165,'products/1.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(32,0,'10-1',2,'image/jpeg',2165,'products/10-1.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(33,0,'10',2,'image/jpeg',2165,'products/10.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(34,0,'11-1',2,'image/jpeg',2165,'products/11-1.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(35,0,'11',2,'image/jpeg',2165,'products/11.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(36,0,'12-1',2,'image/jpeg',2165,'products/12-1.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(37,0,'12',2,'image/jpeg',2165,'products/12.jpg','[]','2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(38,0,'13-1',2,'image/jpeg',2165,'products/13-1.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(39,0,'13',2,'image/jpeg',2165,'products/13.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(40,0,'14-1',2,'image/jpeg',2165,'products/14-1.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(41,0,'14',2,'image/jpeg',2165,'products/14.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(42,0,'15-1',2,'image/jpeg',2165,'products/15-1.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(43,0,'15',2,'image/jpeg',2165,'products/15.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(44,0,'16-1',2,'image/jpeg',2165,'products/16-1.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(45,0,'16-2',2,'image/jpeg',2165,'products/16-2.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(46,0,'16-3',2,'image/jpeg',2165,'products/16-3.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(47,0,'16-4',2,'image/jpeg',2165,'products/16-4.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(48,0,'16-5',2,'image/jpeg',2165,'products/16-5.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(49,0,'16-6',2,'image/jpeg',2165,'products/16-6.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(50,0,'16',2,'image/jpeg',2165,'products/16.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(51,0,'17-1',2,'image/jpeg',2165,'products/17-1.jpg','[]','2022-12-12 17:34:53','2022-12-12 17:34:53',NULL),(52,0,'17',2,'image/jpeg',2165,'products/17.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(53,0,'18-1',2,'image/jpeg',2165,'products/18-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(54,0,'18',2,'image/jpeg',2165,'products/18.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(55,0,'19-1',2,'image/jpeg',2165,'products/19-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(56,0,'19',2,'image/jpeg',2165,'products/19.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(57,0,'2-1',2,'image/jpeg',2165,'products/2-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(58,0,'2',2,'image/jpeg',2165,'products/2.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(59,0,'20-1',2,'image/jpeg',2165,'products/20-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(60,0,'20',2,'image/jpeg',2165,'products/20.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(61,0,'21-1',2,'image/jpeg',2165,'products/21-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(62,0,'21',2,'image/jpeg',2165,'products/21.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(63,0,'22-1',2,'image/jpeg',2165,'products/22-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(64,0,'22',2,'image/jpeg',2165,'products/22.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(65,0,'23-1',2,'image/jpeg',2165,'products/23-1.jpg','[]','2022-12-12 17:34:54','2022-12-12 17:34:54',NULL),(66,0,'23',2,'image/jpeg',2165,'products/23.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(67,0,'24-1',2,'image/jpeg',2165,'products/24-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(68,0,'24',2,'image/jpeg',2165,'products/24.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(69,0,'3-1',2,'image/jpeg',2165,'products/3-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(70,0,'3',2,'image/jpeg',2165,'products/3.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(71,0,'4-1',2,'image/jpeg',2165,'products/4-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(72,0,'4',2,'image/jpeg',2165,'products/4.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(73,0,'5-1',2,'image/jpeg',2165,'products/5-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(74,0,'5',2,'image/jpeg',2165,'products/5.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(75,0,'6-1',2,'image/jpeg',2165,'products/6-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(76,0,'6',2,'image/jpeg',2165,'products/6.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(77,0,'7-1',2,'image/jpeg',2165,'products/7-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(78,0,'7',2,'image/jpeg',2165,'products/7.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(79,0,'8-1',2,'image/jpeg',2165,'products/8-1.jpg','[]','2022-12-12 17:34:55','2022-12-12 17:34:55',NULL),(80,0,'8',2,'image/jpeg',2165,'products/8.jpg','[]','2022-12-12 17:34:56','2022-12-12 17:34:56',NULL),(81,0,'9-1',2,'image/jpeg',2165,'products/9-1.jpg','[]','2022-12-12 17:34:56','2022-12-12 17:34:56',NULL),(82,0,'9',2,'image/jpeg',2165,'products/9.jpg','[]','2022-12-12 17:34:56','2022-12-12 17:34:56',NULL),(83,0,'1',3,'image/jpeg',2165,'customers/1.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(84,0,'2',3,'image/jpeg',2165,'customers/2.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(85,0,'3',3,'image/jpeg',2165,'customers/3.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(86,0,'4',3,'image/jpeg',2165,'customers/4.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(87,0,'5',3,'image/jpeg',2165,'customers/5.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(88,0,'6',3,'image/jpeg',2165,'customers/6.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(89,0,'7',3,'image/jpeg',2165,'customers/7.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(90,0,'8',3,'image/jpeg',2165,'customers/8.jpg','[]','2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(91,0,'1',4,'image/png',3187,'flash-sales/1.png','[]','2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(92,0,'2',4,'image/png',2392,'flash-sales/2.png','[]','2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(93,0,'3',4,'image/png',2392,'flash-sales/3.png','[]','2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(94,0,'4',4,'image/png',2392,'flash-sales/4.png','[]','2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(95,0,'5',4,'image/png',2392,'flash-sales/5.png','[]','2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(96,0,'1-1',5,'image/png',10577,'sliders/1-1.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(97,0,'1-2',5,'image/png',10577,'sliders/1-2.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(98,0,'1-3',5,'image/png',2697,'sliders/1-3.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(99,0,'2-1',5,'image/png',4556,'sliders/2-1.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(100,0,'2-2',5,'image/png',4556,'sliders/2-2.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(101,0,'2-3',5,'image/png',2697,'sliders/2-3.png','[]','2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(102,0,'3-1',5,'image/png',10577,'sliders/3-1.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(103,0,'3-2',5,'image/png',10577,'sliders/3-2.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(104,0,'4-1',5,'image/png',10577,'sliders/4-1.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(105,0,'4-2',5,'image/png',10577,'sliders/4-2.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(106,0,'4-3',5,'image/png',2697,'sliders/4-3.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(107,0,'5-1',5,'image/png',5213,'sliders/5-1.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(108,0,'5-2',5,'image/png',5213,'sliders/5-2.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(109,0,'banner-1',5,'image/png',12801,'sliders/banner-1.png','[]','2022-12-12 17:35:02','2022-12-12 17:35:02',NULL),(110,0,'thumbnail-1',5,'image/jpeg',2165,'sliders/thumbnail-1.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(111,0,'thumbnail-2',5,'image/jpeg',2165,'sliders/thumbnail-2.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(112,0,'thumbnail-3',5,'image/jpeg',2165,'sliders/thumbnail-3.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(113,0,'thumbnail-4',5,'image/jpeg',2165,'sliders/thumbnail-4.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(114,0,'thumbnail-5',5,'image/jpeg',2165,'sliders/thumbnail-5.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(115,0,'thumbnail-6',5,'image/jpeg',2165,'sliders/thumbnail-6.jpg','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(116,0,'1',6,'image/png',2165,'news/1.png','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(117,0,'10',6,'image/png',2165,'news/10.png','[]','2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(118,0,'11',6,'image/png',2165,'news/11.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(119,0,'2',6,'image/png',2165,'news/2.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(120,0,'3',6,'image/png',2165,'news/3.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(121,0,'4',6,'image/png',2165,'news/4.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(122,0,'5',6,'image/png',2165,'news/5.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(123,0,'6',6,'image/png',2165,'news/6.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(124,0,'7',6,'image/png',2165,'news/7.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(125,0,'8',6,'image/png',2165,'news/8.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(126,0,'9',6,'image/png',2165,'news/9.png','[]','2022-12-12 17:35:04','2022-12-12 17:35:04',NULL),(127,0,'1',7,'image/png',3010,'promotion/1.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(128,0,'10',7,'image/png',2722,'promotion/10.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(129,0,'11',7,'image/png',2722,'promotion/11.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(130,0,'12',7,'image/png',2722,'promotion/12.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(131,0,'2',7,'image/png',3010,'promotion/2.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(132,0,'3',7,'image/png',3010,'promotion/3.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(133,0,'4',7,'image/png',2266,'promotion/4.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(134,0,'5',7,'image/png',3847,'promotion/5.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(135,0,'6',7,'image/png',3847,'promotion/6.png','[]','2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(136,0,'7',7,'image/png',2905,'promotion/7.png','[]','2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(137,0,'8',7,'image/png',1926,'promotion/8.png','[]','2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(138,0,'9',7,'image/png',2722,'promotion/9.png','[]','2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(139,0,'app-store',8,'image/jpeg',1064,'general/app-store.jpg','[]','2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(140,0,'category-1',8,'image/png',231,'general/category-1.png','[]','2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(141,0,'facebook',8,'image/png',646,'general/facebook.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(142,0,'favicon',8,'image/png',3890,'general/favicon.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(143,0,'google-play',8,'image/jpeg',1064,'general/google-play.jpg','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(144,0,'header-bg',8,'image/png',16995,'general/header-bg.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(145,0,'home-6',8,'image/jpeg',799491,'general/home-6.jpeg','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(146,0,'icon-1',8,'image/png',2024,'general/icon-1.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(147,0,'icon-2',8,'image/png',3531,'general/icon-2.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(148,0,'icon-3',8,'image/png',2344,'general/icon-3.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(149,0,'icon-4',8,'image/png',2314,'general/icon-4.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(150,0,'icon-5',8,'image/png',2853,'general/icon-5.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(151,0,'instagram',8,'image/png',2586,'general/instagram.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(152,0,'loading',8,'image/gif',25062,'general/loading.gif','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(153,0,'login-1',8,'image/png',3099,'general/login-1.png','[]','2022-12-12 17:35:07','2022-12-12 17:35:07',NULL),(154,0,'logo',8,'image/png',7698,'general/logo.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(155,0,'newsletter-background-image',8,'image/png',28409,'general/newsletter-background-image.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(156,0,'newsletter-image',8,'image/png',3997,'general/newsletter-image.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(157,0,'open-graph-image',8,'image/png',436809,'general/open-graph-image.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(158,0,'payment-methods',8,'image/png',268,'general/payment-methods.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(159,0,'pinterest',8,'image/png',2128,'general/pinterest.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(160,0,'twitter',8,'image/png',1759,'general/twitter.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(161,0,'youtube',8,'image/png',1083,'general/youtube.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(162,0,'1',9,'image/png',1307,'stores/1.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(163,0,'10',9,'image/png',1307,'stores/10.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(164,0,'11',9,'image/png',1307,'stores/11.png','[]','2022-12-12 17:35:08','2022-12-12 17:35:08',NULL),(165,0,'12',9,'image/png',1307,'stores/12.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(166,0,'13',9,'image/png',1307,'stores/13.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(167,0,'14',9,'image/png',1307,'stores/14.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(168,0,'15',9,'image/png',1307,'stores/15.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(169,0,'16',9,'image/png',1307,'stores/16.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(170,0,'17',9,'image/png',1307,'stores/17.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(171,0,'2',9,'image/png',1307,'stores/2.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(172,0,'3',9,'image/png',1307,'stores/3.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(173,0,'4',9,'image/png',1307,'stores/4.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(174,0,'5',9,'image/png',1307,'stores/5.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(175,0,'6',9,'image/png',1307,'stores/6.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(176,0,'7',9,'image/png',1307,'stores/7.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(177,0,'8',9,'image/png',1307,'stores/8.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL),(178,0,'9',9,'image/png',1307,'stores/9.png','[]','2022-12-12 17:35:09','2022-12-12 17:35:09',NULL);
/*!40000 ALTER TABLE `media_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_folders`
--

DROP TABLE IF EXISTS `media_folders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_folders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_folders_user_id_index` (`user_id`),
  KEY `media_folders_index` (`parent_id`,`user_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_folders`
--

LOCK TABLES `media_folders` WRITE;
/*!40000 ALTER TABLE `media_folders` DISABLE KEYS */;
INSERT INTO `media_folders` VALUES (1,0,'product-categories','product-categories',0,'2022-12-12 17:34:49','2022-12-12 17:34:49',NULL),(2,0,'products','products',0,'2022-12-12 17:34:52','2022-12-12 17:34:52',NULL),(3,0,'customers','customers',0,'2022-12-12 17:34:58','2022-12-12 17:34:58',NULL),(4,0,'flash-sales','flash-sales',0,'2022-12-12 17:35:00','2022-12-12 17:35:00',NULL),(5,0,'sliders','sliders',0,'2022-12-12 17:35:01','2022-12-12 17:35:01',NULL),(6,0,'news','news',0,'2022-12-12 17:35:03','2022-12-12 17:35:03',NULL),(7,0,'promotion','promotion',0,'2022-12-12 17:35:05','2022-12-12 17:35:05',NULL),(8,0,'general','general',0,'2022-12-12 17:35:06','2022-12-12 17:35:06',NULL),(9,0,'stores','stores',0,'2022-12-12 17:35:08','2022-12-12 17:35:08',NULL);
/*!40000 ALTER TABLE `media_folders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_settings`
--

DROP TABLE IF EXISTS `media_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `media_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_settings`
--

LOCK TABLES `media_settings` WRITE;
/*!40000 ALTER TABLE `media_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_locations`
--

DROP TABLE IF EXISTS `menu_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned NOT NULL,
  `location` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_locations_menu_id_created_at_index` (`menu_id`,`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_locations`
--

LOCK TABLES `menu_locations` WRITE;
/*!40000 ALTER TABLE `menu_locations` DISABLE KEYS */;
INSERT INTO `menu_locations` VALUES (1,1,'main-menu','2022-12-12 17:35:10','2022-12-12 17:35:10'),(2,2,'header-navigation','2022-12-12 17:35:10','2022-12-12 17:35:10'),(3,6,'main-menu','2022-12-12 17:35:10','2022-12-12 17:35:10'),(4,7,'header-navigation','2022-12-12 17:35:10','2022-12-12 17:35:10');
/*!40000 ALTER TABLE `menu_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_nodes`
--

DROP TABLE IF EXISTS `menu_nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_nodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned NOT NULL,
  `parent_id` int unsigned NOT NULL DEFAULT '0',
  `reference_id` int unsigned DEFAULT NULL,
  `reference_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_font` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `has_child` tinyint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_nodes_menu_id_index` (`menu_id`),
  KEY `menu_nodes_parent_id_index` (`parent_id`),
  KEY `reference_id` (`reference_id`),
  KEY `reference_type` (`reference_type`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_nodes`
--

LOCK TABLES `menu_nodes` WRITE;
/*!40000 ALTER TABLE `menu_nodes` DISABLE KEYS */;
INSERT INTO `menu_nodes` VALUES (1,1,0,NULL,NULL,'/','fi-rs-home',0,'Home',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(2,1,1,1,'Botble\\Page\\Models\\Page','/homepage',NULL,0,'Home 1',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(3,1,1,2,'Botble\\Page\\Models\\Page','/homepage-2',NULL,0,'Home 2',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(4,1,1,3,'Botble\\Page\\Models\\Page','/homepage-3',NULL,0,'Home 3',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(5,1,1,4,'Botble\\Page\\Models\\Page','/homepage-4',NULL,0,'Home 4',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(6,1,1,16,'Botble\\Page\\Models\\Page','/homepage-5',NULL,0,'Home 5',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(7,1,1,17,'Botble\\Page\\Models\\Page','/homepage-6',NULL,0,'Home 6',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(8,1,0,NULL,NULL,'/products',NULL,0,'Shop',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(9,1,8,NULL,NULL,'/products',NULL,0,'Shop Grid - Full Width',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(10,1,8,NULL,NULL,'/products?layout=product-right-sidebar',NULL,0,'Shop Grid - Right Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(11,1,8,NULL,NULL,'/products?layout=product-left-sidebar',NULL,0,'Shop Grid - Left Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(12,1,8,1,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/milks-and-dairies',NULL,0,'Products Of Category',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(13,1,0,NULL,NULL,'/stores',NULL,0,'Stores',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(14,1,13,NULL,NULL,'/stores',NULL,0,'Stores - Grid',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(15,1,13,NULL,NULL,'/stores?layout=stores-list',NULL,0,'Stores - List',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(16,1,13,NULL,NULL,'/stores/gopro',NULL,0,'Store - Detail',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(17,1,0,NULL,NULL,'/products/seeds-of-change-organic-quinoe',NULL,0,'Product',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(18,1,17,NULL,NULL,'/products/seeds-of-change-organic-quinoe',NULL,0,'Product Right Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(19,1,17,NULL,NULL,'/products/all-natural-italian-style-chicken-meatballs',NULL,0,'Product Left Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(20,1,17,NULL,NULL,'/products/angies-boomchickapop-sweet-salty-kettle-corn',NULL,0,'Product Full Width',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(21,1,0,5,'Botble\\Page\\Models\\Page','/blog',NULL,0,'Blog',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(22,1,21,5,'Botble\\Page\\Models\\Page','/blog',NULL,0,'Blog Grid',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(23,1,21,13,'Botble\\Page\\Models\\Page','/blog-list',NULL,0,'Blog List',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(24,1,21,14,'Botble\\Page\\Models\\Page','/blog-big',NULL,0,'Blog Big',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(25,1,21,15,'Botble\\Page\\Models\\Page','/blog-wide',NULL,0,'Blog Wide',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(26,1,21,NULL,NULL,'/blog/4-expert-tips-on-how-to-choose-the-right-mens-wallet',NULL,0,'Single Post',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(27,1,26,NULL,NULL,'/blog/4-expert-tips-on-how-to-choose-the-right-mens-wallet',NULL,0,'Single Post Right Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(28,1,26,NULL,NULL,'/blog/sexy-clutches-how-to-buy-wear-a-designer-clutch-bag',NULL,0,'Single Post Left Sidebar',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(29,1,26,NULL,NULL,'/blog/the-top-2020-handbag-trends-to-know',NULL,0,'Single Post Full Width',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(30,1,26,NULL,NULL,'/blog/how-to-match-the-color-of-your-handbag-with-an-outfit',NULL,0,'Single Post with Product Listing',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(31,1,0,18,'Botble\\Page\\Models\\Page','/faq',NULL,0,'FAQ',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(32,1,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Contact',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(33,2,0,7,'Botble\\Page\\Models\\Page','/about-us',NULL,0,'About Us',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(34,2,0,NULL,NULL,'/orders/tracking',NULL,0,'Order Tracking',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(35,3,0,1,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/milks-and-dairies',NULL,0,'Men',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(36,3,0,2,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/clothing-beauty',NULL,0,'Women',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(37,3,0,3,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/pet-toy',NULL,0,'Accessories',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(38,3,0,4,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/baking-material',NULL,0,'Shoes',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(39,3,0,5,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/fresh-fruit',NULL,0,'Denim',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(40,3,0,6,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/wines-drinks',NULL,0,'Dress',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(41,4,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Contact Us',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(42,4,0,7,'Botble\\Page\\Models\\Page','/about-us',NULL,0,'About Us',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(43,4,0,8,'Botble\\Page\\Models\\Page','/cookie-policy',NULL,0,'Cookie Policy',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(44,4,0,9,'Botble\\Page\\Models\\Page','/terms-conditions',NULL,0,'Terms & Conditions',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(45,4,0,10,'Botble\\Page\\Models\\Page','/returns-exchanges',NULL,0,'Returns & Exchanges',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(46,4,0,11,'Botble\\Page\\Models\\Page','/shipping-delivery',NULL,0,'Shipping & Delivery',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(47,4,0,12,'Botble\\Page\\Models\\Page','/privacy-policy',NULL,0,'Privacy Policy',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(48,5,0,7,'Botble\\Page\\Models\\Page','/about-us',NULL,0,'About us',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(49,5,0,NULL,NULL,'#',NULL,0,'Affiliate',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(50,5,0,NULL,NULL,'#',NULL,0,'Career',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(51,5,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Contact us',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(52,6,0,NULL,NULL,'/',NULL,0,'Trang chủ',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(53,6,52,1,'Botble\\Page\\Models\\Page','/homepage',NULL,0,'Trang chủ 1',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(54,6,52,2,'Botble\\Page\\Models\\Page','/homepage-2',NULL,0,'Trang chủ 2',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(55,6,52,3,'Botble\\Page\\Models\\Page','/homepage-3',NULL,0,'Trang chủ 3',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(56,6,52,4,'Botble\\Page\\Models\\Page','/homepage-4',NULL,0,'Trang chủ 4',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(57,6,52,16,'Botble\\Page\\Models\\Page','/homepage-5',NULL,0,'Trang chủ 5',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(58,6,52,17,'Botble\\Page\\Models\\Page','/homepage-6',NULL,0,'Trang chủ 6',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(59,6,0,NULL,NULL,'/products',NULL,0,'Bán hàng',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(60,6,59,NULL,NULL,'/products',NULL,0,'Tất cả sản phẩm',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(61,6,59,1,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/milks-and-dairies',NULL,0,'Danh mục sản phẩm',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(62,6,0,NULL,NULL,'/stores',NULL,0,'Cửa hàng',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(63,6,62,NULL,NULL,'/stores',NULL,0,'Cửa hàng - Grid',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(64,6,62,NULL,NULL,'/stores?layout=stores-list',NULL,0,'Cửa hàng - List',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(65,6,62,NULL,NULL,'/stores/gopro',NULL,0,'Cửa hàng - Detail',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(66,6,0,NULL,NULL,'#',NULL,0,'Sản phẩm',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(67,6,66,NULL,NULL,'/products/seeds-of-change-organic-quinoe',NULL,0,'Sản phẩm Sidebar phải',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(68,6,66,NULL,NULL,'/products/all-natural-italian-style-chicken-meatballs',NULL,0,'Sản phẩm Sidebar trái',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(69,6,66,NULL,NULL,'/products/angies-boomchickapop-sweet-salty-kettle-corn',NULL,0,'Sản phẩm full width',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(70,6,0,5,'Botble\\Page\\Models\\Page','/blog',NULL,0,'Tin tức',NULL,'_self',1,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(71,6,70,5,'Botble\\Page\\Models\\Page','/blog',NULL,0,'Tin tức Sidebar phải',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(72,6,70,13,'Botble\\Page\\Models\\Page','/blog-list',NULL,0,'Tin tức Sidebar trái',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(73,6,70,NULL,NULL,'/blog/4-expert-tips-on-how-to-choose-the-right-mens-wallet',NULL,0,'Bài viết Sidebar phải',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(74,6,70,NULL,NULL,'/blog/sexy-clutches-how-to-buy-wear-a-designer-clutch-bag',NULL,0,'Bài viết Sidebar trái',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(75,6,70,NULL,NULL,'/blog/the-top-2020-handbag-trends-to-know',NULL,0,'Bài viết Full Width',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(76,6,70,NULL,NULL,'/blog/how-to-match-the-color-of-your-handbag-with-an-outfit',NULL,0,'Bài viết kèm sản phẩm',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(77,6,0,18,'Botble\\Page\\Models\\Page','/faq',NULL,0,'FAQ',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(78,6,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Liên hệ',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(79,7,0,8,'Botble\\Page\\Models\\Page','/cookie-policy',NULL,0,'Về Chúng Tôi',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(80,7,0,NULL,NULL,'/orders/tracking',NULL,0,'Theo Dõi Đơn Hàng',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(81,8,0,1,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/milks-and-dairies',NULL,0,'Sữa',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(82,8,0,2,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/clothing-beauty',NULL,0,'Quần áo và làm đẹp',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(83,8,0,3,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/pet-toy',NULL,0,'Đồ chơi thú cưng',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(84,8,0,4,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/baking-material',NULL,0,'Nguyên liệu làm bánh',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(85,8,0,5,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/fresh-fruit',NULL,0,'Trái cây tươi',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(86,8,0,6,'Botble\\Ecommerce\\Models\\ProductCategory','/product-categories/wines-drinks',NULL,0,'Rượu & Đồ uống',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(87,9,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Liên hệ',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(88,9,0,8,'Botble\\Page\\Models\\Page','/cookie-policy',NULL,0,'Về chúng tôi',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(89,9,0,9,'Botble\\Page\\Models\\Page','/terms-conditions',NULL,0,'Điều khoản & quy định',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(90,9,0,10,'Botble\\Page\\Models\\Page','/returns-exchanges',NULL,0,'Chính sách đổi trả',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(91,9,0,11,'Botble\\Page\\Models\\Page','/shipping-delivery',NULL,0,'Chính sách vận chuyển',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(92,9,0,12,'Botble\\Page\\Models\\Page','/privacy-policy',NULL,0,'Chính sách bảo mật',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(93,10,0,7,'Botble\\Page\\Models\\Page','/about-us',NULL,0,'Về chúng tôi',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(94,10,0,NULL,NULL,'#',NULL,0,'Tiếp thị liên kết',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(95,10,0,NULL,NULL,'#',NULL,0,'Tuyển dụng',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10'),(96,10,0,6,'Botble\\Page\\Models\\Page','/contact',NULL,0,'Liên hệ',NULL,'_self',0,'2022-12-12 17:35:10','2022-12-12 17:35:10');
/*!40000 ALTER TABLE `menu_nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Main menu','main-menu','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(2,'Header menu','header-menu','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(3,'Product categories','product-categories','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(4,'Information','information','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(5,'Company','company','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(6,'Menu chính','menu-chinh','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(7,'Menu trên cùng','menu-tren-cung','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(8,'Product categories','danh-muc-san-pham','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(9,'Information','thong-tin','published','2022-12-12 17:35:10','2022-12-12 17:35:10'),(10,'Công ty','cong-ty','published','2022-12-12 17:35:10','2022-12-12 17:35:10');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_boxes`
--

DROP TABLE IF EXISTS `meta_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meta_boxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci,
  `reference_id` int unsigned NOT NULL,
  `reference_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meta_boxes_reference_id_index` (`reference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_boxes`
--

LOCK TABLES `meta_boxes` WRITE;
/*!40000 ALTER TABLE `meta_boxes` DISABLE KEYS */;
INSERT INTO `meta_boxes` VALUES (1,'icon_image','[\"product-categories\\/icon-1.png\"]',1,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(2,'background_color','[\"#F2FCE4\"]',1,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(3,'icon_image','[\"product-categories\\/icon-2.png\"]',2,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(4,'background_color','[\"#FFFCEB\"]',2,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(5,'icon_image','[\"product-categories\\/icon-3.png\"]',3,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(6,'background_color','[\"#ECFFEC\"]',3,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(7,'icon_image','[\"product-categories\\/icon-4.png\"]',4,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(8,'background_color','[\"#FEEFEA\"]',4,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(9,'icon_image','[\"product-categories\\/icon-5.png\"]',5,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(10,'background_color','[\"#FFF3EB\"]',5,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(11,'icon_image','[\"product-categories\\/icon-6.png\"]',6,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(12,'background_color','[\"#FFF3FF\"]',6,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(13,'icon_image','[\"product-categories\\/icon-7.png\"]',7,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(14,'background_color','[\"#F2FCE4\"]',7,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(15,'icon_image','[\"product-categories\\/icon-8.png\"]',8,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(16,'background_color','[\"#FFFCEB\"]',8,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(17,'icon_image','[\"product-categories\\/icon-9.png\"]',9,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(18,'background_color','[\"#ECFFEC\"]',9,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(19,'icon_image','[\"product-categories\\/icon-10.png\"]',10,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(20,'background_color','[\"#FEEFEA\"]',10,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(21,'icon_image','[\"product-categories\\/icon-11.png\"]',11,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(22,'background_color','[\"#FFF3EB\"]',11,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(23,'icon_image','[\"product-categories\\/icon-12.png\"]',12,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(24,'background_color','[\"#FFF3FF\"]',12,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(25,'icon_image','[\"product-categories\\/icon-13.png\"]',13,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(26,'background_color','[\"#F2FCE4\"]',13,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(27,'icon_image','[\"product-categories\\/icon-14.png\"]',14,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(28,'background_color','[\"#FFFCEB\"]',14,'Botble\\Ecommerce\\Models\\ProductCategory','2022-12-12 17:34:51','2022-12-12 17:34:51'),(29,'layout','[\"product-right-sidebar\"]',1,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(30,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',1,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(31,'layout','[\"product-left-sidebar\"]',2,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(32,'is_popular','[\"1\"]',2,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(33,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',2,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(34,'layout','[\"product-full-width\"]',3,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(35,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',3,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(36,'is_popular','[\"1\"]',4,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:56','2022-12-12 17:34:56'),(37,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',4,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(38,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',5,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(39,'is_popular','[\"1\"]',6,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(40,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',6,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(41,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',7,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(42,'is_popular','[\"1\"]',8,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(43,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',8,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(44,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',9,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(45,'is_popular','[\"1\"]',10,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(46,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',10,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(47,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',11,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(48,'is_popular','[\"1\"]',12,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(49,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',12,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(50,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',13,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(51,'is_popular','[\"1\"]',14,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(52,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',14,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(53,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',15,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(54,'is_popular','[\"1\"]',16,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(55,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',16,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(56,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',17,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(57,'is_popular','[\"1\"]',18,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(58,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',18,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(59,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',19,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(60,'is_popular','[\"1\"]',20,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(61,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',20,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(62,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',21,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(63,'is_popular','[\"1\"]',22,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(64,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',22,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(65,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',23,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(66,'is_popular','[\"1\"]',24,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(67,'faq_schema_config','[[[{\"key\":\"question\",\"value\":\"What Shipping Methods Are Available?\"},{\"key\":\"answer\",\"value\":\"Ex Portland Pitchfork irure mustache. Eutra fap before they sold out literally. Aliquip ugh bicycle rights actually mlkshk, seitan squid craft beer tempor.\"}],[{\"key\":\"question\",\"value\":\"Do You Ship Internationally?\"},{\"key\":\"answer\",\"value\":\"Hoodie tote bag mixtape tofu. Typewriter jean shorts wolf quinoa, messenger bag organic freegan cray.\"}],[{\"key\":\"question\",\"value\":\"How Long Will It Take To Get My Package?\"},{\"key\":\"answer\",\"value\":\"Swag slow-carb quinoa VHS typewriter pork belly brunch, paleo single-origin coffee Wes Anderson. Flexitarian Pitchfork forage, literally paleo fap pour-over. Wes Anderson Pinterest YOLO fanny pack meggings, deep v XOXO chambray sustainable slow-carb raw denim church-key fap chillwave Etsy. +1 typewriter kitsch, American Apparel tofu Banksy Vice.\"}],[{\"key\":\"question\",\"value\":\"What Payment Methods Are Accepted?\"},{\"key\":\"answer\",\"value\":\"Fashion axe DIY jean shorts, swag kale chips meh polaroid kogi butcher Wes Anderson chambray next level semiotics gentrify yr. Voluptate photo booth fugiat Vice. Austin sed Williamsburg, ea labore raw denim voluptate cred proident mixtape excepteur mustache. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY.\"}],[{\"key\":\"question\",\"value\":\"Is Buying On-Line Safe?\"},{\"key\":\"answer\",\"value\":\"Art party authentic freegan semiotics jean shorts chia cred. Neutra Austin roof party Brooklyn, synth Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest.\"}]]]',24,'Botble\\Ecommerce\\Models\\Product','2022-12-12 17:34:57','2022-12-12 17:34:57'),(68,'image','[\"flash-sales\\/1.png\"]',1,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(69,'image','[\"flash-sales\\/2.png\"]',2,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(70,'image','[\"flash-sales\\/3.png\"]',3,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(71,'image','[\"flash-sales\\/4.png\"]',4,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(72,'image','[\"flash-sales\\/5.png\"]',5,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(73,'vi_image','[\"flash-sales\\/1.png\"]',1,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(74,'vi_image','[\"flash-sales\\/2.png\"]',2,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(75,'vi_image','[\"flash-sales\\/3.png\"]',3,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(76,'vi_image','[\"flash-sales\\/4.png\"]',4,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(77,'vi_image','[\"flash-sales\\/5.png\"]',5,'Botble\\Ecommerce\\Models\\FlashSale','2022-12-12 17:35:01','2022-12-12 17:35:01'),(78,'simple_slider_style','[\"style-4\"]',1,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(79,'simple_slider_style','[\"style-2\"]',2,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(80,'simple_slider_style','[\"style-3\"]',3,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(81,'simple_slider_style','[\"style-1\"]',4,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(82,'simple_slider_style','[\"style-5\"]',5,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(83,'simple_slider_style','[\"style-6\"]',6,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(84,'simple_slider_style','[\"style-1\"]',7,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(85,'simple_slider_style','[\"style-4\"]',8,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(86,'simple_slider_style','[\"style-2\"]',9,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(87,'simple_slider_style','[\"style-3\"]',10,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(88,'simple_slider_style','[\"style-1\"]',11,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(89,'simple_slider_style','[\"style-5\"]',12,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(90,'simple_slider_style','[\"style-6\"]',13,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(91,'simple_slider_style','[\"style-1\"]',14,'Botble\\SimpleSlider\\Models\\SimpleSlider','2022-12-12 17:35:03','2022-12-12 17:35:03'),(92,'layout','[\"blog-post-right-sidebar\"]',1,'Botble\\Blog\\Models\\Post','2022-12-12 17:35:04','2022-12-12 17:35:04'),(93,'layout','[\"blog-post-left-sidebar\"]',2,'Botble\\Blog\\Models\\Post','2022-12-12 17:35:04','2022-12-12 17:35:04'),(94,'layout','[\"blog-post-full-width\"]',3,'Botble\\Blog\\Models\\Post','2022-12-12 17:35:04','2022-12-12 17:35:04'),(95,'layout','[\"blog-post-full-width\"]',4,'Botble\\Blog\\Models\\Post','2022-12-12 17:35:04','2022-12-12 17:35:04'),(96,'header_style','[\"header-style-5\"]',16,'Botble\\Page\\Models\\Page','2022-12-12 17:35:05','2022-12-12 17:35:05'),(97,'header_style','[\"header-style-5\"]',17,'Botble\\Page\\Models\\Page','2022-12-12 17:35:05','2022-12-12 17:35:05'),(98,'button_text','[\"Shop now\"]',1,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(99,'subtitle','[\"Everyday Fresh & \\nClean with Our \\nProducts\"]',1,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(100,'button_text','[\"Shop now\"]',2,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(101,'subtitle','[\"Make your Breakfast Healthy and Easy\"]',2,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(102,'button_text','[\"Shop now\"]',3,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(103,'subtitle','[\"The best Organic Products Online\"]',3,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(104,'button_text','[\"Shop now\"]',4,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(105,'subtitle','[\"Bring nature into your home\"]',4,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(106,'button_text','[\"Shop now\"]',5,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(107,'subtitle','[\"Delivered to your home\"]',5,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(108,'button_text','[\"Shop now\"]',6,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(109,'subtitle','[\"Save 17% <br \\/>on Oganic <br \\/>Juice\"]',6,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(110,'button_text','[\"Shop now\"]',7,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(111,'subtitle','[\"Everyday Fresh & Clean with Our Products\"]',7,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(112,'button_text','[\"Shop now\"]',8,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(113,'subtitle','[\"The best Organic Products Online\"]',8,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(114,'button_text','[\"Go to supplier\"]',9,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(115,'subtitle','[\"Everyday Fresh with\\n Our Products\"]',9,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(116,'button_text','[\"Go to supplier\"]',10,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(117,'subtitle','[\"100% guaranteed all\\n Fresh items\"]',10,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(118,'button_text','[\"Go to supplier\"]',11,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(119,'subtitle','[\"Special grocery sale\\n off this month\"]',11,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(120,'button_text','[\"Go to supplier\"]',12,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(121,'subtitle','[\"Enjoy 15% OFF for all\\n vegetable and fruit\"]',12,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(122,'vi_subtitle','[\"S\\u1ea1ch s\\u1ebd h\\u00e0ng ng\\u00e0y v\\u1edbi \\nc\\u00e1c s\\u1ea3n ph\\u1ea9m c\\u1ee7a \\nch\\u00fang t\\u00f4i\"]',1,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(123,'vi_button_text','[\"Mua ngay\"]',1,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(124,'vi_subtitle','[\"N\\u1eabu b\\u1eefa s\\u00e1ng c\\u1ee7a b\\u1ea1n l\\u00e0nh m\\u1ea1nh v\\u00e0 d\\u1ec5 d\\u00e0ng\"]',2,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(125,'vi_button_text','[\"Mua ngay\"]',2,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(126,'vi_subtitle','[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m h\\u1eefu c\\u01a1 t\\u1ed1t nh\\u1ea5t tr\\u1ef1c tuy\\u1ebfn\"]',3,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(127,'vi_button_text','[\"Mua ngay\"]',3,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(128,'vi_subtitle','[\"Mang thi\\u00ean nhi\\u00ean v\\u00e0o ng\\u00f4i nh\\u00e0 c\\u1ee7a b\\u1ea1n\"]',4,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(129,'vi_button_text','[\"Mua ngay\"]',4,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(130,'vi_subtitle','[\"Giao t\\u1eadn nh\\u00e0\"]',5,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(131,'vi_button_text','[\"Mua ngay\"]',5,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(132,'vi_subtitle','[\"Ti\\u1ebft ki\\u1ec7m 17% <br \\/> khi mua N\\u01b0\\u1edbc \\u00e9p <br \\/> Oganic\"]',6,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(133,'vi_button_text','[\"Mua ngay\"]',6,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(134,'vi_subtitle','[\"T\\u01b0\\u01a1i v\\u00e0 S\\u1ea1ch h\\u00e0ng ng\\u00e0y v\\u1edbi c\\u00e1c s\\u1ea3n ph\\u1ea9m c\\u1ee7a ch\\u00fang t\\u00f4i\"]',7,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(135,'vi_button_text','[\"Shop now\"]',7,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(136,'vi_subtitle','[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m h\\u1eefu c\\u01a1 t\\u1ed1t nh\\u1ea5t tr\\u1ef1c tuy\\u1ebfn\"]',8,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(137,'vi_button_text','[\"Shop now\"]',8,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(138,'vi_subtitle','[\"T\\u01b0\\u01a1i m\\u1edbi m\\u1ed7i ng\\u00e0y v\\u1edbi\\n c\\u00e1c s\\u1ea3n ph\\u1ea9m c\\u1ee7a ch\\u00fang t\\u00f4i\"]',9,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(139,'vi_button_text','[\"\\u0110i \\u0111\\u1ebfn nh\\u00e0 cung c\\u1ea5p\"]',9,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(140,'vi_subtitle','[\"100% \\u0111\\u1ea3m b\\u1ea3o t\\u1ea5t c\\u1ea3\\n c\\u00e1c m\\u1eb7t h\\u00e0ng t\\u01b0\\u01a1i\"]',10,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(141,'vi_button_text','[\"\\u0110i \\u0111\\u1ebfn nh\\u00e0 cung c\\u1ea5p\"]',10,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(142,'vi_subtitle','[\"Gi\\u1ea3m gi\\u00e1 h\\u00e0ng t\\u1ea1p h\\u00f3a\\n \\u0111\\u1eb7c bi\\u1ec7t trong th\\u00e1ng n\\u00e0y\"]',11,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(143,'vi_button_text','[\"\\u0110i \\u0111\\u1ebfn nh\\u00e0 cung c\\u1ea5p\"]',11,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(144,'vi_subtitle','[\"GI\\u1ea2M GI\\u00c1 15% cho t\\u1ea5t c\\u1ea3\\n rau v\\u00e0 tr\\u00e1i c\\u00e2y\"]',12,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(145,'vi_button_text','[\"\\u0110i \\u0111\\u1ebfn nh\\u00e0 cung c\\u1ea5p\"]',12,'Botble\\Ads\\Models\\Ads','2022-12-12 17:35:06','2022-12-12 17:35:06'),(146,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',1,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10'),(147,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',2,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10'),(148,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',3,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10'),(149,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',4,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10'),(150,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',5,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10'),(151,'social_links','[{\"facebook\":\"botble\",\"twitter\":\"botble\"}]',6,'Botble\\Marketplace\\Models\\Store','2022-12-12 17:35:10','2022-12-12 17:35:10');
/*!40000 ALTER TABLE `meta_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_04_09_032329_create_base_tables',1),(2,'2013_04_09_062329_create_revisions_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2016_06_10_230148_create_acl_tables',1),(6,'2016_06_14_230857_create_menus_table',1),(7,'2016_06_28_221418_create_pages_table',1),(8,'2016_10_05_074239_create_setting_table',1),(9,'2016_11_28_032840_create_dashboard_widget_tables',1),(10,'2016_12_16_084601_create_widgets_table',1),(11,'2017_05_09_070343_create_media_tables',1),(12,'2017_11_03_070450_create_slug_table',1),(13,'2019_01_05_053554_create_jobs_table',1),(14,'2019_08_19_000000_create_failed_jobs_table',1),(15,'2019_12_14_000001_create_personal_access_tokens_table',1),(16,'2022_04_20_100851_add_index_to_media_table',1),(17,'2022_04_20_101046_add_index_to_menu_table',1),(18,'2022_07_10_034813_move_lang_folder_to_root',1),(19,'2022_08_04_051940_add_missing_column_expires_at',1),(20,'2022_10_14_024629_drop_column_is_featured',1),(21,'2022_11_18_063357_add_missing_timestamp_in_table_settings',1),(22,'2022_12_02_093615_update_slug_index_columns',1),(23,'2020_11_18_150916_ads_create_ads_table',2),(24,'2021_12_02_035301_add_ads_translations_table',2),(25,'2015_06_29_025744_create_audit_history',3),(26,'2015_06_18_033822_create_blog_table',4),(27,'2021_02_16_092633_remove_default_value_for_author_type',4),(28,'2021_12_03_030600_create_blog_translations',4),(29,'2022_04_19_113923_add_index_to_table_posts',4),(30,'2016_06_17_091537_create_contacts_table',5),(31,'2020_03_05_041139_create_ecommerce_tables',6),(32,'2021_01_01_044147_ecommerce_create_flash_sale_table',6),(33,'2021_01_17_082713_add_column_is_featured_to_product_collections_table',6),(34,'2021_01_18_024333_add_zip_code_into_table_customer_addresses',6),(35,'2021_02_18_073505_update_table_ec_reviews',6),(36,'2021_03_10_024419_add_column_confirmed_at_to_table_ec_customers',6),(37,'2021_03_10_025153_change_column_tax_amount',6),(38,'2021_03_20_033103_add_column_availability_to_table_ec_products',6),(39,'2021_04_28_074008_ecommerce_create_product_label_table',6),(40,'2021_05_31_173037_ecommerce_create_ec_products_translations',6),(41,'2021_06_28_153141_correct_slugs_data',6),(42,'2021_08_17_105016_remove_column_currency_id_in_some_tables',6),(43,'2021_08_30_142128_add_images_column_to_ec_reviews_table',6),(44,'2021_09_01_115151_remove_unused_fields_in_ec_products',6),(45,'2021_10_04_030050_add_column_created_by_to_table_ec_products',6),(46,'2021_10_05_122616_add_status_column_to_ec_customers_table',6),(47,'2021_11_03_025806_nullable_phone_number_in_ec_customer_addresses',6),(48,'2021_11_23_071403_correct_languages_for_product_variations',6),(49,'2021_11_28_031808_add_product_tags_translations',6),(50,'2021_12_01_031123_add_featured_image_to_ec_products',6),(51,'2022_01_01_033107_update_table_ec_shipments',6),(52,'2022_02_16_042457_improve_product_attribute_sets',6),(53,'2022_03_22_075758_correct_product_name',6),(54,'2022_04_19_113334_add_index_to_ec_products',6),(55,'2022_04_28_144405_remove_unused_table',6),(56,'2022_05_05_115015_create_ec_customer_recently_viewed_products_table',6),(57,'2022_05_18_143720_add_index_to_table_ec_product_categories',6),(58,'2022_06_16_095633_add_index_to_some_tables',6),(59,'2022_06_30_035148_create_order_referrals_table',6),(60,'2022_07_24_153815_add_completed_at_to_ec_orders_table',6),(61,'2022_08_14_032836_create_ec_order_returns_table',6),(62,'2022_08_14_033554_create_ec_order_return_items_table',6),(63,'2022_08_15_040324_add_billing_address',6),(64,'2022_08_30_091114_support_digital_products_table',6),(65,'2022_09_13_095744_create_options_table',6),(66,'2022_09_13_104347_create_option_value_table',6),(67,'2022_10_05_163518_alter_table_ec_order_product',6),(68,'2022_10_12_041517_create_invoices_table',6),(69,'2022_10_12_142226_update_orders_table',6),(70,'2022_10_13_024916_update_table_order_returns',6),(71,'2022_10_21_030830_update_columns_in_ec_shipments_table',6),(72,'2022_10_28_021046_update_columns_in_ec_shipments_table',6),(73,'2022_11_16_034522_update_type_column_in_ec_shipping_rules_table',6),(74,'2022_11_19_041643_add_ec_tax_product_table',6),(75,'2022_12_12_063830_update_tax_defadult_in_ec_tax_products_table',6),(76,'2018_07_09_221238_create_faq_table',7),(77,'2021_12_03_082134_create_faq_translations',7),(78,'2016_10_03_032336_create_languages_table',8),(79,'2021_10_25_021023_fix-priority-load-for-language-advanced',9),(80,'2021_12_03_075608_create_page_translations',9),(81,'2019_11_18_061011_create_country_table',10),(82,'2021_12_03_084118_create_location_translations',10),(83,'2021_12_03_094518_migrate_old_location_data',10),(84,'2021_12_10_034440_switch_plugin_location_to_use_language_advanced',10),(85,'2022_01_16_085908_improve_plugin_location',10),(86,'2022_08_04_052122_delete_location_backup_tables',10),(87,'2022_10_29_065232_increase_states_abbreviation_column',10),(88,'2022_11_06_061847_increase_state_translations_abbreviation_column',10),(89,'2021_07_06_030002_create_marketplace_table',11),(90,'2021_09_04_150137_add_vendor_verified_at_to_ec_customers_table',11),(91,'2021_10_04_033903_add_column_approved_by_into_table_ec_products',11),(92,'2021_10_06_124943_add_transaction_id_column_to_mp_customer_withdrawals_table',11),(93,'2021_10_10_054216_add_columns_to_mp_customer_revenues_table',11),(94,'2021_12_06_031304_update_table_mp_customer_revenues',11),(95,'2022_10_19_152916_add_columns_to_mp_stores_table',11),(96,'2022_10_20_062849_create_mp_category_sale_commissions_table',11),(97,'2022_11_02_071413_add_more_info_for_store',11),(98,'2022_11_02_080444_add_tax_info',11),(99,'2017_10_24_154832_create_newsletter_table',12),(100,'2017_05_18_080441_create_payment_tables',13),(101,'2021_03_27_144913_add_customer_type_into_table_payments',13),(102,'2021_05_24_034720_make_column_currency_nullable',13),(103,'2021_08_09_161302_add_metadata_column_to_payments_table',13),(104,'2021_10_19_020859_update_metadata_field',13),(105,'2022_06_28_151901_activate_paypal_stripe_plugin',13),(106,'2022_07_07_153354_update_charge_id_in_table_payments',13),(107,'2017_07_11_140018_create_simple_slider_table',14),(108,'2016_10_07_193005_create_translations_table',15);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_category_sale_commissions`
--

DROP TABLE IF EXISTS `mp_category_sale_commissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mp_category_sale_commissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_category_id` int unsigned NOT NULL,
  `commission_percentage` decimal(8,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mp_category_sale_commissions_product_category_id_unique` (`product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_category_sale_commissions`
--

LOCK TABLES `mp_category_sale_commissions` WRITE;
/*!40000 ALTER TABLE `mp_category_sale_commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `mp_category_sale_commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_customer_revenues`
--

DROP TABLE IF EXISTS `mp_customer_revenues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mp_customer_revenues` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned DEFAULT NULL,
  `order_id` int unsigned DEFAULT NULL,
  `sub_amount` decimal(15,2) DEFAULT '0.00',
  `fee` decimal(15,2) unsigned DEFAULT '0.00',
  `amount` decimal(15,2) DEFAULT '0.00',
  `current_balance` decimal(15,2) DEFAULT '0.00',
  `currency` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int unsigned NOT NULL DEFAULT '0',
  `type` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_customer_revenues`
--

LOCK TABLES `mp_customer_revenues` WRITE;
/*!40000 ALTER TABLE `mp_customer_revenues` DISABLE KEYS */;
INSERT INTO `mp_customer_revenues` VALUES (1,2,1,340.00,0.00,340.00,0.00,'USD',NULL,'2022-12-11 05:35:15','2022-12-11 05:35:15',0,NULL),(2,5,2,720.00,0.00,720.00,0.00,'USD',NULL,'2022-12-11 11:35:15','2022-12-11 11:35:15',0,NULL),(3,7,5,234.00,0.00,234.00,0.00,'USD',NULL,'2022-12-09 17:35:15','2022-12-09 17:35:15',0,NULL),(4,5,7,115.00,0.00,115.00,720.00,'USD',NULL,'2022-12-06 17:35:16','2022-12-06 17:35:16',0,NULL),(5,4,8,222.00,0.00,222.00,0.00,'USD',NULL,'2022-12-05 05:35:16','2022-12-05 05:35:16',0,NULL),(6,2,10,351.00,0.00,351.00,340.00,'USD',NULL,'2022-12-07 05:35:16','2022-12-07 05:35:16',0,NULL),(7,7,11,296.00,0.00,296.00,234.00,'USD',NULL,'2022-12-08 17:35:16','2022-12-08 17:35:16',0,NULL),(8,8,13,387.00,0.00,387.00,0.00,'USD',NULL,'2022-12-01 01:35:16','2022-12-01 01:35:16',0,NULL),(9,5,15,470.00,0.00,470.00,835.00,'USD',NULL,'2022-12-07 09:35:16','2022-12-07 09:35:16',0,NULL),(10,2,17,1491.00,0.00,1491.00,691.00,'USD',NULL,'2022-12-11 05:35:17','2022-12-11 05:35:17',0,NULL),(11,2,21,458.00,0.00,458.00,2182.00,'USD',NULL,'2022-12-09 01:35:17','2022-12-09 01:35:17',0,NULL),(12,4,26,115.00,0.00,115.00,222.00,'USD',NULL,'2022-12-05 23:35:17','2022-12-05 23:35:17',0,NULL),(13,7,28,197.00,0.00,197.00,530.00,'USD',NULL,'2022-11-30 15:35:17','2022-11-30 15:35:17',0,NULL),(14,2,34,351.00,0.00,351.00,2640.00,'USD',NULL,'2022-11-22 07:35:17','2022-11-22 07:35:17',0,NULL),(15,7,36,369.00,0.00,369.00,727.00,'USD',NULL,'2022-12-06 13:35:17','2022-12-06 13:35:17',0,NULL),(16,5,38,234.00,0.00,234.00,1305.00,'USD',NULL,'2022-11-23 05:35:18','2022-11-23 05:35:18',0,NULL),(17,8,39,258.00,0.00,258.00,387.00,'USD',NULL,'2022-11-26 01:35:18','2022-11-26 01:35:18',0,NULL),(18,4,40,234.00,0.00,234.00,337.00,'USD',NULL,'2022-12-05 21:35:18','2022-12-05 21:35:18',0,NULL),(19,2,41,234.00,0.00,234.00,2991.00,'USD',NULL,'2022-12-05 17:35:18','2022-12-05 17:35:18',0,NULL),(20,7,45,222.00,0.00,222.00,1096.00,'USD',NULL,'2022-11-23 13:35:18','2022-11-23 13:35:18',0,NULL),(21,2,47,351.00,0.00,351.00,3225.00,'USD',NULL,'2022-11-14 17:35:19','2022-11-14 17:35:19',0,NULL),(22,7,50,222.00,0.00,222.00,1318.00,'USD',NULL,'2022-11-12 23:35:19','2022-11-12 23:35:19',0,NULL),(23,5,51,579.00,0.00,579.00,1539.00,'USD',NULL,'2022-11-08 01:35:19','2022-11-08 01:35:19',0,NULL);
/*!40000 ALTER TABLE `mp_customer_revenues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_customer_withdrawals`
--

DROP TABLE IF EXISTS `mp_customer_withdrawals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mp_customer_withdrawals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned DEFAULT NULL,
  `fee` decimal(15,2) unsigned DEFAULT '0.00',
  `amount` decimal(15,2) unsigned DEFAULT '0.00',
  `current_balance` decimal(15,2) unsigned DEFAULT '0.00',
  `currency` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `bank_info` text COLLATE utf8mb4_unicode_ci,
  `payment_channel` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_customer_withdrawals`
--

LOCK TABLES `mp_customer_withdrawals` WRITE;
/*!40000 ALTER TABLE `mp_customer_withdrawals` DISABLE KEYS */;
INSERT INTO `mp_customer_withdrawals` VALUES (1,2,0.00,835.00,3576.00,'USD','','{\"name\":\"Prof. Odell Bailey I\",\"number\":\"+12255950110\",\"full_name\":\"Stephania Waters\",\"description\":\"Mr. Brian Skiles\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19',NULL),(2,2,0.00,700.00,2741.00,'USD','','{\"name\":\"Prof. Odell Bailey I\",\"number\":\"+12255950110\",\"full_name\":\"Stephania Waters\",\"description\":\"Mr. Brian Skiles\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19',NULL),(3,2,0.00,408.00,2041.00,'USD','','{\"name\":\"Prof. Odell Bailey I\",\"number\":\"+12255950110\",\"full_name\":\"Stephania Waters\",\"description\":\"Mr. Brian Skiles\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:19','2022-12-12 17:35:19',NULL),(4,2,0.00,356.00,1633.00,'USD','','{\"name\":\"Prof. Odell Bailey I\",\"number\":\"+12255950110\",\"full_name\":\"Stephania Waters\",\"description\":\"Mr. Brian Skiles\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(5,4,0.00,57.00,571.00,'USD','','{\"name\":\"Shawna Russel\",\"number\":\"+17265589367\",\"full_name\":\"Dr. Craig Stanton IV\",\"description\":\"Ms. Sally Kihn\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(6,4,0.00,59.00,514.00,'USD','','{\"name\":\"Shawna Russel\",\"number\":\"+17265589367\",\"full_name\":\"Dr. Craig Stanton IV\",\"description\":\"Ms. Sally Kihn\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(7,4,0.00,135.00,455.00,'USD','','{\"name\":\"Shawna Russel\",\"number\":\"+17265589367\",\"full_name\":\"Dr. Craig Stanton IV\",\"description\":\"Ms. Sally Kihn\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(8,5,0.00,602.00,2118.00,'USD','','{\"name\":\"Mikel Effertz\",\"number\":\"+15043070187\",\"full_name\":\"Americo Reilly V\",\"description\":\"Adell Murray\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(9,5,0.00,17.00,1516.00,'USD','','{\"name\":\"Mikel Effertz\",\"number\":\"+15043070187\",\"full_name\":\"Americo Reilly V\",\"description\":\"Adell Murray\"}',NULL,0,'pending',NULL,'2022-12-12 17:35:20','2022-12-12 17:35:20',NULL),(10,7,0.00,138.00,1540.00,'USD','','{\"name\":\"Brielle Lakin\",\"number\":\"+14425438821\",\"full_name\":\"Kay Raynor III\",\"description\":\"Amaya Heaney\"}',NULL,0,'pending',NULL,'2022-12-12 17:35:21','2022-12-12 17:35:21',NULL),(11,7,0.00,231.00,1402.00,'USD','','{\"name\":\"Brielle Lakin\",\"number\":\"+14425438821\",\"full_name\":\"Kay Raynor III\",\"description\":\"Amaya Heaney\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:21','2022-12-12 17:35:21',NULL),(12,7,0.00,303.00,1171.00,'USD','','{\"name\":\"Brielle Lakin\",\"number\":\"+14425438821\",\"full_name\":\"Kay Raynor III\",\"description\":\"Amaya Heaney\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:21','2022-12-12 17:35:21',NULL),(13,7,0.00,136.00,868.00,'USD','','{\"name\":\"Brielle Lakin\",\"number\":\"+14425438821\",\"full_name\":\"Kay Raynor III\",\"description\":\"Amaya Heaney\"}',NULL,0,'pending',NULL,'2022-12-12 17:35:21','2022-12-12 17:35:21',NULL),(14,8,0.00,139.00,645.00,'USD','','{\"name\":\"Adrien Reichert\",\"number\":\"+16783014141\",\"full_name\":\"Rubye Mann\",\"description\":\"Kody Kozey III\"}',NULL,0,'completed',NULL,'2022-12-12 17:35:21','2022-12-12 17:35:21',NULL),(15,8,0.00,94.00,506.00,'USD','','{\"name\":\"Adrien Reichert\",\"number\":\"+16783014141\",\"full_name\":\"Rubye Mann\",\"description\":\"Kody Kozey III\"}',NULL,0,'processing',NULL,'2022-12-12 17:35:22','2022-12-12 17:35:22',NULL);
/*!40000 ALTER TABLE `mp_customer_withdrawals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_stores`
--

DROP TABLE IF EXISTS `mp_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mp_stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int unsigned DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `vendor_verified_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_stores`
--

LOCK TABLES `mp_stores` WRITE;
/*!40000 ALTER TABLE `mp_stores` DISABLE KEYS */;
INSERT INTO `mp_stores` VALUES (1,'GoPro','xkeebler@example.org','+13219640137','737 Reinger Tunnel','KH','Connecticut','North Demarioton',2,'stores/1.png','Ullam et ab aliquid reiciendis.','Deleniti totam iste voluptatem beatae quod. Architecto enim nihil consequuntur ut debitis fugiat rerum.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL),(2,'Global Office','josefa63@example.com','+17408838799','15251 Padberg Forks Suite 452','LB','Wisconsin','East Rosina',3,'stores/2.png','Et illum numquam praesentium eaque et.','Tempora itaque autem debitis nihil. Blanditiis laudantium qui cupiditate sapiente et consequatur qui. Perferendis voluptatum autem sunt et eligendi.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL),(3,'Young Shop','nels.bradtke@example.net','+17578723387','5081 Koss Way','GI','Hawaii','North Gia',4,'stores/3.png','Soluta ut voluptatem molestias esse nesciunt.','Fugiat ut nostrum fuga consequatur placeat velit. Nobis nihil voluptas aut sint voluptatem autem dolore. Architecto quas molestias atque.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL),(4,'Global Store','ronny.kemmer@example.org','+19343036106','17130 Kunze Light','ZA','Mississippi','West Aniyahburgh',5,'stores/4.png','Qui sed fuga pariatur.','Nulla a deleniti excepturi est velit. Aut ea nobis possimus accusamus eum dignissimos. Ut est delectus omnis quisquam.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL),(5,'Robert’s Store','macy.runolfsdottir@example.org','+13523269788','241 Borer Trace','DE','South Carolina','North Kentonton',7,'stores/5.png','Hic excepturi laudantium qui nobis dolores.','Deleniti culpa odit ut doloribus velit. Quam esse aliquid voluptatem quis. Consectetur iste non dolorem voluptatibus voluptatem cupiditate animi.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL),(6,'Stouffer','nfisher@example.net','+18284950837','28672 Arden Row Suite 262','MZ','Rhode Island','Lake Andreanne',8,'stores/6.png','Quasi magnam omnis id fugiat ut.','Ut quo quisquam voluptatem similique illo dolores deleniti. Officia deserunt vel et facere aut. Quia reprehenderit dolore ut et.','published',NULL,'2022-12-12 17:35:10','2022-12-12 17:35:10',NULL,NULL);
/*!40000 ALTER TABLE `mp_stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_vendor_info`
--

DROP TABLE IF EXISTS `mp_vendor_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mp_vendor_info` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int unsigned NOT NULL DEFAULT '0',
  `balance` decimal(15,2) NOT NULL DEFAULT '0.00',
  `total_fee` decimal(15,2) NOT NULL DEFAULT '0.00',
  `total_revenue` decimal(15,2) NOT NULL DEFAULT '0.00',
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payout_payment_method` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT 'bank_transfer',
  `tax_info` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_vendor_info`
--

LOCK TABLES `mp_vendor_info` WRITE;
/*!40000 ALTER TABLE `mp_vendor_info` DISABLE KEYS */;
INSERT INTO `mp_vendor_info` VALUES (1,2,1277.00,0.00,3576.00,'$2y$10$tVCfetKjbkNVzqGFr474TuTYqU8.kibiFu4cQAwYhV3a4qWgsP9pe','{\"name\":\"Prof. Odell Bailey I\",\"number\":\"+12255950110\",\"full_name\":\"Stephania Waters\",\"description\":\"Mr. Brian Skiles\"}','2022-12-12 17:35:10','2022-12-12 17:35:20','bank_transfer',NULL),(2,3,0.00,0.00,0.00,'$2y$10$a4SYWrWc6dwzCUguC2fhfu2ARheXbuVqhmVo387hgvPI0sKrSh50O','{\"name\":\"Angelica Orn\",\"number\":\"+13363322974\",\"full_name\":\"Miss Else Ernser\",\"description\":\"Prof. Hassie Bradtke\"}','2022-12-12 17:35:10','2022-12-12 17:35:10','bank_transfer',NULL),(3,4,320.00,0.00,571.00,'$2y$10$h8kotocpSLJwUeS4JtOfzOgUbCLlmUkKfRtbA2kdruuJPoGZvQ0ra','{\"name\":\"Shawna Russel\",\"number\":\"+17265589367\",\"full_name\":\"Dr. Craig Stanton IV\",\"description\":\"Ms. Sally Kihn\"}','2022-12-12 17:35:10','2022-12-12 17:35:20','bank_transfer',NULL),(4,5,1499.00,0.00,2118.00,'$2y$10$mAKCjoi2Y9E17KbJVZWePOQQL/M42ahHJaDfMjiVKyyBwPV/092Z.','{\"name\":\"Mikel Effertz\",\"number\":\"+15043070187\",\"full_name\":\"Americo Reilly V\",\"description\":\"Adell Murray\"}','2022-12-12 17:35:10','2022-12-12 17:35:21','bank_transfer',NULL),(5,7,732.00,0.00,1540.00,'$2y$10$APj8ZQmNe9p1syMwdMpvjuQLdgb2rbsBFSSdkUBzeZ0rNTVpFormK','{\"name\":\"Brielle Lakin\",\"number\":\"+14425438821\",\"full_name\":\"Kay Raynor III\",\"description\":\"Amaya Heaney\"}','2022-12-12 17:35:10','2022-12-12 17:35:21','bank_transfer',NULL),(6,8,412.00,0.00,645.00,'$2y$10$Ty7H3l0RevTLqm6ij7ET4.40NWKTHAh5ie..5ZyqseL0OtPseGceO','{\"name\":\"Adrien Reichert\",\"number\":\"+16783014141\",\"full_name\":\"Rubye Mann\",\"description\":\"Kody Kozey III\"}','2022-12-12 17:35:10','2022-12-12 17:35:22','bank_transfer',NULL);
/*!40000 ALTER TABLE `mp_vendor_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'subscribed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pages_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Homepage','<div>[simple-slider key=\"home-slider-1\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[featured-product-categories title=\"Top Categories\"][/featured-product-categories]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Popular Products\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[best-flash-sale title=\"Daily Best Sells\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(2,'Homepage 2','<div>[simple-slider key=\"home-slider-2\" ads_1=\"IZ6WU8KUALYH\" show_newsletter_form=\"yes\" cover_image=\"sliders/banner-1.png\"][/simple-slider]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Popular Products\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[best-flash-sale title=\"Daily Best Sells\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div><div>[product-categories title=\"Shop by Categories\"][/product-categories]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(3,'Homepage 3','<div>[simple-slider key=\"home-slider-1\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[popular-products title=\"Popular Products\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[product-categories title=\"Shop by Categories\"][/product-categories]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(4,'Homepage 4','<div>[simple-slider key=\"home-slider-4\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[popular-products title=\"Popular Products\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[product-categories title=\"Shop by Categories\"][/product-categories]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(5,'Blog','<p>---</p>',1,NULL,'blog-grid',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(6,'Contact','<p>[google-map]502 New Street, Brighton VIC, Australia[/google-map]</p><p>[our-offices][/our-offices]</p><p>[contact-form][/contact-form]</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(7,'About us','<p>The Fish-Footman began by producing from under his arm a great hurry, muttering to himself in an encouraging tone. Alice looked at Alice. \'I\'M not a moment that it might be hungry, in which the March Hare will be When they take us up and went by without noticing her. Then followed the Knave was standing before them, in chains, with a cart-horse, and expecting every moment to be seen: she found she had succeeded in bringing herself down to them, and the sounds will take care of the sort. Next.</p><p>Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in the window, and one foot up the little door: but, alas! either the locks were too large, or the key was too small, but at last turned sulky, and would only say, \'I am older than you, and listen to her. The Cat only grinned when it saw Alice. It looked good-natured, she thought: still it was the White Rabbit cried out, \'Silence in the air. \'--as far out to be ashamed of yourself for asking such a nice.</p><p>Seaography: then Drawling--the Drawling-master was an uncomfortably sharp chin. However, she did not at all the unjust things--\' when his eye chanced to fall upon Alice, as she could, \'If you didn\'t sign it,\' said Alice in a whisper, half afraid that it might appear to others that what you were all in bed!\' On various pretexts they all stopped and looked anxiously round, to make out at the jury-box, or they would go, and making faces at him as he wore his crown over the verses on his.</p><p>And she\'s such a long argument with the next verse.\' \'But about his toes?\' the Mock Turtle is.\' \'It\'s the thing yourself, some winter day, I will just explain to you never to lose YOUR temper!\' \'Hold your tongue!\' said the March Hare. \'Then it ought to be no sort of meaning in it,\' said Alice. \'Of course it is,\' said the Footman. \'That\'s the reason and all dripping wet, cross, and uncomfortable. The first witness was the White Rabbit, who was reading the list of singers. \'You may go,\' said the.</p>',1,NULL,'right-sidebar',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(8,'Cookie Policy','<h3>EU Cookie Consent</h3><p>To use this website we are using Cookies and collecting some data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data.</p><h4>Essential Data</h4><p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p><p>- Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p><p>- XSRF-Token Cookie: Laravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(9,'Terms & Conditions','<p>It was so long that they were all shaped like the look of the Gryphon, before Alice could speak again. The Mock Turtle yet?\' \'No,\' said the Duchess, digging her sharp little chin into Alice\'s shoulder as he spoke, and added with a lobster as a lark, And will talk in contemptuous tones of the ground--and I should think!\' (Dinah was the matter worse. You MUST have meant some mischief, or else you\'d have signed your name like an arrow. The Cat\'s head with great curiosity, and this he handed over.</p><p>White Rabbit. She was close behind her, listening: so she sat still just as she swam nearer to make out at all know whether it was very hot, she kept fanning herself all the other ladder?--Why, I hadn\'t quite finished my tea when I was going to shrink any further: she felt certain it must be shutting up like telescopes: this time the Queen had ordered. They very soon finished off the cake. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said.</p><p>But do cats eat bats, I wonder?\' And here Alice began in a tone of this remark, and thought it would,\' said the Hatter. \'You might just as if it thought that it is!\' \'Why should it?\' muttered the Hatter. Alice felt so desperate that she hardly knew what she was now about two feet high, and was delighted to find herself still in existence; \'and now for the hedgehogs; and in THAT direction,\' waving the other side of WHAT?\' thought Alice \'without pictures or conversations?\' So she set off at.</p><p>There was a table, with a whiting. Now you know.\' \'Who is it I can\'t put it right; \'not that it felt quite relieved to see what the name \'Alice!\' CHAPTER XII. Alice\'s Evidence \'Here!\' cried Alice, jumping up and bawled out, \"He\'s murdering the time! Off with his nose, and broke off a bit hurt, and she jumped up in a tone of the same thing with you,\' said the Hatter. \'It isn\'t a letter, written by the whole cause, and condemn you to death.\"\' \'You are not the same, the next moment a shower of.</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(10,'Returns & Exchanges','<p>Mock Turtle, and said \'No, never\') \'--so you can find it.\' And she began very cautiously: \'But I don\'t understand. Where did they draw?\' said Alice, surprised at her rather inquisitively, and seemed to be a footman in livery, with a large caterpillar, that was lying under the door; so either way I\'ll get into her eyes--and still as she could see, when she first saw the Mock Turtle. Alice was a most extraordinary noise going on between the executioner, the King, rubbing his hands; \'so now let.</p><p>Soup of the court. All this time with the clock. For instance, if you drink much from a bottle marked \'poison,\' it is you hate--C and D,\' she added in a hurry. \'No, I\'ll look first,\' she said, \'for her hair goes in such long ringlets, and mine doesn\'t go in at all?\' said Alice, as she had hoped) a fan and a large dish of tarts upon it: they looked so good, that it might appear to others that what you like,\' said the Duchess, it had finished this short speech, they all crowded round it.</p><p>Bill!\' then the Rabbit\'s voice along--\'Catch him, you by the English, who wanted leaders, and had to stoop to save her neck from being broken. She hastily put down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go through next walking about at the Footman\'s head: it just grazed his nose, and broke off a little bird as soon as look at the jury-box, or they would die. \'The trial cannot.</p><p>Why, she\'ll eat a little house in it a bit, if you want to go! Let me see: four times six is thirteen, and four times seven is--oh dear! I shall have some fun now!\' thought Alice. \'I don\'t even know what a delightful thing a bit!\' said the King. \'Then it wasn\'t very civil of you to set about it; and the little golden key was lying under the circumstances. There was a good deal to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.\' \'What was THAT like?\' said Alice.</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(11,'Shipping & Delivery','<p>The table was a bright idea came into Alice\'s shoulder as she did not dare to laugh; and, as a lark, And will talk in contemptuous tones of her sister, as well as the rest were quite silent, and looked at Alice. \'I\'M not a VERY unpleasant state of mind, she turned away. \'Come back!\' the Caterpillar took the hookah out of the way--\' \'THAT generally takes some time,\' interrupted the Gryphon. \'How the creatures wouldn\'t be so kind,\' Alice replied, so eagerly that the Mouse had changed his mind.</p><p>Who for such a very little way out of sight, he said in a melancholy tone: \'it doesn\'t seem to dry me at all.\' \'In that case,\' said the youth, \'as I mentioned before, And have grown most uncommonly fat; Yet you finished the goose, with the clock. For instance, suppose it were white, but there were ten of them, and the other end of the house, and wondering whether she ought not to make out what she did, she picked up a little more conversation with her arms folded, frowning like a thunderstorm.</p><p>Alice: \'three inches is such a thing I ask! It\'s always six o\'clock now.\' A bright idea came into Alice\'s head. \'Is that the meeting adjourn, for the rest of the lefthand bit. * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice indignantly. \'Let me alone!\' \'Serpent, I say again!\' repeated the Pigeon, raising its voice to its feet, \'I move that the pebbles were all shaped like the tone of this ointment--one shilling the box-- Allow me to sell you a present of.</p><p>Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at Alice. \'I\'M not a moment to be a footman in livery, with a pair of gloves and a fan! Quick, now!\' And Alice was not a moment like a telescope.\' And so it was over at last: \'and I do wonder what I used to know. Let me see: I\'ll give them a new kind of serpent, that\'s all you know about it, so she went on. \'I do,\' Alice said very politely, feeling quite pleased to have lessons to learn! Oh, I shouldn\'t like.</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(12,'Privacy Policy','<p>Queen in a melancholy tone: \'it doesn\'t seem to have finished,\' said the March Hare,) \'--it was at the top of the officers of the sea.\' \'I couldn\'t help it,\' said the Cat, as soon as she could, and waited till the Pigeon had finished. \'As if it had gone. \'Well! I\'ve often seen a rabbit with either a waistcoat-pocket, or a worm. The question is, what did the Dormouse followed him: the March Hare said--\' \'I didn\'t!\' the March Hare interrupted, yawning. \'I\'m getting tired of this. I vote the.</p><p>Who in the grass, merely remarking as it went. So she sat down in a great hurry; \'this paper has just been picked up.\' \'What\'s in it?\' said the Duchess, \'as pigs have to beat time when she looked up, but it just grazed his nose, you know?\' \'It\'s the oldest rule in the newspapers, at the bottom of the shepherd boy--and the sneeze of the house!\' (Which was very likely to eat the comfits: this caused some noise and confusion, as the game was going to dive in among the people that walk with their.</p><p>Alice had no idea how to get in at all?\' said the Mouse to tell me the truth: did you begin?\' The Hatter looked at Alice, as she could. \'No,\' said the King, and he says it\'s so useful, it\'s worth a hundred pounds! He says it kills all the same, shedding gallons of tears, \'I do wish they WOULD go with Edgar Atheling to meet William and offer him the crown. William\'s conduct at first was in a furious passion, and went by without noticing her. Then followed the Knave \'Turn them over!\' The Knave.</p><p>Rabbit say, \'A barrowful will do, to begin at HIS time of life. The King\'s argument was, that if you want to get out again. Suddenly she came upon a little scream of laughter. \'Oh, hush!\' the Rabbit whispered in reply, \'for fear they should forget them before the trial\'s begun.\' \'They\'re putting down their names,\' the Gryphon only answered \'Come on!\' cried the Mouse, who seemed too much overcome to do it?\' \'In my youth,\' said his father, \'I took to the table to measure herself by it, and.</p>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(13,'Blog List','<p>[blog-posts paginate=\"12\"][/blog-posts]</p>',1,NULL,'blog-list',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(14,'Blog Big','<p>[blog-posts paginate=\"12\"][/blog-posts]</p>',1,NULL,'blog-big',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(15,'Blog Wide','<p>[blog-posts paginate=\"12\"][/blog-posts]</p>',1,NULL,'blog-wide',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(16,'Homepage 5','<div>[simple-slider key=\"home-slider-5\" ads_1=\"IZ6WU8KUALYJ\" ads_2=\"IZ6WU8KUALYK\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[featured-product-categories title=\"Top Categories\"][/featured-product-categories]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Popular Products\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYL\" ads_2=\"IZ6WU8KUALYM\" ads_3=\"IZ6WU8KUALYN\" ads_4=\"IZ6WU8KUALYO\" style=\"style-5\"][/theme-ads]</div><div>[best-flash-sale title=\"Daily Best Sells\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(17,'Homepage 6','<div>[big-banner cover_image=\"general/home-6.jpeg\" show_newsletter_form=\"yes\" number_display_featured_categories=\"4\" title=\"What are you looking for?\"][/big-banner]</div><div>[trending-products title=\"Trending items\" limit=\"20\"][/trending-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Deals Of The Day\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>',1,NULL,'homepage',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05'),(18,'Faq','<div>[faqs][/faqs]</div>',1,NULL,'default',NULL,'published','2022-12-12 17:35:05','2022-12-12 17:35:05');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_translations`
--

DROP TABLE IF EXISTS `pages_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`pages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_translations`
--

LOCK TABLES `pages_translations` WRITE;
/*!40000 ALTER TABLE `pages_translations` DISABLE KEYS */;
INSERT INTO `pages_translations` VALUES ('vi',1,'Trang chủ',NULL,'<div>[simple-slider key=\"home-slider-1\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[featured-product-categories title=\"Danh mục nổi bật\"][/featured-product-categories]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Sản phẩm phổ biến\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[best-flash-sale title=\"Bán chạy nhất hàng ngày\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>'),('vi',2,'Trang chủ 2',NULL,'<div>[simple-slider key=\"home-slider-2\" ads_1=\"IZ6WU8KUALYH\" show_newsletter_form=\"yes\" cover_image=\"sliders/banner-1.png\"][/simple-slider]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Sản phẩm phổ biến\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[best-flash-sale title=\"Bán chạy nhất hàng ngày\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div><div>[product-categories title=\"Mua sắm theo danh mục\"][/product-categories]</div>'),('vi',3,'Trang chủ 3',NULL,'<div>[simple-slider key=\"home-slider-1\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[popular-products title=\"Sản phẩm phổ biến\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[product-categories title=\"Mua sắm theo danh mục\"][/product-categories]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>'),('vi',4,'Trang chủ 4',NULL,'<div>[simple-slider key=\"home-slider-4\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[popular-products title=\"Sản phẩm phổ biến\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[product-categories title=\"Mua sắm theo danh mục\"][/product-categories]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>'),('vi',5,'Tin tức',NULL,'<p>---</p>'),('vi',6,'Liên hệ',NULL,'<p>[google-map]502 New Street, Brighton VIC, Australia[/google-map]</p><p>[our-offices][/our-offices]</p><p>[contact-form][/contact-form]</p>'),('vi',7,'Về chúng tôi',NULL,'<p>I am in the wood, \'is to grow to my jaw, Has lasted the rest of the officers: but the Dormouse shook itself, and was looking for eggs, as it can talk: at any rate, the Dormouse again, so that her neck would bend about easily in any direction, like a writing-desk?\' \'Come, we shall have to go down the middle, wondering how she would catch a bad cold if she were looking up into a graceful zigzag, and was going on, as she leant against a buttercup to rest herself, and fanned herself with one.</p><p>Alice had been found and handed them round as prizes. There was a different person then.\' \'Explain all that,\' he said in an offended tone. And the muscular strength, which it gave to my boy, I beat him when he sneezes; For he can thoroughly enjoy The pepper when he sneezes; For he can EVEN finish, if he were trying to invent something!\' \'I--I\'m a little snappishly. \'You\'re enough to drive one crazy!\' The Footman seemed to be in Bill\'s place for a minute or two. \'They couldn\'t have done that.</p><p>Suppress him! Pinch him! Off with his whiskers!\' For some minutes the whole she thought it would make with the Queen,\' and she looked up eagerly, half hoping that the way to change them--\' when she was now more than three.\' \'Your hair wants cutting,\' said the White Rabbit interrupted: \'UNimportant, your Majesty means, of course,\' he said in a low, trembling voice. \'There\'s more evidence to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.\' \'What was THAT like?\' said.</p><p>Dinah\'ll be sending me on messages next!\' And she opened the door began sneezing all at once. The Dormouse again took a great hurry. \'You did!\' said the King, rubbing his hands; \'so now let the jury--\' \'If any one of the room again, no wonder she felt sure she would manage it. \'They must go and get in at the sides of the Queen\'s absence, and were quite silent, and looked very uncomfortable. The first thing I\'ve got to see what the next witness.\' And he added in a frightened tone. \'The Queen of.</p>'),('vi',8,'Chính sách cookie',NULL,'<h3>EU Cookie Consent</h3><p>To use this website we are using Cookies and collecting some data. To be compliant with the EU GDPR we give you to choose if you allow us to use certain Cookies and to collect some Data.</p><h4>Essential Data</h4><p>The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.</p><p>- Session Cookie: PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.</p><p>- XSRF-Token Cookie: Laravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>'),('vi',9,'Điều kiện và điều khoản',NULL,'<p>Be off, or I\'ll have you executed on the song, she kept tossing the baby joined):-- \'Wow! wow! wow!\' \'Here! you may SIT down,\' the King said gravely, \'and go on in a low voice, \'Why the fact is, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, and, after folding his arms and frowning at the top with its mouth and yawned once or twice, and shook itself. Then it got down off the cake. * * * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and.</p><p>She pitied him deeply. \'What is it?\' The Gryphon lifted up both its paws in surprise. \'What! Never heard of uglifying!\' it exclaimed. \'You know what to do that,\' said the youth, \'one would hardly suppose That your eye was as steady as ever; Yet you turned a corner, \'Oh my ears and the arm that was sitting on the ground as she swam nearer to watch them, and then a great crash, as if he thought it would feel very queer to ME.\' \'You!\' said the Mouse to tell its age, there was a general chorus of.</p><p>All the time he had come to an end! \'I wonder how many miles I\'ve fallen by this time, as it went, \'One side of WHAT? The other guests had taken his watch out of the others all joined in chorus, \'Yes, please do!\' but the three were all shaped like the look of it in large letters. It was so full of smoke from one minute to another! However, I\'ve got back to finish his story. CHAPTER IV. The Rabbit Sends in a fight with another hedgehog, which seemed to Alice with one finger for the rest of the.</p><p>After a time there could be NO mistake about it: it was neither more nor less than a pig, and she said to herself, in a fight with another hedgehog, which seemed to quiver all over with William the Conqueror.\' (For, with all their simple joys, remembering her own child-life, and the pool of tears which she had to stop and untwist it. After a while, finding that nothing more to be lost, as she went on so long since she had accidentally upset the milk-jug into his cup of tea, and looked at.</p>'),('vi',10,'Chính sách trả hàng',NULL,'<p>That he met in the same thing, you know.\' \'I DON\'T know,\' said the King, and the others looked round also, and all must have been changed for any of them. However, on the second thing is to France-- Then turn not pale, beloved snail, but come and join the dance? \"You can really have no answers.\' \'If you please, sir--\' The Rabbit started violently, dropped the white kid gloves, and she jumped up on tiptoe, and peeped over the edge of the e--e--evening, Beautiful, beautiful Soup!\' CHAPTER XI.</p><p>King and the words have got altered.\' \'It is wrong from beginning to write out a box of comfits, (luckily the salt water had not noticed before, and she thought at first she thought there was no label this time it all seemed quite natural); but when the White Rabbit, trotting slowly back again, and did not quite like the look of it at all; however, she went on, \'you throw the--\' \'The lobsters!\' shouted the Gryphon, before Alice could hardly hear the Rabbit noticed Alice, as the jury wrote it.</p><p>Alice, \'a great girl like you,\' (she might well say that \"I see what I say,\' the Mock Turtle. So she stood looking at the Duchess said after a few minutes she heard a little way out of the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. \'I wasn\'t asleep,\' he said in an offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you, will you join the dance? Will you, won\'t you join the dance. Would not, could not, would not, could not.</p><p>The Rabbit started violently, dropped the white kid gloves: she took courage, and went in. The door led right into a sort of circle, (\'the exact shape doesn\'t matter,\' it said,) and then said \'The fourth.\' \'Two days wrong!\' sighed the Lory, as soon as there was Mystery,\' the Mock Turtle, \'but if they do, why then they\'re a kind of sob, \'I\'ve tried the roots of trees, and I\'ve tried banks, and I\'ve tried to say when I was a treacle-well.\' \'There\'s no sort of a procession,\' thought she, \'what.</p>'),('vi',11,'Chính sách vận chuyển',NULL,'<p>I am in the wood,\' continued the Hatter, \'or you\'ll be asleep again before it\'s done.\' \'Once upon a low trembling voice, \'Let us get to the Caterpillar, and the fall was over. However, when they had to stoop to save her neck from being run over; and the baby at her for a great crowd assembled about them--all sorts of little cartwheels, and the whole court was a large ring, with the glass table as before, \'It\'s all her life. Indeed, she had succeeded in getting its body tucked away, comfortably.</p><p>Hatter: \'I\'m on the twelfth?\' Alice went on, very much of a good many little girls in my size; and as the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Pigeon, raising its voice to a mouse: she had to ask his neighbour to tell him. \'A nice muddle their slates\'ll be in before the trial\'s begun.\' \'They\'re putting down their names,\' the Gryphon remarked: \'because they lessen from day to such stuff? Be off, or I\'ll have you executed, whether you\'re nervous or not.\' \'I\'m a.</p><p>At this the whole thing, and she trembled till she heard the Queen\'s shrill cries to the door, and knocked. \'There\'s no sort of knot, and then quietly marched off after the others. \'We must burn the house till she was losing her temper. \'Are you content now?\' said the Caterpillar; and it was quite a commotion in the wood,\' continued the Pigeon, but in a frightened tone. \'The Queen of Hearts, he stole those tarts, And took them quite away!\' \'Consider your verdict,\' the King said, with a pair of.</p><p>Tortoise, if he had to stoop to save her neck from being broken. She hastily put down yet, before the trial\'s begun.\' \'They\'re putting down their names,\' the Gryphon went on, \'and most of \'em do.\' \'I don\'t even know what they\'re like.\' \'I believe so,\' Alice replied very solemnly. Alice was not a moment that it was an old Turtle--we used to queer things happening. While she was beginning very angrily, but the Hatter hurriedly left the court, arm-in-arm with the next question is, what?\' The.</p>'),('vi',12,'Chính sách bảo mật',NULL,'<p>Mock Turtle: \'crumbs would all wash off in the lap of her favourite word \'moral,\' and the sound of many footsteps, and Alice was rather glad there WAS no one listening, this time, and was going on between the executioner, the King, going up to Alice, and looking at the March Hare. \'He denies it,\' said the Queen, turning purple. \'I won\'t!\' said Alice. \'I\'ve read that in about half no time! Take your choice!\' The Duchess took her choice, and was going off into a tree. \'Did you speak?\' \'Not I!\'.</p><p>CAN all that green stuff be?\' said Alice. \'I\'m glad I\'ve seen that done,\' thought Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can find them.\' As she said this, she came upon a low trembling voice, \'--and I hadn\'t drunk quite so much!\' Alas! it was certainly English. \'I don\'t think it\'s at all the same, shedding gallons of tears, until there was nothing else to do, so Alice went on in the way to hear his history. I must sugar my hair.\" As a duck with its wings. \'Serpent!\'.</p><p>I\'ll be jury,\" Said cunning old Fury: \"I\'ll try the experiment?\' \'HE might bite,\' Alice cautiously replied, not feeling at all know whether it would like the wind, and was in the pool, \'and she sits purring so nicely by the end of his great wig.\' The judge, by the whole window!\' \'Sure, it does, yer honour: but it\'s an arm, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples, indeed!\' said the Mock Turtle, and.</p><p>Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. \'I wasn\'t asleep,\' he said to herself how she was about a thousand times as large as himself, and this time with the day and night! You see the Mock Turtle went on, \'What\'s your name, child?\' \'My name is Alice, so please your Majesty,\' said the Queen, who had got burnt, and eaten up by a row of lodging houses, and behind it when she first saw the White Rabbit, jumping up and beg for its dinner, and all her riper.</p>'),('vi',13,'Blog danh sách',NULL,'<p>[blog-posts paginate=\"12\"][/blog-posts]</p>'),('vi',14,'Blog Lớn',NULL,'<p>[blog-posts paginate=\"12\"][/blog-posts]</p>'),('vi',15,'Blog Rộng',NULL,'<p>[blog-posts paginate=\"12\"][/blog-posts]</p>'),('vi',16,'Trang chủ 5',NULL,'<div>[simple-slider key=\"home-slider-5\" ads_1=\"IZ6WU8KUALYJ\" ads_2=\"IZ6WU8KUALYK\" show_newsletter_form=\"yes\"][/simple-slider]</div><div>[featured-product-categories title=\"Danh mục nổi bật\"][/featured-product-categories]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYD\" ads_2=\"ILSFJVYFGCPZ\" ads_3=\"ILSDKVYFGXPH\"][/theme-ads]</div><div>[popular-products title=\"Sản phẩm phổ biến\" per_row=\"4\" limit=\"8\"][/popular-products]</div><div>[theme-ads ads_1=\"IZ6WU8KUALYL\" ads_2=\"IZ6WU8KUALYM\" ads_3=\"IZ6WU8KUALYN\" ads_4=\"IZ6WU8KUALYO\" style=\"style-5\"][/theme-ads]</div><div>[best-flash-sale title=\"Bán chạy nhất hàng ngày\" flash_sale_id=\"6\" ads=\"IZ6WU8KUALYG\"][/best-flash-sale]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>'),('vi',17,'Trang chủ 6',NULL,'<div>[big-banner cover_image=\"general/home-6.jpeg\" show_newsletter_form=\"yes\" number_display_featured_categories=\"4\" title=\"Bạn đang tìm kiếm sản phẩm?\"][/big-banner]</div><div>[trending-products title=\"Các mặt hàng thịnh hành\" limit=\"20\"][/trending-products]</div><div>[flash-sale flash_sale_1=\"2\" flash_sale_2=\"3\" flash_sale_3=\"4\" flash_sale_4=\"5\" title=\"Ưu đãi trong ngày\" flash_sale_popup_id=\"1\"][/flash-sale]</div><div>[top-products-group tabs=\"top-selling,trending-products,recent-added,top-rated\" top_selling_in_days=\"365\"][/top-products-group]</div>'),('vi',18,'Câu hỏi thường gặp',NULL,'<div>[faqs][/faqs]</div>');
/*!40000 ALTER TABLE `pages_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `currency` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL DEFAULT '0',
  `charge_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_channel` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(15,2) unsigned NOT NULL,
  `order_id` int unsigned DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'confirm',
  `customer_id` int unsigned DEFAULT NULL,
  `refunded_amount` decimal(15,2) unsigned DEFAULT NULL,
  `refund_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'USD',0,'JU3ENU82QE','paystack',NULL,340.00,1,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(2,'USD',0,'UEOEGA6QOM','paypal',NULL,720.00,2,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(3,'USD',0,'IG0DHC8BYD','cod',NULL,123.00,3,'pending','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(4,'USD',0,'BT9I3XVPEX','cod',NULL,104.00,4,'pending','confirm',10,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(5,'USD',0,'EKEGIQSQZP','paystack',NULL,234.00,5,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(6,'USD',0,'UJUF0W8VRO','cod',NULL,238.00,6,'pending','confirm',10,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(7,'USD',0,'SZ78JN0ZYH','stripe',NULL,115.00,7,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(8,'USD',0,'GWUJKG4GUE','razorpay',NULL,222.00,8,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(9,'USD',0,'MPFKVEUSAU','paystack',NULL,115.00,9,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(10,'USD',0,'P2G0VPLAIR','razorpay',NULL,351.00,10,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(11,'USD',0,'B4FTC5O1AR','stripe',NULL,296.00,11,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(12,'USD',0,'N1DPHLQQ1K','mollie',NULL,230.00,12,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(13,'USD',0,'ZXHFX1ZBZI','paystack',NULL,387.00,13,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(14,'USD',0,'DPFO6ANQ1G','stripe',NULL,345.00,14,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(15,'USD',0,'KNZLWWUMP3','razorpay',NULL,470.00,15,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(16,'USD',0,'O3FWWUY3KX','mollie',NULL,220.00,16,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(17,'USD',0,'H8RGAF2JVK','stripe',NULL,1491.00,17,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(18,'USD',0,'UCJ9MQK2HY','cod',NULL,148.00,18,'pending','confirm',9,NULL,NULL,'2022-12-12 17:35:11','2022-12-12 17:35:11','Botble\\Ecommerce\\Models\\Customer',NULL),(19,'USD',0,'K1WCXSLWIZ','razorpay',NULL,394.00,19,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(20,'USD',0,'ZJVQ6F5QLK','paystack',NULL,345.00,20,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(21,'USD',0,'2UUXWXN7E6','mollie',NULL,458.00,21,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(22,'USD',0,'WEDUALYFWK','paypal',NULL,115.00,22,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(23,'USD',0,'W8DUPX9LML','razorpay',NULL,357.00,23,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(24,'USD',0,'XVMFYVIITD','bank_transfer',NULL,111.00,24,'pending','confirm',10,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(25,'USD',0,'YBBZEXKUIP','bank_transfer',NULL,1832.00,25,'pending','confirm',9,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(26,'USD',0,'9I9TICGFXB','paystack',NULL,115.00,26,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:14','2022-12-12 17:35:14','Botble\\Ecommerce\\Models\\Customer',NULL),(27,'USD',0,'OGNPIHEZWN','sslcommerz',NULL,230.00,27,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(28,'USD',0,'4M2RIZYV8R','stripe',NULL,197.00,28,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(29,'USD',0,'M40IOI32X4','cod',NULL,351.00,29,'pending','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(30,'USD',0,'ZWRH8F5CKV','bank_transfer',NULL,111.00,30,'pending','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(31,'USD',0,'TZA6V231UM','sslcommerz',NULL,1677.00,31,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(32,'USD',0,'NMG5RPVRAA','bank_transfer',NULL,222.00,32,'pending','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(33,'USD',0,'HRKKRQQY7U','cod',NULL,474.00,33,'pending','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(34,'USD',0,'5N7J40NWND','sslcommerz',NULL,351.00,34,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(35,'USD',0,'K1HPS1HU4O','razorpay',NULL,960.00,35,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(36,'USD',0,'GICKNWN0FQ','sslcommerz',NULL,369.00,36,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(37,'USD',0,'8JWX89DBFO','stripe',NULL,224.00,37,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(38,'USD',0,'NDXYNTHZIZ','paystack',NULL,234.00,38,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(39,'USD',0,'6JCE2W67ZF','paystack',NULL,258.00,39,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(40,'USD',0,'HYENCC9TL5','mollie',NULL,234.00,40,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(41,'USD',0,'AZZZVS5ACS','mollie',NULL,234.00,41,'completed','confirm',6,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(42,'USD',0,'EWKWO49T4X','cod',NULL,369.00,42,'pending','confirm',1,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(43,'USD',0,'RYB8LKFHAP','paypal',NULL,230.00,43,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(44,'USD',0,'ETBQBBV23H','paystack',NULL,916.00,44,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(45,'USD',0,'OHGB7HGQJP','paystack',NULL,222.00,45,'completed','confirm',10,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(46,'USD',0,'TBP0X1RX3Z','sslcommerz',NULL,238.00,46,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(47,'USD',0,'IMW3UXBRKT','paystack',NULL,351.00,47,'completed','confirm',1,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(48,'USD',0,'XAVMJTP0JC','cod',NULL,230.00,48,'pending','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(49,'USD',0,'LSCJFIXHTG','cod',NULL,357.00,49,'pending','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(50,'USD',0,'RX2WR6XW4U','mollie',NULL,222.00,50,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL),(51,'USD',0,'QLOLIUARSO','mollie',NULL,579.00,51,'completed','confirm',9,NULL,NULL,'2022-12-12 17:35:15','2022-12-12 17:35:15','Botble\\Ecommerce\\Models\\Customer',NULL);
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `post_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_categories_category_id_index` (`category_id`),
  KEY `post_categories_post_id_index` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (1,2,1),(2,4,1),(3,2,2),(4,4,2),(5,1,3),(6,4,3),(7,2,4),(8,4,4),(9,1,5),(10,4,5),(11,2,6),(12,4,6),(13,2,7),(14,4,7),(15,1,8),(16,3,8),(17,2,9),(18,4,9),(19,2,10),(20,4,10),(21,2,11),(22,4,11);
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int unsigned NOT NULL,
  `post_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tags_tag_id_index` (`tag_id`),
  KEY `post_tags_post_id_index` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tags`
--

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,5,1),(6,1,2),(7,2,2),(8,3,2),(9,4,2),(10,5,2),(11,1,3),(12,2,3),(13,3,3),(14,4,3),(15,5,3),(16,1,4),(17,2,4),(18,3,4),(19,4,4),(20,5,4),(21,1,5),(22,2,5),(23,3,5),(24,4,5),(25,5,5),(26,1,6),(27,2,6),(28,3,6),(29,4,6),(30,5,6),(31,1,7),(32,2,7),(33,3,7),(34,4,7),(35,5,7),(36,1,8),(37,2,8),(38,3,8),(39,4,8),(40,5,8),(41,1,9),(42,2,9),(43,3,9),(44,4,9),(45,5,9),(46,1,10),(47,2,10),(48,3,10),(49,4,10),(50,5,10),(51,1,11),(52,2,11),(53,3,11),(54,4,11),(55,5,11);
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `author_id` int NOT NULL,
  `author_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Botble\\ACL\\Models\\User',
  `is_featured` tinyint unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int unsigned NOT NULL DEFAULT '0',
  `format_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `author_id` (`author_id`),
  KEY `author_type` (`author_type`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'4 Expert Tips On How To Choose The Right Men’s Wallet','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/1.png',2224,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(2,'Sexy Clutches: How to Buy & Wear a Designer Clutch Bag','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/2.png',677,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(3,'The Top 2020 Handbag Trends to Know','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/3.png',2405,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(4,'How to Match the Color of Your Handbag With an Outfit','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n[featured-products title=\"Shop The Look\" limit=\"6\"][/featured-products]\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/4.png',963,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(5,'How to Care for Leather Bags','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/5.png',1554,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(6,'We\'re Crushing Hard on Summer\'s 10 Biggest Bag Trends','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/6.png',1220,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(7,'Essential Qualities of Highly Successful Music','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/7.png',1769,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(8,'9 Things I Love About Shaving My Head','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/8.png',2192,NULL,'2022-12-12 17:35:04','2022-12-12 17:35:04'),(9,'Why Teamwork Really Makes The Dream Work','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/9.png',1294,NULL,'2022-12-12 17:35:05','2022-12-12 17:35:05'),(10,'The World Caters to Average People','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',1,'news/10.png',2031,NULL,'2022-12-12 17:35:05','2022-12-12 17:35:05'),(11,'The litigants on the screen are not actors','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n','published',1,'Botble\\ACL\\Models\\User',0,'news/11.png',1898,NULL,'2022-12-12 17:35:05','2022-12-12 17:35:05');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_translations`
--

DROP TABLE IF EXISTS `posts_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posts_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lang_code`,`posts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_translations`
--

LOCK TABLES `posts_translations` WRITE;
/*!40000 ALTER TABLE `posts_translations` DISABLE KEYS */;
INSERT INTO `posts_translations` VALUES ('vi',1,'4 Lời khuyên của Chuyên gia về Cách Chọn Ví Nam Phù hợp','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',2,'Sexy Clutches: Cách Mua & Đeo Túi Clutch Thiết kế','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',3,'Xu hướng túi xách hàng đầu năm 2020 cần biết','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',4,'Cách Phối Màu Túi Xách Của Bạn Với Trang Phục','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',5,'Cách Chăm sóc Túi Da','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',6,'Chúng tôi đang nghiền ngẫm 10 xu hướng túi lớn nhất của mùa hè','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',7,'Những phẩm chất cần thiết của âm nhạc thành công cao','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',8,'9 điều tôi thích khi cạo đầu','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',9,'Tại sao làm việc theo nhóm thực sự biến giấc mơ thành công','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',10,'Thế giới phục vụ cho những người trung bình','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n'),('vi',11,'Các đương sự trên màn hình không phải là diễn viên','You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.','<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>\n\n<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>\n\n<p style=\"text-align:center\"><img alt=\"f4\" src=\"/storage/news/1.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n\n\n<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>\n\n<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>\n\n<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>\n\n<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>\n\n<p style=\"text-align:center\"><img alt=\"f5\" src=\"/storage/news/2.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n<hr />\n<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>\n\n<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>\n\n<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>\n\n<p style=\"text-align:center\"><img alt=\"f1\" src=\"/storage/news/3.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>\n\n<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>\n\n<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>\n\n<p style=\"text-align:center\"><img alt=\"f6\" height=\"375\" src=\"/storage/news/4.png\" /></p>\n\n<p><br />\n&nbsp;</p>\n\n<hr />\n<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>\n\n<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>\n\n<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>\n\n<p style=\"text-align:center\"><img alt=\"f2\" height=\"400\" src=\"/storage/news/5.png\" /></p>\n\n<p>&nbsp;</p>\n');
/*!40000 ALTER TABLE `posts_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `revisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `role_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_users_user_id_index` (`user_id`),
  KEY `role_users_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `created_by` int unsigned NOT NULL,
  `updated_by` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`),
  KEY `roles_created_by_index` (`created_by`),
  KEY `roles_updated_by_index` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'activated_plugins','[\"language\",\"language-advanced\",\"ads\",\"analytics\",\"audit-log\",\"backup\",\"blog\",\"captcha\",\"contact\",\"cookie-consent\",\"ecommerce\",\"faq\",\"location\",\"marketplace\",\"newsletter\",\"payment\",\"paypal\",\"paystack\",\"razorpay\",\"shippo\",\"simple-slider\",\"social-login\",\"sslcommerz\",\"stripe\",\"translation\",\"mollie\"]',NULL,'2022-12-12 17:34:49'),(4,'language_hide_default','1',NULL,NULL),(5,'language_switcher_display','dropdown',NULL,NULL),(6,'language_display','all',NULL,NULL),(7,'language_hide_languages','[]',NULL,NULL),(8,'ecommerce_store_name','Nest',NULL,NULL),(9,'ecommerce_store_phone','18006268',NULL,NULL),(10,'ecommerce_store_address','North Link Building, 10 Admiralty Street',NULL,NULL),(11,'ecommerce_store_state','Singapore',NULL,NULL),(12,'ecommerce_store_city','Singapore',NULL,NULL),(13,'ecommerce_store_country','SG',NULL,NULL),(14,'media_random_hash','c0b9b2a16e90d27f08496473e377b7c8',NULL,NULL),(15,'permalink-botble-blog-models-post','blog',NULL,NULL),(16,'permalink-botble-blog-models-category','blog',NULL,NULL),(17,'payment_cod_status','1',NULL,NULL),(18,'payment_cod_description','Please pay money directly to the postman, if you choose cash on delivery method (COD).',NULL,NULL),(19,'payment_bank_transfer_status','1',NULL,NULL),(20,'payment_bank_transfer_description','Please send money to our bank account: ACB - 69270 213 19.',NULL,NULL),(21,'plugins_ecommerce_customer_new_order_status','0',NULL,NULL),(22,'plugins_ecommerce_admin_new_order_status','0',NULL,NULL),(23,'ecommerce_load_countries_states_cities_from_location_plugin','0',NULL,NULL),(24,'payment_stripe_payment_type','stripe_checkout',NULL,NULL),(25,'simple_slider_using_assets','0',NULL,NULL),(26,'sale_popup_display_pages','[\"public.index\"]',NULL,NULL),(27,'ecommerce_is_enabled_support_digital_products','1',NULL,NULL),(28,'theme','nest',NULL,NULL),(29,'admin_favicon','general/favicon.png',NULL,NULL),(30,'admin_logo','general/logo.png',NULL,NULL),(31,'theme-nest-site_title','Nest - Laravel Multipurpose eCommerce Script',NULL,NULL),(32,'theme-nest-copyright','Copyright © 2021 Nest all rights reserved. Powered by Botble.',NULL,NULL),(33,'theme-nest-favicon','general/favicon.png',NULL,NULL),(34,'theme-nest-logo','general/logo.png',NULL,NULL),(35,'theme-nest-seo_og_image','general/open-graph-image.png',NULL,NULL),(36,'theme-nest-address','562 Wellington Road, Street 32, San Francisco',NULL,NULL),(37,'theme-nest-hotline','1900 - 888',NULL,NULL),(38,'theme-nest-phone','+01 2222 365 /(+91) 01 2345 6789',NULL,NULL),(39,'theme-nest-working_hours','10:00 - 18:00, Mon - Sat',NULL,NULL),(40,'theme-nest-homepage_id','1',NULL,NULL),(41,'theme-nest-blog_page_id','5',NULL,NULL),(42,'theme-nest-cookie_consent_message','Your experience on this site will be improved by allowing cookies ',NULL,NULL),(43,'theme-nest-cookie_consent_learn_more_url','https://nest.test/cookie-policy',NULL,NULL),(44,'theme-nest-cookie_consent_learn_more_text','Cookie Policy',NULL,NULL),(45,'theme-nest-payment_methods','general/payment-methods.png',NULL,NULL),(46,'theme-nest-number_of_cross_sale_product','4',NULL,NULL),(47,'theme-nest-mobile-header-message','<span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>',NULL,NULL),(48,'theme-nest-blog_page_background','general/header-bg.png',NULL,NULL),(49,'theme-nest-blog_page_icon','general/category-1.png',NULL,NULL),(50,'theme-nest-image_in_login_page','general/login-1.png',NULL,NULL),(51,'theme-nest-number_of_products_per_page','12',NULL,NULL),(52,'theme-nest-preloader_enabled','yes',NULL,NULL),(53,'theme-nest-preloader_version','v2',NULL,NULL),(54,'theme-nest-preloader_image','general/loading.gif',NULL,NULL),(55,'theme-nest-social_links','[[{\"key\":\"social-name\",\"value\":\"Facebook\"},{\"key\":\"social-icon\",\"value\":\"general\\/facebook.png\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.facebook.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Twitter\"},{\"key\":\"social-icon\",\"value\":\"general\\/twitter.png\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.twitter.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Instagram\"},{\"key\":\"social-icon\",\"value\":\"general\\/instagram.png\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.instagram.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Pinterest\"},{\"key\":\"social-icon\",\"value\":\"general\\/pinterest.png\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.pinterest.com\\/\"}],[{\"key\":\"social-name\",\"value\":\"Youtube\"},{\"key\":\"social-icon\",\"value\":\"general\\/youtube.png\"},{\"key\":\"social-url\",\"value\":\"https:\\/\\/www.youtube.com\\/\"}]]',NULL,NULL),(56,'theme-nest-header_messages','[[{\"key\":\"icon\",\"value\":\"fi-rs-bell\"},{\"key\":\"message\",\"value\":\"<b class=\\\"text-success\\\"> Trendy 25<\\/b> silver jewelry, save up 35% off today\"},{\"key\":\"link\",\"value\":\"\\/products\"},{\"key\":\"link_text\",\"value\":\"Shop now\"}],[{\"key\":\"icon\",\"value\":\"fi-rs-asterisk\"},{\"key\":\"message\",\"value\":\"<b class=\\\"text-danger\\\">Super Value Deals<\\/b> - Save more with coupons\"},{\"key\":\"link\",\"value\":\"\\/products\"},{\"key\":\"link_text\",\"value\":null}],[{\"key\":\"icon\",\"value\":\"fi-rs-angle-double-right\"},{\"key\":\"message\",\"value\":\"Get great devices up to 50% off\"},{\"key\":\"link\",\"value\":\"\\/products\"},{\"key\":\"link_text\",\"value\":\"View details\"}]]',NULL,NULL),(57,'theme-nest-contact_info_boxes','[[{\"key\":\"name\",\"value\":\"Head Office\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"office@botble.com\"}],[{\"key\":\"name\",\"value\":\"Our Studio\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"studio@botble.com\"}],[{\"key\":\"name\",\"value\":\"Our Shop\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"shop@botble.com\"}]]',NULL,NULL),(58,'theme-nest-vi-font_text','Roboto Condensed',NULL,NULL),(59,'theme-nest-vi-copyright','Bản quyền © 2021 Nest tất cả quyền đã được bảo hộ. Phát triển bởi Botble.',NULL,NULL),(60,'theme-nest-vi-working_hours','10:00 - 18:00, Thứ Hai - Thứ Bảy',NULL,NULL),(61,'theme-nest-vi-cookie_consent_message','Trải nghiệm của bạn trên trang web này sẽ được cải thiện bằng cách cho phép cookie ',NULL,NULL),(62,'theme-nest-vi-cookie_consent_learn_more_url','https://nest.test/cookie-policy',NULL,NULL),(63,'theme-nest-vi-cookie_consent_learn_more_text','Chính sách cookie',NULL,NULL),(64,'theme-nest-vi-homepage_id','1',NULL,NULL),(65,'theme-nest-vi-blog_page_id','5',NULL,NULL),(66,'theme-nest-vi-header_messages','[[{\"key\":\"icon\",\"value\":\"fi-rs-bell\"},{\"key\":\"message\",\"value\":\"<b class=\\\"text-success\\\">Trang s\\u1ee9c b\\u1ea1c 25 <\\/b> th\\u1eddi th\\u01b0\\u1ee3ng, ti\\u1ebft ki\\u1ec7m \\u0111\\u1ebfn 35%\"},{\"key\":\"link\",\"value\":\"\\/products\"},{\"key\":\"link_text\",\"value\":\"Mua ngay\"}],[{\"key\":\"icon\",\"value\":\"fi-rs-asterisk\"},{\"key\":\"message\",\"value\":\"<b class=\\\"text-danger\\\">\\u01afu \\u0111\\u00e3i si\\u00eau gi\\u00e1 tr\\u1ecb <\\/b> - Ti\\u1ebft ki\\u1ec7m h\\u01a1n v\\u1edbi phi\\u1ebfu th\\u01b0\\u1edfng\"},{\"key\":\"link\",\"value\":null},{\"key\":\"link_text\",\"value\":null}],[{\"key\":\"icon\",\"value\":\"fi-rs-angle-double-right\"},{\"key\":\"message\",\"value\":\"Nh\\u1eadn c\\u00e1c s\\u1ea3n ph\\u1ea9m tuy\\u1ec7t v\\u1eddi gi\\u1ea3m gi\\u00e1 t\\u1edbi 50%\"},{\"key\":\"link\",\"value\":\"\\/products\"},{\"key\":\"link_text\",\"value\":\"Xem chi ti\\u1ebft\"}]]',NULL,NULL),(67,'theme-nest-vi-contact_info_boxes','[[{\"key\":\"name\",\"value\":\"Tr\\u1ee5 s\\u1edf ch\\u00ednh\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"office@botble.com\"}],[{\"key\":\"name\",\"value\":\"Gian h\\u00e0ng tr\\u01b0ng b\\u00e0y\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"studio@botble.com\"}],[{\"key\":\"name\",\"value\":\"C\\u1eeda h\\u00e0ng\"},{\"key\":\"address\",\"value\":\"205 North Michigan Avenue, Suite 810, Chicago, 60601, USA\"},{\"key\":\"phone\",\"value\":\"(+01) 234 567\"},{\"key\":\"email\",\"value\":\"shop@botble.com\"}]]',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simple_slider_items`
--

DROP TABLE IF EXISTS `simple_slider_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `simple_slider_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `simple_slider_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `order` int unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simple_slider_items`
--

LOCK TABLES `simple_slider_items` WRITE;
/*!40000 ALTER TABLE `simple_slider_items` DISABLE KEYS */;
INSERT INTO `simple_slider_items` VALUES (1,1,'Don’t miss amazing<br /> grocery deals','sliders/1-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(2,1,'Fresh Vegetables<br />\n										Big discount','sliders/1-2.png','/products','Save up to 50% off on your first order',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(3,2,'Don’t miss amazing<br /> grocery deals','sliders/2-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(4,2,'Fresh Vegetables<br />\n										Big discount','sliders/2-2.png','/products','Save up to 50% off on your first order',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(5,3,'Don’t miss amazing<br /> grocery deals','sliders/3-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(6,3,'Fresh Vegetables<br />\n										Big discount','sliders/3-2.png','/products','Save up to 50% off on your first order',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(7,4,'Don’t miss amazing<br /> grocery deals','sliders/4-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(8,4,'Fresh Vegetables<br />\n										Big discount','sliders/4-2.png','/products','Save up to 50% off on your first order',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(9,5,'Don’t miss amazing<br /> grocery deals','sliders/5-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(10,5,'Fresh Vegetables<br />\n										Big discount','sliders/5-2.png','/products','Save up to 50% off on your first order',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(11,6,'Don’t miss amazing<br /> grocery deals','sliders/6-1.png','/products','Sign up for the daily newsletter',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(12,7,NULL,'sliders/thumbnail-1.jpg',NULL,NULL,1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(13,7,NULL,'sliders/thumbnail-2.jpg',NULL,NULL,2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(14,7,NULL,'sliders/thumbnail-3.jpg',NULL,NULL,3,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(15,7,NULL,'sliders/thumbnail-4.jpg',NULL,NULL,4,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(16,7,NULL,'sliders/thumbnail-5.jpg',NULL,NULL,5,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(17,7,NULL,'sliders/thumbnail-6.jpg',NULL,NULL,6,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(18,8,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/1-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(19,8,'Rau tươi <br />Giảm giá lớn','sliders/1-2.png','/products','Tiết kiệm đến 50% cho đơn đặt hàng đầu tiên của bạn',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(20,9,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/2-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(21,9,'Rau tươi <br />Giảm giá lớn','sliders/2-2.png','/products','Tiết kiệm đến 50% cho đơn đặt hàng đầu tiên của bạn',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(22,10,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/3-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(23,10,'Rau tươi <br />Giảm giá lớn','sliders/3-2.png','/products','Tiết kiệm đến 50% cho đơn đặt hàng đầu tiên của bạn',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(24,11,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/4-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(25,11,'Rau tươi <br />Giảm giá lớn','sliders/4-2.png','/products','Tiết kiệm đến 50% cho đơn đặt hàng đầu tiên của bạn',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(26,12,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/5-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(27,12,'Rau tươi <br />Giảm giá lớn','sliders/5-2.png','/products','Tiết kiệm đến 50% cho đơn đặt hàng đầu tiên của bạn',2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(28,13,'Đừng bỏ lỡ <br /> tuyệt vời giao dịch hàng tạp hóa','sliders/6-1.png','/products','Tiết kiệm hơn với mã giảm giá 70%',1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(29,14,NULL,'sliders/thumbnail-1.jpg',NULL,NULL,1,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(30,14,NULL,'sliders/thumbnail-2.jpg',NULL,NULL,2,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(31,14,NULL,'sliders/thumbnail-3.jpg',NULL,NULL,3,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(32,14,NULL,'sliders/thumbnail-4.jpg',NULL,NULL,4,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(33,14,NULL,'sliders/thumbnail-5.jpg',NULL,NULL,5,'2022-12-12 17:35:03','2022-12-12 17:35:03'),(34,14,NULL,'sliders/thumbnail-6.jpg',NULL,NULL,6,'2022-12-12 17:35:03','2022-12-12 17:35:03');
/*!40000 ALTER TABLE `simple_slider_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simple_sliders`
--

DROP TABLE IF EXISTS `simple_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `simple_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simple_sliders`
--

LOCK TABLES `simple_sliders` WRITE;
/*!40000 ALTER TABLE `simple_sliders` DISABLE KEYS */;
INSERT INTO `simple_sliders` VALUES (1,'Home slider 1','home-slider-1',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(2,'Home slider 2','home-slider-2',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(3,'Home slider 3','home-slider-3',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(4,'Home slider 4','home-slider-4',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(5,'Home slider 5','home-slider-5',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(6,'Home slider 6','home-slider-6',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(7,'Blog slider 1','blog-slider-1',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(8,'Slider trang chủ 1','slider-trang-chu-1',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(9,'Slider trang chủ 2','slider-trang-chu-2',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(10,'Slider trang chủ 3','slider-trang-chu-3',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(11,'Slider trang chủ 4','slider-trang-chu-4',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(12,'Slider trang chủ 5','slider-trang-chu-5',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(13,'Slider trang chủ 6','slider-trang-chu-6',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03'),(14,'Slider blog 1','slider-blog-1',NULL,'published','2022-12-12 17:35:03','2022-12-12 17:35:03');
/*!40000 ALTER TABLE `simple_sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slugs`
--

DROP TABLE IF EXISTS `slugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slugs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` int unsigned NOT NULL,
  `reference_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slugs_reference_id_index` (`reference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slugs`
--

LOCK TABLES `slugs` WRITE;
/*!40000 ALTER TABLE `slugs` DISABLE KEYS */;
INSERT INTO `slugs` VALUES (1,'perxsion',1,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(2,'hiching',2,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(3,'kepslo',3,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(4,'groneba',4,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(5,'babian',5,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(6,'valorant',6,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(7,'pure',7,'Botble\\Ecommerce\\Models\\Brand','brands','2022-12-12 17:34:49','2022-12-12 17:34:49'),(8,'milks-and-dairies',1,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(9,'clothing-beauty',2,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(10,'pet-toy',3,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(11,'baking-material',4,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(12,'fresh-fruit',5,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(13,'wines-drinks',6,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(14,'fresh-seafood',7,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(15,'fast-food',8,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(16,'vegetables',9,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(17,'bread-and-juice',10,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(18,'cake-milk',11,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(19,'coffee-teas',12,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(20,'pet-foods',13,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(21,'diet-foods',14,'Botble\\Ecommerce\\Models\\ProductCategory','product-categories','2022-12-12 17:34:51','2022-12-12 17:34:51'),(22,'wallet',1,'Botble\\Ecommerce\\Models\\ProductTag','product-tags','2022-12-12 17:34:52','2022-12-12 17:34:52'),(23,'bags',2,'Botble\\Ecommerce\\Models\\ProductTag','product-tags','2022-12-12 17:34:52','2022-12-12 17:34:52'),(24,'shoes',3,'Botble\\Ecommerce\\Models\\ProductTag','product-tags','2022-12-12 17:34:52','2022-12-12 17:34:52'),(25,'clothes',4,'Botble\\Ecommerce\\Models\\ProductTag','product-tags','2022-12-12 17:34:52','2022-12-12 17:34:52'),(26,'hand-bag',5,'Botble\\Ecommerce\\Models\\ProductTag','product-tags','2022-12-12 17:34:52','2022-12-12 17:34:52'),(27,'seeds-of-change-organic-quinoe',1,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:56','2022-12-12 17:34:56'),(28,'all-natural-italian-style-chicken-meatballs',2,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:56','2022-12-12 17:34:56'),(29,'angies-boomchickapop-sweet-salty-kettle-corn',3,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:56','2022-12-12 17:34:56'),(30,'foster-farms-takeout-crispy-classic',4,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(31,'blue-diamond-almonds-lightly',5,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(32,'chobani-complete-vanilla-greek',6,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(33,'canada-dry-ginger-ale-2-l-bottle',7,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(34,'encore-seafoods-stuffed-alaskan',8,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(35,'gortons-beer-battered-fish-fillets',9,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(36,'haagen-dazs-caramel-cone-ice-cream',10,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(37,'nestle-original-coffee-mate-coffee-creamer',11,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(38,'naturally-flavored-cinnamon-vanilla-light-roast-coffee',12,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(39,'pepperidge-farm-farmhouse-hearty-white-bread',13,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(40,'organic-frozen-triple-berry-blend',14,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(41,'oroweat-country-buttermilk-bread',15,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(42,'foster-farms-takeout-crispy-classic-buffalo-wings',16,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(43,'angies-boomchickapop-sweet-salty-kettle-corn',17,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(44,'all-natural-italian-style-chicken-meatballs',18,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(45,'simply-lemonade-with-raspberry-juice',19,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(46,'perdue-simply-smart-organics-gluten-free',20,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(47,'chen-watermelon',21,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(48,'organic-cage-free-grade-a-large-brown-eggs',22,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(49,'colorful-banana',23,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(50,'signature-wood-fired-mushroom-and-caramelized',24,'Botble\\Ecommerce\\Models\\Product','products','2022-12-12 17:34:57','2022-12-12 17:34:57'),(51,'ecommerce',1,'Botble\\Blog\\Models\\Category','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(52,'fashion',2,'Botble\\Blog\\Models\\Category','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(53,'electronic',3,'Botble\\Blog\\Models\\Category','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(54,'commercial',4,'Botble\\Blog\\Models\\Category','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(55,'general',1,'Botble\\Blog\\Models\\Tag','tag','2022-12-12 17:35:04','2022-12-12 17:35:04'),(56,'design',2,'Botble\\Blog\\Models\\Tag','tag','2022-12-12 17:35:04','2022-12-12 17:35:04'),(57,'fashion',3,'Botble\\Blog\\Models\\Tag','tag','2022-12-12 17:35:04','2022-12-12 17:35:04'),(58,'branding',4,'Botble\\Blog\\Models\\Tag','tag','2022-12-12 17:35:04','2022-12-12 17:35:04'),(59,'modern',5,'Botble\\Blog\\Models\\Tag','tag','2022-12-12 17:35:04','2022-12-12 17:35:04'),(60,'4-expert-tips-on-how-to-choose-the-right-mens-wallet',1,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(61,'sexy-clutches-how-to-buy-wear-a-designer-clutch-bag',2,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(62,'the-top-2020-handbag-trends-to-know',3,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(63,'how-to-match-the-color-of-your-handbag-with-an-outfit',4,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(64,'how-to-care-for-leather-bags',5,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(65,'were-crushing-hard-on-summers-10-biggest-bag-trends',6,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(66,'essential-qualities-of-highly-successful-music',7,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:04','2022-12-12 17:35:05'),(67,'9-things-i-love-about-shaving-my-head',8,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:05','2022-12-12 17:35:05'),(68,'why-teamwork-really-makes-the-dream-work',9,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:05','2022-12-12 17:35:05'),(69,'the-world-caters-to-average-people',10,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:05','2022-12-12 17:35:05'),(70,'the-litigants-on-the-screen-are-not-actors',11,'Botble\\Blog\\Models\\Post','blog','2022-12-12 17:35:05','2022-12-12 17:35:05'),(71,'homepage',1,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(72,'homepage-2',2,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(73,'homepage-3',3,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(74,'homepage-4',4,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(75,'blog',5,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(76,'contact',6,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(77,'about-us',7,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(78,'cookie-policy',8,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(79,'terms-conditions',9,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(80,'returns-exchanges',10,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(81,'shipping-delivery',11,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(82,'privacy-policy',12,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(83,'blog-list',13,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(84,'blog-big',14,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(85,'blog-wide',15,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(86,'homepage-5',16,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(87,'homepage-6',17,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(88,'faq',18,'Botble\\Page\\Models\\Page','','2022-12-12 17:35:05','2022-12-12 17:35:05'),(89,'gopro',1,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10'),(90,'global-office',2,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10'),(91,'young-shop',3,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10'),(92,'global-store',4,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10'),(93,'roberts-store',5,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10'),(94,'stouffer',6,'Botble\\Marketplace\\Models\\Store','stores','2022-12-12 17:35:10','2022-12-12 17:35:10');
/*!40000 ALTER TABLE `slugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `states` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int unsigned DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states_translations`
--

DROP TABLE IF EXISTS `states_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `states_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `states_id` int NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbreviation` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`states_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states_translations`
--

LOCK TABLES `states_translations` WRITE;
/*!40000 ALTER TABLE `states_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `states_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int NOT NULL,
  `author_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Botble\\ACL\\Models\\User',
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'General',1,'Botble\\ACL\\Models\\User','','published','2022-12-12 17:35:04','2022-12-12 17:35:04'),(2,'Design',1,'Botble\\ACL\\Models\\User','','published','2022-12-12 17:35:04','2022-12-12 17:35:04'),(3,'Fashion',1,'Botble\\ACL\\Models\\User','','published','2022-12-12 17:35:04','2022-12-12 17:35:04'),(4,'Branding',1,'Botble\\ACL\\Models\\User','','published','2022-12-12 17:35:04','2022-12-12 17:35:04'),(5,'Modern',1,'Botble\\ACL\\Models\\User','','published','2022-12-12 17:35:04','2022-12-12 17:35:04');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_translations`
--

DROP TABLE IF EXISTS `tags_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags_translations` (
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_code`,`tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_translations`
--

LOCK TABLES `tags_translations` WRITE;
/*!40000 ALTER TABLE `tags_translations` DISABLE KEYS */;
INSERT INTO `tags_translations` VALUES ('vi',1,'Chung',NULL),('vi',2,'Thiết kế',NULL),('vi',3,'Thời trang',NULL),('vi',4,'Thương hiệu',NULL),('vi',5,'Hiện đại',NULL);
/*!40000 ALTER TABLE `tags_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL DEFAULT '0',
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5047 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_meta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_meta_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_meta`
--

LOCK TABLES `user_meta` WRITE;
/*!40000 ALTER TABLE `user_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_id` int unsigned DEFAULT NULL,
  `super_user` tinyint(1) NOT NULL DEFAULT '0',
  `manage_supers` tinyint(1) NOT NULL DEFAULT '0',
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@botble.com',NULL,'$2y$10$KoQdDGPv6OWymN0BA3kQsuM/s.qj/vMcY6YyQrNaiKaCGyCT7jrHS',NULL,'2022-12-12 17:35:05','2022-12-12 17:35:05','System','Admin','botble',NULL,1,1,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `widget_id` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar_id` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` tinyint unsigned NOT NULL DEFAULT '0',
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (1,'SiteInfoWidget','footer_sidebar','nest',0,'{\"id\":\"SiteInfoWidget\",\"name\":\"Site information\",\"about\":\"Awesome grocery store website template\",\"phone\":\"(+91) - 540-025-124553\",\"address\":\"5171 W Campbell Ave undefined Kent, Utah 53127 United States\",\"email\":\"sale@Nest.com\",\"working_hours\":\"10:00 - 18:00, Mon - Sat\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(2,'CustomMenuWidget','footer_sidebar','nest',1,'{\"id\":\"CustomMenuWidget\",\"name\":\"Company\",\"menu_id\":\"company\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(3,'CustomMenuWidget','footer_sidebar','nest',2,'{\"id\":\"CustomMenuWidget\",\"name\":\"Categories\",\"menu_id\":\"product-categories\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(4,'CustomMenuWidget','footer_sidebar','nest',3,'{\"id\":\"CustomMenuWidget\",\"name\":\"Information\",\"menu_id\":\"information\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(5,'InstallAppWidget','footer_sidebar','nest',3,'{\"id\":\"InstallAppWidget\",\"name\":\"Install App\",\"apps_description\":\"From App Store or Google Play\",\"ios_app_url\":\"#\",\"ios_app_image\":\"general\\/app-store.jpg\",\"android_app_url\":\"#\",\"android_app_image\":\"general\\/google-play.jpg\",\"payment_gateway_description\":\"Secured Payment Gateways\",\"payment_gateway_image\":\"general\\/payment-methods.png\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(6,'BlogSearchWidget','primary_sidebar','nest',0,'{\"id\":\"BlogSearchWidget\",\"name\":\"Search\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(7,'ProductCategoriesWidget','primary_sidebar','nest',1,'{\"id\":\"ProductCategoriesWidget\",\"name\":\"Categories\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(8,'TrendingProductsWidget','primary_sidebar','nest',2,'{\"id\":\"TrendingProductsWidget\",\"name\":\"Trending Now\",\"number_display\":4}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(9,'GalleryWidget','primary_sidebar','nest',3,'{\"id\":\"GalleryWidget\",\"name\":\"Gallery\",\"slider_key\":\"slider-blog-1\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(10,'TagsWidget','primary_sidebar','nest',4,'{\"id\":\"TagsWidget\",\"name\":\"Popular Tags\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(11,'AdsWidget','primary_sidebar','nest',5,'{\"id\":\"AdsWidget\",\"name\":\"Oganic\",\"ads_key\":\"IZ6WU8KUALYI\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(12,'ProductCategoriesWidget','product_sidebar','nest',1,'{\"id\":\"ProductCategoriesWidget\",\"name\":\"Categories\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(13,'PriceFilterWidget','product_sidebar','nest',2,'{\"id\":\"PriceFilterWidget\",\"name\":\"Filter by price\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(14,'NewProductsWidget','product_sidebar','nest',3,'{\"id\":\"NewProductsWidget\",\"name\":\"New products\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(15,'AdsWidget','product_sidebar','nest',4,'{\"id\":\"AdsWidget\",\"name\":\"Oganic\",\"ads_key\":\"IZ6WU8KUALYI\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(16,'NewsletterWidget','pre_footer_sidebar','nest',0,'{\"id\":\"NewsletterWidget\",\"title\":\"Stay home & get your daily <br \\/>needs from our shop\",\"subtitle\":\"Start Your Daily Shopping with <span>Nest Mart<\\/span>\",\"image\":\"general\\/newsletter-image.png\",\"background_image\":\"general\\/newsletter-background-image.png\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(17,'SiteFeaturesWidget','pre_footer_sidebar','nest',1,'{\"id\":\"SiteFeaturesWidget\",\"title\":\"Site Features\",\"data\":{\"1\":{\"icon\":\"general\\/icon-1.png\",\"title\":\"Best prices & offers\",\"subtitle\":\"Orders $50 or more\"},\"2\":{\"icon\":\"general\\/icon-2.png\",\"title\":\"Free delivery\",\"subtitle\":\"24\\/7 amazing services\"},\"3\":{\"icon\":\"general\\/icon-3.png\",\"title\":\"Great daily deal\",\"subtitle\":\"When you sign up\"},\"4\":{\"icon\":\"general\\/icon-4.png\",\"title\":\"Wide assortment\",\"subtitle\":\"Mega Discounts\"},\"5\":{\"icon\":\"general\\/icon-5.png\",\"title\":\"Easy returns\",\"subtitle\":\"Within 30 days\"}}}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(18,'SiteInfoWidget','footer_sidebar','nest-vi',0,'{\"id\":\"SiteInfoWidget\",\"name\":\"V\\u1ec1 ch\\u00fang t\\u00f4i\",\"about\":\"M\\u1eabu trang web c\\u1eeda h\\u00e0ng t\\u1ea1p h\\u00f3a tuy\\u1ec7t v\\u1eddi\",\"phone\":\"(+91) - 540-025-124553\",\"address\":\"5171 W Campbell Ave undefined Kent, Utah 53127 United States\",\"email\":\"sale@Nest.com\",\"working_hours\":\"10:00 - 18:00, Th\\u1ee9 2 - Th\\u1ee9 7\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(19,'CustomMenuWidget','footer_sidebar','nest-vi',1,'{\"id\":\"CustomMenuWidget\",\"name\":\"C\\u00f4ng ty\",\"menu_id\":\"cong-ty\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(20,'CustomMenuWidget','footer_sidebar','nest-vi',2,'{\"id\":\"CustomMenuWidget\",\"name\":\"Danh m\\u1ee5c s\\u1ea3n ph\\u1ea9m\",\"menu_id\":\"danh-muc-san-pham\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(21,'CustomMenuWidget','footer_sidebar','nest-vi',3,'{\"id\":\"CustomMenuWidget\",\"name\":\"Th\\u00f4ng tin\",\"menu_id\":\"thong-tin\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(22,'BlogSearchWidget','primary_sidebar','nest-vi',0,'{\"id\":\"BlogSearchWidget\",\"name\":\"T\\u00ecm ki\\u1ebfm\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(23,'BlogCategoriesWidget','primary_sidebar','nest-vi',1,'{\"id\":\"BlogCategoriesWidget\",\"name\":\"Danh m\\u1ee5c\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(24,'RecentPostsWidget','primary_sidebar','nest-vi',2,'{\"id\":\"RecentPostsWidget\",\"name\":\"B\\u00e0i vi\\u1ebft g\\u1ea7n \\u0111\\u00e2y\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(25,'TagsWidget','primary_sidebar','nest-vi',4,'{\"id\":\"TagsWidget\",\"name\":\"Tags ph\\u1ed5 bi\\u1ebfn\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(26,'ProductCategoriesWidget','product_sidebar','nest-vi',1,'{\"id\":\"ProductCategoriesWidget\",\"name\":\"Danh m\\u1ee5c s\\u1ea3n ph\\u1ea9m\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(27,'FeaturedProductsWidget','product_sidebar','nest-vi',2,'{\"id\":\"FeaturedProductsWidget\",\"name\":\"S\\u1ea3n ph\\u1ea9m n\\u1ed5i b\\u1eadt\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(28,'FeaturedBrandsWidget','product_sidebar','nest-vi',3,'{\"id\":\"FeaturedBrandsWidget\",\"name\":\"Nh\\u00e0 cung c\\u1ea5p\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(29,'NewsletterWidget','pre_footer_sidebar','nest-vi',0,'{\"id\":\"NewsletterWidget\",\"title\":\"\\u1ede nh\\u00e0 & \\u0111\\u00e1p \\u1ee9ng nhu c\\u1ea7u <br \\/> h\\u00e0ng ng\\u00e0y c\\u1ee7a b\\u1ea1n t\\u1eeb c\\u1eeda h\\u00e0ng c\\u1ee7a ch\\u00fang t\\u00f4i\",\"subtitle\":\"B\\u1eaft \\u0111\\u1ea7u mua s\\u1eafm v\\u1edbi <span>Nest Mart<\\/span>\",\"image\":\"general\\/newsletter-image.png\",\"background_image\":\"general\\/newsletter-background-image.png\"}','2022-12-12 17:35:06','2022-12-12 17:35:06'),(30,'SiteFeaturesWidget','pre_footer_sidebar','nest-vi',1,'{\"id\":\"SiteFeaturesWidget\",\"title\":\"Site Features\",\"data\":{\"1\":{\"icon\":\"general\\/icon-1.png\",\"title\":\"Gi\\u00e1 & \\u01b0u \\u0111\\u00e3i t\\u1ed1t nh\\u1ea5t\",\"subtitle\":\"Cho \\u0111\\u01a1n h\\u00e0ng t\\u1eeb $50\"},\"2\":{\"icon\":\"general\\/icon-2.png\",\"title\":\"Mi\\u1ec5n ph\\u00ed v\\u1eadn chuy\\u1ec3n\",\"subtitle\":\"D\\u1ecbch v\\u1ee5 tuy\\u1ec7t v\\u1eddi 24\\/7\"},\"3\":{\"icon\":\"general\\/icon-3.png\",\"title\":\"\\u01afu \\u0111\\u00e3i h\\u00e0ng ng\\u00e0y\",\"subtitle\":\"Khi b\\u1ea1n \\u0111\\u0103ng k\\u00fd\"},\"4\":{\"icon\":\"general\\/icon-4.png\",\"title\":\"Nhi\\u1ec1u m\\u1eb7t h\\u00e0ng\",\"subtitle\":\"Gi\\u1ea3m gi\\u00e1 c\\u1ef1c l\\u1edbn\"},\"5\":{\"icon\":\"general\\/icon-5.png\",\"title\":\"D\\u1ec5 d\\u00e0ng ho\\u00e0n tr\\u1ea3\",\"subtitle\":\"Trong v\\u00f2ng 30 ng\\u00e0y\"}}}','2022-12-12 17:35:06','2022-12-12 17:35:06');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-13  7:36:01