<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="header">
        <a href="#"><img scr="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>    
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header">

        <h2>#let's_talk</h2>

        <p>LEAVE A MESSAGE, We love to hear from you!</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or cantact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li class="fa fa-map"></li>
                <p>56 Glassford Street Glasgoew NewYork</p>
            </div>
            <div>
                <li class="fa fa-envelope"></li>
                <p>contact@gmail.com</p>
            </div>
            <div>
                <li class="fa fa-phone-alt"></li>
                <p>contact@gmail.com</p>
            </div>
            <div>
                <li class="fa fa-clock"></li>
                <p>Monday to Friday: 10:00 am to 4:00 pm</p>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign up for Newsletter</h4>
            <p>Get E-Mail updates about our latest shop and <span>special offers</span>
            </p>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </div>
    </section>
    
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Phone:</strong> +49 1578 2340502</p>
            <p><strong>Hours:</strong> 10:00 am - 06:00 pm, Mon - Fr</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col payment">
            <h4>Our Payment methods</h4>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2025, pr1me - WebShop</p>
        </div>

    </footer>

    <script src"script.js"></script>
</body>
</html>