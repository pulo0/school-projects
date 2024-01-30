<?php

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
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