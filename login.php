
<?php
$checkUserExist=false;
 // import   database connection from connection.php
 include 'connection.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uName=$_POST['username'];
        $uPass=$_POST['password'];

        $sql = "SELECT * FROM `loginform` where User='$uName' and Pass='$uPass'"; //0 
        $result=$con->query($sql);
        if($result->num_rows >0){
            header('Location: adminHome.php');            
        }      
        else{
            $checkUserExist=true;  
            header('Location: login.php');
        }
        }

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>


<body>
<div class="container">
 	<div class="header">
 		<h1>Admin login</h1>
         <h1> <?php
        if($checkUserExist==false){
            echo "<p></p>";
        }
        else{
        //   echo "New record created successfully";
            echo "<p><b>Invalid username and passwordS</b></p>";
        }     
        ?></h1>
 	</div>
 	<div class="main">
 		<form method="POST" input="login.php">
         
 			<span>
 				<i class="fa fa-user"></i>
 				<input class="input" type="text" placeholder="User Name" name="username" required>
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input class="input" type="password" placeholder="Password" name="password" required>
 			</span><br>
 				<button type = "submit" >login</button>

 		</form>
 	</div>
 </div>
        </form>
    </div>
</body>