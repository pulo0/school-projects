<?php

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
or die("nope, not this one");

$marka = $_POST['marka'];
$plec = $_POST['plec'];
$rozmiar = $_POST['rozmiar'];
$rodzaj = $_POST['rodzaj'];
$cena = $_POST['cena'];
$dostepny = $_POST['dostepny'];


if(isset($dostepny)) {
    $con -> query("insert into sklep_odziezowy values(null, '$marka', '$plec', '$rozmiar', '$rodzaj', '$cena', '1')")
      or die("u died at 1");
} else {
    $con -> query("insert into sklep_odziezowy values(null, '$marka', '$plec', '$rozmiar', '$rodzaj', '$cena', '0')")
    or die("u died at 0");
} 

$con -> close();

header("Location: dodajform.html");
?>