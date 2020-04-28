<?php
include_once 'dbconnect.php';

$movid = $_POST['movieid'];
$movname = $_POST['moviename'];
$movgenre = $_POST['moviegenre'];
$movdura = $_POST['movieduration'];
$movdes = $_POST['moviedes'];

$sql = "INSERT INTO movie VALUES('$movid','$movname','$movgenre','$movdura','$movdes')";
if(mysqli_query($conn, $sql)) {
	header("location: adminpg.html");
}

mysqli_close($conn);
?>