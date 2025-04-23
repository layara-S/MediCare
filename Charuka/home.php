<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


       <section id="header">
   <a href="#"><img src="logo.png" width="175" alt="pharmacy logo"></a>

    <div >
        <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="Sathmina/products.html">Shop</a></li>
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
      <p>Welcome Back </p>
    </div>
  </section>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
   </div>

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
        <h3>Quick Links</h3>
        <ul>
            <li><a href="../layara/privacy.html">Privacy Policy</a></li>
            <li><a href="../layara/terms.html">Terms and Conditions</a></li>
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