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
(NULL,'Medicine','Man','L','Pants',90.99,1),
(NULL,'Medicine','Child','M','Addons',59.99,1),
(NULL,'Gucci','Woman','XS','T-shirts',354.99,1),
(NULL,'MarStocks','Dived','XXL','Jackets/Coats',90.99,0),
(NULL,'FlY','Child','S','T-shirts',15.99,1)
(NULL,'NiceDrive','Dived','XS','Jackets/Coats',89.99,1),
(NULL,'JackteMans','Man','M','Jackets/Coats',91.99,1),
(NULL,'MyBady','Child','S','Underwear',15.99,1)
(NULL, 'A.P.C','Man','L','Pants',18.99,0)
(NULL, 'Beyond Yoga','Woman','A', , ,)
UNLOCK TABLES;