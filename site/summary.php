<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<html>
<head>
    <title>Profil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />
    <link rel="stylesheet" type="text/css" href="style/stylesummary.css">
  
  
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
    
                                        <div class="all">
                                            <div class="summary">
                                                <h1>Summary<h1>
                                                <h5> date: <?php echo $_SESSION['hour']?> <?php echo $_SESSION['date'];?> </br> artist: <?php echo $_SESSION['artist'];?>, size: <?php echo $_SESSION['width']?> / <?php echo $_SESSION['height']?>, color: <?php echo $_SESSION['color']?>  </h5>
                                                <div class="button-box">

                                                  
                                                        <form action="order.php" method="post">

                                                        <h1><label>Enter blik number</label>

                                                        </br>
                                                        <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}"  onfocus="if(this.value=='' || this.value == '___-___') this.value=''" onblur="if(this.value == '') {this.value=this.defaultValue}" onkeyup="keyUp();" maxlength="7" title="___-___" required>
                                                        </h1></br>
                                                        <h5> You need to pay 50$ in advance to reserve term</h5>
                                                      


                                                        <h1>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                        <a href="zalogowany.php"><button type="button" class="btn btn-primary">Cancel</button></a>
                                                        </h1>
                                                    
                                                </div>
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