<?php

require('dbconnect.php');
	if(isset($_REQUEST['email'])) {
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$password=$_REQUEST['password'];
		//Checking is user existing in the database or not
		$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
		$run_query=mysqli_query($conn,$sql)  or die(mysql_error());
		$count=mysqli_num_rows($run_query);

		if($count==1){
				$_SESSION['email'] = $email;
				echo "Error message: " . mysqli_connect_error();
				echo 'You have entered valid use name and password';
				// header("Location: userlogged_header.php");
		}else {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			// header('location:../index.php');
		 }
			
	} 


?>
