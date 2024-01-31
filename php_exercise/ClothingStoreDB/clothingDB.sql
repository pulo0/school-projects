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
(1,'Medicine','Man','L','Pants',90.99,1),
(2,'Medicine','Child','M','Addons',59.99,1),
(3,'Gucci','Woman','XS','T-shirts',354.99,1),
(4,'MarStocks','Dived','XXL','Jackets/Coats',90.99,0),
(5,'NiceDrive','Dived','XS','Jackets/Coats',89.99,1),
(6,'JackteMans','Man','M','Jackets/Coats',91.99,1),
(7,'MyBady','Child','S','Underwear',15.99,1);
UNLOCK TABLES;