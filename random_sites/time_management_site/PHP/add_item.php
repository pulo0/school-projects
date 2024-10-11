<?php
include 'db_conn.php';

if (isset($_POST['dodaj'])) {
    $title = $_POST['zadanie_tytul'];
    $desc = $_POST['opis'];
    $priority = $_POST['priorytet_zadania'];
    $progress = $_POST['progres_zadania'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO zadanie VALUES (NULL, '$title', '$desc', '$priority', '$progress', '$deadline');";
    $conn->query($sql)
        or die('Query error: ' . mysqli_error($conn));
    $conn->close();
    header("Location: ../index.php");
}
?>