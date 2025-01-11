<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'hodowla';
try {
    $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <nav>
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </nav>
    <aside>
        <h3>Poznaj rasy świnek morskich</h3>
        <ol>
            <?php
            $sql = 'SELECT rasa FROM rasy';
            $query_sql = $conn->query($sql);
            while ($row = $query_sql->fetch_array(MYSQLI_ASSOC)) {
                echo "<li>$row[rasa]</li>";
            }
            ?>
        </ol>
    </aside>
    <main>
        <img src="pliki/american.jpg" alt="Świnka morska rasy american">
        <?php
        $sql = 'SELECT DISTINCT data_ur, miot, rasa FROM swinki INNER JOIN rasy ON rasy.id = swinki.rasy_id WHERE rasy.id LIKE 6';
        $query_sql = $conn->query($sql);
        while ($row = $query_sql->fetch_assoc()) {
            echo <<< EOF
                    <h2>Rasa: $row[rasa]</h2>
                    <p>Data urodzenia: $row[data_ur]</p>
                    <p>Oznaczenie miotu: $row[miot]</p>
                EOF;
        }
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
        $sql = 'SELECT imie, cena, opis FROM swinki INNER JOIN rasy ON rasy.id = swinki.rasy_id WHERE rasy.id LIKE 6';
        $query_sql = $conn->query($sql);
        while ($result = $query_sql->fetch_assoc()) {
            echo <<< EOF
                <h3>$result[imie] - $result[cena] zł</h3>
                <p>$result[opis]</p>
            EOF;
        }
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: pulo0</p>
    </footer>
</body>
<?php
$conn->close();
?>

</html>