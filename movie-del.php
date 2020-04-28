<?php
include_once 'dbconnect.php';

$movid = $_POST['movieid'];

$sql = "DELETE FROM movie WHERE movieid = '$movid'";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>