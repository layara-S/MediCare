<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/input.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>MediCare | Input Products</title>
</head>
<body>
<?php
    session_start();
    require 'config.php';

    // Check if user ID is provided
    if (isset($_GET['Product_ID'])) {
        $Product_ID = $_GET['Product_ID'];

        $result = mysqli_query($con, "SELECT * FROM product WHERE Product_ID = $Product_ID");
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

?>

    <!-- header -->
    <section id="header">
        <a href="#"><img src="Images/logo.png" width="175" alt="pharmacy logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#about">Contact Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li id="search"><input type="text" placeholder="Search Produtcs.." name="search"></li>
                <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                <li><a href="user.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                </nav>
            </ul>

        </div>
    </section>
    <center>
    <section id="form">
        <div class="product_Form">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <label for="Pid">New Product ID:</label>
                <input type="text" id="Pid" name="Pid" required value="<?php echo $row['Product_ID']; ?>"><br><br>    
            
                <label for="Pname">New Product Name:</label>
                <input type="text" id="Pname" name="Pname" required value="<?php echo $row['Product_Name']; ?>"><br><br>

                <label for="Pstock">New Stock:</label>
                <input type="text" id="Pstock" name="Pstock" required value="<?php echo $row['Quantity']; ?>"><br><br>

                <label for="Description">New Description:</label>
                <input type="text" id="Description" name="Description" required value="<?php echo $row['Description']; ?>"><br><br>

                <label for="Price">New Price:</label>
                <input type="text" id="Price" name="Price" required value="<?php echo $row['Price']; ?>"><br><br>

                <label>Add New Main image:</label><br>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="Pimage1" class="box" value="<?php echo "<img src='uploaded_img/". $row['Image1'] . "' width='100'>"; ?>
"><br><br>

                <label>Add New images:</label><br>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="Pimage2" class="box"><br>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="Pimage3" class="box"><br>
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="Pimage4" class="box"><br><br>

                <input type="submit" class="button" name="add Product" value="Update Product" style=" border-radius:5px;padding:10px 10px; background-color:#86a2ca;">
            </form>
        </div>
    </section>
    </center>
<?php
        } else {
            echo "Product not found";
        }
    } else {
        echo "Error: Product ID not provided";
    }
?>

<section class="allproduct">\
    <center>
    <a href="product_edit.php"><button style="text-align:center;padding:10px 10px 10px 10px;border-radius:10px;cursor:pointer; ">View All Products</button></a><br><br>
    </center>
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
