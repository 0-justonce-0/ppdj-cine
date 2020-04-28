<?php
include_once 'dbconnect.php';

$username = $_SESSION['user'];
$date = $_POST['bookdate'];
$moviename = $_POST['movielist'];
$round = $_POST['timelist'];

$sql = "INSERT INTO booking(username,moviename,round,bookdate) VALUES('$username','$moviename','$round','$date')";
if(mysqli_query($conn, $sql)) {
	header("location: showtime.html");
}

mysqli_close($conn);
?>
