<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="../styles/productView_style.css"/>
    <script type="text/javascript" src="../scripts/product_view.js"></script>
</head>
<body>
<?php
session_start();

if (!isset($_GET['productId'])){
    echo "Invalid Url";
    return;
}

include "../view/header.php";
require "../controller/product_controller.php";

$product = getProductDetails($_GET['productId']);
?>
   <div class="flex-container">
       <div class="content">
          <div class="product-img">
               <img src="<?php echo $product['imgUrl']?>">
          </div>
           <div class="product-info">
               <h2><?php echo $product['productName'].""?></h2>
               <h3 class="price-text">BDT <?php echo $product['price'].""?></h3>
               <h3 class="underlined-word">Details</h3>
               <p><?php  echo $product['ProductDetails'];?></p>
               <a href="../view/edit_product.php?productId=<?php echo $product['id']?>" class="rectangular-button action-button-margin" id="editButton">Edit Product</a>
           </div>
       </div>
   </div>

</body>
</html>