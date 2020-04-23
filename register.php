<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: homepage.html");
}
include_once 'dbconnect.php';

 $username = $_POST['username'];
 $firstname =$_POST['firstname'];
  $lastname =$_POST['lastname'];
   $tel =$_POST['tel'];
 $email = $_POST['email'];
 $pwd1 = $_POST['pwd1'];

 if(isset($_POST['middlename'])){
 	$middlename = $_POST['middlename'];
 }else{
 	$middlename = "";
 }

  if(isset($_POST['gender'])){
 	$gender = $_POST['gender'];
 }else{
 	$gender = "";
 }

  if(isset($_POST['birthday'])){
 	$birthday = $_POST['birthday'];
 }else{
 	$birthday = "";
 }

 $sql = "INSERT INTO account(username,password,fname,midname,lname,email,gender,birthday,phone) VALUES('$username','$pwd1','$firstname','$middlename','$lastname','$email','$gender','$birthday','$tel')";
 if(mysqli_query($conn, $sql)) {
 	$_SESSION['user'] = $username;
 	header("Location: index.html");
 } else {
 	?>
 		<script>alert('Error while registering...');</script>
 		<?php
 }

mysqli_close($conn)
?>