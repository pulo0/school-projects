DROP DATABASE IF EXISTS `gallery`;
CREATE DATABASE `gallery`;
USE `gallery`;

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
    `filename` CHAR(45) NOT NULL,
    `alt_text` CHAR(200) NOT NULL
);

TRUNCATE TABLE `images`;

LOCK TABLES `images` WRITE;
INSERT INTO `images` VALUES
("image1.jpg", "TTPD Main Cover art Drawing")
("image2.jpg", "The red collection drawing :D"),
("image3.jpg", "The Copia"),
("image4.jpg", "Teddybear <33"),
("image5.jpg", "Cloaked DTIYS"),
("image6.jpg", "Sodo with peace sign"),
("image7.jpg", "Cello Ghoulette from LA Forum ritual"),
("image8.jpg", "Rain X Sodo cute leaning in each other"),
("image9.jpg", "Sodooo more guitar"),
("image10.jpg", "Cute Sodo with puppies"),
("image11.jpg", "Taylor Swift: Red"),
("image12.jpg", "A cute puppy for a gift"),
("image13.jpg", "Woooowwww oh god I can't even describe it because it's just the best"),
("image14.jpg", "Aurora Ghoulette"),
("image15.jpg", "Never Grow Up"),
("image16.jpg", "I think it's Collei"),
("image17.jpg", "Aww A cute kitty cat, cozy as f"),
("image18.jpg", "Little women reference?"),
("image19.jpg", "Burning house down"),
("image20.jpg", "Dears drawing with so goood water"),
("image21.jpg", "Nagi X Reo ship drawing"),
("image22.jpg", "A pumpkin cutie for a contest"),
("image23.jpg", "Hearstopper drawing <3"),
("image24.jpg", "Sparks fly Taylor Swfit: Speak Now"),
("image25.jpg", "the lakes, when all the poets when to die"),
("image26.jpg", "the dead tree?"),
("image27.jpg", "Hehe, more Taylor😎"),
("image28.jpg", "Floowers painting"),
("image30.jpg", "Gorgeous Hanahaki comic drawing");
UNLOCK TABLES;