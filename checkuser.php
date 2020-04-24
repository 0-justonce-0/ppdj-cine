<?php
include_once 'dbconnect.php';

$username = $_POST['username'];

$res = pg_query($conn, "SELECT username FROM account WHERE username = '$username'");

while ($row = pg_fetch_array($res)) {
	if($row['username']) {
		echo 1;
	} else {
		echo 0;
	}
}

pg_close($conn);
?>
