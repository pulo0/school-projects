<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum wielbicieli psów</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <h1>Forum wielbicieli psów</h1>
    </header>
    <aside>
        <img src="pliki4/zad1/obraz.jpg" alt="foksterier">
    </aside>
    <section>
        <h2>Zapisz się</h2>
        <form action="logowanie.php" method="post">
            <label for="login">login: </label>
            <input type="text" name="login">
            <label for="haslo">haslo: </label>
            <input type="password" name="haslo">
            <label for="re-haslo">powtórz hasło: </label>
            <input type="password" name="re-haslo">
            <button type="submit">Zapisz</button>
        </form>
        <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'psy';
        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['re-haslo'])) {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $confirmHaslo = $_POST['re-haslo'];
            $sql = 'select login from uzytkownicy';

            $result = $conn->query($sql);

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                if ($login === $row['login']) {
                    echo "<p>login występuje w bazie danych</p>";
                    break;
                }

                if ($haslo !== $confirmHaslo) {
                    echo "<p>hasła nie sa takie same, konto nie zostało dodane</p>";
                    break;
                }
                $hash = sha1($haslo);
                $sql = "INSERT INTO uzytkownicy VALUES (NULL, '$login', '$hash')";
                $conn->query($sql);
                echo "<p>Konto zostało dodane</p>";
                break;
            }
        } else {
            echo "<p>wypełnij wszystkie pola</p>";
        }
        $conn->close();
        ?>
    </section>
    <section>
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </section>
    <footer>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>