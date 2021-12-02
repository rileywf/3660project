-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: wear3660
-- ------------------------------------------------------
-- Server version	5.5.64-MariaDB

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
-- Table structure for table `Apart_Of`
--

DROP TABLE IF EXISTS `Apart_Of`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Apart_Of` (
  `ID` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `stationNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `name` (`name`),
  CONSTRAINT `Apart_Of_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `ROUTES` (`ID`),
  CONSTRAINT `Apart_Of_ibfk_2` FOREIGN KEY (`name`) REFERENCES `STATION` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Apart_Of`
--

LOCK TABLES `Apart_Of` WRITE;
/*!40000 ALTER TABLE `Apart_Of` DISABLE KEYS */;
/*!40000 ALTER TABLE `Apart_Of` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CONDUCTOR`
--

DROP TABLE IF EXISTS `CONDUCTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CONDUCTOR` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rID` int(11) DEFAULT NULL,
  `phoneNum` int(11) DEFAULT NULL,
  `condName` char(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `Certification` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `rID` (`rID`),
  CONSTRAINT `CONDUCTOR_ibfk_1` FOREIGN KEY (`rID`) REFERENCES `TRAIN` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CONDUCTOR`
--

LOCK TABLES `CONDUCTOR` WRITE;
/*!40000 ALTER TABLE `CONDUCTOR` DISABLE KEYS */;
/*!40000 ALTER TABLE `CONDUCTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ROUTES`
--

DROP TABLE IF EXISTS `ROUTES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROUTES` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `typesOfTrain` enum('Cargo', 'Passanger') DEFAULT NULL,
  `name` char(120) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROUTES`
--

LOCK TABLES `ROUTES` WRITE;
/*!40000 ALTER TABLE `ROUTES` DISABLE KEYS */;
INSERT INTO `ROUTES` VALUES (1,'Electric','RoutyRoute'),(2,'Ghost','Haunted Railway');
/*!40000 ALTER TABLE `ROUTES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STATION`
--

DROP TABLE IF EXISTS `STATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `STATION` (
  `name` char(255) NOT NULL,
  `openingTime` int(11) DEFAULT NULL,
  `closingTime` int(11) DEFAULT NULL,
  `location` char(255) DEFAULT NULL,
  `Type` enum('Cargo', 'Passanger') DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STATION`
--

LOCK TABLES `STATION` WRITE;
/*!40000 ALTER TABLE `STATION` DISABLE KEYS */;
/*!40000 ALTER TABLE `STATION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TIMES`
--

DROP TABLE IF EXISTS `TIMES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TIMES` (
  `ID` int(11) NOT NULL,
  `times` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `TIMES_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `ROUTES` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TIMES`
--

LOCK TABLES `TIMES` WRITE;
/*!40000 ALTER TABLE `TIMES` DISABLE KEYS */;
/*!40000 ALTER TABLE `TIMES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRAIN`
--

DROP TABLE IF EXISTS `TRAIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRAIN` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rID` int(11) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `Fuel` enum('Diesel', 'Electric') DEFAULT NULL,
  `Type` enum('Cargo', 'Passenger') DEFAULT NULL,
  `passenger_capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `rID` (`rID`),
  CONSTRAINT `TRAIN_ibfk_1` FOREIGN KEY (`rID`) REFERENCES `ROUTES` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRAIN`
--

LOCK TABLES `TRAIN` WRITE;
/*!40000 ALTER TABLE `TRAIN` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRAIN` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-13 18:13:39
