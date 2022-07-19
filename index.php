<html>
<head>
<style>
table, th, td{
	border: 1px dashed blue;
}
</style>
</head>
<body>
<?php
$conn = new mysqli('localhost', 'root', 'sqlubuntu', 'autohaus'); 
if($conn->connect_error){
	die('Verbindung fehlgeschlagen: ' . $conn->connect_error);
}
$sql = "SELECT * FROM autos, marke WHERE marke = markenid";
$ausgabe = $conn->query($sql);
if($ausgabe->num_rows>0){
	echo "<table>";
	echo "<tr><th>ID</th><th>Marke</th><th>Baujahr</th><th>Farbe</th></tr>";
	while($row = $ausgabe->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row ["id"] . "</td>";	
		echo "<td>" . $row ["markenBezeichnung"] . "</td>";
		echo "<td>" . $row ["farbe"] . "</td>";
		echo "<td>" . $row ["baujahr"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}else{
	echo "Fehler: ". $conn->error;
}
$conn->close();
?>

</body>
</html>
