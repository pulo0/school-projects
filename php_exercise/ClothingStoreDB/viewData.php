<style>
    body {
        font-family: 'Nova Mono', monospace;
    }
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table td {
        border: 1px solid #ddd; 
        padding: 8px;   
    }

    table th { 
        border-right: 1px solid #ddd;
        padding: 8px;
    }

    .first{
        border-top-left-radius: 5px;
    }

    .last {
        border-top-right-radius: 5px;
        border: none;
    }

    table tr:nth-child(even){
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }

    table th {
        padding-top: 12px;  
        padding-bottom: 12px;   
        text-align: left;   
        background-color: purple;  
        color: white;   
    }

    h2 {
        text-align: center;
        justify-content: center;
        align-items: center;
    }

    .add {
        box-shadow: inset 0 0 40px 1px grey;
        color: #54b3d6;
        border-radius: 0.3em;
        padding: 0 .25rem;
        margin: 0 -.25rem;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
    }

    .add:hover {
        color: #fff;
        box-shadow: inset 200px 0 0 0 purple;
    }    
    
    .add {
        color: black;
        font-family: 'Nova Mono', monospace;
        font-size: 35px;
        font-weight: lighter;
        text-decoration: none;
    }

</style>

<h1 style="text-align: center;">ClothingStore_DB</h1>

<?php

$con = new mysqli('127.0.0.1', 'root', '', 'clothing_store')
or die("error encounter on syncing to DB");

$result = $con -> query("select * from clothing_store")
or die("break in result query");

echo " 
    <table>
        <th class='first'>Identyfikator</th>
        <th>brand</th>
        <th>gender</th>
        <th>size</th>
        <th>type</th>
        <th>price</th>
        <th>Dostępny</th>
        <th>Usuwanie</th>
        <th class='last'>Modyfikowanie</th>
";

while (($col = $result -> fetch_assoc())) {
    $kiedyavailable = $col['available'] ? "Dostępny" : "Niedostępny";
    echo "
        <tr>
        <td>$col[id]</td>
        <td>$col[brand]</td>
        <td>$col[gender]</td>
        <td>$col[size]</td>
        <td>$col[type]</td>
        <td>$col[price]</td>
        <td>$kiedyavailable</td>
        <td><a href='usun.php?id=$col[id]'>usuń</a></td>
        <td><a href='modyfikuj.php?id=$col[id]'>modyfikuj</a></td>
        </tr><br>
    ";
}

?>

<h2><a href="addDataForm.html" class="add">Add data</a></h2>