<html>
<head>

</head>

<body>
<form action="" method="post">
<input type="number" name="zahl1"><br>

<label for="zeichen">Rechenzeichen:</label>
<select name="zeichen">
        <option value="1">Addieren</option>
        <option value="2">Subtrahieren</option>
        <option value="3">Multiplizieren</option>
        <option value="4">Dividieren</option>
</select> <br>

<input type="number" name="zahl2"><br>
<button type="submit">Ausrechnen!</button>
</form>

<?php

if(isset($_POST["zahl1"]) && isset($_POST["zahl2"])){

$zahl1 = $_POST["zahl1"];
$zahl2 = $_POST["zahl2"];
$zeichen = filter_input(INPUT_POST, "zeichen", FILTER_SANITIZE_STRING);
$s = "";
$ergebnis = 0;
if($zeichen == 1){
        $ergebnis = $zahl1 + $zahl2;
        $s = " + ";
}elseif ($zeichen == 2){
        $ergebnis =  $zahl1 - $zahl2;
        $s = " - ";
}elseif ($zeichen == 3){
        $ergebnis =  $zahl1 * $zahl2;
        $s = " * ";
}elseif ($zeichen == 4){
        $ergebnis =  $zahl1 / $zahl2;
        $s = " / ";
}

echo $zahl1  , $s , $zahl2 , " = " , $ergebnis;

}
?>


</body>
</html>
