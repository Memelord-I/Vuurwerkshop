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
    $conn->query("CREATE TABLE IF NOT EXISTS product (
            naam VARCHAR(50) NOT NULL, 
            prijs DOUBLE(5,2) NOT NULL, 
            vooraad INTEGER NOT NULL, 
            categorieen VARCHAR(50) NOT NULL, 
            url_afbeelding VARCHAR(100) NOT NULL,
            PRIMARY KEY (naam)
            )");

    // use exec() because no results are returned
    //$conn->exec($sql);
    echo "Table afspraken created successfully";
    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>