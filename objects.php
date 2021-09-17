<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>


    <?php
    class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa)
        {
            $this-> name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        } 
        function hasHonors(){
            if($this->gpa >= 3.5) {
                return "true";
            } else 
            return "false";
        } 

    }    
        $student1 = new Student("Juan", "Business", 3.9);
        $student2 = new Student("Miranda", "Sociology", 4.0);

          echo $student1->hasHonors();
       // echo $student1->name;
       // echo $student1->gpa;
       // echo $student2->major;
        
    
    ?>

</body>

</html>