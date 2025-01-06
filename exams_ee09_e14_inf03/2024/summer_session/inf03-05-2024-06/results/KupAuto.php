<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'kupauto';
try {
    $conn = new mysqli($host, $user, $password, $db);
} catch (Exception $e) {
    echo 'Error occured, here\'s details: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1><i>KupAuto!</i> Internetowy Komis Samochodowy</h1>
    </header>
    <section class="top-container">
        <?php
        $sql = 'SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10';
        $query_sql = $conn->query($sql);
        $result = $query_sql->fetch_assoc();
        echo <<< EOF
                <img src="pliki/$result[zdjecie]" alt="oferta dnia">
                <h4>Oferta Dnia: Toyota $result[model]</h4>
                <p>Rocznik: $result[rocznik], przebieg: $result[przebieg], rodzaj paliwa: $result[paliwo]</p>
                <h4>Cena: $result[cena]</h4>
            EOF;
        ?>
    </section>
    <main>
        <h2>Oferty Wyróżnione</h2>
        <?php
        $sql = 'SELECT marki.nazwa, samochody.model, samochody.rocznik, samochody.cena, samochody.zdjecie FROM marki INNER JOIN samochody ON samochody.marki_id = marki.id WHERE samochody.wyrozniony = 1';
        $query_sql = $conn->query($sql);
        while ($row = $query_sql->fetch_assoc()) {
            echo <<< EOF
                    <section>
                        <img src="pliki/$row[zdjecie]" alt="$row[model]">
                        <h4>$row[nazwa] $row[model]</h4>
                        <p>Rocznik: $row[rocznik]</p>
                        <h4>$row[cena]</h4>
                    </section>
                EOF;
        }
        ?>
    </main>
    <section class="bottom-container">
        <form method="post">
            <select name="brands">
                <?php
                $sql = 'SELECT nazwa FROM marki';
                $query_sql = $conn->query($sql);
                while ($row = $query_sql->fetch_row()) {
                    echo "<option value='$row[0]'>$row[0]</option>";
                }
                ?>
            </select>
            <button type="submit" name="search">Wyszukaj</button>
        </form>
        <?php
        if (isset($_POST['search'])) {
            $chosen_brand = $_POST['brands'];
            $stmt = $conn->prepare('SELECT model, cena, zdjecie FROM samochody INNER JOIN marki ON marki.id = samochody.marki_id WHERE nazwa LIKE ?');
            $stmt->bind_param('s', $chosen_brand);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                echo <<< EOF
                        <section>
                            <img src="pliki/$row[zdjecie]" alt="$row[model]">
                            <h4>$chosen_brand $row[model]</h4>
                            <h4>Cena: $row[cena]</h4>
                        </section>
                    EOF;
            }
        }
        ?>
    </section>
    <footer>
        <p>Stronę wykonał: pulo0</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>

</html>

<?php
$conn->close();
?>