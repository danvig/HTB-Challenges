<!DOCTYPE html>
<html lang="en">
    <!--Gideon, I've got one of my new front end guys working on the rest of the site, but here's what we have so far. Customer portal still under development-->
    <head>
        <!-- DON'T INDEX ME WHILE I'M BEING DEVELOPED -->
        <meta name="robots" content="noindex">
        
        <!-- Some Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Page Title -->
        <title>Allsafe Cybersecurity - Corporate Defence and Web Design</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="assets/img/logo.png" width=150>
                    </div>
                    <div class="col-sm" style="padding-top:9px;">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Welcome -->
        <div class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-sm" style="padding-top:260px;">
                        <h1>Allsafe Cybersecurity</h1>
                        <p style="font-size:20px;">Cybersecurity and Web Design services with the upmost of privacy in mind with every client.</p>
                        <a href="#about"><button class="view">View Services</button></a>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
            </div>
        </div>

        <!-- Consultation -->
        <div class="consult">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p>Would you like to speak with one of our consultants?</p>
                    </div>
                    <div class="col-sm">
                        <a href="#"><button class="consultation">REQUEST A CONSULTATION</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div name="about" id="about" class="about">
            <center>
                <img src="assets/img/logo.png" width=350>
                <p>We are New York City's leading Cybersecurity Contractor with over 30 years under our belt.</p>
                <hr>
                <br>
                <!-- Grid -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <img src="assets/img/icons/cloud.png" width=100>
                            <h3>Cloud Computing</h3>
                            <p>Bespoke business solutions hosted on secure cloud platforms.</p>
                            <p><a href="#">Read More</a></p>
                        </div>

                        <div class="col-sm">
                            <img src="assets/img/icons/secure.png" width=100>
                            <h3>Cyber Defence</h3>
                            <p>Cyber analysis, monitoring and secure solutions for your business.</p>
                            <p><a href="#">Read More</a></p>
                        </div>

                        <div class="col-sm">
                            <img src="assets/img/icons/education.png" width=100>
                            <h3>Cybersecurity Education</h3>
                            <p>Educating younger minds on cybersecurity and internet safety.</p>
                            <p><a href="#">Read More</a></p>
                        </div>

                        <div class="col-sm">
                            <img src="assets/img/icons/website.png" width=100>
                            <h3>Secure Web Design</h3>
                            <p>Secure web design solutions with the upmost of privacy in mind.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>

                    <br><br>
                    
                    <div class="row">
                        <div class="col-sm">
                            <img src="assets/img/gideon.jpg" width=200>
                        </div>
                        <div class="col-sm" style="padding-top:45px;">
                            <p>"Security is Priority One. Everything we do is with our clients at the forefront of our minds. If our client isn't safe, we're doing something wrong"</p>
                            <!-- "gideon" -->
                            <right><i>- Gideon Goddard, CEO</i></right>
                        </div>
                    </div>
                </div>
            </center>
        </div>

        <!-- Contact/Find Us -->
        <div name="contact" id="contact" class="contact">
            <div class="container">
                <center><h2>Contact Us</h2></center>
                <hr>
                <div class="row">
                    <div class="col-sm">
                        <center>
                            <iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=655%203rd%20Avenue,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </center>
                    </div>
                    <div class="col-sm">
                        <img src="assets/img/building.jpg">
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial -->
        <div class="testimonial">
            <i>
                "We have been using Allsafe since our inception and we have never looked back. Allsafe has kept our systems secure for 30 years and their team of Engineers are experts in their field"
                <br>
                -Tyrell Wellick, CTO - E Corp
            </i>
        </div>

        <!-- Footer -->
        <footer>
            <center>
                <br><br>
                <p>Copyright © 2021 - Allsafe Cybersecurity. All rights reserved.</p>
                <p>Site Design by <a href="#">Big Apple Web Dev</a></p>
                <!-- <p><small><a href="login.php">Access Customer Portal</small></p> IN DEVELOPMENT -->
                <br>
            </center>
        </footer>
    </body>
</html>