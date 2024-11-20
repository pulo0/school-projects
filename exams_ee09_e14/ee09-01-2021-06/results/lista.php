<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Portal Społecznościowy - moje konto</h1>
    </header>
    <main>
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php 
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'dane';

        $conn = mysqli_connect($hostname, $username, $password, $database);

        // Or also SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE hobby_id IN (1, 2, 6);
        $query = $conn -> query('SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE hobby_id = 2 OR hobby_id = 1 OR hobby_id = 6');
        while($row = $query -> fetch_assoc()) {
            echo <<< EOF
                <section class="image">
                    <img src="pliki/$row[zdjecie]" alt="przyjaciel">
                </section>
                <section class="desc">
                    <h3>$row[imie] $row[nazwisko]</h3>
                    <p>Ostatni wpis: $row[opis]</p>
                </section>
                <hr />
            EOF;
        }

        $conn -> close();
        ?>
    </main>
    <footer class="left">
        <span>Stronę wykonał: </span>
    </footer>
    <footer class="right">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </footer>
</body>
</html>