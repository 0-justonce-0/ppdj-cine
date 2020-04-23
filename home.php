<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])) {
	echo $_SESSION['user'];
} else {
	echo 0;
}
?>