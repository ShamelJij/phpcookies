<html>

<head>

</head>
<body>

<?php
	echo "Lösung: ", $_POST["ergebnis"], "<br>";
	echo "Antwort: ", $_POST["antwort"], "<br>";
	if($_POST["antwort"] == $_POST["ergebnis"]){
		echo "Richtig!";
		setcookie("richtig", $_COOKIE["richtig"] + 1, time() + 600,"/");
	}else{
		echo "Leider falsch!";
		setcookie("falsch", $_COOKIE["falsch"] + 1, time() + 600,"/");
	}
?>
<form action="index.php">
<button>nächste Frage</button>

</form>
</body>
</html>
