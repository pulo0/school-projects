DROP DATABASE IF EXISTS `dziennik_ucznia`;
CREATE DATABASE dziennik_ucznia;
USE dziennik_ucznia;

DROP TABLE IF EXISTS `Uczniowie`;
CREATE TABLE `Uczniowie` (
	`ID_ucznia` INT(3) NOT NULL AUTO_INCREMENT,
	`Imie` varchar(20) NOT NULL,
	`Nazwisko` varchar(30) NOT NULL,
	`PESEL` char(11) NOT NULL,
	`Miasto` varchar(20) NOT NULL,
	`Ulica` varchar(40) NOT NULL,
	`NR_domu` smallint(3) NOT NULL,
	`NR_miesz` smallint(3) NOT NULL,
	`Kod_pocz` varchar(6) NOT NULL,
	`Kraj` varchar(20) NOT NULL,
	`Data_ur` DATE NOT NULL,
	`ID_klasy` INT(3) NOT NULL,
	PRIMARY KEY (`ID_ucznia`)
);

DROP TABLE IF EXISTS `Przedmiot`;
CREATE TABLE `Przedmioty` (
	`ID_przedm` INT(3) NOT NULL AUTO_INCREMENT,
	`Nazwa` varchar(40) NOT NULL,
	PRIMARY KEY (`ID_przedm`)
);

DROP TABLE IF EXISTS `Nauczyciele`;
CREATE TABLE `Nauczyciele` (
	`ID_nauczycieli` INT(3) NOT NULL AUTO_INCREMENT,
	`Imie` varchar(30) NOT NULL,
	`Nazwisko` varchar(30) NOT NULL,
	`Przedmiot` varchar(40) NOT NULL,
	`Rok_rozp` year NOT NULL,
	PRIMARY KEY (`ID_nauczycieli`)
);

DROP TABLE IF EXISTS `Wychowawca`;
CREATE TABLE `Wychowawca` (
	`ID_wychowawcy` INT(3) NOT NULL AUTO_INCREMENT,
	`ID_nauczyciel` INT(3) NOT NULL,
	PRIMARY KEY (`ID_wychowawcy`)
);

DROP TABLE IF EXISTS `Oceny`;
CREATE TABLE `Oceny` (
	`ID_oceny` INT(3) NOT NULL AUTO_INCREMENT,
	`Wartosc` tinyint(1) NOT NULL,
	`ID_ucznia` INT(3) NOT NULL,
	`ID_nauczyciel` INT(3) NOT NULL,
	`ID_przedmiot` INT(3) NOT NULL,
	`Data` DATE NOT NULL,
	PRIMARY KEY (`ID_oceny`)
);

DROP TABLE IF EXISTS `Klasa`;
CREATE TABLE `Klasa` (
	`ID_klasy` INT(3) NOT NULL AUTO_INCREMENT,
	`Nazwa_klasy` varchar(5) NOT NULL,
	`ID_wychowacy` INT(3) NOT NULL,
	PRIMARY KEY (`ID_klasy`)
);

DROP TABLE IF EXISTS `Obecnosc`;
CREATE TABLE `Obecnosc` (
	`ID_obecnosci` INT(3) NOT NULL AUTO_INCREMENT,
	`Data` DATE NOT NULL,
	`Obecnosc` ENUM('ob', 'nob', 'sp', 'usp') NOT NULL,
	`ID_ucznia` INT(3) NOT NULL,
	`ID_nauczyciel` INT(3) NOT NULL,
	PRIMARY KEY (`ID_obecnosci`)
);

-- 
-- Creating a foreign key for all the tables in DB
-- 

ALTER TABLE `Uczniowie` ADD CONSTRAINT `Uczniowie_fk0` FOREIGN KEY (`ID_klasy`) REFERENCES `Klasa`(`ID_klasy`);

ALTER TABLE `Wychowawca` ADD CONSTRAINT `Wychowawca_fk0` FOREIGN KEY (`ID_nauczyciel`) REFERENCES `Nauczyciele`(`ID_nauczycieli`);

ALTER TABLE `Oceny` ADD CONSTRAINT `Oceny_fk0` FOREIGN KEY (`ID_ucznia`) REFERENCES `Uczniowie`(`ID_ucznia`);

ALTER TABLE `Oceny` ADD CONSTRAINT `Oceny_fk1` FOREIGN KEY (`ID_nauczyciel`) REFERENCES `Nauczyciele`(`ID_nauczycieli`);

ALTER TABLE `Oceny` ADD CONSTRAINT `Oceny_fk2` FOREIGN KEY (`ID_przedmiot`) REFERENCES `Przedmioty`(`ID_przedm`);

ALTER TABLE `Klasa` ADD CONSTRAINT `Klasa_fk0` FOREIGN KEY (`ID_wychowacy`) REFERENCES `Wychowawca`(`ID_wychowawcy`);

ALTER TABLE `Obecnosc` ADD CONSTRAINT `Obecnosc_fk0` FOREIGN KEY (`ID_ucznia`) REFERENCES `Uczniowie`(`ID_ucznia`);

ALTER TABLE `Obecnosc` ADD CONSTRAINT `Obecnosc_fk1` FOREIGN KEY (`ID_nauczyciel`) REFERENCES `Nauczyciele`(`ID_nauczycieli`);

-- 
-- Inserting Data into DB
-- 

-- (NULL, ''),
-- A template for adding each record to `Przedmioty`

LOCK TABLES `Przedmioty` WRITE;
INSERT INTO `Przedmioty` VALUES
(NULL, 'Polski'),
(NULL, 'Matematyka'),
(NULL, 'Angielski'),
(NULL, 'Niemiecki'),
(NULL, 'Chemia'),
(NULL, 'Goegrafia'),
(NULL, 'Fizyka'),
(NULL, 'Biologia'),
(NULL, 'Informatyka'),
(NULL, 'Wychowanie fizyczne'),
(NULL, 'Zajęcia z wychowawcą'),
(NULL, 'Historia'),
(NULL, 'Historia i Społeczeństwo'),
(NULL, 'Religia'),
(NULL, 'Etyka'),
(NULL, 'Wiedza o społeczeństwie'),
(NULL, 'Wychowanie do życia w rodzinie'),
(NULL, 'Technika'),
(NULL, 'Plastyka'),
(NULL, 'Muzyka'),
(NULL, 'Edukacja dla Bezpieczeństwa');
UNLOCK TABLES;

-- (NULL, '', '', '', 0000),
-- A template for adding each record to `Nauczyciele`

LOCK TABLES `Nauczyciele` WRITE;
INSERT INTO `Nauczyciele` VALUES
(NULL, 'Adam', 'Nowak', 'Matematyka', 1975),
(NULL, 'Anna', 'Kowalska', 'Polski', 1990),
(NULL, 'Krzysztof', 'Wiśniewski', 'Angielski', 1980),
(NULL, 'Alicja', 'Dąbrowska', 'Niemiecki', 1985),
(NULL, 'Piotr', 'Lewandowski', 'Chemia', 1972),
(NULL, 'Zofia', 'Wójcik', 'Geografia', 1995),
(NULL, 'Jan', 'Kamiński', 'Fizyka', 1982),
(NULL, 'Maria', 'Kowalczyk', 'Biologia', 1979),
(NULL, 'Tomasz', 'Zieliński', 'Informatyka', 1988),
(NULL, 'Magdalena', 'Szymańska', 'Wychowanie fizyczne', 1998),
(NULL, 'Krzysztof', 'Woźniak', 'Zajęcia z wychowawcą', 1977),
(NULL, 'Małgorzata', 'Kozłowska', 'Historia', 1992),
(NULL, 'Andrzej', 'Jankowski', 'Historia i Społeczeństwo', 1989),
(NULL, 'Joanna', 'Wojciechowska', 'Religia', 1978),
(NULL, 'Marek', 'Kwiatkowski', 'Etyka', 1986),
(NULL, 'Barbara', 'Krawczyk', 'Wiedza o społeczeństwie', 1994),
(NULL, 'Ryszard', 'Walczak', 'Wychowanie do życia w rodzinie', 1984),
(NULL, 'Dorota', 'Kaczmarek', 'Technika', 1991),
(NULL, 'Tadeusz', 'Grabowski', 'Plastyka', 1983),
(NULL, 'Beata', 'Król', 'Muzyka', 1976),
(NULL, 'Jerzy', 'Adamczyk', 'Edukacja dla Bezpieczeństwa', 1981),
(NULL, 'Elżbieta', 'Nowicka', 'Matematyka', 1999),
(NULL, 'Marek', 'Pawlak', 'Polski', 1973),
(NULL, 'Joanna', 'Witkowska', 'Angielski', 1997),
(NULL, 'Robert', 'Marciniak', 'Niemiecki', 1987),
(NULL, 'Krystyna', 'Zając', 'Chemia', 1989),
(NULL, 'Stanisław', 'Kubiak', 'Geografia', 1974),
(NULL, 'Katarzyna', 'Mazur', 'Fizyka', 1988),
(NULL, 'Leszek', 'Kaczmarczyk', 'Biologia', 1996),
(NULL, 'Iwona', 'Wieczorek', 'Informatyka', 1971),
(NULL, 'Paweł', 'Zawadzki', 'Wychowanie fizyczne', 1983),
(NULL, 'Monika', 'Lis', 'Zajęcia z wychowawcą', 1992),
(NULL, 'Grzegorz', 'Kowalczyk', 'Historia', 1977),
(NULL, 'Karolina', 'Sikora', 'Religia', 1986),
(NULL, 'Michał', 'Wójcik', 'Wiedza o społeczeństwie', 1995),
(NULL, 'Aleksandra', 'Górska', 'Technika', 1978),
(NULL, 'Marcin', 'Piotrowski', 'Plastyka', 1984),
(NULL, 'Kamila', 'Kaczmarek', 'Muzyka', 1990),
(NULL, 'Adam', 'Nowak', 'Matematyka', 1982),
(NULL, 'Anna', 'Kowalska', 'Polski', 1991),
(NULL, 'Krzysztof', 'Wiśniewski', 'Angielski', 1986),
(NULL, 'Alicja', 'Dąbrowska', 'Niemiecki', 1980),
(NULL, 'Piotr', 'Lewandowski', 'Chemia', 1994),
(NULL, 'Zofia', 'Wójcik', 'Geografia', 1979),
(NULL, 'Jan', 'Kamiński', 'Fizyka', 1975),
(NULL, 'Maria', 'Kowalczyk', 'Biologia', 1998),
(NULL, 'Tomasz', 'Zieliński', 'Informatyka', 1987),
(NULL, 'Magdalena', 'Szymańska', 'Wychowanie fizyczne', 1981),
(NULL, 'Krzysztof', 'Woźniak', 'Zajęcia z wychowawcą', 1996),
(NULL, 'Małgorzata', 'Kozłowska', 'Historia', 1972),
(NULL, 'Andrzej', 'Jankowski', 'Historia i Społeczeństwo', 1988),
(NULL, 'Joanna', 'Wojciechowska', 'Religia', 1995),
(NULL, 'Marek', 'Kwiatkowski', 'Etyka', 1973),
(NULL, 'Barbara', 'Krawczyk', 'Wiedza o społeczeństwie', 1989),
(NULL, 'Ryszard', 'Walczak', 'Wychowanie do życia w rodzinie', 1997),
(NULL, 'Dorota', 'Kaczmarek', 'Technika', 1985),
(NULL, 'Tadeusz', 'Grabowski', 'Plastyka', 1976),
(NULL, 'Beata', 'Król', 'Muzyka', 1993),
(NULL, 'Jerzy', 'Adamczyk', 'Edukacja dla Bezpieczeństwa', 1984),
(NULL, 'Elżbieta', 'Nowicka', 'Matematyka', 1977),
(NULL, 'Marek', 'Pawlak', 'Polski', 1992),
(NULL, 'Joanna', 'Witkowska', 'Angielski', 1983),
(NULL, 'Robert', 'Marciniak', 'Niemiecki', 1971),
(NULL, 'Krystyna', 'Zając', 'Chemia', 1985),
(NULL, 'Stanisław', 'Kubiak', 'Geografia', 1999),
(NULL, 'Katarzyna', 'Mazur', 'Fizyka', 1974),
(NULL, 'Leszek', 'Kaczmarczyk', 'Biologia', 1990),
(NULL, 'Iwona', 'Wieczorek', 'Informatyka', 1988);
