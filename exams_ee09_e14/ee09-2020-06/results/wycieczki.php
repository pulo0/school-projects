<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <section class="left">
        <h2>KONTAKT</h2>
        <a href="maito:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </section>
    <section class="middle">
        <h2>GALERIA</h2>
        <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'egzamin3';
        $conn = mysqli_connect($hostname, $username, $password, $database);
        $sql = "select nazwaPliku, podpis from zdjecia order by podpis asc";
        $result = $conn->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            echo <<< EOF
                <img src="pliki/$row[nazwaPliku]" alt="$row[podpis]">
            EOF;
        }
        ?>
    </section>
    <section class="right">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </section>
    <main>
        <h2>LISTA WYCIECZEK</h2>
        <?php
        $sql = 'select id, dataWyjazdu, cel, cena from wycieczki where dostepna = 1';
        $result = $conn->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            echo <<< EOF
                <span>$row[id]. $row[dataWyjazdu], $row[cel], cena: $row[cena]</span><br>
            EOF;
        }
        $conn->close();
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: Bartosz Skrzypek</p>
    </footer>
</body>

</html>