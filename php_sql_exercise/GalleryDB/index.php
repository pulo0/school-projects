<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Kiciuś Art</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <h1 class="navbar-title">Gallery of Kiciuś Art</h1>
    </nav>

    <div class="gallery">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "gallery";

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Failed connection: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM images";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="gallery-item">';
                echo '<img src="images/' . $row["filename"] . '" alt="' . $row["alt_text"] . '">';
                echo '</div>';
            }
        } 
        else {
            echo "0 results, add some data";
        }

        mysqli_close($conn);
        ?>
    </div>

    <script src="js/openPicture.js"></script>
    <script src="js/hoverBlur.js"></script>
</body>
</html>
