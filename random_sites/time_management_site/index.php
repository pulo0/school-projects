<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>TODO</title>
</head>

<body>
    <ul>
        <h1 style="text-align: center;">TODO List</h1>
        <div class="priority-legend">
            <div>
                <div class="low"></div>
                <span>niski</span>
            </div>
            <div>
                <div class="medium"></div>
                <span>średni</span>
            </div>
            <div>
                <div class="important"></div>
                <span>ważny</span>
            </div>

        </div>

    </ul>
    <?php
    include 'PHP/db_conn.php';

    $result = $conn->query('select * from zadanie')
        or die('Query failed: ' . mysqli_error($conn));

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
    <div class='open-parent'>
        <button class='open-new' id='open-new' onclick="onOpen()">Utwórz nowe TODO</button>
    </div>

    <table id='add-form' style="display: none;">
        <form action="PHP/add_item.php" method="post">
            <thead>
                <th>Tytuł</th>
                <th>Opis</th>
                <th>Poziom priorytetu</th>
                <th>Progres zadania</th>
                <th>Deadline</th>
                <th>Dodaj</th>
            </thead>
            <tr>
                <td><input type="text" name="zadanie_tytul"></td>
                <td><input type="text" name="opis"></td>
                <td>
                    <select name="priorytet_zadania">
                        <option value="niski">niski</option>
                        <option value="sredni">średni</option>
                        <option value="wazny">ważny</option>
                    </select>
                </td>
                <td>
                    <select name="progres_zadania">
                        <option value="w trakcie">w trakcie</option>
                        <option value="wykonane">wykonane</option>
                    </select>
                </td>
                <td><input type="datetime-local" name="deadline"></td>
                <td><input type="submit" value="Dodaj" name="dodaj"></td>
            </tr>
        </form>
    </table>
    <script src="JS/open.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>