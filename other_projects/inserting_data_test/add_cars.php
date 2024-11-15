<?php
include 'db_conn.php';

// Cars 
$ownerId = $_POST['owner-id'];
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];

$stmt = $conn->prepare("INSERT INTO cars VALUES (NULL, ?, ?, ?, ?, ?)");
$stmt->bind_param('issis', $ownerId, $make, $model, $year, $color);
$stmt->execute();

$conn->close();

header("Location: index.php");
