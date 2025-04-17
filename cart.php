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
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
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

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-timee-circle"></a></i></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-timee-circle"></a></i></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-timee-circle"></a></i></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
                
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