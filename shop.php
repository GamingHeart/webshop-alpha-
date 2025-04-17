<?php

include("connection.php"); 

$sql = "SELECT id, name, marke, preis, bild FROM produkte ORDER BY id DESC";
$stmt = $con->prepare($sql);
$produkte = $stmt->fetchAll(PDO::FETCH_ASSOC);

$host = 'localhost';
$dbname = 'webshop';
$user = 'root';
$pass = '';

try {

    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
    die();
 }
?>

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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="contact.php">Contact</a></li>
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

        <h2>#stayhome</h2>

        <p>Save more with coupons & up to 70% off!</p>

    </section>
    
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproducts.php';">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        

            <div id="product1" class="section-p1">
            <?php foreach ($produkte as $produkt): ?>
            <div class="pro" onclick="window.location.href='sproducts.php?id=<?php echo $produkt['id']; ?>';">
                <img src="img/<?php echo htmlspecialchars($produkt['image']); ?>" alt="">
                <div class="des">
                    <span><?php echo htmlspecialchars($produkt['brandname']); ?></span>
                    <h5><?php echo htmlspecialchars($produkt['title']); ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo number_format($produkt['price'], 2, ',', '.'); ?>$ </h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        <?php endforeach; ?>
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