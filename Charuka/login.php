<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // Use password_hash in the actual application
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];

        // Check if the user is an admin
        if ($email == 'admin@example.com' && $pass == md5('adminpassword')) {
            header('location: ../chanuda/input.php'); // Redirect to admin dashboard
            exit();
        } else {
            header('location: home.php'); // Redirect to home page for regular users
            exit();
        }
    } else {
        $message[] = 'incorrect email or password!';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">


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


<!-- Hero-->

<section class="hero">
    <div class="hero-content">
      <h1 >Pharmaceutical Online Store</h1>
      <p>Login to Access you info. </p>
    </div>
  </section>




   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">Register Now</a></p>
   </form>

</div>


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

</body>
</html>