 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Hallo PHP</h1>
  <p>This is some text.</p>
</div>

<form action="anzeigen.php" method="post">

Name: <input type="text" name="eingabe" value=<?=$_COOKIE["user"]?>><br>
<br>Geburtsdatum: <input type="date" name="alter">
<br>E-Mail: <input type="email" name="mail">
<br>Warenkorb: <input type="number" name="warenkorb" value=<?=$_COOKIE["warenkorb"]?>
<br>Checkbox: <input type="checkbox" name="checkbox">
<input type="submit">
</form>


<?php
	$name = "Shamel";
	echo "hallo ubuntu in php mit <b>" . $name . "</b>!!";
?>
<br>
<hr>
<br>Hallo <?=$name?>
</div>

</body>
</html> 


