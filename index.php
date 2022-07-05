<html>
<head>

</head>
<body>
<?php
	$zahl1 = rand(20, 100);
	$zahl2 = rand(20, 100);
$rechenzeichen = "+";
$ergebnis = $zahl1 + $zahl2;
$r = rand(0,2);
if($r == 1){
	$rechenzeichen = "-";
	$ergebnis = $zahl1 - $zahl2;
}elseif($r == 2){
	$rechenzeichen = "*";
	$ergebnis = $zahl1 * $zahl2;
}
echo "<h2>" , $zahl1 , " " ,$rechenzeichen, " ", $zahl2, "=?</h2>";
$array = array($ergebnis, round($ergebnis * rand(800, 1200)*0.001), round($ergebnis * rand(800, 1200)*0.001));
shuffle($array);
for($i = 0; $i<3; $i++){
echo "<form action='ergebnis.php' method='post'>",
	"<input type='hidden' value=", $ergebnis, " name='ergebnis'>",
	"<button name='antwort' value=" , $array[$i] ,">", $array[$i], "</button>",
	"</form>";
}
echo "<br>";
echo "richtig: ", $_COOKIE["richtig"], "<br>";
echo "falsch: ", $_COOKIE["falsch"], "<br>";

?>
<form>

</body>
</html>
