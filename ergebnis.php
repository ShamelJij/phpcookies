<html>
<head>
</head>
<body>
<p>etwas</p>
<?php
	$zahl1 = $_POST["zahl1"];
	$zahl2 = $_POST["zahl2"];
	$zeichen = filter_input(INPUT_POST, "zeichen", FILTER_SANITIZE_STRING);
	if(zeichen == "add"){
		echo $zah1l + $zahl2;
	}elseif (zeichen == "sub"){
		echo $zahl1 - $zahl2;
	}
	echo $zahl1; 
	echo $zahl2;
	echo $zeichen;
?>
</body>
</html>
