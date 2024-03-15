<?php
$id = $_GET['id'];
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_database = 'clothing_store';

$con = new mysqli($db_host, $db_user, $db_password, $db_database)
or die("error encounter on syncing to DB");

$con -> query("update from clothing_store set available='0' where id=$id");
$con -> close();

header("Location: viewData_client.php");

?>