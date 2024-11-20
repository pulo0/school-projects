<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimpics</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <a href="HTML/form_adding.html">Adding data</a>
    <div class="text-container">
        <p>Olimpics</p>
    </div>
    <?php
    include 'PHP/db_connect.php';

    echo "<table>";
    echo <<< EOF
            <thead>
                <th>id</th>
                <th>nazwisko</th>
                <th>imie</th>
                <th>dyscyplina</th>
                <th>wynik</th>
                <th>miejsce</th>
                <th>rok</th>
            </thead>
        EOF;

    $query = $conn->query('SELECT * FROM polscy_olimpijczycy');
    while ($row = $query->fetch_assoc()) {
        echo <<< EOF
                <tr>
                    <td>$row[id]</td>
                    <td>$row[nazwisko]</td>
                    <td>$row[imie]</td>
                    <td>$row[dyscyplina]</td>
                    <td>$row[wynik]</td>
                    <td>$row[miejsce]</td>
                    <td>$row[rok]</td>
                </tr>
            EOF;
    }

    echo "</table>";
    ?>
</body>

</html>