<?php

    include 'config.php';
    session_start();
    $user_id= $_SESSION['user_id'];

    if(!isset($user_id)){
        header('location:login.php')
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="userprofile.css">
 <title>MediCare</title>
</head>
<body>
<section id="header">
   <a href="#"><img src="logo.png" width="175" alt="pharmacy logo"></a>

    <div >
        <ul id="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Shop</a></li>
        <li><a href="Aboutus.html">About Us</a></li>
        <li><a href="#about">Contact Us</a></li>
        <li><a href="#contact">Sayumi</a></li>
        <li id="search"><input type="text" placeholder="Search Produtcs.." name="search"></li>
        <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li> 
        <li><a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a></li></nav></section>
    </ul>

</div>
</section>

<div class="userprofile">
    

    <?php

            $select=mysqli_query($conn, SELECT*FROM 'user_account'  WHERE id ='$user_id'  )
            or die('query failed');

            if(mysqli_num_rows($select) > 0){
                $fetch=mysqli_fetch_assoc($select);
            }

            <h3><?php echo $fetch['Username']; ?></div></h3>

    ?>


</div>



<!-- Hero-->

<section class="hero">
    <div class="hero-content">
      <h1 >Pharmaceutical Online Store</h1>
      <p>Your one-stop destination for all pharmaceutical needs. </p>
    </div>
  </section>









  <!-- Footer -->
<footer class="footer">
    <div class="logo-section">
        <img src="logo.png" width="150">
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