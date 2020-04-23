<?php
session_start();
if(isset($_SESSION['user'])==""){
	header("Location: customer-signin.html");
}
include_once 'dbconnect.php';

$username = $_SESSION['user'];
$type = $_POST['type'];
$cardNum = $_POST['cardNum'];
$price = $_POST['totalprice'];
$seats = $_POST['seats'];
$invoice = $_POST['invoice'];

$bookid = $_POST['bookID'];
$datebooked = $_SESSION['bookdate'];
$bookdate = date("Y-m-d");
$booktime = date("H:i:s");
$movieid = $_SESSION['movid'];
$round = $_SESSION['round'];

$seatEach = explode(",", $seats);
$count = count($seatEach);

for ($i=0; $i < $count; $i++) { 
	$sql = "INSERT INTO booking(username, bookid, datebooked bookingdate, bookingtime, movieid, bookseat, bookround) VALUES('$username','$bookid','$datebooked','$bookdate','$booktime','$movieid','$seatEach[$i]','$round')";
	if(mysqli_query($conn, $sql)) {
		$checkAdd = 1;
	} else {
		$checkAdd = 0;
	}
}


$sql2 = "INSERT INTO payment(invoice,username,type,cardno,price) VALUES('$invoice','$username','$type','$cardNum','$price')";

if(mysqli_query($conn, $sql2) && $checkAdd == 1) {
	header("Location: complete.html");
}

mysqli_close($conn);
?>