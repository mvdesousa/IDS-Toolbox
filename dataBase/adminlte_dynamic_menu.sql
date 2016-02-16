-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: adminlte
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `dynamic_menu`
--

DROP TABLE IF EXISTS `dynamic_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dynamic_menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `menu_order` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `target` varchar(45) DEFAULT NULL,
  `iconpullright` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dynamic_menu`
--

LOCK TABLES `dynamic_menu` WRITE;
/*!40000 ALTER TABLE `dynamic_menu` DISABLE KEYS */;
INSERT INTO `dynamic_menu` VALUES (1,0,'Home','/IDS-Toolbox/userView/index.php','1','fa fa-home',NULL,'',1),(2,0,'Builder','/IDS-Toolbox/userView/builder/index.php','2','fa fa-gear','_blank','new',1),(3,0,'Typography','/IDS-Toolbox/userView/pages/typography.php','3','fa fa-font',NULL,'new',1),(4,0,'HTML5','#','4','fa fa-code',NULL,'new',1),(5,4,'Coding Standards','/IDS-Toolbox/userView/pages/html5.php','1','fa fa-code',NULL,'new',1),(6,0,'Bootstrap','#','5','fa fa-css3',NULL,'new',1),(7,6,'Bootstrap Carousel','/IDS-Toolbox/userView/pages/carousels.php','1','fa fa-picture-o',NULL,'new',1),(8,6,'Accodrion','/IDS-Toolbox/userView/pages/accordions.php','2','fa fa-map-o',NULL,'new',1),(9,0,'Hybris','#','6','fa fa-header',NULL,'new',1),(10,9,'Document Library','/IDS-Toolbox/userView/pages/hybris-quick-reference.php','1','fa fa-book',NULL,'new ',1);
/*!40000 ALTER TABLE `dynamic_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-16 12:47:46
