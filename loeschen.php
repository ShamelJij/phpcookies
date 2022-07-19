<html>
<?php
try{
$conn = new mysqli('localhost', 'root', 'sqlubuntu', 'autohaus');
if($conn->connect_error){
die("Verbindung fehlgeschlagen: " . $conn->connect_error);
} 
echo "test";
$sql = "DELETE FROM autos WHERE id=" . $_POST["autoid"];
if($conn->query($sql) === TRUE){
        echo "Erfolgreich gelöscht!";
}else{
        echo "Fehler: " . $conn->error;
}
	echo "test 2";
	$conn->close();
}catch(Exception $e){
	echo "Bitte Felder richtig ausfüllen!";
}
<form action="index.php">
<input type="submit" value="Zurück zur Übersicht">
</form> 
?>
</html>
