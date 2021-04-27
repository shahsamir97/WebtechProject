<?php

require "../model/store_model.php";

function getAllProducts(){
    return retrieveAllProducts();
}

function getProductDetails($productId){
    return retrieveProductDetails($productId);
}

