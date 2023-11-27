<?php
    $con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
    or die("you died on start");

    $id = $_GET['id'];
    $result = $con -> query("select * from sklep_odziezowy where id=$id")
    or die("you died");
    $con -> close();

    while ($record = $result -> fetch_assoc()) {
        echo "<form method='POST' action='modifyAdd.php?id=$id'>";
        echo "<table>
            <tr>
                <th>id</th>
                <th>marka</th>
                <th>plec</th>
                <th>rozmiar</th>
                <th>rodzaj</th>
                <th>cena</th>
                <th>dostepny</th>
            </tr>
            <tr?>
                <td><input type='text' name='id' value='$record[id]'readonly></td>
                <td><input type='text' name='marka' value='$record[marka]'></td>
                <td><input type='text' name='plec' value='$record[plec]'></td>
                <td><input type='text' name='rozmiar' value='$record[rozmiar]'></td>
                <td><input type='text' name='rodzaj' value='$record[rodzaj]'></td>
                <td><input type='number' min='0' step='0.01' name='cena' value='$record[cena]'></td>
                <td><input type='checkbox' name='dostepny' value='$record[dostepny]'></td>
            </tr>
        ";
    }
    echo "<input type='submit' value='modify'>
    </form>";
?>