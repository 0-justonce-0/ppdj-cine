<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['bookdate']);
unset($_SESSION['movid']);
unset($_SESSION['round']);
header("Location: index.html");
?>