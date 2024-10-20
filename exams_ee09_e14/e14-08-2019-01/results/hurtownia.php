<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Hurtownia komputerowa</title>
</head>

<body>
    <div class="list-block">
        <ul>
            <li>Producenci</li>
            <ol>
                <li>Intel</li>
                <li>AMD</li>
                <li>Motorola</li>
                <li>Corsair</li>
                <li>ADATA</li>
                <li>WD</li>
                <li>Kingstone</li>
                <li>Patriot</li>
                <li>Asus</li>
            </ol>
        </ul>
    </div>
    <div class="form-block">
        <h1>Dystrybucja sprzętu komputerowego</h1>
        <form action="hurtownia.php" method="post">
            <label for="producent">Wybierz producenta</label>
            <input type="number" name="producent">
            <button type="submit">WYŚWIETL</button>
        </form>
    </div>
    <div class="logo-block">
        <img src="materialy2/sprzet.png" alt="Sprzedajemy komputery">
    </div>
    <div class="main-block">
        <h1>Podzespoły wybranego producenta</h1>
        <?php
        if (!empty($_POST['producent'])) {
            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'sklep';
            $conn = mysqli_connect($hostname, $username, $password, $database);
            $producent = $_POST['producent'];
            $sql = "SELECT podzespoly.nazwa, podzespoly.cena, podzespoly.dostepnosc FROM podzespoly INNER JOIN producenci ON producenci.id = podzespoly.producenci_id WHERE producenci_id=$producent;";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $avail = '';
                if ($row['dostepnosc'] > 0) {
                    $avail = 'DOSTĘPNY';
                } else {
                    $avail = 'NIEDOSTĘPNY';
                }

                echo <<< EOF
                    <p>$row[nazwa] CENA: $row[cena] $avail</p>
                EOF;
            }
            $conn->close();
        } else {
            echo "<p>Wybierz producenta</p>";
        }
        ?>
    </div>
    <footer>
        <h3>Zapraszamy od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>30</sup></h3>
        <p>Strony partnerów:
            <a href="http://adata.pl/" target="_blank">ADATA</a>
            <a href="http://patriot.pl/" target="_blank">Patriot</a>
            <a href="mailto:biuro@hurt.pl">Napisz</a>
        </p>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>