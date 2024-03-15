<link rel="stylesheet" href="CSS/viewStyle.css">
<h1 style="color: white;">Clothing Store Database</h1>
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
            <th class='first'>Brand</th>
            <th>Gender</th>
            <th>Size</th>
            <th>Type</th>
            <th>Price</th>
            <th class='last'>Reserve</th>";

    while (($col = $result -> fetch_assoc())) {
        $whenAvailablevailable = $col['available'] ? "Available" : "Unavailable";
        if($whenAvailablevailable === 'Available') {
            echo "
            <tr>
            <td>$col[brand]</td>
            <td>$col[gender]</td>
            <td>$col[size]</td>
            <td>$col[type]</td>
            <td>$col[price]$</td>
            <td><a href='reserve.php?id=$col[id]'>Reserve</a></td>
            </tr>";
        }
    }
?>