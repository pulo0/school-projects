<?php
$id = $_GET['id'];
$marka = $_POST['marka'];
$plec = $_POST['plec'];
$rozmiar = $_POST['rozmiar'];
$rodzaj = $_POST['rodzaj'];
$cena = $_POST['cena'];
$dostepny = $_POST['dostepny'];

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez') or die ("error");
$con -> query("update sklep_odziezowy set marka='$marka' where id='$id'") or die ("error q2");
$con -> query("update sklep_odziezowy set plec='$plec' where id='$id'") or die ("error q3");
$con -> query("update sklep_odziezowy set rozmiar='$rozmiar' where id='$id'") or die ("error q4");
$con -> query("update sklep_odziezowy set rodzaj='$rodzaj' where id='$id'") or die ("error q5");
$con -> query("update sklep_odziezowy set cena='$cena' where id='$id'") or die ("error q6");

if(isset($dostepny)) {
    $con -> query("update sklep_odziezowy set dostepny='1' where id='$id'")
    or die("u died at 1");
} else {
    $con -> query("update sklep_odziezowy set dostepny='0' where id='$id'")
    or die("u died at 0");
} 
$con -> close();

header("Location: viewData.php")
?>