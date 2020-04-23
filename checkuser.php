<?php
include_once 'dbconnect.php';

$username = $_POST['username'];

$res = mysqli_query($conn, "SELECT username FROM account WHERE username = '$username'");

while ($row = mysqli_fetch_array($res)) {
	if($row['username']) {
		echo 1;
	} else {
		echo 0;
	}
}

mysqli_close($conn);
?>