<?php include 'connection.php' ?>  <!-- connection file -->

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"     rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

  <link rel="stylesheet" href="ContactUs.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MediCare | Contact Us</title>
</head>
<body>

<script>
        
        function  phoneCheck()
        {
            let phone = document.getElementById("Contact").value;
            let regx = /^[0][0-9]{9}$/;
            if(regx.test(phone))
            {
                document.getElementById("Pnumber").style.visibility = "hidden";
                return true;
            }else
            {
                document.getElementById("Pnumber").style.visibility = "visible";
                return false;
            }
        }

        function emailCheck()
        {
            let  email = document.getElementById("Email").value;
            let regx = /[a-zA-Z0-9 _ \-]+[@][a-z]+[\.][a-z]{2,3}$/;
            if(regx.test(email))
            {
                document.getElementById("Pemail").style.visibility = "hidden";
                return true;
            }else
            {
                document.getElementById("Pemail").style.visibility = "visible";
                return true;
            }
        }
 
    </script>

    <!-- header -->
    <section id="header">
       <a href="#"><img src="Images/logo.png" width="175" alt="pharmacy logo"></a>

        <div >
            <ul id="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Shop</a></li>
            <li><a href="About us.html">About Us</a></li>
            <li><a href="#contactUs.html">Contact Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li> 
            <li><a href="user.html"><i class="fa fa-user" aria-hidden="true"></i></a></li></nav>
        </ul>

    </div>
    </section>


    <!-- Hero-->

    <section class="About-hero">
        <div class="hero-content">
          <h1>Contact Us.</h1>
          <p>Reach out and let's connect today.</p>
        </div>
      </section>

    <!-- Form-->

    <div class="form">
        <form action="Insert.contactus.php" method="POST">   <!-- Create of the CRUD php file -->
           <br> 
            <label for="UserName" class="label"> <b> User Name </b></label> <br>
            <input type="text" name="UserName" id="UserName"> <br> <br>

            <div class="Name">
                <div class="FirstName">
                    <label for="FirstName" class="label"> <b>First Name </b></label> <br>
                    <input type="text" name="FirstName" id="FirstName"> <br> <br>
                </div>

                <div class="LastName"> 
                    <label for="LastName" class="label"><b> Last Name </b> </label> <br>
                    <input type="text" name="LastName" id="LastName"> <br> <br>
                </div>
            </div>

            <div class="details">
                <div class="Email">
                     <label for="Email" class="label"> <b> Email Address </b> </label> <br>
                     <input type="email" name="Email" id="Email" oninput="emailCheck();"> <br> <br>
                     <p id="Pemail" style="color: red; visibility:hidden;">Enter a valid email</p>
                </div>

                <div class="Contact">
                    <label for="Contact" class="label"> <b>Contact Number</b> </label> <br>
                    <input type="text" name="Contact" id="Contact" oninput="phoneCheck();"> <br> <br>
                    <p id="Pnumber" style="color: red; visibility:hidden;">Enter a valid Phone number</p>
                </div>
            </div>

            <label for="Subject" class="label"> <b> Subject </b> </label> <br>
            <input type="text" name="Subject" id="Subject"> <br> <br>

            <label for="Message" class="label"> <b> Type Your Message Here! </b> </label> <br>
            <input type="text" name="Message" id="Message"> <br> <br>

            <br> <div class="buttons">
                <input type="submit" id="submit">
                
            </div>

        </form>
    </div>

    <br><hr><br>
  

    <!-- map -->
    <section class="map">
        <div class="left-map">
            <h2><u>Main Branch</u></h2>
            <p class="para">
                <i class="fa-solid fa-location-dot"></i>  123 / ABC Avenue, Colombo 01.<br><br>
                <i class="fa-solid fa-phone"></i>  0111 - 1101101<br><br>

                <i class="fa-solid fa-envelope"></i> 
 PharmacyPortal@gmail.com
            </p>
        </div>
        <div class="right-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.587103659373!2d79.9746923!3d6.9152691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1713425876312!5m2!1sen!2slk" width="600" height="450" style="border: 5px solid;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="logo-section">
            <img src="Images/logo.png" width="150">
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h3>Shopping</h3>
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <div class="footer-section contact-section">
                <h3>Contact Us</h3>
                <p>123 Pharmacy Street, City</p>
                <button class="contact-button">Contact</button>
            </div>
        </div>
    </footer>

    <!-- Copyright Footer -->
    <footer class="copyright-footer">
        <div class="container">
            <p>&copy; 2024 MediCare Pharmacy. All Rights Reserved.</p>
        </div>
    </footer>

    </body>
    </html>