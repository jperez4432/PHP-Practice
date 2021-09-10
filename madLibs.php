<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="madLibs.php" method="get">
Color: <input type="text" name="color">
Noun: <input type="text" name="noun">
Celebrity: <input type="text" name="celebrity">
<input type="submit">
</form>
<br>

<?php
 $color = $_GET["color"];
 $plural = $_GET["noun"];
 $celebrity = $_GET["celebrity"];
      echo "Roses are $color <br>";
      echo "$plural are blue <br>";
      echo "I love $celebrity";
        ?>

</body>
</html>