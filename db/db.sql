-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: localhost    Database: kharkivjs_db
-- ------------------------------------------------------
-- Server version	5.5.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `kharkivjs_db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `kharkivjs_db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `kharkivjs_db`;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `confirmation` tinyint(1) DEFAULT NULL,
  `approved` enum('approved','unapproved') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Artem','Popenko','Developer','artem.popenko@gmail.com',NULL,NULL),(4,'Artem','Popenko','Developer','artem.popenko@dev-pro.net',NULL,NULL),(6,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(7,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(8,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(9,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(10,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(11,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(12,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(13,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(14,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(15,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(16,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(17,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(18,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(19,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(20,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(21,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(22,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(23,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(24,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(25,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(26,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(27,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(28,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(29,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(30,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(31,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(32,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(33,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(34,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(35,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(36,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(37,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(38,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(39,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(40,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(41,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(42,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(43,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(44,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(45,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(46,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(47,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(48,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(49,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(50,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(51,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(52,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(53,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(54,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(55,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(56,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(57,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(58,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(59,'Artem','Popenko','Developer','artem.popenko2@dev-pro.net',NULL,NULL),(60,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(61,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(62,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(63,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(64,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(65,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(66,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL),(67,'Artem','Popenko','PHP Developer','artem.popenko@gmail.com',NULL,NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-11-09 16:54:50
