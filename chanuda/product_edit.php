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
    <title>MediCare | Edit Products</title>
</head>
<body>
    <?php require 'config.php'; ?>

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
                <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="user.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
  
    <center>
        <h2>Product List</h2>
        <hr width="10%" color="blue"><br>
        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            $result = mysqli_query($con, "SELECT * FROM product");
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Product_ID'] . "</td>";
                echo "<td>" . $row['Product_Name'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td><img src='uploaded_img/" . $row['Image1'] . "' width='100'></td>";
                echo "<td>
                    <div style='display:flex;'>
                        <form id='editForm' action='Product_edit_update.php' method='get'>
                            <input type='hidden' name='Product_ID' value='" . $row['Product_ID'] . "'>
                            <button type='submit' class='button' style='background-color:#86a2ca;border-radius:5px; border:none; padding:10px 10px;'>Edit Listing <i class='fa fa-edit'></i></button>
                        </form>  
                        <form id='deleteForm' action='Product_edit_delete.php' method='get'>
                            <input type='hidden' name='Product_ID' value='" . $row['Product_ID'] . "'>
                            <button type='button' class='button' onclick='confirmDelete(this)' style='background-color:red;border-radius:5px; border:none; padding:10px 10px;'>Delete Listing <i class='fa fa-trash'></i></button>
                        </form><br>
                    </div>  
                </td>"; 
                echo "</tr>";
            }
            ?>
        </table>

        <button style="background-color:#4CAF50; border-radius:5px; border:none; padding:10px;"><a href="input.php" style="text-decoration:none; color:white;">Add new products.</a></button>
    </center>
    <br>

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

    <!-- JavaScript for Confirmation -->
    <script>
        function confirmDelete(button) {
            if (confirm("Are you sure you want to delete this listing?")) {
                button.parentNode.submit();
            }
        }
    </script>
</body>
</html>
