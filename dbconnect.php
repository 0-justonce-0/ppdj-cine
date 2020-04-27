<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b8f83d13cf9bb0";
$password = "b122fa66";
$dbname = "heroku_05e0f09d37578ed";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
	echo 'Failed to connect to MySQL ' . mysqli_connect_error();
}
?>
