<?php
$username = $_GET['username'];
$password = $_GET['pwd1'];
$firstname = $_GET['fname'];
$lastname = $_GET['lname'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$birthday = $_GET['birthday'];
$phonenum = $_GET['phone'];

if(isset($_GET['mname'])==""){
	$midname = "";
}

include_once 'dbconnet.php';

$sql = "INSERT INTO account VALUES('$username','$password','$firstname','$midname','$lastname','$email','$gender','$birthday','$phonenum')";
if(!mysqli_query($conn, $sql)) {
	echo "Error message: " . mysqli_error($conn)."\n";
} else {
	echo 0;
}

mysqli_close($conn);

?>