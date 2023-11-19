<h1 style="text-align: center;">ViewData</h1>
<?php
    $con = new mysqli('localhost', 'root', '', 'school')
    or die('You broke the database');

    $result = $con -> query("select * from class")
    or die("second broke it");
    $con -> close();
    while(($col = $result -> fetch_assoc()) !== null) {
        echo "
            <tr>
            <td>$col[id]</td>
            <td>$col[surname]</td>
            <td>$col[name]</td>
            <td><a href='delete.php?id=$col[id]'>delete</a></td>
            <td><a href='modify.php?id=$col[id]'>modify</a></td>
            </tr><br>
            ";
        }
?>
<h3><a href="add.php">Add</a></h3>