<html>
<head>

</head>

<body>
Hallo
<br>

<?php
	if($_POST["checkbox"]){
		echo "checkbox war angekreuzt";
	}
	setcookie("user", $_POST["eingabe"], time() + 20, "/");
	setcookie("warenkorb", $_POST["warenkorb"], time() + 3600 , "/");
	echo "Eingabe ist: " . $_POST["eingabe"] . "<br>";
	$datum = strtotime($_POST["alter"]);
	echo time();
	echo $datum;
	echo "<br>";
	$datum = time() - $datum;
	echo floor($datum/3600/24/365);	
	echo "Geburtsdatum ist: " . date("Y", $datum);
?>



</body>
</html>

