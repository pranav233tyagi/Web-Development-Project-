<?php
$con = mysqli_connect("localhost:3307","root","","ecommerce") or die(myslqi_error($con));
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)) {
	header('location: login.php?email_error= enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
	header('location: login.php?password_error= enter correct password');
	
}
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);
?>