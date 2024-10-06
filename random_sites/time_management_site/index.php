<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Zarządzanie Czasem - Strona</title>
</head>

<body>
    <h1 style="text-align: center;">Zarządzanie Czasem</h1>
    <?php
    include 'PHP/db_conn.php';

    $result = $conn->query('select * from zadanie')
        or die('Query failed: ' . mysqli_error($conn));

    $conn->close();

    echo "<table>";

    foreach ($result as $row) {
        echo <<< EOF

            <tr class='row'>
            <td>$row[zadanie_tytul]</td>
            <td class="details" style="display: none">$row[opis]</td>
            <td class="details" id="priority" style="display: none">$row[priorytet_zadania]</td>
            <td class="details" style="display: none">$row[progres_zadania]</td>
            <td class="details" style="display: none">$row[deadline]</td>
            <td><a href='#' class="more">rozwiń</a></td>
            <td><a href='#' class="done">ukończone</a></td>
            <td><a href='PHP/del_item.php?id=$row[id]' class="delete">usuń</a></td>
            <td><a href='PHP/mod_item.php?id=$row[id]' class="modify">modyfikuj</a></td>
        EOF;
    }

    echo "</table>";

    ?>
    <script src="JS/script.js"></script>
</body>
</html>