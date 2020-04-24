<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="") {
	header("Location: index.html");
}

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$res = pg_query($conn, "SELECT * FROM staff WHERE username = '$username'");
$row = pg_fetch_array($res);
if($row['password']==$pwd) {
	$_SESSION['user']=$row['username'];
	header("Location: adminpage.html");
} else {
	echo '
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDJ </title>
    <link rel="stylesheet" href="css/forcompany.css">
    <link rel="stylesheet" href="css/admin-signin.css">
    <link rel="stylesheet" href="css/customer-signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/login.js"> </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="index.html">Home</a>
                <a class="navbar-brand" href="showtime.html">Showtime</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						  <li><a href="register.html">Register</a></li>
						  
						  <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Sign in</a>
							<ul class="dropdown-menu">
							  <li><a tabindex="-1" href="#">Manager Sign in</a></li>
							  <li><a href="customer-signin.html">Customer Sign in</a></li>
							  </li>
						
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcom!</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">History</a></li>							
							<li><a href="#" id="logout">Sign out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h1>PPDJ <span class="sigma">Σ</span>-nema</h1> 
	</div>
	
	<div class="container" id="homepage">
		<h1>Opps</h1>
		<p>Incorrect username or password, Sign in again >> <a href="customer-signin.html"></a></p>

	</div>
</body>
</html>
	';
}
pg_close($conn);
?>
