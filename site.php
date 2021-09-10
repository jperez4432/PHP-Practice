<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<form action = "site.php" method = "get">
Name: <input type="text" name="name">
<br>
Age: <input type="text" name="age">
<button type="submit">Submit</button>
</form>
<br>
<h2>Your name is <?php echo $_GET["name"] ?> </h2>
<h2>Your age is <?php echo $_GET["age"] ?> </h2>
<?php
//how to get the input values
echo $_GET["name"];


// Intro to PHP
//  $phrase = "To be or not to be <br>";
//  $br = "<br>";
//  $age = 25;
//  $gpa = 3.8;
//  $isMale = true;
//
// echo $phrase;
//
// echo strtolower($phrase);
// echo strtoupper($phrase);
// echo strlen($phrase);
// echo $phrase[0];
// echo "Juan"[2];
//
//
// $phrase[0] = "D";
// echo $phrase;
//
// echo str_replace("be", "code", $phrase);
//
// echo substr($phrase, 9, 3);
// echo $br;
// echo 40;
// echo $br;
// $num = 11;
// echo $num;
// $num++;
// echo $num;
// echo $br;
// echo abs(-100);
// echo $br;
// echo pow(2, 4);
// echo sqrt(144);
// echo $br;
// echo max(2, 10);
// echo $br;
// echo round(3.2);
// echo $br;
// echo ceil(3.3);



?>


</body>
</html>