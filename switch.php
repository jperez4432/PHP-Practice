<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
</form>

<?php
$grade = $_POST["grade"];
switch ($grade) {
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good!";
        break;
    case "C":
        echo "You barely passed";
        break;
    case "D":
        echo "You failed!";
        break;
    default:
        echo "Invalid Grade";
}
?>

</body>
</html>
