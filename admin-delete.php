<?php
$username = $_GET['username'];

include_once 'dbconnet.php';

$sql = "DELETE FROM account WHERE number = '$username'";
if(!mysqli_query($conn, $sql)) {
	echo "Error message: " . mysqli_error($conn)."\n";
} else {
	echo "Deleted!";
}

mysqli_close($conn);

?>