<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class = "container">
        This is my first PHP Website
    </div>    

    <?php
    define("PI", 3.14);
        echo "Hello world this is printed using php";

        // operators in php
        // Airthmetic operators
        echo "The value of sum o two variables is ";
        $variable2  = 69;
        $variable1 = 61;
        echo "<br>";
        echo $variable1 + $variable2;
        echo "<br>";
        echo $variable1 - $variable2;
        echo "<br>";
        echo $variable1 * $variable2;
        echo "<br>";
        echo $variable1/$variable2;


        //Primary Data Types
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        echo "<br>";
        $var = "This is a String";
        echo var_dump($var);
        echo "<br>";
        $var = True;
        echo var_dump($var) ;
        echo "<br>";
        echo PI;
        // Assignment operators
        // Comparison operators
        // Increment/decrement operators
        // Logical Operators

    ?>    
</body>
</html>