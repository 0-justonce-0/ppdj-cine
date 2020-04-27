<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b8f83d13cf9bb0";
$password = "5a13415c33a740c9e0a29d0874cb47934033c4418872cd3aecfeeec3d6b872d6";
$dbname = "b122fa66";

$conn = mysqli_connect("host=$servername, user=$username, password=$password, dbname=$dbname");

if(mysqli_connect_errno()) {
	echo 'Failed to connect to MySQL ' . mysqli_connect_error();
}
?>
