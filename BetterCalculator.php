<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form action="BetterCalculator.php" method="post">
      First number:<input type="number" step="0.001" name="num1"><br>
      OP:<input type="text" name="op"><br>
      Second number:<input type="number" step="0.001" name="num2"><br>
      <input type="submit">
</form>
<?php



$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
if ($op == "+") {
    echo $num1 + $num2;
} elseif ($op == "-") {
    echo $num1 - $num2;
} elseif ($op == "*") {
    echo $num1 * $num2;
} elseif ($op == "/") {
    echo $num1 / $num2;
} else {
    echo "Please enter a valid math symbol";
}

?>


</body>
</html>
