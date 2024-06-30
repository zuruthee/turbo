<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="design.js"></script>
        <style>
            
            #result{
                color:red;
                font-weight:600;
                position:relative;
                top:15px;
                padding-right:160px;
            }
            
        </style>

    </head>
    <body>
        <header>
            <div class="topnav">
                    <img src="logo.png" class="logo">
                    <a href="Home.html">Home</a>
                    <a href="AboutUs.html">About Us</a>
                    <a href="VehicleDetails">Vehicle Details</a>
                    <a href="Contact">Contact</a>
                    <a href="Admin">Admin</a>
                    <div class="right-links">
                <a href="index.php">Sign Up</a>
                <a href="indexl.php">Login</a>
                    </div>
                <h1 id="system">Turbo Vehicle Rental</h1>
            </div>
        </header>
         
       <div class="ptr" align="center">
            <div class="container">
                <img class="car" src="7ef6c623c08a6ab2dd34578322c7014b.jpg" >
            
                <form method="post" action="signup.php" class="form" name="formfill" onsubmit="return validation()"><br><br>
                <fieldset align="center" id="fieldset">
                    <legend><h1 id="heading"> Sign Up </h1></legend><br><br>
                    <p id="result"></p><br>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="fname" name="fname" placeholder="First Name" ><br><br>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" ><br><br>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email Address" ><br><br>
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" ><br><br>
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="confirm-password" name="cpassword" placeholder="Re-Enter Password" ><br><br><br><br>
                        <a href="#" class="terms"> Terms & Conditions <br><br><br></a>
                        <input type="submit" id="sub1" value="Signup" name="submit"><br><br><br>
                        <p><b id="ap">Already have an account?</b><a href="indexl.php" id="sp"> Log In </a></p>                </fieldset><br>
                </form>
            </div> 
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-content">
                    <h3 style="color: white;">Contact Us</h3>
                    <p class="ftcn">Email:turbo@gmail.com.com</p>
                    <p class="ftcn">Phone:+121 56556 659499</p>
                    <p class="ftcn">Address:2nd street, wellawatta, Colombo</p>
                </div>
                <div class="footer-content">
                    <h3 style="color: white;">Quick Links</h3>
                     <ul class="list">
                        <li><a href="">Terms and Condition</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">About Us</a></li>
                     </ul>
                </div>
                <div class="footer-content">
                    <h3>Follow Us</h3>
                    <ul class="social-icons">
                     <li><a href="www.facebook.com" ><img src="FB.svg"></a></li>
                     <li><a href="www.instagram.com"><img src="insta.svg"></a></li>
                     <li><a href="www.youtube.com" ><img src="tube.svg"></a></li>
                    </ul>
                    <h3 style="color: white;">Subscribe for news</h3>       
                </div>
            </div>
            <div class="bottom-bar">
                <p>&copy; 2024 Turbo . All rights reserved</p>
            </div>
        </footer>
     </body>
</html>