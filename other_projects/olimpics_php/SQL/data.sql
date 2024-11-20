CREATE DATABASE IF NOT EXISTS olimpiada;

USE olimpiada;

CREATE TABLE IF NOT EXISTS polscy_olimpijczycy (
    id int unsigned primary key auto_increment not null,
    nazwisko varchar(60) not null,
    imie varchar(60) not null,
    dyscyplina varchar(80) not null,
    wynik text not null,
    miejsce varchar(60) not null,
    rok year not null
);

INSERT INTO polscy_olimpijczycy (nazwisko, imie, dyscyplina, wynik, miejsce, rok) VALUES
('Abisiak', 'Jadwiga', 'Siatkówka', 'Brąz', 'Tokio', 1964),
('Anczok', 'Zygmunt', 'Piłka nożna', 'Złoto', 'Monachium', 1972),
('Bebel', 'Bronisław', 'Siatkówka', 'Złoto', 'Montreal', 1976),
('Chychła', 'Zygmunt', 'Boks - waga półśrednia', 'Złoto', 'Helsinki', 1952),
('Czyżowicz', 'Maciej', 'Pięciobój nowoczesny', 'Złoto', 'Barcelona', 1992),
('Ćmikiewicz', 'Lesław', 'Piłka nożna (pomocnik)', 'Złoto', 'Monachium', 1972),
('Dopierała', 'Marek', 'Kajakarrstwo', 'Srebro', 'Seul', 1988),
('Dzięcioł-Marcinkiewicz', 'Iwona', 'Łucznictwo', 'Brąz', 'Atlanta', 1996),
('Dudziak', 'Marian', 'Lekkoatletyka', 'Srebro', 'Tokio', 1964),
('Fafiński', 'Jacek', 'Zapasy', 'Srebro', 'Atlanta', 1996)