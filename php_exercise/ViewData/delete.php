<?php
    $id = $_GET['id'];
    $con = new mysqli('localhost', 'root', '', 'school')
    or die('error encounted');

    $con -> query("delete from class where id=$id")
    or die("error again");
    $con -> close();
    
    header("Location: view.php");
?>
