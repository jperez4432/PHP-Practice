<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php

$index = 1;
while ($index <= 5) {
    echo "$index <br>";
    $index++;
}



for ($i = 1; $i <= 5; $i++) {
    echo "$i <br>";
}
/*
 * this is for
 * a comment
 * block */
//this is for looping through an array
$luckyNumbers = array(11, 44, 3, 12, 68);
for ($i = 0; $i <= count($luckyNumbers); $i++) {
    echo "$luckyNumbers[$i] <br>";
}

?>

</body>
</html>
