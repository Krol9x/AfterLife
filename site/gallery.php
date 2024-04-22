<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>After Life</title>
    <link rel="stylesheet" href="style/stylemenu.css"/>
    <link rel="stylesheet" href="style/lightbox.min.css"/>
    <link rel="stylesheet" href="style/stylegallery.css"/>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">Gallery</h3>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <div class="main-container">
            <div class="main">
                <header>
                    <div class="gallery">
                        <a href="style/img/image1.jpg" data-lightbox="gallery"><img src="style/img/image1.jpg"></a>
                        <a href="style/img/image74.jpg" data-lightbox="gallery"><img src="style/img/image74.jpg"></a>
                        <a href="style/img/image77.jpg" data-lightbox="gallery"><img src="style/img/image77.jpg"></a>
                        <a href="style/img/image3.jpg" data-lightbox="gallery"><img src="style/img/image3.jpg"></a>
                        <a href="style/img/img95.jpg" data-lightbox="gallery"><img src="style/img/img95.jpg"></a>
                        <a href="style/img/image5.jpg" data-lightbox="gallery"><img src="style/img/image5.jpg"></a>
                        <a href="style/img/image7.jpg" data-lightbox="gallery"><img src="style/img/image7.jpg"></a>
                        <a href="style/img/image6.jpg" data-lightbox="gallery"><img src="style/img/image6.jpg"></a>
                        
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