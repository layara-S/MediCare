<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="ShoppingCart.css">
  <link rel="stylesheet" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MediCare | Shopping Cart </title>

 
</head>
<body>
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

    <section class="sayumi">
        <div class="hero-content">
        </div>
    </section>

    <hr>

    <center>
    <section class="cart">
        <h2> Shopping Cart </h2>

    </section> 
    </center>

    <table>
    <thead>
        <tr>
            <th>Item ID</th>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>  
        
    <?php

$sql1 ="SELECT * FROM orders";
$result1 = mysqli_query($CON, $sql1);

if ($result1) {
    while ($row1 = mysqli_fetch_array($result1)) {
        $order = $row1['OrderID'];
    }
}


$sql = "SELECT * FROM cart WHERE OrderID = '$order'";
$result = mysqli_query($CON, $sql);
$Total = 0;

if (!$result) {

    $error_message = "Error executing query: " . mysqli_error($CON);
 
    echo "Error: " . $error_message;
} else {
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through the rows and display data
        while ($row = mysqli_fetch_assoc($result)) {
            $ID = $row['ID'];
            $OrderID = $row['OrderID'];
            $ProductName = $row['ProductName'];
            $ProductPrice = $row['ProductPrice'];
            $Quantity = $row['Quantity'];
            $Subtotal = $Quantity * $ProductPrice;
            $Total += $Subtotal;

            echo ' <tr>
                        <td>'.$ID.'</td>
                        <td>'.$OrderID.'</td>
                        <td>'.$ProductName.'</td>
                        <td>'.number_format($ProductPrice,2).'</td>
                        <td>'.$Quantity.'</td>
                        <td>'.number_format($Subtotal,2).'</td>
                        <td> <button> <a href="shoppingcartdelete.php?id='.$ID.'" style="text-decoration:none; color:red;"> DELETE </a> </button> </td>
                        <td> <button> <a href="shoppingcartupdate.php?id='.$ID.'" style="text-decoration:none"> UPDATE </a> </button> </td>
                        </tr>';
        }
    } else {
        // No rows returned
        echo "<tr><td colspan='5'>No data found in the cart.</td></tr>";
    }
}
?>
    </tbody>
</table>

  

    <!--Cart Total-->


    <div class="CartTotalBox">
        <h1> <b> Cart Total : </b> </h1>  

        <?php
        echo '<h1>'.number_format($Total,2).'</h1>';
        
        ?> 

    </div>
    <br>

    <button class="custom-button"> <a href="../layara/payment.php" style="text-decoration:none;"> Proceed to checkout </a> </button>


     <!-- Footer -->

    <br> 
    <br>

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