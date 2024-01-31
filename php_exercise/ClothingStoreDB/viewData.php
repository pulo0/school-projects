<link rel="stylesheet" href="CSS/viewStyle.css">
<h1>Clothing Store Database</h1>
<h2><a href="addDataForm.html" class="add">Add</a></h2>

<?php

$con = new mysqli('127.0.0.1', 'root', '', 'clothing_store')
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