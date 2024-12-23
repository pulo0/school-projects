<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'podroze';

$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>

<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <aside class="left">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600 zł</td>
            </tr>
            <tr>
                <td>Wenecja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200 zł</td>
            </tr>
        </table>
    </aside>
    <main>
        <h2>W tym roku jedziemy do...</h2>
        <?php
        $sql = $conn->query('SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC');
        while ($row = $sql->fetch_array(MYSQLI_ASSOC)) {
            echo "<img src='pliki/$row[nazwaPliku]' alt='$row[podpis]'>";
        }
        ?>
    </main>
    <aside class="right">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </aside>
    <section>
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php
            $sql = $conn->query('SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = FALSE');

            // or simply fetch_assoc
            while ($row = $sql->fetch_array(MYSQLI_ASSOC)) {
                echo <<< EOF
                        <li>Dnia $row[dataWyjazdu] pojechaliśmy do $row[cel]</li>
                EOF;
            }
            ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>

<?php
$conn->close();
?>