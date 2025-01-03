<?php
$hostname = 'localhost';
$username = 'test';
$password = '123';
$db = 'rzeki';
$conn = mysqli_connect($hostname, $username, $password, $db) or die(error_reporting());
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header class="right">
        <img src="pliki/obraz1.png" alt="Mapa Polski">
    </header>
    <header class="left">
        <h1>Rzeki w województwie dolnośląskim</h1>
    </header>
    <nav>
        <form method="post">
            <input type="radio" name="menu" id="all" value="all">
            <label for="all" class="menu">Wszystkie</label>
            <input type="radio" name="menu" id="warning-state" value="warning-state">
            <label for="warning-state" class="menu">Ponad stan ostrzegawczy</label>
            <input type="radio" name="menu" id="alarm-state" value="alarm-state">
            <label for="alarm-state" class="menu">Ponad stan alarmowy</label>
            <button type="submit" name="submitted">Pokaż</button>
        </form>
    </nav>
    <main>
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <thead>
                <th>Wodomierz</th>
                <th>Rzeka</th>
                <th>Ostrzegawczy</th>
                <th>Alarmowy</th>
                <th>Aktualny</th>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['submitted'])) {
                    $menu_type = $_POST['menu'];
                    if ($menu_type == 'all') {
                        $sql = mysqli_query($conn, 'SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary  ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE "2022-05-05"');
                    } else if ($menu_type == 'warning-state') {
                        $sql = mysqli_query($conn, 'SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary  ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE "2022-05-05" AND pomiary.stanWody > wodowskazy.stanOstrzegawczy');
                    } else {
                        $sql = mysqli_query($conn, 'SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary  ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru LIKE "2022-05-05" AND pomiary.stanWody > wodowskazy.stanAlarmowy');
                    }

                    while ($row = mysqli_fetch_assoc($sql)) {
                        echo <<< EOF
                                <tr>
                                    <td>$row[nazwa]</td>
                                    <td>$row[rzeka]</td>
                                    <td>$row[stanOstrzegawczy]</td>
                                    <td>$row[stanAlarmowy]</td>
                                    <td>$row[stanWody]</td>
                                </tr>
                            EOF;
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
    <aside>
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
        $sql_query = mysqli_query($conn, 'SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru');
        while ($row = mysqli_fetch_row($sql_query)) {
            echo "<p>$row[0]: $row[1]</p>";
        }
        ?>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
        <img src="pliki/obraz2.jpg" alt="rzeka">
    </aside>
    <footer>
        <p>Stronę wykonał: pulo0</p>
    </footer>
</body>

</html>

<?php
mysqli_close($conn);
?>