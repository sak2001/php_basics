<?php

    $is_true = false;
    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        // username is root and password is null in local host

        $con = mysqli_connect($server,$username,$password);


        if(!$con){
            die("connection to this databasee failed due to" . mysqli_connect_eror());

        }

        // echo "succes connecting to the db";

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];  
        $sql = "INSERT INTO `iitr_trip` . `trip` ( `NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONE`, `OTHER`, `dt`) 
                    VALUES ( '$name', '$age ', '$gender', '$email', '$phone', '$desc', current_timestamp());";

        // echo $sql;   
        
        if($con->query($sql) == true){
            $is_true = true;
        }
        else{
            echo "ERROR :  $sql <br> $con->error";
        }

        $con->close();
    }    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class = "bg" src="bg.jpg" alt="IIT R">
    <div class="container">
        <h1>Welcome to IIT Roorkee Trip form</h1>
        <p>Enter Your Details</p>
        <?php
        if($is_true == true){
        echo "<p class='submit_msg'>Thanks for Submitting your form. We are happy to see you comming</p>";
        }
        ?>

        <form action="index.php" method = "post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type ="text" name = "age" id = "age" placeholder="Enter Your Age">
            <input type = "text" name = "gender" id = "gender" placeholder="Enter Your gender">
            <input type = "email" name="email" id = "email" placeholder="Enter Your email">
            <input type = "phone" name = "phone" id = "phone" placeholder="Enter your phone">
            <textarea name = "desc" id="desc" cols="30" rows="10" placeholder="Enter your description"></textarea>

        
            <button class="btn"> Submit</butotn>
        </form>     

    </div>

    <script src="index.js"></script>
  </body>
</html>




