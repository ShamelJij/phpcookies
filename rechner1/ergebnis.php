<html>
<head>
</head>
<body>
<p>etwas</p>
<?php
	$zahl1 = $_POST["zahl1"];
	$zahl2 = $_POST["zahl2"];
	$zeichen = filter_input(INPUT_POST, "zeichen", FILTER_SANITIZE_STRING);
	$ergebnis = 0;
	if($zeichen == 1){
		$ergebnis = $zahl1 + $zahl2;
	}elseif ($zeichen == 2){
		$ergebnis =  $zahl1 - $zahl2;
	}
	echo $ergebnis;
?>
</body>
</html>
