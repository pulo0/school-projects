<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'egzamin';
$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>

<body>
    <header>
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="dane/obraz1.jpg" alt="boisko">
    </header>
    <?php
    $result = $conn->query("SELECT * FROM rozgrywka");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo <<< EOF
                <article>
                    <h3>$row[zespol1] - $row[zespol2]</h3>
                    <h4>$row[wynik]</h4>
                    <p>w dniu: $row[data_rozgrywki]</p>
                </article>
            EOF;
    }
    ?>
    <main>
        <h2>Reprezentacja Polski</h2>
    </main>
    <section class="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="post">
            <input type="number" name="id">
            <button type="submit">Sprawdź</button>
        </form>
        <ul>
            <?php
            if (!empty($_POST['id'])) {
                $id = $_POST['id'];
                $sql = "SELECT * FROM zawodnik INNER JOIN pozycja ON pozycja.id = zawodnik.pozycja_id WHERE pozycja.id=$id";
                $result = $conn -> query($sql);

                while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                    echo <<< EOF
                        <li>$row[imie] $row[nazwisko]</li>
                    EOF;
                }

                $conn->close();
            }
            ?>
        </ul>
    </section>
    <section class="right">
        <img src="dane/zad1.png" alt="piłkarz">
        <p>Autor: </p>
    </section>
</body>

</html>