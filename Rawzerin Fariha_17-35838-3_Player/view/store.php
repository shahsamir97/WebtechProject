<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/store_style.css">

</head>
<body>
<?php
session_start();
require  "../controller/store_controller.php";

$products = getAllProducts();
include "../view/header.php";
?>
<div class="head-line">
    <h2>Store</h2>
    <hr>
</div>
<div class="product-list">
    <div class="row">
        <?php foreach ($products as $key => $product): ?>
            <div class="column">
                <div class="card">
                    <div onclick="goToProductDetails(<?php echo $product['id']?>)">
                    <img class="pImg" src="<?php echo $product['imgUrl'] ?>" alt="Product Photo" height="200"/>
                    <h4><?php echo $product['productName'] ?></h4>
                    <h3>BDT <?php echo $product['price']?></h3>
                    </div>
                    <button class="addToCart-button" id="addToCart">Add To Cart</button>
                    <a href="#buyNow"><button class="buyNow-button">Buy Now</button> </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<footer>
    <?php include "../view/footer.php" ?>
</footer>
<script type="text/javascript" src="../scripts/store.js"></script>
</body>
</html>
