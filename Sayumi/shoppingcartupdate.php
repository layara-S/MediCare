<?php 

    include "connection.php";

    $id = $_GET['id'];
    $sql = "select * from cart WHERE `ID` = $id";
    $result = mysqli_query($CON, $sql);
    $row = mysqli_fetch_assoc($result);

    $ID= $row['ID'];
    $OrderID= $row['OrderID'];
    $ProductName= $row['ProductName'];
    $ProductPrice= $row['ProductPrice'];
    $Quantity= $row['Quantity'];

    if (isset($_POST['submit'])){
        $NewOrderID= $_POST['orderid'];
        $NewProductName= $_POST['productname'];
        $NewProductPrice= $_POST['productprice'];
        $NewQuantity= $_POST['quantity'];

        $sql="update cart set
        ID = $id, 
        OrderID = '$NewOrderID',
        ProductName = '$NewProductName',
        ProductPrice = '$NewProductPrice',
        Quantity = '$NewQuantity' 
        where ID = $ID ";

        $result = mysqli_query($CON, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:shoppingCart.php');
    } else {
        echo "ERROR!!";
        //die(mysqli_error($con));
    }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="shoppingcartupdate.css">
 <title>MediCare | Shopping Cart </title>
    <title>Update Cart Item</title>
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
            <li id="search"><input type="text" placeholder="Search Produtcs.." name="search"></li>
            <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li> 
            <li><a href="user.html"><i class="fa fa-user" aria-hidden="true"></i></a></li></nav>
        </ul>

    </div>
    </section>
    <h2>Update Cart Item</h2>
    <form method="POST" name="myform" target="_blank">
        <label for="orderid">Order ID:</label><br>
        <input type="text" id="orderid" name="orderid" value="<?php echo $OrderID; ?>"><br>
        
        <label for="productname">Product Name:</label><br>
        <input type="text" id="productname" name="productname" value="<?php echo $ProductName; ?>"><br>
        
        <label for="productprice">Product Price:</label><br>
        <input type="text" id="productprice" name="productprice" value="<?php echo $ProductPrice; ?>"><br>
        
        <label for="quantity">Quantity:</label><br>
        <input type="text" id="quantity" name="quantity" value="<?php echo $Quantity; ?>"><br><br>
        
        <input type="submit" name="submit" value="Update">
        <br>  <br>
    </form>
</body>
</html>

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