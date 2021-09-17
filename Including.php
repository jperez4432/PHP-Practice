<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php include "header.html"
?>
?

<?php include "footer.html" ?>
 

<?php 
// this is how you can assign the variables through Include files if theyre not declared
$title = "My First Post";
$author = "Mike";
$wordCount = 400;
include "article-header.php"
?>

<?php include "useful-tools.php";
echo $feetInMiles;
 ?>

</body>
</html>
