<?php
include_once 'dbconnect.php';

$username = $_POST['username'];

$sql = "DELETE FROM account WHERE username = '$username'";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>