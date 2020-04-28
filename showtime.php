<?php
session_start();
if(isset($_SESSION['user'])=="") {
	header("Location: customer-signin.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/forcompany.css">
    <link rel="stylesheet" href="css/admin-signin.css">
    <link rel="stylesheet" href="css/st-style.css">
    <script src="js/login.js"> </script>
    <script src="js/st.js"></script>
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
                <a class="navbar-brand" href="showtime.html">Showtime</a>
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

    <div class="center">
        <br><br><br>
        <div>
        <img class="simg1" src="img/shape-of-water.png">&nbsp;&nbsp;
        <img class="simg2" src="img/inception.jpg">&nbsp;&nbsp;
        <img class="simg3" src="img/dunkirk.jpg">&nbsp;&nbsp;
        <img class="simg4" src="img/the-dark-knight.jpg">
        </div>
        <br>
        <br>
        <br>
        

        <form action="booking.php" class="showtime" name="showtime-form" method="POST">
            Select date: <input class="select-color fill-focus" type="date" name="bookdate">&nbsp;&nbsp;
            <label>Movie: </label>
            <select class="select-color fill-focus" id="movsel" name="movielist">
                <option class="select-color" disabled>--Select movie--</option>
                <option class="select-color" value="Shape of water">Shape of water</option>
                <option class="select-color" value="Inception">Inception</option>
                <option class="select-color" value="Dunkirk">Dunkirk</option>
                <option class="select-color" value="The dark knight rises">The dark knight rises</option>
            </select>

        <br>
        <br>
        <br>

        <div class="flex-container go-center">
            <label>Select time: </label>&nbsp;&nbsp;
            <select class="select-color fill-focus" name="timelist">
                <option class="select-color" disabled>--เลือกรอบเวลา--</option>
                <option class="select-color" value="9">9.00 น.</option>
                <option class="select-color" value="13">13.00 น.</option>
                <option class="select-color" value="17">17.00 น.</option>
            </select>
        </div>
        <br><br>
        <input class="send-to-book" type="submit" value="Confirm">
    </form>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="container-fluid text-center">
        <a href="#" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>PPDJ-cinema.com</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
</body>

</html>
