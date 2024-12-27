<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'terminarz';

$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <header class="first-header">
        <img src="pliki/logo1.png" alt="lipiec">
    </header>
    <header class="second-header">
        <h1>TERMINARZ</h1>
        <p>najbliższe zadania:
            <?php
            $sql = mysqli_query($conn, 'SELECT DISTINCT wpis FROM zadania WHERE (dataZadania BETWEEN "2020-07-01" AND "2020-07-07") AND NOT wpis <=> ""');
            while ($row = $sql->fetch_assoc()) {
                echo "$row[wpis]; ";
            }
            ?>
        </p>
    </header>
    <main>
        <?php
        $sql = mysqli_query($conn, 'SELECT dataZadania, wpis FROM zadania WHERE miesiac LIKE "lipiec"');
        while ($row = $sql->fetch_assoc()) {
            echo <<< EOF
                    <article>
                        <h6>$row[dataZadania]</h6>
                        <p>$row[wpis]</p>
                    </article>
                EOF;
        }
        ?>
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: </p>
    </footer>
    <?php
    $conn->close();
    ?>
</body>

</html>