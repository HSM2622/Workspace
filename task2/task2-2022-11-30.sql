-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: mysql    Database: task2
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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qna_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (6,'하상민','1','3','ㅁ나ㅣ음ㄴㅇ','2022-11-30 12:00:20','2022-11-30 12:00:20'),(7,'하상민','1','3','민ㅇㅁㄴㅇㅁㄴㅇ','2022-11-30 12:01:54','2022-11-30 12:01:54'),(8,'하상민','1','3','laskdasd\r\nsad\r\nasd\r\nas\r\ndas\r\nd\r\nasd\r\nas\r\nd\r\nasd\r\nasd\r\nas\r\nd\r\na','2022-11-30 12:38:51','2022-11-30 12:38:51'),(9,'하상민','1','2','실험','2022-11-30 12:51:14','2022-11-30 12:51:14');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `histories`
--

DROP TABLE IF EXISTS `histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESC_KOR` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ANIMAL_PLANT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SERVING_WT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUTR_CONT9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `histories`
--

LOCK TABLES `histories` WRITE;
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
INSERT INTO `histories` VALUES (1,'2022-11-30 08:44:29','2022-11-30 08:44:29','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(2,'2022-11-30 08:45:36','2022-11-30 08:45:36','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(3,'2022-11-30 08:45:58','2022-11-30 08:45:58','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(4,'2022-11-30 08:47:42','2022-11-30 08:47:42','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(5,'2022-11-30 08:48:09','2022-11-30 08:48:09','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(6,'2022-11-30 08:48:20','2022-11-30 08:48:20','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(7,'2022-11-30 08:48:25','2022-11-30 08:48:25','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(8,'2022-11-30 08:49:42','2022-11-30 08:49:42','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(9,'2022-11-30 08:49:57','2022-11-30 08:49:57','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(10,'2022-11-30 09:08:53','2022-11-30 09:08:53','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(11,'2022-11-30 09:09:12','2022-11-30 09:09:12','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(12,'2022-11-30 10:14:48','2022-11-30 10:14:48','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(13,'2022-11-30 10:15:49','2022-11-30 10:15:49','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(14,'2022-11-30 10:25:24','2022-11-30 10:25:24','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(15,'2022-11-30 10:25:34','2022-11-30 10:25:34','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(16,'2022-11-30 10:25:40','2022-11-30 10:25:40','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(17,'2022-11-30 10:26:00','2022-11-30 10:26:00','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(18,'2022-11-30 10:26:25','2022-11-30 10:26:25','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(19,'2022-11-30 10:26:30','2022-11-30 10:26:30','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A'),(20,'2022-11-30 11:10:52','2022-11-30 11:10:52','1','과자,DHA새우깡','농심','30','151.20','18.12','1.80','7.35','N/A','210.00','N/A','N/A','N/A');
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (33,'2014_10_12_000000_create_users_table',1),(34,'2014_10_12_100000_create_password_resets_table',1),(35,'2019_08_19_000000_create_failed_jobs_table',1),(36,'2019_12_14_000001_create_personal_access_tokens_table',1),(37,'2022_11_11_032605_create_qnas_table',1),(38,'2022_11_18_052706_create_db_food_table',1),(39,'2022_11_30_081859_create_histories_table',2),(40,'2022_11_30_112514_create_comments_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `qnas`
--

DROP TABLE IF EXISTS `qnas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qnas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int NOT NULL DEFAULT '0',
  `likes` int NOT NULL DEFAULT '0',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '일반',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qnas`
--

LOCK TABLES `qnas` WRITE;
/*!40000 ALTER TABLE `qnas` DISABLE KEYS */;
INSERT INTO `qnas` VALUES (2,'1','하상민','무야호','ㅂㅈㄷㅂㅈㄷ',12,0,'일반','2022-11-30 11:05:20','2022-11-30 12:51:14'),(3,'1','하상민','ㄴㄴㅁㅇ','ㅂㅈㄷㅂㅈㄷ',198,0,'일반','2022-11-30 11:08:53','2022-11-30 12:59:34');
/*!40000 ALTER TABLE `qnas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'하상민','example@naver.com',NULL,'$2y$10$FFNJ./FlntTBmHukCpdrReNF/GQAviJAWurB6YQ5ElwlooglFhZeO',NULL,'2022-11-30 08:44:16','2022-11-30 08:44:16'),(2,'나상민','example2@naver.com',NULL,'$2y$10$Et5HMMtNkrDNMGzt1UOf/e/bzrIoQZyQ2hq/N6wp6.xJw2ujhIOku',NULL,'2022-11-30 12:59:25','2022-11-30 12:59:25');
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

-- Dump completed on 2022-11-30 13:16:46
