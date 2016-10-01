-- MySQL dump 10.15  Distrib 10.0.27-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: insurance
-- ------------------------------------------------------
-- Server version	10.0.27-MariaDB-0ubuntu0.16.04.1

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('72e23ad5d56c0c2d31fc583567666c40c9762592','127.0.0.1',1475337128,'__ci_last_regenerate|i:1475337128;'),('bb789dc5ff6c11c1dc290df796a929a935c6e65d','127.0.0.1',1475337149,'__ci_last_regenerate|i:1475337149;'),('18697a3a55576b6588cb6241d3a744ab544b7126','127.0.0.1',1475337605,'__ci_last_regenerate|i:1475337605;'),('ca67b715112bc4d1f52dd54411e2a2771b060ba3','127.0.0.1',1475337677,'__ci_last_regenerate|i:1475337676;'),('6cb4e236a08503bb66c1be5b867408ac8099abc0','127.0.0.1',1475337746,'__ci_last_regenerate|i:1475337746;'),('415f28cdd53e4a7cb17051fe346e5a499f24a208','127.0.0.1',1475337773,'__ci_last_regenerate|i:1475337773;'),('bc8cba670619f7c772b96d762339a969e377ae16','127.0.0.1',1475339734,'__ci_last_regenerate|i:1475339734;'),('fd59bb1867d3565a918433f4327191586e18bd56','127.0.0.1',1475339739,'__ci_last_regenerate|i:1475339739;'),('91d4ec8a533f27446a8b8de64d6f6330537c44ba','127.0.0.1',1475339785,'__ci_last_regenerate|i:1475339785;'),('e4a7668e250cfc1fae4ec471e138b9239e2416c7','127.0.0.1',1475339921,'__ci_last_regenerate|i:1475339921;'),('b34270ebab981a9c586c43279810f3ea8ea976e3','127.0.0.1',1475339992,'__ci_last_regenerate|i:1475339992;'),('107feafc496450ff84b704ec211dbc99b746c462','127.0.0.1',1475340022,'__ci_last_regenerate|i:1475340022;'),('2e252cf981fa9b20f89c7d85f04ffbefbe36d91b','127.0.0.1',1475340053,'__ci_last_regenerate|i:1475340053;'),('0edd3fc778842015c1f334f16d06dddfd67b224a','127.0.0.1',1475340187,'__ci_last_regenerate|i:1475340187;'),('c4c72eba34c28dc52b1d9ae6486f5a9af5abd337','127.0.0.1',1475340257,'__ci_last_regenerate|i:1475340257;'),('39ecf1a654392a3375a75fec72e354dc5a98276f','127.0.0.1',1475340301,'__ci_last_regenerate|i:1475340301;id|s:1:\"1\";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `path` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `size` int(10) unsigned DEFAULT NULL,
  `loss_price` float DEFAULT NULL,
  `insurance_duration` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `password_UNIQUE` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user','$2y$10$J/wTOq5Rk2PZOIvA2dlQ.u6TLLWSJLbszWW7rY0GcGCLG.BGk8pPq');
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

-- Dump completed on 2016-10-01 22:30:02
