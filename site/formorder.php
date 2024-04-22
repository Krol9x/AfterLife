<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
    date("Y-m-d"); 
    
}
?>


<html>
<head>
    <title>Profil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="style/styleformorder.css">
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
        <div class="left">
            <div class="left1">

            </div>
        </div>
        <div class="right">
            <div class="right1">

                <h2>Fill out the form to share your tattoo idea with artist.</h2>
                
                </br></br>
                     
                    <form action="" method="post">


                        <div class="form-group">
                            <h5>Do you want color?</h5>

                            <input type="radio" id="color1" name="color" value="Yes" required>
                            <label for="color1">Yes</label>
                            <input type="radio" id="color2" name="color" value="No" required>
                            <label for="color2">No</label>
                        </div>
                        </br></br>

  
                       
                        <div class="form-group">
                            <h5>What size do you want?(cm)</h5>

                            Width: <input type="number" id="size1" name="width" min=10 max=100 required>
                            Height: <input type="number" id="size2" name="height" min=10 max=100 required>
                            
                          
                        </div>
                        </br></br>


                        <div class="form-group">
                            <h5>Where would you like the tattoo?</h5>

                            <input type="text" name="where" maxlength="25"  required>
                            
                        </div>
                        </br></br>
                         

                        
                        <div class="form-group">
                            <h5>Add description:</h5>

                            <input type="text" name="mess"  maxlength="100" required>
                            
                        </div>
                        </br></br>
                         
                   

                        <div class="form-group">
                              <h5>Choose the date:</h5>

                             <input id="date1" size="60" type="date" name="date" format="MM/DD/YYYY" placeholder="MM/DD/YYYY" min="<?php echo date('Y-m-d')?>" required/>

                        </div>
                
                     
                        <button type="submit" name="next" class="btn btn-primary">Next</button>

                         <?php
                                    if (isset($_POST["next"]))
                            {
                                  $color = $_POST['color'];
                                  $width = $_POST['width'];
                                  $height = $_POST['height'];
                                  $date = $_POST['date'];
                                  $where = $_POST['where'];
                                  $mess = $_POST['mess'];
                                  $_SESSION['color'] = $color;
                                  $_SESSION['width'] = $width;
                                  $_SESSION['height'] = $height;
                                  $_SESSION['date']=$date;
                                  $_SESSION['mess']=$mess;
                                  $_SESSION['placement']=$where;
	                              header("location: day.php");

                            }

                         ?> 




                    </form>
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
    <script>
        const picker = document.getElementById('date1');
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([0,6].includes(day)){
        e.preventDefault();
        this.value = '';
        alert('Weekends not allowed');
  }
})
    </script>
</html>