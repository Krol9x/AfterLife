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
    <link rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="style/myordersstyle.css">
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
    
                                            <div class="all">
                                                
    
                                                <div class="table-box">
                                                    <?php
                                                    $servername = "localhost";
                                                    $database = "userregistration";
                                                    $username = "root";
                                                    $password = "";
                                                    $costumer= $_SESSION['username'];

                                                    $conn = mysqli_connect($servername, $username, $password, $database);

                                                    if (!$conn) {
                                                             die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "Select * from ordertable where costumer='$costumer';";
                                                    $result = mysqli_query($conn, $sql);
                                                    $resultcheck = mysqli_num_rows($result);

                                                    if($resultcheck > 0){
                                                            echo "<table>";
                                                            echo "<tr><th> Order number </th><th> Artist </th><th> Day of tattoo appointment </th><th> Hour </th><th> Placement </th></tr>";
                                                            while($row = mysqli_fetch_assoc($result)) {

                                                            $rowdelete=  $row['ordernumber'];

                                                            echo "<tr><td>" . $row['ordernumber'] . "</td><td> " 
                                                            . $row['artist']  ."</td><td> " . $row['day'] . "</td><td> " . $row['hour'] . "</td><td> " 
                                                            . $row['where'] . "<td/><td><form action='delete.php' method='post'>
                                                            <button type='submit' value='$rowdelete' name='delete' class='btn btn-primary'>Cancel</button></form></td></tr>";

                                                            }
                                                            echo "</table>";
                                                            ?><h5><a href="zalogowany.php"><button class="btn btn-primary">Go back</button></a></h5><?php
                                                    }
                                                    else{
                                                            ?><h4>Make your first order</h4><h5><a href="wykonawcy.php"><button class="btn btn-primary">Click here</button></a> <a href="zalogowany.php"><button class="btn btn-primary">Go back</button></a></h5><?php
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