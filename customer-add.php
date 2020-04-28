<?php
include_once 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['pwd'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$birthday = $_POST['bday'];
$phone = $_POST['phonenum'];

$sql = "INSERT INTO account(username,password,fname,lname,email,gender,birthday,phont) VALUES('$username','$password','$fname','$lname','$email','$gender','$birthday','$phone')";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>