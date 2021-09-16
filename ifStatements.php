<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php
$isMale = true;
$isTall = false;
if ($isMale && $isTall) {
    echo "You are a tall male";
} else if ($isMale && !$isTall) {
    echo "You are a short male";
} else {
    echo "You are not male";
}
?>

<?php
 function getMax($num1, $num2, $num3) {
     if ($num1 > $num2 && $num1 > $num3) {
         return $num1;
     } elseif ($num2 > $num1 && $num2 > $num3) {
         return  $num2;
     } else {
         return  $num3;
     }
 }
 echo getMax(13, 2, 3);
?>

</body>
</html>
