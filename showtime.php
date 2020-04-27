<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/stt-style.css">
    <title>PPDJ - Showtime</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/forcompany.css">
    <link rel="stylesheet" href="css/admin-signin.css">
    <script src="js/login.js"></script>
</head>

<header></header>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Home</a>
                <a class="navbar-brand" href="showtime.php">Showtime</a>
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
                              <li><a tabindex="-1" href="admin-signin.html">Admin Sign in</a></li>
                              <li><a href="customer-signin.html">Customer Sign in</a></li>
                              </li>
                        
                    
                            </ul>
                          </li>
                        
                        </ul>
                    </li>
                      <li class="dropdown" id = "old">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
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
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates">
            <div class="schedule-item schedule-item-selected">
                <?php
                    $date1 = date("d M Y", strtotime('-1 day'));
                    echo $date1;
                ?>
            </div>
            <div class="schedule-item">
                <?php
                    $date = date("d M Y");
                    echo $date;
                ?>
            </div>
            <div class="schedule-item schedule-item-selected">
                <?php
                    $date2 = date("d M Y", strtotime('+1 day'));
                    echo $date2;
                ?>   
            </div>
        </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Shape of Water</h2>
                        <i class="far fa-clock"></i> 123m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>At a top secret research facility in the 1960s, a lonely janitor forms a unique relationship with an amphibious creature that is being held in captivity.
                        </p>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Cinema 1</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">10:00</div>
                                <div class="schedule-item">13:00</div>
                                <div class="schedule-item">17:00</div>
                                <form action="booking.php" method="post">
                                    <select class="select-color fill-focus" name="timelist" required>
                                        <option class="select-color" disabled selected>--เลือกรอบเวลา--</option>
                                        <option class="select-color" value="10">10.00 น.</option>
                                        <option class="select-color" value="13">13.00 น.</option>
                                        <option class="select-color" value="17">17.00 น.</option>
                                    </select>
                                    <input type="text" name="movid" value="mov01" disabled hidden>
                                    <input type="text" name="cinema" value="cinema 1" disabled hidden>
                                    <input type="submit" value="Book">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Inception</h2>
                        <i class="far fa-clock"></i> 148m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.
                        </p>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Cinema 2</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">10:00</div>
                                <div class="schedule-item">13:00</div>
                                <div class="schedule-item">17:00</div>
                                <form action="booking.php" method="post">
                                    <select class="select-color fill-focus" name="timelist" required>
                                        <option class="select-color" disabled selected>--เลือกรอบเวลา--</option>
                                        <option class="select-color" value="10">10.00 น.</option>
                                        <option class="select-color" value="13">13.00 น.</option>
                                        <option class="select-color" value="17">17.00 น.</option>
                                    </select>
                                    <input type="text" name="movid" value="mov02" disabled hidden>
                                    <input type="text" name="cinema" value="cinema 2" disabled hidden>
                                    <input type="submit" value="Book">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Dunkirk</h2>
                        <i class="far fa-clock"></i> 106m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>Allied soldiers from Belgium, the British Empire, and France are surrounded by the German Army, and evacuated during a fierce battle in World War II.
                        </p>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Cinema 3</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">10:00</div>
                                <div class="schedule-item">13:00</div>
                                <div class="schedule-item">17:00</div>
                                <form action="booking.php" method="post">
                                    <select class="select-color fill-focus" name="timelist" required>
                                        <option class="select-color" disabled selected>--เลือกรอบเวลา--</option>
                                        <option class="select-color" value="10">10.00 น.</option>
                                        <option class="select-color" value="13">13.00 น.</option>
                                        <option class="select-color" value="17">17.00 น.</option>
                                    </select>
                                    <input type="text" name="movid" value="mov03" disabled hidden>
                                    <input type="text" name="cinema" value="cinema 3" disabled hidden>
                                    <input type="submit" value="Book">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>The Dark Knight</h2>
                        <i class="far fa-clock"></i> 152m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.
                        </p>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Cinema 4</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">10:00</div>
                                <div class="schedule-item">13:00</div>
                                <div class="schedule-item">17:00</div>
                                <form action="booking.php" method="post">
                                    <select class="select-color fill-focus" name="timelist" required>
                                        <option class="select-color" disabled selected>--เลือกรอบเวลา--</option>
                                        <option class="select-color" value="10">10.00 น.</option>
                                        <option class="select-color" value="13">13.00 น.</option>
                                        <option class="select-color" value="17">17.00 น.</option>
                                    </select>
                                    <input type="text" name="movid" value="mov04" disabled hidden>
                                    <input type="text" name="cinema" value="cinema 4" disabled hidden>
                                    <input type="submit" value="Book">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


    </div>
    <footer class="container-fluid text-center">
        <a href="#" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>PPDJ-cinema.com</p>
    </footer>

    <script src="js/jquery-3.3.1.min.js "></script>
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/ttest.js"></script>
</body>

</html>
