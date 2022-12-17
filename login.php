

 <?php
if(isset($_POST['username'])){
    $server = "localhost";
    $username = "root";
    $password = "";
     $db="logindb";
   
    $con = mysqli_connect($server, $username, $password,$db);


    if(!$con){
        die("connection to database failed due to ".mysqli_connect_error());
    }
    else{

        if(isset($_POST['username'])){
            $uName=$_POST['username'];

        $uPass=$_POST['password'];
            $sql = "SELECT * FROM `loginform` where User='$uName' and Pass='$uPass'";


           $result=$con->query($sql);

        if($result->num_rows >0){
            header('Location: adminHome.php');
            
        }
        
        else{
            echo "Invalid username and password"; header('Location: login.php');
        }
        }
       

        


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
 	</div>
 	<div class="main">
 		<form method="POST" input="login.php">
         
 			<span>
 				<i class="fa fa-user"></i>
 				<input class="input" type="text" placeholder="User Name" name="username">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input class="input" type="password" placeholder="Password" name="password">
 			</span><br>
 				<button type = "submit" >login</button>

 		</form>
 	</div>
 </div>
        </form>
    </div>
</body>
</html>