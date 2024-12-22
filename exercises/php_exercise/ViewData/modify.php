<?php
    $con = new mysqli('localhost', 'root', '', 'school')
    or die("error my friend");

    $id = $_GET["id"];
    $result = $con -> query("select * from class where id=$id")
    or die("break in result query");
    $con -> close();

    while($record = $result -> fetch_assoc()) {
        echo "<form method = 'POST' action = 'modifyadd.php?id=$id'>";
        echo "<table>
            <tr>
                <th>id</th>
                <th>surname</th>
                <th>name</th>
            </tr>
            <tr>
                <td><input type='text' name='id' value='$record[id] readonly'></td>
                <td><input type='text' name='surname' value='$record[surname]'></td>
                <td><input type='text' name='name' value='$record[name]'></td>
            </tr>
            </table>";
    };
    echo "<input type='submit' value='modify'>
    </form>";
?>