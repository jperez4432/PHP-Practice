<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
 $phrase = "To be or not to be <br>";
 $age = 25;
 $gpa = 3.8;
 $isMale = true;

echo $phrase;

echo strtolower($phrase);
echo strtoupper($phrase);
echo strlen($phrase);
echo $phrase[0];
echo "Juan"[2];


$phrase[0] = "D";
echo $phrase;

echo str_replace("be", "code", $phrase);

echo substr($phrase, 9, 3);


?>
</body>
</html>