<?php
include 'db_connect.php';

$surname = filter_input(INPUT_POST, 'nazwisko', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'imie', FILTER_SANITIZE_SPECIAL_CHARS);
$dyscyplina = filter_input(INPUT_POST, 'dyscyplina', FILTER_SANITIZE_SPECIAL_CHARS);
$result = filter_input(INPUT_POST, 'wynik', FILTER_SANITIZE_SPECIAL_CHARS);
$place = filter_input(INPUT_POST, 'miejsce', FILTER_SANITIZE_SPECIAL_CHARS);
$year = filter_input(INPUT_POST, 'rok', FILTER_SANITIZE_NUMBER_INT);

try {
    $stmt = $conn->prepare('INSERT INTO polscy_olimpijczycy VALUES (NULL, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('sssssi', $surname, $name, $dyscyplina, $result, $place, $year);
    $stmt->execute();
} catch (Exception $e) {
    echo 'Query error' . $e->getMessage();
}

$conn->close();

header('Location: ../index.php');
