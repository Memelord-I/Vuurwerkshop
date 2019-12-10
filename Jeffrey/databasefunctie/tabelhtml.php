<?php

// Auteur : Casper Schwagermann


//functies
include "database.php";

$sql = "SELECT * FROM afspraken";
$result = $conn->query($sql);


//manier 1 traag om rij voor rij op te halen over het internet

echo "<table>";
echo "<tr>";
echo "<th>Voornaam</th>";
echo "<th>Achternaam</th>";
echo "</tr>";
while ($row = $result->fetch()){
    echo "<td>" . $row['Voornaam'] . "</td>";
    echo "<td>" . $row['Achternaam'] . "</td><br>";
}
echo "</tr>";
echo "</table>";
//manier 2 is andeers dan manier 1 want want dat is sneller op te halen dan manier 1




?>
