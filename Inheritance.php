<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

<?php 
    class Chef {
        function makeChicken() {
            echo "The chef makes chicken<br>";
        }
        function makeSalad () {
            echo "The chef makes salad<br>";
        }
        function makeSpecialDish() {
            echo "The chef makes ribs<br>";
        }
    }

    class ItalianChef extends Chef {
            function makesPasta(){
                echo "The chef makes Pasta<br>";
            }
            //overriding the function from the chef class it extended
            function makeSpecialDish()
            {
                echo "The chef makes Alfredo";
            }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    $italianChef->makesPasta();

    $chef->makeSpecialDish();
    $italianChef->makeSpecialDish();
?>

</body>
</html>