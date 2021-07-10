<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php1</title>
    
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        
        padding: 23px;

    }
    </style>
<body>
    <div class="container">
    <h1>Lets learn php</h1>
    <p>Your party status is here</p>
    <?php
    
    $age = 34;
    if ($age>18) {

     echo "alert(you can go to party)";
    }
    else{
        echo "alert(you cannot go to party)";
    }

        //Array- A special variable which holds more than one value at a time

        $languages = array("python", "C++", "php", "NodeJs");
        echo $languages[1];
        echo count($languages);

        //Loops in PHP
        $a = 0;
        while ($a <= 10) {
          echo "<br>The value of a is: ";
          echo $a;
          $a++;
        }

          //Iterating arrays in php using while Loop
          $a = 0;
          while ($a < count($languages)) {
            echo "<br>The value of language is: ";
            echo $languages[$a];
            $a++;
          }

           // using do while Loop in php
           $a = 20;
     do{
          echo "<br>The value of a is: ";
          echo $a;
          $a++;
        }  while ($a <= 10);

          // using for Loop in php
          
          for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of a is: ";
            echo $a;
          }

            // using for each Loop in php
          
          foreach ($languages as $value) {
              echo "<br> the value is: ";
              echo $value;
          }


            //functions in php

            function print5(){
                echo "<br>FIVE";
            }
            print5();

            function print_number($number){
                echo "<br> the number is: ";
                echo $number;
            }
            print_number(34);
            print_number(23);
            print_number(21);
    ?>
    </div>
</body>
</html>