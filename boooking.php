<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])=="") {
  header("Location: index.html"); 
}

$username = $_SESSION['user'];
$type = $_POST['type'];
$cardNum = $_POST['cardNum'];

$bookdate = date("Y-m-d");
$movieid = $_SESSION['movid'];
$round = $_SESSION['round'];
$cine = $_SESSION['cinema'];

$res = mysqli_query($conn, "SELECT name from movie WHERE movieid = '$movieid'");
$row = mysqli_fetch_array($res);
$moviename = $row['name'];

$sql = "INSERT INTO booking VALUES('$username','$moviename','$round','$bookdate','$cinema')";
mysqli_query($conn, $sql);

$sql2 = "INSERT INTO payment VALUES('$username','$type','$cardNum','220')";
mysqli_query($conn, $sql2);

header("Location: complete.php");

mysqli_close($conn);
?>
