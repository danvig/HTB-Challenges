<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- DON'T INDEX ME WHILE I'M BEING DEVELOPED -->
        <!-- 15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225 -->
        <meta name="robots" content="noindex">
        
        <!-- Some Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Page Title -->
        <title>Allsafe Customer Portal - Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/login.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <br><br>
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <img src="assets/img/logo.png" width=200>
                        </div>
                        <div class="col-sm">
                            <br><br>
                            <p style="text-align:right;">Allsafe Cybersecurity - Customer Portal</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <br>
            <div class="login">
                <hr class="block" style="padding-bottom:20px;">
                <hr class="block" style="padding-bottom:20px;">
                <div style="padding-right:250px; padding-left:250px;">
                    <h3 style="font-weight:300; font-size:25px;">Login</h3>
                    <p style="font-weight:200;">Please login to access your customer support portal. If you do not have a username, contact your system <a href="#">Administrator</a></p>
                </div>

                <!-- Login Form -->
                <center>
                <div class="login-block">
                    <form method="POST">
                        <br>
                        <div>
                            <label for="username" style="font-weight:200;">Username:</label>
                            <br>
                            <input type="text" name="username" style="border:0.3px solid black;">
                        </div>
                        <br>
                        <div>
                            <label for="password" style="font-weight:200;">Password:</label>
                            <br>
                            <input type="password" name="password" style="border:0.3px solid black;">
                        </div>
                        <div>
                            <br>
                            <input type="submit" name="submit" id="submit" value="Submit">
                            <br><br>
                        </div>
                    </form>
                </div>
                </center>
            </div>

        <footer>
            <br><br>
            <p>Copyright © 2021 - Allsafe Cybersecurity. All rights reserved.</p>
        </footer>

        <?php
            if(isset($_POST['submit'])) {
                $pword = hash('sha256', $_POST['password']);
                $username = $_POST['username'];
                
                if(empty($_POST['username'])) {
                    echo '<script>alert("Enter a username")</script>';
                }
                else if(empty($_POST['password'])) {
                   echo '<script>alert("Enter a password")</script>';
                }
                else if($username === 'gideon' && $pword === '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225') {
                    echo '<script>alert("HTB{4lls4f3_br34ch3d}")</script>';
                }
                else {
                    echo '<script>alert("Try again")</script>';
                }
            }
        ?>
    </body>
</html>