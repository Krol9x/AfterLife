<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<head>
    <title>Profil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="style/styleoption.css">
    <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />
   
  
</head>
<body>
   <div class="container">
                        <div class="navbar">
                            <div class="menu">
                                <h3 class="logo">After Life</h3>
                                <div class="hamburger-menu">
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>

                          <div class="main-container">
                                <div class="main">
                                    <header>
                                            <div class="container">

 
                                                    <div class="left">
           

                                                        </br>
                                                        <a href="wykonawcy.php">
                                                        <div class="opcja1">
                                                         <h2>Booking</h2>
                                                        </div>
                                                        </a>
                                                    </div>

                                                    <div class="right">

                                                        </br>
                                                    <a href="myorders.php">
                                                        <div class="opcja2">
                                                           <h2>Timetable</h2>
                                                       
                                                     </div>
                                                    </a>

                                            </div>


                            
                          </header>
                    </div>

            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>

        <div class="links">
            <ul>
                <li>
                    <a href="index.php" style="--i: 0.05s;">Home</a>
                </li>
                <li>
                    <a href="gallery.php" style="--i: 0.1s;">Gallery</a>
                </li>
                <li>
                    <a href="contact.php" style="--i: 0.15s;">Contact</a>
                </li>
                <li>
                    <a href="zalogowany.php" style="--i: 0.2s;">Booking</a>
                </li>
                <li>
                    <a href="logout.php" style="--i: 0.25s;">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="js/app.js"></script>

                                                       
  
</body>
</html>