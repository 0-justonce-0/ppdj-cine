<?php
$username = $_GET['username'];

include_once 'dbconnet.php';

$sql = "DELETE FROM account WHERE number = '$username'";
if(pg_query($conn, $sql)) {
	echo "Deleted!";
} else {
	echo "Failed to delete an account.";	
}

pg_close($conn);

?>
