<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
 <meta charset="UTF-8">
  <link rel="stylesheet" href="paymentDisplay.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MediCare | Billing details </title>
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
    <section class="details">
        <h2> Billing Details </h2>
    </section> 

    <table>
    <thead>
        <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Delivery Address </th>
            <th>City</th>
            <th>Country</th>
            <th>Contact Number</th>
        </tr>
    </thead>
    <tbody>
        <?php 




        // Query to retrieve cart data
$sql1 = "SELECT * FROM payment";
$result1 = mysqli_query($CON, $sql1); 

if ($result1){
    while($row1 = mysqli_fetch_array($result1)) {
        $username = $row1['Username'];
    }
    }


// Query to retrieve cart data
$sql = "SELECT * FROM payment WHERE Username = '$username'";
$result = mysqli_query($CON, $sql);











// Check if the query execution failed
if (!$result) {
    // Query execution failed, handle the error
    $error_message = "Error executing query: " . mysqli_error($CON);
    // You can log the error, redirect the user, or display a message
    echo "Error: " . $error_message;
} else {
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through the rows and display data
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['Username'];
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $address = $row['Address'];
            $city = $row['City'];
            $country = $row['Country'];
            $contact = $row['ContactNumber'];

            

            echo ' <tr>
                        
                        <td>'.$username.'</td>
                        <td>'.$firstname.'</td>
                        <td>'.$lastname.'</td>
                        <td>'.$address.'</td>
                        <td>'.$city.'</td>
                        <td>'.$country.'</td>
                        <td>'.$contact.'</td>
                        <td> <button> <a href="paymentDelete.php?userName='.$username.'" style="text-decoration:none"> DELETE </a> </button> </td>
                        <td> <button> <a href="paymentUpdate.php?userName='.$username.'" style="text-decoration:none"> UPDATE </a> </button> </td>

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
