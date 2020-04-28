<?php
include_once 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE account SET password = '$password' WHERE username = '$username'";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>