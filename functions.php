<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php
    function sayHi($name, $age) {
    echo "Hello $name you are $age";
    }
    sayHi("Juan", 25);
?>

<?php
    function cube($num) {
    return $num * $num * $num;
    }

   echo cube(4);
?>
</body>
</html>