<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'galeria';
$conn = new mysqli($hostname, $username, $password, $db) or die('Connection issue (with database)');
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>Zdjęcia</h1>
    </header>
    <aside class="left-container">
        <h2>Tematy zdjęć</h2>
        <ol>
            <li>Zwierzęta</li>
            <li>Krajobrazy</li>
            <li>Miasta</li>
            <li>Przyroda</li>
            <li>Samochody</li>
        </ol>
    </aside>
    <main>
        <?php
        $sql = 'SELECT zdjecia.plik, zdjecia.tytul, zdjecia.polubienia, autorzy.imie, autorzy.nazwisko FROM zdjecia INNER JOIN autorzy ON autorzy.id = zdjecia.autorzy_id ORDER BY nazwisko ASC';
        $query_sql = $conn->query($sql);
        while ($each_row = $query_sql->fetch_assoc()) {
            $author_txt = "Autor: $each_row[imie] $each_row[nazwisko]";
            $likes = $each_row['polubienia'];
            if ($likes > 40) {
                $author_txt = "Autor: $each_row[imie] $each_row[nazwisko]<br>Wiele osób polubiło ten obraz";
            }
            echo <<< EOF
                    <section>
                        <img src="pliki/$each_row[plik]" alt="zdjecie">
                        <h3>$each_row[tytul]</h3>
                        <p>$author_txt</p>
                        <a href="pliki/$each_row[plik]" download>Pobierz</a>
                    </section>
                EOF;
        }
        ?>
    </main>
    <aside class="right-container">
        <h2>Najbardziej lubiane</h2>
        <?php
        $sql = 'SELECT tytul, plik FROM zdjecia WHERE polubienia >= 100';
        $query_sql = $conn->query($sql);
        $result = $query_sql->fetch_array(MYSQLI_NUM);
        echo "<img src='pliki/$result[1]' alt='$result[0]'>"
        ?>
        <b>Zobacz nasze zdjęcia</b>
    </aside>
    <footer>
        <h5>Stronę wykonał: pulo0</h5>
    </footer>
</body>

</html>

<?php
$conn->close();
?>