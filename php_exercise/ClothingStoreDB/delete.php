<?php
$id = $_GET['id'];

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
or die("die");

$con -> query("delete from sklep_odziezowy where id=$id");
$con -> close();

header("Location: viewData.php");

?>