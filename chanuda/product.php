<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>MediCare | Product</title>
</head>

<body>
    <?php
    require 'config.php';
    ?>
     
    <!-- header -->
    <section id="header">
        <a href="#"><img src="Images/logo.png" width="175" alt="pharmacy logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
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

    <!---Product--- -->
    <section class="product-hero">
        <div class="left-product">
            <a href="https://unionchemistspharmacy.lk/wp-content/uploads/2022/11/Panadol-Tablets.jpg"><img
                    src="https://unionchemistspharmacy.lk/wp-content/uploads/2022/11/Panadol-Tablets.jpg" alt=""
                    class="hero-img"></a>
            <br>
            <a
                href="https://i-cf65.ch-static.com/content/dam/global/panadol/en_LK/760x820/300x300Panadol.png?auto=format"><img
                    src="https://i-cf65.ch-static.com/content/dam/global/panadol/en_LK/760x820/300x300Panadol.png?auto=format"
                    alt="" class="pimg"></a>
            <a
                href="https://www.sunonline.lk/cdn/shop/products/GLX-PT-240-01_e013ae25-a8b6-46df-ad60-46b2d771bfa8_800x.jpg?v=1601359333"><img
                    src="https://www.sunonline.lk/cdn/shop/products/GLX-PT-240-01_e013ae25-a8b6-46df-ad60-46b2d771bfa8_800x.jpg?v=1601359333"
                    alt="" class="pimg"></a>
            <a href="https://www.grocerylanka.com/cdn/shop/products/Panadol--BK_700x700.jpg?v=1643375348"><img
                    src="https://www.grocerylanka.com/cdn/shop/products/Panadol--BK_700x700.jpg?v=1643375348" alt=""
                    class="pimg"></a>

        </div>
        </div>
        <div class="right-product">
            <h2 class="pname">Product Name</h2>
            <p class="price">Rs. 100.00</p>
            <p>Quantity:
                <button class="minquan">-</button>
                <input type="number" id="quantity" value="01" min="01">
                <button class="plusquan">+</button>

                <button class="cart-button">Add to cart <i class="fa-solid fa-cart-plus"></i></button>
                <button class="buy-button">Buy Now <i class="fa-solid fa-cart-shopping"></i></button>
            </p>

            <div class="product-descrip">
                <h3>Description</h3>
                <p>Welcome to MediCare Pharmacy, where we bridge the gap between convenience and healthcare excellence in the digital age. In an era where technology revolutionizes every aspect of our lives, healthcare stands as a prime beneficiary of these advancements. Our pharmacy stands at the forefront of this digital healthcare revolution, offering a seamless experience that prioritizes simplicity and accessibility.

In today's fast-paced world, time is of the essence. With MediCare Pharmacy, gone are the days of rushing to the local pharmacy amidst busy schedules. Our user-friendly interface ensures a hassle-free experience, allowing visitors to register and create their own accounts effortlessly. Once registered, users can conveniently upload their prescriptions, granting them access to a plethora of healthcare solutions with just a few clicks.

At MediCare Pharmacy, we understand the importance of comprehensive healthcare. That's why our extensive catalog encompasses a wide range of products, including prescription medications, over-the-counter essentials like Panadol, as well as skincare, haircare, and sanitary products. With us, users can find everything they need under one virtual roof, eliminating the need for multiple trips to various stores.

But convenience doesn't mean compromising on quality. Our team meticulously verifies each prescription to ensure accuracy and safety before swiftly delivering medications right to users' doorsteps. Whether it's managing chronic conditions or addressing acute ailments, we prioritize your well-being every step of the way.

MediCare Pharmacy isn't just a pharmacy; it's your trusted partner in health, committed to making healthcare accessible, convenient, and reliable. Join us on this journey towards a healthier, happier you.</p>

            </div>
        </div>
    </section>

    <br>
    <center>
        <section class="similar">
            <h1 style="text-align:left;font-weight:800;">Similar Products</h1>
    
    <div class=" similar-products">
                <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/22962135/3634764310.jpg" alt="" class="simImg">
                <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/22962135/3634764310.jpg" alt="" class="simImg">
                <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/22962135/3634764310.jpg" alt="" class="simImg">
                </div>

        </section>
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

        <!-- Copyright Footer -->
        <footer class="copyright-footer">
            <div class="container">
                <p>&copy; 2024 MediCare Pharmacy. All Rights Reserved.</p>
            </div>
        </footer>

        <script src="Javascript/script.js"></script>
</body>

</html>

