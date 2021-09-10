<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<form action="Arrays.php" method="post">
Apples<input type="checkbox" name="fruits[]" value="apples"><br>
Oranges<input type="checkbox" name="fruits[]" value="oranges"><br>
Bananas<input type="checkbox" name="fruits[]" value="bananas"><br>
<input type="submit">
</form>

<?php
//arrays
// $friends = array("Kevin", "Karen", "Oscar", "Jim");
// $friends[2] = "Dwight";
// $friends[4] = "Michael";
// echo $friends[4];
// echo count($friends);
$fruits = $_POST["fruits"];
echo $fruits[1];
?>

</body>
</html>