
CREATE DATABASE CarDatabase;

USE CarDatabase;

CREATE TABLE owners (
    owner_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100)
);

CREATE TABLE cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    owner_id INT,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    color VARCHAR(30),
    FOREIGN KEY (owner_id) REFERENCES owners(owner_id)
);


INSERT INTO owners (first_name, last_name, email) VALUES
('Jan', 'Kowalski', 'jan.kowalski@example.com'),
('Anna', 'Nowak', 'anna.nowak@example.com'),
('Piotr', 'Wiśniewski', 'piotr.wisniewski@example.com');


INSERT INTO cars (owner_id, make, model, year, color) VALUES
(1, 'Toyota', 'Corolla', 2015, 'Czarny'),
(2, 'Honda', 'Civic', 2018, 'Biały'),
(3, 'Ford', 'Focus', 2012, 'Niebieski');