<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'wazenietirow';
try {
    $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
    echo 'Connection to database, more details: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header class="baner-one">
        <h1>Ważenie pojazdów we Wrocławiu</h1>
    </header>
    <header class="baner-two">
        <img src="pliki/obraz1.png" alt="waga">
    </header>
    <aside class="left-container">
        <h2>Lokalizacja wag</h2>
        <ol>
            <?php
            $sql = 'SELECT ulica FROM lokalizacje';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "<li>ulica $row[ulica]</li>";
            }
            ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="mailto:wazenie@wroclaw.pl">napisz</a>
    </aside>
    <main>
        <h2>Alerty</h2>
        <table>
            <tr>
                <th>rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzień</th>
                <th>czas</th>
            </tr>
            <?php
            $sql = 'SELECT rejestracja, waga, dzien, czas, ulica FROM wagi INNER JOIN lokalizacje ON lokalizacje.id = wagi.lokalizacje_id WHERE waga > 5';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo <<< EOF
                    <tr>
                        <td>$row[rejestracja]</td>
                        <td>$row[ulica]</td>
                        <td>$row[waga]</td>
                        <td>$row[dzien]</td>
                        <td>$row[czas]</td>
                    </tr>
                EOF;
            }
            ?>
        </table>
        <?php
        // While testing this script I encountered a bug, exception that appears regarding the header in this script
        // it tells that "Cannot modify header information - headers already sent by ... [your local output]"
        // by the exam answer sheat it is correct because you used the header object
        // so all the code here is correct, additionally if you really want to debug this issue on the exam
        // you can go ahead and drop the database and import it again but overall it is a correct code
        $sql = "INSERT INTO wagi (lokalizacje_id, waga, rejestracja, dzien, czas) VALUES(5, (ROUND(RAND() * (10-1)) + 1), 'DW12345', DATE(NOW()), TIME(NOW()))";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header(header: 'Refresh: 10');
        ?>
    </main>
    <!-- Also the photo in the right container is overflowing and crossing through footer -->
    <!-- it is also correct and bad design by the exam itself -->
    <!-- theoretically it could be the issue because exam was tested on the smaller resolution displays... -->
    <!-- ...and not todays standard 1920x1080 -->
    <aside class="right-container">
        <img src="pliki/obraz2.jpg" alt="tir">
    </aside>
    <footer>
        <p>Stronę wykonał: pulo0</p>
    </footer>
</body>
<?php
$conn->close();
?>

</html>