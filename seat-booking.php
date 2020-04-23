<?php
session_start();
if(isset($_SESSION['user'])=="") {
    header("Location: customer-signin.html");
}
include_once 'dbconnect2.php';

$_SESSION['bookdate'] = $_POST['bookdate'];
$movie = $_POST['movielist'];
if($movie == "shape") {
    $movid = "mov01";
} else if($movie == "incep") {
    $movid = "mov02";
} else if($movie == "dun") {
    $movid = "mov03";
} else if($movie == "dark") {
    $movid = "mov04";
}
$_SESSION['movid'] = $movid;
$round = $_POST['timelist'];
$_SESSION['round'] = $round;

$sql = mysqli_query($conn, "SELECT name FROM movie WHERE movieid = '$movid'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link type="text/css" rel="stylesheet" href="css/seat-style.css">
    <link type="text/css" rel="stylesheet" href="css/pay-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/check-seat.js"></script>
    <script src="js/pay.js"></script>
</head>

<body>

    <div class="booking-part">
    <div class="movie-container">
      <label>Movie: <?php while ($row = mysqli_fetch_array($sql)) { echo "{$row['name']}";} ?></label>
    </div>

    <div class="thisishidden">
        <?php
            $res = mysqli_query($conn, "SELECT bookseat FROM booking B WHERE (B.username = '$_SESSION['user']') AND (B.datebooked = '$_SESSION['bookdate']') AND (B.bookround = '$_SESSION['round'])");
            $datas = array();
            if(mysqli_query($res) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $datas[] = $row;
                }
            }
            ?>
            <p id="hideinfo">
                <?php
            $count = count($datas);
            for($i=0;$i<$count;$i++){
                echo $datas[$i];
                while($i<($count-1)) {
                    echo ",";
                }
            }
        ?>
        </p>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat booked"></div>
        <small>Booked</small>
      </li>
    </ul>

    <div class="test-all">
    <div class="container">
      <div class="screen"></div>
        <br><br>

        <div class="row">
        <label class="row-left">1</label>
        <input class="seat" type="button" value="A1">
        <input class="seat" type="button" value="A2">
        <input class="seat" type="button" value="A3">
        <input class="seat" type="button" value="A4">
        <input class="seat" type="button" value="A5">
        <input class="seat" type="button" value="A6">
        <input class="seat" type="button" value="A7">
        <input class="seat" type="button" value="A8">
        <label class="row-right">1</label>
        </div>
      
        <div class="row">
        <label class="row-left">2</label>
        <input class="seat" type="button" value="B1">
        <input class="seat" type="button" value="B2">
        <input class="seat" type="button" value="B3">
        <input class="seat" type="button" value="B4">
        <input class="seat" type="button" value="B5">
        <input class="seat" type="button" value="B6">
        <input class="seat" type="button" value="B7">
        <input class="seat" type="button" value="B8">
        <label class="row-right">2</label>
        </div>
      
        <div class="row">
        <label class="row-left">3</label>
        <input class="seat" type="button" value="C1">
        <input class="seat" type="button" value="C2">
        <input class="seat" type="button" value="C3">
        <input class="seat" type="button" value="C4">
        <input class="seat" type="button" value="C5">
        <input class="seat" type="button" value="C6">
        <input class="seat" type="button" value="C7">
        <input class="seat" type="button" value="C8">
        <label class="row-right">3</label>
        </div>
      
        <div class="row">
        <label class="row-left">4</label>
        <input class="seat" type="button" value="D1">
        <input class="seat" type="button" value="D2">
        <input class="seat" type="button" value="D3">
        <input class="seat" type="button" value="D4">
        <input class="seat" type="button" value="D5">
        <input class="seat" type="button" value="D6">
        <input class="seat" type="button" value="D7">
        <input class="seat" type="button" value="D8">
        <label class="row-right">4</label>
        </div>
      
        <div class="row">
        <label class="row-left">5</label>
        <input class="seat" type="button" value="E1">
        <input class="seat" type="button" value="E2">
        <input class="seat" type="button" value="E3">
        <input class="seat" type="button" value="E4">
        <input class="seat" type="button" value="E5">
        <input class="seat" type="button" value="E6">
        <input class="seat" type="button" value="E7">
        <input class="seat" type="button" value="E8">
        <label class="row-right">5</label>
        </div>

        <div class="row">
        <label class="row-left">6</label>
        <input class="seat" type="button" value="F1">
        <input class="seat" type="button" value="F2">
        <input class="seat" type="button" value="F3">
        <input class="seat" type="button" value="F4">
        <input class="seat" type="button" value="F5">
        <input class="seat" type="button" value="F6">
        <input class="seat" type="button" value="F7">
        <input class="seat" type="button" value="F8">
        <label class="row-right">6</label>
        </div>
      
    </div>
        <div class="showselect">
            <h1>Selected seat:</h1>
        </div>
        <h1 class="display-val"></h1>
        <br>
        <a href="showtime.html"><input class="back-to-showt" type="button" value="Back"></a>
        <input class="booknow" type="button" value="Book">
    </div>
</div>

    <div class="payment-part">
        <form name="myForm2" onsubmit="return validateForm();" action="booking.php" method="POST">
            <div class="disaplay-selected">You have selected "<span class="selected-val"></span>"</div>
            <div class="display-price">Total price: <input class="price-here" type="text" name="totalprice" disabled> Baht.</div>
            <br>
            Payment options: <input class="method" id="mscd" type="radio" name="type" value="master" />
                            <label for="mscd">Master card</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="method" id="vscd" type="radio"
                name="type" value="visa" />
            <label for="vscd">Visa card</label><br>

            <div class="payment-info">
                Card number:
                <input class="card-long" type="text" name="cardNum" onkeypress="isNum(event)" placeholder="ex.xxxx-xxxx-xxxx-xxxx" required><br>
                Card exp:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="card-short" type="text" name="cardExp" placeholder="ex.xx/yy" required><br>
                CCV:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="card-short" type="password" name="cardCCV" placeholder="ex.xxx" required>
            </div>

            <input class="beforesend" type="text" name="seats" hidden disabled required>
            <input class="displayinvoice" type="text" name="invoice" hidden disabled required>
            <br><br>
            <input class="back-to-seatb" type="button" value="Back">
            <input class="confirm" type="submit" value="Pay">
        </form>
    </div>

</body>

</html>

<?php
mysqli_close($conn);
?>