<?php
require  '../model/db_connect.php';

function retrieveAllProducts(){
    $conn = db_conn();
    $query = "select * from product";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function retrieveProductDetails($productId){
    $conn = db_conn();
    $query = "select * from product where id='$productId'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows[0];
    }catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function insertOrder(){
    $conn = db_conn();
    $query = "INSERT INTO orders (id, email, password, name, phone, region, dob, gender, imgUrl) values (UUID_SHORT(), '$email', '$password', '$name', '$phone','$region', '$dob', '$gender','$imgUrl')";
    try{
        $conn->exec($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $conn = null;
    return true;
}