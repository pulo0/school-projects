-- Creating database because it's not created now
CREATE DATABASE clothing_store;
USE clothing_store;

DROP TABLE IF EXISTS `clothing_store`;
CREATE TABLE `clothing_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `size` varchar(4) NOT NULL,
  `type` varchar(45) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothing_store`
--

LOCK TABLES `clothing_store` WRITE;
INSERT INTO `clothing_store` VALUES
(1,'Medicine','Mężczyzna','L','Spodnie',90.99,1),
(2,'Medicine','Dziecko','M','Dodatki',59.99,1),
(3,'Gucci','Kobieta','XS','Koszulki',354.99,1),
(4,'MarekStonks','Dived','XXL','Kurtki/Płaszcze',90.99,0),
(5,'AleJazda','Dived','XS','Kurtki/Płaszcze',89.99,1),
(6,'Płaszczowicze','Mężczyzna','M','Kurtki/Płaszcze',91.99,1),
(7,'MyBady','Dziecko','S','Bielizna',15.99,1);
UNLOCK TABLES;