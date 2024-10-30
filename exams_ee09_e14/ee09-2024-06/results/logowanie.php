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