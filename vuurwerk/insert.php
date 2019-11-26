<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk_opdracht";
function insert_into(){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO afspraken (Naam, Datum, Tijd, Met_wie)
    VALUES ('Jeffrey', '10-20-2019', '00:00', 'Boterham')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;
?>