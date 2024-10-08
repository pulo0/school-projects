-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: zarz_czas
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `zadanie`
--

-- Creating a database
CREATE DATABASE zarz_czas;
USE zarz_czas;

DROP TABLE IF EXISTS `zadanie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zadanie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zadanie_tytul` varchar(50) NOT NULL,
  `opis` text NOT NULL,
  `priorytet_zadania` enum('wazny','sredni','niski') NOT NULL,
  `progres_zadania` enum('w trakcie','wykonane') NOT NULL,
  `deadline` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zadanie`
--

LOCK TABLES `zadanie` WRITE;
/*!40000 ALTER TABLE `zadanie` DISABLE KEYS */;
INSERT INTO `zadanie` VALUES 
(1,'Zakupy','Zrobić zakupy','niski','wykonane','2024-09-06 13:30:00'),
(2,'Zadanie domowe','Konkretnie z matematyki','sredni','w trakcie','2024-09-09 10:10:19'),
(3,'MySQL książka','Przeczytać książkę','wazny','w trakcie','2024-10-31 01:00:00'),
(4,'Prezent na święta','Zrobić prezent','wazny','w trakcie','2024-12-06 06:45:00'),
(5,'Targi książki','Pójść na targi książki','sredni','w trakcie','2024-10-24 07:30:00'),
(6,'Egzamin na technika','Napisać egzamin na technika','wazny','w trakcie','2025-01-13 12:10:00'),
(7,'Matura','Napisać mature','wazny','w trakcie','2025-05-01 09:15:00'),
(8,'Zacząć pracę','Znaleźć pracę i pracować','sredni','w trakcie','2025-06-01 05:00:00'),
(9, 'Kupić telewizor','Duży Samsung','niski','w trakcie','2025-01-01 12:00:00'),
(10, 'Przygotować prezentacje na fizyke','fizyka atomowa','sredni','wykonane','2024-01-01 11:15:00'),
(11, 'Zrobić kolejne zadanie domowe','tym razem z polskiego','wysoki','w trakcie','2025-01-01 12:00:00');
/*!40000 ALTER TABLE `zadanie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-06  8:37:39
