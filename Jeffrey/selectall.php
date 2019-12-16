<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk_opdracht";

// Create connection
try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e){
	echo("Connection failed: " . $e->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
$result = $result->fetchall(PDO::FETCH_ASSOC);

if ($result > 0) {
    // output data of each row
	for($i=0;$i<count($result);$i++){
		$row = $result[$i];
		echo '<div class="card">';
		echo "<img src=".$row['url_afbeelding'] . " width=200px height=100px>";
		echo "<br>";
		echo "Naam: " .   $row['naam'] . "<br>";
		echo "Prijs: " .   $row['prijs'] . "<br>";
		echo "Vooraad: " .   $row['vooraad'] . "<br>";
		echo "Categorieen: " .   $row['categorieen'] . "<br>";
		echo "<br>";
		echo "<input type=text name=hoeveel value=1>";
		echo "<p><button>Voeg toe aan winkelwagen</button></p>";
		echo "</div>";
		
	}
	echo '<div id="space"> </div>';
} else {
    echo "0 results";
}
unset($conn);
?>