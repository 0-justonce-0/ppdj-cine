<?php
$username = $_GET['username'];

include_once 'dbconnet.php';

$sql = "DELETE FROM account WHERE number = '$username'";
if(mysqli_query($conn, $sql)) {
	echo "Deleted!";
} else {
	echo "Failed to delete an account.";	
}

mysqli_close($conn);

?>
