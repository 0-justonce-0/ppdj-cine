<?php
include_once 'dbconnect.php';

$username = $_SESSION['user'];
$bookdate = date("Y-m-d");
$movieid = $_SESSION['movid'];
$round = $_SESSION['round'];
$cinema = $_SESSION['cinema'];

$res = mysqli_query($conn, "SELECT name FROM movie WHERE movieid = '$movieid'");

$row = mysqli_fetch_array($res);
$moviename = $row['name'];


$sql = "INSERT INTO booking(username, moviename, round, bookdate, cinema) VALUES('$username','$moviename','$round','$bookdate','$cinema')";

if(mysqli_query($conn, $sql)) {
	header("Location: complete.php");
}

mysqli_close($conn);
?>