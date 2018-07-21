
<?php

/* Form Required Field Validation */
// foreach($_POST as $key=>$value) {
// 	if(empty($_POST[$key])) {
// 	$error_message = "All Fields are required";
// 	break;
// 	}
// }
/* Password Matching Validation */
// if($_POST['password'] != $_POST['confirm_password']){ 
// $error_message = 'Passwords should be same<br>'; 
// }

/* Email Validation */
// if(!isset($error_message)) {
// 	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
// 	$error_message = "Invalid Email Address";
// 	}
// }

/* Validation to check if gender is selected */
// if(!isset($error_message)) {
// if(!isset($_POST["gender"])) {
// $error_message = " All Fields are required";
// }
// }

/* Validation to check if Terms and Conditions are accepted */
// if(!isset($error_message)) {
// 	if(!isset($_POST["terms"])) {
// 	$error_message = "Accept Terms and Conditions to Register";
// 	}
// }

require('dbconnect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$phoneno = $_POST['phoneno'];
}
//check for available user-details
$sql = "SELECT id FROM users WHERE email = '$email' LIMIT 1" ;
$check_query = mysqli_query($conn,$sql);
$count_email = mysqli_num_rows($check_query);

if($count_email > 0){
echo "
    <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Email Address is already available Try Another email address</b>
    </div>
";
exit();
}


//validate the phone no here

if(!(strlen($phoneno) == 10)){
    echo "
        <div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Mobile number must be 10 digit</b>
        </div>
    ";
    exit();
    }

    
//validate the Username here

else {
    $query = "INSERT INTO `users` (username,email,phoneno,password) VALUES ('$username','$email','$phoneno','$password');";
$result = mysqli_query($conn, $query);

if($result) {
    echo "New records created successfully";
}
else
{ echo "YOUR REGISTRATION IS IN COMPLETE..."  . $query . "<br>" . mysqli_error($conn); }}

?>