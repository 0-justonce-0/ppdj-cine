<?php
session_start();
if(isset($_SESSION['user'])==""){
	header("Location: customer-signin.html");
}
include_once 'dbconnect.php';

$username = $_SESSION['user'];
$type = $_POST['type'];
$cardNum = $_POST['cardNum'];
$price = 220;

$bookdate = date("Y-m-d");
$movieid = $_SESSION['movid'];
$round = $_SESSION['round'];
$cinema = $_SESSION['cinema'];

$sres = mysqli_query($conn, "SELECT name FROM movie WHERE movieid = '$movieid'");

$srow = mysqli_fetch_array($sres);
$moviename = $srow['name'];


$sql = "INSERT INTO booking(username, moviename, round, bookdate, cinema) VALUES('$username','$moviename','$round','$bookdate','$cinema')";

if(mysqli_query($conn, $sql)) {
		$checkAdd = 1;
	} else {
		$checkAdd = 0;
	}
}


$sql2 = "INSERT INTO payment(username,type,cardno,price) VALUES('$username','$type','$cardNum','$price')";

if(mysqli_query($conn, $sql2) && $checkAdd == 1) {
	header("Location: complete.php");
}

mysqli_close($conn);
?>
