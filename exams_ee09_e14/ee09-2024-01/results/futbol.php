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

    ?>
    <!-- <article></article> -->
    <main>
        <h2>Reprezentacja Polski</h2>
    </main>
    <section class="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="post">
            <input type="number" name="num">
            <button type="submit">Sprawdź</button>
        </form>
        <ul>
            <?php

            ?>
        </ul>
    </section>
    <section class="right">
        <img src="dane/zad1.png" alt="piłkarz">
        <p>Autor: </p>
    </section>
</body>

</html>