<?php 

	$host='localhost';
	$username='root';
	$pass='password@123';
	$db='flipkart';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>