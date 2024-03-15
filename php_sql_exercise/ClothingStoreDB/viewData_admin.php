<link rel="stylesheet" href="CSS/viewStyle.css">
<h1 style="color: white;">Clothing Store Database - Admin Side</h1>
<h2><a href="addDataForm.html" class="add">Add</a></h2>
<h2><a href="index.php" class="menu">Login</a></h2>

<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_database = 'clothing_store';

    $con = new mysqli($db_host, $db_user, $db_password, $db_database)
    or die("error encounter on syncing to DB");

    $result = $con -> query("select * from clothing_store")
    or die("break in result query");

    echo " 
        <table>
            <th class='first'>ID</th>
            <th>Brand</th>
            <th>Gender</th>
            <th>Size</th>
            <th>Type</th>
            <th>Price</th>
            <th>Available</th>
            <th>Delete</th>
            <th class='last'>Modification</th>
    ";

    while (($col = $result -> fetch_assoc())) {
        $whenAvailablevailable = $col['available'] ? "Available" : "Unavailable";
        echo "
            <tr>
            <td>$col[id]</td>
            <td>$col[brand]</td>
            <td>$col[gender]</td>
            <td>$col[size]</td>
            <td>$col[type]</td>
            <td>$col[price]$</td>
            <td>$whenAvailablevailable</td>
            <td><a href='delete.php?id=$col[id]'>Delete</a></td>
            <td><a href='modify.php?id=$col[id]'>Modify</a></td>
            </tr>
        ";
    }

?>