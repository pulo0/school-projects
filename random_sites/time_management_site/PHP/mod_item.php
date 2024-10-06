<!-- Purpose: Displaying the details of a task -->
<link rel="stylesheet" href="../CSS/style.css">
<?php
include 'db_conn.php';

// Variable declaration
$id = $_GET['id'];
$sql = "select * from zadanie where id=$id";
$result = $conn->query($sql);

echo "<table>";
echo "<form method='post'>";

while ($row = $result->fetch_assoc()) {
    echo <<< EOF
            <tr>
            <td><button class="back">Wstecz</button></td>
            <td><input type="text" value=$row[zadanie_tytul] name="zadanie_tytul"></td>
            <td><input type="text" value=$row[opis] name="opis"></td>
            <td>
                <select name="priorytet_zadania">
                    <option value="niski">niski</option>
                    <option value="średni">średni</option>
                    <option value="wysoki">wysoki</option>
                </select>
            </td>
            <td>
                <select name="progres_zadania">
                    <option value'w trakcie'>w trakcie</option>
                    <option value'wykonane'>wykonane</option>
                </select>
            </td>
            <td><input type="datetime-local" value=$row[deadline] name="deadline"></td>
            <td><input type="submit" value="Zapisz" name="zapisz"></td>
        EOF;
}

echo "</form>";
echo "</table>";

if (isset($_POST['zapisz'])) {
    $name = filter_input(INPUT_POST, 'zadanie_tytul', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'opis', FILTER_SANITIZE_SPECIAL_CHARS);
    $priority = $_POST['priorytet_zadania'];
    $progress = $_POST['progres_zadania'];
    $deadline = $_POST['deadline'];

    $sql = "update zadanie set zadanie_tytul='$name', opis='$description', priorytet_zadania='$priority', progres_zadania='$progress', deadline='$deadline' where id=$id";
    try {
        $conn->query($sql);
    } catch (Exception $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
    $conn->close();
    header('Location: ../index.php');
}

?>
<script src="../JS/script.js"></script>