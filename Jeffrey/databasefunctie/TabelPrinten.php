<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
            color: black;
            width: 500px;
            float: top;
			background-color: #4979eb;
        }
		body {
			background-color: #929c95;
		}
    </style>
    <title>Afspraken tabel</title>
</head>
<center>
<h1> Afspraken tabel </h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk_opdracht";

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
    ?>
	</center>
</table>
</body>
</html>