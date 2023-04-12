-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: floodprone
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `bocauepeopleinfo`
--

DROP TABLE IF EXISTS `bocauepeopleinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bocauepeopleinfo` (
  `Number` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `BirthD` date NOT NULL,
  `ContactNum` int(11) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Baranggay` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  PRIMARY KEY (`Number`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bocauepeopleinfo`
--

LOCK TABLES `bocauepeopleinfo` WRITE;
/*!40000 ALTER TABLE `bocauepeopleinfo` DISABLE KEYS */;
INSERT INTO `bocauepeopleinfo` VALUES (1,'hadji','hadjidimarucot11@gmail.com','2023-03-24',5475689,'sdf','Antipona','111'),(2,'anmark','hadjidimarucot11@gmail.com','2023-03-14',5475689,'sdf','Antipona','123'),(3,'Jerry','hadjidimarucot11@gmail.com','2023-03-25',5475689,'Verde','Bunlo','55555555'),(4,'jona','hadjidimarucot11@gmail.com','2023-03-10',5475689,'hndfgh','Bundukan','33333333'),(5,'jeremy','hadjidimarucot11@gmail.com','2023-03-07',5475689,'fdh','Antipona','55555555'),(6,'jor','hadjidimarucot11@gmail.com','2003-07-11',5475689,'nicolas','Binang 2nd','34343434');
/*!40000 ALTER TABLE `bocauepeopleinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `simula` int(11) NOT NULL AUTO_INCREMENT,
  `star` float NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`simula`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,1.5,'pede na','Jerry',''),(2,2.5,'oks lNG','Jerry',''),(3,5,'g na yan','Jerry',''),(4,1,'oks naaaaaa','Jerry',''),(5,2.5,'panget sa totoo lang ayoko neto grade lang namen 3','Jerry',''),(6,1.5,'nako bagsak. ang panget ng website haha','Jerry','');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levelstatus`
--

DROP TABLE IF EXISTS `levelstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levelstatus` (
  `begin` int(5) NOT NULL AUTO_INCREMENT,
  `Baranggay` varchar(50) NOT NULL,
  `LevelStatus` int(2) NOT NULL,
  `Sign` varchar(250) NOT NULL,
  `Time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `Date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`begin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levelstatus`
--

LOCK TABLES `levelstatus` WRITE;
/*!40000 ALTER TABLE `levelstatus` DISABLE KEYS */;
INSERT INTO `levelstatus` VALUES (1,'Bunlo',78,'etc','Thu,Mar 23 23,','2023-03-23 19:57:32'),(2,'Bunlo',78,'etc','08:00 PM','Thu,Mar 23 23, '),(3,'Bunlo',78,'etc','08:01 PM','Thu, Mar 23 2023, '),(4,'Antipona',26,'saklhkwlsifyweiof','2023-04-05 16:11:38','2023-04-05 16:11:38'),(5,'Bundukan',37,'etc','07:41 PM','Sat, Apr 08 2023, '),(6,'Igulot',56,'etc','07:43 PM ','Sat, Apr 08 2023 ');
/*!40000 ALTER TABLE `levelstatus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-10 23:15:15
