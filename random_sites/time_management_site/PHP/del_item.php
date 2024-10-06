<?php
include 'db_conn.php';

$id = $_GET['id'];

$sql = "delete from zadanie where id = {$id}";

$conn -> query($sql) or die('Query failed: ' . mysqli_error($conn));
$conn -> close();
header('Location: ../index.php');