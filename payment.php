<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])==""){
	header("Location: customer-signin.html");
}
$round = $_POST['timelist'];
$_SESSION['round'] = $round;
$movid = $_POST['movid'];
$_SESSION['movid'] = $movid;
$cinema = $_POST['cinema'];
$_SESSION['cinema'] = $cinema;
?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDJ - Payment</title>
	<link type="text/css" rel="stylesheet" href="css/pay-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/pay.js"></script>
    <link type="text/css" rel="stylesheet" href="css/seat-style.css">
</head>
<body>

	<div class="pymnt">
        <form name="myForm2" onsubmit="return validateForm();" action="booking.php" method="POST">
            <div>Total price: 220 Baht.</div>
            <br>
            Payment options: <input class="method" id="mscd" type="radio" name="type" value="master" />
                            <label for="mscd">Master card</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="method" id="vscd" type="radio"
                name="type" value="visa" />
            <label for="vscd">Visa card</label><br>
            <br>
            <div class="payment-info">
                Card number:
                <input class="card-long" type="text" name="cardNum" onkeypress="isNum(event)" placeholder="ex.xxxx-xxxx-xxxx-xxxx" required><br><br>
                Card exp:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="card-short" type="text" name="cardExp" placeholder="ex.xx/yy" required><br><br>
                CCV:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="card-short" type="password" name="cardCCV" placeholder="ex.xxx" required>
            </div>
            <br><br>
            <input class="confirm" type="submit" value="Pay">
        </form>
    </div>

</body>
</html>

<?php
mysqli_close($conn);
?>