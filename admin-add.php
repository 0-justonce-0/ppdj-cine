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
if(pg_query($conn, $sql)) {
	echo 0;
} echo "Failed to add a new member";

mysqli_close($conn);

?>
