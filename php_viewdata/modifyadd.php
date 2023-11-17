<?php
$id = $_GET['id'];
$surname = $_POST['surname'];
$name = $_POST['name'];

$con = new mysqli('localhost', 'root', '', 'school') or die("error");
$con -> query("update class set surname='$surname' where id='$id'") or die("yup, erroror");
$con -> query("update class set name='$name' where id='$id'") or die("yup, erro again");
$con -> close();
header("Location: view.php")
?>