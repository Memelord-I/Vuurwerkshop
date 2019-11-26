<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
            color: black;
            width: 500px;
            float: top;
        }
    </style>
    <title>Afspraken tabel</title>
</head>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk_opdracht";
function Print_tabel($printen){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM afspraken";
$result = $conn->query($sql);
?>
<body>
<table>
<tr>
<th>Naam</th>
<th>Datum</th>
<th>Tijd</th>
<th>Met wie</th>
</tr>
<?php
while ($row = $result->fetch()){
    echo "<tr>";
    echo "<td>" . $row['Naam'] . "</td>";
    echo "<td>" . $row['Datum'] . "</td>";
    echo "<td>" . $row['Tijd'] . "</td>";
    echo "<td>" . $row['Met_wie'] . "</td>";
    echo "</tr>";
}
}
?>
</table>
</body>
</html>