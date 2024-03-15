<?php
    $id = $_GET['id'];
    $brand = $_POST['brand'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $available = $_POST['available'];
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_database = 'clothing_store';

    $con = new mysqli($db_host, $db_user, $db_password, $db_database) or die ("error encounter on syncing to DB");
    $con -> query("update clothing_store set brand='$brand' where id='$id'") or die ("error q2");
    $con -> query("update clothing_store set gender='$gender' where id='$id'") or die ("error q3");
    $con -> query("update clothing_store set size='$size' where id='$id'") or die ("error q4");
    $con -> query("update clothing_store set type='$type' where id='$id'") or die ("error q5");
    $con -> query("update clothing_store set price='$price' where id='$id'") or die ("error q6");

    if(isset($available)) {
        $con -> query("update clothing_store set available='1' where id='$id'")
        or die("u died at 1");
    } else {
        $con -> query("update clothing_store set available='0' where id='$id'")
        or die("u died at 0");
    } 
    $con -> close();

    header("Location: viewData_admin.php")
?>