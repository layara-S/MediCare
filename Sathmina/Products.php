<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="style (2).css">
 <link rel="stylesheet" href="products.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script>
    function handleButtonClick(id) {
        // Perform actions based on the passed ID
        console.log("Button clicked with ID:", id);

        // Example: Redirect to a URL with the ID as a parameter
        window.location.href = "example.com?id=" + id;
    }
</script>
<title>MediCare</title>

</head>
<body class="productbody">
<section id="header">
   <a href="#"><img src="Images/logo.png" width="175" alt="pharmacy logo"></a>

    <div id>
        <ul id="navbar">
        
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Shop</a></li>
        <li><a href="#services">About Us</a></li>
        <li><a href="#about">Contact Us</a></li>
        <li><a href="#contact">Contact</a></li>
        <li id="search"><input type="text" placeholder="Search Produtcs.." name="search"></li>
        <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></li> 
        <li><a href="user.html"><i class="fa fa-user" aria-hidden="true"></i></a></li></nav></section>
    </ul>
    <div id="categorystyle">
        <ul id="navbar">
            <li><a href="#">Health and Personal Care</a></li>
            <li><a href="#">Diet & Nutrition</a></li>
            <li><a href="#">Medical Equipments</a></li>
            <button id="upload-pres" onclick="window.location.href='uploadp.html'">Upload Prescription</button>
        </ul>
    </nav>

</div>
</section>


<!-- Hero-->

<section class="hero">
    <div class="hero-content">
      <h1>Welcome to Medicare Pharmacy</h1>
      <p>Your trusted source for high-quality medications </p>
    </div>
  </section>



  <!--- Body-->

  <section class="featured">
    <h2 >Featured Products</h2>
    <div class="featured-products">
        <div class="product">
            <img src="Images/product7.jpg" alt="Product Image 1">
            <p>Rs.300</p>
            <p>Centrum Adult 50+, World's No.1 Multivitamin with Calcium, Vitamin D3 & 21 other Nutrients</p>
            <button class="buy-button" onclick="handleButtonClick('product1');">Buy Now</button>  
                      <button id="addtocart" >Add to cart</button>
                
        </div>
        <div class="product">
            <img src="Images/product8.jpg" alt="Product Image 2">
            <p>Rs.750</p>
            <p>Himalaya Ashvagandha General Wellness Tablets</p>
            <button class="buy-button" onclick="handleButtonClick('product2');">Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
        <div class="product">
            <img src="Images/product9.jpg" alt="Product Image 3">
            <p>Rs.500</p>
            <p>
                Curkey Pastilles for Quick Relief from Sore Throat from Natural Curcumin Extract from Turmeric</p>
                <button class="buy-button" onclick="handleButtonClick('product3');">Buy Now</button>            
                <button id="addtocart" >Add to cart</button>
            </div>
        <div class="product">
            <img src="Images/product10.jpg" alt="Product Image 4">
            <p>Rs.2500</p>
            <p>Mini First Aid Kit Travel Pouch Medicine Storage Bag for Outdoor Medical Bag Emergency Survival</p>
            <button class="buy-button" onclick="handleButtonClick('product4');">Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
    </div>
    </div>
</section>
<section class="new-products">
    <h2>New Products</h2>
    <div class="new-products-wrapper">
        <div class="product">
            <img src="https://unionchemistspharmacy.lk/wp-content/uploads/2022/11/Panadol-Tablets.jpg" alt="Product Image 5">
            <p>Rs.100</p>
            <p>Paracetamol </p>
            <button  onclick="window.location.href='../chanuda/product.php'" class="buy-button" onclick="handleButtonClick('product5');"> Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
        <div class="product">
            <img src="Images/product4.png" alt="Product Image 6">
            <p>Rs.5000</p>
            <p> Cetaphil Bright Healthy Radiance Brightness Reveal Creamy Cleanser -100 gm</p>
            <button class="buy-button" onclick="handleButtonClick('product6');">Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
        <div class="product">
            <img src="Images/product6.jpg" alt="Product Image 7">
            <p>Rs.150</p>
            <p>Moov Pain Relief Cream – 30g</p>
            <button class="buy-button" onclick="handleButtonClick('product7');">Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
        <div class="product">
            <img src="Images/product3.jpg" alt="Product Image 8">
            <p>Rs.500</p>
            <p>METFORM 500mg Tablet 20's</p>
            <button class="buy-button" onclick="handleButtonClick('product8');">Buy Now</button>            
            <button id="addtocart" >Add to cart</button>
        </div>
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