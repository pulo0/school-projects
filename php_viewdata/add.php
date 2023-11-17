<?php
    $surname = $_POST['surname'];
    $name = $_POST['name'];

    $con = new mysqli('localhost', 'root', '', 'school')
    or die("error");

    $con -> query("insert into class values(null, '$surname', '$name')")
    or die("yup, you messed up");
    
    $con -> close();

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: adding.html");
?>