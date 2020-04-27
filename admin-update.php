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

$sql = "UPDATE account SET username = '$username', password = '$password', fname = '$firstname', midname = '$midname', lname = '$lastname', email = '$email', gender = '$gender', birthday = '$birthday', phone = '$phonenum') WHERE number = '$username'";
if(!mysqli_query($conn, $sql)) {
	echo "Failed to update an account."\n";
} else {
	echo 0;
}
mysqli_close($conn);

?>
