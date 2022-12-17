<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home Page</title>
	<link rel="stylesheet" href="adminstyle.css">
</head>
<body>
	<main class="table">
		<section class="table_header">
			<h1>Customer's Messages</h1>
		</section>
		<section class="table_body">
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>phone</th>
						<th>messages</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td data-label='id'>1</td>
					<td data-label='name'>Surem</td>
					<td data-label='email'>2030069@iub.edu.bd</td>
					<td data-label='phone'>15658947</td>
					<td data-label='message'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi consectetur et qui adipisci maiores facere?</td>
				</tr>
				<?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $db= "logindb";
                $con = mysqli_connect($server, $username, $password, $db);
                $sql = "SELECT * FROM `contactus`";
         
                $result=$con->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td data-label='id'>" .$row["id"]. "</td><td data-label='name'> " . $row["name"]."</td><td data-label='email'> ". $row["email"]."</td><td data-label='phone'> ". $row["phone"]."</td><td data-label='message'> ". $row["message"]."</td><tr> ";
                    }
                    
                }else{
                    echo "no result";
                }
                $con->close();
            ?>
				
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>
<!-- //C:\xampp\htdocs\CSC450Assignment2\adminHome.php -->