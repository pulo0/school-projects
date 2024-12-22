<?php
session_start();


if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pswd = $_POST['password'];
    
    if($username === "Administrator" && $pswd === "ZAQ!2wsx") {
        $_SESSION['Administrator'] = true;
        header("Location: viewData_admin.php");

    } else {
        echo "Please again. Wrong password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/formDataStyle.css">
    <title>Login in - Clothing Store DB</title>
</head>
<body>
    <div class="login-container">
    <h1>Login Site</h1>
        <form method="post" action="index.php">
            <span>Enter Username:<input 
            type="text" 
            name="username" 
            placeholder=" "></span>
            <span>Enter Password:<input 
            type="password" 
            id="password"
            name="password" 
            placeholder=" "></span>
            <span>See Password:<input 
            type="checkbox" 
            placeholder=" "
            onclick="showFunc()"></span>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <h2><a href="viewData_client.php">As Guest</a></h2>
    <script src="JS/see_pswd.js"></script>
</body>
</html>