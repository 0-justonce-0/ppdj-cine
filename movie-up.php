<?php
include_once 'dbconnect.php';

$movid = $_POST['movieid'];
$movname = $_POST['moviename'];
$movdes = $_POST['moviedes'];

$sql = "UPDATE movie SET name = '$movname', description = '$movdes' WHERE movieid = '$movid'";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>