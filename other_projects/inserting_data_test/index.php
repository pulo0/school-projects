<!-- The task was to make a script to view two tables of data -->
<!-- And make a form to be able to add to those tables -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main site for both tables</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="adding_form.html">Add data to both tables</a>
    <?php
    include 'db_conn.php';
    $queryC = $conn->query('SELECT * FROM cars');
    $queryO = $conn->query('SELECT * FROM owners');

    echo <<< EOF
        <table>
            <thead>
                <th>owner_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
            </thead>
        EOF;

    while ($rowO = $queryO->fetch_assoc()) {
        echo <<< EOF
            <tr>
                <td>$rowO[owner_id]</td>
                <td>$rowO[first_name]</td>
                <td>$rowO[last_name]</td>
                <td>$rowO[email]</td>
            </tr>
        EOF;
    }

    echo "</table>";

    echo <<< EOF
        <table>
            <thead>
                <th>Car_id</th>
                <th>owner_id</th>
                <th>make</th>
                <th>model</th>
                <th>year</th>
                <th>color</th>
            </thead>
        EOF;

    while ($rowC = $queryC->fetch_assoc()) {
        echo <<< EOF
            <tr>
                <td>$rowC[car_id]</td>
                <td>$rowC[owner_id]</td>
                <td>$rowC[make]</td>
                <td>$rowC[model]</td>
                <td>$rowC[year]</td>
                <td>$rowC[color]</td>
            </tr>
        EOF;
    }

    echo "</table>";
    ?>
</body>

</html>