-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: laravel_r3
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cars_category_id_foreign` (`category_id`),
  CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Kovacek-Davis','Iste est possimus amet debitis.',1,'https://via.placeholder.com/640x480.png/008877?text=animals+maxime',6,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(2,'Zboncak-Grimes','Blanditiis vel illo dicta deleniti iste.',0,'https://via.placeholder.com/640x480.png/00ff22?text=animals+cumque',1,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(3,'Kutch, Kozey and Gottlieb','Tempora veniam eos qui eum tenetur cumque.',1,'https://via.placeholder.com/640x480.png/00bb33?text=animals+a',9,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(4,'Witting, Keeling and Macejkovic','Autem sint deleniti molestiae aut nostrum deleniti ut.',0,'https://via.placeholder.com/640x480.png/00cc22?text=animals+nulla',2,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(5,'Kuhic, Labadie and Wisoky','Et nobis laborum delectus quis ipsa optio quia laboriosam.',1,'https://via.placeholder.com/640x480.png/0066cc?text=animals+possimus',7,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(6,'Hayes, Hintz and Reilly','Qui vel aut sit ut sapiente quisquam eum.',1,'https://via.placeholder.com/640x480.png/00bb11?text=animals+excepturi',7,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(7,'Wintheiser-Johnston','Et quibusdam ut et ut aperiam et.',1,'https://via.placeholder.com/640x480.png/00dd11?text=animals+eos',3,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(8,'Mante, Blick and Stracke','Eligendi minima dolores ipsa eos.',1,'https://via.placeholder.com/640x480.png/0044dd?text=animals+non',2,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(9,'Conn Ltd','Aut atque qui et nulla doloremque dolor.',0,'https://via.placeholder.com/640x480.png/00dd11?text=animals+sint',8,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45'),(10,'Schmidt-Kertzmann','Molestiae dolorum magni at et aut reiciendis occaecati.',0,'https://via.placeholder.com/640x480.png/003355?text=animals+aut',3,NULL,'2024-01-20 14:03:45','2024-01-20 14:03:45');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'totam','2024-01-20 14:03:45','2024-01-20 14:03:45'),(2,'suscipit','2024-01-20 14:03:45','2024-01-20 14:03:45'),(3,'non','2024-01-20 14:03:45','2024-01-20 14:03:45'),(4,'mollitia','2024-01-20 14:03:45','2024-01-20 14:03:45'),(5,'error','2024-01-20 14:03:45','2024-01-20 14:03:45'),(6,'vel','2024-01-20 14:03:45','2024-01-20 14:03:45'),(7,'dolor','2024-01-20 14:03:45','2024-01-20 14:03:45'),(8,'voluptatem','2024-01-20 14:03:45','2024-01-20 14:03:45'),(9,'eius','2024-01-20 14:03:45','2024-01-20 14:03:45'),(10,'corrupti','2024-01-20 14:03:45','2024-01-20 14:03:45');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_12_26_192109_create_categories_table',1),(7,'2023_12_02_194503_create_cars_table',1),(8,'2023_12_10_093512_create_posts_table',1),(9,'2024_01_13_171548_create_contact_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(100) NOT NULL,
  `postDescription` text NOT NULL,
  `postPublished` tinyint(1) NOT NULL,
  `postAuthor` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mr. Efren Bayer MD','aditya.blick@example.com','2024-01-20 14:03:44','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','RNghMmne6g',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(2,'Jaren Weber','gina70@example.org','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','sqUgS192zb',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(3,'Berniece Paucek','roselyn29@example.org','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','Sk53sH7QPl',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(4,'Kallie Klein','carroll.rocio@example.org','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','0spHIy43OL',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(5,'Eusebio Fay','ahoeger@example.net','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','7x7rDO8exy',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(6,'Kelton Reinger','jonatan56@example.net','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','YUvaed0P22',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(7,'Carter Langworth','adams.dave@example.org','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','bZhcuREx6T',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(8,'Alexanne Powlowski','karl.wolff@example.com','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','CZ3dFuHhSE',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(9,'Hassan Koch','garrison.auer@example.com','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','bsXnwh9QBD',0,'2024-01-20 14:03:45','2024-01-20 14:43:42'),(10,'Foster Padberg','duane14@example.net','2024-01-20 14:03:45','$2y$12$xkT02U6jI8Kdo3TUjtBg0OjLGErafnLh3j09wBtQuvy4iTV5d92V6','yx9VUhoZqB',0,'2024-01-20 14:03:45','2024-01-20 14:43:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-22 23:54:10
