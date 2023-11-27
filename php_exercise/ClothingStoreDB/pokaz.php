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

    .dodaj {
        box-shadow: inset 0 0 40px 1px grey;
        color: #54b3d6;
        border-radius: 0.3em;
        padding: 0 .25rem;
        margin: 0 -.25rem;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
    }

    .dodaj:hover {
        color: #fff;
        box-shadow: inset 200px 0 0 0 purple;
    }    
    
    .dodaj {
        color: black;
        font-family: 'Nova Mono', monospace;
        font-size: 35px;
        font-weight: lighter;
        text-decoration: none;
    }

</style>

<h1 style="text-align: center;">Baza_odzież</h1>

<?php

$con = new mysqli('127.0.0.1', 'root', '', 'baza_odziez')
or die("died on baza");

$result = $con -> query("select * from sklep_odziezowy")
or die("second breaking");

echo " 
    <table>
        <th class='first'>Identyfikator</th>
        <th>Marka</th>
        <th>Płeć</th>
        <th>Rozmiar</th>
        <th>Rodzaj</th>
        <th>Cena</th>
        <th>Dostępny</th>
        <th>Usuwanie</th>
        <th class='last'>Modyfikowanie</th>
";

while (($col = $result -> fetch_assoc())) {
    $kiedyDostepny = $col['dostepny'] ? "Dostępny" : "Niedostępny";
    echo "
        <tr>
        <td>$col[id]</td>
        <td>$col[marka]</td>
        <td>$col[plec]</td>
        <td>$col[rozmiar]</td>
        <td>$col[rodzaj]</td>
        <td>$col[cena]</td>
        <td>$kiedyDostepny</td>
        <td><a href='usun.php?id=$col[id]'>usuń</a></td>
        <td><a href='modyfikuj.php?id=$col[id]'>modyfikuj</a></td>
        </tr><br>
    ";
}

?>

<h2><a href="dodajform.html" class="dodaj">Dodaj dane</a></h2>