<!-- This time I'll use procedural style of declaring methods in PHP, not OOP one -->
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'motory';
$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <img src="pliki/motor.png" alt="motocykl">
    <header>
        <h1>Motocykle - moja pasja</h1>
    </header>
    <main>
        <h2>Gdzie pojechać?</h2>
        <dl>
            <?php
            $sql_query = mysqli_query($conn, 'SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM wycieczki INNER JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id');
            while ($row = mysqli_fetch_assoc($sql_query)) {
                echo <<< EOF
                        <dt>$row[nazwa] rozpoczyna się w $row[poczatek], <a href='pliki/$row[zrodlo].jpg'>zobacz zdjęcie</a></dt>
                        <dd>$row[opis]</dd>
                    EOF;
            }
            ?>
        </dl>
    </main>
    <aside class="right-upper">
        <h2>Co kupić?</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
        </ol>
    </aside>
    <aside class="right-lower">
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek:
            <?php
            $sql_query = mysqli_query($conn, 'SELECT COUNT(*) FROM wycieczki');
            $answer = mysqli_fetch_array($sql_query);
            echo "$answer[0]";
            ?>
        </p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </aside>
    <footer>
        <p>Stronę wykonał: pulo0</p>
    </footer>
</body>
<?php
mysqli_close($conn);
?>

</html>