<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>After Life</title>
    <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />
    <link rel="stylesheet" type="text/css" href="style/styleindex.css" />
    <style type="text/css">
    body {
        overflow-y: hidden;
    }
</style>
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
                            <ul class="slideshow">
                              <li><span>Image 01</span><div><h3>After LIfe</h3></li>
                              <li><span>Image 02</span><div><h3>Tatto and piercing</h3></li>
                              <li><span>Image 03</span><div><h3>Order now</h3></li>
                              <li><span>Image 04</span><div><h3>After LIfe</h3></li>
                              <li><span>Image 05</span><div><h3>Tatto and piercing</h3></li>
                              <li><span>Image 06</span><div><h3>Order now</h3></li>
                              
                             
                            </ul>
                              <div class="containerslide">
                                
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
                <?php
                    session_start();
                    if (!isset($_SESSION['username'])){
                        ?>
                            <a href="login.php" style="--i: 0.25s;">Login</a>
                        <?php
                    }else{
                         ?>
                            <a href="logout.php" style="--i: 0.25s;">Logout</a>
                         <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>