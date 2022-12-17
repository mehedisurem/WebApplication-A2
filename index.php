<?php
    $submitMessage=false;
    if(isset($_POST['name'])){
      $server = "localhost";
      $username = "root";
      $password = "";
       $db="logindb";
      $con = mysqli_connect($server, $username, $password,$db);

    if(!$con){
        die("connection to database failed due to ".mysqli_connect_error());
    }
    else{
        //echo "<h1>Successfully connected to DB<h1>";
        $name=$_POST['name'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $message=$_POST['message'];
        if($name!=""){
          
            $sql= "INSERT INTO `contactus`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$mobile', '$message' )";     

        
        
        if ($con->query($sql) == true) {
          $submitMessage=true;
          
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $con->close();
        }
      } 
    } 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="indexstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1> <br>
  <h1> <?php
        if($submitMessage==false){
          
            echo "<p>Feelfree to message us</p>";

        }
        else if($submitMessage==true){
          echo "New record created successfully";
            echo "<p><b>Thanks For Contacting US</b></p>";

        }

        
        ?></h1>

 


  <br>
  <br>
  <br>
  <form class="contact-form" action="index.php" method="POST">
    <input type="text" class="contact-form-text" placeholder="Your name" name="name">
    <input type="email" class="contact-form-text" placeholder="Your email" name="email">
    <input type="text" class="contact-form-text" placeholder="Your phone" name="mobile">
    <textarea class="contact-form-text" placeholder="Your message" name="message"></textarea>
    <button type = "submit" class="contact-form-btn">Send</button>
    <button type = "button" class="contact-form-btn-2"> <a href="login.php">Login</a> </button>

  </form>
</div>


  </body>
</html>
