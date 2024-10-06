<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'zarz_czas';

    try {
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    } catch (Exception $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

?>