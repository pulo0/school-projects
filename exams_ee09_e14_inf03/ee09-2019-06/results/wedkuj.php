<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php

            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'wedkowanie';

            try {
                $conn = mysqli_connect($hostname, $username, $password, $database);
            } catch (mysqli_sql_exception) {
                echo 'Napotkano błąd: ' . mysqli_error($conn);
            }

            $zapytanie1 = $conn->query("SELECT * FROM ryby");
            while ($wiersz = $zapytanie1->fetch_assoc()) {
                echo <<< EOF
                        <li>$wiersz[nazwa], występowanie: $wiersz[wystepowanie]</li>
                    EOF;
            }
            ?>
        </ul>
    </div>
    <div class="prawy">
        <img src="pliki1/ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>