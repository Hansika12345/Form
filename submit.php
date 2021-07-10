<?php
$insert = false;
if(isset($_POST['name'])){

    // set connection variables
    $server = "localhost";
    $username = "root";
    $password  = "";

    // create a database connection
    $con = mysqli_connect($server, $username, $password);

    // check for connection success
    if (!$con) {
       die("connection to this database failed due to " . mysqli_connect_error());
    }
   // echo "success";
    // collect post varibales
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `it` . `car` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
  //  echo $sql;

    // to insert into database 
    // execute the query

   

    if($con->query($sql) == true){
      //  echo "success";

      // flag for successful insertion
      $insert = true; // matlab yaha pe query run hue toh succesfull hogi warna false hogi ki uper default likhi hue hai
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

        // close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <img class="bg" src="1.jpg" alt="img">
    <div class="container">
        <h1>Registration Form</h1>
        <p>Enter your details and submit the form</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submiting</p>"
        };
        ?>

        <form action="submit.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
  
  
</body>



</html>



