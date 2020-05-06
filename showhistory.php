<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])=="") {
	header("Location: customer-signin.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDJ - Booking history</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/forcompany.css">
    <link rel="stylesheet" href="css/admin-signin.css">
    <link rel="stylesheet" href="css/showuser.css">
    <script src="js/login.js"> </script>
</head>

<body class="cine" id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown" id="new">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="register.html">Register</a></li>

                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Sign in</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="admin-signin.html">Admin Sign in</a></li>
                                    <li><a href="customer-signin.html">Customer Sign in</a></li>
                            </li>


                        </ul>
                    </li>

                </ul>
                </li>
                <li class="dropdown" id="old">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"
                            id="wuser">Welcome!</span>
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

    <div style="text-align: center;">
        <a class="showuser" href="index.html">Home</a>
    </div>

    <div>
        <h1>History of booking</h1>
    </div>
    <br>
    <table class="content-table">
        <tr>
            <th>Booking ID</th>
            <th>Movie</th>
            <th>Round</th>
            <th>Date</th>
        </tr>
        <tbody>

        <?php
	    $username = $_SESSION['user'];
            $sql = "SELECT bookid,moviename,round,bookdate FROM booking WHERE username = '$username'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td>" . $row['bookid'] . "</td>";
                    echo "<td>" . $row['moviename'] . "</td>";
                    echo "<td>" . $row['round'] . "</td>";
                    echo "<td>" . $row['bookdate'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No booking history record found.";
            }
            echo "</tbody>";
        ?>

        </table>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="container-fluid text-center">
        <a href="#" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>PPDJ-cinema.com</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
</body>

</html>

<?php
mysqli_close($conn);
?>
