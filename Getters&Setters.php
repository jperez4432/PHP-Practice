<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
 <?php 
    class Movie {
        public $title;
        private $rating; 

        function __construct($title, $rating) {
            $this->title = $title;
            //this forces the setter to go through the function to make sure it has to follow its rules and 
            //one of the offered guidelines so you cant type anything you want
            $this->setRating($rating);
        }
// Getters and setters below. use -> instead of . like in Java.
        function getRating() {
            return $this->rating;
        }
        function setRating ($rating) {
        // $this->rating = $rating;
        if ($rating == "G" || $rating == "PG" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
        }
    }

    $avengers = new Movie("Avengers", "Dog");
   // $avengers->setRating("Dog");
    echo $avengers->getRating();
 ?>

</body>
</html>