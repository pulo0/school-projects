<?php
include 'db_conn.php';

// Owner
$lastName = $_POST['last_name'];
$firstName = $_POST['first_name'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO owners VALUES (NULL, ?, ?, ?)");
$stmt->bind_param('sss', $firstName, $lastName, $email);
$stmt->execute();

$conn->close();

header("Location: index.php");
