<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'olimpiada';

    try {
        $conn = mysqli_connect($hostname, $username, $password, $database);
    } catch (Exception $e) {
        echo 'Connection error' . $e -> getMessage();
    }
?>