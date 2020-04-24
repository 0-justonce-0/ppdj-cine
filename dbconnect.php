<?php

$servername = "ec2-3-231-46-238.compute-1.amazonaws.com";
$username = "tiqxtmdxejqirl";
$password = "5a13415c33a740c9e0a29d0874cb47934033c4418872cd3aecfeeec3d6b872d6";
$port = "5432";
$dbname = "dd18of86m8s8od";

$connection = "nysql:host=$servername, dbname=$dbname, port=$port";
//$conn = pg_connect($connection);
$conn = new PDO($connection,user=$username, password=$password);

// if(mysqli_connect_errno()) {
// 	echo 'Failed to connect to MySQL ' . mysqli_connect_error();
// }
?>
