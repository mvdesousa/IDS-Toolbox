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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountType` varchar(45) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(65) NOT NULL,
  `position` varchar(45) NOT NULL,
  `officeNumber` varchar(15) DEFAULT 'n/a',
  `cellNumber` varchar(15) DEFAULT 'n/a',
  `salt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'Administrator','mdeso862','marcos.desousa@vacationclub.com','ed4bc2f776f6166ae62ef29a37c993042a9dc67e49a27680b7b82121c98256e7',1,'Marcos DeSousa','Web Developer','407-529-2864','508-241-1806','a00c7e04418869f165f557dd8cb7934ebb28c5dc096d114949311113b13b9240'),(16,'Administrator','carlisle','brandon.bartlett@mvwc.com','b0507839ac7cf908bb6da56d157a4fa32ba72b55e83615d8a8fc09eac7520480',1,'Carlisle','Director, Web Development','n/a','n/a','dbd272c9f05a9f4a738ade555bef72b7e0a971486e85a15946e889169eaedc88'),(17,'Administrator','arrom598','adam.romine@vacationclub.com','6dae1418ba2cafe197067b444068ae69f5ffbfc96cfd3bae664c7cbfa9ced44c',1,'Adam Romine','Developer','n/a','n/a','4b9336240e6666f68669425796ad8d74cf6f5fec42c5dcfb943a857fead62dd2'),(22,'Associate','test','test@name.com','57c4d5706973edaba5cd3d32afa4e2824a76454cba7e7c755ada0ca89f4069b7',1,'Tom Moreno','Test User','n/a','n/a','3ad974ef65923d7dd9e3b6469b7ce6146a54bf1ab8f917da15aeaf902846dec1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-23 16:39:13
