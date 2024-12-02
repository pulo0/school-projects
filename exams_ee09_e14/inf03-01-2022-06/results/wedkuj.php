<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'wedkowanie';
$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <section class="left">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $result = $conn->query('SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.ryby_id WHERE rodzaj = 3');

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                echo <<< EOF
                        <li>$row[nazwa] pływa w rzece $row[akwen], $row[wojewodztwo]</li>
                    EOF;
            }
            ?>
        </ol>
    </section>
    <section class="right">
        <img src="ryby/ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt" download>Pobierz kwerendy</a>
    </section>
    <main>
        <h2>Ryby drapieżne naszych wód</h2>
        <table>
            <thead>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </thead>
            <tbody>
                <?php
                $result = $conn->query('SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1');

                while ($row = $result->fetch_assoc()) {
                    echo <<< EOF
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[nazwa]</td>
                                <td>$row[wystepowanie]</td>
                            </tr>
                        EOF;
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Stronę wykonał:</p>
    </footer>
</body>

</html>