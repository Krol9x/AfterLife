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
    <link rel="stylesheet" type="text/css" href="style/stylewykonawcy.css">

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
                                        <div class="artist">
                                           
                                            <div class="mid">
        
                                            <form action="" method="post">
                                            <div class="jonny"><button type="submit" name="artist" value="Jonny Silverhand" class="btn btn-primary">Next</button><a href="gallery.php"><button type="button" class="btn btn-primary">Gallery</button><h1>Jonny Silverhand</h1></div></a>
                                            <div class="kerry"><button type="submit" name="artist" value="Kerry Eurodyne" class="btn btn-primary">Next</button><a href="gallery.php"><button type="button" class="btn btn-primary">Gallery</button><h1>Kerry Eurodyne</h1></div></a>
                                            <div class="judy"><button type="submit" name="artist" value="Judy Alvarez" class="btn btn-primary">Next</button><a href="gallery.php"><button type="button" class="btn btn-primary">Gallery</button><h1>Judy Alvarez</h1></div></a>
                                            <div class="panam"><button type="submit" name="artist" value="Panam Palmer" class="btn btn-primary">Next</button><a href="gallery.php"><button type="button" class="btn btn-primary">Gallery</button><h1>Panam Palmer</h1></div></a>
                                            </form>
                
                                    <?php
                                            if (isset($_POST["artist"]))
                                    {
                                          $artist = $_POST['artist'];
	                                      header("location: formorder.php");
                                          $_SESSION['artist']=$artist;
                                    }
                                    ?> 
            
                                            </div>
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