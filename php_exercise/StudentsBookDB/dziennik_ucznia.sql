-- Accessing to a database or creating one if doesn't exist

DROP DATABASE IF EXISTS `dziennik_ucznia`;
CREATE DATABASE dziennik_ucznia;
USE dziennik_ucznia;

--
-- Creating tables for the DB `dziennik_ucznia`
--

DROP TABLE IF EXISTS `Uczniowie`;
CREATE TABLE `Uczniowie` (
	`ID_ucznia` INT(3) NOT NULL AUTO_INCREMENT,
	`Imie` varchar(30) NOT NULL,
	`Nazwisko` varchar(30) NOT NULL,
	`PESEL` char(11) NOT NULL,
	`Miasto` varchar(20) NOT NULL,
	`Ulica` varchar(40) NOT NULL,
	`NR_domu` smallint(3) NOT NULL,
	`NR_miesz` smallint(3) NOT NULL,
	`Kod_pocz` varchar(6) NOT NULL,
	`Kraj` varchar(30) NOT NULL,
	`Data_ur` DATE NOT NULL,
	`ID_klasy` INT(3) NOT NULL,
	PRIMARY KEY (`ID_ucznia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Przedmiot`;
CREATE TABLE `Przedmioty` (
	`ID_przedm` INT(3) NOT NULL AUTO_INCREMENT,
	`Nazwa` varchar(40) NOT NULL,
	PRIMARY KEY (`ID_przedm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Nauczyciele`;
CREATE TABLE `Nauczyciele` (
	`ID_nauczycieli` INT(3) NOT NULL AUTO_INCREMENT,
	`Imie` varchar(30) NOT NULL,
	`Nazwisko` varchar(30) NOT NULL,
	`Przedmiot` varchar(40) NOT NULL,
	`Rok_rozp` year NOT NULL,
	PRIMARY KEY (`ID_nauczycieli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Wychowawca`;
CREATE TABLE `Wychowawca` (
	`ID_wychowawcy` INT(3) NOT NULL AUTO_INCREMENT,
	`ID_nauczyciel` INT(3) NOT NULL,
	PRIMARY KEY (`ID_wychowawcy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Oceny`;
CREATE TABLE `Oceny` (
	`ID_oceny` INT(3) NOT NULL AUTO_INCREMENT,
	`Wartosc` tinyint(1) NOT NULL,
	`ID_ucznia` INT(3) NOT NULL,
	`ID_nauczyciel` INT(3) NOT NULL,
	`ID_przedmiot` INT(3) NOT NULL,
	`Data` DATE NOT NULL,
	PRIMARY KEY (`ID_oceny`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Klasa`;
CREATE TABLE `Klasa` (
	`ID_klasy` INT(3) NOT NULL AUTO_INCREMENT,
	`Nazwa_klasy` varchar(5) NOT NULL,
	`ID_wychowacy` INT(3) NOT NULL,
	PRIMARY KEY (`ID_klasy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `Obecnosc`;
CREATE TABLE `Obecnosc` (
	`ID_obecnosci` INT(3) NOT NULL AUTO_INCREMENT,
	`Data` DATE NOT NULL,
	`Obecnosc` ENUM('ob', 'nob', 'sp', 'usp') NOT NULL,
	`ID_ucznia` INT(3) NOT NULL,
	`ID_nauczyciel` INT(3) NOT NULL,
	PRIMARY KEY (`ID_obecnosci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- (NULL, ),
-- A template for adding each record to `Wychowawca`

LOCK TABLE `Wychowawca` WRITE;
INSERT INTO `Wychowawca` VALUES
(NULL, 1),
(NULL, 48),
(NULL, 15),
(NULL, 19),
(NULL, 35),
(NULL, 10),
(NULL, 23),
(NULL, 50),
(NULL, 13),
(NULL, 7),
(NULL, 46),
(NULL, 21),
(NULL, 12),
(NULL, 32),
(NULL, 28),
(NULL, 2);

-- (NULL, '', ),
-- A template for adding each record to `Klasa`

LOCK TABLE `Klasa` WRITE;
INSERT INTO `Klasa` VALUES
(NULL, '1A', 1),
(NULL, '1B', 2),
(NULL, '2A', 12),
(NULL, '2B', 15),
(NULL, '3A', 3),
(NULL, '3B', 5),
(NULL, '4A', 4),
(NULL, '4B', 7),
(NULL, '5A', 16),
(NULL, '5B', 13),
(NULL, '6A', 14),
(NULL, '6B', 7),
(NULL, '7A', 8),
(NULL, '7B', 9),
(NULL, '8A', 10),
(NULL, '8B', 11);                                                                                                                                                                                 

LOCK TABLE `Uczniowie` WRITE;
INSERT INTO `Uczniowie` VALUES
(NULL, 'Jan', 'Nowak', '91121012345', 'Warszawa', 'Polna', 11, 5, '00-001', 'Polska', '2011-05-20', 1),
(NULL, 'Anna', 'Kowalska', '92032023456', 'Kraków', 'Krakowska', 3, 3, '30-001', 'Polska', '2013-08-12', 14),
(NULL, 'Piotr', 'Wiśniewski', '93111534567', 'Gdańsk', 'Gdańska', 2, 10, '80-001', 'Polska', '2012-11-04', 13),
(NULL, 'Katarzyna', 'Dąbrowska', '94022845678', 'Łódź', 'Piotrkowska', 9, 2, '90-001', 'Polska', '2014-02-28', 13),
(NULL, 'Michał', 'Lewandowski', '95101556789', 'Wrocław', 'Wrocławska', 14, 7, '50-001', 'Polska', '2015-07-15', 13),
(NULL, 'Magdalena', 'Woźniak', '96112067890', 'Poznań', 'Poznańska', 1, 1, '60-001', 'Polska', '2016-04-10', 5),
(NULL, 'Krzysztof', 'Kowalczyk', '97122378901', 'Szczecin', 'Szczecińska', 9, 4, '70-001', 'Polska', '2017-09-23', 2),
(NULL, 'Natalia', 'Zielińska', '98013189012', 'Bydgoszcz', 'Bydgoska', 5, 8, '80-001', 'Polska', '2011-10-31', 8),
(NULL, 'Bartosz', 'Szymański', '99060790123', 'Katowice', 'Katowicka', 15, 6, '40-001', 'Polska', '2013-06-07', 4),
(NULL, 'Aleksandra', 'Wójcik', '00121901234', 'Gdynia', 'Gdyńska', 2, 9, '81-001', 'Polska', '2012-12-19', 16),
(NULL, 'Viktor', 'Ivanov', '02010112345', 'Kijów', 'Kijowska', 11, 5, '00-100', 'Ukraina', '2011-05-20', 15),
(NULL, 'Olena', 'Petrova', '03020223456', 'Lwów', 'Lwowska', 15, 3, '30-200', 'Ukraina', '2013-08-12', 5),
(NULL, 'Ivan', 'Kovalenko', '04030334567', 'Charków', 'Charkowska', 20, 10, '80-300', 'Ukraina', '2012-11-04', 9),
(NULL, 'Dmytro', 'Sidorov', '05040445678', 'Donieck', 'Doniecka', 30, 2, '90-400', 'Ukraina', '2014-02-28', 6),
(NULL, 'Elena', 'Kuznetsova', '06050556789', 'Odessa', 'Odeska', 40, 7, '50-500', 'Ukraina', '2015-07-15', 14),
(NULL, 'Pavol', 'Novak', '07060667890', 'Bratysława', 'Bratysławska', 25, 1, '60-600', 'Słowacja', '2016-04-10', 11),
(NULL, 'Jana', 'Kováčová', '08070778901', 'Koszyce', 'Koszycka', 35, 4, '70-700', 'Słowacja', '2017-09-23', 4),
(NULL, 'Jakub', 'Horváth', '09080889012', 'Preszów', 'Preszowska', 5, 8, '80-800', 'Słowacja', '2011-10-31', 14),
(NULL, 'Zuzana', 'Nagyová', '10100990123', 'Nitra', 'Nitriańska', 15, 6, '40-900', 'Słowacja', '2013-06-07', 7),
(NULL, 'Peter', 'Tóth', '11111001234', 'Trnawa', 'Trnawska', 20, 9, '81-100', 'Słowacja', '2012-12-19', 7),
(NULL, 'Kamil', 'Zawadzki', '05111212345', 'Warszawa', 'Marszałkowska', 12, 7, '00-100', 'Polska', '2015-06-12', 2),
(NULL, 'Paulina', 'Kamińska', '06121223456', 'Kraków', 'Piastowska', 18, 5, '30-200', 'Polska', '2016-09-01', 7),
(NULL, 'Dominik', 'Nowakowski', '07113034567', 'Gdańsk', 'Narutowicza', 22, 3, '80-300', 'Polska', '2017-08-14', 2),
(NULL, 'Wiktoria', 'Jankowska', '08110245678', 'Łódź', 'Sienkiewicza', 29, 11, '90-400', 'Polska', '2011-01-30', 2),
(NULL, 'Adam', 'Kowal', '09120756789', 'Wrocław', 'Grunwaldzka', 33, 9, '50-500', 'Polska', '2012-10-22', 10),
(NULL, 'Karolina', 'Kaczmarek', '10080567890', 'Poznań', 'Dąbrowskiego', 37, 14, '60-600', 'Polska', '2013-07-04', 9),
(NULL, 'Mateusz', 'Zieliński', '11121778901', 'Szczecin', 'Wojska Polskiego', 3, 2, '70-700', 'Polska', '2014-12-27', 10),
(NULL, 'Zuzanna', 'Sawicka', '12120889012', 'Bydgoszcz', 'Kopernika', 8, 6, '80-800', 'Polska', '2015-05-19', 8),
(NULL, 'Kacper', 'Adamski', '13020190123', 'Katowice', 'Słowackiego', 16, 11, '40-900', 'Polska', '2016-04-09', 11),
(NULL, 'Natalia', 'Krawczyk', '14070901234', 'Gdynia', 'Leśna', 21, 7, '81-100', 'Polska', '2017-03-22', 12),
(NULL, 'Bartłomiej', 'Górski', '15071012345', 'Warszawa', 'Nowogrodzka', 27, 4, '00-200', 'Polska', '2011-09-15', 12),
(NULL, 'Julia', 'Piotrowska', '16071223456', 'Kraków', 'Wielopole', 31, 8, '30-300', 'Polska', '2012-02-11', 4),
(NULL, 'Maciej', 'Grabowski', '17011134567', 'Gdańsk', 'Długa', 36, 13, '80-400', 'Polska', '2013-12-29', 7),
(NULL, 'Oliwia', 'Michalska', '18081545678', 'Łódź', 'Narutowicza', 39, 10, '90-500', 'Polska', '2014-11-23', 4),
(NULL, 'Kamil', 'Sikorski', '19080856789', 'Wrocław', 'Reymonta', 2, 3, '50-600', 'Polska', '2015-10-18', 6),
(NULL, 'Nadia', 'Dudek', '20021167890', 'Poznań', 'Żeromskiego', 6, 5, '60-700', 'Polska', '2016-06-05', 5),
(NULL, 'Kornelia', 'Adamczyk', '21072378901', 'Szczecin', 'Mickiewicza', 11, 9, '70-800', 'Polska', '2017-04-13', 3),
(NULL, 'Szymon', 'Witkowski', '22052389012', 'Bydgoszcz', 'Kościuszki', 17, 12, '80-900', 'Polska', '2011-12-25', 2),
(NULL, 'John', 'Smith', '95040312345', 'Warszawa', 'Mazowiecka', 10, 5, '00-001', 'Wielka Brytania', '2012-03-15', 1),
(NULL, 'Emma', 'Johnson', '93121223456', 'Kraków', 'Krakowska', 15, 3, '30-001', 'Stany Zjednoczone', '2014-07-20', 11),
(NULL, 'Michael', 'Williams', '94052034567', 'Gdańsk', 'Gdańska', 20, 10, '80-001', 'Kanada', '2013-11-10', 15),
(NULL, 'Sophia', 'Brown', '96072445678', 'Łódź', 'Piotrkowska', 30, 2, '90-001', 'Australia', '2015-05-05', 2),
(NULL, 'William', 'Taylor', '98101556789', 'Wrocław', 'Wrocławska', 40, 7, '50-001', 'Irlandia', '2016-09-18', 15),
(NULL, 'Neil', 'Anderson', '99123067890', 'Poznań', 'Poznańska', 25, 1, '60-001', 'Nowa Zelandia', '2011-12-03', 2),
(NULL, 'James', 'Wilson', '97012378901', 'Szczecin', 'Szczecińska', 35, 4, '70-001', 'Afryka Południowa', '2017-02-28', 1),
(NULL, 'Ava', 'Miller', '00013189012', 'Bydgoszcz', 'Bydgoska', 5, 8, '80-001', 'Zjednoczone Emiraty Arabskie', '2012-08-19', 15),
(NULL, 'Alexander', 'Davis', '02100790123', 'Katowice', 'Katowicka', 15, 6, '40-001', 'Stany Zjednoczone', '2013-04-17', 1),
(NULL, 'Mia', 'Jones', '04121901234', 'Gdynia', 'Gdyńska', 20, 9, '81-001', 'Kanada', '2014-11-25', 15),
(NULL, 'Benjamin', 'Wilson', '05111212345', 'Warszawa', 'Marszałkowska', 12, 7, '00-100', 'Wielka Brytania', '2015-06-12', 13),
(NULL, 'Charlotte', 'Moore', '06121223456', 'Kraków', 'Piastowska', 18, 5, '30-200', 'Australia', '2016-09-01', 16);

LOCK TABLE `Oceny` WRITE;
INSERT INTO `Oceny` VALUES
(NULL, 5, 1, 1, 1, '2011-05-12'),
(NULL, 4, 2, 2, 2, '2012-07-23'),
(NULL, 3, 3, 3, 3, '2013-09-05'),
(NULL, 6, 4, 4, 4, '2014-10-17'),
(NULL, 5, 5, 5, 5, '2015-12-21'),
(NULL, 4, 1, 6, 6, '2016-03-04'),
(NULL, 3, 2, 7, 7, '2017-04-15'),
(NULL, 6, 3, 8, 8, '2011-06-27'),
(NULL, 5, 4, 9, 9, '2012-08-09'),
(NULL, 4, 5, 10, 10, '2013-10-12');