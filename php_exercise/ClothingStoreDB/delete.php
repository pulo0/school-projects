<?php
$id = $_GET['id'];

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
or die("error encounter on syncing to DB");

$con -> query("delete from clothing_store where id=$id");
$con -> close();

header("Location: viewData.php");

?>