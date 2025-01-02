<?php
echo "Dodano rezerwację do bazy";

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'baza';
$conn = mysqli_connect($hostname, $username, $password, $database);

$date = $_POST['date'];
$people_amount = $_POST['people-amount'];
$phone = $_POST['phone'];

$stmt = $conn->prepare('INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES (?, ?, ?)');
$stmt->bind_param('sis', $date, $people_amount, $phone);
$stmt->execute();

$conn->close();

?>