<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'webshop');
$sql = "SELECT * FROM products WHERE featured=1";
$featured = $con->query($sql);

?>

<div class="col-md-2"></div>

<div class="pro-container">
            <div class="des">
                <h2 class="text-center">Product Details</h2>
                <?php
                     while($product = mysqli_fetch_assoc($featured)):


                ?>
                <div class="pro">
                    <h4><b> <?= $product['title'];?></b></h4>
                    <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
                    <p class="lprice"><b>$ <?= $product['price'];?></b></p>
                    <p class="desc"><b><?= $product['description'];?></b></p>
                    <p class="bname"><b><?= $product['brandname'];?></b></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>