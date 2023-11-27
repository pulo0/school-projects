-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: baza_odziez
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
-- Table structure for table `sklep_odziezowy`
--

-- Creating database because it's not created now
CREATE DATABASE baza_odziez;
USE baza_odziez;

DROP TABLE IF EXISTS `sklep_odziezowy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sklep_odziezowy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marka` varchar(45) NOT NULL,
  `plec` varchar(30) NOT NULL,
  `rozmiar` varchar(4) NOT NULL,
  `rodzaj` varchar(45) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `dostepny` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sklep_odziezowy`
--

LOCK TABLES `sklep_odziezowy` WRITE;
/*!40000 ALTER TABLE `sklep_odziezowy` DISABLE KEYS */;
INSERT INTO `sklep_odziezowy` VALUES (1,'Medicine','Mężczyzna','L','Spodnie',90.99,1),(2,'Medicine','Dziecko','M','Dodatki',59.99,1),(3,'Gucci','Kobieta','XS','Koszulki',354.99,1),(4,'MarekStonks','Dived','XXL','Kurtki/Płaszcze',90.99,0),(5,'AleJazda','Dived','XS','Kurtki/Płaszcze',89.99,1),(6,'Płaszczowicze','Mężczyzna','M','Kurtki/Płaszcze',91.99,1),(7,'MyBady','Dziecko','S','Bielizna',15.99,1);
/*!40000 ALTER TABLE `sklep_odziezowy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-26 19:33:34
