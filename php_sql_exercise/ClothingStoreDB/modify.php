<link rel="stylesheet" href="CSS/modifyStyle.css">
<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_database = 'clothing_store';

    $con = new mysqli($db_host, $db_user, $db_password, $db_database)
    or die("error encounter on syncing to DB");

    $id = $_GET['id'];
    $result = $con -> query("select * from clothing_store where id=$id")
    or die("break in result query");
    $con -> close();

    while ($record = $result -> fetch_assoc()) {
        echo "<form method='POST' action='modifyAdd.php?id=$id'>";
        echo "<table>
            <tr>
                <th>id</th>
                <th>brand</th>
                <th>gender</th>
                <th>size</th>
                <th>type</th>
                <th>price</th>
                <th>available</th>
            </tr>
            <tr?>
                <td><input type='text' name='id' value='$record[id]'readonly></td>
                <td><input type='text' name='brand' value='$record[brand]'></td>
                <td><input type='text' name='gender' value='$record[gender]'></td>
                <td><input type='text' name='size' value='$record[size]'></td>
                <td><input type='text' name='type' value='$record[type]'></td>
                <td><input type='number' min='0' step='0.01' name='price' value='$record[price]'></td>
                <td><input type='checkbox' name='available' value='$record[available]'></td>
            </tr>
        ";
    }
    echo "<input type='submit' class='submitButton' value='modify'>
    </form>";
?>