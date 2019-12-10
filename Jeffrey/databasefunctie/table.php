<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk_opdracht";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE afspraken (Naam VARCHAR(50) NOT NULL,Datum VARCHAR(30) NOT NULL, Tijd VARCHAR(30) NOT NULL, Met_wie VARCHAR(50))";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table afspraken created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>