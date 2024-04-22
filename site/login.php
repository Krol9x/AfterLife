<!DOCTYPE html>



<html>
<head>
    <meta charset="utf-8" />

     <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
     <link rel="stylesheet" type="text/css" href="style/stylemenu.css" />

    <title>After Life</title>

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

                                        <div class="form">
                                            <div class="login-box">
                                                <div class="row">
                                                    <div class="col-md-6 login-left">
                                                        <h2>Login</h2>
                                                        <form action="validation.php" method="post">
                                                            <div class="form-group">
                                                               <label>e-mail adress</label>
                                                                <input type="email" name="gmail" class="form-control" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" name="pass" class="form-control" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Login</button>
                                                        </form>

                                                    </div>
                                                    <div class="col-md-6 login-right">
                                                         <h2>Registration</h2>
                                                         <form action="registration.php" method="post">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" name="name" class="form-control" maxlength="30"  required>
                                                            </div>
                                                             <div class="form-group">
                                                                <label>Surname</label>
                                                                <input type="text" name="surname" class="form-control" maxlength="30" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>e-mail adress</label>
                                                                <input type="email" name="gmail" class="form-control" value="example@gmail.com" onfocus="if(this.value=='' || this.value == 'example@gmail.com') this.value=''" onblur="if(this.value == '') {this.value=this.defaultValue}" onkeyup="keyUp();" style="text-transform: lowercase;" minlength="6" maxlength="30" required>
                                                            </div>
                                                             <div class="form-group">
                                                                <label>Telephone number</label>
                                                                <input type="tel" name="phone" class="form-control" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{3}"  onfocus="if(this.value=='' || this.value == '99-123-456-789') this.value=''" onblur="if(this.value == '') {this.value=this.defaultValue}" onkeyup="keyUp();" maxlength="14" title="12-123-123-123" required>
                            
                                                             </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" name="pass" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                                             </div>
                                                            <div class="form-group">
                                                                <label>I'm adult</label>
                                                                <input type="checkbox" name="check" class="form-checkbox" required>
                                                             </div>
                                                            <button type="submit" class="btn btn-primary">Register</button>
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
                            <a href="login.php" style="--i: 0.25s;">Login</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>
</html>
