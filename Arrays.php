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

<form action="Arrays.php" method="post">
<input type="text" name="name">
<input type="submit">

<?php
//arrays
// $friends = array("Kevin", "Karen", "Oscar", "Jim");
// $friends[2] = "Dwight";
// $friends[4] = "Michael";
// echo $friends[4];
// echo count($friends);
$fruits = $_POST["fruits"];
echo $fruits[1];
//associated array, i can access the data by grabbing the key ie the names listed below
$grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
$grades["Jim"] = "F";
//to check by key, or to count all the keys within the array
// echo $grades["Jim"];
// echo count($grades);
echo $grades[$_POST["name"]];

?>

</body>
</html>