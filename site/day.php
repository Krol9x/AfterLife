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
    <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />
    <link rel="stylesheet" type="text/css" href="style/daystyle.css" />
  
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
                                                        <div class="option">
                                                        
                                                        <h1>Choose hour</h1>
                                                        <div class="button-box">
                                                         <form action="" method="post">

                                                         <?php
                                                            $con =mysqli_connect('localhost','root','');

                                                            mysqli_select_db($con, 'userregistration');
                                                            $date = $_SESSION['date'];
                                                            $artist = $_SESSION['artist'];
                                                          
                                                            $one= "select * from ordertable where day = '$date' and hour='08:00' and artist = '$artist' ";
                                                            $result = mysqli_query($con, $one);
                                                            $num1 = mysqli_num_rows($result);

                                                            $two= "select * from ordertable where day = '$date' and hour='11:00' and artist = '$artist' ";
                                                            $result = mysqli_query($con, $two);
                                                            $num2 = mysqli_num_rows($result);

                                                            $three = "select * from ordertable where day = '$date' and hour='14:00' and artist = '$artist' ";
                                                            $result = mysqli_query($con, $three);
                                                            $num3 = mysqli_num_rows($result);

                                                            $four = "select * from ordertable where day = '$date' and hour='17:00' and artist = '$artist'";
                                                            $result = mysqli_query($con, $four);
                                                            $num4 = mysqli_num_rows($result);

                                                            if($num1==1){  
                                                            }else {
	                                                         ?><button type="submit" name="hour" value="08:00" class="btn btn-primary">08:00</button><?php
                                                            }
                                                            if($num2==1){ 
                                                            }else {
	                                                         ?><button type="submit" name="hour" value="11:00" class="btn btn-primary">11:00</button><?php
                                                            }
                                                             if($num3==1){
                                                            }else {
	                                                         ?><button type="submit" name="hour" value="14:00" class="btn btn-primary">14:00</button><?php
                                                            }
                                                            if($num4==1){
                                                            }else {
	                                                         ?><button type="submit" name="hour" value="17:00" class="btn btn-primary">17:00</button><?php
                                                            }
                                                           
	                                                

                                                            ?>
                                                   




                                                        </form>
                                                        <?php
                                                        
                                                         if($num1==1 && $num2==1 && $num3==1 && $num3==1){
                                                                ?>No terms<a href="formorder.php"><button name="noterms" class="btn btn-primary">Go back</button></a><?php
                                                            }
                                                        
                                                        ?>



                                                        </div>
                                                        </div>
                                                        </div>
                                                        <?php
                                                           if (isset($_POST["hour"]))
                                                                   {
                                                                          $hour = $_POST['hour'];
                                                                          $_SESSION['hour']=$hour;
	                                                                      header("location: summary.php");
                                                                   }
                                                        ?>


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