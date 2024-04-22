<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>After Life</title>
    <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />
    <link rel="stylesheet" type="text/css" href="style/contact.css" />

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
                <div class="contact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9774.542390283532!2d21.005995!3d52.231838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc2e97ae5311f2dc2!2sPa%C5%82ac%20Kultury%20i%20Nauki!5e0!3m2!1spl!2spl!4v1610501543229!5m2!1spl!2spl" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        <h3><a href="https://outlook.office.com/">Email: afterlife@gmail.com</a></h3>
                        <h3><a href="https://www.instagram.com/">Instagram: afterlife</a><h3>
                        <h3><a href="https://www.facebook.com/">Facebook: afterlife</a><h3>
                        <h3><a href="https://www.twitter.com/">Twitter: afterlife</a><h3>
                        <h3>Adress: plac Defilad 1, DD9D1 Warszawa<h3>
                        <h3>Open: Monday - Friday 7.30 a.m. - 8.00 p.m.<h3>



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