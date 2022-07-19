<html>
<?php
try{
$conn = new mysqli('localhost', 'root', 'sqlubuntu', 'autohaus');
if($conn->connect_error){
die("Verbindung fehlgeschlagen: " . $conn->connect_error);
} 
echo "test";
$sql = "INSERT INTO autos(marke, baujahr, farbe) VALUES(" .
        $_POST["marke"] . ", " . $_POST["baujahr"] . ",'" . 
        $_POST["farbe"]. "')";
if($conn->query($sql) === TRUE){
        echo "Erfolgreich hinzugefügt";
}else{
        echo "Fehler: " . $conn->error;
}
	echo "test 2";
	$conn->close();
}catch(Exception $e){
	echo "Bitte Felder richtig ausfüllen!";
}
?>
</html>
