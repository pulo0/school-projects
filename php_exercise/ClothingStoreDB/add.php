<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_database = 'clothing_store';

$con = new mysqli($db_host, $db_user, $db_password, $db_database)
or die("error encounter on syncing to DB");

$brand = $_POST['brand'];
$gender = $_POST['gender'];
$size = $_POST['size'];
$type = $_POST['type'];
$price = $_POST['price'];
$available = $_POST['available'];


if(isset($available)) {
    $con -> query("insert into clothing_store values(null, '$brand', '$gender', '$size', '$type', '$price', '1')")
      or die("error encounter at query at true");
} else {
    $con -> query("insert into clothing_store values(null, '$brand', '$gender', '$size', '$type', '$price', '0')")
    or die("error encounter at query at false");
} 

$con -> close();

header("Location: addDataForm.html");
?>