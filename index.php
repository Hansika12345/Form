<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div class="container">
    This is my first php
    </div>
    <?php
    define('pi', 3.14);
       echo "Hello php";


        // variables

        $variable1 = 2;
        $variable2 = 3;
        echo $variable1;
        echo $variable2;

        // operators
       // Arithmetic Operators
       echo "<br>"; // for new line
       echo "The value of variable1 + variable2 is";
       echo $variable1 + $variable2;
       // -, *, /, 
        //Assignment Operators
        echo "<br>";
        $newVar = $variable1; // assigning a new variable to an existing variable
       $newVar += 1 ; 
        echo $newVar;
        
        //Comparison Operators
        echo "<br>";
        echo "The value of 1==3 is";
        echo var_dump(1==4);
        // !=, >=, <=

        //Increment/Decrement Operators
        echo $variable1++;
        echo ++$variable1;
        // --, ++
      //  Logical Operators
      echo "<br>";
      $myVar = (true and true);
      echo var_dump($myVar);


      //Data types in php
     // 1. String
     echo "<br>";
     $var = "this is a string";
     echo var_dump($var);



      //2. Integer
      echo "<br>";
      $var = 56;
      echo var_dump($var);



      //3. Float
      echo "<br>";
      $var = 5.6;
      echo var_dump($var);



      //4. Boolean
      echo "<br>";
      $var = true;
      echo var_dump($var);
      echo pi;

      //5. Array
      //6. Object

    

    ?>
</body>
</html>