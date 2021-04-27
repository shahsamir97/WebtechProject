<?php

require "../model/db_connect.php";

function registerUser($email, $password, $name,$phone, $region, $dob, $gender, $imgUrl){
    $conn = db_conn();
    $query = "INSERT INTO player (id, email, password, name, phone, region, dob, gender, imgUrl) values (UUID_SHORT(), '$email', '$password', '$name', '$phone','$region', '$dob', '$gender','$imgUrl')";
    try{
         $conn->exec($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $conn = null;
     return true;
}

function loginUser($email, $password){
    $conn = db_conn();
    $query = "SELECT * FROM player where email='$email' and password='$password'";
    try{
        $result = $conn->query($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $rows;
}

function checkEmailExists($email){
    $conn = db_conn();
    $query = "select email from player where email='$email'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        if (sizeof($rows) > 0){
            //when email exists
            return true;
        }else{
            //when email doest not exits
            return false;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}


function retrieveUserId($email){
    $conn = db_conn();
    $query = "SELECT id FROM player where email='$email'";
    try{
        $result = $conn->query($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $rows[0]['id'];
}
